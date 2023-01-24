/**
 * Mengimpor MetisMenu
 *
 * Mengimpor komponen MetisMenu ke dalam Core Nusantara UI Kit secara
 * langsung dan otomatis.
 *
 * @since 1.0.0
 */
import 'metismenujs/sass'
import { MetisMenu } from 'metismenujs'

const menu = document.getElementById('sidebar-menu');

if(menu) {
    new MetisMenu("#sidebar-menu");
}

/**
 * Penambahan Class Otomatis
 *
 * Menambahkan kelas .mm-show ketika di parent ul.mm-active ditambahkan, sehingga
 * tidak membuat lupa developer web dalam membangun template ini.
 *
 * @since 1.0.0
 */
window.addEventListener('load', () => {
	const el = document.querySelectorAll('#sidebar-menu .mm-active')

	if(el.length > 0) {
		el.forEach((a) => {
			const submenu = a.querySelectorAll('ul');

			if(submenu.length > 0) {
				if(!submenu[0].classList.contains('mm-show')) submenu[0].classList.add('mm-show');
			}
		});
	}
});
