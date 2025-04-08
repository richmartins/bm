<x-layout>
    <section id="welcome">
        <div class="row">
            <span class="w-img col">
                <img src="{{ asset('/storage/svg/intro.svg') }}" alt="intro-img" />
            </span>
            <span class="w-txt col">
                Bienvenue au Montelly, une brasserie de quartier qui soutient les artisans locaux et propose des
                produits frais et de saison.
            </span>
        </div>
    </section>
    <section id="carte">
        <div class="row">
            <span class="d-img col">

                <img class="col-txt-img" src="{{ asset('/storage/img/la_carte.png') }}" alt="plats-txt" />

                <img id="d-img-catels" src="{{ asset('/storage/img/carrelage_vert.png') }}" alt="desc-catels" />
            </span>
            <span class="m-col col">
                <span>
                    <a href="{{ asset('/storage/menus/semaine.pdf') }}" target="_blank">
                        Menu de la semaine
                    </a>
                </span>
                <span class="middle">
                    <a href="{{ asset('/storage/menus/brunch.pdf') }}" target="_blank">
                        Menu des Brunchs
                    </a>
                </span>
                <span>
                    <a href="{{ asset('/storage/menus/boissons.pdf') }}" target="_blank">
                        Menu des Boissons
                    </a>
                </span>
            </span>
        </div>
    </section>
    <section id="contact">
        <div class="row">
            <span class="co-col col">
                <img id="c-col-txt-img" src="{{ asset('/storage/svg/contact.svg') }}" alt="contact-txt" />
            </span>

            <span id="coordinate_map" class="co-col">
                <span class="coordinate-txt col">
                    <p>Chemin de Montelly 1,<br>1007 Lausanne</p>
                    <p>Réservation uniquement<br>par téléphone</p>
                    <p>
                        <a href="tel:021 625 03 52">021 625 03 52</a>
                    </p>

                    <p><a class="social-link" href="https://www.instagram.com/brasserie_de_montelly/"
                            target="_blank"><img src="{{ asset('/storage/img/instagram.png') }}" alt="logo-insta" /></a>
                    </p>
                </span>
                <span class="coordinate-map-container">
                    <iframe id="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10981.442072872293!2d6.6128475!3d46.5207674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x984fb36a79fb66d6!2sBrasserie%20de%20Montelly!5e0!3m2!1sen!2sch!4v1669664461824!5m2!1sen!2sch"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </span>
            </span>
        </div>
    </section>
</x-layout>
