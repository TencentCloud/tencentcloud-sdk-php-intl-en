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
 * Security template settings
 *
 * @method string getTemplateId() Obtain The template ID.
 * @method void setTemplateId(string $TemplateId) Set The template ID.
 * @method string getTemplateName() Obtain The template name.
 * @method void setTemplateName(string $TemplateName) Set The template name.
 */
class TemplateConfig extends AbstractModel
{
    /**
     * @var string The template ID.
     */
    public $TemplateId;

    /**
     * @var string The template name.
     */
    public $TemplateName;

    /**
     * @param string $TemplateId The template ID.
     * @param string $TemplateName The template name.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }
    }
}
