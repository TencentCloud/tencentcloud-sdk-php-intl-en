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
 * Effective condition of the LLM rule.
 *
 * @method string getKey() Obtain Key.
 * @method void setKey(string $Key) Set Key.
 * @method string getOp() Obtain Operator.
 * @method void setOp(string $Op) Set Operator.
 * @method array getValue() Obtain Value.
 * @method void setValue(array $Value) Set Value.
 * @method string getName() Obtain Use with Header Parameter Value
 * @method void setName(string $Name) Set Use with Header Parameter Value
 * @method array getAreas() Obtain Region selection
 * @method void setAreas(array $Areas) Set Region selection
 */
class LLMOptionsItem extends AbstractModel
{
    /**
     * @var string Key.
     */
    public $Key;

    /**
     * @var string Operator.
     */
    public $Op;

    /**
     * @var array Value.
     */
    public $Value;

    /**
     * @var string Use with Header Parameter Value
     */
    public $Name;

    /**
     * @var array Region selection
     */
    public $Areas;

    /**
     * @param string $Key Key.
     * @param string $Op Operator.
     * @param array $Value Value.
     * @param string $Name Use with Header Parameter Value
     * @param array $Areas Region selection
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new Area();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }
    }
}
