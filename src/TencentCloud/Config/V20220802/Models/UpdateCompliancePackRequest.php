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
 * UpdateCompliancePack request structure.
 *
 * @method string getCompliancePackName() Obtain <p>Compliance package name.</p>
 * @method void setCompliancePackName(string $CompliancePackName) Set <p>Compliance package name.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level.</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level.</p>
 * @method string getCompliancePackId() Obtain <p>Compliance package ID.</p>
 * @method void setCompliancePackId(string $CompliancePackId) Set <p>Compliance package ID.</p>
 * @method array getConfigRules() Obtain <p>Compliance package rules.</p>
 * @method void setConfigRules(array $ConfigRules) Set <p>Compliance package rules.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 */
class UpdateCompliancePackRequest extends AbstractModel
{
    /**
     * @var string <p>Compliance package name.</p>
     */
    public $CompliancePackName;

    /**
     * @var integer <p>Risk level.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Compliance package ID.</p>
     */
    public $CompliancePackId;

    /**
     * @var array <p>Compliance package rules.</p>
     */
    public $ConfigRules;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @param string $CompliancePackName <p>Compliance package name.</p>
     * @param integer $RiskLevel <p>Risk level.</p>
     * @param string $CompliancePackId <p>Compliance package ID.</p>
     * @param array $ConfigRules <p>Compliance package rules.</p>
     * @param string $Description <p>Description.</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
