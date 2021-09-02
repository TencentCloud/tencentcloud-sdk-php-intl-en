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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `DescribeTopicSubscribeGroup` output parameters
 *
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 * @method string getStatusCountInfo() Obtain Number of consumer group status
 * @method void setStatusCountInfo(string $StatusCountInfo) Set Number of consumer group status
 * @method array getGroupsInfo() Obtain Consumer group information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setGroupsInfo(array $GroupsInfo) Set Consumer group information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Whether a request is asynchronous. If there are fewer consumer groups in the instances, the result will be returned directly, and status code is 1. When there are many consumer groups in the instances, cache will be updated asynchronously. When status code is 0, grouping information will not be returned until cache update is completed and status code becomes 1.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Whether a request is asynchronous. If there are fewer consumer groups in the instances, the result will be returned directly, and status code is 1. When there are many consumer groups in the instances, cache will be updated asynchronously. When status code is 0, grouping information will not be returned until cache update is completed and status code becomes 1.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TopicSubscribeGroup extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCount;

    /**
     * @var string Number of consumer group status
     */
    public $StatusCountInfo;

    /**
     * @var array Consumer group information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $GroupsInfo;

    /**
     * @var integer Whether a request is asynchronous. If there are fewer consumer groups in the instances, the result will be returned directly, and status code is 1. When there are many consumer groups in the instances, cache will be updated asynchronously. When status code is 0, grouping information will not be returned until cache update is completed and status code becomes 1.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $TotalCount Total number
     * @param string $StatusCountInfo Number of consumer group status
     * @param array $GroupsInfo Consumer group information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Status Whether a request is asynchronous. If there are fewer consumer groups in the instances, the result will be returned directly, and status code is 1. When there are many consumer groups in the instances, cache will be updated asynchronously. When status code is 0, grouping information will not be returned until cache update is completed and status code becomes 1.
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("StatusCountInfo",$param) and $param["StatusCountInfo"] !== null) {
            $this->StatusCountInfo = $param["StatusCountInfo"];
        }

        if (array_key_exists("GroupsInfo",$param) and $param["GroupsInfo"] !== null) {
            $this->GroupsInfo = [];
            foreach ($param["GroupsInfo"] as $key => $value){
                $obj = new GroupInfoResponse();
                $obj->deserialize($value);
                array_push($this->GroupsInfo, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
