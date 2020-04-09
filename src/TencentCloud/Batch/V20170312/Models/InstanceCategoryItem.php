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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instance categories
 *
 * @method string getInstanceCategory() Obtain Instance type name
 * @method void setInstanceCategory(string $InstanceCategory) Set Instance type name
 * @method array getInstanceFamilySet() Obtain List of instance families
 * @method void setInstanceFamilySet(array $InstanceFamilySet) Set List of instance families
 */
class InstanceCategoryItem extends AbstractModel
{
    /**
     * @var string Instance type name
     */
    public $InstanceCategory;

    /**
     * @var array List of instance families
     */
    public $InstanceFamilySet;

    /**
     * @param string $InstanceCategory Instance type name
     * @param array $InstanceFamilySet List of instance families
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
        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("InstanceFamilySet",$param) and $param["InstanceFamilySet"] !== null) {
            $this->InstanceFamilySet = $param["InstanceFamilySet"];
        }
    }
}
