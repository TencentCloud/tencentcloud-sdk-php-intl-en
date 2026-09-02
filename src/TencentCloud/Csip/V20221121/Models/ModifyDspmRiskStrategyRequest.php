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
 * ModifyDspmRiskStrategy request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getStrategyType() Obtain <p>Risk policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Risk policy type</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable</p>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable</p>
 * @method string getRule() Obtain <p>Policy content, for example: {     ThresholdValue: &quot;100&quot; }</p>
 * @method void setRule(string $Rule) Set <p>Policy content, for example: {     ThresholdValue: &quot;100&quot; }</p>
 * @method string getRiskLevel() Obtain <p>Available values: Info/Low/Medium/High</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Available values: Info/Low/Medium/High</p>
 * @method array getStrategyId() Obtain <p>Policy ID.</p>
 * @method void setStrategyId(array $StrategyId) Set <p>Policy ID.</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getDescription() Obtain <p>Policy description</p>
 * @method void setDescription(string $Description) Set <p>Policy description</p>
 * @method string getDbTypes() Obtain <p>Supported database types</p>
 * @method void setDbTypes(string $DbTypes) Set <p>Supported database types</p>
 */
class ModifyDspmRiskStrategyRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Risk policy type</p>
     */
    public $StrategyType;

    /**
     * @var integer <p>Whether to enable</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>Policy content, for example: {     ThresholdValue: &quot;100&quot; }</p>
     */
    public $Rule;

    /**
     * @var string <p>Available values: Info/Low/Medium/High</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>Policy ID.</p>
     */
    public $StrategyId;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Policy description</p>
     */
    public $Description;

    /**
     * @var string <p>Supported database types</p>
     */
    public $DbTypes;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $StrategyType <p>Risk policy type</p>
     * @param integer $IsEnabled <p>Whether to enable</p>
     * @param string $Rule <p>Policy content, for example: {     ThresholdValue: &quot;100&quot; }</p>
     * @param string $RiskLevel <p>Available values: Info/Low/Medium/High</p>
     * @param array $StrategyId <p>Policy ID.</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $Description <p>Policy description</p>
     * @param string $DbTypes <p>Supported database types</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
