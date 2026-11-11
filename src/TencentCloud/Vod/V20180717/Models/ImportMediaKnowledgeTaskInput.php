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
 * Input parameter type for importing a task flow template into the Intelligent Media Assets knowledge base.
 *
 * @method integer getDefinition() Obtain <p>Large Model Understanding Template</p>
 * @method void setDefinition(integer $Definition) Set <p>Large Model Understanding Template</p>
 * @method array getKnowledgeBaseIds() Obtain <p>List of knowledge base IDs. If left empty, the default knowledge base will be used.</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) Set <p>List of knowledge base IDs. If left empty, the default knowledge base will be used.</p>
 */
class ImportMediaKnowledgeTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Large Model Understanding Template</p>
     */
    public $Definition;

    /**
     * @var array <p>List of knowledge base IDs. If left empty, the default knowledge base will be used.</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @param integer $Definition <p>Large Model Understanding Template</p>
     * @param array $KnowledgeBaseIds <p>List of knowledge base IDs. If left empty, the default knowledge base will be used.</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }
    }
}
