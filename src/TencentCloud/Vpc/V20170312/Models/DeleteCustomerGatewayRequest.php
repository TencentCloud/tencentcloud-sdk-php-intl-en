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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCustomerGateway request structure.
 *
 * @method string getCustomerGatewayId() Obtain The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/api/215/17516?from_cn_redirect=1) API.
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/api/215/17516?from_cn_redirect=1) API.
 */
class DeleteCustomerGatewayRequest extends AbstractModel
{
    /**
     * @var string The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/api/215/17516?from_cn_redirect=1) API.
     */
    public $CustomerGatewayId;

    /**
     * @param string $CustomerGatewayId The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/api/215/17516?from_cn_redirect=1) API.
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }
    }
}
