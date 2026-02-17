// === Слайдер ===
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.lev');
    const nextBtn = document.querySelector('.prav');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
    }
});

// === Бургер-меню (выпадающее меню) ===
document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.nav > li');

    menuItems.forEach(item => {
        item.addEventListener('click', function (event) {
            if (event.target.closest('.submenu')) return;
            event.preventDefault();

            const submenu = this.querySelector('.submenu');
            if (submenu) {
                submenu.classList.toggle('show-submenu');
            }
        });
    });

    document.querySelectorAll('.submenu a').forEach(link => {
        link.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});

// === Бронирование (улучшенная версия) ===
// === Бронирование (улучшенная версия с выбором времени) ===
document.addEventListener('DOMContentLoaded', function () {
    const freeComputersList = document.getElementById('free-computers-list');
    const bookForm = document.getElementById('book-form');
    const computerIdInput = document.getElementById('computer_id');
    const submitBtn = document.getElementById('submit-btn');
    const startDateInput = document.getElementById('start_date');
    const startTimeInput = document.getElementById('start_time');
    const durationInput = document.getElementById('duration');
    const hiddenStartDate = document.getElementById('hidden_start_date');
    const hiddenStartTime = document.getElementById('hidden_start_time');
    const hiddenDuration = document.getElementById('hidden_duration');

    // Установка минимальной даты = сегодня
    const today = new Date().toISOString().split('T')[0];
    if (startDateInput) startDateInput.min = today;
    if (startDateInput && !startDateInput.value) startDateInput.value = today;

    // Индикатор загрузки
    const loadingSpinner = document.createElement('div');
    loadingSpinner.className = 'spinner';
    loadingSpinner.style.display = 'none';
    loadingSpinner.innerHTML = '⏳ Загрузка...';
    if (freeComputersList) freeComputersList.parentNode.insertBefore(loadingSpinner, freeComputersList.nextSibling);

    // Загрузка списка всех компьютеров
    async function fetchComputers() {
        if (!freeComputersList) return;
        freeComputersList.style.display = 'none';
        loadingSpinner.style.display = 'block';
        try {
            const response = await fetch('show-free-computers.php'); // теперь возвращает все компьютеры
            if (!response.ok) throw new Error('Ошибка загрузки');
            const computers = await response.json();
            let listHtml = '';
            computers.forEach(comp => {
                listHtml += `<li class="computer-card" data-computer-id="${comp.id}">Компьютер №${comp.number}</li>`;
            });
            freeComputersList.innerHTML = listHtml || '<li class="computer-card no-computers">Нет компьютеров</li>';
            computerIdInput.value = '';
            document.querySelectorAll('.computer-card').forEach(c => c.classList.remove('selected'));
        } catch (err) {
            freeComputersList.innerHTML = `<li class="computer-card error">Ошибка: ${err.message}</li>`;
        } finally {
            loadingSpinner.style.display = 'none';
            freeComputersList.style.display = 'grid';
        }
    }

    // Выбор компьютера
    freeComputersList.addEventListener('click', e => {
        const card = e.target.closest('.computer-card');
        if (!card || card.classList.contains('no-computers') || card.classList.contains('error')) return;
        document.querySelectorAll('.computer-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        computerIdInput.value = card.dataset.computerId;
    });

    // Отправка формы
    bookForm.addEventListener('submit', async e => {
        e.preventDefault();

        // Проверка выбора компьютера
        if (!computerIdInput.value) {
            alert('Выберите компьютер');
            return;
        }

        // Проверка заполнения времени
        if (!startDateInput.value || !startTimeInput.value || !durationInput.value) {
            alert('Заполните дату, время и длительность');
            return;
        }

        // Копируем значения в скрытые поля
        hiddenStartDate.value = startDateInput.value;
        hiddenStartTime.value = startTimeInput.value;
        hiddenDuration.value = durationInput.value;

        // Блокируем кнопку
        submitBtn.disabled = true;
        submitBtn.textContent = 'Бронирование...';

        const formData = new FormData(bookForm);
        try {
            const response = await fetch('book-computer.php', { method: 'POST', body: formData });
            const result = await response.text();
            alert(result);
            if (result.includes('успешно')) {
                // Очищаем выбор
                computerIdInput.value = '';
                document.querySelectorAll('.computer-card').forEach(c => c.classList.remove('selected'));
                // Можно обновить список (но компьютеры те же, просто меняется занятость — для этого нужно показывать занятость, пока опустим)
                // Либо просто оставить как есть
            }
        } catch (err) {
            alert('Ошибка: ' + err.message);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Забронировать выбранный компьютер';
        }
    });

    fetchComputers();
});