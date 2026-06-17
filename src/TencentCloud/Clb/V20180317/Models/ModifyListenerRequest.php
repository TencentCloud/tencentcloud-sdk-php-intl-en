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
 * ModifyListener request structure.
 *
 * @method string getLoadBalancerId() Obtain <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to query the ID.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to query the ID.</p>
 * @method string getListenerId() Obtain <p>ID of the CLB listener. You can call the <a href="https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1">DescribeListeners</a> API to query the ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>ID of the CLB listener. You can call the <a href="https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1">DescribeListeners</a> API to query the ID.</p>
 * @method string getListenerName() Obtain <p>New listener name. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method void setListenerName(string $ListenerName) Set <p>New listener name. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method integer getSessionExpireTime() Obtain <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is applicable only to TCP/UDP listener.</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is applicable only to TCP/UDP listener.</p>
 * @method HealthCheck getHealthCheck() Obtain <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
 * @method CertificateInput getCertificate() Obtain <p>Certificate-related information. This parameter is applicable only to HTTPS/TCP_SSL/QUIC listeners. This parameter and MultiCertInfo cannot be specified at the same time.</p>
 * @method void setCertificate(CertificateInput $Certificate) Set <p>Certificate-related information. This parameter is applicable only to HTTPS/TCP_SSL/QUIC listeners. This parameter and MultiCertInfo cannot be specified at the same time.</p>
 * @method string getScheduler() Obtain <p>Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).<br>They indicate weighted round-robin and least connection respectively. Default is WRR.<br>Usage scenario: Suitable for TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.</p>
 * @method void setScheduler(string $Scheduler) Set <p>Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).<br>They indicate weighted round-robin and least connection respectively. Default is WRR.<br>Usage scenario: Suitable for TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.</p>
 * @method integer getSniSwitch() Obtain <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. Default is 0 (disabled) or 1 (enable). Note: You can enable SNI for listeners without SNI. SNI cannot be disabled for listeners with SNI enabled.</p>
 * @method void setSniSwitch(integer $SniSwitch) Set <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. Default is 0 (disabled) or 1 (enable). Note: You can enable SNI for listeners without SNI. SNI cannot be disabled for listeners with SNI enabled.</p>
 * @method string getTargetType() Obtain <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group.</p>
 * @method void setTargetType(string $TargetType) Set <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group.</p>
 * @method integer getKeepaliveEnable() Obtain <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners.<br>The default value 0 means disabled, and 1 means enable.<br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If needed, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners.<br>The default value 0 means disabled, and 1 means enable.<br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If needed, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
 * @method boolean getDeregisterTargetRst() Obtain <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method string getSessionType() Obtain <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID. QUIC_CID supports only UDP Protocol.<br>Usage scenario: Applicable to TCP/UDP/TCP_SSL/QUIC listeners.<br>Default is NORMAL.</p>
 * @method void setSessionType(string $SessionType) Set <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID. QUIC_CID supports only UDP Protocol.<br>Usage scenario: Applicable to TCP/UDP/TCP_SSL/QUIC listeners.<br>Default is NORMAL.</p>
 * @method MultiCertInfo getMultiCertInfo() Obtain <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. This parameter is applicable only to HTTPS listeners with SNI feature disabled. This parameter and Certificate cannot be specified at the same time.</p>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. This parameter is applicable only to HTTPS listeners with SNI feature disabled. This parameter and Certificate cannot be specified at the same time.</p>
 * @method integer getMaxConn() Obtain <p>Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates no speed limit on the concurrent connections at the listener level. Classic network instances do not support this parameter.<br>Default value is -1, which means unlimited speed.</p>
 * @method void setMaxConn(integer $MaxConn) Set <p>Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates no speed limit on the concurrent connections at the listener level. Classic network instances do not support this parameter.<br>Default value is -1, which means unlimited speed.</p>
 * @method integer getMaxCps() Obtain <p>Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates no speed limit on new connections at the listener level. Classic network instances do not support this parameter.<br>Default is -1, which means unlimited speed.</p>
 * @method void setMaxCps(integer $MaxCps) Set <p>Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates no speed limit on new connections at the listener level. Classic network instances do not support this parameter.<br>Default is -1, which means unlimited speed.</p>
 * @method integer getIdleConnectTimeout() Obtain <p>Idle connection timeout. This parameter applies only to TCP/UDP listeners. To set a value exceeding 1980, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>. The maximum value can be 3600.</p><p>Range of values: [10, 1980]</p><p>Unit: seconds</p><p>Default value: 900</p><p>Default value for TCP listeners: 900. Default value for UDP listeners: 300. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set <p>Idle connection timeout. This parameter applies only to TCP/UDP listeners. To set a value exceeding 1980, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>. The maximum value can be 3600.</p><p>Range of values: [10, 1980]</p><p>Unit: seconds</p><p>Default value: 900</p><p>Default value for TCP listeners: 900. Default value for UDP listeners: 300. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
 * @method boolean getProxyProtocol() Obtain <p>Whether TCP_SSL and QUIC support PP</p>
 * @method void setProxyProtocol(boolean $ProxyProtocol) Set <p>Whether TCP_SSL and QUIC support PP</p>
 * @method boolean getSnatEnable() Obtain <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method void setSnatEnable(boolean $SnatEnable) Set <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method string getDataCompressMode() Obtain <p>Data compression mode</p><p>Enumeration value:</p><ul><li>transparent: Transparent mode (default value)</li><li>compatibility: Compatible mode (enable gzip compression configuration)</li></ul>
 * @method void setDataCompressMode(string $DataCompressMode) Set <p>Data compression mode</p><p>Enumeration value:</p><ul><li>transparent: Transparent mode (default value)</li><li>compatibility: Compatible mode (enable gzip compression configuration)</li></ul>
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
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to query the ID.</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>ID of the CLB listener. You can call the <a href="https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1">DescribeListeners</a> API to query the ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>New listener name. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is applicable only to TCP/UDP listener.</p>
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     */
    public $HealthCheck;

    /**
     * @var CertificateInput <p>Certificate-related information. This parameter is applicable only to HTTPS/TCP_SSL/QUIC listeners. This parameter and MultiCertInfo cannot be specified at the same time.</p>
     */
    public $Certificate;

    /**
     * @var string <p>Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).<br>They indicate weighted round-robin and least connection respectively. Default is WRR.<br>Usage scenario: Suitable for TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.</p>
     */
    public $Scheduler;

    /**
     * @var integer <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. Default is 0 (disabled) or 1 (enable). Note: You can enable SNI for listeners without SNI. SNI cannot be disabled for listeners with SNI enabled.</p>
     */
    public $SniSwitch;

    /**
     * @var string <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group.</p>
     */
    public $TargetType;

    /**
     * @var integer <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners.<br>The default value 0 means disabled, and 1 means enable.<br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If needed, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
     */
    public $KeepaliveEnable;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $DeregisterTargetRst;

    /**
     * @var string <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID. QUIC_CID supports only UDP Protocol.<br>Usage scenario: Applicable to TCP/UDP/TCP_SSL/QUIC listeners.<br>Default is NORMAL.</p>
     */
    public $SessionType;

    /**
     * @var MultiCertInfo <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. This parameter is applicable only to HTTPS listeners with SNI feature disabled. This parameter and Certificate cannot be specified at the same time.</p>
     */
    public $MultiCertInfo;

    /**
     * @var integer <p>Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates no speed limit on the concurrent connections at the listener level. Classic network instances do not support this parameter.<br>Default value is -1, which means unlimited speed.</p>
     */
    public $MaxConn;

    /**
     * @var integer <p>Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates no speed limit on new connections at the listener level. Classic network instances do not support this parameter.<br>Default is -1, which means unlimited speed.</p>
     */
    public $MaxCps;

    /**
     * @var integer <p>Idle connection timeout. This parameter applies only to TCP/UDP listeners. To set a value exceeding 1980, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>. The maximum value can be 3600.</p><p>Range of values: [10, 1980]</p><p>Unit: seconds</p><p>Default value: 900</p><p>Default value for TCP listeners: 900. Default value for UDP listeners: 300. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
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
     * @var string <p>Data compression mode</p><p>Enumeration value:</p><ul><li>transparent: Transparent mode (default value)</li><li>compatibility: Compatible mode (enable gzip compression configuration)</li></ul>
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
     * @param string $LoadBalancerId <p>ID of the Cloud Load Balancer (CLB) instance. You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to query the ID.</p>
     * @param string $ListenerId <p>ID of the CLB listener. You can call the <a href="https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1">DescribeListeners</a> API to query the ID.</p>
     * @param string $ListenerName <p>New listener name. Naming rule: 1-80 characters including English letters, Chinese characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     * @param integer $SessionExpireTime <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is applicable only to TCP/UDP listener.</p>
     * @param HealthCheck $HealthCheck <p>Health check parameters. This parameter is applicable only to TCP/UDP/TCP_SSL/QUIC listeners.</p>
     * @param CertificateInput $Certificate <p>Certificate-related information. This parameter is applicable only to HTTPS/TCP_SSL/QUIC listeners. This parameter and MultiCertInfo cannot be specified at the same time.</p>
     * @param string $Scheduler <p>Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).<br>They indicate weighted round-robin and least connection respectively. Default is WRR.<br>Usage scenario: Suitable for TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.</p>
     * @param integer $SniSwitch <p>Whether to enable SNI feature. This parameter applies only to HTTPS listeners. Default is 0 (disabled) or 1 (enable). Note: You can enable SNI for listeners without SNI. SNI cannot be disabled for listeners with SNI enabled.</p>
     * @param string $TargetType <p>Backend target type. NODE indicates binding to a general node. TARGETGROUP indicates binding to a target group.</p>
     * @param integer $KeepaliveEnable <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS listeners.<br>The default value 0 means disabled, and 1 means enable.<br>If the backend service has a connection limit, enable with caution. This feature is currently in internal testing. If needed, submit a <a href="https://www.tencentcloud.com/apply/p/tsodp6qm21?from_cn_redirect=1">beta application</a>.</p>
     * @param boolean $DeregisterTargetRst <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param string $SessionType <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID. QUIC_CID supports only UDP Protocol.<br>Usage scenario: Applicable to TCP/UDP/TCP_SSL/QUIC listeners.<br>Default is NORMAL.</p>
     * @param MultiCertInfo $MultiCertInfo <p>Certificate information. Multiple server certificates with different algorithm types can be imported at the same time. This parameter is applicable only to HTTPS listeners with SNI feature disabled. This parameter and Certificate cannot be specified at the same time.</p>
     * @param integer $MaxConn <p>Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates no speed limit on the concurrent connections at the listener level. Classic network instances do not support this parameter.<br>Default value is -1, which means unlimited speed.</p>
     * @param integer $MaxCps <p>Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates no speed limit on new connections at the listener level. Classic network instances do not support this parameter.<br>Default is -1, which means unlimited speed.</p>
     * @param integer $IdleConnectTimeout <p>Idle connection timeout. This parameter applies only to TCP/UDP listeners. To set a value exceeding 1980, <a href="https://console.cloud.tencent.com/workorder/category">submit a ticket for application</a>. The maximum value can be 3600.</p><p>Range of values: [10, 1980]</p><p>Unit: seconds</p><p>Default value: 900</p><p>Default value for TCP listeners: 900. Default value for UDP listeners: 300. Value range: 10–900 for shared instances and dedicated instances and 10–1980 for LCU-supported instances.</p>
     * @param boolean $ProxyProtocol <p>Whether TCP_SSL and QUIC support PP</p>
     * @param boolean $SnatEnable <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
     * @param string $DataCompressMode <p>Data compression mode</p><p>Enumeration value:</p><ul><li>transparent: Transparent mode (default value)</li><li>compatibility: Compatible mode (enable gzip compression configuration)</li></ul>
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
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

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
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
