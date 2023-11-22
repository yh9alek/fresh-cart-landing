<header>
    <div class="header__container container">
        <div class="header__r1">
            <div class="header__title">
                <figure class="title__figure">
                    <img src="https://cdn.discordapp.com/attachments/1129195909796860029/1176623376576561162/icon.PNG?ex=656f8ae9&is=655d15e9&hm=759e32a1a0d497573b6f3b13068180a75d93a8a64f8aecb794ea0206aeb305bb&" class="figure__img">
                </figure>
                <h3 class="title">FreshCart</h3>
            </div>
            <div class="background <?= $_GET['active'] ?? '' ?>"></div>
            <div class="header__mid <?= $_GET['active']  ?? '' ?>">
                <div class="header__left <?= $_GET['active'] ?? '' ?>">
                    <div class="header__title">
                        <figure class="title__figure">
                            <img src="https://cdn.discordapp.com/attachments/1129195909796860029/1176623376576561162/icon.PNG?ex=656f8ae9&is=655d15e9&hm=759e32a1a0d497573b6f3b13068180a75d93a8a64f8aecb794ea0206aeb305bb&" class="figure__img">
                        </figure>
                        <h3 class="title">FreshCart</h3>
                    </div>
                    <a class="header__exit" href="/home?active=null"><i class="fa-solid fa-xmark"></i></a>
                </div>
                <form class="search__container" method="post">
                    <input name="search" class="header__search form__control" type="search" placeholder="Search for products">
                    <button type="submit" class="header__search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <button type="submit" class="header__location-btn form__control"><i class="fa-solid fa-location-dot"></i> Location</button>
            </div>
            <div class="header__btns">
                <i class="fa-regular fa-heart"></i>
                <i class="fa-regular fa-user"></i>
                <i class="fa-solid fa-bag-shopping"></i>
                <a href="/home?active=active" class="menu__btn"><img src="https://cdn.discordapp.com/attachments/1129195909796860029/1176675266634985542/menu.PNG?ex=656fbb3d&is=655d463d&hm=fa9514fc71a859f2a36acd02f93d1a79fef848a70f4c77b71b83fd4dde9f6458&"></a>
            </div>
        </div>
        <div class="header__r2 <?= $_GET['active'] ?? '' ?>">
            <button class="header__departments-btn form__control">All Departaments</button>
            <div class="header__selects">
                <select class="header__select header__home form__control">
                    <option>Home</option>
                </select>
                <select class="header__select header__shop form__control">
                    <option>Shop</option>
                </select>
                <select class="header__select header__stores form__control">
                    <option>Stores</option>
                </select>
                <select class="header__select header__menu form__control">
                    <option>Mega Menu</option>
                </select>
                <select class="header__select header__pages form__control">
                    <option>Pages</option>
                </select>
            </div>
        </div>
    </div>
</header>