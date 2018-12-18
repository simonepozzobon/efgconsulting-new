<template lang="html">
    <div class="section-light">
        <div class="section-light-title">
            <h1>Il Valore<br>Aggiunto</h1>
        </div>
        <div class="section-light-inner">
            <div class="col-md-8">
                <ul>
                    <li>
                        <p>
                            EFG mette a disposizione del cliente professionalità e consolidata esperienza oltre che la propria rete di contatti e conoscenze: strumento indispensabile e proficuo per entrare nel vivo delle dinamiche commerciali e penetrare efficacemente il mercato obiettivo.
                        </p>
                    </li>
                    <li>
                        <p>
                            EFG elabora con i clienti innovative strategie di marketing per conseguire concretamente gli obiettivi individuati.
                        </p>
                    </li>
                    <li>
                        <p>
                            EFG infonde entusiasmo all'azienda cliente intesa nella sua interezza, in modo dapervadere l'ambiente interno ed esterno.
                        </p>
                    </li>
                    <li>
                        <p>
                            EFG offre ai propri clienti assistenza costante durante tutta la fase di realizzazione della strategia elaborata, con frequenti confronti con il management dell'azienda cliente.
                        </p>
                    </li>
                    <li>
                        <p>
                            EFG effettua un'attenta azione di monitoraggio per poter verificare i risultati ottenuti e individuare le criticità latenti, intervenendo con azioni correttive, qualora fosse necessario.
                        </p>
                    </li>
                </ul>
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

.section-light {
    @include make-container();
    background-color: $gray-200;
    padding: $spacer * 4;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;



    .section-light-title {
        @include make-row();

        h1 {
            color: $black;
            font-size: 64px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 10px;
            padding-top: 64px;
            padding-bottom: $spacer;
            margin-bottom: $spacer * 2;
            text-align: center;
        }
    }

    .section-light-inner {
        @include make-row();
        justify-content: center;

        li {
            padding-bottom: $spacer;
        }
    }
}

</style>
