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
 * MsgRecordCategory
 *
 * @method string getCategoryId() Obtain <p>Business ID of the category</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Business ID of the category</p>
 * @method array getChildren() Obtain <p>Subcategory list, tree nesting</p>
 * @method void setChildren(array $Children) Set <p>Subcategory list, tree nesting</p>
 * @method string getName() Obtain <p>Category name</p>
 * @method void setName(string $Name) Set <p>Category name</p>
 * @method CategoryPermission getPermission() Obtain <p>Operation permissions of the current user on this category.</p>
 * @method void setPermission(CategoryPermission $Permission) Set <p>Operation permissions of the current user on this category.</p>
 * @method string getTotalCount() Obtain <p>The number of message records in this category</p>
 * @method void setTotalCount(string $TotalCount) Set <p>The number of message records in this category</p>
 */
class MsgRecordCategory extends AbstractModel
{
    /**
     * @var string <p>Business ID of the category</p>
     */
    public $CategoryId;

    /**
     * @var array <p>Subcategory list, tree nesting</p>
     */
    public $Children;

    /**
     * @var string <p>Category name</p>
     */
    public $Name;

    /**
     * @var CategoryPermission <p>Operation permissions of the current user on this category.</p>
     */
    public $Permission;

    /**
     * @var string <p>The number of message records in this category</p>
     */
    public $TotalCount;

    /**
     * @param string $CategoryId <p>Business ID of the category</p>
     * @param array $Children <p>Subcategory list, tree nesting</p>
     * @param string $Name <p>Category name</p>
     * @param CategoryPermission $Permission <p>Operation permissions of the current user on this category.</p>
     * @param string $TotalCount <p>The number of message records in this category</p>
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

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new MsgRecordCategory();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new CategoryPermission();
            $this->Permission->deserialize($param["Permission"]);
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
