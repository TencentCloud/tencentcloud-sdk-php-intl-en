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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trino query information.
 *
 * @method string getCatalog() Obtain catalog
 * @method void setCatalog(string $Catalog) Set catalog
 * @method string getClientIpAddr() Obtain IP address used for submission.
 * @method void setClientIpAddr(string $ClientIpAddr) Set IP address used for submission.
 * @method string getCompletedSplits() Obtain Number of segments.
 * @method void setCompletedSplits(string $CompletedSplits) Set Number of segments.
 * @method integer getCpuTime() Obtain CPU time.
 * @method void setCpuTime(integer $CpuTime) Set CPU time.
 * @method integer getCumulativeMemory() Obtain Cumulative memory.
 * @method void setCumulativeMemory(integer $CumulativeMemory) Set Cumulative memory.
 * @method integer getDurationMillis() Obtain Execution duration.
 * @method void setDurationMillis(integer $DurationMillis) Set Execution duration.
 * @method integer getEndTime() Obtain End time (seconds).
 * @method void setEndTime(integer $EndTime) Set End time (seconds).
 * @method string getId() Obtain Query ID.
 * @method void setId(string $Id) Set Query ID.
 * @method integer getInternalNetworkBytes() Obtain Internal transmission volume.
 * @method void setInternalNetworkBytes(integer $InternalNetworkBytes) Set Internal transmission volume.
 * @method integer getOutputBytes() Obtain Number of output bytes.
 * @method void setOutputBytes(integer $OutputBytes) Set Number of output bytes.
 * @method integer getPeakUserMemoryBytes() Obtain Peak memory.
 * @method void setPeakUserMemoryBytes(integer $PeakUserMemoryBytes) Set Peak memory.
 * @method integer getPhysicalInputBytes() Obtain Physical input volume.
 * @method void setPhysicalInputBytes(integer $PhysicalInputBytes) Set Physical input volume.
 * @method integer getProcessedInputBytes() Obtain Processed input volume.
 * @method void setProcessedInputBytes(integer $ProcessedInputBytes) Set Processed input volume.
 * @method integer getSqlCompileTime() Obtain Compilation duration.
 * @method void setSqlCompileTime(integer $SqlCompileTime) Set Compilation duration.
 * @method integer getStartTime() Obtain Start time (seconds).
 * @method void setStartTime(integer $StartTime) Set Start time (seconds).
 * @method string getState() Obtain Execution status.
 * @method void setState(string $State) Set Execution status.
 * @method string getStatement() Obtain Execution statement.
 * @method void setStatement(string $Statement) Set Execution statement.
 * @method string getUser() Obtain User who submits requests.
 * @method void setUser(string $User) Set User who submits requests.
 * @method integer getWrittenBytes() Obtain Number of bytes written.
 * @method void setWrittenBytes(integer $WrittenBytes) Set Number of bytes written.
 */
class TrinoQueryInfo extends AbstractModel
{
    /**
     * @var string catalog
     */
    public $Catalog;

    /**
     * @var string IP address used for submission.
     */
    public $ClientIpAddr;

    /**
     * @var string Number of segments.
     */
    public $CompletedSplits;

    /**
     * @var integer CPU time.
     */
    public $CpuTime;

    /**
     * @var integer Cumulative memory.
     */
    public $CumulativeMemory;

    /**
     * @var integer Execution duration.
     */
    public $DurationMillis;

    /**
     * @var integer End time (seconds).
     */
    public $EndTime;

    /**
     * @var string Query ID.
     */
    public $Id;

    /**
     * @var integer Internal transmission volume.
     */
    public $InternalNetworkBytes;

    /**
     * @var integer Number of output bytes.
     */
    public $OutputBytes;

    /**
     * @var integer Peak memory.
     */
    public $PeakUserMemoryBytes;

    /**
     * @var integer Physical input volume.
     */
    public $PhysicalInputBytes;

    /**
     * @var integer Processed input volume.
     */
    public $ProcessedInputBytes;

    /**
     * @var integer Compilation duration.
     */
    public $SqlCompileTime;

    /**
     * @var integer Start time (seconds).
     */
    public $StartTime;

    /**
     * @var string Execution status.
     */
    public $State;

    /**
     * @var string Execution statement.
     */
    public $Statement;

    /**
     * @var string User who submits requests.
     */
    public $User;

    /**
     * @var integer Number of bytes written.
     */
    public $WrittenBytes;

    /**
     * @param string $Catalog catalog
     * @param string $ClientIpAddr IP address used for submission.
     * @param string $CompletedSplits Number of segments.
     * @param integer $CpuTime CPU time.
     * @param integer $CumulativeMemory Cumulative memory.
     * @param integer $DurationMillis Execution duration.
     * @param integer $EndTime End time (seconds).
     * @param string $Id Query ID.
     * @param integer $InternalNetworkBytes Internal transmission volume.
     * @param integer $OutputBytes Number of output bytes.
     * @param integer $PeakUserMemoryBytes Peak memory.
     * @param integer $PhysicalInputBytes Physical input volume.
     * @param integer $ProcessedInputBytes Processed input volume.
     * @param integer $SqlCompileTime Compilation duration.
     * @param integer $StartTime Start time (seconds).
     * @param string $State Execution status.
     * @param string $Statement Execution statement.
     * @param string $User User who submits requests.
     * @param integer $WrittenBytes Number of bytes written.
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ClientIpAddr",$param) and $param["ClientIpAddr"] !== null) {
            $this->ClientIpAddr = $param["ClientIpAddr"];
        }

        if (array_key_exists("CompletedSplits",$param) and $param["CompletedSplits"] !== null) {
            $this->CompletedSplits = $param["CompletedSplits"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("CumulativeMemory",$param) and $param["CumulativeMemory"] !== null) {
            $this->CumulativeMemory = $param["CumulativeMemory"];
        }

        if (array_key_exists("DurationMillis",$param) and $param["DurationMillis"] !== null) {
            $this->DurationMillis = $param["DurationMillis"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InternalNetworkBytes",$param) and $param["InternalNetworkBytes"] !== null) {
            $this->InternalNetworkBytes = $param["InternalNetworkBytes"];
        }

        if (array_key_exists("OutputBytes",$param) and $param["OutputBytes"] !== null) {
            $this->OutputBytes = $param["OutputBytes"];
        }

        if (array_key_exists("PeakUserMemoryBytes",$param) and $param["PeakUserMemoryBytes"] !== null) {
            $this->PeakUserMemoryBytes = $param["PeakUserMemoryBytes"];
        }

        if (array_key_exists("PhysicalInputBytes",$param) and $param["PhysicalInputBytes"] !== null) {
            $this->PhysicalInputBytes = $param["PhysicalInputBytes"];
        }

        if (array_key_exists("ProcessedInputBytes",$param) and $param["ProcessedInputBytes"] !== null) {
            $this->ProcessedInputBytes = $param["ProcessedInputBytes"];
        }

        if (array_key_exists("SqlCompileTime",$param) and $param["SqlCompileTime"] !== null) {
            $this->SqlCompileTime = $param["SqlCompileTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("WrittenBytes",$param) and $param["WrittenBytes"] !== null) {
            $this->WrittenBytes = $param["WrittenBytes"];
        }
    }
}
