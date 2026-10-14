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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamic concurrency configuration
 *
 * @method string getNodeSpec() Obtain GPU model name
 * @method void setNodeSpec(string $NodeSpec) Set GPU model name
 * @method integer getNum() Obtain Number of concurrencies
 * @method void setNum(integer $Num) Set Number of concurrencies
 */
class MixNodeConfig extends AbstractModel
{
    /**
     * @var string GPU model name
     */
    public $NodeSpec;

    /**
     * @var integer Number of concurrencies
     */
    public $Num;

    /**
     * @param string $NodeSpec GPU model name
     * @param integer $Num Number of concurrencies
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
        if (array_key_exists("NodeSpec",$param) and $param["NodeSpec"] !== null) {
            $this->NodeSpec = $param["NodeSpec"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
