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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM detection content matching.
 *
 * @method string getKey() Obtain  Information Type
 * @method void setKey(string $Key) Set  Information Type
 * @method string getOp() Obtain  Operator. Default value: Contains.

 * @method void setOp(string $Op) Set  Operator. Default value: Contains.

 * @method array getValue() Obtain Information Type
 * @method void setValue(array $Value) Set Information Type
 * @method array getLevels() Obtain Information type.
 * @method void setLevels(array $Levels) Set Information type.
 * @method string getName() Obtain Toolcall tool parameter name. Supports multi-level paths (such as apiData.operate_op). Only used for the tool_args information type.
 * @method void setName(string $Name) Set Toolcall tool parameter name. Supports multi-level paths (such as apiData.operate_op). Only used for the tool_args information type.
 */
class RuleItem extends AbstractModel
{
    /**
     * @var string  Information Type
     */
    public $Key;

    /**
     * @var string  Operator. Default value: Contains.

     */
    public $Op;

    /**
     * @var array Information Type
     */
    public $Value;

    /**
     * @var array Information type.
     */
    public $Levels;

    /**
     * @var string Toolcall tool parameter name. Supports multi-level paths (such as apiData.operate_op). Only used for the tool_args information type.
     */
    public $Name;

    /**
     * @param string $Key  Information Type
     * @param string $Op  Operator. Default value: Contains.

     * @param array $Value Information Type
     * @param array $Levels Information type.
     * @param string $Name Toolcall tool parameter name. Supports multi-level paths (such as apiData.operate_op). Only used for the tool_args information type.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = [];
            foreach ($param["Levels"] as $key => $value){
                $obj = new ValueLevel();
                $obj->deserialize($value);
                array_push($this->Levels, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
