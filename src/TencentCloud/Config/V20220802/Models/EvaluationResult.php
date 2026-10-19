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
 * Assessment result.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceType() Obtain Resource type.
 * @method void setResourceType(string $ResourceType) Set Resource type.
 * @method string getResourceRegion() Obtain Resource region
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getConfigRuleId() Obtain Rule ID
 * @method void setConfigRuleId(string $ConfigRuleId) Set Rule ID
 * @method string getConfigRuleName() Obtain Rule name
 * @method void setConfigRuleName(string $ConfigRuleName) Set Rule name
 * @method string getCompliancePackId() Obtain Compliance package ID.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID.
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 * @method Annotation getAnnotation() Obtain Assessment result.
 * @method void setAnnotation(Annotation $Annotation) Set Assessment result.
 * @method string getComplianceType() Obtain Compliance type.
 * @method void setComplianceType(string $ComplianceType) Set Compliance type.
 * @method string getInvokingEventMessageType() Obtain Rule initiation type.
 * @method void setInvokingEventMessageType(string $InvokingEventMessageType) Set Rule initiation type.
 * @method string getConfigRuleInvokedTime() Obtain Evaluation initiation time.
 * @method void setConfigRuleInvokedTime(string $ConfigRuleInvokedTime) Set Evaluation initiation time.
 * @method string getResultRecordedTime() Obtain Actual evaluation time.
 * @method void setResultRecordedTime(string $ResultRecordedTime) Set Actual evaluation time.
 */
class EvaluationResult extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource type.
     */
    public $ResourceType;

    /**
     * @var string Resource region
     */
    public $ResourceRegion;

    /**
     * @var string Resource name
     */
    public $ResourceName;

    /**
     * @var string Rule ID
     */
    public $ConfigRuleId;

    /**
     * @var string Rule name
     */
    public $ConfigRuleName;

    /**
     * @var string Compliance package ID.
     */
    public $CompliancePackId;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @var Annotation Assessment result.
     */
    public $Annotation;

    /**
     * @var string Compliance type.
     */
    public $ComplianceType;

    /**
     * @var string Rule initiation type.
     */
    public $InvokingEventMessageType;

    /**
     * @var string Evaluation initiation time.
     */
    public $ConfigRuleInvokedTime;

    /**
     * @var string Actual evaluation time.
     */
    public $ResultRecordedTime;

    /**
     * @param string $ResourceId Resource ID
     * @param string $ResourceType Resource type.
     * @param string $ResourceRegion Resource region
     * @param string $ResourceName Resource name
     * @param string $ConfigRuleId Rule ID
     * @param string $ConfigRuleName Rule name
     * @param string $CompliancePackId Compliance package ID.
     * @param integer $RiskLevel Risk level
     * @param Annotation $Annotation Assessment result.
     * @param string $ComplianceType Compliance type.
     * @param string $InvokingEventMessageType Rule initiation type.
     * @param string $ConfigRuleInvokedTime Evaluation initiation time.
     * @param string $ResultRecordedTime Actual evaluation time.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("ConfigRuleName",$param) and $param["ConfigRuleName"] !== null) {
            $this->ConfigRuleName = $param["ConfigRuleName"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("InvokingEventMessageType",$param) and $param["InvokingEventMessageType"] !== null) {
            $this->InvokingEventMessageType = $param["InvokingEventMessageType"];
        }

        if (array_key_exists("ConfigRuleInvokedTime",$param) and $param["ConfigRuleInvokedTime"] !== null) {
            $this->ConfigRuleInvokedTime = $param["ConfigRuleInvokedTime"];
        }

        if (array_key_exists("ResultRecordedTime",$param) and $param["ResultRecordedTime"] !== null) {
            $this->ResultRecordedTime = $param["ResultRecordedTime"];
        }
    }
}
