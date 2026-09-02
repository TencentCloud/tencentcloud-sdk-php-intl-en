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
 * Dspm risk group policy
 *
 * @method string getStrategyType() Obtain <p>Policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getStrategyCategory() Obtain <p>Policy type</p>
 * @method void setStrategyCategory(string $StrategyCategory) Set <p>Policy type</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable. 0 - disable, 1 - enable</p>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable. 0 - disable, 1 - enable</p>
 * @method integer getHitCount() Obtain <p>Number of hits</p>
 * @method void setHitCount(integer $HitCount) Set <p>Number of hits</p>
 * @method string getRiskType() Obtain <p>Risk type. risk: risk; alarm: alarm.</p>
 * @method void setRiskType(string $RiskType) Set <p>Risk type. risk: risk; alarm: alarm.</p>
 * @method array getStrategyList() Obtain <p>Policy list.</p>
 * @method void setStrategyList(array $StrategyList) Set <p>Policy list.</p>
 * @method string getRuleSource() Obtain <p>Rule source.</p>
 * @method void setRuleSource(string $RuleSource) Set <p>Rule source.</p>
 */
class DspmRiskStrategyGroup extends AbstractModel
{
    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyType;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyCategory;

    /**
     * @var integer <p>Whether to enable. 0 - disable, 1 - enable</p>
     */
    public $IsEnabled;

    /**
     * @var integer <p>Number of hits</p>
     */
    public $HitCount;

    /**
     * @var string <p>Risk type. risk: risk; alarm: alarm.</p>
     */
    public $RiskType;

    /**
     * @var array <p>Policy list.</p>
     */
    public $StrategyList;

    /**
     * @var string <p>Rule source.</p>
     */
    public $RuleSource;

    /**
     * @param string $StrategyType <p>Policy type</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $StrategyCategory <p>Policy type</p>
     * @param integer $IsEnabled <p>Whether to enable. 0 - disable, 1 - enable</p>
     * @param integer $HitCount <p>Number of hits</p>
     * @param string $RiskType <p>Risk type. risk: risk; alarm: alarm.</p>
     * @param array $StrategyList <p>Policy list.</p>
     * @param string $RuleSource <p>Rule source.</p>
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("StrategyList",$param) and $param["StrategyList"] !== null) {
            $this->StrategyList = [];
            foreach ($param["StrategyList"] as $key => $value){
                $obj = new DspmRiskStrategy();
                $obj->deserialize($value);
                array_push($this->StrategyList, $obj);
            }
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }
    }
}
