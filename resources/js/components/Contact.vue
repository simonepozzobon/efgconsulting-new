<template lang="html">
    <div class="contact">
        <div class="contact-title">
            <h1>Contatti</h1>
        </div>
        <div class="contact-inner">
            <div class="col-md-8">
                Contatti
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SectionLight',
}
</script>

<style lang="scss">
@import '~styles/shared';

.contact {
    @include make-container();
    background-color: $gray-200;
    padding: $spacer * 4;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    h1 {
        color: $blue-cst;
        font-size: 64px;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 10px;
        padding-top: 64px;
        padding-bottom: $spacer;
        margin-bottom: $spacer * 2;
        text-align: center;
    }

    .contact-inner {
        @include make-row();
        justify-content: center;

        li {
            padding-bottom: $spacer;
        }
    }
}

</style>
