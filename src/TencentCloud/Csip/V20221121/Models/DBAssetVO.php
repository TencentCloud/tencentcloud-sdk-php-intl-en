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
 * Details of a database asset
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
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getVpcName() Obtain VPC tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetCreateTime() Obtain Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getConfigurationRisk() Obtain Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAttack() Obtain Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAttack(integer $Attack) Set Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAccess() Obtain 
 * @method void setAccess(integer $Access) Set 
 * @method integer getScanTask() Obtain Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScanTask(integer $ScanTask) Set Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User `appid`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User `appid`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNickName() Obtain User name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNickName(string $NickName) Set User name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class DBAssetVO extends AbstractModel
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
     * @var string 
     */
    public $VpcId;

    /**
     * @var string VPC tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetCreateTime;

    /**
     * @var string Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ConfigurationRisk;

    /**
     * @var integer Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Attack;

    /**
     * @var integer 
     */
    public $Access;

    /**
     * @var integer Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScanTask;

    /**
     * @var integer User `appid`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string User name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NickName;

    /**
     * @var integer Port
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PrivateIp;

    /**
     * @var string Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var integer Status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCore;

    /**
     * @var integer Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @param string $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VpcId 
     * @param string $VpcName VPC tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetCreateTime Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ConfigurationRisk Configuration risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Attack Network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Access 
     * @param integer $ScanTask Scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AppId User `appid`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $NickName User name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Port Port
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Status Status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsNewAsset Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
