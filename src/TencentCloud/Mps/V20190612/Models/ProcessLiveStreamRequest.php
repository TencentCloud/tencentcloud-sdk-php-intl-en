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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessLiveStream request structure.
 *
 * @method string getUrl() Obtain <p>Live stream URL (must be a live streaming address, supporting rtmp, hls, flv, trtc, webrtc, srt, etc.).<br>The trtc address is as follows:<br> trtc://trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=<code>&lt;usersig&gt;</code><br><code>&lt;roomid&gt;</code> is the TRTC room number ID<br><code>&lt;sdkappid&gt;</code> is the TRTC SDK app ID<br><code>&lt;userid&gt;</code> is the user ID for the service to enter the room, which can distinguish who is the robot<br><code>&lt;usersig&gt;</code> is the TRTC user signature</p><p>webrtc supports LEB live streams. For address retrieval, please <a href="https://www.tencentcloud.com/document/product/267/32720?from_cn_redirect=1">refer</a></p><p>For srt supported addresses, please <a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">refer</a></p>
 * @method void setUrl(string $Url) Set <p>Live stream URL (must be a live streaming address, supporting rtmp, hls, flv, trtc, webrtc, srt, etc.).<br>The trtc address is as follows:<br> trtc://trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=<code>&lt;usersig&gt;</code><br><code>&lt;roomid&gt;</code> is the TRTC room number ID<br><code>&lt;sdkappid&gt;</code> is the TRTC SDK app ID<br><code>&lt;userid&gt;</code> is the user ID for the service to enter the room, which can distinguish who is the robot<br><code>&lt;usersig&gt;</code> is the TRTC user signature</p><p>webrtc supports LEB live streams. For address retrieval, please <a href="https://www.tencentcloud.com/document/product/267/32720?from_cn_redirect=1">refer</a></p><p>For srt supported addresses, please <a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">refer</a></p>
 * @method LiveStreamTaskNotifyConfig getTaskNotifyConfig() Obtain 
 * @method void setTaskNotifyConfig(LiveStreamTaskNotifyConfig $TaskNotifyConfig) Set 
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method string getOutputDir() Obtain 
 * @method void setOutputDir(string $OutputDir) Set 
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set 
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain 
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method AiQualityControlTaskInput getAiQualityControlTask() Obtain 
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) Set 
 * @method LiveSmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain 
 * @method void setSmartSubtitlesTask(LiveSmartSubtitlesTaskInput $SmartSubtitlesTask) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getScheduleId() Obtain 
 * @method void setScheduleId(integer $ScheduleId) Set 
 * @method string getResourceId() Obtain 
 * @method void setResourceId(string $ResourceId) Set 
 */
class ProcessLiveStreamRequest extends AbstractModel
{
    /**
     * @var string <p>Live stream URL (must be a live streaming address, supporting rtmp, hls, flv, trtc, webrtc, srt, etc.).<br>The trtc address is as follows:<br> trtc://trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=<code>&lt;usersig&gt;</code><br><code>&lt;roomid&gt;</code> is the TRTC room number ID<br><code>&lt;sdkappid&gt;</code> is the TRTC SDK app ID<br><code>&lt;userid&gt;</code> is the user ID for the service to enter the room, which can distinguish who is the robot<br><code>&lt;usersig&gt;</code> is the TRTC user signature</p><p>webrtc supports LEB live streams. For address retrieval, please <a href="https://www.tencentcloud.com/document/product/267/32720?from_cn_redirect=1">refer</a></p><p>For srt supported addresses, please <a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">refer</a></p>
     */
    public $Url;

    /**
     * @var LiveStreamTaskNotifyConfig 
     */
    public $TaskNotifyConfig;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @var string 
     */
    public $OutputDir;

    /**
     * @var AiContentReviewTaskInput 
     */
    public $AiContentReviewTask;

    /**
     * @var AiRecognitionTaskInput 
     */
    public $AiRecognitionTask;

    /**
     * @var AiAnalysisTaskInput 
     */
    public $AiAnalysisTask;

    /**
     * @var AiQualityControlTaskInput 
     */
    public $AiQualityControlTask;

    /**
     * @var LiveSmartSubtitlesTaskInput 
     */
    public $SmartSubtitlesTask;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $ScheduleId;

    /**
     * @var string 
     */
    public $ResourceId;

    /**
     * @param string $Url <p>Live stream URL (must be a live streaming address, supporting rtmp, hls, flv, trtc, webrtc, srt, etc.).<br>The trtc address is as follows:<br> trtc://trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=<code>&lt;usersig&gt;</code><br><code>&lt;roomid&gt;</code> is the TRTC room number ID<br><code>&lt;sdkappid&gt;</code> is the TRTC SDK app ID<br><code>&lt;userid&gt;</code> is the user ID for the service to enter the room, which can distinguish who is the robot<br><code>&lt;usersig&gt;</code> is the TRTC user signature</p><p>webrtc supports LEB live streams. For address retrieval, please <a href="https://www.tencentcloud.com/document/product/267/32720?from_cn_redirect=1">refer</a></p><p>For srt supported addresses, please <a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">refer</a></p>
     * @param LiveStreamTaskNotifyConfig $TaskNotifyConfig 
     * @param TaskOutputStorage $OutputStorage 
     * @param string $OutputDir 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiQualityControlTaskInput $AiQualityControlTask 
     * @param LiveSmartSubtitlesTaskInput $SmartSubtitlesTask 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $ScheduleId 
     * @param string $ResourceId 
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new LiveStreamTaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiQualityControlTask",$param) and $param["AiQualityControlTask"] !== null) {
            $this->AiQualityControlTask = new AiQualityControlTaskInput();
            $this->AiQualityControlTask->deserialize($param["AiQualityControlTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new LiveSmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
