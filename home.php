<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTBRGY.ph</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-picture">
                <img src="profile-placeholder.png" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Princess V. Silva</h2>
                <p>+639123456789</p>
                <p class="status">Unverified</p>
                <img src="qr-code-placeholder.png" alt="QR Code" class="qr-code">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="myaccount.html">My account</a></li>
                <li><a href="inbox.html">Inbox</a></li>
                <li><a href="#">All Transactions</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <div class="header">
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="brand">SMARTBRGY.ph</div>
            <div class="profile-icon">
                <img src="profile-icon.png" alt="Profile Icon">
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search here">
            <button><img src="search-icon.png" alt="Search"></button>
            <button><img src="filter-icon.png" alt="Filter"></button>
        </div>
        <div id="featured-event-container">
            <!-- Featured event will be dynamically loaded here -->
        </div>
        <div class="tabs">
            <button class="tab">I-Events</button>
            <button class="tab">I-HANDA</button>
            <button class="tab">I-Documents</button>
        </div>
        <div class="events">
            <!-- Event cards will be dynamically loaded here -->
        </div>
    </div>
    <script src="home.js"></script>
    <script>
        // Fetch events from the server
        fetch('fetch_events.php')
            .then(response => response.json())
            .then(events => {
                const eventsContainer = document.querySelector('.events');
                let featuredEvent = events[0];

                // Loop through the events and create event cards
                events.forEach(event => {
                    const eventCard = document.createElement('div');
                    eventCard.classList.add('event-card');

                    const eventImage = document.createElement('img');
                    eventImage.src = event.event_image;
                    eventImage.alt = event.event_name;

                    const eventInfo = document.createElement('div');
                    eventInfo.classList.add('event-info');

                    const eventName = document.createElement('h3');
                    eventName.textContent = event.event_name;

                    const registerLink = document.createElement('a');
                    registerLink.href = '#';
                    registerLink.textContent = 'Register here';

                    // Append elements to event card
                    eventInfo.appendChild(eventName);
                    eventInfo.appendChild(registerLink);
                    eventCard.appendChild(eventImage);
                    eventCard.appendChild(eventInfo);

                    // Append event card to events container
                    eventsContainer.appendChild(eventCard);

                    // Determine the event with the furthest date
                    if (new Date(event.event_date) > new Date(featuredEvent.event_date)) {
                        featuredEvent = event;
                    }
                });

                // Create and insert featured event card
                const featuredEventContainer = document.getElementById('featured-event-container');
                const featuredEventCard = document.createElement('div');
                featuredEventCard.classList.add('featured-event');

                const featuredEventImage = document.createElement('img');
                featuredEventImage.id = 'featured-event-img';
                featuredEventImage.src = featuredEvent.event_image;
                featuredEventImage.alt = featuredEvent.event_name;

                const registerButton = document.createElement('button');
                registerButton.classList.add('register-btn');
                registerButton.textContent = 'Click here to register';
                registerButton.href = '#'; // Link to the featured event registration

                featuredEventCard.appendChild(featuredEventImage);
                featuredEventCard.appendChild(registerButton);

                featuredEventContainer.appendChild(featuredEventCard);
            })
            .catch(error => console.error('Error fetching events:', error));
    </script>
</body>

</html>