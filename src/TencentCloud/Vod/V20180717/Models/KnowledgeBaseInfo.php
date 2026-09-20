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
 * Knowledge base information.
 *
 * @method string getKnowledgeBaseId() Obtain <p>Knowledge base ID.</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set <p>Knowledge base ID.</p>
 * @method string getName() Obtain <p>Knowledge base name.</p>
 * @method void setName(string $Name) Set <p>Knowledge base name.</p>
 * @method string getDescription() Obtain <p>Repository description.</p>
 * @method void setDescription(string $Description) Set <p>Repository description.</p>
 * @method string getStatus() Obtain <p>Knowledge base status.</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>active: Normal</li><li>deleting: Deleting</li></ul>
 * @method void setStatus(string $Status) Set <p>Knowledge base status.</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>active: Normal</li><li>deleting: Deleting</li></ul>
 * @method string getCreateTime() Obtain <p>Creation time of the knowledge base.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time of the knowledge base.</p>
 */
class KnowledgeBaseInfo extends AbstractModel
{
    /**
     * @var string <p>Knowledge base ID.</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var string <p>Knowledge base name.</p>
     */
    public $Name;

    /**
     * @var string <p>Repository description.</p>
     */
    public $Description;

    /**
     * @var string <p>Knowledge base status.</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>active: Normal</li><li>deleting: Deleting</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Creation time of the knowledge base.</p>
     */
    public $CreateTime;

    /**
     * @param string $KnowledgeBaseId <p>Knowledge base ID.</p>
     * @param string $Name <p>Knowledge base name.</p>
     * @param string $Description <p>Repository description.</p>
     * @param string $Status <p>Knowledge base status.</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>active: Normal</li><li>deleting: Deleting</li></ul>
     * @param string $CreateTime <p>Creation time of the knowledge base.</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
