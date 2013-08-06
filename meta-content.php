<?php
$content = array(
	'intro' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'image' => array(
		    	'type' => 'image',
		    	'label' => 'Your Profile Image',
		    	'required' => true
		    ),
			'title' => array(
				'type' => 'text',
				'label' => 'Title',
				'required' => true,
				'tip' => 'This is the title displayed within the page intro.'
			),
			'text' => array(
				'type' => 'wysiwyg',
				'label' => 'Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed under the intro title.'
			),
			'button' => array(
				'type' => 'text',
				'label' => 'Button Text',
				'required' => true,
				'tip' => 'The text you wish to use for the button that links to the next (Work) section.'
			)
		)
	),
	'work' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Work Section Title',
				'required' => true,
				'tip' => 'This is the title displayed at the top of the "Work" section.'
			),
			'header-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Work Section Header Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the top of the "Work" section.'
			),
			'work-types' => array(
				'type' => 'repeatable',
				'title' => 'Work Types',
				'description' => 'Add work types.',
				'empty-to-show' => 3,
				'elements' => array(
					'title' => array(
						'type' => 'text',
						'label' => 'Feature Title'
					),
					'text' => array(
						'type' => 'wysiwyg',
						'label' => 'Feature Text'
					)
				)
			),
			'footer-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Section Footer Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the bottom of the "Work" section.'
			),
			'button' => array(
				'type' => 'text',
				'label' => 'Portfolio Button Text',
				'required' => true,
				'tip' => 'The text you wish to use for the button that links to the next (Portfolio) section.'
			)
		)
	),
	'portfolio' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Portfolio Title',
				'required' => true,
				'tip' => 'This is the title displayed at the top of the "Portfolio" section.'
			),
			'header-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Portfolio Header Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the top of the "Portfolio" section.'
			),
			'items' => array(
				'type' => 'repeatable',
				'title' => 'Portfolio Items',
				'description' => 'Add portfolio items.',
				'empty-to-show' => 3,
				'elements' => array(
					'screenshot' => array(
						'type' => 'image',
						'label' => 'Screenshot',
						'versions' => array(
							'portfolio' => array(
								'crop' => array( 'center', 'center' )
							)
						)
					),
					'title' => array(
						'type' => 'text',
						'label' => 'Portfolio Item Title'
					),
					'text' => array(
						'type' => 'wysiwyg',
						'label' => 'Portfolio Item Text'
					),
					'link' => array(
						'type' => 'text',
						'label' => 'Portfolio Item Link'
					)
				)
			),
			'footer-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Portfolio Footer Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the bottom of the "Portfolio" section.'
			),
			'button' => array(
				'type' => 'text',
				'label' => 'Contact Button Text',
				'required' => true,
				'tip' => 'The text you wish to use for the button that links to the next (Contact) section.'
			)
		)
	),
	'contact' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Contact Title',
				'required' => true,
				'tip' => 'This is the title displayed at the top of the "Contact" section.'
			),
			'header-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Contact Header Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the top of the "Contact" section.'
			),
			'twitter' => array(
				'type' => 'text',
				'label' => 'Twitter URL'
			),
			'facebook' => array(
				'type' => 'text',
				'label' => 'Facebook URL'
			),
			'google' => array(
				'type' => 'text',
				'label' => 'Google URL'
			),
			'dribbble' => array(
				'type' => 'text',
				'label' => 'Dribbble URL'
			),
			'github' => array(
				'type' => 'text',
				'label' => 'Github URL'
			),
			'instagram' => array(
				'type' => 'text',
				'label' => 'Instagram URL'
			),
			'skype' => array(
				'type' => 'text',
				'label' => 'Skype URL'
			),
			'youtube' => array(
				'type' => 'text',
				'label' => 'YouTube URL'
			),
			'vimeo' => array(
				'type' => 'text',
				'label' => 'Vimeo URL'
			),
			'footer-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Contact Footer Text',
				'rows' => 14,
				'required' => true,
				'tip' => 'This is the text displayed at the bottom of the "Contact" section.'
			)
		)
	)
);
