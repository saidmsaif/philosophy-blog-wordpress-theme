<?php if ( ! defined( 'ABSPATH' ) ) {
    die;
} // Cannot access pages directly.

/**
 *
 * Field: Upload
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_upload extends CSFramework_Options {

    public function __construct( $field, $value = '', $unique = '' ) {
        parent::__construct( $field, $value, $unique );
    }

    public function output() {

        echo wp_kses_post( $this->element_before() );

        if ( isset( $this->field['settings'] ) ) {
            extract( $this->field['settings'] );
        }

        $upload_type  = ( isset( $upload_type ) ) ? $upload_type : 'image';
        $button_title = ( isset( $button_title ) ) ? $button_title : esc_html__( 'Upload', 'cs-framework' );
        $frame_title  = ( isset( $frame_title ) ) ? $frame_title : esc_html__( 'Upload', 'cs-framework' );
        $insert_title = ( isset( $insert_title ) ) ? $insert_title : esc_html__( 'Use Image', 'cs-framework' );

        echo '<input type="text" name="' . esc_attr( $this->element_name() ) . '" value="' . esc_attr( $this->element_value() ) . '"' . $this->element_class() . $this->element_attributes() . '/>';
        echo '<a href="#" class="button cs-add" data-frame-title="' . esc_attr( $frame_title ) . '" data-upload-type="' . esc_attr( $upload_type ) . '" data-insert-title="' . esc_attr( $insert_title ) . '">' . wp_kses_post( $button_title ) . '</a>';

        echo wp_kses_post( $this->element_after() );

    }
}
