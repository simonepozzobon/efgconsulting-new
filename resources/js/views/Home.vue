<template lang="html">
    <div>
        <div id="temp-fix" class="container-fluid pt-5 pt-md-0 mt-4 mt-md-0">
            <swiper :options="swiperOption" ref="mySwiper" class="swiper-box">
                <swiper-slide class="swiper-item ">
                    <video-bg videoSrcMp4="/images/video.mov">
                        <img src="/images/logho-EFG-po.png" alt="" class="img-fluid">
                    </video-bg>
                </swiper-slide>
                <swiper-slide class="swiper-item" style="background-image: url('/images/instagram/4.jpg')"></swiper-slide>
                <swiper-slide class="swiper-item" style="background-image: url('/images/instagram/6.jpg'); background-position: center; background-size: contain;"></swiper-slide>
                <swiper-slide class="swiper-item" style="background-image: url('/images/instagram/11.jpg'); background-position: center; background-size: contain;"></swiper-slide>
            </swiper>
        </div>
        <div class="it-hero-wrapper it-text-centered it-primary it-overlay bg-gradient-primary">
            <div class="img-responsive-wrapper">
                <div class="img-responsive">
                    <div class="img-wrapper"><img src="/images/bg-wave.png" title="img title" alt="imagealt"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-hero-text-wrapper bg-dark text-center">
                            <h1 class="no_toc">
                                Osservo Pianifico Agisco
                            </h1>
                            <h4 class="no_toc text-white pb-3">
                                <i>"Incessante, instancabile, senza mete e senza confini,
                                senza vertigini e maestosa come un’aquila eterna"</i>
                            </h4>
                            <p class="d-lg-block">
                                EFG Consulting è una società di consulenza di marketing strategico e operativo con sede a Milano esperta in relazioni pubbliche e istituzionali, event marketing, strategie di internazionalizzazione, marketing territoriale, grandi eventi, management aziendale, pianificazione finanziaria e controllo dei costi.<br><br>
                                EFG è il partner ideale per condurre al successo un'azienda o un territorio con un'ottica imprenditoriale consolidata dall'esperienza professionale e dalla rete di relazioni internazionali.<br><br>
                                Con il suo team altamente qualificato, costituito da manager, professionisti e docenti universitari, EFG supporta le aziende private e gli Enti Pubblici nell'implementazione di processi di analisi e di strategie operative volte al raggiungimento degli obiettivi.<br>
                            </p>
                            <div class="it-btn-container"><a class="btn btn-sm btn-outline-primary" href="#">Contattaci</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <chi-siamo />
        <valore-aggiunto />
        <chiavi-del-successo />
        <news />
        <gallery />
        <instagram />
        <contact />






        <footer class="container-fluid bg-light d-md-none">
            <div class="container">
                <div class="row py-5 justify-content-center align-items-center">
                    <div class="col">
                        <p class="text-center p-0 m-0 text-muted">
                                <b>EFG Consulting Srl</b><br>
                                <small>
                                    Torre Velasca - Piazza Velasca, 5<br>
                                    20122 MILANO<br><br>
                                    Tel. +39 02 26950309<br>
                                    fax 02 72004567
                                </small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="container-fluid bg-light d-none d-md-block">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        <img src="/images/logo.png" class="img-fluid"/>
                        <small class="d-block my-3 text-muted">© 2018-2019</small>
                    </div>
                    <div class="col">
                        <h5>Naviga</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Home</a></li>
                            <li><a class="text-muted" href="#">Chi siamo</a></li>
                            <li><a class="text-muted" href="#">Divisioni</a></li>
                            <li><a class="text-muted" href="#">Event Marketing</a></li>
                            <li><a class="text-muted" href="#">News</a></li>
                            <li><a class="text-muted" href="#">Focus Emirati</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>News</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Articolo 1</a></li>
                            <li><a class="text-muted" href="#">Articolo 2</a></li>
                            <li><a class="text-muted" href="#">Articolo 3</a></li>
                            <li><a class="text-muted" href="#">Articolo 4</a></li>
                            <li><a class="text-muted" href="#">Articolo 5</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Social</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Twitter</a></li>
                            <li><a class="text-muted" href="#">Instagram</a></li>
                            <li><a class="text-muted" href="#">LinkedIn</a></li>
                            <li><a class="text-muted" href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row py-5 justify-content-center align-items-center">
                    <div class="col">
                        <p class="text-center p-0 m-0 text-muted">
                            <small>
                                EFG Consulting Srl - Torre Velasca | Piazza Velasca, 5 | 20122 MILANO - Tel. +39 02 26950309 | fax 02 72004567
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'
import ChiSiamo from '../components/ChiSiamo.vue'
import ChiaviDelSuccesso from '../components/ChiaviDelSuccesso.vue'
import Contact from '../components/Contact.vue'
import Gallery from '../components/Gallery.vue'
import Instagram from '../components/Instagram.vue'
import News from '../components/News.vue'
import ValoreAggiunto from '../components/ValoreAggiunto.vue'
import VideoBg from '../components/VideoBg.vue'

export default {
    name: 'Home',
    components: {
        ChiSiamo,
        ChiaviDelSuccesso,
        Contact,
        Gallery,
        Instagram,
        News,
        ValoreAggiunto,
        VideoBg,

        swiper,
        swiperSlide
    },
    data: function() {
        return {
            swiperOption: {
                // initialSlide: 1,
                slidesPerView: 1,
                mousewheel: false,
                spaceBetween: 0,
                height: 300,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
            }
        }
    },
    mounted: function() {
        require('owl.carousel')
        require('../plugins/navbar')
        require('../plugins/dimmer')
        require('../plugins/imgresponsive')
        require('../plugins/track-focus')
        require('../plugins/carousel')
        require('../plugins/list')
        require('../plugins/forms')
        require('../plugins/autocomplete')
    }
}
</script>

<style lang="scss">
@import '~styles/shared';
.text-white {
    color: #fff !important;
}

#temp-fix {
    width: 110%;
    padding-right: 0;
    padding-left: 0;
    margin-top: 90px !important;

    @include media-breakpoint-down('md') {
        margin-top: inherit !important;
    };
}

.swiper-box {
    width: 100%;
    height: 40vh;
    min-height: 500px;
    margin: 0 auto;

    .swiper-item {
        height: 100%;
        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
}
</style>
