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
 * Details of instances in the interwoking group
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInterVip() Obtain Instance interworking IP, which can be accessed after the instance is added to the interworking group.
 * @method void setInterVip(string $InterVip) Set Instance interworking IP, which can be accessed after the instance is added to the interworking group.
 * @method integer getInterPort() Obtain Instance interworking port, which can be accessed after the instance is added to the interworking group.
 * @method void setInterPort(integer $InterPort) Set Instance interworking port, which can be accessed after the instance is added to the interworking group.
 * @method integer getStatus() Obtain Instance interworking status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6`(Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
 * @method void setStatus(integer $Status) Set Instance interworking status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6`(Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
 * @method string getRegion() Obtain Instance region, such as ap-guangzhou.
 * @method void setRegion(string $Region) Set Instance region, such as ap-guangzhou.
 * @method string getZone() Obtain Instance AZ name, such as ap-guangzhou-1.
 * @method void setZone(string $Zone) Set Instance AZ name, such as ap-guangzhou-1.
 * @method string getVersion() Obtain Instance version code
 * @method void setVersion(string $Version) Set Instance version code
 * @method string getVersionName() Obtain Instance version
 * @method void setVersionName(string $VersionName) Set Instance version
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method string getVip() Obtain Instance access IP
 * @method void setVip(string $Vip) Set Instance access IP
 * @method integer getVport() Obtain Instance access port
 * @method void setVport(integer $Vport) Set Instance access port
 */
class InterInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance interworking IP, which can be accessed after the instance is added to the interworking group.
     */
    public $InterVip;

    /**
     * @var integer Instance interworking port, which can be accessed after the instance is added to the interworking group.
     */
    public $InterPort;

    /**
     * @var integer Instance interworking status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6`(Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
     */
    public $Status;

    /**
     * @var string Instance region, such as ap-guangzhou.
     */
    public $Region;

    /**
     * @var string Instance AZ name, such as ap-guangzhou-1.
     */
    public $Zone;

    /**
     * @var string Instance version code
     */
    public $Version;

    /**
     * @var string Instance version
     */
    public $VersionName;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var string Instance access IP
     */
    public $Vip;

    /**
     * @var integer Instance access port
     */
    public $Vport;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InterVip Instance interworking IP, which can be accessed after the instance is added to the interworking group.
     * @param integer $InterPort Instance interworking port, which can be accessed after the instance is added to the interworking group.
     * @param integer $Status Instance interworking status. Valid values: `1` (Enabling interworking IP), `2` (Enabled interworking IP), `3` (Adding to interworking group), `4` (Added to interworking group), `5` (Reclaiming interworking IP), `6`(Reclaimed interworking IP), `7` (Removing from interworking group), `8` (Removed from interworking group).
     * @param string $Region Instance region, such as ap-guangzhou.
     * @param string $Zone Instance AZ name, such as ap-guangzhou-1.
     * @param string $Version Instance version code
     * @param string $VersionName Instance version
     * @param string $Name Instance name
     * @param string $Vip Instance access IP
     * @param integer $Vport Instance access port
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

        if (array_key_exists("InterVip",$param) and $param["InterVip"] !== null) {
            $this->InterVip = $param["InterVip"];
        }

        if (array_key_exists("InterPort",$param) and $param["InterPort"] !== null) {
            $this->InterPort = $param["InterPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
