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
 * UpdateAggregateCompliancePack request structure.
 *
 * @method string getCompliancePackName() Obtain Compliance package name.
 * @method void setCompliancePackName(string $CompliancePackName) Set Compliance package name.
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 * @method string getCompliancePackId() Obtain Compliance package ID.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID.
 * @method array getConfigRules() Obtain Compliance package rules.
 * @method void setConfigRules(array $ConfigRules) Set Compliance package rules.
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class UpdateAggregateCompliancePackRequest extends AbstractModel
{
    /**
     * @var string Compliance package name.
     */
    public $CompliancePackName;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @var string Compliance package ID.
     */
    public $CompliancePackId;

    /**
     * @var array Compliance package rules.
     */
    public $ConfigRules;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $CompliancePackName Compliance package name.
     * @param integer $RiskLevel Risk level
     * @param string $CompliancePackId Compliance package ID.
     * @param array $ConfigRules Compliance package rules.
     * @param string $AccountGroupId Account group ID.
     * @param string $Description Description
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
        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new CompliancePackRule();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
