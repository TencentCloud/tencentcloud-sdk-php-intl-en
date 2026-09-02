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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Standard blocking mode rule
 *
 * @method integer getTimeRange() Obtain <p>Time range of the brute force cracking event (unit: second)</p>
 * @method void setTimeRange(integer $TimeRange) Set <p>Time range of the brute force cracking event (unit: second)</p>
 * @method integer getLoginFailTimes() Obtain <p>Number of failed blasting incidents</p>
 * @method void setLoginFailTimes(integer $LoginFailTimes) Set <p>Number of failed blasting incidents</p>
 */
class BruteAttackRule extends AbstractModel
{
    /**
     * @var integer <p>Time range of the brute force cracking event (unit: second)</p>
     */
    public $TimeRange;

    /**
     * @var integer <p>Number of failed blasting incidents</p>
     */
    public $LoginFailTimes;

    /**
     * @param integer $TimeRange <p>Time range of the brute force cracking event (unit: second)</p>
     * @param integer $LoginFailTimes <p>Number of failed blasting incidents</p>
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("LoginFailTimes",$param) and $param["LoginFailTimes"] !== null) {
            $this->LoginFailTimes = $param["LoginFailTimes"];
        }
    }
}
