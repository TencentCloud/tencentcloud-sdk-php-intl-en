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
 * Risk information from asset perspective
 *
 * @method integer getAppId() Obtain <p>Tenant ID</p>
 * @method void setAppId(integer $AppId) Set <p>Tenant ID</p>
 * @method string getProvider() Obtain <p>Cloud vendor</p>
 * @method void setProvider(string $Provider) Set <p>Cloud vendor</p>
 * @method string getProviderName() Obtain <p>Cloud vendor name</p>
 * @method void setProviderName(string $ProviderName) Set <p>Cloud vendor name</p>
 * @method string getCloudAccountName() Obtain <p>Cloud account name</p>
 * @method void setCloudAccountName(string $CloudAccountName) Set <p>Cloud account name</p>
 * @method string getCloudAccountId() Obtain <p>Cloud Account ID</p>
 * @method void setCloudAccountId(string $CloudAccountId) Set <p>Cloud Account ID</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getCreateTime() Obtain <p>First discovery time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>First discovery time</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getRiskStatus() Obtain <p>Risk status</p>
 * @method void setRiskStatus(integer $RiskStatus) Set <p>Risk status</p>
 * @method string getRiskTitle() Obtain <p>Risk name</p>
 * @method void setRiskTitle(string $RiskTitle) Set <p>Risk name</p>
 * @method string getCheckType() Obtain <p>Check type</p>
 * @method void setCheckType(string $CheckType) Set <p>Check type</p>
 * @method string getSeverity() Obtain <p>Risk level</p>
 * @method void setSeverity(string $Severity) Set <p>Risk level</p>
 * @method string getRiskRuleId() Obtain <p>Risk rule ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) Set <p>Risk rule ID</p>
 * @method string getClassify() Obtain <p>Disposal categorization</p>
 * @method void setClassify(string $Classify) Set <p>Disposal categorization</p>
 * @method array getStandardTerms() Obtain <p>Cybersecurity classified protection compliance</p>
 * @method void setStandardTerms(array $StandardTerms) Set <p>Cybersecurity classified protection compliance</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getAssetTypeIconURL() Obtain <p>Asset type icon</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Asset type icon</p>
 * @method string getAssetTypeName() Obtain <p>Asset type</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type</p>
 */
class AssetRiskItem extends AbstractModel
{
    /**
     * @var integer <p>Tenant ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Cloud vendor</p>
     */
    public $Provider;

    /**
     * @var string <p>Cloud vendor name</p>
     */
    public $ProviderName;

    /**
     * @var string <p>Cloud account name</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>Cloud Account ID</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>First discovery time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Risk status</p>
     */
    public $RiskStatus;

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
     * @var string <p>Risk rule ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>Disposal categorization</p>
     */
    public $Classify;

    /**
     * @var array <p>Cybersecurity classified protection compliance</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset type icon</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetTypeName;

    /**
     * @param integer $AppId <p>Tenant ID</p>
     * @param string $Provider <p>Cloud vendor</p>
     * @param string $ProviderName <p>Cloud vendor name</p>
     * @param string $CloudAccountName <p>Cloud account name</p>
     * @param string $CloudAccountId <p>Cloud Account ID</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $CreateTime <p>First discovery time</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $RiskStatus <p>Risk status</p>
     * @param string $RiskTitle <p>Risk name</p>
     * @param string $CheckType <p>Check type</p>
     * @param string $Severity <p>Risk level</p>
     * @param string $RiskRuleId <p>Risk rule ID</p>
     * @param string $Classify <p>Disposal categorization</p>
     * @param array $StandardTerms <p>Cybersecurity classified protection compliance</p>
     * @param string $AssetType <p>Asset type</p>
     * @param string $AssetTypeIconURL <p>Asset type icon</p>
     * @param string $AssetTypeName <p>Asset type</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
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

        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }
    }
}
