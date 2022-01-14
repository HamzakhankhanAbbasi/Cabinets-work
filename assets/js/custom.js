
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
//portfolio-slider
$('.owl-portfolio').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//portfolio-slider-sec
$('.owl-portfolio-sec').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//portfolio-slider-third
$('.owl-portfolio-third').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//design-copy slider
$('.owl-design').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

//full page search bar
var $searchOverlay = $('.body-overlay'),
    $searchTrigger = $('#search-trigger'),
    $search = $('#search-overlay-form input[type="search"]');

    $searchTrigger.click(function(e){
    $searchOverlay.fadeIn(500);
    $search.focus();
});

$('#searchOverlay').click(function(e){
  $searchOverlay.fadeIn(500);
  $search.focus();
});

$searchOverlay.find('.closeSearchbar').click(function(e){
  $searchOverlay.fadeOut(500);
});
//full page search bar Ends


// CART SIDEBAR Starts
const bodySelector = document.querySelector('body');;
const cartOpen = document.getElementById('cart-side-toggle');
const cartSidebar = document.getElementById('cart-sidebar');
const cartclose = document.getElementById('close-cart-sidebar');
const cartOverlay = document.querySelector('.card-sidebar-overlay');
cartOpen.addEventListener('click', function(){
  cartSidebar.classList.add('active');
  cartOverlay.classList.add('active');
  bodySelector.classList.add('active-sidebar');
});
cartclose.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
 bodySelector.classList.remove('active-sidebar');
});
cartOverlay.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
 bodySelector.classList.remove('active-sidebar');
});
// CART SIDEBAR Ends

// ADDING CLASS ON HEADER
$(document).ready(function() {
    $(".no-banner-wrap").prev("header").addClass("header-bg-color");
});
// ADDING CLASS ON PORTFOLIO DETAILS PAGE
$(document).ready(function() {
    $(".portfolio-detail-wrap").prev("header").addClass("hide-header");
});

// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1023,
		position: 'left'
	});
}

// popup modal starts
$('.projModalPopup').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    margin:0,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
// popup modal ends


// INDEX SEC 3 SLIDER
var swiper = new Swiper('.index-3-slider', {
	slidesPerView: 3,
	spaceBetween: 15,
	loop: true,
	autoplay: {
		delay: 5000,
		disableOnInteraction: true,
	},
    breakpoints: {
    576: {
      slidesPerView: 3,
    },
    414: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  } 
});

// INDEX SEC 4 SLIDER
var swiper2 = new Swiper('.index-4-slider', {
	slidesPerView: 'auto',
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 5000000,
		disableOnInteraction: true,
	},
	navigation: {
		nextEl: '.index-sec-4 .swiper-button-next',
		prevEl: '.index-sec-4 .swiper-button-prev',
	},
});


// CUSTOM CURSOR
var cursor = {
	delay: 8,
	_x: 0,
	_y: 0,
	endX: (window.innerWidth / 2),
	endY: (window.innerHeight / 2),
	cursorVisible: true,
	cursorEnlarged: false,
	$dot: document.querySelector('.cursor-dot'),
	$cur_span: document.querySelector('.cursor-dot span'),
	$outline: document.querySelector('.cursor-dot-outline'),

	init: function() {
        // Set up element sizes
        this.dotSize = this.$dot.offsetWidth;
        this.outlineSize = this.$outline.offsetWidth;
        
        this.setupEventListeners();
        this.animateDotOutline();
    },
    
    setupEventListeners: function() {
    	var self = this;

        // Anchor hovering
        document.querySelectorAll('a').forEach(function(el) {
        	el.addEventListener('mouseover', function() {
        		self.cursorEnlarged = true;
        		self.toggleCursorSize();
        	});
        	el.addEventListener('mouseout', function() {
        		self.cursorEnlarged = false;
        		self.toggleCursorSize();
        	});
        });

         document.querySelectorAll('#toggle-width').forEach(function(imgBtn) {
            imgBtn.addEventListener('mouseover', function() {
                self.cursorEnlarged = true;
                self.toggleCursorSize2();
            });
            imgBtn.addEventListener('mouseout', function() {
                self.cursorEnlarged = false;
                self.toggleCursorSize2();
            });
        });

        // Portfolio Items
        // document.querySelectorAll('.portfolio-item a').forEach(function(po) {
        //     po.addEventListener('mouseover', function() {
        //         self.cursorEnlarged = true;
        //         self.portfolioCursorSize();
        //     });
        //     po.addEventListener('mouseout', function() {
        //         self.cursorEnlarged = false;
        //         self.portfolioCursorSize();
        //     });
        // });
        
        // Click events
        document.addEventListener('mousedown', function() {
        	self.cursorEnlarged = true;
        	self.toggleCursorSize();
        });
        document.addEventListener('mouseup', function() {
        	self.cursorEnlarged = false;
        	self.toggleCursorSize();
        });


        document.addEventListener('mousemove', function(e) {
            // Show the cursor
            self.cursorVisible = true;
            self.toggleCursorVisibility();

            // Position the dot
            self.endX = e.pageX;
            self.endY = e.pageY;
            self.$dot.style.top = self.endY + 'px';
            self.$dot.style.left = self.endX + 'px';
        });
        
        // Hide/show cursor
        document.addEventListener('mouseenter', function(e) {
        	self.cursorVisible = true;
        	self.toggleCursorVisibility();
        	self.$dot.style.opacity = 1;
        	self.$outline.style.opacity = 1;
        });
        
        document.addEventListener('mouseleave', function(e) {
        	self.cursorVisible = true;
        	self.toggleCursorVisibility();
        	self.$dot.style.opacity = 0;
        	self.$outline.style.opacity = 0;
        });
    },
    
    animateDotOutline: function() {
    	var self = this;
    	self._x += (self.endX - self._x) / self.delay;
    	self._y += (self.endY - self._y) / self.delay;
    	self.$outline.style.top = self._y + 'px';
    	self.$outline.style.left = self._x + 'px';

    	requestAnimationFrame(this.animateDotOutline.bind(self));
    },
    
    toggleCursorSize: function() {
    	var self = this;
    	if (self.cursorEnlarged) {
    		self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
    		self.$dot.style.width = '40px';
    		self.$dot.style.height = '40px';
    		self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
    	} else {
    		self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
    		self.$dot.style.width = '6px';
    		self.$dot.style.height = '6px';
    		self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
    	}
    },

     toggleCursorSize2: function() {
        var self = this;
        if (self.cursorEnlarged) {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$dot.style.width = '100px';
            self.$dot.style.height = '100px';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
        } else {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$dot.style.width = '6px';
            self.$dot.style.height = '6px';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
        }
    },
    
    toggleCursorVisibility: function() {
    	var self = this;
    	if (self.cursorVisible) {
    		self.$dot.style.opacity = 1;
    		self.$outline.style.opacity = 1;
    	} else {
    		self.$dot.style.opacity = 0;
    		self.$outline.style.opacity = 0;
    	}
    },
    // portfolioCursorSize: function() {
    //     var self = this;
    //     if (self.cursorEnlarged) {
    //         self.$dot.style.width = '100px';
    //         self.$dot.style.height = '100px';
    //         self.$outline.style.width = '100px';
    //         self.$outline.style.height = '100px';
    //     } else {
    //         self.$dot.style.width = '6px';
    //         self.$dot.style.height = '6px';
    //         self.$outline.style.width = '32px';
    //         self.$outline.style.height = '32px';
    //     }
    // },

}

