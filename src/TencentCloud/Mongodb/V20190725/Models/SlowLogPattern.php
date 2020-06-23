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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log statistics of MongoDB database
 *
 * @method string getPattern() Obtain Slow log pattern
 * @method void setPattern(string $Pattern) Set Slow log pattern
 * @method integer getMaxTime() Obtain Maximum execution time
 * @method void setMaxTime(integer $MaxTime) Set Maximum execution time
 * @method integer getAverageTime() Obtain Average execution time
 * @method void setAverageTime(integer $AverageTime) Set Average execution time
 * @method integer getTotal() Obtain Number of slow logs in this pattern
 * @method void setTotal(integer $Total) Set Number of slow logs in this pattern
 */
class SlowLogPattern extends AbstractModel
{
    /**
     * @var string Slow log pattern
     */
    public $Pattern;

    /**
     * @var integer Maximum execution time
     */
    public $MaxTime;

    /**
     * @var integer Average execution time
     */
    public $AverageTime;

    /**
     * @var integer Number of slow logs in this pattern
     */
    public $Total;

    /**
     * @param string $Pattern Slow log pattern
     * @param integer $MaxTime Maximum execution time
     * @param integer $AverageTime Average execution time
     * @param integer $Total Number of slow logs in this pattern
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
        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("MaxTime",$param) and $param["MaxTime"] !== null) {
            $this->MaxTime = $param["MaxTime"];
        }

        if (array_key_exists("AverageTime",$param) and $param["AverageTime"] !== null) {
            $this->AverageTime = $param["AverageTime"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
