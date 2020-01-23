/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var userMenuDiv = document.getElementById("userMenu");
var userMenu = document.getElementById("userButton");

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;

function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //User Menu
    if (!checkParent(target, userMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, userMenu)) {
            // click on the link
            if (userMenuDiv.classList.contains("invisible")) {
                userMenuDiv.classList.remove("invisible");
            } else {
                userMenuDiv.classList.add("invisible");
            }
        } else {
            // click both outside link and outside menu, hide menu
            userMenuDiv.classList.add("invisible");
        }
    }

    //Nav Menu
    if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
            } else {
                navMenuDiv.classList.add("hidden");
            }
        } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
        }
    }

}

function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}

// /**********************
//  * 
//  * MODAL
//  * 
//  * ********************/

// //  Open Modal
// var openmodal = document.querySelectorAll('.modal-open');
// for (var i = 0; i < openmodal.length; i++) {
//     openmodal[i].addEventListener('click', function (event) {
//         event.preventDefault();
//         toggleModal();
//     })
// }

// const overlay = document.querySelector('.modal-overlay');
// var closemodal = document.querySelectorAll('.modal-close');

// overlay.addEventListener('click', toggleModal);

// for (var i = 0; i < closemodal.length; i++) {
//     closemodal[i].addEventListener('click', toggleModal)
// }

// // ESC Modal for close on keyboard
// document.onkeydown = function (evt) {
//     evt = evt || window.event
//     var isEscape = false
//     if ("key" in evt) {
//         isEscape = (evt.key === "Escape" || evt.key === "Esc")
//     } else {
//         isEscape = (evt.keyCode === 27)
//     }
//     if (isEscape && document.body.classList.contains('modal-active')) {
//         toggleModal();
//     }
// };

// // Activate the modal with 0 opacity
// // we can't close the modal until we click ESC or "x" symbol
// function toggleModal() {
//     const body = document.querySelector('body')
//     const modal = document.querySelector('.modal')
//     modal.classList.toggle('opacity-0')
//     modal.classList.toggle('pointer-events-none')
//     body.classList.toggle('modal-active')
// }

/**
 * Filterable Surat
 * */
let filterInput = document.querySelector('.search-input');

filterInput.addEventListener('keyup', filterSurat);

function filterSurat() {
    // Get value from input
    let filterValue = document.getElementById('cari-surat').value.toLowerCase();

    // Get div collection
    let collection = document.querySelector('.collection-surat');

    // Get text surat 
    let surat = collection.querySelectorAll('div.card-surat');

    for (let i = 0; i < surat.length; i++) {
        let isi = surat[i].getElementsByTagName('p')[0];

        if (isi.innerText.toLowerCase().indexOf(filterValue) > -1) {
            surat[i].style.display = '';
        } else {
            surat[i].style.display = 'none';
        }
    }
}
