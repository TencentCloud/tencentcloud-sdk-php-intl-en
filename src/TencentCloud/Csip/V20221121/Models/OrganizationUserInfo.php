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
 * Group Account Member Details
 *
 * @method string getUin() Obtain Member account Uin
 * @method void setUin(string $Uin) Set Member account Uin
 * @method string getNickName() Obtain Member account name
 * @method void setNickName(string $NickName) Set Member account name
 * @method string getNodeName() Obtain Department node name, department of account
 * @method void setNodeName(string $NodeName) Set Department node name, department of account
 * @method integer getAssetCount() Obtain Asset Quantity
 * @method void setAssetCount(integer $AssetCount) Set Asset Quantity
 * @method integer getRiskCount() Obtain Risk Quantity
 * @method void setRiskCount(integer $RiskCount) Set Risk Quantity
 * @method integer getAttackCount() Obtain Attack Quantity
 * @method void setAttackCount(integer $AttackCount) Set Attack Quantity
 * @method string getRole() Obtain Member/Admin/;Member or Administrator
 * @method void setRole(string $Role) Set Member/Admin/;Member or Administrator
 * @method string getMemberId() Obtain Member account id
 * @method void setMemberId(string $MemberId) Set Member account id
 * @method string getAppId() Obtain Member account Appid
 * @method void setAppId(string $AppId) Set Member account Appid
 * @method string getJoinType() Obtain account joining method,create/invite
 * @method void setJoinType(string $JoinType) Set account joining method,create/invite
 * @method string getCFWProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setCFWProtect(string $CFWProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method string getWAFProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setWAFProtect(string $WAFProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method string getCWPProtect() Obtain If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method void setCWPProtect(string $CWPProtect) Set If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
 * @method integer getEnable() Obtain 1 enable, 0 not enabled
 * @method void setEnable(integer $Enable) Set 1 enable, 0 not enabled
 * @method string getCSIPProtect() Obtain "Free"      
   //Free edition
   "Advanced"   //Advanced edition "Enterprise" //Enterprise edition "Ultimate"  
   //Ultimate edition
 * @method void setCSIPProtect(string $CSIPProtect) Set "Free"      
   //Free edition
   "Advanced"   //Advanced edition "Enterprise" //Enterprise edition "Ultimate"  
   //Ultimate edition
 * @method integer getQuotaConsumer() Obtain 1 indicates the quota consumer
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 1 indicates the quota consumer
 * @method integer getCloudType() Obtain Account type: 0 for Tencent Cloud account, 1 for AWS account
 * @method void setCloudType(integer $CloudType) Set Account type: 0 for Tencent Cloud account, 1 for AWS account
 * @method integer getSyncFrequency() Obtain 0 indicates the default value; 1 indicates 10 minutes; 2 indicates 1 hour; 3 indicates 24 hours
 * @method void setSyncFrequency(integer $SyncFrequency) Set 0 indicates the default value; 1 indicates 10 minutes; 2 indicates 1 hour; 3 indicates 24 hours
 * @method boolean getIsExpired() Obtain Whether the multi-cloud account has expired
 * @method void setIsExpired(boolean $IsExpired) Set Whether the multi-cloud account has expired
 * @method array getPermissionList() Obtain Multi-cloud account permissions list
 * @method void setPermissionList(array $PermissionList) Set Multi-cloud account permissions list
 * @method integer getAuthType() Obtain 1
 * @method void setAuthType(integer $AuthType) Set 1
 * @method integer getTcMemberType() Obtain 0 Tencent Cloud group account
1 Tencent Cloud access account
2 non-Tencent Cloud
 * @method void setTcMemberType(integer $TcMemberType) Set 0 Tencent Cloud group account
1 Tencent Cloud access account
2 non-Tencent Cloud
 * @method integer getSubUserCount() Obtain Sub-account count
 * @method void setSubUserCount(integer $SubUserCount) Set Sub-account count
 * @method string getJoinTypeInfo() Obtain Joining method details
 * @method void setJoinTypeInfo(string $JoinTypeInfo) Set Joining method details
 */
class OrganizationUserInfo extends AbstractModel
{
    /**
     * @var string Member account Uin
     */
    public $Uin;

    /**
     * @var string Member account name
     */
    public $NickName;

    /**
     * @var string Department node name, department of account
     */
    public $NodeName;

    /**
     * @var integer Asset Quantity
     */
    public $AssetCount;

    /**
     * @var integer Risk Quantity
     */
    public $RiskCount;

    /**
     * @var integer Attack Quantity
     */
    public $AttackCount;

    /**
     * @var string Member/Admin/;Member or Administrator
     */
    public $Role;

    /**
     * @var string Member account id
     */
    public $MemberId;

    /**
     * @var string Member account Appid
     */
    public $AppId;

    /**
     * @var string account joining method,create/invite
     */
    public $JoinType;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $CFWProtect;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $WAFProtect;

    /**
     * @var string If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     */
    public $CWPProtect;

    /**
     * @var integer 1 enable, 0 not enabled
     */
    public $Enable;

    /**
     * @var string "Free"      
   //Free edition
   "Advanced"   //Advanced edition "Enterprise" //Enterprise edition "Ultimate"  
   //Ultimate edition
     */
    public $CSIPProtect;

    /**
     * @var integer 1 indicates the quota consumer
     */
    public $QuotaConsumer;

    /**
     * @var integer Account type: 0 for Tencent Cloud account, 1 for AWS account
     */
    public $CloudType;

    /**
     * @var integer 0 indicates the default value; 1 indicates 10 minutes; 2 indicates 1 hour; 3 indicates 24 hours
     */
    public $SyncFrequency;

    /**
     * @var boolean Whether the multi-cloud account has expired
     */
    public $IsExpired;

    /**
     * @var array Multi-cloud account permissions list
     */
    public $PermissionList;

    /**
     * @var integer 1
     */
    public $AuthType;

    /**
     * @var integer 0 Tencent Cloud group account
1 Tencent Cloud access account
2 non-Tencent Cloud
     */
    public $TcMemberType;

    /**
     * @var integer Sub-account count
     */
    public $SubUserCount;

    /**
     * @var string Joining method details
     */
    public $JoinTypeInfo;

    /**
     * @param string $Uin Member account Uin
     * @param string $NickName Member account name
     * @param string $NodeName Department node name, department of account
     * @param integer $AssetCount Asset Quantity
     * @param integer $RiskCount Risk Quantity
     * @param integer $AttackCount Attack Quantity
     * @param string $Role Member/Admin/;Member or Administrator
     * @param string $MemberId Member account id
     * @param string $AppId Member account Appid
     * @param string $JoinType account joining method,create/invite
     * @param string $CFWProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param string $WAFProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param string $CWPProtect If empty, it is not enabled; otherwise, different strings correspond to different versions, with 'common' being general and not version-specific.
     * @param integer $Enable 1 enable, 0 not enabled
     * @param string $CSIPProtect "Free"      
   //Free edition
   "Advanced"   //Advanced edition "Enterprise" //Enterprise edition "Ultimate"  
   //Ultimate edition
     * @param integer $QuotaConsumer 1 indicates the quota consumer
     * @param integer $CloudType Account type: 0 for Tencent Cloud account, 1 for AWS account
     * @param integer $SyncFrequency 0 indicates the default value; 1 indicates 10 minutes; 2 indicates 1 hour; 3 indicates 24 hours
     * @param boolean $IsExpired Whether the multi-cloud account has expired
     * @param array $PermissionList Multi-cloud account permissions list
     * @param integer $AuthType 1
     * @param integer $TcMemberType 0 Tencent Cloud group account
1 Tencent Cloud access account
2 non-Tencent Cloud
     * @param integer $SubUserCount Sub-account count
     * @param string $JoinTypeInfo Joining method details
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("CFWProtect",$param) and $param["CFWProtect"] !== null) {
            $this->CFWProtect = $param["CFWProtect"];
        }

        if (array_key_exists("WAFProtect",$param) and $param["WAFProtect"] !== null) {
            $this->WAFProtect = $param["WAFProtect"];
        }

        if (array_key_exists("CWPProtect",$param) and $param["CWPProtect"] !== null) {
            $this->CWPProtect = $param["CWPProtect"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CSIPProtect",$param) and $param["CSIPProtect"] !== null) {
            $this->CSIPProtect = $param["CSIPProtect"];
        }

        if (array_key_exists("QuotaConsumer",$param) and $param["QuotaConsumer"] !== null) {
            $this->QuotaConsumer = $param["QuotaConsumer"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("SyncFrequency",$param) and $param["SyncFrequency"] !== null) {
            $this->SyncFrequency = $param["SyncFrequency"];
        }

        if (array_key_exists("IsExpired",$param) and $param["IsExpired"] !== null) {
            $this->IsExpired = $param["IsExpired"];
        }

        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = $param["PermissionList"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("TcMemberType",$param) and $param["TcMemberType"] !== null) {
            $this->TcMemberType = $param["TcMemberType"];
        }

        if (array_key_exists("SubUserCount",$param) and $param["SubUserCount"] !== null) {
            $this->SubUserCount = $param["SubUserCount"];
        }

        if (array_key_exists("JoinTypeInfo",$param) and $param["JoinTypeInfo"] !== null) {
            $this->JoinTypeInfo = $param["JoinTypeInfo"];
        }
    }
}
