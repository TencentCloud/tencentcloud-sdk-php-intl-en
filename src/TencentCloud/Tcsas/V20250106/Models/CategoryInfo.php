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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Category information
 *
 * @method string getID() Obtain Category ID
 * @method void setID(string $ID) Set Category ID
 * @method string getName() Obtain Category name
 * @method void setName(string $Name) Set Category name
 * @method array getSubItems() Obtain Subcategory information
 * @method void setSubItems(array $SubItems) Set Subcategory information
 */
class CategoryInfo extends AbstractModel
{
    /**
     * @var string Category ID
     */
    public $ID;

    /**
     * @var string Category name
     */
    public $Name;

    /**
     * @var array Subcategory information
     */
    public $SubItems;

    /**
     * @param string $ID Category ID
     * @param string $Name Category name
     * @param array $SubItems Subcategory information
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubItems",$param) and $param["SubItems"] !== null) {
            $this->SubItems = [];
            foreach ($param["SubItems"] as $key => $value){
                $obj = new CategoryItem();
                $obj->deserialize($value);
                array_push($this->SubItems, $obj);
            }
        }
    }
}
