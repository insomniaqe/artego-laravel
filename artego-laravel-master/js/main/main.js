const routes = [
    {path: '/', component: index},
    {path: '/cabinet', component: cabinet},
    {path: '/news', component: news},
    {path: '/settings', component: settings},
    {path: '/admin/orders', component: orders},
    {path: '/admin/users', component: users},
    {path: '/admin/create', component: createEvent},
    {path: '/admin/events', component: eventsAdmin},
]

const router = new VueRouter({
    routes
})

let app = new Vue({
    router,
    data: {
        user: {
            authuser: false,
            usertoken: false,
            userdata: false,
            activeUser: true
        },
        config: {
            host: 'http://201955.fornex.cloud/artego/laravelapp/public/api/',
            stime: 0
        },
        currentLink: false,
        selectedChatId: false,
        profilePage: false,
        events: [],
        news: [],
        adminOrders: [],
        adminUsers: [],
        adminEvents: []
    },
    methods: {
        getUserToken() {
            if (this.getCookie('token')) {
                this.user.usertoken = this.getCookie('token');
            } else {
                this.user.usertoken = false;
            }
        },

        async checkUserAuth() {
            this.getUserToken();
            await axios.get(this.config.host + 'getUserInfoProfile', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                this.user.authuser = true;
                this.config.stime = res.data.time;
                this.user.userdata = res.data.usedData;
                this.user.activeUser = res.data.userStatus;
            }).catch(e => {
                this.user.authuser = false;
            });

            await this.checkCurrrentPath();
        },

        getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        },

        setCookie(name, value, options = {}) {
            options = {
                path: '/',
                ...options
            };
            if (options.expires instanceof Date) {
                options.expires = options.expires.toUTCString();
            }
            let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
            for (let optionKey in options) {
                updatedCookie += "; " + optionKey;
                let optionValue = options[optionKey];
                if (optionValue !== true) {
                    updatedCookie += "=" + optionValue;
                }
            }
            document.cookie = updatedCookie;
        },

        deleteCookie(name) {
            this.setCookie(name, "", {
                'max-age': -1
            })
        },

        logout() {
            this.deleteCookie('token');
            this.changePage('login');
            this.checkUserAuth();
        },

        isEmpty(data) {
            if (data.trim() != '' && data.trim() != ' ') {
                return false;
            }

            return true;
        },

        changePageRoute(to) {
            router.push({path: '/' + to + '/'});
        },

        changePage(page, full = false) {
            if (!full) {
                document.location.replace('http://201955.fornex.cloud/artego/artego-laravel-master/#/' + page);
                return
            }
            document.location.replace(page);
        },

        async tryAuthUser(login, password) {
            await axios.post(this.config.host + 'authByPassword', {
                login: login,
                password: password
            }).then(res => {
                if (res.data.status == 'success') {
                    this.user.usertoken = res.data.token;
                    this.setCookie('token', res.data.token);
                    this.checkUserAuth();
                    router.push({path: '/cabinet'});
                    document.location.reload();
                    return;
                }
                this.noty('Данные не верны');
            });

            return false;
        },

        async signup(fio, email, login, pass1, pass2){
            if(fio.trim() == '' || email.trim() == '' || login.trim() == '' || pass1.trim() == '' || pass2.trim() == ''){
                this.noty('Заполните все поля');
                return;
            }
            if(pass1 != pass2){
                this.noty('Пароли не совпадают');
                return;
            }

            axios.post(this.config.host + 'signUp', {
                login: login,
                email: email,
                fio: fio,
                password: pass1
            },{
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.noty('Вы успешно зарегистрировались');
                    this.user.usertoken = res.data.token;
                    this.setCookie('token', res.data.token);
                    this.checkUserAuth();
                    router.push({path: '/cabinet'});
                    document.location.reload();
                }
                if (res.data.status == 'error') {
                    this.noty('Логин или email занят');
                }
            });

        },

        async noty(text) {
            new Noty({
                theme: 'mint',
                type: 'info',
                layout: 'topRight',
                text: text,
                timeout: 1500
            }).show();
        },

        async login(login, password) {
            if (!this.isEmpty(login) && !this.isEmpty(password)) {
                await this.tryAuthUser(login, password);
                return;
            }

            this.noty('Заполните все поля');
        },

        getEvents() {
            axios.get(this.config.host + 'getEvents', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.events = res.data.data;
                    this.renderEvents();
                }
            });
        },

        getNews() {
            axios.get(this.config.host + 'getNews', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.news = res.data.data;
                    this.renderNews();
                }
            });
        },

        renderNews() {
            $('#div-push-news').empty();
            for (let i = 0; i < this.news.length; i++) {
                $('#div-push-news').append(`<div class="news__list__item" style="width: 300px;min-width: 300px;">
                    <div class="news__date"><img src="./img/icons/icon-admin-calendar-red.svg" alt=""/>
                    <p` + this.news[i]['date'] + `</p>
                </div><img class="news__photo" src="./img/admin-events-item.png" alt=""/>
                <div class="news__description">
                    <h3>` + this.news[i]['name'] + `</h3>
                <p>` + this.news[i]['about'] + `</p>
                </div><a class="news__pay" onclick="app.buyNews(` + i + `)">Оплатить за ` + this.news[i]['price'] + `₽</a>
                </div>`)
            }
        },

        renderEvents() {
            $('#div-events-push').empty();
            if(this.events.length == 0){
                $('#div-events-push').append('<h3>У вас еще нету купленных мероприятий</h3>');
            }
            for (let i = 0; i < this.events.length; i++) {
                $('#div-events-push').append('<div class="events__list__event"><div class="event__date"><img src="./img/icons/icon-admin-calendar-red.svg" alt=""/><p>' + this.events[i]['date'] + '</p></div><img class="event__photo" src="./img/admin-events-item.png" alt=""/><div class="event__description"<h3>' + this.events[i]['name'] + '</h3><p>' + this.events[i]['about'] + '</p></div></div>')
            }
        },

        renderBalance() {
            //$('.admin-sidebar__nav').prepend('<span style="color: white;">Баланс: ' + this.user.userdata['money'] + '₽</span>')
        },

        buyNews(id) {
            if (this.news[id].price > this.user.userdata['money']) {
                this.noty('Недостаточно средств');
                return;
            }

            axios.post(this.config.host + 'buyEvent', {
                eventId: this.news[id].id
            }, {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.noty('Успешно куплено');
                }
                if (res.data.status == 'error') {
                    if (res.data.error == 'buy_before') {
                        this.noty('Уже куплено');
                    }

                    if (res.data.error == 'low_money') {
                        this.noty('Недостаточно средств');
                    }
                }
            });
        },

        updateSettings(email, phone, fio) {
            if (fio.trim() == '' || email.trim() == '' || phone.trim() == '') {
                this.noty('Заполните все поля');
                return;
            }

            axios.post(this.config.host + 'updateUserInfo', {
                fio: fio,
                email: email,
                phone: phone,
            }, {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.noty('Сохранено');
                }
            });
        },

        renderSettings() {
            $('#settings_email').val(this.user.userdata['email']);
            $('#settings_phone').val(this.user.userdata['phone']);
            $('#settings_name').val(this.user.userdata['fio']);
        },


        //admin

        getOrdersAdmin() {
            axios.get(this.config.host + 'getAdminOrders', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                this.adminOrders = res.data.data;
                this.renderOrdersAdmin();
            });
        },

        renderOrdersAdmin() {
            for (let i = 0; i < this.adminOrders.length; i++) {
                $('#div-order-push').append('<tr><td><span>' + this.adminOrders[i]['id'] + '</span></td><td><span>' + this.adminOrders[i]['fio'] + '</span></td><td><span>' + this.adminOrders[i]['phone'] + '</span></td><td><span>' + this.adminOrders[i]['email'] + '</span></td><td><span>' + this.adminOrders[i]['date'] + '</span></td></tr>')
            }
        },


        getAdminUsers() {
            axios.get(this.config.host + 'getAdminUsers', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                this.adminUsers = res.data.data;
                this.renderAdminUsers();
            });
        },

        renderAdminUsers() {
            $('#div-push-users').empty();
            for (let i = 0; i < this.adminUsers.length; i++) {
                $('#div-push-users').append(`
                <tr>
                  <td><span>` + this.adminUsers[i]['id'] + `</span></td>
                  <td><span>` + this.adminUsers[i]['fio'] + `</span></td>
                  <td><span>` + this.adminUsers[i]['phone'] + `</span></td>
                  <td><span>` + this.adminUsers[i]['email'] + `</span></td>
                  <td><a class="users__table__edit" href=""><img src="./img/icons/icon-admin-edit.svg" alt=""/></a></td>
                </tr>
                `)
            }
        },

        createAdminEvent(name, about, price, date, max) {
            if (name.trim() == '' || about.trim() == '' || price.trim() == '' || date.trim() == '' || max.trim() == '') {
                this.noty('Заполните все поля');
                return;
            }

            axios.post(this.config.host + 'createNewEvent', {
                name: name,
                about: about,
                price: price,
                date: date,
                max: max,
            }, {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.noty('Создано');
                }
            });
        },

        getAdminEvents() {
            //adminEvents
            //getNews
            axios.get(this.config.host + 'getNews', {
                headers: {Authorization: `Bearer ${this.user.usertoken}`}
            }).then(res => {
                if (res.data.status == 'success') {
                    this.adminEvents = res.data.data;
                    this.renderAdminEvents();
                }
            });
        },

        renderAdminEvents() {
            $('#div-admin-events-push').empty();
            for (let i = 0; i < this.adminEvents.length; i++) {
                $('#div-admin-events-push').append(`
                <tr>
                  <td><span>`+this.adminEvents[i]['name']+`</span></td>
                  <td><span>`+this.adminEvents[i]['about']+`</span></td>
                  <td><span>`+this.adminEvents[i]['date']+`</span></td>
                  <td><span>150</span></td>
                  <td><a class="events__delete" href=""><img src="./img/icons/icon-admin-trash-red.svg" alt=""/></a></td>        
                </tr>
                `);
            }
        },

        checkCurrrentPath() {
            if (this.$router.currentRoute.path.substr(0, 11) == '/') {

            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/cabinet') {
                this.getEvents();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/news') {
                this.getNews();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/settings') {
                this.renderSettings();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/orders') {
                this.getOrdersAdmin();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/users') {
                this.getAdminUsers();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/events') {
                this.getAdminEvents();
                this.uar();
            }

            this.currentLink = this.$router.currentRoute.path.substr(0, 30);
        },

        uar(revers = false) {
            if (!revers) {
                if (this.user.authuser != true) {

                    document.location.replace('http://201955.fornex.cloud/artego/artego-laravel-master/#/');

                }
                return;
            }
            if (this.user.authuser == false) {
                document.location.replace('http://201955.fornex.cloud/chattingtrain.space/index.php#/login');
            }

        },

    }, watch: {
        '$route'() {
            if (this.$router.currentRoute.path.substr(0, 11) == '/') {

            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/cabinet') {
                this.getEvents();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/news') {
                this.getNews();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 11) == '/settings') {
                this.renderSettings();
                this.renderBalance();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/orders') {
                this.getOrdersAdmin();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/users') {
                this.getAdminUsers();
                this.uar();
            }

            if (this.$router.currentRoute.path.substr(0, 20) == '/admin/events') {
                this.getAdminEvents();
                this.uar();
            }
            this.currentLink = this.$router.currentRoute.path.substr(0, 30);
        }
    }

}).$mount('#app');

window.onload = () => {
    app.checkUserAuth();
    $('#div-hide-footer').show().css({'display' : 'flex'})
}
