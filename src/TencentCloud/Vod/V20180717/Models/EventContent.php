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
 * @method string getEventHandle() Obtain Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.
 * @method void setEventHandle(string $EventHandle) Set Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.
 * @method string getEventType() Obtain <b>Supported event types:</b>
<li>NewFileUpload: Video upload completed;</li>
<li>ProcedureStateChanged: Task flow status change.</li>
<li>FileDeleted: Video deletion completed;</li>
<li>RestoreMediaComplete: Video retrieval completion;</li>
<li>PullComplete: Video conversion pull completed.</li>
<li>EditMediaComplete: Video editing completed;</li>
<li>SplitMediaComplete: Video splitting completed;</li>
<li>ComposeMediaComplete: Media file creation completion;</li>
<li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li>
<li>RemoveWatermark: Intelligent watermark removal completion.</li>
<li>RebuildMediaComplete: Audio and video quality rebirth completion event (This is not recommended).</li>
<li>ReviewAudioVideoComplete: Audio/video moderation completed;</li>
<li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li>
<li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion.</li>
<li>DescribeFileAttributesComplete: File attribute acquisition completion.</li>
<li>QualityInspectComplete: Audio and video quality inspection completed;</li>
<li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li>
<li>PersistenceComplete: Edit completed.</li>
<li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completed.</li>
<li>ProcessMediaByMPSComplete: MPS video processing is completed.</li>
<li>AigcImageTaskComplete: AIGC image generation task complete.</li>
<li>AigcVideoTaskComplete: AIGC video generation task completed.</li>
<b>Event types compatible with the 2017 version:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: Video splicing completion.</li>
<li>ClipComplete: Video editing completed;</li>
<li>CreateImageSpriteComplete: Video thumbnail capture completion.</li>
<li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
 * @method void setEventType(string $EventType) Set <b>Supported event types:</b>
<li>NewFileUpload: Video upload completed;</li>
<li>ProcedureStateChanged: Task flow status change.</li>
<li>FileDeleted: Video deletion completed;</li>
<li>RestoreMediaComplete: Video retrieval completion;</li>
<li>PullComplete: Video conversion pull completed.</li>
<li>EditMediaComplete: Video editing completed;</li>
<li>SplitMediaComplete: Video splitting completed;</li>
<li>ComposeMediaComplete: Media file creation completion;</li>
<li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li>
<li>RemoveWatermark: Intelligent watermark removal completion.</li>
<li>RebuildMediaComplete: Audio and video quality rebirth completion event (This is not recommended).</li>
<li>ReviewAudioVideoComplete: Audio/video moderation completed;</li>
<li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li>
<li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion.</li>
<li>DescribeFileAttributesComplete: File attribute acquisition completion.</li>
<li>QualityInspectComplete: Audio and video quality inspection completed;</li>
<li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li>
<li>PersistenceComplete: Edit completed.</li>
<li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completed.</li>
<li>ProcessMediaByMPSComplete: MPS video processing is completed.</li>
<li>AigcImageTaskComplete: AIGC image generation task complete.</li>
<li>AigcVideoTaskComplete: AIGC video generation task completed.</li>
<b>Event types compatible with the 2017 version:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: Video splicing completion.</li>
<li>ClipComplete: Video editing completed;</li>
<li>CreateImageSpriteComplete: Video thumbnail capture completion.</li>
<li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain Video upload completion event. Valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set Video upload completion event. Valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain Task flow status change event. Valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set Task flow status change event. Valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileDeleteTask getFileDeleteEvent() Obtain File deletion event. Valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set File deletion event. Valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PullUploadTask getPullCompleteEvent() Obtain Video pull completion event. Valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set Video pull completion event. Valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain Video editing completion event. Valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set Video editing completion event. Valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain Video splitting completion event. Valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set Video splitting completion event. Valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain Media file creation task completion event. Valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set Media file creation task completion event. Valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClipTask2017 getClipCompleteEvent() Obtain Video editing completion event. Valid when the event type is ClipComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set Video editing completion event. Valid when the event type is ClipComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain Video transcoding completion event, valid when the event type is TranscodeComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set Video transcoding completion event, valid when the event type is TranscodeComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain Video splicing completion event. Valid when the event type is ConcatComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set Video splicing completion event. Valid when the event type is ConcatComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain Intelligent Watermark Removal Completion Event is valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set Intelligent Watermark Removal Completion Event is valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain Video retrieval completion event. Valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set Video retrieval completion event. Valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain This field is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set This field is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() Obtain Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) Set Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaCastEvent getMediaCastStatusChangedEvent() Obtain MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) Set MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() Obtain Editing solidification completion event. Valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) Set Editing solidification completion event. Valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() Obtain Adaptive bitrate task information, valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) Set Adaptive bitrate task information, valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProcessMediaByMPS getProcessMediaByMPSCompleteEvent() Obtain MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.
 * @method void setProcessMediaByMPSCompleteEvent(ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent) Set MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.
 * @method AigcImageTask getAigcImageCompleteEvent() Obtain AIGC image generation task info. Valid only when EventType is AigcImageTaskComplete.
 * @method void setAigcImageCompleteEvent(AigcImageTask $AigcImageCompleteEvent) Set AIGC image generation task info. Valid only when EventType is AigcImageTaskComplete.
 * @method AigcVideoTask getAigcVideoCompleteEvent() Obtain AIGC video task info. Valid only when EventType is AigcVideoTaskComplete.
 * @method void setAigcVideoCompleteEvent(AigcVideoTask $AigcVideoCompleteEvent) Set AIGC video task info. Valid only when EventType is AigcVideoTaskComplete.
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkComplete() Obtain Extract digital watermark information. Valid at that time only when EventType is ExtractBlindWatermarkComplete.
 * @method void setExtractBlindWatermarkComplete(ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete) Set Extract digital watermark information. Valid at that time only when EventType is ExtractBlindWatermarkComplete.
 * @method SceneAigcImageTask getSceneAigcImageCompleteEvent() Obtain AIGC scenario-based image generation task info, valid only when EventType is SceneAigcImageCompleteEvent.
 * @method void setSceneAigcImageCompleteEvent(SceneAigcImageTask $SceneAigcImageCompleteEvent) Set AIGC scenario-based image generation task info, valid only when EventType is SceneAigcImageCompleteEvent.
 * @method ProcessImageAsyncTask getProcessImageAsyncCompleteEvent() Obtain Image asynchronous task processing info, valid only when EventType is ProcessImageAsyncCompleteEvent.
 * @method void setProcessImageAsyncCompleteEvent(ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent) Set Image asynchronous task processing info, valid only when EventType is ProcessImageAsyncCompleteEvent.
 */
