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

  // Проверка наличия данных в localStorage
  const savedCartData = localStorage.getItem('cart')
  if (savedCartData) {
    cartWrapper.innerHTML = savedCartData
    toggleCartStatus()
    calcCartPrice()

    const cartItems = cartWrapper.querySelectorAll('.cart-item')
    cartItems.forEach(function(item) {
      addCounterListeners(item)
    })
    // if (lastCartItem) {
    //   addCounterListeners(lastCartItem)
    // }    
  }

  function saveCartToLocalStorage() {
    localStorage.setItem('cart', cartWrapper.innerHTML)
  }

  // При изменении состояния корзины, сохраняем данные в localStorage
  function updateCartState() {
    saveCartToLocalStorage()
    toggleCartStatus()
    calcCartPrice()
  }

  function addCounterListeners(newCartItem) {
    // // Счетчик
    // const newCartItem = cartWrapper.lastElementChild

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
      calcCartPrice()
      updateCartState()
    })
    // Плюс
    newCartItem.querySelector('[data-action="plus"]').addEventListener('click', function() {
      const counter = newCartItem.querySelector('[data-counter]')
      counter.innerText = parseInt(counter.innerText) + 1
      calcCartPrice()
      updateCartState()
    })

    // Кнопка заказа
    const btnOrder = document.querySelector('.btn_order')
    btnOrder.addEventListener('click', function(){
      const orderForm = document.querySelector('.order_form')
      orderForm.classList.remove('d-none')
    })
  }


  // Обновление корзины
  function toggleCartStatus() {
    const cartNoneMessage = document.querySelector('.cart_none')
    const cartSmallInfo = document.querySelector('.cart_small_info')
    const cartTotal = document.querySelector('.cart_total')

    if (cartWrapper.children.length > 0) {
      cartNoneMessage.classList.add('d-none')
      cartSmallInfo.classList.remove('d-none')
      cartTotal.classList.remove('d-none')
    } else {
      cartNoneMessage.classList.remove('d-none')
      cartSmallInfo.classList.add('d-none')
      cartTotal.classList.add('d-none')
    }
  }

  // Отслеживание клика
  document.querySelectorAll('.cart_buy-button').forEach(function(button) {
    button.addEventListener('click', function(event) {
      const cartridge = event.target.closest('.cart_cartridge')
      const cartridgeType = cartridge.dataset.type
      const cartridgeTitle = document.querySelector('.cart_cartridge-title').innerText

      const existingCartItem = document.querySelector(`.cart-item[data-title="${cartridgeTitle}"][data-type="${cartridgeType}"]`);

      if (existingCartItem) {
        const counter = existingCartItem.querySelector('[data-counter]');
        counter.innerText = parseInt(counter.innerText) + 1;
        calcCartPrice()
        return
      }

      const cartridgeInfo = {
        title: cartridgeTitle,
        price: parseInt(cartridge.querySelector('.cart_cartridge-price').innerText),
        type: cartridgeType,
      }

      if (cartridgeType === "Совместимый") {
        cartridgeInfo.priceDiscount = parseInt(document.querySelector('.cartridge_compatible_price_10').innerText)
      }

      const cartItemHTML = `<div class="row cart-item rini_cartridge_border mt-2 pb-2 text-center align-items-center" data-title="${cartridgeInfo.title}" data-type="${cartridgeInfo.type}">
                            <div class="col-4">
                              <p class="fs-6 mb-1">${cartridgeInfo.title}</p>
                              <small class="fw-bold">${cartridgeInfo.type}</small>
                            </div>
                            <div class="col-4 cart_currency_price">${cartridgeInfo.price}</div>
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
      calcCartPrice()
      updateCartState()
      addCounterListeners(cartWrapper.lastElementChild)
    })
  })

      
  // Итого
  function calcCartPrice() {
    const cartItems = document.querySelectorAll('.cart-item')
    let totalPrice = 0

    applyDiscount(cartItems)

    cartItems.forEach(function(item) {
      const amountEl = item.querySelector('[data-counter]')
      const priceEl = item.querySelector('.cart_currency_price')
      const currentPrice = parseInt(amountEl.innerText) * parseInt(priceEl.innerText)
      totalPrice += currentPrice
    })
    document.querySelector('.cart_total_price').innerText = totalPrice
  }

  
})


