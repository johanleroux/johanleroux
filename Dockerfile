# Builder
FROM node:12.13-alpine as builder

WORKDIR /app

ADD . .

RUN npm run build

# Deployment Image
FROM nginx:alpine

COPY --from=builder /app/index.html /usr/share/nginx/html/index.html
COPY --from=builder /app/build.css /usr/share/nginx/html/build.css
COPY --from=builder /app/fonts /usr/share/nginx/html/fonts

CMD ["nginx", "-g", "daemon off;"]
