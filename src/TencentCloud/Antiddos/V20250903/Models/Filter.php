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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describe key-value pair filter, used for condition filtering query, such as filtering ID, name, status. When multiple Filters exist, the relationship between Filters is logical AND. When the same Filter has multiple Values, the relationship between Values under the same Filter is logical OR.
 *
 * @method string getName() Obtain <p>Fields to be filtered. Check corresponding API for specific available values.</p>
 * @method void setName(string $Name) Set <p>Fields to be filtered. Check corresponding API for specific available values.</p>
 * @method array getValues() Obtain <p>Field's filter value.</p>
 * @method void setValues(array $Values) Set <p>Field's filter value.</p>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>Fields to be filtered. Check corresponding API for specific available values.</p>
     */
    public $Name;

    /**
     * @var array <p>Field's filter value.</p>
     */
    public $Values;

    /**
     * @param string $Name <p>Fields to be filtered. Check corresponding API for specific available values.</p>
     * @param array $Values <p>Field's filter value.</p>
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
