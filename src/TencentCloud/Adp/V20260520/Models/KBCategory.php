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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Knowledge base classification info (including metadata configuration)
 *
 * @method boolean getCanAdd() Obtain <p>Whether it can be added</p>
 * @method void setCanAdd(boolean $CanAdd) Set <p>Whether it can be added</p>
 * @method boolean getCanDelete() Obtain <p>Whether it is deletable</p>
 * @method void setCanDelete(boolean $CanDelete) Set <p>Whether it is deletable</p>
 * @method boolean getCanEdit() Obtain <p>Whether it is editable</p>
 * @method void setCanEdit(boolean $CanEdit) Set <p>Whether it is editable</p>
 * @method string getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Category ID</p>
 * @method array getChildList() Obtain <p>Subcategory list.</p>
 * @method void setChildList(array $ChildList) Set <p>Subcategory list.</p>
 * @method boolean getIsLeaf() Obtain <p>Is leaf node (no subcategory)</p>
 * @method void setIsLeaf(boolean $IsLeaf) Set <p>Is leaf node (no subcategory)</p>
 * @method integer getItemCount() Obtain <p>The number of category objects</p>
 * @method void setItemCount(integer $ItemCount) Set <p>The number of category objects</p>
 * @method MetaValue getMetaValue() Obtain <p>Metadata configuration (configuration message when this category is set as metadata)</p>
 * @method void setMetaValue(MetaValue $MetaValue) Set <p>Metadata configuration (configuration message when this category is set as metadata)</p>
 * @method string getName() Obtain <p>Category name</p>
 * @method void setName(string $Name) Set <p>Category name</p>
 */
class KBCategory extends AbstractModel
{
    /**
     * @var boolean <p>Whether it can be added</p>
     */
    public $CanAdd;

    /**
     * @var boolean <p>Whether it is deletable</p>
     */
    public $CanDelete;

    /**
     * @var boolean <p>Whether it is editable</p>
     */
    public $CanEdit;

    /**
     * @var string <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>Subcategory list.</p>
     */
    public $ChildList;

    /**
     * @var boolean <p>Is leaf node (no subcategory)</p>
     */
    public $IsLeaf;

    /**
     * @var integer <p>The number of category objects</p>
     */
    public $ItemCount;

    /**
     * @var MetaValue <p>Metadata configuration (configuration message when this category is set as metadata)</p>
     */
    public $MetaValue;

    /**
     * @var string <p>Category name</p>
     */
    public $Name;

    /**
     * @param boolean $CanAdd <p>Whether it can be added</p>
     * @param boolean $CanDelete <p>Whether it is deletable</p>
     * @param boolean $CanEdit <p>Whether it is editable</p>
     * @param string $CategoryId <p>Category ID</p>
     * @param array $ChildList <p>Subcategory list.</p>
     * @param boolean $IsLeaf <p>Is leaf node (no subcategory)</p>
     * @param integer $ItemCount <p>The number of category objects</p>
     * @param MetaValue $MetaValue <p>Metadata configuration (configuration message when this category is set as metadata)</p>
     * @param string $Name <p>Category name</p>
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
        if (array_key_exists("CanAdd",$param) and $param["CanAdd"] !== null) {
            $this->CanAdd = $param["CanAdd"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ChildList",$param) and $param["ChildList"] !== null) {
            $this->ChildList = [];
            foreach ($param["ChildList"] as $key => $value){
                $obj = new KBCategory();
                $obj->deserialize($value);
                array_push($this->ChildList, $obj);
            }
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = new MetaValue();
            $this->MetaValue->deserialize($param["MetaValue"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
