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
 * Security configuration of the Template.
 *
 * @method string getTemplateId() Obtain <p>ID of the policy template</p>
 * @method void setTemplateId(string $TemplateId) Set <p>ID of the policy template</p>
 * @method string getTemplateName() Obtain <p>Policy template name. It consists of Chinese, English, digits, and underscores. It cannot begin with an underscore and its length cannot exceed 32 characters.</p>
 * @method void setTemplateName(string $TemplateName) Set <p>Policy template name. It consists of Chinese, English, digits, and underscores. It cannot begin with an underscore and its length cannot exceed 32 characters.</p>
 * @method SecurityPolicy getPolicy() Obtain <p>Policy settings of a policy template apply to all domain names associated with the template.</p>
 * @method void setPolicy(SecurityPolicy $Policy) Set <p>Policy settings of a policy template apply to all domain names associated with the template.</p>
 */
class WebSecurityTemplates extends AbstractModel
{
    /**
     * @var string <p>ID of the policy template</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Policy template name. It consists of Chinese, English, digits, and underscores. It cannot begin with an underscore and its length cannot exceed 32 characters.</p>
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy <p>Policy settings of a policy template apply to all domain names associated with the template.</p>
     */
    public $Policy;

    /**
     * @param string $TemplateId <p>ID of the policy template</p>
     * @param string $TemplateName <p>Policy template name. It consists of Chinese, English, digits, and underscores. It cannot begin with an underscore and its length cannot exceed 32 characters.</p>
     * @param SecurityPolicy $Policy <p>Policy settings of a policy template apply to all domain names associated with the template.</p>
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

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SecurityPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}
