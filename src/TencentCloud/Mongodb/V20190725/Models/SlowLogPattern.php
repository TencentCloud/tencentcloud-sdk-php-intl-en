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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log statistics of MongoDB database
 *
 * @method string getPattern() Obtain Slow log output format: database name.table name.command.
 * @method void setPattern(string $Pattern) Set Slow log output format: database name.table name.command.
 * @method string getQueryHash() Obtain queryHash value carried during slow log recording. It can be used to identify a query type.
 * @method void setQueryHash(string $QueryHash) Set queryHash value carried during slow log recording. It can be used to identify a query type.
 * @method integer getMaxTime() Obtain Maximum execution time, in milliseconds.
 * @method void setMaxTime(integer $MaxTime) Set Maximum execution time, in milliseconds.
 * @method integer getAverageTime() Obtain Average execution time, in milliseconds.
 * @method void setAverageTime(integer $AverageTime) Set Average execution time, in milliseconds.
 * @method integer getTotal() Obtain Number of slow logs.
 * @method void setTotal(integer $Total) Set Number of slow logs.
 */
class SlowLogPattern extends AbstractModel
{
    /**
     * @var string Slow log output format: database name.table name.command.
     */
    public $Pattern;

    /**
     * @var string queryHash value carried during slow log recording. It can be used to identify a query type.
     */
    public $QueryHash;

    /**
     * @var integer Maximum execution time, in milliseconds.
     */
    public $MaxTime;

    /**
     * @var integer Average execution time, in milliseconds.
     */
    public $AverageTime;

    /**
     * @var integer Number of slow logs.
     */
    public $Total;

    /**
     * @param string $Pattern Slow log output format: database name.table name.command.
     * @param string $QueryHash queryHash value carried during slow log recording. It can be used to identify a query type.
     * @param integer $MaxTime Maximum execution time, in milliseconds.
     * @param integer $AverageTime Average execution time, in milliseconds.
     * @param integer $Total Number of slow logs.
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

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
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
