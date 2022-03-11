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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance family type configuration
 *
 * @method string getInstanceFamilyType() Obtain Instance model family type ID
 * @method void setInstanceFamilyType(string $InstanceFamilyType) Set Instance model family type ID
 * @method string getInstanceFamilyTypeName() Obtain Instance model family type name
 * @method void setInstanceFamilyTypeName(string $InstanceFamilyTypeName) Set Instance model family type name
 */
class InstanceFamilyTypeConfig extends AbstractModel
{
    /**
     * @var string Instance model family type ID
     */
    public $InstanceFamilyType;

    /**
     * @var string Instance model family type name
     */
    public $InstanceFamilyTypeName;

    /**
     * @param string $InstanceFamilyType Instance model family type ID
     * @param string $InstanceFamilyTypeName Instance model family type name
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
        if (array_key_exists("InstanceFamilyType",$param) and $param["InstanceFamilyType"] !== null) {
            $this->InstanceFamilyType = $param["InstanceFamilyType"];
        }

        if (array_key_exists("InstanceFamilyTypeName",$param) and $param["InstanceFamilyTypeName"] !== null) {
            $this->InstanceFamilyTypeName = $param["InstanceFamilyTypeName"];
        }
    }
}
