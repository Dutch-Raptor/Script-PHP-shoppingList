<div class="navbar">
    <div class="navbar__container container">
        <div class="navbar__container__branding">
            Shopping List!
        </div>
        <div class="navigation">
            <ul class="navigation__list">
                <li class="navigation__list__item"><a href="/groceries" class="navigation__list__item__link 
                <?php if (Request::uri() === 'groceries' || Request::uri() === '') {
                    echo "active";
                } ?> ">Groceries</a></li>
                <li class="navigation__list__item"><a href="/groceries/create" class="navigation__list__item__link
                <?php if (Request::uri() == 'groceries/create') {
                    echo "active";
                } ?> ">Create</a></li>
            </ul>
        </div>
    </div>
</div>