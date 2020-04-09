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
 * @method string getEventType() Obtain <b>Supported event type:</b>
<li>NewFileUpload: video upload completion;</li>
<li>ProcedureStateChanged: task flow status change;</li>
<li>FileDeleted: video deletion completion;</li>
<li>PullComplete: video pull for upload completion;</li>
<li>EditMediaComplete: video editing completion;</li>
<li>WechatPublishComplete: release on WeChat completion;</li>
<li>ComposeMediaComplete: media file composing completion;</li>
<li>WechatMiniProgramPublishComplete: release on WeChat Mini Program completion.</li>
<b>Event types compatible with v2017:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: video splicing completion;</li>
<li>ClipComplete: video clipping completion;</li>
<li>CreateImageSpriteComplete: image sprite generating completion;</li>
<li>CreateSnapshotByTimeOffsetComplete: time point screencapturing completion.</li>
 * @method void setEventType(string $EventType) Set <b>Supported event type:</b>
<li>NewFileUpload: video upload completion;</li>
<li>ProcedureStateChanged: task flow status change;</li>
<li>FileDeleted: video deletion completion;</li>
<li>PullComplete: video pull for upload completion;</li>
<li>EditMediaComplete: video editing completion;</li>
<li>WechatPublishComplete: release on WeChat completion;</li>
<li>ComposeMediaComplete: media file composing completion;</li>
<li>WechatMiniProgramPublishComplete: release on WeChat Mini Program completion.</li>
<b>Event types compatible with v2017:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: video splicing completion;</li>
<li>ClipComplete: video clipping completion;</li>
<li>CreateImageSpriteComplete: image sprite generating completion;</li>
<li>CreateSnapshotByTimeOffsetComplete: time point screencapturing completion.</li>
 * @method FileUploadTask getFileUploadEvent() Obtain Video upload completion event, which is valid if the event type is `NewFileUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) Set Video upload completion event, which is valid if the event type is `NewFileUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ProcedureTask getProcedureStateChangeEvent() Obtain Task flow status change event, which is valid if the event type is `ProcedureStateChanged`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) Set Task flow status change event, which is valid if the event type is `ProcedureStateChanged`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method FileDeleteTask getFileDeleteEvent() Obtain File deletion event, which is valid if the event type is `FileDeleted`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) Set File deletion event, which is valid if the event type is `FileDeleted`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PullUploadTask getPullCompleteEvent() Obtain Video pull for upload completion event, which is valid if the event type is `PullComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) Set Video pull for upload completion event, which is valid if the event type is `PullComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaCompleteEvent() Obtain Video editing completion event, which is valid if the event type is `EditMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) Set Video editing completion event, which is valid if the event type is `EditMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method WechatPublishTask getWechatPublishCompleteEvent() Obtain Release on WeChat completion event, which is valid if the event type is `WechatPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) Set Release on WeChat completion event, which is valid if the event type is `WechatPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TranscodeTask2017 getTranscodeCompleteEvent() Obtain Video transcoding completion event, which is valid if the event type is `TranscodeComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) Set Video transcoding completion event, which is valid if the event type is `TranscodeComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ConcatTask2017 getConcatCompleteEvent() Obtain Video splicing completion event, which is valid if the event type is `ConcatComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) Set Video splicing completion event, which is valid if the event type is `ConcatComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ClipTask2017 getClipCompleteEvent() Obtain Video clipping completion event, which is valid if the event type is `ClipComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) Set Video clipping completion event, which is valid if the event type is `ClipComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() Obtain Image sprite generating completion event, which is valid if the event type is `CreateImageSpriteComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) Set Image sprite generating completion event, which is valid if the event type is `CreateImageSpriteComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() Obtain Time point screencapturing completion event, which is valid when the event type is `CreateSnapshotByTimeOffsetComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) Set Time point screencapturing completion event, which is valid when the event type is `CreateSnapshotByTimeOffsetComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaCompleteEvent() Obtain Media file composing task completion event, which is valid when the event type is `ComposeMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) Set Media file composing task completion event, which is valid when the event type is `ComposeMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() Obtain Release on WeChat Mini Program task completion event, which is valid if the event type is `WechatMiniProgramPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) Set Release on WeChat Mini Program task completion event, which is valid if the event type is `WechatMiniProgramPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EventContent extends AbstractModel
{
    /**
     * @var string Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     */
    public $EventHandle;

    /**
     * @var string <b>Supported event type:</b>
<li>NewFileUpload: video upload completion;</li>
<li>ProcedureStateChanged: task flow status change;</li>
<li>FileDeleted: video deletion completion;</li>
<li>PullComplete: video pull for upload completion;</li>
<li>EditMediaComplete: video editing completion;</li>
<li>WechatPublishComplete: release on WeChat completion;</li>
<li>ComposeMediaComplete: media file composing completion;</li>
<li>WechatMiniProgramPublishComplete: release on WeChat Mini Program completion.</li>
<b>Event types compatible with v2017:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: video splicing completion;</li>
<li>ClipComplete: video clipping completion;</li>
<li>CreateImageSpriteComplete: image sprite generating completion;</li>
<li>CreateSnapshotByTimeOffsetComplete: time point screencapturing completion.</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask Video upload completion event, which is valid if the event type is `NewFileUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask Task flow status change event, which is valid if the event type is `ProcedureStateChanged`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask File deletion event, which is valid if the event type is `FileDeleted`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask Video pull for upload completion event, which is valid if the event type is `PullComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask Video editing completion event, which is valid if the event type is `EditMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaCompleteEvent;

    /**
     * @var WechatPublishTask Release on WeChat completion event, which is valid if the event type is `WechatPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var TranscodeTask2017 Video transcoding completion event, which is valid if the event type is `TranscodeComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeCompleteEvent;

    /**
     * @var ConcatTask2017 Video splicing completion event, which is valid if the event type is `ConcatComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConcatCompleteEvent;

    /**
     * @var ClipTask2017 Video clipping completion event, which is valid if the event type is `ClipComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClipCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 Image sprite generating completion event, which is valid if the event type is `CreateImageSpriteComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 Time point screencapturing completion event, which is valid when the event type is `CreateSnapshotByTimeOffsetComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var ComposeMediaTask Media file composing task completion event, which is valid when the event type is `ComposeMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask Release on WeChat Mini Program task completion event, which is valid if the event type is `WechatMiniProgramPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @param string $EventHandle Event handler. The caller must call `ConfirmEvents` to confirm that the message has been received, and the confirmation is valid for 30 seconds. After the confirmation expires, the event can be obtained again.
     * @param string $EventType <b>Supported event type:</b>
<li>NewFileUpload: video upload completion;</li>
<li>ProcedureStateChanged: task flow status change;</li>
<li>FileDeleted: video deletion completion;</li>
<li>PullComplete: video pull for upload completion;</li>
<li>EditMediaComplete: video editing completion;</li>
<li>WechatPublishComplete: release on WeChat completion;</li>
<li>ComposeMediaComplete: media file composing completion;</li>
<li>WechatMiniProgramPublishComplete: release on WeChat Mini Program completion.</li>
<b>Event types compatible with v2017:</b>
<li>TranscodeComplete: video transcoding completion;</li>
<li>ConcatComplete: video splicing completion;</li>
<li>ClipComplete: video clipping completion;</li>
<li>CreateImageSpriteComplete: image sprite generating completion;</li>
<li>CreateSnapshotByTimeOffsetComplete: time point screencapturing completion.</li>
     * @param FileUploadTask $FileUploadEvent Video upload completion event, which is valid if the event type is `NewFileUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ProcedureTask $ProcedureStateChangeEvent Task flow status change event, which is valid if the event type is `ProcedureStateChanged`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param FileDeleteTask $FileDeleteEvent File deletion event, which is valid if the event type is `FileDeleted`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PullUploadTask $PullCompleteEvent Video pull for upload completion event, which is valid if the event type is `PullComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaCompleteEvent Video editing completion event, which is valid if the event type is `EditMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param WechatPublishTask $WechatPublishCompleteEvent Release on WeChat completion event, which is valid if the event type is `WechatPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTask2017 $TranscodeCompleteEvent Video transcoding completion event, which is valid if the event type is `TranscodeComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ConcatTask2017 $ConcatCompleteEvent Video splicing completion event, which is valid if the event type is `ConcatComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ClipTask2017 $ClipCompleteEvent Video clipping completion event, which is valid if the event type is `ClipComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent Image sprite generating completion event, which is valid if the event type is `CreateImageSpriteComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent Time point screencapturing completion event, which is valid when the event type is `CreateSnapshotByTimeOffsetComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaCompleteEvent Media file composing task completion event, which is valid when the event type is `ComposeMediaComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent Release on WeChat Mini Program task completion event, which is valid if the event type is `WechatMiniProgramPublishComplete`.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("WechatPublishCompleteEvent",$param) and $param["WechatPublishCompleteEvent"] !== null) {
            $this->WechatPublishCompleteEvent = new WechatPublishTask();
            $this->WechatPublishCompleteEvent->deserialize($param["WechatPublishCompleteEvent"]);
        }

        if (array_key_exists("TranscodeCompleteEvent",$param) and $param["TranscodeCompleteEvent"] !== null) {
            $this->TranscodeCompleteEvent = new TranscodeTask2017();
            $this->TranscodeCompleteEvent->deserialize($param["TranscodeCompleteEvent"]);
        }

        if (array_key_exists("ConcatCompleteEvent",$param) and $param["ConcatCompleteEvent"] !== null) {
            $this->ConcatCompleteEvent = new ConcatTask2017();
            $this->ConcatCompleteEvent->deserialize($param["ConcatCompleteEvent"]);
        }

        if (array_key_exists("ClipCompleteEvent",$param) and $param["ClipCompleteEvent"] !== null) {
            $this->ClipCompleteEvent = new ClipTask2017();
            $this->ClipCompleteEvent->deserialize($param["ClipCompleteEvent"]);
        }

        if (array_key_exists("CreateImageSpriteCompleteEvent",$param) and $param["CreateImageSpriteCompleteEvent"] !== null) {
            $this->CreateImageSpriteCompleteEvent = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteCompleteEvent->deserialize($param["CreateImageSpriteCompleteEvent"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetCompleteEvent",$param) and $param["SnapshotByTimeOffsetCompleteEvent"] !== null) {
            $this->SnapshotByTimeOffsetCompleteEvent = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetCompleteEvent->deserialize($param["SnapshotByTimeOffsetCompleteEvent"]);
        }

        if (array_key_exists("ComposeMediaCompleteEvent",$param) and $param["ComposeMediaCompleteEvent"] !== null) {
            $this->ComposeMediaCompleteEvent = new ComposeMediaTask();
            $this->ComposeMediaCompleteEvent->deserialize($param["ComposeMediaCompleteEvent"]);
        }

        if (array_key_exists("WechatMiniProgramPublishCompleteEvent",$param) and $param["WechatMiniProgramPublishCompleteEvent"] !== null) {
            $this->WechatMiniProgramPublishCompleteEvent = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishCompleteEvent->deserialize($param["WechatMiniProgramPublishCompleteEvent"]);
        }
    }
}
