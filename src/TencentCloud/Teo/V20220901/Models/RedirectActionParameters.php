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
 * Additional parameter for safe execution when the action is set to redirect.

This parameter is used to specify the extra handling action taken by the system when a security rule is hit and a redirection action is executed.
Different disposal actions are configured with different fixed parameter combinations. The system will determine the actually effective disposal action type according to the configured parameter combination.
During the same redirection execution, only one handling action can be configured and made effective. Parameter combinations for multiple disposal actions cannot appear at the same time. Otherwise, it is deemed as an invalid configuration.
RedirectActionParameters supports the following extra handling actions: <li>Redirect: redirect client requests to the specified destination URL. Corresponding parameter: URL.</li>
 *
 * @method string getURL() Obtain Redirect URL.
 * @method void setURL(string $URL) Set Redirect URL.
 */
class RedirectActionParameters extends AbstractModel
{
    /**
     * @var string Redirect URL.
     */
    public $URL;

    /**
     * @param string $URL Redirect URL.
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
