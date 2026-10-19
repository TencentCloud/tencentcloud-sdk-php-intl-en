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
 * Compliance package rule information.
 *
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method integer getRiskLevel() Obtain <p>Risk level.</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level.</p>
 * @method array getInputParameter() Obtain <p>Input parameters.</p>
 * @method void setInputParameter(array $InputParameter) Set <p>Input parameters.</p>
 * @method string getIdentifier() Obtain <p>Rule ID</p>
 * @method void setIdentifier(string $Identifier) Set <p>Rule ID</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getManagedRuleIdentifier() Obtain <p>Preset rule identifier</p>
 * @method void setManagedRuleIdentifier(string $ManagedRuleIdentifier) Set <p>Preset rule identifier</p>
 * @method string getConfigRuleId() Obtain <p>Rule ID.</p>
 * @method void setConfigRuleId(string $ConfigRuleId) Set <p>Rule ID.</p>
 * @method string getCompliancePackId() Obtain <p>Compliance package ID.</p>
 * @method void setCompliancePackId(string $CompliancePackId) Set <p>Compliance package ID.</p>
 */
class CompliancePackRule extends AbstractModel
{
    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var integer <p>Risk level.</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>Input parameters.</p>
     */
    public $InputParameter;

    /**
     * @var string <p>Rule ID</p>
     */
    public $Identifier;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Preset rule identifier</p>
     */
    public $ManagedRuleIdentifier;

    /**
     * @var string <p>Rule ID.</p>
     */
    public $ConfigRuleId;

    /**
     * @var string <p>Compliance package ID.</p>
     */
    public $CompliancePackId;

    /**
     * @param string $RuleName <p>rule name</p>
     * @param integer $RiskLevel <p>Risk level.</p>
     * @param array $InputParameter <p>Input parameters.</p>
     * @param string $Identifier <p>Rule ID</p>
     * @param string $Description <p>Description.</p>
     * @param string $ManagedRuleIdentifier <p>Preset rule identifier</p>
     * @param string $ConfigRuleId <p>Rule ID.</p>
     * @param string $CompliancePackId <p>Compliance package ID.</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ManagedRuleIdentifier",$param) and $param["ManagedRuleIdentifier"] !== null) {
            $this->ManagedRuleIdentifier = $param["ManagedRuleIdentifier"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }
    }
}
