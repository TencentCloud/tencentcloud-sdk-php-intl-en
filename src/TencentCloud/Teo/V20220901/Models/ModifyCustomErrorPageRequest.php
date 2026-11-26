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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomErrorPage request structure.
 *
 * @method string getPageId() Obtain <p>ID of the custom response page.</p>
 * @method void setPageId(string $PageId) Set <p>ID of the custom response page.</p>
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getName() Obtain <p>Custom response page name, which must contain 2 to 60 characters.</p>
 * @method void setName(string $Name) Set <p>Custom response page name, which must contain 2 to 60 characters.</p>
 * @method string getDescription() Obtain <p>Describe the custom response page. The described content should be no more than 60 characters.</p>
 * @method void setDescription(string $Description) Set <p>Describe the custom response page. The described content should be no more than 60 characters.</p>
 * @method string getContentType() Obtain <p>Custom response page type, with values:</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
 * @method void setContentType(string $ContentType) Set <p>Custom response page type, with values:</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
 * @method string getContent() Obtain <p>Custom response page content. The content should be no more than 16KB.</p>
 * @method void setContent(string $Content) Set <p>Custom response page content. The content should be no more than 16KB.</p>
 */
class ModifyCustomErrorPageRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the custom response page.</p>
     */
    public $PageId;

    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Custom response page name, which must contain 2 to 60 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Describe the custom response page. The described content should be no more than 60 characters.</p>
     */
    public $Description;

    /**
     * @var string <p>Custom response page type, with values:</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
     */
    public $ContentType;

    /**
     * @var string <p>Custom response page content. The content should be no more than 16KB.</p>
     */
    public $Content;

    /**
     * @param string $PageId <p>ID of the custom response page.</p>
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $Name <p>Custom response page name, which must contain 2 to 60 characters.</p>
     * @param string $Description <p>Describe the custom response page. The described content should be no more than 60 characters.</p>
     * @param string $ContentType <p>Custom response page type, with values:</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
     * @param string $Content <p>Custom response page content. The content should be no more than 16KB.</p>
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
