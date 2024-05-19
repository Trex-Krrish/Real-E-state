<section class="service" id="service">
    <div class="container">

        <p class="section-subtitle">Our Services</p>

        <h2 class="h2 section-title">Our Main Focus</h2>

        <ul class="service-list">

            <li>
                <div class="service-card">

                    <div class="card-icon">
                        <img src="./assets/images/service-1.png" alt="Service icon">
                    </div>

                    <h3 class="h3 card-title">
                        <a href="{{route('buy.index')}}">Buy a home</a>
                    </h3>

                    <p class="card-text">
                        over 1 million+ homes for sale available on the website, we can match you with a house
                        you will want
                        to call home.
                    </p>

                    <a href="{{route('buy.index')}}" class="card-link">
                        <span>Find some Properties</span>

                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>
            </li>

            <li>
                <div class="service-card">

                    <div class="card-icon">
                        <img src="./assets/images/service-2.png" alt="Service icon">
                    </div>

                    <h3 class="h3 card-title">
                        <a href="{{route('buy.index', ['sale'=>'rent'])}}">Rent a home</a>
                    </h3>

                    <p class="card-text">
                        over 1 million+ homes for sale available on the website, we can match you with a house
                        you will want
                        to call home.
                    </p>

                    <a href="{{route('buy.index', ['sale'=>'rent'])}}" class="card-link">
                        <span>Rent Now</span>

                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>
            </li>

            <li>
                <div class="service-card">

                    <div class="card-icon">
                        <img src="./assets/images/service-3.png" alt="Service icon">
                    </div>

                    <h3 class="h3 card-title">
                        <a href="{{route('sell.index')}}">Sell a home</a>
                    </h3>

                    <p class="card-text">
                        over 1 million+ homes for sale available on the website, we can match you with a house
                        you will want
                        to call home.
                    </p>

                    <a href="{{route('sell.index')}}" class="card-link">
                        <span>Sell Now</span>

                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>
            </li>

        </ul>

    </div>
</section>
