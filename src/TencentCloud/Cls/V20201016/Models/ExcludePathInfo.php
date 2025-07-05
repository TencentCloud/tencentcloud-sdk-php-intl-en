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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Blocklist path information
 *
 * @method string getType() Obtain Type. Valid values: `File`, `Path`
 * @method void setType(string $Type) Set Type. Valid values: `File`, `Path`
 * @method string getValue() Obtain Specific content corresponding to `Type`
 * @method void setValue(string $Value) Set Specific content corresponding to `Type`
 */
class ExcludePathInfo extends AbstractModel
{
    /**
     * @var string Type. Valid values: `File`, `Path`
     */
    public $Type;

    /**
     * @var string Specific content corresponding to `Type`
     */
    public $Value;

    /**
     * @param string $Type Type. Valid values: `File`, `Path`
     * @param string $Value Specific content corresponding to `Type`
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
