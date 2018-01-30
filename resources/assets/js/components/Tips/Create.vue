<template>
    <div class="mb-6">
        <div class="w-1/2 mb-3">
            <label 
                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                for="grid-twitter-id">
                Twitter ID
            </label>
            <input 
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 mb-3" 
                id="grid-twitter-id"
                type="text" 
                v-model="twitter_id"
                placeholder="957503604750823425">
        </div>
        <div class="w-1/2">
            <label 
                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                for="grid-tags">
                Tags
            </label>
            <input-tag 
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 mb-3" 
                id="grid-tags"
                placeholder="PHP, VueJS, Laravel..."
                validate="text" 
                :tags.sync="tags"></input-tag>
        </div>
        <div class="w-1/2">
            <button 
                class="bg-grey-lighter hover:bg-grey text-grey-darker font-semibold hover:text-white py-3 px-4 border border-grey-light hover:border-transparent rounded"
                @click="submitForm">
                Create
            </button>
        </div>

    </div>
</template>

<script>
    import InputTag from 'vue-input-tag'
    
    export default {
        components: {
            'input-tag': InputTag
        },

        data: function () {
            return {
                twitter_id: '',
                tags: []
            }
        },

        methods: {
            submitForm() {
                axios.post('/tips', {
                    twitter_id: this.twitter_id,
                    tags: this.tags
                })
                .then(response => {
                    this.twitter_id = '';
                    this.tags = [];
                    alert('Created!');
                })
                .catch(error => {
                    console.log(error.response.data)
                    alert('Error! Check logs');
                })
            }
        }
    }
</script>
