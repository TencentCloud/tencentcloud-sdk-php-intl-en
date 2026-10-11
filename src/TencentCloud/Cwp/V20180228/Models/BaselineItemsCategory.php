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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline detection item category tree structure.
 *
 * @method integer getParentCategoryId() Obtain Parent category ID of a baseline detection item.
 * @method void setParentCategoryId(integer $ParentCategoryId) Set Parent category ID of a baseline detection item.
 * @method string getParentCategoryName() Obtain Parent category name of a baseline detection item.
 * @method void setParentCategoryName(string $ParentCategoryName) Set Parent category name of a baseline detection item.
 * @method integer getCategoryCount() Obtain Number of baseline detection item subcategories.
 * @method void setCategoryCount(integer $CategoryCount) Set Number of baseline detection item subcategories.
 * @method array getCategoryLists() Obtain Baseline detection item subcategory list.
 * @method void setCategoryLists(array $CategoryLists) Set Baseline detection item subcategory list.
 */
class BaselineItemsCategory extends AbstractModel
{
    /**
     * @var integer Parent category ID of a baseline detection item.
     */
    public $ParentCategoryId;

    /**
     * @var string Parent category name of a baseline detection item.
     */
    public $ParentCategoryName;

    /**
     * @var integer Number of baseline detection item subcategories.
     */
    public $CategoryCount;

    /**
     * @var array Baseline detection item subcategory list.
     */
    public $CategoryLists;

    /**
     * @param integer $ParentCategoryId Parent category ID of a baseline detection item.
     * @param string $ParentCategoryName Parent category name of a baseline detection item.
     * @param integer $CategoryCount Number of baseline detection item subcategories.
     * @param array $CategoryLists Baseline detection item subcategory list.
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
        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }

        if (array_key_exists("ParentCategoryName",$param) and $param["ParentCategoryName"] !== null) {
            $this->ParentCategoryName = $param["ParentCategoryName"];
        }

        if (array_key_exists("CategoryCount",$param) and $param["CategoryCount"] !== null) {
            $this->CategoryCount = $param["CategoryCount"];
        }

        if (array_key_exists("CategoryLists",$param) and $param["CategoryLists"] !== null) {
            $this->CategoryLists = [];
            foreach ($param["CategoryLists"] as $key => $value){
                $obj = new BaselineCategory();
                $obj->deserialize($value);
                array_push($this->CategoryLists, $obj);
            }
        }
    }
}
