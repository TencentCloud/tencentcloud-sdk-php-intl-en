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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancer request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getInstanceId() Obtain CLB instance ID.
 * @method void setInstanceId(string $InstanceId) Set CLB instance ID.
 * @method string getName() Obtain LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-). The original configuration applies if this field is not specified.
 * @method void setName(string $Name) Set LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-). The original configuration applies if this field is not specified.
 * @method array getOriginGroups() Obtain List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in [Quickly Create Load Balancers](https://intl.cloud.tencent.com/document/product/1552/104223?from_cn_redirect=1). The original configuration applies if this field is not specified.
 * @method void setOriginGroups(array $OriginGroups) Set List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in [Quickly Create Load Balancers](https://intl.cloud.tencent.com/document/product/1552/104223?from_cn_redirect=1). The original configuration applies if this field is not specified.
 * @method HealthChecker getHealthChecker() Obtain Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1). The original configuration applies if this field is not specified.
 * @method void setHealthChecker(HealthChecker $HealthChecker) Set Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1). The original configuration applies if this field is not specified.
 * @method string getSteeringPolicy() Obtain Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li> The original configuration applies if this field is not specified.
 * @method void setSteeringPolicy(string $SteeringPolicy) Set Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li> The original configuration applies if this field is not specified.
 * @method string getFailoverPolicy() Obtain Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li> The original configuration applies if not specified.
 * @method void setFailoverPolicy(string $FailoverPolicy) Set Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li> The original configuration applies if not specified.
 */
class ModifyLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string CLB instance ID.
     */
    public $InstanceId;

    /**
     * @var string LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-). The original configuration applies if this field is not specified.
     */
    public $Name;

    /**
     * @var array List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in [Quickly Create Load Balancers](https://intl.cloud.tencent.com/document/product/1552/104223?from_cn_redirect=1). The original configuration applies if this field is not specified.
     */
    public $OriginGroups;

    /**
     * @var HealthChecker Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1). The original configuration applies if this field is not specified.
     */
    public $HealthChecker;

    /**
     * @var string Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li> The original configuration applies if this field is not specified.
     */
    public $SteeringPolicy;

    /**
     * @var string Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li> The original configuration applies if not specified.
     */
    public $FailoverPolicy;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $InstanceId CLB instance ID.
     * @param string $Name LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-). The original configuration applies if this field is not specified.
     * @param array $OriginGroups List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in [Quickly Create Load Balancers](https://intl.cloud.tencent.com/document/product/1552/104223?from_cn_redirect=1). The original configuration applies if this field is not specified.
     * @param HealthChecker $HealthChecker Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1). The original configuration applies if this field is not specified.
     * @param string $SteeringPolicy Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li> The original configuration applies if this field is not specified.
     * @param string $FailoverPolicy Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li> The original configuration applies if not specified.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OriginGroups",$param) and $param["OriginGroups"] !== null) {
            $this->OriginGroups = [];
            foreach ($param["OriginGroups"] as $key => $value){
                $obj = new OriginGroupInLoadBalancer();
                $obj->deserialize($value);
                array_push($this->OriginGroups, $obj);
            }
        }

        if (array_key_exists("HealthChecker",$param) and $param["HealthChecker"] !== null) {
            $this->HealthChecker = new HealthChecker();
            $this->HealthChecker->deserialize($param["HealthChecker"]);
        }

        if (array_key_exists("SteeringPolicy",$param) and $param["SteeringPolicy"] !== null) {
            $this->SteeringPolicy = $param["SteeringPolicy"];
        }

        if (array_key_exists("FailoverPolicy",$param) and $param["FailoverPolicy"] !== null) {
            $this->FailoverPolicy = $param["FailoverPolicy"];
        }
    }
}
