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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttributes request structure.
 *
 * @method boolean getDryRun() Obtain <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for modifying the target group meet the requirements.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for modifying the target group meet the requirements.</li></ul>
 * @method HealthCheckConfig getHealthCheckConfig() Obtain <p>Health check configuration.</p>
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) Set <p>Health check configuration.</p>
 * @method boolean getKeepaliveEnabled() Obtain <p>Whether to enable long connections.</p>
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) Set <p>Whether to enable long connections.</p>
 * @method string getSchedulerAlgorithm() Obtain <p>Scheduling algorithm. Values:</p><ul><li><strong>wrr</strong>: weighted polling. Real servers are selected by weight. The higher the weight, the more chances a server stands to be polled.</li><li><strong>wlc</strong>: number of weighted least connections. When weight values of different real servers are the same, the server with fewer current connections stands more chances to be polled.</li></ul>
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) Set <p>Scheduling algorithm. Values:</p><ul><li><strong>wrr</strong>: weighted polling. Real servers are selected by weight. The higher the weight, the more chances a server stands to be polled.</li><li><strong>wlc</strong>: number of weighted least connections. When weight values of different real servers are the same, the server with fewer current connections stands more chances to be polled.</li></ul>
 * @method StickySessionConfig getStickySessionConfig() Obtain <p>Session persistence configuration.</p>
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) Set <p>Session persistence configuration.</p>
 * @method string getTargetGroupId() Obtain <p>Target group ID, format: lbtg- followed by 8 alphanumeric characters.</p>
 * @method void setTargetGroupId(string $TargetGroupId) Set <p>Target group ID, format: lbtg- followed by 8 alphanumeric characters.</p>
 * @method string getTargetGroupName() Obtain <p>Target group name. It can contain 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-). If no target group name is specified, the ID is used as the target group name by default.</p>
 * @method void setTargetGroupName(string $TargetGroupName) Set <p>Target group name. It can contain 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-). If no target group name is specified, the ID is used as the target group name by default.</p>
 */
class ModifyTargetGroupAttributesRequest extends AbstractModel
{
    /**
     * @var boolean <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for modifying the target group meet the requirements.</li></ul>
     */
    public $DryRun;

    /**
     * @var HealthCheckConfig <p>Health check configuration.</p>
     */
    public $HealthCheckConfig;

    /**
     * @var boolean <p>Whether to enable long connections.</p>
     */
    public $KeepaliveEnabled;

    /**
     * @var string <p>Scheduling algorithm. Values:</p><ul><li><strong>wrr</strong>: weighted polling. Real servers are selected by weight. The higher the weight, the more chances a server stands to be polled.</li><li><strong>wlc</strong>: number of weighted least connections. When weight values of different real servers are the same, the server with fewer current connections stands more chances to be polled.</li></ul>
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig <p>Session persistence configuration.</p>
     */
    public $StickySessionConfig;

    /**
     * @var string <p>Target group ID, format: lbtg- followed by 8 alphanumeric characters.</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>Target group name. It can contain 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-). If no target group name is specified, the ID is used as the target group name by default.</p>
     */
    public $TargetGroupName;

    /**
     * @param boolean $DryRun <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly modify the target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for modifying the target group meet the requirements.</li></ul>
     * @param HealthCheckConfig $HealthCheckConfig <p>Health check configuration.</p>
     * @param boolean $KeepaliveEnabled <p>Whether to enable long connections.</p>
     * @param string $SchedulerAlgorithm <p>Scheduling algorithm. Values:</p><ul><li><strong>wrr</strong>: weighted polling. Real servers are selected by weight. The higher the weight, the more chances a server stands to be polled.</li><li><strong>wlc</strong>: number of weighted least connections. When weight values of different real servers are the same, the server with fewer current connections stands more chances to be polled.</li></ul>
     * @param StickySessionConfig $StickySessionConfig <p>Session persistence configuration.</p>
     * @param string $TargetGroupId <p>Target group ID, format: lbtg- followed by 8 alphanumeric characters.</p>
     * @param string $TargetGroupName <p>Target group name. It can contain 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-). If no target group name is specified, the ID is used as the target group name by default.</p>
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
        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new HealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }

        if (array_key_exists("KeepaliveEnabled",$param) and $param["KeepaliveEnabled"] !== null) {
            $this->KeepaliveEnabled = $param["KeepaliveEnabled"];
        }

        if (array_key_exists("SchedulerAlgorithm",$param) and $param["SchedulerAlgorithm"] !== null) {
            $this->SchedulerAlgorithm = $param["SchedulerAlgorithm"];
        }

        if (array_key_exists("StickySessionConfig",$param) and $param["StickySessionConfig"] !== null) {
            $this->StickySessionConfig = new StickySessionConfig();
            $this->StickySessionConfig->deserialize($param["StickySessionConfig"]);
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }
    }
}
