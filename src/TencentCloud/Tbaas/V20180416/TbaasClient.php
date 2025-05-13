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

namespace TencentCloud\Tbaas\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tbaas\V20180416\Models as Models;

/**
 * @method Models\DescribeFabricBlockResponse DescribeFabricBlock(Models\DescribeFabricBlockRequest $req) This API is used to retrieve the detailed information of a block in Fabric.
 * @method Models\DescribeFabricTransactionResponse DescribeFabricTransaction(Models\DescribeFabricTransactionRequest $req) This API is used to obtain detailed information of Fabric transactions.
 * @method Models\InvokeFabricChaincodeResponse InvokeFabricChaincode(Models\InvokeFabricChaincodeRequest $req) This API is used to call a Fabric user contract to execute a transaction.
 * @method Models\QueryFabricChaincodeResponse QueryFabricChaincode(Models\QueryFabricChaincodeRequest $req) This API is used to make a user contract call in Fabric for querying.
 */

class TbaasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tbaas.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tbaas";

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
        $respClass = "TencentCloud"."\\".ucfirst("tbaas")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
