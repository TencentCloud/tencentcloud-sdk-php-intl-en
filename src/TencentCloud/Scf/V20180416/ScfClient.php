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

namespace TencentCloud\Scf\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Scf\V20180416\Models as Models;

/**
 * @method Models\CopyFunctionResponse CopyFunction(Models\CopyFunctionRequest $req) This API is used to replicate a function. You can store the replicated function in a specified Region and Namespace.
Note: This API **does not** replicate the following objects or attributes of the function:
1. Function trigger
2. Versions other than $LATEST
3. CLS target of the logs configured in the function

You can manually configure the function after replication as required.
 * @method Models\CreateAliasResponse CreateAlias(Models\CreateAliasRequest $req) This API is used to create an alias for a function version. You can use the alias to mark a specific function version such as DEV/RELEASE. You can also modify the version pointed to by the alias at any time.
An alias must point to a master version and can point to an additional version at the same time. If you specify an alias when invoking a function, the request will be sent to the versions pointed to by the alias. You can configure the ratio between the master version and additional version during request sending.
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) This API is used to create a namespace based on the input parameters.
 * @method Models\CreateTriggerResponse CreateTrigger(Models\CreateTriggerRequest $req) This API is used to create a trigger based on the input parameters.
 * @method Models\DeleteAliasResponse DeleteAlias(Models\DeleteAliasRequest $req) This API is used to delete an alias of a function version.
 * @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) This API is used to delete a function based on the input parameters.
 * @method Models\DeleteLayerVersionResponse DeleteLayerVersion(Models\DeleteLayerVersionRequest $req) This API is used to delete a specified version of a specified layer. The deleted version cannot be associated with a function, but the deletion does not affect functions that are referencing this layer.
 * @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) This API is used to delete the specific namespace according to the parameters passed in.
 * @method Models\DeleteProvisionedConcurrencyConfigResponse DeleteProvisionedConcurrencyConfig(Models\DeleteProvisionedConcurrencyConfigRequest $req) This API is used to delete the provisioned concurrency configuration of a function version.
 * @method Models\DeleteReservedConcurrencyConfigResponse DeleteReservedConcurrencyConfig(Models\DeleteReservedConcurrencyConfigRequest $req) This API is used to delete the configuration of reserved quota.
 * @method Models\DeleteTriggerResponse DeleteTrigger(Models\DeleteTriggerRequest $req) This API is used to delete an existing trigger based on the input parameters.
 * @method Models\GetAccountResponse GetAccount(Models\GetAccountRequest $req) This API is used to get the account information.
 * @method Models\GetAliasResponse GetAlias(Models\GetAliasRequest $req) This API is used to get the alias details such as the name, description, version, and routing information.
 * @method Models\GetAsyncEventStatusResponse GetAsyncEventStatus(Models\GetAsyncEventStatusRequest $req) This API is used to get the status of an async function execution event. The event status is retained for 3*24 hours, counting from the completion of the event.
 * @method Models\GetFunctionAddressResponse GetFunctionAddress(Models\GetFunctionAddressRequest $req) This API is used to obtain the download address of the function code package.
 * @method Models\GetFunctionEventInvokeConfigResponse GetFunctionEventInvokeConfig(Models\GetFunctionEventInvokeConfigRequest $req) This API is used to get the async retry configuration of a function, including the number of retry attempts and message retention period.
 * @method Models\GetFunctionLogsResponse GetFunctionLogs(Models\GetFunctionLogsRequest $req) This API returns function running logs according to the specified conditions. Note that this API has been disused. You can use [GetRequestStatus](https://intl.cloud.tencent.com/document/product/583/65348?from_cn_redirect=1) instead. See also [Retrieving Logs](https://intl.cloud.tencent.com/document/product/583/52637?from_cn_redirect=1).
 * @method Models\GetLayerVersionResponse GetLayerVersion(Models\GetLayerVersionRequest $req) This API is used to get the layer version details, including links used to download files in the layer.
 * @method Models\GetProvisionedConcurrencyConfigResponse GetProvisionedConcurrencyConfig(Models\GetProvisionedConcurrencyConfigRequest $req) This API is used to get the provisioned concurrency details of a function or its specified version.
 * @method Models\GetRequestStatusResponse GetRequestStatus(Models\GetRequestStatusRequest $req) This API is used to query the status of a single function request.
 * @method Models\GetReservedConcurrencyConfigResponse GetReservedConcurrencyConfig(Models\GetReservedConcurrencyConfigRequest $req) This API is used to obtain the reserved quota details of a function. 
 * @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) This API is used to run a function.
 * @method Models\InvokeFunctionResponse InvokeFunction(Models\InvokeFunctionRequest $req)  This API is used to invoke functions synchronously.
 * @method Models\ListAliasesResponse ListAliases(Models\ListAliasesRequest $req) This API is used to return the list of all aliases under a function. You can filter them by the specific function version.
 * @method Models\ListAsyncEventsResponse ListAsyncEvents(Models\ListAsyncEventsRequest $req) This API is used to pull the list of async function events.
 * @method Models\ListFunctionsResponse ListFunctions(Models\ListFunctionsRequest $req) This API is used to return relevant function information based on the input query parameters.
 * @method Models\ListLayerVersionsResponse ListLayerVersions(Models\ListLayerVersionsRequest $req) This API is used to get the information of all versions of a specified layer.
 * @method Models\ListLayersResponse ListLayers(Models\ListLayersRequest $req) This API is used to return the list of all layers, including the information of the latest version of each layer. You can filter them by the compatible runtime.
 * @method Models\ListNamespacesResponse ListNamespaces(Models\ListNamespacesRequest $req) This API is used to display a namespace list.
 * @method Models\ListTriggersResponse ListTriggers(Models\ListTriggersRequest $req) This API is used to get the function trigger list.
 * @method Models\ListVersionByFunctionResponse ListVersionByFunction(Models\ListVersionByFunctionRequest $req) This API is used to query the function version based on the input parameters.
 * @method Models\PublishLayerVersionResponse PublishLayerVersion(Models\PublishLayerVersionRequest $req) This API is used to create a version for a layer by using the given .zip file or COS object. Each time this API is called with the same layer name, a new version will be generated.
 * @method Models\PublishVersionResponse PublishVersion(Models\PublishVersionRequest $req) This API is used for users to release a new version of the function.
 * @method Models\PutProvisionedConcurrencyConfigResponse PutProvisionedConcurrencyConfig(Models\PutProvisionedConcurrencyConfigRequest $req) This API is used to set the provisioned concurrency of a non-$LATEST version of a function.
 * @method Models\PutReservedConcurrencyConfigResponse PutReservedConcurrencyConfig(Models\PutReservedConcurrencyConfigRequest $req) This API is used to configure the reserved quota of a function.
 * @method Models\PutTotalConcurrencyConfigResponse PutTotalConcurrencyConfig(Models\PutTotalConcurrencyConfigRequest $req) This API is used to modify the account concurrency quota.
 * @method Models\TerminateAsyncEventResponse TerminateAsyncEvent(Models\TerminateAsyncEventRequest $req) This API is used to terminate a running async function event.
 * @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) This API is used to update the configuration of an alias.
 * @method Models\UpdateFunctionCodeResponse UpdateFunctionCode(Models\UpdateFunctionCodeRequest $req) This API is used to update the function code based on the input parameters.
 * @method Models\UpdateFunctionEventInvokeConfigResponse UpdateFunctionEventInvokeConfig(Models\UpdateFunctionEventInvokeConfigRequest $req) This API is used to update the async retry configuration of a function, including the number of retry attempts and message retention period.
 * @method Models\UpdateNamespaceResponse UpdateNamespace(Models\UpdateNamespaceRequest $req) This API is used to update a namespace.
 * @method Models\UpdateTriggerStatusResponse UpdateTriggerStatus(Models\UpdateTriggerStatusRequest $req) This API is used to update the trigger status.
 */

class ScfClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "scf.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "scf";

    /**
     * @var string
     */
    protected $version = "2018-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("scf")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
