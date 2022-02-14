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
* For the detailed upload process, please see [Overview of Upload from Client](https://intl.cloud.tencent.com/document/product/266/9759?from_cn_redirect=1).
 * @method Models\AttachMediaSubtitlesResponse AttachMediaSubtitles(Models\AttachMediaSubtitlesRequest $req) This API is used to associate/disassociate subtitles with/from a media file of a specific adaptive bitrate streaming template ID.
 * @method Models\CommitUploadResponse CommitUpload(Models\CommitUploadRequest $req) This API is used to confirm the result of uploading a media file (and cover file) to VOD, store the media information, and return the playback address and ID of the file.
 * @method Models\ComposeMediaResponse ComposeMedia(Models\ComposeMediaRequest $req) This API is used to compose a media file, including:

1. Clipping a media file to generate a new media file;
2. Clipping and splicing multiple media files to generate a new media file;
3. Clipping and splicing the media streams of multiple media files to generate a new media file;
 * @method Models\ConfirmEventsResponse ConfirmEvents(Models\ConfirmEventsRequest $req) * After the `PullEvents` API is called to get an event, this API must be called to confirm that the message has been received;
* After the event handler is obtained, the validity period of waiting for confirmation is 30 seconds. If the wait exceeds 30 seconds, a parameter error will be reported (4000);
* For more information, please see the [reliable callback](https://intl.cloud.tencent.com/document/product/266/33779?from_cn_redirect=1#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83) of event notification.
 * @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) This API is used to create a custom video content analysis template. Up to 50 templates can be created.
 * @method Models\CreateAIRecognitionTemplateResponse CreateAIRecognitionTemplate(Models\CreateAIRecognitionTemplateRequest $req) This API is used to create a custom video content recognition template. Up to 50 templates can be created.
 * @method Models\CreateAdaptiveDynamicStreamingTemplateResponse CreateAdaptiveDynamicStreamingTemplate(Models\CreateAdaptiveDynamicStreamingTemplateRequest $req) This API is used to create an adaptive bitrate streaming template. Up to 100 templates can be created.
 * @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) This API is used to create a custom animated image generating template. Up to 16 templates can be created.
 * @method Models\CreateClassResponse CreateClass(Models\CreateClassRequest $req) * This API is used to categorize media assets for management;
* It does not affect the categories of existing media assets. If you want to modify the category of a media asset, call the [ModifyMediaInfo](https://intl.cloud.tencent.com/document/product/266/31762?from_cn_redirect=1) API.
* There can be up to 4 levels of categories.
* One category can have up to 500 subcategories under it.
 * @method Models\CreateContentReviewTemplateResponse CreateContentReviewTemplate(Models\CreateContentReviewTemplateRequest $req) This API is used to create custom intelligent video content recognition templates. Up to 50 templates can be created.
 * @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) This API is used to create a custom image sprite generating template. Up to 16 templates can be created.
 * @method Models\CreatePersonSampleResponse CreatePersonSample(Models\CreatePersonSampleRequest $req) This API is used to create samples for using facial features positioning and other technologies to perform video processing operations such as content recognition and inappropriate information recognition.
 * @method Models\CreateProcedureTemplateResponse CreateProcedureTemplate(Models\CreateProcedureTemplateRequest $req) This API is used to create a custom task flow template. Up to 50 templates can be created.
 * @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) This API is used to create a custom sampled screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) This API is used to create a custom time point screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateSubAppIdResponse CreateSubAppId(Models\CreateSubAppIdRequest $req) This API is used to create a VOD subapplication.
 * @method Models\CreateSuperPlayerConfigResponse CreateSuperPlayerConfig(Models\CreateSuperPlayerConfigRequest $req) This API is used to create a superplayer configuration. Up to 100 configurations can be created.
 * @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) This API is used to create a custom transcoding template. Up to 100 templates can be created.
 * @method Models\CreateVodDomainResponse CreateVodDomain(Models\CreateVodDomainRequest $req) This API is used to add an acceleration domain name to VOD. One user can add up to 20 domain names.
