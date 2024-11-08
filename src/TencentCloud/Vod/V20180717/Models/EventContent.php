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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event notification content, where TranscodeCompleteEvent, ConcatCompleteEvent, ClipCompleteEvent, CreateImageSpriteCompleteEvent, and SnapshotByTimeOffsetCompleteEvent are event notifications for tasks that are initiated by v2017-compatible APIs.
 *
 * @method string getEventHandle() Obtain Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
 * @method void setEventHandle(string $EventHandle) Set Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
 * @method string getEventType() Obtain <b>Supported event types:</b><li>`NewFileUpload`: Video uploaded.</li><li>`ProcedureStateChanged`: Task flow status changed.</li><li>`FileDeleted`: Video deleted.</li><li>`RestoreMediaComplete`: Video retrieved.</li><li>`PullComplete`: Finished video pulling.</li><li>`EditMediaComplete`: Finished video editing.</li><li>`SplitMediaComplete`: Finished video splitting.</li><li>`ComposeMediaComplete`: Finished producing the media file.</li><li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li><li>`RemoveWatermark`: Watermark removed.</li><li>`RebuildMediaComplete`: Finished audio/video remastering.</li><li>`ReviewAudioVideoComplete`: Finished moderation.</li><li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li><li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li><li>`QualityEnhanceComplete`: FinishedQualityEnhance.</li><li>`PersistenceComplete`: Clipping persistented. </li><li>`ComplexAdaptiveDynamicStreamingComplete `: Finished complex adaptive bitrate streaming processing. </li><b>v2017 task types:</b><li>`TranscodeComplete`: Finished video transcoding.</li><li>`ConcatComplete`: Finished video splicing.</li><li>`ClipComplete`: Finished video clipping.</li><li>`CreateImageSpriteComplete`: Finished image sprite generation.</li><li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
 * @method void setEventType(string $EventType) Set <b>Supported event types:</b><li>`NewFileUpload`: Video uploaded.</li><li>`ProcedureStateChanged`: Task flow status changed.</li><li>`FileDeleted`: Video deleted.</li><li>`RestoreMediaComplete`: Video retrieved.</li><li>`PullComplete`: Finished video pulling.</li><li>`EditMediaComplete`: Finished video editing.</li><li>`SplitMediaComplete`: Finished video splitting.</li><li>`ComposeMediaComplete`: Finished producing the media file.</li><li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li><li>`RemoveWatermark`: Watermark removed.</li><li>`RebuildMediaComplete`: Finished audio/video remastering.</li><li>`ReviewAudioVideoComplete`: Finished moderation.</li><li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li><li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li><li>`QualityEnhanceComplete`: FinishedQualityEnhance.</li><li>`PersistenceComplete`: Clipping persistented. </li><li>`ComplexAdaptiveDynamicStreamingComplete `: Finished complex adaptive bitrate streaming processing. </li><b>v2017 task types:</b><li>`TranscodeComplete`: Finished video transcoding.</li><li>`ConcatComplete`: Finished video splicing.</li><li>`ClipComplete`: Finished video clipping.</li><li>`CreateImageSpriteComplete`: Finished image sprite generation.</li><li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain Media uploaded event, valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set Media uploaded event, valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain Task flow status changed event, valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set Task flow status changed event, valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method FileDeleteTask getFileDeleteEvent() Obtain File deleted event, valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set File deleted event, valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method PullUploadTask getPullCompleteEvent() Obtain PullUpload completion event, valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set PullUpload completion event, valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain EditMedia completion event, valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set EditMedia completion event, valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain SplitMedia completion event, valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set SplitMedia completion event, valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain ComposeMedia completion event, valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set ComposeMedia completion event, valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ClipTask2017 getClipCompleteEvent() Obtain Expired.
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set Expired.
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain Expired.
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set Expired.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain Expired.
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set Expired.
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain Expired.
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set Expired.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain Expired.
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set Expired.
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain Expired.
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set Expired.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain WechatMiniProgramPublish completion event, valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set WechatMiniProgramPublish completion event, valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain RemoveWatermark completion event, valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set RemoveWatermark completion event, valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain RestoreMedia completion event, valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set RestoreMedia completion event, valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain RebuildMedia completion event, valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set RebuildMedia completion event, valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain Expired.
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set Expired.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain Expired.
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set Expired.
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain ReviewAudioVideo completion event, valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set ReviewAudioVideo completion event, valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain Expired.
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set Expired.
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain DescribeFileAttributes completion event, valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set DescribeFileAttributes completion event, valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain QualityInspect completion event, valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set QualityInspect completion event, valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() Obtain Remaster completion event, valid when the event type is QualityEnhanceComplete.
Pay attention to: this field may return null, indicating that no valid value can be obtained
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) Set Remaster completion event, valid when the event type is QualityEnhanceComplete.
Pay attention to: this field may return null, indicating that no valid value can be obtained
 * @method MediaCastEvent getMediaCastStatusChangedEvent() Obtain MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) Set MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() Obtain Persistence completion event, valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) Set Persistence completion event, valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() Obtain Complex adaptive bitrate streaming processing completion event, valid when the event type is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) Set Complex adaptive bitrate streaming processing completion event, valid when the event type is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class EventContent extends AbstractModel
{
    /**
     * @var string Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     */
    public $EventHandle;

    /**
     * @var string <b>Supported event types:</b><li>`NewFileUpload`: Video uploaded.</li><li>`ProcedureStateChanged`: Task flow status changed.</li><li>`FileDeleted`: Video deleted.</li><li>`RestoreMediaComplete`: Video retrieved.</li><li>`PullComplete`: Finished video pulling.</li><li>`EditMediaComplete`: Finished video editing.</li><li>`SplitMediaComplete`: Finished video splitting.</li><li>`ComposeMediaComplete`: Finished producing the media file.</li><li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li><li>`RemoveWatermark`: Watermark removed.</li><li>`RebuildMediaComplete`: Finished audio/video remastering.</li><li>`ReviewAudioVideoComplete`: Finished moderation.</li><li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li><li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li><li>`QualityEnhanceComplete`: FinishedQualityEnhance.</li><li>`PersistenceComplete`: Clipping persistented. </li><li>`ComplexAdaptiveDynamicStreamingComplete `: Finished complex adaptive bitrate streaming processing. </li><b>v2017 task types:</b><li>`TranscodeComplete`: Finished video transcoding.</li><li>`ConcatComplete`: Finished video splicing.</li><li>`ClipComplete`: Finished video clipping.</li><li>`CreateImageSpriteComplete`: Finished image sprite generation.</li><li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask Media uploaded event, valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask Task flow status changed event, valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask File deleted event, valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask PullUpload completion event, valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask EditMedia completion event, valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask SplitMedia completion event, valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask ComposeMedia completion event, valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 Expired.
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 Expired.
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 Expired.
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 Expired.
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 Expired.
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask Expired.
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask WechatMiniProgramPublish completion event, valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask RemoveWatermark completion event, valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask RestoreMedia completion event, valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask RebuildMedia completion event, valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask Expired.
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask Expired.
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask ReviewAudioVideo completion event, valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask Expired.
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask DescribeFileAttributes completion event, valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask QualityInspect completion event, valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask Remaster completion event, valid when the event type is QualityEnhanceComplete.
Pay attention to: this field may return null, indicating that no valid value can be obtained
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask Persistence completion event, valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask Complex adaptive bitrate streaming processing completion event, valid when the event type is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @param string $EventHandle Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     * @param string $EventType <b>Supported event types:</b><li>`NewFileUpload`: Video uploaded.</li><li>`ProcedureStateChanged`: Task flow status changed.</li><li>`FileDeleted`: Video deleted.</li><li>`RestoreMediaComplete`: Video retrieved.</li><li>`PullComplete`: Finished video pulling.</li><li>`EditMediaComplete`: Finished video editing.</li><li>`SplitMediaComplete`: Finished video splitting.</li><li>`ComposeMediaComplete`: Finished producing the media file.</li><li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li><li>`RemoveWatermark`: Watermark removed.</li><li>`RebuildMediaComplete`: Finished audio/video remastering.</li><li>`ReviewAudioVideoComplete`: Finished moderation.</li><li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li><li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li><li>`QualityEnhanceComplete`: FinishedQualityEnhance.</li><li>`PersistenceComplete`: Clipping persistented. </li><li>`ComplexAdaptiveDynamicStreamingComplete `: Finished complex adaptive bitrate streaming processing. </li><b>v2017 task types:</b><li>`TranscodeComplete`: Finished video transcoding.</li><li>`ConcatComplete`: Finished video splicing.</li><li>`ClipComplete`: Finished video clipping.</li><li>`CreateImageSpriteComplete`: Finished image sprite generation.</li><li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
     * @param FileUploadTask $FileUploadEvent Media uploaded event, valid when the event type is NewFileUpload.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ProcedureTask $ProcedureStateChangeEvent Task flow status changed event, valid when the event type is ProcedureStateChanged.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param FileDeleteTask $FileDeleteEvent File deleted event, valid when the event type is FileDeleted.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param PullUploadTask $PullCompleteEvent PullUpload completion event, valid when the event type is PullComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param EditMediaTask $EditMediaCompleteEvent EditMedia completion event, valid when the event type is EditMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SplitMediaTask $SplitMediaCompleteEvent SplitMedia completion event, valid when the event type is SplitMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent ComposeMedia completion event, valid when the event type is ComposeMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ClipTask2017 $ClipCompleteEvent Expired.
     * @param TranscodeTask2017 $TranscodeCompleteEvent Expired.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent Expired.
     * @param ConcatTask2017 $ConcatCompleteEvent Expired.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent Expired.
     * @param WechatPublishTask $WechatPublishCompleteEvent Expired.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent WechatMiniProgramPublish completion event, valid when the event type is WechatMiniProgramPublishComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent RemoveWatermark completion event, valid when the event type is RemoveWatermark.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RestoreMediaTask $RestoreMediaCompleteEvent RestoreMedia completion event, valid when the event type is RestoreMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RebuildMediaTask $RebuildMediaCompleteEvent RebuildMedia completion event, valid when the event type is RebuildMediaComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent Expired.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent Expired.
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent ReviewAudioVideo completion event, valid when the event type is ReviewAudioVideoComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent Expired.
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent DescribeFileAttributes completion event, valid when the event type is DescribeFileAttributesComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityInspectTask $QualityInspectCompleteEvent QualityInspect completion event, valid when the event type is QualityInspectComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent Remaster completion event, valid when the event type is QualityEnhanceComplete.
Pay attention to: this field may return null, indicating that no valid value can be obtained
     * @param MediaCastEvent $MediaCastStatusChangedEvent MediaCastStatus changed event, valid when the event type is MediaCastStatusChanged.
Pay attention to: this field may return null, indicating that no valid value can be obtained.
     * @param PersistenceCompleteTask $PersistenceCompleteEvent Persistence completion event, valid when the event type is PersistenceComplete.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent Complex adaptive bitrate streaming processing completion event, valid when the event type is ComplexAdaptiveDynamicStreamingComplete.
Note: This field may return null, indicating that no valid value can be obtained.
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
    }
}
