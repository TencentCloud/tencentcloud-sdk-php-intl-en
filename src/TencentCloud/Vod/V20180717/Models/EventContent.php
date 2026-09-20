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
 * Event notification content. Among them, TranscodeCompleteEvent, ConcatCompleteEvent, ClipCompleteEvent, CreateImageSpriteCompleteEvent, and SnapshotByTimeOffsetCompleteEvent are event notifications for tasks initiated through 2017 APIs.
 *
 * @method string getEventHandle() Obtain <p>Event handler. The caller must call ConfirmEvents to acknowledge that the message has been received. The confirmation is valid for 30 seconds. After expiration, the event can be retrieved again.</p>
 * @method void setEventHandle(string $EventHandle) Set <p>Event handler. The caller must call ConfirmEvents to acknowledge that the message has been received. The confirmation is valid for 30 seconds. After expiration, the event can be retrieved again.</p>
 * @method string getEventType() Obtain <p><b>Supported event types:</b></p><li>NewFileUpload: video upload completed;</li><li>ProcedureStateChanged: task flow status change;</li><li>FileDeleted: video deletion completed;</li><li>RestoreMediaComplete: video retrieval completion;</li><li>PullComplete: video pull completion;</li><li>EditMediaComplete: video editing completed;</li><li>SplitMediaComplete: video splitting completed;</li><li>ComposeMediaComplete: media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: intelligent watermark removal completion.</li><li>RebuildMediaComplete: audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: file attribute acquisition completion;</li><li>QualityInspectComplete: audio and video quality detection completed;</li><li>QualityEnhanceComplete: audio and video quality rebirth task completion;</li><li>PersistenceComplete: edit persistence completion;</li><li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>AigcHunyuan3DTaskComplete: AIGC Hunyuan 3D task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: asynchronously fetch AIGC face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: video transcoding completion;</li><li>ConcatComplete: video splicing completion;</li><li>ClipComplete: video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: video screenshot by time point.</li>
 * @method void setEventType(string $EventType) Set <p><b>Supported event types:</b></p><li>NewFileUpload: video upload completed;</li><li>ProcedureStateChanged: task flow status change;</li><li>FileDeleted: video deletion completed;</li><li>RestoreMediaComplete: video retrieval completion;</li><li>PullComplete: video pull completion;</li><li>EditMediaComplete: video editing completed;</li><li>SplitMediaComplete: video splitting completed;</li><li>ComposeMediaComplete: media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: intelligent watermark removal completion.</li><li>RebuildMediaComplete: audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: file attribute acquisition completion;</li><li>QualityInspectComplete: audio and video quality detection completed;</li><li>QualityEnhanceComplete: audio and video quality rebirth task completion;</li><li>PersistenceComplete: edit persistence completion;</li><li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>AigcHunyuan3DTaskComplete: AIGC Hunyuan 3D task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: asynchronously fetch AIGC face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: video transcoding completion;</li><li>ConcatComplete: video splicing completion;</li><li>ClipComplete: video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: video screenshot by time point.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
 * @method FileDeleteTask getFileDeleteEvent() Obtain <p>File deletion event. Valid when the event type is FileDeleted.</p>
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set <p>File deletion event. Valid when the event type is FileDeleted.</p>
 * @method PullUploadTask getPullCompleteEvent() Obtain <p>Video pull completion event. Valid when the event type is PullComplete.</p>
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set <p>Video pull completion event. Valid when the event type is PullComplete.</p>
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
 * @method ClipTask2017 getClipCompleteEvent() Obtain <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain <p>WeChat Publishing Completion Event, valid when the event type is WechatPublishComplete.</p>
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set <p>WeChat Publishing Completion Event, valid when the event type is WechatPublishComplete.</p>
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain <p>Intelligent Watermark Removal Completion Event, valid when the event type is RemoveWatermark.</p>
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set <p>Intelligent Watermark Removal Completion Event, valid when the event type is RemoveWatermark.</p>
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain <p>Copyright watermark extraction completion event, valid when the event type is ExtractCopyRightWatermarkComplete.</p>
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set <p>Copyright watermark extraction completion event, valid when the event type is ExtractCopyRightWatermarkComplete.</p>
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain <p>Audio/Video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set <p>Audio/Video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain <p>This field is invalid.</p>
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set <p>This field is invalid.</p>
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() Obtain <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) Set <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
 * @method MediaCastEvent getMediaCastStatusChangedEvent() Obtain <p>Media forwarding status change event, valid when the event type is MediaCastStatusChanged.</p>
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) Set <p>Media forwarding status change event, valid when the event type is MediaCastStatusChanged.</p>
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() Obtain <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) Set <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() Obtain <p>Adaptive bitrate task information. It is valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) Set <p>Adaptive bitrate task information. It is valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
 * @method ProcessMediaByMPS getProcessMediaByMPSCompleteEvent() Obtain <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
 * @method void setProcessMediaByMPSCompleteEvent(ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent) Set <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
 * @method AigcImageTask getAigcImageCompleteEvent() Obtain <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
 * @method void setAigcImageCompleteEvent(AigcImageTask $AigcImageCompleteEvent) Set <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
 * @method AigcVideoTask getAigcVideoCompleteEvent() Obtain <p>Information of the AIGC video generation task. Valid only when EventType is AigcVideoTaskComplete.</p>
 * @method void setAigcVideoCompleteEvent(AigcVideoTask $AigcVideoCompleteEvent) Set <p>Information of the AIGC video generation task. Valid only when EventType is AigcVideoTaskComplete.</p>
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkComplete() Obtain <p>Extract digital watermark information. Valid only when EventType is ExtractBlindWatermarkComplete.</p>
 * @method void setExtractBlindWatermarkComplete(ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete) Set <p>Extract digital watermark information. Valid only when EventType is ExtractBlindWatermarkComplete.</p>
 * @method SceneAigcImageTask getSceneAigcImageCompleteEvent() Obtain <p>AIGC scenario-based image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
 * @method void setSceneAigcImageCompleteEvent(SceneAigcImageTask $SceneAigcImageCompleteEvent) Set <p>AIGC scenario-based image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
 * @method ProcessImageAsyncTask getProcessImageAsyncCompleteEvent() Obtain <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
 * @method void setProcessImageAsyncCompleteEvent(ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent) Set <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementCompleteEvent() Obtain <p>AIGC custom entity information, this field has a value only when EventType is CreateAigcAdvancedCustomElementCompleteEvent.</p>
 * @method void setCreateAigcAdvancedCustomElementCompleteEvent(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent) Set <p>AIGC custom entity information, this field has a value only when EventType is CreateAigcAdvancedCustomElementCompleteEvent.</p>
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceCompleteEvent() Obtain <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
 * @method void setCreateAigcCustomVoiceCompleteEvent(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent) Set <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncCompleteEvent() Obtain <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
 * @method void setDescribeAigcFaceInfoAsyncCompleteEvent(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent) Set <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
 * @method AigcHunyuan3DTask getAigcHunyuan3DCompleteEvent() Obtain <p>AIGC Hunyuan 3D task info, this field has a value only when EventType is AigcHunyuan3DTaskComplete.</p>
 * @method void setAigcHunyuan3DCompleteEvent(AigcHunyuan3DTask $AigcHunyuan3DCompleteEvent) Set <p>AIGC Hunyuan 3D task info, this field has a value only when EventType is AigcHunyuan3DTaskComplete.</p>
 */
