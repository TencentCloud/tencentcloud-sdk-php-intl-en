<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Category information.
 *
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method string getName() Obtain Category name.
 * @method void setName(string $Name) Set Category name.
 * @method integer getTotal() Obtain Quantity of records (such as documents, synonyms, etc.) under the category.
 * @method void setTotal(integer $Total) Set Quantity of records (such as documents, synonyms, etc.) under the category.
 * @method boolean getCanAdd() Obtain Whether it is possible to add.
 * @method void setCanAdd(boolean $CanAdd) Set Whether it is possible to add.
 * @method boolean getCanEdit() Obtain Whether it can be edited.
 * @method void setCanEdit(boolean $CanEdit) Set Whether it can be edited.
 * @method boolean getCanDelete() Obtain Whether it can be deleted.
 * @method void setCanDelete(boolean $CanDelete) Set Whether it can be deleted.
 * @method array getChildren() Obtain Subcategory.
 * @method void setChildren(array $Children) Set Subcategory.
 */
class CateInfo extends AbstractModel
{
    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var string Category name.
     */
    public $Name;

    /**
     * @var integer Quantity of records (such as documents, synonyms, etc.) under the category.
     */
    public $Total;

    /**
     * @var boolean Whether it is possible to add.
     */
    public $CanAdd;

    /**
     * @var boolean Whether it can be edited.
     */
    public $CanEdit;

    /**
     * @var boolean Whether it can be deleted.
     */
    public $CanDelete;

    /**
     * @var array Subcategory.
     */
    public $Children;

    /**
     * @param string $CateBizId Category ID.
     * @param string $Name Category name.
     * @param integer $Total Quantity of records (such as documents, synonyms, etc.) under the category.
     * @param boolean $CanAdd Whether it is possible to add.
     * @param boolean $CanEdit Whether it can be edited.
     * @param boolean $CanDelete Whether it can be deleted.
     * @param array $Children Subcategory.
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
        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CanAdd",$param) and $param["CanAdd"] !== null) {
            $this->CanAdd = $param["CanAdd"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new CateInfo();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
