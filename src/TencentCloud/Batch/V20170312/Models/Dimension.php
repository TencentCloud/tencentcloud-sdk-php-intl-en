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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Job resource monitoring query dimension
 *
 * @method string getName() Obtain Query the dimension name of a metric
 * @method void setName(string $Name) Set Query the dimension name of a metric
 * @method string getValue() Obtain Query the dimension value of a metric
 * @method void setValue(string $Value) Set Query the dimension value of a metric
 */
class Dimension extends AbstractModel
{
    /**
     * @var string Query the dimension name of a metric
     */
    public $Name;

    /**
     * @var string Query the dimension value of a metric
     */
    public $Value;

    /**
     * @param string $Name Query the dimension name of a metric
     * @param string $Value Query the dimension value of a metric
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
