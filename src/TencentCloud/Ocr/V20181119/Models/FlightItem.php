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
 * Flight items
 *
 * @method string getTerminalGetOn() Obtain Departure terminal
 * @method void setTerminalGetOn(string $TerminalGetOn) Set Departure terminal
 * @method string getTerminalGetOff() Obtain Arrival terminal
 * @method void setTerminalGetOff(string $TerminalGetOff) Set Arrival terminal
 * @method string getCarrier() Obtain Carrier
 * @method void setCarrier(string $Carrier) Set Carrier
 * @method string getFlightNumber() Obtain Flight number
 * @method void setFlightNumber(string $FlightNumber) Set Flight number
 * @method string getSeat() Obtain Class
 * @method void setSeat(string $Seat) Set Class
 * @method string getDateGetOn() Obtain Departure date
 * @method void setDateGetOn(string $DateGetOn) Set Departure date
 * @method string getTimeGetOn() Obtain Departure time
 * @method void setTimeGetOn(string $TimeGetOn) Set Departure time
 * @method string getStationGetOn() Obtain Departure city
 * @method void setStationGetOn(string $StationGetOn) Set Departure city
 * @method string getStationGetOff() Obtain Arrival city
 * @method void setStationGetOff(string $StationGetOff) Set Arrival city
 * @method string getAllow() Obtain Baggage allowance
 * @method void setAllow(string $Allow) Set Baggage allowance
 * @method string getFareBasis() Obtain Fare category
 * @method void setFareBasis(string $FareBasis) Set Fare category
 */
class FlightItem extends AbstractModel
{
    /**
     * @var string Departure terminal
     */
    public $TerminalGetOn;

    /**
     * @var string Arrival terminal
     */
    public $TerminalGetOff;

    /**
     * @var string Carrier
     */
    public $Carrier;

    /**
     * @var string Flight number
     */
    public $FlightNumber;

    /**
     * @var string Class
     */
    public $Seat;

    /**
     * @var string Departure date
     */
    public $DateGetOn;

    /**
     * @var string Departure time
     */
    public $TimeGetOn;

    /**
     * @var string Departure city
     */
    public $StationGetOn;

    /**
     * @var string Arrival city
     */
    public $StationGetOff;

    /**
     * @var string Baggage allowance
     */
    public $Allow;

    /**
     * @var string Fare category
     */
    public $FareBasis;

    /**
     * @param string $TerminalGetOn Departure terminal
     * @param string $TerminalGetOff Arrival terminal
     * @param string $Carrier Carrier
     * @param string $FlightNumber Flight number
     * @param string $Seat Class
     * @param string $DateGetOn Departure date
     * @param string $TimeGetOn Departure time
     * @param string $StationGetOn Departure city
     * @param string $StationGetOff Arrival city
     * @param string $Allow Baggage allowance
     * @param string $FareBasis Fare category
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
        if (array_key_exists("TerminalGetOn",$param) and $param["TerminalGetOn"] !== null) {
            $this->TerminalGetOn = $param["TerminalGetOn"];
        }

        if (array_key_exists("TerminalGetOff",$param) and $param["TerminalGetOff"] !== null) {
            $this->TerminalGetOff = $param["TerminalGetOff"];
        }

        if (array_key_exists("Carrier",$param) and $param["Carrier"] !== null) {
            $this->Carrier = $param["Carrier"];
        }

        if (array_key_exists("FlightNumber",$param) and $param["FlightNumber"] !== null) {
            $this->FlightNumber = $param["FlightNumber"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("FareBasis",$param) and $param["FareBasis"] !== null) {
            $this->FareBasis = $param["FareBasis"];
        }
    }
}
