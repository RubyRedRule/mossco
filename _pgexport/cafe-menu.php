<?php get_header(); ?>

<header class="h-24 sm:h-28 sticky top-0 z-50">
    <div class="bg-Mossco-grey-background bg-opacity-75 duration-500 false-header h-24 origin-top sticky top-0 transform transition z-50 sm:h-28">
        <div data-empty-placeholder></div>
    </div>
    <div class="-mt-28 container duration-500 h-24 lg:top-2 md:top-0 mossco-header mx-auto px-0 sticky top-1 transform transition z-50"> 
        <nav class="flex flex-wrap items-center justify-between p-4 sm:py-5 md:px-4 lg:py-0"> <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-white-teal.svg" class="duration-500 h-9 ml-4 mossco-logo mr-auto scale-125 transform transition lg:h-9"></a>
            <button class="hamburger-menu hover:text-white ml-auto py-2 rounded text-current md:mr-5 lg:hidden" data-name="nav-toggler" data-pg-ia='{"l":[{"name":"NabMenuToggler","trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-400}}]}]},"pdef":"true","trev":"true"}]}' data-pg-ia-apply="$nav [data-name=nav-toggler]">
                <span class="bg-primary-NORMAL block h-1 hover:bg-primary-LIGHT my-2 rounded ml-auto w-10 sm:w-12"></span>
                <span class="bg-white block h-1 ml-auto my-2.5 rounded w-6 sm:w-8"></span>
                <span class="bg-primary-NORMAL block h-1 hover: my-2.5 rounded ml-auto w-10 sm:w-12"></span>
            </button>
            <a href="#" class="bg-primary-NORMAL font-light hover:bg-primary-700 inline-block nav-btn-tablet-mobile px-5 py-2 rounded text-current text-primary-500 uppercase sm:hidden md:inline-block lg:hidden"><?php _e( 'Book a Table', 'mossco_hc' ); ?></a>
            <div class="bg-Mossco-grey-dark bg-opacity-95 hidden mx-auto pl-4 py-8 rounded space-y-2 text-center w-full md:max-w-md md:mr-0 lg:bg-opacity-0 lg:flex lg:max-w-full lg:space-x-4 lg:space-y-0 lg:text-left lg:w-auto" data-name="nav-menu"> 
                <div class="flex flex-col font-normal font-sans text-gray-50 lg:flex-row lg:text-sm"> <a href="cafe-menu.html" class="font-light hover:text-primary-LIGHT px-0 py-2 uppercase lg:px-4"><?php _e( 'CAFÉ Menu', 'mossco_hc' ); ?></a> <a href="day-menu.html" class="font-light hover:text-primary-LIGHT px-0 py-2 uppercase lg:px-4"><?php _e( 'Day Menu', 'mossco_hc' ); ?></a>
                    <a href="evening-menu.html" class="font-light hover:text-primary-LIGHT px-0 py-2 uppercase lg:px-4"><?php _e( 'Evening Menu', 'mossco_hc' ); ?></a><a href="#details-map" class="font-light hover:text-primary-LIGHT px-0 py-2 uppercase lg:px-4" target="#location-map"><?php _e( 'Location', 'mossco_hc' ); ?></a>
                </div>                         <a href="#" class="active:bg-primary-DARK bg-primary-NORMAL duration-300 ease-out font-normal font-sans hover:bg-primary-LIGHT hover:ring hover:ring-primary-DARK inline-block px-5 py-2 rounded text-white transition uppercase"><?php _e( 'Book a Table', 'mossco_hc' ); ?></a> 
            </div>                     
        </nav>                 
    </div>
