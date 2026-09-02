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
 * Filter criteria. Multiple Values under the same Name are OR-related, while different Names are AND-related. Supported Name: Status (execution result, Values: SUCCESS/FAILED/USER_CANCELED/CHECKING)
 *
 * @method string getName() Obtain Filter criterion name. Parameter value: Status (Execution result. Values: SUCCESS/FAILED/USER_CANCELED/CHECKING)
 * @method void setName(string $Name) Set Filter criterion name. Parameter value: Status (Execution result. Values: SUCCESS/FAILED/USER_CANCELED/CHECKING)
 * @method array getValues() Obtain List of filter condition values
 * @method void setValues(array $Values) Set List of filter condition values
 * @method string getExactMatch() Obtain Exact match: 1 for exact match; fuzzy match by default
 * @method void setExactMatch(string $ExactMatch) Set Exact match: 1 for exact match; fuzzy match by default
 */
class Filters extends AbstractModel
{
    /**
     * @var string Filter criterion name. Parameter value: Status (Execution result. Values: SUCCESS/FAILED/USER_CANCELED/CHECKING)
     */
    public $Name;

    /**
     * @var array List of filter condition values
     */
    public $Values;

    /**
     * @var string Exact match: 1 for exact match; fuzzy match by default
     */
    public $ExactMatch;

    /**
     * @param string $Name Filter criterion name. Parameter value: Status (Execution result. Values: SUCCESS/FAILED/USER_CANCELED/CHECKING)
     * @param array $Values List of filter condition values
     * @param string $ExactMatch Exact match: 1 for exact match; fuzzy match by default
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
