<?php

namespace App\Http\Requests\Residents;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            'group_id' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'nick_name' => 'required|string',
            'dob' => 'required|string',
            'mobile_phone' => 'required|string',
            'home_phone' => 'required|string',
             'email' => 'required|string',
             'physical_address.address_line_1' => 'required|string',
             'physical_address.address_line_2' => 'required|string',
             'physical_address.city' => 'required|string',
             'physical_address.state' => 'required|string',
             'physical_address.zip' => 'required|string',
             'previous_address.address_line_1' => 'required|string',
             'previous_address.address_line_2' => 'required|string',
             'previous_address.city' => 'required|string',
             'previous_address.state' => 'required|string',
             'previous_address.zip' => 'required|string',
             'mailing_address.address_line_1' => 'required|string',
             'mailing_address.address_line_2' => 'required|string',
             'mailing_address.city' => 'required|string',
             'mailing_address.state' => 'required|string',
             'mailing_address.zip' => 'required|string',

             'admission_info.ssn' => 'required|string',
             'admission_info.pob' => 'required|string',
             'admission_info.medica_rec_no' => 'required|string',
             'admission_info.medical_id_no' => 'required|string',
             'admission_info.gender' => 'required|string',
             'admission_info.race' => 'required|string',
             'admission_info.hair_color' => 'required|string',
              'admission_info.eye_color' => 'required|string',
             'admission_info.marital_status' => 'required|string',
             'admission_info.referral_type' => 'required|string',
             'admission_info.height' => 'required|string',
             'admission_info.weight' => 'required|string',
             'admission_info.religion' => 'required|string',
             'admission_info.mobility_needs' => 'required|string',
             'admission_info.language' => 'required|string',
             'admission_info.means_communication' => 'required|string',
             'admission_info.level_care' => 'required|string',
             'admission_info.vehicle_information' => 'required|string',
             'admission_info.email' => 'required|string',
             'admission_info.identifying_mark' => 'required|string',
             'admission_info.special_note' => 'required|string',

             'admission_info.scheduled_days.monday' => 'required|boolean',
             'admission_info.scheduled_days.tuesday' => 'required|boolean',
             'admission_info.scheduled_days.wednesday' => 'required|boolean',
             'admission_info.scheduled_days.thursday' => 'required|boolean',
             'admission_info.scheduled_days.friday' => 'required|boolean',

             'admission_info.pick_up_days.monday' => 'required|string',
             'admission_info.pick_up_days.tuesday' => 'required|string',
             'admission_info.pick_up_days.wednesday' => 'required|string',
             'admission_info.pick_up_days.thursday' => 'required|string',
             'admission_info.pick_up_days.friday' => 'required|string',

             'admission_info.drop_off_day.monday' => 'required|string',
             'admission_info.drop_off_day.tuesday' => 'required|string',
             'admission_info.drop_off_day.wednesday' => 'required|string',
             'admission_info.drop_off_day.thursday' => 'required|string',
             'admission_info.drop_off_day.friday' => 'required|string',



             'flags.two_person_assist_mobilty'=> 'required|boolean',
             'flags.advanced_directive'=> 'required|boolean',
             'flags.alcohol_order'=> 'required|boolean',
             'flags.beauty_shop'=> 'required|boolean',
             'flags.chf_factors'=> 'required|boolean',
             'flags.cpr'=> 'required|boolean',
             'flags.decision_making_capacity_risk'=> 'required|boolean',
             'flags.dementia'=> 'required|boolean',
             'flags.diabetic'=> 'required|boolean',
             'flags.dni'=> 'required|boolean',
             'flags.dnr_order_signed_by_physician'=> 'required|boolean',
             'flags.do_not_intubate'=> 'required|boolean',
             'flags.elopment_risk'=> 'required|boolean',
             'flags.etoh_use'=> 'required|boolean',
             'flags.fall_risk'=> 'required|boolean',
             'flags.flight_risk'=> 'required|boolean',
             'flags.food_allergies'=> 'required|boolean',
             'flags.full_code'=> 'required|boolean',
             'flags.guadianship'=> 'required|boolean',
             'flags.history_of_illicit_drug_use'=> 'required|boolean',
             'flags.iddm'=> 'required|boolean',
             'flags.laundry'=> 'required|boolean',
             'flags.living_will'=> 'required|boolean',
             'flags.living_will_dnr'=> 'required|boolean',
             'flags.medicine_allergies'=> 'required|boolean',
             'flags.molst'=> 'required|boolean',
             'flags.most'=> 'required|boolean',
             'flags.newspaper'=> 'required|boolean',
             'flags.non_english_speaking'=> 'required|boolean',
             'flags.ohdnr'=> 'required|boolean',
             'flags.other_allergies'=> 'required|boolean',
             'flags.pacemaker'=> 'required|boolean',
             'flags.polst'=> 'required|boolean',
             'flags.post'=> 'required|boolean',
             'flags.power_of_attorney'=> 'required|boolean',
             'flags.proxy_caregiver'=> 'required|boolean',
             'flags.receiver_antibiotics'=> 'required|boolean',
             'flags.receiver_anticoagulant'=> 'required|boolean',
             'flags.receiver_psychoropics'=> 'required|boolean',
             'flags.resident_secure_demential_unit'=> 'required|boolean',
             'flags.served_oversea'=> 'required|boolean',
             'flags.smoker'=> 'required|boolean',
             'flags.suffocation_risk'=> 'required|boolean',


             'income.city_subsidy'=> 'required|boolean',
             'military_information.air_force'=> 'required|boolean',
             'mail_preference.open_all_email'=> 'required|boolean',
