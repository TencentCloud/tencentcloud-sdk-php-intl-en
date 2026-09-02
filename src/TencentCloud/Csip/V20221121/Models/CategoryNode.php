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
 * Asset tree - Asset category node
 *
 * @method string getCategory() Obtain <p>Asset category name</p>
 * @method void setCategory(string $Category) Set <p>Asset category name</p>
 * @method integer getDisplayOrder() Obtain <p>Display order</p>
 * @method void setDisplayOrder(integer $DisplayOrder) Set <p>Display order</p>
 * @method array getAssetTypes() Obtain <p>Subordinate asset type node</p>
 * @method void setAssetTypes(array $AssetTypes) Set <p>Subordinate asset type node</p>
 */
class CategoryNode extends AbstractModel
{
    /**
     * @var string <p>Asset category name</p>
     */
    public $Category;

    /**
     * @var integer <p>Display order</p>
     */
    public $DisplayOrder;

    /**
     * @var array <p>Subordinate asset type node</p>
     */
    public $AssetTypes;

    /**
     * @param string $Category <p>Asset category name</p>
     * @param integer $DisplayOrder <p>Display order</p>
     * @param array $AssetTypes <p>Subordinate asset type node</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("DisplayOrder",$param) and $param["DisplayOrder"] !== null) {
            $this->DisplayOrder = $param["DisplayOrder"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = [];
            foreach ($param["AssetTypes"] as $key => $value){
                $obj = new AssetTypeNode();
                $obj->deserialize($value);
                array_push($this->AssetTypes, $obj);
            }
        }
    }
}
