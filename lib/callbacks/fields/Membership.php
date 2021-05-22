<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Membership Options')
    ->where('post_type', '=', 'cpt_memberships')
    ->add_fields(
        array(
            Field::make('text', 'membership_price_individual', 'Individual Price')->set_width(50),
            Field::make('text', 'membership_price_household', 'Household Price')->set_width(50),
            Field::make('checkbox', 'membership_highlight', __('Most Popular'))
                ->set_option_value('yes'),
            Field::make('complex', 'membership_benefits', __('Benefits'))
                ->setup_labels(
                    array(
                        'plural_name' => 'Benefits',
                        'singular_name' => 'Benefit',
                    )
                )
                ->add_fields(
                    array(
                        Field::make('select', 'icon', __('Choose Icon'))
                            ->set_options(
                                array(
                                    'fas fa-parking' => 'Parking',
                                    'fas fa-calendar-alt' => 'Calendar',
                                    'fas fa-anchor' => 'Anchor',
                                    'fas fa-user-friends' => 'Friend',
                                    'fas fa-home' => 'Home',
                                )
                            )->set_width(50),
                        Field::make('textarea', 'description', __('Description'))->set_width(50),
                    )
                ),
            Field::make('rich_text', 'membership_description', 'Description'),
            Field::make('text', 'membership_signup_link', 'Signup Link'),
            Field::make('rich_text', 'membership_signup_form_description', 'Signup Form Description'),
            Field::make('textarea', 'membership_signup_form', 'Bloomerang Signup Form Code'),
            Field::make('text', 'bloomerang_fallback_link', 'Bloomerang Fallback Signup Form Link'),
        )
    );