=======
            'first_name' => 'sometimes|required|string',
            'middle_name' => 'sometimes|required|string',
            'last_name' => 'sometimes|required|string',
            'nick_name' => 'sometimes|required|string',
            'dob' => 'sometimes|required|string',
            'mobile_phone' => 'sometimes|required|string',
            'home_phone' => 'sometimes|required|string',
            'email' => 'sometimes|required|string',
            'physical_address.address_line_1' => 'sometimes|required|string',
            'physical_address.address_line_2' => 'sometimes|required|string',
            'physical_address.city' => 'sometimes|required|string',
            'physical_address.state' => 'sometimes|required|string',
            'physical_address.zip' => 'sometimes|required|string',
            'previous_address.address_line_1' => 'sometimes|required|string',
            'previous_address.address_line_2' => 'sometimes|required|string',
            'previous_address.city' => 'sometimes|required|string',
            'previous_address.state' => 'sometimes|required|string',
            'previous_address.zip' => 'sometimes|required|string',
            'mailing_address.address_line_1' => 'sometimes|required|string',
            'mailing_address.address_line_2' => 'sometimes|required|string',
            'mailing_address.city' => 'sometimes|required|string',
            'mailing_address.state' => 'sometimes|required|string',
            'mailing_address.zip' => 'sometimes|required|string',
            'admission_info.ssn' => 'sometimes|required|string',
            'admission_info.pob' => 'sometimes|required|string',
            'admission_info.medica_rec_no' => 'sometimes|required|string',
            'admission_info.medical_id_no' => 'sometimes|required|string',
            'admission_info.gender' => 'sometimes|required|string',
            'admission_info.race' => 'sometimes|required|string',
            'admission_info.hair_color' => 'sometimes|required|string',
            'admission_info.eye_color' => 'sometimes|required|string',
            'admission_info.marital_status' => 'sometimes|required|string',
            'admission_info.referral_type' => 'sometimes|required|string',
            'admission_info.height' => 'sometimes|required|string',
            'admission_info.weight' => 'sometimes|required|string',
            'admission_info.religion' => 'sometimes|required|string',
            'admission_info.mobility_needs' => 'sometimes|required|string',
            'admission_info.language' => 'sometimes|required|string',
            'admission_info.means_communication' => 'sometimes|required|string',
            'admission_info.level_care' => 'sometimes|required|string',
            'admission_info.vehicle_information' => 'sometimes|required|string',
            'admission_info.email' => 'sometimes|required|string',
            'admission_info.identifying_mark' => 'sometimes|required|string',
            'admission_info.special_note' => 'sometimes|required|string',
            'admission_info.scheduled_days.monday' => 'sometimes|required|boolean',
            'admission_info.scheduled_days.tuesday' => 'sometimes|required|boolean',
            'admission_info.scheduled_days.wednesday' => 'sometimes|required|boolean',
            'admission_info.scheduled_days.thursday' => 'sometimes|required|boolean',
            'admission_info.scheduled_days.friday' => 'sometimes|required|boolean',
            'admission_info.pick_up_days.monday' => 'sometimes|required|boolean',
            'admission_info.pick_up_days.tuesday' => 'sometimes|required|boolean',
            'admission_info.pick_up_days.wednesday' => 'sometimes|required|boolean',
            'admission_info.pick_up_days.thursday' => 'sometimes|required|boolean',
            'admission_info.pick_up_days.friday' => 'sometimes|required|boolean',
            'admission_info.drop_off_day.monday' => 'sometimes|required|boolean',
            'admission_info.drop_off_day.tuesday' => 'sometimes|required|boolean',
            'admission_info.drop_off_day.wednesday' => 'sometimes|required|boolean',
            'admission_info.drop_off_day.thursday' => 'sometimes|required|boolean',
            'admission_info.drop_off_day.friday' => 'sometimes|required|boolean',
            'flags.two_person_assist_mobilty'=> 'sometimes|required|boolean',
            'flags.advanced_directive'=> 'sometimes|required|boolean',
            'flags.alcohol_order'=> 'sometimes|required|boolean',
            'flags.beauty_shop'=> 'sometimes|required|boolean',
            'flags.chf_factors'=> 'sometimes|required|boolean',
            'flags.cpr'=> 'sometimes|required|boolean',
            'flags.decision_making_capacity_risk'=> 'sometimes|required|boolean',
            'flags.dementia'=> 'sometimes|required|boolean',
            'flags.diabetic'=> 'sometimes|required|boolean',
            'flags.dni'=> 'sometimes|required|boolean',
            'flags.dnr_order_signed_by_physician'=> 'sometimes|required|boolean',
            'flags.do_not_intubate'=> 'sometimes|required|boolean',
            'flags.elopment_risk'=> 'sometimes|required|boolean',
            'flags.etoh_use'=> 'sometimes|required|boolean',
            'flags.fall_risk'=> 'sometimes|required|boolean',
            'flags.flight_risk'=> 'sometimes|required|boolean',
            'flags.food_allergies'=> 'sometimes|required|boolean',
            'flags.full_code'=> 'sometimes|required|boolean',
            'flags.guadianship'=> 'sometimes|required|boolean',
            'flags.history_of_illicit_drug_use'=> 'sometimes|required|boolean',
            'flags.iddm'=> 'sometimes|required|boolean',
            'flags.laundry'=> 'sometimes|required|boolean',
            'flags.living_will'=> 'sometimes|required|boolean',
            'flags.living_will_dnr'=> 'sometimes|required|boolean',
            'flags.medicine_allergies'=> 'sometimes|required|boolean',
            'flags.molst'=> 'sometimes|required|boolean',
            'flags.most'=> 'sometimes|required|boolean',
            'flags.newspaper'=> 'sometimes|required|boolean',
            'flags.non_english_speaking'=> 'sometimes|required|boolean',
            'flags.ohdnr'=> 'sometimes|required|boolean',
            'flags.other_allergies'=> 'sometimes|required|boolean',
            'flags.pacemaker'=> 'sometimes|required|boolean',
            'flags.polst'=> 'sometimes|required|boolean',
            'flags.post'=> 'sometimes|required|boolean',
            'flags.power_of_attorney'=> 'sometimes|required|boolean',
            'flags.proxy_caregiver'=> 'sometimes|required|boolean',
            'flags.receiver_antibiotics'=> 'sometimes|required|boolean',
            'flags.receiver_anticoagulant'=> 'sometimes|required|boolean',
            'flags.receiver_psychoropics'=> 'sometimes|required|boolean',
            'flags.resident_secure_demential_unit'=> 'sometimes|required|boolean',
            'flags.served_oversea'=> 'sometimes|required|boolean',
            'flags.smoker'=> 'sometimes|required|boolean',
            'flags.suffocation_risk'=> 'sometimes|required|boolean',
            'income.city_subsidy'=> 'sometimes|required|boolean',
            'military_information.air_force'=> 'sometimes|required|boolean',
            'mail_preference.open_all_email'=> 'sometimes|required|boolean',
>>>>>>> d3b928872b8e8d1f99d61f19ac54ea03062ad367




        ];
    }
}

    