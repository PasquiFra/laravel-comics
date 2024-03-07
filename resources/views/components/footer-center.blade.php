@import('../../scss/components/footer-center.scss')

<footer id="footer-center">
    <div class="container flex">

        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                <li v-for="link in comixLinks"><a :href="link.url">{{ link.text }}</a></li>
            </ul>
        </nav>

        <nav class="flex">
            <h3>shop</h3>
            <ul>
                <li v-for="link in shopLinks"><a :href="link.url">{{ link.text }}</a></li>
            </ul>
        </nav>

        <nav class="flex">
            <h3>dc</h3>
            <ul>
                <li v-for="link in DCLinks"><a :href="link.url">{{ link.text }}</a></li>
            </ul>
        </nav>

        <nav class="flex">
            <h3>sites</h3>
            <ul>
                <li v-for="link in sitesLinks"><a :href="link.url">{{ link.text }}</a></li>
            </ul>
        </nav>

        <figure>
            <img src="../assets/img/dc-logo-bg.png" alt="DC-Logo">
        </figure>

    </div>
</footer>
