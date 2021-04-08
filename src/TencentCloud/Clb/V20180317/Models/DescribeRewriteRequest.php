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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRewrite request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getSourceListenerIds() Obtain Array of CLB listener IDs
 * @method void setSourceListenerIds(array $SourceListenerIds) Set Array of CLB listener IDs
 * @method array getSourceLocationIds() Obtain Array of CLB forwarding rule IDs
 * @method void setSourceLocationIds(array $SourceLocationIds) Set Array of CLB forwarding rule IDs
 */
class DescribeRewriteRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Array of CLB listener IDs
     */
    public $SourceListenerIds;

    /**
     * @var array Array of CLB forwarding rule IDs
     */
    public $SourceLocationIds;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $SourceListenerIds Array of CLB listener IDs
     * @param array $SourceLocationIds Array of CLB forwarding rule IDs
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("SourceListenerIds",$param) and $param["SourceListenerIds"] !== null) {
            $this->SourceListenerIds = $param["SourceListenerIds"];
        }

        if (array_key_exists("SourceLocationIds",$param) and $param["SourceLocationIds"] !== null) {
            $this->SourceLocationIds = $param["SourceLocationIds"];
        }
    }
}
