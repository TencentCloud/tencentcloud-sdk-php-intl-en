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
 * Details of a database asset. 
 *
 * @method integer getCFWStatus() Obtain Cloud Defense Status
 * @method void setCFWStatus(integer $CFWStatus) Set Cloud Defense Status
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getVpcName() Obtain VPC information
 * @method void setVpcName(string $VpcName) Set VPC information
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain VPC IP
 * @method void setPrivateIp(string $PrivateIp) Set VPC IP
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getVpcId() Obtain VPC information
 * @method void setVpcId(string $VpcId) Set VPC information
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method integer getCFWProtectLevel() Obtain Cloud Defense Protection Edition
 * @method void setCFWProtectLevel(integer $CFWProtectLevel) Set Cloud Defense Protection Edition
 * @method array getTag() Obtain Tag Information
 * @method void setTag(array $Tag) Set Tag Information
 */
class DbAssetInfo extends AbstractModel
{
    /**
     * @var integer Cloud Defense Status
     */
    public $CFWStatus;

    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string VPC information
     */
    public $VpcName;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string VPC IP
     */
    public $PrivateIp;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string VPC information
     */
    public $VpcId;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var integer Cloud Defense Protection Edition
     */
    public $CFWProtectLevel;

    /**
     * @var array Tag Information
     */
    public $Tag;

    /**
     * @param integer $CFWStatus Cloud Defense Status
     * @param string $AssetId Asset ID
     * @param string $VpcName VPC information
     * @param string $AssetType Asset type
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp VPC IP
     * @param string $Region Region.
     * @param string $VpcId VPC information
     * @param string $AssetName Asset name
     * @param integer $CFWProtectLevel Cloud Defense Protection Edition
     * @param array $Tag Tag Information
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
        if (array_key_exists("CFWStatus",$param) and $param["CFWStatus"] !== null) {
            $this->CFWStatus = $param["CFWStatus"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CFWProtectLevel",$param) and $param["CFWProtectLevel"] !== null) {
            $this->CFWProtectLevel = $param["CFWProtectLevel"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }
    }
}
