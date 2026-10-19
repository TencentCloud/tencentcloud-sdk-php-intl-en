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
 * System compliance package information.
 *
 * @method string getCompliancePackId() Obtain Compliance package ID.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID.
 * @method string getCompliancePackName() Obtain Name
 * @method void setCompliancePackName(string $CompliancePackName) Set Name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getRiskLevel() Obtain Compliance package risk level 1: high-risk.
2: Medium-risk.
3: Low risk.
 * @method void setRiskLevel(integer $RiskLevel) Set Compliance package risk level 1: high-risk.
2: Medium-risk.
3: Low risk.
 * @method array getConfigRules() Obtain Compliance package rule information.
 * @method void setConfigRules(array $ConfigRules) Set Compliance package rule information.
 */
class SystemCompliancePack extends AbstractModel
{
    /**
     * @var string Compliance package ID.
     */
    public $CompliancePackId;

    /**
     * @var string Name
     */
    public $CompliancePackName;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Compliance package risk level 1: high-risk.
2: Medium-risk.
3: Low risk.
     */
    public $RiskLevel;

    /**
     * @var array Compliance package rule information.
     */
    public $ConfigRules;

    /**
     * @param string $CompliancePackId Compliance package ID.
     * @param string $CompliancePackName Name
     * @param string $Description Description
     * @param integer $RiskLevel Compliance package risk level 1: high-risk.
2: Medium-risk.
3: Low risk.
     * @param array $ConfigRules Compliance package rule information.
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
        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new CompliancePackRuleForManage();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }
    }
}
