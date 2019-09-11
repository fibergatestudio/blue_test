window.addEventListener('DOMContentLoaded', () => {

    /* burger (menu) */
    const burger = document.getElementsByClassName('burger')[0];
    const lang = document.getElementsByClassName('header__lang-switcher')[0];

    burger.addEventListener('click', function() {
        this.classList.toggle('active');
        this.parentElement.classList.toggle('active');
    })

    /* Lang switcher */
    const langBtns = document.getElementsByClassName('lang__trigger');
    const langList = document.getElementsByClassName('lang__list')[0];

    langBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            langList.classList.toggle('visible');
        })
    })

    /* Front Page counter */
    
    initScrollDetection();

    /* popups */
    const popupTriggers = document.getElementsByClassName('js-open-popup');
    const closePopupBtns = document.getElementsByClassName('js-close-popup');
    const popupLayout = document.getElementsByClassName('layout')[0];
    const popups = document.getElementsByClassName('popup');

    popupTriggers.forEach(btn => {
        btn.addEventListener('click', openPopup);
    })

    closePopupBtns.forEach(btn => {
        btn.addEventListener('click', closePopup);
    })

    function openPopup() {
        const tgt = document.getElementById(this.dataset.popupId);
        if (!tgt) return;
        closeAllPopups();
        popupLayout.classList.add('visible');
        tgt.classList.add('visible');
    }

    function closePopup() {
        closeAllPopups();
        popupLayout.classList.remove('visible');
    }

    function closeAllPopups() {
        popups.forEach(popup => {
            popup.classList.remove('visible');
        });
    }

    // input masking and validation
    const validateOptions = {
        bankCardNumber: {
            mask: '9{4} 9{4} 9{4} 9{4}',
            showMaskOnFocus: false,
            showMaskOnHover: false,
        },
        bankCardExpiry: {
            alias: 'datetime',
            inputFormat: 'mm/yy',
            min: '08/19',
            max: '01/30'
        },
        cvv: {
            mask: '9{3}',
            placeholder: 'XXX',
            clearMaskOnLostFocus: false
        },

    }

    document.getElementsByClassName('js-validate').forEach(input => {
        const opts = validateOptions[input.dataset.maskOptions] || validateOptions[input.type] || false;
        if (opts) Inputmask(opts).mask(input);
    })

    // show details(drop menu)

    const showDetails = document.getElementsByClassName('js-show-hidden-block');

    showDetails.forEach(btn => {
        btn.addEventListener('click', function() {
            this.classList.toggle('active');
            this.parentElement.classList.toggle('active');
            document.querySelector(this.dataset.selector).classList.toggle('visible');
        })
    })

    const sliderSettings = {
        howBlueBirdWorks: {
            slidesPerView: 'auto',
            spaceBetween: 30,
            watchOverflow: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                767: {
                    spaceBetween: 10
                }
            }
        },
        bestGoods: {
            slidesPerView: 'auto',
            spaceBetween: 20,
            navigation: {
                nextEl: '.slider-control_next',
                prevEl: '.slider-control_prev',
                disabledClass: 'best__control_disabled'
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                767: {
                    spaceBetween: 10
                }
            }
        },
        testimonials: {
            slidesPerView: 'auto',
            spaceBetween: 30,
            centeredSlides: true,
            scrollbar: {
                el: '.testimonials__scroll',
                hide: false,
                draggable: true
            },
            pagination: {
                el: '.testimonials__pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1199: {
                    spaceBetween: 10,
                    centeredSlides: false,
                    slidesOffsetBefore: 0,
                }
            },
            on: {
                init: function() {
                    this.params.slidesOffsetBefore = getSlideOffset(this);
                    this.update()
                },
                slideChange: function () {
                    if (this.isEnd) {
                        this.el.classList.add('testimonials__list_reach-end');
                    } else {
                        this.el.classList.remove('testimonials__list_reach-end');
                    }
                    
                }
            }
        },
        goodsSlider: {
            slidesPerView: 3,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                767: {
                    slidesPerView: 2
                }
            },
            on: {
                init: function() {
                    this.params.navigation.prevEl = this.el.parentElement.querySelector('.goods__control_prev');
                    this.params.navigation.nextEl = this.el.parentElement.querySelector('.goods__control_next');
                }
            }
        },
        history: {
            initialSlide: 0,
            effect: 'fade',
            simulateTouch: false,
            breakpoints: {
                575: {
                    autoHeight: true
                }
            }
        },
        historyPagination: {
            slidesPerView: 5,
            direction: window.matchMedia("(max-width: 767px)").matches ? 'horizontal' : 'vertical',
            centeredSlides: true,
            slideToClickedSlide: true,
            mousewheel: true,
            breakpoints: {
                767: {
                    spaceBetween: 60,
                },
                575: {
                    slidesPerView: 3,
                }
            }
        },
        gallery: {
            effect: 'fade',
            autoHeight: true
        },
        ourCafeAdvantages: {
            slidesPerView: 4, 
            breakpoints: {
                767: {
                    slidesPerView: 'auto',
                },
            }
        },
        ourCompanies: {
            slidesPerView: 'auto',
            spaceBetween: 10,
            watchOverflow: true,
            pagination: {
                el: '.our-companies__pagination',
                type: 'bullets',
            },
        },
        offers: {
            slidesPerView: 'auto',
            spaceBetween: 20,
            watchOverflow: true,
            init: false,
            observer: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                767: {
                    spaceBetween: 10,
                },
            }
        },
        'blue-box-slider' : {
            slidesPerView: '3',
            spaceBetween: 30,
            watchOverflow: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1199: {
                    spaceBetween: 20
                },
                767: {
                    slidesPerView: 'auto',
                    spaceBetween: 10
                }
            }
        },
        default: {
            slidesPerView: 'auto',
            spaceBetween: 30,
            watchOverflow: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                767: {
                    spaceBetween: 10
                },
            }
        }
    }

    const sliders = {};
    
    document.getElementsByClassName('js-init-slider').forEach(elem => {
        const dataOptions = elem.dataset.options;

        const slider = new Swiper(elem, sliderSettings[dataOptions] || sliderSettings.default);

        if (dataOptions && !(sliders[dataOptions])) sliders[dataOptions] = slider;
    })

    const testiomonailsPrevBtn = document.getElementsByClassName('testimonials__control_prev')[0];
    const testiomonailsNextBtn = document.getElementsByClassName('testimonials__control_next')[0];

    if (testiomonailsPrevBtn) testiomonailsPrevBtn.addEventListener('click', () => sliders.testimonials.slidePrev());
    if (testiomonailsNextBtn) testiomonailsNextBtn.addEventListener('click', () => sliders.testimonials.slideNext());

    // caffe history sliders
    if (sliders.history && sliders.historyPagination) {
        
        sliders.historyPagination.on('slideChange', function() {
            sliders.history.slideTo(sliders.historyPagination.realIndex)
        })

        sliders.history.on('slideChange', function() {
            sliders.historyPagination.slideTo(sliders.history.realIndex)
        })
    }

    // gallery categories
    if (sliders.gallery) {
        const galleryControls = document.getElementsByClassName('gallery__button');

        galleryControls.forEach(button => {
            button.addEventListener('click', switchCategory);
        })

        function switchCategory() {
            if (this.classList.contains('gallery__button_active')) return;
            
            galleryControls.forEach(button => {
                button.classList.remove('gallery__button_active');
            })

            this.classList.add('gallery__button_active');
            sliders.gallery.slideTo(this.dataset.showCat);
        }
    }

    if ( sliders.offers ) {
        
        if (window.matchMedia("(max-width: 1199px)").matches) {
            sliders.offers.init();
        }
    }

    window.addEventListener('resize', function() {

        if ( sliders.testimonials ) {
            sliders.testimonials.params.slidesOffsetBefore = getSlideOffset(sliders.testimonials);
        }

        if ( sliders.historyPagination ) {
            if (window.matchMedia("(max-width: 767px)").matches) {
                sliders.historyPagination.changeDirection('horizontal');
            } else {
                sliders.historyPagination.changeDirection('vertical');
            }
        }

        if ( sliders.offers ) {

            // destroy / init slider
            
            if (window.matchMedia("(max-width: 1199px)").matches) {

                if (!sliders.offers.el || !sliders.offers.el.classList.contains('swiper-container-initialized')) {
                    sliders.offers = new Swiper('.offers.swiper-container.js-init-slider', sliderSettings.offers);
                    sliders.offers.init();
                }

            } else {
                if (sliders.offers.el && sliders.offers.el.classList.contains('swiper-container-initialized')) {
                    sliders.offers.destroy();
                }
            }
        }
    })

    function getSlideOffset(slider) {
        if (window.matchMedia("(max-width: 1199px)").matches) return 0;
        if (!slider) return;
        const testSlide = document.getElementsByClassName('testimonial-tile')[0];
        return (slider.width - testSlide.getBoundingClientRect().width - slider.params.spaceBetween - 15) / 2 * -1 - 15;
    }


    /* custom scroll init */

    const simplebarBlocks = document.getElementsByClassName('js-init-simplebar');

    initSimpleBar(simplebarBlocks);

    function initSimpleBar(blocks) {
        if (window.matchMedia("(min-width: 1200px)").matches) {
            blocks.forEach(block => {
                new SimpleBar(block, {
                    autoHide: false
                });
            });
        }
    }

    /* Catalog filters */

    document.getElementsByClassName('filters__title').forEach(item => {
        item.addEventListener('click', function() {
            this.nextElementSibling.classList.toggle('filters__list_hidden');
            this.classList.toggle('filters__title_collapsed');
        })
    })

    /* catalog search */
    const searchTrigger = document.getElementsByClassName('catalog__search-trigger')[0];
    const searchForm = document.getElementsByClassName('catalog__search')[0];

    if (searchTrigger) searchTrigger.addEventListener('click', e => {
        e.stopPropagation();
        searchForm.classList.add('active');
        searchForm.querySelector('input').focus();
    });

    new autoComplete({
        autocompleteList: ['coffee', 'tea', 'water', 'cake']
    }).init();

    // show / hide password
    
    const passwordBtns = document.getElementsByClassName('input-text__show-hide');

    passwordBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            this.classList.toggle('active');
            const textField = this.parentElement.querySelector('.input-text__input');
            if (textField.type === 'password') {
                textField.type = 'text';
            } else {
                textField.type = 'password';
            }
        })
    })

    // sidebar

    const openBoxes = {};

    document.getElementsByClassName('js-box-trigger').forEach(btn => {

        if (!openBoxes[btn.dataset.targetId]) openBoxes[btn.dataset.targetId] = document.getElementById(btn.dataset.targetId);

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            try {
                openBoxes[this.dataset.targetId].classList.toggle('visible');
            } catch (e) {
                console.log('Element not found');
            }
            
        })
    })

    document.querySelectorAll('.js-close-offer, .js-close-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            this.parentElement.classList.remove('visible');
        })
    })

    document.body.addEventListener('click', e => {

        if (langList.classList.contains('visible') && !langList.contains(e.target)) {
            langList.classList.remove('visible');
        }

        if (searchForm && searchForm.classList.contains('active') && !searchForm.contains(e.target)) {
            searchForm.classList.remove('active');
        }

        for (var key in openBoxes) {

            if (openBoxes[key] && openBoxes[key].classList.contains('visible') && !openBoxes[key].contains(e.target)) {
                openBoxes[key].classList.remove('visible');
            }
        }
    })

    // custom select
    
    const selectElements = document.getElementsByClassName('js-init-styleselect');

    selectElements.forEach(select => styleSelect(select));

    // input-number
    
    const inputNumbers = document.getElementsByClassName('input-number');

    inputNumbers.forEach(item => {
        const val = item.querySelector('.input-number__value');
        const controls = item.querySelectorAll('.input-number__button');

        val.addEventListener('keydown', function(e) {
            
            if (e.key === 'Backspace') return;
            if (e.key === 'Enter') return;

            if (!e.key.match(/^\d+/)) {
                e.preventDefault();
                return false;
            }
        })

        controls.forEach(btn => {
            btn.addEventListener('click', function() {
                const newval = +val.value + +this.dataset.action;
                if (newval < val.dataset.min || newval > val.dataset.max) return;
                val.value = newval;
            })
        })
    });

    // calendar events
    
    const mobileEventWrapper = document.getElementsByClassName('events__mobile-event')[0];
    const eventsDates =  document.querySelectorAll('.calendar__cell_has-event .calendar__date');

    eventsDates.forEach(date => {
        date.addEventListener('click', function() {
            if (this.classList.contains('calendar__date_active')) return;

            eventsDates.forEach(el => el.classList.remove('calendar__date_active'));

            this.classList.add('calendar__date_active');

            mobileEventWrapper.innerHTML = '';
            mobileEventWrapper.appendChild( date.nextElementSibling.cloneNode(true));
        })
    })


    // bluebox

    initBlueBoxEvents();

})

