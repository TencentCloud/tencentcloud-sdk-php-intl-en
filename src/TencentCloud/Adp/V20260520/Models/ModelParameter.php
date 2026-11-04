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
 * Model hyperparameter
 *
 * @method string getDefaultValue() Obtain <p>Default value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Default value.</p>
 * @method array getEnumValueList() Obtain <p>Available Option List</p>
 * @method void setEnumValueList(array $EnumValueList) Set <p>Available Option List</p>
 * @method float getMaxValue() Obtain <p>Maximum value (valid only for numerical type).</p>
 * @method void setMaxValue(float $MaxValue) Set <p>Maximum value (valid only for numerical type).</p>
 * @method float getMinValue() Obtain <p>Minimum value (valid only for numerical types).</p>
 * @method void setMinValue(float $MinValue) Set <p>Minimum value (valid only for numerical types).</p>
 * @method string getName() Obtain <p>Hyperparameter name</p>
 * @method void setName(string $Name) Set <p>Hyperparameter name</p>
 * @method integer getType() Obtain <p>Hyperparameter type. 1-floating-point number, 2-integer, 3-string</p>
 * @method void setType(integer $Type) Set <p>Hyperparameter type. 1-floating-point number, 2-integer, 3-string</p>
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var string <p>Default value.</p>
     */
    public $DefaultValue;

    /**
     * @var array <p>Available Option List</p>
     */
    public $EnumValueList;

    /**
     * @var float <p>Maximum value (valid only for numerical type).</p>
     */
    public $MaxValue;

    /**
     * @var float <p>Minimum value (valid only for numerical types).</p>
     */
    public $MinValue;

    /**
     * @var string <p>Hyperparameter name</p>
     */
    public $Name;

    /**
     * @var integer <p>Hyperparameter type. 1-floating-point number, 2-integer, 3-string</p>
     */
    public $Type;

    /**
     * @param string $DefaultValue <p>Default value.</p>
     * @param array $EnumValueList <p>Available Option List</p>
     * @param float $MaxValue <p>Maximum value (valid only for numerical type).</p>
     * @param float $MinValue <p>Minimum value (valid only for numerical types).</p>
     * @param string $Name <p>Hyperparameter name</p>
     * @param integer $Type <p>Hyperparameter type. 1-floating-point number, 2-integer, 3-string</p>
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
        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("EnumValueList",$param) and $param["EnumValueList"] !== null) {
            $this->EnumValueList = $param["EnumValueList"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
