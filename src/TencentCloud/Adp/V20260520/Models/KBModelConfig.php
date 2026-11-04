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
 * Model configuration of the knowledge base
 *
 * @method string getEmbeddingModel() Obtain <p>Embedding model</p>
 * @method void setEmbeddingModel(string $EmbeddingModel) Set <p>Embedding model</p>
 * @method string getQaExtractModel() Obtain <p>QA extraction model</p>
 * @method void setQaExtractModel(string $QaExtractModel) Set <p>QA extraction model</p>
 * @method string getSchemaModel() Obtain <p>Schema generative model</p>
 * @method void setSchemaModel(string $SchemaModel) Set <p>Schema generative model</p>
 */
class KBModelConfig extends AbstractModel
{
    /**
     * @var string <p>Embedding model</p>
     */
    public $EmbeddingModel;

    /**
     * @var string <p>QA extraction model</p>
     */
    public $QaExtractModel;

    /**
     * @var string <p>Schema generative model</p>
     */
    public $SchemaModel;

    /**
     * @param string $EmbeddingModel <p>Embedding model</p>
     * @param string $QaExtractModel <p>QA extraction model</p>
     * @param string $SchemaModel <p>Schema generative model</p>
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
        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }

        if (array_key_exists("QaExtractModel",$param) and $param["QaExtractModel"] !== null) {
            $this->QaExtractModel = $param["QaExtractModel"];
        }

        if (array_key_exists("SchemaModel",$param) and $param["SchemaModel"] !== null) {
            $this->SchemaModel = $param["SchemaModel"];
        }
    }
}
