<template>
    <ais-index
        :app-id="algoliaId"
        :api-key="algoliaKey"
        :query-parameters="{'page': page}"
        index-name="tweets"
        class="flex w-full">
        <ais-event-wrapper v-on:update="refreshTwitter" class="flex flex-wrap w-full">
        <div class="w-full md:w-3/4 pr-0 md:pr-6">
            <ais-results id="tweets" :stack="true" :results-per-page="2">
                <template slot-scope="{ result }">
                    <h2 class="text-lg leading-tight font-normal text-grey-darker mb-1">
                        <a class="no-underline text-grey-darkest" :href="result.author_twitter">&commat;{{ result.author }}</a>
                        - {{ result.posted_at.date | moment("from") }}
                    </h2>
                    <div class="flex flex-1">
                        <span 
                            class="text-grey-dark text-sm ml-3" 
                            v-for="tag in result.tags"
                            v-bind:key="tag.name">{{ tag.name }}</span>
                    </div>
                    
                    <div v-html="result.oembed"></div>
                    <hr class="border-b-2 border-grey-light"> 
                </template>
            </ais-results>

            <ais-no-results></ais-no-results>
          
            <div v-observe-visibility="loadMore"></div>
            
            <div class="flex">
                <div class="w-1/2 mt-0">
                    <ais-powered-by></ais-powered-by>
                </div>
                <div class="w-1/2 mt-0 text-right">
                    <ais-stats class="text-grey-dark text-sm"></ais-stats>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/4 pl-8 pl-12 mt-0 hidden md:block">
            <div class="bg-white border-l-2 border-grey-light pl-2 mb-4">
                <h2 class="pl-2 text-lg leading-tight font-normal text-grey-darkest uppercase mb-2">Search</h2>
                <ais-search-box>
                    <ais-input placeholder="Find a tip..." :autofocus="true" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 mb-3"></ais-input>
                </ais-search-box>

                <h2 class="pl-2 text-lg leading-tight font-normal text-grey-darkest uppercase mb-2">Filter</h2>
                <ais-refinement-list operator="and" attribute-name="tags.name" class="mb-2"></ais-refinement-list>

                <a class="pl-2 text-lg leading-tight font-normal text-grey-darkest uppercase mb-2 cursor-pointer" @click="refreshTwitter">Refresh</a>
            </div>
        </div>
        </ais-event-wrapper>
    </ais-index>
</template>

<style lang="scss">
.ais-refinement-list__item {
    padding-left: 0;
}

.ais-refinement-list__label {
    color: #606f7b;
}

.ais-refinement-list__checkbox {
    cursor: pointer;
    margin-right: 15px;
    position: relative;
    visibility: hidden;
}

.ais-refinement-list__checkbox:after {
    display: block;
    content: "";
    position: absolute;
    top: 0;
    right: -10px;
    visibility: visible;
    height: 15px;
    line-height: 1.15;
    width: 15px;
    text-align: center;
    border: 1px solid #dae1e7;
    border-radius: 0;
    background: white;
    cursor: pointer;
}

.ais-refinement-list__checkbox:checked:after {
    background: #606f7b;
}

blockquote.twitter-tweet {
    height: 150px;
    margin: 0 auto;
    position: relative;
    visibility: hidden;
}

blockquote.twitter-tweet:before {
    animation: spin 1.5s linear infinite;
    border: 10px solid #f3f3f3; /* Light grey */
    border-top: 10px solid #3498db; /* Blue */
    border-radius: 50%;
    content: "";
    display: block;
    height: 120px;
    left: 50%;
    margin: 15px;
    margin-left: -60px;
    position: absolute;
    top: 0;
    visibility: visible;
    width: 120px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>


<script>
    export default {
        props: ['algolia-id', 'algolia-key'],

        data: function () {
            return {
                page: 1
            }
        },

        methods: {
            loadMore: function (isVisible) {
                if (isVisible) {
                    this.page++;
                }
            },

            refreshTwitter: function () {
                twttr.widgets.load();
            }
        }
    }
</script>
