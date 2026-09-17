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
 * ResetProcedureTemplate request structure.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain 
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set 
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method array getAiRecognitionTaskSet() Obtain 
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) Set 
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain 
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set 
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() Obtain 
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) Set 
 * @method array getImportMediaKnowledgeTaskSet() Obtain 
 * @method void setImportMediaKnowledgeTaskSet(array $ImportMediaKnowledgeTaskSet) Set 
 */
class ResetProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Comment;

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
     * @var array 
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput 
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput 
     */
    public $ReviewAudioVideoTask;

    /**
     * @var array 
     */
    public $ImportMediaKnowledgeTaskSet;

    /**
     * @param string $Name 
     * @param integer $SubAppId 
     * @param string $Comment 
     * @param MediaProcessTaskInput $MediaProcessTask 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param array $AiRecognitionTaskSet 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask 
     * @param array $ImportMediaKnowledgeTaskSet 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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

        if (array_key_exists("AiRecognitionTaskSet",$param) and $param["AiRecognitionTaskSet"] !== null) {
            $this->AiRecognitionTaskSet = [];
            foreach ($param["AiRecognitionTaskSet"] as $key => $value){
                $obj = new AiRecognitionTaskInput();
                $obj->deserialize($value);
                array_push($this->AiRecognitionTaskSet, $obj);
            }
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ProcedureReviewAudioVideoTaskInput();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }

        if (array_key_exists("ImportMediaKnowledgeTaskSet",$param) and $param["ImportMediaKnowledgeTaskSet"] !== null) {
            $this->ImportMediaKnowledgeTaskSet = [];
            foreach ($param["ImportMediaKnowledgeTaskSet"] as $key => $value){
                $obj = new ImportMediaKnowledgeTaskInput();
                $obj->deserialize($value);
                array_push($this->ImportMediaKnowledgeTaskSet, $obj);
            }
        }
    }
}
