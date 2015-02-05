<?php namespace App\Utilities;

class AreaData {

	private static $continents = array(
		array(
			"ISO2" => "AQ",
			"ISO3" => "ATA",
			"name" => "Antarctica",
			"type" => "continent",
			"claimants" => [ "GBR", "NZL", "FRA", "NOR", "AUS", "CHL", "ARG"]
		),
	);

	private static $overseas_territories = array(
		array(
			"ISO2" => "AC",
			"ISO3" => "ASC",
			"name" => "Ascension Island",
			"type" => "overseas_territory_part",
			"class" => "island",
			"part_of" => "SH",
			"administering_state" => "GBR",
			"claimants" => ["GBR"]
		),
		array(
			"ISO2" => "AI",
			"ISO3" => "AIA",
			"name" => "Anguilla",
			"type" => "overseas_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "GBR",
			"claimants" => ["GBR"]
		),
		array(
			"ISO2" => "SH",
			"ISO3" => "SHN",
			"name" => "Saint Helena, Ascension and Tristan da Cunha",
			"names" => ["en" => ["official" => "Saint Helena, Ascension and Tristan da Cunha"]],
			"type" => "overseas_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "GBR",
			"claimants" => ["GBR"]
		),
		array(
			"ISO2" => "BM",
			"ISO3" => "BMU",
			"name" => "Bermuda",
			"names" => ["en" => ["official" => "the Bermudas"]],
			"type" => "overseas_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "GBR",
			"claimants" => ["GBR"]
		),
	);


	private static $unincorporated_territories = array(
		array(
			"ISO2" => "AS",
			"ISO3" => "ASM",
			"name" => "American Samoa",
			"names" => ["en" => ["official" => "American Samoa"]],
			"type" => "unincorporated_unorganized_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "US",
			"claimants" => ["US"]
		),
		array(
			"ISO2" => "GU",
			"ISO3" => "GUM",
			"name" => "Guam",
			"names" => ["en" => ["official" => "Guam"]],
			"type" => "unincorporated_organized_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "US",
			"claimants" => ["US"]
		),
		array(
			"ISO2" => "MP",
			"ISO3" => "MNP",
			"name" => "Northern Mariana Islands",
			"names" => ["en" => ["official" => "Commonwealth of the Northern Mariana Islands"]],
			"type" => "unincorporated_organized_territory",
			"class" => "representative_democracy",
			"administering_state" => "US",
			"claimants" => ["US"]
		),
		array(
			"ISO2" => "PR",
			"ISO3" => "PRI",
			"name" => "Puerto Rico",
			"names" => ["en" => ["official" => "Commonwealth of Puerto Rico"]],
			"type" => "unincorporated_organized_territory",
			"class" => "commonwealth_us",
			"administering_state" => "US",
			"claimants" => ["US"]
		),
		array(
			"ISO2" => "VI",
			"ISO3" => "VIR",
			"name" => "U.S. Virgin Islands",
			"names" => ["en" => ["official" => "Virgin Islands of the United States"]],
			"type" => "unincorporated_organized_territory",
			"class" => "non-self-governing-territory",
			"administering_state" => "US",
			"claimants" => ["US"]
		),
	);


	private static $constituent_countries = array(
		array(
			"ISO2" => "AW",
			"ISO3" => "ABW",
			"name" => "Aruba",
			"names" => ["en" => ["official" => "Aruba"]],
			"type" => "constituent_country",
			"class" => "representative_democracy",
			"administering_state" => "NL",
			"claimants" => ["NL"]
		),
	);


