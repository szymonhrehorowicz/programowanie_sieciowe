<?php include 'partials/header.php'; ?>
<header class="masthead inductors_masthead">
    <div class="masthead_center">
        <h1>Dławiki</h1>
    </div>
</header>
<section class="loose flex">
    <div class="row">
        <div class="entry">
            <h2>Co to jest dławik?</h2>
            <p>
                Dławik (ang. inductor) to pasywny element elektroniczny,
                który magazynuje energię w polu magnetycznym.
                Składa się zazwyczaj z cewki drutu nawiniętej na rdzeń (lub bez niego),
                a jego głównym zadaniem jest przeciwdziałanie nagłym zmianom prądu w obwodzie.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Jak działa dławik?</h2>
            <ul>
                <li>Gdy przez dławik płynie prąd, wokół jego uzwojenia tworzy się pole
                    magnetyczne.</li>
                <li>Zmiana natężenia prądu powoduje indukowanie napięcia, które przeciwdziała
                    tej zmianie (prawo Lenza).</li>
                <li>Dzięki temu dławiki „wygładzają” przepływ prądu i chronią układy przed
                    zakłóceniami.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Podstawowe parametry dławików</h2>
            <table>
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
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Rodzaje dławików</h2>
            <ul>
                <li>Dławiki liniowe - stosowane w filtrach zasilania i układach audio.</li>
                <li>Dławiki impulsowe - używane w przetwornicach DC/DC.</li>
                <li>Toroidalne - o zamkniętym obwodzie magnetycznym, minimalizują emisję
                    zakłóceń.</li>
                <li>Z rdzeniem ferrytowym - skuteczne tłumienie zakłóceń wysokiej
                    częstotliwości.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Zastosowanie dławików</h2>
            <ul>
                <li>Filtry EMI - eliminacja zakłóceń elektromagnetycznych.</li>
                <li>Zasilacze impulsowe - magazynowanie energii i stabilizacja napięcia.</li>
                <li>Sterowniki silników - kontrola przepływu prądu w układach mocy.</li>
                <li>Układy audio - wygładzanie sygnałów i redukcja szumów.</li>
            </ul>
        </div>
    </div>
</section>
<section class="loose">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>