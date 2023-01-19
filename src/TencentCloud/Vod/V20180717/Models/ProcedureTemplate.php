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
 * Task flow template details
 *
 * @method string getName() Obtain Task flow name.
 * @method void setName(string $Name) Set Task flow name.
 * @method string getType() Obtain Type of a task flow template. Valid values:
<li>Preset: preset task flow template;</li>
<li>Custom: custom task flow template.</li>
 * @method void setType(string $Type) Set Type of a task flow template. Valid values:
<li>Preset: preset task flow template;</li>
<li>Custom: custom task flow template.</li>
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain Parameter of video processing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set Parameter of video processing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Parameter of AI-based content analysis task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Parameter of AI-based content analysis task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of AI-based content recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of AI-based content recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method WechatMiniProgramPublishTaskInput getMiniProgramPublishTask() Obtain Parameter of a release on WeChat Mini Program task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMiniProgramPublishTask(WechatMiniProgramPublishTaskInput $MiniProgramPublishTask) Set Parameter of a release on WeChat Mini Program task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() Obtain The information of the moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) Set The information of the moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ProcedureTemplate extends AbstractModel
{
    /**
     * @var string Task flow name.
     */
    public $Name;

    /**
     * @var string Type of a task flow template. Valid values:
<li>Preset: preset task flow template;</li>
<li>Custom: custom task flow template.</li>
     */
    public $Type;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput Parameter of video processing task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Parameter of AI-based content analysis task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of AI-based content recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AiRecognitionTask;

    /**
     * @var WechatMiniProgramPublishTaskInput Parameter of a release on WeChat Mini Program task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MiniProgramPublishTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput The information of the moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewAudioVideoTask;

    /**
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param string $Name Task flow name.
     * @param string $Type Type of a task flow template. Valid values:
<li>Preset: preset task flow template;</li>
<li>Custom: custom task flow template.</li>
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param MediaProcessTaskInput $MediaProcessTask Parameter of video processing task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiContentReviewTaskInput $AiContentReviewTask The information of the intelligent moderation task\*.
<font color=red>\*: This parameter is used by our old moderation templates and is not recommended. Please use `ReviewAudioVideoTask` instead.</font> 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskInput $AiAnalysisTask Parameter of AI-based content analysis task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of AI-based content recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param WechatMiniProgramPublishTaskInput $MiniProgramPublishTask Parameter of a release on WeChat Mini Program task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask The information of the moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("MiniProgramPublishTask",$param) and $param["MiniProgramPublishTask"] !== null) {
            $this->MiniProgramPublishTask = new WechatMiniProgramPublishTaskInput();
            $this->MiniProgramPublishTask->deserialize($param["MiniProgramPublishTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ProcedureReviewAudioVideoTaskInput();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
