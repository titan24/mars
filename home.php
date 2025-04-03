<?php
/*
 Template name: Home
 Template post type: page
 */
?>

<?php get_header(); ?>
<!-- Подключение Lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.min.css">
<!-- Подключение CSS -->
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://w3bits.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fw3bits.com%2Flabs%2Fcss-grid-masonry-images%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://w3bits.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fw3bits.com%2Flabs%2Fcss-grid-masonry-images%2F&#038;format=xml" />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<!-- Подключение скриптов -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js" defer></script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                if (typeof lightbox !== 'undefined') {
                    lightbox.option({
                        'resizeDuration': 200,
                        'wrapAround': true,
                        'alwaysShowNavOnTouchDevices': true
                    });
                } else {
                    console.warn('Lightbox не найден даже после задержки');
                }
            }, 1000); // Задержка 1 секунда для гарантии загрузки
        });
</script>

<style>
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
}
.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.submit-btn {
    background-color: #3A8240;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
}

:root {
    counter-reset: masonry;
  }

.masonry {
    transition: all .5s ease-in-out;
  column-gap: 10px;
  column-fill: initial;
}

.masonry-item {
  margin-bottom: 10px;
  display: inline-block; /* Fix the misalignment of items */
  vertical-align: top; /* Keep the item on the very top */
}

.masonry-item img {
  transition: all .5s ease-in-out;
  backface-visibility: hidden; /* Remove Image flickering on hover */
}

.masonry-item:hover img {
  opacity: .75;
}


/* Masonry on tablets */
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .masonry {
    column-count: 2;
  }
}

/* Masonry on big screens */
@media only screen and (min-width: 1024px) {
  .desc {
    font-size: 1.25em;
  }

  .intro {
    letter-spacing: 1px;
  }

  .masonry {
    column-count: 3;
  }
}

/*  Ligtbox */

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    padding-top: 60px; /* Отступ сверху */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

/* Контент модального окна */
.modal-content {
    position: relative;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
    background-color: #000;
    height: 80vh; /* Фиксированная высота контейнера */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/* Контейнер для большого изображения */
.image-container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Скрываем лишнее */
}



/* The Close Button */
.close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
}

/* Hide the slides by default */
/* Слайды */
.mySlides {
    display: none;
    width: 100%;
    height: 100%;
    text-align: center; /* Центрируем изображение */
}

/* Изображение в слайде */
.mySlides img {
    max-width: 100%; /* Максимальная ширина */
    max-height: 100%; /* Максимальная высота */
    width: auto; /* Автоматическая ширина */
    height: auto; /* Автоматическая высота */
    object-fit: contain; /* Сохраняем пропорции и заполняем контейнер */
    margin: auto; /* Центрируем изображение */
}

/* Кнопки "Назад" и "Вперед" */
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
}

.prev {
    left: 0;
    border-radius: 3px 0 0 3px;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* Эффект при наведении на кнопки */
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* Caption text */
.caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
}

img.demo {
    opacity: 0.6;
}

.active,
.demo:hover {
    opacity: 1;
}

img.hover-shadow {
    transition: 0.3s;
}

.hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Контейнер для миниатюр */
.thumbnail-container {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    gap: 10px;
    padding: 10px 0;
    height: 100px; /* Фиксированная высота миниатюр */
    width: 100%; /* Занимает всю ширину модального окна */
    background-color: #000; /* Фон для миниатюр */
    box-sizing: border-box; /* Учитываем padding в ширине */
}

/* Стили для каждой миниатюры */
.thumbnail-item {
    flex: 0 0 auto;
    width: 100px; /* Фиксированная ширина миниатюр */
    height: 100%; /* Занимает всю высоту контейнера */
    overflow: hidden; /* Обрезаем лишнее */
}

/* Стили для изображений миниатюр */
.thumbnail-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Заполняем контейнер, сохраняя пропорции */
    cursor: pointer;
    border: 2px solid transparent;
    transition: border-color 0.3s ease;
}

/* Активная миниатюра */
.thumbnail-item img.active {
    border-color: #4B9444;
}

/* Эффект при наведении на миниатюру */
.thumbnail-item img:hover {
    opacity: 0.8;
}

