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

namespace TencentCloud\Apm\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apm\V20210622\Models as Models;

/**
 * @method Models\CreateApmInstanceResponse CreateApmInstance(Models\CreateApmInstanceRequest $req) This API is used to create a business purchase in the APM business system.
 * @method Models\CreateApmPrometheusRuleResponse CreateApmPrometheusRule(Models\CreateApmPrometheusRuleRequest $req) This API is used to create metric match rules between apm Business System and Prometheus Instance.
 * @method Models\CreateApmSampleConfigResponse CreateApmSampleConfig(Models\CreateApmSampleConfigRequest $req) Create sampling configurations
 * @method Models\CreateProfileTaskResponse CreateProfileTask(Models\CreateProfileTaskRequest $req) This API is used to create an event task.
 * @method Models\DeleteApmSampleConfigResponse DeleteApmSampleConfig(Models\DeleteApmSampleConfigRequest $req) Delete sampling configurations
 * @method Models\DescribeApmAgentResponse DescribeApmAgent(Models\DescribeApmAgentRequest $req) Obtaining APM Access Point.
 * @method Models\DescribeApmAllVulCountResponse DescribeApmAllVulCount(Models\DescribeApmAllVulCountRequest $req) Query all vulnerability information of the user
 * @method Models\DescribeApmApplicationConfigResponse DescribeApmApplicationConfig(Models\DescribeApmApplicationConfigRequest $req) This API is used to query application configuration.
 * @method Models\DescribeApmAssociationResponse DescribeApmAssociation(Models\DescribeApmAssociationRequest $req) This API is used to query the relationship between apm Business System and other product.
 * @method Models\DescribeApmInstancesResponse DescribeApmInstances(Models\DescribeApmInstancesRequest $req) This API is used to obtain the list of APM business systems.
 * @method Models\DescribeApmPrometheusRuleResponse DescribeApmPrometheusRule(Models\DescribeApmPrometheusRuleRequest $req) This API is used to query the match rule for metrics between apm Business System and Prometheus Instance.
 * @method Models\DescribeApmSQLInjectionDetailResponse DescribeApmSQLInjectionDetail(Models\DescribeApmSQLInjectionDetailRequest $req) Query SQL injection details
 * @method Models\DescribeApmSampleConfigResponse DescribeApmSampleConfig(Models\DescribeApmSampleConfigRequest $req) Query sampling configuration
 * @method Models\DescribeApmServiceMetricResponse DescribeApmServiceMetric(Models\DescribeApmServiceMetricRequest $req) This API is used to obtain the list of APM application metrics.
 * @method Models\DescribeApmVulnerabilityCountResponse DescribeApmVulnerabilityCount(Models\DescribeApmVulnerabilityCountRequest $req) Query vulnerability metrics
 * @method Models\DescribeApmVulnerabilityDetailResponse DescribeApmVulnerabilityDetail(Models\DescribeApmVulnerabilityDetailRequest $req) Query vulnerability details.
 * @method Models\DescribeGeneralApmApplicationConfigResponse DescribeGeneralApmApplicationConfig(Models\DescribeGeneralApmApplicationConfigRequest $req) This API is used to query the application configuration information.
 * @method Models\DescribeGeneralMetricDataResponse DescribeGeneralMetricData(Models\DescribeGeneralMetricDataRequest $req) General interface to obtain metric data. Submit request parameters as needed and receive the corresponding metric data.
API call frequency limit: 20 requests/second, 1,200 requests/minute. Data point limit per single request: up to 1,440 data points.

General interface to obtain metric data usage: This API is used to query metric data flexibly. The query method of this API is similar to using the following SQL statement: SELECT {Metrics} FROM {ViewName} WHERE {Filters} GROUP BY {GroupBy}. Before initiating request, please confirm the following key parameters:
1. View (ViewName)
Determine the domain of the queried data.
For example: service_metric (service monitoring view), db_metric (database view). For views supported by APM, see metrics view (https://www.tencentcloud.com/document/product/248/101681?from_cn_redirect=1#069b06a9-2593-49db-b694-dea4200f3b19).

2. Metrics
Used to specify one or more metric items in the returned result.
For example: request_count (request count), duration_avg (avg duration), error_rate (error rate). For supported metrics about APM, see [APM Protocol Standards](https://www.tencentcloud.com/document/product/248/101681?from_cn_redirect=1). Each view (ViewName) supports an exclusive metric set.
3. Filters
Support filter criteria in the form of one or multiple Key-Value pairs.
For example: Only query a certain specific service with service.name = "order-service". Common dimensional and each view (ViewName) support exclusive dimensions, which can be used as keys in filter conditions. For details, refer to the APM metrics protocol standard (https://www.tencentcloud.com/document/product/248/101681?from_cn_redirect=1).

4. GroupBy (aggregation)
Support one or more aggregate dimensions, equivalent to SQL GROUP BY.
For example: Group by API name operation to view the performance of each API. Common dimensional and each view (ViewName) support exclusive dimensional, which can be used as aggregation dimension. For details, see [APM protocol standards](https://www.tencentcloud.com/document/product/248/101681?from_cn_redirect=1).
5. Granularity (Period) 
This parameter determines whether time slice aggregation is required.
-Period = 1: Time series mode: In the returned result, aggregation is performed by time slice. The time series (TimeSerial) and data sequence (DataSerial) have a one-to-one correspondence, representing aggregation results for specific time slices. Time series mode is mainly used to show time trend charts.
-Period = 0: Summarize mode. In the returned result, the data sequence (DataSerial) only contains a unique value, representing the aggregated data for the entire time interval.
 * @method Models\DescribeGeneralOTSpanListResponse DescribeGeneralOTSpanList(Models\DescribeGeneralOTSpanListRequest $req) General Query OpenTelemetry Call Chain List.
 * @method Models\DescribeGeneralSpanListResponse DescribeGeneralSpanList(Models\DescribeGeneralSpanListRequest $req) General Query Call Chain List.
 * @method Models\DescribeMetricRecordsResponse DescribeMetricRecords(Models\DescribeMetricRecordsRequest $req) This API is used to query metric list. To query metrics, it is recommended to use the DescribeGeneralMetricData API.
 * @method Models\DescribeOPRAllVulCountResponse DescribeOPRAllVulCount(Models\DescribeOPRAllVulCountRequest $req) Query all vulnerability information of the user
 * @method Models\DescribeServiceOverviewResponse DescribeServiceOverview(Models\DescribeServiceOverviewRequest $req) This API is used to pull application overview data.
 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) This API is used to query dimensional data by dimension name and filter condition.
 * @method Models\DescribeTopologyNewResponse DescribeTopologyNew(Models\DescribeTopologyNewRequest $req) This API is used to query the service topology diagram according to the application name.
 * @method Models\ModifyApmApplicationConfigResponse ModifyApmApplicationConfig(Models\ModifyApmApplicationConfigRequest $req) Modify application configurations
 * @method Models\ModifyApmAssociationResponse ModifyApmAssociation(Models\ModifyApmAssociationRequest $req) This API is used to modify the relationship between the apm Business System and other products, including deletion.
 * @method Models\ModifyApmInstanceResponse ModifyApmInstance(Models\ModifyApmInstanceRequest $req) This API is used to modify the APM business system.
 * @method Models\ModifyApmPrometheusRuleResponse ModifyApmPrometheusRule(Models\ModifyApmPrometheusRuleRequest $req) This API is used to modify metric match rules between apm Business System and Prometheus Instance.
 * @method Models\ModifyApmSampleConfigResponse ModifyApmSampleConfig(Models\ModifyApmSampleConfigRequest $req) Modify sampling configurations
 * @method Models\ModifyApmServiceResponse ModifyApmService(Models\ModifyApmServiceRequest $req) This API is used to edit information about applications of APM.
 * @method Models\ModifyGeneralApmApplicationConfigResponse ModifyGeneralApmApplicationConfig(Models\ModifyGeneralApmApplicationConfigRequest $req) OpenAPI available for external use. Customers can flexibly specify the fields to be modified, and then add the list of services to be modified.
 * @method Models\TerminateApmInstanceResponse TerminateApmInstance(Models\TerminateApmInstanceRequest $req) Termination of APM business system.
 */

class ApmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apm.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apm";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("apm")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
