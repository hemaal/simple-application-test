{{-- resources/views/instructions.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel Booking Conflict Resolver - Test Instructions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
            line-height: 1.6;
            background: #f9f9f9;
            color: #333;
        }

        h1,
        h2,
        h3 {
            color: #2c3e50;
        }

        pre {
            background: #272822;
            color: #f8f8f2;
            padding: 1rem;
            overflow-x: auto;
            border-radius: 5px;
        }

        code {
            background: #eee;
            padding: 0.2rem 0.4rem;
            border-radius: 3px;
            font-family: Consolas, monospace;
        }

        ul {
            margin-top: 0;
        }

        .section {
            margin-bottom: 2rem;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Laravel Developer Test Case – Booking Conflict Resolver</h1>

    <div class="section">
        <h2>🧪 Overview</h2>
        <p>
            You are building a meeting room reservation system for a co-working space.
            Users can book meeting rooms for specific times during the day.
            A room cannot be double-booked, and booking times must not overlap, even partially.
        </p>
        <p>This test case focuses on implementing a batch booking insertion that rejects conflicting bookings.</p>
    </div>

    <div class="section">
        <h2>📘 Scenario</h2>
        <ul>
            <li><strong>Room model</strong></li>
            <li><strong>Booking model</strong> with the following fields:
                <ul>
                    <li><code>room_id</code></li>
                    <li><code>user_id</code></li>
                    <li><code>start_time</code> (datetime)</li>
                    <li><code>end_time</code> (datetime)</li>
                </ul>
            </li>
        </ul>
        <div class="section">
            <h2>📂 Where to Find the Code</h2>
            <ul>
            <li>
                <strong>Service implementation:</strong>
                <code>app/Services/BookingService.php</code>
            </li>
            <li>
                <strong>Test case:</strong>
                <code>tests/Feature/BookingServiceTest.php</code>
            </li>
            </ul>
            <p>
            Please refer to these files for the main logic and automated tests.
            </p>
        </div>
    </div>

    <div class="section">
        <h2>✅ Requirements</h2>
        <ul>
            <li>Implement a method to batch-insert bookings for a given room <strong>only if all bookings are valid</strong>.</li>
            <li>A booking is valid only if it <strong>does not overlap</strong> with any existing bookings for that room.</li>
            <li>If any booking conflicts, <strong>all inserts must be rolled back</strong>.</li>
            <li>Return any conflicting booking(s) info if conflicts exist.</li>
        </ul>
    </div>

    <div class="section">
        <h2>💡 Hints</h2>
        <p>Use database transactions for atomic inserts.</p>
        <p>Return a response like:</p>
        <pre><code>[
    'success' =&gt; (bool),
    'conflicts' =&gt; (array)
]</code></pre>
    </div>

    <div class="section">
        <h2>🕒 Time estimate</h2>
        <p>This test should take about <strong>1–2 hours</strong> to complete.</p>
    </div>

    <div class="section">
        <h2>❓ Questions?</h2>
        <p>Feel free to reach out if you have questions or clarifications.</p>
    </div>
</body>

</html>