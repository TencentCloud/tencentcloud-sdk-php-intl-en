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
 * Information of one SlowQuery
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method integer getCalls() Obtain Number of calls
 * @method void setCalls(integer $Calls) Set Number of calls
 * @method array getCallsGrids() Obtain Granularity
 * @method void setCallsGrids(array $CallsGrids) Set Granularity
 * @method float getCostTime() Obtain Total time consumed
 * @method void setCostTime(float $CostTime) Set Total time consumed
 * @method integer getRows() Obtain Number of affected rows
 * @method void setRows(integer $Rows) Set Number of affected rows
 * @method float getMinCostTime() Obtain Minimum time consumed
 * @method void setMinCostTime(float $MinCostTime) Set Minimum time consumed
 * @method float getMaxCostTime() Obtain Maximum time consumed
 * @method void setMaxCostTime(float $MaxCostTime) Set Maximum time consumed
 * @method string getFirstTime() Obtain Time of the earliest slow SQL statement
 * @method void setFirstTime(string $FirstTime) Set Time of the earliest slow SQL statement
 * @method string getLastTime() Obtain Time of the latest slow SQL statement
 * @method void setLastTime(string $LastTime) Set Time of the latest slow SQL statement
 * @method integer getSharedReadBlks() Obtain Shared memory blocks for reads
 * @method void setSharedReadBlks(integer $SharedReadBlks) Set Shared memory blocks for reads
 * @method integer getSharedWriteBlks() Obtain Shared memory blocks for writes
 * @method void setSharedWriteBlks(integer $SharedWriteBlks) Set Shared memory blocks for writes
 * @method integer getReadCostTime() Obtain Total IO read time
 * @method void setReadCostTime(integer $ReadCostTime) Set Total IO read time
 * @method integer getWriteCostTime() Obtain Total IO write time
 * @method void setWriteCostTime(integer $WriteCostTime) Set Total IO write time
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getNormalQuery() Obtain Slow SQL statement after desensitization
 * @method void setNormalQuery(string $NormalQuery) Set Slow SQL statement after desensitization
 */
class NormalQueryItem extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var integer Number of calls
     */
    public $Calls;

    /**
     * @var array Granularity
     */
    public $CallsGrids;

    /**
     * @var float Total time consumed
     */
    public $CostTime;

    /**
     * @var integer Number of affected rows
     */
    public $Rows;

    /**
     * @var float Minimum time consumed
     */
    public $MinCostTime;

    /**
     * @var float Maximum time consumed
     */
    public $MaxCostTime;

    /**
     * @var string Time of the earliest slow SQL statement
     */
    public $FirstTime;

    /**
     * @var string Time of the latest slow SQL statement
     */
    public $LastTime;

    /**
     * @var integer Shared memory blocks for reads
     */
    public $SharedReadBlks;

    /**
     * @var integer Shared memory blocks for writes
     */
    public $SharedWriteBlks;

    /**
     * @var integer Total IO read time
     */
    public $ReadCostTime;

    /**
     * @var integer Total IO write time
     */
    public $WriteCostTime;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Slow SQL statement after desensitization
     */
    public $NormalQuery;

    /**
     * @param string $UserName Username
     * @param integer $Calls Number of calls
     * @param array $CallsGrids Granularity
     * @param float $CostTime Total time consumed
     * @param integer $Rows Number of affected rows
     * @param float $MinCostTime Minimum time consumed
     * @param float $MaxCostTime Maximum time consumed
     * @param string $FirstTime Time of the earliest slow SQL statement
     * @param string $LastTime Time of the latest slow SQL statement
     * @param integer $SharedReadBlks Shared memory blocks for reads
     * @param integer $SharedWriteBlks Shared memory blocks for writes
     * @param integer $ReadCostTime Total IO read time
     * @param integer $WriteCostTime Total IO write time
     * @param string $DatabaseName Database name
     * @param string $NormalQuery Slow SQL statement after desensitization
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Calls",$param) and $param["Calls"] !== null) {
            $this->Calls = $param["Calls"];
        }

        if (array_key_exists("CallsGrids",$param) and $param["CallsGrids"] !== null) {
            $this->CallsGrids = $param["CallsGrids"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("SharedReadBlks",$param) and $param["SharedReadBlks"] !== null) {
            $this->SharedReadBlks = $param["SharedReadBlks"];
        }

        if (array_key_exists("SharedWriteBlks",$param) and $param["SharedWriteBlks"] !== null) {
            $this->SharedWriteBlks = $param["SharedWriteBlks"];
        }

        if (array_key_exists("ReadCostTime",$param) and $param["ReadCostTime"] !== null) {
            $this->ReadCostTime = $param["ReadCostTime"];
        }

        if (array_key_exists("WriteCostTime",$param) and $param["WriteCostTime"] !== null) {
            $this->WriteCostTime = $param["WriteCostTime"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }
    }
}
