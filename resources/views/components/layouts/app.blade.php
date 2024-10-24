<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <livewire:header />
    {{ $slot }}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Toggle navbar collapse
            const collapseButton = document.querySelector("[data-twe-collapse-init]");
            const collapseContent = document.querySelector("[data-twe-collapse-item]");

            collapseButton.addEventListener("click", function() {
                if (collapseContent.classList.contains("hidden")) {
                    collapseContent.classList.remove("hidden");
                    collapseContent.classList.add("block");
                } else {
                    collapseContent.classList.remove("block");
                    collapseContent.classList.add("hidden");
                }
            });
        });
    </script>

</body>

</html>
