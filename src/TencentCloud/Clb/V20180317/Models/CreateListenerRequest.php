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
 * @method string getLoadBalancerId() Obtain <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
 * @method array getPorts() Obtain <p>Which ports to create listeners on, each port maps to a new listener.<br>Port range: 1–65535</p>
 * @method void setPorts(array $Ports) Set <p>Which ports to create listeners on, each port maps to a new listener.<br>Port range: 1–65535</p>
 * @method string getProtocol() Obtain <p>Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.</p>
 * @method void setProtocol(string $Protocol) Set <p>Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.</p>
 * @method array getListenerNames() Obtain <p>List of listener names to be created. Names correspond sequentially to Ports. If naming is not immediately necessary, this parameter need not be provided. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method void setListenerNames(array $ListenerNames) Set <p>List of listener names to be created. Names correspond sequentially to Ports. If naming is not immediately necessary, this parameter need not be provided. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method HealthCheck getHealthCheck() Obtain <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method CertificateInput getCertificate() Obtain <p>Certificate-related information. The limits are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or MultiCertInfo must be specified, but they cannot be specified at the same time.</li>
 * @method void setCertificate(CertificateInput $Certificate) Set <p>Certificate-related information. The limits are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or MultiCertInfo must be specified, but they cannot be specified at the same time.</li>
 * @method integer getSessionExpireTime() Obtain <p>Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.</p>
 * @method string getScheduler() Obtain <p>Listener forwarding mode. Available values: WRR (weighted round-robin), LEAST_CONN (least connections).<br>Default WRR. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method void setScheduler(string $Scheduler) Set <p>Listener forwarding mode. Available values: WRR (weighted round-robin), LEAST_CONN (least connections).<br>Default WRR. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method integer getSniSwitch() Obtain <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. 0: not enabled, 1: enable.</p>
 * @method void setSniSwitch(integer $SniSwitch) Set <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. 0: not enabled, 1: enable.</p>
 * @method string getTargetType() Obtain <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group. This parameter is applicable only to TCP/UDP listeners. For layer-7 (HTTP/HTTPS) listeners, configure it in forwarding rules.</p>
 * @method void setTargetType(string $TargetType) Set <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group. This parameter is applicable only to TCP/UDP listeners. For layer-7 (HTTP/HTTPS) listeners, configure it in forwarding rules.</p>
 * @method string getSessionType() Obtain <p>Session persistence type. Leaving it blank or passing NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on QUIC Connection ID. QUIC_CID supports only UDP Protocol. This parameter is applicable only to TCP/UDP listeners. Layer-7 (HTTP/HTTPS) listeners should set this in forwarding rules. (If QUIC_CID is selected, Protocol must be UDP, Scheduler must be WRR, and it supports only ipv4 concurrently).</p>
 * @method void setSessionType(string $SessionType) Set <p>Session persistence type. Leaving it blank or passing NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on QUIC Connection ID. QUIC_CID supports only UDP Protocol. This parameter is applicable only to TCP/UDP listeners. Layer-7 (HTTP/HTTPS) listeners should set this in forwarding rules. (If QUIC_CID is selected, Protocol must be UDP, Scheduler must be WRR, and it supports only ipv4 concurrently).</p>
 * @method integer getKeepaliveEnable() Obtain <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners. 0: off by default; 1: enable. <br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If you need to use it, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners. 0: off by default; 1: enable. <br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If you need to use it, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
 * @method integer getEndPort() Obtain <p>End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).</p>
 * @method void setEndPort(integer $EndPort) Set <p>End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).</p>
 * @method boolean getDeregisterTargetRst() Obtain <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method MultiCertInfo getMultiCertInfo() Obtain <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. Parameter constraints are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or Certificate must be specified, but they cannot be specified at the same time.</li>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. Parameter constraints are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or Certificate must be specified, but they cannot be specified at the same time.</li>
 * @method integer getMaxConn() Obtain <p>Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.</p>
 * @method void setMaxConn(integer $MaxConn) Set <p>Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.</p>
 * @method integer getMaxCps() Obtain <p>Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.</p>
 * @method void setMaxCps(integer $MaxCps) Set <p>Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.</p>
 * @method integer getIdleConnectTimeout() Obtain <p>Idle connection timeout, in seconds. This parameter applies only to TCP/UDP listeners. Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances. To set a value exceeding the permissible range, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>.</p><p>Permissible range: [10, 1980]</p><p>Measurement unit: seconds</p><p>Default value: 900</p><p>Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set <p>Idle connection timeout, in seconds. This parameter applies only to TCP/UDP listeners. Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances. To set a value exceeding the permissible range, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>.</p><p>Permissible range: [10, 1980]</p><p>Measurement unit: seconds</p><p>Default value: 900</p><p>Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
 * @method boolean getProxyProtocol() Obtain <p>Whether TCP_SSL and QUIC support PP</p>
 * @method void setProxyProtocol(boolean $ProxyProtocol) Set <p>Whether TCP_SSL and QUIC support PP</p>
 * @method boolean getSnatEnable() Obtain <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method void setSnatEnable(boolean $SnatEnable) Set <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method array getFullEndPorts() Obtain <p>End port of a listener with a port range. Range of the port: 2–65535.</p>
 * @method void setFullEndPorts(array $FullEndPorts) Set <p>End port of a listener with a port range. Range of the port: 2–65535.</p>
 * @method boolean getH2cSwitch() Obtain <p>Enable the h2c switch for the private network HTTP listener.<br>True (enabled), False (disabled). Disabled by default.<br>Once enabled, the listener only supports creating layer-7 rules with GRPC or GRPCS as the backend forwarding type. When creating rules, explicitly input GRPC or GRPCS in Rules.N.ForwardType.</p>
 * @method void setH2cSwitch(boolean $H2cSwitch) Set <p>Enable the h2c switch for the private network HTTP listener.<br>True (enabled), False (disabled). Disabled by default.<br>Once enabled, the listener only supports creating layer-7 rules with GRPC or GRPCS as the backend forwarding type. When creating rules, explicitly input GRPC or GRPCS in Rules.N.ForwardType.</p>
 * @method boolean getSslCloseSwitch() Obtain <p>Control whether to remove the SSL encryption layer for TCP_SSL listeners. Once enabled, the listener will run as a normal TCP protocol. Available values:</p><ul><li>True: Disable SSL (protocol downgraded to plain text TCP).</li><li>False (default): Keep SSL enabled.</li></ul>
 * @method void setSslCloseSwitch(boolean $SslCloseSwitch) Set <p>Control whether to remove the SSL encryption layer for TCP_SSL listeners. Once enabled, the listener will run as a normal TCP protocol. Available values:</p><ul><li>True: Disable SSL (protocol downgraded to plain text TCP).</li><li>False (default): Keep SSL enabled.</li></ul>
 * @method string getDataCompressMode() Obtain <p>Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).</p>
 * @method void setDataCompressMode(string $DataCompressMode) Set <p>Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).</p>
 * @method boolean getRescheduleTargetZeroWeight() Obtain <p>Rescheduling feature, which provides a switch for changing the weight to 0. If the switch is toggled on, rescheduling is triggered when the weight of a real server is changed to 0. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setRescheduleTargetZeroWeight(boolean $RescheduleTargetZeroWeight) Set <p>Rescheduling feature, which provides a switch for changing the weight to 0. If the switch is toggled on, rescheduling is triggered when the weight of a real server is changed to 0. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method boolean getRescheduleUnhealthy() Obtain <p>Rescheduling feature, which provides a switch for detecting health check exceptions. If the switch is toggled on, rescheduling is triggered when the real server health check fails. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) Set <p>Rescheduling feature, which provides a switch for detecting health check exceptions. If the switch is toggled on, rescheduling is triggered when the real server health check fails. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method boolean getRescheduleExpandTarget() Obtain <p>Rescheduling feature, which provides a switch for scaling out real servers. If the switch is toggled on, rescheduling is triggered when the number of real servers increases or decreases. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setRescheduleExpandTarget(boolean $RescheduleExpandTarget) Set <p>Rescheduling feature, which provides a switch for scaling out real servers. If the switch is toggled on, rescheduling is triggered when the number of real servers increases or decreases. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method integer getRescheduleStartTime() Obtain <p>Rescheduling trigger start time. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) Set <p>Rescheduling trigger start time. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method integer getRescheduleInterval() Obtain <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setRescheduleInterval(integer $RescheduleInterval) Set <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>Which ports to create listeners on, each port maps to a new listener.<br>Port range: 1–65535</p>
     */
    public $Ports;

    /**
     * @var string <p>Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.</p>
     */
    public $Protocol;

    /**
     * @var array <p>List of listener names to be created. Names correspond sequentially to Ports. If naming is not immediately necessary, this parameter need not be provided. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     */
    public $ListenerNames;

    /**
     * @var HealthCheck <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     */
    public $HealthCheck;

    /**
     * @var CertificateInput <p>Certificate-related information. The limits are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or MultiCertInfo must be specified, but they cannot be specified at the same time.</li>
     */
    public $Certificate;

    /**
     * @var integer <p>Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>Listener forwarding mode. Available values: WRR (weighted round-robin), LEAST_CONN (least connections).<br>Default WRR. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     */
    public $Scheduler;

    /**
     * @var integer <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. 0: not enabled, 1: enable.</p>
     */
    public $SniSwitch;

    /**
     * @var string <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group. This parameter is applicable only to TCP/UDP listeners. For layer-7 (HTTP/HTTPS) listeners, configure it in forwarding rules.</p>
     */
    public $TargetType;

    /**
     * @var string <p>Session persistence type. Leaving it blank or passing NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on QUIC Connection ID. QUIC_CID supports only UDP Protocol. This parameter is applicable only to TCP/UDP listeners. Layer-7 (HTTP/HTTPS) listeners should set this in forwarding rules. (If QUIC_CID is selected, Protocol must be UDP, Scheduler must be WRR, and it supports only ipv4 concurrently).</p>
     */
    public $SessionType;

    /**
     * @var integer <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners. 0: off by default; 1: enable. <br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If you need to use it, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).</p>
     */
    public $EndPort;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $DeregisterTargetRst;

    /**
     * @var MultiCertInfo <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. Parameter constraints are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or Certificate must be specified, but they cannot be specified at the same time.</li>
     */
    public $MultiCertInfo;

    /**
     * @var integer <p>Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.</p>
     */
    public $MaxConn;

    /**
     * @var integer <p>Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.</p>
     */
    public $MaxCps;

    /**
     * @var integer <p>Idle connection timeout, in seconds. This parameter applies only to TCP/UDP listeners. Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances. To set a value exceeding the permissible range, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>.</p><p>Permissible range: [10, 1980]</p><p>Measurement unit: seconds</p><p>Default value: 900</p><p>Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean <p>Whether TCP_SSL and QUIC support PP</p>
     */
    public $ProxyProtocol;

    /**
     * @var boolean <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
     */
    public $SnatEnable;

    /**
     * @var array <p>End port of a listener with a port range. Range of the port: 2–65535.</p>
     */
    public $FullEndPorts;

    /**
     * @var boolean <p>Enable the h2c switch for the private network HTTP listener.<br>True (enabled), False (disabled). Disabled by default.<br>Once enabled, the listener only supports creating layer-7 rules with GRPC or GRPCS as the backend forwarding type. When creating rules, explicitly input GRPC or GRPCS in Rules.N.ForwardType.</p>
     */
    public $H2cSwitch;

    /**
     * @var boolean <p>Control whether to remove the SSL encryption layer for TCP_SSL listeners. Once enabled, the listener will run as a normal TCP protocol. Available values:</p><ul><li>True: Disable SSL (protocol downgraded to plain text TCP).</li><li>False (default): Keep SSL enabled.</li></ul>
     */
    public $SslCloseSwitch;

    /**
     * @var string <p>Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).</p>
     */
    public $DataCompressMode;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for changing the weight to 0. If the switch is toggled on, rescheduling is triggered when the weight of a real server is changed to 0. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $RescheduleTargetZeroWeight;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for detecting health check exceptions. If the switch is toggled on, rescheduling is triggered when the real server health check fails. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $RescheduleUnhealthy;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for scaling out real servers. If the switch is toggled on, rescheduling is triggered when the number of real servers increases or decreases. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $RescheduleExpandTarget;

    /**
     * @var integer <p>Rescheduling trigger start time. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $RescheduleStartTime;

    /**
     * @var integer <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $RescheduleInterval;

    /**
     * @param string $LoadBalancerId <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
     * @param array $Ports <p>Which ports to create listeners on, each port maps to a new listener.<br>Port range: 1–65535</p>
     * @param string $Protocol <p>Listener protocol. Valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, and QUIC.</p>
     * @param array $ListenerNames <p>List of listener names to be created. Names correspond sequentially to Ports. If naming is not immediately necessary, this parameter need not be provided. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     * @param HealthCheck $HealthCheck <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     * @param CertificateInput $Certificate <p>Certificate-related information. The limits are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or MultiCertInfo must be specified, but they cannot be specified at the same time.</li>
     * @param integer $SessionExpireTime <p>Session persistence duration, in seconds. Value range: 30–3600. Default value: 0, indicating that session persistence is not enabled by default. This parameter applies only to TCP and UDP listeners.</p>
     * @param string $Scheduler <p>Listener forwarding mode. Available values: WRR (weighted round-robin), LEAST_CONN (least connections).<br>Default WRR. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     * @param integer $SniSwitch <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. 0: not enabled, 1: enable.</p>
     * @param string $TargetType <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group. This parameter is applicable only to TCP/UDP listeners. For layer-7 (HTTP/HTTPS) listeners, configure it in forwarding rules.</p>
     * @param string $SessionType <p>Session persistence type. Leaving it blank or passing NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on QUIC Connection ID. QUIC_CID supports only UDP Protocol. This parameter is applicable only to TCP/UDP listeners. Layer-7 (HTTP/HTTPS) listeners should set this in forwarding rules. (If QUIC_CID is selected, Protocol must be UDP, Scheduler must be WRR, and it supports only ipv4 concurrently).</p>
     * @param integer $KeepaliveEnable <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners. 0: off by default; 1: enable. <br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If you need to use it, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
     * @param integer $EndPort <p>End port. This parameter is required for creating a listener with a port range. In this case, the input parameter Ports allows only one value to indicate the start port. To experience the port range feature, [submit a ticket for application](https://console.cloud.tencent.com/workorder/category).</p>
     * @param boolean $DeregisterTargetRst <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param MultiCertInfo $MultiCertInfo <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. Parameter constraints are as follows:</p><li>This parameter is applicable only to TCP_SSL listeners and HTTPS listeners with SNI feature disabled.</li><li>When creating a TCP_SSL listener or an HTTPS listener with SNI feature disabled, a minimum of this parameter or Certificate must be specified, but they cannot be specified at the same time.</li>
     * @param integer $MaxConn <p>Maximum number of connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of connections is not limited. This parameter is not supported for classic network-based instances.</p>
     * @param integer $MaxCps <p>Maximum number of new connections to a listener. Currently, this parameter applies only to TCP, UDP, TCP_SSL, and QUIC listeners of LCU-supported instances. If this parameter is not specified or the value is set to -1, the maximum number of new connections is not limited. This parameter is not supported for classic network-based instances.</p>
     * @param integer $IdleConnectTimeout <p>Idle connection timeout, in seconds. This parameter applies only to TCP/UDP listeners. Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances. To set a value exceeding the permissible range, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>.</p><p>Permissible range: [10, 1980]</p><p>Measurement unit: seconds</p><p>Default value: 900</p><p>Default value: 900 for TCP listeners and 300 for UDP listeners. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
     * @param boolean $ProxyProtocol <p>Whether TCP_SSL and QUIC support PP</p>
     * @param boolean $SnatEnable <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
     * @param array $FullEndPorts <p>End port of a listener with a port range. Range of the port: 2–65535.</p>
     * @param boolean $H2cSwitch <p>Enable the h2c switch for the private network HTTP listener.<br>True (enabled), False (disabled). Disabled by default.<br>Once enabled, the listener only supports creating layer-7 rules with GRPC or GRPCS as the backend forwarding type. When creating rules, explicitly input GRPC or GRPCS in Rules.N.ForwardType.</p>
     * @param boolean $SslCloseSwitch <p>Control whether to remove the SSL encryption layer for TCP_SSL listeners. Once enabled, the listener will run as a normal TCP protocol. Available values:</p><ul><li>True: Disable SSL (protocol downgraded to plain text TCP).</li><li>False (default): Keep SSL enabled.</li></ul>
     * @param string $DataCompressMode <p>Data compression mode. Valid values: transparent (passthrough mode) and compatibility (compatibility mode).</p>
     * @param boolean $RescheduleTargetZeroWeight <p>Rescheduling feature, which provides a switch for changing the weight to 0. If the switch is toggled on, rescheduling is triggered when the weight of a real server is changed to 0. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param boolean $RescheduleUnhealthy <p>Rescheduling feature, which provides a switch for detecting health check exceptions. If the switch is toggled on, rescheduling is triggered when the real server health check fails. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param boolean $RescheduleExpandTarget <p>Rescheduling feature, which provides a switch for scaling out real servers. If the switch is toggled on, rescheduling is triggered when the number of real servers increases or decreases. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param integer $RescheduleStartTime <p>Rescheduling trigger start time. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param integer $RescheduleInterval <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners.</p>
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

        if (array_key_exists("RescheduleTargetZeroWeight",$param) and $param["RescheduleTargetZeroWeight"] !== null) {
            $this->RescheduleTargetZeroWeight = $param["RescheduleTargetZeroWeight"];
        }

        if (array_key_exists("RescheduleUnhealthy",$param) and $param["RescheduleUnhealthy"] !== null) {
            $this->RescheduleUnhealthy = $param["RescheduleUnhealthy"];
        }

        if (array_key_exists("RescheduleExpandTarget",$param) and $param["RescheduleExpandTarget"] !== null) {
            $this->RescheduleExpandTarget = $param["RescheduleExpandTarget"];
        }

        if (array_key_exists("RescheduleStartTime",$param) and $param["RescheduleStartTime"] !== null) {
            $this->RescheduleStartTime = $param["RescheduleStartTime"];
        }

        if (array_key_exists("RescheduleInterval",$param) and $param["RescheduleInterval"] !== null) {
            $this->RescheduleInterval = $param["RescheduleInterval"];
        }
    }
}
