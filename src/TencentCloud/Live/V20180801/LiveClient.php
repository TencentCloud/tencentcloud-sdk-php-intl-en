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
 * @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) This API is used to set the delay time for a stream.
Note: if you want to set delayed playback before pushing, you need to do so 5 minutes in advance.
Currently, this API only supports stream granularity, and the feature supporting domain name and application granularities will be available in the future.
Use case: for important live streams, you can set delayed playback in advance to avoid contingency issues.

 * @method Models\AddLiveDomainResponse AddLiveDomain(Models\AddLiveDomainRequest $req) This API is used to add a domain name. Only one domain name can be submitted at a time, and it must have an ICP filing.
 * @method Models\AddLiveWatermarkResponse AddLiveWatermark(Models\AddLiveWatermarkRequest $req) After a watermark is added and a watermark ID is successfully returned, you need to call the [CreateLiveWatermarkRule](https://intl.cloud.tencent.com/document/product/267/32629?from_cn_redirect=1) API to bind the watermark ID to a stream.
After the number of watermarks exceeds the upper limit of 100, to add a new watermark, you must delete an old one first.
 * @method Models\BindLiveDomainCertResponse BindLiveDomainCert(Models\BindLiveDomainCertRequest $req) This API is used to bind a domain name certificate.
Note: you need to call the `CreateLiveCert` API first to add a certificate. After getting the certificate ID, call this API for binding.
 * @method Models\CancelCommonMixStreamResponse CancelCommonMixStream(Models\CancelCommonMixStreamRequest $req) This API is used to cancel a stream mix. It can be used basically in the same way as `mix_streamv2.cancel_mix_stream`.
 * @method Models\CreateCommonMixStreamResponse CreateCommonMixStream(Models\CreateCommonMixStreamRequest $req) This API is used to create a general stream mix. It can be used basically in the same way as the legacy `mix_streamv2.start_mix_stream_advanced` API.
Note: currently, up to 16 streams can be mixed.
Best practice: https://intl.cloud.tencent.com/document/product/267/45566?from_cn_redirect=1
 * @method Models\CreateLiveCallbackRuleResponse CreateLiveCallbackRule(Models\CreateLiveCallbackRuleRequest $req) To create a callback rule, you need to first call the [CreateLiveCallbackTemplate](https://intl.cloud.tencent.com/document/product/267/32637?from_cn_redirect=1) API to create a callback template and bind the returned template ID to the domain name/path.
<br>Callback protocol-related document: [Event Message Notification](https://intl.cloud.tencent.com/document/product/267/32744?from_cn_redirect=1).
 * @method Models\CreateLiveCallbackTemplateResponse CreateLiveCallbackTemplate(Models\CreateLiveCallbackTemplateRequest $req) After a callback template is created and a template ID is successfully returned, you need to call the [CreateLiveCallbackRule](https://intl.cloud.tencent.com/document/product/267/32638?from_cn_redirect=1) API and bind the template ID to the domain name/path.
<br>Callback protocol document: [Event Message Notification](https://intl.cloud.tencent.com/document/product/267/32744?from_cn_redirect=1).
Note: at least enter one callback URL.
 * @method Models\CreateLiveCertResponse CreateLiveCert(Models\CreateLiveCertRequest $req) This API is used to add a certificate.
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
 * @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) After a recording template is created and a template ID is successfully returned, you need to call the [CreateLiveRecordRule](https://intl.cloud.tencent.com/document/product/267/32615?from_cn_redirect=1) API and bind the template ID to the stream.
<br>Recording-related document: [LVB Recording](https://intl.cloud.tencent.com/document/product/267/32739?from_cn_redirect=1).
 * @method Models\CreateLiveSnapshotRuleResponse CreateLiveSnapshotRule(Models\CreateLiveSnapshotRuleRequest $req) This API is used to create a screencapturing rule. You need to first call the [CreateLiveSnapshotTemplate](https://intl.cloud.tencent.com/document/product/267/32624?from_cn_redirect=1) API to create a screencapturing template to bind the returned template ID to the stream.
<br>Screencapturing document: [LVB Screencapturing](https://intl.cloud.tencent.com/document/product/267/32737?from_cn_redirect=1).
Note: only one screencapturing template can be associated with one domain name.
 * @method Models\CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplate(Models\CreateLiveSnapshotTemplateRequest $req) After a screencapturing template is created and a template ID is successfully returned, you need to call the [CreateLiveSnapshotRule](https://intl.cloud.tencent.com/document/product/267/32625?from_cn_redirect=1) API and bind the template ID to the stream.
<br>Screencapturing-related document: [LVB Screencapturing](https://intl.cloud.tencent.com/document/product/267/32737?from_cn_redirect=1).
 * @method Models\CreateLiveTranscodeRuleResponse CreateLiveTranscodeRule(Models\CreateLiveTranscodeRuleRequest $req) To create a transcoding rule, you need to first call the [CreateLiveTranscodeTemplate](https://intl.cloud.tencent.com/document/product/267/32646?from_cn_redirect=1) API to create a transcoding template and bind the returned template ID to the stream.
<br>Transcoding-related document: [LVB Remuxing and Transcoding](https://intl.cloud.tencent.com/document/product/267/32736?from_cn_redirect=1).
 * @method Models\CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplate(Models\CreateLiveTranscodeTemplateRequest $req) After a transcoding template is created and a template ID is successfully returned, you need to call the [CreateLiveTranscodeRule](https://intl.cloud.tencent.com/document/product/267/32647?from_cn_redirect=1) API and bind the returned template ID to the stream.
<br>Transcoding-related document: [LVB Remuxing and Transcoding](https://intl.cloud.tencent.com/document/product/267/32736?from_cn_redirect=1).
 * @method Models\CreateLiveWatermarkRuleResponse CreateLiveWatermarkRule(Models\CreateLiveWatermarkRuleRequest $req) To create a watermarking rule, you need to first call the [AddLiveWatermark](https://intl.cloud.tencent.com/document/product/267/30154?from_cn_redirect=1) API to add a watermark and bind the returned watermark ID to the stream.
 * @method Models\CreateRecordTaskResponse CreateRecordTask(Models\CreateRecordTaskRequest $req) This API is used to create a recording task that starts and ends at specified times and records by using the configuration corresponding to a specified recording template ID.
- Prerequisites
1. Recording files are stored on the VOD platform, so if you need to use the recording feature, you must first activate the VOD service.
2. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) are charged according to the VOD billing method. For details, see the [corresponding document](https://intl.cloud.tencent.com/document/product/266/2837?from_cn_redirect=1).
- Precautions
1. An interruption will end the current recording and generate a recording file. The task will still be valid before the end time expires, and the stream will be recorded within this period as long as it is pushed, regardless of whether the push is interrupted or restarted multiple times.
2. Avoid creating recording tasks with overlapping time periods. If there are multiple tasks with overlapping time periods for the same stream, the system will start three recording tasks at most to avoid repeated recording.
3. The record of a created recording task will be retained for 3 months on the platform.
4. The current recording task management APIs (CreateRecordTask/StopRecordTask/DeleteRecordTask) are not compatible with the legacy APIs (CreateLiveRecord/StopLiveRecord/DeleteLiveRecord), and they cannot be used together.
5. Do not create recording tasks and push streams at the same time, or recording tasks might not take effect and be delayed. Wait at least 3 seconds between each action.
 * @method Models\DeleteLiveCallbackRuleResponse DeleteLiveCallbackRule(Models\DeleteLiveCallbackRuleRequest $req) This API is used to delete a callback rule.
 * @method Models\DeleteLiveCallbackTemplateResponse DeleteLiveCallbackTemplate(Models\DeleteLiveCallbackTemplateRequest $req) This API deletes a callback template.
 * @method Models\DeleteLiveCertResponse DeleteLiveCert(Models\DeleteLiveCertRequest $req) This API is used to delete a certificate corresponding to the domain name.
 * @method Models\DeleteLiveDomainResponse DeleteLiveDomain(Models\DeleteLiveDomainRequest $req) This API is used to delete an added LVB domain name.
 * @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) Note: The `DeleteLiveRecord` API is only used to delete the record of recording tasks but not stop recording or deleting an ongoing recording task. If you need to stop a recording task, please use the [StopLiveRecord](https://intl.cloud.tencent.com/document/product/267/30146?from_cn_redirect=1) API.
 * @method Models\DeleteLiveRecordRuleResponse DeleteLiveRecordRule(Models\DeleteLiveRecordRuleRequest $req) This API is used to delete a recording rule.
 * @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) This API is used to delete a recording template.
 * @method Models\DeleteLiveSnapshotRuleResponse DeleteLiveSnapshotRule(Models\DeleteLiveSnapshotRuleRequest $req) This API is used to delete a screencapturing rule.
 * @method Models\DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplate(Models\DeleteLiveSnapshotTemplateRequest $req) This API is used to delete a screencapturing template.
 * @method Models\DeleteLiveTranscodeRuleResponse DeleteLiveTranscodeRule(Models\DeleteLiveTranscodeRuleRequest $req) This API is used to delete a transcoding rule.
`DomainName+AppName+StreamName+TemplateId` uniquely identifies a single transcoding rule. If you need to delete it, strong match is required. `TemplateId` is required. Even if other parameters are empty, you still need to pass in an empty string to make a strong match.
 * @method Models\DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplate(Models\DeleteLiveTranscodeTemplateRequest $req) This API is used to delete a transcoding template.
 * @method Models\DeleteLiveWatermarkResponse DeleteLiveWatermark(Models\DeleteLiveWatermarkRequest $req) This API is used to delete a watermark.
 * @method Models\DeleteLiveWatermarkRuleResponse DeleteLiveWatermarkRule(Models\DeleteLiveWatermarkRuleRequest $req) This API is used to delete a watermarking rule.
 * @method Models\DeleteRecordTaskResponse DeleteRecordTask(Models\DeleteRecordTaskRequest $req) This API is used to delete a recording task configuration. The deletion does not affect running tasks and takes effect only for new pushes.
 * @method Models\DescribeAllStreamPlayInfoListResponse DescribeAllStreamPlayInfoList(Models\DescribeAllStreamPlayInfoListRequest $req) This API is used to query the downstream information of all streams at a specified point in time (at a 1-minute granularity).
 * @method Models\DescribeAreaBillBandwidthAndFluxListResponse DescribeAreaBillBandwidthAndFluxList(Models\DescribeAreaBillBandwidthAndFluxListRequest $req) This API is used to query the billable LVB bandwidth and traffic data outside Chinese mainland.
 * @method Models\DescribeBillBandwidthAndFluxListResponse DescribeBillBandwidthAndFluxList(Models\DescribeBillBandwidthAndFluxListRequest $req) This API is used to query the data of billable LVB bandwidth and traffic.
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
 * @method Models\DescribeLiveDomainPlayInfoListResponse DescribeLiveDomainPlayInfoList(Models\DescribeLiveDomainPlayInfoListRequest $req) This API is used to query the real-time downstream playback data at the domain name level. As it takes certain time to process data, the API queries quasi-real-time data generated 4 minutes ago by default.
 * @method Models\DescribeLiveDomainsResponse DescribeLiveDomains(Models\DescribeLiveDomainsRequest $req) This API is used to query domain names by domain name status and type.
 * @method Models\DescribeLiveForbidStreamListResponse DescribeLiveForbidStreamList(Models\DescribeLiveForbidStreamListRequest $req) This API is used to get the forbidden stream list.
 * @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) This API is used to query the playback authentication key.
 * @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) This API is used to query the LVB push authentication key.
 * @method Models\DescribeLiveRecordRulesResponse DescribeLiveRecordRules(Models\DescribeLiveRecordRulesRequest $req) This API is used to get the list of recording rules.
 * @method Models\DescribeLiveRecordTemplateResponse DescribeLiveRecordTemplate(Models\DescribeLiveRecordTemplateRequest $req) This API is used to get a single recording template.
 * @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) This API is used to get the recording template list.
 * @method Models\DescribeLiveSnapshotRulesResponse DescribeLiveSnapshotRules(Models\DescribeLiveSnapshotRulesRequest $req) This API is used to get the screencapturing rule list.
 * @method Models\DescribeLiveSnapshotTemplateResponse DescribeLiveSnapshotTemplate(Models\DescribeLiveSnapshotTemplateRequest $req) This API is used to get a single screencapturing template.
 * @method Models\DescribeLiveSnapshotTemplatesResponse DescribeLiveSnapshotTemplates(Models\DescribeLiveSnapshotTemplatesRequest $req) This API is used to get the screencapturing template list.
 * @method Models\DescribeLiveStreamEventListResponse DescribeLiveStreamEventList(Models\DescribeLiveStreamEventListRequest $req) This API is used to query streaming events.<br>

Note: This API can filter by IsFilter and return the push history.
 * @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) This API is used to return a list of live streams. It queries the information of live streams after they are pushed successfully.
Note: this API can query up to 20,000 streams. If you want to query more than 20,000 streams, please contact after-sales service.
 * @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) This API is used to return the list of pushed streams. <br>
Note: Up to 10,000 entries can be queried per page. More data can be obtained by adjusting the query time range.
 * @method Models\DescribeLiveStreamPushInfoListResponse DescribeLiveStreamPushInfoList(Models\DescribeLiveStreamPushInfoListRequest $req) This API is used to query the push information of all real-time streams, including client IP, server IP, frame rate, bitrate, domain name, and push start time.
 * @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) This API is used to return the stream status such as active, inactive, or forbidden.
 * @method Models\DescribeLiveTranscodeDetailInfoResponse DescribeLiveTranscodeDetailInfo(Models\DescribeLiveTranscodeDetailInfoRequest $req) This API is used to query the details of transcoding on a specified day or in a specified period of time.
 * @method Models\DescribeLiveTranscodeRulesResponse DescribeLiveTranscodeRules(Models\DescribeLiveTranscodeRulesRequest $req) This API is used to get the list of transcoding rules.
 * @method Models\DescribeLiveTranscodeTemplateResponse DescribeLiveTranscodeTemplate(Models\DescribeLiveTranscodeTemplateRequest $req) This API is used to get a single transcoding template.
 * @method Models\DescribeLiveTranscodeTemplatesResponse DescribeLiveTranscodeTemplates(Models\DescribeLiveTranscodeTemplatesRequest $req) This API is used to get the transcoding template list.
 * @method Models\DescribeLiveWatermarkResponse DescribeLiveWatermark(Models\DescribeLiveWatermarkRequest $req) This API is used to get the information of a single watermark.
 * @method Models\DescribeLiveWatermarkRulesResponse DescribeLiveWatermarkRules(Models\DescribeLiveWatermarkRulesRequest $req) This API is used to get the watermarking rule list.
 * @method Models\DescribeLiveWatermarksResponse DescribeLiveWatermarks(Models\DescribeLiveWatermarksRequest $req) This API is used to query the watermark list.
 * @method Models\DescribePlayErrorCodeDetailInfoListResponse DescribePlayErrorCodeDetailInfoList(Models\DescribePlayErrorCodeDetailInfoListRequest $req) This API is used to query the information of downstream playback error codes, i.e., the occurrences of each HTTP error code (4xx and 5xx) at a 1-minute granularity in a certain period of time.


 * @method Models\DescribePlayErrorCodeSumInfoListResponse DescribePlayErrorCodeSumInfoList(Models\DescribePlayErrorCodeSumInfoListRequest $req) This API is used to query the information of downstream playback error codes.
 * @method Models\DescribeProIspPlaySumInfoListResponse DescribeProIspPlaySumInfoList(Models\DescribeProIspPlaySumInfoListRequest $req) This API is used to query the average traffic per second, total traffic, and number of total requests by country/region, district, and ISP in a certain period of time.
 * @method Models\DescribeProvinceIspPlayInfoListResponse DescribeProvinceIspPlayInfoList(Models\DescribeProvinceIspPlayInfoListRequest $req) This API is used to query the downstream playback data of a specified ISP in a specified district, including bandwidth, traffic, number of requests, and number of concurrent connections.
 * @method Models\DescribeScreenShotSheetNumListResponse DescribeScreenShotSheetNumList(Models\DescribeScreenShotSheetNumListRequest $req) The API is used to query the number of screenshots as an LVB value-added service.
 * @method Models\DescribeStreamDayPlayInfoListResponse DescribeStreamDayPlayInfoList(Models\DescribeStreamDayPlayInfoListRequest $req) This API is used to query the playback data of each stream at the day level, including the total traffic.
 * @method Models\DescribeStreamPlayInfoListResponse DescribeStreamPlayInfoList(Models\DescribeStreamPlayInfoListRequest $req) This API is used to query the playback data. It supports querying the playback details by stream name and aggregated data by playback domain name. Data in the last 4 minutes or so cannot be queried due to delay.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
 * @method Models\DescribeStreamPushInfoListResponse DescribeStreamPushInfoList(Models\DescribeStreamPushInfoListRequest $req) This API is used to query the upstream push quality data by stream ID, including frame rate, bitrate, elapsed time, and codec of audio and video files.
 * @method Models\DescribeTopClientIpSumInfoListResponse DescribeTopClientIpSumInfoList(Models\DescribeTopClientIpSumInfoListRequest $req) This API is used to query the information of the top n client IPs in a certain period of time (top 1,000 is supported currently).
 * @method Models\DescribeUploadStreamNumsResponse DescribeUploadStreamNums(Models\DescribeUploadStreamNumsRequest $req) This API is used to query the number of LVB upstream channels.
 * @method Models\DescribeVisitTopSumInfoListResponse DescribeVisitTopSumInfoList(Models\DescribeVisitTopSumInfoListRequest $req) This API is used to query the information of the top n domain names or stream IDs in a certain period of time (top 1,000 is supported currently).
 * @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) This API is used to disconnect the push connection, which can be resumed.
 * @method Models\EnableLiveDomainResponse EnableLiveDomain(Models\EnableLiveDomainRequest $req) This API is used to enable a disabled LVB domain name.
 * @method Models\ForbidLiveDomainResponse ForbidLiveDomain(Models\ForbidLiveDomainRequest $req) This API is used to disable an LVB domain name.
 * @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) This API is used to forbid the push of a specific stream. You can preset a time point to resume the stream.
 * @method Models\ModifyLiveCallbackTemplateResponse ModifyLiveCallbackTemplate(Models\ModifyLiveCallbackTemplateRequest $req) This API is used to modify a callback template.
 * @method Models\ModifyLiveCertResponse ModifyLiveCert(Models\ModifyLiveCertRequest $req) This API is used to modify a certificate.
 * @method Models\ModifyLiveDomainCertResponse ModifyLiveDomainCert(Models\ModifyLiveDomainCertRequest $req) This API is used to modify the domain name and certificate binding information.
 * @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) This API is used to modify the playback authentication key.
 * @method Models\ModifyLivePlayDomainResponse ModifyLivePlayDomain(Models\ModifyLivePlayDomainRequest $req) This API is used to modify a playback domain name.
 * @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) This API is used to modify the LVB push authentication key.
 * @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) This API is used to modify the recording template configuration.
 * @method Models\ModifyLiveSnapshotTemplateResponse ModifyLiveSnapshotTemplate(Models\ModifyLiveSnapshotTemplateRequest $req) This API is used to modify the screencapturing template configuration.
 * @method Models\ModifyLiveTranscodeTemplateResponse ModifyLiveTranscodeTemplate(Models\ModifyLiveTranscodeTemplateRequest $req) This API is used to modify the transcoding template configuration.
 * @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) This API is used to resume a delayed playback.
 * @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) This API is used to resume the push of a specific stream.
 * @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) Note: Recording files are stored on the VOD platform. To use the recording feature, you need to activate a VOD account and ensure that it is available. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) will be charged according to the VOD billing method. For more information, please see the corresponding document.
 * @method Models\StopRecordTaskResponse StopRecordTask(Models\StopRecordTaskRequest $req) This API is used to end a recording prematurely and terminate an ongoing recording task. After the task is successfully terminated, it will not restart.
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
