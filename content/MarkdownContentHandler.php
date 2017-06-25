<?php
define( 'CONTENT_MODEL_MARKDOWN', 'markdown' );
define( 'CONTENT_FORMAT_MARKDOWN', 'text/markdown' );

/**
 * Content handler for Markdown pages.
 *
 * @since 1.21
 * @ingroup Content
 */
class MarkdownContentHandler extends CodeContentHandler {

    /**
     * @param string $modelId
     */
    public function __construct( $modelId = CONTENT_MODEL_MARKDOWN ) {
        parent::__construct( $modelId, [ CONTENT_FORMAT_MARKDOWN ] );
    }

    protected function getContentClass() {
        return MarkdownContent::class;
    }

}

