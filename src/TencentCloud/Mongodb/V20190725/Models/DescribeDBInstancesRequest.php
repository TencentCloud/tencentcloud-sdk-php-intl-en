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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
 * @method integer getInstanceType() Obtain Instance type. Valid values: 0 (all instances), 1 (promoted), 2 (temp), 3 (read-only), -1 (promoted + read-only + disaster recovery)
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: 0 (all instances), 1 (promoted), 2 (temp), 3 (read-only), -1 (promoted + read-only + disaster recovery)
 * @method integer getClusterType() Obtain Cluster type. Valid values: 0 (replica set instance), 1 (sharding instance), -1 (all instances)
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: 0 (replica set instance), 1 (sharding instance), -1 (all instances)
 * @method array getStatus() Obtain Instance status. Valid values: 0 (to be initialized), 1 (in process), 2 (valid), -2 (expired)
 * @method void setStatus(array $Status) Set Instance status. Valid values: 0 (to be initialized), 1 (in process), 2 (valid), -2 (expired)
 * @method string getVpcId() Obtain VPC ID. This parameter can be left empty for the basic network
 * @method void setVpcId(string $VpcId) Set VPC ID. This parameter can be left empty for the basic network
 * @method string getSubnetId() Obtain Subnet ID of VPC. This parameter can be left empty for the basic network. If it is passed in as an input parameter, the corresponding VpcId must be set
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of VPC. This parameter can be left empty for the basic network. If it is passed in as an input parameter, the corresponding VpcId must be set
 * @method integer getPayMode() Obtain Billing type. Valid value: 0 (pay-as-you-go)
 * @method void setPayMode(integer $PayMode) Set Billing type. Valid value: 0 (pay-as-you-go)
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Valid values: 1-100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Valid values: 1-100. Default value: 20
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method string getOrderBy() Obtain Sort by field of the returned result set. Currently, supported values include "ProjectId", "InstanceName", and "CreateTime". The return results are sorted in ascending order by default.
 * @method void setOrderBy(string $OrderBy) Set Sort by field of the returned result set. Currently, supported values include "ProjectId", "InstanceName", and "CreateTime". The return results are sorted in ascending order by default.
 * @method string getOrderByType() Obtain Sorting method of the return result set. Currently, "ASC" or "DESC" is supported
 * @method void setOrderByType(string $OrderByType) Set Sorting method of the return result set. Currently, "ASC" or "DESC" is supported
 * @method array getProjectIds() Obtain Project ID
 * @method void setProjectIds(array $ProjectIds) Set Project ID
 * @method string getSearchKey() Obtain Search keyword, which can be instance ID, instance name, or complete IP
 * @method void setSearchKey(string $SearchKey) Set Search keyword, which can be instance ID, instance name, or complete IP
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
     */
    public $InstanceIds;

    /**
     * @var integer Instance type. Valid values: 0 (all instances), 1 (promoted), 2 (temp), 3 (read-only), -1 (promoted + read-only + disaster recovery)
     */
    public $InstanceType;

    /**
     * @var integer Cluster type. Valid values: 0 (replica set instance), 1 (sharding instance), -1 (all instances)
     */
    public $ClusterType;

    /**
     * @var array Instance status. Valid values: 0 (to be initialized), 1 (in process), 2 (valid), -2 (expired)
     */
    public $Status;

    /**
     * @var string VPC ID. This parameter can be left empty for the basic network
     */
    public $VpcId;

    /**
     * @var string Subnet ID of VPC. This parameter can be left empty for the basic network. If it is passed in as an input parameter, the corresponding VpcId must be set
     */
    public $SubnetId;

    /**
     * @var integer Billing type. Valid value: 0 (pay-as-you-go)
     */
    public $PayMode;

    /**
     * @var integer Number of results to be returned for a single request. Valid values: 1-100. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sort by field of the returned result set. Currently, supported values include "ProjectId", "InstanceName", and "CreateTime". The return results are sorted in ascending order by default.
     */
    public $OrderBy;

    /**
     * @var string Sorting method of the return result set. Currently, "ASC" or "DESC" is supported
     */
    public $OrderByType;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var string Search keyword, which can be instance ID, instance name, or complete IP
     */
    public $SearchKey;

    /**
     * @param array $InstanceIds List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB Console page
     * @param integer $InstanceType Instance type. Valid values: 0 (all instances), 1 (promoted), 2 (temp), 3 (read-only), -1 (promoted + read-only + disaster recovery)
     * @param integer $ClusterType Cluster type. Valid values: 0 (replica set instance), 1 (sharding instance), -1 (all instances)
     * @param array $Status Instance status. Valid values: 0 (to be initialized), 1 (in process), 2 (valid), -2 (expired)
     * @param string $VpcId VPC ID. This parameter can be left empty for the basic network
     * @param string $SubnetId Subnet ID of VPC. This parameter can be left empty for the basic network. If it is passed in as an input parameter, the corresponding VpcId must be set
     * @param integer $PayMode Billing type. Valid value: 0 (pay-as-you-go)
     * @param integer $Limit Number of results to be returned for a single request. Valid values: 1-100. Default value: 20
     * @param integer $Offset Offset. Default value: 0
     * @param string $OrderBy Sort by field of the returned result set. Currently, supported values include "ProjectId", "InstanceName", and "CreateTime". The return results are sorted in ascending order by default.
     * @param string $OrderByType Sorting method of the return result set. Currently, "ASC" or "DESC" is supported
     * @param array $ProjectIds Project ID
     * @param string $SearchKey Search keyword, which can be instance ID, instance name, or complete IP
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
