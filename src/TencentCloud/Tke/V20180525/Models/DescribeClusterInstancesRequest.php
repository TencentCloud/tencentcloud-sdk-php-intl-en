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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 20
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 20
 * @method array getInstanceIds() Obtain List of instance IDs to be obtained. This parameter is empty by default, which indicates that all instances in the cluster will be pulled.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs to be obtained. This parameter is empty by default, which indicates that all instances in the cluster will be pulled.
 * @method string getInstanceRole() Obtain Node role. Valid values are MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER.
 * @method void setInstanceRole(string $InstanceRole) Set Node role. Valid values are MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER.
 * @method array getFilters() Obtain Filters include `nodepool-id` and `nodepool-instance-type` (how the instance is added to the pool). For `nodepool-instance-type`, the values can be `MANUALLY_ADDED`, `AUTOSCALING_ADDED` and `ALL`.
 * @method void setFilters(array $Filters) Set Filters include `nodepool-id` and `nodepool-instance-type` (how the instance is added to the pool). For `nodepool-instance-type`, the values can be `MANUALLY_ADDED`, `AUTOSCALING_ADDED` and `ALL`.
 */
class DescribeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: 20
     */
    public $Limit;

    /**
     * @var array List of instance IDs to be obtained. This parameter is empty by default, which indicates that all instances in the cluster will be pulled.
     */
    public $InstanceIds;

    /**
     * @var string Node role. Valid values are MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER.
     */
    public $InstanceRole;

    /**
     * @var array Filters include `nodepool-id` and `nodepool-instance-type` (how the instance is added to the pool). For `nodepool-instance-type`, the values can be `MANUALLY_ADDED`, `AUTOSCALING_ADDED` and `ALL`.
     */
    public $Filters;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Maximum number of output entries. Default value: 20
     * @param array $InstanceIds List of instance IDs to be obtained. This parameter is empty by default, which indicates that all instances in the cluster will be pulled.
     * @param string $InstanceRole Node role. Valid values are MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER.
     * @param array $Filters Filters include `nodepool-id` and `nodepool-instance-type` (how the instance is added to the pool). For `nodepool-instance-type`, the values can be `MANUALLY_ADDED`, `AUTOSCALING_ADDED` and `ALL`.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
