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
 * Listener information
 *
 * @method string getListenerId() Obtain <p>CLB listener ID</p>
 * @method void setListenerId(string $ListenerId) Set <p>CLB listener ID</p>
 * @method string getProtocol() Obtain <p>Listener protocol. Available values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC</p>
 * @method void setProtocol(string $Protocol) Set <p>Listener protocol. Available values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC</p>
 * @method integer getPort() Obtain <p>Listener port, port range: 1–65535</p>
 * @method void setPort(integer $Port) Set <p>Listener port, port range: 1–65535</p>
 * @method CertificateOutput getCertificate() Obtain <p>Listener bound certificate information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(CertificateOutput $Certificate) Set <p>Listener bound certificate information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HealthCheck getHealthCheck() Obtain <p>Health check information of the listener</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set <p>Health check information of the listener</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduler() Obtain <p>Requested scheduling method. WRR, LEAST_CONN, and IP_HASH indicate weighted round-robin, least connection, and IP Hash respectively.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduler(string $Scheduler) Set <p>Requested scheduling method. WRR, LEAST_CONN, and IP_HASH indicate weighted round-robin, least connection, and IP Hash respectively.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionExpireTime() Obtain <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled by default. This parameter is applicable only to TCP/UDP listener.</p><p>Unit: second</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled by default. This parameter is applicable only to TCP/UDP listener.</p><p>Unit: second</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain <p>Whether to enable SNI feature. 1: enable, 0: disabled (this parameter is applicable only to HTTPS listeners)</p>
 * @method void setSniSwitch(integer $SniSwitch) Set <p>Whether to enable SNI feature. 1: enable, 0: disabled (this parameter is applicable only to HTTPS listeners)</p>
 * @method array getRules() Obtain <p>All forwarding rules under a listener (this parameter is only meaningful for HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set <p>All forwarding rules under a listener (this parameter is only meaningful for HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain <p>Listener name</p>
 * @method void setListenerName(string $ListenerName) Set <p>Listener name</p>
 * @method string getCreateTime() Obtain <p>Listener creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Listener creation time.</p>
 * @method integer getEndPort() Obtain <p>End port of the port range: 2–65535</p>
 * @method void setEndPort(integer $EndPort) Set <p>End port of the port range: 2–65535</p>
 * @method string getTargetType() Obtain <p>Backend server type. Available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetType(string $TargetType) Set <p>Backend server type. Available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BasicTargetGroupInfo getTargetGroup() Obtain <p>Bound target group basic information; return this field when listener binding target group.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) Set <p>Bound target group basic information; return this field when listener binding target group.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionType() Obtain <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID.</p>
 * @method void setSessionType(string $SessionType) Set <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID.</p>
 * @method integer getKeepaliveEnable() Obtain <p>Whether to enable long connections. 1: enable, 0: disable (this parameter is applicable only to HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set <p>Whether to enable long connections. 1: enable, 0: disable (this parameter is applicable only to HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getToa() Obtain <p>Only supports Nat64 CLB TCP listener</p>
 * @method void setToa(boolean $Toa) Set <p>Only supports Nat64 CLB TCP listener</p>
 * @method boolean getDeregisterTargetRst() Obtain <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
 * @method array getAttrFlags() Obtain <p>Listener attribute.</p>
 * @method void setAttrFlags(array $AttrFlags) Set <p>Listener attribute.</p>
 * @method array getTargetGroupList() Obtain <p>List of bound target groups</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroupList(array $TargetGroupList) Set <p>List of bound target groups</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxConn() Obtain <p>Maximum number of connections to a listener. -1 means no speed limit at the listener dimension.</p>
 * @method void setMaxConn(integer $MaxConn) Set <p>Maximum number of connections to a listener. -1 means no speed limit at the listener dimension.</p>
 * @method integer getMaxCps() Obtain <p>Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.</p>
 * @method void setMaxCps(integer $MaxCps) Set <p>Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.</p>
 * @method integer getIdleConnectTimeout() Obtain <p>Idle connection timeout is only supported for TCP listeners. Default value: 900. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set <p>Idle connection timeout is only supported for TCP listeners. Default value: 900. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRescheduleInterval() Obtain <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners. After rescheduling is triggered, persistent connections will be disconnected and reassigned within the scheduled time window. </p><p>Unit: s.</p>
 * @method void setRescheduleInterval(integer $RescheduleInterval) Set <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners. After rescheduling is triggered, persistent connections will be disconnected and reassigned within the scheduled time window. </p><p>Unit: s.</p>
 * @method string getDataCompressMode() Obtain <p>Data compression mode</p>
 * @method void setDataCompressMode(string $DataCompressMode) Set <p>Data compression mode</p>
 * @method integer getRescheduleStartTime() Obtain <p>Rescheduling startup time: After the rescheduling startup time is configured, rescheduling is triggered when the startup time is arrived.</p>
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) Set <p>Rescheduling startup time: After the rescheduling startup time is configured, rescheduling is triggered when the startup time is arrived.</p>
 */
class Listener extends AbstractModel
{
    /**
     * @var string <p>CLB listener ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Listener protocol. Available values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC</p>
     */
    public $Protocol;

    /**
     * @var integer <p>Listener port, port range: 1–65535</p>
     */
    public $Port;

    /**
     * @var CertificateOutput <p>Listener bound certificate information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var HealthCheck <p>Health check information of the listener</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string <p>Requested scheduling method. WRR, LEAST_CONN, and IP_HASH indicate weighted round-robin, least connection, and IP Hash respectively.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scheduler;

    /**
     * @var integer <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled by default. This parameter is applicable only to TCP/UDP listener.</p><p>Unit: second</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionExpireTime;

    /**
     * @var integer <p>Whether to enable SNI feature. 1: enable, 0: disabled (this parameter is applicable only to HTTPS listeners)</p>
     */
    public $SniSwitch;

    /**
     * @var array <p>All forwarding rules under a listener (this parameter is only meaningful for HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var string <p>Listener name</p>
     */
    public $ListenerName;

    /**
     * @var string <p>Listener creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>End port of the port range: 2–65535</p>
     */
    public $EndPort;

    /**
     * @var string <p>Backend server type. Available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo <p>Bound target group basic information; return this field when listener binding target group.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroup;

    /**
     * @var string <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID.</p>
     */
    public $SessionType;

    /**
     * @var integer <p>Whether to enable long connections. 1: enable, 0: disable (this parameter is applicable only to HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeepaliveEnable;

    /**
     * @var boolean <p>Only supports Nat64 CLB TCP listener</p>
     */
    public $Toa;

    /**
     * @var boolean <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     */
    public $DeregisterTargetRst;

    /**
     * @var array <p>Listener attribute.</p>
     */
    public $AttrFlags;

    /**
     * @var array <p>List of bound target groups</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroupList;

    /**
     * @var integer <p>Maximum number of connections to a listener. -1 means no speed limit at the listener dimension.</p>
     */
    public $MaxConn;

    /**
     * @var integer <p>Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.</p>
     */
    public $MaxCps;

    /**
     * @var integer <p>Idle connection timeout is only supported for TCP listeners. Default value: 900. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdleConnectTimeout;

    /**
     * @var integer <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners. After rescheduling is triggered, persistent connections will be disconnected and reassigned within the scheduled time window. </p><p>Unit: s.</p>
     */
    public $RescheduleInterval;

    /**
     * @var string <p>Data compression mode</p>
     */
    public $DataCompressMode;

    /**
     * @var integer <p>Rescheduling startup time: After the rescheduling startup time is configured, rescheduling is triggered when the startup time is arrived.</p>
     */
    public $RescheduleStartTime;

    /**
     * @param string $ListenerId <p>CLB listener ID</p>
     * @param string $Protocol <p>Listener protocol. Available values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC</p>
     * @param integer $Port <p>Listener port, port range: 1–65535</p>
     * @param CertificateOutput $Certificate <p>Listener bound certificate information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HealthCheck $HealthCheck <p>Health check information of the listener</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler <p>Requested scheduling method. WRR, LEAST_CONN, and IP_HASH indicate weighted round-robin, least connection, and IP Hash respectively.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled by default. This parameter is applicable only to TCP/UDP listener.</p><p>Unit: second</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniSwitch <p>Whether to enable SNI feature. 1: enable, 0: disabled (this parameter is applicable only to HTTPS listeners)</p>
     * @param array $Rules <p>All forwarding rules under a listener (this parameter is only meaningful for HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerName <p>Listener name</p>
     * @param string $CreateTime <p>Listener creation time.</p>
     * @param integer $EndPort <p>End port of the port range: 2–65535</p>
     * @param string $TargetType <p>Backend server type. Available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BasicTargetGroupInfo $TargetGroup <p>Bound target group basic information; return this field when listener binding target group.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionType <p>Session persistence type. NORMAL means the default session persistence type. QUIC_CID refers to maintaining the session based on Quic Connection ID.</p>
     * @param integer $KeepaliveEnable <p>Whether to enable long connections. 1: enable, 0: disable (this parameter is applicable only to HTTP/HTTPS listeners)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Toa <p>Only supports Nat64 CLB TCP listener</p>
     * @param boolean $DeregisterTargetRst <p>Rescheduling feature, which provides a switch for scaling out the backend service. If the switch is toggled on, rescheduling is triggered when the backend service is unbound. This parameter is applicable only to TCP/UDP listeners.</p>
     * @param array $AttrFlags <p>Listener attribute.</p>
     * @param array $TargetGroupList <p>List of bound target groups</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxConn <p>Maximum number of connections to a listener. -1 means no speed limit at the listener dimension.</p>
     * @param integer $MaxCps <p>Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.</p>
     * @param integer $IdleConnectTimeout <p>Idle connection timeout is only supported for TCP listeners. Default value: 900. Value range: 300–900 for shared instances and dedicated instances and 300–1980 for LCU-supported instances.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RescheduleInterval <p>Rescheduling trigger duration. Value range: 0–3600. Unit: s. This parameter is applicable only to TCP/UDP listeners. After rescheduling is triggered, persistent connections will be disconnected and reassigned within the scheduled time window. </p><p>Unit: s.</p>
     * @param string $DataCompressMode <p>Data compression mode</p>
     * @param integer $RescheduleStartTime <p>Rescheduling startup time: After the rescheduling startup time is configured, rescheduling is triggered when the startup time is arrived.</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateOutput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleOutput();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetGroup",$param) and $param["TargetGroup"] !== null) {
            $this->TargetGroup = new BasicTargetGroupInfo();
            $this->TargetGroup->deserialize($param["TargetGroup"]);
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("Toa",$param) and $param["Toa"] !== null) {
            $this->Toa = $param["Toa"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
        }

        if (array_key_exists("AttrFlags",$param) and $param["AttrFlags"] !== null) {
            $this->AttrFlags = $param["AttrFlags"];
        }

        if (array_key_exists("TargetGroupList",$param) and $param["TargetGroupList"] !== null) {
            $this->TargetGroupList = [];
            foreach ($param["TargetGroupList"] as $key => $value){
                $obj = new BasicTargetGroupInfo();
                $obj->deserialize($value);
                array_push($this->TargetGroupList, $obj);
            }
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

        if (array_key_exists("RescheduleInterval",$param) and $param["RescheduleInterval"] !== null) {
            $this->RescheduleInterval = $param["RescheduleInterval"];
        }

        if (array_key_exists("DataCompressMode",$param) and $param["DataCompressMode"] !== null) {
            $this->DataCompressMode = $param["DataCompressMode"];
        }

        if (array_key_exists("RescheduleStartTime",$param) and $param["RescheduleStartTime"] !== null) {
            $this->RescheduleStartTime = $param["RescheduleStartTime"];
        }
    }
}
