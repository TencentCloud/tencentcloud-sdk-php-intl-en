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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method TemplateContent getTemplateContent() Obtain Template content.
 * @method void setTemplateContent(TemplateContent $TemplateContent) Set Template content.
 */
class CreateEmailTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var TemplateContent Template content.
     */
    public $TemplateContent;

    /**
     * @param string $TemplateName Template name.
     * @param TemplateContent $TemplateContent Template content.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = new TemplateContent();
            $this->TemplateContent->deserialize($param["TemplateContent"]);
        }
    }
}
