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
 * @method string getEventType() Obtain <b>Supported event types:</b>
<li>`NewFileUpload`: Video uploaded.</li>
<li>`ProcedureStateChanged`: Task flow status changed.</li>
<li>`FileDeleted`: Video deleted.</li>
<li>`RestoreMediaComplete`: Video retrieved.</li>
<li>`PullComplete`: Finished video pulling.</li>
<li>`EditMediaComplete`: Finished video editing.</li>
<li>`SplitMediaComplete`: Finished video splitting.</li>
<li>`ComposeMediaComplete`: Finished producing the media file.</li>
<li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li>
<li>`RemoveWatermark`: Watermark removed.</li>
<li>`RebuildMediaComplete`: Finished audio/video remastering.</li>
<li>`ReviewAudioVideoComplete`: Finished moderation.</li>
<li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li>
<li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li>
<b>v2017 task types:</b>
<li>`TranscodeComplete`: Finished video transcoding.</li>
<li>`ConcatComplete`: Finished video splicing.</li>
<li>`ClipComplete`: Finished video clipping.</li>
<li>`CreateImageSpriteComplete`: Finished image sprite generation.</li>
<li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
 * @method void setEventType(string $EventType) Set <b>Supported event types:</b>
<li>`NewFileUpload`: Video uploaded.</li>
<li>`ProcedureStateChanged`: Task flow status changed.</li>
<li>`FileDeleted`: Video deleted.</li>
<li>`RestoreMediaComplete`: Video retrieved.</li>
<li>`PullComplete`: Finished video pulling.</li>
<li>`EditMediaComplete`: Finished video editing.</li>
<li>`SplitMediaComplete`: Finished video splitting.</li>
<li>`ComposeMediaComplete`: Finished producing the media file.</li>
<li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li>
<li>`RemoveWatermark`: Watermark removed.</li>
<li>`RebuildMediaComplete`: Finished audio/video remastering.</li>
<li>`ReviewAudioVideoComplete`: Finished moderation.</li>
<li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li>
<li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li>
<b>v2017 task types:</b>
<li>`TranscodeComplete`: Finished video transcoding.</li>
<li>`ConcatComplete`: Finished video splicing.</li>
<li>`ClipComplete`: Finished video clipping.</li>
<li>`CreateImageSpriteComplete`: Finished image sprite generation.</li>
<li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain 
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set 
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain 
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set 
 * @method FileDeleteTask getFileDeleteEvent() Obtain 
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set 
 * @method PullUploadTask getPullCompleteEvent() Obtain 
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set 
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain 
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set 
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain The notification for completing video splitting, which is valid if the event type is `SplitMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set The notification for completing video splitting, which is valid if the event type is `SplitMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain 
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set 
 * @method ClipTask2017 getClipCompleteEvent() Obtain 
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set 
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain 
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set 
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain 
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set 
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain 
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set 
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain 
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set 
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain 
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set 
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain 
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set 
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain The notification for completing watermark removal. This parameter is valid only if the event type is `RemoveWatermark`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set The notification for completing watermark removal. This parameter is valid only if the event type is `RemoveWatermark`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain The notification for completing video retrieval. This parameter is valid if the event type is `RestoreMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set The notification for completing video retrieval. This parameter is valid if the event type is `RestoreMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain The notification for completing audio/video remastering. This parameter is valid only if the event type is `RebuildMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set The notification for completing audio/video remastering. This parameter is valid only if the event type is `RebuildMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain The notification for completing digital watermark extraction. This parameter is valid only if `EventType` is `ExtractTraceWatermarkComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set The notification for completing digital watermark extraction. This parameter is valid only if `EventType` is `ExtractTraceWatermarkComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain 
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set 
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain 
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set 
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain 
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set 
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain 
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set 
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain 
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set 
 */
class EventContent extends AbstractModel
{
    /**
     * @var string Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     */
    public $EventHandle;

