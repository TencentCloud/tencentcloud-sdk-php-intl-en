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
 * Check item perspective risk
 *
 * @method string getRiskRuleId() Obtain <p>Check item rule ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) Set <p>Check item rule ID</p>
 * @method string getRiskTitle() Obtain <p>Risk name</p>
 * @method void setRiskTitle(string $RiskTitle) Set <p>Risk name</p>
 * @method string getCheckType() Obtain <p>Check type</p>
 * @method void setCheckType(string $CheckType) Set <p>Check type</p>
 * @method string getSeverity() Obtain <p>Risk level</p>
 * @method void setSeverity(string $Severity) Set <p>Risk level</p>
 * @method string getRiskDesc() Obtain <p>1 risk item exists</p>
 * @method void setRiskDesc(string $RiskDesc) Set <p>1 risk item exists</p>
 * @method string getCreateTime() Obtain <p>First discovery time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>First discovery time</p>
 * @method string getUpdateTime() Obtain <p>Risk update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Risk update time</p>
 * @method string getProvider() Obtain <p>Cloud vendor</p>
 * @method void setProvider(string $Provider) Set <p>Cloud vendor</p>
 * @method integer getRiskStatus() Obtain <p>Risk status</p>
 * @method void setRiskStatus(integer $RiskStatus) Set <p>Risk status</p>
 * @method integer getAssetCount() Obtain <p>Number of affected assets</p>
 * @method void setAssetCount(integer $AssetCount) Set <p>Number of affected assets</p>
 * @method integer getRiskCount() Obtain <p>Number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Number of risks</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getEventType() Obtain <p>Event type</p>
 * @method void setEventType(string $EventType) Set <p>Event type</p>
 * @method string getClassify() Obtain <p>Disposal categorization</p>
 * @method void setClassify(string $Classify) Set <p>Disposal categorization</p>
 * @method array getStandardTerms() Obtain <p>cspm standard clauses</p>
 * @method void setStandardTerms(array $StandardTerms) Set <p>cspm standard clauses</p>
 * @method string getAssetTypeIconURL() Obtain <p>Asset type icon</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Asset type icon</p>
 */
class CheckViewRiskItem extends AbstractModel
{
    /**
     * @var string <p>Check item rule ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>Risk name</p>
     */
    public $RiskTitle;

    /**
     * @var string <p>Check type</p>
     */
    public $CheckType;

    /**
     * @var string <p>Risk level</p>
     */
    public $Severity;

    /**
     * @var string <p>1 risk item exists</p>
     */
    public $RiskDesc;

    /**
     * @var string <p>First discovery time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Risk update time</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Cloud vendor</p>
     */
    public $Provider;

    /**
     * @var integer <p>Risk status</p>
     */
    public $RiskStatus;

    /**
     * @var integer <p>Number of affected assets</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>Number of risks</p>
     */
    public $RiskCount;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Event type</p>
     */
    public $EventType;

    /**
     * @var string <p>Disposal categorization</p>
     */
    public $Classify;

    /**
     * @var array <p>cspm standard clauses</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>Asset type icon</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param string $RiskRuleId <p>Check item rule ID</p>
     * @param string $RiskTitle <p>Risk name</p>
     * @param string $CheckType <p>Check type</p>
     * @param string $Severity <p>Risk level</p>
     * @param string $RiskDesc <p>1 risk item exists</p>
     * @param string $CreateTime <p>First discovery time</p>
     * @param string $UpdateTime <p>Risk update time</p>
     * @param string $Provider <p>Cloud vendor</p>
     * @param integer $RiskStatus <p>Risk status</p>
     * @param integer $AssetCount <p>Number of affected assets</p>
     * @param integer $RiskCount <p>Number of risks</p>
     * @param string $AssetType <p>Asset type</p>
     * @param string $EventType <p>Event type</p>
     * @param string $Classify <p>Disposal categorization</p>
     * @param array $StandardTerms <p>cspm standard clauses</p>
     * @param string $AssetTypeIconURL <p>Asset type icon</p>
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
        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
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
    }
}
