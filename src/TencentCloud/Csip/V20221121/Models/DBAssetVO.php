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
 * Details of a database asset
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset name.
 * @method void setAssetName(string $AssetName) Set Asset name.
 * @method string getAssetType() Obtain Asset type.
 * @method void setAssetType(string $AssetType) Set Asset type.
 * @method string getVpcId() Obtain vpcid
 * @method void setVpcId(string $VpcId) Set vpcid
 * @method string getVpcName() Obtain vpc Tag.
 * @method void setVpcName(string $VpcName) Set vpc Tag.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getAssetCreateTime() Obtain Asset creation time.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time.
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getConfigurationRisk() Obtain Configuration risk.
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risk.
 * @method integer getAttack() Obtain Network attack.
 * @method void setAttack(integer $Attack) Set Network attack.
 * @method integer getAccess() Obtain Network access.
 * @method void setAccess(integer $Access) Set Network access.
 * @method integer getScanTask() Obtain Scan Task
 * @method void setScanTask(integer $ScanTask) Set Scan Task
 * @method integer getAppId() Obtain User appid.
 * @method void setAppId(integer $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getNickName() Obtain Nickname Alias
 * @method void setNickName(string $NickName) Set Nickname Alias
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 */
class DBAssetVO extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset name.
     */
    public $AssetName;

    /**
     * @var string Asset type.
     */
    public $AssetType;

    /**
     * @var string vpcid
     */
    public $VpcId;

    /**
     * @var string vpc Tag.
     */
    public $VpcName;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Asset creation time.
     */
    public $AssetCreateTime;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Configuration risk.
     */
    public $ConfigurationRisk;

    /**
     * @var integer Network attack.
     */
    public $Attack;

    /**
     * @var integer Network access.
     */
    public $Access;

    /**
     * @var integer Scan Task
     */
    public $ScanTask;

    /**
     * @var integer User appid.
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Nickname Alias
     */
    public $NickName;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset name.
     * @param string $AssetType Asset type.
     * @param string $VpcId vpcid
     * @param string $VpcName vpc Tag.
     * @param string $Region Region.
     * @param string $Domain Domain
     * @param string $AssetCreateTime Asset creation time.
     * @param string $LastScanTime Last scan time
     * @param integer $ConfigurationRisk Configuration risk.
     * @param integer $Attack Network attack.
     * @param integer $Access Network access.
     * @param integer $ScanTask Scan Task
     * @param integer $AppId User appid.
     * @param string $Uin User UIN
     * @param string $NickName Nickname Alias
     * @param integer $Port Port.
     * @param array $Tag Tag.
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP address
     * @param integer $Status Status.
     * @param integer $IsCore Core or Not
     * @param integer $IsNewAsset New Asset or Not. 1: New
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
