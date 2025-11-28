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
 * @method string getLoadBalancerId() Obtain ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method string getListenerId() Obtain ID of the CLB instance listener. You can call the [DescribeListeners](https://intl.cloud.tencent.com/document/product/214/30686?from_cn_redirect=1) API to query the ID.
 * @method void setListenerId(string $ListenerId) Set ID of the CLB instance listener. You can call the [DescribeListeners](https://intl.cloud.tencent.com/document/product/214/30686?from_cn_redirect=1) API to query the ID.
 * @method string getListenerName() Obtain New listener name. The maximum length is 255 characters.
 * @method void setListenerName(string $ListenerName) Set New listener name. The maximum length is 255 characters.
 * @method integer getSessionExpireTime() Obtain Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method HealthCheck getHealthCheck() Obtain Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
 * @method CertificateInput getCertificate() Obtain Certificate information. This parameter is only applicable to HTTPS/TCP_SSL/QUIC listeners. `Certificate` and `MultiCertInfo` cannot be both specified.
 * @method void setCertificate(CertificateInput $Certificate) Set Certificate information. This parameter is only applicable to HTTPS/TCP_SSL/QUIC listeners. `Certificate` and `MultiCertInfo` cannot be both specified.
 * @method string getScheduler() Obtain Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
They indicate weighted round-robin and least connections, respectively. Default value: WRR.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.
 * @method void setScheduler(string $Scheduler) Set Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
They indicate weighted round-robin and least connections, respectively. Default value: WRR.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. The default value is 0, indicating disabled, and 1 indicates enabled. Note: The SNI feature can be enabled for listeners that have not enabled SNI, but cannot be disabled for listeners that have enabled SNI.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. The default value is 0, indicating disabled, and 1 indicates enabled. Note: The SNI feature can be enabled for listeners that have not enabled SNI, but cannot be disabled for listeners that have enabled SNI.
 * @method string getTargetType() Obtain Target backend type. `NODE`: A single node; `TARGETGROUP`: A target group.
 * @method void setTargetType(string $TargetType) Set Target backend type. `NODE`: A single node; `TARGETGROUP`: A target group.
 * @method integer getKeepaliveEnable() Obtain Whether to enable the persistent connection feature. This parameter applies only to HTTP/HTTPS listeners.
The default value is 0, indicating disabled, and 1 indicates enabled.

Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set Whether to enable the persistent connection feature. This parameter applies only to HTTP/HTTPS listeners.
The default value is 0, indicating disabled, and 1 indicates enabled.

Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
 * @method boolean getDeregisterTargetRst() Obtain Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method string getSessionType() Obtain Session persistence type. NORMAL: default session persistence type; QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners.

Default value: NORMAL.
 * @method void setSessionType(string $SessionType) Set Session persistence type. NORMAL: default session persistence type; QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners.

Default value: NORMAL.
 * @method MultiCertInfo getMultiCertInfo() Obtain Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method integer getMaxConn() Obtain Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates that no limit is set on the concurrent connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
 * @method void setMaxConn(integer $MaxConn) Set Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates that no limit is set on the concurrent connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
 * @method integer getMaxCps() Obtain Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates that no limit is set on the new connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
 * @method void setMaxCps(integer $MaxCps) Set Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates that no limit is set on the new connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
 * @method integer getIdleConnectTimeout() Obtain Specifies the idle connection timeout in seconds. this parameter applies only to TCP/UDP listeners. default value: 900 for TCP listeners and 300 for UDP listeners. value range: 10–900 for shared instances and dedicated instances and 10–1980 for lcu-supported instances. to set a value exceeding 1980, [submit a ticket application](https://console.cloud.tencent.com/workorder/category). the maximum settable value is 3600.
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set Specifies the idle connection timeout in seconds. this parameter applies only to TCP/UDP listeners. default value: 900 for TCP listeners and 300 for UDP listeners. value range: 10–900 for shared instances and dedicated instances and 10–1980 for lcu-supported instances. to set a value exceeding 1980, [submit a ticket application](https://console.cloud.tencent.com/workorder/category). the maximum settable value is 3600.
 * @method boolean getProxyProtocol() Obtain Specifies whether PP is supported for TCP_SSL and QUIC.
 * @method void setProxyProtocol(boolean $ProxyProtocol) Set Specifies whether PP is supported for TCP_SSL and QUIC.
 * @method boolean getSnatEnable() Obtain Whether SNAT (source IP replacement) is enabled. valid values: True (enabled), False (disabled). disabled by default. note: when SnatEnable is enabled, the client source IP will be replaced, at this point the `pass through client source IP` option is disabled, and vice versa.
 * @method void setSnatEnable(boolean $SnatEnable) Set Whether SNAT (source IP replacement) is enabled. valid values: True (enabled), False (disabled). disabled by default. note: when SnatEnable is enabled, the client source IP will be replaced, at this point the `pass through client source IP` option is disabled, and vice versa.
 * @method string getDataCompressMode() Obtain Data compression mode.
 * @method void setDataCompressMode(string $DataCompressMode) Set Data compression mode.
 * @method boolean getRescheduleTargetZeroWeight() Obtain Reschedules when setting backend server weight to 0. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method void setRescheduleTargetZeroWeight(boolean $RescheduleTargetZeroWeight) Set Reschedules when setting backend server weight to 0. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method boolean getRescheduleUnhealthy() Obtain Reschedules when health check exceptions occur on real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) Set Reschedules when health check exceptions occur on real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method boolean getRescheduleExpandTarget() Obtain Reschedules when adding or removing backend servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method void setRescheduleExpandTarget(boolean $RescheduleExpandTarget) Set Reschedules when adding or removing backend servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method integer getRescheduleStartTime() Obtain Specifies the trigger start time for rescheduling. value range: 0-3600s. supported only by TCP/UDP listeners.
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) Set Specifies the trigger start time for rescheduling. value range: 0-3600s. supported only by TCP/UDP listeners.
 * @method integer getRescheduleInterval() Obtain Rescheduling trigger duration. valid values: 0-3600s. only TCP/UDP listeners support this.
 * @method void setRescheduleInterval(integer $RescheduleInterval) Set Rescheduling trigger duration. valid values: 0-3600s. only TCP/UDP listeners support this.
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     */
    public $LoadBalancerId;

    /**
     * @var string ID of the CLB instance listener. You can call the [DescribeListeners](https://intl.cloud.tencent.com/document/product/214/30686?from_cn_redirect=1) API to query the ID.
     */
    public $ListenerId;

    /**
     * @var string New listener name. The maximum length is 255 characters.
     */
    public $ListenerName;

    /**
     * @var integer Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information. This parameter is only applicable to HTTPS/TCP_SSL/QUIC listeners. `Certificate` and `MultiCertInfo` cannot be both specified.
     */
    public $Certificate;

    /**
     * @var string Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
They indicate weighted round-robin and least connections, respectively. Default value: WRR.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. The default value is 0, indicating disabled, and 1 indicates enabled. Note: The SNI feature can be enabled for listeners that have not enabled SNI, but cannot be disabled for listeners that have enabled SNI.
     */
    public $SniSwitch;

    /**
     * @var string Target backend type. `NODE`: A single node; `TARGETGROUP`: A target group.
     */
    public $TargetType;

    /**
     * @var integer Whether to enable the persistent connection feature. This parameter applies only to HTTP/HTTPS listeners.
The default value is 0, indicating disabled, and 1 indicates enabled.

Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
     */
    public $KeepaliveEnable;

    /**
     * @var boolean Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     */
    public $DeregisterTargetRst;

    /**
     * @var string Session persistence type. NORMAL: default session persistence type; QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners.

Default value: NORMAL.
     */
    public $SessionType;

    /**
     * @var MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     */
    public $MultiCertInfo;

    /**
     * @var integer Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates that no limit is set on the concurrent connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
     */
    public $MaxConn;

    /**
     * @var integer Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates that no limit is set on the new connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
     */
    public $MaxCps;

    /**
     * @var integer Specifies the idle connection timeout in seconds. this parameter applies only to TCP/UDP listeners. default value: 900 for TCP listeners and 300 for UDP listeners. value range: 10–900 for shared instances and dedicated instances and 10–1980 for lcu-supported instances. to set a value exceeding 1980, [submit a ticket application](https://console.cloud.tencent.com/workorder/category). the maximum settable value is 3600.
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean Specifies whether PP is supported for TCP_SSL and QUIC.
     */
    public $ProxyProtocol;

    /**
     * @var boolean Whether SNAT (source IP replacement) is enabled. valid values: True (enabled), False (disabled). disabled by default. note: when SnatEnable is enabled, the client source IP will be replaced, at this point the `pass through client source IP` option is disabled, and vice versa.
     */
    public $SnatEnable;

    /**
     * @var string Data compression mode.
     */
    public $DataCompressMode;

    /**
     * @var boolean Reschedules when setting backend server weight to 0. only supported for TCP/UDP listeners. toggle on to enable this feature.
     */
    public $RescheduleTargetZeroWeight;

    /**
     * @var boolean Reschedules when health check exceptions occur on real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     */
    public $RescheduleUnhealthy;

    /**
     * @var boolean Reschedules when adding or removing backend servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     */
    public $RescheduleExpandTarget;

    /**
     * @var integer Specifies the trigger start time for rescheduling. value range: 0-3600s. supported only by TCP/UDP listeners.
     */
    public $RescheduleStartTime;

    /**
     * @var integer Rescheduling trigger duration. valid values: 0-3600s. only TCP/UDP listeners support this.
     */
    public $RescheduleInterval;

    /**
     * @param string $LoadBalancerId ID of the CLB instance. You can call the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     * @param string $ListenerId ID of the CLB instance listener. You can call the [DescribeListeners](https://intl.cloud.tencent.com/document/product/214/30686?from_cn_redirect=1) API to query the ID.
     * @param string $ListenerName New listener name. The maximum length is 255 characters.
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param HealthCheck $HealthCheck Health check parameter. It is only applicable only to TCP, UDP, TCP_SSL and QUIC listeners.
     * @param CertificateInput $Certificate Certificate information. This parameter is only applicable to HTTPS/TCP_SSL/QUIC listeners. `Certificate` and `MultiCertInfo` cannot be both specified.
     * @param string $Scheduler Listener forwarding method. Valid values: WRR (weighted round-robin), LEAST_CONN (least connections), and IP_HASH (IP address hash).
They indicate weighted round-robin and least connections, respectively. Default value: WRR.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners. The balancing method for Layer-7 listeners should be modified in the forwarding rules.
     * @param integer $SniSwitch Whether to enable the SNI feature. This parameter applies only to HTTPS listeners. The default value is 0, indicating disabled, and 1 indicates enabled. Note: The SNI feature can be enabled for listeners that have not enabled SNI, but cannot be disabled for listeners that have enabled SNI.
     * @param string $TargetType Target backend type. `NODE`: A single node; `TARGETGROUP`: A target group.
     * @param integer $KeepaliveEnable Whether to enable the persistent connection feature. This parameter applies only to HTTP/HTTPS listeners.
The default value is 0, indicating disabled, and 1 indicates enabled.

Enable this feature with caution if the maximum number of connections is limited for real servers. This feature is in beta testing. To use it, submit a [beta testing application](https://intl.cloud.tencent.com/apply/p/tsodp6qm21?from_cn_redirect=1).
     * @param boolean $DeregisterTargetRst Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     * @param string $SessionType Session persistence type. NORMAL: default session persistence type; QUIC_CID: perform session persistence based on QUIC connection ID. If the value is set to QUIC_CID, only the UDP protocol is supported.
Use cases: This applies to TCP/UDP/TCP_SSL/QUIC listeners.

Default value: NORMAL.
     * @param MultiCertInfo $MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. This parameter is only applicable to HTTPS listeners with the SNI feature not enabled. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     * @param integer $MaxConn Maximum number of concurrent connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of concurrent connections for the instance specification. -1 indicates that no limit is set on the concurrent connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
     * @param integer $MaxCps Maximum number of new connections at the listener level. This parameter is supported only for LCU-supported instances with TCP/UDP/TCP_SSL/QUIC listeners currently. Value range: 1 to the maximum number of new connections for the instance specification. -1 indicates that no limit is set on the new connections at the listener level. Classic network instances do not support this parameter.

Default value: -1, which indicates no limit.
     * @param integer $IdleConnectTimeout Specifies the idle connection timeout in seconds. this parameter applies only to TCP/UDP listeners. default value: 900 for TCP listeners and 300 for UDP listeners. value range: 10–900 for shared instances and dedicated instances and 10–1980 for lcu-supported instances. to set a value exceeding 1980, [submit a ticket application](https://console.cloud.tencent.com/workorder/category). the maximum settable value is 3600.
     * @param boolean $ProxyProtocol Specifies whether PP is supported for TCP_SSL and QUIC.
     * @param boolean $SnatEnable Whether SNAT (source IP replacement) is enabled. valid values: True (enabled), False (disabled). disabled by default. note: when SnatEnable is enabled, the client source IP will be replaced, at this point the `pass through client source IP` option is disabled, and vice versa.
     * @param string $DataCompressMode Data compression mode.
     * @param boolean $RescheduleTargetZeroWeight Reschedules when setting backend server weight to 0. only supported for TCP/UDP listeners. toggle on to enable this feature.
     * @param boolean $RescheduleUnhealthy Reschedules when health check exceptions occur on real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     * @param boolean $RescheduleExpandTarget Reschedules when adding or removing backend servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     * @param integer $RescheduleStartTime Specifies the trigger start time for rescheduling. value range: 0-3600s. supported only by TCP/UDP listeners.
     * @param integer $RescheduleInterval Rescheduling trigger duration. valid values: 0-3600s. only TCP/UDP listeners support this.
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
