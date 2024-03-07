@import('../../scss/components/header.scss')

<header>
    <div class="container flex justify-header">

        <figure>
            <img src="../assets/img/dc-logo.png" alt="DC Logo">
        </figure>
        <nav class="flex center">
            <ul class="flex">
                <li class="flex center list-setup" v-for="nav in navs">
                    <a class="link-setup flex center" href="{{ nav.url }}">
                        {{ nav.text }}
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</header>

<div class="background"></div>
