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
 * Sub-account details
 *
 * @method integer getID() Obtain Primary key ID, which has no business meaning and serves solely as a unique identifier
 * @method void setID(integer $ID) Set Primary key ID, which has no business meaning and serves solely as a unique identifier
 * @method string getAppID() Obtain sub-account Appid
 * @method void setAppID(string $AppID) Set sub-account Appid
 * @method string getUin() Obtain sub-account UIn
 * @method void setUin(string $Uin) Set sub-account UIn
 * @method string getNickName() Obtain Sub-account name
 * @method void setNickName(string $NickName) Set Sub-account name
 * @method string getOwnerAppID() Obtain master account Appid
 * @method void setOwnerAppID(string $OwnerAppID) Set master account Appid
 * @method string getOwnerUin() Obtain master account Uin
 * @method void setOwnerUin(string $OwnerUin) Set master account Uin
 * @method string getOwnerNickName() Obtain master account name
 * @method void setOwnerNickName(string $OwnerNickName) Set master account name
 * @method string getOwnerMemberID() Obtain master account's memberId information
 * @method void setOwnerMemberID(string $OwnerMemberID) Set master account's memberId information
 * @method integer getCloudType() Obtain Account type: 0 for Tencent Cloud account, 1 for AWS account
 * @method void setCloudType(integer $CloudType) Set Account type: 0 for Tencent Cloud account, 1 for AWS account
 * @method integer getServiceCount() Obtain Accessible services count
 * @method void setServiceCount(integer $ServiceCount) Set Accessible services count
 * @method integer getInterfaceCount() Obtain Accessible API count
 * @method void setInterfaceCount(integer $InterfaceCount) Set Accessible API count
 * @method integer getAssetCount() Obtain Accessible resources count
 * @method void setAssetCount(integer $AssetCount) Set Accessible resources count
 * @method integer getLogCount() Obtain Access/Behavior Logs Count
 * @method void setLogCount(integer $LogCount) Set Access/Behavior Logs Count
 * @method integer getConfigRiskCount() Obtain Permissions configuration risk
 * @method void setConfigRiskCount(integer $ConfigRiskCount) Set Permissions configuration risk
 * @method integer getActionRiskCount() Obtain Dangerous behavior alarm
 * @method void setActionRiskCount(integer $ActionRiskCount) Set Dangerous behavior alarm
 * @method boolean getIsAccessCloudAudit() Obtain whether to enable CloudAudit logs
 * @method void setIsAccessCloudAudit(boolean $IsAccessCloudAudit) Set whether to enable CloudAudit logs
 * @method boolean getIsAccessCheck() Obtain whether risk configuration security assessment
 * @method void setIsAccessCheck(boolean $IsAccessCheck) Set whether risk configuration security assessment
 * @method boolean getIsAccessUeba() Obtain whether to configure user behavior management policies
 * @method void setIsAccessUeba(boolean $IsAccessUeba) Set whether to configure user behavior management policies
 */
class SubUserInfo extends AbstractModel
{
    /**
     * @var integer Primary key ID, which has no business meaning and serves solely as a unique identifier
     */
    public $ID;

    /**
     * @var string sub-account Appid
     */
    public $AppID;

    /**
     * @var string sub-account UIn
     */
    public $Uin;

    /**
     * @var string Sub-account name
     */
    public $NickName;

    /**
     * @var string master account Appid
     */
    public $OwnerAppID;

    /**
     * @var string master account Uin
     */
    public $OwnerUin;

    /**
     * @var string master account name
     */
    public $OwnerNickName;

    /**
     * @var string master account's memberId information
     */
    public $OwnerMemberID;

    /**
     * @var integer Account type: 0 for Tencent Cloud account, 1 for AWS account
     */
    public $CloudType;

    /**
     * @var integer Accessible services count
     */
    public $ServiceCount;

    /**
     * @var integer Accessible API count
     */
    public $InterfaceCount;

    /**
     * @var integer Accessible resources count
     */
    public $AssetCount;

    /**
     * @var integer Access/Behavior Logs Count
     */
    public $LogCount;

    /**
     * @var integer Permissions configuration risk
     */
    public $ConfigRiskCount;

    /**
     * @var integer Dangerous behavior alarm
     */
    public $ActionRiskCount;

    /**
     * @var boolean whether to enable CloudAudit logs
     */
    public $IsAccessCloudAudit;

    /**
     * @var boolean whether risk configuration security assessment
     */
    public $IsAccessCheck;

    /**
     * @var boolean whether to configure user behavior management policies
     */
    public $IsAccessUeba;

    /**
     * @param integer $ID Primary key ID, which has no business meaning and serves solely as a unique identifier
     * @param string $AppID sub-account Appid
     * @param string $Uin sub-account UIn
     * @param string $NickName Sub-account name
     * @param string $OwnerAppID master account Appid
     * @param string $OwnerUin master account Uin
     * @param string $OwnerNickName master account name
     * @param string $OwnerMemberID master account's memberId information
     * @param integer $CloudType Account type: 0 for Tencent Cloud account, 1 for AWS account
     * @param integer $ServiceCount Accessible services count
     * @param integer $InterfaceCount Accessible API count
     * @param integer $AssetCount Accessible resources count
     * @param integer $LogCount Access/Behavior Logs Count
     * @param integer $ConfigRiskCount Permissions configuration risk
     * @param integer $ActionRiskCount Dangerous behavior alarm
     * @param boolean $IsAccessCloudAudit whether to enable CloudAudit logs
     * @param boolean $IsAccessCheck whether risk configuration security assessment
     * @param boolean $IsAccessUeba whether to configure user behavior management policies
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("OwnerAppID",$param) and $param["OwnerAppID"] !== null) {
            $this->OwnerAppID = $param["OwnerAppID"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerNickName",$param) and $param["OwnerNickName"] !== null) {
            $this->OwnerNickName = $param["OwnerNickName"];
        }

        if (array_key_exists("OwnerMemberID",$param) and $param["OwnerMemberID"] !== null) {
            $this->OwnerMemberID = $param["OwnerMemberID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("InterfaceCount",$param) and $param["InterfaceCount"] !== null) {
            $this->InterfaceCount = $param["InterfaceCount"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("LogCount",$param) and $param["LogCount"] !== null) {
            $this->LogCount = $param["LogCount"];
        }

        if (array_key_exists("ConfigRiskCount",$param) and $param["ConfigRiskCount"] !== null) {
            $this->ConfigRiskCount = $param["ConfigRiskCount"];
        }

        if (array_key_exists("ActionRiskCount",$param) and $param["ActionRiskCount"] !== null) {
            $this->ActionRiskCount = $param["ActionRiskCount"];
        }

        if (array_key_exists("IsAccessCloudAudit",$param) and $param["IsAccessCloudAudit"] !== null) {
            $this->IsAccessCloudAudit = $param["IsAccessCloudAudit"];
        }

        if (array_key_exists("IsAccessCheck",$param) and $param["IsAccessCheck"] !== null) {
            $this->IsAccessCheck = $param["IsAccessCheck"];
        }

        if (array_key_exists("IsAccessUeba",$param) and $param["IsAccessUeba"] !== null) {
            $this->IsAccessUeba = $param["IsAccessUeba"];
        }
    }
}
