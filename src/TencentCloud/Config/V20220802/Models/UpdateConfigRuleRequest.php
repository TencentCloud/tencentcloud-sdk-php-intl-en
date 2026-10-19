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
 * UpdateConfigRule request structure.
 *
 * @method array getTriggerType() Obtain <p>Trigger types, supporting up to two types.</p>
 * @method void setTriggerType(array $TriggerType) Set <p>Trigger types, supporting up to two types.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method string getRuleId() Obtain <p>Rule ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID.</p>
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method array getInputParameter() Obtain <p>Input parameters.</p>
 * @method void setInputParameter(array $InputParameter) Set <p>Input parameters.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method array getRegionsScope() Obtain <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
 * @method void setRegionsScope(array $RegionsScope) Set <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
 * @method array getTagsScope() Obtain <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
 * @method void setTagsScope(array $TagsScope) Set <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
 * @method array getExcludeResourceIdsScope() Obtain <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) Set <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
 */
class UpdateConfigRuleRequest extends AbstractModel
{
    /**
     * @var array <p>Trigger types, supporting up to two types.</p>
     */
    public $TriggerType;

    /**
     * @var integer <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Rule ID.</p>
     */
    public $RuleId;

    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var array <p>Input parameters.</p>
     */
    public $InputParameter;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var array <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
     */
    public $RegionsScope;

    /**
     * @var array <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
     */
    public $TagsScope;

    /**
     * @var array <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
     */
    public $ExcludeResourceIdsScope;

    /**
     * @param array $TriggerType <p>Trigger types, supporting up to two types.</p>
     * @param integer $RiskLevel <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     * @param string $RuleId <p>Rule ID.</p>
     * @param string $RuleName <p>rule name</p>
     * @param array $InputParameter <p>Input parameters.</p>
     * @param string $Description <p>Description.</p>
     * @param array $RegionsScope <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
     * @param array $TagsScope <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
     * @param array $ExcludeResourceIdsScope <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
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

        if (array_key_exists("RegionsScope",$param) and $param["RegionsScope"] !== null) {
            $this->RegionsScope = $param["RegionsScope"];
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
