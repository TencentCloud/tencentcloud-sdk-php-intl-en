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
 * QA similar question
 *
 * @method string getContent() Obtain <p>Similar question content</p>
 * @method void setContent(string $Content) Set <p>Similar question content</p>
 * @method boolean getIsAiGenerated() Obtain <p>Whether AI-generated</p>
 * @method void setIsAiGenerated(boolean $IsAiGenerated) Set <p>Whether AI-generated</p>
 * @method string getSimilarQuestionId() Obtain <p>Similar question ID</p>
 * @method void setSimilarQuestionId(string $SimilarQuestionId) Set <p>Similar question ID</p>
 */
class SimilarQuestion extends AbstractModel
{
    /**
     * @var string <p>Similar question content</p>
     */
    public $Content;

    /**
     * @var boolean <p>Whether AI-generated</p>
     */
    public $IsAiGenerated;

    /**
     * @var string <p>Similar question ID</p>
     */
    public $SimilarQuestionId;

    /**
     * @param string $Content <p>Similar question content</p>
     * @param boolean $IsAiGenerated <p>Whether AI-generated</p>
     * @param string $SimilarQuestionId <p>Similar question ID</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IsAiGenerated",$param) and $param["IsAiGenerated"] !== null) {
            $this->IsAiGenerated = $param["IsAiGenerated"];
        }

        if (array_key_exists("SimilarQuestionId",$param) and $param["SimilarQuestionId"] !== null) {
            $this->SimilarQuestionId = $param["SimilarQuestionId"];
        }
    }
}
