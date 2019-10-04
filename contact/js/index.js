/**
 * VALIDATION
 */
const form = document.querySelector('.contact-form');
const feedback = document.querySelector('.feedback');

const emailPattern = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

form.addEventListener('submit', e => {
   e.preventDefault();

    const name = form.name.value;
    const mail = form.email.value;

    if(!name) {
        alert('名前を入力してください');
        return false;
    }
    if(!emailPattern.test(mail)) {
        alert('有効なメールアドレスを入力してください');
        return false;
    }

    form.submit();
});