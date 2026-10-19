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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAggregateConfigRule request structure.
 *
 * @method array getTriggerType() Obtain Trigger types. A maximum of two types are supported.
 * @method void setTriggerType(array $TriggerType) Set Trigger types. A maximum of two types are supported.
 * @method integer getRiskLevel() Obtain Risk level
1: High-risk.
2: Medium-risk.
3: Low risk.
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
1: High-risk.
2: Medium-risk.
3: Low risk.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method array getInputParameter() Obtain Input parameters
 * @method void setInputParameter(array $InputParameter) Set Input parameters
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method array getRegionScope() Obtain Associated regions.
 * @method void setRegionScope(array $RegionScope) Set Associated regions.
 * @method array getTagsScope() Obtain Associated tag
 * @method void setTagsScope(array $TagsScope) Set Associated tag
 * @method array getExcludeResourceIdsScope() Obtain Excluded resource ID.
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) Set Excluded resource ID.
 */
class UpdateAggregateConfigRuleRequest extends AbstractModel
{
    /**
     * @var array Trigger types. A maximum of two types are supported.
     */
    public $TriggerType;

    /**
     * @var integer Risk level
1: High-risk.
2: Medium-risk.
3: Low risk.
     */
    public $RiskLevel;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var array Input parameters
     */
    public $InputParameter;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var array Associated regions.
     */
    public $RegionScope;

    /**
     * @var array Associated tag
     */
    public $TagsScope;

    /**
     * @var array Excluded resource ID.
     */
    public $ExcludeResourceIdsScope;

    /**
     * @param array $TriggerType Trigger types. A maximum of two types are supported.
     * @param integer $RiskLevel Risk level
1: High-risk.
2: Medium-risk.
3: Low risk.
     * @param string $RuleId Rule ID
     * @param string $AccountGroupId Account group ID.
     * @param string $RuleName Rule name
     * @param array $InputParameter Input parameters
     * @param string $Description Description
     * @param array $RegionScope Associated regions.
     * @param array $TagsScope Associated tag
     * @param array $ExcludeResourceIdsScope Excluded resource ID.
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
        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = [];
            foreach ($param["TriggerType"] as $key => $value){
                $obj = new TriggerType();
                $obj->deserialize($value);
                array_push($this->TriggerType, $obj);
            }
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RegionScope",$param) and $param["RegionScope"] !== null) {
            $this->RegionScope = $param["RegionScope"];
        }

        if (array_key_exists("TagsScope",$param) and $param["TagsScope"] !== null) {
            $this->TagsScope = [];
            foreach ($param["TagsScope"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagsScope, $obj);
            }
        }

        if (array_key_exists("ExcludeResourceIdsScope",$param) and $param["ExcludeResourceIdsScope"] !== null) {
            $this->ExcludeResourceIdsScope = $param["ExcludeResourceIdsScope"];
        }
    }
}
