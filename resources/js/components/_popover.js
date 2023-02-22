/**
 * Popover initialization from bootstrap.
 *
 * @returns void
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 * @see https://getbootstrap.com/docs/5.3/components/popovers/#enable-popovers
 * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export
 */
export const popoverInit = () => {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
}