    /**
     * @var string <b>Supported event types:</b>
<li>`NewFileUpload`: Video uploaded.</li>
<li>`ProcedureStateChanged`: Task flow status changed.</li>
<li>`FileDeleted`: Video deleted.</li>
<li>`RestoreMediaComplete`: Video retrieved.</li>
<li>`PullComplete`: Finished video pulling.</li>
<li>`EditMediaComplete`: Finished video editing.</li>
<li>`SplitMediaComplete`: Finished video splitting.</li>
<li>`ComposeMediaComplete`: Finished producing the media file.</li>
<li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li>
<li>`RemoveWatermark`: Watermark removed.</li>
<li>`RebuildMediaComplete`: Finished audio/video remastering.</li>
<li>`ReviewAudioVideoComplete`: Finished moderation.</li>
<li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li>
<li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li>
<b>v2017 task types:</b>
<li>`TranscodeComplete`: Finished video transcoding.</li>
<li>`ConcatComplete`: Finished video splicing.</li>
<li>`ClipComplete`: Finished video clipping.</li>
<li>`CreateImageSpriteComplete`: Finished image sprite generation.</li>
<li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask 
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask 
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask 
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask 
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask 
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask The notification for completing video splitting, which is valid if the event type is `SplitMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask 
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask 
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask 
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask The notification for completing watermark removal. This parameter is valid only if the event type is `RemoveWatermark`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask The notification for completing video retrieval. This parameter is valid if the event type is `RestoreMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask The notification for completing audio/video remastering. This parameter is valid only if the event type is `RebuildMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask The notification for completing digital watermark extraction. This parameter is valid only if `EventType` is `ExtractTraceWatermarkComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask 
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask 
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask 
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask 
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask 
     */
    public $QualityInspectCompleteEvent;

    /**
     * @param string $EventHandle Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     * @param string $EventType <b>Supported event types:</b>
<li>`NewFileUpload`: Video uploaded.</li>
<li>`ProcedureStateChanged`: Task flow status changed.</li>
<li>`FileDeleted`: Video deleted.</li>
<li>`RestoreMediaComplete`: Video retrieved.</li>
<li>`PullComplete`: Finished video pulling.</li>
<li>`EditMediaComplete`: Finished video editing.</li>
<li>`SplitMediaComplete`: Finished video splitting.</li>
<li>`ComposeMediaComplete`: Finished producing the media file.</li>
<li>`WechatMiniProgramPublishComplete`: Finished publishing on Weixin Mini Program.</li>
<li>`RemoveWatermark`: Watermark removed.</li>
<li>`RebuildMediaComplete`: Finished audio/video remastering.</li>
<li>`ReviewAudioVideoComplete`: Finished moderation.</li>
<li>`ExtractTraceWatermarkComplete`: Finished digital watermark extraction.</li>
<li>`DescribeFileAttributesComplete`: Finished getting file attributes.</li>
<b>v2017 task types:</b>
<li>`TranscodeComplete`: Finished video transcoding.</li>
<li>`ConcatComplete`: Finished video splicing.</li>
<li>`ClipComplete`: Finished video clipping.</li>
<li>`CreateImageSpriteComplete`: Finished image sprite generation.</li>
<li>`CreateSnapshotByTimeOffsetComplete`: Finished time point screencapturing.</li>
     * @param FileUploadTask $FileUploadEvent 
     * @param ProcedureTask $ProcedureStateChangeEvent 
     * @param FileDeleteTask $FileDeleteEvent 
     * @param PullUploadTask $PullCompleteEvent 
     * @param EditMediaTask $EditMediaCompleteEvent 
     * @param SplitMediaTask $SplitMediaCompleteEvent The notification for completing video splitting, which is valid if the event type is `SplitMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent 
     * @param ClipTask2017 $ClipCompleteEvent 
     * @param TranscodeTask2017 $TranscodeCompleteEvent 
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent 
     * @param ConcatTask2017 $ConcatCompleteEvent 
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent 
     * @param WechatPublishTask $WechatPublishCompleteEvent 
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent 
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent The notification for completing watermark removal. This parameter is valid only if the event type is `RemoveWatermark`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RestoreMediaTask $RestoreMediaCompleteEvent The notification for completing video retrieval. This parameter is valid if the event type is `RestoreMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RebuildMediaTask $RebuildMediaCompleteEvent The notification for completing audio/video remastering. This parameter is valid only if the event type is `RebuildMediaComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent The notification for completing digital watermark extraction. This parameter is valid only if `EventType` is `ExtractTraceWatermarkComplete`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent 
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent 
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent 
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent 
     * @param QualityInspectTask $QualityInspectCompleteEvent 
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
    }
}
