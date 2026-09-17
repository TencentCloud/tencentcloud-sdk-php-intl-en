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
 * ImportMediaKnowledge request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method string getFileId() Obtain <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method integer getDefinition() Obtain <p>Unique identifier of the Large Model Understanding Template</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the Large Model Understanding Template</p>
 * @method array getKnowledgeBaseIds() Obtain <p>List of knowledge base IDs. If left blank, the default knowledge base will be used.</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) Set <p>List of knowledge base IDs. If left blank, the default knowledge base will be used.</p>
 * @method array getImportTasks() Obtain <p>Task type required to import knowledge base. Optional values:</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 * @method void setImportTasks(array $ImportTasks) Set <p>Task type required to import knowledge base. Optional values:</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 */
class ImportMediaKnowledgeRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     */
    public $FileId;

    /**
     * @var integer <p>Unique identifier of the Large Model Understanding Template</p>
     */
    public $Definition;

    /**
     * @var array <p>List of knowledge base IDs. If left blank, the default knowledge base will be used.</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @var array <p>Task type required to import knowledge base. Optional values:</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
     * @deprecated
     */
    public $ImportTasks;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     * @param string $FileId <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     * @param integer $Definition <p>Unique identifier of the Large Model Understanding Template</p>
     * @param array $KnowledgeBaseIds <p>List of knowledge base IDs. If left blank, the default knowledge base will be used.</p>
     * @param array $ImportTasks <p>Task type required to import knowledge base. Optional values:</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }

        if (array_key_exists("ImportTasks",$param) and $param["ImportTasks"] !== null) {
            $this->ImportTasks = $param["ImportTasks"];
        }
    }
}
