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
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getProtocol() Obtain Listener protocol. valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC.
 * @method void setProtocol(string $Protocol) Set Listener protocol. valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC.
 * @method integer getPort() Obtain Listener port. value range: 1-65535.
 * @method void setPort(integer $Port) Set Listener port. value range: 1-65535.
 * @method CertificateOutput getCertificate() Obtain Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(CertificateOutput $Certificate) Set Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HealthCheck getHealthCheck() Obtain Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduler() Obtain Request scheduling method. WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduler(string $Scheduler) Set Request scheduling method. WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionExpireTime() Obtain Session persistence time, in seconds. value range: 30-3600. default value: 0, indicating that session persistence is not enabled by default. this parameter applies only to TCP and UDP listeners.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time, in seconds. value range: 30-3600. default value: 0, indicating that session persistence is not enabled by default. this parameter applies only to TCP and UDP listeners.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain Specifies whether to enable the SNI feature. 1: enable; 0: disable. this parameter is applicable only to HTTPS listeners.
 * @method void setSniSwitch(integer $SniSwitch) Set Specifies whether to enable the SNI feature. 1: enable; 0: disable. this parameter is applicable only to HTTPS listeners.
 * @method array getRules() Obtain All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method string getCreateTime() Obtain Listener creation time
 * @method void setCreateTime(string $CreateTime) Set Listener creation time
 * @method integer getEndPort() Obtain End port of the port range. value range: 2-65535.
 * @method void setEndPort(integer $EndPort) Set End port of the port range. value range: 2-65535.
 * @method string getTargetType() Obtain Backend server type. available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetType(string $TargetType) Set Backend server type. available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BasicTargetGroupInfo getTargetGroup() Obtain Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) Set Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionType() Obtain Session persistence type. NORMAL: Default session persistence type; QUIC_CID: Session persistence by Quic Connection ID.
 * @method void setSessionType(string $SessionType) Set Session persistence type. NORMAL: Default session persistence type; QUIC_CID: Session persistence by Quic Connection ID.
 * @method integer getKeepaliveEnable() Obtain Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getToa() Obtain Supports Nat64 CLB TCP listeners only
 * @method void setToa(boolean $Toa) Set Supports Nat64 CLB TCP listeners only
 * @method boolean getDeregisterTargetRst() Obtain Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
 * @method array getAttrFlags() Obtain Describes the attributes of the listener.
 * @method void setAttrFlags(array $AttrFlags) Set Describes the attributes of the listener.
 * @method array getTargetGroupList() Obtain List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetGroupList(array $TargetGroupList) Set List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxConn() Obtain Maximum number of connections to a listener. -1 indicates unlimited speed at the listener dimension.
 * @method void setMaxConn(integer $MaxConn) Set Maximum number of connections to a listener. -1 indicates unlimited speed at the listener dimension.
 * @method integer getMaxCps() Obtain Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.
 * @method void setMaxCps(integer $MaxCps) Set Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.
 * @method integer getIdleConnectTimeout() Obtain Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRescheduleInterval() Obtain Rescheduling trigger duration, valid values: 0-3600s. only TCP/UDP listeners support this. after triggering rescheduling, persistent connections will disconnect and be reassigned within the set scheduling time.
 * @method void setRescheduleInterval(integer $RescheduleInterval) Set Rescheduling trigger duration, valid values: 0-3600s. only TCP/UDP listeners support this. after triggering rescheduling, persistent connections will disconnect and be reassigned within the set scheduling time.
 * @method string getDataCompressMode() Obtain Data compression mode.
 * @method void setDataCompressMode(string $DataCompressMode) Set Data compression mode.
 * @method integer getRescheduleStartTime() Obtain Reschedules the startup time. when configured, rescheduling will be triggered upon arrival of the start time.
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) Set Reschedules the startup time. when configured, rescheduling will be triggered upon arrival of the start time.
 */
class Listener extends AbstractModel
{
    /**
     * @var string CLB listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener protocol. valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC.
     */
    public $Protocol;

    /**
     * @var integer Listener port. value range: 1-65535.
     */
    public $Port;

