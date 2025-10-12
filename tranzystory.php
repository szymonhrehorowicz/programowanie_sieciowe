<?php include 'partials/header.php'; ?>
<header class="masthead transistors_masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Tranzystory</h1>
            </div>
        </div>
    </div>
</header>
<section class="projects-section bg-light" id="projects">
<div class="container px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Co to jest tranzystor?</h2>
        <p>
            Tranzystor to półprzewodnikowy element elektroniczny, 
            który może działać jako wzmacniacz sygnału lub przełącznik. 
            Jest jednym z najważniejszych komponentów w elektronice — 
            umożliwia budowę układów cyfrowych, analogowych i sterujących.
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Jak działa tranzystor?</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Tranzystor kontroluje przepływ prądu między dwoma zaciskami (kolektor i emiter) za pomocą napięcia lub prądu na trzecim zacisku (bazie lub bramce).</li>
                <li class="list-group-item">W zależności od typu, może działać jako wzmacniacz sygnału lub jako przełącznik w układach cyfrowych.</li>
                <li class="list-group-item">Działa na zasadzie sterowania przepływem nośników ładunku w półprzewodniku.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Podstawowe parametry tranzystorów</h2>
        <p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Parametr</th>
                        <th>Opis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Typ tranzystora</th>
                        <td>Bipolarny (BJT) lub polowy (MOSFET, JFET)</td>
                    </tr>
                    <tr>
                        <th>Wzmocnienie (hFE)</th>
                        <td>Określa zdolność wzmacniania prądu (dla BJT)</td>
                    </tr>
                    <tr>
                        <th>Napięcie progowe</th>
                        <td>Minimalne napięcie bramki potrzebne do przewodzenia (dla MOSFET)</td>
                    </tr>
                    <tr>
                        <th>Prąd kolektora/drenu</th>
                        <td>Maksymalny prąd, jaki może płynąć przez tranzystor</td>
                    </tr>
                    <tr>
                        <th>Czas przełączania</th>
                        <td>Istotny w szybkich układach cyfrowych i impulsowych</td>
                    </tr>
                </tbody>
            </table>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Rodzaje tranzystorów</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Tranzystor bipolarny (BJT) - sterowany prądem, stosowany w wzmacniaczach.</li>
                <li class="list-group-item">Tranzystor polowy (MOSFET) - sterowany napięciem, idealny do przełączania mocy.</li>
                <li class="list-group-item">JFET - prostszy tranzystor polowy, używany w układach analogowych.</li>
                <li class="list-group-item">IGBT - łączy cechy BJT i MOSFET, stosowany w sterownikach silników.</li>
                <li class="list-group-item">Tranzystory unipolarne - stosowane w układach cyfrowych i mikroprocesorach.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Zastosowanie tranzystorów</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Wzmacniacze audio - zwiększanie mocy sygnału.</li>
                <li class="list-group-item">Przełączniki cyfrowe - budowa bramek logicznych i procesorów.</li>
                <li class="list-group-item">Sterowniki mocy - kontrola silników, przetwornic, oświetlenia LED.</li>
                <li class="list-group-item">Regulatory napięcia - stabilizacja i kontrola zasilania.</li>
                <li class="list-group-item">Oscylatory - generowanie sygnałów o określonej częstotliwości.</li>
            </ul>
        </p>
    </div>
</div>
</section>
<section class="projects-section bg-light">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>