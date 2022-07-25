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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstances request structure.
 *
 * @method array getInstanceIds() Obtain Queries by instance ID or IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
 * @method void setInstanceIds(array $InstanceIds) Set Queries by instance ID or IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
 * @method array getInstanceStatus() Obtain Filter by instance status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
 * @method void setInstanceStatus(array $InstanceStatus) Set Filter by instance status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
 * @method string getInstanceName() Obtain Filter by instance name
 * @method void setInstanceName(string $InstanceName) Set Filter by instance name
 * @method array getZones() Obtain Filter by AZ in the format of `ap-guangzhou-1`
 * @method void setZones(array $Zones) Set Filter by AZ in the format of `ap-guangzhou-1`
 * @method array getTagFilters() Obtain Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key.
 * @method void setTagFilters(array $TagFilters) Set Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key.
 * @method array getIPv4Address() Obtain Filter by instance IPv4 address
 * @method void setIPv4Address(array $IPv4Address) Set Filter by instance IPv4 address
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getInstanceChargeType() Obtain Filter by billing mode
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
 * @method void setInstanceChargeType(integer $InstanceChargeType) Set Filter by billing mode
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
 */
class DescribePrometheusInstancesRequest extends AbstractModel
{
    /**
     * @var array Queries by instance ID or IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
     */
    public $InstanceIds;

    /**
     * @var array Filter by instance status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
     */
    public $InstanceStatus;

    /**
     * @var string Filter by instance name
     */
    public $InstanceName;

    /**
     * @var array Filter by AZ in the format of `ap-guangzhou-1`
     */
    public $Zones;

    /**
     * @var array Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key.
     */
    public $TagFilters;

    /**
     * @var array Filter by instance IPv4 address
     */
    public $IPv4Address;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Filter by billing mode
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
     */
    public $InstanceChargeType;

    /**
     * @param array $InstanceIds Queries by instance ID or IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
     * @param array $InstanceStatus Filter by instance status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
     * @param string $InstanceName Filter by instance name
     * @param array $Zones Filter by AZ in the format of `ap-guangzhou-1`
     * @param array $TagFilters Filter by tag key-value pair. The `tag-key` should be replaced with a specific tag key.
     * @param array $IPv4Address Filter by instance IPv4 address
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $InstanceChargeType Filter by billing mode
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("IPv4Address",$param) and $param["IPv4Address"] !== null) {
            $this->IPv4Address = $param["IPv4Address"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}