    /**
     * @var CertificateOutput Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var HealthCheck Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string Request scheduling method. WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scheduler;

    /**
     * @var integer Session persistence time, in seconds. value range: 30-3600. default value: 0, indicating that session persistence is not enabled by default. this parameter applies only to TCP and UDP listeners.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionExpireTime;

    /**
     * @var integer Specifies whether to enable the SNI feature. 1: enable; 0: disable. this parameter is applicable only to HTTPS listeners.
     */
    public $SniSwitch;

    /**
     * @var array All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var string Listener creation time
     */
    public $CreateTime;

    /**
     * @var integer End port of the port range. value range: 2-65535.
     */
    public $EndPort;

    /**
     * @var string Backend server type. available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroup;

    /**
     * @var string Session persistence type. NORMAL: Default session persistence type; QUIC_CID: Session persistence by Quic Connection ID.
     */
    public $SessionType;

    /**
     * @var integer Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $KeepaliveEnable;

    /**
     * @var boolean Supports Nat64 CLB TCP listeners only
     */
    public $Toa;

    /**
     * @var boolean Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     */
    public $DeregisterTargetRst;

    /**
     * @var array Describes the attributes of the listener.
     */
    public $AttrFlags;

    /**
     * @var array List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetGroupList;

    /**
     * @var integer Maximum number of connections to a listener. -1 indicates unlimited speed at the listener dimension.
     */
    public $MaxConn;

    /**
     * @var integer Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.
     */
    public $MaxCps;

    /**
     * @var integer Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IdleConnectTimeout;

    /**
     * @var integer Rescheduling trigger duration, valid values: 0-3600s. only TCP/UDP listeners support this. after triggering rescheduling, persistent connections will disconnect and be reassigned within the set scheduling time.
     */
    public $RescheduleInterval;

    /**
     * @var string Data compression mode.
     */
    public $DataCompressMode;

    /**
     * @var integer Reschedules the startup time. when configured, rescheduling will be triggered upon arrival of the start time.
     */
    public $RescheduleStartTime;

    /**
     * @param string $ListenerId CLB listener ID
     * @param string $Protocol Listener protocol. valid values: TCP, UDP, HTTP, HTTPS, TCP_SSL, QUIC.
     * @param integer $Port Listener port. value range: 1-65535.
     * @param CertificateOutput $Certificate Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HealthCheck $HealthCheck Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request scheduling method. WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime Session persistence time, in seconds. value range: 30-3600. default value: 0, indicating that session persistence is not enabled by default. this parameter applies only to TCP and UDP listeners.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniSwitch Specifies whether to enable the SNI feature. 1: enable; 0: disable. this parameter is applicable only to HTTPS listeners.
     * @param array $Rules All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerName Listener name
     * @param string $CreateTime Listener creation time
     * @param integer $EndPort End port of the port range. value range: 2-65535.
     * @param string $TargetType Backend server type. available values: NODE, POLARIS, TARGETGROUP, TARGETGROUP-V2.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BasicTargetGroupInfo $TargetGroup Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionType Session persistence type. NORMAL: Default session persistence type; QUIC_CID: Session persistence by Quic Connection ID.
     * @param integer $KeepaliveEnable Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Toa Supports Nat64 CLB TCP listeners only
     * @param boolean $DeregisterTargetRst Reschedules when unbinding real servers. only supported for TCP/UDP listeners. toggle on to enable this feature.
     * @param array $AttrFlags Describes the attributes of the listener.
     * @param array $TargetGroupList List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxConn Maximum number of connections to a listener. -1 indicates unlimited speed at the listener dimension.
     * @param integer $MaxCps Maximum number of new connections to a listener. -1 means no speed limit at the listener dimension.
     * @param integer $IdleConnectTimeout Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RescheduleInterval Rescheduling trigger duration, valid values: 0-3600s. only TCP/UDP listeners support this. after triggering rescheduling, persistent connections will disconnect and be reassigned within the set scheduling time.
     * @param string $DataCompressMode Data compression mode.
     * @param integer $RescheduleStartTime Reschedules the startup time. when configured, rescheduling will be triggered upon arrival of the start time.
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
