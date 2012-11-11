<?php 
/*
Class: Planner Ipsum Generator
Thank you: Based on Pete Nelson's Bacon Ipsum Generator (@GunGeekATX)
Version: 1.0

*/

class PlannerIpsumGenerator {
		
	function GetWords($type) {


		$planning = array(
				'green house gas reduction strategy',
				'toolbox',
				'inventory',
				'sustainable',
				'equity',
				'equity',
				'environmental impact statement',
				'planned development district',
				'affordable housing',
				'global south',
				'congestion management',
				'high speed rail',
				'community engagement',
				'government code',
				'environmental quality act',
				'housing element',
				'general plan update',
				'land use',
				'zoning',
				'mixed use',
				'transit-oriented development',
				'sharrows',
				'bike network',
				'comprehensive planning',
				'retail',
				'commercial',
				'live-work space',
				'curb cuts',
				'in-fill',
				'exurb',
				'suburb',
				'urban',
				'rural',
				'low-income',
				'communities of concern',
				'commercial corridor',
				'bus rapid transit',
				'intercity rail',
				'floor area ratios',
				'maximum densities',
				'water',
				'sewer',
				'infrastructure',
				'waterways',
				'green space',
				'open space',
				'brownfield',
				'greenfield',
				'urbanism',
				'new urbanism',
				'not in my back yard',
				'yes in my back yard',
				'promenade',
				'gentrification',
				'value capture',
				'bike share',
				'attract investment',
				'redevelopment',
				'redevelopment agencies',
				'retail sales tax',
				'hotel taxes',
				'fiscalization of land use',
				'mode split',
				'mode share',
				'mode',
				'general plan',
				'housing element',
				'legislative',
				'transportation',
				'transport',
				'transit',
				'sprawl',
				'smart growth',
				'suburbanization',
				'parking',
				'parking meter',
				'minimum parking ratio',
				'maximum parking ratio',
				'local control',
				'home rule',
				'eyes on the street',
				'Jane Jacobs',
				'Robert Moses',
				'highway revolt',
				'overpass',
				'highway ramp',
				'highway exit',
				'limited access roadway',
				'drive through',
				'curb cut',
				'painted curb',
				'red curb',
				'manual on uniform traffic control devices',
				'crosswalk',
				'signal',
				'countdown',
				'signalized intersection',
				'intersection',
				'unmarked crosswalk',
				'legal crosswalk',
				'crossing guard',
				'speed limit',
				'school zone',
				'safe routes to school',
				'walk shed',
				'commute shed',
				'travel shed',
				'employment shed',
				'traffic demand management',
				'loop detectors',
				'congestion pricing',
				'value capture',
				'transportation finance',
				'ecosystem',
				'hydrology',
				'riparian buffer',
				'easement',
				'transferable development right',
				'arterial',
				'food security',
				'agricultural preservation',
				'air rights',
				'Census tract',
				'block group',
				'block level',
				'block face',
				'layer',
				'spatial analysis',
				'geography',
				'geospatial analysis',
				'geospatial',
				'landscape',
				'landscape architecture',
				'fiscal impact analysis',
				'market study',
				'market analysis',
				'area median income',
				'35% of area median income',
				'homeless',
				'gentrification',
				'influx of wealth',
				'population density',
				'streetscape',
				'streetscape improvement',
				'prioritize',
				'signage',
				'public space',
				'land area',
				'city council',
				'government code',
				'planning department',
				'plan',
				'planner',
				'planning',
				'public works',
				'public works department',
				'bicycle',
				'bike',
				'tricycle',
				'8-80',
				'school enrollment',
				'facilities planning',
				'compatible uses',
				'accessory use',
				'dwelling unit',
				'county',
				'place',
				'urbanized area',
				'Census',
				'Census-designated place',
				'prime farmland',
				'unique farmland',
				'farmland of statewide importance',
				'developed land',
				'infill',
				'vehicle miles traveled',
				'level of service',
				'municipal government',
				'parks and recreation',
				'green',
				'green tyranny',
				'vacant',
				'vacancy',
				'storefront',
				'ground floor retail',
				'ground lease',
				'commercial',
				'industrial',
				'reclamation',
				'wetland',
				'congestion',
				'traffic',
				'parallel parking',
				'pay and display',
				'highest and best use',
				'federal housing administration',
				'federal highway administration',
				'new market tax credits',
				'skyscrapers',
				'Abu Dhabi',
				'Shanghai',
				'public square',
				'agora',
				'medina',
				'riverwalk',
				'esplanade',
				'island',
				'toll plaza',
				'toll booth',
				'valley',
				'unincorporated',
				'disadvantaged unincorporated community',
				'community',
				'Levittown',
				'efficiency',
				'loops and lollipops',
				'lollipops on a stick',
				'gridiron',
				'fragmented parallel',
				'warped parallel',
				'metropolitan planning organization',
				'local enforcement agency',
				'needs improvement',
				'implementation',
				'state funding',
				'local funding',
				'local funding match',
				'intersection density',
				'household density',
				'sustainable communities strategy',
				'organic',
				'modernism',
				'modernist tradition',
				'Le Corbusier',
				'elevated super highway',
				'superhighway',
				'sidewalk',
				'parks',
				'parklet',
				'parking',
				'industrialized city',
				'cosmological pattern',
				'garden city',
				'Commissioners Plan',
				'Euclid v. Ambler',
				'ordinance',
				'zoning',
				'administrative act',
				'ministerial act',
				'external',
				'internal',
				'groundwater conservation',
				'rural broadband',
				'rising property values',
				'declining property values',
				'origination fee',
				'net operating income',
				'effective gross income',
				'amortization',
				'illegal secondary structures',
				'building code',
				'parking study',
				'parking ratio',
				'building masses',
				'road hierarchy',
				'water table',
				'topography',
				'topology',
				'normative theory',
				'functional',
				'decision theory',
				'normative',
				'ideal',
				'community garden',
				'groceries',
				'food shed',
				'site plan',
				'unit plan',
				'compass school',
				'form school',
				'feng shui',
				'harmony with nature',
				'territorial expansion',
				'youth',
				'children and families',
				'schools',
				'concept',
				'garage',
				'street parking',
				'placard abuse',
				'axis',
				'process-driven planning',
				'outcome-driven planning',
				'auction',
				'equestrian statues',
				'Hawthorne effect',
				'feedback',
				'facilitate',
				'exercise',
				'public health',
				'regional planning',
				'urban planning',
				'rural planning',
				'city planning',
				'developing world',
				'developed world'

		);

		$filler = array(
				'in',
				'if',
				'but',
				'the',
				'a',
				'an',
				'maybe',
				'or',
				'and',
				'nor',
				'neither',
				'either'
		);


		if ($type == 'planning-and-filler')
			$words = array_merge($planning, $filler);
		else
			$words = $planning;


		shuffle($words);

		return $words;

	}
	

