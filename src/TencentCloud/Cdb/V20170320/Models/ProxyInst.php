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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy instance
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method integer getInstanceType() Obtain Instance type: 1 master primary instance; 2 read-only instance; 3 dr disaster recovery instance; 4 sdr (small disaster recovery) instance
 * @method void setInstanceType(integer $InstanceType) Set Instance type: 1 master primary instance; 2 read-only instance; 3 dr disaster recovery instance; 4 sdr (small disaster recovery) instance
 * @method integer getStatus() Obtain Instance status. Valid values: 0: creating; 1: running; 4: isolation; 5: isolated.
 * @method void setStatus(integer $Status) Set Instance status. Valid values: 0: creating; 1: running; 4: isolation; 5: isolated.
 * @method integer getWeight() Obtain Read-only weight. If the weight is automatically assigned by the system, this value does not take effect and only indicates whether the instance is enabled or not.
 * @method void setWeight(integer $Weight) Set Read-only weight. If the weight is automatically assigned by the system, this value does not take effect and only indicates whether the instance is enabled or not.
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method string getZone() Obtain Availability zone to which the instance belongs
 * @method void setZone(string $Zone) Set Availability zone to which the instance belongs
 * @method string getInstNodeId() Obtain Instance Node ID
 * @method void setInstNodeId(string $InstNodeId) Set Instance Node ID
 * @method string getInstNodeRole() Obtain Node role
 * @method void setInstNodeRole(string $InstNodeRole) Set Node role
 */
class ProxyInst extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var integer Instance type: 1 master primary instance; 2 read-only instance; 3 dr disaster recovery instance; 4 sdr (small disaster recovery) instance
     */
    public $InstanceType;

    /**
     * @var integer Instance status. Valid values: 0: creating; 1: running; 4: isolation; 5: isolated.
     */
    public $Status;

    /**
     * @var integer Read-only weight. If the weight is automatically assigned by the system, this value does not take effect and only indicates whether the instance is enabled or not.
     */
    public $Weight;

    /**
     * @var string Instance region
     */
    public $Region;

    /**
     * @var string Availability zone to which the instance belongs
     */
    public $Zone;

    /**
     * @var string Instance Node ID
     */
    public $InstNodeId;

    /**
     * @var string Node role
     */
    public $InstNodeRole;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param integer $InstanceType Instance type: 1 master primary instance; 2 read-only instance; 3 dr disaster recovery instance; 4 sdr (small disaster recovery) instance
     * @param integer $Status Instance status. Valid values: 0: creating; 1: running; 4: isolation; 5: isolated.
     * @param integer $Weight Read-only weight. If the weight is automatically assigned by the system, this value does not take effect and only indicates whether the instance is enabled or not.
     * @param string $Region Instance region
     * @param string $Zone Availability zone to which the instance belongs
     * @param string $InstNodeId Instance Node ID
     * @param string $InstNodeRole Node role
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstNodeId",$param) and $param["InstNodeId"] !== null) {
            $this->InstNodeId = $param["InstNodeId"];
        }

        if (array_key_exists("InstNodeRole",$param) and $param["InstNodeRole"] !== null) {
            $this->InstNodeRole = $param["InstNodeRole"];
        }
    }
}
