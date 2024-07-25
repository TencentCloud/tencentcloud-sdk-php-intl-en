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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description key-value pair filter, which is used for conditional filtering queries.

- If there are multiple Filters, the logical relationship between them is AND.

- If there are multiple Values in the same Filter, the logical relationship between the Values under the same Filter is OR.
 *
 * @method string getName() Obtain Filtering fields
 * @method void setName(string $Name) Set Filtering fields
 * @method array getValues() Obtain Filtering field values
 * @method void setValues(array $Values) Set Filtering field values
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filtering fields
     */
    public $Name;

    /**
     * @var array Filtering field values
     */
    public $Values;

    /**
     * @param string $Name Filtering fields
     * @param array $Values Filtering field values
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
