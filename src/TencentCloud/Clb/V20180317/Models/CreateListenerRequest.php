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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateListener request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getPorts() Obtain Specifies for which ports to create listeners. Each port corresponds to a new listener.
 * @method void setPorts(array $Ports) Set Specifies for which ports to create listeners. Each port corresponds to a new listener.
 * @method string getProtocol() Obtain Listener protocol. Values: TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC
 * @method void setProtocol(string $Protocol) Set Listener protocol. Values: TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC
 * @method array getListenerNames() Obtain List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method void setListenerNames(array $ListenerNames) Set List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method HealthCheck getHealthCheck() Obtain Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method CertificateInput getCertificate() Obtain Certificate information. This parameter is only applicable to TCP_SSL listeners and HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method void setCertificate(CertificateInput $Certificate) Set Certificate information. This parameter is only applicable to TCP_SSL listeners and HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method integer getSessionExpireTime() Obtain Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method string getScheduler() Obtain Listener forwarding mode. Values: `WRR` (weighted round robin) and `LEAST_CONN` (least connections). 
Default value: `WRR`. This parameter is only applicable to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method void setScheduler(string $Scheduler) Set Listener forwarding mode. Values: `WRR` (weighted round robin) and `LEAST_CONN` (least connections). 
Default value: `WRR`. This parameter is only applicable to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
 * @method string getTargetType() Obtain Target real server type. `NODE`: binding a general node; `TARGETGROUP`: binding a target group.
 * @method void setTargetType(string $TargetType) Set Target real server type. `NODE`: binding a general node; `TARGETGROUP`: binding a target group.
 * @method string getSessionType() Obtain Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
 * @method void setSessionType(string $SessionType) Set Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
 * @method integer getKeepaliveEnable() Obtain Whether to enable a persistent connection. This parameter is applicable only to HTTP and HTTPS listeners. Valid values: 0 (disable; default value) and 1 (enable).
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set Whether to enable a persistent connection. This parameter is applicable only to HTTP and HTTPS listeners. Valid values: 0 (disable; default value) and 1 (enable).
 * @method integer getEndPort() Obtain This parameter is used to specify the end port and is required when creating a port range listener. Only one member can be passed in when inputting the `Ports` parameter, which is used to specify the start port. If you want to try the port range feature, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method void setEndPort(integer $EndPort) Set This parameter is used to specify the end port and is required when creating a port range listener. Only one member can be passed in when inputting the `Ports` parameter, which is used to specify the start port. If you want to try the port range feature, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method boolean getDeregisterTargetRst() Obtain Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
 * @method MultiCertInfo getMultiCertInfo() Obtain Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method integer getMaxConn() Obtain Maximum number of concurrent listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
 * @method void setMaxConn(integer $MaxConn) Set Maximum number of concurrent listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
 * @method integer getMaxCps() Obtain Maximum number of new listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
 * @method void setMaxCps(integer $MaxCps) Set Maximum number of new listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
 * @method integer getIdleConnectTimeout() Obtain Connection idle timeout period (in seconds). It's only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900. To set a period longer than 2000 seconds (up to 3600 seconds), please submit a [submit](https://console.cloud.tencent.com/workorder/category). 
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set Connection idle timeout period (in seconds). It's only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900. To set a period longer than 2000 seconds (up to 3600 seconds), please submit a [submit](https://console.cloud.tencent.com/workorder/category). 
 * @method boolean getSnatEnable() Obtain 
 * @method void setSnatEnable(boolean $SnatEnable) Set 
 * @method array getFullEndPorts() Obtain 
 * @method void setFullEndPorts(array $FullEndPorts) Set 
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies for which ports to create listeners. Each port corresponds to a new listener.
     */
    public $Ports;

    /**
     * @var string Listener protocol. Values: TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC
     */
    public $Protocol;

    /**
     * @var array List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     */
    public $ListenerNames;

    /**
     * @var HealthCheck Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information. This parameter is only applicable to TCP_SSL listeners and HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     */
    public $Certificate;

    /**
     * @var integer Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var string Listener forwarding mode. Values: `WRR` (weighted round robin) and `LEAST_CONN` (least connections). 
Default value: `WRR`. This parameter is only applicable to TCP, UDP, TCP_SSL and QUIC listeners.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
     */
    public $SniSwitch;

    /**
     * @var string Target real server type. `NODE`: binding a general node; `TARGETGROUP`: binding a target group.
     */
    public $TargetType;

    /**
     * @var string Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
     */
    public $SessionType;

    /**
     * @var integer Whether to enable a persistent connection. This parameter is applicable only to HTTP and HTTPS listeners. Valid values: 0 (disable; default value) and 1 (enable).
     */
    public $KeepaliveEnable;

    /**
     * @var integer This parameter is used to specify the end port and is required when creating a port range listener. Only one member can be passed in when inputting the `Ports` parameter, which is used to specify the start port. If you want to try the port range feature, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     */
    public $EndPort;

    /**
     * @var boolean Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
     */
    public $DeregisterTargetRst;

    /**
     * @var MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     */
    public $MultiCertInfo;

    /**
     * @var integer Maximum number of concurrent listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
     */
    public $MaxConn;

    /**
     * @var integer Maximum number of new listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
     */
    public $MaxCps;

    /**
     * @var integer Connection idle timeout period (in seconds). It's only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900. To set a period longer than 2000 seconds (up to 3600 seconds), please submit a [submit](https://console.cloud.tencent.com/workorder/category). 
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean 
     */
    public $SnatEnable;

    /**
     * @var array 
     */
    public $FullEndPorts;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $Ports Specifies for which ports to create listeners. Each port corresponds to a new listener.
     * @param string $Protocol Listener protocol. Values: TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC
     * @param array $ListenerNames List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     * @param HealthCheck $HealthCheck Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
     * @param CertificateInput $Certificate Certificate information. This parameter is only applicable to TCP_SSL listeners and HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param string $Scheduler Listener forwarding mode. Values: `WRR` (weighted round robin) and `LEAST_CONN` (least connections). 
