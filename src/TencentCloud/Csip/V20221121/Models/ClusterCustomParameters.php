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
 * Cluster Custom Parameters
 *
 * @method string getName() Obtain Placeholder name
Input parameter limit: length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
 * @method void setName(string $Name) Set Placeholder name
Input parameter limit: length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
 * @method array getValues() Obtain One or more values (multiple values are concatenated with commas to replace the placeholder)
Input parameter limit: each element length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
 * @method void setValues(array $Values) Set One or more values (multiple values are concatenated with commas to replace the placeholder)
Input parameter limit: each element length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
 * @method boolean getExactMatch() Obtain Whether to match exactly.
Default value: `false`.
 * @method void setExactMatch(boolean $ExactMatch) Set Whether to match exactly.
Default value: `false`.
 */
class ClusterCustomParameters extends AbstractModel
{
    /**
     * @var string Placeholder name
Input parameter limit: length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
     */
    public $Name;

    /**
     * @var array One or more values (multiple values are concatenated with commas to replace the placeholder)
Input parameter limit: each element length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
     */
    public $Values;

    /**
     * @var boolean Whether to match exactly.
Default value: `false`.
     */
    public $ExactMatch;

    /**
     * @param string $Name Placeholder name
Input parameter limit: length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
     * @param array $Values One or more values (multiple values are concatenated with commas to replace the placeholder)
Input parameter limit: each element length 1-256
Applicable branch: Tencent Cloud branch (IsCloud=true)
     * @param boolean $ExactMatch Whether to match exactly.
Default value: `false`.
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
