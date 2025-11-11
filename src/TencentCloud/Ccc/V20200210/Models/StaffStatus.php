<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Agent status.
 *
 * @method string getCursor() Obtain Specifies the cursor used for querying in pagination scenarios.
 * @method void setCursor(string $Cursor) Set Specifies the cursor used for querying in pagination scenarios.
 * @method integer getTimestamp() Obtain Status timestamp. Unix second-level timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Status timestamp. Unix second-level timestamp.
 * @method string getStatus() Obtain Agent status free | busy | rest | notReady | afterCallWork | offline.
 * @method void setStatus(string $Status) Set Agent status free | busy | rest | notReady | afterCallWork | offline.
 * @method string getSessionId() Obtain Specifies the session Id for status association.
 * @method void setSessionId(string $SessionId) Set Specifies the session Id for status association.
 * @method string getReason() Obtain Reason for break.
 * @method void setReason(string $Reason) Set Reason for break.
 * @method string getStaffEmail() Obtain Agent email.
 * @method void setStaffEmail(string $StaffEmail) Set Agent email.
 * @method string getStaffNo() Obtain Agent id.
 * @method void setStaffNo(string $StaffNo) Set Agent id.
 */
class StaffStatus extends AbstractModel
{
    /**
     * @var string Specifies the cursor used for querying in pagination scenarios.
     */
    public $Cursor;

    /**
     * @var integer Status timestamp. Unix second-level timestamp.
     */
    public $Timestamp;

    /**
     * @var string Agent status free | busy | rest | notReady | afterCallWork | offline.
     */
    public $Status;

    /**
     * @var string Specifies the session Id for status association.
     */
    public $SessionId;

    /**
     * @var string Reason for break.
     */
    public $Reason;

    /**
     * @var string Agent email.
     */
    public $StaffEmail;

    /**
     * @var string Agent id.
     */
    public $StaffNo;

    /**
     * @param string $Cursor Specifies the cursor used for querying in pagination scenarios.
     * @param integer $Timestamp Status timestamp. Unix second-level timestamp.
     * @param string $Status Agent status free | busy | rest | notReady | afterCallWork | offline.
     * @param string $SessionId Specifies the session Id for status association.
     * @param string $Reason Reason for break.
     * @param string $StaffEmail Agent email.
     * @param string $StaffNo Agent id.
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
        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("StaffNo",$param) and $param["StaffNo"] !== null) {
            $this->StaffNo = $param["StaffNo"];
        }
    }
}
