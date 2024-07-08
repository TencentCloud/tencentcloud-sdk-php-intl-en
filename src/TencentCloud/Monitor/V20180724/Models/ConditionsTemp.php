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
 * Alarm trigger condition template
 *
 * @method string getTemplateName() Obtain Template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateName(string $TemplateName) Set Template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ConditionsTemp extends AbstractModel
{
    /**
     * @var string Template name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateName;

    /**
     * @var AlarmPolicyCondition Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EventCondition;

    /**
     * @param string $TemplateName Template name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AlarmPolicyCondition $Condition Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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
