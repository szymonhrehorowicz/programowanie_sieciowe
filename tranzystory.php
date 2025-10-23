<?php include 'partials/header.php'; ?>
<header class="masthead transistors_masthead">
    <div class="masthead_center">
        <h1>Tranzystory</h1>
    </div>
</header>
<section class="loose flex">
    <div class="row">
        <div class="entry">
            <h2>Co to jest tranzystor?</h2>
            <p>
                Tranzystor to półprzewodnikowy element elektroniczny,
                który może działać jako wzmacniacz sygnału lub przełącznik.
                Jest jednym z najważniejszych komponentów w elektronice —
                umożliwia budowę układów cyfrowych, analogowych i sterujących.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Jak działa tranzystor?</h2>
            <ul>
                <li>Tranzystor kontroluje przepływ prądu między dwoma zaciskami (kolektor i
                    emiter) za pomocą napięcia lub prądu na trzecim zacisku (bazie lub bramce).</li>
                <li>W zależności od typu, może działać jako wzmacniacz sygnału lub jako
                    przełącznik w układach cyfrowych.</li>
                <li>Działa na zasadzie sterowania przepływem nośników ładunku w półprzewodniku.
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Podstawowe parametry tranzystorów</h2>
            <table>
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
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Rodzaje tranzystorów</h2>
            <ul>
                <li>Tranzystor bipolarny (BJT) - sterowany prądem, stosowany w wzmacniaczach.
                </li>
                <li>Tranzystor polowy (MOSFET) - sterowany napięciem, idealny do przełączania
                    mocy.</li>
                <li>JFET - prostszy tranzystor polowy, używany w układach analogowych.</li>
                <li>IGBT - łączy cechy BJT i MOSFET, stosowany w sterownikach silników.</li>
                <li>Tranzystory unipolarne - stosowane w układach cyfrowych i mikroprocesorach.
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Zastosowanie tranzystorów</h2>
            <ul>
                <li>Wzmacniacze audio - zwiększanie mocy sygnału.</li>
                <li>Przełączniki cyfrowe - budowa bramek logicznych i procesorów.</li>
                <li>Sterowniki mocy - kontrola silników, przetwornic, oświetlenia LED.</li>
                <li>Regulatory napięcia - stabilizacja i kontrola zasilania.</li>
                <li>Oscylatory - generowanie sygnałów o określonej częstotliwości.</li>
            </ul>
        </div>
    </div>
</section>
<section class="loose">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>