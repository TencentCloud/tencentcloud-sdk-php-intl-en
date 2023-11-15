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
 * Details of a database asset. 
 *
 * @method integer getCFWStatus() Obtain CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCFWStatus(integer $CFWStatus) Set CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetId() Obtain Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetId(string $AssetId) Set Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVpcName() Obtain VPC information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetType() Obtain Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(string $AssetType) Set Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(string $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCFWProtectLevel() Obtain CFW edition
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCFWProtectLevel(integer $CFWProtectLevel) Set CFW edition
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tag information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tag information
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class DbAssetInfo extends AbstractModel
{
    /**
     * @var integer CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CFWStatus;

    /**
     * @var string Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetId;

    /**
     * @var string VPC information
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var string Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var string Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var string Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PrivateIp;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var integer CFW edition
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CFWProtectLevel;

    /**
     * @var array Tag information
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @param integer $CFWStatus CFW status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VpcName VPC information
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VpcId 
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CFWProtectLevel CFW edition
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tag information
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
