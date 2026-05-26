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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * log filter criteria
 *
 * @method string getType() Obtain <p>Filter criterion name.</p><p>For example: sql - SQL command details</p><p>host – client IP;<br>user – database account.</p>
 * @method void setType(string $Type) Set <p>Filter criterion name.</p><p>For example: sql - SQL command details</p><p>host – client IP;<br>user – database account.</p>
 * @method string getCompare() Obtain <p>Filter condition match type. Supported values:<br>INC – Including (multiple values are in a || relationship with each other);<br>EXC – Excluding (multiple values are in a && relationship with each other);<br>EQS – Equal (multiple values are in a || relationship with each other);<br>NEQ – Not equal (multiple values are in a && relationship with each other);<br>RG – Range.</p>
 * @method void setCompare(string $Compare) Set <p>Filter condition match type. Supported values:<br>INC – Including (multiple values are in a || relationship with each other);<br>EXC – Excluding (multiple values are in a && relationship with each other);<br>EQS – Equal (multiple values are in a || relationship with each other);<br>NEQ – Not equal (multiple values are in a && relationship with each other);<br>RG – Range.</p>
 * @method array getValue() Obtain <p>Matching value of the filter condition. When Compare=RG, for example: ["1-100","200-300"]</p>
 * @method void setValue(array $Value) Set <p>Matching value of the filter condition. When Compare=RG, for example: ["1-100","200-300"]</p>
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string <p>Filter criterion name.</p><p>For example: sql - SQL command details</p><p>host – client IP;<br>user – database account.</p>
     */
    public $Type;

    /**
     * @var string <p>Filter condition match type. Supported values:<br>INC – Including (multiple values are in a || relationship with each other);<br>EXC – Excluding (multiple values are in a && relationship with each other);<br>EQS – Equal (multiple values are in a || relationship with each other);<br>NEQ – Not equal (multiple values are in a && relationship with each other);<br>RG – Range.</p>
     */
    public $Compare;

    /**
     * @var array <p>Matching value of the filter condition. When Compare=RG, for example: ["1-100","200-300"]</p>
     */
    public $Value;

    /**
     * @param string $Type <p>Filter criterion name.</p><p>For example: sql - SQL command details</p><p>host – client IP;<br>user – database account.</p>
     * @param string $Compare <p>Filter condition match type. Supported values:<br>INC – Including (multiple values are in a || relationship with each other);<br>EXC – Excluding (multiple values are in a && relationship with each other);<br>EQS – Equal (multiple values are in a || relationship with each other);<br>NEQ – Not equal (multiple values are in a && relationship with each other);<br>RG – Range.</p>
     * @param array $Value <p>Matching value of the filter condition. When Compare=RG, for example: ["1-100","200-300"]</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
