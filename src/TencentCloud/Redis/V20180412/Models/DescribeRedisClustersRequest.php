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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisClusters request structure.
 *
 * @method array getRedisClusterIds() Obtain Dedicated Redis cluster ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1),
switch to the **Cloud Service Management** page, select **TencentDB for Redis** from the drop-down list, and obtain the dedicated cluster ID.
 * @method void setRedisClusterIds(array $RedisClusterIds) Set Dedicated Redis cluster ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1),
switch to the **Cloud Service Management** page, select **TencentDB for Redis** from the drop-down list, and obtain the dedicated cluster ID.
 * @method array getStatus() Obtain Cluster status.
- 1: in process.
- 2: running.
- 3: isolated.
 * @method void setStatus(array $Status) Set Cluster status.
- 1: in process.
- 2: running.
- 3: isolated.
 * @method array getProjectIds() Obtain Project ID array. Log in to the [project management](https://console.tencentcloud.com/project) page and copy the project ID in **Project Name**.
 * @method void setProjectIds(array $ProjectIds) Set Project ID array. Log in to the [project management](https://console.tencentcloud.com/project) page and copy the project ID in **Project Name**.
 * @method array getAutoRenewFlag() Obtain Renewal mode.
- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
 * @method void setAutoRenewFlag(array $AutoRenewFlag) Set Renewal mode.
- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
 * @method string getClusterName() Obtain Dedicated Redis cluster name.
 * @method void setClusterName(string $ClusterName) Set Dedicated Redis cluster name.
 * @method string getSearchKey() Obtain Search keyword. Valid values: cluster ID and cluster name.
 * @method void setSearchKey(string $SearchKey) Set Search keyword. Valid values: cluster ID and cluster name.
 * @method integer getLimit() Obtain Limit on the number of records returned in pagination mode. If this parameter is not specified, the value 20 will be used by default.
 * @method void setLimit(integer $Limit) Set Limit on the number of records returned in pagination mode. If this parameter is not specified, the value 20 will be used by default.
 * @method integer getOffset() Obtain Offset, which is an integer multiple of Limit.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of Limit.
 * @method string getDedicatedClusterId() Obtain CDC ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1)
and obtain the cluster ID in the instance list.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1)
and obtain the cluster ID in the instance list.
 */
class DescribeRedisClustersRequest extends AbstractModel
{
    /**
     * @var array Dedicated Redis cluster ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1),
switch to the **Cloud Service Management** page, select **TencentDB for Redis** from the drop-down list, and obtain the dedicated cluster ID.
     */
    public $RedisClusterIds;

    /**
     * @var array Cluster status.
- 1: in process.
- 2: running.
- 3: isolated.
     */
    public $Status;

    /**
     * @var array Project ID array. Log in to the [project management](https://console.tencentcloud.com/project) page and copy the project ID in **Project Name**.
     */
    public $ProjectIds;

    /**
     * @var array Renewal mode.
- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var string Dedicated Redis cluster name.
     */
    public $ClusterName;

    /**
     * @var string Search keyword. Valid values: cluster ID and cluster name.
     */
    public $SearchKey;

    /**
     * @var integer Limit on the number of records returned in pagination mode. If this parameter is not specified, the value 20 will be used by default.
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integer multiple of Limit.
     */
    public $Offset;

    /**
     * @var string CDC ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1)
and obtain the cluster ID in the instance list.
     */
    public $DedicatedClusterId;

    /**
     * @param array $RedisClusterIds Dedicated Redis cluster ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1),
switch to the **Cloud Service Management** page, select **TencentDB for Redis** from the drop-down list, and obtain the dedicated cluster ID.
     * @param array $Status Cluster status.
- 1: in process.
- 2: running.
- 3: isolated.
     * @param array $ProjectIds Project ID array. Log in to the [project management](https://console.tencentcloud.com/project) page and copy the project ID in **Project Name**.
     * @param array $AutoRenewFlag Renewal mode.
- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
     * @param string $ClusterName Dedicated Redis cluster name.
     * @param string $SearchKey Search keyword. Valid values: cluster ID and cluster name.
     * @param integer $Limit Limit on the number of records returned in pagination mode. If this parameter is not specified, the value 20 will be used by default.
     * @param integer $Offset Offset, which is an integer multiple of Limit.
     * @param string $DedicatedClusterId CDC ID. Log in to the [CDC console](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1)
and obtain the cluster ID in the instance list.
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
        if (array_key_exists("RedisClusterIds",$param) and $param["RedisClusterIds"] !== null) {
            $this->RedisClusterIds = $param["RedisClusterIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
