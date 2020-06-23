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
 * DescribeDirectConnectGateways response structure.
 *
 * @method integer getTotalCount() Obtain The number of objects meeting the condition.
 * @method void setTotalCount(integer $TotalCount) Set The number of objects meeting the condition.
 * @method array getDirectConnectGatewaySet() Obtain The object array of the Direct Connect gateway.
 * @method void setDirectConnectGatewaySet(array $DirectConnectGatewaySet) Set The object array of the Direct Connect gateway.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDirectConnectGatewaysResponse extends AbstractModel
{
    /**
     * @var integer The number of objects meeting the condition.
     */
    public $TotalCount;

    /**
     * @var array The object array of the Direct Connect gateway.
     */
    public $DirectConnectGatewaySet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of objects meeting the condition.
     * @param array $DirectConnectGatewaySet The object array of the Direct Connect gateway.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DirectConnectGatewaySet",$param) and $param["DirectConnectGatewaySet"] !== null) {
            $this->DirectConnectGatewaySet = [];
            foreach ($param["DirectConnectGatewaySet"] as $key => $value){
                $obj = new DirectConnectGateway();
                $obj->deserialize($value);
                array_push($this->DirectConnectGatewaySet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
