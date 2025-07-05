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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The filter parameter to query origin groups
 *
 * @method string getName() Obtain Field to be filtered. Supported field: name
 * @method void setName(string $Name) Set Field to be filtered. Supported field: name
 * @method string getValue() Obtain Value of the field
 * @method void setValue(string $Value) Set Value of the field
 */
class OriginFilter extends AbstractModel
{
    /**
     * @var string Field to be filtered. Supported field: name
     */
    public $Name;

    /**
     * @var string Value of the field
     */
    public $Value;

    /**
     * @param string $Name Field to be filtered. Supported field: name
     * @param string $Value Value of the field
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
