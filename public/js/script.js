const cartCounter = document.querySelector('.cart-counter');
const plusButton = document.querySelector('.plus-button');
const minusButton = document.querySelector('.minus-button');

let counter = 0;

plusButton.addEventListener('click', () => {
  counter++;
  cartCounter.textContent = counter.toString();
});

minusButton.addEventListener('click', () => {
    counter--;
    cartCounter.textContent = counter.toString();
  });
