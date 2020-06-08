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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TSF Serverless input parameters
 *
 * @method string getVmIp() Obtain VM IP
 * @method void setVmIp(string $VmIp) Set VM IP
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method integer getVmPort() Obtain VM Port
 * @method void setVmPort(integer $VmPort) Set VM Port
 * @method string getHostIp() Obtain IP of the host where the CVM instance resides
 * @method void setHostIp(string $HostIp) Set IP of the host where the CVM instance resides
 * @method string getDockerIp() Obtain Docker IP
 * @method void setDockerIp(string $DockerIp) Set Docker IP
 */
class TargetServicesReq extends AbstractModel
{
    /**
     * @var string VM IP
     */
    public $VmIp;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var integer VM Port
     */
    public $VmPort;

    /**
     * @var string IP of the host where the CVM instance resides
     */
    public $HostIp;

    /**
     * @var string Docker IP
     */
    public $DockerIp;

    /**
     * @param string $VmIp VM IP
     * @param string $VpcId VPC ID
     * @param integer $VmPort VM Port
     * @param string $HostIp IP of the host where the CVM instance resides
     * @param string $DockerIp Docker IP
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
        if (array_key_exists("VmIp",$param) and $param["VmIp"] !== null) {
            $this->VmIp = $param["VmIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VmPort",$param) and $param["VmPort"] !== null) {
            $this->VmPort = $param["VmPort"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("DockerIp",$param) and $param["DockerIp"] !== null) {
            $this->DockerIp = $param["DockerIp"];
        }
    }
}
