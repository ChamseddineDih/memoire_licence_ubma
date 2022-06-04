<?php
// Classe modeling group
class group
{
    public $id                  =  0; // Group ID
    public $number              = ''; // Group number
    public $training_sessions   =  0; // Group training session number
    public $limit_number        =  0; // Group limit number
    public $link_workout        = ''; // Group workout program
    public $video_workout       = ''; // Group Workout program video
    public $type                =  0; // Group typr
    public $state               =  0; // Group status
    public $gym                 =  0; // Relation that inculde the gym
}