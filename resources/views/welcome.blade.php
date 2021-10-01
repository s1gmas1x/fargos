<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fargo's Pizza</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-yellow-50 min-h-screen montserrat">
    
    <header id="home" class="flex mx-auto border-b  border-gray-900 bg-opacity-90 bg-red-900">
        <div class="sm:ml-4 md:mx-auto rye text-3xl md:text-4xl p-4 flex flex-col  text-yellow-200 pt-2 text-center filter drop-shadow-lg uppercase">
            <h1 class="">Fargo's</h1>
            <h1>Pizza</h1>
            <h1>CO.</h1>
        </div>

        <div class="inline md:hidden mr-6 mt-8 right-0 fixed bg-red-900 bg-opacity-40 border border-gray-900 rounded-lg backdrop-filter backdrop-blur-sm z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-200 " fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
    </header>

<div class="sticky top-0 text-center z-10">
    <nav
        class="hidden md:inline-block mx-auto mt-2 py-1 text-sm bg-red-900 bg-opacity-90 border-b-2 border-t-2 border-l border-r rounded-sm border-gray-900 text-yellow-200 backdrop-filter backdrop-blur-sm">
        
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#home">
            <div class="px-4 op">
                <h3 class="">Home</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#menu">
            <div class="px-4">
                <h3 class="">Menu</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#reservations">
            <div class="px-4">
                <h3 class="">Reservations</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#history">
            <div class="px-4">
                <h3 class="">History</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 border-r border-gray-900 inline-block" href="#gallery">
            <div class="px-4">
                <h3 class="">Gallery</h3>
            </div>
        </a>
        <a class="hover:bg-red-700 inline-block" href="#contact">
            <div class="px-4">
                <h3 class="">Contact</h3>
            </div>
        </a></nav>