</header>
<main>
    <section id="cafe-banner" class="border-b-4 border-primary-NORMAL border-solid cafe-banner flex items-center justify-center">
        <div class="flex justify-center text-center text-gray-200 w-full">
            <h1 class="flex font-medium font-sans lowercase text-5xl text-center sm:text-6xl md:text-6xl lg:text-6xl xl:text-7xl 2xl:text-7xl"><?php _e( 'Café menu', 'mossco_hc' ); ?></h1>
        </div>
    </section>
    <section id="mossco-menu-col" class="container flex flex-wrap mx-auto px-4 py-14">
        <div class="gap-2 grid grid-cols-1 md:gap-10 md:grid-cols-2">
            <div class="col-span-1 menu">
                <h3 class="font-sans text-3xl text-primary-NORMAL uppercase"><?php _e( 'Café', 'mossco_hc' ); ?></h3>
                <h4 class="border-b-2 border-primary-NORMAL border-solid font-sans py-2 text-Mossco-grey-semi text-xl uppercase"><?php _e( 'Sandwiches', 'mossco_hc' ); ?></h4>
                <p class="caption pb-8 pt-6 text-mossco_faint_teal-faintteal"><?php _e( 'Pre-made, cut and deli wrapped, available hot or cold.', 'mossco_hc' ); ?>  <?php _e( 'Served with daily soup, available from 12noon.', 'mossco_hc' ); ?> <br><?php _e( 'Take out', 'mossco_hc' ); ?>  <?php _e( 'or eat in.', 'mossco_hc' ); ?></p>
                <div class="menu_item">
                    <dt><?php _e( 'Chargrilled chicken', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Slow roast tomatoes, rocket &amp; basil aioli on ciabatta', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(2,10,11,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Buffalo mozzarella', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Beef tomato, red onion, with basil pesto olive oil &amp; black pepper on ciabatta', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Honey glazed ham', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Smoked Hegarty’s cheddar, house slaw, rocket, onion, mustard mayo &amp; Ballymaloe relish.', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Reuben', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Pastrami, swiss cheese, sauerkraut, pickles &amp; Russian dressing', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(2,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Turkey Caesar club', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Sliced turkey, crispy bacon, sliced cheddar, tomato, egg &amp; baby gem with Caesar mayo', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(2,5,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Roast chicken', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Tandoori mayo, pickled red onions, shaved carrot, coriander &amp; baby gem on ciabatta.', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Warm, crispy bacon', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Brie, and red onion jam ciabatta (HOT)', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Buffalo mozzarella', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Roasted red peppers, artichokes, rocket &amp; basil tomato pesto aioli on ciabatta. (HOT)', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Ploughman’s honey glazed ham', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Hegarty’s cheddar, pickled red onion, slice apple, Branston pickle and watercress baguette.', 'mossco_hc' ); ?> 
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Classic croque monsieur', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( '(HOT)', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Poached chicken', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'Avocado, tomato, red onion &amp; rocket, citrus aioli on wholegrain', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
                <div class="menu_item">
                    <dt><?php _e( 'Tuna &amp; avocado', 'mossco_hc' ); ?></dt>
                    <dd>
                        <?php _e( 'With pickled veg &amp; coriander wrap. Warm beetroot, spinach &amp; goats cheese ciabatta (HOT)', 'mossco_hc' ); ?>
                    </dd>
                    <p class="allergen_info"><?php _e( '(1,2,9,10,4)', 'mossco_hc' ); ?></p>
                    <p class="price"><?php _e( '€5.50', 'mossco_hc' ); ?></p>
                </div>
            </div>
            <div class="col-span-1 md:mt-9 lg:mt-9">
                <h4 class="border-b-2 border-primary-NORMAL border-solid font-sans py-2 text-Mossco-grey-semi text-xl uppercase md:mt-0"><?php _e( 'Sweet pastries and cakes', 'mossco_hc' ); ?></h4>
                <p class="caption pb-12 pt-6"><?php _e( 'Selection of the items noted below available daily from', 'mossco_hc' ); ?>  <?php _e( '10am serviced from the bar.', 'mossco_hc' ); ?> <br><?php _e( 'Take out or eat in.', 'mossco_hc' ); ?></p>
                <div class="border-r-4 border-t-4 dark border-primary-NORMAL rounded-xl">
                    <h4 class="border-b-2 border-primary-NORMAL border-solid font-sans my-6 pb-3 text-Mossco-grey-semi text-xl uppercase"><?php _e( 'Morning', 'mossco_hc' ); ?></h4>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Selection of Danish pastries, Croissants and Pain Chocolate', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(1)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Fresh Scones', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(10,4)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Portuguese custard tarts', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(4)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                </div>
                <div class="border-r-4 border-t-4 dark rounded-xl border-primary-NORMAL second mt-10">
                    <h4 class="border-b-2 border-primary-NORMAL border-solid font-sans my-6 pb-3 text-Mossco-grey-semi text-xl uppercase"><?php _e( 'Afternoon', 'mossco_hc' ); ?></h4>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Carrot cake', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(2,6)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Madeira sponge', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(11,14)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Brownies &amp; blondies', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(2)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                    <div class="menu_item">
                        <dd>
                            <?php _e( 'Orange polenta cake', 'mossco_hc' ); ?>
                        </dd>
                        <p class="allergen_info"><?php _e( '(14)', 'mossco_hc' ); ?></p>
                        <p class="price"><?php _e( '€ 3.50', 'mossco_hc' ); ?></p>
                    </div>
                </div>
                <div data-empty-placeholder class="cafe-menu-bg h-0"></div>
            </div>
        </div>
    </section>
    <section id="download-cafe-menu" class="bottom-0 flex items-center justify-center ml-auto px-4 rounded-md sticky xl:pr-2 2xl:pr-0">
        <div class="container flex grid grid-cols-1 items-end justify-end px-0 sm:grid-cols-1 md:grid-cols-2 md:px-4 lg:grid-cols-3 lg:justify-center lg:px-4 xl:justify-center xl:px-5 2xl:justify-center 2xl:px-6">
            <div class="col-span-2 hidden sm:col-span-1 sm:hidden md:col-span-1 md:flex lg:col-span-2" data-empty-placeholder></div>
            <div class="bg-Mossco-grey-dark bg-opacity-25 col-span-1 flex h-full items-center justify-center my-auto py-6 rounded-sm md:py-8">
                <a class="active:bg-primary-DARK active:border-primary-DARK bg-opacity-50 bg-primary-NORMAL border-2 border-primary-NORMAL border-solid bottom-0 cursor-pointer drop-shadow duration-300 ease-out flex font-sans hover:bg-primary-LIGHT hover:border-primary-LIGHT hover:drop-shadow-xl hover:ring hover:ring-primary-DARK hover:rounded-sm hover:text-white items-center justify-center px-8 py-2 rounded uppercase w-60 lg:font-medium 2xl:bg-primary-NORMAL"> <?php _e( 'Download Menu', 'mossco_hc' ); ?> <svg class="fill-current h-6 ml-2 my-auto w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
                        <path d="M369.9 97.98L286.02 14.1c-9-9-21.2-14.1-33.89-14.1H47.99C21.5.1 0 21.6 0 48.09v415.92C0 490.5 21.5 512 47.99 512h288.02c26.49 0 47.99-21.5 47.99-47.99V131.97c0-12.69-5.1-24.99-14.1-33.99zM256.03 32.59c2.8.7 5.3 2.1 7.4 4.2l83.88 83.88c2.1 2.1 3.5 4.6 4.2 7.4h-95.48V32.59zm95.98 431.42c0 8.8-7.2 16-16 16H47.99c-8.8 0-16-7.2-16-16V48.09c0-8.8 7.2-16.09 16-16.09h176.04v104.07c0 13.3 10.7 23.93 24 23.93h103.98v304.01zM208 216c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v88.02h-52.66c-11 0-20.59 6.41-25 16.72-4.5 10.52-2.38 22.62 5.44 30.81l68.12 71.78c5.34 5.59 12.47 8.69 20.09 8.69s14.75-3.09 20.09-8.7l68.12-71.75c7.81-8.2 9.94-20.31 5.44-30.83-4.41-10.31-14-16.72-25-16.72H208V216zm42.84 120.02l-58.84 62-58.84-62h117.68z"/>
                    </svg> </a>
            </div>
        </div>
        <div data-empty-placeholder></div>
    </section>
    <section id="details-map" class="border-Mossco-grey-dark border-b-4 border-t-4">
        <div>
            <div class="gap-4 grid grid-cols-3 grid-rows-1 md:gap-2 md:grid-cols-2 lg:gap-y-0 lg:grid-cols-4">
                <div class="col-span-1 left-grid-graphic maps-bg my-4 row-span-1 md:col-span-1 md:my-6" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/graphics/contact-art-graphic.svg'); background-repeat: no-repeat; background-position: center center; background-size: contain;"></div>
                <div class="col-span-2 my-auto pb-7 pt-10 row-span-1 md:col-span-1 md:pb-6 md:pt-8">
                    <div class="grid grid-cols-8 grid-rows-1 mx-auto md:py-6">
                        <div class="col-span-1 grid place-items-center">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 27.95" class="fill-primary-NORMAL w-6">
                                <defs>
                                    <style>.cls-2 { isolation: isolate; }</style>
                                </defs>
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <g class="cls-2">
                                        <g class="cls-2">
                                            <path class="cls-1" d="m20.02,14.57c-.66,1.59-1.53,3.22-2.62,4.89-1.09,1.68-2.07,3.12-2.93,4.32-.86,1.2-1.74,2.37-2.65,3.5-.36.44-.8.66-1.31.66s-.95-.22-1.31-.66c-1.28-1.57-2.52-3.2-3.72-4.89s-2.42-3.74-3.64-6.12c-1.22-2.39-1.83-4.31-1.83-5.77,0-2.92,1.02-5.4,3.06-7.44C5.1,1.02,7.58,0,10.5,0s5.4,1.02,7.44,3.06c2.04,2.04,3.06,4.52,3.06,7.44,0,1.13-.33,2.49-.98,4.07ZM1.75,10.5c0,.88.31,2.02.93,3.45.55,1.35,1.33,2.86,2.35,4.54,1.46,2.33,3.28,4.89,5.47,7.66,2.19-2.77,4.01-5.32,5.47-7.66,1.02-1.68,1.8-3.19,2.35-4.54.62-1.42.93-2.57.93-3.45,0-2.41-.86-4.47-2.57-6.18-1.71-1.71-3.77-2.57-6.18-2.57s-4.47.86-6.18,2.57c-1.71,1.71-2.57,3.77-2.57,6.18Zm8.75,4.38c-1.2,0-2.23-.43-3.09-1.29-.86-.86-1.29-1.89-1.29-3.09s.43-2.23,1.29-3.09c.86-.86,1.89-1.29,3.09-1.29s2.23.43,3.09,1.29c.86.86,1.29,1.89,1.29,3.09s-.43,2.23-1.29,3.09-1.89,1.29-3.09,1.29Zm2.62-4.38c0-.73-.26-1.35-.77-1.86-.51-.51-1.13-.77-1.86-.77s-1.35.26-1.86.77c-.51.51-.77,1.13-.77,1.86s.25,1.35.77,1.86c.51.51,1.13.77,1.86.77s1.35-.25,1.86-.77.77-1.13.77-1.86Z"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="col-span-7">
                            <h4 class="pl-2 text-white text-xl uppercase"><span class="lg:text-gray-200"><?php _e( 'Moss', 'mossco_hc' ); ?></span><span class="text-primary-NORMAL"><?php _e( 'co', 'mossco_hc' ); ?></span></h4>
                        </div>
                        <div class="col-span-1 grid place-items-center"></div>
                        <div class="col-span-7">
                            <h4 class="pl-2 pt-0 text-white text-xl lg:text-gray-200"><?php _e( 'Travelodge Plus', 'mossco_hc' ); ?> <p class="font-serif text-base"><?php _e( '44 Townsend Street', 'mossco_hc' ); ?></p> <p class="font-serif text-base"><?php _e( 'Dublin Docklands', 'mossco_hc' ); ?></p> <p class="font-serif text-base"><?php _e( 'Dublin', 'mossco_hc' ); ?></p> <p class="font-serif text-base"><?php _e( 'D02 DY01', 'mossco_hc' ); ?></p></h4>
                        </div>
                        <div class="col-span-1 grid place-items-center pt-6">
                            <svg id="Layer_2" xml version="1.0" encoding="UTF-8" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.24 448" class="fill-primary-NORMAL w-6" preserveAspectRatio>
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path d="m256,208c-44.13,0-80,35.88-80,80s35.88,80,80,80,80-35.88,80-80-35.9-80-80-80Zm0,128c-26.5,0-48-21.5-48-48s21.5-48,48-48,48,21.5,48,48-21.5,48-48,48Zm244.2-249.7C431.7,31.25,344.8,0,256,0S80.25,31.25,11.75,86.3C4.25,92.43-.13,101.68,0,111.3v64.7c0,8.84,7.16,16,16,16h64c8.84,0,16-7.2,16-16s-7.16-16-16-16h-48l-.25-48.9c63.63-50.97,142.75-78.85,224.25-79.1,81.5.12,160.5,28.12,223.1,79.25v48.75h-47.1c-8.8,0-16,7.2-16,16s7.2,16,16,16h63.1c8.84,0,16-7.16,16-16v-64.7c1-9.7-3.4-18.9-10.9-25Zm-129.8,73.9c-10.53-18.42-29.57-29.9-50.5-31.57,0-.23.1-.43.1-.63v-32c0-8.84-7.16-16-16-16s-16,7.16-16,16v32h-64v-32c0-8.84-7.16-16-16-16s-16,7.16-16,16v32c0,.24.13.44.14.67-20.95,1.69-39.98,13.14-50.51,31.58l-101.2,177.1c-5.53,9.67-8.43,20.62-8.43,31.76v14.89c0,35.2,28.8,64,64,64h319.1c35.2,0,64-28.8,64-64v-14.94c0-11.14-2.91-22.08-8.44-31.76l-100.26-177.1Zm76.7,223.8c0,17.67-14.33,32-32,32H96c-17.67,0-32-14.33-32-32v-15c0-5.57,1.45-11.04,4.22-15.88l101.2-176.1c5.68-10.82,16.28-17.02,27.78-17.02h117.7c11.46,0,22.04,6.14,27.73,16.09l101.2,177c2.76,4.83,4.22,10.31,4.22,15.88v15.03h-.95Z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-span-7 pt-6">
                            <h4 class="pl-1.5 font-serif text-base uppercase text-white"><a href="tel:+35315259500" class="lg:text-gray-200"><?php _e( '(01) 525 9500', 'mossco_hc' ); ?></a></h4>
                        </div>
                        <div class="col-span-1 grid place-items-center pt-6">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384" preserveAspectRatio class="fill-primary-NORMAL text-base w-6">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path d="m0,64C0,28.65,28.65,0,64,0h384c35.3,0,64,28.65,64,64v256c0,35.3-28.7,64-64,64H64c-35.35,0-64-28.7-64-64V64Zm32,0v39.9l195.6,143.4c16.9,12.4,39.9,12.4,56.8,0l195.6-143.4v-39.9c0-17.7-14.3-32-32-32H63.1c-16.77,0-32,14.3-32,32h.9Zm0,79.6v176.4c0,17.7,14.33,32,32,32h384c17.7,0,32-14.3,32-32v-176.4l-176.7,129.5c-28.2,20.7-66.4,20.7-94.6,0L32,143.6Z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-span-7 pt-6">
                            <h4 class="pl-2 font-serif text-base lowercase text-white"><a href="mailto:info@travelodgeplus.ie" class="lg:text-gray-200"><?php _e( 'info@travelodgeplus.ie', 'mossco_hc' ); ?></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 row-span-1 w-auto md:col-span-2">
                    <div id="map-box" class="h-96 map-box py-56 w-auto">
                        <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
                        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="bg-primary-NORMAL font-light py-12 text-gray-500"> 
    <div class="container mx-auto px-4"> 
        <div class="footer-bg gap-2 grid grid-cols-1 pb-6 md:grid-cols-2">
            <div class="col-span-1 grid place-items-center md:place-items-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Mosso%20black%20white.svg" class="pb-8 w-60 md:pb-0 md:w-56">
                <ul class="flex justify-between mt-auto text-Mossco-grey-background"> 
                    <li class="border-primary_bg-NORMAL border-r-2 border-solid mr-4 pr-4"> <a href="#" class="hover:text-primary-LIGHT"><?php _e( 'About', 'mossco_hc' ); ?></a> 
                    </li>
                    <li class="border-primary_bg-NORMAL border-r-2 border-solid mr-4 pr-4"> <a href="#" class="hover:text-primary-LIGHT"><?php _e( 'Sustainablility', 'mossco_hc' ); ?></a> 
                    </li>
                    <li class="border-primary_bg-NORMAL border-r-2 border-solid mr-4 pr-4"> <a href="#" class="hover:text-primary-LIGHT"><?php _e( 'Careers', 'mossco_hc' ); ?></a> 
                    </li>
                    <li> <a href="#" class="hover:text-primary-LIGHT"><?php _e( 'Contact', 'mossco_hc' ); ?></a> 
                    </li>                             
                </ul>
            </div>
            <div class="col-span-1 grid place-items-center md:place-items-end">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Travelodge%20black%20white.svg" class="pb-4 pt-8 w-64 md:pb-2 md:pt-0 md:w-56">
                <div class="flex-wrap inline-flex justify-center justify-end justify-self-auto pb-4 pt-6 space-x-12 text-Mossco-grey-background w-full md:justify-end md:pb-0 md:space-x-6" style="grid-area:2 / 1 / 3 / 2;"> <a href="#" aria-label="facebook" class="hover:text-gray-200"> <svg viewBox="0 0 175.37 175.37" fill="currentColor" class="h-10 w-10"> 
                            <path d="m156.58,0H18.79C8.41,0,0,8.41,0,18.79v137.79c0,10.38,8.41,18.79,18.79,18.79h53.73v-59.62h-24.66v-28.06h24.66v-21.39c0-24.33,14.48-37.77,36.67-37.77,10.62,0,21.73,1.89,21.73,1.89v23.88h-12.24c-12.06,0-15.82,7.48-15.82,15.16v18.22h26.92l-4.31,28.06h-22.62v59.62h53.73c10.38,0,18.79-8.41,18.79-18.79V18.79c0-10.38-8.41-18.79-18.79-18.79Z"/>
                        </svg></a> <a href="#" aria-label="twitter" class="hover:text-gray-200"> <svg viewBox="0 0 175.2 175.2" fill="currentColor" class="h-10 w-10"> 
                            <path d="m156.43,0H18.77C8.41,0,0,8.41,0,18.77v137.65c0,10.36,8.41,18.77,18.77,18.77h137.65c10.36,0,18.77-8.41,18.77-18.77V18.77c0-10.36-8.41-18.77-18.77-18.77Zm-19.12,62.1c.08,1.09.08,2.23.08,3.32,0,33.91-25.81,72.97-72.97,72.97-14.55,0-28.04-4.22-39.38-11.5,2.07.23,4.07.31,6.18.31,12.01,0,23.03-4.07,31.83-10.95-11.26-.23-20.73-7.63-23.97-17.79,3.95.59,7.51.59,11.58-.47-11.73-2.39-20.53-12.71-20.53-25.18v-.31c3.4,1.92,7.39,3.09,11.58,3.25-7.15-4.75-11.43-12.77-11.42-21.35,0-4.77,1.25-9.15,3.48-12.94,12.63,15.56,31.6,25.73,52.87,26.83-3.64-17.4,9.39-31.52,25.03-31.52,7.39,0,14.04,3.09,18.73,8.1,5.79-1.09,11.34-3.25,16.27-6.18-1.92,5.94-5.94,10.95-11.26,14.12,5.16-.55,10.17-1.99,14.78-3.99-3.48,5.12-7.86,9.66-12.87,13.3Z"/>
                        </svg></a> <a href="#" aria-label="instagram" class="hover:text-gray-200"> <svg viewBox="0 0 175.2 175.2" fill="currentColor" class="h-10 w-10"> 
                            <path d="m87.6,66.74c-11.52,0-20.86,9.35-20.85,20.87,0,11.52,9.35,20.86,20.87,20.85,11.52,0,20.85-9.34,20.85-20.86,0-11.52-9.35-20.86-20.87-20.86Zm48.77-16.03c-2.15-5.44-6.45-9.75-11.89-11.89-8.21-3.24-27.77-2.51-36.88-2.51s-28.65-.75-36.88,2.51c-5.44,2.15-9.75,6.45-11.89,11.89-3.24,8.21-2.51,27.79-2.51,36.89s-.72,28.65,2.53,36.89c2.15,5.44,6.45,9.75,11.89,11.89,8.21,3.24,27.77,2.51,36.88,2.51s28.64.75,36.88-2.51c5.44-2.15,9.75-6.45,11.89-11.89,3.27-8.21,2.51-27.79,2.51-36.89s.75-28.65-2.51-36.89h-.02Zm-48.77,68.96c-17.71,0-32.07-14.36-32.07-32.07s14.36-32.07,32.07-32.07,32.07,14.36,32.07,32.07c.02,17.69-14.3,32.05-31.99,32.07-.03,0-.05,0-.08,0Zm33.39-57.99c-4.13,0-7.49-3.35-7.49-7.48s3.35-7.49,7.48-7.49c4.13,0,7.49,3.35,7.49,7.48h0c.02,4.13-3.31,7.49-7.44,7.5,0,0-.02,0-.03,0l-.02-.02ZM156.43,0H18.77C8.4,0,0,8.4,0,18.77v137.65c0,10.37,8.4,18.77,18.77,18.77h137.65c10.37,0,18.77-8.4,18.77-18.77V18.77c0-10.37-8.4-18.77-18.77-18.77Zm-6.7,113.41c-.5,10.02-2.79,18.9-10.11,26.2s-16.19,9.63-26.2,10.11c-10.33.58-41.29.58-51.62,0-10.02-.5-18.87-2.8-26.2-10.11s-9.63-16.2-10.11-26.2c-.58-10.33-.58-41.3,0-51.62.5-10.02,2.76-18.9,10.11-26.2s16.22-9.6,26.2-10.08c10.33-.58,41.29-.58,51.62,0,10.02.5,18.9,2.8,26.2,10.11,7.3,7.31,9.63,16.2,10.11,26.22.58,10.29.58,41.23,0,51.57Z"/>
                        </svg></a>
                    <a href="#" aria-label="linkedin" class="hover:text-gray-200"> <svg viewBox="0 0 173.61 173.61" fill="currentColor" class="h-10 w-10"> 
                            <path d="m72.39,65.92l36.89,20.97-36.89,20.97v-41.93Zm101.22-47.32v136.41c0,10.27-8.33,18.6-18.6,18.6H18.6c-10.27,0-18.6-8.33-18.6-18.6V18.6C0,8.33,8.33,0,18.6,0h136.41c10.27,0,18.6,8.33,18.6,18.6Zm-16.28,68.32s0-23.1-2.95-34.18c-1.63-6.12-6.39-10.93-12.48-12.56-10.97-2.98-55.11-2.98-55.11-2.98,0,0-44.14,0-55.11,2.98-6.08,1.63-10.85,6.43-12.48,12.56-2.95,11.04-2.95,34.18-2.95,34.18,0,0,0,23.1,2.95,34.18,1.63,6.12,6.39,10.73,12.48,12.36,10.97,2.95,55.11,2.95,55.11,2.95,0,0,44.14,0,55.11-2.98,6.08-1.63,10.85-6.24,12.48-12.36,2.95-11.04,2.95-34.14,2.95-34.14h0Z"/>
                        </svg></a>
                </div>
            </div>
        </div>                 
        <div class="pb-4 text-center"> 
            <hr class="border-Mossco-grey-background mb-4"> 
            <p class="text-sm text-white"><?php _e( 'Copyright &copy; 2023 Massco', 'mossco_hc' ); ?></p> 
        </div>                 
        <div data-empty-placeholder></div>
    </div>             
</footer>        

<?php get_footer(); ?>