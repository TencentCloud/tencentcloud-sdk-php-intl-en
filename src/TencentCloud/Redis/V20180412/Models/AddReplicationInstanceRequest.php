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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddReplicationInstance request structure.
 *
 * @method string getGroupId() Obtain Replication group ID. Log in to the [global replication](https://console.tencentcloud.com/redis/replication) page of the Redis console and obtain it.
 * @method void setGroupId(string $GroupId) Set Replication group ID. Log in to the [global replication](https://console.tencentcloud.com/redis/replication) page of the Redis console and obtain it.
 * @method string getInstanceId() Obtain Instance ID.
- There are region and AZ limitations for adding a replication group instance. For detailed information, see [Use Limits](https://www.tencentcloud.comom/document/product/239/71934?from_cn_redirect=1).
- Currently, only Redis 4.0 and 5.0 cluster architecture instances support being added to the replication groups.
- Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy the ID of the instance that needs to be added to the replication group in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
- There are region and AZ limitations for adding a replication group instance. For detailed information, see [Use Limits](https://www.tencentcloud.comom/document/product/239/71934?from_cn_redirect=1).
- Currently, only Redis 4.0 and 5.0 cluster architecture instances support being added to the replication groups.
- Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy the ID of the instance that needs to be added to the replication group in the instance list.
 * @method string getInstanceRole() Obtain Assigns roles to instances added to the replication group. <ul><li>rw: read-write;</li> <li>r: read-only.</li></ul>
 * @method void setInstanceRole(string $InstanceRole) Set Assigns roles to instances added to the replication group. <ul><li>rw: read-write;</li> <li>r: read-only.</li></ul>
 */
class AddReplicationInstanceRequest extends AbstractModel
{
    /**
     * @var string Replication group ID. Log in to the [global replication](https://console.tencentcloud.com/redis/replication) page of the Redis console and obtain it.
     */
    public $GroupId;

    /**
     * @var string Instance ID.
- There are region and AZ limitations for adding a replication group instance. For detailed information, see [Use Limits](https://www.tencentcloud.comom/document/product/239/71934?from_cn_redirect=1).
- Currently, only Redis 4.0 and 5.0 cluster architecture instances support being added to the replication groups.
- Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy the ID of the instance that needs to be added to the replication group in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Assigns roles to instances added to the replication group. <ul><li>rw: read-write;</li> <li>r: read-only.</li></ul>
     */
    public $InstanceRole;

    /**
     * @param string $GroupId Replication group ID. Log in to the [global replication](https://console.tencentcloud.com/redis/replication) page of the Redis console and obtain it.
     * @param string $InstanceId Instance ID.
- There are region and AZ limitations for adding a replication group instance. For detailed information, see [Use Limits](https://www.tencentcloud.comom/document/product/239/71934?from_cn_redirect=1).
- Currently, only Redis 4.0 and 5.0 cluster architecture instances support being added to the replication groups.
- Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy the ID of the instance that needs to be added to the replication group in the instance list.
     * @param string $InstanceRole Assigns roles to instances added to the replication group. <ul><li>rw: read-write;</li> <li>r: read-only.</li></ul>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }
    }
}
