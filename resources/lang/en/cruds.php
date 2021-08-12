<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'gender'                   => 'Gender',
            'gender_helper'            => ' ',
            'about'                    => 'About',
            'about_helper'             => ' ',
            'avatar'                   => 'Avatar',
            'avatar_helper'            => ' ',
            'designation'              => 'Designation',
            'designation_helper'       => ' ',
            'organisation'             => 'Organisation',
            'organisation_helper'      => ' ',
            'country'                  => 'Country',
            'country_helper'           => ' ',
            'state'                    => 'State',
            'state_helper'             => ' ',
            'city_town'                => 'City/Town',
            'city_town_helper'         => ' ',
            'website'                  => 'Website',
            'website_helper'           => 'eg. www.newmark-imc.com',
            'industry'                 => 'Industry',
            'industry_helper'          => ' ',
            'interests'                => 'Interests',
            'interests_helper'         => ' ',
        ],
    ],
    'attendee' => [
        'title'          => 'Attendees',
        'title_singular' => 'Attendee',
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'eventsManagement' => [
        'title'          => 'Events Management',
        'title_singular' => 'Events Management',
    ],
    'eventSetting' => [
        'title'          => 'Event Settings',
        'title_singular' => 'Event Setting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'event_name'        => 'Event Name',
            'event_name_helper' => ' ',
            'event_logo'        => 'Event Logo',
            'event_logo_helper' => ' ',
            'about'             => 'About',
            'about_helper'      => ' ',
            'facebook'          => 'Facebook',
            'facebook_helper'   => ' ',
            'twitter'           => 'Twitter',
            'twitter_helper'    => ' ',
            'linkedin'          => 'Linkedin',
            'linkedin_helper'   => ' ',
            'instagram'         => 'Instagram',
            'instagram_helper'  => ' ',
            'youtube'           => 'Youtube',
            'youtube_helper'    => ' ',
            'sliders'           => 'Sliders',
            'sliders_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'company' => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'about'               => 'About',
            'about_helper'        => ' ',
            'logo'                => 'Logo',
            'logo_helper'         => ' ',
            'cover_image'         => 'Cover Image',
            'cover_image_helper'  => ' ',
            'website'             => 'Website',
            'website_helper'      => ' ',
            'headquarters'        => 'Headquarters',
            'headquarters_helper' => ' ',
            'type'                => 'Type',
            'type_helper'         => ' ',
            'industry'            => 'Industry',
            'industry_helper'     => ' ',
            'facebook'            => 'Facebook',
            'facebook_helper'     => ' ',
            'twitter'             => 'Twitter',
            'twitter_helper'      => ' ',
            'instagram'           => 'Instagram',
            'instagram_helper'    => ' ',
            'linkedin'            => 'Linkedin',
            'linkedin_helper'     => ' ',
            'youtube'             => 'Youtube',
            'youtube_helper'      => ' ',
            'phone'               => 'Phone',
            'phone_helper'        => ' ',
            'email'               => 'Email',
            'email_helper'        => ' ',
            'downloads'           => 'Downloads',
            'downloads_helper'    => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'interest' => [
        'title'          => 'Interests',
        'title_singular' => 'Interest',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'post' => [
        'title'          => 'Posts',
        'title_singular' => 'Post',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'body'              => 'Body',
            'body_helper'       => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'comment' => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'agendaDate' => [
        'title'          => 'Agenda Dates',
        'title_singular' => 'Agenda Date',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'date'              => 'Date',
            'date_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
