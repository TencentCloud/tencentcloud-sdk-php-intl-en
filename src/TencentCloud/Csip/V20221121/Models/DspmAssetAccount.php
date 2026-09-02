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
 * Asset account information
 *
 * @method string getAccount() Obtain Account name.
 * @method void setAccount(string $Account) Set Account name.
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method integer getAccountType() Obtain Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
 * @method void setAccountType(integer $AccountType) Set Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
 * @method string getSubject() Obtain Associated object. uin or personal id.
 * @method void setSubject(string $Subject) Set Associated object. uin or personal id.
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission information
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission information
 * @method integer getStatus() Obtain Status. 0: inactive, 1: active, 2: deleted
 * @method void setStatus(integer $Status) Set Status. 0: inactive, 1: active, 2: deleted
 * @method string getCreateTime() Obtain Account creation time.
 * @method void setCreateTime(string $CreateTime) Set Account creation time.
 * @method string getValidateFrom() Obtain Access permission effective time.
 * @method void setValidateFrom(string $ValidateFrom) Set Access permission effective time.
 * @method string getValidateTo() Obtain Access privilege expiration time.
 * @method void setValidateTo(string $ValidateTo) Set Access privilege expiration time.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method integer getIsNewAccount() Obtain Whether it is a new account
 * @method void setIsNewAccount(integer $IsNewAccount) Set Whether it is a new account
 * @method integer getIdentifyType() Obtain Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
 * @method void setIdentifyType(integer $IdentifyType) Set Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
 * @method DspmUinUser getOwnerUin() Obtain The user that the cloud account uin belongs to.
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set The user that the cloud account uin belongs to.
 * @method DspmPersonUser getPerson() Obtain Information about the personal user it belongs to.
 * @method void setPerson(DspmPersonUser $Person) Set Information about the personal user it belongs to.
 * @method DspmRiskCount getRiskCount() Obtain Risk statistical information
 * @method void setRiskCount(DspmRiskCount $RiskCount) Set Risk statistical information
 * @method DspmDbAccountPrivilege getPresetPrivilege() Obtain Preset permission.
 * @method void setPresetPrivilege(DspmDbAccountPrivilege $PresetPrivilege) Set Preset permission.
 */
class DspmAssetAccount extends AbstractModel
{
    /**
     * @var string Account name.
     */
    public $Account;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var integer Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
     */
    public $AccountType;

    /**
     * @var string Associated object. uin or personal id.
     */
    public $Subject;

    /**
     * @var DspmDbAccountPrivilege Permission information
     */
    public $Privilege;

    /**
     * @var integer Status. 0: inactive, 1: active, 2: deleted
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
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var integer Whether it is a new account
     */
    public $IsNewAccount;

    /**
     * @var integer Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser The user that the cloud account uin belongs to.
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser Information about the personal user it belongs to.
     */
    public $Person;

    /**
     * @var DspmRiskCount Risk statistical information
     */
    public $RiskCount;

    /**
     * @var DspmDbAccountPrivilege Preset permission.
     */
    public $PresetPrivilege;

    /**
     * @param string $Account Account name.
     * @param string $Host Host address
     * @param integer $AccountType Account type. 0-Undefined 1-Service account 2-Personal account 3-Temporary account
     * @param string $Subject Associated object. uin or personal id.
     * @param DspmDbAccountPrivilege $Privilege Permission information
     * @param integer $Status Status. 0: inactive, 1: active, 2: deleted
     * @param string $CreateTime Account creation time.
     * @param string $ValidateFrom Access permission effective time.
     * @param string $ValidateTo Access privilege expiration time.
     * @param string $Remark Remarks
     * @param string $AssetId Asset ID
     * @param integer $IsNewAccount Whether it is a new account
     * @param integer $IdentifyType Identity type. null for non-identity accounts. 0-Undefined 2-Long-term identity 3-Temporary identity
     * @param DspmUinUser $OwnerUin The user that the cloud account uin belongs to.
     * @param DspmPersonUser $Person Information about the personal user it belongs to.
     * @param DspmRiskCount $RiskCount Risk statistical information
     * @param DspmDbAccountPrivilege $PresetPrivilege Preset permission.
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
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

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("IsNewAccount",$param) and $param["IsNewAccount"] !== null) {
            $this->IsNewAccount = $param["IsNewAccount"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("PresetPrivilege",$param) and $param["PresetPrivilege"] !== null) {
            $this->PresetPrivilege = new DspmDbAccountPrivilege();
            $this->PresetPrivilege->deserialize($param["PresetPrivilege"]);
        }
    }
}
