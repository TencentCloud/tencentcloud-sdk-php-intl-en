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
 * Specifies the staff status response item.
 *
 * @method string getStaffUserId() Obtain Agent account.
 * @method void setStaffUserId(string $StaffUserId) Set Agent account.
 * @method string getErrorCode() Obtain Error code. see the overall error code in the protocol.
 * @method void setErrorCode(string $ErrorCode) Set Error code. see the overall error code in the protocol.
 * @method string getErrorMessage() Obtain Error message.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message.
 * @method string getStatus() Obtain Current status.
 * @method void setStatus(string $Status) Set Current status.
 * @method string getReason() Obtain Status if it is on break. specifies the reason.
 * @method void setReason(string $Reason) Set Status if it is on break. specifies the reason.
 * @method string getPreviousStatus() Obtain Previous status.
 * @method void setPreviousStatus(string $PreviousStatus) Set Previous status.
 * @method string getPreviousReason() Obtain If the earlier status is on break, this is the reason.
 * @method void setPreviousReason(string $PreviousReason) Set If the earlier status is on break, this is the reason.
 */
class SetStaffStatusRspItem extends AbstractModel
{
    /**
     * @var string Agent account.
     */
    public $StaffUserId;

    /**
     * @var string Error code. see the overall error code in the protocol.
     */
    public $ErrorCode;

    /**
     * @var string Error message.
     */
    public $ErrorMessage;

    /**
     * @var string Current status.
     */
    public $Status;

    /**
     * @var string Status if it is on break. specifies the reason.
     */
    public $Reason;

    /**
     * @var string Previous status.
     */
    public $PreviousStatus;

    /**
     * @var string If the earlier status is on break, this is the reason.
     */
    public $PreviousReason;

    /**
     * @param string $StaffUserId Agent account.
     * @param string $ErrorCode Error code. see the overall error code in the protocol.
     * @param string $ErrorMessage Error message.
     * @param string $Status Current status.
     * @param string $Reason Status if it is on break. specifies the reason.
     * @param string $PreviousStatus Previous status.
     * @param string $PreviousReason If the earlier status is on break, this is the reason.
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
        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("PreviousStatus",$param) and $param["PreviousStatus"] !== null) {
            $this->PreviousStatus = $param["PreviousStatus"];
        }

        if (array_key_exists("PreviousReason",$param) and $param["PreviousReason"] !== null) {
            $this->PreviousReason = $param["PreviousReason"];
        }
    }
}
