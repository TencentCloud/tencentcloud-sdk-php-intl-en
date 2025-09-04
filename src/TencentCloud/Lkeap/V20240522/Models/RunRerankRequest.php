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
 * RunRerank request structure.
 *
 * @method string getQuery() Obtain Query content.
 * @method void setQuery(string $Query) Set Query content.
 * @method array getDocs() Obtain Document list, up to 20 documents.
 * @method void setDocs(array $Docs) Set Document list, up to 20 documents.
 * @method string getModel() Obtain Model name. Default: lke-reranker-base.
 * @method void setModel(string $Model) Set Model name. Default: lke-reranker-base.
 */
class RunRerankRequest extends AbstractModel
{
    /**
     * @var string Query content.
     */
    public $Query;

    /**
     * @var array Document list, up to 20 documents.
     */
    public $Docs;

    /**
     * @var string Model name. Default: lke-reranker-base.
     */
    public $Model;

    /**
     * @param string $Query Query content.
     * @param array $Docs Document list, up to 20 documents.
     * @param string $Model Model name. Default: lke-reranker-base.
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Docs",$param) and $param["Docs"] !== null) {
            $this->Docs = $param["Docs"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
