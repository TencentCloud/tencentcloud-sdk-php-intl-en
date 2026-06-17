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
 * @method string getTargetGroupName() Obtain <p>Target group name. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method void setTargetGroupName(string $TargetGroupName) Set <p>Target group name. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method string getVpcId() Obtain <p>The vpcId attribute of the target group. Leave it blank to use the default VPC.</p>
 * @method void setVpcId(string $VpcId) Set <p>The vpcId attribute of the target group. Leave it blank to use the default VPC.</p>
 * @method integer getPort() Obtain <p>Default port of target group. Default port can be used when servers are added subsequently. Full listen target group does not support this parameter. For non-full listen target group, either Port or port in TargetGroupInstances.N is required.</p>
 * @method void setPort(integer $Port) Set <p>Default port of target group. Default port can be used when servers are added subsequently. Full listen target group does not support this parameter. For non-full listen target group, either Port or port in TargetGroupInstances.N is required.</p>
 * @method array getTargetGroupInstances() Obtain <p>The target group supports up to 50 real servers bound to it.</p>
 * @method void setTargetGroupInstances(array $TargetGroupInstances) Set <p>The target group supports up to 50 real servers bound to it.</p>
 * @method string getType() Obtain <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group), defaults to v1 (legacy version target group).</p>
 * @method void setType(string $Type) Set <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group), defaults to v1 (legacy version target group).</p>
 * @method string getProtocol() Obtain <p>Backend forwarding protocol of the target group. This field is required for the new version target group v2. Currently supports TCP, UDP, HTTP, HTTPS, GRPC.</p>
 * @method void setProtocol(string $Protocol) Set <p>Backend forwarding protocol of the target group. This field is required for the new version target group v2. Currently supports TCP, UDP, HTTP, HTTPS, GRPC.</p>
 * @method TargetGroupHealthCheck getHealthCheck() Obtain <p>Health check.</p>
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set <p>Health check.</p>
 * @method string getScheduleAlgorithm() Obtain <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:</p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:</p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method integer getWeight() Obtain <p>Default weight of the backend service, where:</p><ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set the weight separately, use the default weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>
 * @method void setWeight(integer $Weight) Set <p>Default weight of the backend service, where:</p><ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set the weight separately, use the default weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>
 * @method boolean getFullListenSwitch() Obtain <p>Full listen target group flag. true: yes, false: no. Only target groups of the new version V2 support this parameter.</p>
 * @method void setFullListenSwitch(boolean $FullListenSwitch) Set <p>Full listen target group flag. true: yes, false: no. Only target groups of the new version V2 support this parameter.</p>
 * @method boolean getKeepaliveEnable() Obtain <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. 0: off; 1: on. Off by default.</p>
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. 0: off; 1: on. Off by default.</p>
 * @method integer getSessionExpireTime() Obtain <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.</p>
 * @method string getIpVersion() Obtain <p>IP version type.</p>
 * @method void setIpVersion(string $IpVersion) Set <p>IP version type.</p>
 * @method boolean getSnatEnable() Obtain <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method void setSnatEnable(boolean $SnatEnable) Set <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Target group name. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     */
    public $TargetGroupName;

    /**
     * @var string <p>The vpcId attribute of the target group. Leave it blank to use the default VPC.</p>
     */
    public $VpcId;

    /**
     * @var integer <p>Default port of target group. Default port can be used when servers are added subsequently. Full listen target group does not support this parameter. For non-full listen target group, either Port or port in TargetGroupInstances.N is required.</p>
     */
    public $Port;

    /**
     * @var array <p>The target group supports up to 50 real servers bound to it.</p>
     */
    public $TargetGroupInstances;

    /**
     * @var string <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group), defaults to v1 (legacy version target group).</p>
     */
    public $Type;

    /**
     * @var string <p>Backend forwarding protocol of the target group. This field is required for the new version target group v2. Currently supports TCP, UDP, HTTP, HTTPS, GRPC.</p>
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck <p>Health check.</p>
     */
    public $HealthCheck;

    /**
     * @var string <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:</p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>
     */
    public $ScheduleAlgorithm;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Default weight of the backend service, where:</p><ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set the weight separately, use the default weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>
     */
    public $Weight;

    /**
     * @var boolean <p>Full listen target group flag. true: yes, false: no. Only target groups of the new version V2 support this parameter.</p>
     */
    public $FullListenSwitch;

    /**
     * @var boolean <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. 0: off; 1: on. Off by default.</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>IP version type.</p>
     */
    public $IpVersion;

    /**
     * @var boolean <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
     */
    public $SnatEnable;

    /**
     * @param string $TargetGroupName <p>Target group name. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     * @param string $VpcId <p>The vpcId attribute of the target group. Leave it blank to use the default VPC.</p>
     * @param integer $Port <p>Default port of target group. Default port can be used when servers are added subsequently. Full listen target group does not support this parameter. For non-full listen target group, either Port or port in TargetGroupInstances.N is required.</p>
     * @param array $TargetGroupInstances <p>The target group supports up to 50 real servers bound to it.</p>
     * @param string $Type <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group), defaults to v1 (legacy version target group).</p>
     * @param string $Protocol <p>Backend forwarding protocol of the target group. This field is required for the new version target group v2. Currently supports TCP, UDP, HTTP, HTTPS, GRPC.</p>
     * @param TargetGroupHealthCheck $HealthCheck <p>Health check.</p>
     * @param string $ScheduleAlgorithm <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:</p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>
     * @param array $Tags <p>Tag.</p>
     * @param integer $Weight <p>Default weight of the backend service, where:</p><ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set the weight separately, use the default weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>
     * @param boolean $FullListenSwitch <p>Full listen target group flag. true: yes, false: no. Only target groups of the new version V2 support this parameter.</p>
     * @param boolean $KeepaliveEnable <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. 0: off; 1: on. Off by default.</p>
     * @param integer $SessionExpireTime <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is supported only for target groups with HTTP/HTTPS/GRPC backend forwarding protocol in the new version V2.</p>
     * @param string $IpVersion <p>IP version type.</p>
     * @param boolean $SnatEnable <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
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

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }
    }
}