1. After a domain name is added, VOD will deploy it, and it takes about 2 minutes for the domain name status to change from `Deploying` to `Online`.
 * @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) This API is used to create a custom watermarking template. Up to 1,000 templates can be created.
 * @method Models\CreateWordSamplesResponse CreateWordSamples(Models\CreateWordSamplesRequest $req) This API is used to create keyword samples in batches for using OCR and ASR technologies to perform video processing operations such as content recognition and inappropriate information recognition.
 * @method Models\DeleteAIAnalysisTemplateResponse DeleteAIAnalysisTemplate(Models\DeleteAIAnalysisTemplateRequest $req) This API is used to delete a custom video content analysis template.

Note: templates with an ID below 10000 are preset and cannot be deleted.
 * @method Models\DeleteAIRecognitionTemplateResponse DeleteAIRecognitionTemplate(Models\DeleteAIRecognitionTemplateRequest $req) This API is used to delete a custom video content recognition template.
 * @method Models\DeleteAdaptiveDynamicStreamingTemplateResponse DeleteAdaptiveDynamicStreamingTemplate(Models\DeleteAdaptiveDynamicStreamingTemplateRequest $req) This API is used to delete an adaptive bitrate streaming template.
 * @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) This API is used to delete a custom animated image generating template.
 * @method Models\DeleteClassResponse DeleteClass(Models\DeleteClassRequest $req) * A category can be deleted only if it has no subcategories and associated media files;
* Otherwise, [delete the media files](https://intl.cloud.tencent.com/document/product/266/31764?from_cn_redirect=1) and subcategories first before deleting the category.
 * @method Models\DeleteContentReviewTemplateResponse DeleteContentReviewTemplate(Models\DeleteContentReviewTemplateRequest $req) This API is used to delete custom intelligent video content recognition templates.
 * @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) This API is used to delete an image sprite generating template.
 * @method Models\DeleteMediaResponse DeleteMedia(Models\DeleteMediaRequest $req) * This API is used to delete a media file and its processed files, such as the transcoded video files, image sprites, screenshots, and videos for publishing on WeChat.
* You can delete the original files, transcoded video files, and videos for publishing on WeChat, etc. of videos with specified IDs.
* Note: after the original file of a video is deleted, you cannot transcode the video, publish it on WeChat, or perform other operations on it.
 * @method Models\DeletePersonSampleResponse DeletePersonSample(Models\DeletePersonSampleRequest $req) This API is used to delete samples according to sample IDs.
 * @method Models\DeleteProcedureTemplateResponse DeleteProcedureTemplate(Models\DeleteProcedureTemplateRequest $req) This API is used to delete a custom task flow template.  
 * @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) This API is used to delete a custom sampled screencapturing template.
 * @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) This API is used to delete a custom time point screencapturing template.
 * @method Models\DeleteSuperPlayerConfigResponse DeleteSuperPlayerConfig(Models\DeleteSuperPlayerConfigRequest $req) This API is used to delete a superplayer configuration.  
*Note: preset player configurations cannot be deleted.*
 * @method Models\DeleteTranscodeTemplateResponse DeleteTranscodeTemplate(Models\DeleteTranscodeTemplateRequest $req) This API is used to delete a custom transcoding template.
 * @method Models\DeleteVodDomainResponse DeleteVodDomain(Models\DeleteVodDomainRequest $req) This API is used to delete an acceleration domain name from VOD.
