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
 * Access URL redirected destination port configuration parameter.
 *
 * @method string getAction() Obtain <p>Target port configuration</p><p>Enumeration values:</p><ul><li>FollowProtocol: Use the default port of the target protocol. The port is not explicitly specified in the redirect address. The target protocol uses its default port: 80 for HTTP and 443 for HTTPS.</li><li>FollowRequest: Follow the target port of the client request. If the request address explicitly carries a port, continue to use that port. If not, the redirect address does not carry a port.</li><li>Custom: Use the designated custom port.</li></ul>
 * @method void setAction(string $Action) Set <p>Target port configuration</p><p>Enumeration values:</p><ul><li>FollowProtocol: Use the default port of the target protocol. The port is not explicitly specified in the redirect address. The target protocol uses its default port: 80 for HTTP and 443 for HTTPS.</li><li>FollowRequest: Follow the target port of the client request. If the request address explicitly carries a port, continue to use that port. If not, the redirect address does not carry a port.</li><li>Custom: Use the designated custom port.</li></ul>
 * @method integer getValue() Obtain <p>Custom destination port.</p><p>Value range: [1, 65535]</p><p>Required when Action is Custom. It is ineffective when Action is FollowProtocol or FollowRequest.</p>
 * @method void setValue(integer $Value) Set <p>Custom destination port.</p><p>Value range: [1, 65535]</p><p>Required when Action is Custom. It is ineffective when Action is FollowProtocol or FollowRequest.</p>
 */
class AccessURLRedirectPort extends AbstractModel
{
    /**
     * @var string <p>Target port configuration</p><p>Enumeration values:</p><ul><li>FollowProtocol: Use the default port of the target protocol. The port is not explicitly specified in the redirect address. The target protocol uses its default port: 80 for HTTP and 443 for HTTPS.</li><li>FollowRequest: Follow the target port of the client request. If the request address explicitly carries a port, continue to use that port. If not, the redirect address does not carry a port.</li><li>Custom: Use the designated custom port.</li></ul>
     */
    public $Action;

    /**
     * @var integer <p>Custom destination port.</p><p>Value range: [1, 65535]</p><p>Required when Action is Custom. It is ineffective when Action is FollowProtocol or FollowRequest.</p>
     */
    public $Value;

    /**
     * @param string $Action <p>Target port configuration</p><p>Enumeration values:</p><ul><li>FollowProtocol: Use the default port of the target protocol. The port is not explicitly specified in the redirect address. The target protocol uses its default port: 80 for HTTP and 443 for HTTPS.</li><li>FollowRequest: Follow the target port of the client request. If the request address explicitly carries a port, continue to use that port. If not, the redirect address does not carry a port.</li><li>Custom: Use the designated custom port.</li></ul>
     * @param integer $Value <p>Custom destination port.</p><p>Value range: [1, 65535]</p><p>Required when Action is Custom. It is ineffective when Action is FollowProtocol or FollowRequest.</p>
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
