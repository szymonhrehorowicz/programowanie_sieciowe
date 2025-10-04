<?php include 'partials/header.php'; ?>

<main>
	<section class="hero">
		<h2>Witamy w świecie elektroniki</h2>
		<p>Ta strona to krótki przewodnik po podstawowych elementach elektronicznych i ich zastosowaniach. Znajdziesz tu przystępne wyjaśnienia oraz odnośniki do podstron poświęconych rezystorom, kondensatorom, dławikom, diodom i tranzystorom.</p>
	</section>

	<section class="intro">
		<h3>Dlaczego warto się uczyć elektroniki?</h3>
		<p>Elektronika jest podstawą współczesnych urządzeń: od prostych obwodów po skomplikowane systemy cyfrowe. Zrozumienie działania podstawowych elementów ułatwia projektowanie, naprawę i tworzenie własnych projektów hobbystycznych oraz zawodowych.</p>
	</section>

	<section class="components">
		<h3>Podstawowe elementy</h3>
		<div class="grid">
			<article class="card">
				<h4><a href="rezystory.php">Rezystory</a></h4>
				<p>Elementy pasywne, które ograniczają przepływ prądu. Omówimy oznaczenia, wartości i zastosowania.</p>
			</article>

			<article class="card">
				<h4><a href="kondensatory.php">Kondensatory</a></h4>
				<p>Magazyn energii elektrycznej. Dowiesz się o pojemności, typach i użyciu w filtrach oraz układach czasowych.</p>
			</article>

			<article class="card">
				<h4><a href="dlawiki.php">Dławiki</a></h4>
				<p>Indukcyjności stosowane do ograniczania zmian prądu i w filtrach zasilania.</p>
			</article>

			<article class="card">
				<h4><a href="diody.php">Diody</a></h4>
				<p>Elementy półprzewodnikowe przepuszczające prąd w jednym kierunku — omówimy diody prostownicze, LED i inne.</p>
			</article>

			<article class="card">
				<h4><a href="tranzystory.php">Tranzystory</a></h4>
				<p>Podstawowe elementy aktywne służące do wzmacniania i przełączania sygnałów.</p>
			</article>
		</div>
	</section>

	<section class="learn-more">
		<h3>Jak korzystać ze strony</h3>
		<ul>
			<li>Kliknij w interesujący element w menu lub kartę powyżej, aby przejść do szczegółowej podstrony.</li>
			<li>Na każdej podstronie znajdziesz opis działania, najważniejsze parametry oraz proste przykłady użycia.</li>
			<li>W przyszłości dodam schematy, zdjęcia i przykładowe projekty do pobrania.</li>
		</ul>
	</section>

	<aside class="resources">
		<h3>Przydatne zasoby</h3>
		<p>Jeśli chcesz szybko poszerzyć wiedzę, sprawdź dokumentację producentów elementów, kursy elektroniki oraz symulatory online (np. LTspice, Falstad).</p>
	</aside>

	<section class="call-to-action">
		<p>Masz pomysł na artykuł lub projekt, który chcesz zobaczyć na stronie? Napisz do autora (kontakt w stopce).</p>
	</section>
</main>

<?php include 'partials/footer.php'; ?>