class EventContent extends AbstractModel
{
    /**
     * @var string <p>Event handler. The caller must call ConfirmEvents to acknowledge that the message has been received. The confirmation is valid for 30 seconds. After expiration, the event can be retrieved again.</p>
     */
    public $EventHandle;

    /**
     * @var string <p><b>Supported event types:</b></p><li>NewFileUpload: video upload completed;</li><li>ProcedureStateChanged: task flow status change;</li><li>FileDeleted: video deletion completed;</li><li>RestoreMediaComplete: video retrieval completion;</li><li>PullComplete: video pull completion;</li><li>EditMediaComplete: video editing completed;</li><li>SplitMediaComplete: video splitting completed;</li><li>ComposeMediaComplete: media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: intelligent watermark removal completion.</li><li>RebuildMediaComplete: audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: file attribute acquisition completion;</li><li>QualityInspectComplete: audio and video quality detection completed;</li><li>QualityEnhanceComplete: audio and video quality rebirth task completion;</li><li>PersistenceComplete: edit persistence completion;</li><li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>AigcHunyuan3DTaskComplete: AIGC Hunyuan 3D task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: asynchronously fetch AIGC face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: video transcoding completion;</li><li>ConcatComplete: video splicing completion;</li><li>ClipComplete: video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: video screenshot by time point.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask <p>File deletion event. Valid when the event type is FileDeleted.</p>
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask <p>Video pull completion event. Valid when the event type is PullComplete.</p>
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask <p>WeChat Publishing Completion Event, valid when the event type is WechatPublishComplete.</p>
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask <p>Intelligent Watermark Removal Completion Event, valid when the event type is RemoveWatermark.</p>
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask <p>Copyright watermark extraction completion event, valid when the event type is ExtractCopyRightWatermarkComplete.</p>
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask <p>Audio/Video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask <p>This field is invalid.</p>
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent <p>Media forwarding status change event, valid when the event type is MediaCastStatusChanged.</p>
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask <p>Adaptive bitrate task information. It is valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
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
     * @var AigcVideoTask <p>Information of the AIGC video generation task. Valid only when EventType is AigcVideoTaskComplete.</p>
     */
    public $AigcVideoCompleteEvent;