1. Before deleting a domain name, disable its acceleration in all regions.
 * @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) This API is used to delete a custom watermarking template.
 * @method Models\DeleteWordSamplesResponse DeleteWordSamples(Models\DeleteWordSamplesRequest $req) This API is used to delete keyword samples in batches.
 * @method Models\DescribeAIAnalysisTemplatesResponse DescribeAIAnalysisTemplates(Models\DescribeAIAnalysisTemplatesRequest $req) This API is used to get the list of video content analysis templates based on unique template ID. The returned result includes all eligible custom and [preset video content analysis templates](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.88.86.E6.9E.90.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeAIRecognitionTemplatesResponse DescribeAIRecognitionTemplates(Models\DescribeAIRecognitionTemplatesRequest $req) This API is used to get the list of video content recognition templates based on unique template ID. The return result includes all eligible custom and [preset video content recognition templates](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E8.AF.86.E5.88.AB.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeAdaptiveDynamicStreamingTemplatesResponse DescribeAdaptiveDynamicStreamingTemplates(Models\DescribeAdaptiveDynamicStreamingTemplatesRequest $req) This API is used to query the list of transcoding to adaptive bitrate streaming templates and supports paged queries by filters.
 * @method Models\DescribeAllClassResponse DescribeAllClass(Models\DescribeAllClassRequest $req) * This API is used to get the information of all categories.
 * @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) This API is used to query the list of animated image generating templates and supports paged queries by filters.
 * @method Models\DescribeCDNStatDetailsResponse DescribeCDNStatDetails(Models\DescribeCDNStatDetailsRequest $req) This API is used to query CDN bandwidth, traffic, and other data of VOD domain names.
* The query period is up to 90 days.
* You can query data of different service regions.
* You can query data of Chinese mainland by region and ISP.
 * @method Models\DescribeCDNUsageDataResponse DescribeCDNUsageData(Models\DescribeCDNUsageDataRequest $req) This API is used to query the CDN statistics of VOD such as traffic and bandwidth.
   1. Only CDN usage data for the last 365 days can be queried.
   2. The query time range cannot be more than 90 days.
   3. The time granularity of usage data can be specified, including 5-minute, 1-hour, and 1-day.
   4. Traffic refers to the total traffic within the query time granularity, while bandwidth the peak bandwidth.
 * @method Models\DescribeCdnLogsResponse DescribeCdnLogs(Models\DescribeCdnLogsRequest $req) This API is used to query the download links of CDN access logs of a VOD domain name.
    1. Only download links of CDN logs for the last 30 days can be queried.
    2. By default, CDN generates a log file every hour. If there is no CDN access for a certain hour, no log file will be generated for the hour.    
    3. A CDN log download link is valid for 24 hours.
 * @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) This API is used to get the list of intelligent video content recognition template details according to unique template IDs. The return result includes all eligible custom and [preset intelligent video content recognition templates](https://intl.cloud.tencent.com/document/product/266/33932).
 * @method Models\DescribeDailyPlayStatFileListResponse DescribeDailyPlayStatFileList(Models\DescribeDailyPlayStatFileListRequest $req) This API is used to query the download links of playback statistics files.
* You can query the download links of playback statistics files in the past year. The start and end dates for query cannot be more than 90 days apart.
* Every day, VOD will analyze CDN request logs of the previous day and then generate a playback statistics file.
* A playback statistics file includes playback times and traffic of media files.
* Notes on playback times:
    1. HLS file: VOD counts playback times when M3U8 files are accessed, but not when TS files are accessed.
    2. Other files (MP4 files for example): VOD does not count playback times when the playback request carries the `range` parameter and the `start` parameter in `range` is not `0`. In other cases, VOD counts playback times.
* Statistics on playback devices: VOD counts playback times on mobile clients when the playback request carries the `UserAgent` parameter which includes an identifier such as `Android` or `iPhone`. In other cases, VOD counts playback times on PC clients.
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
 * @method Models\DescribeMediaProcessUsageDataResponse DescribeMediaProcessUsageData(Models\DescribeMediaProcessUsageDataRequest $req) This API is used to query the information of video processing usage within the specified time range.
   1. Statistics on video processing for the last 365 days can be queried.
   2. The query time range cannot be more than 90 days.
 * @method Models\DescribePersonSamplesResponse DescribePersonSamples(Models\DescribePersonSamplesRequest $req) This API is used to query the information of samples and supports paginated queries by sample ID, name, and tag.
 * @method Models\DescribeProcedureTemplatesResponse DescribeProcedureTemplates(Models\DescribeProcedureTemplatesRequest $req) This API is used to get the list of task flow template details by task flow template name.
 * @method Models\DescribeReviewDetailsResponse DescribeReviewDetails(Models\DescribeReviewDetailsRequest $req) <b>This API is disused and replaced by [DescribeMediaProcessUsageData](https://intl.cloud.tencent.com/document/product/266/41464?from_cn_redirect=1).</b>

This API returns the video content duration for intelligent recognition in seconds per day within the queried period.

1. The API is used to query statistics on the video content duration for intelligent recognition in the last 365 days.
2. The query period is up to 90 days.
 * @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) This API is used to query the list of sampled screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) This API is used to query the list of time point screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeStorageDataResponse DescribeStorageData(Models\DescribeStorageDataRequest $req) This API is used to query the storage capacity usage and number of files.
 * @method Models\DescribeStorageDetailsResponse DescribeStorageDetails(Models\DescribeStorageDetailsRequest $req) This API is used to query VOD storage usage in bytes within the query period.
    1. You can only query storage usage for the last 365 days.
    2. The query period is up to 90 days.
    3. The query period at minute-level granularity is up to 7 days.
 * @method Models\DescribeSubAppIdsResponse DescribeSubAppIds(Models\DescribeSubAppIdsRequest $req) This API is used to query the list of the primary application and subapplications of the current account.
 * @method Models\DescribeSuperPlayerConfigsResponse DescribeSuperPlayerConfigs(Models\DescribeSuperPlayerConfigsRequest $req) This API is used to query the list of superplayer configurations and supports paginated queries by filters.
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) This API is used to query the details of execution status and result of a task submitted in the last 3 days by task ID.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * This API is used to query the task list;
* If there are many data entries in the list, one single call of the API may not be able to pull the entire list. The `ScrollToken` parameter can be used to pull the list in batches;
* Only tasks in the last three days (72 hours) can be queried.
 * @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) This API is used to get the list of transcoding templates based on unique template ID. The return result includes all eligible custom and [preset transcoding templates](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeVodDomainsResponse DescribeVodDomains(Models\DescribeVodDomainsRequest $req) This API is used to query the list of VOD domain names.
 * @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) This API is used to query custom watermarking templates and supports paged queries by filters.
 * @method Models\DescribeWordSamplesResponse DescribeWordSamples(Models\DescribeWordSamplesRequest $req) This API is used to perform paginated queries of keyword sample information by use case, keyword, and tag.
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
  It takes about 5-10 minutes for a forbidding/unblocking operation to take effect across the entire network.
 * @method Models\LiveRealTimeClipResponse LiveRealTimeClip(Models\LiveRealTimeClipRequest $req) Live clipping means that during a live broadcast (before it ends), you can select a segment of previous live broadcast content to generate a new video (in HLS format) in real time and share it immediately or store it persistently.

