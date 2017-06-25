<?php
/**
 * Content handler for YAML pages.
 *
 * @since 1.21
 * @ingroup Content
 */
class YamlContentHandler extends CodeContentHandler {

    /**
     * @param string $modelId
     */
    public function __construct( $modelId = CONTENT_MODEL_YAML ) {
        parent::__construct( $modelId, [ CONTENT_FORMAT_YAML ] );
    }

    protected function getContentClass() {
        return YamlContent::class;
    }

}

