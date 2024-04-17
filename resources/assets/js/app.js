import './bootstrap';
import flatpickr from "flatpickr";

document.addEventListener('DOMContentLoaded', function () {
    let disableInputs = false;

    document.querySelectorAll('.datepicker').forEach(function (item) {
        if (item.hasAttribute('readonly')) {
            disableInputs = true;
        } else if (!disableInputs) {
            flatpickr(item, {
                minDate: "today",
                enableTime: true,
                time_24hr: true
            });
        }
    });

    if (disableInputs) {
        document.querySelectorAll('.datepicker').forEach(function (item) {
            item.disabled = true;
        });
    }
});
