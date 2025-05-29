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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task flow parameter information.
 *
 * @method string getId() Obtain Value ID.
 * @method void setId(string $Id) Set Value ID.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method integer getValueType() Obtain Value type, 0: unknown or empty; 1: string; 2: integer; 3: float; 4: boolean; 5: array (string array); 6: object_array (structure array); 7: object (structure).
 * @method void setValueType(integer $ValueType) Set Value type, 0: unknown or empty; 1: string; 2: integer; 3: float; 4: boolean; 5: array (string array); 6: object_array (structure array); 7: object (structure).
 * @method string getValueStr() Obtain String.
 * @method void setValueStr(string $ValueStr) Set String.
 * @method string getValueInt() Obtain Int (return as a string to avoid precision loss).
 * @method void setValueInt(string $ValueInt) Set Int (return as a string to avoid precision loss).
 * @method float getValueFloat() Obtain Float.
 * @method void setValueFloat(float $ValueFloat) Set Float.
 * @method boolean getValueBool() Obtain Bool.
 * @method void setValueBool(boolean $ValueBool) Set Bool.
 * @method array getValueStrArray() Obtain Array.
 * @method void setValueStrArray(array $ValueStrArray) Set Array.
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string Value ID.
     */
    public $Id;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var integer Value type, 0: unknown or empty; 1: string; 2: integer; 3: float; 4: boolean; 5: array (string array); 6: object_array (structure array); 7: object (structure).
     */
    public $ValueType;

    /**
     * @var string String.
     */
    public $ValueStr;

    /**
     * @var string Int (return as a string to avoid precision loss).
     */
    public $ValueInt;

    /**
     * @var float Float.
     */
    public $ValueFloat;

    /**
     * @var boolean Bool.
     */
    public $ValueBool;

    /**
     * @var array Array.
     */
    public $ValueStrArray;

    /**
     * @param string $Id Value ID.
     * @param string $Name Name.
     * @param integer $ValueType Value type, 0: unknown or empty; 1: string; 2: integer; 3: float; 4: boolean; 5: array (string array); 6: object_array (structure array); 7: object (structure).
     * @param string $ValueStr String.
     * @param string $ValueInt Int (return as a string to avoid precision loss).
     * @param float $ValueFloat Float.
     * @param boolean $ValueBool Bool.
     * @param array $ValueStrArray Array.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("ValueStr",$param) and $param["ValueStr"] !== null) {
            $this->ValueStr = $param["ValueStr"];
        }

        if (array_key_exists("ValueInt",$param) and $param["ValueInt"] !== null) {
            $this->ValueInt = $param["ValueInt"];
        }

        if (array_key_exists("ValueFloat",$param) and $param["ValueFloat"] !== null) {
            $this->ValueFloat = $param["ValueFloat"];
        }

        if (array_key_exists("ValueBool",$param) and $param["ValueBool"] !== null) {
            $this->ValueBool = $param["ValueBool"];
        }

        if (array_key_exists("ValueStrArray",$param) and $param["ValueStrArray"] !== null) {
            $this->ValueStrArray = $param["ValueStrArray"];
        }
    }
}
