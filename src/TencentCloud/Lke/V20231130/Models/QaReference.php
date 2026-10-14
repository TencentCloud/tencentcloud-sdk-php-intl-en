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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference information of the Q&A pair
 *
 * @method string getQaBizId() Obtain <p>QA business ID</p>
 * @method void setQaBizId(string $QaBizId) Set <p>QA business ID</p>
 * @method string getReferBizId() Obtain <p>Document fragment reference ID</p>
 * @method void setReferBizId(string $ReferBizId) Set <p>Document fragment reference ID</p>
 * @method string getKnowledgeBizId() Obtain <p>Business ID of the knowledge base where the QA resides</p>
 * @method void setKnowledgeBizId(string $KnowledgeBizId) Set <p>Business ID of the knowledge base where the QA resides</p>
 * @method string getKnowledgeName() Obtain <p>Name of the knowledge base where the QA resides</p>
 * @method void setKnowledgeName(string $KnowledgeName) Set <p>Name of the knowledge base where the QA resides</p>
 */
class QaReference extends AbstractModel
{
    /**
     * @var string <p>QA business ID</p>
     */
    public $QaBizId;

    /**
     * @var string <p>Document fragment reference ID</p>
     */
    public $ReferBizId;

    /**
     * @var string <p>Business ID of the knowledge base where the QA resides</p>
     */
    public $KnowledgeBizId;

    /**
     * @var string <p>Name of the knowledge base where the QA resides</p>
     */
    public $KnowledgeName;

    /**
     * @param string $QaBizId <p>QA business ID</p>
     * @param string $ReferBizId <p>Document fragment reference ID</p>
     * @param string $KnowledgeBizId <p>Business ID of the knowledge base where the QA resides</p>
     * @param string $KnowledgeName <p>Name of the knowledge base where the QA resides</p>
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }
    }
}