@media (max-width: 768px) {
    /* Модальное окно */
    .modal {
        padding-top: 20px; /* Уменьшаем отступ сверху */
    }

    /* Контент модального окна */
    .modal-content {
        width: 95%; /* Увеличиваем ширину контейнера */
        height: 90vh; /* Увеличиваем высоту контейнера */
    }

    /* Кнопки "Назад" и "Вперед" */
    .prev,
    .next {
        font-size: 16px; /* Уменьшаем размер кнопок */
        padding: 10px; /* Уменьшаем отступы */
    }

    /* Миниатюры */
    .thumbnail-container {
        height: 80px; /* Уменьшаем высоту миниатюр */
    }

    .thumbnail-item {
        width: 80px; /* Уменьшаем ширину миниатюр */
    }
}
</style>

<!-- Нова модалка для заявок викладачів -->
<div id="teachersModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('teachersModal')">&times;</span>
        <form id="teachersForm" method="POST" action="<?php echo get_template_directory_uri(); ?>/template-parts/send-teach-telegram.php">
            <div class="form-group">
                <label for="name">Ім'я:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Електронна пошта:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Номер телефону:</label>
                <input type="tel" id="phone" name="phone" placeholder="+380 *********" required>
            </div>
            <div class="form-group">
                <label for="message">Повідомлення:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">
                <?= get_field("teachers_submit") ?>
            </button>
        </form>
    </div>
</div>

<div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <form id="sendsForm" method="POST" action="<?php echo get_template_directory_uri(); ?>/template-parts/send-telegram.php" class="relative top-40 mx-auto shadow-xl orange-gradient max-w-md p-6 rounded-3xl">
        <div class="flex justify-end p-2 absolute top-3 right-5">
            <button onclick="closeModal('modelConfirm')" type="button" class="text-white bg-transparent hover:bg-white hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 011.414 1.414L11.414 10l4.293 4.293a1 011.414-1.414L10 11.414l-4.293-4.293a1 011.414-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <h2 class="text-xl font-bold uppercase mb-5 text-center text-white"><?php echo get_field("modal_title"); ?></h2>
        <input type="text" name="your_name" placeholder="<?php echo get_field("modal_your_name"); ?>" class="border-none rounded-2xl p-3 mb-4 text-[#333333] focus:outline-none focus:border-none focus-visible:border-none w-full">
        <input type="text" name="child_name" placeholder="<?php echo get_field("modal_child_name"); ?>" class="border-none rounded-2xl p-3 mb-4 text-[#333333] focus:outline-none focus:border-none focus-visible:border-none w-full">
        <input type="text" name="child_birthday" placeholder="<?php echo get_field("modal_child_birthday"); ?>" class="border-none rounded-2xl p-3 mb-4 text-[#333333] focus:outline-none focus:border-none focus-visible:border-none w-full">
        <input type="tel" name="phone" placeholder="+380 *********" class="border-none rounded-2xl p-3 mb-4 text-[#333333] focus:outline-none focus:border-none focus-visible:border-none w-full">
        <button type="submit" class="submit-btn w-full bg-white border-2 rounded-2xl px-6 py-3 text-[#333333] font-bold uppercase hover:text-white hover:bg-[#ff8056] hover:border-2 transition-all ease-linear">
            <?php echo get_field("modal_submit"); ?>
        </button>
    </form>
</div>

