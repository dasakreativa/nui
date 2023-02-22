import { checkboxInit } from './_checkbox';
import { popoverInit } from './_popover';
import { tooltipInit } from './_tooltips';

/**
 * The function to initialize all function from this template. You can disable it if is not used for your project.
 *
 * @returns void
 * @since 1.0.0-20230220
 * @author Dasa Kreativa Studio <dasakreativa@gmail.com>
 */
const initAll = () => {
    checkboxInit();
    popoverInit();
    tooltipInit();
}

initAll();
