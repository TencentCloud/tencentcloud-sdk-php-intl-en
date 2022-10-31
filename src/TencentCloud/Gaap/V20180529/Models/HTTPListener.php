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
 * HTTP listener information
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
 * @method integer getCreateTime() Obtain Listener creation time; using UNIX timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Listener creation time; using UNIX timestamp.
 * @method string getProtocol() Obtain Listener protocol. Valid values: HTTP, HTTPS. The value `HTTP` is used for this structure
 * @method void setProtocol(string $Protocol) Set Listener protocol. Valid values: HTTP, HTTPS. The value `HTTP` is used for this structure
 * @method integer getListenerStatus() Obtain Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 * @method void setListenerStatus(integer $ListenerStatus) Set Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 * @method string getProxyId() Obtain Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getGroupId() Obtain Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGroupId(string $GroupId) Set Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class HTTPListener extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var integer Listener creation time; using UNIX timestamp.
     */
    public $CreateTime;

    /**
     * @var string Listener protocol. Valid values: HTTP, HTTPS. The value `HTTP` is used for this structure
     */
    public $Protocol;

    /**
     * @var integer Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     */
    public $ListenerStatus;

    /**
     * @var string Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ProxyId;

    /**
     * @var string Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $GroupId;

    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port
     * @param integer $CreateTime Listener creation time; using UNIX timestamp.
     * @param string $Protocol Listener protocol. Valid values: HTTP, HTTPS. The value `HTTP` is used for this structure
     * @param integer $ListenerStatus Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     * @param string $ProxyId Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $GroupId Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