</div>

 <img class="w-full h-full object-cover absolute top-0 -z-10 filter sepia blur-sm brightness-200 opacity-20" src="images/fargos.png">
    <main class="flex-grow">
        <section class="" >
           
            <div class="mt-56">
                <div class="text-center filter drop-shadow-lg font-semibold">
                    <h1 class="text-7xl text-center norican inline font-bold">Fargo's is back!</h1>
                    <h4 class="mt-4 text-center ">- Thanks to our wonderful customers!!</h4>
                </div>
            </div>
            <div class="">
                <div>

                    <h4 class="mt-96 text-center filter drop-shadow-lg font-semibold">Handmade pizza, pasta and salad at this Victorian style restaurant.
                        Beer, wine and soft drinks.</h4>
                </div>
            </div>
        </section>
        <div class="">
            <div class="bg-yellow-50">
                <h1 class="text-2xl text-center mt-56 font-bold">A Destination</h1>
                <h4 class="mt-1 mx-12 md:mx-48 text-center">The difference between Fargo's Pizza Co. and those other
                    guys is practically everything! From our glittering Victorian Architecture to our genuine player
                    piano, we are likely the most unique family dining establishment you have ever seen! But looks
                    aren't everything --- so we offer a choice of twenty-five great pizzas, our special pastas,
                    sandwiches and even a salad bar . . . so YOU can make the salad YOU have been waiting for!
                    Compliment your dinner choice with a beverage from our fountain. Then top it off with one of our
                    dessert favorites! The atmosphere is casual, so come as you are, and bring the whole family! We have
                    a Game Room and specialties for Kids.</h4>
            </div>
        </div>


        <section class=" font-semibold" id="menu">
            <h1 class="text-5xl text-center norican mt-48 pt-10">Menu</h1>

            <h2 class="text-3xl text-center norican mb-4 mt-8">Pizza</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>1. Plain Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>2. Italian Sausage</h3>
                </div>
                <div class="p-4">
                    <h3>3. Black Olive</h3>
                </div>
                <div class="p-4">
                    <h3>4. Lonesome Stranger</h3>
                </div>
                <div class="p-4">
                    <h3>5. Mushroom</h3>
                </div>
                <div class="p-4">
                    <h3>6. Chicken Alfredo</h3>
                </div>
                <div class="p-4">
                    <h3>7. Pepperoni</h3>
                </div>
                <div class="p-4">
                    <h3>8. Mushroom & Sausage</h3>
                </div>
                <div class="p-4">
                    <h3>9. Mushroom & Beef</h3>
                </div>
                <div class="p-4">
                    <h3>10. Pepperoni & Green Pepper</h3>
                </div>
                <div class="p-4">
                    <h3>11. Pepperoni & Sausage</h3>
                </div>
                <div class="p-4">
                    <h3>12. Pepperoni & Mushroom</h3>
                </div>
                <div class="p-4">
                    <h3>13. Big Red</h3>
                </div>
                <div class="p-4">
                    <h3>14. Golden Nugget</h3>
                </div>
                <div class="p-4">
                    <h3>15. Fargo's Favorite</h3>
                </div>
                <div class="p-4">
                    <h3>16. Sophia's Special</h3>
                </div>
                <div class="p-4">
                    <h3>17. Barbecue Chicken</h3>
                </div>
                <div class="p-4">
                    <h3>18. Mainliner</h3>
                </div>
                <div class="p-4">
                    <h3>19. Farmer John</h3>
                </div>
                <div class="p-4">
                    <h3>20. Combination</h3>
                </div>
                <div class="p-4">
                    <h3>21. Super Combination</h3>
                </div>
                <div class="p-4">
                    <h3>22. Vegetarian</h3>
                </div>
                <div class="p-4">
                    <h3>23. Country Strip Bacon</h3>
                </div>
                <div class="p-4">
                    <h3>24. El Fargorito</h3>
                </div>
                <div class="p-4">
                    <h3>25. Canadian Bacon</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Sandwiches</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>French Dip</h3>
                </div>
                <div class="p-4">
                    <h3>Barbecue Beef & Cheddar</h3>
                </div>
                <div class="p-4">
                    <h3>Bacon Lettuce & Tomato</h3>
                </div>
                <div class="p-4">
                    <h3>Ham & Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>Italian Sub</h3>
                </div>
                <div class="p-4">
                    <h3>Turkey</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Pasta</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Spaghetti with Marinara Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Spaghetti with Sophia’s Meat Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Fettuccine Alfredo</h3>
                </div>
                <div class="p-4">
                    <h3>Spaghetti Sampler</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Marinara Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Sophia’s Meat Sauce</h3>
                </div>
                <div class="p-4">
                    <h3>Baked Spaghetti with Alfredo Sauce</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Salad Bar</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Small Salad</h3>
                </div>
                <div class="p-4">
                    <h3>Large Salad</h3>
                </div>
                <div class="p-4">
                    <h3>To Go Salad</h3>
                </div>
            </div>

            <h2 class="text-3xl text-center norican my-4">Soups</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Chicken Noodle</h3>
                </div>
                <div class="p-4">
                    <h3>Vegetable Beef</h3>
                </div>
                <div class="p-4">
                    <h3>Potato & Bacon</h3>
                </div>
                <div class="p-4">
                    <h3>Cauliflower & Cheese</h3>
                </div>
                <div class="p-4">
                    <h3>Broccoli & Cheese</h3>
                </div>
            </div>
            <h2 class="text-3xl text-center norican my-4 font-semibold">Beverages</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Soft Drinks</h3>
                </div>
                <div class="p-4">
                    <h3>Coffee & Hot Tea</h3>
                </div>
                <div class="p-4">
                    <h3>Iced Tea</h3>
                </div>
                <div class="p-4">
                    <h3>Beer</h3>
                </div>
                <div class="p-4">
                    <h3>Wine</h3>
                </div>
            </div>
            <h2 class="text-3xl text-center norican my-4">Desserts</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 md:mx-24 text-center">
                <div class="p-4">
                    <h3>Ice Cream</h3>
                </div>
                <div class="p-4">
                    <h3>Sundaes</h3>
                </div>
                <div class="p-4">
                    <h3>Floats</h3>
                </div>
                <div class="p-4">
                    <h3>Cakes</h3>
                </div>
            </div>
        </section>
        <section id="reservations" class="font-semibold">
            <h1 class="text-5xl text-center norican mt-48 pt-10">Reservations</h1>
            <p class="text-center mt-12 mx-12">Fargo’s is now taking reservations by phone. Call 719-473-5540 to schedule your
                gathering today. Please call between 11am and 2pm to speak with reservations about our party spaces.</p>
        </section>
        <section id="history" class="font-semibold">
            <h1 class="text-5xl text-center norican mt-48 pt-10">History</h1>
            <div class="mx-4 md:mx-24 mt-12 text-sm font-normal">
                <img class="float-left h-96 m-2" src="images/334.jpg" alt="">
                <p class="mt-2">Two brothers from the “Show Me” State of Missouri have built a living monument to pizza,
                    a veritable showplace, at the foot of Pike’s Peak in the Rocky Mountains.</p>

                <p class="mt-2">Fargo’s Pizza Company brings to life an obscure piece of mountain lore featuring the
                    hard-drinking, straight-shooting, freethinking gambler named Fargo who prowled the mountain towns a
                    hundred years ago until he met the beautiful Sophia.</p>

                <p class="mt-2">Sophia, born to nobility, came to Colorado with her parents who fled Italy to escape
                    political persecution. She fell in love with Fargo and changed his ways. But, alas, they had no
                    means of support. But wait! Sophia had inherited the family’s old Italian recipes. They would open
                    an Italian restaurant and introduce pizza to the Colorado Territory.</p>

                <p class="mt-2">The reason this bit of history is obscure is because the founder of Fargo’s, Leon
                    Gardner, created this story. “Thus, the legend of Fargo and Sophia was born.</p>

                <p class="mt-2">This “legendary” pair have been reproduced in wax and sit at a balcony table overlooking
                    the main floor at Fargo’s, setting the style for all the rest of the authentic memorabilia that was
                    hunted down piece by piece to grace this Old West restaurant that basks in Old World opulence.</p>

                <p class="mt-2">Fargo’s Pizza Company opened in December 1973 with Leon as chairman of the board and his
                    brother, Landon, as president and chief of operations. It’s a sit-down family restaurant with a menu
                    of pizza, pasta, sandwiches, soups, deluxe salad bar and desserts, along with a bar serving beer,
                    wine, soft drinks and coffee.

                    <p class="mt-2">It’s one of the world’s largest family pizza restaurants, seating 500 guests, having
                        a total of 16,000 square feet, and parking for 175 cars.</p>

                    <p class="mt-2">Fargo’s is frequented by busloads of tourists as well as the many military bases,
                        universities, colleges, elementary, junior, high schools, not to mention the many residents of
                        Colorado Springs.</p>

                    <p class="mt-2">Authentic detailing of the Victorian period is carried out in the wooden structure.
                        One hundred and twenty original leaded and stained glass pieces of art as well as countless
                        pieces of authentic artifacts purchased in the Denver and Central City area have been
                        incorporated into the structure itself.</p>

                    <p class="mt-2"> Magic mirrors on the wall tell guests when their orders are ready. This was Leon’s
                        invention before the dawn of personal computers. With a little tinkering and a lot of ingenuity,
                        he came up with a mirror that unobtrusively displayed a number (no flashing neon) when an order
                        was ready. The mirrors are situated in eight locations and are visible from any table.</p>

                    <p class="mt-2">Leon operated Fargo’s on the values of overall image, cleanliness, speed and
                        friendliness of service, price, value accessibility, ease of parking and availability to
                        customers. His family and great management carry on this same tradition.</p>

                    <p class="mt-2">This has been instilled in the employees at Fargo’s. “You don’t give excuses to the
                        public,” said Leon. “You give service.” </p>
            </div>
        </section>
        <section id="gallery">
            <h1 class="text-5xl text-center norican mt-48 pt-10 font-semibold">Gallery</h1>
        </section>
        <section id="contact">
            <h1 class="text-5xl text-center norican mt-48 pt-10 font-semibold">Contact</h1>
        </section>

    </main>

    <footer class=" bg-gray-900 text-3xl text-yellow-200  inset-x-0 bottom-0 p-4 mt-8">
        <div class="flex xl:mx-72">
            <div class="ml-8 mr-auto block">
                <h4 class="text-2xl">Location</h4>
                <p class="text-xs mt-2">2910 E Platte</p>
                <p class="text-xs">Colorado Springs, Colorado 80909</p>
                <p class="text-xs">(719) 473-5540</p>
            </div>
            <div class="mr-8 ml-auto block">
                <h4 class="text-2xl">Hours</h4>
                <p class="text-xs mt-2">11am - 9pm</p>
            </div>
        </div>
    </footer>
</body>
