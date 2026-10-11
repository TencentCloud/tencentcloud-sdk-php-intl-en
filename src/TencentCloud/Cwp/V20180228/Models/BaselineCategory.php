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
 * Classification of Baseline Rules or Items
 *
 * @method integer getCategoryId() Obtain Category ID
 * @method void setCategoryId(integer $CategoryId) Set Category ID
 * @method string getCategoryName() Obtain Category name
 * @method void setCategoryName(string $CategoryName) Set Category name
 * @method integer getParentCategoryId() Obtain Parent Category ID. No parent category if it is 0.
 * @method void setParentCategoryId(integer $ParentCategoryId) Set Parent Category ID. No parent category if it is 0.
 * @method integer getItemCount() Obtain Total number of detection items under a subcategory.
 * @method void setItemCount(integer $ItemCount) Set Total number of detection items under a subcategory.
 */
class BaselineCategory extends AbstractModel
{
    /**
     * @var integer Category ID
     */
    public $CategoryId;

    /**
     * @var string Category name
     */
    public $CategoryName;

    /**
     * @var integer Parent Category ID. No parent category if it is 0.
     */
    public $ParentCategoryId;

    /**
     * @var integer Total number of detection items under a subcategory.
     */
    public $ItemCount;

    /**
     * @param integer $CategoryId Category ID
     * @param string $CategoryName Category name
     * @param integer $ParentCategoryId Parent Category ID. No parent category if it is 0.
     * @param integer $ItemCount Total number of detection items under a subcategory.
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }
    }
}
