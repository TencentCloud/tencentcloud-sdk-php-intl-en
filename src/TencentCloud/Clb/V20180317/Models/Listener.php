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
 * @method string getScheduler() Obtain Request scheduling method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduler(string $Scheduler) Set Request scheduling method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionExpireTime() Obtain Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature (this parameter is only meaningful for HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature (this parameter is only meaningful for HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Request scheduling method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scheduler;

    /**
     * @var integer Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionExpireTime;

    /**
     * @var integer Whether to enable the SNI feature (this parameter is only meaningful for HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param string $ListenerId CLB listener ID
     * @param string $Protocol Listener protocol
     * @param integer $Port Listener port
     * @param CertificateOutput $Certificate Information of certificates bound to the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HealthCheck $HealthCheck Health check information of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request scheduling method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime Session persistence time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniSwitch Whether to enable the SNI feature (this parameter is only meaningful for HTTPS listeners)
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
