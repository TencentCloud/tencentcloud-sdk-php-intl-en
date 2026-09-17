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
 * 
 *
 * @method string getEventHandle() Obtain 
 * @method void setEventHandle(string $EventHandle) Set 
 * @method string getEventType() Obtain 
 * @method void setEventType(string $EventType) Set 
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
 * @method SplitMediaTask getSplitMediaCompleteEvent() Obtain 
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) Set 
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
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() Obtain 
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) Set 
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() Obtain 
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) Set 
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() Obtain 
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) Set 
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() Obtain 
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) Set 
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
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() Obtain 
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) Set 
 * @method MediaCastEvent getMediaCastStatusChangedEvent() Obtain 
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) Set 
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() Obtain 
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) Set 
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() Obtain 
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) Set 
 * @method ProcessMediaByMPS getProcessMediaByMPSCompleteEvent() Obtain 
 * @method void setProcessMediaByMPSCompleteEvent(ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent) Set 
 * @method AigcImageTask getAigcImageCompleteEvent() Obtain 
 * @method void setAigcImageCompleteEvent(AigcImageTask $AigcImageCompleteEvent) Set 
 * @method AigcVideoTask getAigcVideoCompleteEvent() Obtain 
 * @method void setAigcVideoCompleteEvent(AigcVideoTask $AigcVideoCompleteEvent) Set 
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkComplete() Obtain 
 * @method void setExtractBlindWatermarkComplete(ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete) Set 
 * @method SceneAigcImageTask getSceneAigcImageCompleteEvent() Obtain 
 * @method void setSceneAigcImageCompleteEvent(SceneAigcImageTask $SceneAigcImageCompleteEvent) Set 
 * @method ProcessImageAsyncTask getProcessImageAsyncCompleteEvent() Obtain 
 * @method void setProcessImageAsyncCompleteEvent(ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent) Set 
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementCompleteEvent() Obtain 
 * @method void setCreateAigcAdvancedCustomElementCompleteEvent(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent) Set 
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceCompleteEvent() Obtain 
 * @method void setCreateAigcCustomVoiceCompleteEvent(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent) Set 
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncCompleteEvent() Obtain 
 * @method void setDescribeAigcFaceInfoAsyncCompleteEvent(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent) Set 
 * @method AigcHunyuan3DTask getAigcHunyuan3DCompleteEvent() Obtain 
 * @method void setAigcHunyuan3DCompleteEvent(AigcHunyuan3DTask $AigcHunyuan3DCompleteEvent) Set 
 */
class EventContent extends AbstractModel
{
    /**
     * @var string 
     */
    public $EventHandle;

    /**
     * @var string 
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
     * @var SplitMediaTask 
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
     * @var RemoveWatermarkTask 
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask 
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask 
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask 
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
     * @var QualityEnhanceTask 
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent 
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask 
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask 
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @var ProcessMediaByMPS 
     */
    public $ProcessMediaByMPSCompleteEvent;

    /**
     * @var AigcImageTask 
     */
    public $AigcImageCompleteEvent;

    /**
     * @var AigcVideoTask 
     */
    public $AigcVideoCompleteEvent;

    /**
     * @var ExtractBlindWatermarkTask 
     */
    public $ExtractBlindWatermarkComplete;

    /**
     * @var SceneAigcImageTask 
     */
    public $SceneAigcImageCompleteEvent;

    /**
     * @var ProcessImageAsyncTask 
     */
    public $ProcessImageAsyncCompleteEvent;

    /**
     * @var CreateAigcAdvancedCustomElementTask 
     */
    public $CreateAigcAdvancedCustomElementCompleteEvent;

    /**
     * @var CreateAigcCustomVoiceTask 
     */
    public $CreateAigcCustomVoiceCompleteEvent;

    /**
     * @var DescribeAigcFaceInfoAsyncTask 
     */
    public $DescribeAigcFaceInfoAsyncCompleteEvent;

    /**
     * @var AigcHunyuan3DTask 
     */
    public $AigcHunyuan3DCompleteEvent;

    /**
     * @param string $EventHandle 
     * @param string $EventType 
     * @param FileUploadTask $FileUploadEvent 
     * @param ProcedureTask $ProcedureStateChangeEvent 
     * @param FileDeleteTask $FileDeleteEvent 
     * @param PullUploadTask $PullCompleteEvent 
     * @param EditMediaTask $EditMediaCompleteEvent 
     * @param SplitMediaTask $SplitMediaCompleteEvent 
     * @param ComposeMediaTask $ComposeMediaCompleteEvent 
     * @param ClipTask2017 $ClipCompleteEvent 
     * @param TranscodeTask2017 $TranscodeCompleteEvent 
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent 
     * @param ConcatTask2017 $ConcatCompleteEvent 
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent 
     * @param WechatPublishTask $WechatPublishCompleteEvent 
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent 
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent 
     * @param RestoreMediaTask $RestoreMediaCompleteEvent 
     * @param RebuildMediaTask $RebuildMediaCompleteEvent 
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent 
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent 
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent 
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent 
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent 
     * @param QualityInspectTask $QualityInspectCompleteEvent 
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent 
     * @param MediaCastEvent $MediaCastStatusChangedEvent 
     * @param PersistenceCompleteTask $PersistenceCompleteEvent 
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent 
     * @param ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent 
     * @param AigcImageTask $AigcImageCompleteEvent 
     * @param AigcVideoTask $AigcVideoCompleteEvent 
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete 
     * @param SceneAigcImageTask $SceneAigcImageCompleteEvent 
     * @param ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent 
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent 
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent 
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent 
     * @param AigcHunyuan3DTask $AigcHunyuan3DCompleteEvent 
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
