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
 * DescribeCommonDBInstances request structure.
 *
 * @method array getVpcIds() Obtain List of VPC IDs
 * @method void setVpcIds(array $VpcIds) Set List of VPC IDs
 * @method array getSubnetIds() Obtain List of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) Set List of subnet IDs
 * @method integer getPayMode() Obtain List of billing modes. 0: monthly subscription; 1: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set List of billing modes. 0: monthly subscription; 1: pay-as-you-go
 * @method array getInstanceIds() Obtain Instance ID filter information list, with a maximum array length of 100.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID filter information list, with a maximum array length of 100.
 * @method array getInstanceNames() Obtain List of instance names
 * @method void setInstanceNames(array $InstanceNames) Set List of instance names
 * @method array getStatus() Obtain List of instance status
 * @method void setStatus(array $Status) Set List of instance status
 * @method string getOrderBy() Obtain Sorting field
 * @method void setOrderBy(string $OrderBy) Set Sorting field
 * @method string getOrderByType() Obtain Sorting order
 * @method void setOrderByType(string $OrderByType) Set Sorting order
 * @method array getVips() Obtain List of instance VIPs
 * @method void setVips(array $Vips) Set List of instance VIPs
 * @method array getUniqVpcIds() Obtain List of VPC IDs
 * @method void setUniqVpcIds(array $UniqVpcIds) Set List of VPC IDs
 * @method array getUniqSubnetIds() Obtain List of unique subnet IDs
 * @method void setUniqSubnetIds(array $UniqSubnetIds) Set List of unique subnet IDs
 * @method integer getLimit() Obtain Quantity limit. Recommended default value: 100.
 * @method void setLimit(integer $Limit) Set Quantity limit. Recommended default value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 */
class DescribeCommonDBInstancesRequest extends AbstractModel
{
    /**
     * @var array List of VPC IDs
     */
    public $VpcIds;

    /**
     * @var array List of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var integer List of billing modes. 0: monthly subscription; 1: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var array Instance ID filter information list, with a maximum array length of 100.
     */
    public $InstanceIds;

    /**
     * @var array List of instance names
     */
    public $InstanceNames;

    /**
     * @var array List of instance status
     */
    public $Status;

    /**
     * @var string Sorting field
     */
    public $OrderBy;

    /**
     * @var string Sorting order
     */
    public $OrderByType;

    /**
     * @var array List of instance VIPs
     */
    public $Vips;

    /**
     * @var array List of VPC IDs
     */
    public $UniqVpcIds;

    /**
     * @var array List of unique subnet IDs
     */
    public $UniqSubnetIds;

    /**
     * @var integer Quantity limit. Recommended default value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @param array $VpcIds List of VPC IDs
     * @param array $SubnetIds List of subnet IDs
     * @param integer $PayMode List of billing modes. 0: monthly subscription; 1: pay-as-you-go
     * @param array $InstanceIds Instance ID filter information list, with a maximum array length of 100.
     * @param array $InstanceNames List of instance names
     * @param array $Status List of instance status
     * @param string $OrderBy Sorting field
     * @param string $OrderByType Sorting order
     * @param array $Vips List of instance VIPs
     * @param array $UniqVpcIds List of VPC IDs
     * @param array $UniqSubnetIds List of unique subnet IDs
     * @param integer $Limit Quantity limit. Recommended default value: 100.
     * @param integer $Offset Offset. Default value: 0
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