<main>
    <section class="container mx-auto max-w-[900px] px-0 lg:px-6 mt-6 cursor-pointer">
        <div class="cont">
            <style>
                .sm-none{
                    z-index: 1;
                }
            </style>
            <div class="sm-none">
                <h4 class="text-2xl uppercase font-bold text-center mt-4"><?= get_field("baner_title") ?></h4>
                <button class="bg-[#4B9444] px-6 py-3 rounded-2xl text-white uppercase font-bold mt-4 w-3/4 mx-auto" onclick="openModal('modelConfirm')"><?= get_field("buner_submit") ?></button>
            </div>
            <img class="w-full anim-banner" src="<?= get_field("baner_image")['url'] ?>" alt="banner" onclick="openModal('modelConfirm')">
        </div>
       
        <h4 class="hidden sm:block text-2xl uppercase font-bold text-center mt-4"><?= get_field("baner_title") ?></h4>
        <button class="bg-[#4B9444] px-6 py-3 rounded-2xl text-white uppercase font-bold mt-4 w-3/4 hidden sm:block mx-auto" onclick="openModal('modelConfirm')"><?= get_field("buner_submit") ?></button>
    </section>
    <section class="container mx-auto text-center max-w-[700px] mt-12">
        <h2 class="text-2xl font-bold uppercase mb-3 anim-title"><?= get_field("about_us_title") ?></h2>
        <p class="anim-p"><?= get_field("about_us_description") ?></p>
    </section>
    <section class="container mx-auto mb-12">
        <div class="grid grid-cols-2 lg:grid-cols-2 mx-auto md:grid-cols-1 gap-4 mt-8 max-w-[900px]">
        <?php foreach (get_field("achievement") as $achievement) : ?>
            <div class="cart1 flex justify-center items-center gap-4 p-4 bg-[#F3F5FC] rounded-3xl md:h-36 shadow">
                <img src="<?= $achievement['achievement_image']['url'];?>" alt="<?= $achievement['achievement_image']['alt'];?>" loading="lazy">
                <p><?= $achievement['achievement_text'];?></p>
            </div>        
        <?php endforeach; ?>
        </div>
    </section>
    <section class="container mx-auto transition-all">
        <h2 class="text-2xl font-bold uppercase text-center mb-10" id="benefits">
            <?= get_field("advantages_title") ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-1 gap-4 gap-y-10 max-w-[900px] mx-auto text-gray-700 wrapper-cards">
        <?php foreach (get_field("advantages_list") as $key => $advantages) : ?>
            <div class="rounded-3xl p-6 sm:p-6 text-center flex flex-col justify-between items-center benefit-<?= $key?> relative border-2 border-[#4B9444] bg-white border-opacity-30">
                <h4 class="text-xl relative uppercase py-2 px-6 inline-block font-medium rounded-2xl -mt-12 shadow-md border-2 border-[#4B9444] bg-white border-opacity-70">
                    <?= $advantages["advantages_list_title"] ?>
                </h4>
                <p class="mt-4 mb-6">
                    <?= $advantages["advantages_list_short_description"] ?>
                </p>
                <p class="more opacity-0 hidden mb-4">
                    <?= $advantages["advantages_list_description"] ?>
                </p>
                <button class="bg-[#4B9444] px-6 py-3 rounded-2xl text-white uppercase font-bold w-2/3 sm:w-2/3 benefit relative">
                    <?= get_field("advantages_open") ?>
                    <?php if(!empty($advantages["advantages_list_download"])) { ?>
                        <a class="absolute -top-3 -right-3 flex items-center justify-center border-white border-2 rounded-full px-3 py-1 bg-[#4B9444]" 
                            href="<?= $advantages["advantages_list_download"]['url'] ?>" 
                            download>
                            <img src="<?= get_field("advantages_download_icon")['url'] ?>" alt="download" class="size-6">
                        </a>
                    <?php } ?>
                </button>
                <button class="bg-[#4B9444] px-6 py-3 rounded-2xl text-white uppercase font-bold w-1/2 sm:w-2/3 hidden close">
                    <?= get_field("advantages_close") ?>
                </button>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
    <section class="container mx-auto max-w-[900px]">
        <h2 class="text-2xl font-bold uppercase text-center mt-12 mb-6"><?= get_field("main_subjects_title") ?></h2>
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-1">
        <?php foreach (get_field("main_subjects_list") as $main_subjects) : ?>
            <div class="relative max-w-xl">
                <img class="h-64 w-full object-cover rounded-md" src="<?= $main_subjects["main_subjects_list_background"]['url'] ?>" alt="<?= $main_subjects["main_subjects_list_background"]['alt'] ?>" loading="lazy">
                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-bold"><?= $main_subjects["main_subjects_list_name"] ?></h2>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
    <section id="benefits min-h-full">
        <h2 class="text-2xl font-bold uppercase text-center mt-12"><?= get_field("other_subjects_title") ?></h2>
        <div class="relative py-6 sm:py-12 max-w-[900px] mx-auto container gap-6 grid grid-cols-2 sm:grid-cols-1">
        <?php foreach (get_field("other_subjects_list") as $other_subjects) : ?>
            <div class="group relative cursor-pointer overflow-hidden bg-white pt-10 pb-8 ring-2 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 rounded-3xl px-10">
                <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-[<?= $other_subjects["other_subjects_list_color"] ?>] transition-all duration-300 group-hover:scale-[25]"></span>
                <div class="relative z-10 max-w-md">
                    <span class="grid h-20 w-20 place-items-center rounded-full bg-[<?= $other_subjects["other_subjects_list_color"] ?>] transition-all duration-300 group-hover:bg-[<?= $other_subjects["other_subjects_list_color"] ?>]">
                        <img src="<?= $other_subjects["other_subjects_list_icon"]['url']?>" alt="<?= $other_subjects["other_subjects_list_icon"]['alt']?>" class="h-10">
                    </span>
                    <div class="grid place-items-center transition-all duration-300 group-hover:bg-[<?= $other_subjects["other_subjects_list_color"] ?>]">
                        <img class="object-cover rounded-3xl transition-all duration-300 group-hover:rounded-full" src="<?= $other_subjects["other_subjects_photo"]['url']?>" alt="<?= $other_subjects["other_subjects_photo"]['alt']?>" loading="lazy">
                    </div>
                    <div class="pt-5 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <h4 class="font-bold text-lg mb-2">
                            <?= $other_subjects["other_subjects_list_title"] ?>
                        </h4>
                        <p>
                            <?= $other_subjects["other_subjects_list_description"] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
    <section class="container mx-auto px-6 my-12 text-center">
        <div class="p-6 max-w-[700px] rounded-3xl bg-[#F3F5FC] mx-auto relative">
            <?= get_field("vacation_description") ?>
            <img src="<?= get_field("vacation_left_icon")['url'] ?>" class="absolute -left-8 -top-8 h-16" alt="<?= get_field("vacation_left_icon")['alt'] ?>">
            <img src="<?= get_field("vacation_right_icon")['url'] ?>" class="absolute -right-8 -top-8 h-16" alt="<?= get_field("vacation_right_icon")['alt'] ?>">
        </div>
    </section>
    <section class="mt-12 container mx-auto" id="teachers">
        <h2 class="text-2xl mb-2 font-bold uppercase text-center">
            <?= get_field("teachers_title") ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-1 max-w-[900px] mx-auto">
            <div class="flex items-center justify-center">
                <img src="<?= get_field("teachers_image")['url'] ?>" alt="<?= get_field("teachers_image")['alt'] ?>" loading="lazy">
            </div>
            <div class="flex flex-col">
                <p class="mt-8 md:text-center">
                    <?= get_field("teachers_description") ?>
                </p>
                <ul class="list my-10 flex flex-col gap-2 md:items-center">
                <?php foreach (get_field("teachers_list") as $teacher) : ?>
                    <li><?= $teacher["teachers_list_ithem"] ?></li>
                <?php endforeach; ?>
                </ul>
                <button id="openTeachersModalBtn" class="bg-[#3A8240] px-6 py-3 rounded-2xl text-white uppercase font-bold mr-auto md:mr-0 md:self-center">
                    <?= get_field("teachers_submit") ?>
                </button>
            </div>
        </div>
    </section>
    <section class="mb-12 container mx-auto" id="list_teacher">
        <h2 class="text-2xl mb-2 font-bold uppercase text-center">
            <?= get_field("description_teacher") ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-1 max-w-[900px] mx-auto">
            <?php foreach (get_field("list_teacher") as $list_teacher) : ?>
                <div class="object-cover rounded-xl">
                    <div class="flex items-center justify-center pt-6">
                        <img class="mx-auto block h-48 rounded-full sm:mx-0 sm:shrink-0 filter drop-shadow-lg transition-transform duration-300 hover:scale-110" src="<?= $list_teacher["photo_teacher"]['url'] ?>" alt="<?= $list_teacher["photo_teacher"]['alt'] ?>" loading="lazy">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-center text-lg font-semibold text-black">
                            <?= $list_teacher["name_teacher"] ?>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-center font-medium text-gray-500">
                            <?= $list_teacher["description_teacher"] ?>
                        </p>
                    </div>
                </div>     
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
            <h2 class="text-2xl mb-2 font-bold uppercase text-center pb-6">
                 <?= get_field("gallery_title") ?>
            </h2>
            <div class="masonry">
                <?php if ($gallery_list = get_field('gallery_list')) : ?>
                    <?php foreach ($gallery_list as $index => $galleryimage) : ?>
                        <div class="masonry-item">
                            <img src="<?php echo esc_url($galleryimage['gallery_img']['url']); ?>" 
                                 onclick="openGalleryModal();currentSlide(<?php echo $index + 1; ?>)" 
                                 class="hover-shadow" 
                                 loading="lazy"
                                 alt="<?php echo esc_attr($galleryimage['gallery_img']['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeGalleryModal()">&times;</span>
        <div class="modal-content">
            <!-- Контейнер для большого изображения -->
            <div class="image-container">
                <?php if ($gallery_list = get_field('gallery_list')) : ?>
                    <?php foreach ($gallery_list as $index => $galleryimage) : ?>
                        <div class="mySlides">
                            <div class="numbertext"><?php echo $index + 1; ?> / <?php echo count($gallery_list); ?></div>
                            <img class="rounded-xl" src="<?php echo esc_url($galleryimage['gallery_img']['url']); ?>" alt="<?php echo esc_attr($galleryimage['gallery_img']['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
    
            <!-- Кнопки "Назад" и "Вперед" -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
            <!-- Миниатюры -->
            <div class="thumbnail-container">
                <?php if ($gallery_list = get_field('gallery_list')) : ?>
                    <?php foreach ($gallery_list as $index => $galleryimage) : ?>
                        <div class="thumbnail-item">
                            <img class="demo" src="<?php echo esc_url($galleryimage['gallery_img']['url']); ?>" onclick="currentSlide(<?php echo $index + 1; ?>)" alt="<?php echo esc_attr($galleryimage['gallery_img']['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <section class="container mx-auto px-5 py-12 lg:px-32">
    <h2 class="text-2xl mb-6 font-bold uppercase text-center">
        <?= get_field("reviews_title") ?: 'Відгуки наших клієнтів' ?>
    </h2>
          
    <!-- Список отзывов -->
    <div class="max-w-[900px] mx-auto mb-12">
        <?php 
        // Получаем отзывы из ACF
        $reviews = get_field('reviews_list');
        
        if ($reviews) : ?>
            <div class="grid gap-8 md:grid-cols-2 sm:grid-cols-1">
                <?php foreach ($reviews as $review) : ?>
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                        <div class="flex items-center mb-4">
                            <?php if (!empty($review['review_avatar'])) : ?>
                                <img src="<?= esc_url($review['review_avatar']['url']); ?>" 
                                     alt="<?= esc_attr($review['review_author_name']); ?>" 
                                     class="w-12 h-12 rounded-full mr-4 object-cover">
                            <?php else : ?>
                                <div class="w-12 h-12 rounded-full mr-4 bg-[#4B9444] flex items-center justify-center text-white font-bold">
                                    <?= substr($review['review_author_name'], 0, 1); ?>
                                </div>
                            <?php endif; ?>
                            
                         <div class="mb-4">
                                <label class="block mb-2 font-medium">Оцінка:</label>
                                <div class="flex space-x-2 rating-stars">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer star-rating text-gray-400 hover:text-yellow-400" 
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-value="<?= $i ?>">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                        </svg>
                                    <?php endfor; ?>
                                    <input type="hidden" name="review_rating" id="review_rating" value="0" required>
                                </div>
                            </div>
                                <span class="text-sm text-gray-500"><?= esc_html($review['review_date']); ?></span>
                            </div>
                        </div>
                        <p class="text-gray-700"><?= nl2br(esc_html($review['review_text'])); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="text-center text-gray-500 py-6">Ще немає відгуків. Будьте першими, хто залишить відгук!</div>
        <?php endif; ?>
        <div class="text-center">
                <button type="submit" class="bg-[#4B9444] text-white px-8 py-3 rounded-xl font-bold uppercase transition-colors hover:bg-[#3A8240]">
                    Надіслати відгук
                </button>
            </div>
    </div>
    
    <!-- Форма для написания отзыва -->
    <div class="max-w-[700px] mx-auto bg-[#F3F5FC] p-8 rounded-xl shadow-md">
        <h3 class="text-xl font-bold mb-4 text-center"><?= get_field("review_form_title") ?: 'Залишити відгук' ?></h3>
        
        <form id="reviewForm" method="POST">
            <!-- Скрытое поле для ID страницы -->
            <input type="hidden" name="page_id" value="<?php echo get_the_ID(); ?>">
            <input type="hidden" name="action" value="submit_review">
            
            <div class="mb-4">
                <label for="review_name" class="block mb-2 font-medium">Ваше ім'я:</label>
                <input type="text" id="review_name" name="review_name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#4B9444] focus:border-transparent">
            </div>
            
            <div class="mb-4">
                <label for="review_email" class="block mb-2 font-medium">Електронна пошта:</label>
                <input type="email" id="review_email" name="review_email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#4B9444] focus:border-transparent">
            </div>
            
            <div class="mb-4">
                    <label class="block mb-2 font-medium">Оцінка:</label>
                    <div class="flex space-x-2 rating-stars">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer star-rating text-gray-400 hover:text-yellow-400" 
                                viewBox="0 0 20 20" fill="currentColor" data-value="<?= $i ?>">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        <?php endfor; ?>
                        <input type="hidden" name="review_rating" id="review_rating" value="0" required>
                    </div>
             </div>
            
            <div class="mb-4">
                <label for="review_text" class="block mb-2 font-medium">Ваш відгук:</label>
                <textarea id="review_text" name="review_text" rows="5" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#4B9444] focus:border-transparent"></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-[#4B9444] text-white px-8 py-3 rounded-xl font-bold uppercase transition-colors hover:bg-[#3A8240]">
                    Надіслати відгук
                </button>
            </div>
        </form>
    </div>
