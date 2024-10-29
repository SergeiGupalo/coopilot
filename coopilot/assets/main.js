const monthlyPrice = {
  concept: "$4.500",
  product: "$6.000",
  services: "$7.500",
  suffix: "/month"
};

const quarterlyPrice = {
  concept: "$4.050",
  product: "$5.400",
  services: "$6.750",
  suffix: "/quarterly"
};

const quarterlyOriginalPrice = {
  concept: "$4.500",
  product: "$6.000",
  services: "$7.500"
};

const annualPrice = {
  concept: "$3.600",
  product: "$4.800",
  services: "$6.000",
  suffix: "/annual"
};

const annualOriginalPrice = {
  concept: "$4.500",
  product: "$6.000",
  services: "$7.500"
};

// Елементи для оновлення цін
const conceptOriginalPrice = document.getElementById('concept-original-price');
const conceptDiscountedPrice = document.getElementById('concept-price');
const productOriginalPrice = document.getElementById('product-original-price');
const productDiscountedPrice = document.getElementById('product-price');
const servicesOriginalPrice = document.getElementById('services-original-price');
const servicesDiscountedPrice = document.getElementById('services-price');

// Функція для оновлення цін
function updatePrices(prices, originalPrices, showOriginal) {
  // Оновлюємо знижкові ціни для Concept, Product та Services разом з відповідним суфіксом
  conceptDiscountedPrice.innerHTML = prices.concept + '<span>' + prices.suffix + '</span>';
  productDiscountedPrice.innerHTML = prices.product + '<span>' + prices.suffix + '</span>';
  servicesDiscountedPrice.innerHTML = prices.services + '<span>' + prices.suffix + '</span>';
  
  // Перевіряємо, чи показувати оригінальні ціни
  if (showOriginal) {
    conceptOriginalPrice.style.display = "inline";
    productOriginalPrice.style.display = "inline";
    servicesOriginalPrice.style.display = "inline";
    
    // Оновлюємо оригінальні ціни
    conceptOriginalPrice.innerHTML = originalPrices.concept;
    productOriginalPrice.innerHTML = originalPrices.product;
    servicesOriginalPrice.innerHTML = originalPrices.services;
  } else {
    conceptOriginalPrice.style.display = "none";
    productOriginalPrice.style.display = "none";
    servicesOriginalPrice.style.display = "none";
  }
}
// скролінг
const plansContainer = document.querySelector('.plans__intro');
let isDown = false;
let startX;
let scrollLeft;

// Подія при натисканні на контейнер
plansContainer.addEventListener('mousedown', (e) => {
  isDown = true;
  startX = e.pageX - plansContainer.offsetLeft; // Позиція курсора
  scrollLeft = plansContainer.scrollLeft; // Поточна позиція прокрутки
  plansContainer.style.cursor = 'grabbing'; // Змінюємо курсор під час прокрутки
});

// Подія при відпусканні кнопки миші
plansContainer.addEventListener('mouseleave', () => {
  isDown = false;
  plansContainer.style.cursor = 'default'; // Повертаємо стандартний курсор
});

plansContainer.addEventListener('mouseup', () => {
  isDown = false;
  plansContainer.style.cursor = 'default'; // Повертаємо стандартний курсор
});

// Подія перетягування мишею
plansContainer.addEventListener('mousemove', (e) => {
  if (!isDown) return; // Якщо кнопка не натиснута, нічого не робимо
  e.preventDefault();
  const x = e.pageX - plansContainer.offsetLeft; // Нове положення курсора
  const walk = (x - startX) * 3; // Відстань, на яку пересуваємо (множимо для прискорення)
  plansContainer.scrollLeft = scrollLeft - walk; // Оновлюємо прокрутку
});




// Перемикачі
const buttons = document.querySelectorAll('.plans__menu button');

// Додаємо події для кнопок
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Очищаємо активний стан у всіх кнопок
    buttons.forEach(btn => btn.classList.remove('active'));

    // Додаємо активний стан для поточної кнопки
    button.classList.add('active');

    // Оновлюємо ціни відповідно до вибраного плану
    if (button.id === 'monthly') {
      updatePrices(monthlyPrice, null, false);  // Без перекресленої ціни
    } else if (button.id === 'quarterly') {
      updatePrices(quarterlyPrice, quarterlyOriginalPrice, true);  // З перекресленою ціною
    } else if (button.id === 'annual') {
      updatePrices(annualPrice, annualOriginalPrice, true);  // З перекресленою ціною
    }
  });
});

const burger = document.getElementById('burger');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');

// Відкрити меню при натисканні на бургер-іконку
burger.addEventListener('click', () => {
  mobileMenu.classList.add('active');
});

// Закрити меню при натисканні на хрестик
closeMenu.addEventListener('click', () => {
  mobileMenu.classList.remove('active');
});



// Функція для автоматичного вибору "Best Offer" при завантаженні
// window.onload = function() {
//   const bestOfferElement = document.querySelector('.best-offer').closest('.plans__item');
//   if (bestOfferElement) {
//     bestOfferElement.scrollIntoView({ behavior: 'smooth', inline: 'start' });
//   }
// };

