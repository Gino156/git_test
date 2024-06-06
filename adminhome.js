document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');

    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        sidebar.classList.toggle('active');
        content.classList.toggle('active');
    });

    const addEventForm = document.getElementById('addEventForm');

    addEventForm.addEventListener('submit', (e) => {
        // No changes needed for form submission here
    });

    // Fetch and display events
    fetch('fetch_events.php')
        .then(response => response.json())
        .then(data => {
            const eventsContainer = document.querySelector('.events');
            data.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.classList.add('event-card');
                eventCard.innerHTML = `
                    <img src="${event.event_image}" alt="${event.event_name}">
                    <div class="event-info">
                        <h3>${event.event_name}</h3>
                        <p>${event.event_description}</p>
                        <p>${event.event_date}</p>
                    </div>
                `;
                eventsContainer.appendChild(eventCard);
            });
        })
        .catch(error => console.error('Error fetching events:', error));
});
