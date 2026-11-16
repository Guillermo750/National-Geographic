document.addEventListener('DOMContentLoaded', function () {

    // MENÚ PRINCIPAL MÓVIL
    const mobileButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileButton && mobileMenu) {
        mobileButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // SUBMENÚS DE ESCRITORIO
    const dropdownButtons = document.querySelectorAll('.dropdown-button');

    dropdownButtons.forEach(function (button) {

        button.addEventListener('click', function (event) {
            event.preventDefault();

            const name = button.dataset.dropdown;
            const menu = document.getElementById('dropdown-' + name);

            if (!menu) return;

            // Cerrar los demás submenús
            document.querySelectorAll('.dropdown-menu').forEach(function (otherMenu) {
                if (otherMenu !== menu) {
                    otherMenu.classList.add('invisible', 'opacity-0', 'translate-y-2');
                }
            });

            // Abrir o cerrar el seleccionado
            menu.classList.toggle('invisible');
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('translate-y-2');
        });
    });

    // SUBMENÚS MÓVILES
    const mobileDropdownButtons = document.querySelectorAll('[data-mobile-dropdown]');

    mobileDropdownButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const menuId = button.dataset.mobileDropdown;
            const menu = document.getElementById(menuId);

            if (!menu) return;

            menu.classList.toggle('hidden');
        });
    });

    // CERRAR SUBMENÚS DE ESCRITORIO AL PULSAR FUERA
    document.addEventListener('click', function (event) {

        if (!event.target.closest('#desktopNavigation')) {
            document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
                menu.classList.add('invisible', 'opacity-0', 'translate-y-2');
            });
        }
    });

});