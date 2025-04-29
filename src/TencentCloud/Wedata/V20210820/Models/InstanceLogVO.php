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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance log content.
 *
 * @method string getInstanceKey() Obtain Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceState() Obtain **Instance status**.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(integer $InstanceState) Set **Instance status**.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunType() Obtain Instance running trigger type.

-RERUN indicates data replenishment.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunType(string $RunType) Set Instance running trigger type.

-RERUN indicates data replenishment.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time of running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCodeInfo() Obtain Run code content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodeInfo(string $CodeInfo) Set Run code content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCodeFileSize() Obtain File size for running code.
Unit: KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodeFileSize(string $CodeFileSize) Set File size for running code.
Unit: KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBrokerIp() Obtain Log node information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBrokerIp(string $BrokerIp) Set Log node information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogInfo() Obtain Log content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogInfo(string $LogInfo) Set Log content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogFileSize() Obtain Log file size.
KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogFileSize(string $LogFileSize) Set Log file size.
KB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLineCount() Obtain Row count of returned logs this time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineCount(integer $LineCount) Set Row count of returned logs this time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtInfo() Obtain Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Specifies that you can use the field value of ExtInfo in the returned information from the previous query for the second and subsequent queries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtInfo(string $ExtInfo) Set Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Specifies that you can use the field value of ExtInfo in the returned information from the previous query for the second and subsequent queries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsEnd() Obtain Paging query for logs. indicates whether it is the last page.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEnd(boolean $IsEnd) Set Paging query for logs. indicates whether it is the last page.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceLogVO extends AbstractModel
{
    /**
     * @var string Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceKey;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var integer **Instance status**.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var string Instance running trigger type.

-RERUN indicates data replenishment.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunType;

    /**
     * @var string Start time of running.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Run code content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CodeInfo;

    /**
     * @var string File size for running code.
Unit: KB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CodeFileSize;

    /**
     * @var string Log node information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BrokerIp;

    /**
     * @var string Log content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogInfo;

    /**
     * @var string Log file size.
KB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogFileSize;

    /**
     * @var integer Row count of returned logs this time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineCount;

    /**
     * @var string Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Specifies that you can use the field value of ExtInfo in the returned information from the previous query for the second and subsequent queries.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtInfo;

    /**
     * @var boolean Paging query for logs. indicates whether it is the last page.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsEnd;

    /**
     * @param string $InstanceKey Unique id of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceState **Instance status**.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunType Instance running trigger type.

-RERUN indicates data replenishment.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time of running.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Indicates the operation completion time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CodeInfo Run code content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CodeFileSize File size for running code.
Unit: KB.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BrokerIp Log node information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogInfo Log content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogFileSize Log file size.
KB.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LineCount Row count of returned logs this time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtInfo Used when performing a paging query for logs. it has no specific business meaning.

Specifies that the value is null for the first query. 
Specifies that you can use the field value of ExtInfo in the returned information from the previous query for the second and subsequent queries.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsEnd Paging query for logs. indicates whether it is the last page.
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("CodeFileSize",$param) and $param["CodeFileSize"] !== null) {
            $this->CodeFileSize = $param["CodeFileSize"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = $param["LogInfo"];
        }

        if (array_key_exists("LogFileSize",$param) and $param["LogFileSize"] !== null) {
            $this->LogFileSize = $param["LogFileSize"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }
    }
}