	function Make_a_Sentence($type)	{
		// A sentence should be bewteen 4 and 15 words.
		$sentence = '';
		$length = rand(4, 15);
		
		// Add a little more randomness to commas, about 2/3rds of the time
		$includeComma = $length >= 7 && rand(0,2) > 0;

		$words = $this->GetWords($type);
			
		if (count($words) > 0)
		{
			// Capitalize the first word.
			$words[0] =  ucfirst($words[0]);

			for ($i = 0; $i < $length; $i++) {
				
				if ($i > 0) {
					if ($i >= 3 && $i != $length - 1 && $includeComma) {
						
						if (rand(0,1) == 1) {	
							$sentence = rtrim($sentence) . ', ';
							$includeComma = false;
						}
						else 
							$sentence .= ' ';
					}
					else
						$sentence .= ' ';
				
				}			

				$sentence .= $words[$i];
			}				
			

			$sentence = rtrim($sentence) . '. ';
		}

		return $sentence;

	}

	public function Make_a_Paragraph($type)	{
		// A paragraph should be bewteen 4 and 7 sentences.

		$para = '';
		$length = rand(4, 7);
		
		for ($i = 0; $i < $length; $i++)
			$para .= $this->Make_a_Sentence($type) . ' ';
		
		return rtrim($para);

	}

	public function Make_Some_Planning_Filler(
		$type = 'planning-and-filler', 
		$number_of_paragraphs = 5, 
		$start_with_lorem = true, 
		$number_of_sentences = 0) {

		$paragraphs = array();
		if ($number_of_sentences > 0)
			$number_of_paragraphs = 1;

		$words = '';

		for ($i = 0; $i < $number_of_paragraphs; $i++) {

			if ($number_of_sentences > 0) {
				for ($s = 0; $s < $number_of_sentences; $s++)
					$words .= $this->Make_a_Sentence($type);
			}
			else
				$words = $this->Make_a_Paragraph($type);

			if ($i == 0 && $start_with_lorem && count($words) > 0) { 	
				$words[0] = strtolower($words[0]);
				$words = 'Planning ' . $words;
			}
					
			$paragraphs[]  = rtrim($words);

		}

		return $paragraphs;

	}


}
