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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the file system client
 *
 * @method string getCfsVip() Obtain IP address of the file system
 * @method void setCfsVip(string $CfsVip) Set IP address of the file system
 * @method string getClientIp() Obtain Client IP
 * @method void setClientIp(string $ClientIp) Set Client IP
 * @method string getVpcId() Obtain File system VPCID
 * @method void setVpcId(string $VpcId) Set File system VPCID
 * @method string getZone() Obtain Name of the availability zone, e.g. ap-beijing-1. For more information, see regions and availability zones in the Overview document
 * @method void setZone(string $Zone) Set Name of the availability zone, e.g. ap-beijing-1. For more information, see regions and availability zones in the Overview document
 * @method string getZoneName() Obtain AZ name
 * @method void setZoneName(string $ZoneName) Set AZ name
 * @method string getMountDirectory() Obtain Path in which the file system is mounted to the client
 * @method void setMountDirectory(string $MountDirectory) Set Path in which the file system is mounted to the client
 */
class FileSystemClient extends AbstractModel
{
    /**
     * @var string IP address of the file system
     */
    public $CfsVip;

    /**
     * @var string Client IP
     */
    public $ClientIp;

    /**
     * @var string File system VPCID
     */
    public $VpcId;

    /**
     * @var string Name of the availability zone, e.g. ap-beijing-1. For more information, see regions and availability zones in the Overview document
     */
    public $Zone;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @var string Path in which the file system is mounted to the client
     */
    public $MountDirectory;

    /**
     * @param string $CfsVip IP address of the file system
     * @param string $ClientIp Client IP
     * @param string $VpcId File system VPCID
     * @param string $Zone Name of the availability zone, e.g. ap-beijing-1. For more information, see regions and availability zones in the Overview document
     * @param string $ZoneName AZ name
     * @param string $MountDirectory Path in which the file system is mounted to the client
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
        if (array_key_exists("CfsVip",$param) and $param["CfsVip"] !== null) {
            $this->CfsVip = $param["CfsVip"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("MountDirectory",$param) and $param["MountDirectory"] !== null) {
            $this->MountDirectory = $param["MountDirectory"];
        }
    }
}
