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

namespace TencentCloud\Trtc\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trtc\V20190722\Models as Models;

/**
 * @method Models\ControlAIConversationResponse ControlAIConversation(Models\ControlAIConversationRequest $req) Provides server-side control of AI Conversation
 * @method Models\CreateCloudModerationResponse CreateCloudModeration(Models\CreateCloudModerationRequest $req) API description:
This API is used to enable the cloud moderation feature to complete audio and video slicing, video frame extraction, and audio stream recording in the room, and submit them to the specified moderation supplier for completing the moderation.

This API is used to achieve the following goals:
* This API is used to specify the moderation parameters (ModerationParams) to specify the detailed parameters required for moderation.
* This API is used to specify the storage parameter (SliceStorageParams) to specify the cloud storage you want to upload the file complying with the moderation policy to. Currently, Tencent Cloud Object Storage (COS) and third-party AWS are supported.
 * @method Models\CreateCloudRecordingResponse CreateCloudRecording(Models\CreateCloudRecordingRequest $req) API description:
This API is used to start an on-cloud recording task. It records the audio and video streams in a room and saves them to the specified cloud storage. You can use this API to record the streams in a room separately, or you can mix the streams first and then record the mixed stream.

You can use this API to perform the following operations:
* Specify the anchors whose streams you want or do not want to record by using the `RecordParams` parameter
* Specify the storage service you want to save recording files to by using the `StorageParams` parameter. Currently, you can save recording files to Tencent Cloud VOD or COS.
* Specify transcoding settings for mixed-stream recording, including video resolution, video bitrate, frame rate, and audio quality, by using `MixTranscodeParams`
* Specify the layout of different videos in mixed-stream recording mode or select an auto-arranged layout template

Key concepts:
* Single-stream recording: Record the audio and video of each subscribed user (`UserId`) in a room and save the recording files to the storage you specify.
Mixed-stream recording: Mix the audios and videos of subscribed users (`UserId`) in a room, record the mixed stream, and save the recording files to the storage you specify. After a recording task ends, you can go to the VOD console (https://console.tencentcloud.com/vod/media) or [COS console](https://console.cloud.tencent.com/cos/bucket) to view the recording files.
 * @method Models\CreateCloudSliceTaskResponse CreateCloudSliceTask(Models\CreateCloudSliceTaskRequest $req) API description:
This API is used to enable the cloud slicing feature, completing audio and video slicing tasks in the room, and uploading them to the specified cloud storage.
This API is used to achieve the following goals:
* This API is used to specify the slicing parameter (SliceParams) to define the blocklist or allowlist of the anchors that require slicing.
* This API is used to specify the storage parameter (SliceStorageParams) to specify the cloud storage you want to upload to. Currently, Tencent Cloud Object Storage (COS) and third-party AWS are supported.
 * @method Models\DeleteCloudModerationResponse DeleteCloudModeration(Models\DeleteCloudModerationRequest $req) This API is used to stop submission for moderation after the cloud moderation task is successfully started.
 * @method Models\DeleteCloudRecordingResponse DeleteCloudRecording(Models\DeleteCloudRecordingRequest $req) This API is used to stop a recording task. If a task is stopped successfully, but the uploading of recording files has not completed, the backend will continue to upload the files and will notify you via a callback when the upload is completed.
 * @method Models\DeleteCloudSliceTaskResponse DeleteCloudSliceTask(Models\DeleteCloudSliceTaskRequest $req) This API is used to stop the slicing task after it is started. Successfully stopping the slicing does not mean that all files are fully transmitted; if the transmission is not completed, the backend will continue to upload files. After the upload is successful, a notification is sent to the customer, prompting that all files have been transmitted, through the event callback.
 * @method Models\DescribeAIConversationResponse DescribeAIConversation(Models\DescribeAIConversationRequest $req) Describe the AI conversation task status
 * @method Models\DescribeAITranscriptionResponse DescribeAITranscription(Models\DescribeAITranscriptionRequest $req) Describe AI transcription task status
 * @method Models\DescribeCallDetailInfoResponse DescribeCallDetailInfo(Models\DescribeCallDetailInfoRequest $req) This API (the old `DescribeCallDetail`) is used to query the user list and call quality data of a specified time range in the last 14 days. If `DataType` is not null, the data of up to six users during a period of up to one hour can be queried (the period can start and end on different days). If `DataType` is null, the data of up to 100 users can be returned per page (the value of `PageSize` cannot exceed 100). Six users are queried by default. The period queried cannot exceed four hours. This API is used to query call quality and is not recommended for billing purposes.
**Note**:
1. You can use this API to query historical data or for reconciliation purposes, but we do not recommend you use it for crucial business logic.
2. If you need to call this API, please upgrade the monitoring dashboard version to "Standard". For more details, please refer to: https://trtc.io/document/54481?product=pricing.
 * @method Models\DescribeCloudModerationResponse DescribeCloudModeration(Models\DescribeCloudModerationRequest $req) This API is used to query the status of the moderation task and information about the subscription blocklist and allowlist after the task is started, which is valid only when the task is in progress. An error will be returned if the task is exited.
 * @method Models\DescribeCloudRecordingResponse DescribeCloudRecording(Models\DescribeCloudRecordingRequest $req) This API is used to query the status of a recording task after it starts. It works only when a task is in progress. If the task has already ended when this API is called, an error will be returned.
If a recording file is being uploaded to VOD, the response parameter `StorageFileList` will not contain the information of the recording file. Please listen for the recording file callback to get the information.
 * @method Models\DescribeCloudSliceTaskResponse DescribeCloudSliceTask(Models\DescribeCloudSliceTaskRequest $req) This API is used to query the status of the slicing task after it is started, which is valid only when the task is in progress. An error will be returned if the task is exited.
 * @method Models\DescribeMixTranscodingUsageResponse DescribeMixTranscodingUsage(Models\DescribeMixTranscodingUsageRequest $req) This API is used to query your usage of TRTC’s On-Cloud MixTranscoding service.
- If the period queried is one day or shorter, the statistics returned are on a five-minute basis. If the period queried is longer than one day, the statistics returned are on a daily basis.
- The period queried per request cannot be longer than 31 days.
- If you query the statistics of the current day, the statistics returned may be inaccurate due to the delay in data collection.
- You can use this API to query your historical usage or to reconcile data, but we do not recommend you use it for crucial business logic.
- The rate limit of this API is five calls per second.
 * @method Models\DescribeRecordingUsageResponse DescribeRecordingUsage(Models\DescribeRecordingUsageRequest $req) This API is used to query your TRTC recording usage.
- If the period queried is one day or shorter, the statistics returned are on a five-minute basis. If the period queried is longer than one day, the statistics returned are on a daily basis.
- The period queried per request cannot be longer than 31 days.
- If you query the statistics of the current day, the statistics returned may be inaccurate due to the delay in data collection.
- You can use this API to query your historical usage or to reconcile data, but we do not recommend you use it for crucial business logic.
- The rate limit of this API is five calls per second.
 * @method Models\DescribeRelayUsageResponse DescribeRelayUsage(Models\DescribeRelayUsageRequest $req) This API is used to query your usage of TRTC’s relay to CDN service.
- If the period queried is one day or shorter, the statistics returned are on a five-minute basis. If the period queried is longer than one day, the statistics returned are on a daily basis.
- The period queried per request cannot be longer than 31 days.
- If you query the statistics of the current day, the statistics returned may be inaccurate due to the delay in data collection.
- You can use this API to query your historical usage or to reconcile data, but we do not recommend you use it for crucial business logic.
- The rate limit of this API is five calls per second.
 * @method Models\DescribeRoomInfoResponse DescribeRoomInfo(Models\DescribeRoomInfoRequest $req) This API (the old `DescribeRoomInformation`) is used to query the rooms of an application (`SDKAppID`) in the last 14 days. Up to 100 records can be returned per call (10 are returned by default).
**Note**:
1. You can use this API to query historical data or for reconciliation purposes, but we do not recommend you use it for crucial business logic.
2. If you need to call this API, please upgrade the monitoring dashboard version to "Standard". For more details, please refer to: https://trtc.io/document/54481
 * @method Models\DescribeScaleInfoResponse DescribeScaleInfo(Models\DescribeScaleInfoRequest $req) This API (the old `DescribeHistoryScale`) is used to query the daily number of rooms and users of an application (`SDKAppID`) in the last 14 days. Data for the current day cannot be queried.
 * @method Models\DescribeStreamIngestResponse DescribeStreamIngest(Models\DescribeStreamIngestRequest $req) You can query the status of the Relay task.
 * @method Models\DescribeTRTCMarketQualityDataResponse DescribeTRTCMarketQualityData(Models\DescribeTRTCMarketQualityDataRequest $req) Query TRTC Monitoring Dashboard - Data Dashboard Quality Metrics (including the following metrics)
joinSuccessRate: Join channel success rate.
joinSuccessIn5sRate: Join channel success rate within 5s.
audioFreezeRate: Audio stutter rate.
videoFreezeRate: Video stutter rate.
networkDelay: Lag rate.
Note:
1. To call the API, you need to activate the monitoring dashboard Standard Edition and Premium Edition, the monitoring dashboard Free Edition does not support calling. Monitoring dashboard version features and billing overview: https://trtc.io/document/54481.
2. The query time range depends on the monitoring dashboard function version, premium edition can query the last 30 days.
 * @method Models\DescribeTRTCMarketScaleDataResponse DescribeTRTCMarketScaleData(Models\DescribeTRTCMarketScaleDataRequest $req) Query TRTC Monitoring Dashboard - Data Dashboard Scale Metrics (will return userCount, roomCount, peakCurrentUsers, peakCurrentChannels)
- userCount: number of users in the call,
- roomCount: number of rooms in the call, counted as one call channel from the time a user joins the channel to the time all users leave the channel.
- peakCurrentChannels: peak number of channels online at the same time.
- peakCurrentUsers: peak number of users online at the same time.
Note:
1. To call the interface, you need to activate the monitoring dashboard Standard Edition and Premium Edition, the monitoring dashboard Free Edition does not support calling, for monitoring dashboard version features and billing overview: https://trtc.io/document/54481.
2. The query time range depends on the monitoring dashboard function version, premium edition can query up to 60 days.
 * @method Models\DescribeTRTCRealTimeQualityDataResponse DescribeTRTCRealTimeQualityData(Models\DescribeTRTCRealTimeQualityDataRequest $req) Query TRTC Monitoring Dashboard - Real-Time Monitoring Quality Metrics (return the following metrics)
 -Video stutter rate
 -Audio stutter rate
 Note:
 1. To call the API, you need to activate the Monitoring Dashboard Standard Edition and Premium Edition. The Monitoring Dashboard Free Edition does not support calling. For monitoring dashboard version features and billing overview, please visit: https://trtc.io/document/54481.
 2. The query time range depends on the monitoring dashboard function version. The premium edition can query up to 1 hours
 * @method Models\DescribeTRTCRealTimeScaleDataResponse DescribeTRTCRealTimeScaleData(Models\DescribeTRTCRealTimeScaleDataRequest $req) Query TRTC Monitoring Dashboard - Real-Time Monitoring Scale Metrics (the following metrics will be returned) -userCount (Online users) -roomCount (Online rooms) Note: 1. To call the interface, you need to activate the monitoring dashboard Standard Edition and Premium Edition, the monitoring dashboard Free Edition does not support calling. For monitoring dashboard version features and billing overview, please visit: https://trtc.io/document/54481. 2. The query time range depends on the function version of the monitoring dashboard. The premium edition can query the last 1 hours
 * @method Models\DescribeTrtcRoomUsageResponse DescribeTrtcRoomUsage(Models\DescribeTrtcRoomUsageRequest $req) This API is used to query usage data grouped by room.
- The queried period cannot exceed 24 hours. If the period spans two different days, the data returned may not be accurate due to a delay in data collection. You can make multiple calls to query the usage on different days.
- You can use this API to query your historical usage or to reconcile data, but we do not recommend you use it for crucial business logic.
- The rate limit of this API is one call every 15 seconds.
 * @method Models\DescribeTrtcUsageResponse DescribeTrtcUsage(Models\DescribeTrtcUsageRequest $req) This API is used to query your TRTC audio/video duration.
- If the period queried is one day or shorter, the statistics returned are on a five-minute basis. If the period queried is longer than one day, the statistics returned are on a daily basis.
- The period queried per request cannot be longer than 31 days.
- If you query the statistics of the current day, the statistics returned may be inaccurate due to the delay in data collection.
- You can use this API to query your historical usage or to reconcile data, but we do not recommend you use it for crucial business logic.
- The rate limit of this API is five calls per second.
 * @method Models\DescribeUnusualEventResponse DescribeUnusualEvent(Models\DescribeUnusualEventRequest $req) This API (the old `DescribeAbnormalEvent`) is used to query up to 20 random abnormal user experiences of an application (`SDKAppID`) in the last 14 days. The start and end time can be on two different days, but they cannot be more than one hour apart.
For details about the error events, see https://intl.cloud.tencent.com/document/product/647/44916?from_cn_redirect=1
**Note**:
1. You can use this API to query historical data or for reconciliation purposes, but we do not recommend you use it for crucial business logic.
2. If you need to call this API, please upgrade the monitoring dashboard version to "Standard". For more details, please refer to: https://www.tencentcloud.com/document/product/647/54481.
 * @method Models\DescribeUserEventResponse DescribeUserEvent(Models\DescribeUserEventRequest $req) This API (the old `DescribeDetailEvent`) is used to query the events of a call in the last 14 days, including user entry and exit, turning the camera on/off, etc.
**Note**:
1. You can use this API to query historical data or for reconciliation purposes, but we do not recommend you use it for crucial business logic.
2. If you need to call this API, please upgrade the monitoring dashboard version to "Standard". For more details, please refer to: https://trtc.io/document/54481?product=pricing.
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) This API (the old `DescribeUserInformation`) is used to query the user list of a specified time range (up to four hours) in the last 14 days. The data of up to 100 users can be returned per page (six are returned by default).
**Note**:
1. You can use this API to query historical data or for reconciliation purposes, but we do not recommend you use it for crucial business logic.
2. If you need to call this API, please upgrade the monitoring dashboard version to "Standard". For more details, please refer to: https://trtc.io/document/60214?product=pricing.
 * @method Models\DescribeWebRecordResponse DescribeWebRecord(Models\DescribeWebRecordRequest $req) Queries the status of a web-page recording task
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) This API is used to remove all users from a room and dismiss the room. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\DismissRoomByStrRoomIdResponse DismissRoomByStrRoomId(Models\DismissRoomByStrRoomIdRequest $req) This API is used to remove all users from a room and close the room. It works on all platforms. For Android, iOS, Windows, and macOS, you need to update the TRTC SDK to version 6.6 or above.
 * @method Models\ModifyCloudModerationResponse ModifyCloudModeration(Models\ModifyCloudModerationRequest $req) This API is used to update the subscription blocklist and allowlist after the cloud moderation task is successfully started.
 * @method Models\ModifyCloudRecordingResponse ModifyCloudRecording(Models\ModifyCloudRecordingRequest $req) This API is used to modify a recording task. It works only when a task is in progress. If the task has already ended when this API is called, an error will be returned. You need to specify all the parameters for each request instead of just the ones you want to modify.
 * @method Models\ModifyCloudSliceTaskResponse ModifyCloudSliceTask(Models\ModifyCloudSliceTaskRequest $req) This API is used to update the slicing task after it is started. It can be used to update the allowlist or blocklist for the specified subscription stream.
 * @method Models\RemoveUserResponse RemoveUser(Models\RemoveUserRequest $req) This API is used to remove a user from a room. It is applicable to scenarios where the anchor, room owner, or admin wants to kick out a user. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\RemoveUserByStrRoomIdResponse RemoveUserByStrRoomId(Models\RemoveUserByStrRoomIdRequest $req) This API is used to remove a user from a room. It allows the anchor, room owner, or admin to kick out a user, and works on all platforms. For Android, iOS, Windows, and macOS, you need to update the TRTC SDK to version 6.6 or above.
 * @method Models\SetUserBlockedResponse SetUserBlocked(Models\SetUserBlockedRequest $req) This API is used to disable or enable the audio and video of a user. It can be used by an anchor, room owner, or admin to block or unblock a user. It supports platforms including Android, iOS, Windows, macOS, web, and WeChat Mini Program. Use this API if the room ID is a number.
 * @method Models\SetUserBlockedByStrRoomIdResponse SetUserBlockedByStrRoomId(Models\SetUserBlockedByStrRoomIdRequest $req) This API allows an anchor, room owner, admin to mute/unmute a user. It can be used on platforms including Android, iOS, Windows, macOS, web, and WeChat Mini Program. Use this API when the room ID is a string.
 * @method Models\StartAIConversationResponse StartAIConversation(Models\StartAIConversationRequest $req) Initiate AI conversation task, where the AI bot enters the TRTC room to engage in AI conversation with specified members in the room. This is suitable for scenarios such as intelligent customer service and AI language teachers. The TRTC AI conversation feature has built-in speech-to-text capabilities , allowing customers to flexibly specify third-party AI model (LLM) services and text-to-speech (TTS) services. For more [feature details](https://cloud.tencent.com/document/product/647/108901).
 * @method Models\StartAITranscriptionResponse StartAITranscription(Models\StartAITranscriptionRequest $req) Initiate the transcription bot. The backend will pull the stream through the bot to perform real-time speech recognition and deliver subtitles and transcription messages. The transcription bot supports two stream pulling modes, controlled by the `TranscriptionMode` field:
- Pull the stream of the entire room.
- Pull the stream of a specific user.

The server delivers subtitles and transcription messages in real-time through TRTC's custom messages, with `CmdId` fixed at 1. The client only needs to listen for the callback of custom messages. For example, see the [C++ callback](https://cloud.tencent.com/document/product/647/79637#4cd82f4edb24992a15a25187089e1565). Other clients, such as Android, Web, etc., can also be found at the same link.
 * @method Models\StartPublishCdnStreamResponse StartPublishCdnStream(Models\StartPublishCdnStreamRequest $req) **API Description**

This API starts a stream mixing and relaying task. This API mixes multiple audio/video streams from a TRTC room into a single stream, encodes it, and then pushes it to CDN server or publishs it into the TRTC room. It also supports relaying a single stream from a TRTC room directly without transcoding.

After success, the API returns a globally unique TaskID. You will need this TaskId in later operations such as updating or stopping the task.

For more details, refer to the document:  [Feature Description](https://trtc.io/zh/document/47858?product=rtcengine ) and [FAQs](https://trtc.io/zh/document/36058?product=rtcengine&menulabel=core%20sdk&platform=web) .

Note: You can enable the relay to CDN in the console to monitor events under the CDN relay status. For callback details, see: [Relay to CDN Callback Description](https://trtc.io/zh/document/54913?product=rtcengine&menulabel=core%20sdk&platform=web ) .

Starting a relay task may incur the following fees:
MCU stream mixing and transcoding fees: [See Cloud Stream Mixing and Transcoding Pricing](https://trtc.io/zh/document/47631 ) .
 * @method Models\StartStreamIngestResponse StartStreamIngest(Models\StartStreamIngestRequest $req) Push an online media stream to the TRTC room.
 * @method Models\StartWebRecordResponse StartWebRecord(Models\StartWebRecordRequest $req) This interface can be used to initiate a web-page recording task. In the interface parameters, specify the recording URL, recording resolution, recording result storage and other parameters. If there are parameter or API logic problems, the result will be returned immediately. If there are page problems, such as the page cannot be accessed, the result will be returned in the callback. Please pay attention.
 * @method Models\StopAIConversationResponse StopAIConversation(Models\StopAIConversationRequest $req) Stop AI conversation task
 * @method Models\StopAITranscriptionResponse StopAITranscription(Models\StopAITranscriptionRequest $req) Stop AI Transcription task
 * @method Models\StopPublishCdnStreamResponse StopPublishCdnStream(Models\StopPublishCdnStreamRequest $req) This API is used to stop a relaying task.
 * @method Models\StopStreamIngestResponse StopStreamIngest(Models\StopStreamIngestRequest $req) Stop a Pull stream Relay task.
 * @method Models\StopWebRecordResponse StopWebRecord(Models\StopWebRecordRequest $req) Stop an web-page recording task
 * @method Models\UpdateAIConversationResponse UpdateAIConversation(Models\UpdateAIConversationRequest $req) Update AI conversation task parameters
 * @method Models\UpdatePublishCdnStreamResponse UpdatePublishCdnStream(Models\UpdatePublishCdnStreamRequest $req) This API is used to change the parameters of a relaying task.
Note: For details about how to use this API, see the `StartPublishCdnStream` document.
 * @method Models\UpdateStreamIngestResponse UpdateStreamIngest(Models\UpdateStreamIngestRequest $req) You can update the StreamUrl of the Relay task.
 */

class TrtcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trtc.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trtc";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("trtc")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
