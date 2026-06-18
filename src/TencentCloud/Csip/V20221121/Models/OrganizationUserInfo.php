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
 * @method string getUin() Obtain Member Account UIN
 * @method void setUin(string $Uin) Set Member Account UIN
 * @method string getNickName() Obtain member account name
 * @method void setNickName(string $NickName) Set member account name
 * @method string getNodeName() Obtain Department Node Name, Account's Department
 * @method void setNodeName(string $NodeName) Set Department Node Name, Account's Department
 * @method integer getAssetCount() Obtain Number of assets
 * @method void setAssetCount(integer $AssetCount) Set Number of assets
 * @method integer getRiskCount() Obtain Number of risks
 * @method void setRiskCount(integer $RiskCount) Set Number of risks
 * @method integer getAttackCount() Obtain Number of Attacks
 * @method void setAttackCount(integer $AttackCount) Set Number of Attacks
 * @method string getRole() Obtain Member/Admin/; Member or Administrator
 * @method void setRole(string $Role) Set Member/Admin/; Member or Administrator
 * @method string getMemberId() Obtain Member Account ID
 * @method void setMemberId(string $MemberId) Set Member Account ID
 * @method string getAppId() Obtain Member Account AppID
 * @method void setAppId(string $AppId) Set Member Account AppID
 * @method string getJoinType() Obtain Account Joining Method: Create/Invite.
 * @method void setJoinType(string $JoinType) Set Account Joining Method: Create/Invite.
 * @method string getCFWProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setCFWProtect(string $CFWProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method string getWAFProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setWAFProtect(string $WAFProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method string getCWPProtect() Obtain Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method void setCWPProtect(string $CWPProtect) Set Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
 * @method integer getEnable() Obtain 1-Enabled; 0-Not Enabled.
 * @method void setEnable(integer $Enable) Set 1-Enabled; 0-Not Enabled.
 * @method string getCSIPProtect() Obtain Free       // Free Edition  Advanced   //Advanced Edition Enterprise //Enterprise Edition Ultimate   //Premium Edition
 * @method void setCSIPProtect(string $CSIPProtect) Set Free       // Free Edition  Advanced   //Advanced Edition Enterprise //Enterprise Edition Ultimate   //Premium Edition
 * @method integer getQuotaConsumer() Obtain 1 for quota consumer.
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 1 for quota consumer.
 * @method integer getCloudType() Obtain Account Type. 0 for Tencent Cloud account; 1 for AWS account.
 * @method void setCloudType(integer $CloudType) Set Account Type. 0 for Tencent Cloud account; 1 for AWS account.
 * @method integer getSyncFrequency() Obtain 0 for default value, 1 for 10 minutes, 2 for 1 hour, 3 for 24 hours.
 * @method void setSyncFrequency(integer $SyncFrequency) Set 0 for default value, 1 for 10 minutes, 2 for 1 hour, 3 for 24 hours.
 * @method boolean getIsExpired() Obtain Whether the multi-cloud account is expired.
 * @method void setIsExpired(boolean $IsExpired) Set Whether the multi-cloud account is expired.
 * @method array getPermissionList() Obtain Multi-Cloud Account Permission List
 * @method void setPermissionList(array $PermissionList) Set Multi-Cloud Account Permission List
 * @method integer getAuthType() Obtain 1
 * @method void setAuthType(integer $AuthType) Set 1
 * @method integer getTcMemberType() Obtain Tencent Cloud Group Account
Tencent Cloud access account
2: non-Tencent Cloud
 * @method void setTcMemberType(integer $TcMemberType) Set Tencent Cloud Group Account
Tencent Cloud access account
2: non-Tencent Cloud
 * @method integer getSubUserCount() Obtain Number of sub-accounts.
 * @method void setSubUserCount(integer $SubUserCount) Set Number of sub-accounts.
 * @method string getJoinTypeInfo() Obtain Joining method details
 * @method void setJoinTypeInfo(string $JoinTypeInfo) Set Joining method details
 */
class OrganizationUserInfo extends AbstractModel
{
    /**
     * @var string Member Account UIN
     */
    public $Uin;

    /**
     * @var string member account name
     */
    public $NickName;

    /**
     * @var string Department Node Name, Account's Department
     */
    public $NodeName;

    /**
     * @var integer Number of assets
     */
    public $AssetCount;

    /**
     * @var integer Number of risks
     */
    public $RiskCount;

    /**
     * @var integer Number of Attacks
     */
    public $AttackCount;

    /**
     * @var string Member/Admin/; Member or Administrator
     */
    public $Role;

    /**
     * @var string Member Account ID
     */
    public $MemberId;

    /**
     * @var string Member Account AppID
     */
    public $AppId;

    /**
     * @var string Account Joining Method: Create/Invite.
     */
    public $JoinType;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $CFWProtect;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $WAFProtect;

    /**
     * @var string Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     */
    public $CWPProtect;

    /**
     * @var integer 1-Enabled; 0-Not Enabled.
     */
    public $Enable;

    /**
     * @var string Free       // Free Edition  Advanced   //Advanced Edition Enterprise //Enterprise Edition Ultimate   //Premium Edition
     */
    public $CSIPProtect;

    /**
     * @var integer 1 for quota consumer.
     */
    public $QuotaConsumer;

    /**
     * @var integer Account Type. 0 for Tencent Cloud account; 1 for AWS account.
     */
    public $CloudType;

    /**
     * @var integer 0 for default value, 1 for 10 minutes, 2 for 1 hour, 3 for 24 hours.
     */
    public $SyncFrequency;

    /**
     * @var boolean Whether the multi-cloud account is expired.
     */
    public $IsExpired;

    /**
     * @var array Multi-Cloud Account Permission List
     */
    public $PermissionList;

    /**
     * @var integer 1
     */
    public $AuthType;

    /**
     * @var integer Tencent Cloud Group Account
Tencent Cloud access account
2: non-Tencent Cloud
     */
    public $TcMemberType;

    /**
     * @var integer Number of sub-accounts.
     */
    public $SubUserCount;

    /**
     * @var string Joining method details
     */
    public $JoinTypeInfo;

    /**
     * @param string $Uin Member Account UIN
     * @param string $NickName member account name
     * @param string $NodeName Department Node Name, Account's Department
     * @param integer $AssetCount Number of assets
     * @param integer $RiskCount Number of risks
     * @param integer $AttackCount Number of Attacks
     * @param string $Role Member/Admin/; Member or Administrator
     * @param string $MemberId Member Account ID
     * @param string $AppId Member Account AppID
     * @param string $JoinType Account Joining Method: Create/Invite.
     * @param string $CFWProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param string $WAFProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param string $CWPProtect Not enabled if empty. Otherwise, different strings correspond to different versions. Common for General, regardless of version.
     * @param integer $Enable 1-Enabled; 0-Not Enabled.
     * @param string $CSIPProtect Free       // Free Edition  Advanced   //Advanced Edition Enterprise //Enterprise Edition Ultimate   //Premium Edition
     * @param integer $QuotaConsumer 1 for quota consumer.
     * @param integer $CloudType Account Type. 0 for Tencent Cloud account; 1 for AWS account.
     * @param integer $SyncFrequency 0 for default value, 1 for 10 minutes, 2 for 1 hour, 3 for 24 hours.
     * @param boolean $IsExpired Whether the multi-cloud account is expired.
     * @param array $PermissionList Multi-Cloud Account Permission List
     * @param integer $AuthType 1
     * @param integer $TcMemberType Tencent Cloud Group Account
Tencent Cloud access account
2: non-Tencent Cloud
     * @param integer $SubUserCount Number of sub-accounts.
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
