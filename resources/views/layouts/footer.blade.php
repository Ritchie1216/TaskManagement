<style>
    /* Main footer styles */
.footer-main {
    background-color: #f8f9fa; /* Light gray background */
    padding: 20px 0; /* Padding for spacing */
    border-top: 1px solid #e7e7e7; /* Add a top border for a clean separation */
}

/* Copyright section styles */
.footer-copyright {
    background-color: #343a40; /* Dark background */
    color: #ffffff; /* White text */
    padding: 15px 0; /* More padding for breathing room */
    font-size: 0.9rem; /* Slightly smaller text */
    border-top: 1px solid #4e555b; /* A border to separate copyright section */
}

/* Footer link styles */
.footer-main a {
    color: #007bff; /* Bootstrap primary blue for links */
    text-decoration: none;
}

.footer-main a:hover {
    text-decoration: underline; /* Underline links on hover */
}

/* Responsive padding for smaller screens */
@media (max-width: 576px) {
    .footer-main {
        padding: 10px 0;
    }
}

</style>
<footer class="bg-light text-center text-lg-start footer-main">
    <div class="container p-4">
        <div class="row">
            <!-- You can add content like links or additional info here in the future -->
        </div>
    </div>

    <!-- Copyright section -->
    <div class="text-center p-3 footer-copyright">
        © 2024 Task Manager. All rights reserved.
    </div>
</footer>
