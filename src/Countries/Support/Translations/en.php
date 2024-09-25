<?php

namespace Macmotp\Countries\Support\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * English
 */
class en implements Translation
{
    /**
     * Get translation
     *
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        return match ($key) {
            Continent::AFRICA => 'Africa',
            Continent::ANTARCTICA => 'Antarctic',
            Continent::ARCTIC => 'Arctic',
            Continent::ASIA => 'Asia',
            Continent::EUROPE => 'Europe',
            Continent::NORTH_AMERICA => 'North America',
            Continent::OCEANIA => 'Oceania',
            Continent::SOUTH_AMERICA => 'South America',

            Country::AFGHANISTAN => 'Afghanistan',
            Country::ALAND => 'Åland',
            Country::ALBANIA => 'Albania',
            Country::ALGERIA => 'Algeria',
            Country::AMERICAN_SAMOA => 'American Samoa',
            Country::ANDORRA => 'Andorra',
            Country::ANGOLA => 'Angola',
            Country::ANGUILLA => 'Anguilla',
            Country::ANTARCTICA => 'Antarctica',
            Country::ANTIGUA_AND_BARBUDA => 'Antigua and Barbuda',
            Country::ARGENTINA => 'Argentina',
            Country::ARMENIA => 'Armenia',
            Country::ARUBA => 'Aruba',
            Country::AUSTRALIA => 'Australia',
            Country::AUSTRIA => 'Austria',
            Country::AZERBAIJAN => 'Azerbaijan',
            Country::BAHAMAS => 'Bahamas',
            Country::BAHRAIN => 'Bahrain',
            Country::BANGLADESH => 'Bangladesh',
            Country::BARBADOS => 'Barbados',
            Country::BELARUS => 'Belarus',
            Country::BELGIUM => 'Belgium',
            Country::BELIZE => 'Belize',
            Country::BENIN => 'Benin',
            Country::BERMUDA => 'Bermuda',
            Country::BHUTAN => 'Bhutan',
            Country::BOLIVIA => 'Bolivia',
            Country::BONAIRE => 'Bonaire',
            Country::BOSNIA_AND_HERZEGOVINA => 'Bosnia and Herzegovina',
            Country::BOTSWANA => 'Botswana',
            Country::BOUVET_ISLAND => 'Bouvet Island',
            Country::BRAZIL => 'Brazil',
            Country::BRITISH_INDIAN_OCEAN_TERRITORY => 'British Indian Ocean Territory',
            Country::BRUNEI => 'Brunei',
            Country::BULGARIA => 'Bulgaria',
            Country::BURKINA_FASO => 'Burkina Faso',
            Country::BURUNDI => 'Burundi',
            Country::CAMBODIA => 'Cambodia',
            Country::CAMEROON => 'Cameroon',
            Country::CANADA => 'Canada',
            Country::CAPE_VERDE => 'Cape Verde',
            Country::CAYMAN_ISLANDS => 'Cayman Islands',
            Country::CENTRAL_AFRICAN_REPUBLIC => 'Central African Republic',
            Country::CHAD => 'Chad',
            Country::CHILE => 'Chile',
            Country::CHINA => 'China',
            Country::CHRISTMAS_ISLAND => 'Christmas Island',
            Country::COCOS_KEELING_ISLANDS => 'Cocos (Keeling) Islands',
            Country::COLOMBIA => 'Colombia',
            Country::COMOROS => 'Comoros',
            Country::COOK_ISLANDS => 'Cook Islands',
            Country::COSTA_RICA => 'Costa Rica',
            Country::CROATIA => 'Croatia',
            Country::CUBA => 'Cuba',
            Country::CURACAO => 'Curaçao',
            Country::CYPRUS => 'Cyprus',
            Country::CZECHIA => 'Czechia',
            Country::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'Democratic Republic of the Congo',
            Country::DENMARK => 'Denmark',
            Country::DJIBOUTI => 'Djibouti',
            Country::DOMINICA => 'Dominica',
            Country::DOMINICAN_REPUBLIC => 'Dominican Republic',
            Country::ECUADOR => 'Ecuador',
            Country::EGYPT => 'Egypt',
            Country::EL_SALVADOR => 'El Salvador',
            Country::EQUATORIAL_GUINEA => 'Equatorial Guinea',
            Country::ERITREA => 'Eritrea',
            Country::ESTONIA => 'Estonia',
            Country::ESWATINI => 'Eswatini',
            Country::ETHIOPIA => 'Ethiopia',
            Country::FALKLAND_ISLANDS => 'Falkland Islands',
            Country::FAROE_ISLANDS => 'Faroe Islands',
            Country::FIJI => 'Fiji',
            Country::FINLAND => 'Finland',
            Country::FRANCE => 'France',
            Country::FRENCH_GUIANA => 'French Guiana',
            Country::FRENCH_POLYNESIA => 'French Polynesia',
            Country::FRENCH_SOUTHERN_TERRITORIES => 'French Southern Territories',
            Country::GABON => 'Gabon',
            Country::GAMBIA => 'Gambia',
            Country::GEORGIA => 'Georgia',
            Country::GERMANY => 'Germany',
            Country::GHANA => 'Ghana',
            Country::GIBRALTAR => 'Gibraltar',
            Country::GREECE => 'Greece',
            Country::GREENLAND => 'Greenland',
            Country::GRENADA => 'Grenada',
            Country::GUADELOUPE => 'Guadeloupe',
            Country::GUAM => 'Guam',
            Country::GUATEMALA => 'Guatemala',
            Country::GUERNSEY => 'Guernsey',
            Country::GUINEA => 'Guinea',
            Country::GUINEA_BISSAU => 'Guinea-Bissau',
            Country::GUYANA => 'Guyana',
            Country::HAITI => 'Haiti',
            Country::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'Heard Island and McDonald Islands',
            Country::HONDURAS => 'Honduras',
            Country::HONG_KONG => 'Hong Kong',
            Country::HUNGARY => 'Hungary',
            Country::ICELAND => 'Iceland',
            Country::INDIA => 'India',
            Country::INDONESIA => 'Indonesia',
            Country::IRAN => 'Iran',
            Country::IRAQ => 'Iraq',
            Country::IRELAND => 'Ireland',
            Country::ISLE_OF_MAN => 'Isle of Man',
            Country::ISRAEL => 'Israel',
            Country::ITALY => 'Italy',
            Country::IVORY_COAST => 'Ivory Coast',
            Country::JAMAICA => 'Jamaica',
            Country::JAPAN => 'Japan',
            Country::JERSEY => 'Jersey',
            Country::JORDAN => 'Jordan',
            Country::KAZAKHSTAN => 'Kazakhstan',
            Country::KENYA => 'Kenya',
            Country::KIRIBATI => 'Kiribati',
            Country::KOSOVO => 'Kosovo',
            Country::KUWAIT => 'Kuwait',
            Country::KYRGYZSTAN => 'Kyrgyzstan',
            Country::LAOS => 'Laos',
            Country::LATVIA => 'Latvia',
            Country::LEBANON => 'Lebanon',
            Country::LESOTHO => 'Lesotho',
            Country::LIBERIA => 'Liberia',
            Country::LIBYA => 'Libya',
            Country::LIECHTENSTEIN => 'Liechtenstein',
            Country::LITHUANIA => 'Lithuania',
            Country::LUXEMBOURG => 'Luxembourg',
            Country::MACAO => 'Macao',
            Country::MADAGASCAR => 'Madagascar',
            Country::MALAWI => 'Malawi',
            Country::MALAYSIA => 'Malaysia',
            Country::MALDIVES => 'Maldives',
            Country::MALI => 'Mali',
            Country::MALTA => 'Malta',
            Country::MARSHALL_ISLANDS => 'Marshall Islands',
            Country::MARTINIQUE => 'Martinique',
            Country::MAURITANIA => 'Mauritania',
            Country::MAURITIUS => 'Mauritius',
            Country::MAYOTTE => 'Mayotte',
            Country::MEXICO => 'Mexico',
            Country::MICRONESIA => 'Micronesia',
            Country::MOLDOVA => 'Moldova',
            Country::MONACO => 'Monaco',
            Country::MONGOLIA => 'Mongolia',
            Country::MONTENEGRO => 'Montenegro',
            Country::MONTSERRAT => 'Montserrat',
            Country::MOROCCO => 'Morocco',
            Country::MOZAMBIQUE => 'Mozambique',
            Country::MYANMAR => 'Myanmar',
            Country::NAMIBIA => 'Namibia',
            Country::NAURU => 'Nauru',
            Country::NEPAL => 'Nepal',
            Country::NETHERLANDS => 'Netherlands',
            Country::NEW_CALEDONIA => 'New Caledonia',
            Country::NEW_ZEALAND => 'New Zealand',
            Country::NICARAGUA => 'Nicaragua',
            Country::NIGER => 'Niger',
            Country::NIGERIA => 'Nigeria',
            Country::NIUE => 'Niue',
            Country::NORFOLK_ISLAND => 'Norfolk Island',
            Country::NORTHERN_MARIANA_ISLANDS => 'Northern Mariana Islands',
            Country::NORTH_KOREA => 'North Korea',
            Country::NORTH_MACEDONIA => 'North Macedonia',
            Country::NORWAY => 'Norway',
            Country::OMAN => 'Oman',
            Country::PAKISTAN => 'Pakistan',
            Country::PALAU => 'Palau',
            Country::PALESTINE => 'Palestine',
            Country::PANAMA => 'Panama',
            Country::PAPUA_NEW_GUINEA => 'Papua New Guinea',
            Country::PARAGUAY => 'Paraguay',
            Country::PERU => 'Peru',
            Country::PHILIPPINES => 'Philippines',
            Country::PITCAIRN_ISLANDS => 'Pitcairn Islands',
            Country::POLAND => 'Poland',
            Country::PORTUGAL => 'Portugal',
            Country::PUERTO_RICO => 'Puerto Rico',
            Country::QATAR => 'Qatar',
            Country::REPUBLIC_OF_THE_CONGO => 'Republic of the Congo',
            Country::REUNION => 'Réunion',
            Country::ROMANIA => 'Romania',
            Country::RUSSIA => 'Russia',
            Country::RWANDA => 'Rwanda',
            Country::SAINT_BARTHELEMY => 'Saint Barthélemy',
            Country::SAINT_HELENA => 'Saint Helena',
            Country::SAINT_KITTS_AND_NEVIS => 'Saint Kitts and Nevis',
            Country::SAINT_LUCIA => 'Saint Lucia',
            Country::SAINT_MARTIN => 'Saint Martin',
            Country::SAINT_PIERRE_AND_MIQUELON => 'Saint Pierre and Miquelon',
            Country::SAINT_VINCENT_AND_THE_GRENADINES => 'Saint Vincent and the Grenadines',
            Country::SAMOA => 'Samoa',
            Country::SAN_MARINO => 'San Marino',
            Country::SAO_TOME_AND_PRINCIPE => 'São Tomé and Príncipe',
            Country::SAUDI_ARABIA => 'Saudi Arabia',
            Country::SENEGAL => 'Senegal',
            Country::SERBIA => 'Serbia',
            Country::SEYCHELLES => 'Seychelles',
            Country::SIERRA_LEONE => 'Sierra Leone',
            Country::SINGAPORE => 'Singapore',
            Country::SINT_MAARTEN => 'Sint Maarten',
            Country::SLOVAKIA => 'Slovakia',
            Country::SLOVENIA => 'Slovenia',
            Country::SOLOMON_ISLANDS => 'Solomon Islands',
            Country::SOMALIA => 'Somalia',
            Country::SOUTH_AFRICA => 'South Africa',
            Country::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'South Georgia and the South Sandwich Islands',
            Country::SOUTH_KOREA => 'South Korea',
            Country::SOUTH_SUDAN => 'South Sudan',
            Country::SPAIN => 'Spain',
            Country::SRI_LANKA => 'Sri Lanka',
            Country::SUDAN => 'Sudan',
            Country::SURINAME => 'Suriname',
            Country::SVALBARD_AND_JAN_MAYEN => 'Svalbard and Jan Mayen',
            Country::SWEDEN => 'Sweden',
            Country::SWITZERLAND => 'Switzerland',
            Country::SYRIA => 'Syria',
            Country::TAIWAN => 'Taiwan',
            Country::TAJIKISTAN => 'Tajikistan',
            Country::TANZANIA => 'Tanzania',
            Country::THAILAND => 'Thailand',
            Country::TIMOR_LESTE => 'Timor-Leste',
            Country::TOGO => 'Togo',
            Country::TOKELAU => 'Tokelau',
            Country::TONGA => 'Tonga',
            Country::TRINIDAD_AND_TOBAGO => 'Trinidad and Tobago',
            Country::TUNISIA => 'Tunisia',
            Country::TURKEY => 'Turkey',
            Country::TURKMENISTAN => 'Turkmenistan',
            Country::TURKS_AND_CAICOS_ISLANDS => 'Turks and Caicos Islands',
            Country::TUVALU => 'Tuvalu',
            Country::UGANDA => 'Uganda',
            Country::UKRAINE => 'Ukraine',
            Country::UNITED_ARAB_EMIRATES => 'United Arab Emirates',
            Country::UNITED_KINGDOM => 'United Kingdom',
            Country::UNITED_STATES_OF_AMERICA => 'United States of America',
            Country::URUGUAY => 'Uruguay',
            Country::US_MINOR_OUTLYING_ISLANDS => 'U.S. Minor Outlying Islands',
            Country::UZBEKISTAN => 'Uzbekistan',
            Country::VANUATU => 'Vanuatu',
            Country::VATICAN_CITY => 'Vatican City',
            Country::VENEZUELA => 'Venezuela',
            Country::VIET_NAM => 'Viet Nam',
            Country::VIRGIN_ISLANDS_BRITISH => 'Virgin Islands (British)',
            Country::VIRGIN_ISLANDS_US => 'Virgin Islands (U.S.)',
            Country::WALLIS_AND_FUTUNA => 'Wallis and Futuna',
            Country::WESTERN_SAHARA => 'Western Sahara',
            Country::YEMEN => 'Yemen',
            Country::ZAMBIA => 'Zambia',
            Country::ZIMBABWE => 'Zimbabwe',

            default => '***',
        };
    }
}
