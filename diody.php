<?php include 'partials/header.php'; ?>
<header class="masthead diodes_masthead">
    <div class="masthead_center">
        <h1>Diody</h1>
    </div>
</header>
<section class="loose flex">
    <div class="row">
        <div class="entry">
            <h2>Co to jest dioda?</h2>
            <p>
                Dioda to półprzewodnikowy element elektroniczny,
                który przewodzi prąd tylko w jednym kierunku.
                Dzięki tej właściwości diody są podstawą wielu układów
                elektronicznych — od prostowników po zabezpieczenia.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Jak działa dioda?</h2>
            <ul>
                <li>Dioda składa się z dwóch warstw półprzewodnika: typu P i typu N.</li>
                <li>W stanie przewodzenia (polaryzacja wprost) prąd płynie przez diodę.</li>
                <li>W stanie zaporowym (polaryzacja odwrotna) przepływ prądu jest zablokowany.
                </li>
                <li>Charakterystyka napięciowo-prądowa diody jest nieliniowa — to klucz do jej
                    funkcji.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Podstawowe parametry diod</h2>
            <table>
                <thead>
                    <tr>
                        <th>Parametr</th>
                        <th>Opis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Napięcie przewodzenia</th>
                        <td>Typowe napięcie, przy którym dioda zaczyna przewodzić (np. 0,7 V dla krzemowej)</td>
                    </tr>
                    <tr>
                        <th>Prąd maksymalny</th>
                        <td>Maksymalny prąd, jaki może płynąć przez diodę bez uszkodzenia</td>
                    </tr>
                    <tr>
                        <th>Napięcie przebicia </th>
                        <td>Napięcie, przy którym dioda zaczyna przewodzić w kierunku zaporowym</td>
                    </tr>
                    <tr>
                        <th>Czas przełączania</th>
                        <td>Istotny w diodach szybkich, np. w układach impulsowych</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Rodzaje diod</h2>
            <ul>
                <li>Dioda prostownicza - stosowana w zasilaczach do konwersji AC na DC.</li>
                <li>Dioda Zenera - stabilizacja napięcia, działa w kierunku zaporowym.</li>
                <li>Dioda LED - emituje światło, używana w oświetleniu i sygnalizacji.</li>
                <li>Dioda Schottky'ego - szybka, o niskim napięciu przewodzenia, idealna do
                    przetwornic.</li>
                <li>Dioda lawinowa - działa przy wysokim napięciu przebicia, stosowana w
                    zabezpieczeniach.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Zastosowanie diod</h2>
            <ul>
                <li>Prostowniki - konwersja napięcia zmiennego na stałe.</li>
                <li>Zabezpieczenia - ochrona przed przepięciami i odwrotną polaryzacją.</li>
                <li>Regulacja napięcia - stabilizacja w układach z diodą Zenera.</li>
                <li>Oświetlenie - diody LED w urządzeniach, pojazdach i systemach sygnalizacji.
                </li>
                <li>Komunikacja optyczna - diody laserowe w światłowodach.</li>
            </ul>
        </div>
    </div>
</section>
<section class="loose">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>