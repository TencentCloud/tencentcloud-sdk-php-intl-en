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
 * DescribeProxiesStatus request structure.
 *
 * @method array getInstanceIds() Obtain Connection ID list; It’s an old parameter, please switch to ProxyIds.
 * @method void setInstanceIds(array $InstanceIds) Set Connection ID list; It’s an old parameter, please switch to ProxyIds.
 * @method array getProxyIds() Obtain Connection ID list; It’s a new parameter.
 * @method void setProxyIds(array $ProxyIds) Set Connection ID list; It’s a new parameter.
 */
class DescribeProxiesStatusRequest extends AbstractModel
{
    /**
     * @var array Connection ID list; It’s an old parameter, please switch to ProxyIds.
     */
    public $InstanceIds;

    /**
     * @var array Connection ID list; It’s a new parameter.
     */
    public $ProxyIds;

    /**
     * @param array $InstanceIds Connection ID list; It’s an old parameter, please switch to ProxyIds.
     * @param array $ProxyIds Connection ID list; It’s a new parameter.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
