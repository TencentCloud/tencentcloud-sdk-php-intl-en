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
 * Dspm risk policy
 *
 * @method string getStrategyType() Obtain <p>Policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getStrategyCategory() Obtain <p>Policy type</p>
 * @method void setStrategyCategory(string $StrategyCategory) Set <p>Policy type</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable. 0-Disable 1-Enable</p>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable. 0-Disable 1-Enable</p>
 * @method string getRiskLevel() Obtain <p>Risk level.</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level.</p>
 * @method string getRule() Obtain <p>Policy rule</p>
 * @method void setRule(string $Rule) Set <p>Policy rule</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getDescription() Obtain <p>Policy content.</p>
 * @method void setDescription(string $Description) Set <p>Policy content.</p>
 * @method integer getHitCount() Obtain <p>Number of hits</p>
 * @method void setHitCount(integer $HitCount) Set <p>Number of hits</p>
 * @method string getRiskType() Obtain <p>Risk type. risk: Risk; alarm: Alarm.</p>
 * @method void setRiskType(string $RiskType) Set <p>Risk type. risk: Risk; alarm: Alarm.</p>
 * @method integer getAppId() Obtain <p>app id of the asset ownership account</p>
 * @method void setAppId(integer $AppId) Set <p>app id of the asset ownership account</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 * @method string getUin() Obtain <p>uin of the account to which the asset belongs</p>
 * @method void setUin(string $Uin) Set <p>uin of the account to which the asset belongs</p>
 * @method integer getStrategyId() Obtain <p>Policy ID.</p>
 * @method void setStrategyId(integer $StrategyId) Set <p>Policy ID.</p>
 * @method string getRuleSource() Obtain <p>Rule source</p>
 * @method void setRuleSource(string $RuleSource) Set <p>Rule source</p>
 * @method array getAssetTypes() Obtain <p>Supported asset types</p>
 * @method void setAssetTypes(array $AssetTypes) Set <p>Supported asset types</p>
 * @method string getRiskDescription() Obtain <p>Risk description</p>
 * @method void setRiskDescription(string $RiskDescription) Set <p>Risk description</p>
 */
class DspmRiskStrategy extends AbstractModel
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
     * @var integer <p>Whether to enable. 0-Disable 1-Enable</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>Risk level.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Policy rule</p>
     */
    public $Rule;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Policy content.</p>
     */
    public $Description;

    /**
     * @var integer <p>Number of hits</p>
     */
    public $HitCount;

    /**
     * @var string <p>Risk type. risk: Risk; alarm: Alarm.</p>
     */
    public $RiskType;

    /**
     * @var integer <p>app id of the asset ownership account</p>
     */
    public $AppId;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>uin of the account to which the asset belongs</p>
     */
    public $Uin;

    /**
     * @var integer <p>Policy ID.</p>
     */
    public $StrategyId;

    /**
     * @var string <p>Rule source</p>
     */
    public $RuleSource;

    /**
     * @var array <p>Supported asset types</p>
     */
    public $AssetTypes;

    /**
     * @var string <p>Risk description</p>
     */
    public $RiskDescription;

    /**
     * @param string $StrategyType <p>Policy type</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $StrategyCategory <p>Policy type</p>
     * @param integer $IsEnabled <p>Whether to enable. 0-Disable 1-Enable</p>
     * @param string $RiskLevel <p>Risk level.</p>
     * @param string $Rule <p>Policy rule</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $Description <p>Policy content.</p>
     * @param integer $HitCount <p>Number of hits</p>
     * @param string $RiskType <p>Risk type. risk: Risk; alarm: Alarm.</p>
     * @param integer $AppId <p>app id of the asset ownership account</p>
     * @param string $NickName <p>Account nickname</p>
     * @param string $Uin <p>uin of the account to which the asset belongs</p>
     * @param integer $StrategyId <p>Policy ID.</p>
     * @param string $RuleSource <p>Rule source</p>
     * @param array $AssetTypes <p>Supported asset types</p>
     * @param string $RiskDescription <p>Risk description</p>
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

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = $param["AssetTypes"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }
    }
}
