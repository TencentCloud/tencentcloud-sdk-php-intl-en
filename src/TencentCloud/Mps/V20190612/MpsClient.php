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

namespace TencentCloud\Mps\V20190612;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mps\V20190612\Models as Models;

/**
 * @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) This API is used to create a custom content analysis template. Up to 50 templates can be created.
 * @method Models\CreateAIRecognitionTemplateResponse CreateAIRecognitionTemplate(Models\CreateAIRecognitionTemplateRequest $req) This API is used to create a custom content recognition template. Up to 50 templates can be created.
 * @method Models\CreateAdaptiveDynamicStreamingTemplateResponse CreateAdaptiveDynamicStreamingTemplate(Models\CreateAdaptiveDynamicStreamingTemplateRequest $req) This API is used to create an adaptive bitrate streaming template. Up up to 100 such templates can be created.
 * @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) This API is used to create a custom animated image generating template. Up to 16 templates can be created.
 * @method Models\CreateAsrHotwordsResponse CreateAsrHotwords(Models\CreateAsrHotwordsRequest $req) This API is used to create a smart subtitle hotword lexicon.
 * @method Models\CreateContentReviewTemplateResponse CreateContentReviewTemplate(Models\CreateContentReviewTemplateRequest $req) This API is used to create a custom content moderation template. Up to 50 templates can be created in total.
 * @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) This API is used to create a custom image sprite generating template. Up to 16 templates can be created.
 * @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) This API is used to create a live recording template.
 * @method Models\CreatePersonSampleResponse CreatePersonSample(Models\CreatePersonSampleRequest $req) This API is used to create image samples for video processing operations such as content recognition and inappropriate information detection with the help of technologies such as facial feature positioning.
 * @method Models\CreateQualityControlTemplateResponse CreateQualityControlTemplate(Models\CreateQualityControlTemplateRequest $req) This API is used to create a media quality inspection template. Up to 50 templates can be created.
 * @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) This API is used to create a custom sampled screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateScheduleResponse CreateSchedule(Models\CreateScheduleRequest $req) This API is used to create a scheme for media files uploaded to a specified COS bucket. A scheme may include the following tasks:
1. Video transcoding (with watermark)
2. Animated screenshot generating
3. Time point screencapturing
4. Sampled screencapturing
5. Image sprite generating
6. Adaptive bitrate streaming
7. Intelligent content moderation (detection of pornographic and sensitive content)
8. Intelligent content analysis (labeling, categorization, thumbnail generation, labeling by frame)
9. Intelligent content recognition (face, full text, text keyword, full speech, and speech keyword)

Note: A scheme is disabled upon creation. You need to manually enable it.
 * @method Models\CreateSmartSubtitleTemplateResponse CreateSmartSubtitleTemplate(Models\CreateSmartSubtitleTemplateRequest $req) This API is used to create a custom smart subtitle template.
 * @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) This API is used to create a custom time point screencapturing template. Up to 16 templates can be created.
 * @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) This API is used to create a custom transcoding template. Up to 1,000 templates can be created.
 * @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) This API is used to create a custom watermarking template. Up to 1,000 templates can be created.
 * @method Models\CreateWordSamplesResponse CreateWordSamples(Models\CreateWordSamplesRequest $req) This API is used to create keyword samples in batches for video processing operations such as content recognition and inappropriate information detection with the help of the OCR and ASR technologies.
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) This API is used to create a workflow for media files uploaded to a specified COS bucket. A workflow may include the following tasks:
1. Video transcoding (with watermark)
2. Animated image generating
3. Time point screencapturing
4. Sampled screencapturing
5. Image sprite generating
6. Adaptive bitrate streaming
7. Intelligent content moderation (detection of pornographic and sensitive content)
8. Intelligent content analysis (labeling, categorization, thumbnail generation, frame-specific labeling)
9. Intelligent content recognition (face, full text, text keyword, full speech, and speech keyword)

Note: A workflow is disabled upon creation. You need to manually enable it.
 * @method Models\DeleteAIAnalysisTemplateResponse DeleteAIAnalysisTemplate(Models\DeleteAIAnalysisTemplateRequest $req) This API is used to delete a custom content analysis template.

Note: templates with an ID below 10000 are preset and cannot be deleted.
 * @method Models\DeleteAIRecognitionTemplateResponse DeleteAIRecognitionTemplate(Models\DeleteAIRecognitionTemplateRequest $req) This API is used to delete a custom content recognition template.
 * @method Models\DeleteAdaptiveDynamicStreamingTemplateResponse DeleteAdaptiveDynamicStreamingTemplate(Models\DeleteAdaptiveDynamicStreamingTemplateRequest $req) This API is used to delete an adaptive bitrate streaming template.
 * @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) This API is used to delete a custom animated image generating template.
 * @method Models\DeleteAsrHotwordsResponse DeleteAsrHotwords(Models\DeleteAsrHotwordsRequest $req) This API is used to delete a smart subtitle hotword lexicon.
 * @method Models\DeleteContentReviewTemplateResponse DeleteContentReviewTemplate(Models\DeleteContentReviewTemplateRequest $req) This API is used to delete a custom content moderation template.
 * @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) This API is used to delete an image sprite generating template.
 * @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) This API is used to delete a live recording template.
 * @method Models\DeletePersonSampleResponse DeletePersonSample(Models\DeletePersonSampleRequest $req) This API is used to delete image samples by image ID.
 * @method Models\DeleteQualityControlTemplateResponse DeleteQualityControlTemplate(Models\DeleteQualityControlTemplateRequest $req) This API is used to delete a media quality inspection template.
 * @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) This API is used to delete a custom sampled screencapturing template.
 * @method Models\DeleteScheduleResponse DeleteSchedule(Models\DeleteScheduleRequest $req) This API is used to delete a scheme.
 * @method Models\DeleteSmartSubtitleTemplateResponse DeleteSmartSubtitleTemplate(Models\DeleteSmartSubtitleTemplateRequest $req) This API is used to delete a user-defined smart subtitle template.
 * @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) This API is used to delete a custom time point screencapturing template.
 * @method Models\DeleteTranscodeTemplateResponse DeleteTranscodeTemplate(Models\DeleteTranscodeTemplateRequest $req) This API is used to delete a custom transcoding template.
 * @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) This API is used to delete a custom watermarking template.
 * @method Models\DeleteWordSamplesResponse DeleteWordSamples(Models\DeleteWordSamplesRequest $req) This API is used to delete keyword samples in batches.
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) This API is used to delete a workflow. An enabled workflow must be disabled before it can be deleted.
 * @method Models\DescribeAIAnalysisTemplatesResponse DescribeAIAnalysisTemplates(Models\DescribeAIAnalysisTemplatesRequest $req) This API is used to get the list of content analysis templates based on unique template ID. The returned result includes all eligible custom and preset video content analysis templates.
 * @method Models\DescribeAIRecognitionTemplatesResponse DescribeAIRecognitionTemplates(Models\DescribeAIRecognitionTemplatesRequest $req) This API is used to get the list of content recognition templates based on unique template ID. The return result includes all eligible custom and preset content recognition templates.
 * @method Models\DescribeAdaptiveDynamicStreamingTemplatesResponse DescribeAdaptiveDynamicStreamingTemplates(Models\DescribeAdaptiveDynamicStreamingTemplatesRequest $req) This API is used to query the list of adaptive bitrate streaming templates and supports paginated queries by filters.
 * @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) This API is used to query the list of animated image generating templates and supports paged queries by filters.
 * @method Models\DescribeAsrHotwordsResponse DescribeAsrHotwords(Models\DescribeAsrHotwordsRequest $req) This API is used to query a smart subtitle hotword lexicon.
 * @method Models\DescribeAsrHotwordsListResponse DescribeAsrHotwordsList(Models\DescribeAsrHotwordsListRequest $req) This API is used to obtain the hotword lexicon list.
 * @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) This API is used to query content moderation templates by template ID. Both custom and preset templates that match the template IDs passed in will be returned.
 * @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) This API is used to query the list of image sprite generating templates and supports paged queries by filters.
 * @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) This API is used to get a live recording template.
 * @method Models\DescribeMediaMetaDataResponse DescribeMediaMetaData(Models\DescribeMediaMetaDataRequest $req) This API is used to get the metadata of media, such as video image width/height, codec, length, and frame rate.
 * @method Models\DescribePersonSamplesResponse DescribePersonSamples(Models\DescribePersonSamplesRequest $req) This API is used to query the information of image samples. It supports paginated queries by image ID, name, and tag.
 * @method Models\DescribeQualityControlTemplatesResponse DescribeQualityControlTemplates(Models\DescribeQualityControlTemplatesRequest $req) This API is used to query custom media quality inspection templates, supporting paged queries by conditions.
 * @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) This API is used to query the list of sampled screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeSchedulesResponse DescribeSchedules(Models\DescribeSchedulesRequest $req) This API is used to query a scheme.
 * @method Models\DescribeSmartSubtitleTemplatesResponse DescribeSmartSubtitleTemplates(Models\DescribeSmartSubtitleTemplatesRequest $req) This API is used to obtain the list of smart subtitle templates based on template unique identifier. The returned result includes all matching user-defined smart subtitle templates and system preset smart subtitle templates.
 * @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) This API is used to query the list of time point screencapturing templates and supports paged queries by filters.
 * @method Models\DescribeStreamLinkSecurityGroupResponse DescribeStreamLinkSecurityGroup(Models\DescribeStreamLinkSecurityGroupRequest $req) This API is used to query a security group.
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) This API is used to query the details of execution status and result of a task submitted in the last 3 days by task ID.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * This API is used to query tasks.
* If the data is large, one API call may not be able to obtain all the tasks in the query. You can use the `ScrollToken` parameter to query tasks with multiple calls.
* Only tasks in the last seven days (168 hours) can be queried.
 * @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) This API is used to get the list of transcoding templates based on unique template ID. The return result includes all eligible custom and [preset transcoding templates](https://intl.cloud.tencent.com/document/product/266/33476?from_cn_redirect=1#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
 * @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) This API is used to query custom watermarking templates and supports paged queries by filters.
 * @method Models\DescribeWordSamplesResponse DescribeWordSamples(Models\DescribeWordSamplesRequest $req) This API is used to perform paged queries of keyword sample information by use case, keyword, and tag.
 * @method Models\DescribeWorkflowsResponse DescribeWorkflows(Models\DescribeWorkflowsRequest $req) This API is used to get the list of workflow details by workflow ID.
 * @method Models\DisableScheduleResponse DisableSchedule(Models\DisableScheduleRequest $req) This API is used to disable a scheme.
 * @method Models\DisableWorkflowResponse DisableWorkflow(Models\DisableWorkflowRequest $req) This API is used to disable a workflow.
 * @method Models\EditMediaResponse EditMedia(Models\EditMediaRequest $req) This API is used to edit a video to generate a new one. Editing features include:
 

1. **Editing task**: simple video editing, such as clipping and splicing.
1) Edit a file to generate a new video.
2) Splice multiple files to generate a new video.
3) Edit multiple files and then splice them to generate a new video.

2. **Compositing task**: Generate a new video by describing information through APIs.
1) Multi-track (video, audio, and subtitles) and multi-type elements (video, image, audio, text, and empty).
2) Image level: mapping, zoom in/out, arbitrary rotation, mirroring, and more.
3) Audio level: volume control, fade in/out, mixing, and more.
4) Video level: transition, playback speed adjustment, splicing, clipping, subtitles, picture-in-picture, audio-video separation, entrance and exit animations, and more.
 * @method Models\EnableScheduleResponse EnableSchedule(Models\EnableScheduleRequest $req) This API is used to enable a scheme.
 * @method Models\EnableWorkflowResponse EnableWorkflow(Models\EnableWorkflowRequest $req) This API is used to enable a workflow.
 * @method Models\ExecuteFunctionResponse ExecuteFunction(Models\ExecuteFunctionRequest $req) This API is reserved for special circumstances. Do not use it unless you are directed to use it by technical support.
 * @method Models\ManageTaskResponse ManageTask(Models\ManageTaskRequest $req) This API is used to manage initiated tasks.
 * @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) This API is used to modify a custom content analysis template.

Note: templates with an ID below 10000 are preset and cannot be modified.
 * @method Models\ModifyAIRecognitionTemplateResponse ModifyAIRecognitionTemplate(Models\ModifyAIRecognitionTemplateRequest $req) This API is used to modify a custom content recognition template.
 * @method Models\ModifyAdaptiveDynamicStreamingTemplateResponse ModifyAdaptiveDynamicStreamingTemplate(Models\ModifyAdaptiveDynamicStreamingTemplateRequest $req) This API is used to modify an adaptive bitrate streaming template.
 * @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) This API is used to modify a custom animated image generating template.
 * @method Models\ModifyAsrHotwordsResponse ModifyAsrHotwords(Models\ModifyAsrHotwordsRequest $req) This API is used to update a smart subtitle hotword lexicon.
 * @method Models\ModifyContentReviewTemplateResponse ModifyContentReviewTemplate(Models\ModifyContentReviewTemplateRequest $req) This API is used to modify a custom content moderation template.
 * @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) This API is used to modify a custom image sprite generating template.
 * @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) This API is used to modify a live recording template.
 * @method Models\ModifyPersonSampleResponse ModifyPersonSample(Models\ModifyPersonSampleRequest $req) This API is used to modify image samples by image ID. You can use it to modify the name and description of an image sample and add/delete/reset facial features or tags. There must be at least one image left after the deletion of facial features; otherwise, please reset instead of delete the facial features.
 * @method Models\ModifyQualityControlTemplateResponse ModifyQualityControlTemplate(Models\ModifyQualityControlTemplateRequest $req) This API is used to modify a media quality inspection template.
 * @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) This API is used to modify a custom sampled screencapturing template.
 * @method Models\ModifyScheduleResponse ModifySchedule(Models\ModifyScheduleRequest $req) This API is used to modify a scheme.
 * @method Models\ModifySmartSubtitleTemplateResponse ModifySmartSubtitleTemplate(Models\ModifySmartSubtitleTemplateRequest $req) This API is used to modify a user-defined smart subtitle template.
 * @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) This API is used to modify a custom time point screencapturing template.
 * @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) This API is used to modify a custom transcoding template.
 * @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) This API is used to modify a custom watermarking template. The watermark type cannot be modified.
 * @method Models\ModifyWordSampleResponse ModifyWordSample(Models\ModifyWordSampleRequest $req) This API is used to modify the use case and tag of a keyword. The keyword itself cannot be modified, but you can delete it and create another one if needed.
 * @method Models\ParseLiveStreamProcessNotificationResponse ParseLiveStreamProcessNotification(Models\ParseLiveStreamProcessNotificationRequest $req) This API is used to parse the content of an MPS live stream processing event notification from the `msgBody` field in the message received from CMQ.
Instead of initiating a video processing task, this API is used to help generate SDKs for various programming languages. You can parse the event notification based on the analytic function of the SDKs.
 * @method Models\ParseNotificationResponse ParseNotification(Models\ParseNotificationRequest $req) This API is used to parse the content of an MPS event notification from the `msgBody` field in the message received from CMQ.
Instead of initiating a video processing task, this API is used to help generate SDKs for various programming languages. You can parse the event notification based on the analytic function of the SDKs.
 * @method Models\ProcessImageResponse ProcessImage(Models\ProcessImageRequest $req) This API is used to initiate image processing. Its features include:
1. Format conversion;
2. Image enhancement;
 * @method Models\ProcessLiveStreamResponse ProcessLiveStream(Models\ProcessLiveStreamRequest $req) This API is used to initiate live stream processing tasks. Such tasks may include the following:

* Intelligent content moderation (detection of pornographic content in images and audio, detection of sensitive information)
* Intelligent content recognition (face, full text, text keyword, full speech, speech keyword, real-time speech translation, object recognition, game event tracking)
* Intelligent content analysis (real-time news splitting)
* Quality control, including recognizing live stream format, checking audio/video content for flickering, blur, low light, overexposure, black bars, white bars, black screen, white screen, noise, pixelation, QR code, etc., and no-reference scoring.
* Recording

HTTP callbacks are supported for live stream processing events. Notifications can also be written in real time to and read from a CMQ queue. The output files of processing tasks are saved to the storage you specify.
 * @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) This API is used to initiate a processing task for video URLs or media files in COS. Features include:
1. Video transcoding (standard transcoding, TSC transcoding, and audio/video enhancement).
2. Video-to-GIF conversion.
3. Time point screenshot of videos.
4. Sampled screenshot of videos.
5. Image sprite of videos.
6. Adaptive bitrate stream conversion for videos.
7. Intelligent content moderation (pornography detection and sensitive information detection).
8. Intelligent content analysis (tag, category, cover, frame tag, video splitting, highlight, opening and ending clips, and game tracking).
9. Intelligent content recognition (human face, full text, text keyword, full speech, speech keyword, speech translation, and object).
10. Media quality inspection (live stream format diagnosis, audio and video content detection (jitter, blur, low light, overexposure, black and white edges, black and white screens, screen glitch, noise, mosaic, QR code, and more), and no-reference scoring).

11. Smart subtitle (full speech, speech hotword, and speech translation).
 * @method Models\ResetWorkflowResponse ResetWorkflow(Models\ResetWorkflowRequest $req) This API is used to reset an existing workflow that is disabled.
 */

class MpsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mps.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mps";

    /**
     * @var string
     */
    protected $version = "2019-06-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("mps")."\\"."V20190612\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
