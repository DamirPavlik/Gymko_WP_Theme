document.addEventListener('DOMContentLoaded', function () {
    const notificationBarText = document.querySelector('[data-name="notification_bar_text"]');
    const NotificationBarCheckboxes = {
        no: document.getElementById("acf-field_65749cd837a1c-no"),
        yes: document.getElementById("acf-field_65749cd837a1c-yes"),
    };

    const showButton = document.querySelector('[data-name="show_button"]');
    const showButtonCheckboxes = {
        no: document.getElementById("acf-field_6574ad5aae1cd-no"),
        yes: document.getElementById("acf-field_6574ad5aae1cd-yes"),
    };
    const buttonText = document.querySelector('[data-name="button_text"]');
    const buttonLink = document.querySelector('[data-name="button_link"]');

    const updateDisplayNotificationBar = () => {
        const displayStyle = NotificationBarCheckboxes.no.checked ? 'none' : 'block';
        [notificationBarText, showButton, buttonText, buttonLink].forEach(element => {
            element.style.display = displayStyle;
        });
    };

    const updateDisplayButton = () => {
        const displayStyle = showButtonCheckboxes.no.checked ? 'none' : 'block';
        [buttonText, buttonLink].forEach(element => {
            element.style.display = displayStyle;
        });
    };

    updateDisplayNotificationBar();
    updateDisplayButton();

    Object.values(NotificationBarCheckboxes).forEach(checkbox => {
        checkbox.addEventListener('change', updateDisplayNotificationBar);
    });

    Object.values(showButtonCheckboxes).forEach(checkbox => {
        checkbox.addEventListener('change', updateDisplayButton);
    });
});
