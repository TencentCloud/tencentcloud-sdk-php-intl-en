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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyInfo request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method string getPolicyId() Obtain Alarm policy ID
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
 * @method string getKey() Obtain Field to be modified. Valid values: NAME (policy name), REMARK (policy remarks)
 * @method void setKey(string $Key) Set Field to be modified. Valid values: NAME (policy name), REMARK (policy remarks)
 * @method string getValue() Obtain Value after modification
 * @method void setValue(string $Value) Set Value after modification
 */
class ModifyAlarmPolicyInfoRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var string Alarm policy ID
     */
    public $PolicyId;

    /**
     * @var string Field to be modified. Valid values: NAME (policy name), REMARK (policy remarks)
     */
    public $Key;

    /**
     * @var string Value after modification
     */
    public $Value;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param string $PolicyId Alarm policy ID
     * @param string $Key Field to be modified. Valid values: NAME (policy name), REMARK (policy remarks)
     * @param string $Value Value after modification
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
