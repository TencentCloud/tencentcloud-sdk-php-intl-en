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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取Quantity of origin server query results returned
 * @method void setTotalCount(integer $TotalCount) 设置Quantity of origin server query results returned
 * @method array getRealServerStatusSet() 获取Binding status list of origin servers
 * @method void setRealServerStatusSet(array $RealServerStatusSet) 设置Binding status list of origin servers
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeRealServersStatus response structure.
 */
class DescribeRealServersStatusResponse extends AbstractModel
{
    /**
     * @var integer Quantity of origin server query results returned
     */
    public $TotalCount;

    /**
     * @var array Binding status list of origin servers
     */
    public $RealServerStatusSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Quantity of origin server query results returned
     * @param array $RealServerStatusSet Binding status list of origin servers
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RealServerStatusSet",$param) and $param["RealServerStatusSet"] !== null) {
            $this->RealServerStatusSet = [];
            foreach ($param["RealServerStatusSet"] as $key => $value){
                $obj = new RealServerStatus();
                $obj->deserialize($value);
                array_push($this->RealServerStatusSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
