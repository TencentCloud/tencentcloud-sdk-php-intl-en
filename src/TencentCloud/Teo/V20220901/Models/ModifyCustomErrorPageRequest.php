<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomErrorPage request structure.
 *
 * @method string getPageId() Obtain Custom error page ID.
 * @method void setPageId(string $PageId) Set Custom error page ID.
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getName() Obtain Custom error page name. The name must be 2-60 characters long.
 * @method void setName(string $Name) Set Custom error page name. The name must be 2-60 characters long.
 * @method string getDescription() Obtain Custom error page description, not exceeding 60 characters.
 * @method void setDescription(string $Description) Set Custom error page description, not exceeding 60 characters.
 * @method string getContentType() Obtain Custom error page type, with values:<li>text/html. </li><li>application/json.</li><li>plain/text.</li><li>text/xml.</li>
 * @method void setContentType(string $ContentType) Set Custom error page type, with values:<li>text/html. </li><li>application/json.</li><li>plain/text.</li><li>text/xml.</li>
 * @method string getContent() Obtain Custom error page content, not exceeding 2 KB.
 * @method void setContent(string $Content) Set Custom error page content, not exceeding 2 KB.
 */
class ModifyCustomErrorPageRequest extends AbstractModel
{
    /**
     * @var string Custom error page ID.
     */
    public $PageId;

    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Custom error page name. The name must be 2-60 characters long.
     */
    public $Name;

    /**
     * @var string Custom error page description, not exceeding 60 characters.
     */
    public $Description;

    /**
     * @var string Custom error page type, with values:<li>text/html. </li><li>application/json.</li><li>plain/text.</li><li>text/xml.</li>
     */
    public $ContentType;

    /**
     * @var string Custom error page content, not exceeding 2 KB.
     */
    public $Content;

    /**
     * @param string $PageId Custom error page ID.
     * @param string $ZoneId Zone ID.
     * @param string $Name Custom error page name. The name must be 2-60 characters long.
     * @param string $Description Custom error page description, not exceeding 60 characters.
     * @param string $ContentType Custom error page type, with values:<li>text/html. </li><li>application/json.</li><li>plain/text.</li><li>text/xml.</li>
     * @param string $Content Custom error page content, not exceeding 2 KB.
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
