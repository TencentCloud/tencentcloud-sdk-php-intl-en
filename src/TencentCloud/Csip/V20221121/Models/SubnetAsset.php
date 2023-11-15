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
 * Subnet assets
 *
 * @method string getAppId() Obtain appid
 * @method void setAppId(string $AppId) Set appid
 * @method string getUin() Obtain UIN
 * @method void setUin(string $Uin) Set UIN
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNick() Obtain User name
 * @method void setNick(string $Nick) Set User name
 * @method string getCIDR() Obtain CIDR block
 * @method void setCIDR(string $CIDR) Set CIDR block
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method integer getCVM() Obtain Number of CVMs
 * @method void setCVM(integer $CVM) Set Number of CVMs
 * @method integer getAvailableIp() Obtain Number of available IPs
 * @method void setAvailableIp(integer $AvailableIp) Set Number of available IPs
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getConfigureRisk() Obtain Configuration risks
 * @method void setConfigureRisk(integer $ConfigureRisk) Set Configuration risks
 * @method integer getScanTask() Obtain Number of tasks.
 * @method void setScanTask(integer $ScanTask) Set Number of tasks.
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getIsCore() Obtain Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class SubnetAsset extends AbstractModel
{
    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string User name
     */
    public $Nick;

    /**
     * @var string CIDR block
     */
    public $CIDR;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var integer Number of CVMs
     */
    public $CVM;

    /**
     * @var integer Number of available IPs
     */
    public $AvailableIp;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Configuration risks
     */
    public $ConfigureRisk;

    /**
     * @var integer Number of tasks.
     */
    public $ScanTask;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

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
     * @param string $AppId appid
     * @param string $Uin UIN
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset name
     * @param string $Region Region
     * @param string $VpcId VPC ID
     * @param string $VpcName VPC name
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Nick User name
     * @param string $CIDR CIDR block
     * @param string $Zone Availability zone
     * @param integer $CVM Number of CVMs
     * @param integer $AvailableIp Number of available IPs
     * @param string $CreateTime Creation time
     * @param integer $ConfigureRisk Configuration risks
     * @param integer $ScanTask Number of tasks.
     * @param string $LastScanTime Last scan time
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("CIDR",$param) and $param["CIDR"] !== null) {
            $this->CIDR = $param["CIDR"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("AvailableIp",$param) and $param["AvailableIp"] !== null) {
            $this->AvailableIp = $param["AvailableIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ConfigureRisk",$param) and $param["ConfigureRisk"] !== null) {
            $this->ConfigureRisk = $param["ConfigureRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
