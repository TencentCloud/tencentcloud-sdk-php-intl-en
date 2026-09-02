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
 * Description of the custom policy
 *
 * @method string getRuleID() Obtain <p>Risk rule ID</p>
 * @method void setRuleID(string $RuleID) Set <p>Risk rule ID</p>
 * @method string getProvider() Obtain <p>Tencent Cloud</p>
 * @method void setProvider(string $Provider) Set <p>Tencent Cloud</p>
 * @method string getRiskTitle() Obtain <p>Risk title</p>
 * @method void setRiskTitle(string $RiskTitle) Set <p>Risk title</p>
 * @method string getClassify() Obtain <p>Risk classification</p>
 * @method void setClassify(string $Classify) Set <p>Risk classification</p>
 * @method string getSeverity() Obtain <p>Risk level.</p>
 * @method void setSeverity(string $Severity) Set <p>Risk level.</p>
 * @method string getStatus() Obtain <p>Risk rule opening status</p>
 * @method void setStatus(string $Status) Set <p>Risk rule opening status</p>
 * @method integer getRelatedUinCount() Obtain <p>Number of associated accounts</p>
 * @method void setRelatedUinCount(integer $RelatedUinCount) Set <p>Number of associated accounts</p>
 * @method integer getPolicyEnableCount() Obtain <p>Number of accounts with policy activation</p>
 * @method void setPolicyEnableCount(integer $PolicyEnableCount) Set <p>Number of accounts with policy activation</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method integer getIsFree() Obtain <p>Whether the rule is free</p>
 * @method void setIsFree(integer $IsFree) Set <p>Whether the rule is free</p>
 * @method string getCheckType() Obtain <p>Check type</p>
 * @method void setCheckType(string $CheckType) Set <p>Check type</p>
 * @method array getStandardTerms() Obtain <p>Security clause specification</p>
 * @method void setStandardTerms(array $StandardTerms) Set <p>Security clause specification</p>
 * @method string getAssetTypeIconURL() Obtain <p>Asset type icon</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Asset type icon</p>
 * @method integer getEnableDefault() Obtain <p>Rule enabled by default</p>
 * @method void setEnableDefault(integer $EnableDefault) Set <p>Rule enabled by default</p>
 */
class CustomRiskRuleItem extends AbstractModel
{
    /**
     * @var string <p>Risk rule ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>Tencent Cloud</p>
     */
    public $Provider;

    /**
     * @var string <p>Risk title</p>
     */
    public $RiskTitle;

    /**
     * @var string <p>Risk classification</p>
     */
    public $Classify;

    /**
     * @var string <p>Risk level.</p>
     */
    public $Severity;

    /**
     * @var string <p>Risk rule opening status</p>
     */
    public $Status;

    /**
     * @var integer <p>Number of associated accounts</p>
     */
    public $RelatedUinCount;

    /**
     * @var integer <p>Number of accounts with policy activation</p>
     */
    public $PolicyEnableCount;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var integer <p>Whether the rule is free</p>
     */
    public $IsFree;

    /**
     * @var string <p>Check type</p>
     */
    public $CheckType;

    /**
     * @var array <p>Security clause specification</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>Asset type icon</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var integer <p>Rule enabled by default</p>
     */
    public $EnableDefault;

    /**
     * @param string $RuleID <p>Risk rule ID</p>
     * @param string $Provider <p>Tencent Cloud</p>
     * @param string $RiskTitle <p>Risk title</p>
     * @param string $Classify <p>Risk classification</p>
     * @param string $Severity <p>Risk level.</p>
     * @param string $Status <p>Risk rule opening status</p>
     * @param integer $RelatedUinCount <p>Number of associated accounts</p>
     * @param integer $PolicyEnableCount <p>Number of accounts with policy activation</p>
     * @param string $AssetType <p>Asset type</p>
     * @param integer $IsFree <p>Whether the rule is free</p>
     * @param string $CheckType <p>Check type</p>
     * @param array $StandardTerms <p>Security clause specification</p>
     * @param string $AssetTypeIconURL <p>Asset type icon</p>
     * @param integer $EnableDefault <p>Rule enabled by default</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RelatedUinCount",$param) and $param["RelatedUinCount"] !== null) {
            $this->RelatedUinCount = $param["RelatedUinCount"];
        }

        if (array_key_exists("PolicyEnableCount",$param) and $param["PolicyEnableCount"] !== null) {
            $this->PolicyEnableCount = $param["PolicyEnableCount"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("StandardTerms",$param) and $param["StandardTerms"] !== null) {
            $this->StandardTerms = [];
            foreach ($param["StandardTerms"] as $key => $value){
                $obj = new StandardTerm();
                $obj->deserialize($value);
                array_push($this->StandardTerms, $obj);
            }
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("EnableDefault",$param) and $param["EnableDefault"] !== null) {
            $this->EnableDefault = $param["EnableDefault"];
        }
    }
}
