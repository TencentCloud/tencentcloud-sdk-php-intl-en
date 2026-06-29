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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter criteria
 *
 * @method string getName() Obtain Filter field name.
 * @method void setName(string $Name) Set Filter field name.
 * @method string getOp() Obtain Filter operator. Values: EXACT (exact match), FUZZY (fuzzy matching), NOT (exclusion).
 * @method void setOp(string $Op) Set Filter operator. Values: EXACT (exact match), FUZZY (fuzzy matching), NOT (exclusion).
 * @method array getValues() Obtain Filter value list. Supports up to 10.
 * @method void setValues(array $Values) Set Filter value list. Supports up to 10.
 */
class RequestFilter extends AbstractModel
{
    /**
     * @var string Filter field name.
     */
    public $Name;

    /**
     * @var string Filter operator. Values: EXACT (exact match), FUZZY (fuzzy matching), NOT (exclusion).
     */
    public $Op;

    /**
     * @var array Filter value list. Supports up to 10.
     */
    public $Values;

    /**
     * @param string $Name Filter field name.
     * @param string $Op Filter operator. Values: EXACT (exact match), FUZZY (fuzzy matching), NOT (exclusion).
     * @param array $Values Filter value list. Supports up to 10.
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

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
