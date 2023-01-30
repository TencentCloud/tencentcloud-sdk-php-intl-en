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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of servers licensed based on the automatic image licensing rule
 *
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP, which is the private IP
 * @method void setHostIP(string $HostIP) Set Server IP, which is the private IP
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method integer getImageCnt() Obtain Number of images
 * @method void setImageCnt(integer $ImageCnt) Set Number of images
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getInstanceID() Obtain Server instance ID
 * @method void setInstanceID(string $InstanceID) Set Server instance ID
 * @method string getMachineType() Obtain Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
 * @method void setMachineType(string $MachineType) Set Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
 * @method string getDockerVersion() Obtain Docker version
 * @method void setDockerVersion(string $DockerVersion) Set Docker version
 * @method string getStatus() Obtain Agent status
 * @method void setStatus(string $Status) Set Agent status
 */
class AutoAuthorizedRuleHostInfo extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP, which is the private IP
     */
    public $HostIP;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var integer Number of images
     */
    public $ImageCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Server instance ID
     */
    public $InstanceID;

    /**
     * @var string Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
     */
    public $MachineType;

    /**
     * @var string Docker version
     */
    public $DockerVersion;

    /**
     * @var string Agent status
     */
    public $Status;

    /**
     * @param string $HostID Server ID
     * @param string $HostIP Server IP, which is the private IP
     * @param string $HostName Server name
     * @param integer $ImageCnt Number of images
     * @param integer $ContainerCnt Number of containers
     * @param string $PublicIp Public IP
     * @param string $InstanceID Server instance ID
     * @param string $MachineType Server source. Valid values: `CVM`, `ECM`, `LH`, `BM`, `Other`. The first four values indicate Tencent Cloud instances, while the last one indicates non-Tencent Cloud instances.
     * @param string $DockerVersion Docker version
     * @param string $Status Agent status
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
