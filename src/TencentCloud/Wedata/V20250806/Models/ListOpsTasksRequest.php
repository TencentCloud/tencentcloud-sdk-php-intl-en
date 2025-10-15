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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOpsTasks request structure.
 *
 * @method string getProjectId() Obtain Project ID.
		
 * @method void setProjectId(string $ProjectId) Set Project ID.
		
 * @method string getPageSize() Obtain Pagination size.
 * @method void setPageSize(string $PageSize) Set Pagination size.
 * @method string getPageNumber() Obtain Page number
 * @method void setPageNumber(string $PageNumber) Set Page number
 * @method string getTaskTypeId() Obtain Task type Id. 
-20: common data sync.
 - 25:ETLTaskType
 - 26:ETLTaskType
 - 30:python
 - 31:pyspark
 - 34:HiveSQLTaskType
 - 35:shell
 - 36:SparkSQLTaskType
 - 21:JDBCSQLTaskType
 - 32:DLCTaskType
 - 33:ImpalaTaskType
 - 40:CDWTaskType
 - 41:kettle
 - 46:DLCSparkTaskType
-47: TiOne machine learning.
 - 48:TrinoTaskType
 - 50:DLCPyspark39:spark
 - 92:mr
-38: shell script.
-70: hivesql script.
-1000: common custom business.
 * @method void setTaskTypeId(string $TaskTypeId) Set Task type Id. 
-20: common data sync.
 - 25:ETLTaskType
 - 26:ETLTaskType
 - 30:python
 - 31:pyspark
 - 34:HiveSQLTaskType
 - 35:shell
 - 36:SparkSQLTaskType
 - 21:JDBCSQLTaskType
 - 32:DLCTaskType
 - 33:ImpalaTaskType
 - 40:CDWTaskType
 - 41:kettle
 - 46:DLCSparkTaskType
-47: TiOne machine learning.
 - 48:TrinoTaskType
 - 50:DLCPyspark39:spark
 - 92:mr
-38: shell script.
-70: hivesql script.
-1000: common custom business.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getOwnerUin() Obtain Owner id.
 * @method void setOwnerUin(string $OwnerUin) Set Owner id.
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getSourceServiceId() Obtain Data source ID.
 * @method void setSourceServiceId(string $SourceServiceId) Set Data source ID.
 * @method string getTargetServiceId() Obtain Target data source id.
 * @method void setTargetServiceId(string $TargetServiceId) Set Target data source id.
 * @method string getExecutorGroupId() Obtain Executor Group ID
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Executor Group ID
 * @method string getCycleType() Obtain Task Cycle Type:

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method void setCycleType(string $CycleType) Set Task Cycle Type:

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method string getStatus() Obtain Task Status

-Y: Running

-F: Stopped

-O: Frozen

-T: Stopping

-INVALID: Invalid
 * @method void setStatus(string $Status) Set Task Status

-Y: Running

-F: Stopped

-O: Frozen

-T: Stopping

-INVALID: Invalid
 * @method string getTimeZone() Obtain Time zone. defaults to UTC+8.
 * @method void setTimeZone(string $TimeZone) Set Time zone. defaults to UTC+8.
 */
class ListOpsTasksRequest extends AbstractModel
{
    /**
     * @var string Project ID.
		
     */
    public $ProjectId;

    /**
     * @var string Pagination size.
     */
    public $PageSize;

    /**
     * @var string Page number
     */
    public $PageNumber;

    /**
     * @var string Task type Id. 
-20: common data sync.
 - 25:ETLTaskType
 - 26:ETLTaskType
 - 30:python
 - 31:pyspark
 - 34:HiveSQLTaskType
 - 35:shell
 - 36:SparkSQLTaskType
 - 21:JDBCSQLTaskType
 - 32:DLCTaskType
 - 33:ImpalaTaskType
 - 40:CDWTaskType
 - 41:kettle
 - 46:DLCSparkTaskType
-47: TiOne machine learning.
 - 48:TrinoTaskType
 - 50:DLCPyspark39:spark
 - 92:mr
-38: shell script.
-70: hivesql script.
-1000: common custom business.
     */
    public $TaskTypeId;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Owner id.
     */
    public $OwnerUin;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Data source ID.
     */
    public $SourceServiceId;

    /**
     * @var string Target data source id.
     */
    public $TargetServiceId;

    /**
     * @var string Executor Group ID
     */
    public $ExecutorGroupId;

    /**
     * @var string Task Cycle Type:

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     */
    public $CycleType;

    /**
     * @var string Task Status

-Y: Running

-F: Stopped

-O: Frozen

-T: Stopping

-INVALID: Invalid
     */
    public $Status;

    /**
     * @var string Time zone. defaults to UTC+8.
     */
    public $TimeZone;

    /**
     * @param string $ProjectId Project ID.
		
     * @param string $PageSize Pagination size.
     * @param string $PageNumber Page number
     * @param string $TaskTypeId Task type Id. 
-20: common data sync.
 - 25:ETLTaskType
 - 26:ETLTaskType
 - 30:python
 - 31:pyspark
 - 34:HiveSQLTaskType
 - 35:shell
 - 36:SparkSQLTaskType
 - 21:JDBCSQLTaskType
 - 32:DLCTaskType
 - 33:ImpalaTaskType
 - 40:CDWTaskType
 - 41:kettle
 - 46:DLCSparkTaskType
-47: TiOne machine learning.
 - 48:TrinoTaskType
 - 50:DLCPyspark39:spark
 - 92:mr
-38: shell script.
-70: hivesql script.
-1000: common custom business.
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $OwnerUin Owner id.
     * @param string $FolderId Folder ID
     * @param string $SourceServiceId Data source ID.
     * @param string $TargetServiceId Target data source id.
     * @param string $ExecutorGroupId Executor Group ID
     * @param string $CycleType Task Cycle Type:

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param string $Status Task Status

-Y: Running

-F: Stopped

-O: Frozen

-T: Stopping

-INVALID: Invalid
     * @param string $TimeZone Time zone. defaults to UTC+8.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
