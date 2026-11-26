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
 * CreateLoadBalancer request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getName() Obtain <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
 * @method void setName(string $Name) Set <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
 * @method string getType() Obtain <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type supports selecting the region to initiate probes, which can significantly reduce probe request volume but has lower sensitivity to origin server health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li><li>GENERAL: General type. Supports adding general origin server groups only. Can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li>
 * @method void setType(string $Type) Set <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type supports selecting the region to initiate probes, which can significantly reduce probe request volume but has lower sensitivity to origin server health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li><li>GENERAL: General type. Supports adding general origin server groups only. Can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li>
 * @method array getOriginGroups() Obtain <p>List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in <a href="https://www.tencentcloud.com/document/product/1552/104223?from_cn_redirect=1">Quickly Create Load Balancers</a>.</p>
 * @method void setOriginGroups(array $OriginGroups) Set <p>List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in <a href="https://www.tencentcloud.com/document/product/1552/104223?from_cn_redirect=1">Quickly Create Load Balancers</a>.</p>
 * @method HealthChecker getHealthChecker() Obtain <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>. If left empty, health check is disabled by default.</p>
 * @method void setHealthChecker(HealthChecker $HealthChecker) Set <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>. If left empty, health check is disabled by default.</p>
 * @method string getSteeringPolicy() Obtain <p>Traffic scheduling policy between origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>Default value: Pritory.
 * @method void setSteeringPolicy(string $SteeringPolicy) Set <p>Traffic scheduling policy between origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>Default value: Pritory.
 * @method string getFailoverPolicy() Obtain <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>The default value is OtherRecordInOriginGroup.
 * @method void setFailoverPolicy(string $FailoverPolicy) Set <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>The default value is OtherRecordInOriginGroup.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
     */
    public $Name;

    /**
     * @var string <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type supports selecting the region to initiate probes, which can significantly reduce probe request volume but has lower sensitivity to origin server health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li><li>GENERAL: General type. Supports adding general origin server groups only. Can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li>
     */
    public $Type;

    /**
     * @var array <p>List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in <a href="https://www.tencentcloud.com/document/product/1552/104223?from_cn_redirect=1">Quickly Create Load Balancers</a>.</p>
     */
    public $OriginGroups;

    /**
     * @var HealthChecker <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>. If left empty, health check is disabled by default.</p>
     */
    public $HealthChecker;

    /**
     * @var string <p>Traffic scheduling policy between origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>Default value: Pritory.
     */
    public $SteeringPolicy;

    /**
     * @var string <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>The default value is OtherRecordInOriginGroup.
     */
    public $FailoverPolicy;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Name <p>Instance name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).</p>
     * @param string $Type <p>Instance type. Valid values:</p><li>HTTP_V2: HTTP dedicated (V2). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type supports selecting the region to initiate probes, which can significantly reduce probe request volume but has lower sensitivity to origin server health awareness.</li><li>HTTP: HTTP dedicated (V1). Supports adding HTTP dedicated and general origin server groups. Site acceleration services reference only (such as domain name service and rule engine). This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li><li>GENERAL: General type. Supports adding general origin server groups only. Can be referenced by site acceleration services (such as domain name service and rule engine) and Layer-4 proxies. This instance type does not support selecting the region to initiate probes. The probe request volume is large but has higher sensitivity to origin server health awareness.</li>
     * @param array $OriginGroups <p>List of origin server groups and their corresponding disaster recovery scheduling priorities. For details, refer to Sample Scenario in <a href="https://www.tencentcloud.com/document/product/1552/104223?from_cn_redirect=1">Quickly Create Load Balancers</a>.</p>
     * @param HealthChecker $HealthChecker <p>Health check policy. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policies</a>. If left empty, health check is disabled by default.</p>
     * @param string $SteeringPolicy <p>Traffic scheduling policy between origin server groups. Valid values:</p><li>Pritory: Perform failover according to priority.</li>Default value: Pritory.
     * @param string $FailoverPolicy <p>Request retry policy when access to an origin server fails. For details, refer to <a href="https://www.tencentcloud.com/document/product/1552/104227?from_cn_redirect=1">Introduction to Request Retry Strategy</a>. Valid values:</p><li>OtherOriginGroup: After a single request fails, retry with another origin server within the next lower priority origin server group.</li><li>OtherRecordInOriginGroup: After a single request fails, retry with another origin server within the same origin server group.</li>The default value is OtherRecordInOriginGroup.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
