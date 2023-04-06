let favoriteButton = document.querySelector('.favorite-button')

if (favoriteButton !== null) {
    document.querySelectorAll('.favorite-button').forEach(item => {
        item.addEventListener('click', function(){
            if (item.classList.contains('active')) {
                item.classList.remove('active')
            } else {
                item.classList.add('active')
            }
        })
    })
}
