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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed analysis of a slow query statement with abstract parameter values, which is returned by the `DescribeSlowQueryAnalysis` API
 *
 * @method string getDatabaseName() Obtain The name of the database queried by the slow query statement
 * @method void setDatabaseName(string $DatabaseName) Set The name of the database queried by the slow query statement
 * @method string getUserName() Obtain The name of the user who executes the slow query statement
 * @method void setUserName(string $UserName) Set The name of the user who executes the slow query statement
 * @method string getNormalQuery() Obtain The slow query statement whose parameter values are abstracted
 * @method void setNormalQuery(string $NormalQuery) Set The slow query statement whose parameter values are abstracted
 * @method string getClientAddr() Obtain The address of the client that executes the slow query statement
 * @method void setClientAddr(string $ClientAddr) Set The address of the client that executes the slow query statement
 * @method integer getCallNum() Obtain The number of executions of the slow query statement during the specified period of time
 * @method void setCallNum(integer $CallNum) Set The number of executions of the slow query statement during the specified period of time
 * @method float getCallPercent() Obtain The ratio (in decimal form) of the number of executions of the slow query statement to that of all slow query statements during the specified period of time
 * @method void setCallPercent(float $CallPercent) Set The ratio (in decimal form) of the number of executions of the slow query statement to that of all slow query statements during the specified period of time
 * @method float getCostTime() Obtain The total execution time of the slow query statement during the specified period of time
 * @method void setCostTime(float $CostTime) Set The total execution time of the slow query statement during the specified period of time
 * @method float getCostPercent() Obtain The ratio (in decimal form) of the total execution time of the slow query statement to that of all slow query statements during the specified period of time
 * @method void setCostPercent(float $CostPercent) Set The ratio (in decimal form) of the total execution time of the slow query statement to that of all slow query statements during the specified period of time
 * @method float getMinCostTime() Obtain The shortest execution time (in ms) of the slow query statement during the specified period of time
 * @method void setMinCostTime(float $MinCostTime) Set The shortest execution time (in ms) of the slow query statement during the specified period of time
 * @method float getMaxCostTime() Obtain The longest execution time (in ms) of the slow query statement during the specified period of time
 * @method void setMaxCostTime(float $MaxCostTime) Set The longest execution time (in ms) of the slow query statement during the specified period of time
 * @method float getAvgCostTime() Obtain The average execution time (in ms) of the slow query statement during the specified period of time
 * @method void setAvgCostTime(float $AvgCostTime) Set The average execution time (in ms) of the slow query statement during the specified period of time
 * @method string getFirstTime() Obtain The timestamp when the slow query statement starts to execute for the first time during the specified period of time
 * @method void setFirstTime(string $FirstTime) Set The timestamp when the slow query statement starts to execute for the first time during the specified period of time
 * @method string getLastTime() Obtain The timestamp when the slow query statement starts to execute for the last time during the specified period of time
 * @method void setLastTime(string $LastTime) Set The timestamp when the slow query statement starts to execute for the last time during the specified period of time
 */
class AnalysisItems extends AbstractModel
{
    /**
     * @var string The name of the database queried by the slow query statement
     */
    public $DatabaseName;

    /**
     * @var string The name of the user who executes the slow query statement
     */
    public $UserName;

    /**
     * @var string The slow query statement whose parameter values are abstracted
     */
    public $NormalQuery;

    /**
     * @var string The address of the client that executes the slow query statement
     */
    public $ClientAddr;

    /**
     * @var integer The number of executions of the slow query statement during the specified period of time
     */
    public $CallNum;

    /**
     * @var float The ratio (in decimal form) of the number of executions of the slow query statement to that of all slow query statements during the specified period of time
     */
    public $CallPercent;

    /**
     * @var float The total execution time of the slow query statement during the specified period of time
     */
    public $CostTime;

    /**
     * @var float The ratio (in decimal form) of the total execution time of the slow query statement to that of all slow query statements during the specified period of time
     */
    public $CostPercent;

    /**
     * @var float The shortest execution time (in ms) of the slow query statement during the specified period of time
     */
    public $MinCostTime;

    /**
     * @var float The longest execution time (in ms) of the slow query statement during the specified period of time
     */
    public $MaxCostTime;

    /**
     * @var float The average execution time (in ms) of the slow query statement during the specified period of time
     */
    public $AvgCostTime;

    /**
     * @var string The timestamp when the slow query statement starts to execute for the first time during the specified period of time
     */
    public $FirstTime;

    /**
     * @var string The timestamp when the slow query statement starts to execute for the last time during the specified period of time
     */
    public $LastTime;

    /**
     * @param string $DatabaseName The name of the database queried by the slow query statement
     * @param string $UserName The name of the user who executes the slow query statement
     * @param string $NormalQuery The slow query statement whose parameter values are abstracted
     * @param string $ClientAddr The address of the client that executes the slow query statement
     * @param integer $CallNum The number of executions of the slow query statement during the specified period of time
     * @param float $CallPercent The ratio (in decimal form) of the number of executions of the slow query statement to that of all slow query statements during the specified period of time
     * @param float $CostTime The total execution time of the slow query statement during the specified period of time
     * @param float $CostPercent The ratio (in decimal form) of the total execution time of the slow query statement to that of all slow query statements during the specified period of time
     * @param float $MinCostTime The shortest execution time (in ms) of the slow query statement during the specified period of time
     * @param float $MaxCostTime The longest execution time (in ms) of the slow query statement during the specified period of time
     * @param float $AvgCostTime The average execution time (in ms) of the slow query statement during the specified period of time
     * @param string $FirstTime The timestamp when the slow query statement starts to execute for the first time during the specified period of time
     * @param string $LastTime The timestamp when the slow query statement starts to execute for the last time during the specified period of time
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("CallNum",$param) and $param["CallNum"] !== null) {
            $this->CallNum = $param["CallNum"];
        }

        if (array_key_exists("CallPercent",$param) and $param["CallPercent"] !== null) {
            $this->CallPercent = $param["CallPercent"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("CostPercent",$param) and $param["CostPercent"] !== null) {
            $this->CostPercent = $param["CostPercent"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("AvgCostTime",$param) and $param["AvgCostTime"] !== null) {
            $this->AvgCostTime = $param["AvgCostTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }
    }
}
