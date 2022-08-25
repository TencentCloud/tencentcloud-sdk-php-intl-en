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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Category information description
 *
 * @method integer getClassId() Obtain The category ID.
 * @method void setClassId(integer $ClassId) Set The category ID.
 * @method integer getParentId() Obtain Parent category ID, which is -1 for a first-level category.
 * @method void setParentId(integer $ParentId) Set Parent category ID, which is -1 for a first-level category.
 * @method string getName() Obtain The category name.
 * @method void setName(string $Name) Set The category name.
 * @method integer getLevel() Obtain Category level. 0 for first-level category, up to 3, i.e., up to 4 levels of categories are allowed.
 * @method void setLevel(integer $Level) Set Category level. 0 for first-level category, up to 3, i.e., up to 4 levels of categories are allowed.
 * @method array getSubClassIdSet() Obtain The IDs of the immediate subcategories of the current category.
 * @method void setSubClassIdSet(array $SubClassIdSet) Set The IDs of the immediate subcategories of the current category.
 * @method string getClassName() Obtain The category name. This parameter is not recommended. Please use `Name` instead.
 * @method void setClassName(string $ClassName) Set The category name. This parameter is not recommended. Please use `Name` instead.
 */
class MediaClassInfo extends AbstractModel
{
    /**
     * @var integer The category ID.
     */
    public $ClassId;

    /**
     * @var integer Parent category ID, which is -1 for a first-level category.
     */
    public $ParentId;

    /**
     * @var string The category name.
     */
    public $Name;

    /**
     * @var integer Category level. 0 for first-level category, up to 3, i.e., up to 4 levels of categories are allowed.
     */
    public $Level;

    /**
     * @var array The IDs of the immediate subcategories of the current category.
     */
    public $SubClassIdSet;

    /**
     * @var string The category name. This parameter is not recommended. Please use `Name` instead.
     */
    public $ClassName;

    /**
     * @param integer $ClassId The category ID.
     * @param integer $ParentId Parent category ID, which is -1 for a first-level category.
     * @param string $Name The category name.
     * @param integer $Level Category level. 0 for first-level category, up to 3, i.e., up to 4 levels of categories are allowed.
     * @param array $SubClassIdSet The IDs of the immediate subcategories of the current category.
     * @param string $ClassName The category name. This parameter is not recommended. Please use `Name` instead.
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
