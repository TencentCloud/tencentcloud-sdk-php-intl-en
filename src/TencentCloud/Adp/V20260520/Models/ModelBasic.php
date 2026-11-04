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
 * <p>Basic model info (deprecated, please use ModelProfile)</p>
 *
 * @method string getDescription() Obtain <p>Model description</p>
 * @method void setDescription(string $Description) Set <p>Model description</p>
 * @method string getIconUrl() Obtain <p>Model icon address</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Model icon address</p>
 * @method string getModelId() Obtain <p>Model ID</p>
 * @method void setModelId(string $ModelId) Set <p>Model ID</p>
 * @method integer getModelType() Obtain <p>Model type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM model</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank model</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding model</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>Document parsing model</td></tr></table>
 * @method void setModelType(integer $ModelType) Set <p>Model type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM model</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank model</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding model</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>Document parsing model</td></tr></table>
 * @method string getName() Obtain <p>Model name</p>
 * @method void setName(string $Name) Set <p>Model name</p>
 */
class ModelBasic extends AbstractModel
{
    /**
     * @var string <p>Model description</p>
     */
    public $Description;

    /**
     * @var string <p>Model icon address</p>
     */
    public $IconUrl;

    /**
     * @var string <p>Model ID</p>
     */
    public $ModelId;

    /**
     * @var integer <p>Model type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM model</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank model</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding model</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>Document parsing model</td></tr></table>
     */
    public $ModelType;

    /**
     * @var string <p>Model name</p>
     */
    public $Name;

    /**
     * @param string $Description <p>Model description</p>
     * @param string $IconUrl <p>Model icon address</p>
     * @param string $ModelId <p>Model ID</p>
     * @param integer $ModelType <p>Model type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM model</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank model</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding model</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>Document parsing model</td></tr></table>
     * @param string $Name <p>Model name</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
