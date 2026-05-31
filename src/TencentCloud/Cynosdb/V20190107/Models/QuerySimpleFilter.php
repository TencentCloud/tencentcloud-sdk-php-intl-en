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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Blurry query filter.
 *
 * @method array getNames() Obtain Field name
 * @method void setNames(array $Names) Set Field name
 * @method array getValues() Obtain Field value.
 * @method void setValues(array $Values) Set Field value.
 * @method boolean getExactMatch() Obtain Fuzzy matching. valid values: true (yes), false (no).
 * @method void setExactMatch(boolean $ExactMatch) Set Fuzzy matching. valid values: true (yes), false (no).
 */
class QuerySimpleFilter extends AbstractModel
{
    /**
     * @var array Field name
     */
    public $Names;

    /**
     * @var array Field value.
     */
    public $Values;

    /**
     * @var boolean Fuzzy matching. valid values: true (yes), false (no).
     */
    public $ExactMatch;

    /**
     * @param array $Names Field name
     * @param array $Values Field value.
     * @param boolean $ExactMatch Fuzzy matching. valid values: true (yes), false (no).
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
