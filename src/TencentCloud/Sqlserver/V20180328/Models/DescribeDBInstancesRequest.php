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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getStatus() Obtain Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (master/slave switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
 * @method void setStatus(integer $Status) Set Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (master/slave switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method integer getLimit() Obtain Number of results per page. Value range: 1–100. Default value: 100
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1–100. Default value: 100
 * @method array getInstanceIdSet() Obtain One or more instance IDs in the format of mssql-si2823jyl
 * @method void setInstanceIdSet(array $InstanceIdSet) Set One or more instance IDs in the format of mssql-si2823jyl
 * @method integer getPayMode() Obtain Retrieves billing type. 0: pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Retrieves billing type. 0: pay-as-you-go
 * @method string getVpcId() Obtain Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method void setVpcId(string $VpcId) Set Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method string getSubnetId() Obtain Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 * @method void setSubnetId(string $SubnetId) Set Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
 */

/**
 *DescribeDBInstances request structure.
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (master/slave switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
     */
    public $Status;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results per page. Value range: 1–100. Default value: 100
     */
    public $Limit;

    /**
     * @var array One or more instance IDs in the format of mssql-si2823jyl
     */
    public $InstanceIdSet;

    /**
     * @var integer Retrieves billing type. 0: pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     */
    public $VpcId;

    /**
     * @var string Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     */
    public $SubnetId;
    /**
     * @param integer $ProjectId Project ID
     * @param integer $Status Instance status. Valid values:
<li>1: applying</li>
<li>2: running</li>
<li>3: running restrictedly (master/slave switching)</li>
<li>4: isolated</li>
<li>5: repossessing</li>
<li>6: repossessed</li>
<li>7: executing task (e.g., backing up or rolling back instance)</li>
<li>8: deactivated</li>
<li>9: scaling out instance</li>
<li>10: migrating instance</li>
<li>11: read-only</li>
<li>12: restarting</li>
     * @param integer $Offset Page number. Default value: 0
     * @param integer $Limit Number of results per page. Value range: 1–100. Default value: 100
     * @param array $InstanceIdSet One or more instance IDs in the format of mssql-si2823jyl
     * @param integer $PayMode Retrieves billing type. 0: pay-as-you-go
     * @param string $VpcId Unique string-type ID of instance VPC in the format of `vpc-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
     * @param string $SubnetId Unique string-type ID of instance subnet in the format of `subnet-xxx`. If an empty string ("") is passed in, filtering will be made by basic network.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