VOD supports two live clipping modes:
- Persistent clipping: in this mode, the clipped video is saved as an independent video file with a `FileId`, which is suitable for **persistently storing** highlights;
- Temporary clipping: in this mode, the clipped video is part of the LVB recording file with no `FileId`, which is suitable for **temporarily sharing** highlights;

Note:
- The live clipping feature can be used only when [time shifting](https://intl.cloud.tencent.com/document/product/267/32742?from_cn_redirect=1) has been enabled for the target live stream.
- Live clipping is performed based on the m3u8 file generated by LVB recording, so its minimum clipping granularity is one ts segment rather than at or below the second level.


### Persistent clipping
In persistent clipping mode, the clipped video is saved as an independent video file with a `FileId`, and its lifecycle is not subject to the source LVB recording video (even if the source video is deleted, the clipped video will not be affected in any way). It can be further processed (transcoded, published on WeChat, etc.).

An example is as follows: for a complete football match, the source LVB recording video may be up to 2 hours in length. You want to store this video for only 2 months for the purpose of cost savings. However, you want to specify a longer retention period for the "highlights" video created by live clipping and perform additional VOD operations on it such as transcoding and release on WeChat. In this case, you need to choose the persistent clipping mode of live clipping.

The advantage of persistent clipping is that the clipped video has a lifecycle independent of the source recording video and can be managed independently and stored persistently.

### Temporary clipping
In temporary clipping mode, the clipped video (m3u8 file) shares the same ts segments with the LVB recording video instead of being an independent video. It only has a playback URL but has no `FileId`, and its validity period is the same as that of the LVB recording video; therefore, if the LVB recording video is deleted, it cannot be played back.

For temporary clipping, as the clipping result is not an independent video, it will not be included in VOD's media asset management (for example, it will not be counted in the total videos in the console), and no video processing operations can be separately performed on it, such as transcoding and release on WeChat.

The advantage of temporary clipping is that the clipping operation is very "lightweight" and does not incur additional storage fees. However, the clipped video has the same lifecycle as the source recording video and cannot be further transcoded or processed.
 * @method Models\ManageTaskResponse ManageTask(Models\ManageTaskRequest $req) This API is used to manage initiated tasks.
 * @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) This API is used to modify a custom video content analysis template.

