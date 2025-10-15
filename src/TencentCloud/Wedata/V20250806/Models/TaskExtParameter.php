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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task extension information parameter.
 *
 * @method string getParamKey() Obtain Parameter name.


 * @method void setParamKey(string $ParamKey) Set Parameter name.


 * @method string getParamValue() Obtain Parameter value.


 * @method void setParamValue(string $ParamValue) Set Parameter value.
 */
class TaskExtParameter extends AbstractModel
{
    /**
     * @var string Parameter name.


     */
    public $ParamKey;

    /**
     * @var string Parameter value.


     */
    public $ParamValue;

    /**
     * @param string $ParamKey Parameter name.


     * @param string $ParamValue Parameter value.
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }
    }
}
