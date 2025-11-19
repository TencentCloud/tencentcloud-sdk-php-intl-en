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
 * @method Models\DescribeApmApplicationConfigResponse DescribeApmApplicationConfig(Models\DescribeApmApplicationConfigRequest $req) This API is used to query application configuration.
 * @method Models\DescribeApmAssociationResponse DescribeApmAssociation(Models\DescribeApmAssociationRequest $req) This API is used to query the relationship between apm Business System and other product.
 * @method Models\DescribeApmInstancesResponse DescribeApmInstances(Models\DescribeApmInstancesRequest $req) This API is used to obtain the list of APM business systems.
 * @method Models\DescribeApmPrometheusRuleResponse DescribeApmPrometheusRule(Models\DescribeApmPrometheusRuleRequest $req) This API is used to query the match rule for metrics between apm Business System and Prometheus Instance.
 * @method Models\DescribeApmSampleConfigResponse DescribeApmSampleConfig(Models\DescribeApmSampleConfigRequest $req) Query sampling configuration
 * @method Models\DescribeApmServiceMetricResponse DescribeApmServiceMetric(Models\DescribeApmServiceMetricRequest $req) This API is used to obtain the list of APM application metrics.
 * @method Models\DescribeGeneralApmApplicationConfigResponse DescribeGeneralApmApplicationConfig(Models\DescribeGeneralApmApplicationConfigRequest $req) This API is used to query the application configuration information.
 * @method Models\DescribeGeneralMetricDataResponse DescribeGeneralMetricData(Models\DescribeGeneralMetricDataRequest $req) This API is a general API used to obtain metric data. Users submit request parameters as needed and receive the corresponding metric data.
The API call frequency is limited to 20 requests per second and 1200 requests per minute. The number of data points per request is limited to 1440.
 * @method Models\DescribeGeneralOTSpanListResponse DescribeGeneralOTSpanList(Models\DescribeGeneralOTSpanListRequest $req) General Query OpenTelemetry Call Chain List.
 * @method Models\DescribeGeneralSpanListResponse DescribeGeneralSpanList(Models\DescribeGeneralSpanListRequest $req) General Query Call Chain List.
 * @method Models\DescribeMetricRecordsResponse DescribeMetricRecords(Models\DescribeMetricRecordsRequest $req) This API is used to query metric list. To query metrics, it is recommended to use the DescribeGeneralMetricData API.
 * @method Models\DescribeServiceOverviewResponse DescribeServiceOverview(Models\DescribeServiceOverviewRequest $req) This API is used to pull application overview data.
 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) This API is used to query dimensional data by dimension name and filter condition.
 * @method Models\ModifyApmApplicationConfigResponse ModifyApmApplicationConfig(Models\ModifyApmApplicationConfigRequest $req) Modify application configurations
 * @method Models\ModifyApmAssociationResponse ModifyApmAssociation(Models\ModifyApmAssociationRequest $req) This API is used to modify the relationship between the apm Business System and other products, including deletion.
 * @method Models\ModifyApmInstanceResponse ModifyApmInstance(Models\ModifyApmInstanceRequest $req) This API is used to modify the APM business system.
 * @method Models\ModifyApmPrometheusRuleResponse ModifyApmPrometheusRule(Models\ModifyApmPrometheusRuleRequest $req) This API is used to modify metric match rules between apm Business System and Prometheus Instance.
 * @method Models\ModifyApmSampleConfigResponse ModifyApmSampleConfig(Models\ModifyApmSampleConfigRequest $req) Modify sampling configurations
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
