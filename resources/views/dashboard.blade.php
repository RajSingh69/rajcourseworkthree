<x-app-layout>

    <style>
        body {
            font-family: Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
            font-size: 24px;
        }
        p {
            font-size: 18px;
            font-family: Garamond,
        }
        a {
            text-align: center;
            font-family: 'Comic Sans MS', cursive;
            font-style: italic;
            font-weight: bold;
            color: yellow;
            font-size: 20px;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Supa Cool Dashboard') }}
        </h2>
    </x-slot>

    



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! Saluatations and welcome to Raj's Blog Site! ") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">










                <div class="navbar">
                <nav>
                <a href="http://localhost/posts" class="active">
                    ***View All Posts***
                </a>
                
                <a href="http://localhost/posts/create">
                    --- Create a Post ---
                </a>

                
                </nav>
            </div>
            <div class="space">  </div>

            <div class="pages">
            <section class="hero">
                    <h1>What is this? How do I use it? </h1>
                    <br>
                    <p class= "intro">Hello, I'm Rajan , a versatile developer. Here, I would like to present my 3rd year web app dev blog. <br> 
                        In this, the user will be able to: <br> <br>

                        - View all posts<br>
                        - View all related comments<br>
                        - Add pictures<br>
                        - Delete posts<br>
                        - Enjoy the security of privacy from basic authentication<br> <br>

                        - And have a lovely time on this interactive colourful but minimalistic blog system.<br> <br> 

                        *Please click on 'View All Posts' or 'Create a Post' to continue! :) * <br>
                    </p>
                </section>

            </div>






                    
                

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
