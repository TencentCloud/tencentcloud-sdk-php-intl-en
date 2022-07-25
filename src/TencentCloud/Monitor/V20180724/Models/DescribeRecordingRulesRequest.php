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
 * DescribeRecordingRules request structure.
 *
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getRuleState() Obtain Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method void setRuleState(integer $RuleState) Set Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 */
class DescribeRecordingRulesRequest extends AbstractModel
{
    /**
     * @var string Prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     */
    public $RuleState;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @param string $InstanceId Prometheus instance ID
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $RuleId Rule ID
     * @param integer $RuleState Rule status code. Valid values:
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     * @param string $Name Rule name
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
