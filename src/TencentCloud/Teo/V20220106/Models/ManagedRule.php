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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rule
 *
 * @method integer getRuleId() Obtain ID of the rule
 * @method void setRuleId(integer $RuleId) Set ID of the rule
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method string getRuleTypeName() Obtain Rule type
 * @method void setRuleTypeName(string $RuleTypeName) Set Rule type
 * @method string getRuleLevelDesc() Obtain Rule level
 * @method void setRuleLevelDesc(string $RuleLevelDesc) Set Rule level
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getStatus() Obtain Rule status: `block`, `allow`
 * @method void setStatus(string $Status) Set Rule status: `block`, `allow`
 * @method array getRuleTags() Obtain Tag of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleTags(array $RuleTags) Set Tag of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRuleTypeDesc() Obtain Description of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleTypeDesc(string $RuleTypeDesc) Set Description of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getRuleTypeId() Obtain ID of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleTypeId(integer $RuleTypeId) Set ID of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ManagedRule extends AbstractModel
{
    /**
     * @var integer ID of the rule
     */
    public $RuleId;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var string Rule type
     */
    public $RuleTypeName;

    /**
     * @var string Rule level
     */
    public $RuleLevelDesc;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Rule status: `block`, `allow`
     */
    public $Status;

    /**
     * @var array Tag of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleTags;

    /**
     * @var string Description of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleTypeDesc;

    /**
     * @var integer ID of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleTypeId;

    /**
     * @param integer $RuleId ID of the rule
     * @param string $Description Rule description
     * @param string $RuleTypeName Rule type
     * @param string $RuleLevelDesc Rule level
     * @param string $UpdateTime Update time
     * @param string $Status Rule status: `block`, `allow`
     * @param array $RuleTags Tag of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RuleTypeDesc Description of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $RuleTypeId ID of the rule type
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleLevelDesc",$param) and $param["RuleLevelDesc"] !== null) {
            $this->RuleLevelDesc = $param["RuleLevelDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleTags",$param) and $param["RuleTags"] !== null) {
            $this->RuleTags = $param["RuleTags"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }

        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }
    }
}
