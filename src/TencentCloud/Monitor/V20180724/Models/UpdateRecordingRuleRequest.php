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
 * UpdateRecordingRule request structure.
 *
 * @method string getName() Obtain Recording rule name
 * @method void setName(string $Name) Set Recording rule name
 * @method string getGroup() Obtain Recording rule group content, which is in YAML format and is Base64-encoded.
 * @method void setGroup(string $Group) Set Recording rule group content, which is in YAML format and is Base64-encoded.
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method string getRuleId() Obtain Prometheus recording rule ID
 * @method void setRuleId(string $RuleId) Set Prometheus recording rule ID
 * @method integer getRuleState() Obtain Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
 * @method void setRuleState(integer $RuleState) Set Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
 */
class UpdateRecordingRuleRequest extends AbstractModel
{
    /**
     * @var string Recording rule name
     */
    public $Name;

    /**
     * @var string Recording rule group content, which is in YAML format and is Base64-encoded.
     */
    public $Group;

    /**
     * @var string Prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var string Prometheus recording rule ID
     */
    public $RuleId;

    /**
     * @var integer Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
     */
    public $RuleState;

    /**
     * @param string $Name Recording rule name
     * @param string $Group Recording rule group content, which is in YAML format and is Base64-encoded.
     * @param string $InstanceId Prometheus instance ID
     * @param string $RuleId Prometheus recording rule ID
     * @param integer $RuleState Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
Default value: 2 (enabled).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }
    }
}
