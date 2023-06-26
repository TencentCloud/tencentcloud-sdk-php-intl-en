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
 * Bus ticket
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getTimeGetOn() Obtain Departure time
 * @method void setTimeGetOn(string $TimeGetOn) Set Departure time
 * @method string getDateGetOn() Obtain Departure date
 * @method void setDateGetOn(string $DateGetOn) Set Departure date
 * @method string getStationGetOn() Obtain Departure station
 * @method void setStationGetOn(string $StationGetOn) Set Departure station
 * @method string getStationGetOff() Obtain Destination
 * @method void setStationGetOff(string $StationGetOff) Set Destination
 * @method string getTotal() Obtain Fare
 * @method void setTotal(string $Total) Set Fare
 * @method string getUserName() Obtain Name
 * @method void setUserName(string $UserName) Set Name
 * @method string getKind() Obtain Consumption type
 * @method void setKind(string $Kind) Set Consumption type
 * @method string getUserID() Obtain ID card number
 * @method void setUserID(string $UserID) Set ID card number
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method string getPlaceGetOn() Obtain Departure place
 * @method void setPlaceGetOn(string $PlaceGetOn) Set Departure place
 * @method string getGateNumber() Obtain Check-in gate
 * @method void setGateNumber(string $GateNumber) Set Check-in gate
 * @method string getTicketType() Obtain Fare category
 * @method void setTicketType(string $TicketType) Set Fare category
 * @method string getVehicleType() Obtain Vehicle type
 * @method void setVehicleType(string $VehicleType) Set Vehicle type
 * @method string getSeatNumber() Obtain Seat No.
 * @method void setSeatNumber(string $SeatNumber) Set Seat No.
 * @method string getTrainNumber() Obtain Fleet number
 * @method void setTrainNumber(string $TrainNumber) Set Fleet number
 */
class BusInvoice extends AbstractModel
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
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Departure time
     */
    public $TimeGetOn;

    /**
     * @var string Departure date
     */
    public $DateGetOn;

    /**
     * @var string Departure station
     */
    public $StationGetOn;

    /**
     * @var string Destination
     */
    public $StationGetOff;

    /**
     * @var string Fare
     */
    public $Total;

    /**
     * @var string Name
     */
    public $UserName;

    /**
     * @var string Consumption type
     */
    public $Kind;

    /**
     * @var string ID card number
     */
    public $UserID;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var string Departure place
     */
    public $PlaceGetOn;

    /**
     * @var string Check-in gate
     */
    public $GateNumber;

    /**
     * @var string Fare category
     */
    public $TicketType;

    /**
     * @var string Vehicle type
     */
    public $VehicleType;

    /**
     * @var string Seat No.
     */
    public $SeatNumber;

    /**
     * @var string Fleet number
     */
    public $TrainNumber;

    /**
     * @param string $Title Invoice title
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param string $Number Invoice number
     * @param string $Code Invoice code
     * @param string $Date Date of issue
     * @param string $TimeGetOn Departure time
     * @param string $DateGetOn Departure date
     * @param string $StationGetOn Departure station
     * @param string $StationGetOff Destination
     * @param string $Total Fare
     * @param string $UserName Name
     * @param string $Kind Consumption type
     * @param string $UserID ID card number
     * @param string $Province Province
     * @param string $City City
     * @param string $PlaceGetOn Departure place
     * @param string $GateNumber Check-in gate
     * @param string $TicketType Fare category
     * @param string $VehicleType Vehicle type
     * @param string $SeatNumber Seat No.
     * @param string $TrainNumber Fleet number
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("PlaceGetOn",$param) and $param["PlaceGetOn"] !== null) {
            $this->PlaceGetOn = $param["PlaceGetOn"];
        }

        if (array_key_exists("GateNumber",$param) and $param["GateNumber"] !== null) {
            $this->GateNumber = $param["GateNumber"];
        }

        if (array_key_exists("TicketType",$param) and $param["TicketType"] !== null) {
            $this->TicketType = $param["TicketType"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("SeatNumber",$param) and $param["SeatNumber"] !== null) {
            $this->SeatNumber = $param["SeatNumber"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }
    }
}
