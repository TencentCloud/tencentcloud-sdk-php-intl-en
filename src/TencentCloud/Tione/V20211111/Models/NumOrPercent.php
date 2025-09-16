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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Percentage or quantity.
 *
 * @method string getType() Obtain Valid values: Num and Percent, which indicate quantity and percentage respectively. The default value is Num.
 * @method void setType(string $Type) Set Valid values: Num and Percent, which indicate quantity and percentage respectively. The default value is Num.
 * @method integer getValue() Obtain Numeric value.
 * @method void setValue(integer $Value) Set Numeric value.
 */
class NumOrPercent extends AbstractModel
{
    /**
     * @var string Valid values: Num and Percent, which indicate quantity and percentage respectively. The default value is Num.
     */
    public $Type;

    /**
     * @var integer Numeric value.
     */
    public $Value;

    /**
     * @param string $Type Valid values: Num and Percent, which indicate quantity and percentage respectively. The default value is Num.
     * @param integer $Value Numeric value.
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
