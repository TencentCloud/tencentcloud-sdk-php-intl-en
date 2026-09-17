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
 * @method Models\ApplyUploadResponse ApplyUpload(Models\ApplyUploadRequest $req) We strongly recommend that you use the [server-side upload SDK](https://www.tencentcloud.comhttps://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1?from_cn_redirect=1#1.-.E5.8F.91.E8.B5.B7.E4.B8.8A.E4.BC.A0) provided by VOD to upload files. Directly invoking the API for upload is significantly more difficult and requires a larger workload than using the SDK.
* This API is used to apply for upload of media files (and cover files), obtain meta information for file upload to VOD (including upload path, upload signature), for subsequent upload API.
For the upload process, see [Server-Side Upload Overview](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1).
 * @method Models\AttachMediaSubtitlesResponse AttachMediaSubtitles(Models\AttachMediaSubtitlesRequest $req) Associate media asset subtitles with the media output file corresponding to the adaptive bitrate streaming template ID (or disassociate them).
 * @method Models\CloneCDNDomainResponse CloneCDNDomain(Models\CloneCDNDomainRequest $req) Clone CDN Domain.
 * @method Models\CloneVoiceAsyncResponse CloneVoiceAsync(Models\CloneVoiceAsyncRequest $req) This API is used to initiate a voice cloning task. It generates an exclusive voice based on reference audio. The generated voice can be used for subsequent text to speech. Voice cloning is an asynchronous task. The voice ID and audio audition are generated after task completion.
 * @method Models\CloneVoiceSyncResponse CloneVoiceSync(Models\CloneVoiceSyncRequest $req) This API is used to initiate a voice cloning task to clone an exclusive voice based on reference audio. The generated voice can be used for subsequent text to speech.
 * @method Models\CommitUploadResponse CommitUpload(Models\CommitUploadRequest $req) This API is used to confirm the result of uploading media files and cover files to Tencent Cloud VOD, store media information, and return the playback addresses and file IDs.
 * @method Models\ComposeMediaResponse ComposeMedia(Models\ComposeMediaRequest $req) This API is used to compose media files to achieve the following effects:

1. **Image rotation**: Rotate the image of a video or picture by a certain degree, or flip it in a certain direction.
2. **Audio control**: Increase or reduce the volume of video and audio, or mute the video.
3. **Screen overlay**: Overlay frames from videos and images in sequence, for example, to achieve a Picture-in-Picture effect.
4. **Audio mixing**: Mix the sound in video and audio together.
5. **Audio extraction**: Extract the audio from the video (the visual is not retained).
6. **Crop**: Crop a specified time period from a video or audio.
7. **Splicing**: Splice videos, audio, and images in chronological order.
8. **Transitions**: When stitching multiple videos or images, you can add transition effects between paragraphs.

The muxing format of the synthesized media can be MP4 (video) or MP3 (audio). If event notification is used, its type is [Video synthesis completed](https://www.tencentcloud.com/document/product/266/43000?from_cn_redirect=1).
 * @method Models\ConfirmEventsResponse ConfirmEvents(Models\ConfirmEventsRequest $req) * Developers call the event notification pull API. After obtaining an event, they must call this API to acknowledge that the message has been received.
* After the developer obtains the event handler, the validity time for pending confirmation is 30 seconds. If it exceeds 30 seconds, a parameter error (4000) is reported.
* For more references on reliable callback for event notification, see [Reliable Callback](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83).
 * @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) This API is used to create a user-defined audio and video content analysis template. Maximum quantity: 50. HLS format is not supported currently.
 * @method Models\CreateAIRecognitionTemplateResponse CreateAIRecognitionTemplate(Models\CreateAIRecognitionTemplateRequest $req) This API is used to create a user-defined audio and video content recognition template. Maximum quantity: 50.
 * @method Models\CreateAdaptiveDynamicStreamingTemplateResponse CreateAdaptiveDynamicStreamingTemplate(Models\CreateAdaptiveDynamicStreamingTemplateRequest $req) Create adaptive bitrate streaming templates. Maximum quantity: 100.
 * @method Models\CreateAigcAdvancedCustomElementResponse CreateAigcAdvancedCustomElement(Models\CreateAigcAdvancedCustomElementRequest $req) This API is used to create advanced custom AIGC subjects.
 * @method Models\CreateAigcApiTokenResponse CreateAigcApiToken(Models\CreateAigcApiTokenRequest $req) This API is used to create a Token for AIGC API calls. Data sync may delay after creation. It can be queried or deleted after about 30 seconds.
 * @method Models\CreateAigcAudioCloneResponse CreateAigcAudioClone(Models\CreateAigcAudioCloneRequest $req) This API is used to create AIGC voice replication. Note that calling this API incurs fees. Refer to the billing documentation (https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#96b3b59a-f9e1-49e9-966a-bedb70a4bf12).
 * @method Models\CreateAigcAudioTaskResponse CreateAigcAudioTask(Models\CreateAigcAudioTaskRequest $req) This API is used to create AI audio generation tasks.
 * @method Models\CreateAigcCustomElementResponse CreateAigcCustomElement(Models\CreateAigcCustomElementRequest $req) Call this API to create a subject for a specified model.
 * @method Models\CreateAigcCustomVoiceResponse CreateAigcCustomVoice(Models\CreateAigcCustomVoiceRequest $req) This API is used to create AIGC custom voice types. Note that calling this API incurs custom voice type creation fees. Refer to the billing documentation (https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#5e5217e8-29fc-467e-ac2d-853648f988b7).
 * @method Models\CreateAigcHunyuan3DTaskResponse CreateAigcHunyuan3DTask(Models\CreateAigcHunyuan3DTaskRequest $req) This API is used to generate AIGC Hunyuan 3D Files.
 * @method Models\CreateAigcImageTaskResponse CreateAigcImageTask(Models\CreateAigcImageTaskRequest $req) This API is used to generate AIGC images. The default limit is 1 concurrent processing. API calls incur actual fees. Refer to the VOD AIGC image generation billing documentation. The settlement mode for this feature is pay-as-you-go. For daily billing customers, usage on the day is billed on the second day. For monthly billing customers, the previous month's usage fees are billed on the 1st of the next month.
 * @method Models\CreateAigcQuotaResponse CreateAigcQuota(Models\CreateAigcQuotaRequest $req) This API is used to create and enable AIGC quota configuration. Quota usage starts accumulating when the quota feature is enabled. Once the quota is reached, AIGC features will no longer be usable.

If the quota is deleted and re-enabled, the amount will be cleared and recalculated.

Since AGC content generation is an async task, real-time usage data cannot be obtained. Therefore, quota limits result in some errors, and full precise control over the set limit cannot be achieved.
 * @method Models\CreateAigcSubjectResponse CreateAigcSubject(Models\CreateAigcSubjectRequest $req) This API is used to create AIGC custom subjects (Vidu). Note that calling this API incurs fees. Refer to the billing documentation (https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#96b3b59a-f9e1-49e9-966a-bedb70a4bf12).
 * @method Models\CreateAigcVideoRedrawTaskResponse CreateAigcVideoRedrawTask(Models\CreateAigcVideoRedrawTaskRequest $req) This API is used to generate AIGC videos. API calls incur actual fees. Refer to the VOD AIGC video generation billing documentation. The settlement mode for this feature is pay-as-you-go. For daily billing customers, usage on the day is billed on the second day. For monthly billing customers, usage fees for the previous month are billed on the 1st of the next month.
 * @method Models\CreateAigcVideoTaskResponse CreateAigcVideoTask(Models\CreateAigcVideoTaskRequest $req) This API is used to generate AIGC videos. The default limit is 1 concurrent processing. API calls incur actual fees. Refer to the VOD AIGC video generation billing documentation. The feature uses postpaid settlement mode. Daily billing customers are billed on the second day after usage. Monthly settlement customers are billed on the 1st of the next month for the previous month's usage fees.
 * @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) This API is used to create custom animated image generating templates. Maximum quantity: 16.
 * @method Models\CreateBlindWatermarkTemplateResponse CreateBlindWatermarkTemplate(Models\CreateBlindWatermarkTemplateRequest $req) This API is used to create a user-defined digital watermark template.
 * @method Models\CreateCDNDomainResponse CreateCDNDomain(Models\CreateCDNDomainRequest $req) This API is used for adding domain names to VOD. A user can add up to 20 domain names. 1. After the domain name is added successfully, VOD will carry out the deployment of the domain name. It takes approximately 2 minutes for the domain name to change from the deployment status to the online status.
 * @method Models\CreateCLSLogsetResponse CreateCLSLogset(Models\CreateCLSLogsetRequest $req) Create a logset via VOD.
 * @method Models\CreateCLSTopicResponse CreateCLSTopic(Models\CreateCLSTopicRequest $req) This API is used to create a CLS log topic for VOD.
 * @method Models\CreateClassResponse CreateClass(Models\CreateClassRequest $req) * Used to categorize and manage media;
* This API does not affect the existing media categories. To modify media categories, call the [ModifyMediaInfo](https://www.tencentcloud.com/document/product/266/31762?from_cn_redirect=1) API.
* The classification hierarchy cannot exceed 4 levels.
The number of subcategories in each category cannot exceed 500.
 * @method Models\CreateComplexAdaptiveDynamicStreamingTaskResponse CreateComplexAdaptiveDynamicStreamingTask(Models\CreateComplexAdaptiveDynamicStreamingTaskRequest $req) Initiates a complex adaptive bitstream processing task. Features include:
1. Output HLS and DASH adaptive bitrate streams based on the designated adaptive bitrate template;
2. Content protection solutions for adaptive bitrate streams can be unencrypted, Widevine, or FairPlay.
3. Support adding opening and ending segments;
4. The output adaptive bitrate stream can contain multilingual audio streams, each language comes from a different media file;
5. The output adaptive bitrate stream can include multilingual subtitle streams.

Notes:
1. When using an opening scene, the video stream in the opening scene media needs to align with the audio stream; otherwise, the output content will have audio and video synchronization issues.
2. If the output adaptive bitrate stream needs to include the audio of the main media, the FileId of the main media needs to be specified in the AudioSet parameter.
3. To use subtitles, add them to the main media first via the ModifyMediaInfo API or the audio and video details page in the console;
4. Top speed Codec and watermark are not currently supported.
 * @method Models\CreateContentReviewTemplateResponse CreateContentReviewTemplate(Models\CreateContentReviewTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the moderation template supports video moderation and image moderation. For details, please see [Create Moderation Template](https://www.tencentcloud.com/document/api/266/84391?from_cn_redirect=1).
This API is used to create a user-customized audio/video moderation template. Up to 50 templates can be created.
 * @method Models\CreateDomainVerifyRecordResponse CreateDomainVerifyRecord(Models\CreateDomainVerifyRecordRequest $req) This API is used to generate a subdomain name resolution and prompt customers to add it to the domain name resolution for wildcard domain name and domain name retrieval ownership verification.
 * @method Models\CreateEnhanceMediaTemplateResponse CreateEnhanceMediaTemplate(Models\CreateEnhanceMediaTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
This API is used to create an audio and video quality rebirth template.
 * @method Models\CreateHeadTailTemplateResponse CreateHeadTailTemplate(Models\CreateHeadTailTemplateRequest $req) This API is used to create a title and trailer template.
-Maximum supported template quantity: 100.
 * @method Models\CreateImageProcessingTemplateResponse CreateImageProcessingTemplate(Models\CreateImageProcessingTemplateRequest $req) Create a custom image processing template. Maximum quantity: 16. Supports up to ten operations, for example: crop-thumbnail-crop-blur-thumbnail-crop-thumbnail-crop-blur-thumbnail.
 * @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) This API is used to create a user-customized image sprite template. Maximum number: 16.
 * @method Models\CreateJustInTimeTranscodeTemplateResponse CreateJustInTimeTranscodeTemplate(Models\CreateJustInTimeTranscodeTemplateRequest $req) This API is used to create a just in time transcoding template.
 * @method Models\CreateKnowledgeBaseResponse CreateKnowledgeBase(Models\CreateKnowledgeBaseRequest $req) Create a knowledge base. This API is used to create a new knowledge base for Intelligent Media Assets. Each user can create up to 20 knowledge bases.
 * @method Models\CreateLLMComprehendTemplateResponse CreateLLMComprehendTemplate(Models\CreateLLMComprehendTemplateRequest $req) This API is used to create a large model parsing template.
 * @method Models\CreateMPSTemplateResponse CreateMPSTemplate(Models\CreateMPSTemplateRequest $req) This API is used to create a custom template for partial features of the ProcessMediaByMPS API.
When creating a template, fill in the MPS related parameters in JSON format in the MPSCreateTemplateParams parameter. For specific task parameter configuration methods, refer to the MPS task template documentation.
Currently supported MPS features for creating custom templates:
1. [Audio and video enhancement](https://www.tencentcloud.com/document/product/862/118703?from_cn_redirect=1).
2. [Media AI](https://www.tencentcloud.com/document/product/862/113756?from_cn_redirect=1)

> Template for tasks created this way:
> 1. Template management is still done in the VOD platform.
> 2. The feature is currently in beta test. If needed, you can contact us for support to get testing experience.
 * @method Models\CreatePersonSampleResponse CreatePersonSample(Models\CreatePersonSampleRequest $req) This API is used to create material samples for video processing such as content recognition and inappropriate video recognition through technologies like facial feature positioning.
 * @method Models\CreateProcedureTemplateResponse CreateProcedureTemplate(Models\CreateProcedureTemplateRequest $req) This API is used to create user-defined task flow templates. Template capacity limit: 50.
 * @method Models\CreateProcessImageAsyncTemplateResponse CreateProcessImageAsyncTemplate(Models\CreateProcessImageAsyncTemplateRequest $req) Create a user-customized async image processing template. Maximum number: 50. HLS format is not supported currently.
 * @method Models\CreateQualityInspectTemplateResponse CreateQualityInspectTemplate(Models\CreateQualityInspectTemplateRequest $req) Creates an audio-visual quality inspection template.
 * @method Models\CreateRebuildMediaTemplateResponse CreateRebuildMediaTemplate(Models\CreateRebuildMediaTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
This API is used to create a video rebirth template.
 * @method Models\CreateReviewTemplateResponse CreateReviewTemplate(Models\CreateReviewTemplateRequest $req) This API is used to create a user-customized moderation template. Up to 50 templates can be created.
>Template is applicable only to the ReviewAudioVideo (https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) and ReviewImage (https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1) APIs.
 * @method Models\CreateRoundPlayResponse CreateRoundPlay(Models\CreateRoundPlayRequest $req) This API is used to create a carousel playlist. Maximum quantity: 100.
Each file in a carousel playlist can specify a source file or a transcoded file.
The specified file must be in hls format. All playlist files should have the same bitrate and resolution.
 * @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) This API is used to create custom sampled screenshot templates. Maximum quantity: 16.
 * @method Models\CreateSceneAigcImageTaskResponse CreateSceneAigcImageTask(Models\CreateSceneAigcImageTaskRequest $req) This API is used to generate scenario-based AIGC images. API calls incur actual fees. Refer to the VOD AIGC image generation billing documentation (https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#9c4dc6ff-4b3f-4b25-bf2d-393889dfb9ac). The feature uses pay-as-you-go settlement mode (https://www.tencentcloud.com/document/product/266/2838?from_cn_redirect=1). For daily billing customers, usage on the day is billed on the second day. For monthly settlement customers, the previous month's usage fees are billed on the 1st of the next month.
 * @method Models\CreateSceneAigcVideoTaskResponse CreateSceneAigcVideoTask(Models\CreateSceneAigcVideoTaskRequest $req) This API is used to generate scenario-based AIGC images. <b>The API is in beta. To use it, please [contact us](https://www.tencentcloud.com/online?from_cn_redirect=1-service?from=sales_sales&source=PRESALE). API calls will incur actual fees.</b>
 * @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) This API is used to create a user-customized specified time point screenshot template. Maximum quantity: 16.
 * @method Models\CreateStorageRegionResponse CreateStorageRegion(Models\CreateStorageRegionRequest $req) This API is used to enable storage in a region.
1. When a user enables the VOD service, storage in partial regions is enabled by default. If the user needs storage in other regions, they can use this API to enable it.
2. The DescribeStorageRegions API can be used to query all storage regions and regions that are already opened.
 * @method Models\CreateSubAppIdResponse CreateSubAppId(Models\CreateSubAppIdRequest $req) This API is used to create a VOD application.
 * @method Models\CreateSuperPlayerConfigResponse CreateSuperPlayerConfig(Models\CreateSuperPlayerConfigRequest $req) This API is <font color='red'>no longer maintained</font>. The new version of player signature no longer uses player configuration templates. For details, please see [Player Signature](https://www.tencentcloud.com/document/product/266/45554?from_cn_redirect=1).
This API is used to create player configurations. Maximum quantity: 100.
 * @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) Create custom transcoding templates. Maximum quantity: 100.
 * @method Models\CreateVodDomainResponse CreateVodDomain(Models\CreateVodDomainRequest $req) This API is used to add acceleration domain names to VOD. A user can add up to 20 acceleration domain names.
1. After the domain name is successfully added, VOD will deploy the domain name. It takes about 2 minutes for the domain name to change from deployment status to online status.
 * @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) This API is used to create a user-defined watermark template with an upper limit of 1000.
 * @method Models\CreateWordSamplesResponse CreateWordSamples(Models\CreateWordSamplesRequest $req) This API is used to create keyword samples in batches. Samples are used for video processing such as inappropriate content recognition and content recognition through OCR and ASR technologies.
 * @method Models\DeleteAIAnalysisTemplateResponse DeleteAIAnalysisTemplate(Models\DeleteAIAnalysisTemplateRequest $req) This API is used to delete a user-defined audio and video content analysis template.

Note: Templates with IDs below 10000 are system-preset templates and cannot be deleted.
 * @method Models\DeleteAIRecognitionTemplateResponse DeleteAIRecognitionTemplate(Models\DeleteAIRecognitionTemplateRequest $req) This API is used to delete a user-defined audio and video content recognition template.
 * @method Models\DeleteAdaptiveDynamicStreamingTemplateResponse DeleteAdaptiveDynamicStreamingTemplate(Models\DeleteAdaptiveDynamicStreamingTemplateRequest $req) Delete an adaptive bitrate streaming template
 * @method Models\DeleteAigcAdvancedCustomElementResponse DeleteAigcAdvancedCustomElement(Models\DeleteAigcAdvancedCustomElementRequest $req) This API is used to delete AIGC advanced custom subjects.
 * @method Models\DeleteAigcApiTokenResponse DeleteAigcApiToken(Models\DeleteAigcApiTokenRequest $req) Delete an AIGC API Token. The AIGC quota associated with the Token will also be deleted.
 * @method Models\DeleteAigcQuotaResponse DeleteAigcQuota(Models\DeleteAigcQuotaRequest $req) This API is used to delete AIGC quota configurations. Once deleted, AIGC task initiation will no longer be limited.

If the quota is deleted and re-enabled, the amount will be cleared and recalculated.
 * @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) This API is used to delete a custom animated image generating template.
 * @method Models\DeleteBlindWatermarkTemplateResponse DeleteBlindWatermarkTemplate(Models\DeleteBlindWatermarkTemplateRequest $req) This API is used to delete a user-defined digital watermark template.
 * @method Models\DeleteCDNDomainResponse DeleteCDNDomain(Models\DeleteCDNDomainRequest $req) Delete CDN Domain
 * @method Models\DeleteCLSTopicResponse DeleteCLSTopic(Models\DeleteCLSTopicRequest $req) Delete the log topic enabled for VOD.
 * @method Models\DeleteClassResponse DeleteClass(Models\DeleteClassRequest $req) * A category can be deleted only when it has no subcategories and no associated media.
* Otherwise, execute [delete media](https://www.tencentcloud.com/document/product/266/31764?from_cn_redirect=1) and subcategories first, then delete the category;
 * @method Models\DeleteContentReviewTemplateResponse DeleteContentReviewTemplate(Models\DeleteContentReviewTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the moderation template supports video moderation and image moderation. For details, please see [Deleting a Moderation Template](https://www.tencentcloud.com/document/api/266/84390?from_cn_redirect=1).
Delete a user-customized audio/video moderation template.
 * @method Models\DeleteEnhanceMediaTemplateResponse DeleteEnhanceMediaTemplate(Models\DeleteEnhanceMediaTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) interface uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
This API is used to delete an audio and video quality rebirth template.
 * @method Models\DeleteHeadTailTemplateResponse DeleteHeadTailTemplate(Models\DeleteHeadTailTemplateRequest $req) Delete a title and trailer template.
 * @method Models\DeleteImageProcessingTemplateResponse DeleteImageProcessingTemplate(Models\DeleteImageProcessingTemplateRequest $req) This API is used to delete a user-customized image processing template.
 * @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) Delete an image sprite template.
 * @method Models\DeleteJustInTimeTranscodeTemplateResponse DeleteJustInTimeTranscodeTemplate(Models\DeleteJustInTimeTranscodeTemplateRequest $req) Delete a just in time transcoding template.
 * @method Models\DeleteKnowledgeBaseResponse DeleteKnowledgeBase(Models\DeleteKnowledgeBaseRequest $req) Delete a knowledge base.
After the API is called, the knowledge base is in the "Deleting" status, and the deletion operation is performed in the backend.
 * @method Models\DeleteLLMComprehendTemplateResponse DeleteLLMComprehendTemplate(Models\DeleteLLMComprehendTemplateRequest $req) Delete a user-customized large model parsing template.

Note: Templates with IDs below 10000 are system-preset templates and cannot be deleted.
 * @method Models\DeleteMPSTemplateResponse DeleteMPSTemplate(Models\DeleteMPSTemplateRequest $req) This API is used to delete a user-defined MPS task template.
 * @method Models\DeleteMediaResponse DeleteMedia(Models\DeleteMediaRequest $req) * Delete media and its corresponding video processing files (raw files, such as transcoded videos, sprite sheets, screenshots, WeChat video releases, etc.);
* You can separately delete the original file, transcoded video, and WeChat-published video under a specified video file ID.
* Note: After the original file is deleted, you cannot initiate any video processing operations such as transcoding or WeChat publishing.
 * @method Models\DeletePersonSampleResponse DeletePersonSample(Models\DeletePersonSampleRequest $req) This API is used to delete material samples based on person ID.
 * @method Models\DeleteProcedureTemplateResponse DeleteProcedureTemplate(Models\DeleteProcedureTemplateRequest $req) This API is used to delete a user-defined task flow template.
 * @method Models\DeleteProcessImageAsyncTemplateResponse DeleteProcessImageAsyncTemplate(Models\DeleteProcessImageAsyncTemplateRequest $req) This API is used to delete a user-customized image asynchronous processing template.

Note: Templates with IDs below 10000 are system-preset templates and cannot be deleted.
 * @method Models\DeleteQualityInspectTemplateResponse DeleteQualityInspectTemplate(Models\DeleteQualityInspectTemplateRequest $req) This API is used to delete an audio-visual quality inspection template.
 * @method Models\DeleteRebuildMediaTemplateResponse DeleteRebuildMediaTemplate(Models\DeleteRebuildMediaTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
This API is used to delete a video rebirth template.
 * @method Models\DeleteReviewTemplateResponse DeleteReviewTemplate(Models\DeleteReviewTemplateRequest $req) This API is used to delete a user-customized moderation template.
>Template is applicable only to the ReviewAudioVideo (https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) and ReviewImage (https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1) APIs.
 * @method Models\DeleteRoundPlayResponse DeleteRoundPlay(Models\DeleteRoundPlayRequest $req) This API is used to delete a carousel playlist.
 * @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) This API is used to delete a user-customized sampled screenshot template.
 * @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) This API is used to delete a user-defined specified time point screenshot template.
 * @method Models\DeleteSuperPlayerConfigResponse DeleteSuperPlayerConfig(Models\DeleteSuperPlayerConfigRequest $req) This API is <font color='red'>no longer maintained</font>. The new version of player signature no longer uses player configuration templates. For details, please see [Player Signature](https://www.tencentcloud.com/document/product/266/45554?from_cn_redirect=1).
This API is used to delete player configurations.  
*Note: System preset player configurations cannot be deleted.*
 * @method Models\DeleteTranscodeTemplateResponse DeleteTranscodeTemplate(Models\DeleteTranscodeTemplateRequest $req) This API is used to delete a custom transcoding template.
 * @method Models\DeleteVodDomainResponse DeleteVodDomain(Models\DeleteVodDomainRequest $req) This API is used to delete VOD acceleration domains.
1. Before domain deletion, acceleration in all regions needs to be disabled.
 * @method Models\DeleteVoiceResponse DeleteVoice(Models\DeleteVoiceRequest $req) This API is used to delete a specified voice by voice ID. Deletion is irreversible and the voice cannot be used for subsequent APIs. It only supports deletion of voices for this account. System preset voices cannot be deleted.

Note: Newly designed or cloned voice types cannot be deleted before activation (not found means non-operational). They are activated only after the newly created voice type is used for TTS once.
 * @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) This API is used to delete a user-customized watermark template.
 * @method Models\DeleteWordSamplesResponse DeleteWordSamples(Models\DeleteWordSamplesRequest $req) This API is used to delete keyword samples in batches.
 * @method Models\DescribeAIAnalysisTemplatesResponse DescribeAIAnalysisTemplates(Models\DescribeAIAnalysisTemplatesRequest $req) This API is used to retrieve the detail list of audio and video content analysis templates based on the unique identifier of an audio and video content analysis template. The returned results include all eligible user-defined audio and video content analysis templates and [system preset audio/video content analysis templates](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.88.86.E6.9E.90.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeAIRecognitionTemplatesResponse DescribeAIRecognitionTemplates(Models\DescribeAIRecognitionTemplatesRequest $req) This API is used to get the list of details of audio/video content recognition templates by unique identifier. The returned results include all eligible user-defined audio/video content recognition templates and system preset audio/video content recognition templates (https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E8.AF.86.E5.88.AB.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeAdaptiveDynamicStreamingTemplatesResponse DescribeAdaptiveDynamicStreamingTemplates(Models\DescribeAdaptiveDynamicStreamingTemplatesRequest $req) This API is used to query adaptive bitrate streaming templates, and the pagination query is supported based on conditions.
 * @method Models\DescribeAigcAdvancedCustomElementsResponse DescribeAigcAdvancedCustomElements(Models\DescribeAigcAdvancedCustomElementsRequest $req) This API is used to obtain advanced custom AIGC subjects.
 * @method Models\DescribeAigcApiTokensResponse DescribeAigcApiTokens(Models\DescribeAigcApiTokensRequest $req) Query the list of AIGC API tokens. Data sync may delay after creation or deletion. You can query the latest data after about 30 seconds.
 * @method Models\DescribeAigcFaceInfoResponse DescribeAigcFaceInfo(Models\DescribeAigcFaceInfoRequest $req) This API is used to retrieve AIGC face information. Note that calling this API will incur face recognition fees. Refer to the billing documentation (https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#96b3b59a-f9e1-49e9-966a-bedb70a4bf12).
 * @method Models\DescribeAigcFaceInfoAsyncResponse DescribeAigcFaceInfoAsync(Models\DescribeAigcFaceInfoAsyncRequest $req) This API is used to asynchronously fetch AIGC face information. Note that calling this API will incur face recognition fees. Refer to the [billing documentation](https://www.tencentcloud.com/document/product/266/95125?from_cn_redirect=1#96b3b59a-f9e1-49e9-966a-bedb70a4bf12).
 * @method Models\DescribeAigcQuotasResponse DescribeAigcQuotas(Models\DescribeAigcQuotasRequest $req) This API is used to query AIGC quota configurations.
 * @method Models\DescribeAigcUsageDataResponse DescribeAigcUsageData(Models\DescribeAigcUsageDataRequest $req) This API is used to return AIGC statistical information within a specified time range.
1. AIGC statistical data from the last 365 days can be queried.
   2. The query time span should not exceed 90 days.
3. If the query time span exceeds 1 day, the data of day granularity is returned. Otherwise, the data of 5-minute granularity is returned.
 * @method Models\DescribeAllClassResponse DescribeAllClass(Models\DescribeAllClassRequest $req) * Obtain all classification information of the user.
 * @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) Queries the list of rotating image templates based on conditions with paging.
 * @method Models\DescribeBlindWatermarkTemplatesResponse DescribeBlindWatermarkTemplates(Models\DescribeBlindWatermarkTemplatesRequest $req) Queries user-customized digital watermark templates.
 * @method Models\DescribeCDNDomainsResponse DescribeCDNDomains(Models\DescribeCDNDomainsRequest $req) Describe CDN Domains
 * @method Models\DescribeCDNStatDetailsResponse DescribeCDNStatDetails(Models\DescribeCDNStatDetailsRequest $req) This API is used to query CDN bandwidth, traffic, and other stats of an on-demand domain name.
* The time span between the query start time and end time should not exceed 90 days.
* Data in different service regions can be queried.
* Data support within the Chinese mainland for querying stats by specified region and carrier.
Playback statistics only target VOD domains. Distribution through EdgeOne domain names is not included in playback statistics.
 * @method Models\DescribeCDNUsageDataResponse DescribeCDNUsageData(Models\DescribeCDNUsageDataRequest $req) This API is used to query VOD CDN stats such as traffic and bandwidth.
1. CDN usage data is retained on the system side for 13 months. You can only query usage data from the most recent 365 days through the API. If you need to retrieve historical usage data beyond 365 days, contact us.
   2. The query time span should not exceed 90 days.
3. You can specify the time granularity of usage data. Supported granularities: 5 minutes, 1 hour, and 1 day.
4. Traffic is the total traffic within the query time granularity, and bandwidth is the peak bandwidth within the query time granularity.
5. Playback statistics only target VOD domains. Distribution through EdgeOne domain names is not included in playback statistics.
 * @method Models\DescribeCLSLogsetsResponse DescribeCLSLogsets(Models\DescribeCLSLogsetsRequest $req) Queries CLS log sets created by VOD.
 * @method Models\DescribeCLSPushTargetsResponse DescribeCLSPushTargets(Models\DescribeCLSPushTargetsRequest $req) Queries the destination topic for log delivery under an on-demand domain name.
 * @method Models\DescribeCLSTopicsResponse DescribeCLSTopics(Models\DescribeCLSTopicsRequest $req) Queries the list of CLS log topics created by VOD.
 * @method Models\DescribeCdnLogsResponse DescribeCdnLogs(Models\DescribeCdnLogsRequest $req) This API is used to query the download URL of CDN access logs for a VOD domain, excluding logs where EdgeOne pulls from the VOD domain.
1. Can query CDN log download links from the most recent 30 days.
2. By default, CDN generates a log file per hour. If there is no CDN access in an hour, no log file is generated.    
3. The CDN log download link has a validity of 24 hours.
 * @method Models\DescribeClientUploadAccelerationUsageDataResponse DescribeClientUploadAccelerationUsageData(Models\DescribeClientUploadAccelerationUsageDataRequest $req) This API returns client upload acceleration statistics within a specified time range.
1. Can query client upload acceleration statistics data for the most recent 365 days.
   2. The query time span should not exceed 90 days.
3. If the query time span exceeds 1 day, the data is returned at a granularity of 1 day. Otherwise, the data is returned at a granularity of 5 minutes.
 * @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) This API is <font color=red>no longer maintained</font>. The new version of moderation template supports video moderation and image moderation. For details, please see [Get Moderation Template List](https://www.tencentcloud.com/document/api/266/84389?from_cn_redirect=1).
This API is used to retrieve the list of audio/video moderation template details based on the unique identifier of an audio/video moderation template. The returned results include all eligible custom templates and system preset content review templates (https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.A7.86.E9.A2.91.E5.86.85.E5.AE.B9.E5.AE.A1.E6.A0.B8.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeCurrentPlaylistResponse DescribeCurrentPlaylist(Models\DescribeCurrentPlaylistRequest $req) Query the carousel current playlist.
 * @method Models\DescribeDailyMediaPlayStatResponse DescribeDailyMediaPlayStat(Models\DescribeDailyMediaPlayStatRequest $req) This API is used to query the daily playback statistics within the specified date range.
* Playback statistics from the past one year can be queried.
* The time span between the start date and end date can be up to 90 days.
Playback statistics only target VOD domains. Distribution of EdgeOne domain names is not included in playback statistics.
* Due to data delay, you are advised to query the usage data of the previous day after 12:00 noon the next day.
 * @method Models\DescribeDailyMostPlayedStatResponse DescribeDailyMostPlayedStat(Models\DescribeDailyMostPlayedStatRequest $req) This API is used to query playback statistics of the Top 100 daily played media files.
* Playback statistics from the past one year can be queried.
* You can query by number of plays or playback traffic.
* Playback count statistics description:
1. HLS file: The number of plays is counted when an M3U8 file is accessed, but not when a TS file is accessed.
2. Other files (for example, MP4 files): If a playback request includes the range parameter and the start parameter of range is not equal to 0, the number of plays is not counted. In other cases, the number of plays is counted.
* Playback statistics only target VOD domains. Distribution through EdgeOne domain names is not included in playback statistics.
 * @method Models\DescribeDailyPlayStatFileListResponse DescribeDailyPlayStatFileList(Models\DescribeDailyPlayStatFileListRequest $req) This API is used to query the download address of playback statistics files.
* You can query the download link for playback statistics files from the past one year. The time span between the start date and end date cannot exceed 90 days.
VOD analyzes and processes the CDN request logs of the previous day to generate playback statistics files.
* The playback statistics file contains statistical information such as the number of plays and total traffic of media files.
* Statistical description of the number of plays:
1. HLS file: The number of plays is counted when accessing M3U8 files, but not when accessing TS files.
2. Other files (for example, MP4 files): If the playback request includes the range parameter and the start parameter of range is not equal to 0, the number of plays is not counted. In other cases, the number of plays is counted.
* Statistics of playback devices: If a playback request includes the UserAgent parameter and the UserAgent contains identifiers such as Android or iPhone, it is counted as a mobile playback count. Otherwise, it is counted as a PC playback count.
Playback statistics only target VOD domain names. Distribution of EdgeOne domain names is not included in playback statistics.
 * @method Models\DescribeDefaultDistributionConfigResponse DescribeDefaultDistributionConfig(Models\DescribeDefaultDistributionConfigRequest $req) This API is used to query the default distribution configuration.
* Distribution domain name and distribution protocol, i.e., the domain name and protocol in the media file distribution URL. Media files are distributed based on the default distribution configuration.
Playback key, used to calculate player signature.
 * @method Models\DescribeDrmKeyProviderInfoResponse DescribeDrmKeyProviderInfo(Models\DescribeDrmKeyProviderInfoRequest $req) This API is used to query DRM key provider information.
 * @method Models\DescribeEnhanceMediaTemplatesResponse DescribeEnhanceMediaTemplates(Models\DescribeEnhanceMediaTemplatesRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
This API is used to retrieve the audio and video quality regeneration template list.
 * @method Models\DescribeEventConfigResponse DescribeEventConfig(Models\DescribeEventConfigRequest $req) Tencent Cloud Video on Demand (VOD) provides customers with media upload, media management, media processing, and other services. During or after the execution of these services, VOD also provides various event notifications, helping developers detect service processing status and perform next business operations.

Developers can use this API to query the current configuration of event notification receiving methods, recipient addresses, and which events have callback notifications enabled.

Default API request rate limit: 100 requests/second.
 * @method Models\DescribeFileAttributesResponse DescribeFileAttributes(Models\DescribeFileAttributesRequest $req) Used to asynchronously fetch file attributes.
-Currently only support getting the Md5 and Sha1 of the source file.
-For HLS or DASH input files, only get the attributes of the index file.
 * @method Models\DescribeHeadTailTemplatesResponse DescribeHeadTailTemplates(Models\DescribeHeadTailTemplatesRequest $req) This API is used to get the list of title and trailer templates.
 * @method Models\DescribeImageProcessingTemplatesResponse DescribeImageProcessingTemplates(Models\DescribeImageProcessingTemplatesRequest $req) This API is used to query the list of image processing templates based on conditions with paging.
 * @method Models\DescribeImageReviewUsageDataResponse DescribeImageReviewUsageData(Models\DescribeImageReviewUsageDataRequest $req) This API is used to return the daily image moderation usage information within the specified query time range.
1. Image moderation statistics data from the last 365 days can be queried.
   2. The query time span should not exceed 90 days.
3. If the query time span exceeds 1 day, the data is returned at a granularity of 1 day. Otherwise, the data is returned at a granularity of 5 minutes.
 * @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) This API is used to query sprite sheet templates based on conditions with paging.
 * @method Models\DescribeJustInTimeTranscodeTemplatesResponse DescribeJustInTimeTranscodeTemplates(Models\DescribeJustInTimeTranscodeTemplatesRequest $req) Queries the list of instant transcoding templates.
 * @method Models\DescribeKnowledgeBasesResponse DescribeKnowledgeBases(Models\DescribeKnowledgeBasesRequest $req) Query the knowledge base list. Return all knowledge base information under the specified user.
 * @method Models\DescribeLLMComprehendTemplatesResponse DescribeLLMComprehendTemplates(Models\DescribeLLMComprehendTemplatesRequest $req) This API is used to obtain the template detail list of large model parsing templates based on the Template Unique Identifier. The returned results include all eligible user-customized large model parsing templates.
 * @method Models\DescribeLicenseUsageDataResponse DescribeLicenseUsageData(Models\DescribeLicenseUsageDataRequest $req) This API is used to return the daily License request count within the specified query time range.
1. License request count stats from the last 365 days can be queried.
   2. The query time span should not exceed 90 days.
3. If the query time span exceeds 1 day, the data returned is at day granularity. Otherwise, the data returned is at 5-minute granularity.
 * @method Models\DescribeMPSTemplatesResponse DescribeMPSTemplates(Models\DescribeMPSTemplatesRequest $req) This API is used to obtain user-customized media processing service task templates.
When querying the template list, fill in MPS-related parameters in MPSDescribeTemplateParams in JSON format. For task parameter configuration, refer to the MPS task template documentation.
 * @method Models\DescribeMediaInfosResponse DescribeMediaInfos(Models\DescribeMediaInfosRequest $req) 1. This API can obtain multiple types of info of multiple media files, including:
1. Basic information (basicInfo): including media name, categorization, playback address, cover image, and more.
2. Meta information (metaData): including size, duration, video stream information, and audio stream information.
3. Transcode result information (transcodeInfo): includes media addresses of various specifications generated by transcoding the media, video stream parameters, audio stream parameters, etc.
4. Animated graphics info (animatedGraphicsInfo): the animated graphics info after converting a video to gif (for example, gif).
5. sampleSnapshotInfo: sampling screenshot information.
6. Sprite image information (imageSpriteInfo): sprite image information after capturing sprite image files from a video.
7. snapshotByTimeOffsetInfo: screenshot information after taking screenshots of a video at specified time points.
8. Video timestamp information (keyFrameDescInfo): Dotting information set for a video.
9. Adaptive Bitrate Streaming information (adaptiveDynamicStreamingInfo): information including specification, encryption type, and packaging format.
10. Review information (reviewInfo): includes media moderation and media cover review information.
2. You can specify to only return partial information in the response.
 * @method Models\DescribeMediaPlayStatDetailsResponse DescribeMediaPlayStatDetails(Models\DescribeMediaPlayStatDetailsRequest $req) This API is used to query playback data of media files by specified time granularity.
* Playback statistics from the past one year can be queried.
Time granularity: hour. The maximum span between start time and end time is 7 days.
Time granularity: day. The maximum span between the end time and start time is 90 days.
* Playback statistics only target VOD domains (distribution from EdgeOne domain names is not included in playback statistics).
 * @method Models\DescribeMediaProcessUsageDataResponse DescribeMediaProcessUsageData(Models\DescribeMediaProcessUsageDataRequest $req) This API is used to return the daily video processing usage information within the specified query time range.
1. Video processing usage data is retained in the data system for 13 months. You can query usage data from the most recent 365 days through the API. To call historical usage data beyond 365 days, contact us.
   2. The query time span should not exceed 90 days.
 * @method Models\DescribePersonSamplesResponse DescribePersonSamples(Models\DescribePersonSamplesRequest $req) This API is used to query material sample information by material ID, name, or tag with pagination.
 * @method Models\DescribeProcedureTemplatesResponse DescribeProcedureTemplates(Models\DescribeProcedureTemplatesRequest $req) This API is used to search the task flow template detail list based on the task flow template name.
 * @method Models\DescribeProcessImageAsyncTemplatesResponse DescribeProcessImageAsyncTemplates(Models\DescribeProcessImageAsyncTemplatesRequest $req) This API is used to obtain the template details list based on the template unique identifier. The returned results include all eligible user-customized image asynchronous processing templates.
 * @method Models\DescribeQualityInspectTemplatesResponse DescribeQualityInspectTemplates(Models\DescribeQualityInspectTemplatesRequest $req) This API is used to query the audio and video quality detection template list.
 * @method Models\DescribeRebuildMediaTemplatesResponse DescribeRebuildMediaTemplates(Models\DescribeRebuildMediaTemplatesRequest $req) This API is <font color=red>no longer maintained</font>. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
Queries the video rebirth template list.
 * @method Models\DescribeReviewDetailsResponse DescribeReviewDetails(Models\DescribeReviewDetailsRequest $req) <b>This API is not recommended. Use [DescribeMediaProcessUsageData](https://www.tencentcloud.com/document/product/266/41464?from_cn_redirect=1) as an alternative.</b>

This API is used to return the daily video content intelligent identification duration data within the specified query time range. Unit: seconds.

1. Video content intelligent identification duration stats from the last 365 days can be queried.
2. The query time span should not exceed 90 days.
 * @method Models\DescribeReviewTemplatesResponse DescribeReviewTemplates(Models\DescribeReviewTemplatesRequest $req) This API is used to query the moderation template list.
>Template is applicable only to the [audio/video moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) and [image moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1) APIs.
 * @method Models\DescribeRoundPlaysResponse DescribeRoundPlays(Models\DescribeRoundPlaysRequest $req) This API is used to get the carousel playlist list.
 * @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) This API is used to query sampled screenshot templates based on conditions with paging.
 * @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) Queries specified time point screenshot templates and supports paging query based on conditions.
 * @method Models\DescribeStorageDataResponse DescribeStorageData(Models\DescribeStorageDataRequest $req) Queries storage space usage and number of files.
 * @method Models\DescribeStorageDetailsResponse DescribeStorageDetails(Models\DescribeStorageDetailsRequest $req) This API is used to return the VOD storage space used within a specified time range, in bytes.
1. Storage usage data is retained for 13 months in the data system. You can only query usage data from the most recent 365 days through the API. If you need to access historical usage data beyond 365 days, contact us;
2. The query time span should not exceed 90 days.
3. The query span at a minute granularity should not exceed 7 days;
 * @method Models\DescribeStorageRegionsResponse DescribeStorageRegions(Models\DescribeStorageRegionsRequest $req) This API is used to:
1. Query the list of all storage campuses available for on-demand activation.
2. Query the list of opened parks.
3. Query the storage campus used by default.
 * @method Models\DescribeSubAppIdsResponse DescribeSubAppIds(Models\DescribeSubAppIdsRequest $req) This API is used to get the application list of the current account.
 * @method Models\DescribeSuperPlayerConfigsResponse DescribeSuperPlayerConfigs(Models\DescribeSuperPlayerConfigsRequest $req) This API is <font color='red'>no longer maintained</font>. The new version of player signature no longer uses player configuration templates. For details, please see [Player Signature](https://www.tencentcloud.com/document/product/266/45554?from_cn_redirect=1).
Queries player configurations and supports paging query based on conditions.
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) This API is used to query the details of the task execution status and results by task ID (tasks submitted within the last 3 days can be queried).
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * This API is used to query the task list.
* When the list contains a large amount of data, a single API call cannot pull the entire list. You can use the ScrollToken parameter to pull in batches.
* Only tasks from the last three days (72 hours) can be queried.
 * @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) This API is used to retrieve the transcoding template detail list based on the transcoding template unique identifier. The returned results include all eligible custom templates and [system preset transcoding templates](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeVodDomainsResponse DescribeVodDomains(Models\DescribeVodDomainsRequest $req) This API is used to query the list of on-demand video domain names.
 * @method Models\DescribeVoicesResponse DescribeVoices(Models\DescribeVoicesRequest $req) Query the available timbre list under the current account. It supports filtering by optional conditions such as voice ID, kind, name, gender, age, language, tag, and scenario.

Note: Newly designed or cloned voice types cannot be queried before activation. They are activated only after the newly created voice type is used for TTS once.
 * @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) This API is used to query user-defined watermark templates, and paging query is supported based on conditions.
 * @method Models\DescribeWordSamplesResponse DescribeWordSamples(Models\DescribeWordSamplesRequest $req) This API is used to paginate keyword sample information by scenario, keyword, and tag.
 * @method Models\DesignVoiceAsyncResponse DesignVoiceAsync(Models\DesignVoiceAsyncRequest $req) This API is used to initiate a voice design task. It generates a custom voice based on a natural language description. You can also specify a voice profile, such as name, gender, age, language, tag, and scenario. If trial text is attached upon submission, an audio audition is generated after task completion. Voice design is an asynchronous task, and the voice ID is generated after task completion.
 * @method Models\EditMediaResponse EditMedia(Models\EditMediaRequest $req) This API is used to edit a video, such as clipping and concatenation, to generate a new on-demand video. Editing features include:

1) Edit a file in on-demand playback to generate a new video.
2) Splice multiple on-demand files to generate a new video.
3) Edit multiple on-demand video files and then splice them to generate a new video;
4. Directly generate a new video for one stream in VOD;
5. Edit one stream in VOD to generate a new video;
6) Splice multiple on-demand streams to generate a new video.
7) Edit multiple streams in VOD and then splice them to generate a new video.

For the generated new video, you can also specify whether to execute task flow for the generated video.

When editing or splicing a live stream, please ensure the stream ended before you operate. Otherwise, the generated video may be incomplete.

If event notification is used, its type is [video editing completed](https://www.tencentcloud.com/document/product/266/33794?from_cn_redirect=1).
 * @method Models\EnhanceMediaByTemplateResponse EnhanceMediaByTemplate(Models\EnhanceMediaByTemplateRequest $req) This API is <font color=red>no longer maintained</font>. Please use the new version of APIs [audio and video quality revival](https://www.tencentcloud.com/document/api/266/102571?from_cn_redirect=1).
Use a template to initiate audio and video quality revival.
 * @method Models\EnhanceMediaQualityResponse EnhanceMediaQuality(Models\EnhanceMediaQualityRequest $req) This API is used to initiate an audio and video quality regeneration task for on-demand audio-video media.
 * @method Models\ExecuteFunctionResponse ExecuteFunction(Models\ExecuteFunctionRequest $req) This API is only used for special scenarios of customized development. Do not call this API unless VOD customer service proactively informs you to use it.
 * @method Models\ExtractBlindWatermarkResponse ExtractBlindWatermark(Models\ExtractBlindWatermarkRequest $req) This API is used to initiate a digital watermark extraction task for a video. The extraction result can be queried through DescribeTaskDetail.
 * @method Models\ExtractCopyRightWatermarkResponse ExtractCopyRightWatermark(Models\ExtractCopyRightWatermarkRequest $req) If you need source tracing for piracy, see Ghost Watermark (https://www.tencentcloud.com/document/product/266/94228?from_cn_redirect=1).
 * @method Models\ExtractTraceWatermarkResponse ExtractTraceWatermark(Models\ExtractTraceWatermarkRequest $req) If source tracing for piracy is required, ghost watermark is recommended for use (https://www.tencentcloud.com/document/product/266/94228?from_cn_redirect=1).
 * @method Models\FastEditMediaResponse FastEditMedia(Models\FastEditMediaRequest $req) Quickly splice and edit HLS videos in VOD to generate new media in HLS format.

Quickly splice or edit the generated video to create a new FileId and solidify it. After successful solidification, the new video file exists independently of the original input video and is not affected by deletion of the original video.

<font color='red'>Note:</font> Enable reception of editing solidification event notifications through the ModifyEventConfig API. After successful solidification, you will receive a PersistenceComplete event notification. Before receiving this event notification, you should not delete or transition the original input video to colder storage. Otherwise, playback of the video generated by splicing and clipping may be abnormal.
 * @method Models\ForbidMediaDistributionResponse ForbidMediaDistribution(Models\ForbidMediaDistributionRequest $req) * After media blocking, except for VOD console preview, accessing URLs of various video resources (original files, transcoding output files, screenshots, etc.) for other scenarios will return 403.
It takes about 5 to 10 minutes for the block or unblock operation to take effect across the entire network.
* Note: Media blocking can only be performed on media stored in standard storage and infrequent storage. Media stored in infrequent storage must be stored for at least 30 days. If it is deleted early or its storage class is changed, it will still be billed for 30 days. If media stored in infrequent storage is blocked and its infrequent storage duration is less than 30 days, early deletion billing will occur. In addition, after blocking, the infrequent storage duration of the media will restart from the current time. If the media is deleted or its storage class is changed before reaching 30 days, early deletion billing will also occur. For example, media 001 has been stored in infrequent storage for 10 days. If 001 is blocked at this point, infrequent storage billing is still calculated based on 30 days (early deletion billing duration: 30 - 10 = 20 days). After blocking, the infrequent storage duration of 001 restarts. If 001 is deleted on the 5th day after blocking, infrequent storage billing is also calculated based on 30 days (early deletion billing duration: 30 - 5 = 25 days). The actual infrequent storage duration of 001 is 10 + 5 = 15 days, while the infrequent storage billing duration is 10 + 20 (early deletion billing) + 5 + 25 (early deletion billing) = 60 days.
 * @method Models\HandleCurrentPlaylistResponse HandleCurrentPlaylist(Models\HandleCurrentPlaylistRequest $req) Manipulate the carousel current playlist. Supported operations: <li> Insert: Insert a program into the current playlist.</li><li> Delete: Delete a program from the playlist.</li>
 * @method Models\ImportMediaKnowledgeResponse ImportMediaKnowledge(Models\ImportMediaKnowledgeRequest $req) Used to import AI analysis results into the knowledge base.
 * @method Models\InspectMediaQualityResponse InspectMediaQuality(Models\InspectMediaQualityRequest $req) This API is used to initiate an audio and video quality inspection task for on-demand audio-video media.
 * @method Models\ListFilesResponse ListFiles(Models\ListFilesRequest $req) This API is used to list stored file entries under a sub-application.

**This API is only available in "FileID+Path mode"**
 * @method Models\LiveRealTimeClipResponse LiveRealTimeClip(Models\LiveRealTimeClipRequest $req) Live stream clipping refers to the ability for customers to select a segment from the live stream content during live streaming (that is, before the live stream has ended), and generate a new video in HLS format in real time. Developers can share it immediately or save it for long-term preservation.

Tencent Cloud VOD supports two real-time clipping modes:
- Edit and save: Save the edited video as a standalone video with an independent FileId. This is suitable for long-term preservation of highlights.
- Editing is not solidified: The edited video is attached to the live streaming recording file and has no standalone FileId. This is suitable for scenarios where highlights are shared temporarily.

Note:
- The premise for using the live stream clipping feature is that the target live stream has the time shifting and playback (https://www.tencentcloud.com/document/product/267/32742?from_cn_redirect=1) feature enabled.
-Live streaming Instant Editing is based on the m3u8 file generated by live recording, so its minimum editing precision is one ts slice. Second-level or more precise editing precision cannot be achieved.
-Since stream disconnection may occur during live streaming, the actual video duration generated by editing may differ from the expected duration. For example, if you edit a live stream from 2018-09-20T10:30:00Z to 2018-09-20T10:40:00Z, and stream disconnection occurred during this time interval, the returned media file duration will be less than 10 minutes. In such cases, you can perceive it through the output parameter <a href="#p_segmentset">SegmentSet</a>.

### Edit solidification
Clipping persistence refers to saving an edited video as an independent video with its own FileId. Its lifecycle is not subject to any impact from the original live recorded video. Even if the original recorded video is deleted, the clipping result is not affected. You can also transcode it or publish it on WeChat for secondary processing.

For example, a complete football match live recording may produce raw video lasting for over 2 hours. For cost savings, a customer can store this video for 2 months, but can specify longer storage for highlight videos from live stream clipping. You can also perform additional on-demand operations on highlight videos separately, such as transcoding and publishing on WeChat. In this case, you can choose a live stream clipping and persistent solution.

The advantage of solidified editing is that its lifecycle is independent of the original recorded video, allowing for separate management and long-term preservation.

<font color='red'>Note:</font> If solidification is specified when editing, enable reception of editing solidification event notifications through the ModifyEventConfig API. After successful solidification, you will receive a PersistenceComplete event notification. Before receiving this event notification, you should not delete or transition the live video recording to colder storage. Otherwise, playback of the generated video may be abnormal.

### Editing is not solidified
So-called non-solidified editing means that the result of editing (m3u8 file) shares the same TS segments with the live video recording. The newly generated video is not an independent and complete video (no standalone FileId, only a playback URL), and its valid period is consistent with that of the full live recording video. Once the live recording video is deleted, the clip will also become unplayable.

Editing is not solidified. Since the clipping result is not an independent video, it is not included in video management of on-demand media assets (for example, the total number of videos in the console does not count this clip), and no video processing operation such as transcoding or publishing on WeChat can be performed against this clip separately.

The advantage of non-solidified editing is that the editing operation is relatively "lightweight" and will not generate additional storage overhead. However, its shortcoming is that the lifecycle is identical to the original recorded video, and it is unable to further transcode or perform other video processing.
 * @method Models\ManageTaskResponse ManageTask(Models\ManageTaskRequest $req) Manage initiated tasks.
 * @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) This API is used to modify a user-defined audio and video content analysis template.

Note: Templates with IDs below 10000 are system-preset templates and cannot be modified.
 * @method Models\ModifyAIRecognitionTemplateResponse ModifyAIRecognitionTemplate(Models\ModifyAIRecognitionTemplateRequest $req) This API is used to modify a user-defined audio and video content recognition template.
 * @method Models\ModifyAdaptiveDynamicStreamingTemplateResponse ModifyAdaptiveDynamicStreamingTemplate(Models\ModifyAdaptiveDynamicStreamingTemplateRequest $req) Modifying an Adaptive Bitrate Streaming Template
 * @method Models\ModifyAigcQuotaResponse ModifyAigcQuota(Models\ModifyAigcQuotaRequest $req) Used to edit AIGC quota configuration. Quota usage starts accumulating when the quota feature is enabled. Once the quota is reached, AIGC features will no longer be usable.

Since AGC content generation is an async task, real-time usage data cannot be obtained. Therefore, quota limits result in some errors, and complete precise control with the set limit cannot be achieved.
 * @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) Modify a custom animated image generating template.
 * @method Models\ModifyBlindWatermarkTemplateResponse ModifyBlindWatermarkTemplate(Models\ModifyBlindWatermarkTemplateRequest $req) This API is used to modify a user-defined digital watermark template. The digital watermark type cannot be modified.
 * @method Models\ModifyCDNDomainConfigResponse ModifyCDNDomainConfig(Models\ModifyCDNDomainConfigRequest $req) Modify CDN Domain Config.
 * @method Models\ModifyClassResponse ModifyClass(Models\ModifyClassRequest $req) Modify media classification attributes.
 * @method Models\ModifyContentReviewTemplateResponse ModifyContentReviewTemplate(Models\ModifyContentReviewTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of moderation template supports audio/video moderation and image moderation. For details, please see [Modify Moderation Template](https://www.tencentcloud.com/document/api/266/84388?from_cn_redirect=1).
Modify a user-customized audio/video moderation template.
 * @method Models\ModifyDefaultDistributionConfigResponse ModifyDefaultDistributionConfig(Models\ModifyDefaultDistributionConfigRequest $req) This API is used to modify the default distribution configuration.
* Distribution domain name and distribution protocol, i.e., the domain name and protocol in the media file distribution URL. Media files are distributed based on the default distribution configuration.
Playback key, used to calculate player signature.
 * @method Models\ModifyDefaultStorageRegionResponse ModifyDefaultStorageRegion(Models\ModifyDefaultStorageRegionRequest $req) This API is used to set the default storage region. If no region is specified during file upload, files will be uploaded to the default region.
 * @method Models\ModifyEnhanceMediaTemplateResponse ModifyEnhanceMediaTemplate(Models\ModifyEnhanceMediaTemplateRequest $req) This API is no longer maintained. The new version of the [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) API uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
Modify an audio and video quality rebirth template.
 * @method Models\ModifyEventConfigResponse ModifyEventConfig(Models\ModifyEventConfigRequest $req) Tencent Cloud VOD provides customers with media upload, media management, media processing, and other services. During or after the execution of these services, Tencent Cloud VOD also offers various corresponding event notifications, allowing developers to detect the service processing status and perform the next business operation.

Developers can call this interface to:
- Set the type for receiving callback notifications. Currently, there are two types: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1) and [reliable notification based on message queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).
- For [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1), you can set the address for 3.0 format callback. For 3.0 format callback details, see [historical format callback](https://www.tencentcloud.com/document/product/266/33796?from_cn_redirect=1).
-Select to receive or ignore notification events for a specific event service.
 * @method Models\ModifyHeadTailTemplateResponse ModifyHeadTailTemplate(Models\ModifyHeadTailTemplateRequest $req) Modify a title and trailer template.
 * @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) Modify a user-customized image sprite template.
 * @method Models\ModifyJustInTimeTranscodeTemplateResponse ModifyJustInTimeTranscodeTemplate(Models\ModifyJustInTimeTranscodeTemplateRequest $req) Modify a just in time transcoding template.
-Note: Once a just in time transcoding template is created, modification is not recommended. If parameter modification is needed, adding a template is recommended.
 * @method Models\ModifyKnowledgeBaseResponse ModifyKnowledgeBase(Models\ModifyKnowledgeBaseRequest $req) This API is used to modify a knowledge base. The name and/or description of the knowledge base can be modified. At least one of the Name or Description fields is required.
 * @method Models\ModifyLLMComprehendTemplateResponse ModifyLLMComprehendTemplate(Models\ModifyLLMComprehendTemplateRequest $req) Modify a large model parsing template
 * @method Models\ModifyMPSTemplateResponse ModifyMPSTemplate(Models\ModifyMPSTemplateRequest $req) Modify a user-customized MPS task template.
When modifying a template, fill in the MPS related parameters in JSON format into the MPSModifyTemplateParams parameter. For specific task parameter configuration methods, see the MPS task template related documentation.
 * @method Models\ModifyMediaInfoResponse ModifyMediaInfo(Models\ModifyMediaInfoRequest $req) This API is used to modify the attributes of a media file, including category, name, description, tag, expiration time, dotting information, video cover, and subtitle information.
 * @method Models\ModifyMediaStorageClassResponse ModifyMediaStorageClass(Models\ModifyMediaStorageClassRequest $req) Modifies the storage type of media files.
When the storage type of a media file is standard storage, it can be modified to the following types:
<li>Infrequent storage</li>
<li>Archive storage</li>
<li>DEEP_ARCHIVE</li>
When the current storage type of a media file is infrequent storage, it can be modified to the following types:
<li>Standard storage</li>
<li>Archive storage</li>
<li>DEEP_ARCHIVE</li>
When the current storage type of a media file is archive storage, it can be modified to the following types:
<li>Standard storage</li>
When the current storage type of a media file is DEEP_ARCHIVE, it can be modified to the following types:
<li>Standard storage</li>
 * @method Models\ModifyPersonSampleResponse ModifyPersonSample(Models\ModifyPersonSampleRequest $req) This API is used to modify material sample information based on the material ID, including modification of the name and description, as well as addition, deletion, and reset of facial features and tags. Ensure at least 1 image remains after facial feature deletion. Otherwise, use the reset operation.
 * @method Models\ModifyProcessImageAsyncTemplateResponse ModifyProcessImageAsyncTemplate(Models\ModifyProcessImageAsyncTemplateRequest $req) This API is used to modify a user-customized image async processing template.

Note: Templates with IDs below 10000 are preset templates and are not allowed to be modified.
 * @method Models\ModifyQualityInspectTemplateResponse ModifyQualityInspectTemplate(Models\ModifyQualityInspectTemplateRequest $req) This API is used to modify an audio and video quality inspection template.
 * @method Models\ModifyRebuildMediaTemplateResponse ModifyRebuildMediaTemplate(Models\ModifyRebuildMediaTemplateRequest $req) This API is <font color=red>no longer maintained</font>. The new version of [audio and video quality revival](https://www.tencentcloud.com/document/product/266/102571?from_cn_redirect=1) interface uses preset templates. For details, see [Audio and Video Quality Rebirth Template](https://www.tencentcloud.com/document/product/266/102586?from_cn_redirect=1#50604b3f-0286-4a10-a3f7-18218116aff7).
Modifying a Video Rebirth Template.
 * @method Models\ModifyReviewTemplateResponse ModifyReviewTemplate(Models\ModifyReviewTemplateRequest $req) Modifies a user-customized moderation template.
>Template is applicable only to the ReviewAudioVideo (https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) and ReviewImage (https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1) APIs.
 * @method Models\ModifyRoundPlayResponse ModifyRoundPlay(Models\ModifyRoundPlayRequest $req) This API is used to modify a carousel playlist.
After modification, only new playback requests will take effect. Users already playing can still play the previous playlist within 7 days.
 * @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) Modify a user-customized sampled screenshot template.
 * @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) Modify a user-customized specified time point screenshot template.
 * @method Models\ModifySubAppIdInfoResponse ModifySubAppIdInfo(Models\ModifySubAppIdInfoRequest $req) This API is used to change application information, but default application information is not allowed to be modified.
 * @method Models\ModifySubAppIdStatusResponse ModifySubAppIdStatus(Models\ModifySubAppIdStatusRequest $req) This API is used to enable or disable applications. Disabled applications will have their corresponding domains blocked and console access restricted.
 * @method Models\ModifySuperPlayerConfigResponse ModifySuperPlayerConfig(Models\ModifySuperPlayerConfigRequest $req) This API is <font color='red'>no longer maintained</font>. The new version of player signature no longer uses player configuration templates. For details, please see [Player Signature](https://www.tencentcloud.com/document/product/266/45554?from_cn_redirect=1).
This API is used to modify player configuration.
 * @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) Modify the information of a custom transcoding template.
 * @method Models\ModifyVodDomainAccelerateConfigResponse ModifyVodDomainAccelerateConfig(Models\ModifyVodDomainAccelerateConfigRequest $req) This API is used to modify the acceleration region of a VOD domain.
1. The acceleration region can be modified only when the domain name deployment state is Online.
 * @method Models\ModifyVodDomainConfigResponse ModifyVodDomainConfig(Models\ModifyVodDomainConfigRequest $req) This API is used to modify domain name configuration, including hotlink protection configuration.
1. The domain name configuration can be modified only when the domain name deployment state is Online.
 * @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) This API is used to modify a user-defined watermark template. The watermark type cannot be modified.
 * @method Models\ModifyWordSampleResponse ModifyWordSample(Models\ModifyWordSampleRequest $req) This API is used to modify the application scenario and tags of a keyword. The keyword itself cannot be modified. If modification is needed, delete and rebuild it.
 * @method Models\ParseStreamingManifestResponse ParseStreamingManifest(Models\ParseStreamingManifestRequest $req) When uploading HLS videos, this API parses the index file content and returns a list of shard files to be uploaded. The shard file path must be a relative path in the current directory or subdirectory. It cannot be a URL or an absolute path.
 * @method Models\ProcessImageAsyncResponse ProcessImageAsync(Models\ProcessImageAsyncRequest $req) This API is used to process image tasks.
 * @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) This API is used to initiate processing tasks for audio-video media in VOD, with features including:
1. Watermarked video transcoding;
2. Animated image generating;
3. Screenshot taking at specified time points;
4. Sampled screenshot taking;
5. Capture CSS sprites for videos;
6. Capture a frame from a video as the cover.
7. Transcoding to adaptive bitrate streaming (and encrypting);
8. Content review (offensive content, unsafe information, inappropriate information), it is <font color=red>not recommended</font> to use this API to initiate. It is recommended to use [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1);
9. Content analysis (tag, categorization, cover, frame tagging), HLS format not supported currently.
10. Content recognition (video intro and outro, human face, full text, text keyword, full speech, speech keyword, object).

If event notification is used, the event notification type is task flow status change (https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1).
 * @method Models\ProcessMediaByMPSResponse ProcessMediaByMPS(Models\ProcessMediaByMPSRequest $req) Use the media processing capability of Media Processing Service (MPS) to initiate media processing for videos in VOD.
Currently supported MPS features:
1. Smart subtitling: The feature supports processing offline audio files, video files, and live streams. It can extract subtitles in the video source language through ASR speech recognition or OCR text recognition, and implement multilingual translation. View details in the integration guide (https://www.tencentcloud.com/document/product/266/131210?from_cn_redirect=1).
2. Intelligent erasure: It can blur, mosaic, or seamlessly process elements such as logos, subtitles, human faces, and license plates in video footage, making it easy to spread and share content. The new video generated by this task will be assigned a new FileId and stored in a subapplication of the VOD platform. For details, see the Access Guide (https://www.tencentcloud.com/document/product/266/131211?from_cn_redirect=1).
3. AI analysis: This feature supports all-in-one translation (https://www.tencentcloud.com/document/product/266/131212?from_cn_redirect=1), highlights (https://www.tencentcloud.com/document/product/266/131213?from_cn_redirect=1), LLM video summary (https://www.tencentcloud.com/document/product/266/131214?from_cn_redirect=1), LLM audio/video understanding (https://www.tencentcloud.com/document/product/266/131215?from_cn_redirect=1), intelligent splitting (https://www.tencentcloud.com/document/product/266/131216?from_cn_redirect=1), intelligent landscape-to-portrait (https://www.tencentcloud.com/document/product/266/131217?from_cn_redirect=1), video deduplication (https://www.tencentcloud.com/document/product/266/131218?from_cn_redirect=1), and other features.


> Video processing tasks initiated this method:
> 1. Query of task status and results is still completed in the VOD platform. Use [DescribeTaskDetail](https://www.tencentcloud.com/document/product/266/33431?from_cn_redirect=1) or [DescribeTasks](https://www.tencentcloud.com/document/product/266/33430?from_cn_redirect=1) to query tasks.
> 2. The amount and bills of related features will be provided on the PS platform. Before using this feature, first enable Media Processing Service (MPS) in the console. For the activation method, see the preliminary operations in the access documentation.
 * @method Models\ProcessMediaByProcedureResponse ProcessMediaByProcedure(Models\ProcessMediaByProcedureRequest $req) Use a task flow template to initiate processing tasks for videos in VOD.
There are two ways to create a task flow template:
1. Create and modify a task flow template in the console;
2. Create a task flow template through the task flow template API.

If event notification is used, the type of event notification for tasks other than audio/video moderation tasks is task flow status change (https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1); the type of event notification for audio/video moderation tasks is audio/video moderation completed (https://www.tencentcloud.com/document/product/266/81258?from_cn_redirect=1).
 * @method Models\ProcessMediaByUrlResponse ProcessMediaByUrl(Models\ProcessMediaByUrlRequest $req) This API is <font color='red'>no longer maintained</font>. Please use the [ProcessMedia](https://www.tencentcloud.com/document/product/862/37578?from_cn_redirect=1) API of MPS and specify the video URL in the input parameter InputInfo.UrlInputInfo.Url.
 * @method Models\PullEventsResponse PullEvents(Models\PullEventsRequest $req) * This API is used for the business server to get event notifications via reliable callback (https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83);
* The API uses long polling mode. If there are unconsumed events on the server, they will be returned to the requester immediately. If there are no unconsumed events, the request will be suspended in the background until a new event occurs.
* The request can be suspended for up to 5 seconds. It is advisable to set the timeout to 10 seconds for the requester.
* Event notifications that are not pulled are retained for up to 4 days. Notifications exceeding this time limit may be purged.
* If this API returns an event, the caller must call the [Confirm Event Notification](https://www.tencentcloud.com/document/product/266/33434?from_cn_redirect=1) API within <font color="red">30 seconds</font> to confirm that the event notification has been processed. Otherwise, the event notification will be pulled again after <font color="red">30 seconds</font>.
* Currently, a maximum of 16 event notifications can be obtained per API call.
 * @method Models\PullUploadResponse PullUpload(Models\PullUploadRequest $req) This API is used to pull a video from the network to the VOD platform.
 * @method Models\PushUrlCacheResponse PushUrlCache(Models\PushUrlCacheRequest $req) 1. Preheat the specified URL list.
2. The domain name of the URL must be registered in VOD.
3. Specify up to 20 URLs per request.
4. The default prefetch quota is 10,000 URLs per day.
 * @method Models\RebuildMediaResponse RebuildMedia(Models\RebuildMediaRequest $req) This API is <font color=red>no longer maintained</font>. Please use the new version of APIs [audio and video quality revival](https://www.tencentcloud.com/document/api/266/102571?from_cn_redirect=1).
This API is used to initiate audio and video quality revival.
 * @method Models\RebuildMediaByTemplateResponse RebuildMediaByTemplate(Models\RebuildMediaByTemplateRequest $req) This API is <font color=red>no longer maintained</font>. Please use the new version of APIs for [audio and video quality revival](https://www.tencentcloud.com/document/api/266/102571?from_cn_redirect=1).
Use a template to initiate video rebirth.
 * @method Models\RefreshUrlCacheResponse RefreshUrlCache(Models\RefreshUrlCacheRequest $req) 1. Refresh a specified URL list.
2. The domain name of the URL must be registered in VOD.
3. A maximum of 20 URLs can be specified per request.
4. The default refresh quota is 100,000 URLs per day.
 * @method Models\RemoveWatermarkResponse RemoveWatermark(Models\RemoveWatermarkRequest $req) Watermark removal
 * @method Models\ResetProcedureTemplateResponse ResetProcedureTemplate(Models\ResetProcedureTemplateRequest $req) Reset the content of the user-defined task flow template.
 * @method Models\RestoreMediaResponse RestoreMedia(Models\RestoreMediaRequest $req) If the storage type of a media file is archive storage or deep archive storage, it is inaccessible. If you need access, call this API to unfreeze it. After unfreezing, the accessible media file is temporary and becomes inaccessible after the validity period expires.
 * @method Models\ReviewAudioVideoResponse ReviewAudioVideo(Models\ReviewAudioVideoRequest $req) This API is used to initiate a moderation task for on-demand audio-video media, intelligently detecting violative content in video footage, text in images, text in speech, and sound.

If event notification is used, the event notification type is [audio/video moderation completed](https://www.tencentcloud.com/document/product/266/81258?from_cn_redirect=1).
 * @method Models\ReviewImageResponse ReviewImage(Models\ReviewImageRequest $req) Initiate a review task for image files in VOD to detect offensive, unsafe, and inappropriate content.

<li>Supported image file size: file < 5M;</li>
<li>Image file resolution support: recommended resolution above 256x256, otherwise it may affect review effectiveness;</li>
<li>Supported image file formats: PNG, JPG, JPEG, BMP, GIF, WEBP.</li>
 * @method Models\SearchMediaResponse SearchMedia(Models\SearchMediaRequest $req) This API is used to search media information with multiple filter criteria, sort and filter returned results, and other features. This includes:
-Specify the file ID collection FileIds to return media matching any ID in the collection.
-Perform fuzzy search by multiple media file names (Names) or descriptions (Descriptions).
-Search by multiple filename prefixes NamePrefixes.
- Specify the category collection ClassIds (see input parameter), and media that meet any category in the collection will be returned. For example, media categories include movies, TV series, and variety shows. The movie category has subcategories such as historical films, action films, and romance films. If ClassIds specifies movies and TV series, all subcategories under movies and TV series will be returned. If ClassIds specifies historical films and action films, only media under these two subcategories will be returned.
- Specify tag collection Tags (see input parameters) to return media that match any tag in the collection. For example, if media tags include ACG, palace intrigue, and parody remix, and Tags specifies ACG and parody remix, any media that meets either of these two tags will be retrieved.
-Specified file type collection Categories (see input parameter). Returns media that meet any type in the collection. For example, file types include Video, Audio, and Image. If Categories specifies Video and Audio, media that meet these types will be retrieved.
-Specify the source collection SourceTypes (see input parameters) to return media that meets any source in the collection. For example, media sources include Record (live recording), Upload, and so on. If SourceTypes specifies Record and Upload, media that meets these sources will be retrieved.
-Specify the file packaging format set MediaTypes (see input parameters), and return media that meets any packaging format in the collection. For example, packaging formats include MP4, AVI, MP3, and so on. If MediaTypes specifies MP4 and MP3, then media that complies with these packaging formats will be retrieved.
-Specify the file status collection Status (see input parameters) to return media that meet any status in the collection. For example, file statuses include Normal, SystemForbidden (Platform Ban), and Forbidden (proactive ban). If Status specifies Normal and Forbidden, media that meet these statuses will be retrieved.
-Specify the file review result set ReviewResults (see input parameters) to return media that meets any status in the collection. For example, file review results include pass and block. If ReviewResults specifies both pass and block, media that complies with these review results will be retrieved.
-Filter the media of live recording service by specifying the collection of live streaming codes StreamIds (see input parameter).
-Filter media by the create time range of the specified media.
-Specify a TRTC application ID collection to filter media.
-Specify a TRTC room ID collection to filter media.

- The above parameters can be combined in any way for retrieval. For example: filter media with a creation time between 2018-12-01 12:00:00 and 2018-12-08 12:00:00, categorized as movie or TV series, and tagged with palace intrigue and suspense. Note that for any parameter that supports array input, the search logic between its elements is "OR". The logical relationship between all parameters is "AND".

-Allow passage of Filters to control the type of media information returned (default return all information). Selectable inputs include:
1. Basic information (basicInfo): including media name, category, playback address, cover image, etc.
2. Meta information (metaData): including size, duration, video stream information, and audio stream information.
3. transcodeInfo: includes media addresses, video stream parameters, and audio stream parameters of various specifications generated for the transcoded media.
4. animatedGraphicsInfo: The animated graphics info after converting a video to gif (for example, gif).
5. sampleSnapshotInfo: screenshot information after sampling screenshots from the video.
6. Sprite image information (imageSpriteInfo): sprite image information after capturing sprite images from a video.
7. snapshotByTimeOffsetInfo: screenshot information after taking screenshots of a video at specified time points.
8. Video timestamp information (keyFrameDescInfo): Dotting information set for the video.
9. Adaptive Bitrate Streaming information (adaptiveDynamicStreamingInfo): information including specification, encryption type, and packaging format.

-Permission to sort results by creation time and return in pages. Use Offset and Limit (see input parameters) to control pagination.

<div id="maxResultsDesc">API return result count limit:</div>

-<b><a href="#p_offset">Offset</a> and <a href="#p_limit">Limit</a> impact the number of results per pagination query. Special attention: when both are omitted, this interface returns up to 10 query results by default.</b>
-<b>Supports returning up to 5,000 search results. Results beyond this limit can no longer be queried. If the search result volume is too large, recommend using more granular criteria to reduce the search results.</b>

<br>Conditional filtering not recommended:
- (Not recommended: use Names, NamePrefixes, or Descriptions instead) Specify single text Text for fuzzy search on media file name or description.
-(Not recommended: use SourceTypes instead) Specify a single media file source SourceType for search.
-(Not recommended: Use StreamIds instead) Specify a single push stream live code StreamId to search.
-(Not recommended: use CreateTime as an alternative) Specify a single starting creation time StartTime to search.
-(Not recommended: use CreateTime instead) Specify a single end time EndTime to search.
 * @method Models\SearchMediaBySemanticsResponse SearchMediaBySemantics(Models\SearchMediaBySemanticsRequest $req) Use natural language to conduct semantic search on media.
 * @method Models\SetCLSPushTargetResponse SetCLSPushTarget(Models\SetCLSPushTargetRequest $req) Set a delivery destination in CLS for a vod domain.
 * @method Models\SetDrmKeyProviderInfoResponse SetDrmKeyProviderInfo(Models\SetDrmKeyProviderInfoRequest $req) Sets DRM key provider information.
 * @method Models\SetVodDomainCertificateResponse SetVodDomainCertificate(Models\SetVodDomainCertificateRequest $req) Set the HTTPS certificate for a vod domain.
 * @method Models\SimpleHlsClipResponse SimpleHlsClip(Models\SimpleHlsClipRequest $req) Crop HLS video by time period and generate a new HLS video in real time. Developers can share it immediately or save it for long-term preservation.

Tencent Cloud VOD supports two editing modes:
- Clip solidification: Save the edited video as a standalone video with an independent FileId; suitable for long-term preservation of highlights.
- Editing is not solidified: The edited video is attached to the input file and has no standalone FileId. This is suitable for scenarios where highlight clips are shared temporarily.

This API is used to crop an input m3u8 file. The minimum editing precision is one ts slice, so second-level or more precise editing precision cannot be achieved.

### Edit solidification
Clip solidification refers to saving an edited video as an independent video with its own FileId. Its lifecycle is not subject to any impact from the original input video. Even if the original input video is deleted, the clipping result is not affected. You can also transcode it or publish it on WeChat.

For example, a complete football match may have raw video lasting over 2 hours. For cost savings, a customer can store this video for 2 months, but specify longer storage for the edited highlights video. You can also perform additional on-demand operations on the highlights video separately, such as transcoding and publishing on WeChat. In this case, you can choose the edit and solidify solution.

The advantage of solidified edits is that their lifecycle is independent of the original input video, allowing them to be managed separately and preserved long-term.

<font color='red'>Note:</font> If solidification is specified when editing, enable reception of editing solidification event notifications through the ModifyEventConfig API. After successful solidification, you will receive a PersistenceComplete event notification. Before receiving this event notification, you should not delete or transition the original input video to colder storage. Otherwise, playback of the generated video may be abnormal.

### Editing is not solidified
Editing is not solidified, meaning the result of editing (m3u8 file) shares the same TS segments with the original input video. The newly generated video is not a standalone complete video (no independent FileId, only a playback URL), and its valid period is consistent with that of the original input full video. Once the original input video is deleted, the clip will also become unplayable.

Editing is not solidified. Since the clipping result is not an independent video, it is not included in the video management of on-demand media assets (for example, the total number of videos in the console does not count this clip). It is also unable to separately perform any video processing operations such as transcoding or WeChat publishing on this clip.

The advantage of non-solidified editing is that the editing operation is Relatively "lightweight" and will not generate additional storage overhead. However, its shortcoming is that the lifecycle is identical to the original recorded video, and it is unable to further transcode or perform other video processing.
 * @method Models\SplitMediaResponse SplitMedia(Models\SplitMediaRequest $req) This API is used to split an on-demand video into multiple new on-demand videos.
 * @method Models\StartCDNDomainResponse StartCDNDomain(Models\StartCDNDomainRequest $req) This API is used for enabling/disabling the CDN acceleration domain.
 * @method Models\TextToSpeechAsyncResponse TextToSpeechAsync(Models\TextToSpeechAsyncRequest $req) Initiate a speech synthesis task to convert text into speech, oriented towards long text scenarios (maximum 200,000 characters), supporting specified timbre and synthesis parameters such as speaking rate, volume, pitch, sampling rate, and output format. Speech synthesis is an asynchronous task, and audio results are generated upon completion.
 * @method Models\TextToSpeechSyncResponse TextToSpeechSync(Models\TextToSpeechSyncRequest $req) Initiate a speech synthesis task to convert text into speech.
 * @method Models\UpdateAigcApiTokenResponse UpdateAigcApiToken(Models\UpdateAigcApiTokenRequest $req) This API is used to create a Token for AIGC API calls. Data sync may delay after creation. It can be queried or deleted after about 30 seconds.
 * @method Models\UpdateVoiceResponse UpdateVoice(Models\UpdateVoiceRequest $req) This API is used to update the profile of a voice by voice ID, including its name, description, gender, age, language, tags, and scenarios, and returns the complete voice information after the update. Only voices under this account can be updated. System preset voices do not support update.

Note: Newly designed or cloned voice types cannot be updated before activation. They are activated only after the newly created voice type is used for TTS once.
 * @method Models\VerifyDomainRecordResponse VerifyDomainRecord(Models\VerifyDomainRecordRequest $req) This API is used to verify domain name resolution values.
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
