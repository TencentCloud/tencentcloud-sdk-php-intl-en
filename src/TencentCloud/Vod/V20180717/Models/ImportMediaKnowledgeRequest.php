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
 * @method integer getSubAppId() Obtain <b>Specifies the VOD application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>Specifies the VOD application ID.</b>
 * @method string getFileId() Obtain media file ID, the globally unique identifier of the file in vod, is assigned by the vod backend after successful upload. can be obtained from the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.tencentcloud.com//vod/media).
 * @method void setFileId(string $FileId) Set media file ID, the globally unique identifier of the file in vod, is assigned by the vod backend after successful upload. can be obtained from the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.tencentcloud.com//vod/media).
 * @method array getImportTasks() Obtain Specifies the task type for importing the knowledge base. valid values:.
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
 * @method void setImportTasks(array $ImportTasks) Set Specifies the task type for importing the knowledge base. valid values:.
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
 */
class ImportMediaKnowledgeRequest extends AbstractModel
{
    /**
     * @var integer <b>Specifies the VOD application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string media file ID, the globally unique identifier of the file in vod, is assigned by the vod backend after successful upload. can be obtained from the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.tencentcloud.com//vod/media).
     */
    public $FileId;

    /**
     * @var array Specifies the task type for importing the knowledge base. valid values:.
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
     */
    public $ImportTasks;

    /**
     * @param integer $SubAppId <b>Specifies the VOD application ID.</b>
     * @param string $FileId media file ID, the globally unique identifier of the file in vod, is assigned by the vod backend after successful upload. can be obtained from the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.tencentcloud.com//vod/media).
     * @param array $ImportTasks Specifies the task type for importing the knowledge base. valid values:.
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
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

        if (array_key_exists("ImportTasks",$param) and $param["ImportTasks"] !== null) {
            $this->ImportTasks = $param["ImportTasks"];
        }
    }
}
