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
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 * @method string getStatus() Obtain Rule status
 * @method void setStatus(string $Status) Set Rule status
 * @method string getConfigRuleId() Obtain Rule ID
 * @method void setConfigRuleId(string $ConfigRuleId) Set Rule ID
 * @method string getComplianceResult() Obtain Assessment result
Compliant: 'COMPLIANT'
Non-compliant: 'NON_COMPLIANT'
 * @method void setComplianceResult(string $ComplianceResult) Set Assessment result
Compliant: 'COMPLIANT'
Non-compliant: 'NON_COMPLIANT'
 * @method array getLabels() Obtain Keyword.
 * @method void setLabels(array $Labels) Set Keyword.
 * @method array getInputParameter() Obtain Input parameters
 * @method void setInputParameter(array $InputParameter) Set Input parameters
 * @method array getSourceCondition() Obtain Parameter format.
 * @method void setSourceCondition(array $SourceCondition) Set Parameter format.
 * @method string getIdentifier() Obtain Rule ID
 * @method void setIdentifier(string $Identifier) Set Rule ID
 * @method string getCreateByType() Obtain Creation method. Valid values: user, compliancePack, and system.
 * @method void setCreateByType(string $CreateByType) Set Creation method. Valid values: user, compliancePack, and system.
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method array getManageInputParameter() Obtain Parameter description
 * @method void setManageInputParameter(array $ManageInputParameter) Set Parameter description
 */
class ComplianceConfigRule extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @var string Rule status
     */
    public $Status;

    /**
     * @var string Rule ID
     */
    public $ConfigRuleId;

    /**
     * @var string Assessment result
Compliant: 'COMPLIANT'
Non-compliant: 'NON_COMPLIANT'
     */
    public $ComplianceResult;

    /**
     * @var array Keyword.
     */
    public $Labels;

    /**
     * @var array Input parameters
     */
    public $InputParameter;

    /**
     * @var array Parameter format.
     */
    public $SourceCondition;

    /**
     * @var string Rule ID
     */
    public $Identifier;

    /**
     * @var string Creation method. Valid values: user, compliancePack, and system.
     */
    public $CreateByType;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var array Parameter description
     */
    public $ManageInputParameter;

    /**
     * @param string $RuleName Rule name
     * @param integer $RiskLevel Risk level
     * @param string $Status Rule status
     * @param string $ConfigRuleId Rule ID
     * @param string $ComplianceResult Assessment result
Compliant: 'COMPLIANT'
Non-compliant: 'NON_COMPLIANT'
     * @param array $Labels Keyword.
     * @param array $InputParameter Input parameters
     * @param array $SourceCondition Parameter format.
     * @param string $Identifier Rule ID
     * @param string $CreateByType Creation method. Valid values: user, compliancePack, and system.
     * @param string $Description Rule description
     * @param array $ManageInputParameter Parameter description
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("CreateByType",$param) and $param["CreateByType"] !== null) {
            $this->CreateByType = $param["CreateByType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ManageInputParameter",$param) and $param["ManageInputParameter"] !== null) {
            $this->ManageInputParameter = [];
            foreach ($param["ManageInputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->ManageInputParameter, $obj);
            }
        }
    }
}