Note: templates with an ID below 10000 are preset and cannot be modified.
 * @method Models\ModifyAIRecognitionTemplateResponse ModifyAIRecognitionTemplate(Models\ModifyAIRecognitionTemplateRequest $req) This API is used to modify a custom video content recognition template.
 * @method Models\ModifyAdaptiveDynamicStreamingTemplateResponse ModifyAdaptiveDynamicStreamingTemplate(Models\ModifyAdaptiveDynamicStreamingTemplateRequest $req) This API is used to modify an adaptive bitrate streaming template.
 * @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) This API is used to modify a custom animated image generating template.
 * @method Models\ModifyClassResponse ModifyClass(Models\ModifyClassRequest $req) This API is used to modify the category of a media file.
 * @method Models\ModifyContentReviewTemplateResponse ModifyContentReviewTemplate(Models\ModifyContentReviewTemplateRequest $req) This API is used to modify custom intelligent video content recognition templates.
 * @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) This API is used to modify a custom image sprite generating template.
 * @method Models\ModifyMediaInfoResponse ModifyMediaInfo(Models\ModifyMediaInfoRequest $req) This API is used to modify the attributes of a media file, including category, name, description, tag, expiration time, timestamp information, video thumbnail, and subtitle information.
 * @method Models\ModifyPersonSampleResponse ModifyPersonSample(Models\ModifyPersonSampleRequest $req) This API is used to modify sample information according to the sample ID. You can modify the name and description, add, delete, and reset facial features or tags. Leave at least one image after deleting facial features. To leave no image, please use the reset operation.
 * @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) This API is used to modify a custom sampled screencapturing template.
 * @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) This API is used to modify a custom time point screencapturing template.
 * @method Models\ModifySubAppIdInfoResponse ModifySubAppIdInfo(Models\ModifySubAppIdInfoRequest $req) This API is used to modify subapplication information, but it is not allowed to modify primary application information.
 * @method Models\ModifySubAppIdStatusResponse ModifySubAppIdStatus(Models\ModifySubAppIdStatusRequest $req) This API is used to enable/disable a subapplication. After a subapplication is disabled, its corresponding domain name will be blocked and its access to the console will be restricted.
 * @method Models\ModifySuperPlayerConfigResponse ModifySuperPlayerConfig(Models\ModifySuperPlayerConfigRequest $req) This API is used to modify a superplayer configuration.
 * @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) This API is used to modify a custom transcoding template.
 * @method Models\ModifyVodDomainAccelerateConfigResponse ModifyVodDomainAccelerateConfig(Models\ModifyVodDomainAccelerateConfigRequest $req) This API is used to modify the acceleration region of a domain name on VOD.
1. You can modify acceleration regions of only domain names whose status is `Online`.
 * @method Models\ModifyVodDomainConfigResponse ModifyVodDomainConfig(Models\ModifyVodDomainConfigRequest $req) This API is used to modify domain name settings, such as the hotlink protection configuration.
1. You can modify settings of only domain names whose status is `Online`.
 * @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) This API is used to modify a custom watermarking template. The watermark type cannot be modified.
 * @method Models\ModifyWordSampleResponse ModifyWordSample(Models\ModifyWordSampleRequest $req) This API is used to modify the use case and tag of a keyword. The keyword itself cannot be modified, but you can delete it and create another one if needed.
 * @method Models\ParseStreamingManifestResponse ParseStreamingManifest(Models\ParseStreamingManifestRequest $req) This API is used to parse the index file content and return the list of segment files to be uploaded when an HLS video is uploaded. A segment file path must be a relative path of the current directory or subdirectory instead of a URL or absolute path.
 * @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) This API is used to initiate a media processing task on a VOD file. The task may include:
1. Video transcoding (with watermark)
2. Animated image generating
3. Time point screenshot
4. Sampled screenshot
5. Image sprite generating
6. Taking a screenshot to use as the thumbnail
7. Adaptive bitrate streaming and encryption
8. Intelligent recognition of pornographic, terrorism, and politically sensitive content
9. Intelligent content analysis for labeling, categorization, thumbnail generation, or frame-specific labeling
10. Recognition of opening and closing credits, faces, full text, text keywords, full speech, speech keywords, and objects

If event notifications are used, the event type is [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1).
 * @method Models\ProcessMediaByProcedureResponse ProcessMediaByProcedure(Models\ProcessMediaByProcedureRequest $req) This API is used to initiate a processing task for a VOD video with a task flow template.
