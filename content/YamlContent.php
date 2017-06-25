<?php

class YamlContent extends TextContent {

    /**
     * @param string $text Markdown code.
     * @param string $modelId the content content model
     */
    public function __construct($text, $modelId = CONTENT_MODEL_YAML) {
        parent::__construct($text, $modelId);
    }
}
