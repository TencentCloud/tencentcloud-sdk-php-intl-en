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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description key-value pair filter, which is used for conditional filtering queries. For example, filter by ID, name, and status.

If there are multiple Filters, the logical relationship between them is AND.
If multiple values exist in one filter, the logical relationship between these values is OR.

* A maximum of 5 filters are allowed.
* If a single filter has multiple values, the number of values cannot exceed 5.

 *
 * @method string getName() Obtain Name of filter key
 * @method void setName(string $Name) Set Name of filter key
 * @method array getValues() Obtain One or more filter values
 * @method void setValues(array $Values) Set One or more filter values
 * @method boolean getExactMatch() Obtain Fuzzy search
 * @method void setExactMatch(boolean $ExactMatch) Set Fuzzy search
 */
class Filter extends AbstractModel
{
    /**
     * @var string Name of filter key
     */
    public $Name;

    /**
     * @var array One or more filter values
     */
    public $Values;

    /**
     * @var boolean Fuzzy search
     */
    public $ExactMatch;

    /**
     * @param string $Name Name of filter key
     * @param array $Values One or more filter values
     * @param boolean $ExactMatch Fuzzy search
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

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
