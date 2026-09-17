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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom log fields in a real-time log delivery task are customizable and support value expression configurations. For usage details, see [Custom Log Field Expression]().
 *
 * @method string getName() Obtain <p>Custom log field name. Enter 1-100 characters. Allowed characters are letters, digits, and _. It must start with a letter. This name must be unique.</p>
 * @method void setName(string $Name) Set <p>Custom log field name. Enter 1-100 characters. Allowed characters are letters, digits, and _. It must start with a letter. This name must be unique.</p>
 * @method string getExpression() Obtain <p>The value expression of a custom log field. The maximum length of the expression is 4KB. For syntax explanation, see <a href="">Custom Log Field Expression</a>.</p>
 * @method void setExpression(string $Expression) Set <p>The value expression of a custom log field. The maximum length of the expression is 4KB. For syntax explanation, see <a href="">Custom Log Field Expression</a>.</p>
 * @method boolean getEnabled() Obtain <p>Whether to deliver this field. If left blank, it means not to deliver this field.</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to deliver this field. If left blank, it means not to deliver this field.</p>
 */
class CustomExpressionField extends AbstractModel
{
    /**
     * @var string <p>Custom log field name. Enter 1-100 characters. Allowed characters are letters, digits, and _. It must start with a letter. This name must be unique.</p>
     */
    public $Name;

    /**
     * @var string <p>The value expression of a custom log field. The maximum length of the expression is 4KB. For syntax explanation, see <a href="">Custom Log Field Expression</a>.</p>
     */
    public $Expression;

    /**
     * @var boolean <p>Whether to deliver this field. If left blank, it means not to deliver this field.</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>Custom log field name. Enter 1-100 characters. Allowed characters are letters, digits, and _. It must start with a letter. This name must be unique.</p>
     * @param string $Expression <p>The value expression of a custom log field. The maximum length of the expression is 4KB. For syntax explanation, see <a href="">Custom Log Field Expression</a>.</p>
     * @param boolean $Enabled <p>Whether to deliver this field. If left blank, it means not to deliver this field.</p>
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

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
