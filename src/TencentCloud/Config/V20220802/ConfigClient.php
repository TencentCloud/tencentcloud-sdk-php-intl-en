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

namespace TencentCloud\Config\V20220802;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Config\V20220802\Models as Models;

/**
 * @method Models\AddAggregateCompliancePackResponse AddAggregateCompliancePack(Models\AddAggregateCompliancePackRequest $req) This API is used to create compliance packages for account groups.
 * @method Models\AddAggregateConfigRuleResponse AddAggregateConfigRule(Models\AddAggregateConfigRuleRequest $req) This API is used to create rules for account groups.
 * @method Models\AddAlarmPolicyResponse AddAlarmPolicy(Models\AddAlarmPolicyRequest $req) This API is used to add alarm monitoring rules.
 * @method Models\AddCompliancePackResponse AddCompliancePack(Models\AddCompliancePackRequest $req) This API is used to create a compliance package.
 * @method Models\AddConfigRuleResponse AddConfigRule(Models\AddConfigRuleRequest $req) This API is used to create rules.
 * @method Models\CloseAggregateConfigRuleResponse CloseAggregateConfigRule(Models\CloseAggregateConfigRuleRequest $req) This API is used to close rules for account groups.
 * @method Models\CloseConfigRecorderResponse CloseConfigRecorder(Models\CloseConfigRecorderRequest $req) This API is used to manage resource monitoring - disabling monitoring.
 * @method Models\CloseConfigRuleResponse CloseConfigRule(Models\CloseConfigRuleRequest $req) Close rules
 * @method Models\CreateAggregatorResponse CreateAggregator(Models\CreateAggregatorRequest $req) This API is used to create account groups.
 * @method Models\CreateRemediationResponse CreateRemediation(Models\CreateRemediationRequest $req) This API is used to add rule remediation settings.
 * @method Models\DeleteAggregateCompliancePackResponse DeleteAggregateCompliancePack(Models\DeleteAggregateCompliancePackRequest $req) This API is used to delete compliance packages for account groups.
 * @method Models\DeleteAggregateConfigRuleResponse DeleteAggregateConfigRule(Models\DeleteAggregateConfigRuleRequest $req) This API is used to delete rules for account groups.
 * @method Models\DeleteAggregatorsResponse DeleteAggregators(Models\DeleteAggregatorsRequest $req) This API is used to delete account groups.
 * @method Models\DeleteAlarmPolicyResponse DeleteAlarmPolicy(Models\DeleteAlarmPolicyRequest $req) Deletes alarm rules
 * @method Models\DeleteCompliancePackResponse DeleteCompliancePack(Models\DeleteCompliancePackRequest $req) This API is used to delete compliance packages.
 * @method Models\DeleteConfigRuleResponse DeleteConfigRule(Models\DeleteConfigRuleRequest $req) Delete a rule
 * @method Models\DeleteRemediationsResponse DeleteRemediations(Models\DeleteRemediationsRequest $req) This API is used to delete rule remediation settings.
 * @method Models\DescribeAggregateCompliancePackResponse DescribeAggregateCompliancePack(Models\DescribeAggregateCompliancePackRequest $req) This API is used to query compliance package details for account groups.
 * @method Models\DescribeAggregateConfigDeliverResponse DescribeAggregateConfigDeliver(Models\DescribeAggregateConfigDeliverRequest $req) This API is used to query delivery setting details for account groups.
 * @method Models\DescribeAggregateConfigRuleResponse DescribeAggregateConfigRule(Models\DescribeAggregateConfigRuleRequest $req) This API is used to query rule details for account groups.
 * @method Models\DescribeAggregateDiscoveredResourceResponse DescribeAggregateDiscoveredResource(Models\DescribeAggregateDiscoveredResourceRequest $req) This API is used to query resource details for account groups.
 * @method Models\DescribeAggregatorResponse DescribeAggregator(Models\DescribeAggregatorRequest $req) This example shows you how to query account group details.
 * @method Models\DescribeCompliancePackResponse DescribeCompliancePack(Models\DescribeCompliancePackRequest $req) This API is used to query compliance package details.
 * @method Models\DescribeConfigDeliverResponse DescribeConfigDeliver(Models\DescribeConfigDeliverRequest $req) This API is used to query delivery setting details.
 * @method Models\DescribeConfigRecorderResponse DescribeConfigRecorder(Models\DescribeConfigRecorderRequest $req) This API is used to query monitoring details.
 * @method Models\DescribeConfigRuleResponse DescribeConfigRule(Models\DescribeConfigRuleRequest $req) This example shows you how to query rule details.
 * @method Models\DescribeDiscoveredResourceResponse DescribeDiscoveredResource(Models\DescribeDiscoveredResourceRequest $req) Resource details.
 * @method Models\DescribeSystemCompliancePackResponse DescribeSystemCompliancePack(Models\DescribeSystemCompliancePackRequest $req) This API is used to query the system compliance package details.
 * @method Models\DescribeSystemRuleResponse DescribeSystemRule(Models\DescribeSystemRuleRequest $req) This API is used to preset rule details.
 * @method Models\DetachAggregateConfigRuleToCompliancePackResponse DetachAggregateConfigRuleToCompliancePack(Models\DetachAggregateConfigRuleToCompliancePackRequest $req) This API is used to remove rules from compliance packages for account groups.
 * @method Models\DetachConfigRuleToCompliancePackResponse DetachConfigRuleToCompliancePack(Models\DetachConfigRuleToCompliancePackRequest $req) This API is used to remove rules for a compliance package.
 * @method Models\ListAggregateCompliancePacksResponse ListAggregateCompliancePacks(Models\ListAggregateCompliancePacksRequest $req) This API is used to query the list of compliance packages for account groups.
 * @method Models\ListAggregateConfigRuleEvaluationResultsResponse ListAggregateConfigRuleEvaluationResults(Models\ListAggregateConfigRuleEvaluationResultsRequest $req) This API is used to query evaluation results from the rule dimension for account groups (the list of evaluation results for resources under a specific rule).
 * @method Models\ListAggregateConfigRuleResourceEvaluationResultsResponse ListAggregateConfigRuleResourceEvaluationResults(Models\ListAggregateConfigRuleResourceEvaluationResultsRequest $req) This API is used to list resource evaluation results of compliance rules in account groups.
 * @method Models\ListAggregateConfigRulesResponse ListAggregateConfigRules(Models\ListAggregateConfigRulesRequest $req) This API is used to query the list of rules for account groups.
 * @method Models\ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResources(Models\ListAggregateDiscoveredResourcesRequest $req) This API is used to query the list of resources for account groups.
 * @method Models\ListAggregatorsResponse ListAggregators(Models\ListAggregatorsRequest $req) Account group list.
 * @method Models\ListAlarmPolicyResponse ListAlarmPolicy(Models\ListAlarmPolicyRequest $req) Alarm rule list
 * @method Models\ListCompliancePacksResponse ListCompliancePacks(Models\ListCompliancePacksRequest $req) This API is used to query the list of compliance packages.
 * @method Models\ListConfigRuleEvaluationResultsResponse ListConfigRuleEvaluationResults(Models\ListConfigRuleEvaluationResultsRequest $req)  This API is used to obtain evaluation results from the rule dimension (the list of evaluation results for resources under a specific rule).
 * @method Models\ListConfigRuleResourceEvaluationResultsResponse ListConfigRuleResourceEvaluationResults(Models\ListConfigRuleResourceEvaluationResultsRequest $req) This API is used to query the list of resource evaluation results under configuration rules.
 * @method Models\ListConfigRulesResponse ListConfigRules(Models\ListConfigRulesRequest $req) This example shows you how to query the rule list.
 * @method Models\ListDiscoveredResourcesResponse ListDiscoveredResources(Models\ListDiscoveredResourcesRequest $req) Obtaining the Resource List
 * @method Models\ListRemediationExecutionsResponse ListRemediationExecutions(Models\ListRemediationExecutionsRequest $req) Correction records.
 * @method Models\ListRemediationsResponse ListRemediations(Models\ListRemediationsRequest $req) This API is used to list remediation settings.
 * @method Models\ListResourceTypesResponse ListResourceTypes(Models\ListResourceTypesRequest $req) This API is used to query the resource type list.
 * @method Models\ListSystemCompliancePacksResponse ListSystemCompliancePacks(Models\ListSystemCompliancePacksRequest $req) This API is used to query the list of system compliance packages.
 * @method Models\ListSystemRulesResponse ListSystemRules(Models\ListSystemRulesRequest $req) This API is used to query the preset rule list.
 * @method Models\OpenAggregateConfigRuleResponse OpenAggregateConfigRule(Models\OpenAggregateConfigRuleRequest $req) This API is used to enable a rule for an account group.
 * @method Models\OpenConfigRecorderResponse OpenConfigRecorder(Models\OpenConfigRecorderRequest $req) This API is used to manage resource monitoring - enabling monitoring.
 * @method Models\OpenConfigRuleResponse OpenConfigRule(Models\OpenConfigRuleRequest $req) Enable rules
 * @method Models\PutEvaluationsResponse PutEvaluations(Models\PutEvaluationsRequest $req) Reporting Evaluation Results Under Custom Rules
 * @method Models\StartAggregateConfigRuleEvaluationResponse StartAggregateConfigRuleEvaluation(Models\StartAggregateConfigRuleEvaluationRequest $req) This API is used to trigger evaluation for account groups.
 * @method Models\StartConfigRuleEvaluationResponse StartConfigRuleEvaluation(Models\StartConfigRuleEvaluationRequest $req) This API is used to trigger evaluations.
 * @method Models\StartRemediationResponse StartRemediation(Models\StartRemediationRequest $req) This API is used to manually execute rule repairs.
 * @method Models\UpdateAggregateCompliancePackResponse UpdateAggregateCompliancePack(Models\UpdateAggregateCompliancePackRequest $req) This API is used to edit conformance packages for account groups.
 * @method Models\UpdateAggregateCompliancePackStatusResponse UpdateAggregateCompliancePackStatus(Models\UpdateAggregateCompliancePackStatusRequest $req) This API is used to enable or disable compliance packages for account groups.
 * @method Models\UpdateAggregateConfigDeliverResponse UpdateAggregateConfigDeliver(Models\UpdateAggregateConfigDeliverRequest $req) This API is used to edit delivery settings for account groups.
 * @method Models\UpdateAggregateConfigRuleResponse UpdateAggregateConfigRule(Models\UpdateAggregateConfigRuleRequest $req) This API is used to edit rules for account groups.
 * @method Models\UpdateAggregatorResponse UpdateAggregator(Models\UpdateAggregatorRequest $req) Edit an account group.
 * @method Models\UpdateAlarmPolicyResponse UpdateAlarmPolicy(Models\UpdateAlarmPolicyRequest $req) Updating an Alarm Rule
 * @method Models\UpdateCompliancePackResponse UpdateCompliancePack(Models\UpdateCompliancePackRequest $req) This API is used to edit a conformance pack.
 * @method Models\UpdateCompliancePackStatusResponse UpdateCompliancePackStatus(Models\UpdateCompliancePackStatusRequest $req) This API is used to enable or disable compliance packages.
 * @method Models\UpdateConfigDeliverResponse UpdateConfigDeliver(Models\UpdateConfigDeliverRequest $req) This API is used to edit shipping settings.
 * @method Models\UpdateConfigRecorderResponse UpdateConfigRecorder(Models\UpdateConfigRecorderRequest $req) Edit the monitoring scope.
 * @method Models\UpdateConfigRuleResponse UpdateConfigRule(Models\UpdateConfigRuleRequest $req) This API is used to edit a rule.
 * @method Models\UpdateRemediationResponse UpdateRemediation(Models\UpdateRemediationRequest $req) This API is used to add alarm monitoring rules.
 */

class ConfigClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "config.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "config";

    /**
     * @var string
     */
    protected $version = "2022-08-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("config")."\\"."V20220802\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
