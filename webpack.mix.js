let mix = require("laravel-mix");
let tailwindcss = require("tailwindcss");
let glob = require("glob-all");
let PurgecssPlugin = require("purgecss-webpack-plugin");

class TailwindExtractor {
    static extract(content) {
      return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
    }
  }
  
mix.postCss('resources/assets/css/app.css', 'public/css', [
    tailwindcss('tailwind.js'),
]);

if (mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            new PurgecssPlugin({
                paths: glob.sync([
                    path.join(__dirname, "resources/views/**/*.blade.php"),
                    path.join(__dirname, "resources/js/**/*.vue")
                ]),
                extractors: [{
                    extractor: TailwindExtractor,
                    extensions: ["html", "js", "php", "vue"]
                }]
            })
        ]
    });
}

mix.version();