<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "-mt-28 bg-cover border-b-4 border-primary-NORMAL border-solid hero-poster relative text-white", 'title' => "Hero bg image", 'style' => "background-image:url('".PG_Blocks::getImageUrl( $args, 'hero_bg_image', 'full' )."');", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <div class="flex mx-4">
        <div class="hero-heading text-center w-full">
            <h1 class="bg-opacity-0 font-medium font-sans lowercase text-4xl sm:text-5xl md:text-6xl lg:text-6xl 2xl:text-7xl"><?php echo PG_Blocks::getAttribute( $args, 'hero_h1' ) ?></h1>
            <h2 class="font-serif mt-4 pb-4 md:text-primary-NORMAL md:text-xl lg:text-2xl lg:text-primary-NORMAL 2xl:font-serif 2xl:leading-normal 2xl:text-3xl 2xl:text-primary-NORMAL"><?php echo PG_Blocks::getAttribute( $args, 'hero_h2' ) ?></h2>
            <button class="active:bg-primary-DARK active:border-primary-DARK bg-opacity-50 bg-primary_bg-NORMAL border-2 border-primary-NORMAL border-solid drop-shadow duration-300 ease-out hover:bg-primary-LIGHT hover:border-primary-LIGHT hover:drop-shadow-xl hover:ring hover:ring-primary-DARK hover:rounded-sm hover:text-white mt-5 px-8 py-2 rounded uppercase" href="<?php echo (!empty($_GET['context']) && $_GET['context'] === 'edit') ? 'javascript:void()' : PG_Blocks::getLinkUrl( $args, 'button_hero_link' ) ?>" style="background-color:<?php echo PG_Blocks::getAttribute( $args, 'button_bg' ) ?>;">
                <?php echo PG_Blocks::getAttribute( $args, 'button_text' ) ?>
            </button>
        </div>
    </div>
</section>