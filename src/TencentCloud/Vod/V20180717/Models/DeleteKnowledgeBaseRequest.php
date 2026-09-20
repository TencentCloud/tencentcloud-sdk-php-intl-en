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
 * DeleteKnowledgeBase request structure.
 *
 * @method integer getSubAppId() Obtain <p>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</p>
 * @method string getKnowledgeBaseId() Obtain <p>ID of the knowledge base to be deleted.</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) Set <p>ID of the knowledge base to be deleted.</p>
 */
class DeleteKnowledgeBaseRequest extends AbstractModel
{
    /**
     * @var integer <p>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var string <p>ID of the knowledge base to be deleted.</p>
     */
    public $KnowledgeBaseId;

    /**
     * @param integer $SubAppId <p>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</p>
     * @param string $KnowledgeBaseId <p>ID of the knowledge base to be deleted.</p>
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

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }
    }
}
