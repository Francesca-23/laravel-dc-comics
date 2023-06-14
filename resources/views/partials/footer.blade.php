<?php 

$firstLists = [
    [
        'title'=> 'DC COMICS',
        'elements'=> [
            [
                'nome'=> 'Characters',
                'link'=> '/Characters',
            ],
            [
                'nome'=> 'Comics',
                'link'=> '/Comics',
            ],
            [
                'nome'=> 'Movies',
                'link'=> '/Movies',
            ],
            [
                'nome'=> 'TV',
                'link'=> '/tv',
            ],
            [
                'nome'=> 'Games',
                'link'=> '/Games',
            ],
            [
                'nome'=> 'Videos',
                'link'=> '/Videos',
            ],
            [
                'nome'=> 'News',
                'link'=> '/News',
            ],
        ],
    ],
    [
        'title'=> 'SHOP',
        'elements'=> [
            [
                'nome'=> 'Shop DC',
                'link'=> '/Shop',
            ],
            [
                'nome'=> 'Shop DC collectibles',
                'link'=> '/collectibles',
            ], 
        ],
    ]

];

$secondLists = [
    [
        'title'=> 'DC',
        'elements'=> [
            [
                'nome'=> 'Terms of use',
                'link'=> '/Terms',
            ],
            [
                'nome'=> 'Privacy Policy (New)',
                'link'=> '/Privacy',
            ],
            [
                'nome'=> 'Ad Choices',
                'link'=> '/Ad',
            ],
            [
                'nome'=> 'Advertising',
                'link'=> '/Advertising',
            ],
            [
                'nome'=> 'Jobs',
                'link'=> '/Jobs',
            ],
            [
                'nome'=> 'Subscriptions',
                'link'=> '/Subscriptions',
            ],
            [
                'nome'=> 'Talent Workshops',
                'link'=> '/Talent',
            ],
            [
                'nome'=> 'CPSC certificates',
                'link'=> '/CPSC',
            ],
            [
                'nome'=> 'Ratings',
                'link'=> '/Ratings',
            ],
            [
                'nome'=> 'Shop Help',
                'link'=> '/Help',
            ],
            [
                'nome'=> 'Contact us',
                'link'=> '/Contact',
            ],
        ],
    ],
    [
        'title'=> 'SITES',
        'elements'=> [
            [
                'nome'=> 'DC',
                'link'=> '/DC',
            ],
            [
                'nome'=> 'MAD Magazine',
                'link'=> '/Magazine',
            ], 
            [
                'nome'=> 'DC Kids',
                'link'=> '/Kids',
            ], 
            [
                'nome'=> 'DC Universe',
                'link'=> '/Universe',
            ], 
            [
                'nome'=> 'DC Power Visa',
                'link'=> '/Visa',
            ], 
        ],
    ]

];

?>


<footer>

<div class="big-container">

        <div class="container">
    
            <div class="lists-1">
                @foreach($firstLists as $elem)
                <ul>
                    <h3>{{ $elem['title'] }}</h3>
                    @foreach($elem['elements'] as $elemento)
                        <li>
                            <a href="{{ $elemento['link'] }}">{{ $elemento['nome'] }} </a>
                        </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
    
            <div class="lists-2">
                @foreach($secondLists as $elem)
                <ul>
                    <h3>{{ $elem['title'] }}</h3>
                    @foreach($elem['elements'] as $elemento)
                        <li>
                            <a href="{{ $elemento['link'] }}">{{ $elemento['nome'] }} </a>
                        </li>
                    @endforeach
                </ul>
                @endforeach
            </div>

        </div>

    </div>

    <div class="container-footer">

        <div>
            <div class="sign-up">SIGN-UP NOW!</div>
        </div>

        <div class="social-media">
            <p><strong>FOLLOW US</strong></p>
            <div>             
                <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="icon">
            </div>
            <div>             
                <img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="icon">
            </div>
            <div>             
                <img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="icon">
            </div>
            <div>             
                <img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="icon">
            </div>
            <div>             
                <img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="icon">
            </div>
        </div>

    </div>

</footer>