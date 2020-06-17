window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    let navBar = document.querySelector('.navbar-nav'),
        navItem = document.querySelectorAll('.nav-item'),
        url = window.location.pathname;

    for (let i = 0; i < navItem.length; i++) {
        if (url === '/') {
            navItem[0].classList.add('active');
        }
        if (url.slice(0, 6) === '/about') {
            navItem[1].classList.add('active');
        }
        if (url.slice(0, 8) === '/service') {
            navItem[2].classList.add('active');
        }
        if (url.slice(0, 8) === '/product') {
            navItem[3].classList.add('active');
        }
        if (url.slice(0, 8) === '/contact') {
            navItem[4].classList.add('active');
        }

    }
});