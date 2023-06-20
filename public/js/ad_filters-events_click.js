let markButton = document.querySelectorAll('.mark_button');
let modelButton = document.querySelectorAll('.model_button');
let yearButton = document.querySelectorAll('.year_button');
let generationButton = document.querySelectorAll('.generation_button');
let parametrsButton = document.querySelectorAll('.parameters_button');

markButton.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.choice_mark-block.active').classList.remove('active');
        document.querySelector('.choice_model-block').classList.add('active');
    })
})

modelButton.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.choice_model-block.active').classList.remove('active');
        document.querySelector('.choice_year-block').classList.add('active');
    })
})

yearButton.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.choice_year-block.active').classList.remove('active');
        document.querySelector('.choice_generation-block').classList.add('active');
    })
})

parametrsButton.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.choice_generation-block.active').classList.remove('active');
        document.querySelector('.choice_parameters-block').classList.add('active');
    })
})