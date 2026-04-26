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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis return value complex type
 *
 * @method string getTime() Obtain Date
 * @method void setTime(string $Time) Set Date
 * @method string getMoney() Obtain Amount
 * @method void setMoney(string $Money) Set Amount
 */
class AnalyseTimeDetail extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Time;

    /**
     * @var string Amount
     */
    public $Money;

    /**
     * @param string $Time Date
     * @param string $Money Amount
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Money",$param) and $param["Money"] !== null) {
            $this->Money = $param["Money"];
        }
    }
}
