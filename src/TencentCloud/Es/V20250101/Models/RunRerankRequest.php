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
 * RunRerank request structure.
 *
 * @method string getModelName() Obtain Model name, selectable model list: bge-reranker-large, bge-reranker-v2-m3.
 * @method void setModelName(string $ModelName) Set Model name, selectable model list: bge-reranker-large, bge-reranker-v2-m3.
 * @method string getQuery() Obtain Query text.
 * @method void setQuery(string $Query) Set Query text.
 * @method array getDocuments() Obtain List of candidate docs to sort.
 * @method void setDocuments(array $Documents) Set List of candidate docs to sort.
 * @method integer getTopN() Obtain Number of top documents returned in sorting order. If not specified, return all candidate docs. If the specified top_n value is larger than the number of input candidate docs, return all docs.
 * @method void setTopN(integer $TopN) Set Number of top documents returned in sorting order. If not specified, return all candidate docs. If the specified top_n value is larger than the number of input candidate docs, return all docs.
 * @method boolean getReturnDocuments() Obtain Whether to return the original document for each sorting result inside the result list. Default value: False.
 * @method void setReturnDocuments(boolean $ReturnDocuments) Set Whether to return the original document for each sorting result inside the result list. Default value: False.
 */
class RunRerankRequest extends AbstractModel
{
    /**
     * @var string Model name, selectable model list: bge-reranker-large, bge-reranker-v2-m3.
     */
    public $ModelName;

    /**
     * @var string Query text.
     */
    public $Query;

    /**
     * @var array List of candidate docs to sort.
     */
    public $Documents;

    /**
     * @var integer Number of top documents returned in sorting order. If not specified, return all candidate docs. If the specified top_n value is larger than the number of input candidate docs, return all docs.
     */
    public $TopN;

    /**
     * @var boolean Whether to return the original document for each sorting result inside the result list. Default value: False.
     */
    public $ReturnDocuments;

    /**
     * @param string $ModelName Model name, selectable model list: bge-reranker-large, bge-reranker-v2-m3.
     * @param string $Query Query text.
     * @param array $Documents List of candidate docs to sort.
     * @param integer $TopN Number of top documents returned in sorting order. If not specified, return all candidate docs. If the specified top_n value is larger than the number of input candidate docs, return all docs.
     * @param boolean $ReturnDocuments Whether to return the original document for each sorting result inside the result list. Default value: False.
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Documents",$param) and $param["Documents"] !== null) {
            $this->Documents = $param["Documents"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("ReturnDocuments",$param) and $param["ReturnDocuments"] !== null) {
            $this->ReturnDocuments = $param["ReturnDocuments"];
        }
    }
}
