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
 * Response structure information of the Prometheus recording rule
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getRuleState() Obtain Rule status code
 * @method void setRuleState(integer $RuleState) Set Rule status code
 * @method string getName() Obtain Group name
 * @method void setName(string $Name) Set Group name
 * @method string getGroup() Obtain Rule group
 * @method void setGroup(string $Group) Set Rule group
 * @method integer getTotal() Obtain Number of rules
 * @method void setTotal(integer $Total) Set Number of rules
 * @method string getCreatedAt() Obtain Rule creation time
 * @method void setCreatedAt(string $CreatedAt) Set Rule creation time
 * @method string getUpdatedAt() Obtain Rule update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Rule update time
 * @method string getRuleName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RecordingRuleSet extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer Rule status code
     */
    public $RuleState;

    /**
     * @var string Group name
     */
    public $Name;

    /**
     * @var string Rule group
     */
    public $Group;

    /**
     * @var integer Number of rules
     */
    public $Total;

    /**
     * @var string Rule creation time
     */
    public $CreatedAt;

    /**
     * @var string Rule update time
     */
    public $UpdatedAt;

    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @param string $RuleId Rule ID
     * @param integer $RuleState Rule status code
     * @param string $Name Group name
     * @param string $Group Rule group
     * @param integer $Total Number of rules
     * @param string $CreatedAt Rule creation time
     * @param string $UpdatedAt Rule update time
     * @param string $RuleName Rule name
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
