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
 * HostName configuration parameter for access URL redirection.
 *
 * @method string getAction() Obtain Target HostName configuration. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom.</li>
 * @method void setAction(string $Action) Set Target HostName configuration. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom.</li>
 * @method string getValue() Obtain custom value of the target HostName. Maximum length: 1024.<br>Note: This field is required when Action is custom, and it is ineffective when Action is follow.
 * @method void setValue(string $Value) Set custom value of the target HostName. Maximum length: 1024.<br>Note: This field is required when Action is custom, and it is ineffective when Action is follow.
 */
class HostName extends AbstractModel
{
    /**
     * @var string Target HostName configuration. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom.</li>
     */
    public $Action;

    /**
     * @var string custom value of the target HostName. Maximum length: 1024.<br>Note: This field is required when Action is custom, and it is ineffective when Action is follow.
     */
    public $Value;

    /**
     * @param string $Action Target HostName configuration. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom.</li>
     * @param string $Value custom value of the target HostName. Maximum length: 1024.<br>Note: This field is required when Action is custom, and it is ineffective when Action is follow.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