cursor.init();

// ANIMATION FOR THEME BUTTONS
function animateGenBtn(){
    let gen_btn = document.querySelectorAll(".gen-btn");
    for(let i=0; i<gen_btn.length; i++){
    	let gen_btn_span = document.createElement("span");
    	 gen_btn[i].appendChild(gen_btn_span);
    }
    $('.gen-btn').on('mouseenter', function (e) {
        let parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
        $(this).find('span').css({ top: relY, left: relX })
    }).on('mouseout', function (e) {
        let parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
        $(this).find('span').css({ top: relY, left: relX })
    });
}
animateGenBtn();

// ABOUT PAGE

// OUR TEAM SLIDER
var swiper = new Swiper('.our-team-slider', {
  slidesPerView: 3,
  spaceBetween: 15,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    680: {
      slidesPerView: 3,
    },
    414: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  }      
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});


// Measurement Page Starts


$(function() {
            $("#sortableImgThumbnailPreview").sortable({
             connectWith: ".RearangeBox",
            
                
              start: function( event, ui ) { 
                   $(ui.item).addClass("dragElemThumbnail");
                   ui.placeholder.height(ui.item.height());
           
               },
                stop:function( event, ui ) { 
                   $(ui.item).removeClass("dragElemThumbnail");
               }
            });
            $("#sortableImgThumbnailPreview").disableSelection();
        });




document.getElementById('files').addEventListener('change', handleFileSelect, false);

  function handleFileSelect(evt) {
    
    var files = evt.target.files; 
    var output = document.getElementById("sortableImgThumbnailPreview");
    
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }
      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
           var imgThumbnailElem = "<div class='RearangeBox imgThumbContainer'><i class='fas fa-times-circle imgRemoveBtn' onclick='removeThumbnailIMG(this)'></i><div class='IMGthumbnail' ><img  src='" + e.target.result + "'" + "title='"+ theFile.name + "'/></div><div class='imgName'>"+ theFile.name +"</div></div>";
                                                                                
                    output.innerHTML = output.innerHTML + imgThumbnailElem; 
          
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  function removeThumbnailIMG(elm){
    elm.parentNode.outerHTML='';
  }







// Measurement Page Ends

// NEW ARRIVAL SLIDER
var new_arrival_slider = new Swiper('.related-products-slider', {
  slidesPerView: 5,
  spaceBetween: 15,
  loop: true,
  centeredSlides: false,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    526: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  }
});

// PORTFOLIO PAGE SCRIPT
AOS.init();

let portfolio_toggle = document.getElementById("toggle-width");
let selected_slide = document.querySelector(".portfolio-main");
portfolio_toggle.addEventListener("click", function(){
    selected_slide.classList.toggle("active");
});


var swiper = new Swiper(".portfolio-pg-slider", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
  },
  pagination: {
      el: ".portfolio-pg-slider .swiper-pagination",
  },
});