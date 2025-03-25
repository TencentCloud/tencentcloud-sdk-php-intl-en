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

namespace TencentCloud\Tcr\V20190924;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcr\V20190924\Models as Models;

/**
 * @method Models\CheckInstanceResponse CheckInstance(Models\CheckInstanceRequest $req) This API is used to verify the information of the Enterprise Edition instance.
 * @method Models\CheckInstanceNameResponse CheckInstanceName(Models\CheckInstanceNameRequest $req) This API is used to check whether the name of the instance to be created meets the specifications.
 * @method Models\CreateImageAccelerationServiceResponse CreateImageAccelerationService(Models\CreateImageAccelerationServiceRequest $req) This API is used to create an image acceleration service.
 * @method Models\CreateImmutableTagRulesResponse CreateImmutableTagRules(Models\CreateImmutableTagRulesRequest $req) This API is used to create the tag immutability rule.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an instance.
 * @method Models\CreateInstanceCustomizedDomainResponse CreateInstanceCustomizedDomain(Models\CreateInstanceCustomizedDomainRequest $req) This API is used to create a custom domain name.
 * @method Models\CreateInstanceTokenResponse CreateInstanceToken(Models\CreateInstanceTokenRequest $req) This API is used to create a temporary or long-term instance access credential.
 * @method Models\CreateMultipleSecurityPolicyResponse CreateMultipleSecurityPolicy(Models\CreateMultipleSecurityPolicyRequest $req) This API is used to create multiple public network access allowlist policies of the TCR instance.
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) This API is used to create a namespace in an Enterprise Edition instance.
 * @method Models\CreateReplicationInstanceResponse CreateReplicationInstance(Models\CreateReplicationInstanceRequest $req) This API is used to create a replication instance.
 * @method Models\CreateRepositoryResponse CreateRepository(Models\CreateRepositoryRequest $req) This API is used to create an image repository in an Enterprise Edition instance.
 * @method Models\CreateSecurityPolicyResponse CreateSecurityPolicy(Models\CreateSecurityPolicyRequest $req) This API is used to create a public network access allowlist policy for an instance.
 * @method Models\CreateServiceAccountResponse CreateServiceAccount(Models\CreateServiceAccountRequest $req) This API is used to create a service level account.
 * @method Models\CreateSignatureResponse CreateSignature(Models\CreateSignatureRequest $req) This API is used to create a signature for an image tag.
 * @method Models\CreateSignaturePolicyResponse CreateSignaturePolicy(Models\CreateSignaturePolicyRequest $req) This API is used to create an image signature policy.
 * @method Models\CreateTagRetentionExecutionResponse CreateTagRetentionExecution(Models\CreateTagRetentionExecutionRequest $req) This API is used to execute tag retention manually.
 * @method Models\CreateTagRetentionRuleResponse CreateTagRetentionRule(Models\CreateTagRetentionRuleRequest $req) This API is used to create a tag retention rule.
 * @method Models\CreateWebhookTriggerResponse CreateWebhookTrigger(Models\CreateWebhookTriggerRequest $req) This API is used to create a trigger.
 * @method Models\DeleteImageResponse DeleteImage(Models\DeleteImageRequest $req) This API is used to delete the specified image.
 * @method Models\DeleteImageAccelerateServiceResponse DeleteImageAccelerateService(Models\DeleteImageAccelerateServiceRequest $req) This API is used to delete an image acceleration service.
 * @method Models\DeleteImmutableTagRulesResponse DeleteImmutableTagRules(Models\DeleteImmutableTagRulesRequest $req)  This API is used to delete the tag immutability rule.
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) This API is used to delete a TCR Enterprise Edition instance.
 * @method Models\DeleteInstanceCustomizedDomainResponse DeleteInstanceCustomizedDomain(Models\DeleteInstanceCustomizedDomainRequest $req) This API is used to delete a custom domain name.
 * @method Models\DeleteInstanceTokenResponse DeleteInstanceToken(Models\DeleteInstanceTokenRequest $req) This API is used to delete a long-term access credential.
 * @method Models\DeleteMultipleSecurityPolicyResponse DeleteMultipleSecurityPolicy(Models\DeleteMultipleSecurityPolicyRequest $req) This API is used to delete multiple public network access allowlist policies of the instance.
 * @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) This API is used to delete a namespace.
 * @method Models\DeleteReplicationInstanceResponse DeleteReplicationInstance(Models\DeleteReplicationInstanceRequest $req) This API is used to delete a replica instance.
 * @method Models\DeleteRepositoryResponse DeleteRepository(Models\DeleteRepositoryRequest $req) This API is used to delete an image repository.
 * @method Models\DeleteRepositoryTagsResponse DeleteRepositoryTags(Models\DeleteRepositoryTagsRequest $req) This API is used to batch delete repository tags in an Enterprise Edition instance.
 * @method Models\DeleteSecurityPolicyResponse DeleteSecurityPolicy(Models\DeleteSecurityPolicyRequest $req) This API is used to delete a public network access allow policy.

Note: When both `PolicyIndex` and `CidrBlock` are specified, `CidrBlock` takes the higher priority
 * @method Models\DeleteServiceAccountResponse DeleteServiceAccount(Models\DeleteServiceAccountRequest $req) This API is used to delete a service account.
 * @method Models\DeleteSignaturePolicyResponse DeleteSignaturePolicy(Models\DeleteSignaturePolicyRequest $req) This API is used to delete a namespace signing policy.
 * @method Models\DeleteTagRetentionRuleResponse DeleteTagRetentionRule(Models\DeleteTagRetentionRuleRequest $req) This API is used to delete a tag retention rule.
 * @method Models\DeleteWebhookTriggerResponse DeleteWebhookTrigger(Models\DeleteWebhookTriggerRequest $req) This API is used to delete a trigger.
 * @method Models\DescribeChartDownloadInfoResponse DescribeChartDownloadInfo(Models\DescribeChartDownloadInfoRequest $req) This API is used to return the chart download information in an Enterprise Edition instance.
 * @method Models\DescribeExternalEndpointStatusResponse DescribeExternalEndpointStatus(Models\DescribeExternalEndpointStatusRequest $req) This API is used to query the public network access entry status of an instance.
 * @method Models\DescribeGCJobsResponse DescribeGCJobs(Models\DescribeGCJobsRequest $req) This API is used to query the last ten garbage collection (GC) records.
 * @method Models\DescribeImageAccelerateServiceResponse DescribeImageAccelerateService(Models\DescribeImageAccelerateServiceRequest $req) This API is used to query the status of an image acceleration service.
 * @method Models\DescribeImageManifestsResponse DescribeImageManifests(Models\DescribeImageManifestsRequest $req) This API is used to query the manifest information of a container image.
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) This API is used to query the list of image tags or the information of the specified container image.
 * @method Models\DescribeImmutableTagRulesResponse DescribeImmutableTagRules(Models\DescribeImmutableTagRulesRequest $req) This API is used to list the tag immutability rule.
 * @method Models\DescribeInstanceAllNamespacesResponse DescribeInstanceAllNamespaces(Models\DescribeInstanceAllNamespacesRequest $req) This API is used to query the list of all namespaces in an instance.
 * @method Models\DescribeInstanceCustomizedDomainResponse DescribeInstanceCustomizedDomain(Models\DescribeInstanceCustomizedDomainRequest $req) This API is used to query the list of custom domain names of an instance.
 * @method Models\DescribeInstanceStatusResponse DescribeInstanceStatus(Models\DescribeInstanceStatusRequest $req) This API is used to query the current status and process information of an instance.
 * @method Models\DescribeInstanceTokenResponse DescribeInstanceToken(Models\DescribeInstanceTokenRequest $req) This API is used to query the information of long-term access credentials.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the instance information.
 * @method Models\DescribeInternalEndpointsResponse DescribeInternalEndpoints(Models\DescribeInternalEndpointsRequest $req) This API is used to query the VPC URLs for private network access to an instance.
 * @method Models\DescribeNamespacesResponse DescribeNamespaces(Models\DescribeNamespacesRequest $req) This API is used to query the namespace list or the information of the specified namespace.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to get the available regions in TCR.
 * @method Models\DescribeReplicationInstanceCreateTasksResponse DescribeReplicationInstanceCreateTasks(Models\DescribeReplicationInstanceCreateTasksRequest $req) This API is used to query the task status of creating a replication instance.
 * @method Models\DescribeReplicationInstanceSyncStatusResponse DescribeReplicationInstanceSyncStatus(Models\DescribeReplicationInstanceSyncStatusRequest $req) This API is used to query the synchronization status of a replication instance.
 * @method Models\DescribeReplicationInstancesResponse DescribeReplicationInstances(Models\DescribeReplicationInstancesRequest $req) This API is used to query the list of replication instances.
 * @method Models\DescribeRepositoriesResponse DescribeRepositories(Models\DescribeRepositoriesRequest $req) This API is used to query the image repository list or the information of the specified image repository.
 * @method Models\DescribeSecurityPoliciesResponse DescribeSecurityPolicies(Models\DescribeSecurityPoliciesRequest $req) This API is used to query the public network access allowlist policies of an instance.
 * @method Models\DescribeServiceAccountsResponse DescribeServiceAccounts(Models\DescribeServiceAccountsRequest $req) This API is used to query service accounts.
 * @method Models\DescribeTagRetentionExecutionResponse DescribeTagRetentionExecution(Models\DescribeTagRetentionExecutionRequest $req) This API is used to query tag retention execution records.
 * @method Models\DescribeTagRetentionExecutionTaskResponse DescribeTagRetentionExecutionTask(Models\DescribeTagRetentionExecutionTaskRequest $req) This API is used to query tag retention execution tasks.
 * @method Models\DescribeTagRetentionRulesResponse DescribeTagRetentionRules(Models\DescribeTagRetentionRulesRequest $req) This API is used to query tag retention rules.
 * @method Models\DescribeWebhookTriggerResponse DescribeWebhookTrigger(Models\DescribeWebhookTriggerRequest $req) This API is used to query triggers.
 * @method Models\DescribeWebhookTriggerLogResponse DescribeWebhookTriggerLog(Models\DescribeWebhookTriggerLogRequest $req) This API is used to get trigger logs.
 * @method Models\DownloadHelmChartResponse DownloadHelmChart(Models\DownloadHelmChartRequest $req) This API is used to download a Helm chart in TCR.
 * @method Models\DuplicateImageResponse DuplicateImage(Models\DuplicateImageRequest $req) This API is used to duplicate the Enterprise Edition repository image version.
 * @method Models\ManageExternalEndpointResponse ManageExternalEndpoint(Models\ManageExternalEndpointRequest $req) This API is used to manage the public network access of an instance.
 * @method Models\ManageInternalEndpointResponse ManageInternalEndpoint(Models\ManageInternalEndpointRequest $req) This API is used to manage VPC URLs for private network access to an instance.
 * @method Models\ManageReplicationResponse ManageReplication(Models\ManageReplicationRequest $req) This API is used to manage the instance synchronization rule.
 * @method Models\ModifyImmutableTagRulesResponse ModifyImmutableTagRules(Models\ModifyImmutableTagRulesRequest $req) This API is used to update the tag immutability rule.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to update instance information.
 * @method Models\ModifyInstanceTokenResponse ModifyInstanceToken(Models\ModifyInstanceTokenRequest $req) This API is used to update the status of the specified long-term access credential in an instance.
 * @method Models\ModifyNamespaceResponse ModifyNamespace(Models\ModifyNamespaceRequest $req) This API is used to update the information of a namespace. Currently, only the namespace access level can be modified.
 * @method Models\ModifyRepositoryResponse ModifyRepository(Models\ModifyRepositoryRequest $req) This API is used to update the information of an image repository. The repository description can be modified.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) This API is used to update the public network access allowlist of an instance.
 * @method Models\ModifyServiceAccountResponse ModifyServiceAccount(Models\ModifyServiceAccountRequest $req) This API is used to update a service account.
 * @method Models\ModifyServiceAccountPasswordResponse ModifyServiceAccountPassword(Models\ModifyServiceAccountPasswordRequest $req) This API is used to update the password for a service level account.
 * @method Models\ModifyTagRetentionRuleResponse ModifyTagRetentionRule(Models\ModifyTagRetentionRuleRequest $req) This API is used to update a tag retention rule.
 * @method Models\ModifyWebhookTriggerResponse ModifyWebhookTrigger(Models\ModifyWebhookTriggerRequest $req) This API is used to update a trigger.
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) This API is used to renew a prepaid instance or change the billing mode from pay-as-you-go billing to monthly subscription billing.
 */

class TcrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcr.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcr";

    /**
     * @var string
     */
    protected $version = "2019-09-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcr")."\\"."V20190924\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
