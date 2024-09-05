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
 * Listener information
 *
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getProtocol() Obtain Listener protocol
 * @method void setProtocol(string $Protocol) Set Listener protocol
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
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
 * @method integer getSessionExpireTime() Obtain Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain Listener name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) Set Listener name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Listener creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Listener creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndPort() Obtain End port of a port range
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndPort(integer $EndPort) Set End port of a port range
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetType() Obtain Real server type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetType(string $TargetType) Set Real server type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BasicTargetGroupInfo getTargetGroup() Obtain Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) Set Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionType() Obtain Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionType(string $SessionType) Set Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getKeepaliveEnable() Obtain Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) Set Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getToa() Obtain Only the NAT64 CLB TCP listeners are supported.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setToa(boolean $Toa) Set Only the NAT64 CLB TCP listeners are supported.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDeregisterTargetRst() Obtain Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) Set Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getAttrFlags() Obtain Attribute of listener
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAttrFlags(array $AttrFlags) Set Attribute of listener
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTargetGroupList() Obtain List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetGroupList(array $TargetGroupList) Set List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxConn() Obtain Maximum number of concurrent listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxConn(integer $MaxConn) Set Maximum number of concurrent listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxCps() Obtain Maximum number of new listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxCps(integer $MaxCps) Set Maximum number of new listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIdleConnectTimeout() Obtain Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) Set Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRescheduleInterval() Obtain Scheduling time. After forced rescheduling is triggered, long connections will be disconnected and reassigned within the set scheduling time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRescheduleInterval(integer $RescheduleInterval) Set Scheduling time. After forced rescheduling is triggered, long connections will be disconnected and reassigned within the set scheduling time.Note: This field may return null, indicating that no valid values can be obtained.
 */
class Listener extends AbstractModel
{
    /**
     * @var string CLB listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener protocol
     */
    public $Protocol;

    /**
     * @var integer Listener port
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
     * @var integer Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionExpireTime;

    /**
     * @var integer Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SniSwitch;

    /**
     * @var array All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var string Listener name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Listener creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer End port of a port range
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndPort;

    /**
     * @var string Real server type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroup;

    /**
     * @var string Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionType;

    /**
     * @var integer Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $KeepaliveEnable;

    /**
     * @var boolean Only the NAT64 CLB TCP listeners are supported.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Toa;

    /**
     * @var boolean Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeregisterTargetRst;

    /**
     * @var array Attribute of listener
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AttrFlags;

    /**
     * @var array List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetGroupList;

    /**
     * @var integer Maximum number of concurrent listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxConn;

    /**
     * @var integer Maximum number of new listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxCps;

    /**
     * @var integer Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IdleConnectTimeout;

    /**
     * @var integer Scheduling time. After forced rescheduling is triggered, long connections will be disconnected and reassigned within the set scheduling time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RescheduleInterval;

    /**
     * @param string $ListenerId CLB listener ID
     * @param string $Protocol Listener protocol
     * @param integer $Port Listener port
     * @param CertificateOutput $Certificate Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HealthCheck $HealthCheck Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request scheduling method. WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniSwitch Whether to enable SNI. `1`: Enable; `0`: Do not enable. This parameter is only meaningful for HTTPS listeners.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Rules All forwarding rules under a listener (this parameter is meaningful only for HTTP/HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerName Listener name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Listener creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndPort End port of a port range
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetType Real server type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BasicTargetGroupInfo $TargetGroup Basic information of a bound target group. This field will be returned when a target group is bound to a listener.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionType Session persistence type. Valid values: Normal: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $KeepaliveEnable Whether a persistent connection is enabled (1: enabled; 0: disabled). This parameter can only be configured in HTTP/HTTPS listeners.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Toa Only the NAT64 CLB TCP listeners are supported.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $DeregisterTargetRst Whether to send the TCP RST packet to the client when unbinding a real server. This parameter is applicable to TCP listeners only.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $AttrFlags Attribute of listener
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TargetGroupList List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxConn Maximum number of concurrent listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxCps Maximum number of new listener connections. If it’s set to `-1`, the listener speed is not limited. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IdleConnectTimeout Connection idle timeout period (in seconds). It’s only available to TCP listeners. Value range: 300-900 for shared and dedicated instances; 300-2000 for LCU-supported CLB instances. It defaults to 900.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RescheduleInterval Scheduling time. After forced rescheduling is triggered, long connections will be disconnected and reassigned within the set scheduling time.Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