class EventContent extends AbstractModel
{
    /**
     * @var string Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.
     */
    public $EventHandle;

    /**
     * @var string <b>Supported event types:</b>
<li>NewFileUpload: Video upload completed;</li>
<li>ProcedureStateChanged: Task flow status change.</li>
<li>FileDeleted: Video deletion completed;</li>
<li>RestoreMediaComplete: Video retrieval completion;</li>
<li>PullComplete: Video conversion pull completed.</li>
<li>EditMediaComplete: Video editing completed;</li>
<li>SplitMediaComplete: Video splitting completed;</li>
<li>ComposeMediaComplete: Media file creation completion;</li>
<li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li>
<li>RemoveWatermark: Intelligent watermark removal completion.</li>
<li>RebuildMediaComplete: Audio and video quality rebirth completion event (This is not recommended).</li>
<li>ReviewAudioVideoComplete: Audio/video moderation completed;</li>
<li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li>
<li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion.</li>
<li>DescribeFileAttributesComplete: File attribute acquisition completion.</li>
<li>QualityInspectComplete: Audio and video quality inspection completed;</li>
<li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li>
<li>PersistenceComplete: Edit completed.</li>
<li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completed.</li>
<li>ProcessMediaByMPSComplete: MPS video processing is completed.</li>
<li>AigcImageTaskComplete: AIGC image generation task complete.</li>
<li>AigcVideoTaskComplete: AIGC video generation task completed.</li>
<b>Event types compatible with the 2017 version:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: Video splicing completion.</li>
<li>ClipComplete: Video editing completed;</li>
<li>CreateImageSpriteComplete: Video thumbnail capture completion.</li>
<li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask Video upload completion event. Valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask Task flow status change event. Valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask File deletion event. Valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask Video pull completion event. Valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask Video editing completion event. Valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask Video splitting completion event. Valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask Media file creation task completion event. Valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 Video editing completion event. Valid when the event type is ClipComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 Video transcoding completion event, valid when the event type is TranscodeComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 Video splicing completion event. Valid when the event type is ConcatComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask Intelligent Watermark Removal Completion Event is valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask Video retrieval completion event. Valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask This field is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask Editing solidification completion event. Valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask Adaptive bitrate task information, valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @var ProcessMediaByMPS MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.
     */
    public $ProcessMediaByMPSCompleteEvent;

    /**
     * @var AigcImageTask AIGC image generation task info. Valid only when EventType is AigcImageTaskComplete.
     */
    public $AigcImageCompleteEvent;

    /**
     * @var AigcVideoTask AIGC video task info. Valid only when EventType is AigcVideoTaskComplete.
     */
    public $AigcVideoCompleteEvent;

