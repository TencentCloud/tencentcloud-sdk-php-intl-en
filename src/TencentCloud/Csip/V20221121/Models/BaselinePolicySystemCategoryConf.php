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
 * Hit configuration of detection items under the parent classification dimension in a system policy.
 *
 * @method integer getCategoryID() Obtain <p>System parent category ID.</p>
 * @method void setCategoryID(integer $CategoryID) Set <p>System parent category ID.</p>
 * @method boolean getAllSelect() Obtain <p>Whether to select all subcategories under this parent category. true: select all; false: take effect based on SubCategoryConfList details.</p>
 * @method void setAllSelect(boolean $AllSelect) Set <p>Whether to select all subcategories under this parent category. true: select all; false: take effect based on SubCategoryConfList details.</p>
 * @method array getSubCategoryConfList() Obtain <p>Sub-category configuration list. When AllSelect=false, this detail takes effect.</p>
 * @method void setSubCategoryConfList(array $SubCategoryConfList) Set <p>Sub-category configuration list. When AllSelect=false, this detail takes effect.</p>
 */
class BaselinePolicySystemCategoryConf extends AbstractModel
{
    /**
     * @var integer <p>System parent category ID.</p>
     */
    public $CategoryID;

    /**
     * @var boolean <p>Whether to select all subcategories under this parent category. true: select all; false: take effect based on SubCategoryConfList details.</p>
     */
    public $AllSelect;

    /**
     * @var array <p>Sub-category configuration list. When AllSelect=false, this detail takes effect.</p>
     */
    public $SubCategoryConfList;

    /**
     * @param integer $CategoryID <p>System parent category ID.</p>
     * @param boolean $AllSelect <p>Whether to select all subcategories under this parent category. true: select all; false: take effect based on SubCategoryConfList details.</p>
     * @param array $SubCategoryConfList <p>Sub-category configuration list. When AllSelect=false, this detail takes effect.</p>
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
        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("AllSelect",$param) and $param["AllSelect"] !== null) {
            $this->AllSelect = $param["AllSelect"];
        }

        if (array_key_exists("SubCategoryConfList",$param) and $param["SubCategoryConfList"] !== null) {
            $this->SubCategoryConfList = [];
            foreach ($param["SubCategoryConfList"] as $key => $value){
                $obj = new BaselinePolicySubCategoryConf();
                $obj->deserialize($value);
                array_push($this->SubCategoryConfList, $obj);
            }
        }
    }
}
