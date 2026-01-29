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
 * Filters
 *
 * @method string getName() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getValues() Obtain Instance ID content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Instance ID content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExactMatch() Obtain Fuzzy matching.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExactMatch(string $ExactMatch) Set Fuzzy matching.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Filters extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var array Instance ID content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @var string Fuzzy matching.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExactMatch;

    /**
     * @param string $Name Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Values Instance ID content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExactMatch Fuzzy matching.
Note: This field may return null, indicating that no valid values can be obtained.
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
