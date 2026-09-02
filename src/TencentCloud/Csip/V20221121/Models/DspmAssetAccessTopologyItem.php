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
 * Dspm asset access topology
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getAssetAccount() Obtain Asset account
 * @method void setAssetAccount(string $AssetAccount) Set Asset account
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method integer getAccountType() Obtain Account type.
 * @method void setAccountType(integer $AccountType) Set Account type.
 * @method string getAssetIp() Obtain Asset address
 * @method void setAssetIp(string $AssetIp) Set Asset address
 * @method string getSourceIp() Obtain Origin ip address
 * @method void setSourceIp(string $SourceIp) Set Origin ip address
 * @method string getSourceIpType() Obtain Origin ip type
 * @method void setSourceIpType(string $SourceIpType) Set Origin ip type
 * @method DspmFrequency getAccessFrequency() Obtain Access frequency (times/day)
 * @method void setAccessFrequency(DspmFrequency $AccessFrequency) Set Access frequency (times/day)
 * @method DspmFrequency getExecSQLFrequency() Obtain SQL execution frequency. Queries/hr.
 * @method void setExecSQLFrequency(DspmFrequency $ExecSQLFrequency) Set SQL execution frequency. Queries/hr.
 * @method string getAccessBeginTime() Obtain Access start time.
 * @method void setAccessBeginTime(string $AccessBeginTime) Set Access start time.
 * @method string getAccessEndTime() Obtain Access end time
 * @method void setAccessEndTime(string $AccessEndTime) Set Access end time
 * @method integer getAccountRisk() Obtain Number of account risks
 * @method void setAccountRisk(integer $AccountRisk) Set Number of account risks
 * @method integer getAssetRisk() Obtain Number of asset risks
 * @method void setAssetRisk(integer $AssetRisk) Set Number of asset risks
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method integer getIdentifyType() Obtain Identity type. null for non-identity accounts. 0: Undefined; 2: Long-term identity; 3: Temporary identity
 * @method void setIdentifyType(integer $IdentifyType) Set Identity type. null for non-identity accounts. 0: Undefined; 2: Long-term identity; 3: Temporary identity
 * @method DspmUinUser getOwnerUin() Obtain uin of the user belonging to the cloud account.
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set uin of the user belonging to the cloud account.
 * @method DspmPersonUser getPerson() Obtain User information to which it belongs.
 * @method void setPerson(DspmPersonUser $Person) Set User information to which it belongs.
 * @method integer getAccountAlarm() Obtain Alarm count of the account
 * @method void setAccountAlarm(integer $AccountAlarm) Set Alarm count of the account
 * @method integer getAssetAlarm() Obtain Number of asset alarms
 * @method void setAssetAlarm(integer $AssetAlarm) Set Number of asset alarms
 */
class DspmAssetAccessTopologyItem extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Asset account
     */
    public $AssetAccount;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var integer Account type.
     */
    public $AccountType;

    /**
     * @var string Asset address
     */
    public $AssetIp;

    /**
     * @var string Origin ip address
     */
    public $SourceIp;

    /**
     * @var string Origin ip type
     */
    public $SourceIpType;

    /**
     * @var DspmFrequency Access frequency (times/day)
     */
    public $AccessFrequency;

    /**
     * @var DspmFrequency SQL execution frequency. Queries/hr.
     */
    public $ExecSQLFrequency;

    /**
     * @var string Access start time.
     */
    public $AccessBeginTime;

    /**
     * @var string Access end time
     */
    public $AccessEndTime;

    /**
     * @var integer Number of account risks
     */
    public $AccountRisk;

    /**
     * @var integer Number of asset risks
     */
    public $AssetRisk;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var integer Identity type. null for non-identity accounts. 0: Undefined; 2: Long-term identity; 3: Temporary identity
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser uin of the user belonging to the cloud account.
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser User information to which it belongs.
     */
    public $Person;

    /**
     * @var integer Alarm count of the account
     */
    public $AccountAlarm;

    /**
     * @var integer Number of asset alarms
     */
    public $AssetAlarm;

    /**
     * @param string $AssetId Asset ID
     * @param string $AssetType Asset type
     * @param string $AssetName Asset name
     * @param string $AssetAccount Asset account
     * @param string $Host Host address
     * @param integer $AccountType Account type.
     * @param string $AssetIp Asset address
     * @param string $SourceIp Origin ip address
     * @param string $SourceIpType Origin ip type
     * @param DspmFrequency $AccessFrequency Access frequency (times/day)
     * @param DspmFrequency $ExecSQLFrequency SQL execution frequency. Queries/hr.
     * @param string $AccessBeginTime Access start time.
     * @param string $AccessEndTime Access end time
     * @param integer $AccountRisk Number of account risks
     * @param integer $AssetRisk Number of asset risks
     * @param string $Region Region
     * @param integer $IdentifyType Identity type. null for non-identity accounts. 0: Undefined; 2: Long-term identity; 3: Temporary identity
     * @param DspmUinUser $OwnerUin uin of the user belonging to the cloud account.
     * @param DspmPersonUser $Person User information to which it belongs.
     * @param integer $AccountAlarm Alarm count of the account
     * @param integer $AssetAlarm Number of asset alarms
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetAccount",$param) and $param["AssetAccount"] !== null) {
            $this->AssetAccount = $param["AssetAccount"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("AssetIp",$param) and $param["AssetIp"] !== null) {
            $this->AssetIp = $param["AssetIp"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SourceIpType",$param) and $param["SourceIpType"] !== null) {
            $this->SourceIpType = $param["SourceIpType"];
        }

        if (array_key_exists("AccessFrequency",$param) and $param["AccessFrequency"] !== null) {
            $this->AccessFrequency = new DspmFrequency();
            $this->AccessFrequency->deserialize($param["AccessFrequency"]);
        }

        if (array_key_exists("ExecSQLFrequency",$param) and $param["ExecSQLFrequency"] !== null) {
            $this->ExecSQLFrequency = new DspmFrequency();
            $this->ExecSQLFrequency->deserialize($param["ExecSQLFrequency"]);
        }

        if (array_key_exists("AccessBeginTime",$param) and $param["AccessBeginTime"] !== null) {
            $this->AccessBeginTime = $param["AccessBeginTime"];
        }

        if (array_key_exists("AccessEndTime",$param) and $param["AccessEndTime"] !== null) {
            $this->AccessEndTime = $param["AccessEndTime"];
        }

        if (array_key_exists("AccountRisk",$param) and $param["AccountRisk"] !== null) {
            $this->AccountRisk = $param["AccountRisk"];
        }

        if (array_key_exists("AssetRisk",$param) and $param["AssetRisk"] !== null) {
            $this->AssetRisk = $param["AssetRisk"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("AccountAlarm",$param) and $param["AccountAlarm"] !== null) {
            $this->AccountAlarm = $param["AccountAlarm"];
        }

        if (array_key_exists("AssetAlarm",$param) and $param["AssetAlarm"] !== null) {
            $this->AssetAlarm = $param["AssetAlarm"];
        }
    }
}
