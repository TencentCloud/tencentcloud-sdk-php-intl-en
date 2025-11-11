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
 * Describes the information item for creating a staff.
 *
 * @method string getStaffUserId() Obtain Agent account.
 * @method void setStaffUserId(string $StaffUserId) Set Agent account.
 * @method string getStatus() Obtain Status. specifies the instance status. valid values: free (idle), notReady (busy), rest (short break).	
 * @method void setStatus(string $Status) Set Status. specifies the instance status. valid values: free (idle), notReady (busy), rest (short break).	
 * @method string getReason() Obtain Specifies the reason if the break state is set.
 * @method void setReason(string $Reason) Set Specifies the reason if the break state is set.
 */
class SetStaffStatusItem extends AbstractModel
{
    /**
     * @var string Agent account.
     */
    public $StaffUserId;

    /**
     * @var string Status. specifies the instance status. valid values: free (idle), notReady (busy), rest (short break).	
     */
    public $Status;

    /**
     * @var string Specifies the reason if the break state is set.
     */
    public $Reason;

    /**
     * @param string $StaffUserId Agent account.
     * @param string $Status Status. specifies the instance status. valid values: free (idle), notReady (busy), rest (short break).	
     * @param string $Reason Specifies the reason if the break state is set.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
