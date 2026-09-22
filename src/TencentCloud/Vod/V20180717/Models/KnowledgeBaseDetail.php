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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed information about the knowledge base list to which media assets are imported, as well as the parsing template used.
 *
 * @method string getKnowledgeBaseId() Obtain <p>Knowledge base ID</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set <p>Knowledge base ID</p>
 * @method integer getDefinition() Obtain <p>Associated large model parsing template</p>
 * @method void setDefinition(integer $Definition) Set <p>Associated large model parsing template</p>
 * @method string getImportTime() Obtain <p>Storage time</p>
 * @method void setImportTime(string $ImportTime) Set <p>Storage time</p>
 */
class KnowledgeBaseDetail extends AbstractModel
{
    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var integer <p>Associated large model parsing template</p>
     */
    public $Definition;

    /**
     * @var string <p>Storage time</p>
     */
    public $ImportTime;

    /**
     * @param string $KnowledgeBaseId <p>Knowledge base ID</p>
     * @param integer $Definition <p>Associated large model parsing template</p>
     * @param string $ImportTime <p>Storage time</p>
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ImportTime",$param) and $param["ImportTime"] !== null) {
            $this->ImportTime = $param["ImportTime"];
        }
    }
}
