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
 * Private network instance information
 *
 * @method string getNetworkInstanceId() Obtain Private network instance ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set Private network instance ID
 * @method string getNetworkInstanceName() Obtain Private network instance name
 * @method void setNetworkInstanceName(string $NetworkInstanceName) Set Private network instance name
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method string getNetwork() Obtain Network address.
 * @method void setNetwork(string $Network) Set Network address.
 * @method integer getMask() Obtain Network mask
 * @method void setMask(integer $Mask) Set Network mask
 * @method integer getServerCount() Obtain Number of associated physical machines
 * @method void setServerCount(integer $ServerCount) Set Number of associated physical machines
 * @method integer getAvailableIpCount() Obtain Available Ip quantity
 * @method void setAvailableIpCount(integer $AvailableIpCount) Set Available Ip quantity
 * @method string getCreatedAt() Obtain Creation time.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
 * @method string getUpdatedAt() Obtain Update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time
 */
class PrivateNetworkInstanceInfo extends AbstractModel
{
    /**
     * @var string Private network instance ID
     */
    public $NetworkInstanceId;

    /**
     * @var string Private network instance name
     */
    public $NetworkInstanceName;

    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string Network address.
     */
    public $Network;

    /**
     * @var integer Network mask
     */
    public $Mask;

    /**
     * @var integer Number of associated physical machines
     */
    public $ServerCount;

    /**
     * @var integer Available Ip quantity
     */
    public $AvailableIpCount;

    /**
     * @var string Creation time.
     */
    public $CreatedAt;

    /**
     * @var string Update time
     */
    public $UpdatedAt;

    /**
     * @param string $NetworkInstanceId Private network instance ID
     * @param string $NetworkInstanceName Private network instance name
     * @param string $ZoneId Availability zone ID.
     * @param string $Network Network address.
     * @param integer $Mask Network mask
     * @param integer $ServerCount Number of associated physical machines
     * @param integer $AvailableIpCount Available Ip quantity
     * @param string $CreatedAt Creation time.
     * @param string $UpdatedAt Update time
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("ServerCount",$param) and $param["ServerCount"] !== null) {
            $this->ServerCount = $param["ServerCount"];
        }

        if (array_key_exists("AvailableIpCount",$param) and $param["AvailableIpCount"] !== null) {
            $this->AvailableIpCount = $param["AvailableIpCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
