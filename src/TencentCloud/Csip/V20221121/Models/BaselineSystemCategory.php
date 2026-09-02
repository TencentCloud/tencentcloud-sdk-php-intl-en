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
 * Baseline system main category (including all its subcategories and detection item ID list).
 *
 * @method array getSubCategoryList() Obtain <p>List of subcategories under the parent category (each subcategory includes its built-in detection item ID list).</p>
 * @method void setSubCategoryList(array $SubCategoryList) Set <p>List of subcategories under the parent category (each subcategory includes its built-in detection item ID list).</p>
 * @method BaselineCategory getCategory() Obtain <p>System parent category basic information (ID, name, description, CheckAssetType).</p>
 * @method void setCategory(BaselineCategory $Category) Set <p>System parent category basic information (ID, name, description, CheckAssetType).</p>
 * @method integer getItemCount() Obtain <p>Detection item count</p>
 * @method void setItemCount(integer $ItemCount) Set <p>Detection item count</p>
 */
class BaselineSystemCategory extends AbstractModel
{
    /**
     * @var array <p>List of subcategories under the parent category (each subcategory includes its built-in detection item ID list).</p>
     */
    public $SubCategoryList;

    /**
     * @var BaselineCategory <p>System parent category basic information (ID, name, description, CheckAssetType).</p>
     */
    public $Category;

    /**
     * @var integer <p>Detection item count</p>
     */
    public $ItemCount;

    /**
     * @param array $SubCategoryList <p>List of subcategories under the parent category (each subcategory includes its built-in detection item ID list).</p>
     * @param BaselineCategory $Category <p>System parent category basic information (ID, name, description, CheckAssetType).</p>
     * @param integer $ItemCount <p>Detection item count</p>
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
        if (array_key_exists("SubCategoryList",$param) and $param["SubCategoryList"] !== null) {
            $this->SubCategoryList = [];
            foreach ($param["SubCategoryList"] as $key => $value){
                $obj = new BaselineSubCategory();
                $obj->deserialize($value);
                array_push($this->SubCategoryList, $obj);
            }
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new BaselineCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }
    }
}
