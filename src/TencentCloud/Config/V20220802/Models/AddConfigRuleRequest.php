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
 * AddConfigRule request structure.
 *
 * @method string getIdentifier() Obtain <p>Rule template ID. The preset rule template is Identifier and the custom rule is the serverless cloud function ARN (region:functionName).</p>
 * @method void setIdentifier(string $Identifier) Set <p>Rule template ID. The preset rule template is Identifier and the custom rule is the serverless cloud function ARN (region:functionName).</p>
 * @method string getIdentifierType() Obtain <p>Rule template type. Valid values: SYSTEM and CUSTOMIZE.</p>
 * @method void setIdentifierType(string $IdentifierType) Set <p>Rule template type. Valid values: SYSTEM and CUSTOMIZE.</p>
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method array getResourceType() Obtain <p>Resources supported by the rule.</p>
 * @method void setResourceType(array $ResourceType) Set <p>Resources supported by the rule.</p>
 * @method array getTriggerType() Obtain <p>Trigger types, supporting up to two types.</p>
 * @method void setTriggerType(array $TriggerType) Set <p>Trigger types, supporting up to two types.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method array getInputParameter() Obtain <p>Input parameters.</p>
 * @method void setInputParameter(array $InputParameter) Set <p>Input parameters.</p>
 * @method string getDescription() Obtain <p>Rule description, which is 0–1024 characters in length.</p>
 * @method void setDescription(string $Description) Set <p>Rule description, which is 0–1024 characters in length.</p>
 * @method array getRegionsScope() Obtain <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
 * @method void setRegionsScope(array $RegionsScope) Set <p>Rule evaluation region scope. The rule only applies to resources in specified regions. Supported regions are those returned by config:ListResourceRegions.</p>
 * @method array getTagsScope() Obtain <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
 * @method void setTagsScope(array $TagsScope) Set <p>Rule evaluation tag scope. The rule only applies to resources bound with specified tags.</p>
 * @method array getExcludeResourceIdsScope() Obtain <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) Set <p>The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.</p>
 */
class AddConfigRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Rule template ID. The preset rule template is Identifier and the custom rule is the serverless cloud function ARN (region:functionName).</p>
     */
    public $Identifier;

    /**
     * @var string <p>Rule template type. Valid values: SYSTEM and CUSTOMIZE.</p>
     */
    public $IdentifierType;

    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var array <p>Resources supported by the rule.</p>
     */
    public $ResourceType;

    /**
     * @var array <p>Trigger types, supporting up to two types.</p>
     */
    public $TriggerType;

    /**
     * @var integer <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>Input parameters.</p>
     */
    public $InputParameter;

    /**
     * @var string <p>Rule description, which is 0–1024 characters in length.</p>
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
     * @param string $Identifier <p>Rule template ID. The preset rule template is Identifier and the custom rule is the serverless cloud function ARN (region:functionName).</p>
     * @param string $IdentifierType <p>Rule template type. Valid values: SYSTEM and CUSTOMIZE.</p>
     * @param string $RuleName <p>rule name</p>
     * @param array $ResourceType <p>Resources supported by the rule.</p>
     * @param array $TriggerType <p>Trigger types, supporting up to two types.</p>
     * @param integer $RiskLevel <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     * @param array $InputParameter <p>Input parameters.</p>
     * @param string $Description <p>Rule description, which is 0–1024 characters in length.</p>
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
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
