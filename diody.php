<?php include 'partials/header.php'; ?>
<header class="masthead diodes_masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Diody</h1>
            </div>
        </div>
    </div>
</header>
<section class="projects-section bg-light" id="projects">
<div class="container px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Co to jest dioda?</h2>
        <p>
            Dioda to półprzewodnikowy element elektroniczny, 
            który przewodzi prąd tylko w jednym kierunku. 
            Dzięki tej właściwości diody są podstawą wielu układów 
            elektronicznych — od prostowników po zabezpieczenia.
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Jak działa dioda?</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dioda składa się z dwóch warstw półprzewodnika: typu P i typu N.</li>
                <li class="list-group-item">W stanie przewodzenia (polaryzacja wprost) prąd płynie przez diodę.</li>
                <li class="list-group-item">W stanie zaporowym (polaryzacja odwrotna) przepływ prądu jest zablokowany.</li>
                <li class="list-group-item">Charakterystyka napięciowo-prądowa diody jest nieliniowa — to klucz do jej funkcji.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Podstawowe parametry diod</h2>
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
                        <th>Napięcie przewodzenia</th>
                        <td>Typowe napięcie, przy którym dioda zaczyna przewodzić (np. 0,7 V dla krzemowej)</td>
                    </tr>
                    <tr>
                        <th>Prąd maksymalny</th>
                        <td>Maksymalny prąd, jaki może płynąć przez diodę bez uszkodzenia</td>
                    </tr>
                    <tr>
                        <th>Napięcie przebicia	</th>
                        <td>Napięcie, przy którym dioda zaczyna przewodzić w kierunku zaporowym</td>
                    </tr>
                    <tr>
                        <th>Czas przełączania</th>
                        <td>Istotny w diodach szybkich, np. w układach impulsowych</td>
                    </tr>
                </tbody>
            </table>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Rodzaje diod</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dioda prostownicza - stosowana w zasilaczach do konwersji AC na DC.</li>
                <li class="list-group-item">Dioda Zenera - stabilizacja napięcia, działa w kierunku zaporowym.</li>
                <li class="list-group-item">Dioda LED - emituje światło, używana w oświetleniu i sygnalizacji.</li>
                <li class="list-group-item">Dioda Schottky'ego - szybka, o niskim napięciu przewodzenia, idealna do przetwornic.</li>
                <li class="list-group-item">Dioda lawinowa - działa przy wysokim napięciu przebicia, stosowana w zabezpieczeniach.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Zastosowanie diod</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prostowniki - konwersja napięcia zmiennego na stałe.</li>
                <li class="list-group-item">Zabezpieczenia - ochrona przed przepięciami i odwrotną polaryzacją.</li>
                <li class="list-group-item">Regulacja napięcia - stabilizacja w układach z diodą Zenera.</li>
                <li class="list-group-item">Oświetlenie - diody LED w urządzeniach, pojazdach i systemach sygnalizacji.</li>
                <li class="list-group-item">Komunikacja optyczna - diody laserowe w światłowodach.</li>
            </ul>
        </p>
    </div>
</div>
</section>
<section class="projects-section bg-light">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>