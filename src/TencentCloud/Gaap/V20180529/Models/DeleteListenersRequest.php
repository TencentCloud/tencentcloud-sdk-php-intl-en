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
 * @method array getListenerIds() 获取ID list of listeners to be deleted
 * @method void setListenerIds(array $ListenerIds) 设置ID list of listeners to be deleted
 * @method integer getForce() 获取Whether to allow a forced deletion of listeners that have been bound to origin servers. 1: allowed; 0: not allow.
 * @method void setForce(integer $Force) 设置Whether to allow a forced deletion of listeners that have been bound to origin servers. 1: allowed; 0: not allow.
 * @method string getGroupId() 获取Connection group ID; Either this parameter or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) 设置Connection group ID; Either this parameter or `GroupId` must be set, but you cannot set both.
 * @method string getProxyId() 获取Connection ID; Either this parameter or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) 设置Connection ID; Either this parameter or `GroupId` must be set, but you cannot set both.
 */

/**
 *DeleteListeners request structure.
 */
class DeleteListenersRequest extends AbstractModel
{
    /**
     * @var array ID list of listeners to be deleted
     */
    public $ListenerIds;

    /**
     * @var integer Whether to allow a forced deletion of listeners that have been bound to origin servers. 1: allowed; 0: not allow.
     */
    public $Force;

    /**
     * @var string Connection group ID; Either this parameter or `GroupId` must be set, but you cannot set both.
     */
    public $GroupId;

    /**
     * @var string Connection ID; Either this parameter or `GroupId` must be set, but you cannot set both.
     */
    public $ProxyId;
    /**
     * @param array $ListenerIds ID list of listeners to be deleted
     * @param integer $Force Whether to allow a forced deletion of listeners that have been bound to origin servers. 1: allowed; 0: not allow.
     * @param string $GroupId Connection group ID; Either this parameter or `GroupId` must be set, but you cannot set both.
     * @param string $ProxyId Connection ID; Either this parameter or `GroupId` must be set, but you cannot set both.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
