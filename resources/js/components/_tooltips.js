/**
 * Initialize tooltip element to this template.
 *
 * @returns void
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 * @see https://getbootstrap.com/docs/5.3/components/tooltips/#enable-tooltips
 * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export
 */
export const tooltipInit = () => {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
}
