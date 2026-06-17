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
 * ModifyTargetGroupAttribute request structure.
 *
 * @method string getTargetGroupId() Obtain <p>Target group ID.</p>
 * @method void setTargetGroupId(string $TargetGroupId) Set <p>Target group ID.</p>
 * @method string getTargetGroupName() Obtain <p>New name of target group. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method void setTargetGroupName(string $TargetGroupName) Set <p>New name of target group. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
 * @method integer getPort() Obtain <p>New default port of target group. Full listen target group does not support this parameter.</p>
 * @method void setPort(integer $Port) Set <p>New default port of target group. Full listen target group does not support this parameter.</p>
 * @method string getScheduleAlgorithm() Obtain <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:<br>&lt;ur&gt;<li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>&lt;ur&gt;</p>
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:<br>&lt;ur&gt;<li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>&lt;ur&gt;</p>
 * @method TargetGroupHealthCheck getHealthCheck() Obtain <p>Health check details.</p>
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set <p>Health check details.</p>
 * @method integer getWeight() Obtain <p>Default weight of the backend service. Among them: <ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set weight individually, use the default weight here.</li><li>Weight parameter settings not supported for Target Group Type v1.</li></ul></p>
 * @method void setWeight(integer $Weight) Set <p>Default weight of the backend service. Among them: <ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set weight individually, use the default weight here.</li><li>Weight parameter settings not supported for Target Group Type v1.</li></ul></p>
 * @method boolean getKeepaliveEnable() Obtain <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. true: off; false: on. Off by default.</p>
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. true: off; false: on. Off by default.</p>
 * @method integer getSessionExpireTime() Obtain <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is not supported for TCP/UDP target group.</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is not supported for TCP/UDP target group.</p>
 * @method boolean getSnatEnable() Obtain <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 * @method void setSnatEnable(boolean $SnatEnable) Set <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>Target group ID.</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>New name of target group. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     */
    public $TargetGroupName;

    /**
     * @var integer <p>New default port of target group. Full listen target group does not support this parameter.</p>
     */
    public $Port;

    /**
     * @var string <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:<br>&lt;ur&gt;<li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>&lt;ur&gt;</p>
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck <p>Health check details.</p>
     */
    public $HealthCheck;

    /**
     * @var integer <p>Default weight of the backend service. Among them: <ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set weight individually, use the default weight here.</li><li>Weight parameter settings not supported for Target Group Type v1.</li></ul></p>
     */
    public $Weight;

    /**
     * @var boolean <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. true: off; false: on. Off by default.</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is not supported for TCP/UDP target group.</p>
     */
    public $SessionExpireTime;

    /**
     * @var boolean <p>Whether SNAT (source IP replacement) is enabled, True (enabled), False (disabled). Disabled by default. Note: When SnatEnable is enabled, the client source IP will be replaced. At this point, the <code>Pass through client source IP</code> option is disabled, and vice versa.</p>
     */
    public $SnatEnable;

    /**
     * @param string $TargetGroupId <p>Target group ID.</p>
     * @param string $TargetGroupName <p>New name of target group. Naming rule: 1-80 English letters, Chinese characters and other internationally compatible language characters, digits, connecting line "-", underscore "_" and other common characters (Unicode supplementary characters such as emoji and rare Chinese characters are forbidden).</p>
     * @param integer $Port <p>New default port of target group. Full listen target group does not support this parameter.</p>
     * @param string $ScheduleAlgorithm <p>Scheduling algorithm. This parameter is valid only for new version V2 target groups with backend forwarding protocol (HTTP|HTTPS|GRPC). Available values:<br>&lt;ur&gt;<li>WRR: weighted round-robin.</li><li>LEAST_CONN: least connection.</li><li>IP_HASH: based on IP hash.</li><li>Default WRR.</li>&lt;ur&gt;</p>
     * @param TargetGroupHealthCheck $HealthCheck <p>Health check details.</p>
     * @param integer $Weight <p>Default weight of the backend service. Among them: <ul><li>Value ranges from 0 to 100.</li><li>After setting this value, when adding a backend service to the target group, if the backend service does not set weight individually, use the default weight here.</li><li>Weight parameter settings not supported for Target Group Type v1.</li></ul></p>
     * @param boolean $KeepaliveEnable <p>Whether to enable long connections. This parameter is applicable only to HTTP/HTTPS target groups. true: off; false: on. Off by default.</p>
     * @param integer $SessionExpireTime <p>Session persistence time, unit: second. Available values: 30-3600, default 0, disabled. This parameter is not supported for TCP/UDP target group.</p>
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }
    }
}
