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
 * Integration Tasks
 *
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method string getDescription() Obtain Task Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Task Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSyncType() Obtain Synchronization Type 1. Solution (Whole Database Migration), 2. Single Table Synchronization
 * @method void setSyncType(integer $SyncType) Set Synchronization Type 1. Solution (Whole Database Migration), 2. Single Table Synchronization
 * @method integer getTaskType() Obtain 201. Real-time, 202. Offline
 * @method void setTaskType(integer $TaskType) Set 201. Real-time, 202. Offline
 * @method string getWorkflowId() Obtain Workflow ID of Task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID of Task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getScheduleTaskId() Obtain Task Scheduling ID (oceanus or us etc. Job ID), not a mandatory field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScheduleTaskId(string $ScheduleTaskId) Set Task Scheduling ID (oceanus or us etc. Job ID), not a mandatory field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskGroupId() Obtain InLong Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskGroupId(string $TaskGroupId) Set InLong Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreatorUin() Obtain Creator UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreatorUin(string $CreatorUin) Set Creator UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperatorUin() Obtain Operator UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUin(string $OperatorUin) Set Operator UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUin() Obtain owner uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set owner uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAppId() Obtain Application ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAppId(string $AppId) Set Application ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain 1: not started | 2: In operation | 3: Running | 4: Suspension | 5: Task Stopping | 6: Stop | 7: Execution Failure | 20: Abnormal | 21: Unknown |
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set 1: not started | 2: In operation | 3: Running | 4: Suspension | 5: Task Stopping | 6: Stop | 7: Execution Failure | 20: Abnormal | 21: Unknown |
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getNodes() Obtain Node list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodes(array $Nodes) Set Node list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorId() Obtain Execution Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorId(string $ExecutorId) Set Execution Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getConfig() Obtain Task configuration information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConfig(array $Config) Set Task configuration information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtConfig() Obtain Task extension configuration information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtConfig(array $ExtConfig) Set Task extension configuration information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExecuteContext() Obtain Task execution context information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecuteContext(array $ExecuteContext) Set Task execution context information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getMappings() Obtain Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMappings(array $Mappings) Set Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskMode() Obtain Task configuration mode, 0: Canvas 1: Form 3: Script
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskMode(string $TaskMode) Set Task configuration mode, 0: Canvas 1: Form 3: Script
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getIncharge() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setIncharge(string $Incharge) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method OfflineTaskAddParam getOfflineTaskAddEntity() Obtain Offline new parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOfflineTaskAddEntity(OfflineTaskAddParam $OfflineTaskAddEntity) Set Offline new parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupName() Obtain group name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set group name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInLongManagerUrl() Obtain inlong manager url
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInLongManagerUrl(string $InLongManagerUrl) Set inlong manager url
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInLongStreamId() Obtain stream id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInLongStreamId(string $InLongStreamId) Set stream id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInLongManagerVersion() Obtain version
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInLongManagerVersion(string $InLongManagerVersion) Set version
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getDataProxyUrl() Obtain inlong dataproxy url
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataProxyUrl(array $DataProxyUrl) Set inlong dataproxy url
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSubmit() Obtain Whether the task version has been submitted for operation and maintenance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmit(boolean $Submit) Set Whether the task version has been submitted for operation and maintenance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInputDatasourceType() Obtain Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInputDatasourceType(string $InputDatasourceType) Set Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOutputDatasourceType() Obtain Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputDatasourceType(string $OutputDatasourceType) Set Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNumRecordsIn() Obtain Number of reads
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNumRecordsIn(integer $NumRecordsIn) Set Number of reads
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNumRecordsOut() Obtain Number of writes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNumRecordsOut(integer $NumRecordsOut) Set Number of writes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getReaderDelay() Obtain Read latency
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReaderDelay(float $ReaderDelay) Set Read latency
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNumRestarts() Obtain Restart Times
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNumRestarts(integer $NumRestarts) Set Restart Times
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Task Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Task Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastRunTime() Obtain Last task run time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastRunTime(string $LastRunTime) Set Last task run time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStopTime() Obtain Task stop time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStopTime(string $StopTime) Set Task stop time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getHasVersion() Obtain Job Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHasVersion(boolean $HasVersion) Set Job Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getLocked() Obtain Is the task locked?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocked(boolean $Locked) Set Is the task locked?
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocker() Obtain Task Locked By
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocker(string $Locker) Set Task Locked By
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getRunningCu() Obtain Resource Consumption
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunningCu(float $RunningCu) Set Resource Consumption
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTaskAlarmRegularList() Obtain Associated Alert Rules for the Task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAlarmRegularList(array $TaskAlarmRegularList) Set Associated Alert Rules for the Task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSwitchResource() Obtain Real-time task resource layering status: 0:Ongoing,1:Success,2:Failed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSwitchResource(integer $SwitchResource) Set Real-time task resource layering status: 0:Ongoing,1:Success,2:Failed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getReadPhase() Obtain Real-time task reading phase: 0:Full Full,1:Partial Full,2:Full Incremental
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReadPhase(integer $ReadPhase) Set Real-time task reading phase: 0:Full Full,1:Partial Full,2:Full Incremental
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInstanceVersion() Obtain Real-time Task Version Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceVersion(integer $InstanceVersion) Set Real-time Task Version Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getArrangeSpaceTaskId() Obtain Offline task imported into orchestration space Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setArrangeSpaceTaskId(string $ArrangeSpaceTaskId) Set Offline task imported into orchestration space Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getOfflineTaskStatus() Obtain Offline Task Status Differentiation 1.Not Submitted 2.Submitted 3.Exported
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOfflineTaskStatus(integer $OfflineTaskStatus) Set Offline Task Status Differentiation 1.Not Submitted 2.Submitted 3.Exported
Note: This field may return null, indicating that no valid value can be obtained.
 */
