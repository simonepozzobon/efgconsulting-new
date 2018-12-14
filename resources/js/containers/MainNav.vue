<template lang="html">
    <nav class="shadow navbar navbar-expand-lg navbar-light px-3 bg-white">
        <a class="navbar-brand text-black" href="#">EFG Consulting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav flex-row ml-md-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Division</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Event Marketing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Focus Emirati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'MainNav'
}
</script>

<style lang="scss">
@import '~styles/shared';

.navbar {
    position: fixed;
    top: 0;
    min-width: 100%;
    width: 100%;
    max-width: 100%;
    min-height: 90px;
    @include box-shadows($gray-500);
    z-index: 99999;

    .navbar-brand {
        font-weight: 800;
    }

    .navbar-nav {
        .nav-item {
            .nav-link {
                text-transform: uppercase;
                font-weight: 700;
                letter-spacing: 1px;
                font-size: 14px;
            }
        }
    }
}
</style>
