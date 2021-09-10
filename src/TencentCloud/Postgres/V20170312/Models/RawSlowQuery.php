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
 * The list of slow query details returned by the `DescribeSlowQueryList` API
 *
 * @method string getRawQuery() Obtain Slow query statement
 * @method void setRawQuery(string $RawQuery) Set Slow query statement
 * @method string getDatabaseName() Obtain The database queried by the slow query statement
 * @method void setDatabaseName(string $DatabaseName) Set The database queried by the slow query statement
 * @method float getDuration() Obtain The execution time of the slow query statement
 * @method void setDuration(float $Duration) Set The execution time of the slow query statement
 * @method string getClientAddr() Obtain The client that executes the slow query statement
 * @method void setClientAddr(string $ClientAddr) Set The client that executes the slow query statement
 * @method string getUserName() Obtain The name of the user who executes the slow query statement
 * @method void setUserName(string $UserName) Set The name of the user who executes the slow query statement
 * @method string getSessionStartTime() Obtain The time when the slow query statement starts to execute
 * @method void setSessionStartTime(string $SessionStartTime) Set The time when the slow query statement starts to execute
 */
class RawSlowQuery extends AbstractModel
{
    /**
     * @var string Slow query statement
     */
    public $RawQuery;

    /**
     * @var string The database queried by the slow query statement
     */
    public $DatabaseName;

    /**
     * @var float The execution time of the slow query statement
     */
    public $Duration;

    /**
     * @var string The client that executes the slow query statement
     */
    public $ClientAddr;

    /**
     * @var string The name of the user who executes the slow query statement
     */
    public $UserName;

    /**
     * @var string The time when the slow query statement starts to execute
     */
    public $SessionStartTime;

    /**
     * @param string $RawQuery Slow query statement
     * @param string $DatabaseName The database queried by the slow query statement
     * @param float $Duration The execution time of the slow query statement
     * @param string $ClientAddr The client that executes the slow query statement
     * @param string $UserName The name of the user who executes the slow query statement
     * @param string $SessionStartTime The time when the slow query statement starts to execute
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
        if (array_key_exists("RawQuery",$param) and $param["RawQuery"] !== null) {
            $this->RawQuery = $param["RawQuery"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SessionStartTime",$param) and $param["SessionStartTime"] !== null) {
            $this->SessionStartTime = $param["SessionStartTime"];
        }
    }
}
