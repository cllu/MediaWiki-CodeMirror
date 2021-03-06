<?php

class MarkdownContent extends TextContent {

    /**
     * @param string $text Markdown code.
     * @param string $modelId the content content model
     */
    public function __construct($text, $modelId = CONTENT_MODEL_MARKDOWN) {
        parent::__construct($text, $modelId);
    }
}
