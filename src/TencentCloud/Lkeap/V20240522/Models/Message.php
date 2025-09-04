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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session content.
 *
 * @method string getRole() Obtain Role.
 * @method void setRole(string $Role) Set Role.
 * @method string getContent() Obtain Content.
 * @method void setContent(string $Content) Set Content.
 * @method string getReasoningContent() Obtain Chain of thought content. The ReasoningConent parameter only supports output parameters, and is only returned by the deepseek-r1 model.
 * @method void setReasoningContent(string $ReasoningContent) Set Chain of thought content. The ReasoningConent parameter only supports output parameters, and is only returned by the deepseek-r1 model.
 */
class Message extends AbstractModel
{
    /**
     * @var string Role.
     */
    public $Role;

    /**
     * @var string Content.
     */
    public $Content;

    /**
     * @var string Chain of thought content. The ReasoningConent parameter only supports output parameters, and is only returned by the deepseek-r1 model.
     */
    public $ReasoningContent;

    /**
     * @param string $Role Role.
     * @param string $Content Content.
     * @param string $ReasoningContent Chain of thought content. The ReasoningConent parameter only supports output parameters, and is only returned by the deepseek-r1 model.
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ReasoningContent",$param) and $param["ReasoningContent"] !== null) {
            $this->ReasoningContent = $param["ReasoningContent"];
        }
    }
}
