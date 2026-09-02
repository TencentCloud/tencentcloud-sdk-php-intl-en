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
 * Distribution of the number of related assets
 *
 * @method string getAssetType() Obtain <p>Associated asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Associated asset type</p>
 * @method integer getCount() Obtain <p>Quantity.</p>
 * @method void setCount(integer $Count) Set <p>Quantity.</p>
 * @method string getAssetTypeName() Obtain <p>Asset type display name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type display name</p>
 * @method string getFilter() Obtain <p>Filter field</p>
 * @method void setFilter(string $Filter) Set <p>Filter field</p>
 */
class AssetTypeCount extends AbstractModel
{
    /**
     * @var string <p>Associated asset type</p>
     */
    public $AssetType;

    /**
     * @var integer <p>Quantity.</p>
     */
    public $Count;

    /**
     * @var string <p>Asset type display name</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>Filter field</p>
     */
    public $Filter;

    /**
     * @param string $AssetType <p>Associated asset type</p>
     * @param integer $Count <p>Quantity.</p>
     * @param string $AssetTypeName <p>Asset type display name</p>
     * @param string $Filter <p>Filter field</p>
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
