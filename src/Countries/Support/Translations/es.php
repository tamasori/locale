<?php

namespace Macmotp\Countries\Support\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * Spanish
 */
class es implements Translation
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
            Continent::AFRICA => 'África',
            Continent::ANTARCTICA => 'Antártico',
            Continent::ARCTIC => 'Ártico',
            Continent::ASIA => 'Asia',
            Continent::EUROPE => 'Europa',
            Continent::NORTH_AMERICA => 'América del Norte',
            Continent::OCEANIA => 'Oceanía',
            Continent::SOUTH_AMERICA => 'América del Sur',

            Country::AFGHANISTAN => 'Afganistán',
            Country::ALAND => 'Åland',
            Country::ALBANIA => 'Albania',
            Country::ALGERIA => 'Argelia',
            Country::AMERICAN_SAMOA => 'Samoa Americana',
            Country::ANDORRA => 'Andorra',
            Country::ANGOLA => 'Angola',
            Country::ANGUILLA => 'Anguila',
            Country::ANTARCTICA => 'Antártida',
            Country::ANTIGUA_AND_BARBUDA => 'Antigua y Barbuda',
            Country::ARGENTINA => 'Argentina',
            Country::ARMENIA => 'Armenia',
            Country::ARUBA => 'Aruba',
            Country::AUSTRALIA => 'Australia',
            Country::AUSTRIA => 'Austria',
            Country::AZERBAIJAN => 'Azerbaiyán',
            Country::BAHAMAS => 'Bahamas',
            Country::BAHRAIN => 'Baréin',
            Country::BANGLADESH => 'Bangladés',
            Country::BARBADOS => 'Barbados',
            Country::BELARUS => 'Bielorrusia',
            Country::BELGIUM => 'Bélgica',
            Country::BELIZE => 'Belice',
            Country::BENIN => 'Benín',
            Country::BERMUDA => 'Bermudas',
            Country::BHUTAN => 'Bután',
            Country::BOLIVIA => 'Bolivia',
            Country::BONAIRE => 'Bonaire',
            Country::BOSNIA_AND_HERZEGOVINA => 'Bosnia y Herzegovina',
            Country::BOTSWANA => 'Botswana',
            Country::BOUVET_ISLAND => 'Isla Bouvet',
            Country::BRAZIL => 'Brasil',
            Country::BRITISH_INDIAN_OCEAN_TERRITORY => 'Territorio Británico del Océano Índico',
            Country::BRUNEI => 'Brunéi',
            Country::BULGARIA => 'Bulgaria',
            Country::BURKINA_FASO => 'Burkina Faso',
            Country::BURUNDI => 'Burundi',
            Country::CAMBODIA => 'Camboya',
            Country::CAMEROON => 'Camerún',
            Country::CANADA => 'Canadá',
            Country::CAPE_VERDE => 'Cabo Verde',
            Country::CAYMAN_ISLANDS => 'Islas Caimán',
            Country::CENTRAL_AFRICAN_REPUBLIC => 'República Centroafricana',
            Country::CHAD => 'Chad',
            Country::CHILE => 'Chile',
            Country::CHINA => 'China',
            Country::CHRISTMAS_ISLAND => 'Isla de Navidad',
            Country::COCOS_KEELING_ISLANDS => 'Islas Cocos (Keeling)',
            Country::COLOMBIA => 'Colombia',
            Country::COMOROS => 'Comoras',
            Country::COOK_ISLANDS => 'Islas Cook',
            Country::COSTA_RICA => 'Costa Rica',
            Country::CROATIA => 'Croacia',
            Country::CUBA => 'Cuba',
            Country::CURACAO => 'Curaçao',
            Country::CYPRUS => 'Chipre',
            Country::CZECHIA => 'Chequia',
            Country::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'República Democrática del Congo',
            Country::DENMARK => 'Dinamarca',
            Country::DJIBOUTI => 'Yibuti',
            Country::DOMINICA => 'Dominica',
            Country::DOMINICAN_REPUBLIC => 'República Dominicana',
            Country::ECUADOR => 'Ecuador',
            Country::EGYPT => 'Egipto',
            Country::EL_SALVADOR => 'El Salvador',
            Country::EQUATORIAL_GUINEA => 'Guinea Ecuatorial',
            Country::ERITREA => 'Eritrea',
            Country::ESTONIA => 'Estonia',
            Country::ESWATINI => 'Esuatini',
            Country::ETHIOPIA => 'Etiopía',
            Country::FALKLAND_ISLANDS => 'Islas Malvinas',
            Country::FAROE_ISLANDS => 'Islas Faroe',
            Country::FIJI => 'Fiyi',
            Country::FINLAND => 'Finlandia',
            Country::FRANCE => 'Francia',
            Country::FRENCH_GUIANA => 'Guayana Francesa',
            Country::FRENCH_POLYNESIA => 'Polinesia Francesa',
            Country::FRENCH_SOUTHERN_TERRITORIES => 'Territorios Australes Franceses',
            Country::GABON => 'Gabón',
            Country::GAMBIA => 'Gambia',
            Country::GEORGIA => 'Georgia',
            Country::GERMANY => 'Alemania',
            Country::GHANA => 'Ghana',
            Country::GIBRALTAR => 'Gibraltar',
            Country::GREECE => 'Grecia',
            Country::GREENLAND => 'Groenlandia',
            Country::GRENADA => 'Granada',
            Country::GUADELOUPE => 'Guadalupe',
            Country::GUAM => 'Guam',
            Country::GUATEMALA => 'Guatemala',
            Country::GUERNSEY => 'Guernesey',
            Country::GUINEA => 'Guinea',
            Country::GUINEA_BISSAU => 'Guinea-Bisáu',
            Country::GUYANA => 'Guyana',
            Country::HAITI => 'Haití',
            Country::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'Isla Heard y las Islas McDonald',
            Country::HONDURAS => 'Honduras',
            Country::HONG_KONG => 'Hong Kong',
            Country::HUNGARY => 'Hungría',
            Country::ICELAND => 'Islandia',
            Country::INDIA => 'India',
            Country::INDONESIA => 'Indonesia',
            Country::IRAN => 'Irán',
            Country::IRAQ => 'Irak',
            Country::IRELAND => 'Irlanda',
            Country::ISLE_OF_MAN => 'Isla de Man',
            Country::ISRAEL => 'Israel',
            Country::ITALY => 'Italia',
            Country::IVORY_COAST => 'Costa de Marfil',
            Country::JAMAICA => 'Jamaica',
            Country::JAPAN => 'Japón',
            Country::JERSEY => 'Jersey',
            Country::JORDAN => 'Jordania',
            Country::KAZAKHSTAN => 'Kazajistán',
            Country::KENYA => 'Kenia',
            Country::KIRIBATI => 'Kiribati',
            Country::KOSOVO => 'Kosovo',
            Country::KUWAIT => 'Kuwait',
            Country::KYRGYZSTAN => 'Kirguistán',
            Country::LAOS => 'Laos',
            Country::LATVIA => 'Letonia',
            Country::LEBANON => 'Líbano',
            Country::LESOTHO => 'Lesoto',
            Country::LIBERIA => 'Liberia',
            Country::LIBYA => 'Libia',
            Country::LIECHTENSTEIN => 'Liechtenstein',
            Country::LITHUANIA => 'Lituania',
            Country::LUXEMBOURG => 'Luxemburgo',
            Country::MACAO => 'Macao',
            Country::MADAGASCAR => 'Madagascar',
            Country::MALAWI => 'Malawi',
            Country::MALAYSIA => 'Malasia',
            Country::MALDIVES => 'Maldivas',
            Country::MALI => 'Mali',
            Country::MALTA => 'Malta',
            Country::MARSHALL_ISLANDS => 'Islas Marshall',
            Country::MARTINIQUE => 'Martinica',
            Country::MAURITANIA => 'Mauritania',
            Country::MAURITIUS => 'Mauricio',
            Country::MAYOTTE => 'Mayotte',
            Country::MEXICO => 'México',
            Country::MICRONESIA => 'Micronesia',
            Country::MOLDOVA => 'Moldavia',
            Country::MONACO => 'Mónaco',
            Country::MONGOLIA => 'Mongolia',
            Country::MONTENEGRO => 'Montenegro',
            Country::MONTSERRAT => 'Montserrat',
            Country::MOROCCO => 'Marruecos',
            Country::MOZAMBIQUE => 'Mozambique',
            Country::MYANMAR => 'Birmania',
            Country::NAMIBIA => 'Namibia',
            Country::NAURU => 'Nauru',
            Country::NEPAL => 'Nepal',
            Country::NETHERLANDS => 'Países Bajos',
            Country::NEW_CALEDONIA => 'Nueva Caledonia',
            Country::NEW_ZEALAND => 'Nueva Zelanda',
            Country::NICARAGUA => 'Nicaragua',
            Country::NIGER => 'Níger',
            Country::NIGERIA => 'Nigeria',
            Country::NIUE => 'Niue',
            Country::NORFOLK_ISLAND => 'Isla Norfolk',
            Country::NORTHERN_MARIANA_ISLANDS => 'Islas Marianas del Norte',
            Country::NORTH_KOREA => 'Corea del Norte',
            Country::NORTH_MACEDONIA => 'Macedonia del Norte',
            Country::NORWAY => 'Noruega',
            Country::OMAN => 'Omán',
            Country::PAKISTAN => 'Pakistán',
            Country::PALAU => 'Palaos',
            Country::PALESTINE => 'Palestina',
            Country::PANAMA => 'Panamá',
            Country::PAPUA_NEW_GUINEA => 'Papúa Nueva Guinea',
            Country::PARAGUAY => 'Paraguay',
            Country::PERU => 'Perú',
            Country::PHILIPPINES => 'Filipinas',
            Country::PITCAIRN_ISLANDS => 'Islas Pitcairn',
            Country::POLAND => 'Polonia',
            Country::PORTUGAL => 'Portugal',
            Country::PUERTO_RICO => 'Puerto Rico',
            Country::QATAR => 'Catar',
            Country::REPUBLIC_OF_THE_CONGO => 'República del Congo',
            Country::REUNION => 'Reunión',
            Country::ROMANIA => 'Rumania',
            Country::RUSSIA => 'Rusia',
            Country::RWANDA => 'Rwanda',
            Country::SAINT_BARTHELEMY => 'San Bartolomé',
            Country::SAINT_HELENA => 'Santa Elena',
            Country::SAINT_KITTS_AND_NEVIS => 'San Cristóbal y Nieves',
            Country::SAINT_LUCIA => 'Santa Lucía',
            Country::SAINT_MARTIN => 'San Martín',
            Country::SAINT_PIERRE_AND_MIQUELON => 'San Pedro y Miquelón',
            Country::SAINT_VINCENT_AND_THE_GRENADINES => 'San Vicente y las Granadinas',
            Country::SAMOA => 'Samoa',
            Country::SAN_MARINO => 'San Marino',
            Country::SAO_TOME_AND_PRINCIPE => 'Sao Tomé y Príncipe',
            Country::SAUDI_ARABIA => 'Arabia Saudita',
            Country::SENEGAL => 'Senegal',
            Country::SERBIA => 'Serbia',
            Country::SEYCHELLES => 'Seychelles',
            Country::SIERRA_LEONE => 'Sierra Leona',
            Country::SINGAPORE => 'Singapur',
            Country::SINT_MAARTEN => 'Sint Maarten',
            Country::SLOVAKIA => 'Eslovaquia',
            Country::SLOVENIA => 'Eslovenia',
            Country::SOLOMON_ISLANDS => 'Islas Salomón',
            Country::SOMALIA => 'Somalia',
            Country::SOUTH_AFRICA => 'Sudáfrica',
            Country::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'Georgia del Sur y las Islas Sandwich del Sur',
            Country::SOUTH_KOREA => 'Corea del Sur',
            Country::SOUTH_SUDAN => 'Sudán del Sur',
            Country::SPAIN => 'España',
            Country::SRI_LANKA => 'Sri Lanka',
            Country::SUDAN => 'Sudán',
            Country::SURINAME => 'Surinam',
            Country::SVALBARD_AND_JAN_MAYEN => 'Svalbard y Jan Mayen',
            Country::SWEDEN => 'Suecia',
            Country::SWITZERLAND => 'Suiza',
            Country::SYRIA => 'Siria',
            Country::TAIWAN => 'Taiwán',
            Country::TAJIKISTAN => 'Tayikistán',
            Country::TANZANIA => 'Tanzania',
            Country::THAILAND => 'Tailandia',
            Country::TIMOR_LESTE => 'Timor-Leste',
            Country::TOGO => 'Togo',
            Country::TOKELAU => 'Tokelau',
            Country::TONGA => 'Tonga',
            Country::TRINIDAD_AND_TOBAGO => 'Trinidad y Tobago',
            Country::TUNISIA => 'Túnez',
            Country::TURKEY => 'Turquía',
            Country::TURKMENISTAN => 'Turkmenistán',
            Country::TURKS_AND_CAICOS_ISLANDS => 'Islas Turcas y Caicos',
            Country::TUVALU => 'Tuvalu',
            Country::UGANDA => 'Uganda',
            Country::UKRAINE => 'Ucrania',
            Country::UNITED_ARAB_EMIRATES => 'Emiratos Árabes Unidos',
            Country::UNITED_KINGDOM => 'Reino Unido',
            Country::UNITED_STATES_OF_AMERICA => 'Estados Unidos de América',
            Country::URUGUAY => 'Uruguay',
            Country::US_MINOR_OUTLYING_ISLANDS => 'Islas menores alejadas de EE.UU.',
            Country::UZBEKISTAN => 'Uzbekistán',
            Country::VANUATU => 'Vanuatu',
            Country::VATICAN_CITY => 'Ciudad del Vaticano',
            Country::VENEZUELA => 'Venezuela',
            Country::VIET_NAM => 'Vietnam',
            Country::VIRGIN_ISLANDS_BRITISH => 'Islas Vírgenes Británicas',
            Country::VIRGIN_ISLANDS_US => 'Islas Vírgenes de los EE.UU.',
            Country::WALLIS_AND_FUTUNA => 'Wallis y Futuna',
            Country::WESTERN_SAHARA => 'Sahara Occidental',
            Country::YEMEN => 'Yemen',
            Country::ZAMBIA => 'Zambia',
            Country::ZIMBABWE => 'Zimbabue',

            default => '***',
        };
    }
}
