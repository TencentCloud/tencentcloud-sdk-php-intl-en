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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter.
 *
 * @method string getName() Obtain Filter field name.
 * @method void setName(string $Name) Set Filter field name.
 * @method array getValues() Obtain Filter field values.
 * @method void setValues(array $Values) Set Filter field values.
 * @method boolean getNegative() Obtain Whether to enable reverse query.
 * @method void setNegative(boolean $Negative) Set Whether to enable reverse query.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy matching.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy matching.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter field name.
     */
    public $Name;

    /**
     * @var array Filter field values.
     */
    public $Values;

    /**
     * @var boolean Whether to enable reverse query.
     */
    public $Negative;

    /**
     * @var boolean Whether to enable fuzzy matching.
     */
    public $Fuzzy;

    /**
     * @param string $Name Filter field name.
     * @param array $Values Filter field values.
     * @param boolean $Negative Whether to enable reverse query.
     * @param boolean $Fuzzy Whether to enable fuzzy matching.
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

        if (array_key_exists("Negative",$param) and $param["Negative"] !== null) {
            $this->Negative = $param["Negative"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
