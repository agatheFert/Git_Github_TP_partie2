// Début scroll

var slideLeft = {
    distance: '150%',
	origin: 'left',
	duration: 1500,
	
	
	};

	var slideRight = {
		distance: '150%',
		origin: 'right',
		duration: 1500,
		
    };
    
    var slideBottom = {
		distance: '150%',
		origin: 'bottom',
		duration: 1000,
		
	};

    var slideBottom2 = {
		distance: '150%',
		origin: 'bottom',
		duration: 1500,
		
	};


    var slidetop = {
		distance: '150%',
		origin: 'top',
		duration: 1000,
		
	};


    var slidetop2 = {
		distance: '150%',
		origin: 'top',
		duration: 1500,
		
	};


	ScrollReveal().reveal('.left1', slideLeft);
    ScrollReveal().reveal('.right1', slideRight);
    ScrollReveal().reveal('#bas', slideBottom);
    ScrollReveal().reveal('.bas1', slideBottom2);
    ScrollReveal().reveal('.top', slidetop);
    ScrollReveal().reveal('.top2', slidetop2);
    
    // Fin scroll

// Burger menu


var content = document.querySelector('#hamburger-content');
var sidebarBody = document.querySelector('#hamburger-sidebar-body');

sidebarBody.innerHTML = content.innerHTML;

var button = document.querySelector('#hamburger-button');
var overlay = document.querySelector('#hamburger-overlay');
var activatedClass = 'hamburger-activated';

button.addEventListener('click', function(e) {
    e.preventDefault();

    this.parentNode.classList.add(activatedClass);
});

button.addEventListener('keydown', function(e) {
    if (this.parentNode.classList.contains(activatedClass))
    {
        if (e.repeat === false && e.which === 27)
            this.parentNode.classList.remove(activatedClass);
    }
});

overlay.addEventListener('click', function(e) {
    e.preventDefault();

    this.parentNode.classList.remove(activatedClass);
});



  document.addEventListener('DOMContentLoaded',function(event){

    document.addEventListener('keydown',bouge);
   
	//  la fonction "bouge" recupere en parametre le resultat de l'evenement "keydown" 
    function bouge(e){
        
		e = e || window.event; // pour IE afin d'intercepter l'évenement
		
		
        console.log(e);
        //console.log(e.keyCode);
        
    }
  });

