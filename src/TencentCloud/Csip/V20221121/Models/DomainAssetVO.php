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
 * Domain assets 
 *
 * @method array getAssetId() Obtain Asset ID
 * @method void setAssetId(array $AssetId) Set Asset ID
 * @method array getAssetName() Obtain Asset Name
 * @method void setAssetName(array $AssetName) Set Asset Name
 * @method array getAssetType() Obtain Asset type
 * @method void setAssetType(array $AssetType) Set Asset type
 * @method array getRegion() Obtain Region.
 * @method void setRegion(array $Region) Set Region.
 * @method integer getWAFStatus() Obtain WAF Status
 * @method void setWAFStatus(integer $WAFStatus) Set WAF Status
 * @method string getAssetCreateTime() Obtain Asset Creation Time
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset Creation Time
 * @method integer getAppId() Obtain Appid
 * @method void setAppId(integer $AppId) Set Appid
 * @method string getUin() Obtain Account ID
 * @method void setUin(string $Uin) Set Account ID
 * @method string getNickName() Obtain Account name
 * @method void setNickName(string $NickName) Set Account name
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method integer getIsCloud() Obtain Whether it is on-cloud asset.
 * @method void setIsCloud(integer $IsCloud) Set Whether it is on-cloud asset.
 * @method integer getAttack() Obtain network attack
 * @method void setAttack(integer $Attack) Set network attack
 * @method integer getAccess() Obtain Network access
 * @method void setAccess(integer $Access) Set Network access
 * @method integer getIntercept() Obtain Network Interception
 * @method void setIntercept(integer $Intercept) Set Network Interception
 * @method string getInBandwidth() Obtain Inbound peak bandwidth
 * @method void setInBandwidth(string $InBandwidth) Set Inbound peak bandwidth
 * @method string getOutBandwidth() Obtain Outbound peak bandwidth
 * @method void setOutBandwidth(string $OutBandwidth) Set Outbound peak bandwidth
 * @method string getInFlow() Obtain Cumulative Inbound Traffic
 * @method void setInFlow(string $InFlow) Set Cumulative Inbound Traffic
 * @method string getOutFlow() Obtain Cumulative Outbound Traffic
 * @method void setOutFlow(string $OutFlow) Set Cumulative Outbound Traffic
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getPortRisk() Obtain port risk
 * @method void setPortRisk(integer $PortRisk) Set port risk
 * @method integer getVulnerabilityRisk() Obtain Vulnerability risk
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) Set Vulnerability risk
 * @method integer getConfigurationRisk() Obtain Configuration risk
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risk
 * @method integer getScanTask() Obtain Scan Task
 * @method void setScanTask(integer $ScanTask) Set Scan Task
 * @method string getSubDomain() Obtain Domain
 * @method void setSubDomain(string $SubDomain) Set Domain
 * @method array getSeverIp() Obtain Resolve IP
 * @method void setSeverIp(array $SeverIp) Set Resolve IP
 * @method integer getBotCount() Obtain Number of Bot Attacks
 * @method void setBotCount(integer $BotCount) Set Number of Bot Attacks
 * @method integer getWeakPassword() Obtain Weak password risk
 * @method void setWeakPassword(integer $WeakPassword) Set Weak password risk
 * @method integer getWebContentRisk() Obtain Content risk
 * @method void setWebContentRisk(integer $WebContentRisk) Set Content risk
 * @method array getTag() Obtain tag
 * @method void setTag(array $Tag) Set tag
 * @method string getSourceType() Obtain Associated instance type
 * @method void setSourceType(string $SourceType) Set Associated instance type
 * @method string getMemberId() Obtain Member ID information
 * @method void setMemberId(string $MemberId) Set Member ID information
 * @method integer getCCAttack() Obtain CC Attack
 * @method void setCCAttack(integer $CCAttack) Set CC Attack
 * @method integer getWebAttack() Obtain Web Attack
 * @method void setWebAttack(integer $WebAttack) Set Web Attack
 * @method integer getServiceRisk() Obtain Number of Risk Service Exposures
 * @method void setServiceRisk(integer $ServiceRisk) Set Number of Risk Service Exposures
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 * @method string getVerifyDomain() Obtain Random Layer-3 Domain of Assets to Be Recognized
 * @method void setVerifyDomain(string $VerifyDomain) Set Random Layer-3 Domain of Assets to Be Recognized
 * @method string getVerifyTXTRecord() Obtain TXT Record Content of Pending Confirmation Assets
 * @method void setVerifyTXTRecord(string $VerifyTXTRecord) Set TXT Record Content of Pending Confirmation Assets
 * @method integer getVerifyStatus() Obtain Authentication Status of Assets Pending Recognition. 0: Pending Authentication; 1: Authentication Succeeded; 2: Authentication in Progress; 3: TXT Authentication Failed; 4: Manual Authentication Failed.
 * @method void setVerifyStatus(integer $VerifyStatus) Set Authentication Status of Assets Pending Recognition. 0: Pending Authentication; 1: Authentication Succeeded; 2: Authentication in Progress; 3: TXT Authentication Failed; 4: Manual Authentication Failed.
 * @method integer getBotAccessCount() Obtain Bot Access Count
 * @method void setBotAccessCount(integer $BotAccessCount) Set Bot Access Count
 */
