import './bootstrap';
import flatpickr from "flatpickr";

document.addEventListener('DOMContentLoaded', function () {
    let disableInputs = false;

    document.querySelectorAll('.datepicker').forEach(function (item) {
        if (item.hasAttribute('readonly')) {
            disableInputs = true;
        } else if (!disableInputs) {
            flatpickr(item, {
                minDate: "today"
            });
        }
    });

    if (disableInputs) {
        document.querySelectorAll('.datepicker').forEach(function (item) {
            item.disabled = true;
        });
    }
});
