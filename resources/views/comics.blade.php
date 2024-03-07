
  
    <main class="flex">
        <div class="container">
            <div id="current-series">
                <h1 class="flex">current series</h1>
            </div>
            <ul class="card-col">
                <li class="card" v-for="book in books">
                    <figure>
                        <img :src="book.thumb" :alt="book.series">
                    </figure>
                    <h5>
                        <a href="book.thumb">{{ book.series }}</a>
                    </h5>
                </li>
            </ul>
            <div class="flex center">
                <a class="btn" href="#">load more</a>
            </div>
        </div>
    </main>