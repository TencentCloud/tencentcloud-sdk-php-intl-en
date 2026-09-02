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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pending risk information to be governed for cloud boundaries
 *
 * @method string getTitle() Obtain Risk title
 * @method void setTitle(string $Title) Set Risk title
 * @method string getSeverity() Obtain Risk level
 * @method void setSeverity(string $Severity) Set Risk level
 * @method string getRuleType() Obtain Risk type
 * @method void setRuleType(string $RuleType) Set Risk type
 * @method integer getRiskCount() Obtain Number of associated risks
 * @method void setRiskCount(integer $RiskCount) Set Number of associated risks
 */
class DescribeExposureStatisticsItem extends AbstractModel
{
    /**
     * @var string Risk title
     */
    public $Title;

    /**
     * @var string Risk level
     */
    public $Severity;

    /**
     * @var string Risk type
     */
    public $RuleType;

    /**
     * @var integer Number of associated risks
     */
    public $RiskCount;

    /**
     * @param string $Title Risk title
     * @param string $Severity Risk level
     * @param string $RuleType Risk type
     * @param integer $RiskCount Number of associated risks
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }
    }
}
