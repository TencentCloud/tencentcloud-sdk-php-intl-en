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
 * Query the binding status of origin servers. BindStatus: 0 (not bound), 1(bound to rules or listeners).
 *
 * @method string getRealServerId() Obtain Origin server ID.
 * @method void setRealServerId(string $RealServerId) Set Origin server ID.
 * @method integer getBindStatus() Obtain `0`: Not bound; `1`: Bound to rule or listener.
 * @method void setBindStatus(integer $BindStatus) Set `0`: Not bound; `1`: Bound to rule or listener.
 * @method string getProxyId() Obtain ID of the connection bound to this origin server. This string is empty if they are not bound.
 * @method void setProxyId(string $ProxyId) Set ID of the connection bound to this origin server. This string is empty if they are not bound.
 * @method string getGroupId() Obtain ID of the connection group bound to this origin server. This string is null if no connection groups are bound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set ID of the connection group bound to this origin server. This string is null if no connection groups are bound.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RealServerStatus extends AbstractModel
{
    /**
     * @var string Origin server ID.
     */
    public $RealServerId;

    /**
     * @var integer `0`: Not bound; `1`: Bound to rule or listener.
     */
    public $BindStatus;

    /**
     * @var string ID of the connection bound to this origin server. This string is empty if they are not bound.
     */
    public $ProxyId;

    /**
     * @var string ID of the connection group bound to this origin server. This string is null if no connection groups are bound.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @param string $RealServerId Origin server ID.
     * @param integer $BindStatus `0`: Not bound; `1`: Bound to rule or listener.
     * @param string $ProxyId ID of the connection bound to this origin server. This string is empty if they are not bound.
     * @param string $GroupId ID of the connection group bound to this origin server. This string is null if no connection groups are bound.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
