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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list for filtering by instance ID
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list for filtering by instance ID
 * @method string getInstanceName() Obtain Instance name, supports fuzzy matching
 * @method void setInstanceName(string $InstanceName) Set Instance name, supports fuzzy matching
 * @method string getZone() Obtain Availability zone code for filtering instances in the specified availability zone
 * @method void setZone(string $Zone) Set Availability zone code for filtering instances in the specified availability zone
 * @method array getInstanceStatus() Obtain Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.
 * @method void setInstanceStatus(array $InstanceStatus) Set Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.
 * @method array getPublicIps() Obtain Public IPv4 address list, used for filtering instances by public IP address
 * @method void setPublicIps(array $PublicIps) Set Public IPv4 address list, used for filtering instances by public IP address
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Number of returned results. Default 20. Maximum 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default 20. Maximum 100.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID list for filtering by instance ID
     */
    public $InstanceIds;

    /**
     * @var string Instance name, supports fuzzy matching
     */
    public $InstanceName;

    /**
     * @var string Availability zone code for filtering instances in the specified availability zone
     */
    public $Zone;

    /**
     * @var array Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.
     */
    public $InstanceStatus;

    /**
     * @var array Public IPv4 address list, used for filtering instances by public IP address
     */
    public $PublicIps;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default 20. Maximum 100.
     */
    public $Limit;

    /**
     * @param array $InstanceIds Instance ID list for filtering by instance ID
     * @param string $InstanceName Instance name, supports fuzzy matching
     * @param string $Zone Availability zone code for filtering instances in the specified availability zone
     * @param array $InstanceStatus Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.
     * @param array $PublicIps Public IPv4 address list, used for filtering instances by public IP address
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Number of returned results. Default 20. Maximum 100.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("PublicIps",$param) and $param["PublicIps"] !== null) {
            $this->PublicIps = $param["PublicIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
