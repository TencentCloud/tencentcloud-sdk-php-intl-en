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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDealDetail request structure.
 *
 * @method array getDealIds() Obtain Order transaction ID array, which is the output parameter DealId of [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1), with the maximum array length of 10.
 * @method void setDealIds(array $DealIds) Set Order transaction ID array, which is the output parameter DealId of [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1), with the maximum array length of 10.
 */
class DescribeInstanceDealDetailRequest extends AbstractModel
{
    /**
     * @var array Order transaction ID array, which is the output parameter DealId of [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1), with the maximum array length of 10.
     */
    public $DealIds;

    /**
     * @param array $DealIds Order transaction ID array, which is the output parameter DealId of [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1), with the maximum array length of 10.
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
        if (array_key_exists("DealIds",$param) and $param["DealIds"] !== null) {
            $this->DealIds = $param["DealIds"];
        }
    }
}
