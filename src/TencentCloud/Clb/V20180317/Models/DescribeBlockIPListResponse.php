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
 * DescribeBlockIPList response structure.
 *
 * @method integer getBlockedIPCount() Obtain 返回的IP的数量
 * @method void setBlockedIPCount(integer $BlockedIPCount) Set 返回的IP的数量
 * @method string getClientIPField() Obtain 获取用户真实IP的字段
 * @method void setClientIPField(string $ClientIPField) Set 获取用户真实IP的字段
 * @method array getBlockedIPList() Obtain 加入了12360黑名单的IP列表
 * @method void setBlockedIPList(array $BlockedIPList) Set 加入了12360黑名单的IP列表
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBlockIPListResponse extends AbstractModel
{
    /**
     * @var integer 返回的IP的数量
     */
    public $BlockedIPCount;

    /**
     * @var string 获取用户真实IP的字段
     */
    public $ClientIPField;

    /**
     * @var array 加入了12360黑名单的IP列表
     */
    public $BlockedIPList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BlockedIPCount 返回的IP的数量
     * @param string $ClientIPField 获取用户真实IP的字段
     * @param array $BlockedIPList 加入了12360黑名单的IP列表
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
        if (array_key_exists("BlockedIPCount",$param) and $param["BlockedIPCount"] !== null) {
            $this->BlockedIPCount = $param["BlockedIPCount"];
        }

        if (array_key_exists("ClientIPField",$param) and $param["ClientIPField"] !== null) {
            $this->ClientIPField = $param["ClientIPField"];
        }

        if (array_key_exists("BlockedIPList",$param) and $param["BlockedIPList"] !== null) {
            $this->BlockedIPList = [];
            foreach ($param["BlockedIPList"] as $key => $value){
                $obj = new BlockedIP();
                $obj->deserialize($value);
                array_push($this->BlockedIPList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
