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

namespace TencentCloud\Vod\V20180717;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vod\V20180717\Models as Models;

/**
 * @method Models\ApplyUploadResponse ApplyUpload(Models\ApplyUploadRequest $req) * This API is used to apply for uploading a media file (and cover file) to VOD and obtain the metadata of file storage (including upload path and upload signature) for subsequent use by the uploading API.
* For the detailed upload process, please see [Overview of Upload from Client](https://intl.cloud.tencent.com/document/product/266/9759?from_cn_redirect=1).
 * @method Models\AttachMediaSubtitlesResponse AttachMediaSubtitles(Models\AttachMediaSubtitlesRequest $req) This API is used to associate/disassociate subtitles with/from a media file of a specific adaptive bitrate streaming template ID.
 * @method Models\CloneCDNDomainResponse CloneCDNDomain(Models\CloneCDNDomainRequest $req) Clone CDN Domain.
 * @method Models\CommitUploadResponse CommitUpload(Models\CommitUploadRequest $req) This API is used to confirm the result of uploading a media file (and cover file) to VOD, store the media information, and return the playback address and ID of the file.
 * @method Models\ComposeMediaResponse ComposeMedia(Models\ComposeMediaRequest $req) This API is used to compose a media file. You can use it to do the following:

1. **Rotation/Flipping**: Rotate a video or image by a specific angle or flip a video or image.
2. **Audio control**: Increase/Lower the volume of an audio/video file or mute an audio/video file.
3. **Overlaying**: Overlay videos/images in a specified sequence to achieve the picture-in-picture effect.
4. **Audio mixing**: Mix the audios of audio/video files.
5 **Audio extraction**: Extract audio from a video.
6. **Clipping**: Clip segments from audio/video files according to a specified start and end time.
7. **Splicing**: Splice videos/audios/images in a specified sequence.
8. **Transition**: Add transition effects between video segments or images that are spliced together.

The output file is in MP4 or MP3 format. In the callback for media composition, the event type is [ComposeMediaComplete](https://intl.cloud.tencent.com/document/product/266/43000?from_cn_redirect=1).
 * @method Models\ConfirmEventsResponse ConfirmEvents(Models\ConfirmEventsRequest $req) * After the `PullEvents` API is called to get an event, this API must be called to confirm that the message has been received;
* After the event handler is obtained, the validity period of waiting for confirmation is 30 seconds. If the wait exceeds 30 seconds, a parameter error will be reported (4000);
* For more information, please see the [reliable callback](https://intl.cloud.tencent.com/document/product/266/33779?from_cn_redirect=1#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83) of event notification.
 * @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) This API is used to create a custom video content analysis template. Up to 50 templates can be created.
 * @method Models\CreateAIRecognitionTemplateResponse CreateAIRecognitionTemplate(Models\CreateAIRecognitionTemplateRequest $req) This API is used to create a custom video content recognition template. Up to 50 templates can be created.
 * @method Models\CreateAdaptiveDynamicStreamingTemplateResponse CreateAdaptiveDynamicStreamingTemplate(Models\CreateAdaptiveDynamicStreamingTemplateRequest $req) This API is used to create an adaptive bitrate streaming template. Up to 100 templates can be created.
 * @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) This API is used to create a custom animated image generating template. Up to 16 templates can be created.
 * @method Models\CreateCDNDomainResponse CreateCDNDomain(Models\CreateCDNDomainRequest $req) This API is used for adding domain names to VOD. A user can add up to 20 domain names. 1. After the domain name is added successfully, VOD will carry out the deployment of the domain name. It takes approximately 2 minutes for the domain name to change from the deployment status to the online status.
 * @method Models\CreateClassResponse CreateClass(Models\CreateClassRequest $req) * This API is used to categorize media assets for management;
* It does not affect the categories of existing media assets. If you want to modify the category of a media asset, call the [ModifyMediaInfo](https://intl.cloud.tencent.com/document/product/266/31762?from_cn_redirect=1) API.
* There can be up to 4 levels of categories.
* One category can have up to 500 subcategories under it.
 * @method Models\CreateComplexAdaptiveDynamicStreamingTaskResponse CreateComplexAdaptiveDynamicStreamingTask(Models\CreateComplexAdaptiveDynamicStreamingTaskRequest $req) Initiate an adaptive bitrate streaming processing task, with the following features:
1. Output HLS and MPEG-DASH adaptive streams based on the specified templates;
2. DRM options for the adaptive bitrate streaming include no encryption, Widevine, or FairPlay.
3. The output adaptive bitrate streaming can include multiple audio streams in different languages, with each language sourced from different media files.
4. The output adaptive stream can also include multiple subtitle streams in different languages.

**Notes:**
1. When using opening/closing credits, the video stream in the opening credit must be synchronized with the audio stream; otherwise, it will result in audio and video desynchronization in the output content.
2. If the output adaptive bitrate streaming needs to include audio from the main media, the FileId of the main media must be specified in the AudioSet parameter.
3. Subtitles must be added to the main media beforehand, which can be done through the ModifyMediaInfo API interface or the Video Management page in the console.
4. Support for TESHD transcoding and watermarking is currently not available.
 * @method Models\CreateContentReviewTemplateResponse CreateContentReviewTemplate(Models\CreateContentReviewTemplateRequest $req) We have <font color=red>stopped updating</font> this API. Our new moderation templates can moderate audio/video as well as images. For details, see [CreateReviewTemplate](https://intl.cloud.tencent.com/document/api/266/84391?from_cn_redirect=1).
This API is used to create a custom audio/video moderation template. Up to 50 templates can be created in total.
 * @method Models\CreateDomainVerifyRecordResponse CreateDomainVerifyRecord(Models\CreateDomainVerifyRecordRequest $req) This API is used for generating a subdomain resolution, prompting the customer to add it to the domain name resolution, used for wildcard domain and domain name retrieval verification of ownership.
 * @method Models\CreateEnhanceMediaTemplateResponse CreateEnhanceMediaTemplate(Models\CreateEnhanceMediaTemplateRequest $req) Create enhance media template.
 * @method Models\CreateHeadTailTemplateResponse CreateHeadTailTemplate(Models\CreateHeadTailTemplateRequest $req) Create HeadTail Template.
 * @method Models\CreateImageProcessingTemplateResponse CreateImageProcessingTemplate(Models\CreateImageProcessingTemplateRequest $req) This API is used to create a custom image processing template. A template can include at most 10 operations, for example, crop-scale-crop-blur-scale-crop-scale-crop-blur-scale. You can have up to 16 image processing templates.
 * @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) This API is used to create a custom image sprite generating template. Up to 16 templates can be created.
 * @method Models\CreateJustInTimeTranscodeTemplateResponse CreateJustInTimeTranscodeTemplate(Models\CreateJustInTimeTranscodeTemplateRequest $req) Create Just In Time Transcode Template.
 * @method Models\CreatePersonSampleResponse CreatePersonSample(Models\CreatePersonSampleRequest $req) This API is used to create samples for using facial features positioning and other technologies to perform video processing operations such as content recognition and inappropriate information recognition.
 * @method Models\CreateProcedureTemplateResponse CreateProcedureTemplate(Models\CreateProcedureTemplateRequest $req) This API is used to create a custom task flow template. Up to 50 templates can be created.
 * @method Models\CreateQualityInspectTemplateResponse CreateQualityInspectTemplate(Models\CreateQualityInspectTemplateRequest $req) Creates media quality inspection template.
 * @method Models\CreateRebuildMediaTemplateResponse CreateRebuildMediaTemplate(Models\CreateRebuildMediaTemplateRequest $req) Create rebuild media template.
 * @method Models\CreateReviewTemplateResponse CreateReviewTemplate(Models\CreateReviewTemplateRequest $req) This API is used to create a custom moderation template. Up to 50 templates can be created in total.
> The templates can only be used by the APIs [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) and [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1).
 * @method Models\CreateRoundPlayResponse CreateRoundPlay(Models\CreateRoundPlayRequest $req) This API is used to create a playlist. You can create at most 100 playlists.
For each video on the list, you can either use the original file or a transcoding file.
The files must be in HLS format. Preferably, they should have the same bitrate and resolution.
 * @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) This API is used to create a custom sampled screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) This API is used to create a custom time point screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateStorageRegionResponse CreateStorageRegion(Models\CreateStorageRegionRequest $req) This API is used to enable storage in a region.
  1. When you activate VOD, the system will enable storage for you in certain regions. If you need to store data in another region, you can use this API to enable storage in that region.
  2. You can use the `DescribeStorageRegions` API to query all supported storage regions and the regions you have storage access to currently.
 * @method Models\CreateSubAppIdResponse CreateSubAppId(Models\CreateSubAppIdRequest $req) This API is used to create a VOD subapplication.
 * @method Models\CreateSuperPlayerConfigResponse CreateSuperPlayerConfig(Models\CreateSuperPlayerConfigRequest $req) We have <font color='red'>stopped updating</font> this API. Currently, you no longer need a player configuration to use player signatures. For details, see [Player Signature](https://intl.cloud.tencent.com/document/product/266/45554?from_cn_redirect=1).
This API is used to create a player configuration. Up to 100 configurations can be created.
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
 * @method Models\DeleteCDNDomainResponse DeleteCDNDomain(Models\DeleteCDNDomainRequest $req) Delete CDN Domain
 * @method Models\DeleteClassResponse DeleteClass(Models\DeleteClassRequest $req) * A category can be deleted only if it has no subcategories and associated media files;
* Otherwise, [delete the media files](https://intl.cloud.tencent.com/document/product/266/31764?from_cn_redirect=1) and subcategories first before deleting the category.
 * @method Models\DeleteContentReviewTemplateResponse DeleteContentReviewTemplate(Models\DeleteContentReviewTemplateRequest $req) We have <font color=red>stopped updating</font> this API. Our new moderation templates can moderate audio/video as well as images. For details, see [DeleteReviewTemplate](https://intl.cloud.tencent.com/document/api/266/84390?from_cn_redirect=1).
This API is used to delete a custom audio/video moderation template.
 * @method Models\DeleteEnhanceMediaTemplateResponse DeleteEnhanceMediaTemplate(Models\DeleteEnhanceMediaTemplateRequest $req) Delete Enhance Media template
 * @method Models\DeleteHeadTailTemplateResponse DeleteHeadTailTemplate(Models\DeleteHeadTailTemplateRequest $req) Delete HeadTail Template
 * @method Models\DeleteImageProcessingTemplateResponse DeleteImageProcessingTemplate(Models\DeleteImageProcessingTemplateRequest $req) This API is used to delete an image processing template.
 * @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) This API is used to delete an image sprite generating template.
 * @method Models\DeleteJustInTimeTranscodeTemplateResponse DeleteJustInTimeTranscodeTemplate(Models\DeleteJustInTimeTranscodeTemplateRequest $req) Delete Just In Time Transcode Template.
 * @method Models\DeleteMediaResponse DeleteMedia(Models\DeleteMediaRequest $req) * This API is used to delete a media file and its processed files, such as the transcoded video files, image sprites, screenshots, and videos for publishing on WeChat.
* You can delete the original files, transcoded video files, and videos for publishing on WeChat, etc. of videos with specified IDs.
* Note: after the original file of a video is deleted, you cannot transcode the video, publish it on WeChat, or perform other operations on it.
 * @method Models\DeletePersonSampleResponse DeletePersonSample(Models\DeletePersonSampleRequest $req) This API is used to delete samples according to sample IDs.
 * @method Models\DeleteProcedureTemplateResponse DeleteProcedureTemplate(Models\DeleteProcedureTemplateRequest $req) Delete user-created task flow templates.
 * @method Models\DeleteQualityInspectTemplateResponse DeleteQualityInspectTemplate(Models\DeleteQualityInspectTemplateRequest $req) Deletes media quality inspection template.
 * @method Models\DeleteRebuildMediaTemplateResponse DeleteRebuildMediaTemplate(Models\DeleteRebuildMediaTemplateRequest $req) Delete rebuild media template.
 * @method Models\DeleteReviewTemplateResponse DeleteReviewTemplate(Models\DeleteReviewTemplateRequest $req) This API is used to delete a custom moderation template.
> The templates can only be used by the APIs [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) and [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1).
 * @method Models\DeleteRoundPlayResponse DeleteRoundPlay(Models\DeleteRoundPlayRequest $req) This API is used to delete a playlist.
 * @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) This API is used to delete a custom sampled screencapturing template.
 * @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) This API is used to delete a custom time point screencapturing template.
 * @method Models\DeleteSuperPlayerConfigResponse DeleteSuperPlayerConfig(Models\DeleteSuperPlayerConfigRequest $req) We have <font color='red'>stopped updating</font> this API. Currently, you no longer need a player configuration to use player signatures. For details, see [Player Signature](https://intl.cloud.tencent.com/document/product/266/45554?from_cn_redirect=1).
This API is used to delete a player configuration.  
*Note: Preset player configurations cannot be deleted.*
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
 * @method Models\DescribeCDNDomainsResponse DescribeCDNDomains(Models\DescribeCDNDomainsRequest $req) Describe CDN Domains
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
 * @method Models\DescribeClientUploadAccelerationUsageDataResponse DescribeClientUploadAccelerationUsageData(Models\DescribeClientUploadAccelerationUsageDataRequest $req) This interface returns client upload acceleration statistics within the query time range. 
 1. You can query the client upload acceleration statistics in the last 365 days. 
 2. The query time span does not exceed 90 days. 
 3. If the query time span exceeds 1 day, data with day granularity will be returned. Otherwise, data with 5-minute granularity will be returned.
 * @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) We have <font color=red>stopped updating</font> this API. Our new moderation templates can moderate audio/video as well as images. For details, see [DescribeReviewTemplates](https://intl.cloud.tencent.com/document/api/266/84389?from_cn_redirect=1).
This API is used to get the information of custom and [preset](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.AE.A1.E6.A0.B8.E6.A8.A1.E6.9D.BF) audio/video moderation templates based on template IDs.
 * @method Models\DescribeCurrentPlaylistResponse DescribeCurrentPlaylist(Models\DescribeCurrentPlaylistRequest $req) Query current playlist of the round play.
 * @method Models\DescribeDailyPlayStatFileListResponse DescribeDailyPlayStatFileList(Models\DescribeDailyPlayStatFileListRequest $req) This API is used to query the download links of playback statistics files.
* You can query the download links of playback statistics files in the past year. The start and end dates for query cannot be more than 90 days apart.
* Every day, VOD will analyze CDN request logs of the previous day and then generate a playback statistics file.
* A playback statistics file includes playback times and traffic of media files.
* Notes on playback times:
    1. HLS file: VOD counts playback times when M3U8 files are accessed, but not when TS files are accessed.
    2. Other files (MP4 files for example): VOD does not count playback times when the playback request carries the `range` parameter and the `start` parameter in `range` is not `0`. In other cases, VOD counts playback times.
* Statistics on playback devices: VOD counts playback times on mobile clients when the playback request carries the `UserAgent` parameter which includes an identifier such as `Android` or `iPhone`. In other cases, VOD counts playback times on PC clients.
 * @method Models\DescribeDrmKeyProviderInfoResponse DescribeDrmKeyProviderInfo(Models\DescribeDrmKeyProviderInfoRequest $req) This API is used to query DRM key information.
 * @method Models\DescribeEnhanceMediaTemplatesResponse DescribeEnhanceMediaTemplates(Models\DescribeEnhanceMediaTemplatesRequest $req) Describe Enhance Media Templates.
 * @method Models\DescribeEventConfigResponse DescribeEventConfig(Models\DescribeEventConfigRequest $req) Tencent Cloud VOD provides customers with services such as media upload, media management, and media processing. During or after the execution of these services, Tencent Cloud VOD also offers various corresponding event notifications to facilitate developers' awareness of the service processing status and to perform subsequent business operations. Developers can use this interface to query the current configuration of event notification reception methods, reception addresses, and which events have callback notification reception enabled.
 * @method Models\DescribeFileAttributesResponse DescribeFileAttributes(Models\DescribeFileAttributesRequest $req) This API is used to get file attributes asynchronously.
- Currently, this API can only get the MD5 hash of a file.
- If the file queried is in HLS or DASH format, the attributes of the index file will be returned.
 * @method Models\DescribeHeadTailTemplatesResponse DescribeHeadTailTemplates(Models\DescribeHeadTailTemplatesRequest $req) Describe HeadTail Templates.
 * @method Models\DescribeImageProcessingTemplatesResponse DescribeImageProcessingTemplates(Models\DescribeImageProcessingTemplatesRequest $req) This API is used to query image processing templates. You can specify the filters as well as the offset to start returning records from.
 * @method Models\DescribeImageReviewUsageDataResponse DescribeImageReviewUsageData(Models\DescribeImageReviewUsageDataRequest $req) This interface returns the image review usage information used every day within the query time range.
   1. You can query the image review statistics for the last 365 days.
   2. The query time span does not exceed 90 days.
   3. If the query time span exceeds 1 day, data with a granularity of days will be returned. Otherwise, data with a granularity of 5 minutes will be returned.
 * @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) This API is used to query the list of image sprite generating templates and supports paged queries by filters.
 * @method Models\DescribeJustInTimeTranscodeTemplatesResponse DescribeJustInTimeTranscodeTemplates(Models\DescribeJustInTimeTranscodeTemplatesRequest $req) Describe Just In Time Transcode Templates.
 * @method Models\DescribeLicenseUsageDataResponse DescribeLicenseUsageData(Models\DescribeLicenseUsageDataRequest $req) This interface returns information about the number of license requests per day within the query time range.
   1. You can query the license request statistics in the last 365 days.
   2. The query time span does not exceed 90 days.
   3. If the query time span exceeds 1 day, data with a granularity of days will be returned. Otherwise, data with a granularity of 5 minutes will be returned.
 * @method Models\DescribeMediaInfosResponse DescribeMediaInfos(Models\DescribeMediaInfosRequest $req) 1. This API is used to get the information of multiple media files. Specifically, the information returned is as follows:
    1. `basicInfo`: Basic information including the file name, category, playback URL, and thumbnail.
    2. `metaData`: Metadata including the file size, duration, video stream information, and audio stream information.
    3. `transcodeInfo`: Transcoding information including the URLs, video stream parameters, and audio stream parameters of transcoding outputs.
    4. `animatedGraphicsInfo`: The information of the animated images (such as GIF images) generated.
    5. `sampleSnapshotInfo`: The information of the sampled screenshots generated.
    6. `imageSpriteInfo`: The information of the image sprites generated.
    7. `snapshotByTimeOffsetInfo`: The information of the time point screenshots generated.
    8. `keyFrameDescInfo`: The video timestamp information.
    9. `adaptiveDynamicStreamingInfo`: Adaptive bitrate information including the specifications, encryption type, and formats of the streams.
    10. `reviewInfo`: Moderation details for audio/video content and thumbnails.
2. You can specify what information to return.
 * @method Models\DescribeMediaPlayStatDetailsResponse DescribeMediaPlayStatDetails(Models\DescribeMediaPlayStatDetailsRequest $req) This API is used to query the playback statistics of a media file at the specified granularity.
* You can query playback statistics in the past year.
* If the granularity is an hour, the start and end time cannot be more than seven days apart.
* If the granularity is a day, the start and end time cannot be more than 90 days apart.
 * @method Models\DescribeMediaProcessUsageDataResponse DescribeMediaProcessUsageData(Models\DescribeMediaProcessUsageDataRequest $req) This API is used to query the information of video processing usage within the specified time range.
   1. Statistics on video processing for the last 365 days can be queried.
   2. The query time range cannot be more than 90 days.
 * @method Models\DescribePersonSamplesResponse DescribePersonSamples(Models\DescribePersonSamplesRequest $req) This API is used to query the information of samples and supports paginated queries by sample ID, name, and tag.
 * @method Models\DescribeProcedureTemplatesResponse DescribeProcedureTemplates(Models\DescribeProcedureTemplatesRequest $req) This API is used to get the list of task flow template details by task flow template name.
 * @method Models\DescribeQualityInspectTemplatesResponse DescribeQualityInspectTemplates(Models\DescribeQualityInspectTemplatesRequest $req) Get media quality inspection Template List.
 * @method Models\DescribeRebuildMediaTemplatesResponse DescribeRebuildMediaTemplates(Models\DescribeRebuildMediaTemplatesRequest $req) Describe Rebuild Media Templates
 * @method Models\DescribeReviewDetailsResponse DescribeReviewDetails(Models\DescribeReviewDetailsRequest $req) <b>This API is disused and replaced by [DescribeMediaProcessUsageData](https://intl.cloud.tencent.com/document/product/266/41464?from_cn_redirect=1).</b>

This API returns the video content duration for intelligent recognition in seconds per day within the queried period.

1. The API is used to query statistics on the video content duration for intelligent recognition in the last 365 days.
2. The query period is up to 90 days.
 * @method Models\DescribeReviewTemplatesResponse DescribeReviewTemplates(Models\DescribeReviewTemplatesRequest $req) This API is used to get the information of moderation templates.
> The templates can only be used by the APIs [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) and [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1).
 * @method Models\DescribeRoundPlaysResponse DescribeRoundPlays(Models\DescribeRoundPlaysRequest $req) This API is used to query playlists.
 * @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) This API is used to query the list of sampled screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) This API is used to query the list of time point screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeStorageDataResponse DescribeStorageData(Models\DescribeStorageDataRequest $req) This API is used to query the storage capacity usage and number of files.
 * @method Models\DescribeStorageDetailsResponse DescribeStorageDetails(Models\DescribeStorageDetailsRequest $req) This API is used to query VOD storage usage in bytes within the query period.
    1. You can only query storage usage for the last 365 days.
    2. The query period is up to 90 days.
    3. The query period at minute-level granularity is up to 7 days.
 * @method Models\DescribeStorageRegionsResponse DescribeStorageRegions(Models\DescribeStorageRegionsRequest $req) This API is used to query the following information:
  1. All supported storage regions.
  2. The regions you have storage access to currently.
  3. The default storage region.
 * @method Models\DescribeSubAppIdsResponse DescribeSubAppIds(Models\DescribeSubAppIdsRequest $req) This API is used to query the list of the primary application and subapplications of the current account.
 * @method Models\DescribeSuperPlayerConfigsResponse DescribeSuperPlayerConfigs(Models\DescribeSuperPlayerConfigsRequest $req) We have <font color='red'>stopped updating</font> this API. Currently, you no longer need a player configuration to use player signatures. For details, see [Player Signature](https://intl.cloud.tencent.com/document/product/266/45554?from_cn_redirect=1).
This API is used to query player configurations. It supports pagination.
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) This API is used to query the details of execution status and result of a task submitted in the last 3 days by task ID.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * This API is used to query the task list;
* If there are many data entries in the list, one single call of the API may not be able to pull the entire list. The `ScrollToken` parameter can be used to pull the list in batches;
* Only tasks in the last three days (72 hours) can be queried.
 * @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) This API is used to get the list of transcoding templates based on unique template ID. The return result includes all eligible custom and [preset transcoding templates](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeVodDomainsResponse DescribeVodDomains(Models\DescribeVodDomainsRequest $req) This API is used to query the list of VOD domain names.
 * @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) This API is used to query custom watermarking templates and supports paged queries by filters.
 * @method Models\DescribeWordSamplesResponse DescribeWordSamples(Models\DescribeWordSamplesRequest $req) This API is used to perform paginated queries of keyword sample information by use case, keyword, and tag.
 * @method Models\EditMediaResponse EditMedia(Models\EditMediaRequest $req) Edit the video (cut, splice, etc.) to generate a new video. The editing functions include:

1. Edit a file in the VOD video to generate a new video;
2. Splice multiple files to generate a new video;
3. Edit multiple files and then splice them to generate a new video;
4. Directly generate a new video for a stream;
5. Edit a stream to generate a new video. Video;
6. Splice multiple streams to generate a new video;
7. Clip and then splice multiple streams to generate a new video. 

For the generated new video, you can also specify whether the generated video needs to execute the task flow. 

>When editing or splicing live streams, please make sure to do so after the stream is over. Otherwise the resulting video may be incomplete. 

If event notification is used, the type of event notification is [Video editing completed](https://intl.cloud.tencent.com/document/product/266/33794?from_cn_redirect=1).
 * @method Models\EnhanceMediaByTemplateResponse EnhanceMediaByTemplate(Models\EnhanceMediaByTemplateRequest $req) Enhance Media By Template.
 * @method Models\EnhanceMediaQualityResponse EnhanceMediaQuality(Models\EnhanceMediaQualityRequest $req) Initiate a Remaster task for audio and video media in VOD
 * @method Models\ExecuteFunctionResponse ExecuteFunction(Models\ExecuteFunctionRequest $req) This API is only used in special scenarios of custom development. Unless requested by VOD customer service, please do not call it.
 * @method Models\ExtractCopyRightWatermarkResponse ExtractCopyRightWatermark(Models\ExtractCopyRightWatermarkRequest $req) Extract CopyRight Watermark.
 * @method Models\ExtractTraceWatermarkResponse ExtractTraceWatermark(Models\ExtractTraceWatermarkRequest $req) This API is used to extract the user ID of a user that distributed a video containing a digital watermark.
 * @method Models\FastEditMediaResponse FastEditMedia(Models\FastEditMediaRequest $req) Implement quick concatenation and quick clipping for Tencent Cloud VOD's HLS videos to generate new media in HLS format. The video generated by quick concatenation or clipping will produce a new FileId and undergo solidification. After successful solidification, the new video file exists independently of the original input video and is not affected by deletions or other actions on the original video. <font color='red'>Note:</font> Enable the reception of persistence completed event notifications through the ModifyEvent config interface, and a PersistenceComplete type event notification will be received after successful solidification. Before receiving this event notification, operations such as deletion or cooling down of the original input video should not be performed, otherwise, abnormal playback may occur in the video generated by the concatenation and clipping.
 * @method Models\ForbidMediaDistributionResponse ForbidMediaDistribution(Models\ForbidMediaDistributionRequest $req) * After a media file is forbidden, except previewing it in the VOD Console, accessing the URLs of its various resources (such as source file, output files, and screenshots) in other scenarios will return error 403.
  It takes about 5-10 minutes for a forbidding/unblocking operation to take effect across the entire network.
 * @method Models\HandleCurrentPlaylistResponse HandleCurrentPlaylist(Models\HandleCurrentPlaylistRequest $req) Operate the current play list . Supported operations include:<li> Insert: Insert a playing program into the current playlist.</li><li> Delete: Remove a playing program from the playlist.</li>
 * @method Models\InspectMediaQualityResponse InspectMediaQuality(Models\InspectMediaQualityRequest $req) Initiate media quality inspection task.
 * @method Models\LiveRealTimeClipResponse LiveRealTimeClip(Models\LiveRealTimeClipRequest $req) Live broadcast real-time editing means that during the live broadcast process (that is, before the live broadcast has ended), customers can select a section of past live broadcast content to generate a new video (HLS format) in real time. Developers can share it immediately, or permanently Save it.

Tencent Cloud VOD supports two real-time editing modes:
- Editing and solidification: Save the edited video as an independent video with an independent FileId; suitable for scenes where the highlight clips are saved for a long time;
- Editing is not solidified: the edited video is attached to the live broadcast recording file and does not have an independent FileId; it is suitable for scenarios where highlight clips are **temporarily shared**.

Notice:
- The prerequisite for using the live broadcast real-time editing function is that the target live stream has the [Time Shift Replay](https://intl.cloud.tencent.com/document/product/267/32742?from_cn_redirect=1) function enabled.
- Live broadcast real-time editing is based on the m3u8 file generated by live broadcast recording, so its minimum editing accuracy is one ts slice, and it is impossible to achieve second-level or more precise editing accuracy.
- Since the stream may be interrupted during the live broadcast, the actual video duration generated by editing may be inconsistent with expectations. For example, the time interval for editing a live stream is from 2018-09-20T10:30:00Z to 2018-09-20T10:40:00Z. If the stream is interrupted during this time interval, the duration of the returned media asset file will be Less than 10 minutes, in which case it can be sensed via the output parameter <a href="#p_segmentset">SegmentSet</a>.

### Clip solidification
Clip solidification means saving the clipped video into an independent video (with an independent FileId). Its life cycle is not affected by the original live broadcast recording video (even if the original recording video is deleted, the editing results will not be affected in any way); it can also be subjected to secondary processing such as transcoding.

For example: for a complete football match, the original video recorded live may be as long as 2 hours. To save costs, the customer can store this video for 2 months, but for the "highlight moment" video that is edited in real time during the live broadcast However, you can specify a longer storage period, and at the same time, you can separately transcode the "highlight moments" video and other on-demand operations. At this time, you can choose the solution of real-time editing and solidification of the live broadcast.

The advantage of editing and curing is that its life cycle is independent of the original recorded video, and can be managed independently and stored for a long time.

<font color='red'>Notice:</font> If solidification is specified during clipping, enable the reception of persistence completed event notifications through the ModifyEventConfig interface. After successful solidification, an event notification of type PersistenceComplete will be received. Before receiving this event notification, operations such as deletion or cooling down of live recording videos should not be performed, otherwise, abnormal playback may occur in the video generated by the clipping.

### Clips are not solidified
The editing is not solidified, which means that the result of editing (m3u8 file) and the live recording video share the same ts fragment. The newly generated video is not an independent and complete video (no independent FileId, only playback URL), and its validity period is the same as the live broadcast. The validity period of the complete recorded video is the same. Once the video recorded during the live broadcast is deleted, the clip will also become unplayable.

The clip is not solidified. Because the clip result is not an independent video, it will not be included in on-demand media asset video management (for example, the total number of videos in the console will not count this clip), and this clip cannot be transcoded separately. Video processing operations.

The advantage of not solidifying editing is that its editing operation is very "lightweight" and does not generate additional storage overhead. However, its disadvantage is that the life cycle is the same as the original recorded video, and further video processing such as transcoding cannot be performed.
 * @method Models\ManageTaskResponse ManageTask(Models\ManageTaskRequest $req) This API is used to manage initiated tasks.
 * @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) This API is used to modify a custom video content analysis template.

Note: templates with an ID below 10000 are preset and cannot be modified.
 * @method Models\ModifyAIRecognitionTemplateResponse ModifyAIRecognitionTemplate(Models\ModifyAIRecognitionTemplateRequest $req) This API is used to modify a custom video content recognition template.
 * @method Models\ModifyAdaptiveDynamicStreamingTemplateResponse ModifyAdaptiveDynamicStreamingTemplate(Models\ModifyAdaptiveDynamicStreamingTemplateRequest $req) This API is used to modify an adaptive bitrate streaming template.
 * @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) This API is used to modify a custom animated image generating template.
 * @method Models\ModifyCDNDomainConfigResponse ModifyCDNDomainConfig(Models\ModifyCDNDomainConfigRequest $req) Modify CDN Domain Config.
 * @method Models\ModifyClassResponse ModifyClass(Models\ModifyClassRequest $req) This API is used to modify the category of a media file.
 * @method Models\ModifyContentReviewTemplateResponse ModifyContentReviewTemplate(Models\ModifyContentReviewTemplateRequest $req) We have <font color=red>stopped updating</font> this API. Our new moderation templates can moderate audio/video as well as images. For details, see [ModifyReviewTemplate](https://intl.cloud.tencent.com/document/api/266/84388?from_cn_redirect=1).
This API is used to modify a custom audio/video moderation template.
 * @method Models\ModifyDefaultStorageRegionResponse ModifyDefaultStorageRegion(Models\ModifyDefaultStorageRegionRequest $req) This API is used to set the default storage region. A file will be stored in the default region if no region is specified for file upload.
 * @method Models\ModifyEnhanceMediaTemplateResponse ModifyEnhanceMediaTemplate(Models\ModifyEnhanceMediaTemplateRequest $req) Modify enhance media template.
 * @method Models\ModifyEventConfigResponse ModifyEventConfig(Models\ModifyEventConfigRequest $req) Tencent Cloud VOD provides customers with media upload, media management, media processing and other services. During or at the end of the execution of these services, Tencent Cloud On-Demand also provides various corresponding event notifications to facilitate developers to perceive the service processing status and Do the next business operation. 

Developers can achieve this by calling this interface:
- Set the type of callback notification received. Currently, there is [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948) and [reliable notification based on message queue](https://www.tencentcloud.com/document/product/266/33948) two types. 
- For [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33948), you can set the address of the 3.0 format callback. For the description of 3.0 format callback, see [Historical Format Callback](https://intl.cloud.tencent.com/document/product/266/33796?from_cn_redirect=1). 
- Select settings to receive or ignore notification events for specific event services.
 * @method Models\ModifyHeadTailTemplateResponse ModifyHeadTailTemplate(Models\ModifyHeadTailTemplateRequest $req) Modify HeadTail Template.
 * @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) This API is used to modify a custom image sprite generating template.
 * @method Models\ModifyJustInTimeTranscodeTemplateResponse ModifyJustInTimeTranscodeTemplate(Models\ModifyJustInTimeTranscodeTemplateRequest $req) Modify Just In Time Transcode Template.
 * @method Models\ModifyMediaInfoResponse ModifyMediaInfo(Models\ModifyMediaInfoRequest $req) This API is used to modify the attributes of a media file, including category, name, description, tag, expiration time, timestamp information, video thumbnail, and subtitle information.
 * @method Models\ModifyMediaStorageClassResponse ModifyMediaStorageClass(Models\ModifyMediaStorageClassRequest $req) This API is used to modify the storage class of media files.
If the current storage class is STANDARD, it can be changed to one of the following classes:
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP ARCHIVE</li>
If the current storage class is STANDARD_IA, it can be changed to one of the following classes:
<li>STANDARD</li>
<li>ARCHIVE</li>
<li>DEEP ARCHIVE</li>
If the current storage class is ARCHIVE, it can be changed to the following class:
<li>STANDARD</li>
If the current storage class is DEEP ARCHIVE, it can be changed to the following class:
<li>STANDARD</li>
 * @method Models\ModifyPersonSampleResponse ModifyPersonSample(Models\ModifyPersonSampleRequest $req) This API is used to modify sample information according to the sample ID. You can modify the name and description, add, delete, and reset facial features or tags. Leave at least one image after deleting facial features. To leave no image, please use the reset operation.
 * @method Models\ModifyQualityInspectTemplateResponse ModifyQualityInspectTemplate(Models\ModifyQualityInspectTemplateRequest $req) Modifies media quality inspection template.
 * @method Models\ModifyRebuildMediaTemplateResponse ModifyRebuildMediaTemplate(Models\ModifyRebuildMediaTemplateRequest $req) Modify Rebuild Media Template.
 * @method Models\ModifyReviewTemplateResponse ModifyReviewTemplate(Models\ModifyReviewTemplateRequest $req) This API is used to modify a custom moderation template.
> The templates can only be used by the APIs [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) and [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1).
 * @method Models\ModifyRoundPlayResponse ModifyRoundPlay(Models\ModifyRoundPlayRequest $req) This API is used to modify a playlist.
The modification will only take effect for new playback requests. For ongoing playback, the old playlist will be playable for seven days after the modification.
 * @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) This API is used to modify a custom sampled screencapturing template.
 * @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) This API is used to modify a custom time point screencapturing template.
 * @method Models\ModifySubAppIdInfoResponse ModifySubAppIdInfo(Models\ModifySubAppIdInfoRequest $req) This API is used to modify subapplication information, but it is not allowed to modify primary application information.
 * @method Models\ModifySubAppIdStatusResponse ModifySubAppIdStatus(Models\ModifySubAppIdStatusRequest $req) This API is used to enable/disable a subapplication. After a subapplication is disabled, its corresponding domain name will be blocked and its access to the console will be restricted.
 * @method Models\ModifySuperPlayerConfigResponse ModifySuperPlayerConfig(Models\ModifySuperPlayerConfigRequest $req) We have <font color='red'>stopped updating</font> this API. Currently, you no longer need a player configuration to use player signatures. For details, see [Player Signature](https://intl.cloud.tencent.com/document/product/266/45554?from_cn_redirect=1).
This API is used to modify a player configuration.
 * @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) This API is used to modify a custom transcoding template.
 * @method Models\ModifyVodDomainAccelerateConfigResponse ModifyVodDomainAccelerateConfig(Models\ModifyVodDomainAccelerateConfigRequest $req) This API is used to modify the acceleration region of a domain name on VOD.
1. You can modify acceleration regions of only domain names whose status is `Online`.
 * @method Models\ModifyVodDomainConfigResponse ModifyVodDomainConfig(Models\ModifyVodDomainConfigRequest $req) This API is used to modify domain name settings, such as the hotlink protection configuration.
1. You can modify settings of only domain names whose status is `Online`.
 * @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) This API is used to modify a custom watermarking template. The watermark type cannot be modified.
 * @method Models\ModifyWordSampleResponse ModifyWordSample(Models\ModifyWordSampleRequest $req) This API is used to modify the use case and tag of a keyword. The keyword itself cannot be modified, but you can delete it and create another one if needed.
 * @method Models\ParseStreamingManifestResponse ParseStreamingManifest(Models\ParseStreamingManifestRequest $req) This API is used to parse the index file content and return the list of segment files to be uploaded when an HLS video is uploaded. A segment file path must be a relative path of the current directory or subdirectory instead of a URL or absolute path.
 * @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) Initiate processing tasks for media file in VOD, including: 
1. Video transcoding (with Watermark); 
2. Video to animated image; 
3. Screencapturing the video at specified Time point;
4. Sampled screenshot of the video;
5. Generated Image sprite template from the video;
6. Generated a cover image from the video;
7. Adaptive Bitrate Streaming for the video (with encryption); 
8. Content Moderation (offensive Information, unsafe Information, inappropriate Information), it is <font color=red>not recommended</font> to use this API, recommend using [Video moderation(ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/50634) or [Image moderation(ReviewImage)](https://www.tencentcloud.com/document/api/266/47138);
9. Content analysis (tag, category, cover, frame-by-frame tag);
10. Content recognition (video intro and outro, face, Text, keyword, voice, Key object).

If using event notification, the event notification type is [task flow status change](https://www.tencentcloud.com/document/product/266/33953).
 * @method Models\ProcessMediaByProcedureResponse ProcessMediaByProcedure(Models\ProcessMediaByProcedureRequest $req) This API is used to start a task flow on a video.
There are two ways to create a task flow template:
1. Create and modify a task flow template in the console;
2. Create a task flow template using the `CreateProcedureTemplate` API.

If event notifications are used, the event type for moderation tasks is [ReviewAudioVideoComplete](https://intl.cloud.tencent.com/document/product/266/81258?from_cn_redirect=1), and that for other tasks is [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1).
 * @method Models\ProcessMediaByUrlResponse ProcessMediaByUrl(Models\ProcessMediaByUrlRequest $req) This API is <font color='red'>disused</font>, please use [ProcessMedia](https://intl.cloud.tencent.com/document/product/862/37578?from_cn_redirect=1) API of MPS, with the input parameter `InputInfo.UrlInputInfo.Url` set to a video URL.
 * @method Models\PullEventsResponse PullEvents(Models\PullEventsRequest $req) * This API is used to get event notifications from the business server through [reliable callback](https://intl.cloud.tencent.com/document/product/266/33948).
* The API gets event data through long polling. That is, if there is any unconsumed event on the server, the event notification will be returned to the requester immediately. If there is no unconsumed event on the server, the request will be suspended in the backend until a new event is generated.
* The request can be suspended for up to 5 seconds. It's recommended to set the request timeout period to 10 seconds.
* Event notifications not pulled will be retained for up to 4 days and may be cleared after this period.
* After the API returns an event, the caller must call the [ConfirmEvents](https://intl.cloud.tencent.com/document/product/266/34184) API within <font color="red">30 seconds</font> to confirm that the event notification has been processed. Otherwise, the event notification will be pulled again after <font color="red">30 seconds</font>.
* This API can get up to 16 event notifications at a time.
 * @method Models\PullUploadResponse PullUpload(Models\PullUploadRequest $req) This API is used to pull a video on the internet to the VOD platform.
 * @method Models\PushUrlCacheResponse PushUrlCache(Models\PushUrlCacheRequest $req) 1. This API is used to prefetch a list of specified URLs.
2. The URL domain names must have already been registered with VOD.
3. Up to 20 URLs can be specified in one request.
4. By default, the maximum number of URLs that can be refreshed per day is 10,000.
 * @method Models\RebuildMediaResponse RebuildMedia(Models\RebuildMediaRequest $req) Initiate rebuild media
 * @method Models\RebuildMediaByTemplateResponse RebuildMediaByTemplate(Models\RebuildMediaByTemplateRequest $req) Rebuild media by template.
 * @method Models\RefreshUrlCacheResponse RefreshUrlCache(Models\RefreshUrlCacheRequest $req) 1. This API is used to purge URLs.
2. The URL domain names must have already been registered with VOD.
3. Up to 20 URLs can be specified in one request.
4. By default, the maximum number of URLs allowed for purge per day is 100,000.
 * @method Models\RemoveWatermarkResponse RemoveWatermark(Models\RemoveWatermarkRequest $req) This API is used to remove watermarks from a video.
 * @method Models\ResetProcedureTemplateResponse ResetProcedureTemplate(Models\ResetProcedureTemplateRequest $req) This API is used to modify a custom task flow template.
 * @method Models\RestoreMediaResponse RestoreMedia(Models\RestoreMediaRequest $req) This API is used to restore files from ARCHIVE or DEEP ARCHIVE. Files stored in ARCHIVE or DEEP ARCHIVE must be restored before they can be accessed. Restored files are available for a limited period of time.
 * @method Models\ReviewAudioVideoResponse ReviewAudioVideo(Models\ReviewAudioVideoRequest $req) This API is used to start a moderation task on a file stored in VOD to detect non-compliant content in images, text, speech, and voice.

If event notifications are used, the event type is [ReviewAudioVideoComplete](https://intl.cloud.tencent.com/document/product/266/81258?from_cn_redirect=1).
 * @method Models\ReviewImageResponse ReviewImage(Models\ReviewImageRequest $req) This API is used to moderate an image stored in VOD (detect pornographic and terrorist content).><li>The image file must be smaller than 5 MB.</li> ><li>To ensure the accuracy of moderation results, the image resolution must be higher than 256 x 256 px.</li> ><li>The format must be PNG, JPG, JPEG, BMP, GIF, or WEBP.</li>
 * @method Models\SearchMediaResponse SearchMedia(Models\SearchMediaRequest $req) Search for media information, supporting multiple condition filtering, as well as sorting and filtering of returned results. This includes:
- Specify a collection of file IDs (FileIds) to return media with any ID in the collection.
- Fuzzy search based on multiple media file names (Names) or description information (Descriptions).
- Search based on multiple file name prefixes (NamePrefixes).
- Specify a collection of categories (ClassIds, see input parameters) to return media that meets any category in the collection. For example, media categories include movies, TV shows, variety shows, etc., and there are subcategories such as historical films, action films, and romance films under the movie category. If ClassIds specifies movies and TV shows, all subcategories under movies and TV shows will be returned; if ClassIds specifies historical films and action films, only media under these two subcategories will be returned.
- Specify a collection of tags (Tags, see input parameters) to return media that meets any tag in the collection. For example, media tags include ACG, palace fighting, and ghost animal. If Tags specifies ACG and ghost animal, media that meets any of these two tags will be retrieved.
- Specify a collection of file types (Categories, see input parameters) to return media that meets any type in the collection. For example, file types include Video (video), Audio (audio), and Image (image). If Categories specifies Video and Audio, media that meets these types will be retrieved.
- Specify a collection of sources (SourceTypes, see input parameters) to return media that meets any source in the collection. For example, media sources include Record (live recording) and Upload (upload). If SourceTypes specifies Record and Upload, media that meets these sources will be retrieved.
- Specify a collection of file container formats (MediaTypes, see input parameters) to return media that meets any container format in the collection. For example, container formats include MP4, AVI, MP3, etc. If MediaTypes specifies MP4 and MP3, media that meets these container formats will be retrieved.
- Specify a collection of file statuses (Status, see input parameters) to return media that meets any status in the collection. For example, file statuses include Normal (normal), SystemForbidden (platform ban), and Forbidden (active ban). If Status specifies Normal and Forbidden, media that meets these statuses will be retrieved.
- Specify a collection of file moderation results (ReviewResults, see input parameters) to return media that meets any status in the collection. For example, file moderation results include pass (passed) and block (not compliant). If ReviewResults specifies pass and block, media that meets these moderation results will be retrieved.
- Filter live recorded media by specifying a collection of live streaming codes (StreamIds, see input parameters).
- Filter media by specifying the creation time range of the media.
- Filter media by specifying a collection of TRTC application IDs.
- Filter media by specifying a collection of TRTC room IDs.

- The above parameters can be combined in any way to search. For example, filter media created between 12:00:00 on December 1, 2018, and 12:00:00 on December 8, 2018, categorized as movies or TV shows, and tagged with palace fighting and suspense. Note that the search logic for elements of any parameter that supports array input is 'or'. The logical relationship between all parameters is 'and'

- Allow to control the type of media information returned through Filters (default to return all information). Optional inputs include:
    1. Basic information (basicInfo): including media name, category, playback URL, cover image, etc.
    2. Metadata (metaData): including size, duration, video stream information, audio stream information, etc.
    3. Transcoding result information (transcodeInfo): including the media addresses, video stream parameters, audio stream parameters, etc., generated by transcoding the media into various specifications.
    4.  Animated image result information (animatedGraphicsInfo): information on the animated image (such as gif) generated after converting the video.
    Sampled screenshot information (sampleSnapshotInfo): screenshot information after sampling the video.
    6. Image sprite information (imageSpriteInfo): image sprite information after generating the sprite from the video.
    7. Specified time point screenshot information (snapshotByTimeOffsetInfo): screenshot information after capturing the video at specified time points.
    8. Video timestamp info (keyFrameDescInfo): timestamp information set for the video.
    9. Adaptive Bitrate Streaming information (adaptiveDynamicStreamingInfo): including specifications, encryption types, muxing formats, and other relevant information.

- Allow sorting the results by creation time and returning them in pages. Pagination is controlled by Offset and Limit (see input parameters).

<div id="maxResultsDesc">API result count limitation:</div>
- <b><a href="#p_offset">Offset</a> and <a href="#p_limit">Limit</a> both affect the number of results returned in a single page query. Please pay special attention: when both of these values are missing, this API will return a maximum of 10 query results.</b>
- <b>Supports up to 5,000 search results, and queries beyond this limit are not supported. If the search result volume is too large, it is recommended to use more refined filtering conditions to reduce search results.</b>

<br>Not recommended for conditional filtering:
- (Not recommended: use Names, NamePrefixes, or Descriptions instead) Fuzzy search for media file names or description information with a single text (Text).
- (Not recommended: use SourceTypes instead) Search for media files with a single source (SourceType).
- (Not recommended: use StreamIds instead) Search for media files with a single live streaming code (StreamId).
- (Not recommended: use CreateTime instead) Search for media files with a single start creation time (StartTime).
- (Not recommended: use CreateTime instead) Search for media files with a single end creation time (EndTime).
 * @method Models\SetDrmKeyProviderInfoResponse SetDrmKeyProviderInfo(Models\SetDrmKeyProviderInfoRequest $req) This API is used to configure DRM key information.
 * @method Models\SetVodDomainCertificateResponse SetVodDomainCertificate(Models\SetVodDomainCertificateRequest $req) Set Vod Domain Certificate.
 * @method Models\SimpleHlsClipResponse SimpleHlsClip(Models\SimpleHlsClipRequest $req) This API is used to cut a clip from an HLS video to generate a new video (in HLS format). You can either share the new video or save it.

VOD supports two types of clipping:
- Clipping for persistent storage: The video clip is saved as an independent video file with its own `FileId`.
- Clipping for temporary sharing: The video clip shares `FileId` with the input file.

Notes:
- Clipping is based on the M3U8 file that contains a list of TS segments, so the smallest clipping unit is one TS segment instead of a second or less.


### Clipping for persistent storage
In this mode, a video clip is saved as an independent video file with a `FileId`, and its lifecycle is not subject to the input video. Even if the source video is deleted, the video clip still exists. Moreover, the video clip can be transcoded, published on WeChat, and processed in other ways.

Suppose you recorded a two-hour football match. You want to save the full video for only two months to save costs, but want to save the highlights for a longer time and perhaps transcode and publish the highlight clip to WeChat. In this case, you can choose clipping for persistent storage.

The advantage of clipping for persistent storage is that the video clip has a lifecycle independent of the input video and can be managed independently and stored persistently.

<font color='red'>Notice:</font> If solidification is specified during clipping, enable the reception of persistence completed event notifications through the ModifyEventConfig interface. After successful solidification, an event notification of type PersistenceComplete will be received. Before receiving this event notification, operations such as deletion or cooling down of live recording videos should not be performed, otherwise, abnormal playback may occur in the video generated by the clipping.

### Clipping for temporary sharing
The video clip (an M3U8 file) shares the same TS segments with the input video instead of being an independent video. It only has a playback URL but has no `FileId`, and its validity period is the same as that of the input video. Once the input video is deleted, the video clip cannot be played back.

Because the video clip is not an independent video, it's not displayed as a media asset in the VOD console, and cannot be transcoded or published to WeChat.

Clipping for temporary sharing is lightweight and incurs no additional storage fees. However, the video clip has the same lifecycle as the source recording video and cannot be transcoded or processed in other ways.
 * @method Models\SplitMediaResponse SplitMedia(Models\SplitMediaRequest $req) Split the video into strips to generate multiple new videos.
 * @method Models\StartCDNDomainResponse StartCDNDomain(Models\StartCDNDomainRequest $req) This API is used for enabling/disabling the CDN acceleration domain.
 * @method Models\VerifyDomainRecordResponse VerifyDomainRecord(Models\VerifyDomainRecordRequest $req) This API is used to verify the domain name resolution value.
 */

class VodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vod.intl.tencentcloudapi.com";

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
