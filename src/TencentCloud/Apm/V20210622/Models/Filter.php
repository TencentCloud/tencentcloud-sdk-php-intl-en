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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries filter parameters.
 *
 * @method string getType() Obtain <p>Filter method (=, !=, in)</p>
 * @method void setType(string $Type) Set <p>Filter method (=, !=, in)</p>
 * @method string getKey() Obtain <p>Filter dimension name</p><p>For details, see the actual interface field description</p>
 * @method void setKey(string $Key) Set <p>Filter dimension name</p><p>For details, see the actual interface field description</p>
 * @method string getValue() Obtain <p>Filter value. Use comma-separated multiple values for in filtering method.</p>
 * @method void setValue(string $Value) Set <p>Filter value. Use comma-separated multiple values for in filtering method.</p>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>Filter method (=, !=, in)</p>
     */
    public $Type;

    /**
     * @var string <p>Filter dimension name</p><p>For details, see the actual interface field description</p>
     */
    public $Key;

    /**
     * @var string <p>Filter value. Use comma-separated multiple values for in filtering method.</p>
     */
    public $Value;

    /**
     * @param string $Type <p>Filter method (=, !=, in)</p>
     * @param string $Key <p>Filter dimension name</p><p>For details, see the actual interface field description</p>
     * @param string $Value <p>Filter value. Use comma-separated multiple values for in filtering method.</p>
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
