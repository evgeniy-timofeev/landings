import Popup from "./popup.js";

const phoneLayer = document.getElementById('phone');
const phoneMain = document.getElementById('phone--main');

const maskOptions = {
    mask: '+{7} (000) 000-00-00'
};
IMask(phoneLayer, maskOptions);
IMask(phoneMain, maskOptions);

const recall = document.querySelector('.recall')
const recallNext = document.querySelector('.recall + .recall')
recall.onclick = (event) => {
    event.currentTarget.style.display = 'none'
    recallNext.style.display = 'flex'
}

const Modal = new Popup({
    linkAttributeName: "data-popup",
    catchFocus: true,
    closeOnEsc: true,
    backscroll: true,
    beforeOpen: function (modal) {

    },
    afterClose: function (modal) {

    },
});

$('#order').click(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/contact.php',
        data: $('#callback-form').serialize(),
        success: function (data) {
            Modal.close()
            console.log(JSON.parse(data));
        },
    });
});

$('#call').click(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/contact.php',
        data: $('#call-form').serialize(),
        success: function (data) {
            recallNext.style.display = 'none'
            console.log(JSON.parse(data));
        },
    });
});

/*
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.animate__animated')[0].classList.add('animate__backInDown')
});*/
