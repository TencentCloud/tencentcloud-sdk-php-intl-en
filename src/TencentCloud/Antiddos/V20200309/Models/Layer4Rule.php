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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-4 forwarding rule
 *
 * @method integer getBackendPort() Obtain Real server port. Value range: 1–65535.
 * @method void setBackendPort(integer $BackendPort) Set Real server port. Value range: 1–65535.
 * @method integer getFrontendPort() Obtain Forwarding port. Value range: 1–65535.
 * @method void setFrontendPort(integer $FrontendPort) Set Forwarding port. Value range: 1–65535.
 * @method string getProtocol() Obtain Forwarding rule. Valid values:
TCP
UDP
]
 * @method void setProtocol(string $Protocol) Set Forwarding rule. Valid values:
TCP
UDP
]
 * @method array getRealServers() Obtain List of real servers
 * @method void setRealServers(array $RealServers) Set List of real servers
 * @method array getInstanceDetails() Obtain Information of the Anti-DDoS instance
 * @method void setInstanceDetails(array $InstanceDetails) Set Information of the Anti-DDoS instance
 * @method array getInstanceDetailRule() Obtain Information of the Anti-DDoS instance configured
 * @method void setInstanceDetailRule(array $InstanceDetailRule) Set Information of the Anti-DDoS instance configured
 */
class Layer4Rule extends AbstractModel
{
    /**
     * @var integer Real server port. Value range: 1–65535.
     */
    public $BackendPort;

    /**
     * @var integer Forwarding port. Value range: 1–65535.
     */
    public $FrontendPort;

    /**
     * @var string Forwarding rule. Valid values:
TCP
UDP
]
     */
    public $Protocol;

    /**
     * @var array List of real servers
     */
    public $RealServers;

    /**
     * @var array Information of the Anti-DDoS instance
     */
    public $InstanceDetails;

    /**
     * @var array Information of the Anti-DDoS instance configured
     */
    public $InstanceDetailRule;

    /**
     * @param integer $BackendPort Real server port. Value range: 1–65535.
     * @param integer $FrontendPort Forwarding port. Value range: 1–65535.
     * @param string $Protocol Forwarding rule. Valid values:
TCP
UDP
]
     * @param array $RealServers List of real servers
     * @param array $InstanceDetails Information of the Anti-DDoS instance
     * @param array $InstanceDetailRule Information of the Anti-DDoS instance configured
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
        if (array_key_exists("BackendPort",$param) and $param["BackendPort"] !== null) {
            $this->BackendPort = $param["BackendPort"];
        }

        if (array_key_exists("FrontendPort",$param) and $param["FrontendPort"] !== null) {
            $this->FrontendPort = $param["FrontendPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RealServers",$param) and $param["RealServers"] !== null) {
            $this->RealServers = [];
            foreach ($param["RealServers"] as $key => $value){
                $obj = new SourceServer();
                $obj->deserialize($value);
                array_push($this->RealServers, $obj);
            }
        }

        if (array_key_exists("InstanceDetails",$param) and $param["InstanceDetails"] !== null) {
            $this->InstanceDetails = [];
            foreach ($param["InstanceDetails"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetails, $obj);
            }
        }

        if (array_key_exists("InstanceDetailRule",$param) and $param["InstanceDetailRule"] !== null) {
            $this->InstanceDetailRule = [];
            foreach ($param["InstanceDetailRule"] as $key => $value){
                $obj = new RuleInstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailRule, $obj);
            }
        }
    }
}
