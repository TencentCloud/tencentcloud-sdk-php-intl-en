<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getLoadBalancerId() Obtain ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method array getPorts() Obtain Ports for creating listeners. Each port corresponds to a listener.
Port range: 1–65535.
 * @method void setPorts(array $Ports) Set Ports for creating listeners. Each port corresponds to a listener.
Port range: 1–65535.
 * @method string getProtocol() Obtain Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.
 * @method void setProtocol(string $Protocol) Set Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.
 * @method array getListenerNames() Obtain List of names of listeners to be created. The names correspond to ports one by one. This parameter can be left blank if you do not want to name the listeners immediately.
 * @method void setListenerNames(array $ListenerNames) Set List of names of listeners to be created. The names correspond to ports one by one. This parameter can be left blank if you do not want to name the listeners immediately.
 * @method HealthCheck getHealthCheck() Obtain Health check parameter. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameter. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
 * @method CertificateInput getCertificate() Obtain Certificate-related information. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the MultiCertInfo parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
 * @method void setCertificate(CertificateInput $Certificate) Set Certificate-related information. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the MultiCertInfo parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
 * @method integer getSessionExpireTime() Obtain Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.
 * @method string getScheduler() Obtain Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
Default value: WRR. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
 * @method void setScheduler(string $Scheduler) Set Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
