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
 * List of IPs
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset Name
 * @method void setAssetName(string $AssetName) Set Asset Name
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method integer getCFWStatus() Obtain Cloud Defense Status
 * @method void setCFWStatus(integer $CFWStatus) Set Cloud Defense Status
 * @method string getAssetCreateTime() Obtain Asset creation time
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getPublicIpType() Obtain Public IP Type
 * @method void setPublicIpType(integer $PublicIpType) Set Public IP Type
 * @method string getVpcId() Obtain vpc
 * @method void setVpcId(string $VpcId) Set vpc
 * @method string getVpcName() Obtain VPC Name
 * @method void setVpcName(string $VpcName) Set VPC Name
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getNickName() Obtain Name
 * @method void setNickName(string $NickName) Set Name
 * @method integer getIsCore() Obtain Core
 * @method void setIsCore(integer $IsCore) Set Core
 * @method integer getIsCloud() Obtain On-Cloud
 * @method void setIsCloud(integer $IsCloud) Set On-Cloud
 * @method integer getAttack() Obtain network attack
 * @method void setAttack(integer $Attack) Set network attack
 * @method integer getAccess() Obtain Network access
 * @method void setAccess(integer $Access) Set Network access
 * @method integer getIntercept() Obtain Network Interception
 * @method void setIntercept(integer $Intercept) Set Network Interception
 * @method string getInBandwidth() Obtain Inbound bandwidth
 * @method void setInBandwidth(string $InBandwidth) Set Inbound bandwidth
 * @method string getOutBandwidth() Obtain Outbound bandwidth
 * @method void setOutBandwidth(string $OutBandwidth) Set Outbound bandwidth
 * @method string getInFlow() Obtain Inbound traffic
 * @method void setInFlow(string $InFlow) Set Inbound traffic
 * @method string getOutFlow() Obtain outbound traffic
 * @method void setOutFlow(string $OutFlow) Set outbound traffic
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getPortRisk() Obtain Port risk
 * @method void setPortRisk(integer $PortRisk) Set Port risk
 * @method integer getVulnerabilityRisk() Obtain Vulnerability risk
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) Set Vulnerability risk
 * @method integer getConfigurationRisk() Obtain Configuration risk
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risk
 * @method integer getScanTask() Obtain Scan Task
 * @method void setScanTask(integer $ScanTask) Set Scan Task
 * @method integer getWeakPassword() Obtain weak password
 * @method void setWeakPassword(integer $WeakPassword) Set weak password
 * @method integer getWebContentRisk() Obtain Content risk
 * @method void setWebContentRisk(integer $WebContentRisk) Set Content risk
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getAddressId() Obtain EIP Primary Key
 * @method void setAddressId(string $AddressId) Set EIP Primary Key
 * @method string getMemberId() Obtain Member ID information
 * @method void setMemberId(string $MemberId) Set Member ID information
 * @method integer getRiskExposure() Obtain risk service exposure
 * @method void setRiskExposure(integer $RiskExposure) Set risk service exposure
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 * @method integer getVerifyStatus() Obtain Asset Authentication Status. 0-Pending Authentication; 1-Authentication Succeeded; 2-Authentication in Progress; 3+-Authentication Failed.
 * @method void setVerifyStatus(integer $VerifyStatus) Set Asset Authentication Status. 0-Pending Authentication; 1-Authentication Succeeded; 2-Authentication in Progress; 3+-Authentication Failed.
 */
class IpAssetListVO extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset Name
     */
    public $AssetName;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var integer Cloud Defense Status
     */
    public $CFWStatus;

    /**
     * @var string Asset creation time
     */
    public $AssetCreateTime;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer Public IP Type
     */
    public $PublicIpType;

    /**
     * @var string vpc
     */
    public $VpcId;

    /**
     * @var string VPC Name
     */
    public $VpcName;

    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Name
     */
    public $NickName;

    /**
     * @var integer Core
     */
    public $IsCore;

    /**
     * @var integer On-Cloud
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
     * @var string Inbound bandwidth
     */
    public $InBandwidth;

    /**
     * @var string Outbound bandwidth
     */
    public $OutBandwidth;

    /**
     * @var string Inbound traffic
     */
    public $InFlow;

    /**
     * @var string outbound traffic
     */
    public $OutFlow;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Port risk
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
     * @var integer weak password
     */
    public $WeakPassword;

    /**
     * @var integer Content risk
     */
    public $WebContentRisk;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string EIP Primary Key
     */
    public $AddressId;

    /**
     * @var string Member ID information
     */
    public $MemberId;

    /**
     * @var integer risk service exposure
     */
    public $RiskExposure;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @var integer Asset Authentication Status. 0-Pending Authentication; 1-Authentication Succeeded; 2-Authentication in Progress; 3+-Authentication Failed.
     */
    public $VerifyStatus;

    /**
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset Name
     * @param string $AssetType Asset type
     * @param string $Region Region.
     * @param integer $CFWStatus Cloud Defense Status
     * @param string $AssetCreateTime Asset creation time
     * @param string $PublicIp Public IP address
     * @param integer $PublicIpType Public IP Type
     * @param string $VpcId vpc
     * @param string $VpcName VPC Name
     * @param integer $AppId appid
     * @param string $Uin User UIN
     * @param string $NickName Name
     * @param integer $IsCore Core
     * @param integer $IsCloud On-Cloud
     * @param integer $Attack network attack
     * @param integer $Access Network access
     * @param integer $Intercept Network Interception
     * @param string $InBandwidth Inbound bandwidth
     * @param string $OutBandwidth Outbound bandwidth
     * @param string $InFlow Inbound traffic
     * @param string $OutFlow outbound traffic
     * @param string $LastScanTime Last scan time
     * @param integer $PortRisk Port risk
     * @param integer $VulnerabilityRisk Vulnerability risk
     * @param integer $ConfigurationRisk Configuration risk
     * @param integer $ScanTask Scan Task
     * @param integer $WeakPassword weak password
     * @param integer $WebContentRisk Content risk
     * @param array $Tag Tag.
     * @param string $AddressId EIP Primary Key
     * @param string $MemberId Member ID information
     * @param integer $RiskExposure risk service exposure
     * @param integer $IsNewAsset New Asset or Not. 1: New
     * @param integer $VerifyStatus Asset Authentication Status. 0-Pending Authentication; 1-Authentication Succeeded; 2-Authentication in Progress; 3+-Authentication Failed.
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
