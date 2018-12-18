<template lang="html">
    <div class="herohead">
        <div class="herohead-bg"></div>
        <div class="herohead-bg2">
            <svg id="5754a1cc-40a3-48a4-b673-0216af0e01d4" height="100%" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
                <defs>
                    <filter id="2f9681b2-87d8-4ab0-ac16-82d3b7ee7c67" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feColorMatrix values="-1 0 0 0 1 0 -1 0 0 1 0 0 -1 0 1 0 0 0 1 0"/>
                    </filter>
                    <mask id="c10668ac-cf79-48b2-b829-2f4f19e66dc1" x="-164" y="11" width="356" height="478" maskUnits="userSpaceOnUse">
                        <g style="filter: url(#2f9681b2-87d8-4ab0-ac16-82d3b7ee7c67)">
                            <image width="356" height="478" transform="translate(-164 11)" xlink:href="/images/arrow1.png"/>
                        </g>
                    </mask>
                    <clipPath id="deee74cf-7341-4e7c-b3a3-c5a9d416e06f">
                        <rect width="250" height="500" style="fill: none"/>
                    </clipPath>
                    <clipPath id="18f92e1e-6608-4534-a3b7-b8db4267c9b6">
                        <polygon points="-0.16 13.5 189.62 246.42 -0.2 486.5 -0.16 13.5" style="fill: none;clip-rule: evenodd"/>
                    </clipPath>
                    <mask id="5bde6102-a92d-4c58-b4a3-117d29c70d1f" x="-161.97" y="13.5" width="351.58" height="473" maskUnits="userSpaceOnUse">
                        <g>
                            <polygon points="-0.16 13.5 189.62 246.42 -0.2 486.5 -161.97 486.5 -161.97 13.5 -0.16 13.5"/>
                            <g style="mask: url(#c10668ac-cf79-48b2-b829-2f4f19e66dc1)">
                                <g style="opacity: 0.67">
                                    <polygon points="-0.16 13.5 189.62 246.42 -0.2 486.5 -161.97 486.5 -161.97 13.5 -0.16 13.5" style="fill: #fff"/>
                                </g>
                            </g>
                        </g>
                    </mask>
                    <mask id="9d37a3ff-d3ac-4c2f-89a2-3938ba194a87" x="-164" y="11" width="356" height="478" maskUnits="userSpaceOnUse">
                        <g style="filter: url(#2f9681b2-87d8-4ab0-ac16-82d3b7ee7c67)">
                            <image width="356" height="478" transform="translate(-164 11)" xlink:href="/images/arrow2.png"/>
                        </g>
                    </mask>
                </defs>
                <title>arrow</title>
                <g style="clip-path: url(#deee74cf-7341-4e7c-b3a3-c5a9d416e06f)">
                    <g>
                        <g style="clip-path: url(#18f92e1e-6608-4534-a3b7-b8db4267c9b6)">
                            <image width="4000" height="2671" transform="translate(-518.61 -54.88) scale(0.2)" xlink:href="/images/1088.jpg"/>
                        </g>
                        <g style="mask: url(#5bde6102-a92d-4c58-b4a3-117d29c70d1f)">
                            <g>
                                <polygon points="-0.16 13.5 189.62 246.42 -0.2 486.5 -161.97 486.5 -161.97 13.5 -0.16 13.5" style="fill: #fff"/>
                                <g style="mask: url(#9d37a3ff-d3ac-4c2f-89a2-3938ba194a87)">
                                    <polygon points="-0.16 13.5 189.62 246.42 -0.2 486.5 -161.97 486.5 -161.97 13.5 -0.16 13.5" style="fill: #4a4a4a"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>


        </div>
        <div class="herohead-container">
            <div class="herohead-left"></div>
            <div class="herohead-right">
                <h1>Osservo<br>Pianifico<br>Agisco</h1>
                <p>
                    Il patrimonio di competenze, conoscenze e capacità del gruppo di esperti di EFG permette di elaborare strategie di sviluppo per i clienti, secondo specifiche esigenze, con soluzioni appropriate al mercato di riferimento ed ai relativi contesti sociali, economici, finanziari, istituzionali ed ambientali. Per affrontare le criticità e governare il cambiamento è necessario adeguare la strategia aziendaleo quella territoriale alle nuove condizioni di mercato, attraverso un approccio multidisciplinare. In un mercato in rapida evoluzione la velocità di adeguarsi al cambiamento rappresenta un vantaggio competitivo. Gli strumenti di analisi e le valutazioni di professionisti qualificati sono indispensabili per la trasformazione delle criticità esistenti in vantaggi competitivi.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'HeroHeader',
}
</script>

<style lang="scss">
@import '~styles/shared';

.herohead {
    @include make-container();
    position: relative;
    margin-top: 90px;
    min-height: calc(100vh - 90px);
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('/images/light-bg.jpg');
    background-size: cover;

    .herohead-bg {
        opacity: 0.43;
        @include gradient-directional($gray-400, $white, 60deg);
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .herohead-bg2 {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    .herohead-container {
        @include make-row();
        max-width: 1200px;
        width: 100%;
        z-index: 3;

        .herohead-left {
            @include make-col(5);
        }

        .herohead-right {
            @include make-col(7);
            padding-right: $spacer * 6;

            h1 {
                // font-family: $font-family-serif;
                font-size: 64px;
                text-transform: uppercase;
                font-weight: 800;
                letter-spacing: 10px;
                padding-bottom: $spacer;
                margin-bottom: $spacer * 2;
                color: $black;
            }

            p {
                font-weight: 500;
                line-height: 2.14;
            }
        }
    }
}
</style>
