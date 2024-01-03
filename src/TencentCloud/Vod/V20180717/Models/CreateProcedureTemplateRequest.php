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
 * CreateProcedureTemplate request structure.
 *
 * @method string getName() Obtain Task flow name (up to 20 characters).
 * @method void setName(string $Name) Set Task flow name (up to 20 characters).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain Parameter of video processing task.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set Parameter of video processing task.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Parameter of AI-based content analysis task.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Parameter of AI-based content analysis task.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of AI-based content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of AI-based content recognition task.
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() Obtain The information of the moderation task.
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) Set The information of the moderation task.
 */
class CreateProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string Task flow name (up to 20 characters).
     */
    public $Name;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput Parameter of video processing task.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Parameter of AI-based content analysis task.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of AI-based content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput The information of the moderation task.
     */
    public $ReviewAudioVideoTask;

    /**
     * @param string $Name Task flow name (up to 20 characters).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param MediaProcessTaskInput $MediaProcessTask Parameter of video processing task.
     * @param AiContentReviewTaskInput $AiContentReviewTask The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
     * @param AiAnalysisTaskInput $AiAnalysisTask Parameter of AI-based content analysis task.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of AI-based content recognition task.
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask The information of the moderation task.
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
