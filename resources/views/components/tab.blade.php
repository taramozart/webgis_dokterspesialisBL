<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Button Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tab-active {
            background-color: #667EEA;
            color: #FFFFFF;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="flex gap-3 text-white">
            <button id="tab1" class="focus:outline-none focus:bg-indigo-700 text-sm leading-5 font-medium py-2 px-4 border-b-2 border-transparent bg-[#84A584]" onclick="showTab('tab1')">Tab 1</button>
            <button id="tab2" class="focus:outline-none focus:bg-indigo-700 text-sm leading-5 font-medium py-2 px-4 border-b-2 border-transparent bg-red-500" onclick="showTab('tab2')">Tab 2</button>
            <button id="tab3" class="focus:outline-none focus:bg-indigo-700 text-sm leading-5 font-medium py-2 px-4 border-b-2 border-transparent bg-red-500" onclick="showTab('tab3')">Tab 3</button>
        </div>

        <div class="mt-8">
            <div id="tabContent">
                <div id="content1">
                    Content for Tab 1
                </div>
                <div id="content2" class="hidden">
                    Content for Tab 2
                </div>
                <div id="content3" class="hidden">
                    Content for Tab 3
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if(index !== 0) {
                    el.classList.add('hidden');
                }
            });
        });

        function showTab(tab) {
            // Hide all tab contents
            document.querySelectorAll('[id^="content"]').forEach((el) => {
                el.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('[id^="tab"]').forEach((btn) => {
                btn.classList.remove('tab-active');
            });

            // Show the selected tab content
            document.getElementById('content' + tab.slice(-1)).classList.remove('hidden');
            // Add active class to the clicked button
            document.getElementById(tab).classList.add('tab-active');
        }
    </script>
</body>
</html>
