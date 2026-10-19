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
 * User compliance package information.
 *
 * @method string getStatus() Obtain <p>Compliance package status</p>
 * @method void setStatus(string $Status) Set <p>Compliance package status</p>
 * @method string getCompliancePackId() Obtain <p>Compliance package ID.</p>
 * @method void setCompliancePackId(string $CompliancePackId) Set <p>Compliance package ID.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getCompliancePackName() Obtain <p>Compliance package name.</p>
 * @method void setCompliancePackName(string $CompliancePackName) Set <p>Compliance package name.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level.</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level.</p>
 * @method string getComplianceResult() Obtain <p>Evaluation results.</p>
 * @method void setComplianceResult(string $ComplianceResult) Set <p>Evaluation results.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method array getNoCompliantNames() Obtain <p>Non-compliant rule name</p>
 * @method void setNoCompliantNames(array $NoCompliantNames) Set <p>Non-compliant rule name</p>
 * @method integer getRuleCount() Obtain <p>Number of compliance package rules</p>
 * @method void setRuleCount(integer $RuleCount) Set <p>Number of compliance package rules</p>
 */
class ConfigCompliancePack extends AbstractModel
{
    /**
     * @var string <p>Compliance package status</p>
     */
    public $Status;

    /**
     * @var string <p>Compliance package ID.</p>
     */
    public $CompliancePackId;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Compliance package name.</p>
     */
    public $CompliancePackName;

    /**
     * @var integer <p>Risk level.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Evaluation results.</p>
     */
    public $ComplianceResult;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var array <p>Non-compliant rule name</p>
     */
    public $NoCompliantNames;

    /**
     * @var integer <p>Number of compliance package rules</p>
     */
    public $RuleCount;

    /**
     * @param string $Status <p>Compliance package status</p>
     * @param string $CompliancePackId <p>Compliance package ID.</p>
     * @param string $Description <p>Description.</p>
     * @param string $CompliancePackName <p>Compliance package name.</p>
     * @param integer $RiskLevel <p>Risk level.</p>
     * @param string $ComplianceResult <p>Evaluation results.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param array $NoCompliantNames <p>Non-compliant rule name</p>
     * @param integer $RuleCount <p>Number of compliance package rules</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NoCompliantNames",$param) and $param["NoCompliantNames"] !== null) {
            $this->NoCompliantNames = $param["NoCompliantNames"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }
    }
}
