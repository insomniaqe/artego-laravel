const settings = {
    template: `
<div>
<main class="main-cabinet">
      <aside class="admin-sidebar">
        <div class="admin-sidebar__wrapper">
          <div class="admin-sidebar__top"><a class="admin-sidebar__logo" href=""><img src="./img/icons/logo-nav-bottom.svg" alt=""/></a><a class="admin-sidebar__username" href=""><img src="./img/icons/icon-admin-human.svg"/> Личный кабинет</a></div>
          <div class="admin-sidebar__nav">
            <ul>
              <li><a onclick="app.changePage('cabinet')"><i class="far fa-calendar-alt"></i> Мероприятия</a></li>
              <li><a onclick="app.changePage('news')"><i class="far fa-file-alt"></i> Новости</a></li>
              <li><a ><i class="fas fa-hdd"></i> Настройка</a></li>
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
      <div class="settings">
        <div class="settings__top"><a class="news__top__list" href="">Настройка</a><a class="admin__logout" href="">Выход</a></div>
        <div class="settings__main">
          <div class="settings__form" id="settingsForm">
            <div class="form-group">
              <p>Эл.почта</p>
              <input type="email" id="settings_email" name="settings_email" value="ivanov@gmail.com"/>
              <label for="settings_email">Изменить</label>
            </div>
            <div class="form-group">
              <p>Телефон</p>
              <input type="tel" id="settings_phone" name="settings_phone" value="8910454647"/>
              <label for="settings_phone">Изменить</label>
            </div>
            <div class="form-group">
              <p>ФИО</p>
              <input type="text" id="settings_name" name="settings_name" value="Иванов Иван Иванович"/>
              <label for="settings_name">Изменить</label>
            </div>
            <div class="settings__form__buttons"><a class="settings__form__button settings__form__button--cancel" href="">Отмена</a>
              <button class="settings__form__button settings__form__button--save" onclick="app.updateSettings($('#settings_email').val(), $('#settings_phone').val(), $('#settings_name').val())">Сохранить</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    </div>
`
};