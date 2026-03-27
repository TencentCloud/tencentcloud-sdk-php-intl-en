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

namespace TencentCloud\Ccc\V20200210;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ccc\V20200210\Models as Models;

/**
 * @method Models\AbortAgentCruiseDialingCampaignResponse AbortAgentCruiseDialingCampaign(Models\AbortAgentCruiseDialingCampaignRequest $req) Stop Agent Cruise-style Outbound Call Task
 * @method Models\AbortPredictiveDialingCampaignResponse AbortPredictiveDialingCampaign(Models\AbortPredictiveDialingCampaignRequest $req) This API is used to pause the predictive outbound call task.
 * @method Models\BindNumberCallInInterfaceResponse BindNumberCallInInterface(Models\BindNumberCallInInterfaceRequest $req) This API is used to bind a number to a callback API for incoming calls.
 * @method Models\BindNumberCallOutSkillGroupResponse BindNumberCallOutSkillGroup(Models\BindNumberCallOutSkillGroupRequest $req) This API is used to bind outbound skill group of number.
 * @method Models\BindStaffSkillGroupListResponse BindStaffSkillGroupList(Models\BindStaffSkillGroupListRequest $req) This API is used to bind the agent's skill group.
 * @method Models\ControlAIConversationResponse ControlAIConversation(Models\ControlAIConversationRequest $req) This API is used to provide server-side robot control feature.
 * @method Models\CreateAIAgentCallResponse CreateAIAgentCall(Models\CreateAIAgentCallRequest $req) Used to create one-time Intelligent Agent outbound calls. You can create a voice Intelligent Agent in the management console - Intelligent Agent Management and perform dialogue process configuration (https://www.tencentcloud.comom/document/product/679/119796?from_cn_redirect=1). This API is used to initiate a single outbound call task with a configured Intelligent Agent. To create batch Intelligent Agent outbound call tasks, refer to the documentation for creating automatic outbound call tasks (https://www.tencentcloud.comom/document/product/679/69194?from_cn_redirect=1).

The feature requires purchase of the Intelligent Agent call package and is only available for own telephone number. For details, refer to the [Intelligent Agent Call Purchase Guide](https://www.tencentcloud.comom/document/product/679/125953?from_cn_redirect=1).
 * @method Models\CreateAICallResponse CreateAICall(Models\CreateAICallRequest $req) This API is used to **call the AI model directly** to trigger a **single** outbound call. It supports configuring the model, prompt content, voice, and all call elements through API parameters.

The feature requires purchase of the Intelligent Agent call package and is only available for own telephone numbers. For details, refer to the Intelligent Agent Call Purchase Guide (https://www.tencentcloud.comom/document/product/679/125953?from_cn_redirect=1).
 * @method Models\CreateAdminURLResponse CreateAdminURL(Models\CreateAdminURLRequest $req) This API is used to create a management access link.
 * @method Models\CreateAgentCruiseDialingCampaignResponse CreateAgentCruiseDialingCampaign(Models\CreateAgentCruiseDialingCampaignRequest $req) Agent Cruise-style Outbound Call.
 * @method Models\CreateAutoCalloutTaskResponse CreateAutoCalloutTask(Models\CreateAutoCalloutTaskRequest $req) This API is used to create bulk automatic outbound calls. The system will automatically initiate outbound calls to the designated called number list based on task configuration. This API can call the configured Intelligent Agent to perform batch outbound call tasks. You can create a voice Intelligent Agent in the management console-Intelligent Agent Management and configure the dialogue process (https://www.tencentcloud.comom/document/product/679/119796?from_cn_redirect=1). To create a single Intelligent Agent outbound call task, refer to the documentation (https://www.tencentcloud.comom/document/product/679/115681?from_cn_redirect=1).

The feature requires purchase of the Intelligent Agent call package and is only available for own telephone number. For details, refer to the [Intelligent Agent Call Purchase Guide](https://www.tencentcloud.comom/document/product/679/125953?from_cn_redirect=1).
 * @method Models\CreateCCCSkillGroupResponse CreateCCCSkillGroup(Models\CreateCCCSkillGroupRequest $req) This API is used to create a new skill group.
 * @method Models\CreateCallOutSessionResponse CreateCallOutSession(Models\CreateCallOutSessionRequest $req) This API is used to create an outbound call session. Currently, only dual calls are supported. That is, first use the platform number to call the agent mobile phone. After the agent answers, then make an outbound call to the user. Moreover, due to ISP frequency restrictions, the agent phone number must be added to the allowlist first to avoid frequency control leading to the failure of the outbound call. Therefore, before calling this API, the following operations have been completed.
1. The agent specified by UserId has already bound the mobile number. https://intl.cloud.tencent.com/document/product/679/76067?from_cn_redirect=1#.E6.AD.A5.E9.AA.A42.EF.BC.9A.E5.AE.8C.E5.96.84.E8.B4.A6.E5.8F.B7.E4.BF.A1.E6.81.AF.
2. The agent's bound mobile number has applied for and passed the outbound call allowlist.
This API is used to make calls. Currently, the agent side can only call the user's mobile phone, so the IsForceMobile field must be true.
4. Do not fill in the mobile number bound to the current UserId for the callee, otherwise it can lead to call failure due to a busy line.
 * @method Models\CreateExtensionResponse CreateExtension(Models\CreateExtensionRequest $req) This API is used to create the telephone account.
 * @method Models\CreateIVRSessionResponse CreateIVRSession(Models\CreateIVRSessionRequest $req) Create a session associated with IVR. This feature is supported only in the Advanced Version. Currently, it supports inbound and automatic outbound IVR types. Upon receiving the request, TCCC will first attempt to call the callee, then enter the IVR flow.
 * @method Models\CreateOwnNumberApplyResponse CreateOwnNumberApply(Models\CreateOwnNumberApplyRequest $req) Create customer's own number access review
 * @method Models\CreatePredictiveDialingCampaignResponse CreatePredictiveDialingCampaign(Models\CreatePredictiveDialingCampaignRequest $req) This API is used to create the predictive outbound call task.
 * @method Models\CreateSDKLoginTokenResponse CreateSDKLoginToken(Models\CreateSDKLoginTokenRequest $req) This API is used to create the SDK log-in token.
 * @method Models\CreateStaffResponse CreateStaff(Models\CreateStaffRequest $req) This API is used to create the customer service account.
 * @method Models\CreateUserSigResponse CreateUserSig(Models\CreateUserSigRequest $req) This API is used to create a user data signature.
 * @method Models\DeleteCCCSkillGroupResponse DeleteCCCSkillGroup(Models\DeleteCCCSkillGroupRequest $req) This API is used to delete a skill group.
 * @method Models\DeleteExtensionResponse DeleteExtension(Models\DeleteExtensionRequest $req) This API is used to delete telephone accounts.
 * @method Models\DeletePredictiveDialingCampaignResponse DeletePredictiveDialingCampaign(Models\DeletePredictiveDialingCampaignRequest $req) This API is used to delete the predictive outbound call task.
 * @method Models\DeleteStaffResponse DeleteStaff(Models\DeleteStaffRequest $req) This API is used to delete the agent information.
 * @method Models\DescribeAIAgentInfoListResponse DescribeAIAgentInfoList(Models\DescribeAIAgentInfoListRequest $req) This API is used to query the information list of configured Intelligent Agents under a specified instance (SdkAppId) by paging, including basic information such as Intelligent Agent ID and name.
 * @method Models\DescribeAIAnalysisResultResponse DescribeAIAnalysisResult(Models\DescribeAIAnalysisResultRequest $req) This API is used to obtain AI Conversation Analytics results.
 * @method Models\DescribeAICallExtractResultResponse DescribeAICallExtractResult(Models\DescribeAICallExtractResultRequest $req) This API is used to query specified session's post-call Tag results by Session ID after the Intelligent Agent call session ends. Related post-call Tags need to be configured in advance in the management console. For details, please refer to post-call Tags (https://www.tencentcloud.comom/document/product/679/119800?from_cn_redirect=1).
 * @method Models\DescribeAILatencyResponse DescribeAILatency(Models\DescribeAILatencyRequest $req) Call this API to query the processing latency detail and stats of specified Session by Session ID within a specific time period. The latency info includes:.
-End-to-end (ETE) delay: Statistics of the overall duration from user voice input to AI returning a complete response.
-ASR latency: statistics of the processing time consumption required for voice input to be recognized as text.
-LLM latency: Statistics of inference latency for AI model to generate text content.
-Text To Speech (TTS) latency: Statistics of text conversion to speech audio synthesis duration.
 * @method Models\DescribeAgentCruiseDialingCampaignResponse DescribeAgentCruiseDialingCampaign(Models\DescribeAgentCruiseDialingCampaignRequest $req) Query Agent Cruise-style Outbound Call Task
 * @method Models\DescribeAutoCalloutTaskResponse DescribeAutoCalloutTask(Models\DescribeAutoCalloutTaskRequest $req) This API is used to query detailed information of an automatic outbound call task by TaskId, including basic configuration, start and end time, name list, execution status, and call status.
This API is usually used together with Create Bulk Automatic Outbound Call Task (https://www.tencentcloud.comom/document/product/679/69194?from_cn_redirect=1) to check whether the task configuration takes effect, the current task status, and real-time progress during execution once created.
 * @method Models\DescribeAutoCalloutTasksResponse DescribeAutoCalloutTasks(Models\DescribeAutoCalloutTasksRequest $req) Batch Query Automatic Outbound Call Tasks
 * @method Models\DescribeCCCBuyInfoListResponse DescribeCCCBuyInfoList(Models\DescribeCCCBuyInfoListRequest $req) This API is used to access the user purchasing information list.
 * @method Models\DescribeCallInMetricsResponse DescribeCallInMetrics(Models\DescribeCallInMetricsRequest $req) This API is used to access the inbound real-time data statistical metrics.
 * @method Models\DescribeExtensionResponse DescribeExtension(Models\DescribeExtensionRequest $req) This API is used to access the telephone information.
 * @method Models\DescribeExtensionsResponse DescribeExtensions(Models\DescribeExtensionsRequest $req) This API is used to query the telephone list information.
 * @method Models\DescribeIvrAudioListResponse DescribeIvrAudioList(Models\DescribeIvrAudioListRequest $req) Query IVR Audio File List Information
 * @method Models\DescribeNumbersResponse DescribeNumbers(Models\DescribeNumbersRequest $req) This API is used to query the number list.
 * @method Models\DescribePSTNActiveSessionListResponse DescribePSTNActiveSessionList(Models\DescribePSTNActiveSessionListRequest $req) This API is used to access the current calling session list.
 * @method Models\DescribePredictiveDialingCampaignResponse DescribePredictiveDialingCampaign(Models\DescribePredictiveDialingCampaignRequest $req) This API is used to query the predictive outbound call task.
 * @method Models\DescribePredictiveDialingCampaignsResponse DescribePredictiveDialingCampaigns(Models\DescribePredictiveDialingCampaignsRequest $req) This API is used to query the predictive outbound call task list.
 * @method Models\DescribePredictiveDialingSessionsResponse DescribePredictiveDialingSessions(Models\DescribePredictiveDialingSessionsRequest $req) This API is used to query the predictive outbound call list.
 * @method Models\DescribeProtectedTelCdrResponse DescribeProtectedTelCdr(Models\DescribeProtectedTelCdrRequest $req) This API is used to access protected phone service records and recordings for both inbound and outbound calls.
 * @method Models\DescribeSessionDetailResponse DescribeSessionDetail(Models\DescribeSessionDetailRequest $req) This API is used to query call details for a single call by session id and timestamp after call ends, including caller and contact information, voice recording.
 * @method Models\DescribeSkillGroupInfoListResponse DescribeSkillGroupInfoList(Models\DescribeSkillGroupInfoListRequest $req) This API is used to access the skill group information list.
 * @method Models\DescribeStaffInfoListResponse DescribeStaffInfoList(Models\DescribeStaffInfoListRequest $req) This API is used to access the agent information list.
 * @method Models\DescribeStaffStatusHistoryResponse DescribeStaffStatusHistory(Models\DescribeStaffStatusHistoryRequest $req) This API is used to query agent status history.
 * @method Models\DescribeStaffStatusMetricsResponse DescribeStaffStatusMetrics(Models\DescribeStaffStatusMetricsRequest $req) This API is used to access the real-time status statistics metrics of the agent.
 * @method Models\DescribeTelCallInfoResponse DescribeTelCallInfo(Models\DescribeTelCallInfoRequest $req) This API is used to access telephone consumption statistics by instance.
 * @method Models\DescribeTelCdrResponse DescribeTelCdr(Models\DescribeTelCdrRequest $req) This API is used to access phone service records and recordings.
 * @method Models\DescribeTelRecordAsrResponse DescribeTelRecordAsr(Models\DescribeTelRecordAsrRequest $req) Pull conversation recording for text information
 * @method Models\DescribeTelSessionResponse DescribeTelSession(Models\DescribeTelSessionRequest $req) This API is used to access the PSTN session information.
 * @method Models\DisableCCCPhoneNumberResponse DisableCCCPhoneNumber(Models\DisableCCCPhoneNumberRequest $req) This API is used to disable numbers.
 * @method Models\ForceMemberOfflineResponse ForceMemberOffline(Models\ForceMemberOfflineRequest $req) This API is used to force customer service to go offline.
 * @method Models\HangUpCallResponse HangUpCall(Models\HangUpCallRequest $req) This API is used to hang up the phone.
 * @method Models\ModifyExtensionResponse ModifyExtension(Models\ModifyExtensionRequest $req) This API is used to modify telephone accounts (binding skill group, binding agent account).
 * @method Models\ModifyOwnNumberApplyResponse ModifyOwnNumberApply(Models\ModifyOwnNumberApplyRequest $req) Modify customer's own number approval form
 * @method Models\ModifyStaffResponse ModifyStaff(Models\ModifyStaffRequest $req) This API is used to modify the customer service account.
 * @method Models\ModifyStaffPasswordResponse ModifyStaffPassword(Models\ModifyStaffPasswordRequest $req) Modify Agent's Password
 * @method Models\PauseAutoCalloutTaskResponse PauseAutoCalloutTask(Models\PauseAutoCalloutTaskRequest $req) This API is used to suspend an ongoing automatic outbound call task by TaskId. After calling this API, the task will be temporarily interrupted and no longer initiate new outbound call requests; initiated calls are not affected.
A paused task can continue execution via the [Restore Suspended Automatic Outbound Call Task](https://www.tencentcloud.comom/document/product/679/125356?from_cn_redirect=1) API. If needed, refer to [Stop Automatic Outbound Call Task](https://www.tencentcloud.comom/document/product/679/69192?from_cn_redirect=1) to permanently terminate the task.
 * @method Models\PausePredictiveDialingCampaignResponse PausePredictiveDialingCampaign(Models\PausePredictiveDialingCampaignRequest $req) This API is used to pause the predictive outbound call task.
 * @method Models\PlaySoundCallResponse PlaySoundCall(Models\PlaySoundCallRequest $req) This API is used to perform playback for a session in a call with an agent.
 * @method Models\ResetExtensionPasswordResponse ResetExtensionPassword(Models\ResetExtensionPasswordRequest $req) This API is used to reset the telephone register password.
 * @method Models\RestoreMemberOnlineResponse RestoreMemberOnline(Models\RestoreMemberOnlineRequest $req) This API is used to restore customer service to go live.
 * @method Models\ResumeAutoCalloutTaskResponse ResumeAutoCalloutTask(Models\ResumeAutoCalloutTaskRequest $req) This API is used to restore a paused automatic outbound call task by TaskId. This API is suitable for scenarios where you need to continue execution of the remaining outbound call plan after calling Suspend Automatic Outbound Call Task. After a successful call, the task will resume from the paused state and re-initiate incomplete outbound requests.
 * @method Models\ResumePredictiveDialingCampaignResponse ResumePredictiveDialingCampaign(Models\ResumePredictiveDialingCampaignRequest $req) This API is used to resume the predictive outbound call task.
 * @method Models\SetStaffStatusResponse SetStaffStatus(Models\SetStaffStatusRequest $req) This API is used to set staff status.
 * @method Models\StopAutoCalloutTaskResponse StopAutoCalloutTask(Models\StopAutoCalloutTaskRequest $req) This API is used to stop the automatic outbound call task.
 * @method Models\TransferToManualResponse TransferToManual(Models\TransferToManualRequest $req) This API is used to transfer a session to an agent in specific scenarios.
 * @method Models\UnbindNumberCallOutSkillGroupResponse UnbindNumberCallOutSkillGroup(Models\UnbindNumberCallOutSkillGroupRequest $req) This API is used to unbind the number from the outbound call skill group.
 * @method Models\UnbindStaffSkillGroupListResponse UnbindStaffSkillGroupList(Models\UnbindStaffSkillGroupListRequest $req) This API is used to unbind the agent's skill group.
 * @method Models\UpdateCCCSkillGroupResponse UpdateCCCSkillGroup(Models\UpdateCCCSkillGroupRequest $req) This API is used to update the skill group.
 * @method Models\UpdatePredictiveDialingCampaignResponse UpdatePredictiveDialingCampaign(Models\UpdatePredictiveDialingCampaignRequest $req) This API is used to update the predictive outbound call task before it starts.
 * @method Models\UploadIvrAudioResponse UploadIvrAudio(Models\UploadIvrAudioRequest $req) Upload audio files used in IVR, with a daily upload limit of 50 files. (It is recommended to use temporary links stored in Tencent Cloud Cos for the audio file URL in the parameters)
 */

class CccClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ccc.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ccc";

    /**
     * @var string
     */
    protected $version = "2020-02-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("ccc")."\\"."V20200210\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
