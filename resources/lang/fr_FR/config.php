<?php

/**
 * config.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'html_language'            => 'fr',
    'locale'                   => 'fr, French, fr_FR.utf8, fr_FR.UTF-8',
    //'month'                   => '%B %Y',
    'month_js'                 => 'MMMM YYYY',

    //'month_and_day'           => '%B %e, %Y',
    'month_and_day_moment_js'  => 'D MMMM YYYY',
    'month_and_day_fns'        => 'd MMMM y',
    'month_and_day_js'         => 'Do MMMM YYYY',

    //'month_and_date_day'      => '%A %B %e, %Y',
    'month_and_date_day_js'    => 'dddd D MMMM AAAA',

    //'month_and_day_no_year'   => '%B %e',
    'month_and_day_no_year_js' => 'D MMMM',

    //'date_time'               => '%B %e, %Y, @ %T',
    'date_time_js'             => 'Do MMMM YYYY, à HH:mm:ss',
    'date_time_fns'            => 'do MMMM, yyyy @ HH:mm:ss',

    //'specific_day'            => '%e %B %Y',
    'specific_day_js'          => 'D MMMM YYYY',

    //'week_in_year'            => 'Week %V, %G',
    'week_in_year_js'          => '[Week] w, YYYY',
    'week_in_year_fns'         => "'Semaine' w, yyyy",

    //'year'                    => '%Y',
    'year_js'                  => 'YYYY',

    //'half_year'               => '%B %Y',
    'half_year_js'             => '\QQ YYYY',

    'quarter_fns'   => "'Q'Q, yyyy",
    'half_year_fns' => "'H{half}', yyyy",
    'dow_1'         => 'Lundi',
    'dow_2'         => 'Mardi',
    'dow_3'         => 'Mercredi',
    'dow_4'         => 'Jeudi',
    'dow_5'         => 'Vendredi',
    'dow_6'         => 'Samedi',
    'dow_7'         => 'Dimanche',
];
