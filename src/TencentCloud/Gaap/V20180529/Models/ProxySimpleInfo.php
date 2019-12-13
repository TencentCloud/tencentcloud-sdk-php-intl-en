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
 * @method string getProxyId() 获取Connection ID
 * @method void setProxyId(string $ProxyId) 设置Connection ID
 * @method string getProxyName() 获取Connection name
 * @method void setProxyName(string $ProxyName) 设置Connection name
 * @method array getListenerList() 获取Listener list
 * @method void setListenerList(array $ListenerList) 设置Listener list
 */

/**
 *Used by internal APIs. It returns connections from which the statistics can be derived, and the listener information.
 */
class ProxySimpleInfo extends AbstractModel
{
    /**
     * @var string Connection ID
     */
    public $ProxyId;

    /**
     * @var string Connection name
     */
    public $ProxyName;

    /**
     * @var array Listener list
     */
    public $ListenerList;
    /**
     * @param string $ProxyId Connection ID
     * @param string $ProxyName Connection name
     * @param array $ListenerList Listener list
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("ListenerList",$param) and $param["ListenerList"] !== null) {
            $this->ListenerList = [];
            foreach ($param["ListenerList"] as $key => $value){
                $obj = new ListenerInfo();
                $obj->deserialize($value);
                array_push($this->ListenerList, $obj);
            }
        }
    }
}
