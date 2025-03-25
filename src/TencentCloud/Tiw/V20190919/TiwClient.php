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

namespace TencentCloud\Tiw\V20190919;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiw\V20190919\Models as Models;

/**
 * @method Models\ApplyTiwTrialResponse ApplyTiwTrial(Models\ApplyTiwTrialRequest $req) This API is used to apply for a Tencent Interactive Whiteboard trial (15-day by default).
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to create a whiteboard application.
 * @method Models\CreateSnapshotTaskResponse CreateSnapshotTask(Models\CreateSnapshotTaskRequest $req) This API is used to create a whiteboard snapshot task. If a callback URL is provided, the whiteboard snapshot result is sent to the callback URL after the task is complete.
 * @method Models\CreateTranscodeResponse CreateTranscode(Models\CreateTranscodeRequest $req) This API is used to create a document transcoding task.
 * @method Models\CreateVideoGenerationTaskResponse CreateVideoGenerationTask(Models\CreateVideoGenerationTaskRequest $req) This API is used to create a recording video generation task.
 * @method Models\DescribeAPIServiceResponse DescribeAPIService(Models\DescribeAPIServiceRequest $req) This API is used to query the information about other cloud products by using the service role.
 * @method Models\DescribeApplicationInfosResponse DescribeApplicationInfos(Models\DescribeApplicationInfosRequest $req) This API is used to query the details of a whiteboard application.
 * @method Models\DescribeApplicationUsageResponse DescribeApplicationUsage(Models\DescribeApplicationUsageRequest $req) This API is used to query the subproduct usage of Tencent Interactive Whiteboard.
 * @method Models\DescribeBoardSDKLogResponse DescribeBoardSDKLog(Models\DescribeBoardSDKLogRequest $req) This API is used to query the logs of a whiteboard application on a client.
 * @method Models\DescribeIMApplicationsResponse DescribeIMApplications(Models\DescribeIMApplicationsRequest $req) This API is used to query the instant messaging (IM) applications that are available for creating a whiteboard application.
 * @method Models\DescribeOnlineRecordResponse DescribeOnlineRecord(Models\DescribeOnlineRecordRequest $req) This API is used to query the status and result of a real-time recording task.
 * @method Models\DescribeOnlineRecordCallbackResponse DescribeOnlineRecordCallback(Models\DescribeOnlineRecordCallbackRequest $req) This API is used to query the real-time recording callback address.
 * @method Models\DescribePostpaidUsageResponse DescribePostpaidUsage(Models\DescribePostpaidUsageRequest $req) This API is used to query the pay-as-you-go usage of a user.
 * @method Models\DescribeQualityMetricsResponse DescribeQualityMetrics(Models\DescribeQualityMetricsRequest $req) This API is used to query the quality data of a whiteboard application.
 * @method Models\DescribeRecordSearchResponse DescribeRecordSearch(Models\DescribeRecordSearchRequest $req) This API is used to query real-time recording tasks by room ID.
 * @method Models\DescribeRoomListResponse DescribeRoomList(Models\DescribeRoomListRequest $req) This API is used to query the rooms of a whiteboard application.
 * @method Models\DescribeSnapshotTaskResponse DescribeSnapshotTask(Models\DescribeSnapshotTaskRequest $req) This API is used to query the information about a whiteboard snapshot task.
 * @method Models\DescribeTIWDailyUsageResponse DescribeTIWDailyUsage(Models\DescribeTIWDailyUsageRequest $req) This API is used to query the daily billable usage of a whiteboard application.
1. The period queried per request cannot be longer than 31 days.
2. Due to statistics delays and other reasons, you cannot query the usage data of the current day. You can query today's usage after 7:00 tomorrow.

 * @method Models\DescribeTIWRoomDailyUsageResponse DescribeTIWRoomDailyUsage(Models\DescribeTIWRoomDailyUsageRequest $req) This API is used to query the daily billable usage by each room of a whiteboard application.
1. The period queried per request cannot be longer than 31 days.
2. Due to statistics delays and other reasons, you cannot query the usage data of the current day. You can query today's usage after 7:00 tomorrow.

 * @method Models\DescribeTranscodeResponse DescribeTranscode(Models\DescribeTranscodeRequest $req) This API is used to query the progress and result of a document transcoding task.
 * @method Models\DescribeTranscodeCallbackResponse DescribeTranscodeCallback(Models\DescribeTranscodeCallbackRequest $req) This API is used to query the document transcoding callback address.
 * @method Models\DescribeTranscodeSearchResponse DescribeTranscodeSearch(Models\DescribeTranscodeSearchRequest $req) This API is used to query transcoding tasks by document name.
 * @method Models\DescribeUsageSummaryResponse DescribeUsageSummary(Models\DescribeUsageSummaryRequest $req) This API is used to query the summary of subproduct usage within a specified period of time.
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) This API is used to query the users of a whiteboard application.
 * @method Models\DescribeUserResourcesResponse DescribeUserResources(Models\DescribeUserResourcesRequest $req) This API is used to query user resources.
 * @method Models\DescribeUserStatusResponse DescribeUserStatus(Models\DescribeUserStatusRequest $req) This API is used to query the Tencent Interactive Whiteboard service status of a user, including the activation status and validity period.

 * @method Models\DescribeVideoGenerationTaskResponse DescribeVideoGenerationTask(Models\DescribeVideoGenerationTaskRequest $req) This API is used to query the status and result of a recording video generation task.
 * @method Models\DescribeVideoGenerationTaskCallbackResponse DescribeVideoGenerationTaskCallback(Models\DescribeVideoGenerationTaskCallbackRequest $req) This API is used to query the callback URL for recording video generation.
 * @method Models\DescribeWhiteboardApplicationConfigResponse DescribeWhiteboardApplicationConfig(Models\DescribeWhiteboardApplicationConfigRequest $req) This API is used to query the task-related configurations of a whiteboard application, including the bucket and callback URL.
 * @method Models\DescribeWhiteboardBucketConfigResponse DescribeWhiteboardBucketConfig(Models\DescribeWhiteboardBucketConfigRequest $req) This API is used to query the bucket configurations for document transcoding and real-time recording.
 * @method Models\DescribeWhiteboardPushResponse DescribeWhiteboardPush(Models\DescribeWhiteboardPushRequest $req) This API is used to query the status and result of a whiteboard push task.
 * @method Models\DescribeWhiteboardPushCallbackResponse DescribeWhiteboardPushCallback(Models\DescribeWhiteboardPushCallbackRequest $req) This API is used to query the whiteboard push callback URL.
 * @method Models\DescribeWhiteboardPushSearchResponse DescribeWhiteboardPushSearch(Models\DescribeWhiteboardPushSearchRequest $req) This API is used to query whiteboard push tasks by room ID.
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) This API is used to modify a whiteboard application.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to set auto-renewal for a Tencent Interactive Whiteboard monthly feature package.
 * @method Models\ModifyWhiteboardApplicationConfigResponse ModifyWhiteboardApplicationConfig(Models\ModifyWhiteboardApplicationConfigRequest $req) This API is used to modify the task-related configurations of a whiteboard application, including the bucket and callback URL.
 * @method Models\ModifyWhiteboardBucketConfigResponse ModifyWhiteboardBucketConfig(Models\ModifyWhiteboardBucketConfigRequest $req) This API is used to modify the bucket configurations for document transcoding and real-time recording.
 * @method Models\PauseOnlineRecordResponse PauseOnlineRecord(Models\PauseOnlineRecordRequest $req) This API is used to pause real-time recording.
 * @method Models\ResumeOnlineRecordResponse ResumeOnlineRecord(Models\ResumeOnlineRecordRequest $req) This API is used to resume real-time recording.
 * @method Models\SetOnlineRecordCallbackResponse SetOnlineRecordCallback(Models\SetOnlineRecordCallbackRequest $req) This API is used to set the real-time recording callback address. For the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\SetOnlineRecordCallbackKeyResponse SetOnlineRecordCallbackKey(Models\SetOnlineRecordCallbackKeyRequest $req) This API is used to set the callback authentication key for real-time recording. For more information, see [Event Notification](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\SetTranscodeCallbackResponse SetTranscodeCallback(Models\SetTranscodeCallbackRequest $req) This API is used to set the callback address for document transcoding. For the callback format, please [see here](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\SetTranscodeCallbackKeyResponse SetTranscodeCallbackKey(Models\SetTranscodeCallbackKeyRequest $req) This API is used to set the callback authentication key for document transcoding. For more information, see [Event Notification](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\SetVideoGenerationTaskCallbackResponse SetVideoGenerationTaskCallback(Models\SetVideoGenerationTaskCallbackRequest $req) This API is used to set the callback URL for recording video generation.
 * @method Models\SetVideoGenerationTaskCallbackKeyResponse SetVideoGenerationTaskCallbackKey(Models\SetVideoGenerationTaskCallbackKeyRequest $req) This API is used to set the callback authentication key for recording video generation.
 * @method Models\SetWhiteboardPushCallbackResponse SetWhiteboardPushCallback(Models\SetWhiteboardPushCallbackRequest $req) This API is used to set the whiteboard push callback URL. For more information, see [Event Notification](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\SetWhiteboardPushCallbackKeyResponse SetWhiteboardPushCallbackKey(Models\SetWhiteboardPushCallbackKeyRequest $req) This API is used to set the callback authentication key for whiteboard push. For more information, see [Event Notification](https://www.tencentcloud.com/document/product/1176/55569).
 * @method Models\StartOnlineRecordResponse StartOnlineRecord(Models\StartOnlineRecordRequest $req) This API is used to start a real-time recording task.
 * @method Models\StartWhiteboardPushResponse StartWhiteboardPush(Models\StartWhiteboardPushRequest $req) This API is used to start a whiteboard push task.
 * @method Models\StopOnlineRecordResponse StopOnlineRecord(Models\StopOnlineRecordRequest $req) This API is used to stop real-time recording.
 * @method Models\StopWhiteboardPushResponse StopWhiteboardPush(Models\StopWhiteboardPushRequest $req) This API is used to stop a whiteboard push task.
 */

class TiwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tiw.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tiw";

    /**
     * @var string
     */
    protected $version = "2019-09-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("tiw")."\\"."V20190919\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
