import 'metismenujs/sass'
import { MetisMenu } from 'metismenujs'

/**
 * Mengimpor MetisMenu
 *
 * Mengimpor komponen MetisMenu ke dalam Core Nusantara UI Kit secara
 * langsung dan otomatis.
 *
 * @since 1.0.0
 */
const menuInit = () => {
    const menu = document.getElementById('sidebar-menu');

    if(menu) {
        new MetisMenu("#sidebar-menu");
    }
}

/**
 * Button Toggler initialization
 *
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 */
const sidebarTogglerInit = () => {
    const toggler        = document.querySelectorAll('[data-toggle="sidebar"]');
    const menuActive     = document.querySelectorAll('.mm-active');
    const collapseActive = document.querySelectorAll('.mm-show');
    const body           = document.querySelector('body');

    toggler?.forEach((element) => {
        element?.addEventListener('click', () => {
            body?.classList.toggle('toggled');

            console.log(menuActive, collapseActive)

            // Remove active menu at li.mm-active
            menuActive?.forEach((element) => {
                element.classList.remove('mm-active');
            });

            // Remove active menu at li.mm-active
            collapseActive?.forEach((element) => {
                element.classList.remove('mm-show');
            });
        });
    });
}

/**
 * Penambahan Class Otomatis
 *
 * Menambahkan kelas .mm-show ketika di parent ul.mm-active ditambahkan, sehingga
 * tidak membuat lupa developer web dalam membangun template ini.
 *
 * @since 1.0.0
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 */
const classMenuInit = () => {
    window.addEventListener('load', () => {
        const el = document.querySelectorAll('#sidebar-menu .mm-active')

        el?.forEach((a) => {
            const submenu = a.querySelectorAll('ul');
            if(!submenu[0]?.classList.contains('mm-show')) submenu[0].classList.add('mm-show');
        });
    });
}

/**
 * Initialize all sidebar init.
 *
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 */
function sidebarInit() {
    classMenuInit();
    menuInit();
    sidebarTogglerInit();
}

sidebarInit();
