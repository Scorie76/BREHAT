document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','googleCalendar' ],
        

        googleCalendarApiKey: 'AIzaSyDEZmJjbse1qpdKF4IZmIcC2kYKQLCAzS8',

        eventSources: [
        {
          googleCalendarId: 'nu881vqdefmchf73tneqfhjeag@group.calendar.google.com',
          className: 'hauteSaison'
        },


        {
        googleCalendarId: '4i8j8n14u5rg0lia23gkeu87bo@group.calendar.google.com',
        className: 'basseSaison'
      },
      {
        googleCalendarId: '8plb7id2hqmvu1u61rbcshm28k@group.calendar.google.com',
        className: 'moyenneSaison'
      },

       {
        googleCalendarId: 'e24ik4lr7bffshd4sa3ahluo9k@group.calendar.google.com',
        className: 'nonDisponible'
      }

      ]

});
        calendar.render();

      });