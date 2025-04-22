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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow query item information
 *
 * @method integer getCallTimes() Obtain Number of calls.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCallTimes(integer $CallTimes) Set Number of calls.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSharedReadBlocks() Obtain Number of read-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharedReadBlocks(integer $SharedReadBlocks) Set Number of read-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSharedWriteBlocks() Obtain Number of write-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharedWriteBlocks(integer $SharedWriteBlocks) Set Number of write-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNormalQuery() Obtain Statement after masking.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNormalQuery(string $NormalQuery) Set Statement after masking.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaxElapsedQuery() Obtain The statement with the longest execution time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxElapsedQuery(string $MaxElapsedQuery) Set The statement with the longest execution time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCostTime() Obtain Total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCostTime(float $CostTime) Set Total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientIp() Obtain Client IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIp(string $ClientIp) Set Client IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTotalCallTimesPercent() Obtain Proportion of total count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCallTimesPercent(float $TotalCallTimesPercent) Set Proportion of total count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTotalCostTimePercent() Obtain Proportion of total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCostTimePercent(float $TotalCostTimePercent) Set Proportion of total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMinCostTime() Obtain Minimum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinCostTime(float $MinCostTime) Set Minimum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMaxCostTime() Obtain Maximum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxCostTime(float $MaxCostTime) Set Maximum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain Time of the earliest item.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstTime(string $FirstTime) Set Time of the earliest item.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastTime() Obtain Time of the latest item.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTime(string $LastTime) Set Time of the latest item.Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getReadCostTime() Obtain Total consumption time of I/O reading.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadCostTime(float $ReadCostTime) Set Total consumption time of I/O reading.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getWriteCostTime() Obtain Total consumption time I/O writing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWriteCostTime(float $WriteCostTime) Set Total consumption time I/O writing.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NormQueryItem extends AbstractModel
{
    /**
     * @var integer Number of calls.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CallTimes;

    /**
     * @var integer Number of read-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharedReadBlocks;

    /**
     * @var integer Number of write-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharedWriteBlocks;

    /**
     * @var string Database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Statement after masking.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NormalQuery;

    /**
     * @var string The statement with the longest execution time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxElapsedQuery;

    /**
     * @var float Total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CostTime;

    /**
     * @var string Client IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIp;

    /**
     * @var string Username.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var float Proportion of total count.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCallTimesPercent;

    /**
     * @var float Proportion of total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCostTimePercent;

    /**
     * @var float Minimum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinCostTime;

    /**
     * @var float Maximum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxCostTime;

    /**
     * @var string Time of the earliest item.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstTime;

    /**
     * @var string Time of the latest item.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTime;

    /**
     * @var float Total consumption time of I/O reading.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadCostTime;

    /**
     * @var float Total consumption time I/O writing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WriteCostTime;

    /**
     * @param integer $CallTimes Number of calls.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SharedReadBlocks Number of read-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SharedWriteBlocks Number of write-only shared memory blocks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Database.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NormalQuery Statement after masking.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MaxElapsedQuery The statement with the longest execution time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CostTime Total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientIp Client IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TotalCallTimesPercent Proportion of total count.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TotalCostTimePercent Proportion of total consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MinCostTime Minimum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MaxCostTime Maximum consumption time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime Time of the earliest item.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastTime Time of the latest item.Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ReadCostTime Total consumption time of I/O reading.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $WriteCostTime Total consumption time I/O writing.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CallTimes",$param) and $param["CallTimes"] !== null) {
            $this->CallTimes = $param["CallTimes"];
        }

        if (array_key_exists("SharedReadBlocks",$param) and $param["SharedReadBlocks"] !== null) {
            $this->SharedReadBlocks = $param["SharedReadBlocks"];
        }

        if (array_key_exists("SharedWriteBlocks",$param) and $param["SharedWriteBlocks"] !== null) {
            $this->SharedWriteBlocks = $param["SharedWriteBlocks"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }

        if (array_key_exists("MaxElapsedQuery",$param) and $param["MaxElapsedQuery"] !== null) {
            $this->MaxElapsedQuery = $param["MaxElapsedQuery"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("TotalCallTimesPercent",$param) and $param["TotalCallTimesPercent"] !== null) {
            $this->TotalCallTimesPercent = $param["TotalCallTimesPercent"];
        }

        if (array_key_exists("TotalCostTimePercent",$param) and $param["TotalCostTimePercent"] !== null) {
            $this->TotalCostTimePercent = $param["TotalCostTimePercent"];
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

        if (array_key_exists("ReadCostTime",$param) and $param["ReadCostTime"] !== null) {
            $this->ReadCostTime = $param["ReadCostTime"];
        }

        if (array_key_exists("WriteCostTime",$param) and $param["WriteCostTime"] !== null) {
            $this->WriteCostTime = $param["WriteCostTime"];
        }
    }
}
