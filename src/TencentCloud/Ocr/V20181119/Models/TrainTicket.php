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
 * Train ticket
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getDateGetOn() Obtain Departure date
 * @method void setDateGetOn(string $DateGetOn) Set Departure date
 * @method string getTimeGetOn() Obtain Departure time
 * @method void setTimeGetOn(string $TimeGetOn) Set Departure time
 * @method string getName() Obtain Passenger's name
 * @method void setName(string $Name) Set Passenger's name
 * @method string getStationGetOn() Obtain Departure station
 * @method void setStationGetOn(string $StationGetOn) Set Departure station
 * @method string getStationGetOff() Obtain Destination
 * @method void setStationGetOff(string $StationGetOff) Set Destination
 * @method string getSeat() Obtain Seat class
 * @method void setSeat(string $Seat) Set Seat class
 * @method string getTotal() Obtain Total amount
 * @method void setTotal(string $Total) Set Total amount
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getSerialNumber() Obtain Serial number
 * @method void setSerialNumber(string $SerialNumber) Set Serial number
 * @method string getUserID() Obtain ID card number
 * @method void setUserID(string $UserID) Set ID card number
 * @method string getGateNumber() Obtain Check-in gate
 * @method void setGateNumber(string $GateNumber) Set Check-in gate
 * @method string getTrainNumber() Obtain Fleet number
 * @method void setTrainNumber(string $TrainNumber) Set Fleet number
 * @method string getHandlingFee() Obtain Handling fee
 * @method void setHandlingFee(string $HandlingFee) Set Handling fee
 * @method string getOriginalFare() Obtain Original ticket price
 * @method void setOriginalFare(string $OriginalFare) Set Original ticket price
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getSeatNumber() Obtain Seat No.
 * @method void setSeatNumber(string $SeatNumber) Set Seat No.
 * @method string getPickUpAddress() Obtain Ticket pickup address
 * @method void setPickUpAddress(string $PickUpAddress) Set Ticket pickup address
 * @method string getTicketChange() Obtain Ticket change information
 * @method void setTicketChange(string $TicketChange) Set Ticket change information
 * @method string getAdditionalFare() Obtain Additional fare
 * @method void setAdditionalFare(string $AdditionalFare) Set Additional fare
 * @method string getReceiptNumber() Obtain Receipt No.
 * @method void setReceiptNumber(string $ReceiptNumber) Set Receipt No.
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method integer getReimburseOnlyMark() Obtain Whether it is for reimbursement only (0: No, 1: Yes)
 * @method void setReimburseOnlyMark(integer $ReimburseOnlyMark) Set Whether it is for reimbursement only (0: No, 1: Yes)
 */
class TrainTicket extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Departure date
     */
    public $DateGetOn;

    /**
     * @var string Departure time
     */
    public $TimeGetOn;

    /**
     * @var string Passenger's name
     */
    public $Name;

    /**
     * @var string Departure station
     */
    public $StationGetOn;

    /**
     * @var string Destination
     */
    public $StationGetOff;

    /**
     * @var string Seat class
     */
    public $Seat;

    /**
     * @var string Total amount
     */
    public $Total;

    /**
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string Serial number
     */
    public $SerialNumber;

    /**
     * @var string ID card number
     */
    public $UserID;

    /**
     * @var string Check-in gate
     */
    public $GateNumber;

    /**
     * @var string Fleet number
     */
    public $TrainNumber;

    /**
     * @var string Handling fee
     */
    public $HandlingFee;

    /**
     * @var string Original ticket price
     */
    public $OriginalFare;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Seat No.
     */
    public $SeatNumber;

    /**
     * @var string Ticket pickup address
     */
    public $PickUpAddress;

    /**
     * @var string Ticket change information
     */
    public $TicketChange;

    /**
     * @var string Additional fare
     */
    public $AdditionalFare;

    /**
     * @var string Receipt No.
     */
    public $ReceiptNumber;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var integer Whether it is for reimbursement only (0: No, 1: Yes)
     */
    public $ReimburseOnlyMark;

    /**
     * @param string $Title Invoice title
     * @param string $Number Invoice number
     * @param string $DateGetOn Departure date
     * @param string $TimeGetOn Departure time
     * @param string $Name Passenger's name
     * @param string $StationGetOn Departure station
     * @param string $StationGetOff Destination
     * @param string $Seat Seat class
     * @param string $Total Total amount
     * @param string $Kind Invoice type
     * @param string $SerialNumber Serial number
     * @param string $UserID ID card number
     * @param string $GateNumber Check-in gate
     * @param string $TrainNumber Fleet number
     * @param string $HandlingFee Handling fee
     * @param string $OriginalFare Original ticket price
     * @param string $TotalCn Total amount (in words)
     * @param string $SeatNumber Seat No.
     * @param string $PickUpAddress Ticket pickup address
     * @param string $TicketChange Ticket change information
     * @param string $AdditionalFare Additional fare
     * @param string $ReceiptNumber Receipt No.
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param integer $ReimburseOnlyMark Whether it is for reimbursement only (0: No, 1: Yes)
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("GateNumber",$param) and $param["GateNumber"] !== null) {
            $this->GateNumber = $param["GateNumber"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("HandlingFee",$param) and $param["HandlingFee"] !== null) {
            $this->HandlingFee = $param["HandlingFee"];
        }

        if (array_key_exists("OriginalFare",$param) and $param["OriginalFare"] !== null) {
            $this->OriginalFare = $param["OriginalFare"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("SeatNumber",$param) and $param["SeatNumber"] !== null) {
            $this->SeatNumber = $param["SeatNumber"];
        }

        if (array_key_exists("PickUpAddress",$param) and $param["PickUpAddress"] !== null) {
            $this->PickUpAddress = $param["PickUpAddress"];
        }

        if (array_key_exists("TicketChange",$param) and $param["TicketChange"] !== null) {
            $this->TicketChange = $param["TicketChange"];
        }

        if (array_key_exists("AdditionalFare",$param) and $param["AdditionalFare"] !== null) {
            $this->AdditionalFare = $param["AdditionalFare"];
        }

        if (array_key_exists("ReceiptNumber",$param) and $param["ReceiptNumber"] !== null) {
            $this->ReceiptNumber = $param["ReceiptNumber"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("ReimburseOnlyMark",$param) and $param["ReimburseOnlyMark"] !== null) {
            $this->ReimburseOnlyMark = $param["ReimburseOnlyMark"];
        }
    }
}
