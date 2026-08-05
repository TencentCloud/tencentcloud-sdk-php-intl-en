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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EmbeddingData request structure.
 *
 * @method string getModel() Obtain <p>Embedding model; currently only supports text_embedding_v1</p><p>Enumeration values: </p><ul><li>text_embedding_v1: The text embedding model. Prompt can be filled.</li></ul>
 * @method void setModel(string $Model) Set <p>Embedding model; currently only supports text_embedding_v1</p><p>Enumeration values: </p><ul><li>text_embedding_v1: The text embedding model. Prompt can be filled.</li></ul>
 * @method array getFiles() Obtain <p>Embedding input</p>
 * @method void setFiles(array $Files) Set <p>Embedding input</p>
 * @method string getPrompt() Obtain <p>Prompt for embedding input</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for embedding input</p>
 */
class EmbeddingDataRequest extends AbstractModel
{
    /**
     * @var string <p>Embedding model; currently only supports text_embedding_v1</p><p>Enumeration values: </p><ul><li>text_embedding_v1: The text embedding model. Prompt can be filled.</li></ul>
     */
    public $Model;

    /**
     * @var array <p>Embedding input</p>
     */
    public $Files;

    /**
     * @var string <p>Prompt for embedding input</p>
     */
    public $Prompt;

    /**
     * @param string $Model <p>Embedding model; currently only supports text_embedding_v1</p><p>Enumeration values: </p><ul><li>text_embedding_v1: The text embedding model. Prompt can be filled.</li></ul>
     * @param array $Files <p>Embedding input</p>
     * @param string $Prompt <p>Prompt for embedding input</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new EmbeddingData();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
