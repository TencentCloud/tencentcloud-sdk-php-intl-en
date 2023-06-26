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
 * Itinerary/Receipt of e-ticket for air transportation
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getNumber() Obtain E-ticket No.
 * @method void setNumber(string $Number) Set E-ticket No.
 * @method string getCheckCode() Obtain Check code
 * @method void setCheckCode(string $CheckCode) Set Check code
 * @method string getSerialNumber() Obtain Serial number
 * @method void setSerialNumber(string $SerialNumber) Set Serial number
 * @method string getDate() Obtain Date of issue
 * @method void setDate(string $Date) Set Date of issue
 * @method string getAgentCode() Obtain Agent code
 * @method void setAgentCode(string $AgentCode) Set Agent code
 * @method string getAgentCodeFirst() Obtain First line of the agent code
 * @method void setAgentCodeFirst(string $AgentCodeFirst) Set First line of the agent code
 * @method string getAgentCodeSecond() Obtain Second line of the agent code
 * @method void setAgentCodeSecond(string $AgentCodeSecond) Set Second line of the agent code
 * @method string getUserName() Obtain Name
 * @method void setUserName(string $UserName) Set Name
 * @method string getUserID() Obtain ID card number
 * @method void setUserID(string $UserID) Set ID card number
 * @method string getIssuer() Obtain Issuer
 * @method void setIssuer(string $Issuer) Set Issuer
 * @method string getFare() Obtain Fare
 * @method void setFare(string $Fare) Set Fare
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getFuelSurcharge() Obtain Fuel surcharge
 * @method void setFuelSurcharge(string $FuelSurcharge) Set Fuel surcharge
 * @method string getAirDevelopmentFund() Obtain Aviation Development Fund
 * @method void setAirDevelopmentFund(string $AirDevelopmentFund) Set Aviation Development Fund
 * @method string getInsurance() Obtain Insurance
 * @method void setInsurance(string $Insurance) Set Insurance
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getDomesticInternationalTag() Obtain Domestic or international tag
 * @method void setDomesticInternationalTag(string $DomesticInternationalTag) Set Domestic or international tag
 * @method string getDateStart() Obtain Not-valid-before date
 * @method void setDateStart(string $DateStart) Set Not-valid-before date
 * @method string getDateEnd() Obtain Not-valid-after date
 * @method void setDateEnd(string $DateEnd) Set Not-valid-after date
 * @method string getEndorsement() Obtain Endorsements/Restrictions
 * @method void setEndorsement(string $Endorsement) Set Endorsements/Restrictions
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method array getFlightItems() Obtain Items
 * @method void setFlightItems(array $FlightItems) Set Items
 */
class AirTransport extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string E-ticket No.
     */
    public $Number;

    /**
     * @var string Check code
     */
    public $CheckCode;

    /**
     * @var string Serial number
     */
    public $SerialNumber;

    /**
     * @var string Date of issue
     */
    public $Date;

    /**
     * @var string Agent code
     */
    public $AgentCode;

    /**
     * @var string First line of the agent code
     */
    public $AgentCodeFirst;

    /**
     * @var string Second line of the agent code
     */
    public $AgentCodeSecond;

    /**
     * @var string Name
     */
    public $UserName;

    /**
     * @var string ID card number
     */
    public $UserID;

    /**
     * @var string Issuer
     */
    public $Issuer;

    /**
     * @var string Fare
     */
    public $Fare;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Fuel surcharge
     */
    public $FuelSurcharge;

    /**
     * @var string Aviation Development Fund
     */
    public $AirDevelopmentFund;

    /**
     * @var string Insurance
     */
    public $Insurance;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string Domestic or international tag
     */
    public $DomesticInternationalTag;

    /**
     * @var string Not-valid-before date
     */
    public $DateStart;

    /**
     * @var string Not-valid-after date
     */
    public $DateEnd;

    /**
     * @var string Endorsements/Restrictions
     */
    public $Endorsement;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var array Items
     */
    public $FlightItems;

    /**
     * @param string $Title Invoice title
     * @param string $Number E-ticket No.
     * @param string $CheckCode Check code
     * @param string $SerialNumber Serial number
     * @param string $Date Date of issue
     * @param string $AgentCode Agent code
     * @param string $AgentCodeFirst First line of the agent code
     * @param string $AgentCodeSecond Second line of the agent code
     * @param string $UserName Name
     * @param string $UserID ID card number
     * @param string $Issuer Issuer
     * @param string $Fare Fare
     * @param string $Tax Tax
     * @param string $FuelSurcharge Fuel surcharge
     * @param string $AirDevelopmentFund Aviation Development Fund
     * @param string $Insurance Insurance
     * @param string $Total Total amount (in figures)
     * @param string $Kind Invoice type
     * @param string $DomesticInternationalTag Domestic or international tag
     * @param string $DateStart Not-valid-before date
     * @param string $DateEnd Not-valid-after date
     * @param string $Endorsement Endorsements/Restrictions
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param array $FlightItems Items
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

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AgentCode",$param) and $param["AgentCode"] !== null) {
            $this->AgentCode = $param["AgentCode"];
        }

        if (array_key_exists("AgentCodeFirst",$param) and $param["AgentCodeFirst"] !== null) {
            $this->AgentCodeFirst = $param["AgentCodeFirst"];
        }

        if (array_key_exists("AgentCodeSecond",$param) and $param["AgentCodeSecond"] !== null) {
            $this->AgentCodeSecond = $param["AgentCodeSecond"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("FuelSurcharge",$param) and $param["FuelSurcharge"] !== null) {
            $this->FuelSurcharge = $param["FuelSurcharge"];
        }

        if (array_key_exists("AirDevelopmentFund",$param) and $param["AirDevelopmentFund"] !== null) {
            $this->AirDevelopmentFund = $param["AirDevelopmentFund"];
        }

        if (array_key_exists("Insurance",$param) and $param["Insurance"] !== null) {
            $this->Insurance = $param["Insurance"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("DomesticInternationalTag",$param) and $param["DomesticInternationalTag"] !== null) {
            $this->DomesticInternationalTag = $param["DomesticInternationalTag"];
        }

        if (array_key_exists("DateStart",$param) and $param["DateStart"] !== null) {
            $this->DateStart = $param["DateStart"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }

        if (array_key_exists("Endorsement",$param) and $param["Endorsement"] !== null) {
            $this->Endorsement = $param["Endorsement"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("FlightItems",$param) and $param["FlightItems"] !== null) {
            $this->FlightItems = [];
            foreach ($param["FlightItems"] as $key => $value){
                $obj = new FlightItem();
                $obj->deserialize($value);
                array_push($this->FlightItems, $obj);
            }
        }
    }
}
