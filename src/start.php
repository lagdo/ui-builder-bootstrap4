<?php

if (function_exists('Jaxon\jaxon')) {
    $di = Jaxon\jaxon()->di();
    // Register the UI builder
    $di->auto(Lagdo\UiBuilder\Bootstrap4\Builder::class);
    $di->alias('dbadmin_builder_bootstrap4', Lagdo\UiBuilder\Bootstrap4\Builder::class);
}
