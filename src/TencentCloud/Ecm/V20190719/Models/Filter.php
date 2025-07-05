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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-Value pair filter for conditional filtering queries.
 *
 * @method array getValues() Obtain One or more filter values.
 * @method void setValues(array $Values) Set One or more filter values.
 * @method string getName() Obtain Filter name.
 * @method void setName(string $Name) Set Filter name.
 */
class Filter extends AbstractModel
{
    /**
     * @var array One or more filter values.
     */
    public $Values;

    /**
     * @var string Filter name.
     */
    public $Name;

    /**
     * @param array $Values One or more filter values.
     * @param string $Name Filter name.
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
