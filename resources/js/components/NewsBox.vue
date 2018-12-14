<template lang="html">
    <div class="newsbox">
        <div class="newsbox-title">
            <h1>News</h1>
        </div>
        <div class="newsbox-inner">
            <div>
                <swiper :options="swiperOption" ref="mySwiper" >
                    <!-- slides -->
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 1
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 2
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 3
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 4
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 5
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 6
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slide-content">
                            <h5>Titolo</h5>
                            I'm Slide 7
                        </div>
                    </swiper-slide>
                    <!-- Optional controls -->
                </swiper>

            </div>
            <div class="swiper-pagination"  slot="pagination"></div>
        </div>
    </div>
</template>

<script>
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'

import smallboxes from '../dummies/smallboxes'
import SmallBox from './SmallBox.vue'
export default {
    name: 'NewsBox',
    components: {
        SmallBox,
        swiper,
        swiperSlide
    },
    data: function() {
        return {
            smallboxes: smallboxes,
            swiperOption: {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
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

.newsbox {
    @include make-container();
    @include gradient-directional(#252525, #1a1a1a, -60deg);
    padding: $spacer * 4;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    h1 {
        color: $white;
        font-size: 64px;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 10px;
        padding-top: 64px;
        padding-bottom: $spacer;
        margin-bottom: $spacer * 2;
    }

    .newsbox-inner {
        @include make-row();
        max-width: 100%;
        overflow: hidden;

        li {
            padding-bottom: $spacer;
        }



        .swiper-slide {
            .slide-content {
                background-color: $gray-200;
                @include box-shadows($black);
                padding: $spacer * 2;
            }


        }

        .swiper-pagination {
            position: relative;
            margin-top: $spacer * 2;

            .swiper-pagination-bullet {
                margin: $spacer / 2;
            }
        }
    }
}

</style>
