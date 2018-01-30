<template>
    <div>
        <slot>
        </slot>
    </div>
</template>

<script>
import { Component } from 'vue-instantsearch';

export default {
    mixins: [Component],
        watch: {
        'searchStore._results'(val) {
            this.$emit('update');
        }
    }
}
</script>