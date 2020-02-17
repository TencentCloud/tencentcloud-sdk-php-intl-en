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
* @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) This API is used to set the delay time for the stream.
Note: If you want to set delayed playback before pushing, you need to set 5 minutes in advance.
Currently, this API only supports stream granularity, and the feature supporting domain name and application granularities will be available in the future.

* @method Models\CreateLiveRecordResponse CreateLiveRecord(Models\CreateLiveRecordRequest $req) - Prerequisites
  1. Recording files are stored on the VOD platform, so if you need to use the recording feature, you must first activate the VOD service.
  2. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) will be charged according to the VOD billing mode. For more information, please see the [corresponding document](https://cloud.tencent.com/document/product/266/2838).

- Mode description
  This API supports two recording modes:
  1. Scheduled recording mode **(default mode)**.
    The start time and end time need to be passed in, and the recording task will automatically start and end based on the time parameters.
  2. Real-time video recording mode.
    The start time passed in will be ignored, and recording will be started immediately after the recording task is created. The recording duration can be up to 30 minutes. If the end time passed in is more than 30 minutes after the current time, it will be counted as 30 minutes. Real-time video recording is mainly used for recording highlight scenes, and you are recommended to keep the duration within 5 minutes.

- Precautions
  1. The API call timeout period should be set to more than 3 seconds; otherwise, retries and frequent calls may result in repeated recording tasks.
  2. Subject to the audio and video file formats (FLV/MP4/HLS), the video codec of H.264 and audio codec of ACC are supported.
* @method Models\CreateLiveRecordRuleResponse CreateLiveRecordRule(Models\CreateLiveRecordRuleRequest $req) To create a recording rule, you need to first call the [CreateLiveRecordTemplate](/document/product/267/32614) API to create a recording template and bind the returned template ID to the stream.
<br>Recording-related document: [LVB Recording](/document/product/267/32739).
* @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) After a recording template is created and a template ID is successfully returned, you need to call the [CreateLiveRecordRule](/document/product/267/32615) API and bind the template ID to the stream.
<br>Recording-related document: [LVB Recording](/document/product/267/32739).
* @method Models\CreateLiveTranscodeRuleResponse CreateLiveTranscodeRule(Models\CreateLiveTranscodeRuleRequest $req) To create a transcoding rule, you need to first call the [CreateLiveTranscodeTemplate](/document/product/267/32646) API to create a transcoding template and bind the returned template ID to the stream.
<br>Transcoding-related document: [LVB Remuxing and Transcoding](/document/product/267/32736).
* @method Models\CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplate(Models\CreateLiveTranscodeTemplateRequest $req) After a transcoding template is created and a template ID is successfully returned, you need to call the [CreateLiveTranscodeRule](/document/product/267/32647) API and bind the returned template ID to the stream.
<br>Transcoding-related document: [LVB Remuxing and Transcoding](/document/product/267/32736).
* @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) Note: The `DeleteLiveRecord` API is only used to delete the record of recording tasks but not stop recording or deleting an ongoing recording task. If you need to stop a recording task, please use the [StopLiveRecord](/document/product/267/30146) API.
* @method Models\DeleteLiveRecordRuleResponse DeleteLiveRecordRule(Models\DeleteLiveRecordRuleRequest $req) This API is used to delete a recording rule.
* @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) This API is used to delete a recording template.
* @method Models\DeleteLiveTranscodeRuleResponse DeleteLiveTranscodeRule(Models\DeleteLiveTranscodeRuleRequest $req) This API is used to delete a transcoding rule.
* @method Models\DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplate(Models\DeleteLiveTranscodeTemplateRequest $req) This API is used to delete a transcoding template.
* @method Models\DescribeLiveDelayInfoListResponse DescribeLiveDelayInfoList(Models\DescribeLiveDelayInfoListRequest $req) This API is used to get the list of delayed playbacks.
* @method Models\DescribeLiveForbidStreamListResponse DescribeLiveForbidStreamList(Models\DescribeLiveForbidStreamListRequest $req) This API is used to get the list of forbidden streams.
* @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) This API is used to query the playback authentication key.
* @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) This API is used to query the LVB push authentication key.
* @method Models\DescribeLiveRecordRulesResponse DescribeLiveRecordRules(Models\DescribeLiveRecordRulesRequest $req) This API is used to get the list of recording rules.
* @method Models\DescribeLiveRecordTemplateResponse DescribeLiveRecordTemplate(Models\DescribeLiveRecordTemplateRequest $req) This API is used to get a single recording template.
* @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) This API is used to get the list of recording templates.
* @method Models\DescribeLiveStreamEventListResponse DescribeLiveStreamEventList(Models\DescribeLiveStreamEventListRequest $req) This API is used to query streaming events.<br>

Note: This API can filter by IsFilter and return the push history.
* @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) This API is used to return the list of live streams.
* @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) This API is used to return the list of pushed streams. <br>
Note: Up to 10,000 entries can be queried per page. More data can be obtained by adjusting the query time range.
* @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) This API is used to return the stream status such as active, inactive, or forbidden.
* @method Models\DescribeLiveTranscodeRulesResponse DescribeLiveTranscodeRules(Models\DescribeLiveTranscodeRulesRequest $req) This API is used to get the list of transcoding rules.
* @method Models\DescribeLiveTranscodeTemplateResponse DescribeLiveTranscodeTemplate(Models\DescribeLiveTranscodeTemplateRequest $req) This API is used to get a single transcoding template.
* @method Models\DescribeLiveTranscodeTemplatesResponse DescribeLiveTranscodeTemplates(Models\DescribeLiveTranscodeTemplatesRequest $req) This API is used to get the list of transcoding templates.
* @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) This API is used to disconnect the push connection, which can be resumed.
* @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) This API is used to forbid the push of a specific stream. You can preset a time point to resume the stream.
* @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) This API is used to modify the playback authentication key.
* @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) This API is used to modify the LVB push authentication key.
* @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) This API is used to modify the recording template configuration.
* @method Models\ModifyLiveTranscodeTemplateResponse ModifyLiveTranscodeTemplate(Models\ModifyLiveTranscodeTemplateRequest $req) This API is used to modify the transcoding template configuration.
* @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) This API is used to resume a delayed playback.
* @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) This API is used to resume the push of a specific stream.
* @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) Note: Recording files are stored on the VOD platform. To use the recording feature, you need to activate a VOD account and ensure that it is available. After the recording files are stored, applicable fees (including storage fees and downstream playback traffic fees) will be charged according to the VOD billing method. For more information, please see the corresponding document.
 */

class LiveClient extends AbstractClient
{
    protected $endpoint = "live.tencentcloudapi.com";

    protected $version = "2018-08-01";

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
