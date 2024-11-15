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
 * LoadBalancer information.
 *
 * @method string getInstanceId() Obtain LoadBalancer ID.
 * @method void setInstanceId(string $InstanceId) Set LoadBalancer ID.
 * @method string getName() Obtain LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).	
 * @method void setName(string $Name) Set LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).	
 * @method string getType() Obtain LoadBalancer type. Valid values:
<li>HTTP: HTTP-specific LoadBalancer. It supports adding HTTP-specific and general origin server groups. It can only be referenced by site acceleration services (such as domain name service and rule engine).</li>
<li>GENERAL: general LoadBalancer. It only supports adding general origin server groups. It can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxy.</li>
 * @method void setType(string $Type) Set LoadBalancer type. Valid values:
<li>HTTP: HTTP-specific LoadBalancer. It supports adding HTTP-specific and general origin server groups. It can only be referenced by site acceleration services (such as domain name service and rule engine).</li>
<li>GENERAL: general LoadBalancer. It only supports adding general origin server groups. It can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxy.</li>
 * @method HealthChecker getHealthChecker() Obtain Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1).
 * @method void setHealthChecker(HealthChecker $HealthChecker) Set Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1).
 * @method string getSteeringPolicy() Obtain Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li>
 * @method void setSteeringPolicy(string $SteeringPolicy) Set Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li>
 * @method string getFailoverPolicy() Obtain Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
 * @method void setFailoverPolicy(string $FailoverPolicy) Set Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
 * @method array getOriginGroupHealthStatus() Obtain Origin server group health status.
 * @method void setOriginGroupHealthStatus(array $OriginGroupHealthStatus) Set Origin server group health status.
 * @method string getStatus() Obtain LoadBalancer status. Valid values:
<li>Pending: deploying.</li>
<li>Deleting: deleting.</li>
<li>Running: effective.</li>
 * @method void setStatus(string $Status) Set LoadBalancer status. Valid values:
<li>Pending: deploying.</li>
<li>Deleting: deleting.</li>
<li>Running: effective.</li>
 * @method array getL4UsedList() Obtain List of Layer-4 proxy instances bound to a LoadBalancer.
 * @method void setL4UsedList(array $L4UsedList) Set List of Layer-4 proxy instances bound to a LoadBalancer.
 * @method array getL7UsedList() Obtain List of Layer-7 domain names bound to a LoadBalancer.
 * @method void setL7UsedList(array $L7UsedList) Set List of Layer-7 domain names bound to a LoadBalancer.
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string LoadBalancer ID.
     */
    public $InstanceId;

    /**
     * @var string LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).	
     */
    public $Name;

    /**
     * @var string LoadBalancer type. Valid values:
<li>HTTP: HTTP-specific LoadBalancer. It supports adding HTTP-specific and general origin server groups. It can only be referenced by site acceleration services (such as domain name service and rule engine).</li>
<li>GENERAL: general LoadBalancer. It only supports adding general origin server groups. It can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxy.</li>
     */
    public $Type;

    /**
     * @var HealthChecker Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1).
     */
    public $HealthChecker;

    /**
     * @var string Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li>
     */
    public $SteeringPolicy;

    /**
     * @var string Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
     */
    public $FailoverPolicy;

    /**
     * @var array Origin server group health status.
     */
    public $OriginGroupHealthStatus;

    /**
     * @var string LoadBalancer status. Valid values:
<li>Pending: deploying.</li>
<li>Deleting: deleting.</li>
<li>Running: effective.</li>
     */
    public $Status;

    /**
     * @var array List of Layer-4 proxy instances bound to a LoadBalancer.
     */
    public $L4UsedList;

    /**
     * @var array List of Layer-7 domain names bound to a LoadBalancer.
     */
    public $L7UsedList;

    /**
     * @param string $InstanceId LoadBalancer ID.
     * @param string $Name LoadBalancer name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).	
     * @param string $Type LoadBalancer type. Valid values:
<li>HTTP: HTTP-specific LoadBalancer. It supports adding HTTP-specific and general origin server groups. It can only be referenced by site acceleration services (such as domain name service and rule engine).</li>
<li>GENERAL: general LoadBalancer. It only supports adding general origin server groups. It can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxy.</li>
     * @param HealthChecker $HealthChecker Health check policy. For details, refer to [Health Check Policies](https://intl.cloud.tencent.com/document/product/1552/104228?from_cn_redirect=1).
     * @param string $SteeringPolicy Traffic scheduling policy among origin server groups. Valid values:
<li>Priority: Perform failover according to priority.</li>
     * @param string $FailoverPolicy Request retry policy when access to an origin server fails. For details, refer to [Introduction to Request Retry Strategy](https://intl.cloud.tencent.com/document/product/1552/104227?from_cn_redirect=1). Valid values:
<li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li>
<li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
     * @param array $OriginGroupHealthStatus Origin server group health status.
     * @param string $Status LoadBalancer status. Valid values:
<li>Pending: deploying.</li>
<li>Deleting: deleting.</li>
<li>Running: effective.</li>
     * @param array $L4UsedList List of Layer-4 proxy instances bound to a LoadBalancer.
     * @param array $L7UsedList List of Layer-7 domain names bound to a LoadBalancer.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("OriginGroupHealthStatus",$param) and $param["OriginGroupHealthStatus"] !== null) {
            $this->OriginGroupHealthStatus = [];
            foreach ($param["OriginGroupHealthStatus"] as $key => $value){
                $obj = new OriginGroupHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginGroupHealthStatus, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("L4UsedList",$param) and $param["L4UsedList"] !== null) {
            $this->L4UsedList = $param["L4UsedList"];
        }

        if (array_key_exists("L7UsedList",$param) and $param["L7UsedList"] !== null) {
            $this->L7UsedList = $param["L7UsedList"];
        }
    }
}
