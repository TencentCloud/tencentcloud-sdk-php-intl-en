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
 * Information of an instance
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getAppId() Obtain User ID
 * @method void setAppId(integer $AppId) Set User ID
 * @method integer getProjectId() Obtain Project ID of the instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method string getZone() Obtain Instance availability zone
 * @method void setZone(string $Zone) Set Instance availability zone
 * @method string getVpcId() Obtain Instance network ID
 * @method void setVpcId(string $VpcId) Set Instance network ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getStatus() Obtain Instance status. Valid values: `1` (task running), `2` (instance running), `-2` (instance isolated), `-3` (instance being eliminated), `-4` (instance eliminated)
 * @method void setStatus(string $Status) Set Instance status. Valid values: `1` (task running), `2` (instance running), `-2` (instance isolated), `-3` (instance being eliminated), `-4` (instance eliminated)
 * @method array getVips() Obtain Instance network IP
 * @method void setVips(array $Vips) Set Instance network IP
 * @method integer getVport() Obtain Instance network port
 * @method void setVport(integer $Vport) Set Instance network port
 * @method string getCreatetime() Obtain Instance creation time
 * @method void setCreatetime(string $Createtime) Set Instance creation time
 * @method integer getPayMode() Obtain Billing mode. Valid values: `0` (pay-as-you-go), `1` (monthly subscription)
 * @method void setPayMode(integer $PayMode) Set Billing mode. Valid values: `0` (pay-as-you-go), `1` (monthly subscription)
 * @method integer getNetType() Obtain Network type. Valid values: `0` (classic network), `1` (VPC)
 * @method void setNetType(integer $NetType) Set Network type. Valid values: `0` (classic network), `1` (VPC)
 */
class RedisCommonInstanceList extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer User ID
     */
    public $AppId;

    /**
     * @var integer Project ID of the instance
     */
    public $ProjectId;

    /**
     * @var string Instance region
     */
    public $Region;

    /**
     * @var string Instance availability zone
     */
    public $Zone;

    /**
     * @var string Instance network ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Instance status. Valid values: `1` (task running), `2` (instance running), `-2` (instance isolated), `-3` (instance being eliminated), `-4` (instance eliminated)
     */
    public $Status;

    /**
     * @var array Instance network IP
     */
    public $Vips;

    /**
     * @var integer Instance network port
     */
    public $Vport;

    /**
     * @var string Instance creation time
     */
    public $Createtime;

    /**
     * @var integer Billing mode. Valid values: `0` (pay-as-you-go), `1` (monthly subscription)
     */
    public $PayMode;

    /**
     * @var integer Network type. Valid values: `0` (classic network), `1` (VPC)
     */
    public $NetType;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $AppId User ID
     * @param integer $ProjectId Project ID of the instance
     * @param string $Region Instance region
     * @param string $Zone Instance availability zone
     * @param string $VpcId Instance network ID
     * @param string $SubnetId Subnet ID
     * @param string $Status Instance status. Valid values: `1` (task running), `2` (instance running), `-2` (instance isolated), `-3` (instance being eliminated), `-4` (instance eliminated)
     * @param array $Vips Instance network IP
     * @param integer $Vport Instance network port
     * @param string $Createtime Instance creation time
     * @param integer $PayMode Billing mode. Valid values: `0` (pay-as-you-go), `1` (monthly subscription)
     * @param integer $NetType Network type. Valid values: `0` (classic network), `1` (VPC)
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}
