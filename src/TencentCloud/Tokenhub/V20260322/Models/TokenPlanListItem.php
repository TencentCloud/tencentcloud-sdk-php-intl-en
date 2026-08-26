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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token Plan package option
 *
 * @method string getTeamId() Obtain <p>Package ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Package ID.</p>
 * @method string getProductType() Obtain <p>Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package)</p>
 * @method void setProductType(string $ProductType) Set <p>Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package)</p>
 * @method string getName() Obtain <p>Package name. Maximum 128 characters.</p>
 * @method void setName(string $Name) Set <p>Package name. Maximum 128 characters.</p>
 * @method string getAppId() Obtain <p>Account APP ID.</p>
 * @method void setAppId(string $AppId) Set <p>Account APP ID.</p>
 * @method string getUin() Obtain <p>Main account UIN.</p>
 * @method void setUin(string $Uin) Set <p>Main account UIN.</p>
 * @method string getStatus() Obtain <p>Package status. Valid values: enable, disable.</p>
 * @method void setStatus(string $Status) Set <p>Package status. Valid values: enable, disable.</p>
 * @method string getStopReason() Obtain <p>Reason for package disablement. Value: NORMAL, ISOLATED, FROZEN, EXHAUSTED, DESTROYED</p>
 * @method void setStopReason(string $StopReason) Set <p>Reason for package disablement. Value: NORMAL, ISOLATED, FROZEN, EXHAUSTED, DESTROYED</p>
 * @method integer getApiKeyMax() Obtain <p>Maximum number of API Keys that can be created.</p>
 * @method void setApiKeyMax(integer $ApiKeyMax) Set <p>Maximum number of API Keys that can be created.</p>
 * @method integer getApiKeyCount() Obtain <p>Number of API Keys currently created</p>
 * @method void setApiKeyCount(integer $ApiKeyCount) Set <p>Number of API Keys currently created</p>
 * @method string getPrepayResourceID() Obtain <p>Cloud billing prepaid resource package ID.</p>
 * @method void setPrepayResourceID(string $PrepayResourceID) Set <p>Cloud billing prepaid resource package ID.</p>
 * @method string getCreator() Obtain <p>Creator. If the package is created by a sub-account, this value is the sub-account UIN.</p>
 * @method void setCreator(string $Creator) Set <p>Creator. If the package is created by a sub-account, this value is the sub-account UIN.</p>
 * @method string getCreatedAt() Obtain <p>Creation time.</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Creation time.</p>
 * @method string getUpdatedAt() Obtain <p>Update time.</p>
 * @method void setUpdatedAt(string $UpdatedAt) Set <p>Update time.</p>
 * @method TokenPlanPackageInfo getPackageInfo() Obtain <p>Basic information of the package.</p>
 * @method void setPackageInfo(TokenPlanPackageInfo $PackageInfo) Set <p>Basic information of the package.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Whether to enable auto-renewal. Value: 0 (not enabled), 1 (enabled)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Whether to enable auto-renewal. Value: 0 (not enabled), 1 (enabled)</p>
 */
class TokenPlanListItem extends AbstractModel
{
    /**
     * @var string <p>Package ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package)</p>
     */
    public $ProductType;

    /**
     * @var string <p>Package name. Maximum 128 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Account APP ID.</p>
     */
    public $AppId;

    /**
     * @var string <p>Main account UIN.</p>
     */
    public $Uin;

    /**
     * @var string <p>Package status. Valid values: enable, disable.</p>
     */
    public $Status;

    /**
     * @var string <p>Reason for package disablement. Value: NORMAL, ISOLATED, FROZEN, EXHAUSTED, DESTROYED</p>
     */
    public $StopReason;

    /**
     * @var integer <p>Maximum number of API Keys that can be created.</p>
     */
    public $ApiKeyMax;

    /**
     * @var integer <p>Number of API Keys currently created</p>
     */
    public $ApiKeyCount;

    /**
     * @var string <p>Cloud billing prepaid resource package ID.</p>
     */
    public $PrepayResourceID;

    /**
     * @var string <p>Creator. If the package is created by a sub-account, this value is the sub-account UIN.</p>
     */
    public $Creator;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdatedAt;

    /**
     * @var TokenPlanPackageInfo <p>Basic information of the package.</p>
     */
    public $PackageInfo;

    /**
     * @var integer <p>Whether to enable auto-renewal. Value: 0 (not enabled), 1 (enabled)</p>
     */
    public $AutoRenewFlag;

    /**
     * @param string $TeamId <p>Package ID.</p>
     * @param string $ProductType <p>Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package)</p>
     * @param string $Name <p>Package name. Maximum 128 characters.</p>
     * @param string $AppId <p>Account APP ID.</p>
     * @param string $Uin <p>Main account UIN.</p>
     * @param string $Status <p>Package status. Valid values: enable, disable.</p>
     * @param string $StopReason <p>Reason for package disablement. Value: NORMAL, ISOLATED, FROZEN, EXHAUSTED, DESTROYED</p>
     * @param integer $ApiKeyMax <p>Maximum number of API Keys that can be created.</p>
     * @param integer $ApiKeyCount <p>Number of API Keys currently created</p>
     * @param string $PrepayResourceID <p>Cloud billing prepaid resource package ID.</p>
     * @param string $Creator <p>Creator. If the package is created by a sub-account, this value is the sub-account UIN.</p>
     * @param string $CreatedAt <p>Creation time.</p>
     * @param string $UpdatedAt <p>Update time.</p>
     * @param TokenPlanPackageInfo $PackageInfo <p>Basic information of the package.</p>
     * @param integer $AutoRenewFlag <p>Whether to enable auto-renewal. Value: 0 (not enabled), 1 (enabled)</p>
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("ApiKeyMax",$param) and $param["ApiKeyMax"] !== null) {
            $this->ApiKeyMax = $param["ApiKeyMax"];
        }

        if (array_key_exists("ApiKeyCount",$param) and $param["ApiKeyCount"] !== null) {
            $this->ApiKeyCount = $param["ApiKeyCount"];
        }

        if (array_key_exists("PrepayResourceID",$param) and $param["PrepayResourceID"] !== null) {
            $this->PrepayResourceID = $param["PrepayResourceID"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("PackageInfo",$param) and $param["PackageInfo"] !== null) {
            $this->PackageInfo = new TokenPlanPackageInfo();
            $this->PackageInfo->deserialize($param["PackageInfo"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
