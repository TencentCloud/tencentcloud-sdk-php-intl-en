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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDH instance details
 *
 * @method Placement getPlacement() Obtain CDH instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method void setPlacement(Placement $Placement) Set CDH instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method string getHostId() Obtain CDH instance ID
 * @method void setHostId(string $HostId) Set CDH instance ID
 * @method string getHostType() Obtain CDH instance type
 * @method void setHostType(string $HostType) Set CDH instance type
 * @method string getHostName() Obtain CDH instance name
 * @method void setHostName(string $HostName) Set CDH instance name
 * @method string getHostChargeType() Obtain CDH instance billing mode
 * @method void setHostChargeType(string $HostChargeType) Set CDH instance billing mode
 * @method string getRenewFlag() Obtain CDH instance renewal flag
 * @method void setRenewFlag(string $RenewFlag) Set CDH instance renewal flag
 * @method string getCreatedTime() Obtain CDH instance creation time
 * @method void setCreatedTime(string $CreatedTime) Set CDH instance creation time
 * @method string getExpiredTime() Obtain CDH instance expiry time
 * @method void setExpiredTime(string $ExpiredTime) Set CDH instance expiry time
 * @method array getInstanceIds() Obtain List of IDs of CVMs created on a CDH instance
 * @method void setInstanceIds(array $InstanceIds) Set List of IDs of CVMs created on a CDH instance
 * @method string getHostState() Obtain CDH instance status
 * @method void setHostState(string $HostState) Set CDH instance status
 * @method string getHostIp() Obtain CDH instance IP
 * @method void setHostIp(string $HostIp) Set CDH instance IP
 * @method HostResource getHostResource() Obtain CDH instance resource information
 * @method void setHostResource(HostResource $HostResource) Set CDH instance resource information
 * @method string getCageId() Obtain Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCageId(string $CageId) Set Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
 */
class HostItem extends AbstractModel
{
    /**
     * @var Placement CDH instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     */
    public $Placement;

    /**
     * @var string CDH instance ID
     */
    public $HostId;

    /**
     * @var string CDH instance type
     */
    public $HostType;

    /**
     * @var string CDH instance name
     */
    public $HostName;

    /**
     * @var string CDH instance billing mode
     */
    public $HostChargeType;

    /**
     * @var string CDH instance renewal flag
     */
    public $RenewFlag;

    /**
     * @var string CDH instance creation time
     */
    public $CreatedTime;

    /**
     * @var string CDH instance expiry time
     */
    public $ExpiredTime;

    /**
     * @var array List of IDs of CVMs created on a CDH instance
     */
    public $InstanceIds;

    /**
     * @var string CDH instance status
     */
    public $HostState;

    /**
     * @var string CDH instance IP
     */
    public $HostIp;

    /**
     * @var HostResource CDH instance resource information
     */
    public $HostResource;

    /**
     * @var string Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
     */
    public $CageId;

    /**
     * @param Placement $Placement CDH instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     * @param string $HostId CDH instance ID
     * @param string $HostType CDH instance type
     * @param string $HostName CDH instance name
     * @param string $HostChargeType CDH instance billing mode
     * @param string $RenewFlag CDH instance renewal flag
     * @param string $CreatedTime CDH instance creation time
     * @param string $ExpiredTime CDH instance expiry time
     * @param array $InstanceIds List of IDs of CVMs created on a CDH instance
     * @param string $HostState CDH instance status
     * @param string $HostIp CDH instance IP
     * @param HostResource $HostResource CDH instance resource information
     * @param string $CageId Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostChargeType",$param) and $param["HostChargeType"] !== null) {
            $this->HostChargeType = $param["HostChargeType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("HostState",$param) and $param["HostState"] !== null) {
            $this->HostState = $param["HostState"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostResource",$param) and $param["HostResource"] !== null) {
            $this->HostResource = new HostResource();
            $this->HostResource->deserialize($param["HostResource"]);
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }
    }
}
