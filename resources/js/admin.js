/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


//** delete single item car in db*/
const deleteForms = document.querySelectorAll('.delete');
deleteForms.forEach(singleForm => {
    singleForm.addEventListener('submit', function (event) {
        event.preventDefault(); // § blocchiamo l'invio del form
        userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('post-model')}?`);
        if (userConfirmation) {
            this.submit();
        }
    })
});
