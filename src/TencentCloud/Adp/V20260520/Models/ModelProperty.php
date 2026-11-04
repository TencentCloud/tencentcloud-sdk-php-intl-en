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
 * <p>Model attributes (supported workflow types/AI call types/want to close model parameters/whether deep thinking is supported/whether limited-time free/whether default model)</p>
 *
 * @method string getName() Obtain <p>Property name</p>
 * @method void setName(string $Name) Set <p>Property name</p>
 * @method string getValue() Obtain <p>Attribute value.</p>
 * @method void setValue(string $Value) Set <p>Attribute value.</p>
 */
class ModelProperty extends AbstractModel
{
    /**
     * @var string <p>Property name</p>
     */
    public $Name;

    /**
     * @var string <p>Attribute value.</p>
     */
    public $Value;

    /**
     * @param string $Name <p>Property name</p>
     * @param string $Value <p>Attribute value.</p>
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
