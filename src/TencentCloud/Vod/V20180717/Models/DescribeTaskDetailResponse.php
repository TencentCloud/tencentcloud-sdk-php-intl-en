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
 * DescribeTaskDetail response structure.
 *
 * @method string getTaskType() Obtain 
 * @method void setTaskType(string $TaskType) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getBeginProcessTime() Obtain 
 * @method void setBeginProcessTime(string $BeginProcessTime) Set 
 * @method string getFinishTime() Obtain 
 * @method void setFinishTime(string $FinishTime) Set 
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
 * @method QualityEnhanceTask getQualityEnhanceTask() Obtain 
 * @method void setQualityEnhanceTask(QualityEnhanceTask $QualityEnhanceTask) Set 
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingTask() Obtain 
 * @method void setComplexAdaptiveDynamicStreamingTask(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask) Set 
 * @method ProcessMediaByMPS getProcessMediaByMPSTask() Obtain 
 * @method void setProcessMediaByMPSTask(ProcessMediaByMPS $ProcessMediaByMPSTask) Set 
 * @method AigcImageTask getAigcImageTask() Obtain 
 * @method void setAigcImageTask(AigcImageTask $AigcImageTask) Set 
 * @method AigcVideoTask getAigcVideoTask() Obtain 
 * @method void setAigcVideoTask(AigcVideoTask $AigcVideoTask) Set 
 * @method ImportMediaKnowledgeTask getImportMediaKnowledge() Obtain 
 * @method void setImportMediaKnowledge(ImportMediaKnowledgeTask $ImportMediaKnowledge) Set 
 * @method SceneAigcImageTask getSceneAigcImageTask() Obtain 
 * @method void setSceneAigcImageTask(SceneAigcImageTask $SceneAigcImageTask) Set 
 * @method SceneAigcVideoTask getSceneAigcVideoTask() Obtain 
 * @method void setSceneAigcVideoTask(SceneAigcVideoTask $SceneAigcVideoTask) Set 
 * @method ProcessImageAsync getProcessImageAsyncTask() Obtain 
 * @method void setProcessImageAsyncTask(ProcessImageAsync $ProcessImageAsyncTask) Set 
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkTask() Obtain 
 * @method void setExtractBlindWatermarkTask(ExtractBlindWatermarkTask $ExtractBlindWatermarkTask) Set 
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementTask() Obtain 
 * @method void setCreateAigcAdvancedCustomElementTask(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask) Set 
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceTask() Obtain 
 * @method void setCreateAigcCustomVoiceTask(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask) Set 
 * @method CreateAigcSubjectTask getCreateAigcSubjectTask() Obtain 
 * @method void setCreateAigcSubjectTask(CreateAigcSubjectTask $CreateAigcSubjectTask) Set 
 * @method AigcVideoRedrawTask getAigcVideoRedrawTask() Obtain 
 * @method void setAigcVideoRedrawTask(AigcVideoRedrawTask $AigcVideoRedrawTask) Set 
 * @method AigcAudioTask getAigcAudioTask() Obtain 
 * @method void setAigcAudioTask(AigcAudioTask $AigcAudioTask) Set 
 * @method CreateAigcAudioCloneTask getCreateAigcAudioCloneTask() Obtain 
 * @method void setCreateAigcAudioCloneTask(CreateAigcAudioCloneTask $CreateAigcAudioCloneTask) Set 
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncTask() Obtain 
 * @method void setDescribeAigcFaceInfoAsyncTask(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncTask) Set 
 * @method AigcHunyuan3DTask getAigcHunyuan3DTask() Obtain 
 * @method void setAigcHunyuan3DTask(AigcHunyuan3DTask $AigcHunyuan3DTask) Set 
 * @method DesignVoiceAsyncTask getDesignVoiceAsyncTask() Obtain 
 * @method void setDesignVoiceAsyncTask(DesignVoiceAsyncTask $DesignVoiceAsyncTask) Set 
 * @method CloneVoiceAsyncTask getCloneVoiceAsyncTask() Obtain 
 * @method void setCloneVoiceAsyncTask(CloneVoiceAsyncTask $CloneVoiceAsyncTask) Set 
 * @method TextToSpeechAsyncTask getTextToSpeechAsyncTask() Obtain 
 * @method void setTextToSpeechAsyncTask(TextToSpeechAsyncTask $TextToSpeechAsyncTask) Set 
 * @method VideoDubbingAsyncTask getVideoDubbingAsyncTask() Obtain 
 * @method void setVideoDubbingAsyncTask(VideoDubbingAsyncTask $VideoDubbingAsyncTask) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskType;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $BeginProcessTime;

    /**
     * @var string 
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
     * @var QualityEnhanceTask 
     */
    public $QualityEnhanceTask;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask 
     */
    public $ComplexAdaptiveDynamicStreamingTask;

    /**
     * @var ProcessMediaByMPS 
     */
    public $ProcessMediaByMPSTask;

    /**
     * @var AigcImageTask 
     */
    public $AigcImageTask;

    /**
     * @var AigcVideoTask 
     */
    public $AigcVideoTask;

    /**
     * @var ImportMediaKnowledgeTask 
     */
    public $ImportMediaKnowledge;

    /**
     * @var SceneAigcImageTask 
     */
    public $SceneAigcImageTask;

    /**
     * @var SceneAigcVideoTask 
     */
    public $SceneAigcVideoTask;

    /**
     * @var ProcessImageAsync 
     */
    public $ProcessImageAsyncTask;

    /**
     * @var ExtractBlindWatermarkTask 
     */
    public $ExtractBlindWatermarkTask;

    /**
     * @var CreateAigcAdvancedCustomElementTask 
     */
    public $CreateAigcAdvancedCustomElementTask;

    /**
     * @var CreateAigcCustomVoiceTask 
     */
    public $CreateAigcCustomVoiceTask;

    /**
     * @var CreateAigcSubjectTask 
     */
    public $CreateAigcSubjectTask;

    /**
     * @var AigcVideoRedrawTask 
     */
    public $AigcVideoRedrawTask;

    /**
     * @var AigcAudioTask 
     */
    public $AigcAudioTask;

    /**
     * @var CreateAigcAudioCloneTask 
     */
    public $CreateAigcAudioCloneTask;

    /**
     * @var DescribeAigcFaceInfoAsyncTask 
     */
    public $DescribeAigcFaceInfoAsyncTask;

    /**
     * @var AigcHunyuan3DTask 
     */
    public $AigcHunyuan3DTask;

    /**
     * @var DesignVoiceAsyncTask 
     */
    public $DesignVoiceAsyncTask;

    /**
     * @var CloneVoiceAsyncTask 
     */
    public $CloneVoiceAsyncTask;

    /**
     * @var TextToSpeechAsyncTask 
     */
    public $TextToSpeechAsyncTask;

    /**
     * @var VideoDubbingAsyncTask 
     */
    public $VideoDubbingAsyncTask;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskType 
     * @param string $Status 
     * @param string $CreateTime 
     * @param string $BeginProcessTime 
     * @param string $FinishTime 
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
     * @param QualityEnhanceTask $QualityEnhanceTask 
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask 
     * @param ProcessMediaByMPS $ProcessMediaByMPSTask 
     * @param AigcImageTask $AigcImageTask 
     * @param AigcVideoTask $AigcVideoTask 
     * @param ImportMediaKnowledgeTask $ImportMediaKnowledge 
     * @param SceneAigcImageTask $SceneAigcImageTask 
     * @param SceneAigcVideoTask $SceneAigcVideoTask 
     * @param ProcessImageAsync $ProcessImageAsyncTask 
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkTask 
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask 
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask 
     * @param CreateAigcSubjectTask $CreateAigcSubjectTask 
     * @param AigcVideoRedrawTask $AigcVideoRedrawTask 
     * @param AigcAudioTask $AigcAudioTask 
     * @param CreateAigcAudioCloneTask $CreateAigcAudioCloneTask 
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncTask 
     * @param AigcHunyuan3DTask $AigcHunyuan3DTask 
     * @param DesignVoiceAsyncTask $DesignVoiceAsyncTask 
     * @param CloneVoiceAsyncTask $CloneVoiceAsyncTask 
     * @param TextToSpeechAsyncTask $TextToSpeechAsyncTask 
     * @param VideoDubbingAsyncTask $VideoDubbingAsyncTask 
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

        if (array_key_exists("ProcessMediaByMPSTask",$param) and $param["ProcessMediaByMPSTask"] !== null) {
            $this->ProcessMediaByMPSTask = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSTask->deserialize($param["ProcessMediaByMPSTask"]);
        }

        if (array_key_exists("AigcImageTask",$param) and $param["AigcImageTask"] !== null) {
            $this->AigcImageTask = new AigcImageTask();
            $this->AigcImageTask->deserialize($param["AigcImageTask"]);
        }

        if (array_key_exists("AigcVideoTask",$param) and $param["AigcVideoTask"] !== null) {
            $this->AigcVideoTask = new AigcVideoTask();
            $this->AigcVideoTask->deserialize($param["AigcVideoTask"]);
        }

        if (array_key_exists("ImportMediaKnowledge",$param) and $param["ImportMediaKnowledge"] !== null) {
            $this->ImportMediaKnowledge = new ImportMediaKnowledgeTask();
            $this->ImportMediaKnowledge->deserialize($param["ImportMediaKnowledge"]);
        }

        if (array_key_exists("SceneAigcImageTask",$param) and $param["SceneAigcImageTask"] !== null) {
            $this->SceneAigcImageTask = new SceneAigcImageTask();
            $this->SceneAigcImageTask->deserialize($param["SceneAigcImageTask"]);
        }

        if (array_key_exists("SceneAigcVideoTask",$param) and $param["SceneAigcVideoTask"] !== null) {
            $this->SceneAigcVideoTask = new SceneAigcVideoTask();
            $this->SceneAigcVideoTask->deserialize($param["SceneAigcVideoTask"]);
        }

        if (array_key_exists("ProcessImageAsyncTask",$param) and $param["ProcessImageAsyncTask"] !== null) {
            $this->ProcessImageAsyncTask = new ProcessImageAsync();
            $this->ProcessImageAsyncTask->deserialize($param["ProcessImageAsyncTask"]);
        }

        if (array_key_exists("ExtractBlindWatermarkTask",$param) and $param["ExtractBlindWatermarkTask"] !== null) {
            $this->ExtractBlindWatermarkTask = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkTask->deserialize($param["ExtractBlindWatermarkTask"]);
        }

        if (array_key_exists("CreateAigcAdvancedCustomElementTask",$param) and $param["CreateAigcAdvancedCustomElementTask"] !== null) {
            $this->CreateAigcAdvancedCustomElementTask = new CreateAigcAdvancedCustomElementTask();
            $this->CreateAigcAdvancedCustomElementTask->deserialize($param["CreateAigcAdvancedCustomElementTask"]);
        }

        if (array_key_exists("CreateAigcCustomVoiceTask",$param) and $param["CreateAigcCustomVoiceTask"] !== null) {
            $this->CreateAigcCustomVoiceTask = new CreateAigcCustomVoiceTask();
            $this->CreateAigcCustomVoiceTask->deserialize($param["CreateAigcCustomVoiceTask"]);
        }

        if (array_key_exists("CreateAigcSubjectTask",$param) and $param["CreateAigcSubjectTask"] !== null) {
            $this->CreateAigcSubjectTask = new CreateAigcSubjectTask();
            $this->CreateAigcSubjectTask->deserialize($param["CreateAigcSubjectTask"]);
        }

        if (array_key_exists("AigcVideoRedrawTask",$param) and $param["AigcVideoRedrawTask"] !== null) {
            $this->AigcVideoRedrawTask = new AigcVideoRedrawTask();
            $this->AigcVideoRedrawTask->deserialize($param["AigcVideoRedrawTask"]);
        }

        if (array_key_exists("AigcAudioTask",$param) and $param["AigcAudioTask"] !== null) {
            $this->AigcAudioTask = new AigcAudioTask();
            $this->AigcAudioTask->deserialize($param["AigcAudioTask"]);
        }

        if (array_key_exists("CreateAigcAudioCloneTask",$param) and $param["CreateAigcAudioCloneTask"] !== null) {
            $this->CreateAigcAudioCloneTask = new CreateAigcAudioCloneTask();
            $this->CreateAigcAudioCloneTask->deserialize($param["CreateAigcAudioCloneTask"]);
        }

        if (array_key_exists("DescribeAigcFaceInfoAsyncTask",$param) and $param["DescribeAigcFaceInfoAsyncTask"] !== null) {
            $this->DescribeAigcFaceInfoAsyncTask = new DescribeAigcFaceInfoAsyncTask();
            $this->DescribeAigcFaceInfoAsyncTask->deserialize($param["DescribeAigcFaceInfoAsyncTask"]);
        }

        if (array_key_exists("AigcHunyuan3DTask",$param) and $param["AigcHunyuan3DTask"] !== null) {
            $this->AigcHunyuan3DTask = new AigcHunyuan3DTask();
            $this->AigcHunyuan3DTask->deserialize($param["AigcHunyuan3DTask"]);
        }

        if (array_key_exists("DesignVoiceAsyncTask",$param) and $param["DesignVoiceAsyncTask"] !== null) {
            $this->DesignVoiceAsyncTask = new DesignVoiceAsyncTask();
            $this->DesignVoiceAsyncTask->deserialize($param["DesignVoiceAsyncTask"]);
        }

        if (array_key_exists("CloneVoiceAsyncTask",$param) and $param["CloneVoiceAsyncTask"] !== null) {
            $this->CloneVoiceAsyncTask = new CloneVoiceAsyncTask();
            $this->CloneVoiceAsyncTask->deserialize($param["CloneVoiceAsyncTask"]);
        }

        if (array_key_exists("TextToSpeechAsyncTask",$param) and $param["TextToSpeechAsyncTask"] !== null) {
            $this->TextToSpeechAsyncTask = new TextToSpeechAsyncTask();
            $this->TextToSpeechAsyncTask->deserialize($param["TextToSpeechAsyncTask"]);
        }

        if (array_key_exists("VideoDubbingAsyncTask",$param) and $param["VideoDubbingAsyncTask"] !== null) {
            $this->VideoDubbingAsyncTask = new VideoDubbingAsyncTask();
            $this->VideoDubbingAsyncTask->deserialize($param["VideoDubbingAsyncTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
