/**
 * VALIDATION
 */
const form = document.querySelector('.contact-form');
const feedback = document.querySelector('.feedback');

form.addEventListener('submit', e => {
   e.preventDefault();

    const name = form.name.value;
    const mail = form.email.value;

    if(!name) {
        alert('入力してください');
        return false;
    }
    
    form.submit();
});