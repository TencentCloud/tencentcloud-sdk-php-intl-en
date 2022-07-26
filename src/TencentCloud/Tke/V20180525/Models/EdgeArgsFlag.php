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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge cluster parameters
 *
 * @method string getName() Obtain Parameter name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Parameter name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getType() Obtain Parameter type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Parameter type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUsage() Obtain Parameter description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUsage(string $Usage) Set Parameter description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDefault() Obtain Default value of the parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDefault(string $Default) Set Default value of the parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getConstraint() Obtain Valid value or range. Options: `[]` (it indicates a range, for example, “[1, 5]” indicates the parameter must be equal or larger than 1, and be equal or smaller than 5), and `()` (it indicates a valid value, for example, “('aa', 'bb')” indicates the parameter must be “aa” or “bb”. If it is left empty, the verification can be skipped.)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setConstraint(string $Constraint) Set Valid value or range. Options: `[]` (it indicates a range, for example, “[1, 5]” indicates the parameter must be equal or larger than 1, and be equal or smaller than 5), and `()` (it indicates a valid value, for example, “('aa', 'bb')” indicates the parameter must be “aa” or “bb”. If it is left empty, the verification can be skipped.)
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EdgeArgsFlag extends AbstractModel
{
    /**
     * @var string Parameter name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Parameter type
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Parameter description
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Usage;

    /**
     * @var string Default value of the parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Default;

    /**
     * @var string Valid value or range. Options: `[]` (it indicates a range, for example, “[1, 5]” indicates the parameter must be equal or larger than 1, and be equal or smaller than 5), and `()` (it indicates a valid value, for example, “('aa', 'bb')” indicates the parameter must be “aa” or “bb”. If it is left empty, the verification can be skipped.)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Constraint;

    /**
     * @param string $Name Parameter name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Type Parameter type
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Usage Parameter description
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Default Default value of the parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Constraint Valid value or range. Options: `[]` (it indicates a range, for example, “[1, 5]” indicates the parameter must be equal or larger than 1, and be equal or smaller than 5), and `()` (it indicates a valid value, for example, “('aa', 'bb')” indicates the parameter must be “aa” or “bb”. If it is left empty, the verification can be skipped.)
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Constraint",$param) and $param["Constraint"] !== null) {
            $this->Constraint = $param["Constraint"];
        }
    }
}
