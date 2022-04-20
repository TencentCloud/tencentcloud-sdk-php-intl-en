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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter constraint
 *
 * @method string getType() Obtain Constraint type, such as `enum` and `section`
 * @method void setType(string $Type) Set Constraint type, such as `enum` and `section`
 * @method string getEnum() Obtain List of valid values when constraint type is `enum`
 * @method void setEnum(string $Enum) Set List of valid values when constraint type is `enum`
 * @method ConstraintRange getRange() Obtain Range when constraint type is `section`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRange(ConstraintRange $Range) Set Range when constraint type is `section`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getString() Obtain List of valid values when constraint type is `string`
 * @method void setString(string $String) Set List of valid values when constraint type is `string`
 */
class ParamConstraint extends AbstractModel
{
    /**
     * @var string Constraint type, such as `enum` and `section`
     */
    public $Type;

    /**
     * @var string List of valid values when constraint type is `enum`
     */
    public $Enum;

    /**
     * @var ConstraintRange Range when constraint type is `section`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Range;

    /**
     * @var string List of valid values when constraint type is `string`
     */
    public $String;

    /**
     * @param string $Type Constraint type, such as `enum` and `section`
     * @param string $Enum List of valid values when constraint type is `enum`
     * @param ConstraintRange $Range Range when constraint type is `section`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $String List of valid values when constraint type is `string`
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
