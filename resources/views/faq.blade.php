<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Faq - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css" />
</head>

<body>
@include('navigation')

    <main class="page faq-page">
        <section class="clean-block clean-faq dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">FAQ</h2>
                    <p>Easy-to-use, powerful online event management.</p>
                </div>
                <div class="block-content">
                    <div class="faq-item">
                        <h4 class="question">What is a virtual event?</h4>
                        <div class="answer">
                            <p>Virtual events are designed by and for the cystic fibrosis community and feature keynote panels, fun
activities, group chats, and small-group video breakouts on issues that are unique to people living with
cystic fibrosis and their families.</p>
                            <p> The events provide a safe, open space for dialogue and discussions
focused on overall well-being, not clinical care. All events are for people 18 and older.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h4 class="question">Where do these events take place?</h4>
                        <div class="answer">
                            <p>Virtual events take place completely online. The events use a virtual environment which allows
attendees to view keynote sessions and participate in small-group video breakout sessions.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <h4 class="question">How long are virtual events?
</h4>
                        <div class="answer">
                            <p>The length of a virtual event ranges from a few hours to a multiple-day experience. Be sure to check the agenda for event-specific questions. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('footer')
</body>
</html>
