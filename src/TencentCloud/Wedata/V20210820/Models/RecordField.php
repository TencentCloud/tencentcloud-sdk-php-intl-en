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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common Record Fields, agreed with the server to pass in legitimate key-value pairs
 *
 * @method string getName() Obtain Field Name, Extended Field Name
 * @method void setName(string $Name) Set Field Name, Extended Field Name
 * @method string getValue() Obtain Field Value, Extended Field Value
 * @method void setValue(string $Value) Set Field Value, Extended Field Value
 */
class RecordField extends AbstractModel
{
    /**
     * @var string Field Name, Extended Field Name
     */
    public $Name;

    /**
     * @var string Field Value, Extended Field Value
     */
    public $Value;

    /**
     * @param string $Name Field Name, Extended Field Name
     * @param string $Value Field Value, Extended Field Value
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