class DomainAssetVO extends AbstractModel
{
    /**
     * @var array Asset ID
     */
    public $AssetId;

    /**
     * @var array Asset Name
     */
    public $AssetName;

    /**
     * @var array Asset type
     */
    public $AssetType;

    /**
     * @var array Region.
     */
    public $Region;

    /**
     * @var integer WAF Status
     */
    public $WAFStatus;

    /**
     * @var string Asset Creation Time
     */
    public $AssetCreateTime;

    /**
     * @var integer Appid
     */
    public $AppId;

    /**
     * @var string Account ID
     */
    public $Uin;

    /**
     * @var string Account name
     */
    public $NickName;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var integer Whether it is on-cloud asset.
     */
    public $IsCloud;

    /**
     * @var integer network attack
     */
    public $Attack;

    /**
     * @var integer Network access
     */
    public $Access;

    /**
     * @var integer Network Interception
     */
    public $Intercept;

    /**
     * @var string Inbound peak bandwidth
     */
    public $InBandwidth;

    /**
     * @var string Outbound peak bandwidth
     */
    public $OutBandwidth;

    /**
     * @var string Cumulative Inbound Traffic
     */
    public $InFlow;

    /**
     * @var string Cumulative Outbound Traffic
     */
    public $OutFlow;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer port risk
     */
    public $PortRisk;

    /**
     * @var integer Vulnerability risk
     */
    public $VulnerabilityRisk;

    /**
     * @var integer Configuration risk
     */
    public $ConfigurationRisk;

    /**
     * @var integer Scan Task
     */
    public $ScanTask;

    /**
     * @var string Domain
     */
    public $SubDomain;

    /**
     * @var array Resolve IP
     */
    public $SeverIp;

    /**
     * @var integer Number of Bot Attacks
     */
    public $BotCount;

    /**
     * @var integer Weak password risk
     */
    public $WeakPassword;

    /**
     * @var integer Content risk
     */
    public $WebContentRisk;

    /**
     * @var array tag
     */
    public $Tag;

    /**
     * @var string Associated instance type
     */
    public $SourceType;

    /**
     * @var string Member ID information
     */
    public $MemberId;

    /**
     * @var integer CC Attack
     */
    public $CCAttack;

    /**
     * @var integer Web Attack
     */
    public $WebAttack;

    /**
     * @var integer Number of Risk Service Exposures
     */
    public $ServiceRisk;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @var string Random Layer-3 Domain of Assets to Be Recognized
     */
    public $VerifyDomain;

    /**
     * @var string TXT Record Content of Pending Confirmation Assets
     */
    public $VerifyTXTRecord;

    /**
     * @var integer Authentication Status of Assets Pending Recognition. 0: Pending Authentication; 1: Authentication Succeeded; 2: Authentication in Progress; 3: TXT Authentication Failed; 4: Manual Authentication Failed.
     */
    public $VerifyStatus;

    /**
     * @var integer Bot Access Count
     */
    public $BotAccessCount;

