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
 * Asset account identity information
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method DspmUinUser getOwnerUin() Obtain The user that the cloud account uin belongs to.
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set The user that the cloud account uin belongs to.
 * @method integer getIsManager() Obtain Administrator or Not
 * @method void setIsManager(integer $IsManager) Set Administrator or Not
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method integer getAccountType() Obtain Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
 * @method void setAccountType(integer $AccountType) Set Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission information
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission information
 * @method integer getStatus() Obtain Active status. 0: inactive, 1: active.
 * @method void setStatus(integer $Status) Set Active status. 0: inactive, 1: active.
 * @method string getCreateTime() Obtain Account creation time.
 * @method void setCreateTime(string $CreateTime) Set Account creation time.
 * @method string getValidateFrom() Obtain Access permission effective time.
 * @method void setValidateFrom(string $ValidateFrom) Set Access permission effective time.
 * @method string getValidateTo() Obtain Access privilege expiration time.
 * @method void setValidateTo(string $ValidateTo) Set Access privilege expiration time.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getPersonApplyCount() Obtain Number of visitor permission applications
 * @method void setPersonApplyCount(integer $PersonApplyCount) Set Number of visitor permission applications
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method DspmRiskCount getRiskCount() Obtain Risk statistical information
 * @method void setRiskCount(DspmRiskCount $RiskCount) Set Risk statistical information
 * @method integer getIdentifyType() Obtain Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
 * @method void setIdentifyType(integer $IdentifyType) Set Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
 * @method DspmPersonUser getPerson() Obtain Information about the personal user it belongs to.
 * @method void setPerson(DspmPersonUser $Person) Set Information about the personal user it belongs to.
 * @method DspmUinUser getCreatorUin() Obtain The user that the creator account uin belongs to.
 * @method void setCreatorUin(DspmUinUser $CreatorUin) Set The user that the creator account uin belongs to.
 * @method DspmDbAccountPrivilege getPresetPrivilege() Obtain Preset permission.
 * @method void setPresetPrivilege(DspmDbAccountPrivilege $PresetPrivilege) Set Preset permission.
 * @method string getPrivateIp() Obtain Intranet access address. If there are multiple, separate them with ';'.
 * @method void setPrivateIp(string $PrivateIp) Set Intranet access address. If there are multiple, separate them with ';'.
 * @method string getIdentifyId() Obtain Identity ID
 * @method void setIdentifyId(string $IdentifyId) Set Identity ID
 * @method integer getAppId() Obtain app id of the account associated with the asset
 * @method void setAppId(integer $AppId) Set app id of the account associated with the asset
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method string getUin() Obtain Asset account uin
 * @method void setUin(string $Uin) Set Asset account uin
 */
class DspmAssetAccountIdentify extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var DspmUinUser The user that the cloud account uin belongs to.
     */
    public $OwnerUin;

    /**
     * @var integer Administrator or Not
     */
    public $IsManager;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var integer Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
     */
    public $AccountType;

    /**
     * @var DspmDbAccountPrivilege Permission information
     */
    public $Privilege;

    /**
     * @var integer Active status. 0: inactive, 1: active.
     */
    public $Status;

    /**
     * @var string Account creation time.
     */
    public $CreateTime;

    /**
     * @var string Access permission effective time.
     */
    public $ValidateFrom;

    /**
     * @var string Access privilege expiration time.
     */
    public $ValidateTo;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Number of visitor permission applications
     */
    public $PersonApplyCount;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var DspmRiskCount Risk statistical information
     */
    public $RiskCount;

    /**
     * @var integer Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
     */
    public $IdentifyType;

    /**
     * @var DspmPersonUser Information about the personal user it belongs to.
     */
    public $Person;

    /**
     * @var DspmUinUser The user that the creator account uin belongs to.
     */
    public $CreatorUin;

    /**
     * @var DspmDbAccountPrivilege Preset permission.
     */
    public $PresetPrivilege;

    /**
     * @var string Intranet access address. If there are multiple, separate them with ';'.
     */
    public $PrivateIp;

    /**
     * @var string Identity ID
     */
    public $IdentifyId;

    /**
     * @var integer app id of the account associated with the asset
     */
    public $AppId;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var string Asset account uin
     */
    public $Uin;

    /**
     * @param string $AssetId Asset ID
     * @param DspmUinUser $OwnerUin The user that the cloud account uin belongs to.
     * @param integer $IsManager Administrator or Not
     * @param string $Host Host address
     * @param integer $AccountType Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
     * @param DspmDbAccountPrivilege $Privilege Permission information
     * @param integer $Status Active status. 0: inactive, 1: active.
     * @param string $CreateTime Account creation time.
     * @param string $ValidateFrom Access permission effective time.
     * @param string $ValidateTo Access privilege expiration time.
     * @param string $Remark Remarks
     * @param integer $PersonApplyCount Number of visitor permission applications
     * @param string $AssetName Asset name
     * @param string $AssetType Asset type
     * @param string $Region Region
     * @param DspmRiskCount $RiskCount Risk statistical information
     * @param integer $IdentifyType Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
     * @param DspmPersonUser $Person Information about the personal user it belongs to.
     * @param DspmUinUser $CreatorUin The user that the creator account uin belongs to.
     * @param DspmDbAccountPrivilege $PresetPrivilege Preset permission.
     * @param string $PrivateIp Intranet access address. If there are multiple, separate them with ';'.
     * @param string $IdentifyId Identity ID
     * @param integer $AppId app id of the account associated with the asset
     * @param string $NickName Account nickname
     * @param string $Uin Asset account uin
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PersonApplyCount",$param) and $param["PersonApplyCount"] !== null) {
            $this->PersonApplyCount = $param["PersonApplyCount"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = new DspmUinUser();
            $this->CreatorUin->deserialize($param["CreatorUin"]);
        }

        if (array_key_exists("PresetPrivilege",$param) and $param["PresetPrivilege"] !== null) {
            $this->PresetPrivilege = new DspmDbAccountPrivilege();
            $this->PresetPrivilege->deserialize($param["PresetPrivilege"]);
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
