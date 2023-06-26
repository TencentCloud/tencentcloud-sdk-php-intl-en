<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Taxi receipt
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getTimeGetOn() Obtain Start time
 * @method void setTimeGetOn(string $TimeGetOn) Set Start time
 * @method string getTimeGetOff() Obtain End time
 * @method void setTimeGetOff(string $TimeGetOff) Set End time
 * @method string getPrice() Obtain Unit price
 * @method void setPrice(string $Price) Set Unit price
 * @method string getMileage() Obtain Distance
 * @method void setMileage(string $Mileage) Set Distance
 * @method string getTotal() Obtain Total amount
 * @method void setTotal(string $Total) Set Total amount
 * @method string getPlace() Obtain Invoice place
 * @method void setPlace(string $Place) Set Invoice place
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getLicensePlate() Obtain License plate number
 * @method void setLicensePlate(string $LicensePlate) Set License plate number
 * @method string getFuelFee() Obtain Fuel surcharge
 * @method void setFuelFee(string $FuelFee) Set Fuel surcharge
 * @method string getBookingCallFee() Obtain Booking fee
 * @method void setBookingCallFee(string $BookingCallFee) Set Booking fee
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 */
class TaxiTicket extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Start time
     */
    public $TimeGetOn;

    /**
     * @var string End time
     */
    public $TimeGetOff;

    /**
     * @var string Unit price
     */
    public $Price;

    /**
     * @var string Distance
     */
    public $Mileage;

    /**
     * @var string Total amount
     */
    public $Total;

    /**
     * @var string Invoice place
     */
    public $Place;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string License plate number
     */
    public $LicensePlate;

    /**
     * @var string Fuel surcharge
     */
    public $FuelFee;

    /**
     * @var string Booking fee
     */
    public $BookingCallFee;

    /**
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @param string $Title Invoice title
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Date Date of issue
     * @param string $TimeGetOn Start time
     * @param string $TimeGetOff End time
     * @param string $Price Unit price
     * @param string $Mileage Distance
     * @param string $Total Total amount
     * @param string $Place Invoice place
     * @param string $Province Province
     * @param string $City City
     * @param string $Kind Invoice type
     * @param string $LicensePlate License plate number
     * @param string $FuelFee Fuel surcharge
     * @param string $BookingCallFee Booking fee
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("TimeGetOff",$param) and $param["TimeGetOff"] !== null) {
            $this->TimeGetOff = $param["TimeGetOff"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Mileage",$param) and $param["Mileage"] !== null) {
            $this->Mileage = $param["Mileage"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Place",$param) and $param["Place"] !== null) {
            $this->Place = $param["Place"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("FuelFee",$param) and $param["FuelFee"] !== null) {
            $this->FuelFee = $param["FuelFee"];
        }

        if (array_key_exists("BookingCallFee",$param) and $param["BookingCallFee"] !== null) {
            $this->BookingCallFee = $param["BookingCallFee"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }
    }
}
