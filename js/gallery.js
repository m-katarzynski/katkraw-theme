const current = document.querySelector('#current');   // przypisanie wartości 'current' do diva o id="current"
const imgs = document.querySelectorAll('.imgs img');  // przypisanie wartości imgs do zbioru wszystkich zdjęć z diva .imgs
const opacity = 0.6;								  // wartość opacity
imgs[0].style.opacity = opacity;					  // ustawienie opacity na pierwszej miniaturce po wczytaniu strony

imgs.forEach(img => img.addEventListener('click', imgClick));	// przypisanie nasłuchiwania eventu do miniaturek (imgs)

function imgClick(e) {
    imgs.forEach (img => (img.style.opacity = 1));  // resetowanie opacity wszystkich miniaturek

    current.src = e.target.src; 	  				// zmiana obrazu na src klikniętego obrazka

    current.classList.add('fade-in');  				// dodanie klasy fade-in

    setTimeout(() => current.classList.remove('fade-in'), 500);  // usunięcie klasy fade-in po 0.5s

    e.target.style.opacity = opacity  				// zmiana opacity na przypisaną wartość

}