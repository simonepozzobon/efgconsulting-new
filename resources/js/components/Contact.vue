<template lang="html">
    <div class="container pb-5 px-4 px-md-0">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="mt-5 pb-5 text-center text-md-left">Contatti</h1>
                <div>
                    <div class="row">
                        <div class="form-group col mr-4">
                          <input type="text" class="form-control" id="formNome">
                          <label for="formNome">Nome</label>
                        </div>
                        <div class="form-group col">
                          <input type="text" class="form-control" id="formCognome">
                          <label for="formCognome">Cognome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                          <textarea class="form-control" rows="8" cols="80" id="forMessage"></textarea>
                          <label for="forMessage">Messaggio</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col pt-0">
                            <div class="form-check mt-0">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Accetto il trattamento dei dati personali</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-outline-primary btn-block d-md-none">Invia</button>
                            <button type="submit" class="btn btn-outline-primary d-none d-md-block">Invia</button>
                        </div>
                    </div>
                </div>
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
