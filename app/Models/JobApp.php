<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApp extends Model
{
    use HasFactory;
    public $table = 'jobapplication';
    protected $fillable = [
        'first_name', 'last_name', 'address_1', 'address_2', 'email', 'designation','phoneno','city','state','gender','zip','relationship_status','dateofbirth','ssc_name_of_bord','ssc_passing_year',
        'ssc_percentage','hsc_name_of_bord','hsc_passing_year','hsc_percentage','bechlor_course_name','bechlor_university','bechlor_passing_year','bechlor_percentage','master_course_name','master_university','master_passing_year','master_percentage','workex_company_name','workex_designation','language_known','technologies_you_know','mysql_technologies_you_know','laravel_technologies_you_know','oracle_technologies_you_know','referance_contact_name','referance_contact_number','referance_contact_relation','preferances_preferd_location','preferances_notice_period','preferances_expacted_CTC','preferances_current_CTC','preferances_department','to_date','from_date'
    ];
}
