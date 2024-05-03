console.log('Скрипт успешно подключен ^_^')
document.addEventListener('DOMContentLoaded', function() {

  // Галерея
  let thumbnails = document.querySelectorAll('.thumbnail')
  thumbnails.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
      document.getElementById('main-image').src = thumbnail.src
    })
  })
  
  









  
  // Счетчик
  window.addEventListener('click', function(event) {

    let counter

    if (event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus') {
      const counterWrapper = event.target.closest('.counter-wrapper')
      counter = counterWrapper.querySelector('[data-counter]')
    }

    if (event.target.dataset.action === 'plus') { 
      counter.innerText = ++counter.innerText
    }

    if (event.target.dataset.action === 'minus') {
      if (parseInt(counter.innerText) > 1) {
        counter.innerText = --counter.innerText
      } else if (event.target.closest('.cart-wrapper') && parseInt(counter.innerText) === 1) {
        event.target.closest('.cart-item').remove()
        toggleCartStatus()
        calcCartPrice()
      }
    }

    if (event.target.hasAttribute('data-action') && event.target.closest('.cart-wrapper')) {
      calcCartPrice()
    }
  })
  // Скрыть строку "У вас нет покупок"
    function toggleCartStatus() {
    const cartWrapper = document.querySelector('.cart-wrapper')
    const cartEmptyBadge = document.querySelector('[data-cart-empty]')

    const orderForm = document.querySelector('#order-form')
    if (cartWrapper.children.length > 0) {
      cartEmptyBadge.classList.add('d-none')
      orderForm.classList.remove('d-none')
    } else {
      cartEmptyBadge.classList.remove('d-none')
    }

    
  }

  // Корзина
  const cartWrapper = document.querySelector('.cart-wrapper')

  window.addEventListener('click', function(event) {
    if (event.target.hasAttribute('data-cart')) {
      const card = event.target.closest('.card')
      const productInfo = {
        id: card.dataset.id,
        imgSrc: card.querySelector('.product-img').getAttribute('src'),
        title: card.querySelector('.card-subtitle').innerText,
        itemsInBox: card.querySelector('[data-items-in-box]').innerText,
        price: card.querySelector('.price__currency').innerText,
        counter: card.querySelector('[data-counter]').innerText,
      }
      
      const itemInCart = cartWrapper.querySelector(`[data-id="${productInfo.id}"]`)

      if (itemInCart) {
        const counterElement = itemInCart.querySelector('[data-counter]')
        counterElement.innerText = parseInt(counterElement.innerText) + parseInt(productInfo.counter)
      } else {
        const cartItemHTML = `<div class="cart-item mb-2" data-id="${productInfo.id}">
                                <img class="mb-2 img-fluid"src="${productInfo.imgSrc}" alt="${productInfo.title}">
                                <div class="cart-item__title fw-bold mb-1">${productInfo.title}</div>
                                <div class="cart-item__id mb-1">Артикул: <small class="text-muted">${productInfo.id}</small></div>
                                <div class="cart-item__itemsInBox mb-1">Количество картриджей в упаковке: <small class="text-muted">${productInfo.itemsInBox}</small></div>
                                <div class="cart-item__price mb-2">Цена: <small class="text-muted price__currency-span">${productInfo.price}<small></div>
                                <div class="counter-wrapper mb-3">
                                  <div class="test_items items__control" data-action="minus">-</div>
                                  <div class="test_items items__current" data-counter>${productInfo.counter}</div>
                                  <div class="test_items items__control" data-action="plus">+</div>
                                </div>
                              </div>`
        cartWrapper.insertAdjacentHTML('beforeend', cartItemHTML)
      }
      card.querySelector('[data-counter]').innerText = '1'

      toggleCartStatus()
      calcCartPrice()
      
    }
  })
})

// Итоговая стоимость
function calcCartPrice() {
  const cartItems = document.querySelectorAll('.cart-item')
  let totalPrice = 0

  cartItems.forEach(function(item) {
    const amountEl = item.querySelector('[data-counter]')
    const priceEl = item.querySelector('.price__currency-span')
    const currentPrice = parseInt(amountEl.innerText) * parseInt(priceEl.innerText)
    totalPrice += currentPrice
    
  })
  document.querySelector('.cart-total__price').innerText = totalPrice
}


