<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Stefan\Flags\Model;

/**
 * Options provider for countries list
 *
 * @api
 * @since 100.0.2
 */
class Flags implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray($isMultiselect = false, $foregroundCountries = '')
    {
        $options = array(
            array(
                'value' => 'af',
                'label' => 'Afghanistan'
                ),
                array(
                'value' => 'ax',
                'label' => 'Aland Islands'
                ),
                array(
                'value' => 'al',
                'label' => 'Albania'
                ),
                array(
                'value' => 'dz',
                'label' => 'Algeria'
                ),
                array(
                'value' => 'as',
                'label' => 'American Samoa'
                ),
                array(
                'value' => 'ad',
                'label' => 'Andorra'
                ),
                array(
                'value' => 'ao',
                'label' => 'Angola'
                ),
                array(
                'value' => 'ai',
                'label' => 'Anguilla'
                ),
                array(
                'value' => 'aq',
                'label' => 'Antarctica'
                ),
                array(
                'value' => 'ag',
                'label' => 'Antigua and Barbuda'
                ),
                array(
                'value' => 'ar',
                'label' => 'Argentina'
                ),
                array(
                'value' => 'am',
                'label' => 'Armenia'
                ),
                array(
                'value' => 'aw',
                'label' => 'Aruba'
                ),
                array(
                'value' => 'ac',
                'label' => 'Ascension Island'
                ),
                array(
                'value' => 'au',
                'label' => 'Australia'
                ),
                array(
                'value' => 'at',
                'label' => 'Austria'
                ),
                array(
                'value' => 'az',
                'label' => 'Azerbaijan'
                ),
                array(
                'value' => 'bs',
                'label' => 'Bahamas'
                ),
                array(
                'value' => 'bh',
                'label' => 'Bahrain'
                ),
                array(
                'value' => 'bd',
                'label' => 'Bangladesh'
                ),
                array(
                'value' => 'bb',
                'label' => 'Barbados'
                ),
                array(
                'value' => 'by',
                'label' => 'Belarus'
                ),
                array(
                'value' => 'be',
                'label' => 'Belgium'
                ),
                array(
                'value' => 'bz',
                'label' => 'Belize'
                ),
                array(
                'value' => 'bj',
                'label' => 'Benin'
                ),
                array(
                'value' => 'bm',
                'label' => 'Bermuda'
                ),
                array(
                'value' => 'bt',
                'label' => 'Bhutan'
                ),
                array(
                'value' => 'bo',
                'label' => 'Bolivia (Plurinational State of)'
                ),
                array(
                'value' => 'bq',
                'label' => 'Bonaire, Sint Eustatius and Saba'
                ),
                array(
                'value' => 'ba',
                'label' => 'Bosnia and Herzegovina'
                ),
                array(
                'value' => 'bw',
                'label' => 'Botswana'
                ),
                array(
                'value' => 'bv',
                'label' => 'Bouvet Island'
                ),
                array(
                'value' => 'br',
                'label' => 'Brazil'
                ),
                array(
                'value' => 'io',
                'label' => 'British Indian Ocean Territory'
                ),
                array(
                'value' => 'bn',
                'label' => 'Brunei Darussalam'
                ),
                array(
                'value' => 'bg',
                'label' => 'Bulgaria'
                ),
                array(
                'value' => 'bf',
                'label' => 'Burkina Faso'
                ),
                array(
                'value' => 'bi',
                'label' => 'Burundi'
                ),
                array(
                'value' => 'cv',
                'label' => 'Cabo Verde'
                ),
                array(
                'value' => 'kh',
                'label' => 'Cambodia'
                ),
                array(
                'value' => 'cm',
                'label' => 'Cameroon'
                ),
                array(
                'value' => 'ca',
                'label' => 'Canada'
                ),
                array(
                'value' => 'ic',
                'label' => 'Canary Islands'
                ),
                array(
                'value' => 'es-ct',
                'label' => 'Catalonia'
                ),
                array(
                'value' => 'ky',
                'label' => 'Cayman Islands'
                ),
                array(
                'value' => 'cf',
                'label' => 'Central African Republic'
                ),
                array(
                'value' => 'ea',
                'label' => 'Ceuta & Melilla'
                ),
                array(
                'value' => 'td',
                'label' => 'Chad'
                ),
                array(
                'value' => 'cl',
                'label' => 'Chile'
                ),
                array(
                'value' => 'cn',
                'label' => 'China'
                ),
                array(
                'value' => 'cx',
                'label' => 'Christmas Island'
                ),
                array(
                'value' => 'cp',
                'label' => 'Clipperton Island'
                ),
                array(
                'value' => 'cc',
                'label' => 'Cocos (Keeling) Islands'
                ),
                array(
                'value' => 'co',
                'label' => 'Colombia'
                ),
                array(
                'value' => 'km',
                'label' => 'Comoros'
                ),
                array(
                'value' => 'ck',
                'label' => 'Cook Islands'
                ),
                array(
                'value' => 'cr',
                'label' => 'Costa Rica'
                ),
                array(
                'value' => 'hr',
                'label' => 'Croatia'
                ),
                array(
                'value' => 'cu',
                'label' => 'Cuba'
                ),
                array(
                'value' => 'cw',
                'label' => 'Curaçao'
                ),
                array(
                'value' => 'cy',
                'label' => 'Cyprus'
                ),
                array(
                'value' => 'cz',
                'label' => 'Czech Republic'
                ),
                array(
                'value' => 'ci',
                'label' => 'Côte d Ivoire'
                ),
                array(
                'value' => 'cd',
                'label' => 'Democratic Republic of the Congo'
                ),
                array(
                'value' => 'dk',
                'label' => 'Denmark'
                ),
                array(
                'value' => 'dg',
                'label' => 'Diego Garcia'
                ),
                array(
                'value' => 'dj',
                'label' => 'Djibouti'
                ),
                array(
                'value' => 'dm',
                'label' => 'Dominica'
                ),
                array(
                'value' => 'do',
                'label' => 'Dominican Republic'
                ),
                array(
                'value' => 'ec',
                'label' => 'Ecuador'
                ),
                array(
                'value' => 'eg',
                'label' => 'Egypt'
                ),
                array(
                'value' => 'sv',
                'label' => 'El Salvador'
                ),
                array(
                'value' => 'gb-eng',
                'label' => 'England'
                ),
                array(
                'value' => 'gq',
                'label' => 'Equatorial Guinea'
                ),
                array(
                'value' => 'er',
                'label' => 'Eritrea'
                ),
                array(
                'value' => 'ee',
                'label' => 'Estonia'
                ),
                array(
                'value' => 'et',
                'label' => 'Ethiopia'
                ),
                array(
                'value' => 'eu',
                'label' => 'Europe'
                ),
                array(
                'value' => 'fk',
                'label' => 'Falkland Islands'
                ),
                array(
                'value' => 'fo',
                'label' => 'Faroe Islands'
                ),
                array(
                'value' => 'fm',
                'label' => 'Federated States of Micronesia'
                ),
                array(
                'value' => 'fj',
                'label' => 'Fiji'
                ),
                array(
                'value' => 'fi',
                'label' => 'Finland'
                ),
                array(
                'value' => 'fr',
                'label' => 'France'
                ),
                array(
                'value' => 'gf',
                'label' => 'French Guiana'
                ),
                array(
                'value' => 'pf',
                'label' => 'French Polynesia'
                ),
                array(
                'value' => 'tf',
                'label' => 'French Southern Territories'
                ),
                array(
                'value' => 'ga',
                'label' => 'Gabon'
                ),
                array(
                'value' => 'es-ga',
                'label' => 'Galicia'
                ),
                array(
                'value' => 'gm',
                'label' => 'Gambia'
                ),
                array(
                'value' => 'ge',
                'label' => 'Georgia'
                ),
                array(
                'value' => 'de',
                'label' => 'Germany'
                ),
                array(
                'value' => 'gh',
                'label' => 'Ghana'
                ),
                array(
                'value' => 'gi',
                'label' => 'Gibraltar'
                ),
                array(
                'value' => 'gr',
                'label' => 'Greece'
                ),
                array(
                'value' => 'gl',
                'label' => 'Greenland'
                ),
                array(
                'value' => 'gd',
                'label' => 'Grenada'
                ),
                array(
                'value' => 'gp',
                'label' => 'Guadeloupe'
                ),
                array(
                'value' => 'gu',
                'label' => 'Guam'
                ),
                array(
                'value' => 'gt',
                'label' => 'Guatemala'
                ),
                array(
                'value' => 'gg',
                'label' => 'Guernsey'
                ),
                array(
                'value' => 'gn',
                'label' => 'Guinea'
                ),
                array(
                'value' => 'gw',
                'label' => 'Guinea-Bissau'
                ),
                array(
                'value' => 'gy',
                'label' => 'Guyana'
                ),
                array(
                'value' => 'ht',
                'label' => 'Haiti'
                ),
                array(
                'value' => 'hm',
                'label' => 'Heard Island and McDonald Islands'
                ),
                array(
                'value' => 'va',
                'label' => 'Holy See'
                ),
                array(
                'value' => 'hn',
                'label' => 'Honduras'
                ),
                array(
                'value' => 'hk',
                'label' => 'Hong Kong'
                ),
                array(
                'value' => 'hu',
                'label' => 'Hungary'
                ),
                array(
                'value' => 'is',
                'label' => 'Iceland'
                ),
                array(
                'value' => 'in',
                'label' => 'India'
                ),
                array(
                'value' => 'id',
                'label' => 'Indonesia'
                ),
                array(
                'value' => 'ir',
                'label' => 'Iran (Islamic Republic of)'
                ),
                array(
                'value' => 'iq',
                'label' => 'Iraq'
                ),
                array(
                'value' => 'ie',
                'label' => 'Ireland'
                ),
                array(
                'value' => 'im',
                'label' => 'Isle of Man'
                ),
                array(
                'value' => 'il',
                'label' => 'Israel'
                ),
                array(
                'value' => 'it',
                'label' => 'Italy'
                ),
                array(
                'value' => 'jm',
                'label' => 'Jamaica'
                ),
                array(
                'value' => 'jp',
                'label' => 'Japan'
                ),
                array(
                'value' => 'je',
                'label' => 'Jersey'
                ),
                array(
                'value' => 'jo',
                'label' => 'Jordan'
                ),
                array(
                'value' => 'kz',
                'label' => 'Kazakhstan'
                ),
                array(
                'value' => 'ke',
                'label' => 'Kenya'
                ),
                array(
                'value' => 'ki',
                'label' => 'Kiribati'
                ),
                array(
                'value' => 'xk',
                'label' => 'Kosovo'
                ),
                array(
                'value' => 'kw',
                'label' => 'Kuwait'
                ),
                array(
                'value' => 'kg',
                'label' => 'Kyrgyzstan'
                ),
                array(
                'value' => 'la',
                'label' => 'Laos'
                ),
                array(
                'value' => 'lv',
                'label' => 'Latvia'
                ),
                array(
                'value' => 'lb',
                'label' => 'Lebanon'
                ),
                array(
                'value' => 'ls',
                'label' => 'Lesotho'
                ),
                array(
                'value' => 'lr',
                'label' => 'Liberia'
                ),
                array(
                'value' => 'ly',
                'label' => 'Libya'
                ),
                array(
                'value' => 'li',
                'label' => 'Liechtenstein'
                ),
                array(
                'value' => 'lt',
                'label' => 'Lithuania'
                ),
                array(
                'value' => 'lu',
                'label' => 'Luxembourg'
                ),
                array(
                'value' => 'mo',
                'label' => 'Macau'
                ),
                array(
                'value' => 'mg',
                'label' => 'Madagascar'
                ),
                array(
                'value' => 'mw',
                'label' => 'Malawi'
                ),
                array(
                'value' => 'my',
                'label' => 'Malaysia'
                ),
                array(
                'value' => 'mv',
                'label' => 'Maldives'
                ),
                array(
                'value' => 'ml',
                'label' => 'Mali'
                ),
                array(
                'value' => 'mt',
                'label' => 'Malta'
                ),
                array(
                'value' => 'mh',
                'label' => 'Marshall Islands'
                ),
                array(
                'value' => 'mq',
                'label' => 'Martinique'
                ),
                array(
                'value' => 'mr',
                'label' => 'Mauritania'
                ),
                array(
                'value' => 'mu',
                'label' => 'Mauritius'
                ),
                array(
                'value' => 'yt',
                'label' => 'Mayotte'
                ),
                array(
                'value' => 'mx',
                'label' => 'Mexico'
                ),
                array(
                'value' => 'md',
                'label' => 'Moldova'
                ),
                array(
                'value' => 'mc',
                'label' => 'Monaco'
                ),
                array(
                'value' => 'mn',
                'label' => 'Mongolia'
                ),
                array(
                'value' => 'me',
                'label' => 'Montenegro'
                ),
                array(
                'value' => 'ms',
                'label' => 'Montserrat'
                ),
                array(
                'value' => 'ma',
                'label' => 'Morocco'
                ),
                array(
                'value' => 'mz',
                'label' => 'Mozambique'
                ),
                array(
                'value' => 'mm',
                'label' => 'Myanmar'
                ),
                array(
                'value' => 'na',
                'label' => 'Namibia'
                ),
                array(
                'value' => 'nr',
                'label' => 'Nauru'
                ),
                array(
                'value' => 'np',
                'label' => 'Nepal'
                ),
                array(
                'value' => 'nl',
                'label' => 'Netherlands'
                ),
                array(
                'value' => 'nc',
                'label' => 'New Caledonia'
                ),
                array(
                'value' => 'nz',
                'label' => 'New Zealand'
                ),
                array(
                'value' => 'ni',
                'label' => 'Nicaragua'
                ),
                array(
                'value' => 'ne',
                'label' => 'Niger'
                ),
                array(
                'value' => 'ng',
                'label' => 'Nigeria'
                ),
                array(
                'value' => 'nu',
                'label' => 'Niue'
                ),
                array(
                'value' => 'nf',
                'label' => 'Norfolk Island'
                ),
                array(
                'value' => 'kp',
                'label' => 'North Korea'
                ),
                array(
                'value' => 'mk',
                'label' => 'North Macedonia'
                ),
                array(
                'value' => 'gb-nir',
                'label' => 'Northern Ireland'
                ),
                array(
                'value' => 'mp',
                'label' => 'Northern Mariana Islands'
                ),
                array(
                'value' => 'no',
                'label' => 'Norway'
                ),
                array(
                'value' => 'om',
                'label' => 'Oman'
                ),
                array(
                'value' => 'pk',
                'label' => 'Pakistan'
                ),
                array(
                'value' => 'pw',
                'label' => 'Palau'
                ),
                array(
                'value' => 'pa',
                'label' => 'Panama'
                ),
                array(
                'value' => 'pg',
                'label' => 'Papua New Guinea'
                ),
                array(
                'value' => 'py',
                'label' => 'Paraguay'
                ),
                array(
                'value' => 'pe',
                'label' => 'Peru'
                ),
                array(
                'value' => 'ph',
                'label' => 'Philippines'
                ),
                array(
                'value' => 'pn',
                'label' => 'Pitcairn'
                ),
                array(
                'value' => 'pl',
                'label' => 'Poland'
                ),
                array(
                'value' => 'pt',
                'label' => 'Portugal'
                ),
                array(
                'value' => 'pr',
                'label' => 'Puerto Rico'
                ),
                array(
                'value' => 'qa',
                'label' => 'Qatar'
                ),
                array(
                'value' => 'cg',
                'label' => 'Republic of the Congo'
                ),
                array(
                'value' => 'ro',
                'label' => 'Romania'
                ),
                array(
                'value' => 'ru',
                'label' => 'Russia'
                ),
                array(
                'value' => 'rw',
                'label' => 'Rwanda'
                ),
                array(
                'value' => 're',
                'label' => 'Réunion'
                ),
                array(
                'value' => 'bl',
                'label' => 'Saint Barthélemy'
                ),
                array(
                'value' => 'sh',
                'label' => 'Saint Helena, Ascension and Tristan da Cunha'
                ),
                array(
                'value' => 'kn',
                'label' => 'Saint Kitts and Nevis'
                ),
                array(
                'value' => 'lc',
                'label' => 'Saint Lucia'
                ),
                array(
                'value' => 'mf',
                'label' => 'Saint Martin'
                ),
                array(
                'value' => 'pm',
                'label' => 'Saint Pierre and Miquelon'
                ),
                array(
                'value' => 'vc',
                'label' => 'Saint Vincent and the Grenadines'
                ),
                array(
                'value' => 'ws',
                'label' => 'Samoa'
                ),
                array(
                'value' => 'sm',
                'label' => 'San Marino'
                ),
                array(
                'value' => 'st',
                'label' => 'Sao Tome and Principe'
                ),
                array(
                'value' => 'sa',
                'label' => 'Saudi Arabia'
                ),
                array(
                'value' => 'gb-sct',
                'label' => 'Scotland'
                ),
                array(
                'value' => 'sn',
                'label' => 'Senegal'
                ),
                array(
                'value' => 'rs',
                'label' => 'Serbia'
                ),
                array(
                'value' => 'sc',
                'label' => 'Seychelles'
                ),
                array(
                'value' => 'sl',
                'label' => 'Sierra Leone'
                ),
                array(
                'value' => 'sg',
                'label' => 'Singapore'
                ),
                array(
                'value' => 'sx',
                'label' => 'Sint Maarten'
                ),
                array(
                'value' => 'sk',
                'label' => 'Slovakia'
                ),
                array(
                'value' => 'si',
                'label' => 'Slovenia'
                ),
                array(
                'value' => 'sb',
                'label' => 'Solomon Islands'
                ),
                array(
                'value' => 'so',
                'label' => 'Somalia'
                ),
                array(
                'value' => 'za',
                'label' => 'South Africa'
                ),
                array(
                'value' => 'gs',
                'label' => 'South Georgia and the South Sandwich Islands'
                ),
                array(
                'value' => 'kr',
                'label' => 'South Korea'
                ),
                array(
                'value' => 'ss',
                'label' => 'South Sudan'
                ),
                array(
                'value' => 'es',
                'label' => 'Spain'
                ),
                array(
                'value' => 'lk',
                'label' => 'Sri Lanka'
                ),
                array(
                'value' => 'ps',
                'label' => 'State of Palestine'
                ),
                array(
                'value' => 'sd',
                'label' => 'Sudan'
                ),
                array(
                'value' => 'sr',
                'label' => 'Suriname'
                ),
                array(
                'value' => 'sj',
                'label' => 'Svalbard and Jan Mayen'
                ),
                array(
                'value' => 'sz',
                'label' => 'Swaziland'
                ),
                array(
                'value' => 'se',
                'label' => 'Sweden'
                ),
                array(
                'value' => 'ch',
                'label' => 'Switzerland'
                ),
                array(
                'value' => 'sy',
                'label' => 'Syrian Arab Republic'
                ),
                array(
                'value' => 'tw',
                'label' => 'Taiwan'
                ),
                array(
                'value' => 'tj',
                'label' => 'Tajikistan'
                ),
                array(
                'value' => 'tz',
                'label' => 'Tanzania'
                ),
                array(
                'value' => 'th',
                'label' => 'Thailand'
                ),
                array(
                'value' => 'tl',
                'label' => 'Timor-Leste'
                ),
                array(
                'value' => 'tg',
                'label' => 'Togo'
                ),
                array(
                'value' => 'tk',
                'label' => 'Tokelau'
                ),
                array(
                'value' => 'to',
                'label' => 'Tonga'
                ),
                array(
                'value' => 'tt',
                'label' => 'Trinidad and Tobago'
                ),
                array(
                'value' => 'ta',
                'label' => 'Tristan da Cunha'
                ),
                array(
                'value' => 'tn',
                'label' => 'Tunisia'
                ),
                array(
                'value' => 'tr',
                'label' => 'Turkey'
                ),
                array(
                'value' => 'tm',
                'label' => 'Turkmenistan'
                ),
                array(
                'value' => 'tc',
                'label' => 'Turks and Caicos Islands'
                ),
                array(
                'value' => 'tv',
                'label' => 'Tuvalu'
                ),
                array(
                'value' => 'ug',
                'label' => 'Uganda'
                ),
                array(
                'value' => 'ua',
                'label' => 'Ukraine'
                ),
                array(
                'value' => 'ae',
                'label' => 'United Arab Emirates'
                ),
                array(
                'value' => 'gb',
                'label' => 'United Kingdom'
                ),
                array(
                'value' => 'un',
                'label' => 'United Nations'
                ),
                array(
                'value' => 'um',
                'label' => 'United States Minor Outlying Islands'
                ),
                array(
                'value' => 'us',
                'label' => 'United States of America'
                ),
                array(
                'value' => 'xx',
                'label' => 'Unknown'
                ),
                array(
                'value' => 'uy',
                'label' => 'Uruguay'
                ),
                array(
                'value' => 'uz',
                'label' => 'Uzbekistan'
                ),
                array(
                'value' => 'vu',
                'label' => 'Vanuatu'
                ),
                array(
                'value' => 've',
                'label' => 'Venezuela (Bolivarian Republic of)'
                ),
                array(
                'value' => 'vn',
                'label' => 'Vietnam'
                ),
                array(
                'value' => 'vg',
                'label' => 'Virgin Islands (British)'
                ),
                array(
                'value' => 'vi',
                'label' => 'Virgin Islands (U.S.)'
                ),
                array(
                'value' => 'gb-wls',
                'label' => 'Wales'
                ),
                array(
                'value' => 'wf',
                'label' => 'Wallis and Futuna'
                ),
                array(
                'value' => 'eh',
                'label' => 'Western Sahara'
                ),
                array(
                'value' => 'ye',
                'label' => 'Yemen'
                ),
                array(
                'value' => 'zm',
                'label' => 'Zambia'
                ),
                array(
                'value' => 'zw',
                'label' => 'Zimbabwe'
                ),
                
                
        );
        
        return $options;
    }
}
