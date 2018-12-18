<template lang="html">
    <div >
        <swiper :options="swiperOption" ref="mySwiper" class="swiper-box">
            <swiper-slide class="swiper-item">
                <hero-header />
            </swiper-slide>
            <swiper-slide class="swiper-item bg-blue">
                <split-duo />
            </swiper-slide>
            <swiper-slide class="swiper-item">
                <section-light />
            </swiper-slide>
            <swiper-slide class="swiper-item">
                <news-box />
            </swiper-slide>
            <swiper-slide class="swiper-item">
                <contact />
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
    </div>
</template>

<script>
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'

import Contact from '../components/Contact.vue'
import HeroHeader from '../components/HeroHeader.vue'
import NewsBox from '../components/NewsBox.vue'
import SectionLight from '../components/SectionLight.vue'
import SplitDuo from '../components/SplitDuo.vue'
export default {
    name: 'Home',
    components: {
        Contact,
        HeroHeader,
        NewsBox,
        SectionLight,
        SplitDuo,
        swiper,
        swiperSlide
    },
    data: function() {
        return {
            swiperOption: {
                // initialSlide: 1,
                direction: 'vertical',
                slidesPerView: 1,
                mousewheel: true,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
            }
        }
    }
}
</script>

<style lang="scss">
@import '~styles/shared';
.swiper-box {
    width: 100%;
    height: 100vh;
    margin: 0 auto;

    .swiper-item {
        height: 100%;
        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
    }
}

</style>
