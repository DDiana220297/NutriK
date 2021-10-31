$(document).ready(function() {
    let date = new Date();
    let d = date.getDate();
    let m = date.getMonth();
    let y = date.getFullYear();
    let calendar_events = [];

    $('#event_type_alert').hide();
    let calendar_events_nodes = document.querySelectorAll('.calendar_event');
    for (let i = 0; i < calendar_events_nodes.length; ++i){
        let event = {
            id: calendar_events_nodes[i].querySelector('.calendar_event_id').value,
            title: calendar_events_nodes[i].querySelector('.calendar_event_title').value,
            start: calendar_events_nodes[i].querySelector('.calendar_event_start').value,
            end: calendar_events_nodes[i].querySelector('.calendar_event_end').value,
            url: calendar_events_nodes[i].querySelector('.calendar_event_url').value,
            className: 'info',
            allDay: false
        }
        calendar_events.push(event)
    }

    /* Initialize the calendar */
    let calendar = $('#calendar').fullCalendar({
        header: {
            left: 'title',
            center: 'agendaDay,agendaWeek,month',
            right: 'prev,next today'
        },
        editable: true,
        firstDay: 1,
        selectable: true,
        defaultView: 'month',

        axisFormat: 'h:mm',
        columnFormat: {
            month: 'ddd',
            week: 'ddd d',
            day: 'dddd M/d',
            agendaDay: 'dddd d'
        },
        titleFormat: {
            month: 'MMMM yyyy',
            week: "MMMM yyyy",
            day: 'MMMM yyyy'
        },
        allDaySlot: false,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('¿Añadir Evento?', 'Evento');
            if (title.toLowerCase() === 'evento') {
                window.document.location = '/web/nutritionist-add-event';
            } else {
                $('#event_type_alert').show();
            }
            calendar.fullCalendar('unselect');
        },

        events: calendar_events,
    });
});
