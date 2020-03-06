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
* @method Models\CreateFunctionResponse CreateFunction(Models\CreateFunctionRequest $req) This API is used to create a function based on the input parameters.
* @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) This API is used to create a namespace based on the input parameters.
* @method Models\CreateTriggerResponse CreateTrigger(Models\CreateTriggerRequest $req) This API is used to create a trigger based on the input parameters.
* @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) This API is used to delete a function based on the input parameters.
* @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) This API is used to create a namespace based on the input parameters.
* @method Models\DeleteTriggerResponse DeleteTrigger(Models\DeleteTriggerRequest $req) This API is used to delete an existing trigger based on the input parameters.
* @method Models\GetFunctionResponse GetFunction(Models\GetFunctionRequest $req) This API is used to obtain function details, such as name, code, handler, associated trigger, and timeout.
* @method Models\GetFunctionAddressResponse GetFunctionAddress(Models\GetFunctionAddressRequest $req) This API is used to obtain the download address of the function code package.
* @method Models\GetFunctionLogsResponse GetFunctionLogs(Models\GetFunctionLogsRequest $req) This API is used to return function running logs according to the specified log query criteria.
* @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) This API is used to run a function.
* @method Models\ListFunctionsResponse ListFunctions(Models\ListFunctionsRequest $req) This API is used to return relevant function information based on the input query parameters.
* @method Models\ListNamespacesResponse ListNamespaces(Models\ListNamespacesRequest $req) This API is used to display a namespace list.
* @method Models\ListVersionByFunctionResponse ListVersionByFunction(Models\ListVersionByFunctionRequest $req) This API is used to query the function version based on the input parameters.
* @method Models\PublishVersionResponse PublishVersion(Models\PublishVersionRequest $req) This API is used for users to release a new version of the function.
* @method Models\UpdateFunctionCodeResponse UpdateFunctionCode(Models\UpdateFunctionCodeRequest $req) This API is used to update the function code based on the input parameters.
* @method Models\UpdateFunctionConfigurationResponse UpdateFunctionConfiguration(Models\UpdateFunctionConfigurationRequest $req) This API is used to update the function configuration based on the input parameters.
* @method Models\UpdateNamespaceResponse UpdateNamespace(Models\UpdateNamespaceRequest $req) This API is used to update a namespace.
 */

class ScfClient extends AbstractClient
{
    protected $endpoint = "scf.tencentcloudapi.com";

    protected $version = "2018-04-16";

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
