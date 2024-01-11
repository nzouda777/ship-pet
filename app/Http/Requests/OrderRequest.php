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
        return false;
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
            "senderLocation" => "required",
            "receiverFullName" => ['required', string],
            "receiverLocation" => ['required'],
            "receiverPhone" => ['required'],
            "origin" => ['required'],
            "destination" => 'required',
            "weight" => 'required',
            "product" => 'required',
            "totalFreight" => 'required',
            "pickUpDate" => 'required',
            "package" => 'required',
            "carrier" => 'required',
            "shipmentMode" => 'required',
            "quantity" => 'required',
            "expexctedDeliveryDate" => 'required',
            "pickUpTime" => 'required',
            "status" => 'required',
            "shipmentType" => 'required',
            "carrierRef" => 'required',
            "paymentMode" => 'required',
            "departureTime" => 'required'
        ];
    }
}
