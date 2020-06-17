window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // show-hide vars
    let size = document.querySelector('#size'),
        standartBlock = document.querySelector('.size-standart-block'),
        unstandartBlock = document.querySelector('.size-unstandart-block');

    // show-hide-elements

    size.addEventListener('change', function () {
        if (size.value === 'standart') {
            standartBlock.classList.add('cust-show');
            standartBlock.classList.remove('cust-hide');

            unstandartBlock.classList.remove('cust-show');
            unstandartBlock.classList.add('cust-hide');
        }

        if (size.value === 'unstandart') {
            unstandartBlock.classList.add('cust-show');
            unstandartBlock.classList.remove('cust-hide');

            standartBlock.classList.remove('cust-show');
            standartBlock.classList.add('cust-hide');
        }
    });

    // calculate standart

    let pricesSt = document.querySelector('#prices'),
        priceStandart = document.querySelector('.jalousie-price-standart');

    pricesSt.addEventListener('change', function (e) {
        let i_selected = e.target.selectedIndex,
            price_selected = e.target.options[i_selected].dataset.price;
        priceStandart.innerHTML = price_selected.toLocaleString() + ' руб./шт';
    });

    // calculate unstandart

    let priceUnstandart = document.querySelector('.jalousie-price-unstandart'),
        widthUnstandart = document.querySelector('#width_u'),
        heightUnstandart = document.querySelector('#height_u'),
        btnUnstandart = document.querySelector('.but-unstandart'),
        pricesqm = priceUnstandart.dataset.pricesqm;

    btnUnstandart.addEventListener('click', function (e) {
        e.preventDefault();
        let insert_price = parseInt((widthUnstandart.value / 1000 * heightUnstandart.value / 1000) * pricesqm);
        priceUnstandart.innerHTML = insert_price.toLocaleString() + ` руб./шт (${pricesqm} руб./кв.м.)`;
    });
});