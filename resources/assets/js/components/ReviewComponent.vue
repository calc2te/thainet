<template>
    <div v-masonry transition-duration="0.3s" item-selector=".item" fit-width="true">
        <div v-masonry-tile class="item review-item" v-for="(item, index) in blocks">
            <p>{{item}} - {{index}}</p>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue'
    import {VueMasonryPlugin} from 'vue-masonry';

    Vue.use(VueMasonryPlugin)

    export default {
        data() {
            return {
                blocks: {marketing: '마케팅', sales: '영업', planning: '기획', develop: '개발', design: '디자인', other: '기타'},
            }
        }
    }
</script>

<style scoped>
    .review-item {
        margin: 10px;
        padding: 10px;
        border:1px solid gray;
    }
</style>