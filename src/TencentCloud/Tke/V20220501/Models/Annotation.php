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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Annotations in k8s, generally existing as an array
 *
 * @method string getName() Obtain Name in the map list
 * @method void setName(string $Name) Set Name in the map list
 * @method string getValue() Obtain Value in the map list
 * @method void setValue(string $Value) Set Value in the map list
 */
class Annotation extends AbstractModel
{
    /**
     * @var string Name in the map list
     */
    public $Name;

    /**
     * @var string Value in the map list
     */
    public $Value;

    /**
     * @param string $Name Name in the map list
     * @param string $Value Value in the map list
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
