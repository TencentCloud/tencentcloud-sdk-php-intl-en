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
 * Task asset information
 *
 * @method string getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(string $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain 	Asset category
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set 	Asset category
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetType() Obtain Asset sub-category
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(string $AssetType) Set Asset sub-category
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAsset() Obtain IP, domain name, asset ID, database ID, and more
 * @method void setAsset(string $Asset) Set IP, domain name, asset ID, database ID, and more
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getArn() Obtain The ID specific for an asset synched from another cloud platform
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setArn(string $Arn) Set The ID specific for an asset synched from another cloud platform
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class TaskAssetObject extends AbstractModel
{
    /**
     * @var string Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var string 	Asset category
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Asset sub-category
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var string IP, domain name, asset ID, database ID, and more
     */
    public $Asset;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string The ID specific for an asset synched from another cloud platform
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Arn;

    /**
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InstanceType 	Asset category
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset sub-category
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Asset IP, domain name, asset ID, database ID, and more
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Arn The ID specific for an asset synched from another cloud platform
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
        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }
    }
}