    /**
     * @var ExtractBlindWatermarkTask <p>Extract digital watermark information. Valid only when EventType is ExtractBlindWatermarkComplete.</p>
     */
    public $ExtractBlindWatermarkComplete;

    /**
     * @var SceneAigcImageTask <p>AIGC scenario-based image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
     */
    public $SceneAigcImageCompleteEvent;

    /**
     * @var ProcessImageAsyncTask <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
     */
    public $ProcessImageAsyncCompleteEvent;

    /**
     * @var CreateAigcAdvancedCustomElementTask <p>AIGC custom entity information, this field has a value only when EventType is CreateAigcAdvancedCustomElementCompleteEvent.</p>
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
     * @var AigcHunyuan3DTask <p>AIGC Hunyuan 3D task info, this field has a value only when EventType is AigcHunyuan3DTaskComplete.</p>
     */
    public $AigcHunyuan3DCompleteEvent;

    /**
     * @param string $EventHandle <p>Event handler. The caller must call ConfirmEvents to acknowledge that the message has been received. The confirmation is valid for 30 seconds. After expiration, the event can be retrieved again.</p>
     * @param string $EventType <p><b>Supported event types:</b></p><li>NewFileUpload: video upload completed;</li><li>ProcedureStateChanged: task flow status change;</li><li>FileDeleted: video deletion completed;</li><li>RestoreMediaComplete: video retrieval completion;</li><li>PullComplete: video pull completion;</li><li>EditMediaComplete: video editing completed;</li><li>SplitMediaComplete: video splitting completed;</li><li>ComposeMediaComplete: media file creation completion;</li><li>WechatMiniProgramPublishComplete: WeChat Mini Program Publishing Completed.</li><li>RemoveWatermark: intelligent watermark removal completion.</li><li>RebuildMediaComplete: audio and video quality rebirth completion event (not recommended).</li><li>ReviewAudioVideoComplete: audio/video moderation completed;</li><li>ExtractTraceWatermarkComplete: Traceability watermark extraction completed;</li><li>ExtractCopyRightWatermarkComplete: Extracting copyright watermark completion;</li><li>DescribeFileAttributesComplete: file attribute acquisition completion;</li><li>QualityInspectComplete: audio and video quality detection completed;</li><li>QualityEnhanceComplete: audio and video quality rebirth task completion;</li><li>PersistenceComplete: edit persistence completion;</li><li>ComplexAdaptiveDynamicStreamingComplete: complex adaptive bitstream task completion.</li><li>ProcessMediaByMPSComplete: MPS video processing completed.</li><li>AigcImageTaskComplete: AIGC image generation task completed.</li><li>AigcVideoTaskComplete: AIGC video generation task completed.</li><li>AigcHunyuan3DTaskComplete: AIGC Hunyuan 3D task completed.</li><li>DescribeAigcFaceInfoAsyncComplete: asynchronously fetch AIGC face information task completed.</li><b>Event types compatible with the 2017 version:</b><li>TranscodeComplete: video transcoding completion;</li><li>ConcatComplete: video splicing completion;</li><li>ClipComplete: video editing completed;</li><li>CreateImageSpriteComplete: Video thumbnail capture completion;</li><li>CreateSnapshotByTimeOffsetComplete: video screenshot by time point.</li>
     * @param FileUploadTask $FileUploadEvent <p>Video upload completion event. Valid when the event type is NewFileUpload.</p>
     * @param ProcedureTask $ProcedureStateChangeEvent <p>Task flow status change event. Valid when the event type is ProcedureStateChanged.</p>
     * @param FileDeleteTask $FileDeleteEvent <p>File deletion event. Valid when the event type is FileDeleted.</p>
     * @param PullUploadTask $PullCompleteEvent <p>Video pull completion event. Valid when the event type is PullComplete.</p>
     * @param EditMediaTask $EditMediaCompleteEvent <p>Video editing completion event. Valid when the event type is EditMediaComplete.</p>
     * @param SplitMediaTask $SplitMediaCompleteEvent <p>Video splitting completion event. Valid when the event type is SplitMediaComplete.</p>
     * @param ComposeMediaTask $ComposeMediaCompleteEvent <p>Media file creation task completion event. Valid when the event type is ComposeMediaComplete.</p>
     * @param ClipTask2017 $ClipCompleteEvent <p>Video editing completion event. Valid when the event type is ClipComplete.</p>
     * @param TranscodeTask2017 $TranscodeCompleteEvent <p>Video transcoding completion event. Valid when the event type is TranscodeComplete.</p>
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent <p>Video thumbnail capture completion event. Valid when the event type is CreateImageSpriteComplete.</p>
     * @param ConcatTask2017 $ConcatCompleteEvent <p>Video splicing completion event. Valid when the event type is ConcatComplete.</p>
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent <p>Video screenshot by time point completion event. Valid when the event type is CreateSnapshotByTimeOffsetComplete.</p>
     * @param WechatPublishTask $WechatPublishCompleteEvent <p>WeChat Publishing Completion Event, valid when the event type is WechatPublishComplete.</p>
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent <p>WeChat Mini Program Publishing Task Completion Event. Valid when the event type is WechatMiniProgramPublishComplete.</p>
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent <p>Intelligent Watermark Removal Completion Event, valid when the event type is RemoveWatermark.</p>
     * @param RestoreMediaTask $RestoreMediaCompleteEvent <p>Video retrieval completion event. Valid when the event type is RestoreMediaComplete.</p>
     * @param RebuildMediaTask $RebuildMediaCompleteEvent <p>Audio and video quality rebirth completion event. Valid when the event type is RebuildMediaComplete.</p>
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent <p>Traceability watermark extraction completion event. Valid when the event type is ExtractTraceWatermarkComplete.</p>
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent <p>Copyright watermark extraction completion event, valid when the event type is ExtractCopyRightWatermarkComplete.</p>
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent <p>Audio/Video moderation completed event. Valid when the event type is ReviewAudioVideoComplete.</p>
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent <p>This field is invalid.</p>
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent <p>File attribute acquisition completion event. Valid when the event type is DescribeFileAttributesComplete.</p>
     * @param QualityInspectTask $QualityInspectCompleteEvent <p>Audio and video quality detection completion event. Valid when the event type is QualityInspectComplete.</p>
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent <p>Audio and video quality rebirth completion event. Valid when the event type is QualityEnhanceComplete.</p>
     * @param MediaCastEvent $MediaCastStatusChangedEvent <p>Media forwarding status change event, valid when the event type is MediaCastStatusChanged.</p>
     * @param PersistenceCompleteTask $PersistenceCompleteEvent <p>Editing solidification completion event. Valid when the event type is PersistenceComplete.</p>
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent <p>Adaptive bitrate task information. It is valid only when EventType is ComplexAdaptiveDynamicStreamingComplete.</p>
     * @param ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent <p>MPS video processing task information. Valid only when EventType is ProcessMediaByMPSComplete.</p>
     * @param AigcImageTask $AigcImageCompleteEvent <p>AIGC image generation task info, valid only when EventType is AigcImageTaskComplete.</p>
     * @param AigcVideoTask $AigcVideoCompleteEvent <p>Information of the AIGC video generation task. Valid only when EventType is AigcVideoTaskComplete.</p>
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete <p>Extract digital watermark information. Valid only when EventType is ExtractBlindWatermarkComplete.</p>
     * @param SceneAigcImageTask $SceneAigcImageCompleteEvent <p>AIGC scenario-based image generation task info. Valid only when EventType is SceneAigcImageCompleteEvent.</p>
     * @param ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent <p>Image asynchronous task processing information. Valid only when EventType is ProcessImageAsyncCompleteEvent.</p>
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent <p>AIGC custom entity information, this field has a value only when EventType is CreateAigcAdvancedCustomElementCompleteEvent.</p>
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent <p>AIGC custom tone information. This field has a value only when EventType is CreateAigcCustomVoiceCompleteEvent.</p>
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent <p>Asynchronously fetch AIGC face information. This field has a value only when EventType is DescribeAigcFaceInfoAsyncComplete.</p>
     * @param AigcHunyuan3DTask $AigcHunyuan3DCompleteEvent <p>AIGC Hunyuan 3D task info, this field has a value only when EventType is AigcHunyuan3DTaskComplete.</p>
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

        if (array_key_exists("AigcHunyuan3DCompleteEvent",$param) and $param["AigcHunyuan3DCompleteEvent"] !== null) {
            $this->AigcHunyuan3DCompleteEvent = new AigcHunyuan3DTask();
            $this->AigcHunyuan3DCompleteEvent->deserialize($param["AigcHunyuan3DCompleteEvent"]);
        }
    }
}
