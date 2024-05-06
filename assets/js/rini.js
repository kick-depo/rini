console.log('Скрипт успешно подключен ^_^')
document.addEventListener('DOMContentLoaded', function() {

  // Галерея
  let thumbnails = document.querySelectorAll('.thumbnail')
  thumbnails.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
       document.getElementById('main-image').src = thumbnail.src
    })
  })
  
  const cartWrapper = document.querySelector('.cart_wrapper')

  // Обновление корзины
  function toggleCartStatus() {
    const cartNoneMessage = document.querySelector('.cart_none')
    const cartSmallInfo = document.querySelector('.cart_small_info')

    if (cartWrapper.children.length > 0) {
      cartNoneMessage.classList.add('d-none')
      cartSmallInfo.classList.remove('d-none')
    } else {
      cartNoneMessage.classList.remove('d-none')
      cartSmallInfo.classList.add('d-none')
    }
  }

  // Отслеживание клика
  document.querySelectorAll('.cart_buy-button').forEach(function(button) {
    button.addEventListener('click', function(event) {
      const cartridge = event.target.closest('.cart_cartridge')
      const cartridgeType = cartridge.dataset.type
      const cartridgeInfo = {
        title: document.querySelector('.cart_cartridge-title').innerText,
        price: parseInt(cartridge.querySelector('.cart_cartridge-price').innerText),
        type: cartridgeType,
      }

      const cartItemHTML = `<div class="row cart-item mt-2 text-center">
                            <div class="col-4">
                              <p>${cartridgeInfo.title}</p>
                              <small class="text-muted">${cartridgeInfo.type}</small>
                            </div>
                            <div class="col-4">${cartridgeInfo.price}</div>
                            <div class="col-4">
                              <div class="row counter_wrapper">
                                <div class="col-4 p-0" data-action="minus">-</div>
                                <div class="col-4 p-0" data-counter>1</div>
                                <div class="col-4 p-0" data-action="plus">+</div>
                              </div>
                            </div>
                          </div>`
                          
      cartWrapper.insertAdjacentHTML('beforeend', cartItemHTML)
      toggleCartStatus()

      // Счетчик
      const newCartItem = cartWrapper.lastElementChild

      // Минус
      newCartItem.querySelector('[data-action="minus"]').addEventListener('click', function() {
        const counter = newCartItem.querySelector('[data-counter]')
        let currentValue = parseInt(counter.innerText)
        if (currentValue > 1) {
          counter.innerText = currentValue - 1
        } else {
          newCartItem.remove()
          toggleCartStatus()
        }
      })
      // Плюс
      newCartItem.querySelector('[data-action="plus"]').addEventListener('click', function() {
        const counter = newCartItem.querySelector('[data-counter]')
        counter.innerText = parseInt(counter.innerText) + 1
      })
    })
  })
})
