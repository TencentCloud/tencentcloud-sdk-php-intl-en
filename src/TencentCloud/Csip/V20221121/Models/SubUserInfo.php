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
 * Sub-account Details
 *
 * @method integer getID() Obtain <p>Primary key ID, with no business significance, only serves as a unique key.</p>
 * @method void setID(integer $ID) Set <p>Primary key ID, with no business significance, only serves as a unique key.</p>
 * @method string getAppID() Obtain <p>Sub-account Appid</p>
 * @method void setAppID(string $AppID) Set <p>Sub-account Appid</p>
 * @method string getUin() Obtain <p>Sub-account UIn</p>
 * @method void setUin(string $Uin) Set <p>Sub-account UIn</p>
 * @method string getNickName() Obtain <p>Sub-account name</p>
 * @method void setNickName(string $NickName) Set <p>Sub-account name</p>
 * @method string getOwnerAppID() Obtain <p>Root Account Appid</p>
 * @method void setOwnerAppID(string $OwnerAppID) Set <p>Root Account Appid</p>
 * @method string getOwnerUin() Obtain <p>Root account Uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Root account Uin</p>
 * @method string getOwnerNickName() Obtain <p>Root account name</p>
 * @method void setOwnerNickName(string $OwnerNickName) Set <p>Root account name</p>
 * @method string getOwnerMemberID() Obtain <p>Member ID information belonging to main account</p>
 * @method void setOwnerMemberID(string $OwnerMemberID) Set <p>Member ID information belonging to main account</p>
 * @method integer getCloudType() Obtain <p>Account type. 0 indicates a Tencent Cloud account, and 1 indicates an AWS account.</p>
 * @method void setCloudType(integer $CloudType) Set <p>Account type. 0 indicates a Tencent Cloud account, and 1 indicates an AWS account.</p>
 * @method integer getServiceCount() Obtain <p>Number of accessible services</p>
 * @method void setServiceCount(integer $ServiceCount) Set <p>Number of accessible services</p>
 * @method integer getInterfaceCount() Obtain <p>Number of accessible APIs</p>
 * @method void setInterfaceCount(integer $InterfaceCount) Set <p>Number of accessible APIs</p>
 * @method integer getAssetCount() Obtain <p>Number of accessible resources</p>
 * @method void setAssetCount(integer $AssetCount) Set <p>Number of accessible resources</p>
 * @method integer getLogCount() Obtain <p>Number of access/behavior logs</p>
 * @method void setLogCount(integer $LogCount) Set <p>Number of access/behavior logs</p>
 * @method integer getConfigRiskCount() Obtain <p>Permission configuration risk</p>
 * @method void setConfigRiskCount(integer $ConfigRiskCount) Set <p>Permission configuration risk</p>
 * @method integer getActionRiskCount() Obtain <p>Dangerous behavior alarm</p>
 * @method void setActionRiskCount(integer $ActionRiskCount) Set <p>Dangerous behavior alarm</p>
 * @method boolean getIsAccessCloudAudit() Obtain <p>Whether to access operation audit log</p>
 * @method void setIsAccessCloudAudit(boolean $IsAccessCloudAudit) Set <p>Whether to access operation audit log</p>
 * @method boolean getIsAccessCheck() Obtain <p>Security check for configuration risk required or not</p>
 * @method void setIsAccessCheck(boolean $IsAccessCheck) Set <p>Security check for configuration risk required or not</p>
 * @method boolean getIsAccessUeba() Obtain <p>Whether configure user behavior management policy</p>
 * @method void setIsAccessUeba(boolean $IsAccessUeba) Set <p>Whether configure user behavior management policy</p>
 * @method integer getCreateTime() Obtain <p>Creation time (Unix timestamp).</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time (Unix timestamp).</p>
 */
class SubUserInfo extends AbstractModel
{
    /**
     * @var integer <p>Primary key ID, with no business significance, only serves as a unique key.</p>
     */
    public $ID;

    /**
     * @var string <p>Sub-account Appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Sub-account UIn</p>
     */
    public $Uin;

    /**
     * @var string <p>Sub-account name</p>
     */
    public $NickName;

    /**
     * @var string <p>Root Account Appid</p>
     */
    public $OwnerAppID;

    /**
     * @var string <p>Root account Uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Root account name</p>
     */
    public $OwnerNickName;

    /**
     * @var string <p>Member ID information belonging to main account</p>
     */
    public $OwnerMemberID;

    /**
     * @var integer <p>Account type. 0 indicates a Tencent Cloud account, and 1 indicates an AWS account.</p>
     */
    public $CloudType;

    /**
     * @var integer <p>Number of accessible services</p>
     */
    public $ServiceCount;

    /**
     * @var integer <p>Number of accessible APIs</p>
     */
    public $InterfaceCount;

    /**
     * @var integer <p>Number of accessible resources</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>Number of access/behavior logs</p>
     */
    public $LogCount;

    /**
     * @var integer <p>Permission configuration risk</p>
     */
    public $ConfigRiskCount;

    /**
     * @var integer <p>Dangerous behavior alarm</p>
     */
    public $ActionRiskCount;

    /**
     * @var boolean <p>Whether to access operation audit log</p>
     */
    public $IsAccessCloudAudit;

    /**
     * @var boolean <p>Security check for configuration risk required or not</p>
     */
    public $IsAccessCheck;

    /**
     * @var boolean <p>Whether configure user behavior management policy</p>
     */
    public $IsAccessUeba;

    /**
     * @var integer <p>Creation time (Unix timestamp).</p>
     */
    public $CreateTime;

    /**
     * @param integer $ID <p>Primary key ID, with no business significance, only serves as a unique key.</p>
     * @param string $AppID <p>Sub-account Appid</p>
     * @param string $Uin <p>Sub-account UIn</p>
     * @param string $NickName <p>Sub-account name</p>
     * @param string $OwnerAppID <p>Root Account Appid</p>
     * @param string $OwnerUin <p>Root account Uin</p>
     * @param string $OwnerNickName <p>Root account name</p>
     * @param string $OwnerMemberID <p>Member ID information belonging to main account</p>
     * @param integer $CloudType <p>Account type. 0 indicates a Tencent Cloud account, and 1 indicates an AWS account.</p>
     * @param integer $ServiceCount <p>Number of accessible services</p>
     * @param integer $InterfaceCount <p>Number of accessible APIs</p>
     * @param integer $AssetCount <p>Number of accessible resources</p>
     * @param integer $LogCount <p>Number of access/behavior logs</p>
     * @param integer $ConfigRiskCount <p>Permission configuration risk</p>
     * @param integer $ActionRiskCount <p>Dangerous behavior alarm</p>
     * @param boolean $IsAccessCloudAudit <p>Whether to access operation audit log</p>
     * @param boolean $IsAccessCheck <p>Security check for configuration risk required or not</p>
     * @param boolean $IsAccessUeba <p>Whether configure user behavior management policy</p>
     * @param integer $CreateTime <p>Creation time (Unix timestamp).</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
