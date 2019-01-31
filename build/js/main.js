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




	function colapseFunc( el ){
		this.el = el;
		this._init();
	}
	colapseFunc.prototype._init = function(){
		var self = this;
		this.selectColpseInput = this.el.find('select.colapse-select-js');
		this.selectColpseLi = this.el.find('ul.colapse-select-js li');
		this.box = this.el.find('.colapse-content .box');
		this.loader = this.el.find('.colapse-content .load');
		this.colapseContentHeight1 = this.el.find('.colapse-content').height();
		this.colapseContent = this.el.find('.colapse-content');
		this.colapseContentAjuste = this.el.find('.container-ajuste');

		this._debug();

		//Quando mudar o filtro pelo mobile
		this.selectColpseInput.on('change', function(){
			self._startColapse($(this).val());
		});

		//Quando mudar o filtro pelo desktop 
		this.selectColpseLi.each(function(){
			$(this).find('a').on('click', function(e){
				e.preventDefault();
				self._startColapse($(this).attr('href'));
			});
		})
	}
	colapseFunc.prototype._debug = function(){
		var self = this;

		//Quando faz o resize, ocorre um bug na altura por conta de setar quando mobile o height
		$(window).resize(function(){
			windowWidth = $(window).outerWidth();
			
			if(windowWidth > 576){
				self.colapseContentAjuste.css('height', 'auto');
			}
		});
	}
	//Inicia o Colapse
	colapseFunc.prototype._startColapse = function(elem){
		var self = this;
		
		//Faz o processo inicial de apagar os elementos e aparecer o loader
		if (window.matchMedia("(min-width: 576px)").matches) {
			this.colapseContentHeight1 = this.el.find('.colapse-content').height();
		}

		this.colapseContentAjuste.css('height', this.colapseContentHeight1);


		this.colapseContentAjuste.fadeTo(300, '0', function(){
			self.box.each(function(){
				$(this).css('display', 'none');
			});		

			self.loader.fadeTo(300, '1');
		})

		// Dps de 600 segs traz os itens a aparecer, se for mobile calcula a medida e faz scroll
		setTimeout(function(){
			resizeHeight = 0;

			self.loader.fadeTo(300, '0', function(){
				$('.colapse-content .'+elem).each(function(){
					$(this).css('display', 'block');
					resizeHeight += $(this).height() + 32;

				});	

				self.colapseContentAjuste.fadeTo(300, '1');

				
				if (window.matchMedia("(max-width: 576px)").matches) {
					self.colapseContentAjuste.animate({
						height: resizeHeight+'px'
					});

					$('html, body').animate({
						scrollTop: self.colapseContent.offset().top - 50
					});
				}
				else{
					self.colapseContentAjuste.css('height', 'auto');				
				}
			});		
		}, 600);

	}
	new colapseFunc ( $('.lista-cursos-pad') );




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
			$('.nav--next').on('click', function(){
				if(ultimaLayer){
					self.el.find('.dots .dot').eq(0).trigger('click');
					ultimaLayer = false;
				}
				if(self.el.find('.dots .dot.active')[0].attributes[1].nodeValue == 4){
					ultimaLayer = true;
					//
				}

				//console.log(ultimaLayer)
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
	new carouselFunc ( $('.carousel-ban') );	
	new carouselFunc ( $('.carousel-ban2') );	
	window.carouselFunc = carouselFunc;


	function colapseCurso(el){
		this.el = el;
		this._init();
	}
	colapseCurso.prototype._init = function(){

		var self = this;
		this.btnA = this.el.find('.select-colapse a');
		this.btnSelect = this.el.find('.select-colapse-mob');
		this.boxContentActive = this.el.find('.colapse-boxes .box.active');

		this.btnSelect.on('change', function(e){
			e.preventDefault();
			self._startFunc($(this)[0].value);
		});

		this.btnA.each(function(){

			$(this).on('click', function(e){
				e.preventDefault();
				self._startFunc($(this).attr('href'));
			})
		});
	}
	colapseCurso.prototype._startFunc = function(select){
		var self = this;
		this.boxContentActive.fadeTo(200, '0');
		this.boxContentActive.removeClass('active');

		this.el.find('.select-colapse a.active').removeClass('active');
		this.el.find('.select-colapse a.'+select).addClass('active');

		setTimeout(function(){
			self.el.find('.colapse-boxes .'+select).fadeTo(200, '1');
			self.el.find('.colapse-boxes .'+select).addClass('active');
			self.boxContentActive = self.el.find('.colapse-boxes .box.active');

			if(self.el[0] == $( '.colapse-inf-adicionais' )[0]){
				self.el.find('.colapse-boxes').css('height', self.el.find('.colapse-boxes .box.active').height())
			}
			if(self.el[0] == $( '.colapse-formacao' )[0]){
				self.el.find('.colapse-boxes').css('height', self.el.find('.colapse-boxes .box.active').height())
			}
		}, 300);
	}

	new colapseCurso( $( '.colapse-formacao' ) );
	new colapseCurso( $( '.colapse-inf-adicionais' ) );

});