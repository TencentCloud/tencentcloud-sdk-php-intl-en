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
 * @method array getInstanceIds() Obtain List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB console page.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB console page.
 * @method integer getInstanceType() Obtain Instance type. Valid values: <ul><li>`0`: All instances. </li><li>`1`: Regular instances. </li><li>`2`: Temp instances. </li><li>`3`: Read-only instances. </li><li>`-1`: Regular instances, read-only instances, disaster recovery instances.</li></ul>
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values: <ul><li>`0`: All instances. </li><li>`1`: Regular instances. </li><li>`2`: Temp instances. </li><li>`3`: Read-only instances. </li><li>`-1`: Regular instances, read-only instances, disaster recovery instances.</li></ul>
 * @method integer getClusterType() Obtain Cluster type. Valid values: <ul><li>`0`: Replica set instances. </li><li>`1`: Sharded cluster instances. </li><li>`-1`: All instances.</li></ul>
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: <ul><li>`0`: Replica set instances. </li><li>`1`: Sharded cluster instances. </li><li>`-1`: All instances.</li></ul>
 * @method array getStatus() Obtain Instance status. Valid values: <ul><li>`0`: To be initialized. </li><li>`1`: In process. </li><li>`2`: Valid. </li><li>`-2`: Isolated (for monthly subscribed instances). </li><li>`-3`: Isolated (for pay-as-you-go instances).</li></ul>
 * @method void setStatus(array $Status) Set Instance status. Valid values: <ul><li>`0`: To be initialized. </li><li>`1`: In process. </li><li>`2`: Valid. </li><li>`-2`: Isolated (for monthly subscribed instances). </li><li>`-3`: Isolated (for pay-as-you-go instances).</li></ul>
 * @method string getVpcId() Obtain VPC ID. This parameter can be left empty for the classic network.
 * @method void setVpcId(string $VpcId) Set VPC ID. This parameter can be left empty for the classic network.
 * @method string getSubnetId() Obtain Subnet ID of VPC. This parameter can be left empty for the classic network. If it is passed in as an input parameter, the corresponding VpcId must be set.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of VPC. This parameter can be left empty for the classic network. If it is passed in as an input parameter, the corresponding VpcId must be set.
 * @method integer getPayMode() Obtain Billing type. Valid value: 0 (pay-as-you-go)
 * @method void setPayMode(integer $PayMode) Set Billing type. Valid value: 0 (pay-as-you-go)
 * @method integer getLimit() Obtain Number of results returned per request. Default value: `20`. Value range: [1,100].
 * @method void setLimit(integer $Limit) Set Number of results returned per request. Default value: `20`. Value range: [1,100].
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method string getOrderBy() Obtain Sort by field of the returned result set. Valid values: `ProjectId`, `InstanceName`, `CreateTime`. The return results are sorted in ascending order by default.
 * @method void setOrderBy(string $OrderBy) Set Sort by field of the returned result set. Valid values: `ProjectId`, `InstanceName`, `CreateTime`. The return results are sorted in ascending order by default.
 * @method string getOrderByType() Obtain Sorting method of the return result set. Valid values: `ASC`, `DESC`.
 * @method void setOrderByType(string $OrderByType) Set Sorting method of the return result set. Valid values: `ASC`, `DESC`.
 * @method array getProjectIds() Obtain Project ID
 * @method void setProjectIds(array $ProjectIds) Set Project ID
 * @method string getSearchKey() Obtain Search keyword, which can be instance ID, instance name, or complete IP.
 * @method void setSearchKey(string $SearchKey) Set Search keyword, which can be instance ID, instance name, or complete IP.
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB console page.
     */
    public $InstanceIds;

    /**
     * @var integer Instance type. Valid values: <ul><li>`0`: All instances. </li><li>`1`: Regular instances. </li><li>`2`: Temp instances. </li><li>`3`: Read-only instances. </li><li>`-1`: Regular instances, read-only instances, disaster recovery instances.</li></ul>
     */
    public $InstanceType;

    /**
     * @var integer Cluster type. Valid values: <ul><li>`0`: Replica set instances. </li><li>`1`: Sharded cluster instances. </li><li>`-1`: All instances.</li></ul>
     */
    public $ClusterType;

    /**
     * @var array Instance status. Valid values: <ul><li>`0`: To be initialized. </li><li>`1`: In process. </li><li>`2`: Valid. </li><li>`-2`: Isolated (for monthly subscribed instances). </li><li>`-3`: Isolated (for pay-as-you-go instances).</li></ul>
     */
    public $Status;

    /**
     * @var string VPC ID. This parameter can be left empty for the classic network.
     */
    public $VpcId;

    /**
     * @var string Subnet ID of VPC. This parameter can be left empty for the classic network. If it is passed in as an input parameter, the corresponding VpcId must be set.
     */
    public $SubnetId;

    /**
     * @var integer Billing type. Valid value: 0 (pay-as-you-go)
     */
    public $PayMode;

    /**
     * @var integer Number of results returned per request. Default value: `20`. Value range: [1,100].
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Sort by field of the returned result set. Valid values: `ProjectId`, `InstanceName`, `CreateTime`. The return results are sorted in ascending order by default.
     */
    public $OrderBy;

    /**
     * @var string Sorting method of the return result set. Valid values: `ASC`, `DESC`.
     */
    public $OrderByType;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var string Search keyword, which can be instance ID, instance name, or complete IP.
     */
    public $SearchKey;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @param array $InstanceIds List of instance IDs in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed on the TencentDB console page.
     * @param integer $InstanceType Instance type. Valid values: <ul><li>`0`: All instances. </li><li>`1`: Regular instances. </li><li>`2`: Temp instances. </li><li>`3`: Read-only instances. </li><li>`-1`: Regular instances, read-only instances, disaster recovery instances.</li></ul>
     * @param integer $ClusterType Cluster type. Valid values: <ul><li>`0`: Replica set instances. </li><li>`1`: Sharded cluster instances. </li><li>`-1`: All instances.</li></ul>
     * @param array $Status Instance status. Valid values: <ul><li>`0`: To be initialized. </li><li>`1`: In process. </li><li>`2`: Valid. </li><li>`-2`: Isolated (for monthly subscribed instances). </li><li>`-3`: Isolated (for pay-as-you-go instances).</li></ul>
     * @param string $VpcId VPC ID. This parameter can be left empty for the classic network.
     * @param string $SubnetId Subnet ID of VPC. This parameter can be left empty for the classic network. If it is passed in as an input parameter, the corresponding VpcId must be set.
     * @param integer $PayMode Billing type. Valid value: 0 (pay-as-you-go)
     * @param integer $Limit Number of results returned per request. Default value: `20`. Value range: [1,100].
     * @param integer $Offset Offset. Default value: `0`.
     * @param string $OrderBy Sort by field of the returned result set. Valid values: `ProjectId`, `InstanceName`, `CreateTime`. The return results are sorted in ascending order by default.
     * @param string $OrderByType Sorting method of the return result set. Valid values: `ASC`, `DESC`.
     * @param array $ProjectIds Project ID
     * @param string $SearchKey Search keyword, which can be instance ID, instance name, or complete IP.
     * @param array $Tags Tag information
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
