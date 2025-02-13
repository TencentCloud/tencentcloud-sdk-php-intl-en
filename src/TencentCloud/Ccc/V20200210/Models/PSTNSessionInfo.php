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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PSTN Session Information.
 *
 * @method string getSessionID() Obtain Session id.
 * @method void setSessionID(string $SessionID) Set Session id.
 * @method string getRoomID() Obtain Temporary room id for session.
 * @method void setRoomID(string $RoomID) Set Temporary room id for session.
 * @method string getCaller() Obtain Caller.
 * @method void setCaller(string $Caller) Set Caller.
 * @method string getCallee() Obtain Called.
 * @method void setCallee(string $Callee) Set Called.
 * @method string getStartTimestamp() Obtain Start time. unix timestamp.
 * @method void setStartTimestamp(string $StartTimestamp) Set Start time. unix timestamp.
 * @method string getAcceptTimestamp() Obtain Answer time. unix timestamp.
 * @method void setAcceptTimestamp(string $AcceptTimestamp) Set Answer time. unix timestamp.
 * @method string getStaffEmail() Obtain Agent email.
 * @method void setStaffEmail(string $StaffEmail) Set Agent email.
 * @method string getStaffNumber() Obtain Agent id.
 * @method void setStaffNumber(string $StaffNumber) Set Agent id.
 * @method string getSessionStatus() Obtain Agent status inprogress ongoing.
 * @method void setSessionStatus(string $SessionStatus) Set Agent status inprogress ongoing.
 * @method integer getDirection() Obtain Session call direction, 0 - inbound | 1 - outbound.
 * @method void setDirection(integer $Direction) Set Session call direction, 0 - inbound | 1 - outbound.
 * @method integer getRingTimestamp() Obtain Ring time. unix timestamp.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring time. unix timestamp.
 * @method string getProtectedCaller() Obtain Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
 * @method void setProtectedCaller(string $ProtectedCaller) Set Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
 * @method string getProtectedCallee() Obtain Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
 * @method void setProtectedCallee(string $ProtectedCallee) Set Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
 */
class PSTNSessionInfo extends AbstractModel
{
    /**
     * @var string Session id.
     */
    public $SessionID;

    /**
     * @var string Temporary room id for session.
     */
    public $RoomID;

    /**
     * @var string Caller.
     */
    public $Caller;

    /**
     * @var string Called.
     */
    public $Callee;

    /**
     * @var string Start time. unix timestamp.
     */
    public $StartTimestamp;

    /**
     * @var string Answer time. unix timestamp.
     */
    public $AcceptTimestamp;

    /**
     * @var string Agent email.
     */
    public $StaffEmail;

    /**
     * @var string Agent id.
     */
    public $StaffNumber;

    /**
     * @var string Agent status inprogress ongoing.
     */
    public $SessionStatus;

    /**
     * @var integer Session call direction, 0 - inbound | 1 - outbound.
     */
    public $Direction;

    /**
     * @var integer Ring time. unix timestamp.
     */
    public $RingTimestamp;

    /**
     * @var string Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
     */
    public $ProtectedCaller;

    /**
     * @var string Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
     */
    public $ProtectedCallee;

    /**
     * @param string $SessionID Session id.
     * @param string $RoomID Temporary room id for session.
     * @param string $Caller Caller.
     * @param string $Callee Called.
     * @param string $StartTimestamp Start time. unix timestamp.
     * @param string $AcceptTimestamp Answer time. unix timestamp.
     * @param string $StaffEmail Agent email.
     * @param string $StaffNumber Agent id.
     * @param string $SessionStatus Agent status inprogress ongoing.
     * @param integer $Direction Session call direction, 0 - inbound | 1 - outbound.
     * @param integer $RingTimestamp Ring time. unix timestamp.
     * @param string $ProtectedCaller Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
     * @param string $ProtectedCallee Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
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
        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("RoomID",$param) and $param["RoomID"] !== null) {
            $this->RoomID = $param["RoomID"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("SessionStatus",$param) and $param["SessionStatus"] !== null) {
            $this->SessionStatus = $param["SessionStatus"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("ProtectedCaller",$param) and $param["ProtectedCaller"] !== null) {
            $this->ProtectedCaller = $param["ProtectedCaller"];
        }

        if (array_key_exists("ProtectedCallee",$param) and $param["ProtectedCallee"] !== null) {
            $this->ProtectedCallee = $param["ProtectedCallee"];
        }
    }
}
