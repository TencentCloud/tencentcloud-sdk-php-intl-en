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
 * 
 *
 * @method string getKnowledgeBaseId() Obtain 
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getImportTime() Obtain 
 * @method void setImportTime(string $ImportTime) Set 
 */
class KnowledgeBaseDetail extends AbstractModel
{
    /**
     * @var string 
     */
    public $KnowledgeBaseId;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $ImportTime;

    /**
     * @param string $KnowledgeBaseId 
     * @param integer $Definition 
     * @param string $ImportTime 
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
