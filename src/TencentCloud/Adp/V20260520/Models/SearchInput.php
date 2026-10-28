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
 * Retrieval input
 *
 * @method array getImageUrlList() Obtain <p>List of image URLs</p>
 * @method void setImageUrlList(array $ImageUrlList) Set <p>List of image URLs</p>
 * @method string getQuestion() Obtain <p>Query</p>
 * @method void setQuestion(string $Question) Set <p>Query</p>
 * @method array getSubQuestionList() Obtain <p>Deconstructed sub-problem list</p>
 * @method void setSubQuestionList(array $SubQuestionList) Set <p>Deconstructed sub-problem list</p>
 */
class SearchInput extends AbstractModel
{
    /**
     * @var array <p>List of image URLs</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>Query</p>
     */
    public $Question;

    /**
     * @var array <p>Deconstructed sub-problem list</p>
     */
    public $SubQuestionList;

    /**
     * @param array $ImageUrlList <p>List of image URLs</p>
     * @param string $Question <p>Query</p>
     * @param array $SubQuestionList <p>Deconstructed sub-problem list</p>
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
        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("SubQuestionList",$param) and $param["SubQuestionList"] !== null) {
            $this->SubQuestionList = $param["SubQuestionList"];
        }
    }
}
