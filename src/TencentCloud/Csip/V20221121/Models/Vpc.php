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
 * List of VPCs
 *
 * @method integer getSubnet() Obtain Subnet (32-bit mask)
 * @method void setSubnet(integer $Subnet) Set Subnet (32-bit mask)
 * @method integer getConnectedVpc() Obtain Connected VPC (32-bit mask)
 * @method void setConnectedVpc(integer $ConnectedVpc) Set Connected VPC (32-bit mask)
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method integer getCVM() Obtain CVM (only 32-bit)
 * @method void setCVM(integer $CVM) Set CVM (only 32-bit)
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getDNS() Obtain DNS domain
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDNS(array $DNS) Set DNS domain
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getCIDR() Obtain CIDR block
 * @method void setCIDR(string $CIDR) Set CIDR block
 * @method string getCreateTime() Obtain Asset creation time
 * @method void setCreateTime(string $CreateTime) Set Asset creation time
 * @method string getAppId() Obtain appid
 * @method void setAppId(string $AppId) Set appid
 * @method string getUin() Obtain UIN
 * @method void setUin(string $Uin) Set UIN
 * @method string getNick() Obtain User name
 * @method void setNick(string $Nick) Set User name
 * @method integer getIsNewAsset() Obtain Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset. `1`: Yes; `2`: No
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset. `1`: Yes; `2`: No
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class Vpc extends AbstractModel
{
    /**
     * @var integer Subnet (32-bit mask)
     */
    public $Subnet;

    /**
     * @var integer Connected VPC (32-bit mask)
     */
    public $ConnectedVpc;

    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var integer CVM (only 32-bit)
     */
    public $CVM;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var array DNS domain
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DNS;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string CIDR block
     */
    public $CIDR;

    /**
     * @var string Asset creation time
     */
    public $CreateTime;

    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var string User name
     */
    public $Nick;

    /**
     * @var integer Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @var integer Whether it's a critical asset. `1`: Yes; `2`: No
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCore;

    /**
     * @param integer $Subnet Subnet (32-bit mask)
     * @param integer $ConnectedVpc Connected VPC (32-bit mask)
     * @param string $AssetId Asset ID
     * @param string $Region Region
     * @param integer $CVM CVM (only 32-bit)
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $DNS DNS domain
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetName Asset name
     * @param string $CIDR CIDR block
     * @param string $CreateTime Asset creation time
     * @param string $AppId appid
     * @param string $Uin UIN
     * @param string $Nick User name
     * @param integer $IsNewAsset Whether it's a newly-added asset. Values: `1` (Yes), `0` (No)
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset. `1`: Yes; `2`: No
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
        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("ConnectedVpc",$param) and $param["ConnectedVpc"] !== null) {
            $this->ConnectedVpc = $param["ConnectedVpc"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("DNS",$param) and $param["DNS"] !== null) {
            $this->DNS = $param["DNS"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CIDR",$param) and $param["CIDR"] !== null) {
            $this->CIDR = $param["CIDR"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }
    }
}
