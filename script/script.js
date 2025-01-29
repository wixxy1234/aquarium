window.addEventListener('scroll', e => {
    document.body.style.cssText = `--scrollTop: ${this.scrollY}px`;

    if (scrollY > 30) {
        document.querySelector('.layers__front').style.zIndex = '1';
    } else {
        document.querySelector('.layers__front').style.zIndex = '0';
    }
})



// const swiper = new Swiper('.sample-slider', {
//     loop: true,                         //loop
//     autoplay: {                         //autoplay
//         delay: 10000,
//     },
//     direction: "vertical",
//     pagination: {                       //pagination(dots)
//         el: '.swiper-pagination',
//         clickable: true
//     },
//     on: {
//         init: function() {
//             // Код, который зависит от элементов пагинации
//             let paginationArr = document.getElementsByClassName('swiper-pagination-bullet');
//             // console.log(paginationArr); // Теперь это не будет пустым массивом
//             let pag = Array.from(paginationArr);
//             // console.log(pag);

//             for (let i = 0; i < paginationArr.length; i++) {
//                 // console.log(paginationArr);
//                 paginationArr[i].setAttribute('id', `id${i}`);
//                 // console.log(paginationArr);
//             }
//         }
//     }
// });



let animation = function () {
    let items = document.querySelectorAll('.advantages__item');

    // Скрываем все элементы, кроме первого
    items.forEach((item, index) => {
        if (index !== 0) {
            item.classList.remove('visible'); 
        }
    });

    // Создаем новый наблюдатель
    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                return;
            }

            if (entry.isIntersecting) {
                let index = Array.from(items).indexOf(entry.target);
                // Устанавливаем задержку для каждого элемента
                setTimeout(() => {
                    entry.target.classList.add('ct-slide-left');
                    entry.target.classList.add('visible'); // Добавляем класс visible для показа и анимацию
                }, index * 350); 
            }
        });
    });

    // Ставим наблюдателя за каждым элементом
    items.forEach(item => {
        observer.observe(item);
    });
}
animation();