	private static $areaDataMain = array(
		array(
			"ISO2" => "AF",
			"ISO3" => "AFG",
			"name" => "Afghanistan",
			"names" => ["en" => ["official" => "Islamic Republic of Afghanistan"]],
			"type" => "sovereign_state",
			"class" => "republic_islamic"
		),
		array(
			"ISO2" => "AL",
			"ISO3" => "ALB",
			"name" => "Albania",
			"names" => ["en" => ["official" => "Republic of Albania"]],
			"type" => "sovereign_state",
			"class" => "republic_parliamentary_unitary"
		),
		array(
			"ISO2" => "DZ",
			"ISO3" => "DZA",
			"name" => "Algeria",
			"names" => ["en" => ["official" => "People's Democratic Republic of Algeria"]],
			"type" => "sovereign_state",
			"class" => "republic_semi_presidential"
		),
		array(
			"ISO2" => "AD",
			"ISO3" => "AND",
			"name" => "Andorra",
			"names" => ["en" => ["official" => "Principality of Andorra"]],
			"type" => "sovereign_state",
			"class" => "co-principality"
		),
		array(
			"ISO2" => "AO",
			"ISO3" => "AGO",
			"name" => "Angola",
			"names" => ["en" => ["official" => "Republic of Angola"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),
		array(
			"ISO2" => "AG",
			"ISO3" => "ATG",
			"name" => "Antigua and Barbuda",
			"names" => ["en" => ["official" => "Antigua and Barbuda"]],
			"type" => "sovereign_state",
			"class" => "commonwealth_realm"
		),
		array(
			"ISO2" => "AR",
			"ISO3" => "ARG",
			"name" => "Argentina",
			"names" => ["en" => ["official" => "Argentine Republic"]],
			"type" => "sovereign_state",
			"class" => "republic_federal"
		),
		array(
			"ISO2" => "AM",
			"ISO3" => "ARM",
			"name" => "Armenia",
			"names" => ["en" => ["official" => "Republic of Armenia"]],
			"type" => "sovereign_state",
			"class" => "republic_semi_presidential"
		),
		array(
			"ISO2" => "AU",
			"ISO3" => "AUS",
			"name" => "Australia",
			"names" => ["en" => ["official" => "Commonwealth of Australia"]],
			"type" => "sovereign_state",
			"class" => "parliamentary_democracy_and_constitutional_monarchy"
		),
		array(
			"ISO2" => "AT",
			"ISO3" => "AUT",
			"name" => "Austria",
			"names" => ["en" => ["official" => "Republic of Austria"]],
			"type" => "sovereign_state",
			"class" => "republic_federal"
		),
		array(
			"ISO2" => "AZ",
			"ISO3" => "AZE",
			"name" => "Republic of Azerbaijan",
			"names" => ["en" => ["official" => "Republic of Austria"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),
		array(
			"ISO2" => "BS",
			"ISO3" => "BHS",
			"name" => "Bahamas, The",
			"names" => ["en" => ["official" => "Commonwealth of The Bahamas"]],
			"type" => "sovereign_state",
			"class" => "commonwealth_realm"
		),
		array(
			"ISO2" => "BH",
			"ISO3" => "BHR",
			"name" => "Bahrain",
			"names" => ["en" => ["official" => "Kingdom of Bahrain"]],
			"type" => "sovereign_state",
			"class" => "monarchy"
		),
		array(
			"ISO2" => "BD",
			"ISO3" => "BGD",
			"name" => "Bangladesh",
			"names" => ["en" => ["official" => "People's Republic of Bangladesh"]],
			"type" => "sovereign_state",
			"class" => "republic_parliamentary_unitary"
		),
		array(
			"ISO2" => "BB",
			"ISO3" => "BRB",
			"name" => "Barbados",
			"names" => ["en" => ["official" => "Barbados"]],
			"type" => "sovereign_state",
			"class" => "commonwealth_realm"
		),
		array(
			"ISO2" => "BY",
			"ISO3" => "BLR",
			"name" => "Belarus",
			"names" => ["en" => ["official" => "Republic of Belarus"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),
		array(
			"ISO2" => "BE",
			"ISO3" => "BEL",
			"name" => "Belgium",
			"names" => ["en" => ["official" => "Kingdom of Belgium"]],
			"type" => "sovereign_state",
			"class" => "parliamentary_constitutional_monarchy"
		),
		array(
			"ISO2" => "BZ",
			"ISO3" => "BLZ",
			"name" => "Belize",
			"names" => ["en" => ["official" => "Belize"]],
			"type" => "sovereign_state",
			"class" => "parliamentary_constitutional_monarchy"
		),
		array(
			"ISO2" => "BJ",
			"ISO3" => "BEN",
			"name" => "Republic of Benin",
			"names" => ["en" => ["official" => "Belize"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),
		array(
			"ISO2" => "BT",
			"ISO3" => "BTN",
			"name" => "Bhutan",
			"names" => ["en" => ["official" => "Kingdom of Bhutan"]],
			"type" => "sovereign_state",
			"class" => "parliamentary_constitutional_monarchy"
		),
		array(
			"ISO2" => "BO",
			"ISO3" => "BOL",
			"name" => "Bolivia",
			"names" => ["en" => ["official" => "Plurinational State of Bolivia"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),
		array(
			"ISO2" => "BA",
			"ISO3" => "BIH",
			"name" => "Bosnia And Herzegovina",
			"names" => ["en" => ["official" => "Bosnia and Herzegovina"]],
			"type" => "sovereign_state",
			"class" => "republic_parliamentary_federal"
		),
		array(
			"ISO2" => "BW",
			"ISO3" => "BWA",
			"name" => "Botswana",
			"names" => ["en" => ["official" => "Republic of Botswana"]],
			"type" => "sovereign_state",
			"class" => "republic_parliamentary"
		),
		array(
			"ISO2" => "BR",
			"ISO3" => "BRA",
			"name" => "Brazil",
			"names" => ["en" => ["official" => "Federative Republic of Brazil"]],
			"type" => "sovereign_state",
			"class" => "republic_federal"
		),
		array(
			"ISO2" => "BN",
			"ISO3" => "BRN",
			"name" => "Brunei",
			"names" => ["en" => ["official" => "Nation of Brunei, the Abode of Peace"]],
			"type" => "sovereign_state",
			"class" => "unitary_islamic_absolute_monarchy"
		),
		array(
			"ISO2" => "BG",
			"ISO3" => "BGR",
			"name" => "Bulgaria",
			"names" => ["en" => ["official" => "Republic of Bulgaria"]],
			"type" => "sovereign_state",
			"class" => "republic_parliamentary"
		),
		array(
			"ISO2" => "BF",
			"ISO3" => "BFA",
			"name" => "Burkina Faso",
			"names" => ["en" => ["official" => "Burkina Faso"]],
			"type" => "sovereign_state",
			"class" => "republic_semi_presidential"
		),
		array(
			"ISO2" => "BI",
			"ISO3" => "BDI",
			"name" => "Burundi",
			"names" => ["en" => ["official" => "Republic of Burundi"]],
			"type" => "sovereign_state",
			"class" => "republic_semi_presidential"
		),

















		array(
			"ISO2" => "MM",
			"ISO3" => "MMR",
			"name" => "Myanmar",
			"names" => ["en" => ["official" => "Republic of the Union of Myanmar"]],
			"type" => "sovereign_state",
			"class" => "republic_presidential"
		),

		array(
			"ISO2" => "AE",
			"ISO3" => "ARE",
			"name" => "United Arab Emirates",
			"type" => "sovereign_state",
			"class" => "federation"
		),


		array(
			"ISO2" => "AX",
			"ISO3" => "ALA",
			"name" => "Åland Islands",
			"type" => "autonomous_region",
			"member_of" => "FI",
		),
















		array(
			"ISO2" => "CA",
			"ISO3" => "CAN",
			"name" => "Canada",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CD",
			"ISO3" => "COD",
			"name" => "Congo, Democratic Republic",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CF",
			"ISO3" => "CAF",
			"name" => "Central African Republic",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CG",
			"ISO3" => "COG",
			"name" => "Congo Republic",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CH",
			"ISO3" => "CHE",
			"name" => "Switzerland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CI",
			"ISO3" => "CIV",
			"name" => "Ivory Coast", // Cote D'ivoire
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CL",
			"ISO3" => "CHL",
			"name" => "Chile",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CM",
			"ISO3" => "CMR",
			"name" => "Cameroon",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CN",
			"ISO3" => "CHN",
			"name" => "China",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CO",
			"ISO3" => "COL",
			"name" => "Colombia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CR",
			"ISO3" => "CRI",
			"name" => "Costa Rica",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CU",
			"ISO3" => "CUB",
			"name" => "Cuba",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CV",
			"ISO3" => "CPV",
			"name" => "Cape Verde",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CY",
			"ISO3" => "CYP",
			"name" => "Cyprus",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "CZ",
			"ISO3" => "CZE",
			"name" => "Czech Republic",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "DE",
			"ISO3" => "DEU",
			"name" => "Germany",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "DJ",
			"ISO3" => "DJI",
			"name" => "Djibouti",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "DK",
			"ISO3" => "DNK",
			"name" => "Denmark",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "DM",
			"ISO3" => "DMA",
			"name" => "Dominica",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "DO",
			"ISO3" => "DOM",
			"name" => "Dominican Republic",
			"type" => "sovereign_state",
		),

		array(
			"ISO2" => "EC",
			"ISO3" => "ECU",
			"name" => "Ecuador",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "EE",
			"ISO3" => "EST",
			"name" => "Estonia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "EG",
			"ISO3" => "EGY",
			"name" => "Egypt",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "EH",
			"ISO3" => "ESH",
			"name" => "Western Sahara",
			"type" => "disputed_territory",
		),
		array(
			"ISO2" => "ER",
			"ISO3" => "ERI",
			"name" => "Eritrea",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ES",
			"ISO3" => "ESP",
			"name" => "Spain",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ET",
			"ISO3" => "ETH",
			"name" => "Ethiopia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "FI",
			"ISO3" => "FIN",
			"name" => "Finland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "FJ",
			"ISO3" => "FJI",
			"name" => "Fiji",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "FM",
			"ISO3" => "FSM",
			"name" => "Federated States Of Micronesia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "FO",
			"ISO3" => "FRO",
			"name" => "Faroe Islands",
			"type" => "constituent",
			"member_of" => "DK",
		),
		array(
			"ISO2" => "FR",
			"ISO3" => "FRA",
			"name" => "France",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GA",
			"ISO3" => "GAB",
			"name" => "Gabon",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GB",
			"ISO3" => "GBR",
			"name" => "United Kingdom",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GD",
			"ISO3" => "GRD",
			"name" => "Grenada",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GE",
			"ISO3" => "GEO",
			"name" => "Georgia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GH",
			"ISO3" => "GHA",
			"name" => "Ghana",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GL",
			"ISO3" => "GRL",
			"name" => "Greenland",
			"type" => "constituent",
			"member_of" => "DK",
		),
		array(
			"ISO2" => "GM",
			"ISO3" => "GMB",
			"name" => "Gambia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GN",
			"ISO3" => "GIN",
			"name" => "Guinea",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GP",
			"ISO3" => "GLP",
			"name" => "Guadeloupe",
			"type" => "overseas_region",
			"member_of" => "FR",
		),
		array(
			"ISO2" => "GQ",
			"ISO3" => "GNQ",
			"name" => "Equatorial Guinea",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GR",
			"ISO3" => "GRC",
			"name" => "Greece",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GT",
			"ISO3" => "GTM",
			"name" => "Guatemala",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GW",
			"ISO3" => "GNB",
			"name" => "Guinea-bissau",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "GY",
			"ISO3" => "GUY",
			"name" => "Guyana",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "HN",
			"ISO3" => "HND",
			"name" => "Honduras",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "HR",
			"ISO3" => "HRV",
			"name" => "Croatia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "HT",
			"ISO3" => "HTI",
			"name" => "Haiti",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "HU",
			"ISO3" => "HUN",
			"name" => "Hungary",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ID",
			"ISO3" => "IDN",
			"name" => "Indonesia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IE",
			"ISO3" => "IRL",
			"name" => "Ireland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IL",
			"ISO3" => "ISR",
			"name" => "Israel",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IN",
			"ISO3" => "IND",
			"name" => "India",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IO",
			"ISO3" => "IOT",
			"name" => "British Indian Ocean Territory",
			"type" => "constituent",
			"member_of" => "GB",
		),
		array(
			"ISO2" => "IQ",
			"ISO3" => "IRQ",
			"name" => "Iraq",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IR",
			"ISO3" => "IRN",
			"name" => "Iran",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IS",
			"ISO3" => "ISL",
			"name" => "Iceland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "IT",
			"ISO3" => "ITA",
			"name" => "Italy",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "JE",
			"ISO3" => "JEY",
			"name" => "Jersey",
			"type" => "bailiwick",
			"member_of" => "GB",
		),
		array(
			"ISO2" => "JM",
			"ISO3" => "JAM",
			"name" => "Jamaica",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "JO",
			"ISO3" => "JOR",
			"name" => "Jordan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "JP",
			"ISO3" => "JPN",
			"name" => "Japan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KE",
			"ISO3" => "KEN",
			"name" => "Kenya",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KG",
			"ISO3" => "KGZ",
			"name" => "Kyrgyzstan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KH",
			"ISO3" => "KHM",
			"name" => "Cambodia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KI",
			"ISO3" => "KIR",
			"name" => "Kiribati",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KM",
			"ISO3" => "COM",
			"name" => "Comoros",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KN",
			"ISO3" => "KNA",
			"name" => "Saint Kitts And Nevis",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KP",
			"ISO3" => "PRK",
			"name" => "Korea, North",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KR",
			"ISO3" => "KOR",
			"name" => "Korea, South",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KW",
			"ISO3" => "KWT",
			"name" => "Kuwait",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "KZ",
			"ISO3" => "KAZ",
			"name" => "Kazakhstan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LA",
			"ISO3" => "LAO",
			"name" => "Laos",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LB",
			"ISO3" => "LBN",
			"name" => "Lebanon",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LC",
			"ISO3" => "LCA",
			"name" => "Saint Lucia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LI",
			"ISO3" => "LIE",
			"name" => "Liechtenstein",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LK",
			"ISO3" => "LKA",
			"name" => "Sri Lanka",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LR",
			"ISO3" => "LBR",
			"name" => "Liberia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LS",
			"ISO3" => "LSO",
			"name" => "Lesotho",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LT",
			"ISO3" => "LTU",
			"name" => "Lithuania",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LU",
			"ISO3" => "LUX",
			"name" => "Luxembourg",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LV",
			"ISO3" => "LVA",
			"name" => "Latvia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "LY",
			"ISO3" => "LBY",
			"name" => "Libya",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MA",
			"ISO3" => "MAR",
			"name" => "Morocco",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MC",
			"ISO3" => "MCO",
			"name" => "Monaco",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MD",
			"ISO3" => "MDA",
			"name" => "Moldova",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ME",
			"ISO3" => "MNE",
			"name" => "Montenegro",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MG",
			"ISO3" => "MDG",
			"name" => "Madagascar",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MH",
			"ISO3" => "MHL",
			"name" => "Marshall Islands",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MK",
			"ISO3" => "MKD",
			"name" => "Macedonia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ML",
			"ISO3" => "MLI",
			"name" => "Mali",
			"type" => "sovereign_state",
		),

		array(
			"ISO2" => "MN",
			"ISO3" => "MNG",
			"name" => "Mongolia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MO",
			"ISO3" => "MAC",
			"name" => "Macau",
			"type" => "constituent",
			"member_of" => "CN",
		),
		array(
			"ISO2" => "MQ",
			"ISO3" => "MTQ",
			"name" => "Martinique",
			"type" => "overseas_region",
			"member_of" => "FR",
		),
		array(
			"ISO2" => "MR",
			"ISO3" => "MRT",
			"name" => "Mauritania",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MS",
			"ISO3" => "MSR",
			"name" => "Montserrat",
			"type" => "overseas_territory",
			"member_of" => "GB",
		),
		array(
			"ISO2" => "MT",
			"ISO3" => "MLT",
			"name" => "Malta",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MU",
			"ISO3" => "MUS",
			"name" => "Mauritius",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MV",
			"ISO3" => "MDV",
			"name" => "Maldives",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MW",
			"ISO3" => "MWI",
			"name" => "Malawi",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MX",
			"ISO3" => "MEX",
			"name" => "Mexico",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MY",
			"ISO3" => "MYS",
			"name" => "Malaysia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "MZ",
			"ISO3" => "MOZ",
			"name" => "Mozambique",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NA",
			"ISO3" => "NAM",
			"name" => "Namibia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NE",
			"ISO3" => "NER",
			"name" => "Niger",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NG",
			"ISO3" => "NGA",
			"name" => "Nigeria",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NI",
			"ISO3" => "NIC",
			"name" => "Nicaragua",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NL",
			"ISO3" => "NLD",
			"name" => "Netherlands",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NO",
			"ISO3" => "NOR",
			"name" => "Norway",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NP",
			"ISO3" => "NPL",
			"name" => "Nepal",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NR",
			"ISO3" => "NRL",
			"name" => "Nauru",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "NZ",
			"ISO3" => "NZL",
			"name" => "New Zealand",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "OM",
			"ISO3" => "OMN",
			"name" => "Oman",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PA",
			"ISO3" => "PAN",
			"name" => "Panama",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PE",
			"ISO3" => "PER",
			"name" => "Peru",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PG",
			"ISO3" => "PNG",
			"name" => "Papua New Guinea",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PH",
			"ISO3" => "PHL",
			"name" => "Philippines",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PK",
			"ISO3" => "PAK",
			"name" => "Pakistan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PL",
			"ISO3" => "POL",
			"name" => "Poland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PS",
			"ISO3" => "PSE",
			"name" => "Palestine",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PT",
			"ISO3" => "PRT",
			"name" => "Portugal",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PW",
			"ISO3" => "PLW",
			"name" => "Palau",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "PY",
			"ISO3" => "PRY",
			"name" => "Paraguay",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "QA",
			"ISO3" => "QAT",
			"name" => "Qatar",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "RE",
			"ISO3" => "REU",
			"name" => "Réunion",
			"member_of" => "FR",
			"type" => "overseas_region",
		),
		array(
			"ISO2" => "RO",
			"ISO3" => "ROU",
			"name" => "Romania",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "RS",
			"ISO3" => "SRB",
			"name" => "Serbia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "RU",
			"ISO3" => "RUS",
			"name" => "Russia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "RW",
			"ISO3" => "RWA",
			"name" => "Rwanda",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SA",
			"ISO3" => "SAU",
			"name" => "Saudi Arabia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SB",
			"ISO3" => "SLB",
			"name" => "Solomon Islands",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SC",
			"ISO3" => "SYC",
			"name" => "Seychelles",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SD",
			"ISO3" => "SDN",
			"name" => "Sudan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SE",
			"ISO3" => "SWE",
			"name" => "Sweden",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SG",
			"ISO3" => "SGP",
			"name" => "Singapore",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SH",
			"ISO3" => "SHN",
			"name" => "Saint Helena",
			"type" => "overseas_territory",
			"member_of" => "GB",
		),
		array(
			"ISO2" => "SI",
			"ISO3" => "SVN",
			"name" => "Slovenia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SK",
			"ISO3" => "SVK",
			"name" => "Slovakia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SL",
			"ISO3" => "SLE",
			"name" => "Sierra Leone",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SM",
			"ISO3" => "SMR",
			"name" => "San Marino",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SN",
			"ISO3" => "SEN",
			"name" => "Senegal",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SO",
			"ISO3" => "SOM",
			"name" => "Somalia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SR",
			"ISO3" => "SUR",
			"name" => "Suriname",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SS",
			"ISO3" => "SSD",
			"name" => "South Sudan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ST",
			"ISO3" => "STP",
			"name" => "Sao Tome And Principe",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SV",
			"ISO3" => "SLV",
			"name" => "El Salvador",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SY",
			"ISO3" => "SYR",
			"name" => "Syria",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "SZ",
			"ISO3" => "SWZ",
			"name" => "Swaziland",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TD",
			"ISO3" => "TCD",
			"name" => "Chad",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TF",
			"ISO3" => "ATF",
			"name" => "French Southern and Antarctic Lands",
			"type" => "overseas_territory",
			"member_of" => "FR",
		),
		array(
			"ISO2" => "TG",
			"ISO3" => "TGO",
			"name" => "Togo",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TH",
			"ISO3" => "THA",
			"name" => "Thailand",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TJ",
			"ISO3" => "TJK",
			"name" => "Tajikistan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TL",
			"ISO3" => "TLS",
			"name" => "East Timor",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TM",
			"ISO3" => "TKM",
			"name" => "Turkmenistan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TN",
			"ISO3" => "TUN",
			"name" => "Tunisia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TO",
			"ISO3" => "TON",
			"name" => "Tonga",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TR",
			"ISO3" => "TUR",
			"name" => "Turkey",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TT",
			"ISO3" => "TTO",
			"name" => "Trinidad And Tobago",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TV",
			"ISO3" => "TUV",
			"name" => "Tuvalu",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "TW",
			"ISO3" => "TWN",
			"name" => "Taiwan",
			"type" => "constituent",
			"member_of" => "CN",
		),
		array(
			"ISO2" => "TZ",
			"ISO3" => "TZA",
			"name" => "Tanzania",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "UA",
			"ISO3" => "UKR",
			"name" => "Ukraine",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "UG",
			"ISO3" => "UGA",
			"name" => "Uganda",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "US",
			"ISO3" => "USA",
			"name" => "United States",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "UY",
			"ISO3" => "URY",
			"name" => "Uruguay",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "UZ",
			"ISO3" => "UZB",
			"name" => "Uzbekistan",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "VA",
			"ISO3" => "VAT",
			"name" => "Vatican City",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "VC",
			"ISO3" => "VCT",
			"name" => "Saint Vincent And The Grenadines",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "VE",
			"ISO3" => "VEN",
			"name" => "Venezuela",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "VN",
			"ISO3" => "VNM",
			"name" => "Vietnam",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "VU",
			"ISO3" => "VUT",
			"name" => "Vanuatu",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "WS",
			"ISO3" => "WSM",
			"name" => "Samoa",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "YE",
			"ISO3" => "YEM",
			"name" => "Yemen",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ZA",
			"ISO3" => "ZAF",
			"name" => "South Africa",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ZM",
			"ISO3" => "ZMB",
			"name" => "Zambia",
			"type" => "sovereign_state",
		),
		array(
			"ISO2" => "ZW",
			"ISO3" => "ZWE",
			"name" => "Zimbabwe",
			"type" => "sovereign_state",
		)
	);



	/**
	 * class constructor
	 * access to this class is private as to implement the singleton pattern.
	 *
	 * @access private
	 */
	public function __construct() {

	}

	public static function getMainData() {
		return self::$areaDataMain;
	}

}