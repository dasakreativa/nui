const checkboxes = document.querySelectorAll('.checkradio');

if (checkboxes) {
	checkboxes.forEach((element, b) => {
		element.addEventListener('click', () => {
			const node = checkboxes[b].childNodes;
			const input = node[1];

			if (input.value == 'on') {
				// Remove All Active State
				if (checkboxes[b].classList.contains('indicator-rb') || input.getAttribute('type') == 'radio') {
					checkboxes.forEach((element, b) => {
						element.classList.remove('active');
					});
				}

				// Add Active State on Clicked Element
				checkboxes[b].classList.add('active');
			} else { }
		});

		// Add Hover State on Element
		element.addEventListener('mouseover', () => {
			checkboxes[b].classList.add('hover');
		});
		element.addEventListener('mouseout', () => {
			checkboxes[b].classList.remove('hover');
		});
	});
}
