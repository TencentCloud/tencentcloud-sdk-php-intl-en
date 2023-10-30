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
 * DescribeTaskDetail response structure.
 *
 * @method string getTaskType() Obtain The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`SplitMedia`: Video splitting</li>
<li>`ComposeMedia`: Media file production</li>
<li>`WechatPublish`: Weixin publishing</li>
<li>`WechatMiniProgramPublish`: Publishing videos on Weixin Mini Program</li>
<li>`PullUpload`: Pulling media files for upload</li>
<li>`FastClipMedia`: Quick clipping</li>
<li>`RemoveWatermarkTask`: Watermark removal</li>
<li>`DescribeFileAttributesTask`: Getting file attributes</li>
<li>`RebuildMedia`; Remastering audio/video</li>
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
 * @method void setTaskType(string $TaskType) Set The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`SplitMedia`: Video splitting</li>
<li>`ComposeMedia`: Media file production</li>
<li>`WechatPublish`: Weixin publishing</li>
<li>`WechatMiniProgramPublish`: Publishing videos on Weixin Mini Program</li>
<li>`PullUpload`: Pulling media files for upload</li>
<li>`FastClipMedia`: Quick clipping</li>
<li>`RemoveWatermarkTask`: Watermark removal</li>
<li>`DescribeFileAttributesTask`: Getting file attributes</li>
<li>`RebuildMedia`; Remastering audio/video</li>
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
 * @method string getStatus() Obtain Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method string getCreateTime() Obtain Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getBeginProcessTime() Obtain Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getFinishTime() Obtain End time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setFinishTime(string $FinishTime) Set End time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method ProcedureTask getProcedureTask() Obtain 
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) Set 
 * @method EditMediaTask getEditMediaTask() Obtain 
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) Set 
 * @method WechatPublishTask getWechatPublishTask() Obtain 
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) Set 
 * @method ComposeMediaTask getComposeMediaTask() Obtain 
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) Set 
 * @method SplitMediaTask getSplitMediaTask() Obtain 
 * @method void setSplitMediaTask(SplitMediaTask $SplitMediaTask) Set 
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() Obtain 
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) Set 
 * @method PullUploadTask getPullUploadTask() Obtain 
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) Set 
 * @method TranscodeTask2017 getTranscodeTask() Obtain 
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) Set 
 * @method ConcatTask2017 getConcatTask() Obtain 
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) Set 
 * @method ClipTask2017 getClipTask() Obtain 
 * @method void setClipTask(ClipTask2017 $ClipTask) Set 
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() Obtain 
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) Set 
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() Obtain 
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) Set 
 * @method RemoveWatermarkTask getRemoveWatermarkTask() Obtain 
 * @method void setRemoveWatermarkTask(RemoveWatermarkTask $RemoveWatermarkTask) Set 
 * @method RebuildMediaTask getRebuildMediaTask() Obtain 
 * @method void setRebuildMediaTask(RebuildMediaTask $RebuildMediaTask) Set 
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkTask() Obtain 
 * @method void setExtractTraceWatermarkTask(ExtractTraceWatermarkTask $ExtractTraceWatermarkTask) Set 
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkTask() Obtain 
 * @method void setExtractCopyRightWatermarkTask(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask) Set 
 * @method ReviewAudioVideoTask getReviewAudioVideoTask() Obtain 
 * @method void setReviewAudioVideoTask(ReviewAudioVideoTask $ReviewAudioVideoTask) Set 
 * @method ReduceMediaBitrateTask getReduceMediaBitrateTask() Obtain 
 * @method void setReduceMediaBitrateTask(ReduceMediaBitrateTask $ReduceMediaBitrateTask) Set 
 * @method DescribeFileAttributesTask getDescribeFileAttributesTask() Obtain 
 * @method void setDescribeFileAttributesTask(DescribeFileAttributesTask $DescribeFileAttributesTask) Set 
 * @method QualityInspectTask getQualityInspectTask() Obtain 
 * @method void setQualityInspectTask(QualityInspectTask $QualityInspectTask) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`SplitMedia`: Video splitting</li>
<li>`ComposeMedia`: Media file production</li>
<li>`WechatPublish`: Weixin publishing</li>
<li>`WechatMiniProgramPublish`: Publishing videos on Weixin Mini Program</li>
<li>`PullUpload`: Pulling media files for upload</li>
<li>`FastClipMedia`: Quick clipping</li>
<li>`RemoveWatermarkTask`: Watermark removal</li>
<li>`DescribeFileAttributesTask`: Getting file attributes</li>
<li>`RebuildMedia`; Remastering audio/video</li>
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
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
     * @var string Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $BeginProcessTime;

    /**
     * @var string End time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $FinishTime;

    /**
     * @var ProcedureTask 
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask 
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask 
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask 
     */
    public $ComposeMediaTask;

    /**
     * @var SplitMediaTask 
     */
    public $SplitMediaTask;

    /**
     * @var WechatMiniProgramPublishTask 
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var PullUploadTask 
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 
     */
    public $TranscodeTask;

    /**
     * @var ConcatTask2017 
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 
     */
    public $CreateImageSpriteTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var RemoveWatermarkTask 
     */
    public $RemoveWatermarkTask;

    /**
     * @var RebuildMediaTask 
     */
    public $RebuildMediaTask;

    /**
     * @var ExtractTraceWatermarkTask 
     */
    public $ExtractTraceWatermarkTask;

    /**
     * @var ExtractCopyRightWatermarkTask 
     */
    public $ExtractCopyRightWatermarkTask;

    /**
     * @var ReviewAudioVideoTask 
     */
    public $ReviewAudioVideoTask;

    /**
     * @var ReduceMediaBitrateTask 
     */
    public $ReduceMediaBitrateTask;

    /**
     * @var DescribeFileAttributesTask 
     */
    public $DescribeFileAttributesTask;

    /**
     * @var QualityInspectTask 
     */
    public $QualityInspectTask;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskType The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`SplitMedia`: Video splitting</li>
<li>`ComposeMedia`: Media file production</li>
<li>`WechatPublish`: Weixin publishing</li>
<li>`WechatMiniProgramPublish`: Publishing videos on Weixin Mini Program</li>
<li>`PullUpload`: Pulling media files for upload</li>
<li>`FastClipMedia`: Quick clipping</li>
<li>`RemoveWatermarkTask`: Watermark removal</li>
<li>`DescribeFileAttributesTask`: Getting file attributes</li>
<li>`RebuildMedia`; Remastering audio/video</li>
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
     * @param string $Status Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param string $CreateTime Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FinishTime End time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param ProcedureTask $ProcedureTask 
     * @param EditMediaTask $EditMediaTask 
     * @param WechatPublishTask $WechatPublishTask 
     * @param ComposeMediaTask $ComposeMediaTask 
     * @param SplitMediaTask $SplitMediaTask 
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask 
     * @param PullUploadTask $PullUploadTask 
     * @param TranscodeTask2017 $TranscodeTask 
     * @param ConcatTask2017 $ConcatTask 
     * @param ClipTask2017 $ClipTask 
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask 
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask 
     * @param RemoveWatermarkTask $RemoveWatermarkTask 
     * @param RebuildMediaTask $RebuildMediaTask 
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkTask 
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask 
     * @param ReviewAudioVideoTask $ReviewAudioVideoTask 
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateTask 
     * @param DescribeFileAttributesTask $DescribeFileAttributesTask 
     * @param QualityInspectTask $QualityInspectTask 
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
