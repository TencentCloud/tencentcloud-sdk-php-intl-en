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
 * CreateSecurityDropPage request structure.
 *
 * @method string getZoneId() Obtain The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setZoneId(string $ZoneId) Set The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method string getEntity() Obtain The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setEntity(string $Entity) Set The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method string getName() Obtain Name of the block page file.
 * @method void setName(string $Name) Set Name of the block page file.
 * @method string getContent() Obtain The block page content, which is passed after being URL-encoded.
 * @method void setContent(string $Content) Set The block page content, which is passed after being URL-encoded.
 * @method string getType() Obtain How to build the block page. Values:
<li>`file`: Upload a file to be URL-encoded.</li>
<li>`url`: Upload a URL to be URL-encoded.</li>
 * @method void setType(string $Type) Set How to build the block page. Values:
<li>`file`: Upload a file to be URL-encoded.</li>
<li>`url`: Upload a URL to be URL-encoded.</li>
 * @method string getModule() Obtain The module that applies on the block page. Values:
<li>`waf`: Managed rules</li>
<li>`rate`: Custom rules</li>
 * @method void setModule(string $Module) Set The module that applies on the block page. Values:
<li>`waf`: Managed rules</li>
<li>`rate`: Custom rules</li>
 * @method string getTemplateId() Obtain The template ID. You must specify either this field or "ZoneId+Entity".
 * @method void setTemplateId(string $TemplateId) Set The template ID. You must specify either this field or "ZoneId+Entity".
 */
class CreateSecurityDropPageRequest extends AbstractModel
{
    /**
     * @var string The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $ZoneId;

    /**
     * @var string The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $Entity;

    /**
     * @var string Name of the block page file.
     */
    public $Name;

    /**
     * @var string The block page content, which is passed after being URL-encoded.
     */
    public $Content;

    /**
     * @var string How to build the block page. Values:
<li>`file`: Upload a file to be URL-encoded.</li>
<li>`url`: Upload a URL to be URL-encoded.</li>
     */
    public $Type;

    /**
     * @var string The module that applies on the block page. Values:
<li>`waf`: Managed rules</li>
<li>`rate`: Custom rules</li>
     */
    public $Module;

    /**
     * @var string The template ID. You must specify either this field or "ZoneId+Entity".
     */
    public $TemplateId;

    /**
     * @param string $ZoneId The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     * @param string $Entity The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
     * @param string $Name Name of the block page file.
     * @param string $Content The block page content, which is passed after being URL-encoded.
     * @param string $Type How to build the block page. Values:
<li>`file`: Upload a file to be URL-encoded.</li>
<li>`url`: Upload a URL to be URL-encoded.</li>
     * @param string $Module The module that applies on the block page. Values:
<li>`waf`: Managed rules</li>
<li>`rate`: Custom rules</li>
     * @param string $TemplateId The template ID. You must specify either this field or "ZoneId+Entity".
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
