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
 * DescribeKnowledgeBases request structure.
 *
 * @method integer getSubAppId() Obtain <p>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
 * @method string getName() Obtain <p>Filter by exact matching of the knowledge base name. If not specified, return all knowledge bases.</p>
 * @method void setName(string $Name) Set <p>Filter by exact matching of the knowledge base name. If not specified, return all knowledge bases.</p>
 */
class DescribeKnowledgeBasesRequest extends AbstractModel
{
    /**
     * @var integer <p>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var string <p>Filter by exact matching of the knowledge base name. If not specified, return all knowledge bases.</p>
     */
    public $Name;

    /**
     * @param integer $SubAppId <p>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 100. Maximum value: 100.</p>
     * @param string $Name <p>Filter by exact matching of the knowledge base name. If not specified, return all knowledge bases.</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
