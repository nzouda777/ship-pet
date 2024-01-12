<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "senderLocation" => 'required',
        "senderFullname" => 'required',
            "senderMail" => ['required', 'email'],
            "receiverFullName" => ['required', "string"],
            "receiverLocation" => ['required'],
            "receiverPhone" => ['required'],
            "origin" => ['required'],
            "destination" => 'required',
            "weight" => 'required',
            "quantity" => 'required',
            "product" => 'required',
            "totalFreight" => 'required',
            "departureTime" => 'required',
            "pickUpDate" => 'required',
            "pickUpTime" => 'required',
            "expectedDeliveryDate" => 'required',
            "package" => 'required',
            "carrier" => 'required',
            "shipmentMode" => 'required',
            "shipmentType" => 'required',
            "carrierRef" => 'required',
            "paymentMode" => 'required'
        ];
    }
}
