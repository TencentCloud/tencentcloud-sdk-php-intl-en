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
 * Brief information output parameters of the target group
 *
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method HealthCheckConfig getHealthCheckConfig() Obtain Health check configuration.
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) Set Health check configuration.
 * @method boolean getKeepaliveEnabled() Obtain Whether to enable long connections.
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) Set Whether to enable long connections.
 * @method string getProtocol() Obtain Backend service protocol type. Value:
- **HTTP** (default): support binding HTTP and HTTPS listeners
- **HTTPS**: support binding HTTPS listeners
- **GRPC**: support binding HTTPS listeners
- **GRPCS**: support binding HTTPS listeners
 * @method void setProtocol(string $Protocol) Set Backend service protocol type. Value:
- **HTTP** (default): support binding HTTP and HTTPS listeners
- **HTTPS**: support binding HTTPS listeners
- **GRPC**: support binding HTTPS listeners
- **GRPCS**: support binding HTTPS listeners
 * @method integer getRelatedLoadBalancersCount() Obtain Number of load balancers associated with the target group.
 * @method void setRelatedLoadBalancersCount(integer $RelatedLoadBalancersCount) Set Number of load balancers associated with the target group.
 * @method string getSchedulerAlgorithm() Obtain Scheduling algorithm.
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) Set Scheduling algorithm.
 * @method StickySessionConfig getStickySessionConfig() Obtain Session persistence configuration.
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) Set Session persistence configuration.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getTargetGroupId() Obtain Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method string getTargetGroupName() Obtain Target group name. Defaults to the target group ID. It contains 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name. Defaults to the target group ID. It contains 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method string getTargetGroupStatus() Obtain Status of the target group. Valid values:
- **Provisioning**: Under creation.
- **ProvisionFailed**: Creation failed.
- **Active**: Running.
- **Configuring**: configuration changing.
 * @method void setTargetGroupStatus(string $TargetGroupStatus) Set Status of the target group. Valid values:
- **Provisioning**: Under creation.
- **ProvisionFailed**: Creation failed.
- **Active**: Running.
- **Configuring**: configuration changing.
 * @method string getTargetType() Obtain Target group type. Valid values:
- **Instance**: Cvm server type or Eni type
 * @method void setTargetType(string $TargetType) Set Target group type. Valid values:
- **Instance**: Cvm server type or Eni type
 * @method string getVpcId() Obtain Virtual Private Cloud (VPC) ID.
 * @method void setVpcId(string $VpcId) Set Virtual Private Cloud (VPC) ID.
 */
class TargetGroupOutput extends AbstractModel
{
    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var HealthCheckConfig Health check configuration.
     */
    public $HealthCheckConfig;

    /**
     * @var boolean Whether to enable long connections.
     */
    public $KeepaliveEnabled;

    /**
     * @var string Backend service protocol type. Value:
- **HTTP** (default): support binding HTTP and HTTPS listeners
- **HTTPS**: support binding HTTPS listeners
- **GRPC**: support binding HTTPS listeners
- **GRPCS**: support binding HTTPS listeners
     */
    public $Protocol;

    /**
     * @var integer Number of load balancers associated with the target group.
     */
    public $RelatedLoadBalancersCount;

    /**
     * @var string Scheduling algorithm.
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig Session persistence configuration.
     */
    public $StickySessionConfig;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var string Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     */
    public $TargetGroupId;

    /**
     * @var string Target group name. Defaults to the target group ID. It contains 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     */
    public $TargetGroupName;

    /**
     * @var string Status of the target group. Valid values:
- **Provisioning**: Under creation.
- **ProvisionFailed**: Creation failed.
- **Active**: Running.
- **Configuring**: configuration changing.
     */
    public $TargetGroupStatus;

    /**
     * @var string Target group type. Valid values:
- **Instance**: Cvm server type or Eni type
     */
    public $TargetType;

    /**
     * @var string Virtual Private Cloud (VPC) ID.
     */
    public $VpcId;

    /**
     * @param string $CreateTime Creation time.
     * @param HealthCheckConfig $HealthCheckConfig Health check configuration.
     * @param boolean $KeepaliveEnabled Whether to enable long connections.
     * @param string $Protocol Backend service protocol type. Value:
- **HTTP** (default): support binding HTTP and HTTPS listeners
- **HTTPS**: support binding HTTPS listeners
- **GRPC**: support binding HTTPS listeners
- **GRPCS**: support binding HTTPS listeners
     * @param integer $RelatedLoadBalancersCount Number of load balancers associated with the target group.
     * @param string $SchedulerAlgorithm Scheduling algorithm.
     * @param StickySessionConfig $StickySessionConfig Session persistence configuration.
     * @param array $Tags Tag.
     * @param string $TargetGroupId Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     * @param string $TargetGroupName Target group name. Defaults to the target group ID. It contains 1–255 characters, consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     * @param string $TargetGroupStatus Status of the target group. Valid values:
- **Provisioning**: Under creation.
- **ProvisionFailed**: Creation failed.
- **Active**: Running.
- **Configuring**: configuration changing.
     * @param string $TargetType Target group type. Valid values:
- **Instance**: Cvm server type or Eni type
     * @param string $VpcId Virtual Private Cloud (VPC) ID.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("RelatedLoadBalancersCount",$param) and $param["RelatedLoadBalancersCount"] !== null) {
            $this->RelatedLoadBalancersCount = $param["RelatedLoadBalancersCount"];
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

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("TargetGroupStatus",$param) and $param["TargetGroupStatus"] !== null) {
            $this->TargetGroupStatus = $param["TargetGroupStatus"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
