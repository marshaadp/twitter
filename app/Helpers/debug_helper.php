<?php
if (!function_exists('dd')) {
    /**
     * Dump and Die
     * Prints out the given variable(s) and halts the script execution.
     *
     * @param mixed ...$vars
     */
    function dd(...$vars)
    {
        foreach ($vars as $var) {
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }
        exit(1); // Halts the execution
    }
}
