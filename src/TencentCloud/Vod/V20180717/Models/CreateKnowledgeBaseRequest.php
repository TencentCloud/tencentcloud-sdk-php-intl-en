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
 * CreateKnowledgeBase request structure.
 *
 * @method integer getSubAppId() Obtain <p>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
 * @method string getName() Obtain <p>Knowledge base name. Length limit: 1-64 characters.</p>
 * @method void setName(string $Name) Set <p>Knowledge base name. Length limit: 1-64 characters.</p>
 * @method string getDescription() Obtain <p>Knowledge base description. Length limit: up to 256 characters.</p>
 * @method void setDescription(string $Description) Set <p>Knowledge base description. Length limit: up to 256 characters.</p>
 */
class CreateKnowledgeBaseRequest extends AbstractModel
{
    /**
     * @var integer <p>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Knowledge base name. Length limit: 1-64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Knowledge base description. Length limit: up to 256 characters.</p>
     */
    public $Description;

    /**
     * @param integer $SubAppId <p>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</p>
     * @param string $Name <p>Knowledge base name. Length limit: 1-64 characters.</p>
     * @param string $Description <p>Knowledge base description. Length limit: up to 256 characters.</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
