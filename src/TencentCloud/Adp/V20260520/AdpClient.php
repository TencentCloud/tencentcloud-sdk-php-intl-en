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

namespace TencentCloud\Adp\V20260520;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Adp\V20260520\Models as Models;

/**
 * @method Models\CallMCPToolResponse CallMCPTool(Models\CallMCPToolRequest $req) Tool call triggered by a user in the MCP App iframe.
 * @method Models\CheckLabelResponse CheckLabel(Models\CheckLabelRequest $req) Validate tags
 * @method Models\CopyAgentFromAppResponse CopyAgentFromApp(Models\CopyAgentFromAppRequest $req) This API is used to replicate an Agent. Currently only support claw mode.
 * @method Models\CopyAppResponse CopyApp(Models\CopyAppRequest $req) Copy an application
 * @method Models\CreateAgentResponse CreateAgent(Models\CreateAgentRequest $req) This API is used to create an Agent. Currently only support claw mode.
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) This API is used to create an application.
 * @method Models\CreateAppTriggerResponse CreateAppTrigger(Models\CreateAppTriggerRequest $req) CreateAppTrigger
 * @method Models\CreateCategoryResponse CreateCategory(Models\CreateCategoryRequest $req) Create a category
 * @method Models\CreateChannelResponse CreateChannel(Models\CreateChannelRequest $req) Create a channel (distinguish B-end application release channels from C-end IM channels by scene)
 * @method Models\CreateConversationResponse CreateConversation(Models\CreateConversationRequest $req) Create session
 * @method Models\CreateKBResponse CreateKB(Models\CreateKBRequest $req) This API is used to create a knowledge base.
 * @method Models\CreateLabelResponse CreateLabel(Models\CreateLabelRequest $req) Create a tag
 * @method Models\CreateMsgRecordCategoryResponse CreateMsgRecordCategory(Models\CreateMsgRecordCategoryRequest $req) This API is used to create a message record category, with support for specifying the category name and parent category. A ParentId of 0 indicates a level-1 category.
 * @method Models\CreatePluginResponse CreatePlugin(Models\CreatePluginRequest $req) This API is used to query plugin details.
 * @method Models\CreateQAGenerationTaskResponse CreateQAGenerationTask(Models\CreateQAGenerationTaskRequest $req) Create a QA generation task
 * @method Models\CreateQAListResponse CreateQAList(Models\CreateQAListRequest $req) Batch create QA
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) Add new release task
 * @method Models\CreateSimilarQuestionResponse CreateSimilarQuestion(Models\CreateSimilarQuestionRequest $req) This API is used to create a similar question generation task.
 * @method Models\CreateSkillResponse CreateSkill(Models\CreateSkillRequest $req) Creates a skill
 * @method Models\CreateSkillShareResponse CreateSkillShare(Models\CreateSkillShareRequest $req) Submit a custom Skill for enterprise-level shared approval (two-segment: submit, approve, callback to create a shared task)
 * @method Models\CreateSpaceResponse CreateSpace(Models\CreateSpaceRequest $req) Create a space
 * @method Models\CreateVariableResponse CreateVariable(Models\CreateVariableRequest $req) This API is used to create parameter variables.
 * @method Models\CreateWebSocketTokenResponse CreateWebSocketToken(Models\CreateWebSocketTokenRequest $req) This API is used to create a WebSocket Token.
 * @method Models\CreateWorkflowRunResponse CreateWorkflowRun(Models\CreateWorkflowRunRequest $req) This API is used to create an asynchronous running instance of a workflow. After successful creation, the workflow runs asynchronously in the backend. The API returns the workflow running instance ID (WorkflowRunId) and other information. You can call the DescribeWorkflowRun API to query the workflow running details.
Note: Asynchronous execution of a workflow is application-based. The corresponding application configuration must be set to "Single Workflow Mode" before it can be successfully created.
 * @method Models\CreateWorkspaceCredentialResponse CreateWorkspaceCredential(Models\CreateWorkspaceCredentialRequest $req) Create a workspace credential
 * @method Models\DeleteAgentResponse DeleteAgent(Models\DeleteAgentRequest $req) This API is used to delete an Agent.
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) This API is used to delete applications
 * @method Models\DeleteAppTriggerResponse DeleteAppTrigger(Models\DeleteAppTriggerRequest $req) DeleteAppTrigger
 * @method Models\DeleteCategoryResponse DeleteCategory(Models\DeleteCategoryRequest $req) Delete a category
 * @method Models\DeleteChannelResponse DeleteChannel(Models\DeleteChannelRequest $req) Delete a channel (scenarios are distinguished by scene)
 * @method Models\DeleteConversationResponse DeleteConversation(Models\DeleteConversationRequest $req) Delete conversation
 * @method Models\DeleteDocListResponse DeleteDocList(Models\DeleteDocListRequest $req) Delete documents in batches
 * @method Models\DeleteKBResponse DeleteKB(Models\DeleteKBRequest $req) This API is used to delete the knowledge base.
 * @method Models\DeleteLabelListResponse DeleteLabelList(Models\DeleteLabelListRequest $req) Batch deletes tags
 * @method Models\DeleteMsgRecordCategoryResponse DeleteMsgRecordCategory(Models\DeleteMsgRecordCategoryRequest $req) Deletes a specified message record category
 * @method Models\DeletePluginResponse DeletePlugin(Models\DeletePluginRequest $req) Modify a plug-in
 * @method Models\DeleteQAListResponse DeleteQAList(Models\DeleteQAListRequest $req) Delete QAs in batches
 * @method Models\DeleteSkillResponse DeleteSkill(Models\DeleteSkillRequest $req) Delete a Custom Skill Authorization: creator ∨ (edit permission ∧ delete permission) Denied scenarios: non-Custom type / shared / in security detection / pending listing approval / pending delisting approval
 * @method Models\DeleteSkillShareResponse DeleteSkillShare(Models\DeleteSkillShareRequest $req) Submit a shared Skill delisting approval (v2, two-segment: submit → approve → callback to delist the shared Skill) Authorization: right to erasure Denied scenarios: not shared / pending listing approval / pending delisting approval
 * @method Models\DeleteSpaceResponse DeleteSpace(Models\DeleteSpaceRequest $req) Delete a space
 * @method Models\DeleteVariableResponse DeleteVariable(Models\DeleteVariableRequest $req) Delete a parameter variable
 * @method Models\DescribeAccountListResponse DescribeAccountList(Models\DescribeAccountListRequest $req) View the employee list of a business
 * @method Models\DescribeAgentDetailResponse DescribeAgentDetail(Models\DescribeAgentDetailRequest $req) Query Agent details
 * @method Models\DescribeAgentReleasePreviewListResponse DescribeAgentReleasePreviewList(Models\DescribeAgentReleasePreviewListRequest $req) Get the release preview list of agents under an application
 * @method Models\DescribeAgentSummaryListResponse DescribeAgentSummaryList(Models\DescribeAgentSummaryListRequest $req) Queries the abstract information list of an Agent.
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) This API is used to obtain application information.
 * @method Models\DescribeAppStatisticsOverviewResponse DescribeAppStatisticsOverview(Models\DescribeAppStatisticsOverviewRequest $req) This API is used to query the invocation statistics overview under an application view, including the total number of calls, call success rate, avg duration of total tokens, and avg duration of first tokens. For RAG applications, it also returns the count and proportion of calls for each response method for drawing a pie chart.
 * @method Models\DescribeAppSummaryListResponse DescribeAppSummaryList(Models\DescribeAppSummaryListRequest $req) Retrieve the abstract list of applications.
 * @method Models\DescribeAppTriggerResponse DescribeAppTrigger(Models\DescribeAppTriggerRequest $req) DescribeAppTrigger
 * @method Models\DescribeAppTriggerInstanceResponse DescribeAppTriggerInstance(Models\DescribeAppTriggerInstanceRequest $req) DescribeAppTriggerInstance
 * @method Models\DescribeAppTriggerRunLogListResponse DescribeAppTriggerRunLogList(Models\DescribeAppTriggerRunLogListRequest $req) DescribeAppTriggerRunLogList
 * @method Models\DescribeAppTriggerSummaryListResponse DescribeAppTriggerSummaryList(Models\DescribeAppTriggerSummaryListRequest $req) DescribeAppTriggerSummaryList
 * @method Models\DescribeAuditLogListResponse DescribeAuditLogList(Models\DescribeAuditLogListRequest $req) View operation log list
 * @method Models\DescribeCategoryListResponse DescribeCategoryList(Models\DescribeCategoryListRequest $req) Query the classification list
 * @method Models\DescribeConcurrencyLimitDetailListResponse DescribeConcurrencyLimitDetailList(Models\DescribeConcurrencyLimitDetailListRequest $req) Query concurrency overrun details, including QPM/TPM overruns and exclusive concurrency overruns. Return the overrun time, space, app, model, and request content.
 * @method Models\DescribeConflictQAResponse DescribeConflictQA(Models\DescribeConflictQARequest $req) Queries the conflict query details
 * @method Models\DescribeConflictQASummaryListResponse DescribeConflictQASummaryList(Models\DescribeConflictQASummaryListRequest $req) Query the conflict list
 * @method Models\DescribeConversationResponse DescribeConversation(Models\DescribeConversationRequest $req) View session information.
 * @method Models\DescribeConversationListResponse DescribeConversationList(Models\DescribeConversationListRequest $req) Get session list.
 * @method Models\DescribeConversationMessageListResponse DescribeConversationMessageList(Models\DescribeConversationMessageListRequest $req) Get historical messages of a conversation.
 * @method Models\DescribeLabelResponse DescribeLabel(Models\DescribeLabelRequest $req) Queries tag details.
 * @method Models\DescribeLabelSummaryListResponse DescribeLabelSummaryList(Models\DescribeLabelSummaryListRequest $req) Querying the Tag List
 * @method Models\DescribeLatestReleaseResponse DescribeLatestRelease(Models\DescribeLatestReleaseRequest $req) Pull the latest release info (including release time, status, and channel).
 * @method Models\DescribeModelListResponse DescribeModelList(Models\DescribeModelListRequest $req) Query the model list
 * @method Models\DescribeMsgRecordCategoryListResponse DescribeMsgRecordCategoryList(Models\DescribeMsgRecordCategoryListRequest $req) Query the message record category tree of an app, return categories and subcategories, number of records under each category, and operation permissions.
 * @method Models\DescribeNodeBatchRunResponse DescribeNodeBatchRun(Models\DescribeNodeBatchRunRequest $req) DescribeNodeBatchRun
 * @method Models\DescribeNodeRunDetailResponse DescribeNodeRunDetail(Models\DescribeNodeRunDetailRequest $req) View workflow node running details.
 * @method Models\DescribePluginResponse DescribePlugin(Models\DescribePluginRequest $req) This API is used to query plugin details.
 * @method Models\DescribePluginSummaryListResponse DescribePluginSummaryList(Models\DescribePluginSummaryListRequest $req) Querying the List of Plugins
 * @method Models\DescribeQAResponse DescribeQA(Models\DescribeQARequest $req) Query QA details
 * @method Models\DescribeQASummaryListResponse DescribeQASummaryList(Models\DescribeQASummaryListRequest $req) Queries the QA list
 * @method Models\DescribeReleaseListResponse DescribeReleaseList(Models\DescribeReleaseListRequest $req) Release record list
 * @method Models\DescribeReleaseSummaryResponse DescribeReleaseSummary(Models\DescribeReleaseSummaryRequest $req) Queries a publication task
 * @method Models\DescribeSkillCategoryListResponse DescribeSkillCategoryList(Models\DescribeSkillCategoryListRequest $req) Query the Skill classification list
 * @method Models\DescribeSkillReferenceListResponse DescribeSkillReferenceList(Models\DescribeSkillReferenceListRequest $req) This API is used to query the list of details where a certain Skill is referenced, grouped by SkillRefType: OpenClaw, cloud agent, or business assistant agent. Authentication: same as DescribeSkillDetail.
 * @method Models\DescribeSkillSummaryListResponse DescribeSkillSummaryList(Models\DescribeSkillSummaryListRequest $req) Query the Skill list
 * @method Models\DescribeSpaceListResponse DescribeSpaceList(Models\DescribeSpaceListRequest $req) This API is used to obtain the space list.
 * @method Models\DescribeSystemVariableListResponse DescribeSystemVariableList(Models\DescribeSystemVariableListRequest $req) Obtain system variables
 * @method Models\DescribeUsageSummaryListResponse DescribeUsageSummaryList(Models\DescribeUsageSummaryListRequest $req) This API is used to query aggregated details of resource usage, including three types of resources: models, plug-ins, and platforms. It displays indicators such as call count and Token consumption, aggregated by space or application dimension.
 * @method Models\DescribeVariableResponse DescribeVariable(Models\DescribeVariableRequest $req) Get parameter variables
 * @method Models\DescribeVariableListResponse DescribeVariableList(Models\DescribeVariableListRequest $req) Gets the parameter variable list
 * @method Models\DescribeWorkflowRunResponse DescribeWorkflowRun(Models\DescribeWorkflowRunRequest $req) Queries workflow running details.
 * @method Models\ExportQAResponse ExportQA(Models\ExportQARequest $req) Asynchronously export QAs.
 * @method Models\ModifyAgentResponse ModifyAgent(Models\ModifyAgentRequest $req) Modify Agent configuration information
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) Modifies applications
 * @method Models\ModifyAppTriggerResponse ModifyAppTrigger(Models\ModifyAppTriggerRequest $req) ModifyAppTrigger
 * @method Models\ModifyConversationResponse ModifyConversation(Models\ModifyConversationRequest $req) Modify session information.
 * @method Models\ModifyDocListResponse ModifyDocList(Models\ModifyDocListRequest $req) Batch modify documents.
 * @method Models\ModifyKBResponse ModifyKB(Models\ModifyKBRequest $req) This API is used to modify the knowledge base.
 * @method Models\ModifyLabelResponse ModifyLabel(Models\ModifyLabelRequest $req) Modify a tag
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) Modify single QA
 * @method Models\ModifyQAListResponse ModifyQAList(Models\ModifyQAListRequest $req) Batch modify QAs
 * @method Models\ModifySpaceResponse ModifySpace(Models\ModifySpaceRequest $req) Edit a space
 * @method Models\ModifyVariableResponse ModifyVariable(Models\ModifyVariableRequest $req) Update parameter variables
 * @method Models\PauseAppTriggerResponse PauseAppTrigger(Models\PauseAppTriggerRequest $req) PauseAppTrigger
 * @method Models\ReleaseSkillResponse ReleaseSkill(Models\ReleaseSkillRequest $req) This API is used to list a skill.
 * @method Models\ResetConversationResponse ResetConversation(Models\ResetConversationRequest $req) Reset a session
Note: Resetting is not supported for the current Claw mode application session.
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) Retry publishing (republish after suspension)
 * @method Models\RollbackReleaseResponse RollbackRelease(Models\RollbackReleaseRequest $req) Roll back a release
 * @method Models\RunAppTriggerNowResponse RunAppTriggerNow(Models\RunAppTriggerNowRequest $req) RunAppTriggerNow
 * @method Models\SearchKnowledgeResponse SearchKnowledge(Models\SearchKnowledgeRequest $req) Knowledge retrieval
 */

class AdpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "adp.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "adp";

    /**
     * @var string
     */
    protected $version = "2026-05-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("adp")."\\"."V20260520\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
