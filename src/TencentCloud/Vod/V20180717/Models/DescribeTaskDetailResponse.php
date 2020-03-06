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
 * @method string getTaskType() Obtain Task type. Valid values:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>WechatPublish: release on WeChat task;</li>
<li>WechatMiniProgramPublish: release in WeChat Mini Program task;</li>
<li>ComposeMedia: media file composing task;</li>
<li>PullUpload: media file pulling for upload task.</li>

Task types compatible with v2017:
<li>Transcode: transcoding task;</li>
<li>SnapshotByTimeOffset: screencapturing task</li>
<li>Concat: video splicing task;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: image sprite generating task.</li>
 * @method void setTaskType(string $TaskType) Set Task type. Valid values:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>WechatPublish: release on WeChat task;</li>
<li>WechatMiniProgramPublish: release in WeChat Mini Program task;</li>
<li>ComposeMedia: media file composing task;</li>
<li>PullUpload: media file pulling for upload task.</li>

Task types compatible with v2017:
<li>Transcode: transcoding task;</li>
<li>SnapshotByTimeOffset: screencapturing task</li>
<li>Concat: video splicing task;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: image sprite generating task.</li>
 * @method string getStatus() Obtain Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method string getCreateTime() Obtain Creation time of task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getBeginProcessTime() Obtain Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getFinishTime() Obtain End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setFinishTime(string $FinishTime) Set End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method ProcedureTask getProcedureTask() Obtain Video processing task information. This field has a value only when `TaskType` is `Procedure`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) Set Video processing task information. This field has a value only when `TaskType` is `Procedure`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaTask() Obtain Video editing task information. This field has a value only when `TaskType` is `EditMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) Set Video editing task information. This field has a value only when `TaskType` is `EditMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method WechatPublishTask getWechatPublishTask() Obtain Release on WeChat task information. This field has a value only when `TaskType` is `WechatPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) Set Release on WeChat task information. This field has a value only when `TaskType` is `WechatPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTask getComposeMediaTask() Obtain Media file composing task information. This field has a value only when `TaskType` is `ComposeMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) Set Media file composing task information. This field has a value only when `TaskType` is `ComposeMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PullUploadTask getPullUploadTask() Obtain Media file pulling for upload task information. This field has a value only when `TaskType` is `PullUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) Set Media file pulling for upload task information. This field has a value only when `TaskType` is `PullUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TranscodeTask2017 getTranscodeTask() Obtain Video transcoding task information. This field has a value only when `TaskType` is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) Set Video transcoding task information. This field has a value only when `TaskType` is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() Obtain Time point screencapturing task information. This field has a value only when `TaskType` is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) Set Time point screencapturing task information. This field has a value only when `TaskType` is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ConcatTask2017 getConcatTask() Obtain Video splicing task information. This field has a value only when `TaskType` is `Concat`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) Set Video splicing task information. This field has a value only when `TaskType` is `Concat`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ClipTask2017 getClipTask() Obtain Video clipping task information. This field has a value only when `TaskType` is `Clip`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClipTask(ClipTask2017 $ClipTask) Set Video clipping task information. This field has a value only when `TaskType` is `Clip`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() Obtain Image sprite creating task information. This field has a value only when `TaskType` is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) Set Image sprite creating task information. This field has a value only when `TaskType` is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() Obtain Release in WeChat Mini Program task information. This field has a value only when `TaskType` is `WechatMiniProgramPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) Set Release in WeChat Mini Program task information. This field has a value only when `TaskType` is `WechatMiniProgramPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeTaskDetail response structure.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>WechatPublish: release on WeChat task;</li>
<li>WechatMiniProgramPublish: release in WeChat Mini Program task;</li>
<li>ComposeMedia: media file composing task;</li>
<li>PullUpload: media file pulling for upload task.</li>

Task types compatible with v2017:
<li>Transcode: transcoding task;</li>
<li>SnapshotByTimeOffset: screencapturing task</li>
<li>Concat: video splicing task;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: image sprite generating task.</li>
     */
    public $TaskType;

    /**
     * @var string Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var string Creation time of task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $BeginProcessTime;

    /**
     * @var string End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $FinishTime;

    /**
     * @var ProcedureTask Video processing task information. This field has a value only when `TaskType` is `Procedure`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask Video editing task information. This field has a value only when `TaskType` is `EditMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask Release on WeChat task information. This field has a value only when `TaskType` is `WechatPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask Media file composing task information. This field has a value only when `TaskType` is `ComposeMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ComposeMediaTask;

    /**
     * @var PullUploadTask Media file pulling for upload task information. This field has a value only when `TaskType` is `PullUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 Video transcoding task information. This field has a value only when `TaskType` is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 Time point screencapturing task information. This field has a value only when `TaskType` is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var ConcatTask2017 Video splicing task information. This field has a value only when `TaskType` is `Concat`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 Video clipping task information. This field has a value only when `TaskType` is `Clip`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 Image sprite creating task information. This field has a value only when `TaskType` is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateImageSpriteTask;

    /**
     * @var WechatMiniProgramPublishTask Release in WeChat Mini Program task information. This field has a value only when `TaskType` is `WechatMiniProgramPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $TaskType Task type. Valid values:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>WechatPublish: release on WeChat task;</li>
<li>WechatMiniProgramPublish: release in WeChat Mini Program task;</li>
<li>ComposeMedia: media file composing task;</li>
<li>PullUpload: media file pulling for upload task.</li>

Task types compatible with v2017:
<li>Transcode: transcoding task;</li>
<li>SnapshotByTimeOffset: screencapturing task</li>
<li>Concat: video splicing task;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: image sprite generating task.</li>
     * @param string $Status Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param string $CreateTime Creation time of task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $FinishTime End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param ProcedureTask $ProcedureTask Video processing task information. This field has a value only when `TaskType` is `Procedure`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaTask Video editing task information. This field has a value only when `TaskType` is `EditMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param WechatPublishTask $WechatPublishTask Release on WeChat task information. This field has a value only when `TaskType` is `WechatPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTask $ComposeMediaTask Media file composing task information. This field has a value only when `TaskType` is `ComposeMedia`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PullUploadTask $PullUploadTask Media file pulling for upload task information. This field has a value only when `TaskType` is `PullUpload`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TranscodeTask2017 $TranscodeTask Video transcoding task information. This field has a value only when `TaskType` is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask Time point screencapturing task information. This field has a value only when `TaskType` is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ConcatTask2017 $ConcatTask Video splicing task information. This field has a value only when `TaskType` is `Concat`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ClipTask2017 $ClipTask Video clipping task information. This field has a value only when `TaskType` is `Clip`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask Image sprite creating task information. This field has a value only when `TaskType` is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask Release in WeChat Mini Program task information. This field has a value only when `TaskType` is `WechatMiniProgramPublish`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("PullUploadTask",$param) and $param["PullUploadTask"] !== null) {
            $this->PullUploadTask = new PullUploadTask();
            $this->PullUploadTask->deserialize($param["PullUploadTask"]);
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTask2017();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
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

        if (array_key_exists("WechatMiniProgramPublishTask",$param) and $param["WechatMiniProgramPublishTask"] !== null) {
            $this->WechatMiniProgramPublishTask = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishTask->deserialize($param["WechatMiniProgramPublishTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
