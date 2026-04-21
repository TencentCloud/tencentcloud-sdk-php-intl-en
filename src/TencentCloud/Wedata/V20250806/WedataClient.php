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

namespace TencentCloud\Wedata\V20250806;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wedata\V20250806\Models as Models;

/**
 * @method Models\AddCalcEnginesToProjectResponse AddCalcEnginesToProject(Models\AddCalcEnginesToProjectRequest $req) Associate a project cluster.
 * @method Models\AssociateResourceGroupToProjectResponse AssociateResourceGroupToProject(Models\AssociateResourceGroupToProjectRequest $req) This API is used to bind the designated execution resource group to the project.
 * @method Models\AuthorizeDataSourceResponse AuthorizeDataSource(Models\AuthorizeDataSourceRequest $req) Authorize a data source.
 * @method Models\AuthorizePrivilegesResponse AuthorizePrivileges(Models\AuthorizePrivilegesRequest $req) Authorization in Catalog mode.
 * @method Models\CreateCodeFileResponse CreateCodeFile(Models\CreateCodeFileRequest $req) This API is used to create a code file.
 * @method Models\CreateCodeFolderResponse CreateCodeFolder(Models\CreateCodeFolderRequest $req) This API is used to create a code folder.
 * @method Models\CreateCodePermissionsResponse CreateCodePermissions(Models\CreateCodePermissionsRequest $req) Configure CodeStudio entity permission.
 * @method Models\CreateDataBackfillPlanResponse CreateDataBackfillPlan(Models\CreateDataBackfillPlanRequest $req) This API is used to create a data backfill plan.
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) This API is used to create a data source in the designated project.
 * @method Models\CreateOpsAlarmRuleResponse CreateOpsAlarmRule(Models\CreateOpsAlarmRuleRequest $req) This API is used to set alarm rules.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) Create a project with cluster information upon creation.
 * @method Models\CreateProjectMemberResponse CreateProjectMember(Models\CreateProjectMemberRequest $req) Add project user role.
 * @method Models\CreateResourceFileResponse CreateResourceFile(Models\CreateResourceFileRequest $req) This API is used to create a resource file.
 * @method Models\CreateResourceFolderResponse CreateResourceFolder(Models\CreateResourceFolderRequest $req) This API is used to create a resource file folder.
 * @method Models\CreateResourceGroupResponse CreateResourceGroup(Models\CreateResourceGroupRequest $req) This API is used to purchase resources.
 * @method Models\CreateSQLFolderResponse CreateSQLFolder(Models\CreateSQLFolderRequest $req) This API is used to create an SQL folder
 * @method Models\CreateSQLScriptResponse CreateSQLScript(Models\CreateSQLScriptRequest $req) This API is used to add an SQL script.
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create a task.
 * @method Models\CreateTaskFolderResponse CreateTaskFolder(Models\CreateTaskFolderRequest $req) Create a folder.
 * @method Models\CreateTriggerTaskResponse CreateTriggerTask(Models\CreateTriggerTaskRequest $req) This API is used to create a task.
 * @method Models\CreateTriggerWorkflowResponse CreateTriggerWorkflow(Models\CreateTriggerWorkflowRequest $req) create workflow.
 * @method Models\CreateTriggerWorkflowRunResponse CreateTriggerWorkflowRun(Models\CreateTriggerWorkflowRunRequest $req) Run workflow under workflow scheduling model.
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) This API is used to create workflow.
 * @method Models\CreateWorkflowFolderResponse CreateWorkflowFolder(Models\CreateWorkflowFolderRequest $req) This API is used to create a workflow folder.
 * @method Models\CreateWorkflowPermissionsResponse CreateWorkflowPermissions(Models\CreateWorkflowPermissionsRequest $req) This API is used to configure data development permissions.
 * @method Models\DeleteCodeFileResponse DeleteCodeFile(Models\DeleteCodeFileRequest $req) This API is used to delete a code file.
 * @method Models\DeleteCodeFolderResponse DeleteCodeFolder(Models\DeleteCodeFolderRequest $req) This API is used to delete folders in data exploration.
 * @method Models\DeleteCodePermissionsResponse DeleteCodePermissions(Models\DeleteCodePermissionsRequest $req) Delete CodeStudio entity permission.
 * @method Models\DeleteDataBackfillPlanAsyncResponse DeleteDataBackfillPlanAsync(Models\DeleteDataBackfillPlanAsyncRequest $req) Delete a replenishment plan.
 * @method Models\DeleteDataSourceResponse DeleteDataSource(Models\DeleteDataSourceRequest $req) This API is used to delete a data source.
 * @method Models\DeleteLineageResponse DeleteLineage(Models\DeleteLineageRequest $req) RegisterLineage
 * @method Models\DeleteOpsAlarmRuleResponse DeleteOpsAlarmRule(Models\DeleteOpsAlarmRuleRequest $req) Deletes alarm rules
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) This API is used to delete a project.
 * @method Models\DeleteProjectMemberResponse DeleteProjectMember(Models\DeleteProjectMemberRequest $req) This API is used to delete project users.
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) This API is used to delete a resource file.
 * @method Models\DeleteResourceFolderResponse DeleteResourceFolder(Models\DeleteResourceFolderRequest $req) This API is used to delete a resource folder.
 * @method Models\DeleteResourceGroupResponse DeleteResourceGroup(Models\DeleteResourceGroupRequest $req) This API is used to destroy resources.
 * @method Models\DeleteSQLFolderResponse DeleteSQLFolder(Models\DeleteSQLFolderRequest $req) This API is used to delete a SQL folder.
 * @method Models\DeleteSQLScriptResponse DeleteSQLScript(Models\DeleteSQLScriptRequest $req) This API is used to delete an SQL script.
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) This API is used to delete an orchestration space task.
 * @method Models\DeleteTaskFolderResponse DeleteTaskFolder(Models\DeleteTaskFolderRequest $req) Delete a data development task folder.
 * @method Models\DeleteTriggerTaskResponse DeleteTriggerTask(Models\DeleteTriggerTaskRequest $req) Delete a workflow scheduling task.
 * @method Models\DeleteTriggerWorkflowResponse DeleteTriggerWorkflow(Models\DeleteTriggerWorkflowRequest $req) Deletes a workflow
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) Deletes a workflow
 * @method Models\DeleteWorkflowFolderResponse DeleteWorkflowFolder(Models\DeleteWorkflowFolderRequest $req) This API is used to delete a data development folder
 * @method Models\DeleteWorkflowPermissionsResponse DeleteWorkflowPermissions(Models\DeleteWorkflowPermissionsRequest $req) This API is used to delete workflow folder permissions.
 * @method Models\DescribeDataSourceAuthorityResponse DescribeDataSourceAuthority(Models\DescribeDataSourceAuthorityRequest $req) View Data Source Permission.
 * @method Models\DisableProjectResponse DisableProject(Models\DisableProjectRequest $req) Disable a project.
 * @method Models\DissociateResourceGroupFromProjectResponse DissociateResourceGroupFromProject(Models\DissociateResourceGroupFromProjectRequest $req) This API is used to unbind the designated execution resource group from the project.
 * @method Models\EnableProjectResponse EnableProject(Models\EnableProjectRequest $req) Enable a project.
 * @method Models\GetAlarmMessageResponse GetAlarmMessage(Models\GetAlarmMessageRequest $req) This API is used to query alert information details.
 * @method Models\GetCodeFileResponse GetCodeFile(Models\GetCodeFileRequest $req) This API is used to view code file details.
 * @method Models\GetCodeFolderResponse GetCodeFolder(Models\GetCodeFolderRequest $req) Retrieve sql folder details.
 * @method Models\GetDataBackfillPlanResponse GetDataBackfillPlan(Models\GetDataBackfillPlanRequest $req) Retrieve supplementary plan details.
 * @method Models\GetDataSourceResponse GetDataSource(Models\GetDataSourceRequest $req) This API is used to view detailed information of the specified data source.
 * @method Models\GetDataSourceRelatedTasksResponse GetDataSourceRelatedTasks(Models\GetDataSourceRelatedTasksRequest $req) Query the associated task details of a data source.
 * @method Models\GetMyCodeMaxPermissionResponse GetMyCodeMaxPermission(Models\GetMyCodeMaxPermissionRequest $req) View the current user's maximum permission scope for the CodeStudio entity.
 * @method Models\GetMyWorkflowMaxPermissionResponse GetMyWorkflowMaxPermission(Models\GetMyWorkflowMaxPermissionRequest $req) Check the current user's maximum permission scope for the workflow folder recursively.
 * @method Models\GetOpsAlarmRuleResponse GetOpsAlarmRule(Models\GetOpsAlarmRuleRequest $req) This API is used to query alert rule information based on alarm rule id or name.
 * @method Models\GetOpsAsyncJobResponse GetOpsAsyncJob(Models\GetOpsAsyncJobRequest $req) This API is used to query async operation details in Ops center.
 * @method Models\GetOpsTaskResponse GetOpsTask(Models\GetOpsTaskRequest $req) Obtaining Task Details
 * @method Models\GetOpsTaskCodeResponse GetOpsTaskCode(Models\GetOpsTaskCodeRequest $req) This API is used to retrieve task code.
 * @method Models\GetOpsTriggerWorkflowResponse GetOpsTriggerWorkflow(Models\GetOpsTriggerWorkflowRequest $req) Query workflow task details.
 * @method Models\GetOpsWorkflowResponse GetOpsWorkflow(Models\GetOpsWorkflowRequest $req) This API is used to obtain workflow scheduling details based on the workflow id.
 * @method Models\GetProjectResponse GetProject(Models\GetProjectRequest $req) This API is used to get project information.
 * @method Models\GetResourceFileResponse GetResourceFile(Models\GetResourceFileRequest $req) This API is used to obtain resource file details.
 * @method Models\GetResourceFolderResponse GetResourceFolder(Models\GetResourceFolderRequest $req) Query a resource file folder details.
 * @method Models\GetResourceGroupMetricsResponse GetResourceGroupMetrics(Models\GetResourceGroupMetricsRequest $req) This API is used to view specified execution resource group monitoring metrics.
 * @method Models\GetSQLFolderResponse GetSQLFolder(Models\GetSQLFolderRequest $req) Retrieve sql folder details.
 * @method Models\GetSQLScriptResponse GetSQLScript(Models\GetSQLScriptRequest $req) This API is used to query script details.
 * @method Models\GetTableResponse GetTable(Models\GetTableRequest $req) Query table details.
 * @method Models\GetTableColumnsResponse GetTableColumns(Models\GetTableColumnsRequest $req) This API is used to obtain the list of all fields in a table.
 * @method Models\GetTaskResponse GetTask(Models\GetTaskRequest $req) This API is used to retrieve task details.
 * @method Models\GetTaskCodeResponse GetTaskCode(Models\GetTaskCodeRequest $req) This API is used to obtain task code.
 * @method Models\GetTaskFolderResponse GetTaskFolder(Models\GetTaskFolderRequest $req) Query Task Folder Details.
 * @method Models\GetTaskInstanceResponse GetTaskInstance(Models\GetTaskInstanceRequest $req) This API is used to query the details of a scheduling instance.
 * @method Models\GetTaskInstanceLogResponse GetTaskInstanceLog(Models\GetTaskInstanceLogRequest $req) This API is used to obtain instance lists.
 * @method Models\GetTaskVersionResponse GetTaskVersion(Models\GetTaskVersionRequest $req) This API is used to list task versions.
 * @method Models\GetTriggerTaskResponse GetTriggerTask(Models\GetTriggerTaskRequest $req) This API is used to retrieve task details.
 * @method Models\GetTriggerTaskCodeResponse GetTriggerTaskCode(Models\GetTriggerTaskCodeRequest $req) Retrieve workflow scheduling task code.
 * @method Models\GetTriggerTaskRunResponse GetTriggerTaskRun(Models\GetTriggerTaskRunRequest $req) Query task execution details.
 * @method Models\GetTriggerTaskVersionResponse GetTriggerTaskVersion(Models\GetTriggerTaskVersionRequest $req) Get task version list.
 * @method Models\GetTriggerWorkflowResponse GetTriggerWorkflow(Models\GetTriggerWorkflowRequest $req) Retrieve workflow information.
 * @method Models\GetTriggerWorkflowRunResponse GetTriggerWorkflowRun(Models\GetTriggerWorkflowRunRequest $req) Query workflow task details.
 * @method Models\GetWorkflowResponse GetWorkflow(Models\GetWorkflowRequest $req) This API is used to retrieve workflow information.
 * @method Models\GetWorkflowFolderResponse GetWorkflowFolder(Models\GetWorkflowFolderRequest $req) Query folder details.
 * @method Models\GrantMemberProjectRoleResponse GrantMemberProjectRole(Models\GrantMemberProjectRoleRequest $req) Modify project user roles.
 * @method Models\KillTaskInstancesAsyncResponse KillTaskInstancesAsync(Models\KillTaskInstancesAsyncRequest $req) This API is used to terminate instances in batches asynchronously.
 * @method Models\KillTriggerWorkflowRunsResponse KillTriggerWorkflowRuns(Models\KillTriggerWorkflowRunsRequest $req) Terminate running.
 * @method Models\ListAlarmMessagesResponse ListAlarmMessages(Models\ListAlarmMessagesRequest $req) This API is used to search the alarm information list.
 * @method Models\ListCatalogResponse ListCatalog(Models\ListCatalogRequest $req) Retrieve asset catalog info.
 * @method Models\ListCodeFolderContentsResponse ListCodeFolderContents(Models\ListCodeFolderContentsRequest $req) This API is used to get folder content.
 * @method Models\ListCodePermissionsResponse ListCodePermissions(Models\ListCodePermissionsRequest $req) View CodeStudio entity permission.
 * @method Models\ListColumnLineageResponse ListColumnLineage(Models\ListColumnLineageRequest $req) This API is used to obtain table field lineage information.
 * @method Models\ListDataBackfillInstancesResponse ListDataBackfillInstances(Models\ListDataBackfillInstancesRequest $req) This API is used to retrieve all instances of a single backfill.
 * @method Models\ListDataSourcesResponse ListDataSources(Models\ListDataSourcesRequest $req) This API is used to query the data source list in the designated project.
 * @method Models\ListDatabaseResponse ListDatabase(Models\ListDatabaseRequest $req) This API is used to obtain asset database info.
 * @method Models\ListDownstreamOpsTasksResponse ListDownstreamOpsTasks(Models\ListDownstreamOpsTasksRequest $req) This API is used to retrieve task direct downstream details.
 * @method Models\ListDownstreamTaskInstancesResponse ListDownstreamTaskInstances(Models\ListDownstreamTaskInstancesRequest $req) This API is used to get the direct upstream of an instance.
 * @method Models\ListDownstreamTasksResponse ListDownstreamTasks(Models\ListDownstreamTasksRequest $req) This API is used to retrieve the direct downstream task details.
 * @method Models\ListDownstreamTriggerTasksResponse ListDownstreamTriggerTasks(Models\ListDownstreamTriggerTasksRequest $req) This API is used to retrieve direct downstream task details.
 * @method Models\ListLineageResponse ListLineage(Models\ListLineageRequest $req) This API is used to obtain asset lineage information.
 * @method Models\ListOpsAlarmRulesResponse ListOpsAlarmRules(Models\ListOpsAlarmRulesRequest $req) This API is used to query the alarm rule list.
 * @method Models\ListOpsTasksResponse ListOpsTasks(Models\ListOpsTasksRequest $req) This API is used to obtain the task list based on the project id.
 * @method Models\ListOpsTriggerWorkflowsResponse ListOpsTriggerWorkflows(Models\ListOpsTriggerWorkflowsRequest $req) This API is used to query the list of workflows.
 * @method Models\ListOpsWorkflowsResponse ListOpsWorkflows(Models\ListOpsWorkflowsRequest $req) Get Workflows under a Project by Project ID.
 * @method Models\ListPermissionsResponse ListPermissions(Models\ListPermissionsRequest $req) Retrieve authorizable permission details.
 * @method Models\ListProcessLineageResponse ListProcessLineage(Models\ListProcessLineageRequest $req) This API is used to obtain asset lineage information.
 * @method Models\ListProjectMembersResponse ListProjectMembers(Models\ListProjectMembersRequest $req) This API is used to obtain the user under the project with pagination return.
 * @method Models\ListProjectRolesResponse ListProjectRoles(Models\ListProjectRolesRequest $req) Get role list info.
 * @method Models\ListProjectsResponse ListProjects(Models\ListProjectsRequest $req) The project list in the tenant's global scope is irrelevant to the user's viewing range.
 * @method Models\ListQualityRuleTemplatesResponse ListQualityRuleTemplates(Models\ListQualityRuleTemplatesRequest $req) [Filter criteria] {template Name, query usage with Keyword fuzzy matching} {template type, 1. system template 2. custom template} {quality detection dimensions (QualityDims), 1. accuracy 2. uniqueness 3. integrity 4. consistency 5. timeliness 6. validity} [Sorting field] {citation sorting type, sort ASC or DESC based on the number of references}.
 * @method Models\ListResourceFilesResponse ListResourceFiles(Models\ListResourceFilesRequest $req) This API is used to view resource file list
 * @method Models\ListResourceFoldersResponse ListResourceFolders(Models\ListResourceFoldersRequest $req) This API is used to query the resource file folder list.
 * @method Models\ListResourceGroupsResponse ListResourceGroups(Models\ListResourceGroupsRequest $req) This API is used to query the execution resource group list.
 * @method Models\ListSQLFolderContentsResponse ListSQLFolderContents(Models\ListSQLFolderContentsRequest $req) This API is used to retrieve the content list of an sql folder
 * @method Models\ListSQLScriptRunsResponse ListSQLScriptRuns(Models\ListSQLScriptRunsRequest $req) This API is used to query SQL run history.
 * @method Models\ListSchemaResponse ListSchema(Models\ListSchemaRequest $req) This API is used to obtain the asset database Schema information.
 * @method Models\ListTableResponse ListTable(Models\ListTableRequest $req) This API is used to obtain table information of assets.
 * @method Models\ListTaskFoldersResponse ListTaskFolders(Models\ListTaskFoldersRequest $req) Query Task Folder List.
 * @method Models\ListTaskInstanceExecutionsResponse ListTaskInstanceExecutions(Models\ListTaskInstanceExecutionsRequest $req) This API is used to query the details of a scheduling instance.
 * @method Models\ListTaskInstancesResponse ListTaskInstances(Models\ListTaskInstancesRequest $req) This API is used to obtain instance lists.
 * @method Models\ListTaskVersionsResponse ListTaskVersions(Models\ListTaskVersionsRequest $req) This API is used to list saved task versions.
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) This API is used to query pagination information of tasks.
 * @method Models\ListTenantRolesResponse ListTenantRoles(Models\ListTenantRolesRequest $req) Get the role list of all root accounts.
 * @method Models\ListTriggerTaskRunsResponse ListTriggerTaskRuns(Models\ListTriggerTaskRunsRequest $req) Query workflow operation
 * @method Models\ListTriggerTaskVersionsResponse ListTriggerTaskVersions(Models\ListTriggerTaskVersionsRequest $req) Task save version list.
 * @method Models\ListTriggerTasksResponse ListTriggerTasks(Models\ListTriggerTasksRequest $req) Query job pagination information.
 * @method Models\ListTriggerWorkflowRunsResponse ListTriggerWorkflowRuns(Models\ListTriggerWorkflowRunsRequest $req) Query workflow operation.
 * @method Models\ListTriggerWorkflowsResponse ListTriggerWorkflows(Models\ListTriggerWorkflowsRequest $req) This API is used to query the list of workflows.
 * @method Models\ListUpstreamOpsTasksResponse ListUpstreamOpsTasks(Models\ListUpstreamOpsTasksRequest $req) This API is used to retrieve task direct upstream.
 * @method Models\ListUpstreamTaskInstancesResponse ListUpstreamTaskInstances(Models\ListUpstreamTaskInstancesRequest $req) This API is used to get the direct upstream of an instance.
 * @method Models\ListUpstreamTasksResponse ListUpstreamTasks(Models\ListUpstreamTasksRequest $req) This API is used to retrieve the direct upstream task.
 * @method Models\ListUpstreamTriggerTasksResponse ListUpstreamTriggerTasks(Models\ListUpstreamTriggerTasksRequest $req) This API is used to retrieve direct upstream tasks.
 * @method Models\ListWorkflowFoldersResponse ListWorkflowFolders(Models\ListWorkflowFoldersRequest $req) This API is used to query the folder list.
 * @method Models\ListWorkflowPermissionsResponse ListWorkflowPermissions(Models\ListWorkflowPermissionsRequest $req) Query workflow authorization permissions.
 * @method Models\ListWorkflowsResponse ListWorkflows(Models\ListWorkflowsRequest $req) This API is used to query the list of workflows.
 * @method Models\PauseOpsTasksAsyncResponse PauseOpsTasksAsync(Models\PauseOpsTasksAsyncRequest $req) This API is used to pause tasks in batches asynchronously.
 * @method Models\RegisterLineageResponse RegisterLineage(Models\RegisterLineageRequest $req) RegisterLineage
 * @method Models\RemoveMemberProjectRoleResponse RemoveMemberProjectRole(Models\RemoveMemberProjectRoleRequest $req) Delete project user roles.
 * @method Models\RerunTaskInstancesAsyncResponse RerunTaskInstancesAsync(Models\RerunTaskInstancesAsyncRequest $req) This API is used to batch rerun instances asynchronously.
 * @method Models\RerunTriggerWorkflowRunAsyncResponse RerunTriggerWorkflowRunAsync(Models\RerunTriggerWorkflowRunAsyncRequest $req) Rerun an operation.
 * @method Models\RevokeDataSourceAuthorizationResponse RevokeDataSourceAuthorization(Models\RevokeDataSourceAuthorizationRequest $req) Revoke data source permission.
 * @method Models\RevokePrivilegesResponse RevokePrivileges(Models\RevokePrivilegesRequest $req) Authorization Revoked in Catalog mode.
 * @method Models\RunSQLScriptResponse RunSQLScript(Models\RunSQLScriptRequest $req) This API is used to run an SQL script.
 * @method Models\SetSuccessTaskInstancesAsyncResponse SetSuccessTaskInstancesAsync(Models\SetSuccessTaskInstancesAsyncRequest $req) This API is used to batch configure instances asynchronously.
 * @method Models\StartOpsTasksResponse StartOpsTasks(Models\StartOpsTasksRequest $req) Start tasks asynchronously in batch.
 * @method Models\StopOpsTasksAsyncResponse StopOpsTasksAsync(Models\StopOpsTasksAsyncRequest $req) This API is used to asynchronously deactivate tasks in batch.
 * @method Models\StopSQLScriptRunResponse StopSQLScriptRun(Models\StopSQLScriptRunRequest $req) This API is used to stop running an SQL script.
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) This API is used to submit a task.
 * @method Models\SubmitTriggerTaskResponse SubmitTriggerTask(Models\SubmitTriggerTaskRequest $req) Submit a workflow scheduling task.
 * @method Models\UpdateCodeFileResponse UpdateCodeFile(Models\UpdateCodeFileRequest $req) This API is used to update a code file.
 * @method Models\UpdateCodeFolderResponse UpdateCodeFolder(Models\UpdateCodeFolderRequest $req) This API is used to rename a code folder.
 * @method Models\UpdateDataSourceResponse UpdateDataSource(Models\UpdateDataSourceRequest $req) This API is used to update a data source.
 * @method Models\UpdateOpsAlarmRuleResponse UpdateOpsAlarmRule(Models\UpdateOpsAlarmRuleRequest $req) Modifies alarm rules
 * @method Models\UpdateOpsTasksOwnerResponse UpdateOpsTasksOwner(Models\UpdateOpsTasksOwnerRequest $req) This API is used to modify the task owner.
 * @method Models\UpdateOpsTriggerTasksOwnerResponse UpdateOpsTriggerTasksOwner(Models\UpdateOpsTriggerTasksOwnerRequest $req) Query task execution details.
 * @method Models\UpdateProjectResponse UpdateProject(Models\UpdateProjectRequest $req) This API is used to modify project basic information.
 * @method Models\UpdateResourceFileResponse UpdateResourceFile(Models\UpdateResourceFileRequest $req) This API is used to update a resource file.
 * @method Models\UpdateResourceFolderResponse UpdateResourceFolder(Models\UpdateResourceFolderRequest $req) Update resource folder.
 * @method Models\UpdateResourceGroupResponse UpdateResourceGroup(Models\UpdateResourceGroupRequest $req) This API is used to modify configurations or renew resources.
 * @method Models\UpdateSQLFolderResponse UpdateSQLFolder(Models\UpdateSQLFolderRequest $req) This API is used to rename an SQL folder.
 * @method Models\UpdateSQLScriptResponse UpdateSQLScript(Models\UpdateSQLScriptRequest $req) This API is used to save the script content for data exploration.
 * @method Models\UpdateTaskResponse UpdateTask(Models\UpdateTaskRequest $req) This API is used to update a task.
 * @method Models\UpdateTaskFolderResponse UpdateTaskFolder(Models\UpdateTaskFolderRequest $req) Update a task folder.
 * @method Models\UpdateTaskPartiallyResponse UpdateTaskPartially(Models\UpdateTaskPartiallyRequest $req) This API is used to update a task.
 * @method Models\UpdateTriggerTaskResponse UpdateTriggerTask(Models\UpdateTriggerTaskRequest $req) This API is used to update a task.
 * @method Models\UpdateTriggerTaskPartiallyResponse UpdateTriggerTaskPartially(Models\UpdateTriggerTaskPartiallyRequest $req) This API is used to update a task.
 * @method Models\UpdateTriggerWorkflowResponse UpdateTriggerWorkflow(Models\UpdateTriggerWorkflowRequest $req) This API is used to update workflow, including basic information and workflow parameters.
 * @method Models\UpdateTriggerWorkflowPartiallyResponse UpdateTriggerWorkflowPartially(Models\UpdateTriggerWorkflowPartiallyRequest $req) Update workflow (including basic info and workflow parameters).
 * @method Models\UpdateWorkflowResponse UpdateWorkflow(Models\UpdateWorkflowRequest $req) This API is used to update a workflow including basic information and workflow parameters.
 * @method Models\UpdateWorkflowFolderResponse UpdateWorkflowFolder(Models\UpdateWorkflowFolderRequest $req) Refresh workflow folder.
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
    protected $version = "2025-08-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("wedata")."\\"."V20250806\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
