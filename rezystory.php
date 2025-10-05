<?php include 'partials/header.php'; ?>
<header class="masthead resistors_masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Rezystory</h1>
            </div>
        </div>
    </div>
</header>
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Czym jest rezystor?</h2>
            <p>Rezystor to jeden z najprostszych, a zarazem najważniejszych elementów elektronicznych. Jego głównym
                zadaniem
                jest ograniczanie przepływu prądu elektrycznego oraz dzielenie napięcia w obwodach. Dzięki nim układy
                elektroniczne mogą działać stabilnie i bezpiecznie.
            </p>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Zasada działani</h2>
            <p>Podstawą działania rezystora jest Prawo Ohma, które mówi, że: R = U / I,
                <br>
                gdzie:
            <ul class="list-group list-group-flush">
                <li class="list-group-item">U - napięcie [V],</li>
                <li class="list-group-item">R - rezystancja [Ω],</li>
                <li class="list-group-item">I - natężenie prądu [A].</li>
            </ul>
            Oznacza to, że im większa rezystancja, tym mniejszy prąd przepływa przez element.
            </p>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Rodzaje rezystorów</h2>
            <p>Na rynku dostępnych jest wiele typów rezystorów, różniących się budową, parametrami i zastosowaniem. Do
                najpopularniejszych należą:
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> Rezystory stałe - mają określoną, niezmienną wartość rezystancji.</li>
                <li class="list-group-item"> Rezystory zmienne (potencjometry, trymery) - pozwalają regulować opór w
                    obwodzie.</li>
                <li class="list-group-item"> Rezystory specjalne:
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> termistory (NTC/PTC) - zmieniają rezystancję w zależności od
                            temperatury,
                        </li>
                        <li class="list-group-item"> fotorezystory (LDR) - reagują na natężenie światła,</li>
                        <li class="list-group-item"> warystory - chronią układy przed przepięciami.</li>
                    </ul>
                </li>
            </ul>
            </p>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Oznaczenia rezystorów</h2>
            <p>Najczęściej spotykanym sposobem oznaczania wartości rezystorów jest kod paskowy. Kolorowe paski na
                obudowie odpowiadają cyfrom i mnożnikom, które pozwalają odczytać wartość rezystancji w omach.
                Przykład: <em style="color: brown">brązowy</em> - <em>czarny</em> - <em style="color: red">czerwony</em>
                -
                <em style="color: gold">złoty</em> = 1 kΩ ±5%
            </p>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Zastosowanie rezystorów</h2>
            <p>Rezystory znajdziemy praktycznie w każdym urządzeniu elektronicznym. Pełnią m.in. funkcje:
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ograniczania prądu w diodach LED,</li>
                <li class="list-group-item">dzielników napięcia,</li>
                <li class="list-group-item">elementów filtrów i wzmacniaczy,</li>
                <li class="list-group-item">zabezpieczeń przed przeciążeniem.</li>
            </ul>
            Bez nich nie działałby żaden komputer, radio czy smartfon.
            </p>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5">
            <h2>Podsumowanie</h2>
            <p>Choć rezystory wydają się niepozorne, to właśnie one są fundamentem elektroniki. Dzięki nim możliwe jest
                bezpieczne i precyzyjne sterowanie przepływem prądu w układach. Zrozumienie ich działania to pierwszy
                krok
                do poznania tajników elektroniki.
            </p>
        </div>
    </div>
</section>
<section class="projects-section bg-light">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>