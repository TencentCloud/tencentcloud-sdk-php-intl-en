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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkInterfaceLimit response structure.
 *
 * @method integer getEniQuantity() Obtain ENI quota
 * @method void setEniQuantity(integer $EniQuantity) Set ENI quota
 * @method integer getEniPrivateIpAddressQuantity() Obtain Quota of IP addresses that can be allocated to each ENI.
 * @method void setEniPrivateIpAddressQuantity(integer $EniPrivateIpAddressQuantity) Set Quota of IP addresses that can be allocated to each ENI.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNetworkInterfaceLimitResponse extends AbstractModel
{
    /**
     * @var integer ENI quota
     */
    public $EniQuantity;

    /**
     * @var integer Quota of IP addresses that can be allocated to each ENI.
     */
    public $EniPrivateIpAddressQuantity;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $EniQuantity ENI quota
     * @param integer $EniPrivateIpAddressQuantity Quota of IP addresses that can be allocated to each ENI.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("EniQuantity",$param) and $param["EniQuantity"] !== null) {
            $this->EniQuantity = $param["EniQuantity"];
        }

        if (array_key_exists("EniPrivateIpAddressQuantity",$param) and $param["EniPrivateIpAddressQuantity"] !== null) {
            $this->EniPrivateIpAddressQuantity = $param["EniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
