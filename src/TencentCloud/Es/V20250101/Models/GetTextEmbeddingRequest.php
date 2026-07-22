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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTextEmbedding request structure.
 *
 * @method string getModelName() Obtain Model name, selectable model list: bge-base-zh-v1.5, bge-large-zh-v1.5, Conan-embedding-v1, bge-m3, KaLM-embedding-multilingual-mini-v1, Qwen3-Embedding-0.6B.
 * @method void setModelName(string $ModelName) Set Model name, selectable model list: bge-base-zh-v1.5, bge-large-zh-v1.5, Conan-embedding-v1, bge-m3, KaLM-embedding-multilingual-mini-v1, Qwen3-Embedding-0.6B.
 * @method array getTexts() Obtain Text set to be vectorized.
 * @method void setTexts(array $Texts) Set Text set to be vectorized.
 */
class GetTextEmbeddingRequest extends AbstractModel
{
    /**
     * @var string Model name, selectable model list: bge-base-zh-v1.5, bge-large-zh-v1.5, Conan-embedding-v1, bge-m3, KaLM-embedding-multilingual-mini-v1, Qwen3-Embedding-0.6B.
     */
    public $ModelName;

    /**
     * @var array Text set to be vectorized.
     */
    public $Texts;

    /**
     * @param string $ModelName Model name, selectable model list: bge-base-zh-v1.5, bge-large-zh-v1.5, Conan-embedding-v1, bge-m3, KaLM-embedding-multilingual-mini-v1, Qwen3-Embedding-0.6B.
     * @param array $Texts Text set to be vectorized.
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }
    }
}
