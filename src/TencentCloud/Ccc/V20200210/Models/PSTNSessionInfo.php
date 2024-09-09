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
 * @method string getSessionID() Obtain Session ID.
 * @method void setSessionID(string $SessionID) Set Session ID.
 * @method string getRoomID() Obtain Temporary room ID for session.
 * @method void setRoomID(string $RoomID) Set Temporary room ID for session.
 * @method string getCaller() Obtain Caller.
 * @method void setCaller(string $Caller) Set Caller.
 * @method string getCallee() Obtain Called.
 * @method void setCallee(string $Callee) Set Called.
 * @method string getStartTimestamp() Obtain Start time. Unix timestamp.
 * @method void setStartTimestamp(string $StartTimestamp) Set Start time. Unix timestamp.
 * @method string getAcceptTimestamp() Obtain Answer time. Unix timestamp.
 * @method void setAcceptTimestamp(string $AcceptTimestamp) Set Answer time. Unix timestamp.
 * @method string getStaffEmail() Obtain Agent email.
 * @method void setStaffEmail(string $StaffEmail) Set Agent email.
 * @method string getStaffNumber() Obtain Agent ID
 * @method void setStaffNumber(string $StaffNumber) Set Agent ID
 * @method string getSessionStatus() Obtain Agent Status inProgress Ongoing
 * @method void setSessionStatus(string $SessionStatus) Set Agent Status inProgress Ongoing
 * @method integer getDirection() Obtain Session call direction, 0 - Inbound | 1 - Outbound.
 * @method void setDirection(integer $Direction) Set Session call direction, 0 - Inbound | 1 - Outbound.
 * @method integer getRingTimestamp() Obtain Ring time. Unix timestamp.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring time. Unix timestamp.
 * @method string getProtectedCaller() Obtain Caller number protection ID. Effective when the number protection map feature is activated, and the Caller field is empty.
 * @method void setProtectedCaller(string $ProtectedCaller) Set Caller number protection ID. Effective when the number protection map feature is activated, and the Caller field is empty.
 * @method string getProtectedCallee() Obtain Called number protection ID. Effective when the number protection map feature is activated, and the Callee field is empty.
 * @method void setProtectedCallee(string $ProtectedCallee) Set Called number protection ID. Effective when the number protection map feature is activated, and the Callee field is empty.
 */
class PSTNSessionInfo extends AbstractModel
{
    /**
     * @var string Session ID.
     */
    public $SessionID;

    /**
     * @var string Temporary room ID for session.
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
     * @var string Start time. Unix timestamp.
     */
    public $StartTimestamp;

    /**
     * @var string Answer time. Unix timestamp.
     */
    public $AcceptTimestamp;

    /**
     * @var string Agent email.
     */
    public $StaffEmail;

    /**
     * @var string Agent ID
     */
    public $StaffNumber;

    /**
     * @var string Agent Status inProgress Ongoing
     */
    public $SessionStatus;

    /**
     * @var integer Session call direction, 0 - Inbound | 1 - Outbound.
     */
    public $Direction;

    /**
     * @var integer Ring time. Unix timestamp.
     */
    public $RingTimestamp;

    /**
     * @var string Caller number protection ID. Effective when the number protection map feature is activated, and the Caller field is empty.
     */
    public $ProtectedCaller;

    /**
     * @var string Called number protection ID. Effective when the number protection map feature is activated, and the Callee field is empty.
     */
    public $ProtectedCallee;

    /**
     * @param string $SessionID Session ID.
     * @param string $RoomID Temporary room ID for session.
     * @param string $Caller Caller.
     * @param string $Callee Called.
     * @param string $StartTimestamp Start time. Unix timestamp.
     * @param string $AcceptTimestamp Answer time. Unix timestamp.
     * @param string $StaffEmail Agent email.
     * @param string $StaffNumber Agent ID
     * @param string $SessionStatus Agent Status inProgress Ongoing
     * @param integer $Direction Session call direction, 0 - Inbound | 1 - Outbound.
     * @param integer $RingTimestamp Ring time. Unix timestamp.
     * @param string $ProtectedCaller Caller number protection ID. Effective when the number protection map feature is activated, and the Caller field is empty.
     * @param string $ProtectedCallee Called number protection ID. Effective when the number protection map feature is activated, and the Callee field is empty.
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
