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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancersProject request structure.
 *
 * @method array getLoadBalancerIds() Obtain IDs of CLB instances ID(s).
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set IDs of CLB instances ID(s).
 * @method integer getProjectId() Obtain Project ID. You can obtain it through the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API.
 * @method void setProjectId(integer $ProjectId) Set Project ID. You can obtain it through the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API.
 */
class ModifyLoadBalancersProjectRequest extends AbstractModel
{
    /**
     * @var array IDs of CLB instances ID(s).
     */
    public $LoadBalancerIds;

    /**
     * @var integer Project ID. You can obtain it through the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API.
     */
    public $ProjectId;

    /**
     * @param array $LoadBalancerIds IDs of CLB instances ID(s).
     * @param integer $ProjectId Project ID. You can obtain it through the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API.
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
