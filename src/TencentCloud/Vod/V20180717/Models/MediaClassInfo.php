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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Classification information description
 *
 * @method integer getClassId() Obtain Category ID.
 * @method void setClassId(integer $ClassId) Set Category ID.
 * @method integer getParentId() Obtain Parent category ID. The parent category ID of a first-level category is -1.
 * @method void setParentId(integer $ParentId) Set Parent category ID. The parent category ID of a first-level category is -1.
 * @method string getName() Obtain Category name.
 * @method void setName(string $Name) Set Category name.
 * @method integer getLevel() Obtain Category level. The level-1 category is 0, and the maximum value is 3, which allows up to 4 classification layers.
 * @method void setLevel(integer $Level) Set Category level. The level-1 category is 0, and the maximum value is 3, which allows up to 4 classification layers.
 * @method array getSubClassIdSet() Obtain ID set of level-1 subcategories in the current category.
 * @method void setSubClassIdSet(array $SubClassIdSet) Set ID set of level-1 subcategories in the current category.
 * @method string getClassName() Obtain Category name (this field is not recommended. Use the new category name field Name instead).
 * @method void setClassName(string $ClassName) Set Category name (this field is not recommended. Use the new category name field Name instead).
 */
class MediaClassInfo extends AbstractModel
{
    /**
     * @var integer Category ID.
     */
    public $ClassId;

    /**
     * @var integer Parent category ID. The parent category ID of a first-level category is -1.
     */
    public $ParentId;

    /**
     * @var string Category name.
     */
    public $Name;

    /**
     * @var integer Category level. The level-1 category is 0, and the maximum value is 3, which allows up to 4 classification layers.
     */
    public $Level;

    /**
     * @var array ID set of level-1 subcategories in the current category.
     */
    public $SubClassIdSet;

    /**
     * @var string Category name (this field is not recommended. Use the new category name field Name instead).
     */
    public $ClassName;

    /**
     * @param integer $ClassId Category ID.
     * @param integer $ParentId Parent category ID. The parent category ID of a first-level category is -1.
     * @param string $Name Category name.
     * @param integer $Level Category level. The level-1 category is 0, and the maximum value is 3, which allows up to 4 classification layers.
     * @param array $SubClassIdSet ID set of level-1 subcategories in the current category.
     * @param string $ClassName Category name (this field is not recommended. Use the new category name field Name instead).
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
        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubClassIdSet",$param) and $param["SubClassIdSet"] !== null) {
            $this->SubClassIdSet = $param["SubClassIdSet"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }
    }
}
