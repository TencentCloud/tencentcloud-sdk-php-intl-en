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

namespace TencentCloud\Dnspod\V20210323;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dnspod\V20210323\Models as Models;

/**
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) This API is used to add a domain.

 * @method Models\CreateRecordResponse CreateRecord(Models\CreateRecordRequest $req) This API is used to add a record.

 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) This API is used to delete a domain.

 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) This API is used to delete a record.
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) This API is used to get the information of a domain.
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) This API is used to get the information of a record.
 * @method Models\DescribeRecordListResponse DescribeRecordList(Models\DescribeRecordListRequest $req) This API is used to get the DNS records of a domain.
 * @method Models\ModifyDomainRemarkResponse ModifyDomainRemark(Models\ModifyDomainRemarkRequest $req) This API is used to set the remarks of a domain.
 * @method Models\ModifyDomainStatusResponse ModifyDomainStatus(Models\ModifyDomainStatusRequest $req) This API is used to modify the status of a domain.
 * @method Models\ModifyRecordResponse ModifyRecord(Models\ModifyRecordRequest $req) This API is used to modify a record.
 */

class DnspodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dnspod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dnspod";

    /**
     * @var string
     */
    protected $version = "2021-03-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("dnspod")."\\"."V20210323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
