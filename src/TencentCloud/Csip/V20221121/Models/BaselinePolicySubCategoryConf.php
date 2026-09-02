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
 * Hit configuration of detection items under the sub-classification dimension.
 *
 * @method integer getCategoryID() Obtain <p>Baseline subcategory ID.</p>
 * @method void setCategoryID(integer $CategoryID) Set <p>Baseline subcategory ID.</p>
 * @method boolean getAllSelect() Obtain <p>Whether to select all detection items under this subcategory. true: select all; false: take effect based on the ItemIDList details.</p>
 * @method void setAllSelect(boolean $AllSelect) Set <p>Whether to select all detection items under this subcategory. true: select all; false: take effect based on the ItemIDList details.</p>
 * @method array getItemIDList() Obtain <p>List of selected testing item IDs, which take effect by this detail when AllSelect=false.</p>
 * @method void setItemIDList(array $ItemIDList) Set <p>List of selected testing item IDs, which take effect by this detail when AllSelect=false.</p>
 */
class BaselinePolicySubCategoryConf extends AbstractModel
{
    /**
     * @var integer <p>Baseline subcategory ID.</p>
     */
    public $CategoryID;

    /**
     * @var boolean <p>Whether to select all detection items under this subcategory. true: select all; false: take effect based on the ItemIDList details.</p>
     */
    public $AllSelect;

    /**
     * @var array <p>List of selected testing item IDs, which take effect by this detail when AllSelect=false.</p>
     */
    public $ItemIDList;

    /**
     * @param integer $CategoryID <p>Baseline subcategory ID.</p>
     * @param boolean $AllSelect <p>Whether to select all detection items under this subcategory. true: select all; false: take effect based on the ItemIDList details.</p>
     * @param array $ItemIDList <p>List of selected testing item IDs, which take effect by this detail when AllSelect=false.</p>
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

        if (array_key_exists("ItemIDList",$param) and $param["ItemIDList"] !== null) {
            $this->ItemIDList = $param["ItemIDList"];
        }
    }
}