    /**
     * @param array $AssetId Asset ID
     * @param array $AssetName Asset Name
     * @param array $AssetType Asset type
     * @param array $Region Region.
     * @param integer $WAFStatus WAF Status
     * @param string $AssetCreateTime Asset Creation Time
     * @param integer $AppId Appid
     * @param string $Uin Account ID
     * @param string $NickName Account name
     * @param integer $IsCore Core or Not
     * @param integer $IsCloud Whether it is on-cloud asset.
     * @param integer $Attack network attack
     * @param integer $Access Network access
     * @param integer $Intercept Network Interception
     * @param string $InBandwidth Inbound peak bandwidth
     * @param string $OutBandwidth Outbound peak bandwidth
     * @param string $InFlow Cumulative Inbound Traffic
     * @param string $OutFlow Cumulative Outbound Traffic
     * @param string $LastScanTime Last scan time
     * @param integer $PortRisk port risk
     * @param integer $VulnerabilityRisk Vulnerability risk
     * @param integer $ConfigurationRisk Configuration risk
     * @param integer $ScanTask Scan Task
     * @param string $SubDomain Domain
     * @param array $SeverIp Resolve IP
     * @param integer $BotCount Number of Bot Attacks
     * @param integer $WeakPassword Weak password risk
     * @param integer $WebContentRisk Content risk
     * @param array $Tag tag
     * @param string $SourceType Associated instance type
     * @param string $MemberId Member ID information
     * @param integer $CCAttack CC Attack
     * @param integer $WebAttack Web Attack
     * @param integer $ServiceRisk Number of Risk Service Exposures
     * @param integer $IsNewAsset New Asset or Not. 1: New
     * @param string $VerifyDomain Random Layer-3 Domain of Assets to Be Recognized
     * @param string $VerifyTXTRecord TXT Record Content of Pending Confirmation Assets
     * @param integer $VerifyStatus Authentication Status of Assets Pending Recognition. 0: Pending Authentication; 1: Authentication Succeeded; 2: Authentication in Progress; 3: TXT Authentication Failed; 4: Manual Authentication Failed.
     * @param integer $BotAccessCount Bot Access Count
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

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("WAFStatus",$param) and $param["WAFStatus"] !== null) {
            $this->WAFStatus = $param["WAFStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Intercept",$param) and $param["Intercept"] !== null) {
            $this->Intercept = $param["Intercept"];
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("InFlow",$param) and $param["InFlow"] !== null) {
            $this->InFlow = $param["InFlow"];
        }

        if (array_key_exists("OutFlow",$param) and $param["OutFlow"] !== null) {
            $this->OutFlow = $param["OutFlow"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("VulnerabilityRisk",$param) and $param["VulnerabilityRisk"] !== null) {
            $this->VulnerabilityRisk = $param["VulnerabilityRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("SeverIp",$param) and $param["SeverIp"] !== null) {
            $this->SeverIp = $param["SeverIp"];
        }

        if (array_key_exists("BotCount",$param) and $param["BotCount"] !== null) {
            $this->BotCount = $param["BotCount"];
        }

        if (array_key_exists("WeakPassword",$param) and $param["WeakPassword"] !== null) {
            $this->WeakPassword = $param["WeakPassword"];
        }

        if (array_key_exists("WebContentRisk",$param) and $param["WebContentRisk"] !== null) {
            $this->WebContentRisk = $param["WebContentRisk"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CCAttack",$param) and $param["CCAttack"] !== null) {
            $this->CCAttack = $param["CCAttack"];
        }

        if (array_key_exists("WebAttack",$param) and $param["WebAttack"] !== null) {
            $this->WebAttack = $param["WebAttack"];
        }

        if (array_key_exists("ServiceRisk",$param) and $param["ServiceRisk"] !== null) {
            $this->ServiceRisk = $param["ServiceRisk"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("VerifyDomain",$param) and $param["VerifyDomain"] !== null) {
            $this->VerifyDomain = $param["VerifyDomain"];
        }

        if (array_key_exists("VerifyTXTRecord",$param) and $param["VerifyTXTRecord"] !== null) {
            $this->VerifyTXTRecord = $param["VerifyTXTRecord"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("BotAccessCount",$param) and $param["BotAccessCount"] !== null) {
            $this->BotAccessCount = $param["BotAccessCount"];
        }
    }
}
