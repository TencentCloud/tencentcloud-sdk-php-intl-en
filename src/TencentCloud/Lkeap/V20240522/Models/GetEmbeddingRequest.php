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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmbedding request structure.
 *
 * @method string getModel() Obtain Select the model for generating vectors
Note: Optional [adp-text-embedding-0.5b]


 * @method void setModel(string $Model) Set Select the model for generating vectors
Note: Optional [adp-text-embedding-0.5b]


 * @method array getInputs() Obtain Text that requires embedding. The maximum length of a single text is 500 characters. The maximum total number of entries is 7.
 * @method void setInputs(array $Inputs) Set Text that requires embedding. The maximum length of a single text is 500 characters. The maximum total number of entries is 7.
 * @method string getTextType() Obtain The type of text vectorization. To achieve better retrieval performance, it is recommended to distinguish between query text and document text types. For symmetric tasks such as clustering and classification, there is no need for special specification simply use the system default value "document".
 * @method void setTextType(string $TextType) Set The type of text vectorization. To achieve better retrieval performance, it is recommended to distinguish between query text and document text types. For symmetric tasks such as clustering and classification, there is no need for special specification simply use the system default value "document".
 * @method string getInstruction() Obtain This field is not currently supported.
 * @method void setInstruction(string $Instruction) Set This field is not currently supported.
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string Select the model for generating vectors
Note: Optional [adp-text-embedding-0.5b]


     */
    public $Model;

    /**
     * @var array Text that requires embedding. The maximum length of a single text is 500 characters. The maximum total number of entries is 7.
     */
    public $Inputs;

    /**
     * @var string The type of text vectorization. To achieve better retrieval performance, it is recommended to distinguish between query text and document text types. For symmetric tasks such as clustering and classification, there is no need for special specification simply use the system default value "document".
     */
    public $TextType;

    /**
     * @var string This field is not currently supported.
     */
    public $Instruction;

    /**
     * @param string $Model Select the model for generating vectors
Note: Optional [adp-text-embedding-0.5b]


     * @param array $Inputs Text that requires embedding. The maximum length of a single text is 500 characters. The maximum total number of entries is 7.
     * @param string $TextType The type of text vectorization. To achieve better retrieval performance, it is recommended to distinguish between query text and document text types. For symmetric tasks such as clustering and classification, there is no need for special specification simply use the system default value "document".
     * @param string $Instruction This field is not currently supported.
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

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = $param["Inputs"];
        }

        if (array_key_exists("TextType",$param) and $param["TextType"] !== null) {
            $this->TextType = $param["TextType"];
        }

        if (array_key_exists("Instruction",$param) and $param["Instruction"] !== null) {
            $this->Instruction = $param["Instruction"];
        }
    }
}
