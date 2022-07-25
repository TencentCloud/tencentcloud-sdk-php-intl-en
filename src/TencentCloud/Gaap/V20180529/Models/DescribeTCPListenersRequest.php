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
 * DescribeTCPListeners request structure.
 *
 * @method string getProxyId() Obtain Filter condition that filters by connection ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
 * @method void setProxyId(string $ProxyId) Set Filter condition that filters by connection ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
 * @method string getListenerId() Obtain Filter condition. Exact query by listener ID.
When ProxyId is specified, the listener will be checked whether it belongs to the connection.
When GroupId is specified, the listener will be checked whether it belongs to the connection group.
 * @method void setListenerId(string $ListenerId) Set Filter condition. Exact query by listener ID.
When ProxyId is specified, the listener will be checked whether it belongs to the connection.
When GroupId is specified, the listener will be checked whether it belongs to the connection group.
 * @method string getListenerName() Obtain Filter condition. Exact query by listener name.
 * @method void setListenerName(string $ListenerName) Set Filter condition. Exact query by listener name.
 * @method integer getPort() Obtain Filter condition. Exact query by listener port.
 * @method void setPort(integer $Port) Set Filter condition. Exact query by listener port.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Quantity limit. The default value is 20.
 * @method void setLimit(integer $Limit) Set Quantity limit. The default value is 20.
 * @method string getGroupId() Obtain Filter condition that filters by connection group ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
 * @method void setGroupId(string $GroupId) Set Filter condition that filters by connection group ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
 * @method string getSearchValue() Obtain Filter condition. It supports fuzzy query by port or listener name. This parameter cannot be used with `ListenerName` or `Port`.
 * @method void setSearchValue(string $SearchValue) Set Filter condition. It supports fuzzy query by port or listener name. This parameter cannot be used with `ListenerName` or `Port`.
 */
class DescribeTCPListenersRequest extends AbstractModel
{
    /**
     * @var string Filter condition that filters by connection ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
     */
    public $ProxyId;

    /**
     * @var string Filter condition. Exact query by listener ID.
When ProxyId is specified, the listener will be checked whether it belongs to the connection.
When GroupId is specified, the listener will be checked whether it belongs to the connection group.
     */
    public $ListenerId;

    /**
     * @var string Filter condition. Exact query by listener name.
     */
    public $ListenerName;

    /**
     * @var integer Filter condition. Exact query by listener port.
     */
    public $Port;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Quantity limit. The default value is 20.
     */
    public $Limit;

    /**
     * @var string Filter condition that filters by connection group ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
     */
    public $GroupId;

    /**
     * @var string Filter condition. It supports fuzzy query by port or listener name. This parameter cannot be used with `ListenerName` or `Port`.
     */
    public $SearchValue;

    /**
     * @param string $ProxyId Filter condition that filters by connection ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
     * @param string $ListenerId Filter condition. Exact query by listener ID.
When ProxyId is specified, the listener will be checked whether it belongs to the connection.
When GroupId is specified, the listener will be checked whether it belongs to the connection group.
     * @param string $ListenerName Filter condition. Exact query by listener name.
     * @param integer $Port Filter condition. Exact query by listener port.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Quantity limit. The default value is 20.
     * @param string $GroupId Filter condition that filters by connection group ID. You must specify at least one filter condition (ProxyId/GroupId/ListenerId), but ProxyId and GroupId cannot be set at the same time.
     * @param string $SearchValue Filter condition. It supports fuzzy query by port or listener name. This parameter cannot be used with `ListenerName` or `Port`.
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}
