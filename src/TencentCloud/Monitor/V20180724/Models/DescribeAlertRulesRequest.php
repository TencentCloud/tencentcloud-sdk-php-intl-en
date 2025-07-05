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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRules request structure.
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
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method void setRuleState(integer $RuleState) Set Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getType() Obtain Alerting rule template category
 * @method void setType(string $Type) Set Alerting rule template category
 */
class DescribeAlertRulesRequest extends AbstractModel
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
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     */
    public $RuleState;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Alerting rule template category
     */
    public $Type;

    /**
     * @param string $InstanceId Prometheus instance ID
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $RuleId Rule ID
     * @param integer $RuleState Rule status code. Valid values:
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     * @param string $RuleName Rule name
     * @param string $Type Alerting rule template category
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
