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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kubernetes Taint
 *
 * @method string getKey() Obtain Key of the taint
 * @method void setKey(string $Key) Set Key of the taint
 * @method string getValue() Obtain Value of the taint
 * @method void setValue(string $Value) Set Value of the taint
 * @method string getEffect() Obtain Effect of the taint
 * @method void setEffect(string $Effect) Set Effect of the taint
 */
class Taint extends AbstractModel
{
    /**
     * @var string Key of the taint
     */
    public $Key;

    /**
     * @var string Value of the taint
     */
    public $Value;

    /**
     * @var string Effect of the taint
     */
    public $Effect;

    /**
     * @param string $Key Key of the taint
     * @param string $Value Value of the taint
     * @param string $Effect Effect of the taint
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

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }
    }
}
