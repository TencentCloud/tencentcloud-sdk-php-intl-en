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
 * @method array getInstanceIds() Obtain <p>Instance ID list for filtering by instance ID</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Instance ID list for filtering by instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name, supports fuzzy matching.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name, supports fuzzy matching.</p>
 * @method string getZone() Obtain <p>Availability zone code for filtering instances in the specified availability zone</p>
 * @method void setZone(string $Zone) Set <p>Availability zone code for filtering instances in the specified availability zone</p>
 * @method array getInstanceStatus() Obtain <p>Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.</p>
 * @method void setInstanceStatus(array $InstanceStatus) Set <p>Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.</p>
 * @method string getPublicNetworkId() Obtain <p>Public network ID.</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) Set <p>Public network ID.</p>
 * @method string getPrivateNetworkId() Obtain <p>VPC ID.</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) Set <p>VPC ID.</p>
 * @method array getPublicIps() Obtain <p>Public IPv4 address list, used for filtering instances by public IP address</p>
 * @method void setPublicIps(array $PublicIps) Set <p>Public IPv4 address list, used for filtering instances by public IP address</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default 20. Maximum 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default 20. Maximum 100.</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Instance ID list for filtering by instance ID</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>Instance name, supports fuzzy matching.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Availability zone code for filtering instances in the specified availability zone</p>
     */
    public $Zone;

    /**
     * @var array <p>Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Public network ID.</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>VPC ID.</p>
     */
    public $PrivateNetworkId;

    /**
     * @var array <p>Public IPv4 address list, used for filtering instances by public IP address</p>
     */
    public $PublicIps;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default 20. Maximum 100.</p>
     */
    public $Limit;

    /**
     * @param array $InstanceIds <p>Instance ID list for filtering by instance ID</p>
     * @param string $InstanceName <p>Instance name, supports fuzzy matching.</p>
     * @param string $Zone <p>Availability zone code for filtering instances in the specified availability zone</p>
     * @param array $InstanceStatus <p>Instance status list for status filtering. Available values: allocating, running, isolating, isolated, terminating, error.</p>
     * @param string $PublicNetworkId <p>Public network ID.</p>
     * @param string $PrivateNetworkId <p>VPC ID.</p>
     * @param array $PublicIps <p>Public IPv4 address list, used for filtering instances by public IP address</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned results. Default 20. Maximum 100.</p>
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

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
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
