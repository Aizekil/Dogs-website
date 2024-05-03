<?php
// Путь к CSV файлу
$csvFilePath = 'dog_status.csv';

// Получаем данные из формы
$dogId = $_POST['dog'] ?? '';
$status = $_POST['status'] ?? '';

// Если данные получены, обновляем CSV файл
if ($dogId && $status) {
    // Открываем файл для добавления новой информации
    $file = fopen($csvFilePath, 'a');

    // Формируем строку для записи в CSV
    $data = array($dogId, $status);

    // Записываем данные в CSV файл
    fputcsv($file, $data);

    // Закрываем файл
    fclose($file);
}
?>
<script>
    // Список собак (ваш каталог собак)
    var dogs = [
        { id: 1, name: "Собака 1" },
        { id: 2, name: "Собака 2" }
        // Добавьте другие собаки по желанию
    ];

    // Функция для загрузки списка собак в админ-панель
    function loadDogs() {
        var dogSelect = document.getElementById("dogSelect");
        dogs.forEach(function(dog) {
            var option = document.createElement("option");
            option.value = dog.id;
            option.textContent = dog.name;
            dogSelect.appendChild(option);
        });
    }

    // После загрузки страницы загрузим список собак
    window.addEventListener("DOMContentLoaded", function() {
        loadDogs();
    });
</script>