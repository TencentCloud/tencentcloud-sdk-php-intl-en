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

namespace TencentCloud\Vod\V20180717;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vod\V20180717\Models as Models;

/**
* @method Models\ApplyUploadResponse ApplyUpload(Models\ApplyUploadRequest $req) * This API is used to apply for uploading a media file (and cover file) to VOD and obtain the metadata of file storage (including upload path and upload signature) for subsequent use by the uploading API.
* For the detailed upload process, please see [Overview of Upload from Client](/document/product/266/9759).
* @method Models\CommitUploadResponse CommitUpload(Models\CommitUploadRequest $req) This API is used to confirm the result of uploading a media file (and cover file) to VOD, store the media information, and return the playback address and ID of the file.
* @method Models\ComposeMediaResponse ComposeMedia(Models\ComposeMediaRequest $req) This API is used to compose a media file, including:

1. Clipping a media file to generate a new media file;
2. Clipping and splicing multiple media files to generate a new media file;
3. Clipping and splicing the media streams of multiple media files to generate a new media file;
* @method Models\ConfirmEventsResponse ConfirmEvents(Models\ConfirmEventsRequest $req) * After the `PullEvents` API is called to get an event, this API must be called to confirm that the message has been received;
* After the event handler is obtained, the validity period of waiting for confirmation is 30 seconds. If the wait exceeds 30 seconds, a parameter error will be reported (4000);
* For more information, please see the [reliable callback](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83) of event notification.
* @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) This API is used to create a custom video content analysis template. Up to 50 ones can be created.
* @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) This API is used to create a custom animated image generating template. Up to 16 templates can be created.
* @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) This API is used to create a custom image sprite generating template. Up to 16 templates can be created.
* @method Models\CreateProcedureTemplateResponse CreateProcedureTemplate(Models\CreateProcedureTemplateRequest $req) This API is used to create a custom task flow template. Up to 50 ones can be created.
* @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) This API is used to create a custom sampled screencapturing template. Up to 16 templates can be created.
* @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) This API is used to create a custom time point screencapturing template. Up to 16 templates can be created.
* @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) This API is used to create a custom transcoding template. Up to 100 ones can be created.
* @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) This API is used to create a custom watermarking template. Up to 1,000 ones can be created.
* @method Models\DeleteAIAnalysisTemplateResponse DeleteAIAnalysisTemplate(Models\DeleteAIAnalysisTemplateRequest $req) This API is used to delete a custom video content analysis template.

Note: templates with an ID below 10000 are preset and cannot be deleted.
* @method Models\DeleteAIRecognitionTemplateResponse DeleteAIRecognitionTemplate(Models\DeleteAIRecognitionTemplateRequest $req) This API is used to delete a custom video content recognition template.
* @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) This API is used to delete a custom animated image generating template.
* @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) This API is used to delete an image sprite generating template.
* @method Models\DeleteProcedureTemplateResponse DeleteProcedureTemplate(Models\DeleteProcedureTemplateRequest $req) This API is used to delete a custom task flow template.  
* @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) This API is used to delete a custom sampled screencapturing template.
* @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) This API is used to delete a custom time point screencapturing template.
* @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) This API is used to delete a custom watermarking template.
* @method Models\DescribeAIAnalysisTemplatesResponse DescribeAIAnalysisTemplates(Models\DescribeAIAnalysisTemplatesRequest $req) This API is used to get the list of video content analysis templates based on unique template ID. The returned result includes all eligible custom and [preset video content analysis templates](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.88.86.E6.9E.90.E6.A8.A1.E6.9D.BF).
* @method Models\DescribeAIRecognitionTemplatesResponse DescribeAIRecognitionTemplates(Models\DescribeAIRecognitionTemplatesRequest $req) This API is used to get the list of video content recognition templates based on unique template ID. The return result includes all eligible custom and [preset video content recognition templates](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E8.AF.86.E5.88.AB.E6.A8.A1.E6.9D.BF).
* @method Models\DescribeAdaptiveDynamicStreamingTemplatesResponse DescribeAdaptiveDynamicStreamingTemplates(Models\DescribeAdaptiveDynamicStreamingTemplatesRequest $req) This API is used to query the list of transcoding to adaptive bitrate streaming templates and supports paged queries by filters.
* @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) This API is used to query the list of animated image generating templates and supports paged queries by filters.
* @method Models\DescribeAudioTrackTemplatesResponse DescribeAudioTrackTemplates(Models\DescribeAudioTrackTemplatesRequest $req) This API is used to query the list of transcoding to adaptive bitrate streaming audio track templates and supports paged queries by filters.
* @method Models\DescribeCDNUsageDataResponse DescribeCDNUsageData(Models\DescribeCDNUsageDataRequest $req) This API is used to query the CDN statistics of VOD such as traffic and bandwidth.
   1. Only CDN usage data for the last 365 days can be queried.
   2. The query time range cannot be more than 90 days.
   3. The time granularity of usage data can be specified, including 5-minute, 1-hour, and 1-day.
   4. Traffic refers to the total traffic within the query time granularity, while bandwidth the peak bandwidth.
* @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) This API is used to get the list of video content audit templates based on unique template ID. The return result includes all eligible custom and [preset video content audit templates](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.AE.A1.E6.A0.B8.E6.A8.A1.E6.9D.BF).
* @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) This API is used to query the list of image sprite generating templates and supports paged queries by filters.
* @method Models\DescribeMediaInfosResponse DescribeMediaInfos(Models\DescribeMediaInfosRequest $req) 1. This API can get multiple types of information of multiple media files, including:
    1. Basic information (basicInfo): media name, category, playback address, cover image, etc.
    2. Metadata (metaData): size, duration, video stream information, audio stream information, etc.
    3. Information of the transcoding result (transcodeInfo): addresses, video stream parameters, and audio stream parameters of the media files with various specifications generated by transcoding a media file.
    4. Information of the animated image generating result (animatedGraphicsInfo): information of an animated image (such as .gif) generated from a video.
    5. Information of a sampled screenshot (sampleSnapshotInfo): information of a sampled screenshot of a video.
    6. Information of an image sprite (imageSpriteInfo): information of an image sprite generated from a video.
    7. Information of a time point screenshot (snapshotByTimeOffsetInfo): information of a time point screenshot of a video.
    8. Information of a timestamp (keyFrameDescInfo): information of a timestamp set for a video.
    9. Information of transcoding to adaptive bitrate streaming (adaptiveDynamicStreamingInfo): specification, encryption type, container format, etc.
2. The return packet can be configured to only contain certain information.
* @method Models\DescribeProcedureTemplatesResponse DescribeProcedureTemplates(Models\DescribeProcedureTemplatesRequest $req) This API is used to get the list of task flow template details by task flow template name.
* @method Models\DescribeReviewDetailsResponse DescribeReviewDetails(Models\DescribeReviewDetailsRequest $req) This API is used to query the length of audited video content in seconds per day within the specified time range.

1. Statistics on the length of audited video content for the last 365 days can be queried.
2. The query time range cannot be more than 90 days.
* @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) This API is used to query the list of sampled screencapturing templates and supports paged queries by filters.
* @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) This API is used to query the list of time point screencapturing templates and supports paged queries by filters.
* @method Models\DescribeSubAppIdsResponse DescribeSubAppIds(Models\DescribeSubAppIdsRequest $req) This API is used to get the list of subapplications to which the current account has permissions, including primary applications. If the subapplication feature has not been enabled, this API will return 
 `FailedOperation`.
* @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) This API is used to query the details of execution status and result of a task submitted in the last 3 days by task ID.
* @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) This API is used to get the list of transcoding templates based on unique template ID. The return result includes all eligible custom and [preset transcoding templates](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
* @method Models\DescribeVideoTrackTemplatesResponse DescribeVideoTrackTemplates(Models\DescribeVideoTrackTemplatesRequest $req) This API is used to query the list of transcoding to adaptive bitrate streaming video track templates and supports paged queries by filters.
* @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) This API is used to query custom watermarking templates and supports paged queries by filters.
* @method Models\EditMediaResponse EditMedia(Models\EditMediaRequest $req) This API is used to edit a video (by clipping, splicing, etc.) to generate a new VOD video. Editing features include:

1. Clipping a file in VOD to generate a new video;
2. Splicing multiple files in VOD to generate a new video;
3. Clipping multiple files in VOD and then splicing the clips to generate a new video;
4. Directly generating a new video from a stream in VOD;
5. Clipping a stream in VOD to generate a new video;
6. Splicing multiple streams in VOD to generate a new video;
7. Clipping multiple streams in VOD and then splicing the clips to generate a new video.

You can also specify whether to perform a task flow for the generated new video.
* @method Models\ExecuteFunctionResponse ExecuteFunction(Models\ExecuteFunctionRequest $req) This API is only used in special scenarios of custom development. Unless requested by VOD customer service, please do not call it.
* @method Models\ForbidMediaDistributionResponse ForbidMediaDistribution(Models\ForbidMediaDistributionRequest $req) * After a media file is forbidden, except previewing it in the VOD Console, accessing the URLs of its various resources (such as source file, output files, and screenshots) in other scenarios will return error 403.
  It takes about 5–10 minutes for a forbidding/unblocking operation to take effect across the entire network.
* @method Models\LiveRealTimeClipResponse LiveRealTimeClip(Models\LiveRealTimeClipRequest $req) Live clipping means that during a live broadcast (before it ends), you can select a segment of previous live broadcast content to generate a new video (in HLS format) in real time and share it immediately or store it persistently.

VOD supports two live clipping modes:
- Persistent clipping: in this mode, the clipped video is saved as an independent video file with a `FileId`, which is suitable for **persistently storing** highlights;
- Temporary clipping: in this mode, the clipped video is part of the LVB recording file with no `FileId`, which is suitable for **temporarily sharing** highlights;

Note:
- The live clipping feature can be used only when [time shifting](https://cloud.tencent.com/document/product/267/32742) has been enabled for the target live stream.
- Live clipping is performed based on the m3u8 file generated by LVB recording, so its minimum clipping granularity is one ts segment rather than at or below the second level.


### Persistent clipping
In persistent clipping mode, the clipped video is saved as an independent video file with a `FileId`, and its lifecycle is not subject to the source LVB recording video (even if the source video is deleted, the clipped video will not be affected in any way). It can be further processed (transcoded, published on WeChat, etc.).

An example is as follows: for a complete football match, the source LVB recording video may be up to 2 hours in length. You want to store this video for only 2 months for the purpose of cost savings. However, you want to specify a longer retention period for the "highlights" video created by live clipping, and perform additional VOD operations on it such as transcoding and release on WeChat. In this case, you need to choose the persistent clipping mode of live clipping.

The advantage of persistent clipping is that the clipped video has a lifecycle independent of the source recording video and can be managed independently and stored persistently.

### Temporary clipping
In temporary clipping mode, the clipped video (m3u8 file) shares the same ts segments with the LVB recording video instead of being an independent video. It only has a playback URL but has no `FileId`, and its validity period is the same as that of the LVB recording video; therefore, if the LVB recording video is deleted, it cannot be played back.

For temporary clipping, as the clipping result is not an independent video, it will not be included in VOD's media asset management (for example, it will not be counted in the total videos in the console), and no video processing operations can be separately performed on it, such as transcoding and release on WeChat.

The advantage of temporary clipping is that the clipping operation is very "lightweight" and does not incur additional storage fees. However, the clipped video has the same lifecycle as the source recording video and cannot be further transcoded or processed.
* @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) This API is used to modify a custom video content analysis template.

Note: templates with an ID below 10000 are preset and cannot be modified.
* @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) This API is used to modify a custom animated image generating template.
* @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) This API is used to modify a custom image sprite generating template.
* @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) This API is used to modify a custom sampled screencapturing template.
* @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) This API is used to modify a custom time point screencapturing template.
* @method Models\ModifySubAppIdInfoResponse ModifySubAppIdInfo(Models\ModifySubAppIdInfoRequest $req) This API is used to modify subapplication information, but it is not allowed to modify primary application information.
* @method Models\ModifySubAppIdStatusResponse ModifySubAppIdStatus(Models\ModifySubAppIdStatusRequest $req) This API is used to enable/disable a subapplication. After a subapplication is disabled, its corresponding domain name will be blocked and its access to the console will be restricted.
* @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) This API is used to modify a custom transcoding template.
* @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) This API is used to modify a custom watermarking template. The watermark type cannot be modified.
* @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) This API is used to initiate a processing task for an audio/video media file in VOD, including:
1. Video transcoding (with watermark);
2. Animated image generating;
3. Time point screencapturing;
4. Sampled screencapturing;
5. Image sprite generating;
6. Cover generating by screencapturing;
7. Adaptive bitrate streaming (with encryption);
8. Intelligent content audit (detection of porn, terrorism, and politically sensitive information);
9. Intelligent content analysis (tag, category, cover, and frame-specific tag);
10. Intelligent content recognition (opening and closing credits, face, full text, text keyword, full speech, speech keyword, and object).
* @method Models\ProcessMediaByProcedureResponse ProcessMediaByProcedure(Models\ProcessMediaByProcedureRequest $req) This API is used to initiate a processing task for a VOD video with a task flow template.
There are two ways to create a task flow template:
1. Create and modify a task flow template in the console;
2. Create a task flow template through the task flow template API.
* @method Models\ProcessMediaByUrlResponse ProcessMediaByUrl(Models\ProcessMediaByUrlRequest $req) This API is used to initiate a processing task for an audio/video media file from a URL, including:

1. Intelligent content audit (detection of porn, terrorism, and politically sensitive information);
2. Intelligent content analysis (tag, category, cover, and frame-specific tag);
3. Intelligent content recognition (opening and closing credits, face, full text, text keyword, full speech, speech keyword, and object).
* @method Models\PullEventsResponse PullEvents(Models\PullEventsRequest $req) * This API is used to get event notifications from the business server through [reliable callback](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83);
* The API is in long polling mode, i.e., if there is an unconsumed event on the server, it will be immediately returned to the requester; otherwise, the backend will suspend the request until a new event is generated;
* The request can be suspended for 5 seconds at most. It is recommended that the requester set the timeout period to 10 seconds.
* If the API returns an event, the caller must call the [ConfirmEvents](https://cloud.tencent.com/document/product/266/33434) API within <font color="red">30 seconds</font> to confirm that the event notification has been processed; otherwise, the event notification will be pulled again after <font color="red">30 seconds</font>.
* @method Models\PullUploadResponse PullUpload(Models\PullUploadRequest $req) This API is used to pull a video on the internet to the VOD platform.
* @method Models\PushUrlCacheResponse PushUrlCache(Models\PushUrlCacheRequest $req) 1. This API is used to prefetch a list of specified URLs.
2. The URL domain names must have already been registered with VOD.
3. Up to 20 URLs can be specified in one request.
* @method Models\ResetProcedureTemplateResponse ResetProcedureTemplate(Models\ResetProcedureTemplateRequest $req) This API is used to reset a custom task flow template.  
* @method Models\SearchMediaResponse SearchMedia(Models\SearchMediaRequest $req) This API is used to search for media information and supports filtering and sorting the returned results in many ways. It can:
- Fuzzily search by media file name or description.
- Retrieve media files by category and tag.
    - Specify the `ClassIds` category set (please see the input parameters) and return the media files in any category in the set. For example, assuming that there are categories of Movies, TV Series, and Variety Shows, and there are subcategories of History, Action, and Romance in the category of Movies, if Movies and TV Series are specified in `ClassIds`, then all the subcategories under Movies and TV Series will be returned; however, if History and Action are specified in `ClassIds`, only the media files in those two subcategories will be returned.
    - Specify the `Tags` tag set (please see the input parameters) and return the media files with any tag in the set. For example, assuming that there are tags of ACG, Drama, and YTPMV, if ACG and YTPMV are specified in Tags, then any media files with either tag will be retrieved.
- Filter media files from a specified source (`Source`) (please see the input parameters).
- Filter LVB recording media files by LVB push code and `Vid` (please see the input parameters).
- Filter media files by the creation time range.
- Mix and match any filters above to retrieve the media files that meet all the specified criteria. For example, you can filter the media files with the tag of "Drama" in the category of "Movies" created between December 1, 2018 and December 8, 2018.
- Sort the results and return them in multiple pages by specifying `Offset` and `Limit` (please see the input parameters).

<div id="maxResultsDesc">Upper limit of returned results:</div>
- The <b><a href="#p_offset">Offset</a> and <a href="#p_limit">Limit</a> parameters determine the number of search results on one single page. Note: if both of them use the default value, this API will return up to 10 results.</b>
- <b>Up to 5,000 search results can be returned, and excessive ones will not be displayed. If there are too many search results, you are recommended to use more specified filters to narrow down the search results.</b>
* @method Models\SimpleHlsClipResponse SimpleHlsClip(Models\SimpleHlsClipRequest $req) This API is used to clip an HLS video by time period.

Note: the clipped video shares the same ts segments with the source video, and only a new m3u8 file will be generated. Deleting the source video will also delete the clipped video.
* @method Models\WeChatMiniProgramPublishResponse WeChatMiniProgramPublish(Models\WeChatMiniProgramPublishRequest $req) This API is used to publish a VOD video in WeChat Mini Program for playback in the WeChat Mini Program player.
 */

class VodClient extends AbstractClient
{
    protected $endpoint = "vod.tencentcloudapi.com";

    protected $version = "2018-07-17";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("vod")."\\"."V20180717\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
