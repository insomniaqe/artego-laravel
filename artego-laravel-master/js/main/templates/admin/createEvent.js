const createEvent = {template: `
<div>
<main class="main-admin">
      <aside class="admin-sidebar">
        <div class="admin-sidebar__wrapper sidebar--desktop">
          <div class="admin-sidebar__top"><a class="admin-sidebar__logo" href=""><img src="./img/logo-top-colored.svg" alt=""/></a><a class="admin-sidebar__username" href=""><img src="./img/icons/icon-admin-human.svg"/> Админ</a></div>
          <div class="admin-sidebar__nav">
           <ul>
              <li><a onclick="app.changePage('admin/orders')"><i class="far fa-file-alt"></i> Заявки-анкеты</a></li>
              <li><a onclick="app.changePage('admin/users')"><i class="fas fa-user"></i> Пользователи</a></li>
              <li><a onclick="app.changePage('admin/create')"><i class="far fa-calendar-alt"></i> Мероприятия<i class="fa fa-chevron-up"></i></a>
                <ul class="admin-sidebar__submenu">
                  <li><a onclick="app.changePage('admin/events')" class="admin-sidebar__events"><i class="far fa-calendar-check"></i> Текущие мероприятия<img class="currentevents-arrow" src="./img/icons/icon-admin-eventsarrow.svg" alt=""/></a></li>
                  <li><a ><i class="far fa-folder-open"></i> Архив</a></li>
                </ul>
              </li>
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
      <section class="addevent">
        <div class="addevent__top"><a class="addevent__top__add" href="">Добавить мероприятие</a><a class="admin__logout" href="">Выход</a></div>
        <div class="addevent__main">
          <form class="addevent__form">
            <form enctype="multipart/form-data" id="addEventForm">
              <div class="form-group">
                <label for="event_name">Название</label>
                <input type="text" id="event_name" name="event_name" placeholder="Введите название"/>
              </div>
              <div class="form-group">
                <label for="event_description">Описание</label>
                <textarea name="event_description" id="event_description" placeholder="Введите описание"></textarea>
              </div>
               <div class="form-group">
                <label for="event_people">Цена</label>
                <input type="text" id="price_a" name="event_people" placeholder="Цена"/>
              </div>
              <div class="form-group">
                <label for="event_begin">Дата начала</label>
                <input type="date" id="event_begin" name="event_begin"/>
              </div>
        
              <div class="form-group">
                <label for="event_people">Максимальное число участников</label>
                <input type="text" id="event_people" name="event_people" placeholder="Введите максимальное число участников"/>
              </div>
             
            
              <button onclick="app.createAdminEvent($('#event_name').val(), $('#event_description').val(), $('#price_a').val(), $('#event_begin').val(), $('#event_people').val())" type="button">Подтвердить</button>
            </form>
          </div>
        </div>
      </section>
    </main>
</div>
`};