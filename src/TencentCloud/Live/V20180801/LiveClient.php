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

namespace TencentCloud\Live\V20180801;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Live\V20180801\Models as Models;

/**
 * @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) This API is used to set a delay in playing the images of large live streaming events, in case of emergencies.

Note: if you are to set the delay before stream push, set it at least 5 minutes before the push. This API supports configuration only by stream.
 * @method Models\AddLiveDomainResponse AddLiveDomain(Models\AddLiveDomainRequest $req) This API is used to add a domain name. Only one domain name can be submitted at a time, and it must have an ICP filing.
 * @method Models\AddLiveWatermarkResponse AddLiveWatermark(Models\AddLiveWatermarkRequest $req) After a watermark is added and a watermark ID is successfully returned, you need to call the [CreateLiveWatermarkRule](https://intl.cloud.tencent.com/document/product/267/32629?from_cn_redirect=1) API to bind the watermark ID to a stream.
After the number of watermarks exceeds the upper limit of 100, to add a new watermark, you must delete an old one first.
 * @method Models\AuthenticateDomainOwnerResponse AuthenticateDomainOwner(Models\AuthenticateDomainOwnerRequest $req) This API is used to verify the ownership of a domain.
 * @method Models\CancelCommonMixStreamResponse CancelCommonMixStream(Models\CancelCommonMixStreamRequest $req) This API is used to cancel a stream mix. It can be used basically in the same way as `mix_streamv2.cancel_mix_stream`.
 * @method Models\CreateCommonMixStreamResponse CreateCommonMixStream(Models\CreateCommonMixStreamRequest $req) This API is used to create a general stream mix. It can be used basically in the same way as the legacy `mix_streamv2.start_mix_stream_advanced` API.
Note: currently, up to 16 streams can be mixed.
Best practice: https://intl.cloud.tencent.com/document/product/267/45566?from_cn_redirect=1
 * @method Models\CreateLiveCallbackRuleResponse CreateLiveCallbackRule(Models\CreateLiveCallbackRuleRequest $req) To create a callback rule, you need to first call the [CreateLiveCallbackTemplate](https://intl.cloud.tencent.com/document/product/267/32637?from_cn_redirect=1) API to create a callback template and bind the returned template ID to the domain name/path.
<br>Callback protocol-related document: [Event Message Notification](https://intl.cloud.tencent.com/document/product/267/32744?from_cn_redirect=1).
 * @method Models\CreateLiveCallbackTemplateResponse CreateLiveCallbackTemplate(Models\CreateLiveCallbackTemplateRequest $req) This API is used to create a callback template. Up to 50 templates can be created. After the template ID is returned, you need to call the [CreateLiveCallbackRule](https://intl.cloud.tencent.com/document/product/267/32638?from_cn_redirect=1) API to bind the template ID to a domain name/path.
<br>For information about callback protocols, see [How to Receive Event Notification](https://intl.cloud.tencent.com/document/product/267/32744?from_cn_redirect=1).
Note: You need to specify at least one callback URL.
 * @method Models\CreateLivePullStreamTaskResponse CreateLivePullStreamTask(Models\CreateLivePullStreamTaskRequest $req) This API is used to create a task to pull streams from video files or an external live streaming source and publish them to a specified destination URL.
Notes:
1. By default, you can have at most 20 stream pulling tasks at a time. You can submit a ticket to raise the limit.
2. Only H.264 and H.265 are supported for video. If the source video is in a different format, please transcode it first.
3. Only AAC is supported for audio. If the source audio is in a different format, please transcode it first.
4. You can enable auto deletion in the console to delete expired tasks automatically.
5. The pull and relay feature is a paid feature. For its billing details, see [Relay](https://intl.cloud.tencent.com/document/product/267/53308?from_cn_redirect=1).
6. CSS is only responsible for pulling and relaying content. Please make sure that your content is authorized and complies with relevant laws and regulations. In case of copyright infringement or violation of laws or regulations, CSS will suspend its service for you and reserves the right to seek legal remedies.
 * @method Models\CreateLiveRecordResponse CreateLiveRecord(Models\CreateLiveRecordRequest $req) - Prerequisites
  1. Recording files are stored on the VOD platform, so if you need to use the recording feature, you must first activate the VOD service.
  2. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) will be charged according to the VOD billing mode. For more information, please see the [corresponding document](https://intl.cloud.tencent.com/document/product/266/2838?from_cn_redirect=1).

- Mode description
  This API supports two recording modes:
  1. Scheduled recording mode **(default mode)**.
    The start time and end time need to be passed in, according to which the recording task will start and end automatically. Before the set end time expires (provided that `StopLiveRecord` is not called to terminate the task prematurely), the recording task is valid and will be started even after the push is interrupted and restarted multiple times.
  2. Real-time video recording mode.
    The start time passed in will be ignored, and recording will be started immediately after the recording task is created. The recording duration can be up to 30 minutes. If the end time passed in is more than 30 minutes after the current time, it will be counted as 30 minutes. Real-time video recording is mainly used for recording highlight scenes, and you are recommended to keep the duration within 5 minutes.

- Precautions
  1. The API call timeout period should be set to more than 3 seconds; otherwise, retries and calls by different start/end time values may result in repeated recording tasks and thus incur additional recording fees.
  2. Subject to the audio and video file formats (FLV/MP4/HLS), the video codec of H.264 and audio codec of AAC are supported.
  3. In order to avoid malicious or unintended frequent API requests, the maximum number of tasks that can be created in scheduled recording mode is limited: up to 4,000 tasks can be created per day (excluding deleted ones), and up to 400 ones can run concurrently. If you need a higher upper limit, please submit a ticket for application.
  4. This calling method does not support recording streams outside Mainland China for the time being.
 * @method Models\CreateLiveRecordRuleResponse CreateLiveRecordRule(Models\CreateLiveRecordRuleRequest $req) To create a recording rule, you need to first call the [CreateLiveRecordTemplate](https://intl.cloud.tencent.com/document/product/267/32614?from_cn_redirect=1) API to create a recording template and bind the returned template ID to the stream.
<br>Recording-related document: [LVB Recording](https://intl.cloud.tencent.com/document/product/267/32739?from_cn_redirect=1).
 * @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) This API is used to create a recording template. You can create up to 50 templates. To use a template, you need to call the [CreateLiveRecordRule](https://intl.cloud.tencent.com/document/product/267/32615?from_cn_redirect=1) API to bind the template ID returned by this API to a stream.
<br>More on recording: [Live Recording](https://intl.cloud.tencent.com/document/product/267/32739?from_cn_redirect=1)
 * @method Models\CreateLiveSnapshotRuleResponse CreateLiveSnapshotRule(Models\CreateLiveSnapshotRuleRequest $req) This API is used to create a screencapturing rule. You need to first call the [CreateLiveSnapshotTemplate](https://intl.cloud.tencent.com/document/product/267/32624?from_cn_redirect=1) API to create a screencapturing template to bind the returned template ID to the stream.
<br>Screencapturing document: [LVB Screencapturing](https://intl.cloud.tencent.com/document/product/267/32737?from_cn_redirect=1).
Note: only one screencapturing template can be associated with one domain name.
 * @method Models\CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplate(Models\CreateLiveSnapshotTemplateRequest $req) This API is used to create a screencapture template. After a template ID is returned, you need to call the [CreateLiveSnapshotRule](https://intl.cloud.tencent.com/document/product/267/32625?from_cn_redirect=1) API to bind the template ID to a stream. You can create up to 50 screencapture templates.
<br>To learn more about the live screencapture feature, see [Live Screencapture](https://intl.cloud.tencent.com/document/product/267/32737?from_cn_redirect=1).
 * @method Models\CreateLiveTimeShiftRuleResponse CreateLiveTimeShiftRule(Models\CreateLiveTimeShiftRuleRequest $req) This API is used to create a time shifting rule. You need to first call the [CreateLiveTranscodeTemplate](https://intl.cloud.tencent.com/document/product/267/86169?from_cn_redirect=1) API to create a time shifting template, and then call this API to bind the template ID returned to a stream.
<br>More about time shifting: [Time Shifting](https://intl.cloud.tencent.com/document/product/267/86134?from_cn_redirect=1).
 * @method Models\CreateLiveTimeShiftTemplateResponse CreateLiveTimeShiftTemplate(Models\CreateLiveTimeShiftTemplateRequest $req) This API is used to create a time shifting template.
 * @method Models\CreateLiveTranscodeRuleResponse CreateLiveTranscodeRule(Models\CreateLiveTranscodeRuleRequest $req) This API is used to create a transcoding rule that binds a template ID to a stream. Up to 50 transcoding rules can be created in total. Before you call this API, you need to first call [CreateLiveTranscodeTemplate](https://intl.cloud.tencent.com/document/product/267/32646?from_cn_redirect=1) to get the template ID.
<br>Related document: [Live Remuxing and Transcoding](https://intl.cloud.tencent.com/document/product/267/32736?from_cn_redirect=1).
 * @method Models\CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplate(Models\CreateLiveTranscodeTemplateRequest $req) This API is used to create a transcoding template. Up to 50 transcoding templates can be created in total. To use a template, you need to call [CreateLiveTranscodeRule](https://intl.cloud.tencent.com/document/product/267/32647?from_cn_redirect=1) to bind the template ID returned by this API to a stream.
<br>For more information about transcoding, see [Live Remuxing and Transcoding](https://intl.cloud.tencent.com/document/product/267/32736?from_cn_redirect=1).
 * @method Models\CreateLiveWatermarkRuleResponse CreateLiveWatermarkRule(Models\CreateLiveWatermarkRuleRequest $req) To create a watermarking rule, you need to first call the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API to add a watermark and bind the returned watermark ID to the stream.
 * @method Models\CreateRecordTaskResponse CreateRecordTask(Models\CreateRecordTaskRequest $req) This API is used to create a recording task that starts and ends at specific times and records videos according to a specific recording template.
- Prerequisites
1. Because recording files are saved in VOD, you must first activate VOD.
2. Storage and playback traffic fees are charged for storing and playing the videos recorded. For details, see [Purchase Guide](https://intl.cloud.tencent.com/document/product/266/2837).
- Notes
1. If streaming is interrupted, the current recording will stop and a recording file will be generated. When streaming resumes, as long as it’s before the end time of the task, recording will start again.
2. Avoid creating recording tasks with overlapping time periods. If there are multiple tasks with overlapping time periods for the same stream, the system will start three recording tasks at most to avoid repeated recording.
3. Task records are kept for three months by the platform.
4. Do not use the new [CreateRecordTask](https://intl.cloud.tencent.com/document/product/267/45983?from_cn_redirect=1), [StopRecordTask](https://intl.cloud.tencent.com/document/product/267/45981?from_cn_redirect=1), and [DeleteRecordTask] APIs together with the old `CreateLiveRecord`, `StopLiveRecord`, and `DeleteLiveRecord` APIs.
5. Do not create recording tasks and push streams at the same time. After creating a recording task, we recommend you wait at least three seconds before pushing streams.
 * @method Models\CreateScreenshotTaskResponse CreateScreenshotTask(Models\CreateScreenshotTaskRequest $req) This API is used to create a screencapturing task that has a specific start and end time and takes screenshots according to the template configured.
- Note
1. If the stream is interrupted, screencapturing will stop. However, the task will still be valid before the specified end time, and screencapturing will be performed as required after the stream is resumed.
2. Avoid creating screencapturing tasks with overlapping time periods. The system will execute at most three screencapturing tasks on the same stream at a time.
3. Task records are only kept for three months.
4. The new screencapturing APIs (CreateScreenshotTask/StopScreenshotTask/DeleteScreenshotTask) are not compatible with the legacy ones (CreateLiveInstantSnapshot/StopLiveInstantSnapshot). Do not mix them when you call APIs to manage screencapturing tasks.
5. If you create a screencapturing task and publish the stream at the same time, the task may fail to be executed at the specified time. After creating a screencapturing task, we recommend you wait at least three seconds before publishing the stream.
 * @method Models\DeleteLiveCallbackRuleResponse DeleteLiveCallbackRule(Models\DeleteLiveCallbackRuleRequest $req) This API is used to delete a callback rule.
 * @method Models\DeleteLiveCallbackTemplateResponse DeleteLiveCallbackTemplate(Models\DeleteLiveCallbackTemplateRequest $req) This API deletes a callback template.
 * @method Models\DeleteLiveDomainResponse DeleteLiveDomain(Models\DeleteLiveDomainRequest $req) This API is used to delete an added LVB domain name.
 * @method Models\DeleteLivePullStreamTaskResponse DeleteLivePullStreamTask(Models\DeleteLivePullStreamTaskRequest $req) This API is used to delete a task created by `CreateLivePullStreamTask`.
Notes:
1. For the `TaskId` request parameter, pass in the task ID returned by the `CreateLivePullStreamTask` API.
2. You can query the ID of a task using the `DescribeLivePullStreamTasks` API.
 * @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) Note: The `DeleteLiveRecord` API is only used to delete the record of recording tasks but not stop recording or deleting an ongoing recording task. If you need to stop a recording task, please use the [StopLiveRecord](https://intl.cloud.tencent.com/document/product/267/30146?from_cn_redirect=1) API.
 * @method Models\DeleteLiveRecordRuleResponse DeleteLiveRecordRule(Models\DeleteLiveRecordRuleRequest $req) This API is used to delete a recording rule.
 * @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) This API is used to delete a recording template.
 * @method Models\DeleteLiveSnapshotRuleResponse DeleteLiveSnapshotRule(Models\DeleteLiveSnapshotRuleRequest $req) This API is used to delete a screencapturing rule.
 * @method Models\DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplate(Models\DeleteLiveSnapshotTemplateRequest $req) This API is used to delete a screencapturing template.
 * @method Models\DeleteLiveTimeShiftRuleResponse DeleteLiveTimeShiftRule(Models\DeleteLiveTimeShiftRuleRequest $req) This API is used to delete a time shifting rule.
 * @method Models\DeleteLiveTimeShiftTemplateResponse DeleteLiveTimeShiftTemplate(Models\DeleteLiveTimeShiftTemplateRequest $req) This API is used to delete a time shifting template.
 * @method Models\DeleteLiveTranscodeRuleResponse DeleteLiveTranscodeRule(Models\DeleteLiveTranscodeRuleRequest $req) This API is used to delete a transcoding rule.
`DomainName+AppName+StreamName+TemplateId` uniquely identifies a single transcoding rule. If you need to delete it, strong match is required. `TemplateId` is required. Even if other parameters are empty, you still need to pass in an empty string to make a strong match.
 * @method Models\DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplate(Models\DeleteLiveTranscodeTemplateRequest $req) This API is used to delete a transcoding template.
 * @method Models\DeleteLiveWatermarkResponse DeleteLiveWatermark(Models\DeleteLiveWatermarkRequest $req) This API is used to delete a watermark.
 * @method Models\DeleteLiveWatermarkRuleResponse DeleteLiveWatermarkRule(Models\DeleteLiveWatermarkRuleRequest $req) This API is used to delete a watermarking rule.
 * @method Models\DeleteRecordTaskResponse DeleteRecordTask(Models\DeleteRecordTaskRequest $req) This API is used to delete a recording task configuration. The deletion does not affect running tasks and takes effect only for new pushes.
 * @method Models\DescribeAllStreamPlayInfoListResponse DescribeAllStreamPlayInfoList(Models\DescribeAllStreamPlayInfoListRequest $req) This API is used to get the playback data of all streams at a specified time point (accurate to the minute).
 * @method Models\DescribeBillBandwidthAndFluxListResponse DescribeBillBandwidthAndFluxList(Models\DescribeBillBandwidthAndFluxListRequest $req) This API is used to query the data of billable bandwidth and traffic.
 * @method Models\DescribeConcurrentRecordStreamNumResponse DescribeConcurrentRecordStreamNum(Models\DescribeConcurrentRecordStreamNumRequest $req) This API is used to query the number of concurrent recording channels, which is applicable to LCB and LVB.
 * @method Models\DescribeDeliverBandwidthListResponse DescribeDeliverBandwidthList(Models\DescribeDeliverBandwidthListRequest $req) This API is used to query the billable bandwidth of live stream relaying in the last 3 months. The query period is up to 31 days.
 * @method Models\DescribeGroupProIspPlayInfoListResponse DescribeGroupProIspPlayInfoList(Models\DescribeGroupProIspPlayInfoListRequest $req) This API is used to query the downstream playback data by district and ISP.
 * @method Models\DescribeHttpStatusInfoListResponse DescribeHttpStatusInfoList(Models\DescribeHttpStatusInfoListRequest $req) This API is used to query the number of each playback HTTP status code at a 5-minute granularity in a certain period of time.
Note: data can be queried one hour after it is generated. For example, data between 10:00 and 10:59 cannot be queried until 12:00.
 * @method Models\DescribeLiveCallbackRulesResponse DescribeLiveCallbackRules(Models\DescribeLiveCallbackRulesRequest $req) This API is used to get the callback rule list.
 * @method Models\DescribeLiveCallbackTemplateResponse DescribeLiveCallbackTemplate(Models\DescribeLiveCallbackTemplateRequest $req) This API is used to get a single callback template.
 * @method Models\DescribeLiveCallbackTemplatesResponse DescribeLiveCallbackTemplates(Models\DescribeLiveCallbackTemplatesRequest $req) This API is used to get the callback template list.
 * @method Models\DescribeLiveCertResponse DescribeLiveCert(Models\DescribeLiveCertRequest $req) This API is used to get certificate information.
 * @method Models\DescribeLiveCertsResponse DescribeLiveCerts(Models\DescribeLiveCertsRequest $req) This API is used to get the certificate information list.
 * @method Models\DescribeLiveDelayInfoListResponse DescribeLiveDelayInfoList(Models\DescribeLiveDelayInfoListRequest $req) This API is used to get the list of delayed playbacks.
 * @method Models\DescribeLiveDomainResponse DescribeLiveDomain(Models\DescribeLiveDomainRequest $req) This API is used to query the LVB domain name information.
 * @method Models\DescribeLiveDomainCertResponse DescribeLiveDomainCert(Models\DescribeLiveDomainCertRequest $req) This API is used to get the domain name certificate information.
 * @method Models\DescribeLiveDomainCertBindingsResponse DescribeLiveDomainCertBindings(Models\DescribeLiveDomainCertBindingsRequest $req) This API is used to query domains bound with certificates.
 * @method Models\DescribeLiveDomainRefererResponse DescribeLiveDomainReferer(Models\DescribeLiveDomainRefererRequest $req) This API is used to query referer allowlist/blocklist configuration of a live streaming domain name.
Referer information is included in HTTP requests. After you enable referer configuration, live streams using RTMP or WebRTC for playback will not authenticate the referer and can be played back normally. To make the referer configuration effective, the HTTP-FLV or HLS protocol is recommended for playback.
 * @method Models\DescribeLiveDomainsResponse DescribeLiveDomains(Models\DescribeLiveDomainsRequest $req) This API is used to query domain names by domain name status and type.
 * @method Models\DescribeLiveForbidStreamListResponse DescribeLiveForbidStreamList(Models\DescribeLiveForbidStreamListRequest $req) This API is used to get the list of disabled streams.

Note: this API is used for query only and should not be relied too much upon in important business scenarios.
 * @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) This API is used to query the playback authentication key.
 * @method Models\DescribeLivePullStreamTasksResponse DescribeLivePullStreamTasks(Models\DescribeLivePullStreamTasksRequest $req) This API is used to query the stream pulling tasks created by `CreateLivePullStreamTask`.
The tasks returned are sorted by last updated time in descending order.
 * @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) This API is used to query the LVB push authentication key.
 * @method Models\DescribeLiveRecordRulesResponse DescribeLiveRecordRules(Models\DescribeLiveRecordRulesRequest $req) This API is used to get the list of recording rules.
 * @method Models\DescribeLiveRecordTemplateResponse DescribeLiveRecordTemplate(Models\DescribeLiveRecordTemplateRequest $req) This API is used to get a single recording template.
 * @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) This API is used to get the recording template list.
 * @method Models\DescribeLiveSnapshotRulesResponse DescribeLiveSnapshotRules(Models\DescribeLiveSnapshotRulesRequest $req) This API is used to get the screencapturing rule list.
 * @method Models\DescribeLiveSnapshotTemplateResponse DescribeLiveSnapshotTemplate(Models\DescribeLiveSnapshotTemplateRequest $req) This API is used to get a single screencapturing template.
 * @method Models\DescribeLiveSnapshotTemplatesResponse DescribeLiveSnapshotTemplates(Models\DescribeLiveSnapshotTemplatesRequest $req) This API is used to get the screencapturing template list.
 * @method Models\DescribeLiveStreamEventListResponse DescribeLiveStreamEventList(Models\DescribeLiveStreamEventListRequest $req) This API is used to query stream push/interruption events.<br>

Notes:
1. This API is used to query stream push/interruption records, and should not be relied too much upon in important business scenarios.
2. You can use the `IsFilter` parameter of this API to filter and get required push records.
 * @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) This API is used to get the list of ongoing live streams. It queries the information of live streams after they are pushed successfully. 

Notes:
1. This API is used to query the list of active live streams only, and should not be relied too much upon in important business scenarios.
2. This API can query up to 20,000 streams. To query more streams, please contact our after-sales service team.

 * @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) This API is used to return the list of pushed streams. <br>
Note: Up to 10,000 entries can be queried per page. More data can be obtained by adjusting the query time range.
 * @method Models\DescribeLiveStreamPushInfoListResponse DescribeLiveStreamPushInfoList(Models\DescribeLiveStreamPushInfoListRequest $req) This API is used to query the push information of all real-time streams, including client IP, server IP, frame rate, bitrate, domain name, and push start time.
 * @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) This API is used to get the stream status, which may be active, inactive, or disabled.

Notes:
This API allows you to query the status of a stream in real time. Given external factors such as network jitter, note the following when you determine whether a host is online:
1. If possible, use your own logic of stream starting/stopping in a room, such as streaming signaling on the client and the online heartbeat of a host, to determine whether the host is online.
2. If your application does not provide the room management feature, use the following methods to determine whether a host is online:
2.1 Use the [live stream callback](https://intl.cloud.tencent.com/document/product/267/20388?from_cn_redirect=1).
2.2 Call [DescribeLiveStreamOnlineList](https://intl.cloud.tencent.com/document/api/267/20472?from_cn_redirect=1) on a regular basis (interval > 1 min).
2.3 Call this API.
2.4 A host is considered to be online if the result returned by any of the above methods indicates so. If an API call times out or a parsing error occurs, to minimize the impact on your business, CSS will also consider the host online.
 * @method Models\DescribeLiveTimeShiftBillInfoListResponse DescribeLiveTimeShiftBillInfoList(Models\DescribeLiveTimeShiftBillInfoListRequest $req) This API is used to query the time-shift video length, time-shift days, and total time-shift period of push domains. The data returned is on a five-minute basis. You can use it for reconciliation.
 * @method Models\DescribeLiveTimeShiftRulesResponse DescribeLiveTimeShiftRules(Models\DescribeLiveTimeShiftRulesRequest $req) This API is used to query time shifting rules.
 * @method Models\DescribeLiveTimeShiftTemplatesResponse DescribeLiveTimeShiftTemplates(Models\DescribeLiveTimeShiftTemplatesRequest $req) This API is used to query time shifting templates.
 * @method Models\DescribeLiveTranscodeDetailInfoResponse DescribeLiveTranscodeDetailInfo(Models\DescribeLiveTranscodeDetailInfoRequest $req) This API is used to query the transcoding details of a particular day or a specific time period. Querying may fail if the amount of data queried is too large. In such cases, try shortening the time period.
 * @method Models\DescribeLiveTranscodeRulesResponse DescribeLiveTranscodeRules(Models\DescribeLiveTranscodeRulesRequest $req) This API is used to get the list of transcoding rules.
 * @method Models\DescribeLiveTranscodeTemplateResponse DescribeLiveTranscodeTemplate(Models\DescribeLiveTranscodeTemplateRequest $req) This API is used to get a single transcoding template.
 * @method Models\DescribeLiveTranscodeTemplatesResponse DescribeLiveTranscodeTemplates(Models\DescribeLiveTranscodeTemplatesRequest $req) This API is used to get the transcoding template list.
 * @method Models\DescribeLiveTranscodeTotalInfoResponse DescribeLiveTranscodeTotalInfo(Models\DescribeLiveTranscodeTotalInfoRequest $req) This API is used to query transcoding usage. You can use it to query data in the past three months.
Notes:
If the start time and end time are on the same day, the data returned will be on a 5-minute basis.
If the start time and end time are not on the same day or if the data of specified domains is queried, the data returned will be on an hourly basis.
 * @method Models\DescribeLiveWatermarkResponse DescribeLiveWatermark(Models\DescribeLiveWatermarkRequest $req) This API is used to get the information of a single watermark.
 * @method Models\DescribeLiveWatermarkRulesResponse DescribeLiveWatermarkRules(Models\DescribeLiveWatermarkRulesRequest $req) This API is used to get the watermarking rule list.
 * @method Models\DescribeLiveWatermarksResponse DescribeLiveWatermarks(Models\DescribeLiveWatermarksRequest $req) This API is used to query the watermark list.
 * @method Models\DescribePlayErrorCodeDetailInfoListResponse DescribePlayErrorCodeDetailInfoList(Models\DescribePlayErrorCodeDetailInfoListRequest $req) This API is used to query the information of downstream playback error codes, i.e., the occurrences of each HTTP error code (4xx and 5xx) at a 1-minute granularity in a certain period of time.
 * @method Models\DescribePlayErrorCodeSumInfoListResponse DescribePlayErrorCodeSumInfoList(Models\DescribePlayErrorCodeSumInfoListRequest $req) This API is used to query the information of downstream playback error codes.
 * @method Models\DescribeProvinceIspPlayInfoListResponse DescribeProvinceIspPlayInfoList(Models\DescribeProvinceIspPlayInfoListRequest $req) This API is used to query the downstream playback data of a specified ISP in a specified district, including bandwidth, traffic, number of requests, and number of concurrent connections.
 * @method Models\DescribeRecordTaskResponse DescribeRecordTask(Models\DescribeRecordTaskRequest $req) This API is used to retrieve a list of recording tasks that were started and ended within a specified time range. 
- Prerequisites: 
1. This API is only used to query recording tasks created by the CreateRecordTask interface. 
2. It cannot retrieve recording tasks that have been deleted by the DeleteRecordTask interface or tasks that have expired (platform retains for 3 months).
 * @method Models\DescribeScreenShotSheetNumListResponse DescribeScreenShotSheetNumList(Models\DescribeScreenShotSheetNumListRequest $req) The API is used to query the number of screenshots as an LVB value-added service.
 * @method Models\DescribeStreamDayPlayInfoListResponse DescribeStreamDayPlayInfoList(Models\DescribeStreamDayPlayInfoListRequest $req) This API is used to query the playback data of each stream at the day level, including the total traffic.
 * @method Models\DescribeStreamPlayInfoListResponse DescribeStreamPlayInfoList(Models\DescribeStreamPlayInfoListRequest $req) This API is used to query the playback data. It supports querying the playback details by stream name and aggregated data by playback domain name. Data in the last 4 minutes or so cannot be queried due to delay.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
 * @method Models\DescribeStreamPushInfoListResponse DescribeStreamPushInfoList(Models\DescribeStreamPushInfoListRequest $req) This API is used to get the push data of a stream, including the audio/video frame rate, bitrate, elapsed time, and codec.
 * @method Models\DescribeTimeShiftRecordDetailResponse DescribeTimeShiftRecordDetail(Models\DescribeTimeShiftRecordDetailRequest $req) This API is used to query the time shifting details of a specific time period (up to 24 hours). You need to call `DescribeTimeShiftStreamList` first to get the request parameters of this API.
 * @method Models\DescribeTimeShiftStreamListResponse DescribeTimeShiftStreamList(Models\DescribeTimeShiftStreamListRequest $req) This API is used to query the time shifted streams in a specific time period (up to 24 hours).
 * @method Models\DescribeTopClientIpSumInfoListResponse DescribeTopClientIpSumInfoList(Models\DescribeTopClientIpSumInfoListRequest $req) This API is used to query the information of the top n client IPs in a certain period of time (top 1,000 is supported currently).
 * @method Models\DescribeTranscodeTaskNumResponse DescribeTranscodeTaskNum(Models\DescribeTranscodeTaskNumRequest $req) This API is used to query the number of transcoding tasks.
 * @method Models\DescribeUploadStreamNumsResponse DescribeUploadStreamNums(Models\DescribeUploadStreamNumsRequest $req) This API is used to query the number of LVB upstream channels.
 * @method Models\DescribeVisitTopSumInfoListResponse DescribeVisitTopSumInfoList(Models\DescribeVisitTopSumInfoListRequest $req) This API is used to query the information of the top n domain names or stream IDs in a certain period of time (top 1,000 is supported currently).
 * @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) This API is used to pause a live stream. The stream can be resumed if it is paused.
Note: If you call this API to pause an inactive stream, the request will be considered successful.
 * @method Models\EnableLiveDomainResponse EnableLiveDomain(Models\EnableLiveDomainRequest $req) This API is used to enable a disabled LVB domain name.
 * @method Models\ForbidLiveDomainResponse ForbidLiveDomain(Models\ForbidLiveDomainRequest $req) This API is used to disable an LVB domain name.
 * @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) This API is used to disable a stream. You can set a time to resume the stream.
Note:
1. As long as the correct stream name is passed in, the stream will be disabled successfully.
2. If you want a stream to be disabled only if the push domain, push path, and stream name match, please submit a ticket.
3. If you have configured domain groups, you must pass in the correct push domain in order to disable a stream.
 * @method Models\ModifyLiveCallbackTemplateResponse ModifyLiveCallbackTemplate(Models\ModifyLiveCallbackTemplateRequest $req) This API is used to modify a callback template.
 * @method Models\ModifyLiveDomainCertBindingsResponse ModifyLiveDomainCertBindings(Models\ModifyLiveDomainCertBindingsRequest $req) This API is used to bind a certificate to multiple playback domains and update the HTTPS configuration of the domains.
If a self-owned certificate is used, it will be automatically uploaded to Tencent Cloud’s SSL Certificate Service.
 * @method Models\ModifyLiveDomainRefererResponse ModifyLiveDomainReferer(Models\ModifyLiveDomainRefererRequest $req) This API is used to configure referer allowlist/blocklist of a live streaming domain name.
Referer information is included in HTTP requests. After you enable referer configuration, live streams using RTMP or WebRTC for playback will not authenticate the referer and can be played back normally. To make the referer configuration effective, the HTTP-FLV or HLS protocol is recommended for playback.
 * @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) This API is used to modify the playback authentication key.
 * @method Models\ModifyLivePlayDomainResponse ModifyLivePlayDomain(Models\ModifyLivePlayDomainRequest $req) This API is used to modify a playback domain name.
 * @method Models\ModifyLivePullStreamTaskResponse ModifyLivePullStreamTask(Models\ModifyLivePullStreamTaskRequest $req) This API is used to modify a stream pulling task. 
1. You cannot modify the destination URL. To publish to a new destination, please create a new task.
2. You cannot modify the source type. To use a different source type, please create a new task.
 * @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) This API is used to modify the LVB push authentication key.
 * @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) This API is used to modify the recording template configuration.
 * @method Models\ModifyLiveSnapshotTemplateResponse ModifyLiveSnapshotTemplate(Models\ModifyLiveSnapshotTemplateRequest $req) This API is used to modify the screencapturing template configuration.
 * @method Models\ModifyLiveTimeShiftTemplateResponse ModifyLiveTimeShiftTemplate(Models\ModifyLiveTimeShiftTemplateRequest $req) This API is used to modify a time shifting template.
 * @method Models\ModifyLiveTranscodeTemplateResponse ModifyLiveTranscodeTemplate(Models\ModifyLiveTranscodeTemplateRequest $req) This API is used to modify the transcoding template configuration.
 * @method Models\RestartLivePullStreamTaskResponse RestartLivePullStreamTask(Models\RestartLivePullStreamTaskRequest $req) Restart the running live streaming pull task.
 * @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) This API is used to cancel the delay setting and recover the real-time display of the live streaming image.
 * @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) This API is used to resume the push of a specific stream.
 * @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) Note: Recording files are stored on the VOD platform. To use the recording feature, you need to activate a VOD account and ensure that it is available. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) will be charged according to the VOD billing method. For more information, please see the corresponding document.
 * @method Models\StopRecordTaskResponse StopRecordTask(Models\StopRecordTaskRequest $req) This API is used to terminate an ongoing recording task and generate a recording file.
 * @method Models\UnBindLiveDomainCertResponse UnBindLiveDomainCert(Models\UnBindLiveDomainCertRequest $req) This API is used to unbind a domain name certificate.
 * @method Models\UpdateLiveWatermarkResponse UpdateLiveWatermark(Models\UpdateLiveWatermarkRequest $req) This API is used to update a watermark.
 */

class LiveClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "live.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "live";

    /**
     * @var string
     */
    protected $version = "2018-08-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("live")."\\"."V20180801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