</section>




    <div class="relative w-full h-96">
        <iframe class="absolute top-0 left-0 w-full h-full"
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.1899358538135!2d22.72044586787626!3d48.45288515196096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4739ab8e9d8b0a53%3A0xe764a3c216e84117!2z0LLRg9C70LjRhtGPINCU0LDQvdC40LvQsCDQk9Cw0LvQuNGG0YzQutC-0LPQviwgMjEsINCc0YPQutCw0YfQtdCy0L4sINCX0LDQutCw0YDQv9Cw0YLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODk2MTE!5e0!3m2!1suk!2sua!4v1715351955701!5m2!1suk!2sua" 
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // Функции для модальных окон форм
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'flex';
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
    }

    // Функции для лайтбокса галереи
    window.openGalleryModal = function() {
        document.getElementById("myModal").style.display = "block";
    }

    window.closeGalleryModal = function() {
        document.getElementById("myModal").style.display = "none";
    }
    
    // Функции для слайдера
    var slideIndex = 1;
    showSlides(slideIndex);

    window.plusSlides = function(n) {
        showSlides(slideIndex += n);
    }

    window.currentSlide = function(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > slides.length) { slideIndex = 1; }
        if (n < 1) { slideIndex = slides.length; }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        if(slides.length > 0) {
            slides[slideIndex - 1].style.display = "block";
            if(dots.length > 0) {
                dots[slideIndex - 1].className += " active";
            }
        }
    }

    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) { // ESC key
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none';
            });
        }
    };

    // Добавляем обработчик кнопки для формы преподавателей
    const teachersBtn = document.getElementById('openTeachersModalBtn');
    if (teachersBtn) {
        teachersBtn.addEventListener('click', function() {
            openModal('teachersModal');
        });
    }

    // Функция для проверки на пустые значения в формах
    function isFormDataValid(form) {
        const inputs = form.querySelectorAll('input, textarea');
        for (let input of inputs) {
            if (!input.value.trim()) {
                return false;
            }
        }
        return true;
    }

    // Функция для обработки отправки формы через AJAX
    function handleFormSubmit(formId) {
        const form = document.getElementById(formId);
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (isFormDataValid(form)) {
                    var data = new FormData(form);
                    fetch(form.action, {
                        method: form.method,
                        body: data
                    })
                    .then(response => response.text())
                    .then(result => {
                        alert(result);
                        if(formId != "send2Form"){
                            closeModal(formId);
                            closeModal("modelConfirm");
                        }else{
                            const inputs = form.querySelectorAll('input, textarea');
                            for (let input of inputs) {
                                input.value = "";
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Сталася помилка, спробуйте ще раз.');
                    });
                } else {
                    alert('Будь ласка, заповніть всі поля.');
                }
            });
        }
    }

    // Обработка всех форм
    handleFormSubmit('teachersForm');
    handleFormSubmit('send2Form');
    handleFormSubmit('sendsForm');

    // Оптимизированная функция для Masonry
    function resizeMasonryItem(item) {
        if (!item) return;
        
        var grid = document.querySelector('.masonry');
        if (!grid) return;
        
        var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap') || 0);
        var rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows') || 0);

        var img = item.querySelector('img');
        if (!img) return;
        
        var imgHeight = img.naturalHeight || 0;
        var imgWidth = img.naturalWidth || 1;
        var aspectRatio = imgHeight / imgWidth;

        // Рассчитываем высоту блока на основе пропорций изображения
        var itemWidth = item.getBoundingClientRect().width;
        var itemHeight = itemWidth * aspectRatio;

        var rowSpan = Math.ceil((itemHeight + rowGap) / (rowHeight + rowGap));
        item.style.gridRowEnd = 'span ' + rowSpan;
    }

    function resizeAllMasonryItems() {
        var allItems = document.getElementsByClassName('masonry-item');
        if (allItems.length) {
            for (var i = 0; i < allItems.length; i++) {
                resizeMasonryItem(allItems[i]);
            }
        }
    }

    function waitForImages() {
        var masonryContainer = document.querySelector('.masonry');
        if (!masonryContainer) return;
        
        var allItems = document.getElementsByClassName('masonry-item');
        if (!allItems.length) return;
        
        // Используем один imagesLoaded для всей сетки
        imagesLoaded(masonryContainer, function() {
            for (var i = 0; i < allItems.length; i++) {
                resizeMasonryItem(allItems[i]);
            }
        });
    }

    // Добавляем обработчики событий для Masonry с небольшой задержкой
    setTimeout(function() {
        waitForImages();
        window.addEventListener('load', resizeAllMasonryItems);
        window.addEventListener('resize', resizeAllMasonryItems);
    }, 100);
    
    // Дополнительные обработчики для кнопок benefit/close
    const benefitButtons = document.querySelectorAll('.benefit');
    const closeButtons = document.querySelectorAll('.close');
    
    benefitButtons.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            const parent = this.closest('div');
            const moreText = parent.querySelector('.more');
            const closeBtn = parent.querySelector('.close');
            
            moreText.classList.remove('hidden');
            moreText.classList.remove('opacity-0');
            this.classList.add('hidden');
            closeBtn.classList.remove('hidden');
        });
    });
    
    closeButtons.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            const parent = this.closest('div');
            const moreText = parent.querySelector('.more');
            const benefitBtn = parent.querySelector('.benefit');
            
            moreText.classList.add('hidden');
            moreText.classList.add('opacity-0');
            this.classList.add('hidden');
            benefitBtn.classList.remove('hidden');
        });
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Функционал рейтинга
    const stars = document.querySelectorAll('.star-rating');
    const ratingInput = document.getElementById('review_rating');
    
    if (stars.length > 0 && ratingInput) {
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const value = parseInt(this.getAttribute('data-value'));
                ratingInput.value = value;
                
                // Визуализация
                stars.forEach(s => {
                    const starValue = parseInt(s.getAttribute('data-value'));
                    if (starValue <= value) {
                        s.classList.remove('text-gray-400');
                        s.classList.add('text-yellow-400');
                        s.setAttribute('fill', 'currentColor');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-400');
                        s.setAttribute('fill', 'none');
                    }
                });
            });
        });
    }
    
    // Обработка отправки формы
    const reviewForm = document.getElementById('reviewForm');
    
    if (reviewForm) {
        console.log('Форма отзывов найдена');
        
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('Форма отправляется');
            
            // Проверка рейтинга
            if (ratingInput.value === '0') {
                alert('Будь ласка, виберіть рейтинг (від 1 до 5 зірок)');
                return;
            }
            
            const formData = new FormData(this);
            
            // Выводим отправляемые данные
            console.log('Данные для отправки:');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }
            
            console.log('AJAX URL:', '<?php echo admin_url('admin-ajax.php'); ?>');
            
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Статус ответа:', response.status);
                return response.text();
            })
            .then(text => {
                console.log('Ответ сервера:', text);
                
                try {
                    const data = JSON.parse(text);
                    console.log('JSON ответ:', data);
                    
                    if (data.success) {
                        alert('Дякуємо за ваш відгук!');
                        reviewForm.reset();
                        // Сброс звезд
                        stars.forEach(s => {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-400');
                            s.setAttribute('fill', 'none');
                        });
                        ratingInput.value = '0';
                        
                        // Перезагрузка страницы
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else {
                        alert('Помилка: ' + (data.message || 'Невідома помилка'));
                    }
                } catch (e) {
                    console.error('Ошибка парсинга JSON:', e);
                    console.log('Полученный текст:', text);
                    alert('Ошибка обработки ответа сервера');
                }
            })
            .catch(error => {
                console.error('Ошибка запроса:', error);
                alert('Сталася помилка при відправці відгуку. Спробуйте пізніше.');
            });
        });
    } else {
        console.log('Форма отзывов не найдена на странице');
    }
});
</script>
<?php get_footer(); ?>