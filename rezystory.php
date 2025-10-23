<?php include 'partials/header.php'; ?>
<header class="masthead resistors_masthead">
    <div class="masthead_center">
        <h1>Rezystory</h1>
    </div>
</header>
<section class="loose flex">
    <div class="row">
        <div class="entry">
            <h2>Czym jest rezystor?</h2>
            <p>Rezystor to jeden z najprostszych, a zarazem najważniejszych elementów elektronicznych. Jego głównym
                zadaniem
                jest ograniczanie przepływu prądu elektrycznego oraz dzielenie napięcia w obwodach. Dzięki nim układy
                elektroniczne mogą działać stabilnie i bezpiecznie.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Zasada działania</h2>
            <p>Podstawą działania rezystora jest Prawo Ohma, które mówi, że: R = U / I,
                <br>
                gdzie:
            </p>
            <ul>
                <li>U - napięcie [V],</li>
                <li>R - rezystancja [Ω],</li>
                <li>I - natężenie prądu [A].</li>
            </ul>
            <p>Oznacza to, że im większa rezystancja, tym mniejszy prąd przepływa przez element.</p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Rodzaje rezystorów</h2>
            <p>Na rynku dostępnych jest wiele typów rezystorów, różniących się budową, parametrami i zastosowaniem. Do
                najpopularniejszych należą:</p>
            <ul>
                <li> Rezystory stałe - mają określoną, niezmienną wartość rezystancji.</li>
                <li> Rezystory zmienne (potencjometry, trymery) - pozwalają regulować opór w
                    obwodzie.</li>
                <li> Rezystory specjalne:
                    <ul>
                        <li> termistory (NTC/PTC) - zmieniają rezystancję w zależności od
                            temperatury,
                        </li>
                        <li> fotorezystory (LDR) - reagują na natężenie światła,</li>
                        <li> warystory - chronią układy przed przepięciami.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Oznaczenia rezystorów</h2>
            <p>Najczęściej spotykanym sposobem oznaczania wartości rezystorów jest kod paskowy. Kolorowe paski na
                obudowie odpowiadają cyfrom i mnożnikom, które pozwalają odczytać wartość rezystancji w omach.
                Przykład: <em style="color: brown">brązowy</em> - <em>czarny</em> - <em style="color: red">czerwony</em>
                -
                <em style="color: gold">złoty</em> = 1 kΩ ±5%
            </p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Zastosowanie rezystorów</h2>
            <p>Rezystory znajdziemy praktycznie w każdym urządzeniu elektronicznym. Pełnią m.in. funkcje:</p>
            <ul>
                <li>ograniczania prądu w diodach LED,</li>
                <li>dzielników napięcia,</li>
                <li>elementów filtrów i wzmacniaczy,</li>
                <li>zabezpieczeń przed przeciążeniem.</li>
            </ul>
            <p>Bez nich nie działałby żaden komputer, radio czy smartfon.</p>
        </div>
    </div>
    <div class="row">
        <div class="entry">
            <h2>Podsumowanie</h2>
            <p>Choć rezystory wydają się niepozorne, to właśnie one są fundamentem elektroniki. Dzięki nim możliwe jest
                bezpieczne i precyzyjne sterowanie przepływem prądu w układach. Zrozumienie ich działania to pierwszy
                krok
                do poznania tajników elektroniki.
            </p>
        </div>
    </div>
</section>
<section class="loose">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>