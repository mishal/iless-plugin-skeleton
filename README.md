# ILess Plugin - Skeleton

This plugin does **NOTHING**. It is only the skeleton (template) for new ILess plugin. 
Replace `(S|s)keleton` with real plugin name.

## Build Status

[![Build Status](https://travis-ci.org/mishal/iless-plugin-skeleton.svg)](https://travis-ci.org/mishal/iless-plugin-skeleton)

## Installation

Install using composer:

    $ composer require mishal/iless-plugin-skeleton

## Programmatic Usage

    use ILess\Parser;
    use ILess\Plugin\Skeleton\SkeletonPlugin;

    $parser = new Parser();
    // register the plugin
    $parser->getPluginManager()->addPlugin(new SkeletonPlugin($directories));

    // now I can use schema like directives in my less
    $parser->parseFile('/example.less');

    $css = $parser->getCSS();

### Less Code – Example.less

    // to do
