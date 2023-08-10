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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQVirtualHostList response structure.
 *
 * @method integer getTotalCount() Obtain The number of clusters
 * @method void setTotalCount(integer $TotalCount) Set The number of clusters
 * @method array getVirtualHostList() Obtain Cluster list
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualHostList(array $VirtualHostList) Set Cluster list
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRabbitMQVirtualHostListResponse extends AbstractModel
{
    /**
     * @var integer The number of clusters
     */
    public $TotalCount;

    /**
     * @var array Cluster list
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualHostList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of clusters
     * @param array $VirtualHostList Cluster list
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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
                $obj = new RabbitMQPrivateVirtualHost();
                $obj->deserialize($value);
                array_push($this->VirtualHostList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
