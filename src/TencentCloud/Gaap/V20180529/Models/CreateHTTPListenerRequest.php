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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHTTPListener request structure.
 *
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method void setPort(integer $Port) Set Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method string getProxyId() Obtain Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
 * @method void setProxyId(string $ProxyId) Set Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
 * @method string getGroupId() Obtain Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
 * @method void setGroupId(string $GroupId) Set Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
 */
class CreateHTTPListenerRequest extends AbstractModel
{
    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     */
    public $Port;

    /**
     * @var string Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
     */
    public $ProxyId;

    /**
     * @var string Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
     */
    public $GroupId;

    /**
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     * @param string $ProxyId Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
     * @param string $GroupId Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