    /**
     * @var ExtractBlindWatermarkTask Extract digital watermark information. Valid at that time only when EventType is ExtractBlindWatermarkComplete.
     */
    public $ExtractBlindWatermarkComplete;

    /**
     * @var SceneAigcImageTask AIGC scenario-based image generation task info, valid only when EventType is SceneAigcImageCompleteEvent.
     */
    public $SceneAigcImageCompleteEvent;

    /**
     * @var ProcessImageAsyncTask Image asynchronous task processing info, valid only when EventType is ProcessImageAsyncCompleteEvent.
     */
    public $ProcessImageAsyncCompleteEvent;

    /**
     * @param string $EventHandle Event handler. The caller must call ConfirmEvents to acknowledge the message has been received. Confirmed Valid Time is 30 seconds. After expiration, the event can be retrieved again.
     * @param string $EventType <b>Supported event types:</b>
<li>NewFileUpload: Video upload completed;</li>
<li>ProcedureStateChanged: Task flow status change.</li>
<li>FileDeleted: Video deletion completed;</li>
<li>RestoreMediaComplete: Video retrieval completion;</li>
<li>PullComplete: Video conversion pull completed.</li>
<li>EditMediaComplete: Video editing completed;</li>
<li>SplitMediaComplete: Video splitting completed;</li>
<li>ComposeMediaComplete: Media file creation completion;</li>
<li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li>
<li>RemoveWatermark: Intelligent watermark removal completion.</li>
<li>RebuildMediaComplete: Audio and video quality rebirth completion event (This is not recommended).</li>
<li>ReviewAudioVideoComplete: Audio/video moderation completed;</li>
<li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li>
<li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion.</li>
<li>DescribeFileAttributesComplete: File attribute acquisition completion.</li>
<li>QualityInspectComplete: Audio and video quality inspection completed;</li>
<li>QualityEnhanceComplete: Audio and video quality rebirth task completion;</li>
<li>PersistenceComplete: Edit completed.</li>
<li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completed.</li>
<li>ProcessMediaByMPSComplete: MPS video processing is completed.</li>
<li>AigcImageTaskComplete: AIGC image generation task complete.</li>
<li>AigcVideoTaskComplete: AIGC video generation task completed.</li>
<b>Event types compatible with the 2017 version:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: Video splicing completion.</li>
<li>ClipComplete: Video editing completed;</li>
<li>CreateImageSpriteComplete: Video thumbnail capture completion.</li>
<li>CreateSnapshotByTimeOffsetComplete: Video screenshot by time point.</li>
     * @param FileUploadTask $FileUploadEvent Video upload completion event. Valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcedureTask $ProcedureStateChangeEvent Task flow status change event. Valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileDeleteTask $FileDeleteEvent File deletion event. Valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PullUploadTask $PullCompleteEvent Video pull completion event. Valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaCompleteEvent Video editing completion event. Valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SplitMediaTask $SplitMediaCompleteEvent Video splitting completion event. Valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent Media file creation task completion event. Valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClipTask2017 $ClipCompleteEvent Video editing completion event. Valid when the event type is ClipComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTask2017 $TranscodeCompleteEvent Video transcoding completion event, valid when the event type is TranscodeComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ConcatTask2017 $ConcatCompleteEvent Video splicing completion event. Valid when the event type is ConcatComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatPublishTask $WechatPublishCompleteEvent WeChat Publishing Completion Event. Valid when the event type is WechatPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent Intelligent Watermark Removal Completion Event is valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RestoreMediaTask $RestoreMediaCompleteEvent Video retrieval completion event. Valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTask $RebuildMediaCompleteEvent Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent Copyright watermark extraction completion event. Valid when the event type is ExtractCopyRightWatermarkComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent Audio/video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent This field is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityInspectTask $QualityInspectCompleteEvent Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaCastEvent $MediaCastStatusChangedEvent MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
     * @param PersistenceCompleteTask $PersistenceCompleteEvent Editing solidification completion event. Valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent Adaptive bitrate task information, valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.
     * @param AigcImageTask $AigcImageCompleteEvent AIGC image generation task info. Valid only when EventType is AigcImageTaskComplete.
     * @param AigcVideoTask $AigcVideoCompleteEvent AIGC video task info. Valid only when EventType is AigcVideoTaskComplete.
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete Extract digital watermark information. Valid at that time only when EventType is ExtractBlindWatermarkComplete.
     * @param SceneAigcImageTask $SceneAigcImageCompleteEvent AIGC scenario-based image generation task info, valid only when EventType is SceneAigcImageCompleteEvent.
     * @param ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent Image asynchronous task processing info, valid only when EventType is ProcessImageAsyncCompleteEvent.
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
    }
}
