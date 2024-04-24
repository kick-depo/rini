console.log('Скрипт успешно подключен ^_^')
document.addEventListener('DOMContentLoaded', function() {
  let thumbnails = document.querySelectorAll('.thumbnail')
  thumbnails.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
      document.getElementById('main-image').src = thumbnail.src
    })
  })
})