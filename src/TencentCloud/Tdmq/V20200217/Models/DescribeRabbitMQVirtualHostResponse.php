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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQVirtualHost response structure.
 *
 * @method integer getTotalCount() Obtain Returned number of vhosts
 * @method void setTotalCount(integer $TotalCount) Set Returned number of vhosts
 * @method array getVirtualHostList() Obtain List of vhost details
 * @method void setVirtualHostList(array $VirtualHostList) Set List of vhost details
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRabbitMQVirtualHostResponse extends AbstractModel
{
    /**
     * @var integer Returned number of vhosts
     */
    public $TotalCount;

    /**
     * @var array List of vhost details
     */
    public $VirtualHostList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Returned number of vhosts
     * @param array $VirtualHostList List of vhost details
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

        if (array_key_exists("VirtualHostList",$param) and $param["VirtualHostList"] !== null) {
            $this->VirtualHostList = [];
            foreach ($param["VirtualHostList"] as $key => $value){
                $obj = new RabbitMQVirtualHostInfo();
                $obj->deserialize($value);
                array_push($this->VirtualHostList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
