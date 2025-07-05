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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHTTPListenerAttribute request structure.
 *
 * @method string getListenerId() Obtain Listener ID to be modified
 * @method void setListenerId(string $ListenerId) Set Listener ID to be modified
 * @method string getListenerName() Obtain New listener name
 * @method void setListenerName(string $ListenerName) Set New listener name
 * @method string getProxyId() Obtain Connection ID
 * @method void setProxyId(string $ProxyId) Set Connection ID
 */
class ModifyHTTPListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID to be modified
     */
    public $ListenerId;

    /**
     * @var string New listener name
     */
    public $ListenerName;

    /**
     * @var string Connection ID
     */
    public $ProxyId;

    /**
     * @param string $ListenerId Listener ID to be modified
     * @param string $ListenerName New listener name
     * @param string $ProxyId Connection ID
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
