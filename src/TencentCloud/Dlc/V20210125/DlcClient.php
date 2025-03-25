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

namespace TencentCloud\Dlc\V20210125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dlc\V20210125\Models as Models;

/**
 * @method Models\AddUsersToWorkGroupResponse AddUsersToWorkGroup(Models\AddUsersToWorkGroupRequest $req) This API is used to add users to working groups.
 * @method Models\AlterDMSDatabaseResponse AlterDMSDatabase(Models\AlterDMSDatabaseRequest $req) This API is used to update databases in the DMS metadata module.
 * @method Models\AttachUserPolicyResponse AttachUserPolicy(Models\AttachUserPolicyRequest $req) This API is used to bind the authentication policy to the user.
 * @method Models\AttachWorkGroupPolicyResponse AttachWorkGroupPolicy(Models\AttachWorkGroupPolicyRequest $req) This API is used to bind an authentication policy to a working group.
 * @method Models\BindWorkGroupsToUserResponse BindWorkGroupsToUser(Models\BindWorkGroupsToUserRequest $req) This API is used to bind working groups to users.
 * @method Models\CancelSparkSessionBatchSQLResponse CancelSparkSessionBatchSQL(Models\CancelSparkSessionBatchSQLRequest $req) This API is used to cancel a Spark SQL batch task.
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) This API is used to cancel a task.
 * @method Models\CheckDataEngineConfigPairsValidityResponse CheckDataEngineConfigPairsValidity(Models\CheckDataEngineConfigPairsValidityRequest $req) This API is used to check the validity of the engine's user-defined parameters.
 * @method Models\CheckDataEngineImageCanBeRollbackResponse CheckDataEngineImageCanBeRollback(Models\CheckDataEngineImageCanBeRollbackRequest $req) This API is used to check whether the cluster can be rolled back.
 * @method Models\CheckDataEngineImageCanBeUpgradeResponse CheckDataEngineImageCanBeUpgrade(Models\CheckDataEngineImageCanBeUpgradeRequest $req) This API is used to check whether the cluster image can be upgraded.
 * @method Models\CheckGrantedPermissionResponse CheckGrantedPermission(Models\CheckGrantedPermissionRequest $req) This API is used to check the permission status.
 * @method Models\CopyDLCTableResponse CopyDLCTable(Models\CopyDLCTableRequest $req) This API is used to copy a table.
 * @method Models\CreateCHDFSBindingProductResponse CreateCHDFSBindingProduct(Models\CreateCHDFSBindingProductRequest $req) This API is used to create metadata acceleration buckets and the binding relationship between products.
 * @method Models\CreateDLCTableResponse CreateDLCTable(Models\CreateDLCTableRequest $req) This API is used to create a table.
 * @method Models\CreateDMSDatabaseResponse CreateDMSDatabase(Models\CreateDMSDatabaseRequest $req) This API is used to create databases in the DMS metadata module.
 * @method Models\CreateDataEngineResponse CreateDataEngine(Models\CreateDataEngineRequest $req) This API is used to create a data engine.
 * @method Models\CreateInternalTableResponse CreateInternalTable(Models\CreateInternalTableRequest $req) This API is used to create a managed internal table. It has been disused.
 * @method Models\CreateResultDownloadResponse CreateResultDownload(Models\CreateResultDownloadRequest $req) This API is used to create a query result download task.
 * @method Models\CreateSparkAppResponse CreateSparkApp(Models\CreateSparkAppRequest $req) This API is used to create a Spark job.
 * @method Models\CreateSparkAppTaskResponse CreateSparkAppTask(Models\CreateSparkAppTaskRequest $req) This API is used to start a Spark job.
 * @method Models\CreateSparkSessionBatchSQLResponse CreateSparkSessionBatchSQL(Models\CreateSparkSessionBatchSQLRequest $req) This API is used to submit a Spark SQL batch task to the job engine.
 * @method Models\CreateStoreLocationResponse CreateStoreLocation(Models\CreateStoreLocationRequest $req) This API is used to add or overwrite the storage location of results.
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create and execute a SQL task. (`CreateTasks` is recommended.)
 * @method Models\CreateTasksResponse CreateTasks(Models\CreateTasksRequest $req) This API is used to create and execute SQL tasks in batches.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create users.
 * @method Models\CreateWorkGroupResponse CreateWorkGroup(Models\CreateWorkGroupRequest $req) This API is used to create working groups.
 * @method Models\DeleteCHDFSBindingProductResponse DeleteCHDFSBindingProduct(Models\DeleteCHDFSBindingProductRequest $req) This API is used to delete the binding relationship between metadata acceleration buckets and products.
 * @method Models\DeleteDataEngineResponse DeleteDataEngine(Models\DeleteDataEngineRequest $req) This API is used to delete the data engine.
 * @method Models\DeleteSparkAppResponse DeleteSparkApp(Models\DeleteSparkAppRequest $req) This API is used to delete a Spark job.
 * @method Models\DeleteThirdPartyAccessUserResponse DeleteThirdPartyAccessUser(Models\DeleteThirdPartyAccessUserRequest $req) This API is used to remove visits through the third-party platform.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete users.
 * @method Models\DeleteUsersFromWorkGroupResponse DeleteUsersFromWorkGroup(Models\DeleteUsersFromWorkGroupRequest $req) This API is used to delete users from working groups.
 * @method Models\DeleteWorkGroupResponse DeleteWorkGroup(Models\DeleteWorkGroupRequest $req) This API is used to delete working groups.
 * @method Models\DescribeAdvancedStoreLocationResponse DescribeAdvancedStoreLocation(Models\DescribeAdvancedStoreLocationRequest $req) This API is used to query the advanced settings of the SQL query interface.
 * @method Models\DescribeDLCCatalogAccessResponse DescribeDLCCatalogAccess(Models\DescribeDLCCatalogAccessRequest $req) This API is used to query the DLC Catalog authorization list.
 * @method Models\DescribeDLCTableResponse DescribeDLCTable(Models\DescribeDLCTableRequest $req) This API is used to obtain the table.
 * @method Models\DescribeDLCTableListResponse DescribeDLCTableList(Models\DescribeDLCTableListRequest $req) This API is used to obtain the list of tables.
 * @method Models\DescribeDMSDatabaseResponse DescribeDMSDatabase(Models\DescribeDMSDatabaseRequest $req) This API is used to obtain databases in the DMS metadata module.
 * @method Models\DescribeDMSDatabaseListResponse DescribeDMSDatabaseList(Models\DescribeDMSDatabaseListRequest $req) This API is used to obtain the list of databases.
 * @method Models\DescribeDataEngineResponse DescribeDataEngine(Models\DescribeDataEngineRequest $req) This API is used to obtain detailed data engine information based on names.
 * @method Models\DescribeDataEngineImageVersionsResponse DescribeDataEngineImageVersions(Models\DescribeDataEngineImageVersionsRequest $req) This API is used to obtain the major version image list of exclusive clusters.
 * @method Models\DescribeDataEnginePythonSparkImagesResponse DescribeDataEnginePythonSparkImages(Models\DescribeDataEnginePythonSparkImagesRequest $req) This API is used to obtain the PYSPARK image list.
 * @method Models\DescribeDataEnginesScaleDetailResponse DescribeDataEnginesScaleDetail(Models\DescribeDataEnginesScaleDetailRequest $req) This API is used to query engine specification details.
 * @method Models\DescribeEngineUsageInfoResponse DescribeEngineUsageInfo(Models\DescribeEngineUsageInfoRequest $req) This API is used to query the resource usage of a data engine based on its ID.
 * @method Models\DescribeForbiddenTableProResponse DescribeForbiddenTablePro(Models\DescribeForbiddenTableProRequest $req) This API is used to get the list of disabled table attributes (new).
 * @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) This API is used to obtain the job information.
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) This API is used to obtain the list of job information.
 * @method Models\DescribeLakeFsDirSummaryResponse DescribeLakeFsDirSummary(Models\DescribeLakeFsDirSummaryRequest $req) This API is used to query the summary of a specified directory in a managed storage.
 * @method Models\DescribeLakeFsInfoResponse DescribeLakeFsInfo(Models\DescribeLakeFsInfoRequest $req) This API is used to query managed storage information.
 * @method Models\DescribeOtherCHDFSBindingListResponse DescribeOtherCHDFSBindingList(Models\DescribeOtherCHDFSBindingListRequest $req) This API is used to query the list of metadata acceleration buckets bound to other products.
 * @method Models\DescribeQueryResponse DescribeQuery(Models\DescribeQueryRequest $req) This API is used to obtain the query results.
 * @method Models\DescribeResultDownloadResponse DescribeResultDownload(Models\DescribeResultDownloadRequest $req) This API is used to get a query result download task.
 * @method Models\DescribeSparkAppJobResponse DescribeSparkAppJob(Models\DescribeSparkAppJobRequest $req) u200cThis API is used to query the information of a Spark job.
 * @method Models\DescribeSparkAppJobsResponse DescribeSparkAppJobs(Models\DescribeSparkAppJobsRequest $req) This API is used to query the list of Spark jobs.
 * @method Models\DescribeSparkAppTasksResponse DescribeSparkAppTasks(Models\DescribeSparkAppTasksRequest $req) This API is used to query the list of running task instances of a Spark job.
 * @method Models\DescribeSparkSessionBatchSqlLogResponse DescribeSparkSessionBatchSqlLog(Models\DescribeSparkSessionBatchSqlLogRequest $req) This API is used to query Spark SQL batch task logs.
 * @method Models\DescribeStoreLocationResponse DescribeStoreLocation(Models\DescribeStoreLocationRequest $req) This API is used to query the storage location of calculation results.
 * @method Models\DescribeSubUserAccessPolicyResponse DescribeSubUserAccessPolicy(Models\DescribeSubUserAccessPolicyRequest $req) This API is used to query the sub-user's visiting policy for users accessing through the third-party platform.
 * @method Models\DescribeTablesNameResponse DescribeTablesName(Models\DescribeTablesNameRequest $req) This API is used to query the data table name list.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the result of a task.
 * @method Models\DescribeTaskStatisticsResponse DescribeTaskStatistics(Models\DescribeTaskStatisticsRequest $req) This API is used to describe the information on task statistics.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API is used to query the list of tasks.
 * @method Models\DescribeThirdPartyAccessUserResponse DescribeThirdPartyAccessUser(Models\DescribeThirdPartyAccessUserRequest $req) This API is used to query the information of users visiting through the third-party platform.
 * @method Models\DescribeUpdatableDataEnginesResponse DescribeUpdatableDataEngines(Models\DescribeUpdatableDataEnginesRequest $req) This API is used to query the list of engines that are able to upgrade their configuration.
 * @method Models\DescribeUserDataEngineConfigResponse DescribeUserDataEngineConfig(Models\DescribeUserDataEngineConfigRequest $req) This API is used to query user-defined engine parameters.
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) This API is used to get detailed user information.
 * @method Models\DescribeUserRolesResponse DescribeUserRoles(Models\DescribeUserRolesRequest $req) This API is used to enumerate user roles.
 * @method Models\DescribeUserTypeResponse DescribeUserType(Models\DescribeUserTypeRequest $req) This API is used to get the types of users.
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) This API is used to obtain the user list.
 * @method Models\DescribeWorkGroupInfoResponse DescribeWorkGroupInfo(Models\DescribeWorkGroupInfoRequest $req) This API is used to get detailed information about working groups.
 * @method Models\DescribeWorkGroupsResponse DescribeWorkGroups(Models\DescribeWorkGroupsRequest $req) This API is used to get a list of working groups.
 * @method Models\DetachUserPolicyResponse DetachUserPolicy(Models\DetachUserPolicyRequest $req) This API is used to unbind the authentication policy from the user.
 * @method Models\DetachWorkGroupPolicyResponse DetachWorkGroupPolicy(Models\DetachWorkGroupPolicyRequest $req) This API is used to unbind the authentication policy from the working group.
 * @method Models\DropDLCTableResponse DropDLCTable(Models\DropDLCTableRequest $req) This API is used to delete the table.
 * @method Models\DropDMSDatabaseResponse DropDMSDatabase(Models\DropDMSDatabaseRequest $req) This API is used to delete databases in the DMS metadata module.
 * @method Models\DropDMSTableResponse DropDMSTable(Models\DropDMSTableRequest $req) This API is used to delete tables in the DMS metadata module.
 * @method Models\GenerateCreateMangedTableSqlResponse GenerateCreateMangedTableSql(Models\GenerateCreateMangedTableSqlRequest $req) This API is used to generate SQL statements for creating a managed table.
 * @method Models\GetOptimizerPolicyResponse GetOptimizerPolicy(Models\GetOptimizerPolicyRequest $req) GetOptimizerPolicy
 * @method Models\GrantDLCCatalogAccessResponse GrantDLCCatalogAccess(Models\GrantDLCCatalogAccessRequest $req) This API is used to grant permissions for visiting DLC Catalog.
 * @method Models\ModifyAdvancedStoreLocationResponse ModifyAdvancedStoreLocation(Models\ModifyAdvancedStoreLocationRequest $req) This API is used to modify the advanced settings of the SQL query interface.
 * @method Models\ModifyDataEngineDescriptionResponse ModifyDataEngineDescription(Models\ModifyDataEngineDescriptionRequest $req) This API is used to modify the engine's description.
 * @method Models\ModifyGovernEventRuleResponse ModifyGovernEventRule(Models\ModifyGovernEventRuleRequest $req) This API is used to change data governance event thresholds.
 * @method Models\ModifySparkAppResponse ModifySparkApp(Models\ModifySparkAppRequest $req) This API is used to update a Spark job.
 * @method Models\ModifySparkAppBatchResponse ModifySparkAppBatch(Models\ModifySparkAppBatchRequest $req) This API is used to modify Spark job parameters in batches.
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) This API is used to modify user information.
 * @method Models\ModifyUserTypeResponse ModifyUserType(Models\ModifyUserTypeRequest $req) This API is used to modify the types of users. Only users who are also administrators can call this API to conduct the operation.
 * @method Models\ModifyWorkGroupResponse ModifyWorkGroup(Models\ModifyWorkGroupRequest $req) This API is used to modify working group information.
 * @method Models\QueryResultResponse QueryResult(Models\QueryResultRequest $req) This API is used to query the result of obtaining tasks.
 * @method Models\QueryTaskCostDetailResponse QueryTaskCostDetail(Models\QueryTaskCostDetailRequest $req) This API is used to query task consumption details.
 * @method Models\RegisterThirdPartyAccessUserResponse RegisterThirdPartyAccessUser(Models\RegisterThirdPartyAccessUserRequest $req) This API is used to enable visits to the third-party platform.
 * @method Models\RenewDataEngineResponse RenewDataEngine(Models\RenewDataEngineRequest $req) This API is used to renew the data engine.
 * @method Models\RestartDataEngineResponse RestartDataEngine(Models\RestartDataEngineRequest $req) This API is used to restart engines.
 * @method Models\RevokeDLCCatalogAccessResponse RevokeDLCCatalogAccess(Models\RevokeDLCCatalogAccessRequest $req) This API is used to revoke permissions for visiting DLC Catalog.
 * @method Models\RollbackDataEngineImageResponse RollbackDataEngineImage(Models\RollbackDataEngineImageRequest $req) This API is used to roll back the versions of the engine image.
 * @method Models\SuspendResumeDataEngineResponse SuspendResumeDataEngine(Models\SuspendResumeDataEngineRequest $req) This API is used to suspend or start a data engine.
 * @method Models\SwitchDataEngineResponse SwitchDataEngine(Models\SwitchDataEngineRequest $req) This API is used to switch between the primary and standby clusters.
 * @method Models\SwitchDataEngineImageResponse SwitchDataEngineImage(Models\SwitchDataEngineImageRequest $req) This API is used to switch the versions of the engine image.
 * @method Models\UnbindWorkGroupsFromUserResponse UnbindWorkGroupsFromUser(Models\UnbindWorkGroupsFromUserRequest $req) This API is used to unbind a user group from a user.
 * @method Models\UpdateDataEngineResponse UpdateDataEngine(Models\UpdateDataEngineRequest $req) This API is used to upgrade data engine configuration.
 * @method Models\UpdateDataEngineConfigResponse UpdateDataEngineConfig(Models\UpdateDataEngineConfigRequest $req) This API is used to trigger the modification of the engine configuration by the user through a certain operation.
 * @method Models\UpdateRowFilterResponse UpdateRowFilter(Models\UpdateRowFilterRequest $req) This API is used to update row filters. Please note that it updates filters only but not catalogs, databases, or tables.
 * @method Models\UpdateUserDataEngineConfigResponse UpdateUserDataEngineConfig(Models\UpdateUserDataEngineConfigRequest $req) This API is used to modify the custom configuration of the user's engine.
 * @method Models\UpgradeDataEngineImageResponse UpgradeDataEngineImage(Models\UpgradeDataEngineImageRequest $req) This API is used to upgrade the engine image.
 */

class DlcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dlc.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dlc";

    /**
     * @var string
     */
    protected $version = "2021-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("dlc")."\\"."V20210125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
