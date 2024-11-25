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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Numerical structure
 *
 * @method integer getType() Obtain Numerical type, 0: int, 1: string
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setType(integer $Type) Set Numerical type, 0: int, 1: string
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getIntVal() Obtain Integer
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setIntVal(integer $IntVal) Set Integer
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getStrVal() Obtain String
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setStrVal(string $StrVal) Set String
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class IntOrString extends AbstractModel
{
    /**
     * @var integer Numerical type, 0: int, 1: string
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var integer Integer
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $IntVal;

    /**
     * @var string String
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $StrVal;

    /**
     * @param integer $Type Numerical type, 0: int, 1: string
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $IntVal Integer
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $StrVal String
Note: This field may return "null", indicating that no valid value can be obtained.
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

        if (array_key_exists("IntVal",$param) and $param["IntVal"] !== null) {
            $this->IntVal = $param["IntVal"];
        }

        if (array_key_exists("StrVal",$param) and $param["StrVal"] !== null) {
            $this->StrVal = $param["StrVal"];
        }
    }
}
