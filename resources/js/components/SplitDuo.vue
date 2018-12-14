<template lang="html">
    <div class="splitduo">
        <div class="splitduo-title">
            <h1>LE CHIAVI<br>DEL SUCCESSO</h1>
        </div>
        <div class="splitduo-inner">
            <div class="sliptduo-col">
                <ul class="text-white">
                    <li>Vantaggi Competitivi</li>
                    <li>Coinvolgimento Emotivo</li>
                    <li>Entusiasmo</li>
                    <li>Squadra</li>
                    <li>Concretezza</li>
                    <li>Creazione di Valore</li>
                </ul>
            </div>
            <div class="sliptduo-col">
                <ul class="text-white">
                    <li>Professionalità</li>
                    <li>Successo</li>
                    <li>Innovazione</li>
                    <li>Idee</li>
                    <li>Strategie</li>
                    <li>Condivisione</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import smallboxes from '../dummies/smallboxes'
import SmallBox from './SmallBox.vue'
export default {
    name: 'SplitDuo',
    components: {
        SmallBox,
    },
    data: function() {
        return {
            smallboxes: smallboxes
        }
    }
}
</script>

<style lang="scss">
@import '~styles/shared';

.splitduo {
    @include make-container();
    @include gradient-directional(#252525, #1a1a1a, -60deg);
    padding: $spacer * 4;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    .splitduo-title {
        // align-self: flex-start;
        justify-content: flex-start;

        h1 {
            color: $white;
            font-size: 64px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 10px;
            // padding-top: 64px;
            padding-bottom: 64px;
            padding-right: 64px;
            // margin-bottom: $spacer * 2;
        }

    }


    .splitduo-inner {
        @include make-row();

        .splitduo-col {
            @include make-col(6);
        }

        li {
            padding-bottom: $spacer;
        }
    }
}

</style>
