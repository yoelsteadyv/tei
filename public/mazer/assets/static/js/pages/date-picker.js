
flatpickr('.flatpickr-no-config', {
    dateFormat: "d F Y",
    // enableTime: true,
    // dateFormat: "Y-m-d", 
})
flatpickr('.flatpickr-always-open', {
    inline: true
})
flatpickr('.flatpickr-range', {
    dateFormat: "d F Y",
    // dateFormat: "F j, Y",
    mode: 'range',
    confirmIcon: "<i class='fa fa-check'></i>", // your icon's html, if you wish to override
    confirmText: "OK ",
})
flatpickr('.flatpickr-range-preloaded', {
    dateFormat: "F j, Y",
    mode: 'range',
    defaultDate: ["2016-10-10T00:00:00Z", "2016-10-20T00:00:00Z"]
})
flatpickr('.flatpickr-time-picker-24h', {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    inline: true
})