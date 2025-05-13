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

namespace TencentCloud\Wedata\V20210820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wedata\V20210820\Models as Models;

/**
 * @method Models\AddProjectUserRoleResponse AddProjectUserRole(Models\AddProjectUserRoleRequest $req) This API is used to add a user role to a project.
 * @method Models\BatchCreateIntegrationTaskAlarmsResponse BatchCreateIntegrationTaskAlarms(Models\BatchCreateIntegrationTaskAlarmsRequest $req) Bulk Create Task Alert Rules
 * @method Models\BatchCreateTaskVersionAsyncResponse BatchCreateTaskVersionAsync(Models\BatchCreateTaskVersionAsyncRequest $req) This API is used to asynchronously create task versions in batches.
 * @method Models\BatchDeleteIntegrationTasksResponse BatchDeleteIntegrationTasks(Models\BatchDeleteIntegrationTasksRequest $req) Batch Delete Integration Tasks.
 * @method Models\BatchDeleteOpsTasksResponse BatchDeleteOpsTasks(Models\BatchDeleteOpsTasksRequest $req) Task Operation and Maintenance - Batch Delete Tasks
 * @method Models\BatchForceSuccessIntegrationTaskInstancesResponse BatchForceSuccessIntegrationTaskInstances(Models\BatchForceSuccessIntegrationTaskInstancesRequest $req) Batch set successful integration task instances
 * @method Models\BatchKillIntegrationTaskInstancesResponse BatchKillIntegrationTaskInstances(Models\BatchKillIntegrationTaskInstancesRequest $req) Batch Terminate Integration Task Instances
 * @method Models\BatchMakeUpIntegrationTasksResponse BatchMakeUpIntegrationTasks(Models\BatchMakeUpIntegrationTasksRequest $req) Perform Batch Data Supplement Operation on Integrated Offline Tasks
 * @method Models\BatchModifyOpsOwnersResponse BatchModifyOpsOwners(Models\BatchModifyOpsOwnersRequest $req) Batch Modify Task Assignee
 * @method Models\BatchRerunIntegrationTaskInstancesResponse BatchRerunIntegrationTaskInstances(Models\BatchRerunIntegrationTaskInstancesRequest $req) Batch Rerun Integration Task Instances
 * @method Models\BatchResumeIntegrationTasksResponse BatchResumeIntegrationTasks(Models\BatchResumeIntegrationTasksRequest $req) Batch Continue Execution of Integrated Real-time Tasks
 * @method Models\BatchRunOpsTaskResponse BatchRunOpsTask(Models\BatchRunOpsTaskRequest $req) Task Operation and Maintenance - Task List Batch Startup
 * @method Models\BatchStartIntegrationTasksResponse BatchStartIntegrationTasks(Models\BatchStartIntegrationTasksRequest $req) Batch Run Integration Tasks
 * @method Models\BatchStopIntegrationTasksResponse BatchStopIntegrationTasks(Models\BatchStopIntegrationTasksRequest $req) Batch Stop Integration Tasks
 * @method Models\BatchStopOpsTasksResponse BatchStopOpsTasks(Models\BatchStopOpsTasksRequest $req) Only valid for tasks in "Scheduling In Progress" and "Paused" statuses, terminate the task instances of the selected tasks, and stop scheduling
 * @method Models\BatchStopWorkflowsByIdsResponse BatchStopWorkflowsByIds(Models\BatchStopWorkflowsByIdsRequest $req) Batch Stop Workflow
 * @method Models\BatchSuspendIntegrationTasksResponse BatchSuspendIntegrationTasks(Models\BatchSuspendIntegrationTasksRequest $req) Batch pause integration tasks
 * @method Models\BatchUpdateIntegrationTasksResponse BatchUpdateIntegrationTasks(Models\BatchUpdateIntegrationTasksRequest $req) Bulk Update Integration Tasks (Currently only supports bulk updating of the person in charge)
 * @method Models\CheckAlarmRegularNameExistResponse CheckAlarmRegularNameExist(Models\CheckAlarmRegularNameExistRequest $req) Check for Duplicate Alert Rule Names
 * @method Models\CheckIntegrationNodeNameExistsResponse CheckIntegrationNodeNameExists(Models\CheckIntegrationNodeNameExistsRequest $req) Determining if the name of the integrated node exists
 * @method Models\CheckIntegrationTaskNameExistsResponse CheckIntegrationTaskNameExists(Models\CheckIntegrationTaskNameExistsRequest $req) Check if Integration Task Name Exists
 * @method Models\CheckTaskNameExistResponse CheckTaskNameExist(Models\CheckTaskNameExistRequest $req) Offline Task Renaming Verification
 * @method Models\CommitIntegrationTaskResponse CommitIntegrationTask(Models\CommitIntegrationTaskRequest $req) Submit integration task
 * @method Models\CommitRuleGroupTaskResponse CommitRuleGroupTask(Models\CommitRuleGroupTaskRequest $req) Submit Rule Group to Run Task Interface
 * @method Models\CountOpsInstanceStateResponse CountOpsInstanceState(Models\CountOpsInstanceStateRequest $req) Statistics on task instance status
 * @method Models\CreateCustomFunctionResponse CreateCustomFunction(Models\CreateCustomFunctionRequest $req) Create User-Defined Function
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) Create Data Source
 * @method Models\CreateDsFolderResponse CreateDsFolder(Models\CreateDsFolderRequest $req) Orchestration Space - Create Folder
 * @method Models\CreateHiveTableResponse CreateHiveTable(Models\CreateHiveTableRequest $req) Create Hive Table
 * @method Models\CreateHiveTableByDDLResponse CreateHiveTableByDDL(Models\CreateHiveTableByDDLRequest $req) Create Hive table and return table name
 * @method Models\CreateIntegrationNodeResponse CreateIntegrationNode(Models\CreateIntegrationNodeRequest $req) Create Integration Node
 * @method Models\CreateIntegrationTaskResponse CreateIntegrationTask(Models\CreateIntegrationTaskRequest $req) Create Integration Task
 * @method Models\CreateOfflineTaskResponse CreateOfflineTask(Models\CreateOfflineTaskRequest $req) Create Offline Task
 * @method Models\CreateOpsMakePlanResponse CreateOpsMakePlan(Models\CreateOpsMakePlanRequest $req) Bulk Data Supplement (Create Supplementary Entry Task)
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) Create quality rule interface
 * @method Models\CreateRuleTemplateResponse CreateRuleTemplate(Models\CreateRuleTemplateRequest $req) Create Rule Template
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create a task. This API is deprecated. Use the CreateTaskNew API.
 * @method Models\CreateTaskAlarmRegularResponse CreateTaskAlarmRegular(Models\CreateTaskAlarmRegularRequest $req) Create task alert rules
 * @method Models\CreateTaskFolderResponse CreateTaskFolder(Models\CreateTaskFolderRequest $req) Orchestration Space - Workflow - Create Task Folder
 * @method Models\CreateTaskNewResponse CreateTaskNew(Models\CreateTaskNewRequest $req) This API is used to aggregate task creation.
 * @method Models\CreateTaskVersionDsResponse CreateTaskVersionDs(Models\CreateTaskVersionDsRequest $req) Submit Task Version
 * @method Models\CreateWorkflowDsResponse CreateWorkflowDs(Models\CreateWorkflowDsRequest $req) Creating workflow
 * @method Models\DagInstancesResponse DagInstances(Models\DagInstancesRequest $req) Pull DAG Instance
 * @method Models\DeleteCustomFunctionResponse DeleteCustomFunction(Models\DeleteCustomFunctionRequest $req) Delete user-defined Definition functions
 * @method Models\DeleteDataSourcesResponse DeleteDataSources(Models\DeleteDataSourcesRequest $req) Delete Data Source
 * @method Models\DeleteDsFolderResponse DeleteDsFolder(Models\DeleteDsFolderRequest $req) Orchestration space - delete folders
 * @method Models\DeleteFileResponse DeleteFile(Models\DeleteFileRequest $req) Delete File
 * @method Models\DeleteFilePathResponse DeleteFilePath(Models\DeleteFilePathRequest $req) Development Space - Batch Delete Directories and Files
 * @method Models\DeleteIntegrationNodeResponse DeleteIntegrationNode(Models\DeleteIntegrationNodeRequest $req) Delete Integration Node
 * @method Models\DeleteIntegrationTaskResponse DeleteIntegrationTask(Models\DeleteIntegrationTaskRequest $req) Delete integration tasks
 * @method Models\DeleteOfflineTaskResponse DeleteOfflineTask(Models\DeleteOfflineTaskRequest $req) Deleting task
 * @method Models\DeleteProjectParamDsResponse DeleteProjectParamDs(Models\DeleteProjectParamDsRequest $req) Delete Project Parameters
 * @method Models\DeleteProjectUsersResponse DeleteProjectUsers(Models\DeleteProjectUsersRequest $req) Delete Project Users
 * @method Models\DeleteResourceResponse DeleteResource(Models\DeleteResourceRequest $req) Remove resources in Resource Management
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) Resource Management - Delete Resource File
 * @method Models\DeleteResourceFilesResponse DeleteResourceFiles(Models\DeleteResourceFilesRequest $req) Resource Management-Batch Delete Resource Files
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) Delete Quality Rule Interface
 * @method Models\DeleteRuleTemplateResponse DeleteRuleTemplate(Models\DeleteRuleTemplateRequest $req) Deleting Rule Template
 * @method Models\DeleteTaskAlarmRegularResponse DeleteTaskAlarmRegular(Models\DeleteTaskAlarmRegularRequest $req) Delete Task Alert Rule
 * @method Models\DeleteTaskDsResponse DeleteTaskDs(Models\DeleteTaskDsRequest $req) Delete Orchestration Space Task
 * @method Models\DeleteWorkflowByIdResponse DeleteWorkflowById(Models\DeleteWorkflowByIdRequest $req) Delete Workflow by Workflow Id
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) Alert event list
 * @method Models\DescribeAlarmReceiverResponse DescribeAlarmReceiver(Models\DescribeAlarmReceiverRequest $req) Alert Recipient Details
 * @method Models\DescribeAllByFolderNewResponse DescribeAllByFolderNew(Models\DescribeAllByFolderNewRequest $req) Query all subfolders + workflows under the parent directory
 * @method Models\DescribeApproveListResponse DescribeApproveList(Models\DescribeApproveListRequest $req) Getting pending approval list
 * @method Models\DescribeApproveTypeListResponse DescribeApproveTypeList(Models\DescribeApproveTypeListRequest $req) Get Approval Category List
 * @method Models\DescribeBatchOperateTaskResponse DescribeBatchOperateTask(Models\DescribeBatchOperateTaskRequest $req) Batch operation page to retrieve task list
 * @method Models\DescribeColumnLineageResponse DescribeColumnLineage(Models\DescribeColumnLineageRequest $req) List Field Lineage Information
 * @method Models\DescribeColumnsMetaResponse DescribeColumnsMeta(Models\DescribeColumnsMetaRequest $req) Query all column metadata of the table
 * @method Models\DescribeDataCheckStatResponse DescribeDataCheckStat(Models\DescribeDataCheckStatRequest $req) Data Quality Overview Page Data Monitoring Interface
 * @method Models\DescribeDataSourceInfoListResponse DescribeDataSourceInfoList(Models\DescribeDataSourceInfoListRequest $req) Obtain Data Source Information - Data Source Pagination List
 * @method Models\DescribeDataSourceListResponse DescribeDataSourceList(Models\DescribeDataSourceListRequest $req) Data Source Details
 * @method Models\DescribeDatabaseInfoListResponse DescribeDatabaseInfoList(Models\DescribeDatabaseInfoListRequest $req) Obtain Database Information
 * @method Models\DescribeDatabaseMetasResponse DescribeDatabaseMetas(Models\DescribeDatabaseMetasRequest $req) Querying database list
 * @method Models\DescribeDatasourceResponse DescribeDatasource(Models\DescribeDatasourceRequest $req) Data Source Details
 * @method Models\DescribeDependOpsTasksResponse DescribeDependOpsTasks(Models\DescribeDependOpsTasksRequest $req) Search for upstream/downstream task nodes by hierarchy
 * @method Models\DescribeDependTaskListsResponse DescribeDependTaskLists(Models\DescribeDependTaskListsRequest $req) Query Task Detail List by taskIds
 * @method Models\DescribeDimensionScoreResponse DescribeDimensionScore(Models\DescribeDimensionScoreRequest $req) Quality Report - Query Quality Score
 * @method Models\DescribeDrInstancePageResponse DescribeDrInstancePage(Models\DescribeDrInstancePageRequest $req) Paginated Query of Trial Run Instance List
 * @method Models\DescribeDsFolderTreeResponse DescribeDsFolderTree(Models\DescribeDsFolderTreeRequest $req) Query Directory Tree
 * @method Models\DescribeDsParentFolderTreeResponse DescribeDsParentFolderTree(Models\DescribeDsParentFolderTreeRequest $req) Query Parent Directory Tree, for Workflow, Task Localization
 * @method Models\DescribeEventResponse DescribeEvent(Models\DescribeEventRequest $req) View Event Details by Project ID and Event Name
 * @method Models\DescribeEventCasesResponse DescribeEventCases(Models\DescribeEventCasesRequest $req) Find Event Instances Based on Conditions
 * @method Models\DescribeEventConsumeTasksResponse DescribeEventConsumeTasks(Models\DescribeEventConsumeTasksRequest $req) Viewing consumption tasks of event instances
 * @method Models\DescribeExecStrategyResponse DescribeExecStrategy(Models\DescribeExecStrategyRequest $req) Query Rule Group Execution Policy
 * @method Models\DescribeFieldBasicInfoResponse DescribeFieldBasicInfo(Models\DescribeFieldBasicInfoRequest $req) Metadata Model - Field Basic Information Query Interface
 * @method Models\DescribeFolderWorkflowListResponse DescribeFolderWorkflowList(Models\DescribeFolderWorkflowListRequest $req) Get all workflow lists under the project by Project ID
 * @method Models\DescribeFunctionKindsResponse DescribeFunctionKinds(Models\DescribeFunctionKindsRequest $req) Query Function Classification
 * @method Models\DescribeFunctionTypesResponse DescribeFunctionTypes(Models\DescribeFunctionTypesRequest $req) Query Function Type
 * @method Models\DescribeInstanceByCycleResponse DescribeInstanceByCycle(Models\DescribeInstanceByCycleRequest $req) Query all instances by cycle type
 * @method Models\DescribeInstanceLastLogResponse DescribeInstanceLastLog(Models\DescribeInstanceLastLogRequest $req) Log Detail Acquisition Page
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) Get Instance List
 * @method Models\DescribeInstanceLogResponse DescribeInstanceLog(Models\DescribeInstanceLogRequest $req) Get Instance Running Logs
 * @method Models\DescribeInstanceLogDetailResponse DescribeInstanceLogDetail(Models\DescribeInstanceLogDetailRequest $req) Obtain Specific Instance-related Log Information
 * @method Models\DescribeInstanceLogFileResponse DescribeInstanceLogFile(Models\DescribeInstanceLogFileRequest $req) Download Log File, Return Log Download URL
 * @method Models\DescribeInstanceLogListResponse DescribeInstanceLogList(Models\DescribeInstanceLogListRequest $req) Offline Task Instance Run Log List
 * @method Models\DescribeIntegrationNodeResponse DescribeIntegrationNode(Models\DescribeIntegrationNodeRequest $req) Query integrated nodes
 * @method Models\DescribeIntegrationStatisticsResponse DescribeIntegrationStatistics(Models\DescribeIntegrationStatisticsRequest $req) DataInLong Dashboard Overview
 * @method Models\DescribeIntegrationStatisticsInstanceTrendResponse DescribeIntegrationStatisticsInstanceTrend(Models\DescribeIntegrationStatisticsInstanceTrendRequest $req) DataInLong dashboard instance status statistical trend
 * @method Models\DescribeIntegrationStatisticsRecordsTrendResponse DescribeIntegrationStatisticsRecordsTrend(Models\DescribeIntegrationStatisticsRecordsTrendRequest $req) DataInLong Dashboard synchronization count trend
 * @method Models\DescribeIntegrationStatisticsTaskStatusResponse DescribeIntegrationStatisticsTaskStatus(Models\DescribeIntegrationStatisticsTaskStatusRequest $req) DataInLong Dashboard Task Status Distribution Statistics
 * @method Models\DescribeIntegrationStatisticsTaskStatusTrendResponse DescribeIntegrationStatisticsTaskStatusTrend(Models\DescribeIntegrationStatisticsTaskStatusTrendRequest $req) DataInLong Dashboard Task Status Statistical Trend
 * @method Models\DescribeIntegrationTaskResponse DescribeIntegrationTask(Models\DescribeIntegrationTaskRequest $req) Query integration tasks
 * @method Models\DescribeIntegrationTasksResponse DescribeIntegrationTasks(Models\DescribeIntegrationTasksRequest $req) Query Integration Task List
 * @method Models\DescribeIntegrationVersionNodesInfoResponse DescribeIntegrationVersionNodesInfo(Models\DescribeIntegrationVersionNodesInfoRequest $req) Query Integration Task Version Node Information
 * @method Models\DescribeOfflineTaskTokenResponse DescribeOfflineTaskToken(Models\DescribeOfflineTaskTokenRequest $req) Getting long connection Token for offline tasks
 * @method Models\DescribeOperateOpsTasksResponse DescribeOperateOpsTasks(Models\DescribeOperateOpsTasksRequest $req) Task Operation and Maintenance List Combined Condition Query
 * @method Models\DescribeOpsInstanceLogListResponse DescribeOpsInstanceLogList(Models\DescribeOpsInstanceLogListRequest $req) Instance Operation and Maintenance - Get Instance Log List
 * @method Models\DescribeOpsMakePlanInstancesResponse DescribeOpsMakePlanInstances(Models\DescribeOpsMakePlanInstancesRequest $req) Obtain the Supplementary Instance List based on the Supplementary Plan and Task.
 * @method Models\DescribeOpsMakePlanTasksResponse DescribeOpsMakePlanTasks(Models\DescribeOpsMakePlanTasksRequest $req) View Supplemental Plan Tasks
 * @method Models\DescribeOpsMakePlansResponse DescribeOpsMakePlans(Models\DescribeOpsMakePlansRequest $req) Paginated Query of Supplement Plan Based on Conditions
 * @method Models\DescribeOpsWorkflowsResponse DescribeOpsWorkflows(Models\DescribeOpsWorkflowsRequest $req) Querying User Production Workflow List
 * @method Models\DescribeOrganizationalFunctionsResponse DescribeOrganizationalFunctions(Models\DescribeOrganizationalFunctionsRequest $req) Query Full Functionality
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) Retrieving Project Information
 * @method Models\DescribeQualityScoreResponse DescribeQualityScore(Models\DescribeQualityScoreRequest $req) Quality Report - Quality Score
 * @method Models\DescribeQualityScoreTrendResponse DescribeQualityScoreTrend(Models\DescribeQualityScoreTrendRequest $req) Quality Report - Quality Score Periodic Trend
 * @method Models\DescribeRealTimeTaskInstanceNodeInfoResponse DescribeRealTimeTaskInstanceNodeInfo(Models\DescribeRealTimeTaskInstanceNodeInfoRequest $req) Query Real-time Task Instance Node Information
 * @method Models\DescribeRealTimeTaskMetricOverviewResponse DescribeRealTimeTaskMetricOverview(Models\DescribeRealTimeTaskMetricOverviewRequest $req) Real-time Task Running Metrics Overview
 * @method Models\DescribeRealTimeTaskSpeedResponse DescribeRealTimeTaskSpeed(Models\DescribeRealTimeTaskSpeedRequest $req) Real-time task synchronization speed trend
 * @method Models\DescribeReportTaskDetailResponse DescribeReportTaskDetail(Models\DescribeReportTaskDetailRequest $req) This API is used to query task details for reports.
 * @method Models\DescribeReportTaskListResponse DescribeReportTaskList(Models\DescribeReportTaskListRequest $req) This API is used to query the task submission list.
 * @method Models\DescribeResourceManagePathTreesResponse DescribeResourceManagePathTrees(Models\DescribeResourceManagePathTreesRequest $req) Retrieve resource management directory tree
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API is used to retrieve role list information.
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) Queries rule details
 * @method Models\DescribeRuleDimStatResponse DescribeRuleDimStat(Models\DescribeRuleDimStatRequest $req) Data Quality Overview Page Triggers Dimension Distribution Statistics Interface
 * @method Models\DescribeRuleExecDetailResponse DescribeRuleExecDetail(Models\DescribeRuleExecDetailRequest $req) Query Rule Execution Result Details
 * @method Models\DescribeRuleExecLogResponse DescribeRuleExecLog(Models\DescribeRuleExecLogRequest $req) Rule Execution Log Query
 * @method Models\DescribeRuleExecResultsResponse DescribeRuleExecResults(Models\DescribeRuleExecResultsRequest $req) Query Rule Execution Result List
 * @method Models\DescribeRuleExecStatResponse DescribeRuleExecStat(Models\DescribeRuleExecStatRequest $req) Data Quality Overview Page Rule Operation Interface
 * @method Models\DescribeRuleGroupResponse DescribeRuleGroup(Models\DescribeRuleGroupRequest $req) Query Rule Group Details Interface
 * @method Models\DescribeRuleGroupExecResultsByPageResponse DescribeRuleGroupExecResultsByPage(Models\DescribeRuleGroupExecResultsByPageRequest $req) Rule Group Execution Result Pagination Query Interface
 * @method Models\DescribeRuleGroupSubscriptionResponse DescribeRuleGroupSubscription(Models\DescribeRuleGroupSubscriptionRequest $req) Query Rule Group Subscription Information
 * @method Models\DescribeRuleGroupTableResponse DescribeRuleGroupTable(Models\DescribeRuleGroupTableRequest $req) Query Table Binding Execution Rule Group Information
 * @method Models\DescribeRuleGroupsByPageResponse DescribeRuleGroupsByPage(Models\DescribeRuleGroupsByPageRequest $req) [Filter Criteria]
{Table Name (TableName), supports fuzzy matching}       {Table Owner (TableOwnerName), supports fuzzy matching}      {Monitoring Methods (MonitorTypes), 1. Not Configured 2. Linked to Production Scheduling 3. Offline Periodic Inspection, supports multiple selections}  {Subscriber (ReceiverUin)}
[Required Fields]
{Data Source (DatasourceId)}
 * @method Models\DescribeRuleTemplateResponse DescribeRuleTemplate(Models\DescribeRuleTemplateRequest $req) Query Template Details
 * @method Models\DescribeRuleTemplatesResponse DescribeRuleTemplates(Models\DescribeRuleTemplatesRequest $req) Viewing Rule Template List
 * @method Models\DescribeRuleTemplatesByPageResponse DescribeRuleTemplatesByPage(Models\DescribeRuleTemplatesByPageRequest $req) [Filter Conditions] {Template Name (Name), supports fuzzy matching} {Template Type (type), 1.System Template 2.Custom Definition Template} {Quality Detection Dimensions (QualityDims), 1.Accuracy 2.Uniqueness 3.Integrity 4.Consistency 5.Timeliness 6.Validity} [Sorting Field] {Citation Sorting Type (CitationOrderType), sort by citation count ASC DESC}
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) Query Quality Rule List
 * @method Models\DescribeRulesByPageResponse DescribeRulesByPage(Models\DescribeRulesByPageRequest $req) Paginated Query of Quality Rules
 * @method Models\DescribeScheduleInstancesResponse DescribeScheduleInstances(Models\DescribeScheduleInstancesRequest $req) Get Instance List
 * @method Models\DescribeSchedulerInstanceStatusResponse DescribeSchedulerInstanceStatus(Models\DescribeSchedulerInstanceStatusRequest $req) Operation and Maintenance Dashboard-Instance Status Distribution
 * @method Models\DescribeSchedulerRunTimeInstanceCntByStatusResponse DescribeSchedulerRunTimeInstanceCntByStatus(Models\DescribeSchedulerRunTimeInstanceCntByStatusRequest $req) Operation and Maintenance Dashboard - Instance Running Duration Ranking
 * @method Models\DescribeSchedulerTaskCntByStatusResponse DescribeSchedulerTaskCntByStatus(Models\DescribeSchedulerTaskCntByStatusRequest $req) Task Status Statistics
 * @method Models\DescribeSchedulerTaskTypeCntResponse DescribeSchedulerTaskTypeCnt(Models\DescribeSchedulerTaskTypeCntRequest $req) Operation and Maintenance Dashboard - Task Status Distribution
 * @method Models\DescribeStatisticInstanceStatusTrendOpsResponse DescribeStatisticInstanceStatusTrendOps(Models\DescribeStatisticInstanceStatusTrendOpsRequest $req) Task Status Trend
 * @method Models\DescribeStreamTaskLogListResponse DescribeStreamTaskLogList(Models\DescribeStreamTaskLogListRequest $req) Query real-time task log list
 * @method Models\DescribeSuccessorOpsTaskInfosResponse DescribeSuccessorOpsTaskInfos(Models\DescribeSuccessorOpsTaskInfosRequest $req) Get Downstream Task Information
 * @method Models\DescribeTableBasicInfoResponse DescribeTableBasicInfo(Models\DescribeTableBasicInfoRequest $req) Metadata Model-Table Basic Information Query Interface
 * @method Models\DescribeTableInfoListResponse DescribeTableInfoList(Models\DescribeTableInfoListRequest $req) Retrieve Data Table Information
 * @method Models\DescribeTableLineageResponse DescribeTableLineage(Models\DescribeTableLineageRequest $req) List Table Lineage Information
 * @method Models\DescribeTableLineageInfoResponse DescribeTableLineageInfo(Models\DescribeTableLineageInfoRequest $req) List Table Lineage Information
 * @method Models\DescribeTableMetaResponse DescribeTableMeta(Models\DescribeTableMetaRequest $req) Querying Table Metadata Details
 * @method Models\DescribeTableMetasResponse DescribeTableMetas(Models\DescribeTableMetasRequest $req) Get Table Metadata List
 * @method Models\DescribeTableQualityDetailsResponse DescribeTableQualityDetails(Models\DescribeTableQualityDetailsRequest $req) Quality Report - Query Table Quality Details
 * @method Models\DescribeTableSchemaInfoResponse DescribeTableSchemaInfo(Models\DescribeTableSchemaInfoRequest $req) Retrieve Table Schema Information
 * @method Models\DescribeTableScoreTrendResponse DescribeTableScoreTrend(Models\DescribeTableScoreTrendRequest $req) Query Table Score Trend
 * @method Models\DescribeTaskAlarmRegulationsResponse DescribeTaskAlarmRegulations(Models\DescribeTaskAlarmRegulationsRequest $req) Query Task Alert Rule List
 * @method Models\DescribeTaskByCycleResponse DescribeTaskByCycle(Models\DescribeTaskByCycleRequest $req) Query all tasks by cycle type
 * @method Models\DescribeTaskByCycleReportResponse DescribeTaskByCycleReport(Models\DescribeTaskByCycleReportRequest $req) Task Status Cycle Growth Trend
 * @method Models\DescribeTaskByStatusReportResponse DescribeTaskByStatusReport(Models\DescribeTaskByStatusReportRequest $req) Task Status Trend
 * @method Models\DescribeTaskLockStatusResponse DescribeTaskLockStatus(Models\DescribeTaskLockStatusRequest $req) View Task Lock Status Information
 * @method Models\DescribeTaskRunHistoryResponse DescribeTaskRunHistory(Models\DescribeTaskRunHistoryRequest $req) Paging Query Task Execution History
 * @method Models\DescribeTaskScriptResponse DescribeTaskScript(Models\DescribeTaskScriptRequest $req) Query Task Script
 * @method Models\DescribeTemplateDimCountResponse DescribeTemplateDimCount(Models\DescribeTemplateDimCountRequest $req) Query rule template dimension distribution
 * @method Models\DescribeThirdTaskRunLogResponse DescribeThirdTaskRunLog(Models\DescribeThirdTaskRunLogRequest $req) Get third-party operation logs
 * @method Models\DescribeTopTableStatResponse DescribeTopTableStat(Models\DescribeTopTableStatRequest $req) Data Quality Overview Page Table Ranking Interface
 * @method Models\DescribeTrendStatResponse DescribeTrendStat(Models\DescribeTrendStatRequest $req) Data Quality Overview Page Trend Change Interface
 * @method Models\DescribeWorkflowCanvasInfoResponse DescribeWorkflowCanvasInfo(Models\DescribeWorkflowCanvasInfoRequest $req) Query Workflow Canvas
 * @method Models\DescribeWorkflowExecuteByIdResponse DescribeWorkflowExecuteById(Models\DescribeWorkflowExecuteByIdRequest $req) Query Workflow Canvas Run Start and End Time
 * @method Models\DescribeWorkflowInfoByIdResponse DescribeWorkflowInfoById(Models\DescribeWorkflowInfoByIdRequest $req) Query Workflow Details by Workflow ID
 * @method Models\DescribeWorkflowListByProjectIdResponse DescribeWorkflowListByProjectId(Models\DescribeWorkflowListByProjectIdRequest $req) Get all workflow lists under the project by Project ID
 * @method Models\DescribeWorkflowTaskCountResponse DescribeWorkflowTaskCount(Models\DescribeWorkflowTaskCountRequest $req) Query the number of workflow tasks
 * @method Models\DiagnoseProResponse DiagnosePro(Models\DiagnoseProRequest $req) Instance diagnosis for diagnosing instances in INITIAL, DEPENDENCE, ALLOCATED, LAUNCHED, EVENT_LISTENING, BEFORE_ASPECT, EXPIRED, FAILED states
 * @method Models\DryRunDIOfflineTaskResponse DryRunDIOfflineTask(Models\DryRunDIOfflineTaskRequest $req) Debug and Run Integration Task
 * @method Models\FindAllFolderResponse FindAllFolder(Models\FindAllFolderRequest $req) Orchestration Space Bulk Operation Page Find All Folders
 * @method Models\FreezeOpsTasksResponse FreezeOpsTasks(Models\FreezeOpsTasksRequest $req) Task Operation and Maintenance - Bulk Pause Tasks
 * @method Models\FreezeTasksByWorkflowIdsResponse FreezeTasksByWorkflowIds(Models\FreezeTasksByWorkflowIdsRequest $req) Pause All Tasks Under Workflow
 * @method Models\GenHiveTableDDLSqlResponse GenHiveTableDDLSql(Models\GenHiveTableDDLSqlRequest $req) Generate SQL for Creating Hive Table
 * @method Models\GetFileInfoResponse GetFileInfo(Models\GetFileInfoRequest $req) Development Space - Obtain data development script information
 * @method Models\GetInstanceLogResponse GetInstanceLog(Models\GetInstanceLogRequest $req) This API is used to obtain instance lists.
 * @method Models\GetIntegrationNodeColumnSchemaResponse GetIntegrationNodeColumnSchema(Models\GetIntegrationNodeColumnSchemaRequest $req) Extracting DataInLong Node Field Schema
 * @method Models\GetOfflineDIInstanceListResponse GetOfflineDIInstanceList(Models\GetOfflineDIInstanceListRequest $req) Get Offline Task Instance List (New)
 * @method Models\GetOfflineInstanceListResponse GetOfflineInstanceList(Models\GetOfflineInstanceListRequest $req) Obtain Offline Task Instances
 * @method Models\GetTaskInstanceResponse GetTaskInstance(Models\GetTaskInstanceRequest $req) This API is used to obtain instance lists.
 * @method Models\KillOpsMakePlanInstancesResponse KillOpsMakePlanInstances(Models\KillOpsMakePlanInstancesRequest $req) Batch Termination of Instances by Supplement Plan.
 * @method Models\KillScheduleInstancesResponse KillScheduleInstances(Models\KillScheduleInstancesRequest $req) Batch Termination of Instances
 * @method Models\ListInstancesResponse ListInstances(Models\ListInstancesRequest $req) This API is used to obtain instance lists.
 * @method Models\LockIntegrationTaskResponse LockIntegrationTask(Models\LockIntegrationTaskRequest $req) Lock Integration Task
 * @method Models\ModifyApproveStatusResponse ModifyApproveStatus(Models\ModifyApproveStatusRequest $req) Modify Approval Form Status
 * @method Models\ModifyDataSourceResponse ModifyDataSource(Models\ModifyDataSourceRequest $req) Modify Data Source
 * @method Models\ModifyDimensionWeightResponse ModifyDimensionWeight(Models\ModifyDimensionWeightRequest $req) Quality Report - Modify Dimension Permissions
 * @method Models\ModifyDsFolderResponse ModifyDsFolder(Models\ModifyDsFolderRequest $req) Data Development Module - Folder Update
 * @method Models\ModifyExecStrategyResponse ModifyExecStrategy(Models\ModifyExecStrategyRequest $req) Update Rule Group Execution Strategy
 * @method Models\ModifyIntegrationNodeResponse ModifyIntegrationNode(Models\ModifyIntegrationNodeRequest $req) Updating Integrated Nodes
 * @method Models\ModifyIntegrationTaskResponse ModifyIntegrationTask(Models\ModifyIntegrationTaskRequest $req) Update Integration Task
 * @method Models\ModifyMonitorStatusResponse ModifyMonitorStatus(Models\ModifyMonitorStatusRequest $req) Update Monitoring Status
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) Update Quality Rule Interface
 * @method Models\ModifyRuleGroupSubscriptionResponse ModifyRuleGroupSubscription(Models\ModifyRuleGroupSubscriptionRequest $req) Update Rule Group Subscription Information
 * @method Models\ModifyRuleTemplateResponse ModifyRuleTemplate(Models\ModifyRuleTemplateRequest $req) Edit Rule Template
 * @method Models\ModifyTaskAlarmRegularResponse ModifyTaskAlarmRegular(Models\ModifyTaskAlarmRegularRequest $req) Modify task alert rules
 * @method Models\ModifyTaskInfoResponse ModifyTaskInfo(Models\ModifyTaskInfoRequest $req) <p style="color:red;">[Note: This version is only available to a portion of allowlist customers in the Guangzhou Region]</p>
Update Task
 * @method Models\ModifyTaskLinksResponse ModifyTaskLinks(Models\ModifyTaskLinksRequest $req) <p style="color:red;">[Note: This version is only available to some whitelist customers in the Guangzhou zone]</p>.
Add parent task dependency. This API is deprecated. Use API ModifyTaskLinksDs.
 * @method Models\ModifyTaskLinksDsResponse ModifyTaskLinksDs(Models\ModifyTaskLinksDsRequest $req) This API is used to add parent task dependency.
 * @method Models\ModifyTaskNameResponse ModifyTaskName(Models\ModifyTaskNameRequest $req) Rename Task (Task Editing)
 * @method Models\ModifyTaskScriptResponse ModifyTaskScript(Models\ModifyTaskScriptRequest $req) <p style="color:red;">[Note: This version is only available to a portion of allowlist customers in the Guangzhou Region]</p>
Modify Task Script
 * @method Models\ModifyWorkflowInfoResponse ModifyWorkflowInfo(Models\ModifyWorkflowInfoRequest $req) This API is used to update workflow information. (deprecated). Use API UpdateWorkflowInfo.
 * @method Models\ModifyWorkflowScheduleResponse ModifyWorkflowSchedule(Models\ModifyWorkflowScheduleRequest $req) This API is used to update workflow scheduling. This API is deprecated. Use the RenewWorkflowSchedulerInfoDs API instead.
 * @method Models\MoveTasksToFolderResponse MoveTasksToFolder(Models\MoveTasksToFolderRequest $req) Orchestration Space - Workflow - Move Task to Workflow Folder
 * @method Models\RegisterDsEventResponse RegisterDsEvent(Models\RegisterDsEventRequest $req) This API is used to register an event.
 * @method Models\RegisterEventResponse RegisterEvent(Models\RegisterEventRequest $req) <p style="color:red;">[Note: This version is only available for partial allowlisted customers in the Guangzhou region]</p>.
This API is used to register events. This API is deprecated. Use API RegisterDsEvent.
 * @method Models\RegisterEventListenerResponse RegisterEventListener(Models\RegisterEventListenerRequest $req) <p style="color:red;">[Note: This version is only available to a portion of allowlist customers in the Guangzhou Region]</p>
Register Event Listener
 * @method Models\RemoveWorkflowDsResponse RemoveWorkflowDs(Models\RemoveWorkflowDsRequest $req) Delete orchestration space workflow
 * @method Models\RenewWorkflowOwnerDsResponse RenewWorkflowOwnerDs(Models\RenewWorkflowOwnerDsRequest $req) This API is used to batch update the task owner under a workflow.
 * @method Models\RenewWorkflowSchedulerInfoDsResponse RenewWorkflowSchedulerInfoDs(Models\RenewWorkflowSchedulerInfoDsRequest $req) This API is used to update task scheduling information under a workflow.
 * @method Models\ResumeIntegrationTaskResponse ResumeIntegrationTask(Models\ResumeIntegrationTaskRequest $req) Continue Integration Task
 * @method Models\RobAndLockIntegrationTaskResponse RobAndLockIntegrationTask(Models\RobAndLockIntegrationTaskRequest $req) Preemptive locking of integration tasks
 * @method Models\RunForceSucScheduleInstancesResponse RunForceSucScheduleInstances(Models\RunForceSucScheduleInstancesRequest $req) Instance Batch Successfully Configured
 * @method Models\RunRerunScheduleInstancesResponse RunRerunScheduleInstances(Models\RunRerunScheduleInstancesRequest $req) Instance Batch Rerun
 * @method Models\RunTasksByMultiWorkflowResponse RunTasksByMultiWorkflow(Models\RunTasksByMultiWorkflowRequest $req) Batch startup of workflows
 * @method Models\SaveCustomFunctionResponse SaveCustomFunction(Models\SaveCustomFunctionRequest $req) Save User-Defined Function
 * @method Models\SetTaskAlarmNewResponse SetTaskAlarmNew(Models\SetTaskAlarmNewRequest $req) <p style="color:red;">[Note: This version is only available to a portion of allowlist customers in the Guangzhou Region]</p>
Set Task Alerts, Create/Update Alert Information (Latest)
 * @method Models\StartIntegrationTaskResponse StartIntegrationTask(Models\StartIntegrationTaskRequest $req) Initiate Integration Task
 * @method Models\StopIntegrationTaskResponse StopIntegrationTask(Models\StopIntegrationTaskRequest $req) Stop Integration Task
 * @method Models\SubmitCustomFunctionResponse SubmitCustomFunction(Models\SubmitCustomFunctionRequest $req) Submit Custom Definition Function
 * @method Models\SubmitSqlTaskResponse SubmitSqlTask(Models\SubmitSqlTaskRequest $req) Ad Hoc Analysis - Submit SQL Task
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) <p style="color:red;">[Note: This version is only available for partial whitelist customers in the Guangzhou zone]</p>.
This API is used to submit tasks. This API is deprecated. Use the CreateTaskVersionDs API.
 * @method Models\SubmitTaskTestRunResponse SubmitTaskTestRun(Models\SubmitTaskTestRunRequest $req) No
 * @method Models\SubmitWorkflowResponse SubmitWorkflow(Models\SubmitWorkflowRequest $req) Submit a workflow. This API is deprecated. Use the BatchCreateTaskVersionAsync API.
 * @method Models\SuspendIntegrationTaskResponse SuspendIntegrationTask(Models\SuspendIntegrationTaskRequest $req) Pause Integration Task
 * @method Models\TaskLogResponse TaskLog(Models\TaskLogRequest $req) Query Inlong Manager Logs
 * @method Models\TriggerDsEventResponse TriggerDsEvent(Models\TriggerDsEventRequest $req) Event Management - Triggered Events
 * @method Models\TriggerEventResponse TriggerEvent(Models\TriggerEventRequest $req) <p style="color:red;">[Note: This version is only available to some allowlisted customers in the Guangzhou region]</p>.
This API is used to trigger event. This API is deprecated. Use API TriggerDsEvent.
 * @method Models\UnlockIntegrationTaskResponse UnlockIntegrationTask(Models\UnlockIntegrationTaskRequest $req) Unlock Integration Task
 * @method Models\UpdateProjectUserRoleResponse UpdateProjectUserRole(Models\UpdateProjectUserRoleRequest $req) This API is used to modify user roles in a project.
 * @method Models\UpdateWorkflowInfoResponse UpdateWorkflowInfo(Models\UpdateWorkflowInfoRequest $req) This API is developed in ds.
This API is used to update a workflow, including its basic information and workflow parameters.
 * @method Models\UpdateWorkflowOwnerResponse UpdateWorkflowOwner(Models\UpdateWorkflowOwnerRequest $req) This API is used to modify the workflow owner. Deprecated. Use the RenewWorkflowOwnerDs API.
 * @method Models\UploadContentResponse UploadContent(Models\UploadContentRequest $req) Save Task Information
 */

class WedataClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wedata.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wedata";

    /**
     * @var string
     */
    protected $version = "2021-08-20";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("wedata")."\\"."V20210820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
