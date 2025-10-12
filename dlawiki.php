<?php include 'partials/header.php'; ?>
<header class="masthead inductors_masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Dławiki</h1>
            </div>
        </div>
    </div>
</header>
<section class="projects-section bg-light" id="projects">
<div class="container px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Co to jest dławik?</h2>
        <p>
            Dławik (ang. inductor) to pasywny element elektroniczny, 
            który magazynuje energię w polu magnetycznym. 
            Składa się zazwyczaj z cewki drutu nawiniętej na rdzeń (lub bez niego), 
            a jego głównym zadaniem jest przeciwdziałanie nagłym zmianom prądu w obwodzie.
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Jak działa dławik?</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Gdy przez dławik płynie prąd, wokół jego uzwojenia tworzy się pole magnetyczne.</li>
                <li class="list-group-item">Zmiana natężenia prądu powoduje indukowanie napięcia, które przeciwdziała tej zmianie (prawo Lenza).</li>
                <li class="list-group-item">Dzięki temu dławiki „wygładzają” przepływ prądu i chronią układy przed zakłóceniami.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Podstawowe parametry dławików</h2>
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
                        <th>Indukcyjność (L)</th>
                        <td>Mierzona w henrach (H), określa zdolność do magazynowania energii</td>
                    </tr>
                    <tr>
                        <th>Prąd znamionowy</th>
                        <td>Maksymalny prąd, jaki może płynąć przez dławik bez przegrzania</td>
                    </tr>
                    <tr>
                        <th>Rezystancja DC</th>
                        <td>Opór elektryczny uzwojenia, wpływa na straty mocy</td>
                    </tr>
                    <tr>
                        <th>Typ rdzenia</th>
                        <td>Materiał rdzenia (np. ferrytowy, proszkowy) wpływa na charakterystykę</td>
                    </tr>
                </tbody>
            </table>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Rodzaje dławików</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dławiki liniowe - stosowane w filtrach zasilania i układach audio.</li>
                <li class="list-group-item">Dławiki impulsowe - używane w przetwornicach DC/DC.</li>
                <li class="list-group-item">Toroidalne - o zamkniętym obwodzie magnetycznym, minimalizują emisję zakłóceń.</li>
                <li class="list-group-item">Z rdzeniem ferrytowym - skuteczne tłumienie zakłóceń wysokiej częstotliwości.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Zastosowanie dławików</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Filtry EMI - eliminacja zakłóceń elektromagnetycznych.</li>
                <li class="list-group-item">Zasilacze impulsowe - magazynowanie energii i stabilizacja napięcia.</li>
                <li class="list-group-item">Sterowniki silników - kontrola przepływu prądu w układach mocy.</li>
                <li class="list-group-item">Układy audio - wygładzanie sygnałów i redukcja szumów.</li>
            </ul>
        </p>
    </div>
</div>
</section>
<section class="projects-section bg-light">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>