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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter constraints.
 *
 * @method string getType() Obtain Constraint type, for example enumeration, interval.
 * @method void setType(string $Type) Set Constraint type, for example enumeration, interval.
 * @method string getEnum() Obtain Lists the available options when the constraint type is enum.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnum(string $Enum) Set Lists the available options when the constraint type is enum.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ConstraintRange getRange() Obtain Value range when the constraint type is section.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRange(ConstraintRange $Range) Set Value range when the constraint type is section.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getString() Obtain Valid values when the constraint type is string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setString(string $String) Set Valid values when the constraint type is string.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamConstraint extends AbstractModel
{
    /**
     * @var string Constraint type, for example enumeration, interval.
     */
    public $Type;

    /**
     * @var string Lists the available options when the constraint type is enum.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enum;

    /**
     * @var ConstraintRange Value range when the constraint type is section.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Range;

    /**
     * @var string Valid values when the constraint type is string.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $String;

    /**
     * @param string $Type Constraint type, for example enumeration, interval.
     * @param string $Enum Lists the available options when the constraint type is enum.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ConstraintRange $Range Value range when the constraint type is section.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $String Valid values when the constraint type is string.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new ConstraintRange();
            $this->Range->deserialize($param["Range"]);
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = $param["String"];
        }
    }
}
