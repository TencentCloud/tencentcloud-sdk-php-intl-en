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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-value pair filters for conditional filtering queries, such as filtering ID, name, and status.

If more than one filter exists, the logical relationship between these filters is `AND`.
If multiple values exist in one filter, the logical relationship between these values is `OR`.

* There can be up to 5 filters
* There can be up to 5 `Values` in the same `Filter`.

 *
 * @method string getName() Obtain Filter key name.
 * @method void setName(string $Name) Set Filter key name.
 * @method array getValues() Obtain One or more filter values.
 * @method void setValues(array $Values) Set One or more filter values.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter key name.
     */
    public $Name;

    /**
     * @var array One or more filter values.
     */
    public $Values;

    /**
     * @param string $Name Filter key name.
     * @param array $Values One or more filter values.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
