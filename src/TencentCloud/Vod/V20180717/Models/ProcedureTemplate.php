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
 * Task flow template details
 *
 * @method string getName() Obtain <p>Task flow name.</p>
 * @method void setName(string $Name) Set <p>Task flow name.</p>
 * @method string getType() Obtain <p>Task flow template type. Valid values:</p><li>Preset: system preset task flow template.</li><li>Custom: user-defined task flow template.</li>
 * @method void setType(string $Type) Set <p>Task flow template type. Valid values:</p><li>Preset: system preset task flow template.</li><li>Custom: user-defined task flow template.</li>
 * @method string getComment() Obtain <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Transcoding template description. Length limit: 256 characters.</p>
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain <p>Video processing type task parameters.</p>
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set <p>Video processing type task parameters.</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain <p>AI moderation type task parameter *.<br><font color="red">*: This parameter is used to initiate legacy review and is not recommended. It is recommended to use the ReviewAudioVideoTask parameter to initiate review.</font></p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set <p>AI moderation type task parameter *.<br><font color="red">*: This parameter is used to initiate legacy review and is not recommended. It is recommended to use the ReviewAudioVideoTask parameter to initiate review.</font></p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain <p>Parameters for the AI intelligent content analysis task.</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set <p>Parameters for the AI intelligent content analysis task.</p>
 * @method array getAiRecognitionTaskSet() Obtain <p>Parameters for the AI content detect-type task.</p>
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) Set <p>Parameters for the AI content detect-type task.</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain <p>This parameter is not recommended. Use AiRecognitionTaskSet instead.</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set <p>This parameter is not recommended. Use AiRecognitionTaskSet instead.</p>
 * @method WechatMiniProgramPublishTaskInput getMiniProgramPublishTask() Obtain <p>WeChat Mini Program publishing task parameter.</p>
 * @method void setMiniProgramPublishTask(WechatMiniProgramPublishTaskInput $MiniProgramPublishTask) Set <p>WeChat Mini Program publishing task parameter.</p>
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() Obtain <p>Parameters for the audio and video moderation task.</p>
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) Set <p>Parameters for the audio and video moderation task.</p>
 * @method array getImportMediaKnowledgeTaskSet() Obtain <p>Parameters for importing the Intelligent Media Assets knowledge base.</p>
 * @method void setImportMediaKnowledgeTaskSet(array $ImportMediaKnowledgeTaskSet) Set <p>Parameters for importing the Intelligent Media Assets knowledge base.</p>
 * @method string getCreateTime() Obtain <p>Template creation time, use <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, use <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class ProcedureTemplate extends AbstractModel
{
    /**
     * @var string <p>Task flow name.</p>
     */
    public $Name;

    /**
     * @var string <p>Task flow template type. Valid values:</p><li>Preset: system preset task flow template.</li><li>Custom: user-defined task flow template.</li>
     */
    public $Type;

    /**
     * @var string <p>Transcoding template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput <p>Video processing type task parameters.</p>
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>AI moderation type task parameter *.<br><font color="red">*: This parameter is used to initiate legacy review and is not recommended. It is recommended to use the ReviewAudioVideoTask parameter to initiate review.</font></p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>Parameters for the AI intelligent content analysis task.</p>
     */
    public $AiAnalysisTask;

    /**
     * @var array <p>Parameters for the AI content detect-type task.</p>
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput <p>This parameter is not recommended. Use AiRecognitionTaskSet instead.</p>
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var WechatMiniProgramPublishTaskInput <p>WeChat Mini Program publishing task parameter.</p>
     */
    public $MiniProgramPublishTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput <p>Parameters for the audio and video moderation task.</p>
     */
    public $ReviewAudioVideoTask;

    /**
     * @var array <p>Parameters for importing the Intelligent Media Assets knowledge base.</p>
     */
    public $ImportMediaKnowledgeTaskSet;

    /**
     * @var string <p>Template creation time, use <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @param string $Name <p>Task flow name.</p>
     * @param string $Type <p>Task flow template type. Valid values:</p><li>Preset: system preset task flow template.</li><li>Custom: user-defined task flow template.</li>
     * @param string $Comment <p>Transcoding template description. Length limit: 256 characters.</p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>Video processing type task parameters.</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>AI moderation type task parameter *.<br><font color="red">*: This parameter is used to initiate legacy review and is not recommended. It is recommended to use the ReviewAudioVideoTask parameter to initiate review.</font></p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>Parameters for the AI intelligent content analysis task.</p>
     * @param array $AiRecognitionTaskSet <p>Parameters for the AI content detect-type task.</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>This parameter is not recommended. Use AiRecognitionTaskSet instead.</p>
     * @param WechatMiniProgramPublishTaskInput $MiniProgramPublishTask <p>WeChat Mini Program publishing task parameter.</p>
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask <p>Parameters for the audio and video moderation task.</p>
     * @param array $ImportMediaKnowledgeTaskSet <p>Parameters for importing the Intelligent Media Assets knowledge base.</p>
     * @param string $CreateTime <p>Template creation time, use <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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

        if (array_key_exists("MiniProgramPublishTask",$param) and $param["MiniProgramPublishTask"] !== null) {
            $this->MiniProgramPublishTask = new WechatMiniProgramPublishTaskInput();
            $this->MiniProgramPublishTask->deserialize($param["MiniProgramPublishTask"]);
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
