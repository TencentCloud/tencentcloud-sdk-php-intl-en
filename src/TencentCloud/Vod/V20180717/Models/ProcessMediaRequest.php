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
 * ProcessMedia request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getMediaStoragePath() Obtain 
 * @method void setMediaStoragePath(string $MediaStoragePath) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain 
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set 
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain 
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getTasksNotifyMode() Obtain 
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method string getOutputAsIndependentMedia() Obtain 
 * @method void setOutputAsIndependentMedia(string $OutputAsIndependentMedia) Set 
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $MediaStoragePath;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var MediaProcessTaskInput 
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput 
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 
     */
    public $AiRecognitionTask;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @var string 
     */
    public $TasksNotifyMode;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var string 
     */
    public $OutputAsIndependentMedia;

    /**
     * @param string $FileId 
     * @param string $MediaStoragePath 
     * @param integer $SubAppId 
     * @param MediaProcessTaskInput $MediaProcessTask 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param integer $TasksPriority 
     * @param string $TasksNotifyMode 
     * @param string $SessionContext 
     * @param string $SessionId 
     * @param string $ExtInfo 
     * @param string $Url 
     * @param string $OutputAsIndependentMedia 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("OutputAsIndependentMedia",$param) and $param["OutputAsIndependentMedia"] !== null) {
            $this->OutputAsIndependentMedia = $param["OutputAsIndependentMedia"];
        }
    }
}
