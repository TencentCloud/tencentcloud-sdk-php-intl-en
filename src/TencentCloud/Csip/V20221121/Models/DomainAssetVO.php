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
 * Domain assets 
 *
 * @method array getAssetId() Obtain Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetId(array $AssetId) Set Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(array $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetType() Obtain Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(array $AssetType) Set Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(array $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWAFStatus() Obtain WAF status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWAFStatus(integer $WAFStatus) Set WAF status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetCreateTime() Obtain Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain Appid
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set Appid
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain Account ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Account ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNickName() Obtain Account name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNickName(string $NickName) Set Account name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCloud() Obtain Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCloud(integer $IsCloud) Set Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAttack() Obtain Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAttack(integer $Attack) Set Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAccess() Obtain Network access
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAccess(integer $Access) Set Network access
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIntercept() Obtain Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIntercept(integer $Intercept) Set Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInBandwidth() Obtain Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInBandwidth(string $InBandwidth) Set Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutBandwidth() Obtain Outbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutBandwidth(string $OutBandwidth) Set Outbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInFlow() Obtain Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInFlow(string $InFlow) Set Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutFlow() Obtain Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutFlow(string $OutFlow) Set Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPortRisk() Obtain Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPortRisk(integer $PortRisk) Set Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getVulnerabilityRisk() Obtain Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) Set Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getConfigurationRisk() Obtain Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getScanTask() Obtain Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScanTask(integer $ScanTask) Set Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSubDomain() Obtain Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSubDomain(string $SubDomain) Set Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getSeverIp() Obtain Resolved IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSeverIp(array $SeverIp) Set Resolved IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getBotCount() Obtain Bot access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBotCount(integer $BotCount) Set Bot access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWeakPassword() Obtain Weak password risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWeakPassword(integer $WeakPassword) Set Weak password risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebContentRisk() Obtain Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebContentRisk(integer $WebContentRisk) Set Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSourceType() Obtain The type of associated instances.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSourceType(string $SourceType) Set The type of associated instances.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMemberId() Obtain Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMemberId(string $MemberId) Set Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCCAttack() Obtain CC attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCCAttack(integer $CCAttack) Set CC attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebAttack() Obtain Web attack
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebAttack(integer $WebAttack) Set Web attack
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getServiceRisk() Obtain Services exposed to risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setServiceRisk(integer $ServiceRisk) Set Services exposed to risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVerifyDomain() Obtain Random third-level domain name of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVerifyDomain(string $VerifyDomain) Set Random third-level domain name of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVerifyTXTRecord() Obtain TXT record of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVerifyTXTRecord(string $VerifyTXTRecord) Set TXT record of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getVerifyStatus() Obtain Ownership verification status of the asset. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3`: TXT record verification failed; `4`: Human verification failed.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVerifyStatus(integer $VerifyStatus) Set Ownership verification status of the asset. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3`: TXT record verification failed; `4`: Human verification failed.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getBotAccessCount() Obtain u200cNumber of bot attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBotAccessCount(integer $BotAccessCount) Set u200cNumber of bot attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class DomainAssetVO extends AbstractModel
{
    /**
     * @var array Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetId;

    /**
     * @var array Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var array Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var array Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer WAF status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WAFStatus;

    /**
     * @var string Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetCreateTime;

    /**
     * @var integer Appid
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Account ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Account name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NickName;

    /**
     * @var integer Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCore;

    /**
     * @var integer Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCloud;

    /**
     * @var integer Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Attack;

    /**
     * @var integer Network access
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Access;

    /**
     * @var integer Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Intercept;

    /**
     * @var string Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InBandwidth;

    /**
     * @var string Outbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutBandwidth;

    /**
     * @var string Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InFlow;

    /**
     * @var string Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutFlow;

    /**
     * @var string Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PortRisk;

    /**
     * @var integer Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VulnerabilityRisk;

    /**
     * @var integer Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ConfigurationRisk;

    /**
     * @var integer Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScanTask;

    /**
     * @var string Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SubDomain;

    /**
     * @var array Resolved IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SeverIp;

    /**
     * @var integer Bot access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $BotCount;

    /**
     * @var integer Weak password risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WeakPassword;

    /**
     * @var integer Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WebContentRisk;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string The type of associated instances.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SourceType;

    /**
     * @var string Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MemberId;

    /**
     * @var integer CC attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CCAttack;

    /**
     * @var integer Web attack
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WebAttack;

    /**
     * @var integer Services exposed to risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ServiceRisk;

    /**
     * @var integer Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @var string Random third-level domain name of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VerifyDomain;

    /**
     * @var string TXT record of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VerifyTXTRecord;

    /**
     * @var integer Ownership verification status of the asset. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3`: TXT record verification failed; `4`: Human verification failed.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VerifyStatus;

    /**
     * @var integer u200cNumber of bot attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $BotAccessCount;

    /**
     * @param array $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WAFStatus WAF status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetCreateTime Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AppId Appid
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin Account ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $NickName Account name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCloud Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Attack Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Access Network access
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Intercept Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InBandwidth Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutBandwidth Outbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InFlow Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutFlow Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PortRisk Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $VulnerabilityRisk Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ConfigurationRisk Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ScanTask Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $SubDomain Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $SeverIp Resolved IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $BotCount Bot access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WeakPassword Weak password risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebContentRisk Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $SourceType The type of associated instances.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MemberId Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CCAttack CC attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebAttack Web attack
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ServiceRisk Services exposed to risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsNewAsset Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VerifyDomain Random third-level domain name of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VerifyTXTRecord TXT record of the asset pending ownership verification
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $VerifyStatus Ownership verification status of the asset. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3`: TXT record verification failed; `4`: Human verification failed.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $BotAccessCount u200cNumber of bot attacks
Note: This field may return·null, indicating that no valid values can be obtained.
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
