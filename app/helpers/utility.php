<?php

/**
 * Set Nav Active
 */
function setNavActive($match)
{
    if (is_array($match)) {
        foreach ($match as $item) {
            if (request()->is($item)) {
                return 'active';
            }
        }
    } else {
        return request()->is($match) ? 'active' : '';
    }
}

/**
 *
 */
function setParamActive($paramName, $value)
{
    if (request()->get($paramName) == $value) {
        return 'active';
    }
}

/**
 * Set Disabled
 */
function setDisabled($condition)
{
    if ($condition) {
        return 'disabled';
    }
}

/**
 * Is Super Admin
 */
function isSuperAdmin()
{
    return (Auth::check() && Auth::user()->is_super_admin) ? true : false;
}
