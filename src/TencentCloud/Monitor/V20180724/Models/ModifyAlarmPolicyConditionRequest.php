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
 * ModifyAlarmPolicyCondition request structure.
 *
 * @method string getModule() Obtain Module name, which is fixed at "monitor"
 * @method void setModule(string $Module) Set Module name, which is fixed at "monitor"
 * @method string getPolicyId() Obtain Alarm policy ID
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition
 */
class ModifyAlarmPolicyConditionRequest extends AbstractModel
{
    /**
     * @var string Module name, which is fixed at "monitor"
     */
    public $Module;

    /**
     * @var string Alarm policy ID
     */
    public $PolicyId;

    /**
     * @var AlarmPolicyCondition Metric trigger condition
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition
     */
    public $EventCondition;

    /**
     * @param string $Module Module name, which is fixed at "monitor"
     * @param string $PolicyId Alarm policy ID
     * @param AlarmPolicyCondition $Condition Metric trigger condition
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }
    }
}
