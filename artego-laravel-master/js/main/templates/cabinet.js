const cabinet = {template: `
<div>
<main class="main-cabinet">
      <aside class="admin-sidebar">
        <div class="admin-sidebar__wrapper">
          <div class="admin-sidebar__top"><a class="admin-sidebar__logo" href=""><img src="./img/icons/logo-nav-bottom.svg" alt=""/></a><a class="admin-sidebar__username" href=""><img src="./img/icons/icon-admin-human.svg"/> Личный кабинет</a></div>
          <div class="admin-sidebar__nav">
            <ul>
              <li><a><i class="far fa-calendar-alt"></i> Мероприятия</a></li>
              <li><a onclick="app.changePage('news')"><i class="far fa-file-alt"></i> Новости</a></li>
              <li><a onclick="app.changePage('settings')" ><i class="fas fa-hdd"></i> Настройка</a></li>
            </ul>
          </div>
        </div>
      </aside>
      <section class="events">
        <div class="events__top"><a class="events__top__list" href="">Мои мероприятия</a><a class="admin__logout" href="">Выход</a></div>
        <div class="events__main">
          <div class="events__list" id = "div-events-push">
            
          </div>
        </div>
      </section>
    </main>
</div>
`};