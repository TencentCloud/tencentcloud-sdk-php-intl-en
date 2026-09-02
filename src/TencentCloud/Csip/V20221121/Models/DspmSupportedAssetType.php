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
 * dspm-supported product information
 *
 * @method string getProduct() Obtain <p>Product name (used for querying)</p>
 * @method void setProduct(string $Product) Set <p>Product name (used for querying)</p>
 * @method array getRegions() Obtain <p>Region list.</p>
 * @method void setRegions(array $Regions) Set <p>Region list.</p>
 * @method string getProductDisplayName() Obtain <p>Product name-for display</p>
 * @method void setProductDisplayName(string $ProductDisplayName) Set <p>Product name-for display</p>
 * @method string getProductGroup() Obtain <p>Product group name</p>
 * @method void setProductGroup(string $ProductGroup) Set <p>Product group name</p>
 * @method integer getAssetTotal() Obtain <p>Total number of asset instances for a given asset type</p>
 * @method void setAssetTotal(integer $AssetTotal) Set <p>Total number of asset instances for a given asset type</p>
 */
class DspmSupportedAssetType extends AbstractModel
{
    /**
     * @var string <p>Product name (used for querying)</p>
     */
    public $Product;

    /**
     * @var array <p>Region list.</p>
     */
    public $Regions;

    /**
     * @var string <p>Product name-for display</p>
     */
    public $ProductDisplayName;

    /**
     * @var string <p>Product group name</p>
     */
    public $ProductGroup;

    /**
     * @var integer <p>Total number of asset instances for a given asset type</p>
     */
    public $AssetTotal;

    /**
     * @param string $Product <p>Product name (used for querying)</p>
     * @param array $Regions <p>Region list.</p>
     * @param string $ProductDisplayName <p>Product name-for display</p>
     * @param string $ProductGroup <p>Product group name</p>
     * @param integer $AssetTotal <p>Total number of asset instances for a given asset type</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new RegionConfig();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }

        if (array_key_exists("ProductDisplayName",$param) and $param["ProductDisplayName"] !== null) {
            $this->ProductDisplayName = $param["ProductDisplayName"];
        }

        if (array_key_exists("ProductGroup",$param) and $param["ProductGroup"] !== null) {
            $this->ProductGroup = $param["ProductGroup"];
        }

        if (array_key_exists("AssetTotal",$param) and $param["AssetTotal"] !== null) {
            $this->AssetTotal = $param["AssetTotal"];
        }
    }
}