class IntegrationTaskInfo extends AbstractModel
{
    /**
     * @var string Task Name
     */
    public $TaskName;

    /**
     * @var string Task Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Synchronization Type 1. Solution (Whole Database Migration), 2. Single Table Synchronization
     */
    public $SyncType;

    /**
     * @var integer 201. Real-time, 202. Offline
     */
    public $TaskType;

    /**
     * @var string Workflow ID of Task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task Scheduling ID (oceanus or us etc. Job ID), not a mandatory field
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScheduleTaskId;

    /**
     * @var string InLong Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskGroupId;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Creator UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreatorUin;

    /**
     * @var string Operator UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUin;

    /**
     * @var string owner uin
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AppId;

    /**
     * @var integer 1: not started | 2: In operation | 3: Running | 4: Suspension | 5: Task Stopping | 6: Stop | 7: Execution Failure | 20: Abnormal | 21: Unknown |
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var array Node list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Nodes;

    /**
     * @var string Execution Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorId;

    /**
     * @var array Task configuration information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Config;

    /**
     * @var array Task extension configuration information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtConfig;

    /**
     * @var array Task execution context information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecuteContext;

    /**
     * @var array Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Mappings;

    /**
     * @var string Task configuration mode, 0: Canvas 1: Form 3: Script
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskMode;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Incharge;

    /**
     * @var OfflineTaskAddParam Offline new parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OfflineTaskAddEntity;

    /**
     * @var string group name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupName;

    /**
     * @var string inlong manager url
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InLongManagerUrl;

    /**
     * @var string stream id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InLongStreamId;

    /**
     * @var string version
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InLongManagerVersion;

    /**
     * @var array inlong dataproxy url
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataProxyUrl;

    /**
     * @var boolean Whether the task version has been submitted for operation and maintenance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Submit;

    /**
     * @var string Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InputDatasourceType;

    /**
     * @var string Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputDatasourceType;

    /**
     * @var integer Number of reads
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NumRecordsIn;

    /**
     * @var integer Number of writes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NumRecordsOut;

    /**
     * @var float Read latency
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReaderDelay;

    /**
     * @var integer Restart Times
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NumRestarts;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Task Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Last task run time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastRunTime;

    /**
     * @var string Task stop time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StopTime;

    /**
     * @var boolean Job Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HasVersion;

    /**
     * @var boolean Is the task locked?
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Locked;

    /**
     * @var string Task Locked By
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Locker;

    /**
     * @var float Resource Consumption
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunningCu;

    /**
     * @var array Associated Alert Rules for the Task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAlarmRegularList;

    /**
     * @var integer Real-time task resource layering status: 0:Ongoing,1:Success,2:Failed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SwitchResource;

    /**
     * @var integer Real-time task reading phase: 0:Full Full,1:Partial Full,2:Full Incremental
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReadPhase;

    /**
     * @var integer Real-time Task Version Number
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceVersion;

    /**
     * @var string Offline task imported into orchestration space Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ArrangeSpaceTaskId;

    /**
     * @var integer Offline Task Status Differentiation 1.Not Submitted 2.Submitted 3.Exported
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OfflineTaskStatus;

    /**
     * @param string $TaskName Task Name
     * @param string $Description Task Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SyncType Synchronization Type 1. Solution (Whole Database Migration), 2. Single Table Synchronization
     * @param integer $TaskType 201. Real-time, 202. Offline
     * @param string $WorkflowId Workflow ID of Task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScheduleTaskId Task Scheduling ID (oceanus or us etc. Job ID), not a mandatory field
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskGroupId InLong Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreatorUin Creator UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OperatorUin Operator UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUin owner uin
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AppId Application ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status 1: not started | 2: In operation | 3: Running | 4: Suspension | 5: Task Stopping | 6: Stop | 7: Execution Failure | 20: Abnormal | 21: Unknown |
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Nodes Node list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorId Execution Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Config Task configuration information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtConfig Task extension configuration information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExecuteContext Task execution context information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Mappings Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskMode Task configuration mode, 0: Canvas 1: Form 3: Script
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Incharge Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param OfflineTaskAddParam $OfflineTaskAddEntity Offline new parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupName group name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InLongManagerUrl inlong manager url
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InLongStreamId stream id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InLongManagerVersion version
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $DataProxyUrl inlong dataproxy url
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Submit Whether the task version has been submitted for operation and maintenance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InputDatasourceType Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OutputDatasourceType Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NumRecordsIn Number of reads
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NumRecordsOut Number of writes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $ReaderDelay Read latency
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NumRestarts Restart Times
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Task Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastRunTime Last task run time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StopTime Task stop time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $HasVersion Job Submitted?
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Locked Is the task locked?
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Locker Task Locked By
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $RunningCu Resource Consumption
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $TaskAlarmRegularList Associated Alert Rules for the Task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SwitchResource Real-time task resource layering status: 0:Ongoing,1:Success,2:Failed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ReadPhase Real-time task reading phase: 0:Full Full,1:Partial Full,2:Full Incremental
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $InstanceVersion Real-time Task Version Number
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ArrangeSpaceTaskId Offline task imported into orchestration space Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $OfflineTaskStatus Offline Task Status Differentiation 1.Not Submitted 2.Submitted 3.Exported
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ScheduleTaskId",$param) and $param["ScheduleTaskId"] !== null) {
            $this->ScheduleTaskId = $param["ScheduleTaskId"];
        }

        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new IntegrationNodeInfo();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("ExecutorId",$param) and $param["ExecutorId"] !== null) {
            $this->ExecutorId = $param["ExecutorId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("ExecuteContext",$param) and $param["ExecuteContext"] !== null) {
            $this->ExecuteContext = [];
            foreach ($param["ExecuteContext"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExecuteContext, $obj);
            }
        }

        if (array_key_exists("Mappings",$param) and $param["Mappings"] !== null) {
            $this->Mappings = [];
            foreach ($param["Mappings"] as $key => $value){
                $obj = new IntegrationNodeMapping();
                $obj->deserialize($value);
                array_push($this->Mappings, $obj);
            }
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("OfflineTaskAddEntity",$param) and $param["OfflineTaskAddEntity"] !== null) {
            $this->OfflineTaskAddEntity = new OfflineTaskAddParam();
            $this->OfflineTaskAddEntity->deserialize($param["OfflineTaskAddEntity"]);
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("InLongManagerUrl",$param) and $param["InLongManagerUrl"] !== null) {
            $this->InLongManagerUrl = $param["InLongManagerUrl"];
        }

        if (array_key_exists("InLongStreamId",$param) and $param["InLongStreamId"] !== null) {
            $this->InLongStreamId = $param["InLongStreamId"];
        }

        if (array_key_exists("InLongManagerVersion",$param) and $param["InLongManagerVersion"] !== null) {
            $this->InLongManagerVersion = $param["InLongManagerVersion"];
        }

        if (array_key_exists("DataProxyUrl",$param) and $param["DataProxyUrl"] !== null) {
            $this->DataProxyUrl = $param["DataProxyUrl"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("InputDatasourceType",$param) and $param["InputDatasourceType"] !== null) {
            $this->InputDatasourceType = $param["InputDatasourceType"];
        }

        if (array_key_exists("OutputDatasourceType",$param) and $param["OutputDatasourceType"] !== null) {
            $this->OutputDatasourceType = $param["OutputDatasourceType"];
        }

        if (array_key_exists("NumRecordsIn",$param) and $param["NumRecordsIn"] !== null) {
            $this->NumRecordsIn = $param["NumRecordsIn"];
        }

        if (array_key_exists("NumRecordsOut",$param) and $param["NumRecordsOut"] !== null) {
            $this->NumRecordsOut = $param["NumRecordsOut"];
        }

        if (array_key_exists("ReaderDelay",$param) and $param["ReaderDelay"] !== null) {
            $this->ReaderDelay = $param["ReaderDelay"];
        }

        if (array_key_exists("NumRestarts",$param) and $param["NumRestarts"] !== null) {
            $this->NumRestarts = $param["NumRestarts"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastRunTime",$param) and $param["LastRunTime"] !== null) {
            $this->LastRunTime = $param["LastRunTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("HasVersion",$param) and $param["HasVersion"] !== null) {
            $this->HasVersion = $param["HasVersion"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("TaskAlarmRegularList",$param) and $param["TaskAlarmRegularList"] !== null) {
            $this->TaskAlarmRegularList = $param["TaskAlarmRegularList"];
        }

        if (array_key_exists("SwitchResource",$param) and $param["SwitchResource"] !== null) {
            $this->SwitchResource = $param["SwitchResource"];
        }

        if (array_key_exists("ReadPhase",$param) and $param["ReadPhase"] !== null) {
            $this->ReadPhase = $param["ReadPhase"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("ArrangeSpaceTaskId",$param) and $param["ArrangeSpaceTaskId"] !== null) {
            $this->ArrangeSpaceTaskId = $param["ArrangeSpaceTaskId"];
        }

        if (array_key_exists("OfflineTaskStatus",$param) and $param["OfflineTaskStatus"] !== null) {
            $this->OfflineTaskStatus = $param["OfflineTaskStatus"];
        }
    }
}
