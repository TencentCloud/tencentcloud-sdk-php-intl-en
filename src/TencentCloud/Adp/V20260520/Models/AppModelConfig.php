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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model configuration
 *
 * @method AIOptimizeModel getAiOptimizeModel() Obtain AI one-click optimization model
 * @method void setAiOptimizeModel(AIOptimizeModel $AiOptimizeModel) Set AI one-click optimization model
 * @method FileParseModel getFileParseModel() Obtain Real-time file parsing model
 * @method void setFileParseModel(FileParseModel $FileParseModel) Set Real-time file parsing model
 * @method GenerateModel getGenerateModel() Obtain Generate model configuration
 * @method void setGenerateModel(GenerateModel $GenerateModel) Set Generate model configuration
 * @method MultiModalQAModel getMultiModalQaModel() Obtain Multimodal QA model
 * @method void setMultiModalQaModel(MultiModalQAModel $MultiModalQaModel) Set Multimodal QA model
 * @method MultiModalUnderstandingModel getMultiModalUnderstandingModel() Obtain Multimodal understanding model
 * @method void setMultiModalUnderstandingModel(MultiModalUnderstandingModel $MultiModalUnderstandingModel) Set Multimodal understanding model
 * @method PromptRewriteModel getPromptRewriteModel() Obtain Prompt rewrite model
 * @method void setPromptRewriteModel(PromptRewriteModel $PromptRewriteModel) Set Prompt rewrite model
 * @method ThinkModel getThinkModel() Obtain Thinking model configuration
 * @method void setThinkModel(ThinkModel $ThinkModel) Set Thinking model configuration
 */
class AppModelConfig extends AbstractModel
{
    /**
     * @var AIOptimizeModel AI one-click optimization model
     */
    public $AiOptimizeModel;

    /**
     * @var FileParseModel Real-time file parsing model
     */
    public $FileParseModel;

    /**
     * @var GenerateModel Generate model configuration
     */
    public $GenerateModel;

    /**
     * @var MultiModalQAModel Multimodal QA model
     */
    public $MultiModalQaModel;

    /**
     * @var MultiModalUnderstandingModel Multimodal understanding model
     */
    public $MultiModalUnderstandingModel;

    /**
     * @var PromptRewriteModel Prompt rewrite model
     */
    public $PromptRewriteModel;

    /**
     * @var ThinkModel Thinking model configuration
     */
    public $ThinkModel;

    /**
     * @param AIOptimizeModel $AiOptimizeModel AI one-click optimization model
     * @param FileParseModel $FileParseModel Real-time file parsing model
     * @param GenerateModel $GenerateModel Generate model configuration
     * @param MultiModalQAModel $MultiModalQaModel Multimodal QA model
     * @param MultiModalUnderstandingModel $MultiModalUnderstandingModel Multimodal understanding model
     * @param PromptRewriteModel $PromptRewriteModel Prompt rewrite model
     * @param ThinkModel $ThinkModel Thinking model configuration
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
        if (array_key_exists("AiOptimizeModel",$param) and $param["AiOptimizeModel"] !== null) {
            $this->AiOptimizeModel = new AIOptimizeModel();
            $this->AiOptimizeModel->deserialize($param["AiOptimizeModel"]);
        }

        if (array_key_exists("FileParseModel",$param) and $param["FileParseModel"] !== null) {
            $this->FileParseModel = new FileParseModel();
            $this->FileParseModel->deserialize($param["FileParseModel"]);
        }

        if (array_key_exists("GenerateModel",$param) and $param["GenerateModel"] !== null) {
            $this->GenerateModel = new GenerateModel();
            $this->GenerateModel->deserialize($param["GenerateModel"]);
        }

        if (array_key_exists("MultiModalQaModel",$param) and $param["MultiModalQaModel"] !== null) {
            $this->MultiModalQaModel = new MultiModalQAModel();
            $this->MultiModalQaModel->deserialize($param["MultiModalQaModel"]);
        }

        if (array_key_exists("MultiModalUnderstandingModel",$param) and $param["MultiModalUnderstandingModel"] !== null) {
            $this->MultiModalUnderstandingModel = new MultiModalUnderstandingModel();
            $this->MultiModalUnderstandingModel->deserialize($param["MultiModalUnderstandingModel"]);
        }

        if (array_key_exists("PromptRewriteModel",$param) and $param["PromptRewriteModel"] !== null) {
            $this->PromptRewriteModel = new PromptRewriteModel();
            $this->PromptRewriteModel->deserialize($param["PromptRewriteModel"]);
        }

        if (array_key_exists("ThinkModel",$param) and $param["ThinkModel"] !== null) {
            $this->ThinkModel = new ThinkModel();
            $this->ThinkModel->deserialize($param["ThinkModel"]);
        }
    }
}
