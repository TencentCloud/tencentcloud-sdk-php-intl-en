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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseCDBProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method boolean getOnlyCloseRW() Obtain Whether only to disable read/write separation. Valid values: `true`, `false`. Default value: `false`.
 * @method void setOnlyCloseRW(boolean $OnlyCloseRW) Set Whether only to disable read/write separation. Valid values: `true`, `false`. Default value: `false`.
 */
class CloseCDBProxyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean Whether only to disable read/write separation. Valid values: `true`, `false`. Default value: `false`.
     */
    public $OnlyCloseRW;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ProxyGroupId Proxy group ID
     * @param boolean $OnlyCloseRW Whether only to disable read/write separation. Valid values: `true`, `false`. Default value: `false`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("OnlyCloseRW",$param) and $param["OnlyCloseRW"] !== null) {
            $this->OnlyCloseRW = $param["OnlyCloseRW"];
        }
    }
}