Default value: `WRR`. This parameter is only applicable to TCP, UDP, TCP_SSL and QUIC listeners.
     * @param integer $SniSwitch Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners
     * @param string $TargetType Target real server type. `NODE`: binding a general node; `TARGETGROUP`: binding a target group.
     * @param string $SessionType Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
     * @param integer $KeepaliveEnable Whether to enable a persistent connection. This parameter is applicable only to HTTP and HTTPS listeners. Valid values: 0 (disable; default value) and 1 (enable).
     * @param integer $EndPort This parameter is used to specify the end port and is required when creating a port range listener. Only one member can be passed in when inputting the `Ports` parameter, which is used to specify the start port. If you want to try the port range feature, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
     * @param boolean $DeregisterTargetRst Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
     * @param MultiCertInfo $MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     * @param integer $MaxConn Maximum number of concurrent listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
     * @param integer $MaxCps Maximum number of new listener connections. It's available for TCP/UDP/TCP_SSL/QUIC listeners. If it's set to `-1` or not specified, the listener speed is not limited. 
     * @param integer $IdleConnectTimeout Connection idle timeout period (in seconds). It's only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900. To set a period longer than 2000 seconds (up to 3600 seconds), please submit a [submit](https://console.cloud.tencent.com/workorder/category). 
     * @param boolean $SnatEnable 
     * @param array $FullEndPorts 
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerNames",$param) and $param["ListenerNames"] !== null) {
            $this->ListenerNames = $param["ListenerNames"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
        }

        if (array_key_exists("MultiCertInfo",$param) and $param["MultiCertInfo"] !== null) {
            $this->MultiCertInfo = new MultiCertInfo();
            $this->MultiCertInfo->deserialize($param["MultiCertInfo"]);
        }

        if (array_key_exists("MaxConn",$param) and $param["MaxConn"] !== null) {
            $this->MaxConn = $param["MaxConn"];
        }

        if (array_key_exists("MaxCps",$param) and $param["MaxCps"] !== null) {
            $this->MaxCps = $param["MaxCps"];
        }

        if (array_key_exists("IdleConnectTimeout",$param) and $param["IdleConnectTimeout"] !== null) {
            $this->IdleConnectTimeout = $param["IdleConnectTimeout"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }

        if (array_key_exists("FullEndPorts",$param) and $param["FullEndPorts"] !== null) {
            $this->FullEndPorts = $param["FullEndPorts"];
        }
    }
}
