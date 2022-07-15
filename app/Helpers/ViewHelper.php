<?php

if (!function_exists('tidy')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function tidy($html)
    {
        $config = [
            'indent'         => true,
            'output-xhtml'   => true,
            'show-body-only' => true,
            'wrap'           => 200
        ];

        // Tidy
        $tidy = new tidy;
        $tidy->parseString($html, $config, 'utf8');
        $tidy->cleanRepair();

        // Output
        return $tidy;
    }
}
