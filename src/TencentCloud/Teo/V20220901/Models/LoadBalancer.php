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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoadBalancer information.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getName() Obtain <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
 * @method void setName(string $Name) Set <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
 * @method string getType() Obtain <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type supports selecting the region to trigger probes, which can significantly reduce probe request volume but has lower sensitivity to origin health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li><li>GENERAL: General type. Supports adding general origin groups only. It can be referenced by site acceleration services (for example, domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li>
 * @method void setType(string $Type) Set <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type supports selecting the region to trigger probes, which can significantly reduce probe request volume but has lower sensitivity to origin health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li><li>GENERAL: General type. Supports adding general origin groups only. It can be referenced by site acceleration services (for example, domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li>
 * @method HealthChecker getHealthChecker() Obtain <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>.</p>
 * @method void setHealthChecker(HealthChecker $HealthChecker) Set <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>.</p>
 * @method string getSteeringPolicy() Obtain <p>Traffic scheduling policy among origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>
 * @method void setSteeringPolicy(string $SteeringPolicy) Set <p>Traffic scheduling policy among origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>
 * @method string getFailoverPolicy() Obtain <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group;</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
 * @method void setFailoverPolicy(string $FailoverPolicy) Set <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group;</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
 * @method array getOriginGroupHealthStatus() Obtain <p>Origin server group health status.</p>
 * @method void setOriginGroupHealthStatus(array $OriginGroupHealthStatus) Set <p>Origin server group health status.</p>
 * @method string getStatus() Obtain <p>Load balancing status. Valid values:</p><li>Pending: deploying;</li><li>Deleting: deleting;</li><li>Running: effective.</li>
 * @method void setStatus(string $Status) Set <p>Load balancing status. Valid values:</p><li>Pending: deploying;</li><li>Deleting: deleting;</li><li>Running: effective.</li>
 * @method array getL4UsedList() Obtain <p>List of L4 proxy instances bound to the load balancing instance.</p>
 * @method void setL4UsedList(array $L4UsedList) Set <p>List of L4 proxy instances bound to the load balancing instance.</p>
 * @method array getL7UsedList() Obtain <p>List of Layer-7 domain names bound to the load balancing instance.</p>
 * @method void setL7UsedList(array $L7UsedList) Set <p>List of Layer-7 domain names bound to the load balancing instance.</p>
 * @method array getReferences() Obtain <p>List of referenced instances of the load balancer.</p>
 * @method void setReferences(array $References) Set <p>List of referenced instances of the load balancer.</p>
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
     */
    public $Name;

    /**
     * @var string <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type supports selecting the region to trigger probes, which can significantly reduce probe request volume but has lower sensitivity to origin health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li><li>GENERAL: General type. Supports adding general origin groups only. It can be referenced by site acceleration services (for example, domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li>
     */
    public $Type;

    /**
     * @var HealthChecker <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>.</p>
     */
    public $HealthChecker;

    /**
     * @var string <p>Traffic scheduling policy among origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>
     */
    public $SteeringPolicy;

    /**
     * @var string <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group;</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
     */
    public $FailoverPolicy;

    /**
     * @var array <p>Origin server group health status.</p>
     */
    public $OriginGroupHealthStatus;

    /**
     * @var string <p>Load balancing status. Valid values:</p><li>Pending: deploying;</li><li>Deleting: deleting;</li><li>Running: effective.</li>
     */
    public $Status;

    /**
     * @var array <p>List of L4 proxy instances bound to the load balancing instance.</p>
     */
    public $L4UsedList;

    /**
     * @var array <p>List of Layer-7 domain names bound to the load balancing instance.</p>
     */
    public $L7UsedList;

    /**
     * @var array <p>List of referenced instances of the load balancer.</p>
     */
    public $References;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Name <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
     * @param string $Type <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type supports selecting the region to trigger probes, which can significantly reduce probe request volume but has lower sensitivity to origin health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin groups. Site acceleration services reference only (for example, domain name service and rule engine). This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li><li>GENERAL: General type. Supports adding general origin groups only. It can be referenced by site acceleration services (for example, domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to trigger probes. The probe request volume is large, but the sensitivity to origin health awareness is higher.</li>
     * @param HealthChecker $HealthChecker <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>.</p>
     * @param string $SteeringPolicy <p>Traffic scheduling policy among origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>
     * @param string $FailoverPolicy <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group;</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>
     * @param array $OriginGroupHealthStatus <p>Origin server group health status.</p>
     * @param string $Status <p>Load balancing status. Valid values:</p><li>Pending: deploying;</li><li>Deleting: deleting;</li><li>Running: effective.</li>
     * @param array $L4UsedList <p>List of L4 proxy instances bound to the load balancing instance.</p>
     * @param array $L7UsedList <p>List of Layer-7 domain names bound to the load balancing instance.</p>
     * @param array $References <p>List of referenced instances of the load balancer.</p>
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

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new OriginGroupReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
