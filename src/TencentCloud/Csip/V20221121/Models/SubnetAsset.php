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
 * Subnet Assets
 *
 * @method string getAppId() Obtain appid
 * @method void setAppId(string $AppId) Set appid
 * @method string getUin() Obtain uin
 * @method void setUin(string $Uin) Set uin
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getVpcId() Obtain VPC id
 * @method void setVpcId(string $VpcId) Set VPC id
 * @method string getVpcName() Obtain VPC Name
 * @method void setVpcName(string $VpcName) Set VPC Name
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getNick() Obtain Nickname
 * @method void setNick(string $Nick) Set Nickname
 * @method string getCIDR() Obtain cidr
 * @method void setCIDR(string $CIDR) Set cidr
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method integer getCVM() Obtain CVM Count
 * @method void setCVM(integer $CVM) Set CVM Count
 * @method integer getAvailableIp() Obtain Available IP Count
 * @method void setAvailableIp(integer $AvailableIp) Set Available IP Count
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getConfigureRisk() Obtain Configuration risk
 * @method void setConfigureRisk(integer $ConfigureRisk) Set Configuration risk
 * @method integer getScanTask() Obtain Number of tasks
 * @method void setScanTask(integer $ScanTask) Set Number of tasks
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 */
class SubnetAsset extends AbstractModel
{
    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string uin
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
     * @var string Region.
     */
    public $Region;

    /**
     * @var string VPC id
     */
    public $VpcId;

    /**
     * @var string VPC Name
     */
    public $VpcName;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string Nickname
     */
    public $Nick;

    /**
     * @var string cidr
     */
    public $CIDR;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var integer CVM Count
     */
    public $CVM;

    /**
     * @var integer Available IP Count
     */
    public $AvailableIp;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Configuration risk
     */
    public $ConfigureRisk;

    /**
     * @var integer Number of tasks
     */
    public $ScanTask;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @param string $AppId appid
     * @param string $Uin uin
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset name
     * @param string $Region Region.
     * @param string $VpcId VPC id
     * @param string $VpcName VPC Name
     * @param array $Tag Tag.
     * @param string $Nick Nickname
     * @param string $CIDR cidr
     * @param string $Zone Availability zone
     * @param integer $CVM CVM Count
     * @param integer $AvailableIp Available IP Count
     * @param string $CreateTime Creation time.
     * @param integer $ConfigureRisk Configuration risk
     * @param integer $ScanTask Number of tasks
     * @param string $LastScanTime Last scan time
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