Default value: WRR. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. 0: disable; 1: enable.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. 0: disable; 1: enable.
 * @method string getTargetType() Obtain Real server type. NODE: ordinary node; TARGETGROUP: real server group. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules.
 * @method void setTargetType(string $TargetType) Set Real server type. NODE: ordinary node; TARGETGROUP: real server group. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules.
 * @method string getSessionType() Obtain Session persistence type. If this parameter is not specified or the value is set to NORMAL, the default session persistence type is used. QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules. (If the value is set to QUIC_CID, the Protocol value should be UDP, the Scheduler value should be WRR, and only IPv4 addresses are supported.)
 * @method void setSessionType(string $SessionType) Set Session persistence type. If this parameter is not specified or the value is set to NORMAL, the default session persistence type is used. QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules. (If the value is set to QUIC_CID, the Protocol value should be UDP, the Scheduler value should be WRR, and only IPv4 addresses are supported.)
 * @method integer getKeepaliveEnable() Obtain Whether to enable the persistent connection feature. This parameter applies only to HTTP and HTTPS listeners. 0: disable; 1: enable. This feature is disabled by default.
Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set Whether to enable the persistent connection feature. This parameter applies only to HTTP and HTTPS listeners. 0: disable; 1: enable. This feature is disabled by default.
Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
 * @method integer getEndPort() Obtain End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
 * @method void setEndPort(integer $EndPort) Set End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
 * @method boolean getDeregisterTargetRst() Obtain Whether to send an RST packet to the client when a listener is unbound from a real server. This parameter applies only to TCP listeners.
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set Whether to send an RST packet to the client when a listener is unbound from a real server. This parameter applies only to TCP listeners.
 * @method MultiCertInfo getMultiCertInfo() Obtain Certificate information. You can import multiple server certificates with different algorithms at the same time. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the Certificate parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set Certificate information. You can import multiple server certificates with different algorithms at the same time. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the Certificate parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
 * @method integer getMaxConn() Obtain Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.
 * @method void setMaxConn(integer $MaxConn) Set Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.
 * @method integer getMaxCps() Obtain Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.
 * @method void setMaxCps(integer $MaxCps) Set Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.
 * @method integer getIdleConnectTimeout() Obtain Idle connection timeout, in seconds. This parameter applies only to TCP listeners. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances. To set a value, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set Idle connection timeout, in seconds. This parameter applies only to TCP listeners. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances. To set a value, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
 * @method boolean getProxyProtocol() Obtain 
 * @method void setProxyProtocol(boolean $ProxyProtocol) Set 
 * @method boolean getSnatEnable() Obtain Whether to enable SNAT. True: enable; False: disable.
 * @method void setSnatEnable(boolean $SnatEnable) Set Whether to enable SNAT. True: enable; False: disable.
 * @method array getFullEndPorts() Obtain End port of a listener with a port range. Range of the port: 2–65535.
 * @method void setFullEndPorts(array $FullEndPorts) Set End port of a listener with a port range. Range of the port: 2–65535.
 * @method boolean getH2cSwitch() Obtain Whether to enable H2C for a private network HTTP listener. True: enable; False: disable.
 * @method void setH2cSwitch(boolean $H2cSwitch) Set Whether to enable H2C for a private network HTTP listener. True: enable; False: disable.
 * @method boolean getSslCloseSwitch() Obtain Whether to disable SSL for TCP_SSL listeners. Dual-stack binding is still supported after SSL is disabled. True: disable; False: enable.
 * @method void setSslCloseSwitch(boolean $SslCloseSwitch) Set Whether to disable SSL for TCP_SSL listeners. Dual-stack binding is still supported after SSL is disabled. True: disable; False: enable.
 * @method string getDataCompressMode() Obtain Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).
 * @method void setDataCompressMode(string $DataCompressMode) Set Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     */
    public $LoadBalancerId;

    /**
     * @var array Ports for creating listeners. Each port corresponds to a listener.
Port range: 1–65535.
     */
    public $Ports;

    /**
     * @var string Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.
     */
    public $Protocol;

    /**
     * @var array List of names of listeners to be created. The names correspond to ports one by one. This parameter can be left blank if you do not want to name the listeners immediately.
     */
    public $ListenerNames;

    /**
     * @var HealthCheck Health check parameter. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate-related information. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the MultiCertInfo parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
     */
    public $Certificate;

    /**
     * @var integer Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var string Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
Default value: WRR. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. 0: disable; 1: enable.
     */
    public $SniSwitch;

    /**
     * @var string Real server type. NODE: ordinary node; TARGETGROUP: real server group. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules.
     */
    public $TargetType;

    /**
     * @var string Session persistence type. If this parameter is not specified or the value is set to NORMAL, the default session persistence type is used. QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules. (If the value is set to QUIC_CID, the Protocol value should be UDP, the Scheduler value should be WRR, and only IPv4 addresses are supported.)
     */
    public $SessionType;

    /**
     * @var integer Whether to enable the persistent connection feature. This parameter applies only to HTTP and HTTPS listeners. 0: disable; 1: enable. This feature is disabled by default.
Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
     */
    public $KeepaliveEnable;

    /**
     * @var integer End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
     */
    public $EndPort;

    /**
     * @var boolean Whether to send an RST packet to the client when a listener is unbound from a real server. This parameter applies only to TCP listeners.
     */
    public $DeregisterTargetRst;

    /**
     * @var MultiCertInfo Certificate information. You can import multiple server certificates with different algorithms at the same time. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the Certificate parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
     */
    public $MultiCertInfo;

    /**
     * @var integer Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.
     */
    public $MaxConn;

    /**
     * @var integer Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.
     */
    public $MaxCps;

    /**
     * @var integer Idle connection timeout, in seconds. This parameter applies only to TCP listeners. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances. To set a value, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean 
     */
    public $ProxyProtocol;

    /**
     * @var boolean Whether to enable SNAT. True: enable; False: disable.
     */
    public $SnatEnable;

    /**
     * @var array End port of a listener with a port range. Range of the port: 2–65535.
     */
    public $FullEndPorts;

    /**
     * @var boolean Whether to enable H2C for a private network HTTP listener. True: enable; False: disable.
     */
    public $H2cSwitch;

    /**
     * @var boolean Whether to disable SSL for TCP_SSL listeners. Dual-stack binding is still supported after SSL is disabled. True: disable; False: enable.
     */
    public $SslCloseSwitch;

    /**
     * @var string Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).
     */
    public $DataCompressMode;

    /**
     * @param string $LoadBalancerId ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     * @param array $Ports Ports for creating listeners. Each port corresponds to a listener.
Port range: 1–65535.
     * @param string $Protocol Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.
     * @param array $ListenerNames List of names of listeners to be created. The names correspond to ports one by one. This parameter can be left blank if you do not want to name the listeners immediately.
     * @param HealthCheck $HealthCheck Health check parameter. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
     * @param CertificateInput $Certificate Certificate-related information. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the MultiCertInfo parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
     * @param integer $SessionExpireTime Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.
     * @param string $Scheduler Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
Default value: WRR. This parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners.
     * @param integer $SniSwitch Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. 0: disable; 1: enable.
     * @param string $TargetType Real server type. NODE: ordinary node; TARGETGROUP: real server group. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules.
     * @param string $SessionType Session persistence type. If this parameter is not specified or the value is set to NORMAL, the default session persistence type is used. QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported. This parameter applies only to TCP and UDP listeners. For layer-7 listeners, set the type in forwarding rules. (If the value is set to QUIC_CID, the Protocol value should be UDP, the Scheduler value should be WRR, and only IPv4 addresses are supported.)
     * @param integer $KeepaliveEnable Whether to enable the persistent connection feature. This parameter applies only to HTTP and HTTPS listeners. 0: disable; 1: enable. This feature is disabled by default.
Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
     * @param integer $EndPort End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
     * @param boolean $DeregisterTargetRst Whether to send an RST packet to the client when a listener is unbound from a real server. This parameter applies only to TCP listeners.
     * @param MultiCertInfo $MultiCertInfo Certificate information. You can import multiple server certificates with different algorithms at the same time. The parameter limitations are as follows:
<li>This parameter applies only to TCP_SSL listeners and HTTPS listeners with the SNI feature disabled.</li>
<li>Either this parameter or the Certificate parameter should be specified when you create a TCP_SSL listener or an HTTPS listener with the SNI feature disabled. You cannot specify them at the same time.</li>
     * @param integer $MaxConn Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.
     * @param integer $MaxCps Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.
     * @param integer $IdleConnectTimeout Idle connection timeout, in seconds. This parameter applies only to TCP listeners. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances. To set a value, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).
     * @param boolean $ProxyProtocol 
     * @param boolean $SnatEnable Whether to enable SNAT. True: enable; False: disable.
     * @param array $FullEndPorts End port of a listener with a port range. Range of the port: 2–65535.
     * @param boolean $H2cSwitch Whether to enable H2C for a private network HTTP listener. True: enable; False: disable.
     * @param boolean $SslCloseSwitch Whether to disable SSL for TCP_SSL listeners. Dual-stack binding is still supported after SSL is disabled. True: disable; False: enable.
     * @param string $DataCompressMode Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).
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

        if (array_key_exists("ProxyProtocol",$param) and $param["ProxyProtocol"] !== null) {
            $this->ProxyProtocol = $param["ProxyProtocol"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }

        if (array_key_exists("FullEndPorts",$param) and $param["FullEndPorts"] !== null) {
            $this->FullEndPorts = $param["FullEndPorts"];
        }

        if (array_key_exists("H2cSwitch",$param) and $param["H2cSwitch"] !== null) {
            $this->H2cSwitch = $param["H2cSwitch"];
        }

        if (array_key_exists("SslCloseSwitch",$param) and $param["SslCloseSwitch"] !== null) {
            $this->SslCloseSwitch = $param["SslCloseSwitch"];
        }

        if (array_key_exists("DataCompressMode",$param) and $param["DataCompressMode"] !== null) {
            $this->DataCompressMode = $param["DataCompressMode"];
        }
    }
}
