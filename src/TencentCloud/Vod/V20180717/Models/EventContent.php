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
 * Event notification content, where TranscodeCompleteEvent, ConcatCompleteEvent, ClipCompleteEvent, CreateImageSpriteCompleteEvent, and SnapshotByTimeOffsetCompleteEvent are event notifications for tasks that are initiated by v2017-compatible APIs.
 *
 * @method string getEventHandle() Obtain <p>Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.</p>
 * @method void setEventHandle(string $EventHandle) Set <p>Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.</p>
 * @method string getEventType() Obtain <p><b>Supported event types:</b></p><li>NewFileUpload: Video upload complete;</li><li>ProcedureStateChanged: Task flow status change;</li><li>FileDeleted: Video deletion completed;</li><li>RestoreMediaComplete: Video retrieval completion;</li><li>PullComplete: Video conversion completed;</li><li>EditMediaComplete: Video editing completed;</li><li>SplitMediaComplete: Video splitting completed;</li><li>ComposeMediaComplete: Media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: Intelligent watermark removal completion.</li><li>RebuildMediaComplete: Audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: Audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: File attribute acquisition completion;</li><li>QualityInspectComplete: Audio and video quality inspection completed;</li><li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li><li>PersistenceComplete: Edit persistence completed;</li><li>ComplexAdaptiveDynamicStreamingComplete: Complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: Asynchronously fetch AIGC human face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: Video transcoding completion;</li><li>ConcatComplete: Video splicing completion;</li><li>ClipComplete: Video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
 * @method void setEventType(string $EventType) Set <p><b>Supported event types:</b></p><li>NewFileUpload: Video upload complete;</li><li>ProcedureStateChanged: Task flow status change;</li><li>FileDeleted: Video deletion completed;</li><li>RestoreMediaComplete: Video retrieval completion;</li><li>PullComplete: Video conversion completed;</li><li>EditMediaComplete: Video editing completed;</li><li>SplitMediaComplete: Video splitting completed;</li><li>ComposeMediaComplete: Media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: Intelligent watermark removal completion.</li><li>RebuildMediaComplete: Audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: Audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: File attribute acquisition completion;</li><li>QualityInspectComplete: Audio and video quality inspection completed;</li><li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li><li>PersistenceComplete: Edit persistence completed;</li><li>ComplexAdaptiveDynamicStreamingComplete: Complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: Asynchronously fetch AIGC human face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: Video transcoding completion;</li><li>ConcatComplete: Video splicing completion;</li><li>ClipComplete: Video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileDeleteTask getFileDeleteEvent() Obtain <p>File deletion event. Valid when the event type is FileDeleted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set <p>File deletion event. Valid when the event type is FileDeleted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PullUploadTask getPullCompleteEvent() Obtain <p>Video pull completion event. Valid when the event type is PullComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set <p>Video pull completion event. Valid when the event type is PullComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClipTask2017 getClipCompleteEvent() Obtain <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain <p>WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set <p>WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain <p>Intelligent Watermark Removal Completion Event. Valid when the event type is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set <p>Intelligent Watermark Removal Completion Event. Valid when the event type is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain <p>Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set <p>Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain <p>Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set <p>Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() Obtain <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) Set <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaCastEvent getMediaCastStatusChangedEvent() Obtain <p>Media forwarding status change event. Valid when the event type is MediaCastStatusChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) Set <p>Media forwarding status change event. Valid when the event type is MediaCastStatusChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() Obtain <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) Set <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() Obtain <p>Adaptive bitrate task information. Valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) Set <p>Adaptive bitrate task information. Valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessMediaByMPS getProcessMediaByMPSCompleteEvent() Obtain <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
 * @method void setProcessMediaByMPSCompleteEvent(ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent) Set <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
 * @method AigcImageTask getAigcImageCompleteEvent() Obtain <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
 * @method void setAigcImageCompleteEvent(AigcImageTask $AigcImageCompleteEvent) Set <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
 * @method AigcVideoTask getAigcVideoCompleteEvent() Obtain <p>AIGC video task info, valid only when EventType is AigcVideoTaskComplete.</p>
 * @method void setAigcVideoCompleteEvent(AigcVideoTask $AigcVideoCompleteEvent) Set <p>AIGC video task info, valid only when EventType is AigcVideoTaskComplete.</p>
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkComplete() Obtain <p>Extract digital watermark info, valid only when EventType is ExtractBlindWatermarkComplete.</p>
 * @method void setExtractBlindWatermarkComplete(ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete) Set <p>Extract digital watermark info, valid only when EventType is ExtractBlindWatermarkComplete.</p>
 * @method SceneAigcImageTask getSceneAigcImageCompleteEvent() Obtain <p>Scenario-based AIGC image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
 * @method void setSceneAigcImageCompleteEvent(SceneAigcImageTask $SceneAigcImageCompleteEvent) Set <p>Scenario-based AIGC image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
 * @method ProcessImageAsyncTask getProcessImageAsyncCompleteEvent() Obtain <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
 * @method void setProcessImageAsyncCompleteEvent(ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent) Set <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementCompleteEvent() Obtain <p>AIGC custom entity information, valid only when EventType is CreateAigcAdvancedCustomElementCompleteEvent and this field has a value.</p>
 * @method void setCreateAigcAdvancedCustomElementCompleteEvent(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent) Set <p>AIGC custom entity information, valid only when EventType is CreateAigcAdvancedCustomElementCompleteEvent and this field has a value.</p>
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceCompleteEvent() Obtain <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
 * @method void setCreateAigcCustomVoiceCompleteEvent(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent) Set <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncCompleteEvent() Obtain <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
 * @method void setDescribeAigcFaceInfoAsyncCompleteEvent(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent) Set <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
 */