There are two ways to create a task flow template:
1. Create and modify a task flow template in the console;
2. Create a task flow template through the task flow template API.
 * @method Models\ProcessMediaByUrlResponse ProcessMediaByUrl(Models\ProcessMediaByUrlRequest $req) This API is <font color='red'>disused</font>, please use [ProcessMedia](https://intl.cloud.tencent.com/document/product/862/37578?from_cn_redirect=1) API of MPS, with the input parameter `InputInfo.UrlInputInfo.Url` set to a video URL.
 * @method Models\PullEventsResponse PullEvents(Models\PullEventsRequest $req) * This API is used to get event notifications from the business server through [reliable callback](https://intl.cloud.tencent.com/document/product/266/33948).
* The API gets event data through long polling. That is, if there is any unconsumed event on the server, the event notification will be returned to the requester immediately. If there is no unconsumed event on the server, the request will be suspended in the backend until a new event is generated.
* The request can be suspended for up to 5 seconds. It’s recommended to set the request timeout period to 10 seconds.
* Event notifications not pulled will be retained for up to 4 days and may be cleared after this period.
* After the API returns an event, the caller must call the [ConfirmEvents](https://intl.cloud.tencent.com/document/product/266/34184) API within <font color="red">30 seconds</font> to confirm that the event notification has been processed. Otherwise, the event notification will be pulled again after <font color="red">30 seconds</font>.
* This API can get up to 16 event notifications at a time.
 * @method Models\PullUploadResponse PullUpload(Models\PullUploadRequest $req) This API is used to pull a video on the internet to the VOD platform.
 * @method Models\PushUrlCacheResponse PushUrlCache(Models\PushUrlCacheRequest $req) 1. This API is used to prefetch a list of specified URLs.
2. The URL domain names must have already been registered with VOD.
3. Up to 20 URLs can be specified in one request.
 * @method Models\ResetProcedureTemplateResponse ResetProcedureTemplate(Models\ResetProcedureTemplateRequest $req) This API is used to reset a custom task flow template.  
 * @method Models\SearchMediaResponse SearchMedia(Models\SearchMediaRequest $req) This API is used to search for media information and supports filtering and sorting the returned results in many ways. You can:
- Specify the file ID set `FileIds` to return the media files with any ID in the set.
- Fuzzily search by multiple media filenames `Names` or multiple descriptions `Descriptions`.
- Search by multiple filename prefixes `NamePrefixes`.
- Specify the category set `ClassIds` (please see the input parameters) to return the media files in any category in the set. For example, assuming that there are categories of `Movies`, `TV Series`, and `Variety Shows`, and there are subcategories of `History`, `Action`, and `Romance` in the category of `Movies`, if `Movies` and `TV Series` are specified in `ClassIds`, then all the subcategories under `Movies` and `TV Series` will be returned. However, if `History` and `Action` are specified in `ClassIds`, only the media files in these two subcategories will be returned.
- Specify the tag set `Tags` (please see the input parameters) to return the media files with any tag in the set. For example, assuming that there are tags of `ACG`, `Drama`, and `YTPMV`, if `ACG` and `YTPMV` are specified in `Tags`, then any media files with either tag will be retrieved.
- Specify the file type set `Categories` (please see the input parameters) to return the media files of any type in the set. For example, assuming that there are `Video`, `Audio`, and `Image` file types, if `Video` and `Audio` are specified in `Categories`, then all media files of these two types will be retrieved.
- Specify the source set `SourceTypes` (please see the input parameters) to return the media files from any source in the set. For example, assuming that there are `Record` (live recording) and `Upload` (upload) sources, if `Record` and `Upload` are specified in `SourceTypes`, then all media files from these two sources will be retrieved.
- Specify the live stream code set `StreamIds` (please see the input parameters) to filter live recording media files.
- Specify the video ID set `Vids` (please see the input parameters) to filter live recording media files.
- Specify the creation time range to filter media files.
- Specify a text string `Text` for fuzzy search by media filenames or descriptions. (This is not recommended. `Names`, `NamePrefixes`, or `Descriptions` should be used instead.)
- Specify a media file source `SourceType` for search. (This is not recommended. `SourceTypes` should be used instead.)
- Specify a live stream code `StreamId` for search. (This is not recommended. `StreamIds` should be used instead.)
- Specify a video ID `Vid` for search. (This is not recommended. `Vids` should be used instead.)
- Specify a creation start time `StartTime` for search. (This is not recommended. `CreateTime` should be used instead.)
- Specify a creation end time `EndTime` for search. (This is not recommended. `CreateTime` should be used instead.)
- Search by any combination of the parameters above. For example, you can search for the media files with the tags of "Drama" and "Suspense" in the category of "Movies" or "TV Series" created between 12:00:00, December 1, 2018 and 12:00:00, December 8, 2018. Please note that for any parameter that supports array input, the search logic between its elements is "OR", and the logical relationship between parameters is "AND".

- Sort the results by creation time and return them in multiple pages by specifying `Offset` and `Limit` (please see the input parameters).
- Specify `Filters` to return specified types of media information (all types will be returned by default). Valid values:
    1. Basic information `basicInfo`: media name, category, playback address, cover image, etc.
    2. Metadata `metaData`: size, duration, video stream information, audio stream information, etc.
    3. Information of the transcoding result `transcodeInfo`: addresses, video stream parameters, and audio stream parameters of various specifications generated by the file transcoding.
    4. Information of the animated image generating result `animatedGraphicsInfo`: information of an animated image (such as .gif) generated from a video.
    5. Information of a sampled screenshot `sampleSnapshotInfo`: information of a sampled screenshot of a video.
    6. Information of an image sprite `imageSpriteInfo`: information of an image sprite generated from a video.
    7. Information of a point-in-time screenshot `snapshotByTimeOffsetInfo`: information of a point-in-time screenshot of a video.
    8. Information of a timestamp `keyFrameDescInfo`: information of a timestamp configured for a video.
    9. Information of transcoding to adaptive bitrate streaming `adaptiveDynamicStreamingInfo`: specification, encryption type, muxing format, etc.

<div id="maxResultsDesc">Upper limit of returned results:</div>
- The <b><a href="#p_offset">Offset</a> and <a href="#p_limit">Limit</a> parameters determine the number of search results on one single page. Note: if both of them use the default value, this API will return up to 10 results.</b>
- <b>Up to 5,000 search results can be returned, and excessive ones will not be displayed. If there are too many search results, you are recommended to use more filters to narrow down the search results.</b>
 * @method Models\SimpleHlsClipResponse SimpleHlsClip(Models\SimpleHlsClipRequest $req) This API is used to clip an HLS video by time period and then generate a new HLS video which developers can share right away or store persistently.

VOD supports two types of clipping:
- Clipping for persistent storage: the video clip is saved as an independent video file with a `FileId`.
- Clipping for temporary sharing: the video clip is affiliated to the input file and has no `FileId`.

Notes:
- Clipping is based on the input M3U8 file that contains the list of TS segments, so the smallest clipping unit is one TS segment instead of in seconds or less.


### Clipping for Persistent Storage
In this mode, a video clip is saved as an independent video file with a `FileId`, and its lifecycle is not subject to the input video. Even if the source video is deleted, the video clip still exists. Moreover, the video clip can be transcoded, published on WeChat, and processed in other ways.

Take the video of a two-hour long football match for example. The customer may only want to store the original two-hour video for two months to save costs, but want to store clipped highlights for a specified longer time and also to transcode and publish such highlights on WeChat. Clipping for persistent storage is suitable for this customer.

The advantage of clipping for persistent storage is that the video clip has a lifecycle independent of the input video and can be managed independently and stored persistently.

### Clipping for Temporary Sharing
The video clip (an M3U8 file) shares the same TS segments with the input video instead of being an independent video. It only has a playback URL but has no `FileId`, and its validity period is the same as that of the input video. Once the input video is deleted, the video clip cannot be played back.

As the video clip is not an independent video, it will not be managed as a VOD media asset. For example, it will not be counted in the total videos displayed on the VOD console, and also cannot be transcoded or published on WeChat.

Clipping for temporary sharing is lightweight and incurs no additional storage fees. However, the video clip has the same lifecycle as the source recording video and cannot be transcoded or processed in other ways.
 * @method Models\WeChatMiniProgramPublishResponse WeChatMiniProgramPublish(Models\WeChatMiniProgramPublishRequest $req) This API is used to publish a VOD video on WeChat Mini Program for playback in the WeChat Mini Program player.
 */

class VodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vod";

    /**
     * @var string
     */
    protected $version = "2018-07-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("vod")."\\"."V20180717\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
