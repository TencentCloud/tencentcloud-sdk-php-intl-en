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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance creation process
 *
 * @method string getType() Obtain Instance creation process type
 * @method void setType(string $Type) Set Instance creation process type
 * @method string getStatus() Obtain Instance creation process status
 * @method void setStatus(string $Status) Set Instance creation process status
 * @method string getReason() Obtain Reasons for transiting to the process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reasons for transiting to the process
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegistryCondition extends AbstractModel
{
    /**
     * @var string Instance creation process type
     */
    public $Type;

    /**
     * @var string Instance creation process status
     */
    public $Status;

    /**
     * @var string Reasons for transiting to the process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param string $Type Instance creation process type
     * @param string $Status Instance creation process status
     * @param string $Reason Reasons for transiting to the process
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
