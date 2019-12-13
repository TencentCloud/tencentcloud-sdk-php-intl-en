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
 * @method Placement getPlacement() 获取Location of the CDH instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
 * @method void setPlacement(Placement $Placement) 设置Location of the CDH instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
 * @method string getHostId() 获取CDH instance ID
 * @method void setHostId(string $HostId) 设置CDH instance ID
 * @method string getHostType() 获取CDH instance type
 * @method void setHostType(string $HostType) 设置CDH instance type
 * @method string getHostName() 获取CDH instance name
 * @method void setHostName(string $HostName) 设置CDH instance name
 * @method string getHostChargeType() 获取Billing method of the CDH instance
 * @method void setHostChargeType(string $HostChargeType) 设置Billing method of the CDH instance
 * @method string getRenewFlag() 获取Auto renewal flag of the CDH instance
 * @method void setRenewFlag(string $RenewFlag) 设置Auto renewal flag of the CDH instance
 * @method string getCreatedTime() 获取Creation time of the CDH instance
 * @method void setCreatedTime(string $CreatedTime) 设置Creation time of the CDH instance
 * @method string getExpiredTime() 获取Expiration time of the CDH instance
 * @method void setExpiredTime(string $ExpiredTime) 设置Expiration time of the CDH instance
 * @method array getInstanceIds() 获取List of IDs of CVM instances created on the CDH
 * @method void setInstanceIds(array $InstanceIds) 设置List of IDs of CVM instances created on the CDH
 * @method string getHostState() 获取CDH instance state
 * @method void setHostState(string $HostState) 设置CDH instance state
 * @method string getHostIp() 获取CDH instance IP
 * @method void setHostIp(string $HostIp) 设置CDH instance IP
 * @method HostResource getHostResource() 获取Resource information of the CDH instance
 * @method void setHostResource(HostResource $HostResource) 设置Resource information of the CDH instance
 * @method string getCageId() 获取Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCageId(string $CageId) 设置Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
 */

/**
 *Details about a CDH instance
 */
class HostItem extends AbstractModel
{
    /**
     * @var Placement Location of the CDH instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
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
     * @var string Billing method of the CDH instance
     */
    public $HostChargeType;

    /**
     * @var string Auto renewal flag of the CDH instance
     */
    public $RenewFlag;

    /**
     * @var string Creation time of the CDH instance
     */
    public $CreatedTime;

    /**
     * @var string Expiration time of the CDH instance
     */
    public $ExpiredTime;

    /**
     * @var array List of IDs of CVM instances created on the CDH
     */
    public $InstanceIds;

    /**
     * @var string CDH instance state
     */
    public $HostState;

    /**
     * @var string CDH instance IP
     */
    public $HostIp;

    /**
     * @var HostResource Resource information of the CDH instance
     */
    public $HostResource;

    /**
     * @var string Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
     */
    public $CageId;
    /**
     * @param Placement $Placement Location of the CDH instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project.
     * @param string $HostId CDH instance ID
     * @param string $HostType CDH instance type
     * @param string $HostName CDH instance name
     * @param string $HostChargeType Billing method of the CDH instance
     * @param string $RenewFlag Auto renewal flag of the CDH instance
     * @param string $CreatedTime Creation time of the CDH instance
     * @param string $ExpiredTime Expiration time of the CDH instance
     * @param array $InstanceIds List of IDs of CVM instances created on the CDH
     * @param string $HostState CDH instance state
     * @param string $HostIp CDH instance IP
     * @param HostResource $HostResource Resource information of the CDH instance
     * @param string $CageId Cage ID of the CDH instance. This parameter is only valid for CDH instances in the cages of finance availability zones.
Note: This field may return null, indicating that no valid value is found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
