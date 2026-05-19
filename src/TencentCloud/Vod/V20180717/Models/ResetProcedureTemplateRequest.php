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
 * @method string getName() Obtain Task flow name
 * @method void setName(string $Name) Set Task flow name
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain Parameters for the video processing task.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set Parameters for the video processing task.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Parameters for the AI intelligent content moderation task.
<font color=red>\*: This parameter is used to trigger legacy review and is not recommended. Use the ReviewAudioVideoTask parameter to initiate review.</font>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Parameters for the AI intelligent content moderation task.
<font color=red>\*: This parameter is used to trigger legacy review and is not recommended. Use the ReviewAudioVideoTask parameter to initiate review.</font>
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Parameters for the AI intelligent content analysis task.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Parameters for the AI intelligent content analysis task.
 * @method array getAiRecognitionTaskSet() Obtain Parameters for the AI content recognition task.
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) Set Parameters for the AI content recognition task.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain This parameter is not recommended. Recommend using AiRecognitionTaskSet.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set This parameter is not recommended. Recommend using AiRecognitionTaskSet.
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() Obtain Parameters for the audio and video moderation task.
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) Set Parameters for the audio and video moderation task.
 */
class ResetProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string Task flow name
     */
    public $Name;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput Parameters for the video processing task.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput Parameters for the AI intelligent content moderation task.
<font color=red>\*: This parameter is used to trigger legacy review and is not recommended. Use the ReviewAudioVideoTask parameter to initiate review.</font>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Parameters for the AI intelligent content analysis task.
     */
    public $AiAnalysisTask;

    /**
     * @var array Parameters for the AI content recognition task.
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput This parameter is not recommended. Recommend using AiRecognitionTaskSet.
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput Parameters for the audio and video moderation task.
     */
    public $ReviewAudioVideoTask;

    /**
     * @param string $Name Task flow name
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Comment Template description, with a length limit of 256 characters.
     * @param MediaProcessTaskInput $MediaProcessTask Parameters for the video processing task.
     * @param AiContentReviewTaskInput $AiContentReviewTask Parameters for the AI intelligent content moderation task.
<font color=red>\*: This parameter is used to trigger legacy review and is not recommended. Use the ReviewAudioVideoTask parameter to initiate review.</font>
     * @param AiAnalysisTaskInput $AiAnalysisTask Parameters for the AI intelligent content analysis task.
     * @param array $AiRecognitionTaskSet Parameters for the AI content recognition task.
     * @param AiRecognitionTaskInput $AiRecognitionTask This parameter is not recommended. Recommend using AiRecognitionTaskSet.
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask Parameters for the audio and video moderation task.
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
    }
}
