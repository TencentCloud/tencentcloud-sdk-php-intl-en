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
 * Instance information
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getAppId() Obtain User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method void setAppId(integer $AppId) Set User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method integer getProjectId() Obtain Project ID of the instance
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method string getZone() Obtain Instance AZ
 * @method void setZone(string $Zone) Set Instance AZ
 * @method string getVpcId() Obtain Instance VPC ID
 * @method void setVpcId(string $VpcId) Set Instance VPC ID
 * @method string getSubnetId() Obtain VPC subnet ID
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID
 * @method string getStatus() Obtain Instance status information
- `1`: Task running.
- `2`: Instance running.
- `-2`: Instance isolated.
- `-3`: Instance being eliminated.
- `-4`: Instance eliminated.
 * @method void setStatus(string $Status) Set Instance status information
- `1`: Task running.
- `2`: Instance running.
- `-2`: Instance isolated.
- `-3`: Instance being eliminated.
- `-4`: Instance eliminated.
 * @method array getVips() Obtain Private network IP address of an instance
 * @method void setVips(array $Vips) Set Private network IP address of an instance
 * @method integer getVport() Obtain Instance network port
 * @method void setVport(integer $Vport) Set Instance network port
 * @method string getCreatetime() Obtain Instance creation time
 * @method void setCreatetime(string $Createtime) Set Instance creation time
 * @method integer getPayMode() Obtain Billing type
- `0`: Pay-as-you-go.
- `1`: Monthly subscription.
 * @method void setPayMode(integer $PayMode) Set Billing type
- `0`: Pay-as-you-go.
- `1`: Monthly subscription.
 * @method integer getNetType() Obtain Network Type
- `0`: Classic network.
- `1`: VPC.
 * @method void setNetType(integer $NetType) Set Network Type
- `0`: Classic network.
- `1`: VPC.
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
     * @var integer User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
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
     * @var string Instance AZ
     */
    public $Zone;

    /**
     * @var string Instance VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID
     */
    public $SubnetId;

    /**
     * @var string Instance status information
- `1`: Task running.
- `2`: Instance running.
- `-2`: Instance isolated.
- `-3`: Instance being eliminated.
- `-4`: Instance eliminated.
     */
    public $Status;

    /**
     * @var array Private network IP address of an instance
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
     * @var integer Billing type
- `0`: Pay-as-you-go.
- `1`: Monthly subscription.
     */
    public $PayMode;

    /**
     * @var integer Network Type
- `0`: Classic network.
- `1`: VPC.
     */
    public $NetType;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $AppId User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
     * @param integer $ProjectId Project ID of the instance
     * @param string $Region Instance region
     * @param string $Zone Instance AZ
     * @param string $VpcId Instance VPC ID
     * @param string $SubnetId VPC subnet ID
     * @param string $Status Instance status information
- `1`: Task running.
- `2`: Instance running.
- `-2`: Instance isolated.
- `-3`: Instance being eliminated.
- `-4`: Instance eliminated.
     * @param array $Vips Private network IP address of an instance
     * @param integer $Vport Instance network port
     * @param string $Createtime Instance creation time
     * @param integer $PayMode Billing type
- `0`: Pay-as-you-go.
- `1`: Monthly subscription.
     * @param integer $NetType Network Type
- `0`: Classic network.
- `1`: VPC.
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
