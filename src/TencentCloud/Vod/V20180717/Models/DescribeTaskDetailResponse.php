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
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`QualityEnhance`: Enhance audio/video</li>
<li>`ComplexAdaptiveDynamicStreaming`: Complex adaptive bitrate streaming processing task</li>
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
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`QualityEnhance`: Enhance audio/video</li>
<li>`ComplexAdaptiveDynamicStreaming`: Complex adaptive bitrate streaming processing task</li>
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
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method EditMediaTask getEditMediaTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method WechatPublishTask getWechatPublishTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ComposeMediaTask getComposeMediaTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SplitMediaTask getSplitMediaTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSplitMediaTask(SplitMediaTask $SplitMediaTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method PullUploadTask getPullUploadTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TranscodeTask2017 getTranscodeTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ConcatTask2017 getConcatTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ClipTask2017 getClipTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClipTask(ClipTask2017 $ClipTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RemoveWatermarkTask getRemoveWatermarkTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemoveWatermarkTask(RemoveWatermarkTask $RemoveWatermarkTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RebuildMediaTask getRebuildMediaTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRebuildMediaTask(RebuildMediaTask $RebuildMediaTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtractTraceWatermarkTask(ExtractTraceWatermarkTask $ExtractTraceWatermarkTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtractCopyRightWatermarkTask(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ReviewAudioVideoTask getReviewAudioVideoTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReviewAudioVideoTask(ReviewAudioVideoTask $ReviewAudioVideoTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ReduceMediaBitrateTask getReduceMediaBitrateTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReduceMediaBitrateTask(ReduceMediaBitrateTask $ReduceMediaBitrateTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DescribeFileAttributesTask getDescribeFileAttributesTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescribeFileAttributesTask(DescribeFileAttributesTask $DescribeFileAttributesTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityInspectTask getQualityInspectTask() Obtain 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityInspectTask(QualityInspectTask $QualityInspectTask) Set 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityEnhanceTask getQualityEnhanceTask() Obtain Media Quality Enhance task information. This field has a value only when TaskType is QualityEnhance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityEnhanceTask(QualityEnhanceTask $QualityEnhanceTask) Set Media Quality Enhance task information. This field has a value only when TaskType is QualityEnhance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingTask() Obtain Complex adaptive bitrate streaming processing task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComplexAdaptiveDynamicStreamingTask(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask) Set Complex adaptive bitrate streaming processing task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`QualityEnhance`: Enhance audio/video</li>
<li>`ComplexAdaptiveDynamicStreaming`: Complex adaptive bitrate streaming processing task</li>
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
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComposeMediaTask;

    /**
     * @var SplitMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SplitMediaTask;

    /**
     * @var WechatMiniProgramPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var PullUploadTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var ConcatTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateImageSpriteTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var RemoveWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemoveWatermarkTask;

    /**
     * @var RebuildMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RebuildMediaTask;

    /**
     * @var ExtractTraceWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtractTraceWatermarkTask;

    /**
     * @var ExtractCopyRightWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtractCopyRightWatermarkTask;

    /**
     * @var ReviewAudioVideoTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReviewAudioVideoTask;

    /**
     * @var ReduceMediaBitrateTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReduceMediaBitrateTask;

    /**
     * @var DescribeFileAttributesTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DescribeFileAttributesTask;

    /**
     * @var QualityInspectTask 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityInspectTask;

    /**
     * @var QualityEnhanceTask Media Quality Enhance task information. This field has a value only when TaskType is QualityEnhance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityEnhanceTask;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask Complex adaptive bitrate streaming processing task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComplexAdaptiveDynamicStreamingTask;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
<li> `ReviewAudioVideo`: Moderation</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`QualityEnhance`: Enhance audio/video</li>
<li>`ComplexAdaptiveDynamicStreaming`: Complex adaptive bitrate streaming processing task</li>
     * @param string $Status Task status. Valid values:
<li>WAITING: waiting;</li>
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param string $CreateTime Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FinishTime End time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param ProcedureTask $ProcedureTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param EditMediaTask $EditMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param WechatPublishTask $WechatPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ComposeMediaTask $ComposeMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SplitMediaTask $SplitMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param PullUploadTask $PullUploadTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TranscodeTask2017 $TranscodeTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ConcatTask2017 $ConcatTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ClipTask2017 $ClipTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RemoveWatermarkTask $RemoveWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RebuildMediaTask $RebuildMediaTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ReviewAudioVideoTask $ReviewAudioVideoTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DescribeFileAttributesTask $DescribeFileAttributesTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityInspectTask $QualityInspectTask 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityEnhanceTask $QualityEnhanceTask Media Quality Enhance task information. This field has a value only when TaskType is QualityEnhance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask Complex adaptive bitrate streaming processing task information. This field has a value only when TaskType is ComplexAdaptiveDynamicStreaming. 
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