function initBlueBoxEvents() {
    const bbProducts = document.getElementsByClassName('bb-card');

    bbProducts.forEach( (card, idx) => {
        card.dataset.index = idx;
        card.addEventListener('click', function() {
            this.classList.toggle('bb-card_checked');
        })
    })
}

function getWindowHeight() {
    return Math.max(
        document.body.scrollHeight, document.documentElement.scrollHeight,
        document.body.offsetHeight, document.documentElement.offsetHeight,
        document.body.clientHeight, document.documentElement.clientHeight
    );
}

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}


function initScrollDetection() {
    const mainBlocks = document.getElementsByClassName('js-block-cnt');
    const cntScreen = document.getElementsByClassName('scroll-panel__num')[0];
    const nextBlockBtn = document.getElementsByClassName('scroll-panel__slide-to')[0];
    const thumb = document.getElementsByClassName('scroll-panel__thumb')[0];
   
    if (mainBlocks.length && cntScreen) printCurrent();

    if (nextBlockBtn) {
        nextBlockBtn.addEventListener('click', goToScreen);
        nextBlockBtn.dataset.scrollToScreen = getCurrentScreen();
    }

    if (thumb) {
        mooveThumb();
    }

    function mooveThumb() {
        const translateThumb = getThumbPosition();
        thumb.style.cssText = `
            -webkit-transform: translate3d(0, ${translateThumb}px, 0);
            transform: translate3d(0, ${translateThumb }px, 0);
        `;
    }

    function getThumbPosition() {
        const trackHeight = thumb.parentElement.getBoundingClientRect().height;
        const thumbHeight = thumb.getBoundingClientRect().height;

        const dt = (trackHeight - thumbHeight);
        const progress = 1 / (mainBlocks.length - 1) * (getCurrentScreen() - 1);

        return dt * progress;
    }

    function printCurrent() {
        cntScreen.innerText = `${getCurrentScreen()}/${mainBlocks.length}`;
    }

    function getCurrentScreen() {
        let idx = 1;

        if (pageYOffset + document.documentElement.clientHeight >= getWindowHeight()) return mainBlocks.length;

        mainBlocks.forEach(block => {
            const pos = getPostition(block);
            if (!(pageYOffset + 100 >= pos.top && pageYOffset <= pos.bottom)) return;
            idx = mainBlocks.indexOf(block) + 1;
        })

        return idx;
    }

    function goToScreen() {
        scrollToY(this.dataset.scrollToPoint || getPostition(mainBlocks[this.dataset.scrollToScreen]).top, 1500, 'easeInOutQuint');
    }

    window.addEventListener('scroll', () => {
        if (mainBlocks.length && cntScreen) {
            printCurrent();
        }

        if (nextBlockBtn) {
            const currentScreen = getCurrentScreen();
            const changeDirection  = currentScreen >= mainBlocks.length;
            nextBlockBtn.dataset.scrollToScreen = changeDirection ? 0 : currentScreen;

            if (changeDirection) {
                nextBlockBtn.classList.add('slide-btn_to-top');
            } else {
                nextBlockBtn.classList.remove('slide-btn_to-top');
            }
        }

        if (thumb) {
            mooveThumb();
        }
    })
}

