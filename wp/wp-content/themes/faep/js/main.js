$(document).ready(function(){


	//IE Debug
	(function detectIE() {
	    var ua = window.navigator.userAgent;

	    var msie = ua.indexOf('MSIE ');
	    if (msie > 0) {
	        // IE 10 or older => return version number
	        var ieV = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
	        document.querySelector('body').className += ' IE';
	    }

	    var trident = ua.indexOf('Trident/');
	    if (trident > 0) {
	        // IE 11 => return version number
	        var rv = ua.indexOf('rv:');
	        var ieV = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
	        document.querySelector('body').className += ' IE';
	    }

	    var edge = ua.indexOf('Edge/');
	    if (edge > 0) {
	       // IE 12 (aka Edge) => return version number
	       var ieV = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
	        document.querySelector('body').className += ' IE';
	    }

	    // other browser
	    return false;
	})();


	/* Menu Mobile */
	function menuMobFunc(el){
		this.el = el;
		this._init();
	}
	menuMobFunc.prototype._init = function(){
		this.btnMob = this.el.find('.btn-menu-mob');
		this.menu = this.el.find('.menu1');
		this.btnCloseMob = this.el.find('.close-menu-mob');

		this._initEvents();
	}
	menuMobFunc.prototype._initEvents = function(){
		var self = this;

		this.btnMob.on('click', function(e){
			e.preventDefault();
			self._startMenu();
		});

		this.btnCloseMob.on('click', function(e){
			e.preventDefault();
			self._closeMenu();
		});
	}
	menuMobFunc.prototype._startMenu = function(){
		var self = this;

		this.menu.addClass('menu1-active1');
	}
	menuMobFunc.prototype._closeMenu = function(){
		var self = this;

		this.menu.removeClass('menu1-active1');
	}

	new menuMobFunc( $('.header2') );




	function formPadFunc(el){
		this.el = el;
		this._init();
	}
	formPadFunc.prototype._init = function(){
		this.btnA = this.el.find('.btn-enviar');
		this.submit = this.el.find('.enviar-hidden');
		this.loader = this.el.find('.load');
		this.input = this.el.find('.valid');
		this.status = true;
		this.msgErro = '';
		this.erroForm = this.el.find('.erro-form');
		this.inputsCErros = [];

		this._initEvents();
	}
	formPadFunc.prototype._initEvents = function(){
		var self = this;

		this.btnA.on('click', function(e){
			e.preventDefault();
			self._startLoad();
		});
	}
	formPadFunc.prototype._startLoad = function(){
		this.loader.fadeTo(150, '1');

		if(this.erroForm.hasClass('active')){
			this.erroForm.css('display', 'none');
			this.erroForm.remove('active');			
		}

		this.input.each(function(){
			$(this).removeClass('input-error');
		})

		this.inputsCErros.length = 0;

		this._startValid();
	}
	formPadFunc.prototype._startValid = function(){
		var self = this;
		this.input.each(function(){
			if($(this).val() == ''){
				self.status = false;
				self.msgErro = '*Campos obrigatórios vázios';
				self.inputsCErros.push($(this));
			}
		});

		this._endFunc();
	}
	formPadFunc.prototype._endFunc = function(){
		var self = this;

		setTimeout(function(){
			self.loader.fadeTo(150, '0');

			if(self.status == false){
				self.erroForm.find('p').text(self.msgErro);
				self.erroForm.css('display', 'block');
				self.erroForm.addClass('active');

				for(i=0; i<self.inputsCErros.length; i++){
					self.inputsCErros[i].addClass('input-error');
				}

				self.status = true;
			}
			else{
				self.submit.trigger('click');
			}

		}, 450)
	}

	new formPadFunc( $('.search-form') );
	new formPadFunc( $('.form-contact') );
	new formPadFunc( $('.form-email') );
	new formPadFunc( $('.search-form-lista') );




	class colapseCursosHome{
		constructor(el, option){
			this.el = el;
			this.itemMenu = this.el.querySelectorAll( '.colapse-menu li a' );
			this.itemContent = this.el.querySelector( '.content-colapse .item' );
			this.activeContent = this.el.querySelector( '.content-colapse .item.active' );
			this.activeMenu = this.el.querySelector('.colapse-menu .active');
			this.boolean = true;

			this._init();
		}
		_init(){
			var self = this;
			
			this.itemMenu.forEach(function(el, i){
				el.addEventListener('click', function(e){
					e.preventDefault();

					if(self.boolean){
						self._startFunc(this.attributes[0].textContent, this);
					}
				});
			});
		}
		_startFunc(select, thisMenu){
			this.boolean = false;
			this.activeContent.classList.remove('active');
			this.activeMenu.classList.remove('active');
			thisMenu.classList.add('active');
			this.activeMenu = this.el.querySelector('.colapse-menu .active');

			setTimeout(()=> {
				document.querySelector(`.content-colapse .${select}`).classList.add('active');
				this.activeContent = this.el.querySelector( '.content-colapse .item.active' );
				this.boolean = true;
			}, 300);

		}
	}
	window.colapseCursosHome = colapseCursosHome;





/* Function Carousel - Home */
	function carouselFunc(el){
		this.el = el;
		this._init();
	}
	carouselFunc.prototype._init = function(){
		this.slides = this.el.find('.slides a');
		
		this._initEvents();
	}
	carouselFunc.prototype._initEvents = function(){
		this._carouselPlugin();
		this._carouselLinks();
		this._debug();
	}
	carouselFunc.prototype._debug = function(){
		var self = this;

		//Na home faz com que se clicar no ultimo slide na seta, volte pro primeiro slide
		if($(this.el[0]).hasClass('carousel-ban')){
			ultimaLayer = false;
			this.ultimoSlide = this.slides.length +1;
			$('.nav--next').on('click', function(){
				if(ultimaLayer){
					self.el.find('.dots .dot').eq(0).trigger('click');
					ultimaLayer = false;
				}
				if(self.el.find('.dots .dot.active')[0].attributes[1].nodeValue == self.ultimoSlide){
					ultimaLayer = true;
				}
			});			
		}
	}
	carouselFunc.prototype._carouselPlugin = function(){
		var self = this;

		if(this.slides.length > 1){
		   self.el.ma5slider();		
		}
	}
	carouselFunc.prototype._carouselLinks = function(){
		this.slides.each(function(){
			that = $(this);

			if(that.attr('href') == ''){
				that.addClass('defaut-link-carousel');
				$(that).on('click', function(e){
					e.preventDefault();
				});
			}
		})
	}	
	window.carouselFunc = carouselFunc;


	class ligamosPVoce{
		constructor(el, option){
			this.el = el;
			this.header = this.el.querySelector( '.header' );
			this.content = this.el.querySelector( '.content' );
			this._init();
		}

		_init(){
			this.header.addEventListener('click', ()=>{
				this._startColapseLig();
			})
		}
		_startColapseLig(){
			$(this.content).slideToggle();
		}
	}

	new ligamosPVoce( document.querySelector( '.ligamos-voce' ) );
});