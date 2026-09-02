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
 * CreateDspmRiskStrategy request structure.
 *
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getRule() Obtain <p>Policy rule, JSON string</p>
 * @method void setRule(string $Rule) Set <p>Policy rule, JSON string</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getEnName() Obtain <p>English policy name.</p>
 * @method void setEnName(string $EnName) Set <p>English policy name.</p>
 * @method string getDescription() Obtain <p>Policy description.</p>
 * @method void setDescription(string $Description) Set <p>Policy description.</p>
 * @method string getEnDescription() Obtain <p>English strategy description</p>
 * @method void setEnDescription(string $EnDescription) Set <p>English strategy description</p>
 * @method string getRiskLevel() Obtain <p>Risk level. Available values: Info/Low/Medium/High. Default if not passed: Medium</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level. Available values: Info/Low/Medium/High. Default if not passed: Medium</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable. 0: disable, 1: enable. If not specified, enabled by default.</p>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable. 0: disable, 1: enable. If not specified, enabled by default.</p>
 * @method string getRiskType() Obtain <p>Risk type. Currently only support alarm, default if not passed: alarm</p>
 * @method void setRiskType(string $RiskType) Set <p>Risk type. Currently only support alarm, default if not passed: alarm</p>
 * @method string getStrategyCategory() Obtain <p>Policy category. Currently only support SQLOperationAnomaly. If not passed, SQLOperationAnomaly is used by default</p>
 * @method void setStrategyCategory(string $StrategyCategory) Set <p>Policy category. Currently only support SQLOperationAnomaly. If not passed, SQLOperationAnomaly is used by default</p>
 */
class CreateDspmRiskStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Policy rule, JSON string</p>
     */
    public $Rule;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>English policy name.</p>
     */
    public $EnName;

    /**
     * @var string <p>Policy description.</p>
     */
    public $Description;

    /**
     * @var string <p>English strategy description</p>
     */
    public $EnDescription;

    /**
     * @var string <p>Risk level. Available values: Info/Low/Medium/High. Default if not passed: Medium</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>Whether to enable. 0: disable, 1: enable. If not specified, enabled by default.</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>Risk type. Currently only support alarm, default if not passed: alarm</p>
     */
    public $RiskType;

    /**
     * @var string <p>Policy category. Currently only support SQLOperationAnomaly. If not passed, SQLOperationAnomaly is used by default</p>
     */
    public $StrategyCategory;

    /**
     * @param string $Name <p>Policy name.</p>
     * @param string $Rule <p>Policy rule, JSON string</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $EnName <p>English policy name.</p>
     * @param string $Description <p>Policy description.</p>
     * @param string $EnDescription <p>English strategy description</p>
     * @param string $RiskLevel <p>Risk level. Available values: Info/Low/Medium/High. Default if not passed: Medium</p>
     * @param integer $IsEnabled <p>Whether to enable. 0: disable, 1: enable. If not specified, enabled by default.</p>
     * @param string $RiskType <p>Risk type. Currently only support alarm, default if not passed: alarm</p>
     * @param string $StrategyCategory <p>Policy category. Currently only support SQLOperationAnomaly. If not passed, SQLOperationAnomaly is used by default</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnDescription",$param) and $param["EnDescription"] !== null) {
            $this->EnDescription = $param["EnDescription"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }
    }
}
