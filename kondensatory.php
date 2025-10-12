<?php include 'partials/header.php'; ?>
<header class="masthead capacitors_masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Kondensatory</h1>
            </div>
        </div>
    </div>
</header>
<section class="projects-section bg-light" id="projects">
<div class="container px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Co to jest kondensator?</h2>
        <p>Kondensator to pasywny element elektroniczny, 
            który magazynuje energię w polu elektrycznym. 
            Działa na zasadzie gromadzenia ładunku elektrycznego między
            dwoma przewodzącymi płytkami oddzielonymi dielektrykiem (izolatorem).
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Jak działa kondensator?</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Gdy kondensator jest podłączony do źródła napięcia, na jego okładkach gromadzą się przeciwne ładunki.</li>
                <li class="list-group-item">Po odłączeniu źródła napięcia, kondensator może oddać zgromadzoną energię do obwodu.</li>
                <li class="list-group-item">W przeciwieństwie do baterii, kondensator ładuje się i rozładowuje bardzo szybko.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Podstawowe parametry kondensatorów</h2>
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
                        <th>Pojemność (C)</th>
                        <td>Mierzona w faradach (F), określa ilość zgromadzonego ładunku</td>
                    </tr>
                    <tr>
                        <th>Napięcie pracy</th>
                        <td>Maksymalne napięcie, jakie kondensator może bezpiecznie wytrzymać</td>
                    </tr>
                    <tr>
                        <th>ESR (Equivalent Series Resistance)</th>
                        <td>Określa straty energii podczas pracy kondensatora</td>
                    </tr>
                    <tr>
                        <th>Tolerancja</th>
                        <td>Odchylenie rzeczywistej pojemności od wartości nominalnej</td>
                    </tr>
                </tbody>
            </table>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Rodzaje kondensatorów</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Elektrolityczne - duża pojemność, stosowane w zasilaczach.</li>
                <li class="list-group-item">Ceramiczne - małe rozmiary, szybka reakcja, idealne do filtracji sygnałów.</li>
                <li class="list-group-item">Foliowe - stabilne temperaturowo, wykorzystywane w precyzyjnych aplikacjach.</li>
                <li class="list-group-item">Superkondensatory - bardzo duża pojemność, stosowane jako magazyny energii.</li>
            </ul>
        </p>
    </div>
    <div class="row gx-0 mb-4 mb-lg-5">
        <h2>Zastosowania kondensatorów</h2>
        <p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Filtracja - wygładzanie napięcia w zasilaczach.</li>
                <li class="list-group-item">Magazynowanie energii - w układach awaryjnego zasilania.</li>
                <li class="list-group-item">Sprzężenie sygnału - oddzielanie składowych AC i DC.</li>
                <li class="list-group-item">Oscylatory i generatory - wytwarzanie sygnałów o określonej częstotliwości.</li>
            </ul>
        </p>
    </div>
</div>
</section>
<section class="projects-section bg-light">
    <?php include 'partials/comments_section.php'; ?>
</section>
<?php include 'partials/footer.php'; ?>