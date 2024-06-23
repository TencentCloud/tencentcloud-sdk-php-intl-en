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
 * Task Information
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectIdent() Obtain Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectIdent(string $ProjectIdent) Set Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Task status, 'Y', 'F', 'O', 'T', 'INVALID' respectively indicate Scheduling In Progress, Stopped, Paused, Stopping, Expired
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Task status, 'Y', 'F', 'O', 'T', 'INVALID' respectively indicate Scheduling In Progress, Stopped, Paused, Stopping, Expired
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskTypeId() Obtain Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskTypeDesc() Obtain Task Type Description, where the corresponding relationship between Task Type ID and Task Type Description is as follows
20	Universal Data Synchronization Task
21	JDBC SQL
22	Tbase
25	Data ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS to HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE to MySQL
56	THIVE to PostgreSQL
66	HDFS to PostgreSQL
67	HDFS to Oracle
68	HDFS to MySQL
69	FTP to HDFS
70	HIVE SQL
72	HIVE to HDFS
75	HDFS to HIVE
81	Python SQL Script
82	Spark Scala Computation
83	Wormhole Task
84	Verify Reconciliation File
85	HDFS to THIVE
86	TDW to HDFS
87	HDFS to TDW
88	Verify Reconciliation File
91	FLINK Task
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	Import MYSQL to HIVE(DX)
104	MYSQL to HIVE
105	HIVE to MYSQL
106	SQL SERVER to HIVE
107	HIVE to SQL SERVER
108	ORACLE to HIVE
109	HIVE to ORACLE
111	HIVE to MYSQL (NEW)
112	HIVE to PG
113	HIVE to PHOENIX
118	MYSQL to HDFS
119	PG to HDFS
120	ORACLE to HDFS
121	Data Quality
10000	Custom Definition Business
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeDesc(string $TaskTypeDesc) Set Task Type Description, where the corresponding relationship between Task Type ID and Task Type Description is as follows
20	Universal Data Synchronization Task
21	JDBC SQL
22	Tbase
25	Data ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS to HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE to MySQL
56	THIVE to PostgreSQL
66	HDFS to PostgreSQL
67	HDFS to Oracle
68	HDFS to MySQL
69	FTP to HDFS
70	HIVE SQL
72	HIVE to HDFS
75	HDFS to HIVE
81	Python SQL Script
82	Spark Scala Computation
83	Wormhole Task
84	Verify Reconciliation File
85	HDFS to THIVE
86	TDW to HDFS
87	HDFS to TDW
88	Verify Reconciliation File
91	FLINK Task
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	Import MYSQL to HIVE(DX)
104	MYSQL to HIVE
105	HIVE to MYSQL
106	SQL SERVER to HIVE
107	HIVE to SQL SERVER
108	ORACLE to HIVE
109	HIVE to ORACLE
111	HIVE to MYSQL (NEW)
112	HIVE to PG
113	HIVE to PHOENIX
118	MYSQL to HDFS
119	PG to HDFS
120	ORACLE to HDFS
121	Data Quality
10000	Custom Definition Business
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderName() Obtain Folder NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstSubmitTime() Obtain Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstRunTime() Obtain First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstRunTime(string $FirstRunTime) Set First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getScheduleDesc() Obtain Scheduling Plan Display Description Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScheduleDesc(string $ScheduleDesc) Set Scheduling Plan Display Description Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getLeftCoordinate() Obtain Canvas X-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLeftCoordinate(float $LeftCoordinate) Set Canvas X-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getTopCoordinate() Obtain Canvas Y-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTopCoordinate(float $TopCoordinate) Set Canvas Y-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getVirtualFlag() Obtain Cross-Workflow Virtual Task Identifier; true indicates a cross-workflow task; false indicates an in-workflow task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Cross-Workflow Virtual Task Identifier; true indicates a cross-workflow task; false indicates an in-workflow task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskAction() Obtain Elastic Cycle Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Elastic Cycle Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDelayTime() Obtain DelayNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDelayTime(integer $DelayTime) Set DelayNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionStartTime() Obtain Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionEndTime() Obtain Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLayer() Obtain Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLayer(string $Layer) Set Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceServiceId() Obtain Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceServiceId(string $SourceServiceId) Set Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceServiceType() Obtain Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceServiceType(string $SourceServiceType) Set Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetServiceId() Obtain Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetServiceId(string $TargetServiceId) Set Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetServiceType() Obtain Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetServiceType(string $TargetServiceType) Set Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmType() Obtain Task Alert Types
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmType(string $AlarmType) Set Task Alert Types
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 */
class OpsTaskCanvasDto extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Project nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectIdent;

    /**
     * @var string Task status, 'Y', 'F', 'O', 'T', 'INVALID' respectively indicate Scheduling In Progress, Stopped, Paused, Stopping, Expired
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var integer Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Task Type Description, where the corresponding relationship between Task Type ID and Task Type Description is as follows
20	Universal Data Synchronization Task
21	JDBC SQL
22	Tbase
25	Data ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS to HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE to MySQL
56	THIVE to PostgreSQL
66	HDFS to PostgreSQL
67	HDFS to Oracle
68	HDFS to MySQL
69	FTP to HDFS
70	HIVE SQL
72	HIVE to HDFS
75	HDFS to HIVE
81	Python SQL Script
82	Spark Scala Computation
83	Wormhole Task
84	Verify Reconciliation File
85	HDFS to THIVE
86	TDW to HDFS
87	HDFS to TDW
88	Verify Reconciliation File
91	FLINK Task
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	Import MYSQL to HIVE(DX)
104	MYSQL to HIVE
105	HIVE to MYSQL
106	SQL SERVER to HIVE
107	HIVE to SQL SERVER
108	ORACLE to HIVE
109	HIVE to ORACLE
111	HIVE to MYSQL (NEW)
112	HIVE to PG
113	HIVE to PHOENIX
118	MYSQL to HDFS
119	PG to HDFS
120	ORACLE to HDFS
121	Data Quality
10000	Custom Definition Business
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeDesc;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Folder NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderName;

    /**
     * @var string Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @var string Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstSubmitTime;

    /**
     * @var string First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstRunTime;

    /**
     * @var string Scheduling Plan Display Description Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScheduleDesc;

    /**
     * @var string Owner
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var float Canvas X-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LeftCoordinate;

    /**
     * @var float Canvas Y-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TopCoordinate;

    /**
     * @var boolean Cross-Workflow Virtual Task Identifier; true indicates a cross-workflow task; false indicates an in-workflow task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualFlag;

    /**
     * @var string Elastic Cycle Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var integer DelayNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DelayTime;

    /**
     * @var string Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Layer;

    /**
     * @var string Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceServiceId;

    /**
     * @var string Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceServiceType;

    /**
     * @var string Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetServiceId;

    /**
     * @var string Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetServiceType;

    /**
     * @var string Task Alert Types
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmType;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectIdent Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Task status, 'Y', 'F', 'O', 'T', 'INVALID' respectively indicate Scheduling In Progress, Stopped, Paused, Stopping, Expired
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskTypeId Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskTypeDesc Task Type Description, where the corresponding relationship between Task Type ID and Task Type Description is as follows
20	Universal Data Synchronization Task
21	JDBC SQL
22	Tbase
25	Data ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS to HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE to MySQL
56	THIVE to PostgreSQL
66	HDFS to PostgreSQL
67	HDFS to Oracle
68	HDFS to MySQL
69	FTP to HDFS
70	HIVE SQL
72	HIVE to HDFS
75	HDFS to HIVE
81	Python SQL Script
82	Spark Scala Computation
83	Wormhole Task
84	Verify Reconciliation File
85	HDFS to THIVE
86	TDW to HDFS
87	HDFS to TDW
88	Verify Reconciliation File
91	FLINK Task
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	Import MYSQL to HIVE(DX)
104	MYSQL to HIVE
105	HIVE to MYSQL
106	SQL SERVER to HIVE
107	HIVE to SQL SERVER
108	ORACLE to HIVE
109	HIVE to ORACLE
111	HIVE to MYSQL (NEW)
112	HIVE to PG
113	HIVE to PHOENIX
118	MYSQL to HDFS
119	PG to HDFS
120	ORACLE to HDFS
121	Data Quality
10000	Custom Definition Business
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderName Folder NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstSubmitTime Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstRunTime First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScheduleDesc Scheduling Plan Display Description Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Owner
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $LeftCoordinate Canvas X-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $TopCoordinate Canvas Y-axis Coordinate Point
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $VirtualFlag Cross-Workflow Virtual Task Identifier; true indicates a cross-workflow task; false indicates an in-workflow task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskAction Elastic Cycle Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DelayTime DelayNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionStartTime Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionEndTime Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Layer Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceServiceId Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceServiceType Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetServiceId Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetServiceType Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmType Task Alert Types
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("SourceServiceType",$param) and $param["SourceServiceType"] !== null) {
            $this->SourceServiceType = $param["SourceServiceType"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
