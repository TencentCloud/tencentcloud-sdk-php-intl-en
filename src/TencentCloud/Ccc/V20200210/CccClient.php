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

namespace TencentCloud\Ccc\V20200210;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ccc\V20200210\Models as Models;

/**
 * @method Models\AbortAgentCruiseDialingCampaignResponse AbortAgentCruiseDialingCampaign(Models\AbortAgentCruiseDialingCampaignRequest $req) Stop Agent Cruise-style Outbound Call Task
 * @method Models\AbortPredictiveDialingCampaignResponse AbortPredictiveDialingCampaign(Models\AbortPredictiveDialingCampaignRequest $req) This API is used to pause the predictive outbound call task.
 * @method Models\BindNumberCallOutSkillGroupResponse BindNumberCallOutSkillGroup(Models\BindNumberCallOutSkillGroupRequest $req) This API is used to bind outbound skill group of number.
 * @method Models\BindStaffSkillGroupListResponse BindStaffSkillGroupList(Models\BindStaffSkillGroupListRequest $req) This API is used to bind the agent's skill group.
 * @method Models\CreateAIAgentCallResponse CreateAIAgentCall(Models\CreateAIAgentCallRequest $req) This API is used to initiate outbound calls using an AI model, limited to owned phone numbers only. Currently, a limited-time free trial of Advanced Agents is available.

Before initiating a call, please ensure your AI model is compatible with OpenAI, Azure, or Minimax protocols, and visit the model provider's website to obtain relevant authentication information. For detailed feature descriptions, please refer to the documentation [Tencent Cloud Contact Center AI Call Platform](https://intl.cloud.tencent.com/document/product/679/112100?from_cn_redirect=1).
 * @method Models\CreateAICallResponse CreateAICall(Models\CreateAICallRequest $req) Used to make outbound calls by invoking AI models, limited to the use of proprietary phone numbers. Currently, the Advanced version seats are available for a **limited time** free trial.

Before initiating a call, please ensure your AI model is compatible with OpenAI, Azure, or Minimax protocols, and visit the model provider's website to obtain relevant authentication information. For detailed feature descriptions, please refer to the documentation [Tencent Cloud Contact Center AI Call Platform](https://www.tencentcloud.com/document/product/1229/66889).
 * @method Models\CreateAdminURLResponse CreateAdminURL(Models\CreateAdminURLRequest $req) This API is used to create a management access link.
 * @method Models\CreateAgentCruiseDialingCampaignResponse CreateAgentCruiseDialingCampaign(Models\CreateAgentCruiseDialingCampaignRequest $req) Agent Cruise-style Outbound Call.
 * @method Models\CreateAutoCalloutTaskResponse CreateAutoCalloutTask(Models\CreateAutoCalloutTaskRequest $req) This API is used to create the automatic outbound call task.
 * @method Models\CreateCCCSkillGroupResponse CreateCCCSkillGroup(Models\CreateCCCSkillGroupRequest $req) This API is used to create a new skill group.
 * @method Models\CreateCallOutSessionResponse CreateCallOutSession(Models\CreateCallOutSessionRequest $req) This API is used to create outbound sessions. Currently, only dual call is supported. That is, firstly, please use the platform number to call the agent's cell phone. After the agent answers, then please make outbound calls to the user. Due to ISP frequency restrictions, the agent's phone number must first be added to the allowlist to avoid frequency control which may lead to the failure of the outbound call.
 * @method Models\CreateExtensionResponse CreateExtension(Models\CreateExtensionRequest $req) This API is used to create the telephone account.
 * @method Models\CreateIVRSessionResponse CreateIVRSession(Models\CreateIVRSessionRequest $req) Create a session associated with IVR. This feature is supported only in the Advanced Version. Currently, it supports inbound and automatic outbound IVR types. Upon receiving the request, TCCC will first attempt to call the callee, then enter the IVR flow.
 * @method Models\CreateOwnNumberApplyResponse CreateOwnNumberApply(Models\CreateOwnNumberApplyRequest $req) Create customer's own number access review
 * @method Models\CreatePredictiveDialingCampaignResponse CreatePredictiveDialingCampaign(Models\CreatePredictiveDialingCampaignRequest $req) This API is used to create the predictive outbound call task.
 * @method Models\CreateSDKLoginTokenResponse CreateSDKLoginToken(Models\CreateSDKLoginTokenRequest $req) This API is used to create the SDK log-in token.
 * @method Models\CreateStaffResponse CreateStaff(Models\CreateStaffRequest $req) This API is used to create the customer service account.
 * @method Models\DeleteExtensionResponse DeleteExtension(Models\DeleteExtensionRequest $req) This API is used to delete telephone accounts.
 * @method Models\DeletePredictiveDialingCampaignResponse DeletePredictiveDialingCampaign(Models\DeletePredictiveDialingCampaignRequest $req) This API is used to delete the predictive outbound call task.
 * @method Models\DeleteStaffResponse DeleteStaff(Models\DeleteStaffRequest $req) This API is used to delete the agent information.
 * @method Models\DescribeAICallExtractResultResponse DescribeAICallExtractResult(Models\DescribeAICallExtractResultRequest $req) Obtain AI call content extraction result
 * @method Models\DescribeAgentCruiseDialingCampaignResponse DescribeAgentCruiseDialingCampaign(Models\DescribeAgentCruiseDialingCampaignRequest $req) Query Agent Cruise-style Outbound Call Task
 * @method Models\DescribeAutoCalloutTaskResponse DescribeAutoCalloutTask(Models\DescribeAutoCalloutTaskRequest $req) This API is used to query automatic outbound call task details.
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
 * @method Models\DescribeSkillGroupInfoListResponse DescribeSkillGroupInfoList(Models\DescribeSkillGroupInfoListRequest $req) This API is used to access the skill group information list.
 * @method Models\DescribeStaffInfoListResponse DescribeStaffInfoList(Models\DescribeStaffInfoListRequest $req) This API is used to access the agent information list.
 * @method Models\DescribeStaffStatusMetricsResponse DescribeStaffStatusMetrics(Models\DescribeStaffStatusMetricsRequest $req) This API is used to access the real-time status statistics metrics of the agent.
 * @method Models\DescribeTelCallInfoResponse DescribeTelCallInfo(Models\DescribeTelCallInfoRequest $req) This API is used to access telephone consumption statistics by instance.
 * @method Models\DescribeTelCdrResponse DescribeTelCdr(Models\DescribeTelCdrRequest $req) This API is used to access phone service records and recordings.
 * @method Models\DescribeTelRecordAsrResponse DescribeTelRecordAsr(Models\DescribeTelRecordAsrRequest $req) Pull conversation recording for text information
 * @method Models\DescribeTelSessionResponse DescribeTelSession(Models\DescribeTelSessionRequest $req) This API is used to access the PSTN session information.
 * @method Models\DisableCCCPhoneNumberResponse DisableCCCPhoneNumber(Models\DisableCCCPhoneNumberRequest $req) This API is used to disable numbers.
 * @method Models\HangUpCallResponse HangUpCall(Models\HangUpCallRequest $req) This API is used to hang up the phone.
 * @method Models\ModifyExtensionResponse ModifyExtension(Models\ModifyExtensionRequest $req) This API is used to modify telephone accounts (binding skill group, binding agent account).
 * @method Models\ModifyOwnNumberApplyResponse ModifyOwnNumberApply(Models\ModifyOwnNumberApplyRequest $req) Modify customer's own number approval form
 * @method Models\ModifyStaffResponse ModifyStaff(Models\ModifyStaffRequest $req) This API is used to modify the customer service account.
 * @method Models\ModifyStaffPasswordResponse ModifyStaffPassword(Models\ModifyStaffPasswordRequest $req) Modify Agent's Password
 * @method Models\PausePredictiveDialingCampaignResponse PausePredictiveDialingCampaign(Models\PausePredictiveDialingCampaignRequest $req) This API is used to pause the predictive outbound call task.
 * @method Models\ResetExtensionPasswordResponse ResetExtensionPassword(Models\ResetExtensionPasswordRequest $req) This API is used to reset the telephone register password.
 * @method Models\ResumePredictiveDialingCampaignResponse ResumePredictiveDialingCampaign(Models\ResumePredictiveDialingCampaignRequest $req) This API is used to resume the predictive outbound call task.
 * @method Models\StopAutoCalloutTaskResponse StopAutoCalloutTask(Models\StopAutoCalloutTaskRequest $req) This API is used to stop the automatic outbound call task.
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
