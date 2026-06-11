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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail response structure.
 *
 * @method string getTaskType() Obtain <p>Task type. Valid values: <li>Procedure: Video processing task;</li><li>EditMedia: Video editing task;</li><li>SplitMedia: Video splitting task;</li><li>ComposeMedia: Media file creation task;</li><li>WechatPublish: WeChat publishing task;</li><li>WechatMiniProgramPublish: WeChat Mini Program Video Publishing Task;</li><li>PullUpload: Pull and upload media files task;</li><li>FastClipMedia: Quick trimming task;</li><li>RemoveWatermarkTask: Intelligent watermark removal task;</li><li>DescribeFileAttributesTask: File attribute retrieval task;</li><li>RebuildMedia: Audio and video quality regeneration task (not recommended);</li><li>ReviewAudioVideo: Audio/video moderation task;</li><li>ExtractTraceWatermark: Source watermark extraction task;</li><li>ExtractCopyRightWatermark: Copyright Watermark Extraction Task;</li><li>QualityInspect: Audio and video quality inspection task;</li><li>QualityEnhance: Audio and video quality regeneration task;</li><li>ComplexAdaptiveDynamicStreaming: Complex adaptive bitstream task;</li><li>ProcessMediaByMPS: MPS video processing task;</li><li>AigcImageTask: AIGC image generation task;</li><li>SceneAigcImageTask: Scenario-based AIGC image generation task;</li><li>AigcVideoTask: AIGC video generation task;</li><li>ImportMediaKnowledge: Import media knowledge task.</li><li>SceneAigcVideoTask: Scenario-based AIGC video generation task;</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>CreateAigcAdvancedCustomElement: Create custom subject task</li><li>CreateAigcCustomVoice: Create custom voice type task</li><li>CreateAigcSubject: Create subject task</li><li>AigcVideoRedrawTask: AIGC video redraw task</li><li>CreateAigcAudioClone: AIGC voice clone task</li><li>DescribeAigcFaceInfoAsync: Asynchronously fetch AIGC face information task</li></p>
 * @method void setTaskType(string $TaskType) Set <p>Task type. Valid values: <li>Procedure: Video processing task;</li><li>EditMedia: Video editing task;</li><li>SplitMedia: Video splitting task;</li><li>ComposeMedia: Media file creation task;</li><li>WechatPublish: WeChat publishing task;</li><li>WechatMiniProgramPublish: WeChat Mini Program Video Publishing Task;</li><li>PullUpload: Pull and upload media files task;</li><li>FastClipMedia: Quick trimming task;</li><li>RemoveWatermarkTask: Intelligent watermark removal task;</li><li>DescribeFileAttributesTask: File attribute retrieval task;</li><li>RebuildMedia: Audio and video quality regeneration task (not recommended);</li><li>ReviewAudioVideo: Audio/video moderation task;</li><li>ExtractTraceWatermark: Source watermark extraction task;</li><li>ExtractCopyRightWatermark: Copyright Watermark Extraction Task;</li><li>QualityInspect: Audio and video quality inspection task;</li><li>QualityEnhance: Audio and video quality regeneration task;</li><li>ComplexAdaptiveDynamicStreaming: Complex adaptive bitstream task;</li><li>ProcessMediaByMPS: MPS video processing task;</li><li>AigcImageTask: AIGC image generation task;</li><li>SceneAigcImageTask: Scenario-based AIGC image generation task;</li><li>AigcVideoTask: AIGC video generation task;</li><li>ImportMediaKnowledge: Import media knowledge task.</li><li>SceneAigcVideoTask: Scenario-based AIGC video generation task;</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>CreateAigcAdvancedCustomElement: Create custom subject task</li><li>CreateAigcCustomVoice: Create custom voice type task</li><li>CreateAigcSubject: Create subject task</li><li>AigcVideoRedrawTask: AIGC video redraw task</li><li>CreateAigcAudioClone: AIGC voice clone task</li><li>DescribeAigcFaceInfoAsync: Asynchronously fetch AIGC face information task</li></p>
 * @method string getStatus() Obtain <p>Task status. Value:</p><li>WAITING: Waiting;</li><li>PROCESSING: Processing;</li><li>FINISH: Completed;</li><li>ABORTED: Terminated.</li>
 * @method void setStatus(string $Status) Set <p>Task status. Value:</p><li>WAITING: Waiting;</li><li>PROCESSING: Processing;</li><li>FINISH: Completed;</li><li>ABORTED: Terminated.</li>
 * @method string getCreateTime() Obtain <p>Task creation time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getBeginProcessTime() Obtain <p>Task execution start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) Set <p>Task execution start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method string getFinishTime() Obtain <p>Task execution completion time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Task execution completion time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method ProcedureTask getProcedureTask() Obtain <p>Video processing task information. This field has a value only when TaskType is Procedure.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) Set <p>Video processing task information. This field has a value only when TaskType is Procedure.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaTask() Obtain <p>Video editing task information. This field has a value only when TaskType is EditMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) Set <p>Video editing task information. This field has a value only when TaskType is EditMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatPublishTask getWechatPublishTask() Obtain <p>WeChat publishing task information. This field has a value only when TaskType is WechatPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) Set <p>WeChat publishing task information. This field has a value only when TaskType is WechatPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaTask() Obtain <p>Media file production task information. This field has a value only when TaskType is ComposeMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) Set <p>Media file production task information. This field has a value only when TaskType is ComposeMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SplitMediaTask getSplitMediaTask() Obtain <p>Video splitting task information. This field has a value only when TaskType is SplitMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitMediaTask(SplitMediaTask $SplitMediaTask) Set <p>Video splitting task information. This field has a value only when TaskType is SplitMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() Obtain <p>WeChat Mini Program publishing task information. This field has a value only when TaskType is WechatMiniProgramPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) Set <p>WeChat Mini Program publishing task information. This field has a value only when TaskType is WechatMiniProgramPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PullUploadTask getPullUploadTask() Obtain <p>Pull and upload media files task information. This field has a value only when TaskType is PullUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) Set <p>Pull and upload media files task information. This field has a value only when TaskType is PullUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TranscodeTask2017 getTranscodeTask() Obtain <p>Video transcoding task information. This field has a value only when TaskType is Transcode.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) Set <p>Video transcoding task information. This field has a value only when TaskType is Transcode.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ConcatTask2017 getConcatTask() Obtain <p>Video splicing task information. This field has a value only when TaskType is Concat.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) Set <p>Video splicing task information. This field has a value only when TaskType is Concat.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClipTask2017 getClipTask() Obtain <p>Video editing task information. This field has a value only when TaskType is Clip.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClipTask(ClipTask2017 $ClipTask) Set <p>Video editing task information. This field has a value only when TaskType is Clip.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() Obtain <p>Capturing sprite image task information. This field has a value only when TaskType is ImageSprite.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) Set <p>Capturing sprite image task information. This field has a value only when TaskType is ImageSprite.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() Obtain <p>Video screenshot at specified time task information. This field has a value only when TaskType is SnapshotByTimeOffset.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) Set <p>Video screenshot at specified time task information. This field has a value only when TaskType is SnapshotByTimeOffset.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkTask() Obtain <p>Intelligent watermark removal task information. This field has a value only when TaskType is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoveWatermarkTask(RemoveWatermarkTask $RemoveWatermarkTask) Set <p>Intelligent watermark removal task information. This field has a value only when TaskType is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTask getRebuildMediaTask() Obtain <p>Audio and video quality revival task information. This field has a value only when TaskType is RebuildMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildMediaTask(RebuildMediaTask $RebuildMediaTask) Set <p>Audio and video quality revival task information. This field has a value only when TaskType is RebuildMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkTask() Obtain <p>Information about the traceability watermark extraction task. This field has a value only when TaskType is ExtractTraceWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractTraceWatermarkTask(ExtractTraceWatermarkTask $ExtractTraceWatermarkTask) Set <p>Information about the traceability watermark extraction task. This field has a value only when TaskType is ExtractTraceWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkTask() Obtain <p>Information about the copyright watermark extraction task. This field has a value only when TaskType is ExtractCopyRightWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractCopyRightWatermarkTask(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask) Set <p>Information about the copyright watermark extraction task. This field has a value only when TaskType is ExtractCopyRightWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReviewAudioVideoTask getReviewAudioVideoTask() Obtain <p>Audio/video moderation task info. This field has a value only when TaskType is ReviewAudioVideo.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReviewAudioVideoTask(ReviewAudioVideoTask $ReviewAudioVideoTask) Set <p>Audio/video moderation task info. This field has a value only when TaskType is ReviewAudioVideo.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateTask() Obtain <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReduceMediaBitrateTask(ReduceMediaBitrateTask $ReduceMediaBitrateTask) Set <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeFileAttributesTask getDescribeFileAttributesTask() Obtain <p>File attribute acquisition task information. This field has a value only when TaskType is DescribeFileAttributes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribeFileAttributesTask(DescribeFileAttributesTask $DescribeFileAttributesTask) Set <p>File attribute acquisition task information. This field has a value only when TaskType is DescribeFileAttributes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityInspectTask getQualityInspectTask() Obtain <p>Audio and video quality detection task information. This field has a value only when TaskType is QualityInspect.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityInspectTask(QualityInspectTask $QualityInspectTask) Set <p>Audio and video quality detection task information. This field has a value only when TaskType is QualityInspect.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityEnhanceTask getQualityEnhanceTask() Obtain <p>Audio and video quality revival task information. This field has a value only when TaskType is QualityEnhance.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityEnhanceTask(QualityEnhanceTask $QualityEnhanceTask) Set <p>Audio and video quality revival task information. This field has a value only when TaskType is QualityEnhance.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingTask() Obtain <p>Complex adaptive bitrate task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComplexAdaptiveDynamicStreamingTask(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask) Set <p>Complex adaptive bitrate task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessMediaByMPS getProcessMediaByMPSTask() Obtain <p>MPS video processing task information. This field has a value only when TaskType is ProcessMediaByMPS.</p>
 * @method void setProcessMediaByMPSTask(ProcessMediaByMPS $ProcessMediaByMPSTask) Set <p>MPS video processing task information. This field has a value only when TaskType is ProcessMediaByMPS.</p>
 * @method AigcImageTask getAigcImageTask() Obtain <p>AIGC image generation task info. This field has a value only when TaskType is AigcImageTask.</p>
 * @method void setAigcImageTask(AigcImageTask $AigcImageTask) Set <p>AIGC image generation task info. This field has a value only when TaskType is AigcImageTask.</p>
 * @method AigcVideoTask getAigcVideoTask() Obtain <p>AIGC video task information. This field has a value only when TaskType is AigcVideoTask.</p>
 * @method void setAigcVideoTask(AigcVideoTask $AigcVideoTask) Set <p>AIGC video task information. This field has a value only when TaskType is AigcVideoTask.</p>
 * @method ImportMediaKnowledgeTask getImportMediaKnowledge() Obtain <p>Media import knowledge base task info. This field has a value only when TaskType is ImportMediaKnowledge.</p>
 * @method void setImportMediaKnowledge(ImportMediaKnowledgeTask $ImportMediaKnowledge) Set <p>Media import knowledge base task info. This field has a value only when TaskType is ImportMediaKnowledge.</p>
 * @method SceneAigcImageTask getSceneAigcImageTask() Obtain <p>Scenario-based AIGC image generation task info. This field has a value only when TaskType is SceneAigcImageTask.</p>
 * @method void setSceneAigcImageTask(SceneAigcImageTask $SceneAigcImageTask) Set <p>Scenario-based AIGC image generation task info. This field has a value only when TaskType is SceneAigcImageTask.</p>
 * @method SceneAigcVideoTask getSceneAigcVideoTask() Obtain <p>Scenario-based AIGC video task info. This field has a value only when TaskType is SceneAigcVideoTask.</p>
 * @method void setSceneAigcVideoTask(SceneAigcVideoTask $SceneAigcVideoTask) Set <p>Scenario-based AIGC video task info. This field has a value only when TaskType is SceneAigcVideoTask.</p>
 * @method ProcessImageAsync getProcessImageAsyncTask() Obtain <p>Asynchronous image processing task information. This field has a value only when TaskType is ProcessImageAsync.</p>
 * @method void setProcessImageAsyncTask(ProcessImageAsync $ProcessImageAsyncTask) Set <p>Asynchronous image processing task information. This field has a value only when TaskType is ProcessImageAsync.</p>
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkTask() Obtain <p>Extract digital watermark task info. This field has a value only when TaskType is ExtractBlindWatermark.</p>
 * @method void setExtractBlindWatermarkTask(ExtractBlindWatermarkTask $ExtractBlindWatermarkTask) Set <p>Extract digital watermark task info. This field has a value only when TaskType is ExtractBlindWatermark.</p>
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementTask() Obtain <p>Create custom entity information. This field has a value only when TaskType is CreateAigcAdvancedCustomElement.</p>
 * @method void setCreateAigcAdvancedCustomElementTask(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask) Set <p>Create custom entity information. This field has a value only when TaskType is CreateAigcAdvancedCustomElement.</p>
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceTask() Obtain <p>Create custom tone information. This field has a value only when TaskType is CreateAigcCustomVoice.</p>
 * @method void setCreateAigcCustomVoiceTask(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask) Set <p>Create custom tone information. This field has a value only when TaskType is CreateAigcCustomVoice.</p>
 * @method CreateAigcSubjectTask getCreateAigcSubjectTask() Obtain <p>Create entity information. This field has a value only when TaskType is CreateAigcSubject.</p>
 * @method void setCreateAigcSubjectTask(CreateAigcSubjectTask $CreateAigcSubjectTask) Set <p>Create entity information. This field has a value only when TaskType is CreateAigcSubject.</p>
 * @method AigcVideoRedrawTask getAigcVideoRedrawTask() Obtain <p>AIGC video redraw info, valid only when TaskType is AigcVideoRedrawTask and this field has a value.</p>
 * @method void setAigcVideoRedrawTask(AigcVideoRedrawTask $AigcVideoRedrawTask) Set <p>AIGC video redraw info, valid only when TaskType is AigcVideoRedrawTask and this field has a value.</p>
 * @method AigcAudioTask getAigcAudioTask() Obtain <p>AIGC sound effect information. This field has a value only when TaskType is AigcAudioTask.</p>
 * @method void setAigcAudioTask(AigcAudioTask $AigcAudioTask) Set <p>AIGC sound effect information. This field has a value only when TaskType is AigcAudioTask.</p>
 * @method CreateAigcAudioCloneTask getCreateAigcAudioCloneTask() Obtain <p>AIGC voice clone info. This field has a value only when TaskType is CreateAigcAudioClone.</p>
 * @method void setCreateAigcAudioCloneTask(CreateAigcAudioCloneTask $CreateAigcAudioCloneTask) Set <p>AIGC voice clone info. This field has a value only when TaskType is CreateAigcAudioClone.</p>
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncTask() Obtain <p>Asynchronously fetch AIGC face information. This field has a value only when TaskType is DescribeAigcFaceInfoAsync.</p>
 * @method void setDescribeAigcFaceInfoAsyncTask(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncTask) Set <p>Asynchronously fetch AIGC face information. This field has a value only when TaskType is DescribeAigcFaceInfoAsync.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Task type. Valid values: <li>Procedure: Video processing task;</li><li>EditMedia: Video editing task;</li><li>SplitMedia: Video splitting task;</li><li>ComposeMedia: Media file creation task;</li><li>WechatPublish: WeChat publishing task;</li><li>WechatMiniProgramPublish: WeChat Mini Program Video Publishing Task;</li><li>PullUpload: Pull and upload media files task;</li><li>FastClipMedia: Quick trimming task;</li><li>RemoveWatermarkTask: Intelligent watermark removal task;</li><li>DescribeFileAttributesTask: File attribute retrieval task;</li><li>RebuildMedia: Audio and video quality regeneration task (not recommended);</li><li>ReviewAudioVideo: Audio/video moderation task;</li><li>ExtractTraceWatermark: Source watermark extraction task;</li><li>ExtractCopyRightWatermark: Copyright Watermark Extraction Task;</li><li>QualityInspect: Audio and video quality inspection task;</li><li>QualityEnhance: Audio and video quality regeneration task;</li><li>ComplexAdaptiveDynamicStreaming: Complex adaptive bitstream task;</li><li>ProcessMediaByMPS: MPS video processing task;</li><li>AigcImageTask: AIGC image generation task;</li><li>SceneAigcImageTask: Scenario-based AIGC image generation task;</li><li>AigcVideoTask: AIGC video generation task;</li><li>ImportMediaKnowledge: Import media knowledge task.</li><li>SceneAigcVideoTask: Scenario-based AIGC video generation task;</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>CreateAigcAdvancedCustomElement: Create custom subject task</li><li>CreateAigcCustomVoice: Create custom voice type task</li><li>CreateAigcSubject: Create subject task</li><li>AigcVideoRedrawTask: AIGC video redraw task</li><li>CreateAigcAudioClone: AIGC voice clone task</li><li>DescribeAigcFaceInfoAsync: Asynchronously fetch AIGC face information task</li></p>
     */
    public $TaskType;

    /**
     * @var string <p>Task status. Value:</p><li>WAITING: Waiting;</li><li>PROCESSING: Processing;</li><li>FINISH: Completed;</li><li>ABORTED: Terminated.</li>
     */
    public $Status;

    /**
     * @var string <p>Task creation time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Task execution start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>Task execution completion time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     */
    public $FinishTime;

    /**
     * @var ProcedureTask <p>Video processing task information. This field has a value only when TaskType is Procedure.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask <p>Video editing task information. This field has a value only when TaskType is EditMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask <p>WeChat publishing task information. This field has a value only when TaskType is WechatPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask <p>Media file production task information. This field has a value only when TaskType is ComposeMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComposeMediaTask;

    /**
     * @var SplitMediaTask <p>Video splitting task information. This field has a value only when TaskType is SplitMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SplitMediaTask;

    /**
     * @var WechatMiniProgramPublishTask <p>WeChat Mini Program publishing task information. This field has a value only when TaskType is WechatMiniProgramPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var PullUploadTask <p>Pull and upload media files task information. This field has a value only when TaskType is PullUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 <p>Video transcoding task information. This field has a value only when TaskType is Transcode.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var ConcatTask2017 <p>Video splicing task information. This field has a value only when TaskType is Concat.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 <p>Video editing task information. This field has a value only when TaskType is Clip.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 <p>Capturing sprite image task information. This field has a value only when TaskType is ImageSprite.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateImageSpriteTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 <p>Video screenshot at specified time task information. This field has a value only when TaskType is SnapshotByTimeOffset.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var RemoveWatermarkTask <p>Intelligent watermark removal task information. This field has a value only when TaskType is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoveWatermarkTask;

    /**
     * @var RebuildMediaTask <p>Audio and video quality revival task information. This field has a value only when TaskType is RebuildMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildMediaTask;

    /**
     * @var ExtractTraceWatermarkTask <p>Information about the traceability watermark extraction task. This field has a value only when TaskType is ExtractTraceWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractTraceWatermarkTask;

    /**
     * @var ExtractCopyRightWatermarkTask <p>Information about the copyright watermark extraction task. This field has a value only when TaskType is ExtractCopyRightWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractCopyRightWatermarkTask;

    /**
     * @var ReviewAudioVideoTask <p>Audio/video moderation task info. This field has a value only when TaskType is ReviewAudioVideo.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewAudioVideoTask;

    /**
     * @var ReduceMediaBitrateTask <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReduceMediaBitrateTask;

    /**
     * @var DescribeFileAttributesTask <p>File attribute acquisition task information. This field has a value only when TaskType is DescribeFileAttributes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DescribeFileAttributesTask;

    /**
     * @var QualityInspectTask <p>Audio and video quality detection task information. This field has a value only when TaskType is QualityInspect.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityInspectTask;

    /**
     * @var QualityEnhanceTask <p>Audio and video quality revival task information. This field has a value only when TaskType is QualityEnhance.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityEnhanceTask;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask <p>Complex adaptive bitrate task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComplexAdaptiveDynamicStreamingTask;

    /**
     * @var ProcessMediaByMPS <p>MPS video processing task information. This field has a value only when TaskType is ProcessMediaByMPS.</p>
     */
    public $ProcessMediaByMPSTask;

    /**
     * @var AigcImageTask <p>AIGC image generation task info. This field has a value only when TaskType is AigcImageTask.</p>
     */
    public $AigcImageTask;

    /**
     * @var AigcVideoTask <p>AIGC video task information. This field has a value only when TaskType is AigcVideoTask.</p>
     */
    public $AigcVideoTask;

    /**
     * @var ImportMediaKnowledgeTask <p>Media import knowledge base task info. This field has a value only when TaskType is ImportMediaKnowledge.</p>
     */
    public $ImportMediaKnowledge;

    /**
     * @var SceneAigcImageTask <p>Scenario-based AIGC image generation task info. This field has a value only when TaskType is SceneAigcImageTask.</p>
     */
    public $SceneAigcImageTask;

    /**
     * @var SceneAigcVideoTask <p>Scenario-based AIGC video task info. This field has a value only when TaskType is SceneAigcVideoTask.</p>
     */
    public $SceneAigcVideoTask;

    /**
     * @var ProcessImageAsync <p>Asynchronous image processing task information. This field has a value only when TaskType is ProcessImageAsync.</p>
     */
    public $ProcessImageAsyncTask;

    /**
     * @var ExtractBlindWatermarkTask <p>Extract digital watermark task info. This field has a value only when TaskType is ExtractBlindWatermark.</p>
     */
    public $ExtractBlindWatermarkTask;

    /**
     * @var CreateAigcAdvancedCustomElementTask <p>Create custom entity information. This field has a value only when TaskType is CreateAigcAdvancedCustomElement.</p>
     */
    public $CreateAigcAdvancedCustomElementTask;

    /**
     * @var CreateAigcCustomVoiceTask <p>Create custom tone information. This field has a value only when TaskType is CreateAigcCustomVoice.</p>
     */
    public $CreateAigcCustomVoiceTask;

    /**
     * @var CreateAigcSubjectTask <p>Create entity information. This field has a value only when TaskType is CreateAigcSubject.</p>
     */
    public $CreateAigcSubjectTask;

    /**
     * @var AigcVideoRedrawTask <p>AIGC video redraw info, valid only when TaskType is AigcVideoRedrawTask and this field has a value.</p>
     */
    public $AigcVideoRedrawTask;

    /**
     * @var AigcAudioTask <p>AIGC sound effect information. This field has a value only when TaskType is AigcAudioTask.</p>
     */
    public $AigcAudioTask;

    /**
     * @var CreateAigcAudioCloneTask <p>AIGC voice clone info. This field has a value only when TaskType is CreateAigcAudioClone.</p>
     */
    public $CreateAigcAudioCloneTask;

    /**
     * @var DescribeAigcFaceInfoAsyncTask <p>Asynchronously fetch AIGC face information. This field has a value only when TaskType is DescribeAigcFaceInfoAsync.</p>
     */
    public $DescribeAigcFaceInfoAsyncTask;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskType <p>Task type. Valid values: <li>Procedure: Video processing task;</li><li>EditMedia: Video editing task;</li><li>SplitMedia: Video splitting task;</li><li>ComposeMedia: Media file creation task;</li><li>WechatPublish: WeChat publishing task;</li><li>WechatMiniProgramPublish: WeChat Mini Program Video Publishing Task;</li><li>PullUpload: Pull and upload media files task;</li><li>FastClipMedia: Quick trimming task;</li><li>RemoveWatermarkTask: Intelligent watermark removal task;</li><li>DescribeFileAttributesTask: File attribute retrieval task;</li><li>RebuildMedia: Audio and video quality regeneration task (not recommended);</li><li>ReviewAudioVideo: Audio/video moderation task;</li><li>ExtractTraceWatermark: Source watermark extraction task;</li><li>ExtractCopyRightWatermark: Copyright Watermark Extraction Task;</li><li>QualityInspect: Audio and video quality inspection task;</li><li>QualityEnhance: Audio and video quality regeneration task;</li><li>ComplexAdaptiveDynamicStreaming: Complex adaptive bitstream task;</li><li>ProcessMediaByMPS: MPS video processing task;</li><li>AigcImageTask: AIGC image generation task;</li><li>SceneAigcImageTask: Scenario-based AIGC image generation task;</li><li>AigcVideoTask: AIGC video generation task;</li><li>ImportMediaKnowledge: Import media knowledge task.</li><li>SceneAigcVideoTask: Scenario-based AIGC video generation task;</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>ExtractBlindWatermark: Digital watermark extraction task.</li><li>CreateAigcAdvancedCustomElement: Create custom subject task</li><li>CreateAigcCustomVoice: Create custom voice type task</li><li>CreateAigcSubject: Create subject task</li><li>AigcVideoRedrawTask: AIGC video redraw task</li><li>CreateAigcAudioClone: AIGC voice clone task</li><li>DescribeAigcFaceInfoAsync: Asynchronously fetch AIGC face information task</li></p>
     * @param string $Status <p>Task status. Value:</p><li>WAITING: Waiting;</li><li>PROCESSING: Processing;</li><li>FINISH: Completed;</li><li>ABORTED: Terminated.</li>
     * @param string $CreateTime <p>Task creation time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $BeginProcessTime <p>Task execution start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     * @param string $FinishTime <p>Task execution completion time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     * @param ProcedureTask $ProcedureTask <p>Video processing task information. This field has a value only when TaskType is Procedure.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaTask <p>Video editing task information. This field has a value only when TaskType is EditMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatPublishTask $WechatPublishTask <p>WeChat publishing task information. This field has a value only when TaskType is WechatPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaTask <p>Media file production task information. This field has a value only when TaskType is ComposeMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SplitMediaTask $SplitMediaTask <p>Video splitting task information. This field has a value only when TaskType is SplitMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask <p>WeChat Mini Program publishing task information. This field has a value only when TaskType is WechatMiniProgramPublish.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PullUploadTask $PullUploadTask <p>Pull and upload media files task information. This field has a value only when TaskType is PullUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTask2017 $TranscodeTask <p>Video transcoding task information. This field has a value only when TaskType is Transcode.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ConcatTask2017 $ConcatTask <p>Video splicing task information. This field has a value only when TaskType is Concat.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClipTask2017 $ClipTask <p>Video editing task information. This field has a value only when TaskType is Clip.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask <p>Capturing sprite image task information. This field has a value only when TaskType is ImageSprite.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask <p>Video screenshot at specified time task information. This field has a value only when TaskType is SnapshotByTimeOffset.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkTask <p>Intelligent watermark removal task information. This field has a value only when TaskType is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTask $RebuildMediaTask <p>Audio and video quality revival task information. This field has a value only when TaskType is RebuildMedia.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkTask <p>Information about the traceability watermark extraction task. This field has a value only when TaskType is ExtractTraceWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask <p>Information about the copyright watermark extraction task. This field has a value only when TaskType is ExtractCopyRightWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReviewAudioVideoTask $ReviewAudioVideoTask <p>Audio/video moderation task info. This field has a value only when TaskType is ReviewAudioVideo.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateTask <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeFileAttributesTask $DescribeFileAttributesTask <p>File attribute acquisition task information. This field has a value only when TaskType is DescribeFileAttributes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityInspectTask $QualityInspectTask <p>Audio and video quality detection task information. This field has a value only when TaskType is QualityInspect.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityEnhanceTask $QualityEnhanceTask <p>Audio and video quality revival task information. This field has a value only when TaskType is QualityEnhance.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask <p>Complex adaptive bitrate task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessMediaByMPS $ProcessMediaByMPSTask <p>MPS video processing task information. This field has a value only when TaskType is ProcessMediaByMPS.</p>
     * @param AigcImageTask $AigcImageTask <p>AIGC image generation task info. This field has a value only when TaskType is AigcImageTask.</p>
     * @param AigcVideoTask $AigcVideoTask <p>AIGC video task information. This field has a value only when TaskType is AigcVideoTask.</p>
     * @param ImportMediaKnowledgeTask $ImportMediaKnowledge <p>Media import knowledge base task info. This field has a value only when TaskType is ImportMediaKnowledge.</p>
     * @param SceneAigcImageTask $SceneAigcImageTask <p>Scenario-based AIGC image generation task info. This field has a value only when TaskType is SceneAigcImageTask.</p>
     * @param SceneAigcVideoTask $SceneAigcVideoTask <p>Scenario-based AIGC video task info. This field has a value only when TaskType is SceneAigcVideoTask.</p>
     * @param ProcessImageAsync $ProcessImageAsyncTask <p>Asynchronous image processing task information. This field has a value only when TaskType is ProcessImageAsync.</p>
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkTask <p>Extract digital watermark task info. This field has a value only when TaskType is ExtractBlindWatermark.</p>
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask <p>Create custom entity information. This field has a value only when TaskType is CreateAigcAdvancedCustomElement.</p>
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask <p>Create custom tone information. This field has a value only when TaskType is CreateAigcCustomVoice.</p>
     * @param CreateAigcSubjectTask $CreateAigcSubjectTask <p>Create entity information. This field has a value only when TaskType is CreateAigcSubject.</p>
     * @param AigcVideoRedrawTask $AigcVideoRedrawTask <p>AIGC video redraw info, valid only when TaskType is AigcVideoRedrawTask and this field has a value.</p>
     * @param AigcAudioTask $AigcAudioTask <p>AIGC sound effect information. This field has a value only when TaskType is AigcAudioTask.</p>
     * @param CreateAigcAudioCloneTask $CreateAigcAudioCloneTask <p>AIGC voice clone info. This field has a value only when TaskType is CreateAigcAudioClone.</p>
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncTask <p>Asynchronously fetch AIGC face information. This field has a value only when TaskType is DescribeAigcFaceInfoAsync.</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ProcedureTask",$param) and $param["ProcedureTask"] !== null) {
            $this->ProcedureTask = new ProcedureTask();
            $this->ProcedureTask->deserialize($param["ProcedureTask"]);
        }

        if (array_key_exists("EditMediaTask",$param) and $param["EditMediaTask"] !== null) {
            $this->EditMediaTask = new EditMediaTask();
            $this->EditMediaTask->deserialize($param["EditMediaTask"]);
        }

        if (array_key_exists("WechatPublishTask",$param) and $param["WechatPublishTask"] !== null) {
            $this->WechatPublishTask = new WechatPublishTask();
            $this->WechatPublishTask->deserialize($param["WechatPublishTask"]);
        }

        if (array_key_exists("ComposeMediaTask",$param) and $param["ComposeMediaTask"] !== null) {
            $this->ComposeMediaTask = new ComposeMediaTask();
            $this->ComposeMediaTask->deserialize($param["ComposeMediaTask"]);
        }

        if (array_key_exists("SplitMediaTask",$param) and $param["SplitMediaTask"] !== null) {
            $this->SplitMediaTask = new SplitMediaTask();
            $this->SplitMediaTask->deserialize($param["SplitMediaTask"]);
        }

        if (array_key_exists("WechatMiniProgramPublishTask",$param) and $param["WechatMiniProgramPublishTask"] !== null) {
            $this->WechatMiniProgramPublishTask = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishTask->deserialize($param["WechatMiniProgramPublishTask"]);
        }

        if (array_key_exists("PullUploadTask",$param) and $param["PullUploadTask"] !== null) {
            $this->PullUploadTask = new PullUploadTask();
            $this->PullUploadTask->deserialize($param["PullUploadTask"]);
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTask2017();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("ConcatTask",$param) and $param["ConcatTask"] !== null) {
            $this->ConcatTask = new ConcatTask2017();
            $this->ConcatTask->deserialize($param["ConcatTask"]);
        }

        if (array_key_exists("ClipTask",$param) and $param["ClipTask"] !== null) {
            $this->ClipTask = new ClipTask2017();
            $this->ClipTask->deserialize($param["ClipTask"]);
        }

        if (array_key_exists("CreateImageSpriteTask",$param) and $param["CreateImageSpriteTask"] !== null) {
            $this->CreateImageSpriteTask = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteTask->deserialize($param["CreateImageSpriteTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("RemoveWatermarkTask",$param) and $param["RemoveWatermarkTask"] !== null) {
            $this->RemoveWatermarkTask = new RemoveWatermarkTask();
            $this->RemoveWatermarkTask->deserialize($param["RemoveWatermarkTask"]);
        }

        if (array_key_exists("RebuildMediaTask",$param) and $param["RebuildMediaTask"] !== null) {
            $this->RebuildMediaTask = new RebuildMediaTask();
            $this->RebuildMediaTask->deserialize($param["RebuildMediaTask"]);
        }

        if (array_key_exists("ExtractTraceWatermarkTask",$param) and $param["ExtractTraceWatermarkTask"] !== null) {
            $this->ExtractTraceWatermarkTask = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkTask->deserialize($param["ExtractTraceWatermarkTask"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkTask",$param) and $param["ExtractCopyRightWatermarkTask"] !== null) {
            $this->ExtractCopyRightWatermarkTask = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkTask->deserialize($param["ExtractCopyRightWatermarkTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }

        if (array_key_exists("ReduceMediaBitrateTask",$param) and $param["ReduceMediaBitrateTask"] !== null) {
            $this->ReduceMediaBitrateTask = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateTask->deserialize($param["ReduceMediaBitrateTask"]);
        }

        if (array_key_exists("DescribeFileAttributesTask",$param) and $param["DescribeFileAttributesTask"] !== null) {
            $this->DescribeFileAttributesTask = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesTask->deserialize($param["DescribeFileAttributesTask"]);
        }

        if (array_key_exists("QualityInspectTask",$param) and $param["QualityInspectTask"] !== null) {
            $this->QualityInspectTask = new QualityInspectTask();
            $this->QualityInspectTask->deserialize($param["QualityInspectTask"]);
        }

        if (array_key_exists("QualityEnhanceTask",$param) and $param["QualityEnhanceTask"] !== null) {
            $this->QualityEnhanceTask = new QualityEnhanceTask();
            $this->QualityEnhanceTask->deserialize($param["QualityEnhanceTask"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingTask",$param) and $param["ComplexAdaptiveDynamicStreamingTask"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingTask = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingTask->deserialize($param["ComplexAdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("ProcessMediaByMPSTask",$param) and $param["ProcessMediaByMPSTask"] !== null) {
            $this->ProcessMediaByMPSTask = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSTask->deserialize($param["ProcessMediaByMPSTask"]);
        }

        if (array_key_exists("AigcImageTask",$param) and $param["AigcImageTask"] !== null) {
            $this->AigcImageTask = new AigcImageTask();
            $this->AigcImageTask->deserialize($param["AigcImageTask"]);
        }

        if (array_key_exists("AigcVideoTask",$param) and $param["AigcVideoTask"] !== null) {
            $this->AigcVideoTask = new AigcVideoTask();
            $this->AigcVideoTask->deserialize($param["AigcVideoTask"]);
        }

        if (array_key_exists("ImportMediaKnowledge",$param) and $param["ImportMediaKnowledge"] !== null) {
            $this->ImportMediaKnowledge = new ImportMediaKnowledgeTask();
            $this->ImportMediaKnowledge->deserialize($param["ImportMediaKnowledge"]);
        }

        if (array_key_exists("SceneAigcImageTask",$param) and $param["SceneAigcImageTask"] !== null) {
            $this->SceneAigcImageTask = new SceneAigcImageTask();
            $this->SceneAigcImageTask->deserialize($param["SceneAigcImageTask"]);
        }

        if (array_key_exists("SceneAigcVideoTask",$param) and $param["SceneAigcVideoTask"] !== null) {
            $this->SceneAigcVideoTask = new SceneAigcVideoTask();
            $this->SceneAigcVideoTask->deserialize($param["SceneAigcVideoTask"]);
        }

        if (array_key_exists("ProcessImageAsyncTask",$param) and $param["ProcessImageAsyncTask"] !== null) {
            $this->ProcessImageAsyncTask = new ProcessImageAsync();
            $this->ProcessImageAsyncTask->deserialize($param["ProcessImageAsyncTask"]);
        }

        if (array_key_exists("ExtractBlindWatermarkTask",$param) and $param["ExtractBlindWatermarkTask"] !== null) {
            $this->ExtractBlindWatermarkTask = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkTask->deserialize($param["ExtractBlindWatermarkTask"]);
        }

        if (array_key_exists("CreateAigcAdvancedCustomElementTask",$param) and $param["CreateAigcAdvancedCustomElementTask"] !== null) {
            $this->CreateAigcAdvancedCustomElementTask = new CreateAigcAdvancedCustomElementTask();
            $this->CreateAigcAdvancedCustomElementTask->deserialize($param["CreateAigcAdvancedCustomElementTask"]);
        }

        if (array_key_exists("CreateAigcCustomVoiceTask",$param) and $param["CreateAigcCustomVoiceTask"] !== null) {
            $this->CreateAigcCustomVoiceTask = new CreateAigcCustomVoiceTask();
            $this->CreateAigcCustomVoiceTask->deserialize($param["CreateAigcCustomVoiceTask"]);
        }

        if (array_key_exists("CreateAigcSubjectTask",$param) and $param["CreateAigcSubjectTask"] !== null) {
            $this->CreateAigcSubjectTask = new CreateAigcSubjectTask();
            $this->CreateAigcSubjectTask->deserialize($param["CreateAigcSubjectTask"]);
        }

        if (array_key_exists("AigcVideoRedrawTask",$param) and $param["AigcVideoRedrawTask"] !== null) {
            $this->AigcVideoRedrawTask = new AigcVideoRedrawTask();
            $this->AigcVideoRedrawTask->deserialize($param["AigcVideoRedrawTask"]);
        }

        if (array_key_exists("AigcAudioTask",$param) and $param["AigcAudioTask"] !== null) {
            $this->AigcAudioTask = new AigcAudioTask();
            $this->AigcAudioTask->deserialize($param["AigcAudioTask"]);
        }

        if (array_key_exists("CreateAigcAudioCloneTask",$param) and $param["CreateAigcAudioCloneTask"] !== null) {
            $this->CreateAigcAudioCloneTask = new CreateAigcAudioCloneTask();
            $this->CreateAigcAudioCloneTask->deserialize($param["CreateAigcAudioCloneTask"]);
        }

        if (array_key_exists("DescribeAigcFaceInfoAsyncTask",$param) and $param["DescribeAigcFaceInfoAsyncTask"] !== null) {
            $this->DescribeAigcFaceInfoAsyncTask = new DescribeAigcFaceInfoAsyncTask();
            $this->DescribeAigcFaceInfoAsyncTask->deserialize($param["DescribeAigcFaceInfoAsyncTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
