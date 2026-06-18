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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter conditions. Multiple Values under the same Name are in an OR relationship, and different Names are in an AND relationship.
 *
 * @method string getName() Obtain Filter condition name.
 * @method void setName(string $Name) Set Filter condition name.
 * @method array getValues() Obtain Filter condition value list
 * @method void setValues(array $Values) Set Filter condition value list
 * @method string getExactMatch() Obtain Exact match: 1 - exact match; default - fuzzy match
 * @method void setExactMatch(string $ExactMatch) Set Exact match: 1 - exact match; default - fuzzy match
 */
class Filters extends AbstractModel
{
    /**
     * @var string Filter condition name.
     */
    public $Name;

    /**
     * @var array Filter condition value list
     */
    public $Values;

    /**
     * @var string Exact match: 1 - exact match; default - fuzzy match
     */
    public $ExactMatch;

    /**
     * @param string $Name Filter condition name.
     * @param array $Values Filter condition value list
     * @param string $ExactMatch Exact match: 1 - exact match; default - fuzzy match
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
