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
 * @method Models\CreateCodeFileResponse CreateCodeFile(Models\CreateCodeFileRequest $req) This API is used to create a code file.
 * @method Models\CreateCodeFolderResponse CreateCodeFolder(Models\CreateCodeFolderRequest $req) This API is used to create a code folder.
 * @method Models\CreateDataBackfillPlanResponse CreateDataBackfillPlan(Models\CreateDataBackfillPlanRequest $req) This API is used to create a data backfill plan.
 * @method Models\CreateOpsAlarmRuleResponse CreateOpsAlarmRule(Models\CreateOpsAlarmRuleRequest $req) This API is used to set alarm rules.
 * @method Models\CreateResourceFileResponse CreateResourceFile(Models\CreateResourceFileRequest $req) This API is used to create a resource file.
 * @method Models\CreateResourceFolderResponse CreateResourceFolder(Models\CreateResourceFolderRequest $req) This API is used to create a resource file folder.
 * @method Models\CreateSQLFolderResponse CreateSQLFolder(Models\CreateSQLFolderRequest $req) This API is used to create an SQL folder
 * @method Models\CreateSQLScriptResponse CreateSQLScript(Models\CreateSQLScriptRequest $req) This API is used to add an SQL script.
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create a task.
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) This API is used to create workflow.
 * @method Models\CreateWorkflowFolderResponse CreateWorkflowFolder(Models\CreateWorkflowFolderRequest $req) This API is used to create a workflow folder.
 * @method Models\DeleteCodeFileResponse DeleteCodeFile(Models\DeleteCodeFileRequest $req) This API is used to delete a code file.
 * @method Models\DeleteCodeFolderResponse DeleteCodeFolder(Models\DeleteCodeFolderRequest $req) This API is used to delete folders in data exploration.
 * @method Models\DeleteOpsAlarmRuleResponse DeleteOpsAlarmRule(Models\DeleteOpsAlarmRuleRequest $req) Deletes alarm rules
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) This API is used to delete a resource file.
 * @method Models\DeleteResourceFolderResponse DeleteResourceFolder(Models\DeleteResourceFolderRequest $req) This API is used to delete a resource folder.
 * @method Models\DeleteSQLFolderResponse DeleteSQLFolder(Models\DeleteSQLFolderRequest $req) This API is used to delete a SQL folder.
 * @method Models\DeleteSQLScriptResponse DeleteSQLScript(Models\DeleteSQLScriptRequest $req) This API is used to delete an SQL script.
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) This API is used to delete an orchestration space task.
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) Deletes a workflow
 * @method Models\DeleteWorkflowFolderResponse DeleteWorkflowFolder(Models\DeleteWorkflowFolderRequest $req) This API is used to delete a data development folder
 * @method Models\GetAlarmMessageResponse GetAlarmMessage(Models\GetAlarmMessageRequest $req) This API is used to query alert information details.
 * @method Models\GetCodeFileResponse GetCodeFile(Models\GetCodeFileRequest $req) This API is used to view code file details.
 * @method Models\GetOpsAlarmRuleResponse GetOpsAlarmRule(Models\GetOpsAlarmRuleRequest $req) This API is used to query alert rule information based on alarm rule id or name.
 * @method Models\GetOpsAsyncJobResponse GetOpsAsyncJob(Models\GetOpsAsyncJobRequest $req) This API is used to query async operation details in Ops center.
 * @method Models\GetOpsTaskResponse GetOpsTask(Models\GetOpsTaskRequest $req) Obtaining Task Details
 * @method Models\GetOpsTaskCodeResponse GetOpsTaskCode(Models\GetOpsTaskCodeRequest $req) This API is used to retrieve task code.
 * @method Models\GetOpsWorkflowResponse GetOpsWorkflow(Models\GetOpsWorkflowRequest $req) This API is used to obtain workflow scheduling details based on the workflow id.
 * @method Models\GetResourceFileResponse GetResourceFile(Models\GetResourceFileRequest $req) This API is used to obtain resource file details.
 * @method Models\GetSQLScriptResponse GetSQLScript(Models\GetSQLScriptRequest $req) This API is used to query script details.
 * @method Models\GetTaskResponse GetTask(Models\GetTaskRequest $req) This API is used to retrieve task details.
 * @method Models\GetTaskCodeResponse GetTaskCode(Models\GetTaskCodeRequest $req) This API is used to obtain task code.
 * @method Models\GetTaskInstanceResponse GetTaskInstance(Models\GetTaskInstanceRequest $req) This API is used to query the details of a scheduling instance.
 * @method Models\GetTaskInstanceLogResponse GetTaskInstanceLog(Models\GetTaskInstanceLogRequest $req) This API is used to obtain instance lists.
 * @method Models\GetTaskVersionResponse GetTaskVersion(Models\GetTaskVersionRequest $req) This API is used to list task versions.
 * @method Models\GetWorkflowResponse GetWorkflow(Models\GetWorkflowRequest $req) This API is used to retrieve workflow information.
 * @method Models\KillTaskInstancesAsyncResponse KillTaskInstancesAsync(Models\KillTaskInstancesAsyncRequest $req) This API is used to terminate instances in batches asynchronously.
 * @method Models\ListAlarmMessagesResponse ListAlarmMessages(Models\ListAlarmMessagesRequest $req) This API is used to search the alarm information list.
 * @method Models\ListCodeFolderContentsResponse ListCodeFolderContents(Models\ListCodeFolderContentsRequest $req) This API is used to get folder content.
 * @method Models\ListDataBackfillInstancesResponse ListDataBackfillInstances(Models\ListDataBackfillInstancesRequest $req) This API is used to retrieve all instances of a single backfill.
 * @method Models\ListDownstreamOpsTasksResponse ListDownstreamOpsTasks(Models\ListDownstreamOpsTasksRequest $req) This API is used to retrieve task direct downstream details.
 * @method Models\ListDownstreamTaskInstancesResponse ListDownstreamTaskInstances(Models\ListDownstreamTaskInstancesRequest $req) This API is used to get the direct upstream of an instance.
 * @method Models\ListDownstreamTasksResponse ListDownstreamTasks(Models\ListDownstreamTasksRequest $req) This API is used to retrieve the direct downstream task details.
 * @method Models\ListOpsAlarmRulesResponse ListOpsAlarmRules(Models\ListOpsAlarmRulesRequest $req) This API is used to query the alarm rule list.
 * @method Models\ListOpsTasksResponse ListOpsTasks(Models\ListOpsTasksRequest $req) This API is used to obtain the task list based on the project id.
 * @method Models\ListOpsWorkflowsResponse ListOpsWorkflows(Models\ListOpsWorkflowsRequest $req) Get Workflows under a Project by Project ID.
 * @method Models\ListResourceFilesResponse ListResourceFiles(Models\ListResourceFilesRequest $req) This API is used to view resource file list
 * @method Models\ListResourceFoldersResponse ListResourceFolders(Models\ListResourceFoldersRequest $req) This API is used to query the resource file folder list.
 * @method Models\ListSQLFolderContentsResponse ListSQLFolderContents(Models\ListSQLFolderContentsRequest $req) This API is used to retrieve the content list of an sql folder
 * @method Models\ListSQLScriptRunsResponse ListSQLScriptRuns(Models\ListSQLScriptRunsRequest $req) This API is used to query SQL run history.
 * @method Models\ListTaskInstanceExecutionsResponse ListTaskInstanceExecutions(Models\ListTaskInstanceExecutionsRequest $req) This API is used to query the details of a scheduling instance.
 * @method Models\ListTaskInstancesResponse ListTaskInstances(Models\ListTaskInstancesRequest $req) This API is used to obtain instance lists.
 * @method Models\ListTaskVersionsResponse ListTaskVersions(Models\ListTaskVersionsRequest $req) This API is used to list saved task versions.
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) This API is used to query pagination information of tasks.
 * @method Models\ListUpstreamOpsTasksResponse ListUpstreamOpsTasks(Models\ListUpstreamOpsTasksRequest $req) This API is used to retrieve task direct upstream.
 * @method Models\ListUpstreamTaskInstancesResponse ListUpstreamTaskInstances(Models\ListUpstreamTaskInstancesRequest $req) This API is used to get the direct upstream of an instance.
 * @method Models\ListUpstreamTasksResponse ListUpstreamTasks(Models\ListUpstreamTasksRequest $req) This API is used to retrieve the direct upstream task.
 * @method Models\ListWorkflowFoldersResponse ListWorkflowFolders(Models\ListWorkflowFoldersRequest $req) This API is used to query the folder list.
 * @method Models\ListWorkflowsResponse ListWorkflows(Models\ListWorkflowsRequest $req) This API is used to query the list of workflows.
 * @method Models\PauseOpsTasksAsyncResponse PauseOpsTasksAsync(Models\PauseOpsTasksAsyncRequest $req) This API is used to pause tasks in batches asynchronously.
 * @method Models\RerunTaskInstancesAsyncResponse RerunTaskInstancesAsync(Models\RerunTaskInstancesAsyncRequest $req) This API is used to batch rerun instances asynchronously.
 * @method Models\RunSQLScriptResponse RunSQLScript(Models\RunSQLScriptRequest $req) This API is used to run an SQL script.
 * @method Models\SetSuccessTaskInstancesAsyncResponse SetSuccessTaskInstancesAsync(Models\SetSuccessTaskInstancesAsyncRequest $req) This API is used to batch configure instances asynchronously.
 * @method Models\StopOpsTasksAsyncResponse StopOpsTasksAsync(Models\StopOpsTasksAsyncRequest $req) This API is used to asynchronously deactivate tasks in batch.
 * @method Models\StopSQLScriptRunResponse StopSQLScriptRun(Models\StopSQLScriptRunRequest $req) This API is used to stop running an SQL script.
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) This API is used to submit a task.
 * @method Models\UpdateCodeFileResponse UpdateCodeFile(Models\UpdateCodeFileRequest $req) This API is used to update a code file.
 * @method Models\UpdateCodeFolderResponse UpdateCodeFolder(Models\UpdateCodeFolderRequest $req) This API is used to rename a code folder.
 * @method Models\UpdateOpsAlarmRuleResponse UpdateOpsAlarmRule(Models\UpdateOpsAlarmRuleRequest $req) Modifies alarm rules
 * @method Models\UpdateOpsTasksOwnerResponse UpdateOpsTasksOwner(Models\UpdateOpsTasksOwnerRequest $req) This API is used to modify the task owner.
 * @method Models\UpdateResourceFileResponse UpdateResourceFile(Models\UpdateResourceFileRequest $req) This API is used to update a resource file.
 * @method Models\UpdateResourceFolderResponse UpdateResourceFolder(Models\UpdateResourceFolderRequest $req) This API is used to update a resource folder.
 * @method Models\UpdateSQLFolderResponse UpdateSQLFolder(Models\UpdateSQLFolderRequest $req) This API is used to rename an SQL folder.
 * @method Models\UpdateSQLScriptResponse UpdateSQLScript(Models\UpdateSQLScriptRequest $req) This API is used to save the script content for data exploration.
 * @method Models\UpdateTaskResponse UpdateTask(Models\UpdateTaskRequest $req) This API is used to update a task.
 * @method Models\UpdateWorkflowResponse UpdateWorkflow(Models\UpdateWorkflowRequest $req) This API is used to update a workflow including basic information and workflow parameters.
 * @method Models\UpdateWorkflowFolderResponse UpdateWorkflowFolder(Models\UpdateWorkflowFolderRequest $req) This API is used to update a workflow folder
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
