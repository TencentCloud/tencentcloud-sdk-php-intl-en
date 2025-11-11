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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `DescribeTopicSubscribeGroup` output parameters
 *
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 * @method string getStatusCountInfo() Obtain Number of consumer group status
 * @method void setStatusCountInfo(string $StatusCountInfo) Set Number of consumer group status
 * @method array getGroupsInfo() Obtain Consumer group information.
 * @method void setGroupsInfo(array $GroupsInfo) Set Consumer group information.
 * @method integer getStatus() Obtain Indicates whether the request is asynchronous. instances with fewer groups will return results directly with Status as 1. when there are more groups, the cache will be updated asynchronously. no group information will be returned when Status is 0 until the update is complete and results are returned with Status as 1.
 * @method void setStatus(integer $Status) Set Indicates whether the request is asynchronous. instances with fewer groups will return results directly with Status as 1. when there are more groups, the cache will be updated asynchronously. no group information will be returned when Status is 0 until the update is complete and results are returned with Status as 1.
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
     * @var array Consumer group information.
     */
    public $GroupsInfo;

    /**
     * @var integer Indicates whether the request is asynchronous. instances with fewer groups will return results directly with Status as 1. when there are more groups, the cache will be updated asynchronously. no group information will be returned when Status is 0 until the update is complete and results are returned with Status as 1.
     */
    public $Status;

    /**
     * @param integer $TotalCount Total number
     * @param string $StatusCountInfo Number of consumer group status
     * @param array $GroupsInfo Consumer group information.
     * @param integer $Status Indicates whether the request is asynchronous. instances with fewer groups will return results directly with Status as 1. when there are more groups, the cache will be updated asynchronously. no group information will be returned when Status is 0 until the update is complete and results are returned with Status as 1.
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
