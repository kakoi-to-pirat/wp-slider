1. Подключаем jQuery (нужна для owl.carusel)
2. Подключаем owl.carusel / любую другую карусель (в файле slider.php разметка написана под этот плагин. Можно ипользовать любой другой, просто переписав разметку.)
3. В WP устанавливаем плагин ACF | Advanced Custom Fields
4. В WP, с помощью ACF, cоздаем группу полей "Slider" и указваем следующие поля:
   - image_src      (src картинки в посте - тип поля "image")
   - position       (позиция слайдера - тип поля "number")
   - link           (href ссылки на страницу внутри проекта - тип поля "page")
   - external_link  (href ссылки, на внешнюю страницу - тип поля "text")
   - target         (target ссылки. допустимые значениями: " _blanc" и " _self" - тип поля "radio")
5. Открываем файл /wp-content/themes/'имя_темы'/fucntions.php
6. Копируем в него содержмое файла _fucntions.php
7. Создаем нужную разметку слайдера в файле slider.php
8. Копируем файл slider.php в папку /wp-content/themes/'имя_темы'/
9. Прописываем "<?php get_template_part( 'slider' ); ?>" в верстку.