class EventContent extends AbstractModel
{
    /**
     * @var string <p>Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.</p>
     */
    public $EventHandle;

    /**
     * @var string <p><b>Supported event types:</b></p><li>NewFileUpload: Video upload complete;</li><li>ProcedureStateChanged: Task flow status change;</li><li>FileDeleted: Video deletion completed;</li><li>RestoreMediaComplete: Video retrieval completion;</li><li>PullComplete: Video conversion completed;</li><li>EditMediaComplete: Video editing completed;</li><li>SplitMediaComplete: Video splitting completed;</li><li>ComposeMediaComplete: Media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: Intelligent watermark removal completion.</li><li>RebuildMediaComplete: Audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: Audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: File attribute acquisition completion;</li><li>QualityInspectComplete: Audio and video quality inspection completed;</li><li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li><li>PersistenceComplete: Edit persistence completed;</li><li>ComplexAdaptiveDynamicStreamingComplete: Complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: Asynchronously fetch AIGC human face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: Video transcoding completion;</li><li>ConcatComplete: Video splicing completion;</li><li>ClipComplete: Video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask <p>File deletion event. Valid when the event type is FileDeleted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask <p>Video pull completion event. Valid when the event type is PullComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask <p>WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask <p>Intelligent Watermark Removal Completion Event. Valid when the event type is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask <p>Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask <p>Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent <p>Media forwarding status change event. Valid when the event type is MediaCastStatusChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask <p>Adaptive bitrate task information. Valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @var ProcessMediaByMPS <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
     */
    public $ProcessMediaByMPSCompleteEvent;

    /**
     * @var AigcImageTask <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
     */
    public $AigcImageCompleteEvent;

    /**
     * @var AigcVideoTask <p>AIGC video task info, valid only when EventType is AigcVideoTaskComplete.</p>
     */
    public $AigcVideoCompleteEvent;

    /**
     * @var ExtractBlindWatermarkTask <p>Extract digital watermark info, valid only when EventType is ExtractBlindWatermarkComplete.</p>
     */
    public $ExtractBlindWatermarkComplete;

    /**
     * @var SceneAigcImageTask <p>Scenario-based AIGC image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
     */
    public $SceneAigcImageCompleteEvent;

    /**
     * @var ProcessImageAsyncTask <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
     */
    public $ProcessImageAsyncCompleteEvent;

    /**
     * @var CreateAigcAdvancedCustomElementTask <p>AIGC custom entity information, valid only when EventType is CreateAigcAdvancedCustomElementCompleteEvent and this field has a value.</p>
     */
    public $CreateAigcAdvancedCustomElementCompleteEvent;

    /**
     * @var CreateAigcCustomVoiceTask <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
     */
    public $CreateAigcCustomVoiceCompleteEvent;

    /**
     * @var DescribeAigcFaceInfoAsyncTask <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
     */
    public $DescribeAigcFaceInfoAsyncCompleteEvent;

