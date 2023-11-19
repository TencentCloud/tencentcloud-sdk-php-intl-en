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
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method FileDeleteTask getFileDeleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method PullUploadTask getPullCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ClipTask2017 getClipCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityInspectTask getQualityInspectCompleteEvent() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) Set 
Note: This field may return null, indicating that no valid value can be obtained.
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
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask 
Note: This field may return null, indicating that no valid value can be obtained.
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
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ProcedureTask $ProcedureStateChangeEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param FileDeleteTask $FileDeleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param PullUploadTask $PullCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param EditMediaTask $EditMediaCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SplitMediaTask $SplitMediaCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ClipTask2017 $ClipCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TranscodeTask2017 $TranscodeCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ConcatTask2017 $ConcatCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param WechatPublishTask $WechatPublishCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RestoreMediaTask $RestoreMediaCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RebuildMediaTask $RebuildMediaCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityInspectTask $QualityInspectCompleteEvent 
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
    }
}
