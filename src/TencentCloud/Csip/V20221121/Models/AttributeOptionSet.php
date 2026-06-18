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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common dropdown box list
 *
 * @method string getText() Obtain cvm instance type
 * @method void setText(string $Text) Set cvm instance type
 * @method string getValue() Obtain CVM instance name.
 * @method void setValue(string $Value) Set CVM instance name.
 */
class AttributeOptionSet extends AbstractModel
{
    /**
     * @var string cvm instance type
     */
    public $Text;

    /**
     * @var string CVM instance name.
     */
    public $Value;

    /**
     * @param string $Text cvm instance type
     * @param string $Value CVM instance name.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
