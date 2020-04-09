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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Used for conditional filtering queries.
 *
 * @method string getName() Obtain Fields to be filtered.
 * @method void setName(string $Name) Set Fields to be filtered.
 * @method array getValues() Obtain Filter values of the field.
 * @method void setValues(array $Values) Set Filter values of the field.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Fields to be filtered.
     */
    public $Name;

    /**
     * @var array Filter values of the field.
     */
    public $Values;

    /**
     * @param string $Name Fields to be filtered.
     * @param array $Values Filter values of the field.
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
