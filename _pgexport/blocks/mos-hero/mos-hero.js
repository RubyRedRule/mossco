
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = PgServerSideRender,
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    const propOrDefault = function(val, prop, field) {
        if(block.attributes[prop] && (val === null || val === '')) {
            return field ? block.attributes[prop].default[field] : block.attributes[prop].default;
        }
        return val;
    }
    
    const block = registerBlockType( 'mossco-pine/mos-hero', {
        apiVersion: 2,
        title: 'Top Hero Section',
        icon: el('svg', { xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 24', width: '24', height: '24' }, [el('path', { fill: 'none', d: 'M0 0h24v24H0z' }), el('path', { d: 'M22 10v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V10h20zm-1-7a1 1 0 0 1 1 1v4H2V4a1 1 0 0 1 1-1h18z' })]),
        category: 'mossco_theme_blocks',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
            hero_bg_image: {
                type: 'object',
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            hero_h1: {
                type: 'text',
                default: `bar | kitchen | terrace`,
            },
            hero_h2: {
                type: 'text',
                default: `FOOD &amp; DRINK WITH STYLE`,
            },
            button_hero_link: {
                type: 'object',
                default: {post_id: 0, url: '', title: '', 'post_type': null},
            },
            button_text: {
                type: 'text',
                default: `View Menu`,
            },
            button_bg: {
                type: 'text',
                default: '',
            }
        },
        example: { attributes: { hero_bg_image: {id: 0, url: '', size: '', svg: '', alt: null}, hero_h1: `bar | kitchen | terrace`, hero_h2: `FOOD &amp; DRINK WITH STYLE`, button_hero_link: {post_id: 0, url: '', title: '', 'post_type': null}, button_text: `View Menu`, button_bg: '' } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: '-mt-28 bg-cover border-b-4 border-primary-NORMAL border-solid hero-poster relative text-white', 'data-pg-name': 'Hero bg image', title: 'Hero bg image', style: { backgroundImage: 'url(\'' + propOrDefault( props.attributes.hero_bg_image.url, 'hero_bg_image', 'url' ) + '\')' } });
            const setAttributes = props.setAttributes; 
            
            props.hero_bg_image = useSelect(function( select ) {
                return {
                    hero_bg_image: props.attributes.hero_bg_image.id ? select('core').getMedia(props.attributes.hero_bg_image.id) : undefined
                };
            }, [props.attributes.hero_bg_image] ).hero_bg_image;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                
                        el( ServerSideRender, {
                            block: 'mossco-pine/mos-hero',
                            httpMethod: 'POST',
                            attributes: props.attributes,
                            innerBlocksProps: innerBlocksProps,
                            blockProps: blockProps
                        } ),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgMediaImageControl('hero_bg_image', setAttributes, props, 'full', true, 'Hero background image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.hero_h1,
                                        help: __( '' ),
                                        label: __( 'Hero Heading 1' ),
                                        onChange: function(val) { setAttributes({hero_h1: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.hero_h2,
                                        help: __( '' ),
                                        label: __( 'hero' ),
                                        onChange: function(val) { setAttributes({hero_h2: val}) },
                                        type: 'text'
                                    }),
                                    pgUrlControl('button_hero_link', setAttributes, props, 'Button Hero Link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.button_text,
                                        help: __( '' ),
                                        label: __( 'Hero button text' ),
                                        onChange: function(val) { setAttributes({button_text: val}) },
                                        type: 'text'
                                    }),
                                    pgColorControl('button_bg', setAttributes, props, 'Button background colour', ''),
    
                                ])
                            )
                        ]
                    )                            

            ]);
        },

        save: function(props) {
            return null;
        }                        

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
