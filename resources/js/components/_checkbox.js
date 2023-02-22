/**
 * Custom Checkbox control initialization to trigger click, hover and focused .checkradio elements.
 *
 * @returns void
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export
 */
export const checkboxInit = () => {
    const checkbox = document.querySelectorAll('.checkradio');

    checkbox?.forEach((element, b) => {
        // Click Element
        element?.addEventListener('click', () => {
            const node = checkbox[b]?.childNodes;
            const input = node[1];

            if (input.value == 'on') {
                // Remove All Active State
                if (checkbox[b].classList.contains('indicator-rb') || input.getAttribute('type') == 'radio') {
                    checkbox.forEach((element) => {
                        element.classList.remove('active');
                    });
                }

                // Add Active State on Clicked Element
                checkbox[b].classList.add('active');
            }
        });

        // Add Hover State on Element
        element.addEventListener('mouseover', () => {
            checkbox[b].classList.add('hover');
        });
        element.addEventListener('mouseout', () => {
            checkbox[b].classList.remove('hover');
        });
    });
}
