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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kubernetes taint
 *
 * @method string getKey() Obtain Key of the taint to which the toleration is applied
 * @method void setKey(string $Key) Set Key of the taint to which the toleration is applied
 * @method string getOperator() Obtain The key-value relationship
 * @method void setOperator(string $Operator) Set The key-value relationship
 * @method string getEffect() Obtain The taint effect to be matched
 * @method void setEffect(string $Effect) Set The taint effect to be matched
 */
class Toleration extends AbstractModel
{
    /**
     * @var string Key of the taint to which the toleration is applied
     */
    public $Key;

    /**
     * @var string The key-value relationship
     */
    public $Operator;

    /**
     * @var string The taint effect to be matched
     */
    public $Effect;

    /**
     * @param string $Key Key of the taint to which the toleration is applied
     * @param string $Operator The key-value relationship
     * @param string $Effect The taint effect to be matched
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }
    }
}
