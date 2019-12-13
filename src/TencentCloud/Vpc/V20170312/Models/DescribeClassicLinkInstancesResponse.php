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
 * @method integer getTotalCount() 获取符合条件的实例数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的实例数量。
 * @method array getClassicLinkInstanceSet() 获取私有网络和基础网络互通设备。
 * @method void setClassicLinkInstanceSet(array $ClassicLinkInstanceSet) 设置私有网络和基础网络互通设备。
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeClassicLinkInstances response structure.
 */
class DescribeClassicLinkInstancesResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的实例数量。
     */
    public $TotalCount;

    /**
     * @var array 私有网络和基础网络互通设备。
     */
    public $ClassicLinkInstanceSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 符合条件的实例数量。
     * @param array $ClassicLinkInstanceSet 私有网络和基础网络互通设备。
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

        if (array_key_exists("ClassicLinkInstanceSet",$param) and $param["ClassicLinkInstanceSet"] !== null) {
            $this->ClassicLinkInstanceSet = [];
            foreach ($param["ClassicLinkInstanceSet"] as $key => $value){
                $obj = new ClassicLinkInstance();
                $obj->deserialize($value);
                array_push($this->ClassicLinkInstanceSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
