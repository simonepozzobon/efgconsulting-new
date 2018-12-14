<template lang="html">
    <header>
            <nav class="shadow navbar navbar-expand-lg navbar-light px-3 bg-white">
            <a class="navbar-brand text-black" href="#">EFG Consulting</a>
            <button class="btn btn-sm btn-outline-secondary d-md-none px-2 text-uppercase collapsed" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
                menu
            </button>

            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Divisioni</a>
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
                    <a class="nav-link" href="#">Contatti</a>
                </li>
            </ul>
        </nav>

        <nav class="bd-links collapse pt-5 mt-5" id="bd-docs-nav" style="">
            <div class="sidebar-wrapper">
                <div class="link-list-wrapper">
                  <ul class="link-list">
                     <li><a class="list-item" href="#"><span>Home</span></a></li>
                     <li><a class="list-item" href="#"><span>About</span></a></li>
                     <li><a class="list-item" href="#"><span>Divisioni</span></a></li>
                     <li><a class="list-item" href="#"><span>Event Marketing</span></a></li>
                     <li><a class="list-item" href="#"><span>News</span></a></li>
                     <li><a class="list-item" href="#"><span>Focus Emirati</span></a></li>
                     <li><a class="list-item" href="#"><span>Contatti</span></a></li>
                  </ul>
                </div>
          </div>
        </nav>

    </header>
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
