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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reason for unavailability
 *
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Reason
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reason
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class UnavailableReason extends AbstractModel
{
    /**
     * @var string Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Reason
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param string $InstanceId Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Reason Reason
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
