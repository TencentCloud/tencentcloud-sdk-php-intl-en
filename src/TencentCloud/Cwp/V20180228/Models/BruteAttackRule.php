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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Standard blocking mode rule
 *
 * @method integer getTimeRange() Obtain Timeframe of the brute force event (unit: second)
 * @method void setTimeRange(integer $TimeRange) Set Timeframe of the brute force event (unit: second)
 * @method integer getLoginFailTimes() Obtain Number of failed attempts during the brute force event
 * @method void setLoginFailTimes(integer $LoginFailTimes) Set Number of failed attempts during the brute force event
 */
class BruteAttackRule extends AbstractModel
{
    /**
     * @var integer Timeframe of the brute force event (unit: second)
     */
    public $TimeRange;

    /**
     * @var integer Number of failed attempts during the brute force event
     */
    public $LoginFailTimes;

    /**
     * @param integer $TimeRange Timeframe of the brute force event (unit: second)
     * @param integer $LoginFailTimes Number of failed attempts during the brute force event
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
