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
 * ProcessMediaByUrl request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method MediaInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set 
 * @method MediaOutputInfo getOutputInfo() Obtain 
 * @method void setOutputInfo(MediaOutputInfo $OutputInfo) Set 
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
 */
class ProcessMediaByUrlRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var MediaInputInfo 
     */
    public $InputInfo;

    /**
     * @var MediaOutputInfo 
     */
    public $OutputInfo;

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
     * @param integer $SubAppId 
     * @param MediaInputInfo $InputInfo 
     * @param MediaOutputInfo $OutputInfo 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param integer $TasksPriority 
     * @param string $TasksNotifyMode 
     * @param string $SessionContext 
     * @param string $SessionId 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new MediaOutputInfo();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
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
    }
}
