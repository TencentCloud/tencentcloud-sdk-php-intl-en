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
 * Token Plan API Key list item
 *
 * @method string getApiKeyId() Obtain API Key ID.
 * @method void setApiKeyId(string $ApiKeyId) Set API Key ID.
 * @method string getApiKey() Obtain API Key secret key value (masking).
 * @method void setApiKey(string $ApiKey) Set API Key secret key value (masking).
 * @method string getName() Obtain API Key name.
 * @method void setName(string $Name) Set API Key name.
 * @method string getTeamId() Obtain Bundle ID
 * @method void setTeamId(string $TeamId) Set Bundle ID
 * @method string getAppId() Obtain Account APP ID.
 * @method void setAppId(string $AppId) Set Account APP ID.
 * @method string getUin() Obtain Main account UIN. Maximum 128 characters.
 * @method void setUin(string $Uin) Set Main account UIN. Maximum 128 characters.
 * @method string getAllowedModels() Obtain API Key available model list (JSON array string).
 * @method void setAllowedModels(string $AllowedModels) Set API Key available model list (JSON array string).
 * @method string getStatus() Obtain Whether the API Key is available. Values: enable (enable), disable (disable).
 * @method void setStatus(string $Status) Set Whether the API Key is available. Values: enable (enable), disable (disable).
 * @method string getStopReason() Obtain Reason for disabling the API Key. Value: NORMAL (normal, default value), QUOTA_EXHAUSTED (API Key quota package exhausted), ABNORMAL (abnormal, requires human intervention)
 * @method void setStopReason(string $StopReason) Set Reason for disabling the API Key. Value: NORMAL (normal, default value), QUOTA_EXHAUSTED (API Key quota package exhausted), ABNORMAL (abnormal, requires human intervention)
 * @method string getUseStatus() Obtain User-side switch. Valid values: enable, disable.
 * @method void setUseStatus(string $UseStatus) Set User-side switch. Valid values: enable, disable.
 * @method integer getKeyVersion() Obtain Key version.
 * @method void setKeyVersion(integer $KeyVersion) Set Key version.
 * @method string getLastRotatedAt() Obtain Last reset time (ISO 8601).
 * @method void setLastRotatedAt(string $LastRotatedAt) Set Last reset time (ISO 8601).
 * @method string getCreator() Obtain Creator. If it is created by a sub-account, this value is the sub-account UIN.
 * @method void setCreator(string $Creator) Set Creator. If it is created by a sub-account, this value is the sub-account UIN.
 * @method string getCreatedAt() Obtain Creation time.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 * @method SubPackageBalance getBalance() Obtain API Key limit usage information
 * @method void setBalance(SubPackageBalance $Balance) Set API Key limit usage information
 * @method string getProductType() Obtain Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package).
 * @method void setProductType(string $ProductType) Set Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package).
 */
class TokenPlanApiKeyListItem extends AbstractModel
{
    /**
     * @var string API Key ID.
     */
    public $ApiKeyId;

    /**
     * @var string API Key secret key value (masking).
     */
    public $ApiKey;

    /**
     * @var string API Key name.
     */
    public $Name;

    /**
     * @var string Bundle ID
     */
    public $TeamId;

    /**
     * @var string Account APP ID.
     */
    public $AppId;

    /**
     * @var string Main account UIN. Maximum 128 characters.
     */
    public $Uin;

    /**
     * @var string API Key available model list (JSON array string).
     */
    public $AllowedModels;

    /**
     * @var string Whether the API Key is available. Values: enable (enable), disable (disable).
     */
    public $Status;

    /**
     * @var string Reason for disabling the API Key. Value: NORMAL (normal, default value), QUOTA_EXHAUSTED (API Key quota package exhausted), ABNORMAL (abnormal, requires human intervention)
     */
    public $StopReason;

    /**
     * @var string User-side switch. Valid values: enable, disable.
     */
    public $UseStatus;

    /**
     * @var integer Key version.
     */
    public $KeyVersion;

    /**
     * @var string Last reset time (ISO 8601).
     */
    public $LastRotatedAt;

    /**
     * @var string Creator. If it is created by a sub-account, this value is the sub-account UIN.
     */
    public $Creator;

    /**
     * @var string Creation time.
     */
    public $CreatedAt;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @var SubPackageBalance API Key limit usage information
     */
    public $Balance;

    /**
     * @var string Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package).
     */
    public $ProductType;

    /**
     * @param string $ApiKeyId API Key ID.
     * @param string $ApiKey API Key secret key value (masking).
     * @param string $Name API Key name.
     * @param string $TeamId Bundle ID
     * @param string $AppId Account APP ID.
     * @param string $Uin Main account UIN. Maximum 128 characters.
     * @param string $AllowedModels API Key available model list (JSON array string).
     * @param string $Status Whether the API Key is available. Values: enable (enable), disable (disable).
     * @param string $StopReason Reason for disabling the API Key. Value: NORMAL (normal, default value), QUOTA_EXHAUSTED (API Key quota package exhausted), ABNORMAL (abnormal, requires human intervention)
     * @param string $UseStatus User-side switch. Valid values: enable, disable.
     * @param integer $KeyVersion Key version.
     * @param string $LastRotatedAt Last reset time (ISO 8601).
     * @param string $Creator Creator. If it is created by a sub-account, this value is the sub-account UIN.
     * @param string $CreatedAt Creation time.
     * @param string $UpdatedAt Update time.
     * @param SubPackageBalance $Balance API Key limit usage information
     * @param string $ProductType Package type. Values: enterprise (Enterprise Professional package), enterprise-auto (Enterprise Light package).
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AllowedModels",$param) and $param["AllowedModels"] !== null) {
            $this->AllowedModels = $param["AllowedModels"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("LastRotatedAt",$param) and $param["LastRotatedAt"] !== null) {
            $this->LastRotatedAt = $param["LastRotatedAt"];
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

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = new SubPackageBalance();
            $this->Balance->deserialize($param["Balance"]);
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
