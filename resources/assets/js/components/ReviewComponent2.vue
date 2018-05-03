<template>
    <masonry
            :cols="{default: 4, 1000: 3, 700: 2, 400: 1}"
            :gutter="{default: '30px', 700: '20px'}"
    >
        <div v-for="(item, index) in items">
            <div class="reviews-item">
                <h5>{{ item.name }}</h5>
                <div v-if="item.image !== ''">
                    <img :src="item.image">
                </div>
                <div v-for="n in item.star" class="star">
                    <img src="http://localhost:8000/images/star.png" />
                </div>
                <div style="clear:both;"></div>
                <div>{{ item.text }}</div>
            </div>
        </div>
    </masonry>
</template>

<script>

    export default {
        data() {
            return {
                items: {
                    0: {name: '서울 타이', star: 1, text: '여기 정말 좋았습니다.'},
                    1: {name: '서울 타이', image: '/images/banner/banner1.png', star: 2, text: '여기 정말 좋았습니다.'},
                    2: {name: '서울 타이', star: 4, text: '여기 정말 좋았습니다. 여기 정말 좋았습니다.'},
                    3: {name: '서울 타이', star: 5, text: '여기 정말 좋았습니다.'},
                    4: {name: '서울 타이', image: '/images/banner/banner1.png', star: 4, text: '여기 정말 좋았습니다.'},
                    5: {name: '서울 타이', star: 5, text: '여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다.'},
                    6: {name: '서울 타이', image: '/images/banner/banner1.png', star: 4, text: '여기 정말 좋았습니다.'},
                    7: {name: '서울 타이', image: '/images/banner/banner1.png', star: 3, text: '여기 정말 좋았습니다. 여기 정말 좋았습니다.'},
                    8: {name: '서울 타이', star: 4, text: '여기 정말 좋았습니다. 여기 정말 좋았습니다.'},
                    9: {name: '서울 타이', star: 3, text: '여기 정말 좋았습니다.'},
                    10: {name: '서울 타이', image: '/images/banner/banner1.png', star: 3, text: '여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다. 여기 정말 좋았습니다.'},
                    11: {name: '서울 타이', star: 3, text: '여기 정말 좋았습니다.'},
                },
            }
        }
    }
</script>

<style scoped>
    .reviews-item {
        border: 1px solid #ededed;
        box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.2);
        margin-bottom: 20px;
        padding: 10px;
    }
    .reviews-item img {
        width: 100%;
    }
    .reviews-item .star {
        width: 16px;
        float: left; margin:0 2px 4px 0;
    }
</style>