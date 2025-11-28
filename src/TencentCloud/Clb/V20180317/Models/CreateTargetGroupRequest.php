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
 * CreateTargetGroup request structure.
 *
 * @method string getTargetGroupName() Obtain Target group name (up to 50 characters)
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name (up to 50 characters)
 * @method string getVpcId() Obtain Specifies the vpc id attribute of the target group. uses the default vpc if left empty.
 * @method void setVpcId(string $VpcId) Set Specifies the vpc id attribute of the target group. uses the default vpc if left empty.
 * @method integer getPort() Obtain Specifies the default Port of the target group. the default Port can be used when servers are added subsequently. this parameter is not supported for full-listen target groups. for non-full-listen target groups, either Port or Port in TargetGroupInstances.N is required.

 * @method void setPort(integer $Port) Set Specifies the default Port of the target group. the default Port can be used when servers are added subsequently. this parameter is not supported for full-listen target groups. for non-full-listen target groups, either Port or Port in TargetGroupInstances.N is required.

 * @method array getTargetGroupInstances() Obtain Specifies the real servers bound to the target group. supports up to 50 at a time.
 * @method void setTargetGroupInstances(array $TargetGroupInstances) Set Specifies the real servers bound to the target group. supports up to 50 at a time.
 * @method string getType() Obtain Target group type, currently supported v1 (legacy version target group) and v2 (new version target group), defaults to v1 (legacy version target group).
 * @method void setType(string $Type) Set Target group type, currently supported v1 (legacy version target group) and v2 (new version target group), defaults to v1 (legacy version target group).
 * @method string getProtocol() Obtain Backend forwarding protocol of the target group. this field is required for the new version (v2) target group. currently supports TCP, UDP, HTTP, HTTPS, GRPC.
 * @method void setProtocol(string $Protocol) Set Backend forwarding protocol of the target group. this field is required for the new version (v2) target group. currently supports TCP, UDP, HTTP, HTTPS, GRPC.
 * @method TargetGroupHealthCheck getHealthCheck() Obtain Health check.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set Health check.
 * @method string getScheduleAlgorithm() Obtain Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method integer getWeight() Obtain Specifies the default weight of the backend service. among them:.
<ul><li>Value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
 * @method void setWeight(integer $Weight) Set Specifies the default weight of the backend service. among them:.
<ul><li>Value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
 * @method boolean getFullListenSwitch() Obtain Full listen target group flag. valid values: true (yes), false (no). only target groups of the new version V2 event type support this parameter.
 * @method void setFullListenSwitch(boolean $FullListenSwitch) Set Full listen target group flag. valid values: true (yes), false (no). only target groups of the new version V2 event type support this parameter.
 * @method boolean getKeepaliveEnable() Obtain Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. 0: disable; 1: enable. this feature is off by default.
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. 0: disable; 1: enable. this feature is off by default.
 * @method integer getSessionExpireTime() Obtain Session hold time, unit: second. value range: 30-3600. default: 0, disabled. this parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session hold time, unit: second. value range: 30-3600. default: 0, disabled. this parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.
 * @method string getIpVersion() Obtain IP version type.
 * @method void setIpVersion(string $IpVersion) Set IP version type.
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string Target group name (up to 50 characters)
     */
    public $TargetGroupName;

    /**
     * @var string Specifies the vpc id attribute of the target group. uses the default vpc if left empty.
     */
    public $VpcId;

    /**
     * @var integer Specifies the default Port of the target group. the default Port can be used when servers are added subsequently. this parameter is not supported for full-listen target groups. for non-full-listen target groups, either Port or Port in TargetGroupInstances.N is required.

     */
    public $Port;

    /**
     * @var array Specifies the real servers bound to the target group. supports up to 50 at a time.
     */
    public $TargetGroupInstances;

    /**
     * @var string Target group type, currently supported v1 (legacy version target group) and v2 (new version target group), defaults to v1 (legacy version target group).
     */
    public $Type;

    /**
     * @var string Backend forwarding protocol of the target group. this field is required for the new version (v2) target group. currently supports TCP, UDP, HTTP, HTTPS, GRPC.
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck Health check.
     */
    public $HealthCheck;

    /**
     * @var string Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
     */
    public $ScheduleAlgorithm;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var integer Specifies the default weight of the backend service. among them:.
<ul><li>Value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
     */
    public $Weight;

    /**
     * @var boolean Full listen target group flag. valid values: true (yes), false (no). only target groups of the new version V2 event type support this parameter.
     */
    public $FullListenSwitch;

    /**
     * @var boolean Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. 0: disable; 1: enable. this feature is off by default.
     */
    public $KeepaliveEnable;

    /**
     * @var integer Session hold time, unit: second. value range: 30-3600. default: 0, disabled. this parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.
     */
    public $SessionExpireTime;

    /**
     * @var string IP version type.
     */
    public $IpVersion;

    /**
     * @param string $TargetGroupName Target group name (up to 50 characters)
     * @param string $VpcId Specifies the vpc id attribute of the target group. uses the default vpc if left empty.
     * @param integer $Port Specifies the default Port of the target group. the default Port can be used when servers are added subsequently. this parameter is not supported for full-listen target groups. for non-full-listen target groups, either Port or Port in TargetGroupInstances.N is required.

     * @param array $TargetGroupInstances Specifies the real servers bound to the target group. supports up to 50 at a time.
     * @param string $Type Target group type, currently supported v1 (legacy version target group) and v2 (new version target group), defaults to v1 (legacy version target group).
     * @param string $Protocol Backend forwarding protocol of the target group. this field is required for the new version (v2) target group. currently supports TCP, UDP, HTTP, HTTPS, GRPC.
     * @param TargetGroupHealthCheck $HealthCheck Health check.
     * @param string $ScheduleAlgorithm Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
     * @param array $Tags Tag.
     * @param integer $Weight Specifies the default weight of the backend service. among them:.
<ul><li>Value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
     * @param boolean $FullListenSwitch Full listen target group flag. valid values: true (yes), false (no). only target groups of the new version V2 event type support this parameter.
     * @param boolean $KeepaliveEnable Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. 0: disable; 1: enable. this feature is off by default.
     * @param integer $SessionExpireTime Session hold time, unit: second. value range: 30-3600. default: 0, disabled. this parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.
     * @param string $IpVersion IP version type.
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
        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("FullListenSwitch",$param) and $param["FullListenSwitch"] !== null) {
            $this->FullListenSwitch = $param["FullListenSwitch"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
