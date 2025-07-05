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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseProxy request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getProxyGroupId() Obtain Database proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID
 * @method boolean getOnlyCloseRW() Obtain Whether only to disable read/write separation. Valid values: `true`, `false`.
 * @method void setOnlyCloseRW(boolean $OnlyCloseRW) Set Whether only to disable read/write separation. Valid values: `true`, `false`.
 */
class CloseProxyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Database proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean Whether only to disable read/write separation. Valid values: `true`, `false`.
     */
    public $OnlyCloseRW;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ProxyGroupId Database proxy group ID
     * @param boolean $OnlyCloseRW Whether only to disable read/write separation. Valid values: `true`, `false`.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("OnlyCloseRW",$param) and $param["OnlyCloseRW"] !== null) {
            $this->OnlyCloseRW = $param["OnlyCloseRW"];
        }
    }
}
