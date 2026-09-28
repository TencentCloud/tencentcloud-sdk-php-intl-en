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
 * CreateTargetGroup request structure.
 *
 * @method string getTargetType() Obtain <p>Target Group Type. Value:</p><ul><li><strong>Instance</strong> (default): Cvm server type or Eni type.</li></ul>
 * @method void setTargetType(string $TargetType) Set <p>Target Group Type. Value:</p><ul><li><strong>Instance</strong> (default): Cvm server type or Eni type.</li></ul>
 * @method string getVpcId() Obtain <p>VPC ID.</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID.</p>
 * @method boolean getDryRun() Obtain <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly create a target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for target group creation meet the requirements.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly create a target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for target group creation meet the requirements.</li></ul>
 * @method HealthCheckConfig getHealthCheckConfig() Obtain <p>Health check configuration.</p>
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) Set <p>Health check configuration.</p>
 * @method boolean getKeepaliveEnabled() Obtain <p>Whether to enable long connections.</p>
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) Set <p>Whether to enable long connections.</p>
 * @method string getProtocol() Obtain <p>Backend service protocol type. Values:</p><ul><li><strong>HTTP</strong> (default): supports binding HTTP and HTTPS listeners</li><li><strong>HTTPS</strong>: supports binding HTTPS listeners</li><li><strong>GRPC</strong>: supports binding HTTPS listeners</li><li><strong>GRPCS</strong>: supports binding HTTPS listeners</li></ul>
 * @method void setProtocol(string $Protocol) Set <p>Backend service protocol type. Values:</p><ul><li><strong>HTTP</strong> (default): supports binding HTTP and HTTPS listeners</li><li><strong>HTTPS</strong>: supports binding HTTPS listeners</li><li><strong>GRPC</strong>: supports binding HTTPS listeners</li><li><strong>GRPCS</strong>: supports binding HTTPS listeners</li></ul>
 * @method string getSchedulerAlgorithm() Obtain <p>Scheduling algorithm. Value:</p><ul><li><strong>wrr</strong> (default): weighted polling. Backend servers are selected by weight. The higher the weight, the more likely the server is to be polled.</li><li><strong>wlc</strong>: weighted least connections. When different backend servers have the same weight, the server with fewer current connections is more likely to be polled.</li></ul>
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) Set <p>Scheduling algorithm. Value:</p><ul><li><strong>wrr</strong> (default): weighted polling. Backend servers are selected by weight. The higher the weight, the more likely the server is to be polled.</li><li><strong>wlc</strong>: weighted least connections. When different backend servers have the same weight, the server with fewer current connections is more likely to be polled.</li></ul>
 * @method StickySessionConfig getStickySessionConfig() Obtain <p>Session persistence configuration.</p>
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) Set <p>Session persistence configuration.</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method string getTargetGroupName() Obtain <p>Target group name, defaulting to the target group ID. It is <strong>1-255</strong> characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
 * @method void setTargetGroupName(string $TargetGroupName) Set <p>Target group name, defaulting to the target group ID. It is <strong>1-255</strong> characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Target Group Type. Value:</p><ul><li><strong>Instance</strong> (default): Cvm server type or Eni type.</li></ul>
     */
    public $TargetType;

    /**
     * @var string <p>VPC ID.</p>
     */
    public $VpcId;

    /**
     * @var boolean <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly create a target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for target group creation meet the requirements.</li></ul>
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
     * @var string <p>Backend service protocol type. Values:</p><ul><li><strong>HTTP</strong> (default): supports binding HTTP and HTTPS listeners</li><li><strong>HTTPS</strong>: supports binding HTTPS listeners</li><li><strong>GRPC</strong>: supports binding HTTPS listeners</li><li><strong>GRPCS</strong>: supports binding HTTPS listeners</li></ul>
     */
    public $Protocol;

    /**
     * @var string <p>Scheduling algorithm. Value:</p><ul><li><strong>wrr</strong> (default): weighted polling. Backend servers are selected by weight. The higher the weight, the more likely the server is to be polled.</li><li><strong>wlc</strong>: weighted least connections. When different backend servers have the same weight, the server with fewer current connections is more likely to be polled.</li></ul>
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig <p>Session persistence configuration.</p>
     */
    public $StickySessionConfig;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Target group name, defaulting to the target group ID. It is <strong>1-255</strong> characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
     */
    public $TargetGroupName;

    /**
     * @param string $TargetType <p>Target Group Type. Value:</p><ul><li><strong>Instance</strong> (default): Cvm server type or Eni type.</li></ul>
     * @param string $VpcId <p>VPC ID.</p>
     * @param boolean $DryRun <p>Whether to preview this request.</p><ul><li><strong>false</strong> (default): Send a normal request to directly create a target group.</li><li><strong>true</strong>: Send a preview request to check whether the parameters, format, and service limits for target group creation meet the requirements.</li></ul>
     * @param HealthCheckConfig $HealthCheckConfig <p>Health check configuration.</p>
     * @param boolean $KeepaliveEnabled <p>Whether to enable long connections.</p>
     * @param string $Protocol <p>Backend service protocol type. Values:</p><ul><li><strong>HTTP</strong> (default): supports binding HTTP and HTTPS listeners</li><li><strong>HTTPS</strong>: supports binding HTTPS listeners</li><li><strong>GRPC</strong>: supports binding HTTPS listeners</li><li><strong>GRPCS</strong>: supports binding HTTPS listeners</li></ul>
     * @param string $SchedulerAlgorithm <p>Scheduling algorithm. Value:</p><ul><li><strong>wrr</strong> (default): weighted polling. Backend servers are selected by weight. The higher the weight, the more likely the server is to be polled.</li><li><strong>wlc</strong>: weighted least connections. When different backend servers have the same weight, the server with fewer current connections is more likely to be polled.</li></ul>
     * @param StickySessionConfig $StickySessionConfig <p>Session persistence configuration.</p>
     * @param array $Tags <p>Tag.</p>
     * @param string $TargetGroupName <p>Target group name, defaulting to the target group ID. It is <strong>1-255</strong> characters long and can contain digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).</p>
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
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SchedulerAlgorithm",$param) and $param["SchedulerAlgorithm"] !== null) {
            $this->SchedulerAlgorithm = $param["SchedulerAlgorithm"];
        }

        if (array_key_exists("StickySessionConfig",$param) and $param["StickySessionConfig"] !== null) {
            $this->StickySessionConfig = new StickySessionConfig();
            $this->StickySessionConfig->deserialize($param["StickySessionConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }
    }
}
