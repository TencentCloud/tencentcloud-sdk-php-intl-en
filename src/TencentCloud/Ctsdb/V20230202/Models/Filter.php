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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter.
 *
 * @method string getName() Obtain Filter parameter.
 * @method void setName(string $Name) Set Filter parameter.
 * @method string getOp() Obtain Filter expression.
 * @method void setOp(string $Op) Set Filter expression.
 * @method array getValues() Obtain Value involved in filtering.
 * @method void setValues(array $Values) Set Value involved in filtering.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter parameter.
     */
    public $Name;

    /**
     * @var string Filter expression.
     */
    public $Op;

    /**
     * @var array Value involved in filtering.
     */
    public $Values;

    /**
     * @param string $Name Filter parameter.
     * @param string $Op Filter expression.
     * @param array $Values Value involved in filtering.
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