    /**
     * @param string $EventHandle <p>Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.</p>
     * @param string $EventType <p><b>Supported event types:</b></p><li>NewFileUpload: Video upload complete;</li><li>ProcedureStateChanged: Task flow status change;</li><li>FileDeleted: Video deletion completed;</li><li>RestoreMediaComplete: Video retrieval completion;</li><li>PullComplete: Video conversion completed;</li><li>EditMediaComplete: Video editing completed;</li><li>SplitMediaComplete: Video splitting completed;</li><li>ComposeMediaComplete: Media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: Intelligent watermark removal completion.</li><li>RebuildMediaComplete: Audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: Audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: File attribute acquisition completion;</li><li>QualityInspectComplete: Audio and video quality inspection completed;</li><li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li><li>PersistenceComplete: Edit persistence completed;</li><li>ComplexAdaptiveDynamicStreamingComplete: Complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: Asynchronously fetch AIGC human face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: Video transcoding completion;</li><li>ConcatComplete: Video splicing completion;</li><li>ClipComplete: Video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
     * @param FileUploadTask $FileUploadEvent <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcedureTask $ProcedureStateChangeEvent <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileDeleteTask $FileDeleteEvent <p>File deletion event. Valid when the event type is FileDeleted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PullUploadTask $PullCompleteEvent <p>Video pull completion event. Valid when the event type is PullComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaCompleteEvent <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SplitMediaTask $SplitMediaCompleteEvent <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClipTask2017 $ClipCompleteEvent <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTask2017 $TranscodeCompleteEvent <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ConcatTask2017 $ConcatCompleteEvent <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatPublishTask $WechatPublishCompleteEvent <p>WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent <p>Intelligent Watermark Removal Completion Event. Valid when the event type is RemoveWatermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RestoreMediaTask $RestoreMediaCompleteEvent <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTask $RebuildMediaCompleteEvent <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent <p>Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent <p>Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent <p>This field is invalid.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityInspectTask $QualityInspectCompleteEvent <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaCastEvent $MediaCastStatusChangedEvent <p>Media forwarding status change event. Valid when the event type is MediaCastStatusChanged.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PersistenceCompleteTask $PersistenceCompleteEvent <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent <p>Adaptive bitrate task information. Valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
     * @param AigcImageTask $AigcImageCompleteEvent <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
     * @param AigcVideoTask $AigcVideoCompleteEvent <p>AIGC video task info, valid only when EventType is AigcVideoTaskComplete.</p>
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete <p>Extract digital watermark info, valid only when EventType is ExtractBlindWatermarkComplete.</p>
     * @param SceneAigcImageTask $SceneAigcImageCompleteEvent <p>Scenario-based AIGC image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
     * @param ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent <p>AIGC custom entity information, valid only when EventType is CreateAigcAdvancedCustomElementCompleteEvent and this field has a value.</p>
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
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
        if (array_key_exists("EventHandle",$param) and $param["EventHandle"] !== null) {
            $this->EventHandle = $param["EventHandle"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("FileUploadEvent",$param) and $param["FileUploadEvent"] !== null) {
            $this->FileUploadEvent = new FileUploadTask();
            $this->FileUploadEvent->deserialize($param["FileUploadEvent"]);
        }

        if (array_key_exists("ProcedureStateChangeEvent",$param) and $param["ProcedureStateChangeEvent"] !== null) {
            $this->ProcedureStateChangeEvent = new ProcedureTask();
            $this->ProcedureStateChangeEvent->deserialize($param["ProcedureStateChangeEvent"]);
        }

        if (array_key_exists("FileDeleteEvent",$param) and $param["FileDeleteEvent"] !== null) {
            $this->FileDeleteEvent = new FileDeleteTask();
            $this->FileDeleteEvent->deserialize($param["FileDeleteEvent"]);
        }

        if (array_key_exists("PullCompleteEvent",$param) and $param["PullCompleteEvent"] !== null) {
            $this->PullCompleteEvent = new PullUploadTask();
            $this->PullCompleteEvent->deserialize($param["PullCompleteEvent"]);
        }

        if (array_key_exists("EditMediaCompleteEvent",$param) and $param["EditMediaCompleteEvent"] !== null) {
            $this->EditMediaCompleteEvent = new EditMediaTask();
            $this->EditMediaCompleteEvent->deserialize($param["EditMediaCompleteEvent"]);
        }

        if (array_key_exists("SplitMediaCompleteEvent",$param) and $param["SplitMediaCompleteEvent"] !== null) {
            $this->SplitMediaCompleteEvent = new SplitMediaTask();
            $this->SplitMediaCompleteEvent->deserialize($param["SplitMediaCompleteEvent"]);
        }

        if (array_key_exists("ComposeMediaCompleteEvent",$param) and $param["ComposeMediaCompleteEvent"] !== null) {
            $this->ComposeMediaCompleteEvent = new ComposeMediaTask();
            $this->ComposeMediaCompleteEvent->deserialize($param["ComposeMediaCompleteEvent"]);
        }

        if (array_key_exists("ClipCompleteEvent",$param) and $param["ClipCompleteEvent"] !== null) {
            $this->ClipCompleteEvent = new ClipTask2017();
            $this->ClipCompleteEvent->deserialize($param["ClipCompleteEvent"]);
        }

        if (array_key_exists("TranscodeCompleteEvent",$param) and $param["TranscodeCompleteEvent"] !== null) {
            $this->TranscodeCompleteEvent = new TranscodeTask2017();
            $this->TranscodeCompleteEvent->deserialize($param["TranscodeCompleteEvent"]);
        }

        if (array_key_exists("CreateImageSpriteCompleteEvent",$param) and $param["CreateImageSpriteCompleteEvent"] !== null) {
            $this->CreateImageSpriteCompleteEvent = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteCompleteEvent->deserialize($param["CreateImageSpriteCompleteEvent"]);
        }

        if (array_key_exists("ConcatCompleteEvent",$param) and $param["ConcatCompleteEvent"] !== null) {
            $this->ConcatCompleteEvent = new ConcatTask2017();
            $this->ConcatCompleteEvent->deserialize($param["ConcatCompleteEvent"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetCompleteEvent",$param) and $param["SnapshotByTimeOffsetCompleteEvent"] !== null) {
            $this->SnapshotByTimeOffsetCompleteEvent = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetCompleteEvent->deserialize($param["SnapshotByTimeOffsetCompleteEvent"]);
        }

        if (array_key_exists("WechatPublishCompleteEvent",$param) and $param["WechatPublishCompleteEvent"] !== null) {
            $this->WechatPublishCompleteEvent = new WechatPublishTask();
            $this->WechatPublishCompleteEvent->deserialize($param["WechatPublishCompleteEvent"]);
        }

        if (array_key_exists("WechatMiniProgramPublishCompleteEvent",$param) and $param["WechatMiniProgramPublishCompleteEvent"] !== null) {
            $this->WechatMiniProgramPublishCompleteEvent = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishCompleteEvent->deserialize($param["WechatMiniProgramPublishCompleteEvent"]);
        }

        if (array_key_exists("RemoveWatermarkCompleteEvent",$param) and $param["RemoveWatermarkCompleteEvent"] !== null) {
            $this->RemoveWatermarkCompleteEvent = new RemoveWatermarkTask();
            $this->RemoveWatermarkCompleteEvent->deserialize($param["RemoveWatermarkCompleteEvent"]);
        }

        if (array_key_exists("RestoreMediaCompleteEvent",$param) and $param["RestoreMediaCompleteEvent"] !== null) {
            $this->RestoreMediaCompleteEvent = new RestoreMediaTask();
            $this->RestoreMediaCompleteEvent->deserialize($param["RestoreMediaCompleteEvent"]);
        }

        if (array_key_exists("RebuildMediaCompleteEvent",$param) and $param["RebuildMediaCompleteEvent"] !== null) {
            $this->RebuildMediaCompleteEvent = new RebuildMediaTask();
            $this->RebuildMediaCompleteEvent->deserialize($param["RebuildMediaCompleteEvent"]);
        }

        if (array_key_exists("ExtractTraceWatermarkCompleteEvent",$param) and $param["ExtractTraceWatermarkCompleteEvent"] !== null) {
            $this->ExtractTraceWatermarkCompleteEvent = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkCompleteEvent->deserialize($param["ExtractTraceWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkCompleteEvent",$param) and $param["ExtractCopyRightWatermarkCompleteEvent"] !== null) {
            $this->ExtractCopyRightWatermarkCompleteEvent = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkCompleteEvent->deserialize($param["ExtractCopyRightWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ReviewAudioVideoCompleteEvent",$param) and $param["ReviewAudioVideoCompleteEvent"] !== null) {
            $this->ReviewAudioVideoCompleteEvent = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoCompleteEvent->deserialize($param["ReviewAudioVideoCompleteEvent"]);
        }

        if (array_key_exists("ReduceMediaBitrateCompleteEvent",$param) and $param["ReduceMediaBitrateCompleteEvent"] !== null) {
            $this->ReduceMediaBitrateCompleteEvent = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateCompleteEvent->deserialize($param["ReduceMediaBitrateCompleteEvent"]);
        }

        if (array_key_exists("DescribeFileAttributesCompleteEvent",$param) and $param["DescribeFileAttributesCompleteEvent"] !== null) {
            $this->DescribeFileAttributesCompleteEvent = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesCompleteEvent->deserialize($param["DescribeFileAttributesCompleteEvent"]);
        }

        if (array_key_exists("QualityInspectCompleteEvent",$param) and $param["QualityInspectCompleteEvent"] !== null) {
            $this->QualityInspectCompleteEvent = new QualityInspectTask();
            $this->QualityInspectCompleteEvent->deserialize($param["QualityInspectCompleteEvent"]);
        }

        if (array_key_exists("QualityEnhanceCompleteEvent",$param) and $param["QualityEnhanceCompleteEvent"] !== null) {
            $this->QualityEnhanceCompleteEvent = new QualityEnhanceTask();
            $this->QualityEnhanceCompleteEvent->deserialize($param["QualityEnhanceCompleteEvent"]);
        }

        if (array_key_exists("MediaCastStatusChangedEvent",$param) and $param["MediaCastStatusChangedEvent"] !== null) {
            $this->MediaCastStatusChangedEvent = new MediaCastEvent();
            $this->MediaCastStatusChangedEvent->deserialize($param["MediaCastStatusChangedEvent"]);
        }

        if (array_key_exists("PersistenceCompleteEvent",$param) and $param["PersistenceCompleteEvent"] !== null) {
            $this->PersistenceCompleteEvent = new PersistenceCompleteTask();
            $this->PersistenceCompleteEvent->deserialize($param["PersistenceCompleteEvent"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingCompleteEvent",$param) and $param["ComplexAdaptiveDynamicStreamingCompleteEvent"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent->deserialize($param["ComplexAdaptiveDynamicStreamingCompleteEvent"]);
        }

        if (array_key_exists("ProcessMediaByMPSCompleteEvent",$param) and $param["ProcessMediaByMPSCompleteEvent"] !== null) {
            $this->ProcessMediaByMPSCompleteEvent = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSCompleteEvent->deserialize($param["ProcessMediaByMPSCompleteEvent"]);
        }

        if (array_key_exists("AigcImageCompleteEvent",$param) and $param["AigcImageCompleteEvent"] !== null) {
            $this->AigcImageCompleteEvent = new AigcImageTask();
            $this->AigcImageCompleteEvent->deserialize($param["AigcImageCompleteEvent"]);
        }

        if (array_key_exists("AigcVideoCompleteEvent",$param) and $param["AigcVideoCompleteEvent"] !== null) {
            $this->AigcVideoCompleteEvent = new AigcVideoTask();
            $this->AigcVideoCompleteEvent->deserialize($param["AigcVideoCompleteEvent"]);
        }

        if (array_key_exists("ExtractBlindWatermarkComplete",$param) and $param["ExtractBlindWatermarkComplete"] !== null) {
            $this->ExtractBlindWatermarkComplete = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkComplete->deserialize($param["ExtractBlindWatermarkComplete"]);
        }

        if (array_key_exists("SceneAigcImageCompleteEvent",$param) and $param["SceneAigcImageCompleteEvent"] !== null) {
            $this->SceneAigcImageCompleteEvent = new SceneAigcImageTask();
            $this->SceneAigcImageCompleteEvent->deserialize($param["SceneAigcImageCompleteEvent"]);
        }

        if (array_key_exists("ProcessImageAsyncCompleteEvent",$param) and $param["ProcessImageAsyncCompleteEvent"] !== null) {
            $this->ProcessImageAsyncCompleteEvent = new ProcessImageAsyncTask();
            $this->ProcessImageAsyncCompleteEvent->deserialize($param["ProcessImageAsyncCompleteEvent"]);
        }

        if (array_key_exists("CreateAigcAdvancedCustomElementCompleteEvent",$param) and $param["CreateAigcAdvancedCustomElementCompleteEvent"] !== null) {
            $this->CreateAigcAdvancedCustomElementCompleteEvent = new CreateAigcAdvancedCustomElementTask();
            $this->CreateAigcAdvancedCustomElementCompleteEvent->deserialize($param["CreateAigcAdvancedCustomElementCompleteEvent"]);
        }

        if (array_key_exists("CreateAigcCustomVoiceCompleteEvent",$param) and $param["CreateAigcCustomVoiceCompleteEvent"] !== null) {
            $this->CreateAigcCustomVoiceCompleteEvent = new CreateAigcCustomVoiceTask();
            $this->CreateAigcCustomVoiceCompleteEvent->deserialize($param["CreateAigcCustomVoiceCompleteEvent"]);
        }

        if (array_key_exists("DescribeAigcFaceInfoAsyncCompleteEvent",$param) and $param["DescribeAigcFaceInfoAsyncCompleteEvent"] !== null) {
            $this->DescribeAigcFaceInfoAsyncCompleteEvent = new DescribeAigcFaceInfoAsyncTask();
            $this->DescribeAigcFaceInfoAsyncCompleteEvent->deserialize($param["DescribeAigcFaceInfoAsyncCompleteEvent"]);
        }
    }
}
