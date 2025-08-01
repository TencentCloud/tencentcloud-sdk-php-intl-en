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
 * InquirePriceCreateDirectConnectGateway response structure.
 *
 * @method integer getTotalCost() Obtain Standard access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCost(integer $TotalCost) Set Standard access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRealTotalCost() Obtain Actual access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRealTotalCost(integer $RealTotalCost) Set Actual access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class InquirePriceCreateDirectConnectGatewayResponse extends AbstractModel
{
    /**
     * @var integer Standard access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @var integer Actual access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RealTotalCost;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCost Standard access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RealTotalCost Actual access fee for a direct connect gateway
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
