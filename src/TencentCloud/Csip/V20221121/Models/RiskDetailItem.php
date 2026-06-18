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
 * risk details
 *
 * @method string getCreateTime() Obtain <p>First discovery time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>First discovery time</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getRiskStatus() Obtain <p>Risk status</p>
 * @method void setRiskStatus(integer $RiskStatus) Set <p>Risk status</p>
 * @method string getRiskContent() Obtain <p>Risk content</p>
 * @method void setRiskContent(string $RiskContent) Set <p>Risk content</p>
 * @method string getProvider() Obtain <p>Cloud service provider</p>
 * @method void setProvider(string $Provider) Set <p>Cloud service provider</p>
 * @method string getProviderName() Obtain <p>Vendor name</p>
 * @method void setProviderName(string $ProviderName) Set <p>Vendor name</p>
 * @method string getCloudAccountId() Obtain <p>cloud account</p>
 * @method void setCloudAccountId(string $CloudAccountId) Set <p>cloud account</p>
 * @method string getCloudAccountName() Obtain <p>Cloud account name</p>
 * @method void setCloudAccountName(string $CloudAccountName) Set <p>Cloud account name</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method integer getRiskId() Obtain <p>Risk ID</p>
 * @method void setRiskId(integer $RiskId) Set <p>Risk ID</p>
 * @method string getRiskRuleId() Obtain <p>Risk rule ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) Set <p>Risk rule ID</p>
 * @method string getCheckStatus() Obtain <p>Risk verification status</p>
 * @method void setCheckStatus(string $CheckStatus) Set <p>Risk verification status</p>
 * @method integer getAppID() Obtain <p>User AppID</p>
 * @method void setAppID(integer $AppID) Set <p>User AppID</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 */
class RiskDetailItem extends AbstractModel
{
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
     * @var string <p>Risk content</p>
     */
    public $RiskContent;

    /**
     * @var string <p>Cloud service provider</p>
     */
    public $Provider;

    /**
     * @var string <p>Vendor name</p>
     */
    public $ProviderName;

    /**
     * @var string <p>cloud account</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>Cloud account name</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Risk ID</p>
     */
    public $RiskId;

    /**
     * @var string <p>Risk rule ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>Risk verification status</p>
     */
    public $CheckStatus;

    /**
     * @var integer <p>User AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @param string $CreateTime <p>First discovery time</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $RiskStatus <p>Risk status</p>
     * @param string $RiskContent <p>Risk content</p>
     * @param string $Provider <p>Cloud service provider</p>
     * @param string $ProviderName <p>Vendor name</p>
     * @param string $CloudAccountId <p>cloud account</p>
     * @param string $CloudAccountName <p>Cloud account name</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param integer $RiskId <p>Risk ID</p>
     * @param string $RiskRuleId <p>Risk rule ID</p>
     * @param string $CheckStatus <p>Risk verification status</p>
     * @param integer $AppID <p>User AppID</p>
     * @param string $AssetType <p>Asset type</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("RiskContent",$param) and $param["RiskContent"] !== null) {
            $this->RiskContent = $param["RiskContent"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