function getPostition(el) {

    const box = el.getBoundingClientRect();

    return {
        top: box.top + pageYOffset,
        bottom: box.height + pageYOffset,
        height: box.height
    }
}


/* Array methods */
const methods = ['forEach', 'map', 'filter', 'indexOf'];
const targets = [HTMLCollection, NodeList];

targets.forEach(target => {
    methods.forEach(method => {
        target.prototype[method] = function(callback) {
            return Array.prototype[method].call(this, callback);
        }
    });
})



/* RequestAnimationFrame*/

window.requestAnimFrame = (function() {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

/* Scrolling Animation*/

function scrollToY(scrollTargetY, speed, easing, beforeAnimation, afterAnimation) {

    var scrollY = window.scrollY,
        scrollTargetY = scrollTargetY || 0,
        speed = speed || 2000,
        easing = easing || 'easeOutSine',
        currentTime = 0;

    var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

    var PI_D2 = Math.PI / 2,
        easingEquations = {
            easeOutSine: function(pos) {
                return Math.sin(pos * (Math.PI / 2));
            },
            easeInOutSine: function(pos) {
                return (-0.5 * (Math.cos(Math.PI * pos) - 1));
            },
            easeInOutQuint: function(pos) {
                if ((pos /= 0.5) < 1) {
                    return 0.5 * Math.pow(pos, 5);
                }
                return 0.5 * (Math.pow((pos - 2), 5) + 2);
            }
        };

    function tick() {
        currentTime += 1 / 60;

        var p = currentTime / time;
        var t = easingEquations[easing](p);

        if (p < 1) {
            if (beforeAnimation) beforeAnimation();
            requestAnimFrame(tick);

            window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
        } else {
            if (afterAnimation) afterAnimation();
            window.scrollTo(0, scrollTargetY);
        }
    }

    tick();
}

class autoComplete {
    constructor(options = {}) {
        this.selector = options.selector || 'input[type="search"]';
        this.elems = typeof this.selector === 'string' ? document.querySelectorAll(this.selector) : this.selector;
        this.autocompleteList = options.autocompleteList || [];
        this.applySuggestKeyCode = options.applySuggestKeyCode || 'tab';
    }
    
    init() {
        this.rebuildStructure();
        this.setEventListeners();
    }
    
    rebuildStructure() {
    
        this.fields = [];
    
        [].forEach.call(this.elems, elem => {
        
            const wrapper = document.createElement('div');
            wrapper.className = 'autocomplete';
            
            elem.parentElement.insertBefore(wrapper, elem.nextElementSibling);
            
            wrapper.appendChild(elem);
            elem.classList.add('autocomplete__field');
            elem.classList.add('autocomplete__field_search');
            
            const suggest = document.createElement('input');
            suggest.type = 'text';
            suggest.className = 'autocomplete__field autocomplete__field_suggestion';
            suggest.setAttribute('tabindex', -1);
            
            wrapper.appendChild(suggest);
            
            this.fields.push({
                search: elem,
                suggest: suggest
            })
        })
    }
    
    setEventListeners() {
        
        const _this = this;
    
        [].forEach.call(this.fields, field => {

            field.search.addEventListener('keydown', function(e) {

                const suggestLength = field.suggest.value.length;

                if ( e.key.toLowerCase() === _this.applySuggestKeyCode ) {

                    if ( suggestLength !== this.value.length && this.value.length !== 0 ) e.preventDefault();
                    
                    this.value = field.suggest.value;
                    
                    field.suggest.value = '';

                }
            })
            
            field.search.addEventListener('keyup', function(e) {
                
                const keyCode = ( e.keyCode ? e.keyCode : e.which );
                
                const needle = this.value;                
                
                if ( !needle.trim().length ) {
                    field.suggest.value = '';
                    return false;
                }
                
                
                for (let i = 0, len = _this.autocompleteList.length; i < len; i++) {
                    
                    const regexp = new RegExp('^' + needle, 'i');
                    
                    if ( regexp.test( _this.autocompleteList[i] ) ) {
                    
                        field.suggest.value = (needle + _this.autocompleteList[i].slice(needle.length));
                        break;
                    }
                    
                    field.suggest.value = '';
                }
                
            });
        })
        
    }
    
}
