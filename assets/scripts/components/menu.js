import { links } from '../data/menu.js';


console.log(document.querySelector('#menu-js'));
if (document.querySelector('#menu-js')) {
	const menuContainer = document.querySelector('#menu-js');
	let menuTemplate = `<ul>`
	links.forEach(function (link) {
		menuTemplate += `<li><a href="${link.url}" title="${link.title}">${link.title}</a></li>`;
	});
	menuTemplate += `</ul>`;

	menuContainer.innerHTML = menuTemplate;
}
