const news = {template: `
<div>
<main class="main-cabinet">
      <aside class="admin-sidebar">
        <div class="admin-sidebar__wrapper">
          <div class="admin-sidebar__top"><a class="admin-sidebar__logo" href=""><img src="./img/icons/logo-nav-bottom.svg" alt=""/></a><a class="admin-sidebar__username" href=""><img src="./img/icons/icon-admin-human.svg"/> Личный кабинет</a></div>
          <div class="admin-sidebar__nav">
       
            <ul>
              <li><a onclick="app.changePage('cabinet')" ><i class="far fa-calendar-alt"></i> Мероприятия</a></li>
              <li><a><i class="far fa-file-alt"></i> Новости</a></li>
              <li><a  onclick="app.changePage('settings')" ><i class="fas fa-hdd"></i> Настройка</a></li>
            </ul>
          </div>
        </div>
      </aside>
      <aside class="admin-sidebar admin-sidebar--mob">
        <div class="admin-sidebar__wrapper">
          <div class="admin-sidebar__left"><a class="admin-sidebar__menu" href="" id="adminSidebarHamburger"><i class="fas fa-bars"></i></a></div>
          <div class="admin-sidebar__middle"><a class="admin-sidebar__logo" href=""><img src="./img/icons/admin-nav-logo-black.svg" alt=""/></a></div>
          <div class="admin-sidebar__right"><a class="admin-sidebar__logout" href="">Выйти</a></div>
        </div>
        <div class="admin__nav__menu">
          <ul>
            <li><a href=""><i class="far fa-file-alt"></i> Заявки-анкеты</a></li>
            <li><a href=""><i class="fas fa-user"></i> Пользователи</a></li>
            <li><a href=""><i class="far fa-calendar-alt"></i> Мероприятия<i class="fa fa-chevron-up"></i></a>
              <ul class="admin-sidebar__submenu">
                <li><a class="admin-sidebar__events" href=""><i class="far fa-calendar-check"></i> Текущие мероприятия<img class="currentevents-arrow" src="./img/icons/icon-admin-eventsarrow.svg" alt=""/></a></li>
                <li><a href=""><i class="far fa-folder-open"></i> Архив</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <section class="news">
        <div class="news__top"><a class="news__top__list" href="">Новости</a><a class="admin__logout" href="">Выход</a></div>
        <div class="news__main">
          <h3>Ближайшие тренинги по специальной цене</h3>
          <div class="news__list swiper-container">
            <div class="swiper-wrapper" id = "div-push-news">
             
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    </main>
</div>
`};