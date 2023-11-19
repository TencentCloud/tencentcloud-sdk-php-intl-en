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
 * List of IPs
 *
 * @method string getAssetId() Obtain Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetId(string $AssetId) Set Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(string $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetType() Obtain Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(string $AssetType) Set Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCFWStatus() Obtain CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCFWStatus(integer $CFWStatus) Set CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetCreateTime() Obtain Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPublicIpType() Obtain Public IP type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIpType(integer $PublicIpType) Set Public IP type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getVpcName() Obtain VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain appid
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set appid
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNickName() Obtain Name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNickName(string $NickName) Set Name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCloud() Obtain Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCloud(integer $IsCloud) Set Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAttack() Obtain Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAttack(integer $Attack) Set Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAccess() Obtain Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAccess(integer $Access) Set Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIntercept() Obtain Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIntercept(integer $Intercept) Set Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInBandwidth() Obtain Inbound bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInBandwidth(string $InBandwidth) Set Inbound bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutBandwidth() Obtain Outbound bandwidthtraffic peak bandwidth (bps)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutBandwidth(string $OutBandwidth) Set Outbound bandwidthtraffic peak bandwidth (bps)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInFlow() Obtain Inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInFlow(string $InFlow) Set Inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutFlow() Obtain Outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutFlow(string $OutFlow) Set Outbound traffic
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
 * @method integer getWeakPassword() Obtain Weak passwords
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWeakPassword(integer $WeakPassword) Set Weak passwords
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWebContentRisk() Obtain Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWebContentRisk(integer $WebContentRisk) Set Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAddressId() Obtain EIP ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAddressId(string $AddressId) Set EIP ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMemberId() Obtain Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMemberId(string $MemberId) Set Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getRiskExposure() Obtain Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskExposure(integer $RiskExposure) Set Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getVerifyStatus() Obtain Asset ownership verification status. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3` and above: Verification failed
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVerifyStatus(integer $VerifyStatus) Set Asset ownership verification status. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3` and above: Verification failed
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class IpAssetListVO extends AbstractModel
{
    /**
     * @var string Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetId;

    /**
     * @var string Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var string Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CFWStatus;

    /**
     * @var string Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetCreateTime;

    /**
     * @var string Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var integer Public IP type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIpType;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var integer appid
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Name
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
     * @var integer Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Attack;

    /**
     * @var integer Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Access;

    /**
     * @var integer Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Intercept;

    /**
     * @var string Inbound bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InBandwidth;

    /**
     * @var string Outbound bandwidthtraffic peak bandwidth (bps)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutBandwidth;

    /**
     * @var string Inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InFlow;

    /**
     * @var string Outbound traffic
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
     * @var integer Weak passwords
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
     * @var string EIP ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AddressId;

    /**
     * @var string Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MemberId;

    /**
     * @var integer Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskExposure;

    /**
     * @var integer Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @var integer Asset ownership verification status. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3` and above: Verification failed
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VerifyStatus;

    /**
     * @param string $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CFWStatus CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetCreateTime Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PublicIpType Public IP type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VpcId 
     * @param string $VpcName VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AppId appid
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $NickName Name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCloud Whether it's a cloud asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Attack Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Access Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Intercept Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InBandwidth Inbound bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutBandwidth Outbound bandwidthtraffic peak bandwidth (bps)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InFlow Inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutFlow Outbound traffic
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
     * @param integer $WeakPassword Weak passwords
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WebContentRisk Content risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AddressId EIP ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MemberId Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $RiskExposure Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsNewAsset Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $VerifyStatus Asset ownership verification status. `0`: Pending verification; `1`: Verified; `2`: Verifying; `3` and above: Verification failed
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

        if (array_key_exists("CFWStatus",$param) and $param["CFWStatus"] !== null) {
            $this->CFWStatus = $param["CFWStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PublicIpType",$param) and $param["PublicIpType"] !== null) {
            $this->PublicIpType = $param["PublicIpType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
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

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RiskExposure",$param) and $param["RiskExposure"] !== null) {
            $this->RiskExposure = $param["RiskExposure"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }
    }
}
