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
 * Asset tree - Asset type node
 *
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getAssetTypeName() Obtain <p>Asset type name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type name</p>
 * @method integer getAssetCount() Obtain <p>Asset type count</p>
 * @method void setAssetCount(integer $AssetCount) Set <p>Asset type count</p>
 * @method integer getAssetTypeID() Obtain <p>Asset type ID</p>
 * @method void setAssetTypeID(integer $AssetTypeID) Set <p>Asset type ID</p>
 */
class AssetTypeNode extends AbstractModel
{
    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset type name</p>
     */
    public $AssetTypeName;

    /**
     * @var integer <p>Asset type count</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>Asset type ID</p>
     */
    public $AssetTypeID;

    /**
     * @param string $AssetType <p>Asset type</p>
     * @param string $AssetTypeName <p>Asset type name</p>
     * @param integer $AssetCount <p>Asset type count</p>
     * @param integer $AssetTypeID <p>Asset type ID</p>
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("AssetTypeID",$param) and $param["AssetTypeID"] !== null) {
            $this->AssetTypeID = $param["AssetTypeID"];
        }
    }
}
