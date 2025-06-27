<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 
 *
 * @method string getUin() Obtain 
 * @method void setUin(string $Uin) Set 
 * @method string getNickName() Obtain 
 * @method void setNickName(string $NickName) Set 
 * @method string getNodeName() Obtain 
 * @method void setNodeName(string $NodeName) Set 
 * @method integer getAssetCount() Obtain 
 * @method void setAssetCount(integer $AssetCount) Set 
 * @method integer getRiskCount() Obtain 
 * @method void setRiskCount(integer $RiskCount) Set 
 * @method integer getAttackCount() Obtain 
 * @method void setAttackCount(integer $AttackCount) Set 
 * @method string getRole() Obtain 
 * @method void setRole(string $Role) Set 
 * @method string getMemberId() Obtain 
 * @method void setMemberId(string $MemberId) Set 
 * @method string getAppId() Obtain 
 * @method void setAppId(string $AppId) Set 
 * @method string getJoinType() Obtain 
 * @method void setJoinType(string $JoinType) Set 
 * @method string getCFWProtect() Obtain 
 * @method void setCFWProtect(string $CFWProtect) Set 
 * @method string getWAFProtect() Obtain 
 * @method void setWAFProtect(string $WAFProtect) Set 
 * @method string getCWPProtect() Obtain 
 * @method void setCWPProtect(string $CWPProtect) Set 
 * @method integer getEnable() Obtain 
 * @method void setEnable(integer $Enable) Set 
 * @method string getCSIPProtect() Obtain 
 * @method void setCSIPProtect(string $CSIPProtect) Set 
 * @method integer getQuotaConsumer() Obtain 
 * @method void setQuotaConsumer(integer $QuotaConsumer) Set 
 * @method integer getCloudType() Obtain 
 * @method void setCloudType(integer $CloudType) Set 
 * @method integer getSyncFrequency() Obtain 
 * @method void setSyncFrequency(integer $SyncFrequency) Set 
 * @method boolean getIsExpired() Obtain 
 * @method void setIsExpired(boolean $IsExpired) Set 
 * @method array getPermissionList() Obtain 
 * @method void setPermissionList(array $PermissionList) Set 
 * @method integer getAuthType() Obtain 1
 * @method void setAuthType(integer $AuthType) Set 1
 * @method integer getTcMemberType() Obtain 
 * @method void setTcMemberType(integer $TcMemberType) Set 
 * @method integer getSubUserCount() Obtain 
 * @method void setSubUserCount(integer $SubUserCount) Set 
 * @method string getJoinTypeInfo() Obtain 
 * @method void setJoinTypeInfo(string $JoinTypeInfo) Set 
 */
class OrganizationUserInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Uin;

    /**
     * @var string 
     */
    public $NickName;

    /**
     * @var string 
     */
    public $NodeName;

    /**
     * @var integer 
     */
    public $AssetCount;

    /**
     * @var integer 
     */
    public $RiskCount;

    /**
     * @var integer 
     */
    public $AttackCount;

    /**
     * @var string 
     */
    public $Role;

    /**
     * @var string 
     */
    public $MemberId;

    /**
     * @var string 
     */
    public $AppId;

    /**
     * @var string 
     */
    public $JoinType;

    /**
     * @var string 
     */
    public $CFWProtect;

    /**
     * @var string 
     */
    public $WAFProtect;

    /**
     * @var string 
     */
    public $CWPProtect;

    /**
     * @var integer 
     */
    public $Enable;

    /**
     * @var string 
     */
    public $CSIPProtect;

    /**
     * @var integer 
     */
    public $QuotaConsumer;

    /**
     * @var integer 
     */
    public $CloudType;

    /**
     * @var integer 
     */
    public $SyncFrequency;

    /**
     * @var boolean 
     */
    public $IsExpired;

    /**
     * @var array 
     */
    public $PermissionList;

    /**
     * @var integer 1
     */
    public $AuthType;

    /**
     * @var integer 
     */
    public $TcMemberType;

    /**
     * @var integer 
     */
    public $SubUserCount;

    /**
     * @var string 
     */
    public $JoinTypeInfo;

    /**
     * @param string $Uin 
     * @param string $NickName 
     * @param string $NodeName 
     * @param integer $AssetCount 
     * @param integer $RiskCount 
     * @param integer $AttackCount 
     * @param string $Role 
     * @param string $MemberId 
     * @param string $AppId 
     * @param string $JoinType 
     * @param string $CFWProtect 
     * @param string $WAFProtect 
     * @param string $CWPProtect 
     * @param integer $Enable 
     * @param string $CSIPProtect 
     * @param integer $QuotaConsumer 
     * @param integer $CloudType 
     * @param integer $SyncFrequency 
     * @param boolean $IsExpired 
     * @param array $PermissionList 
     * @param integer $AuthType 1
     * @param integer $TcMemberType 
     * @param integer $SubUserCount 
     * @param string $JoinTypeInfo 
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
