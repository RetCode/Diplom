let openModal = document.querySelectorAll('.login_button');
let openReg = document.querySelector('.reg_button');
let backReg = document.querySelector('.back_button');
let closeModal = document.querySelector('.close_button');

openModal.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.reg_modal-wrapper').classList.add('open')
    })
})

openReg.addEventListener('click', () => {
    document.querySelector('.login_modal').classList.remove('modal_active');
    document.querySelector('.registr_modal').classList.add('modal_active');
})

backReg.addEventListener('click', () => {
    document.querySelector('.login_modal').classList.add('modal_active');
    document.querySelector('.registr_modal').classList.remove('modal_active');
})

closeModal.addEventListener('click', () => {
    document.querySelector('.reg_modal-wrapper').classList.remove('open');
})