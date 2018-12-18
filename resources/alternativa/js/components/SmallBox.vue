<template lang="html">
    <div class="smallbox">
        <div class="smallbox-container">
            <h4>{{ text }}</h4>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SmallBox',
    props: {
        text: {
            type: String,
            default: 'Title'
        }
    }
}
</script>

<style lang="scss">
@import '~styles/shared';

.smallbox {
    @include make-col(3);

    .smallbox-container {
        // @include gradient-directional($blue-cst, $cyan-cst, 110deg);
        // @include border-radius($spacer / 2);
        // @include box-shadows($black);
        // padding: $spacer * 2;
        margin: $spacer * 2;

        h4 {
            color: $white;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
    }
}

</style>
