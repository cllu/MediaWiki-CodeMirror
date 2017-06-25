<?php

define( 'CONTENT_MODEL_MARKDOWN', 'markdown' );
define( 'CONTENT_FORMAT_MARKDOWN', 'text/markdown' );

class MarkdownContent extends TextContent {

    /**
     * @param string $text Markdown code.
     * @param string $modelId the content content model
     */
    public function __construct($text, $modelId = CONTENT_MODEL_MARKDOWN) {
        parent::__construct($text, $modelId);
    }
}
