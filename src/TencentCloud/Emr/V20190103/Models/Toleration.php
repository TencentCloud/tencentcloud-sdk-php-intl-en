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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tolerations
 *
 * @method string getKey() Obtain Key.
 * @method void setKey(string $Key) Set Key.
 * @method string getValue() Obtain Value.
 * @method void setValue(string $Value) Set Value.
 * @method string getOperator() Obtain Operator.
 * @method void setOperator(string $Operator) Set Operator.
 * @method string getEffect() Obtain Taint repel effect.
 * @method void setEffect(string $Effect) Set Taint repel effect.
 * @method integer getTolerationSeconds() Obtain Eviction wait time.
 * @method void setTolerationSeconds(integer $TolerationSeconds) Set Eviction wait time.
 */
class Toleration extends AbstractModel
{
    /**
     * @var string Key.
     */
    public $Key;

    /**
     * @var string Value.
     */
    public $Value;

    /**
     * @var string Operator.
     */
    public $Operator;

    /**
     * @var string Taint repel effect.
     */
    public $Effect;

    /**
     * @var integer Eviction wait time.
     */
    public $TolerationSeconds;

    /**
     * @param string $Key Key.
     * @param string $Value Value.
     * @param string $Operator Operator.
     * @param string $Effect Taint repel effect.
     * @param integer $TolerationSeconds Eviction wait time.
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("TolerationSeconds",$param) and $param["TolerationSeconds"] !== null) {
            $this->TolerationSeconds = $param["TolerationSeconds"];
        }
    }
}
