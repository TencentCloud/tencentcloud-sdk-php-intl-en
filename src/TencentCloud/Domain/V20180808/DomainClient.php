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

namespace TencentCloud\Domain\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Domain\V20180808\Models as Models;

/**
 * @method Models\BatchModifyIntlDomainDNSResponse BatchModifyIntlDomainDNS(Models\BatchModifyIntlDomainDNSRequest $req) This API is used to bulk modify DNS servers for domains.
 * @method Models\BatchModifyIntlDomainInfoResponse BatchModifyIntlDomainInfo(Models\BatchModifyIntlDomainInfoRequest $req) This API is used to bulk modify registrant information.
 * @method Models\CheckIntlDomainNewResponse CheckIntlDomainNew(Models\CheckIntlDomainNewRequest $req) This API is used to check whether a domain is available for registration.
 * @method Models\CreateIntlDomainBatchResponse CreateIntlDomainBatch(Models\CreateIntlDomainBatchRequest $req) This API is used to bulk register domains.
 * @method Models\CreateIntlPhoneEmailResponse CreateIntlPhoneEmail(Models\CreateIntlPhoneEmailRequest $req) This API is used to verify a mobile number or an email address via a verification code.
 * @method Models\CreateIntlTemplateResponse CreateIntlTemplate(Models\CreateIntlTemplateRequest $req) This API is used to add a registrant profile.
 * @method Models\DeleteIntlPhoneEmailResponse DeleteIntlPhoneEmail(Models\DeleteIntlPhoneEmailRequest $req) This API is used to delete a mobile number or an email address.
 * @method Models\DeleteIntlTemplateResponse DeleteIntlTemplate(Models\DeleteIntlTemplateRequest $req) This API is used to delete a registrant profile.
 * @method Models\DescribeIntlBatchDetailStatusResponse DescribeIntlBatchDetailStatus(Models\DescribeIntlBatchDetailStatusRequest $req) This API is used to query the status of a bulk task.
 * @method Models\DescribeIntlBatchOperationLogsResponse DescribeIntlBatchOperationLogs(Models\DescribeIntlBatchOperationLogsRequest $req) This API is used to query the logs of bulk domain purchase.
 * @method Models\DescribeIntlDomainResponse DescribeIntlDomain(Models\DescribeIntlDomainRequest $req) This API is used to query domain information.
 * @method Models\DescribeIntlDomainBatchDetailsResponse DescribeIntlDomainBatchDetails(Models\DescribeIntlDomainBatchDetailsRequest $req) This API is used to get the log details of bulk domain purchase.
 * @method Models\DescribeIntlDomainListResponse DescribeIntlDomainList(Models\DescribeIntlDomainListRequest $req) This API is used to query the "My domains" list.
 * @method Models\DescribeIntlDomainPriceNewListResponse DescribeIntlDomainPriceNewList(Models\DescribeIntlDomainPriceNewListRequest $req) This API is used to get the price list by domain suffix.
 * @method Models\DescribeIntlPhoneEmailListResponse DescribeIntlPhoneEmailList(Models\DescribeIntlPhoneEmailListRequest $req) This API is used to get the list of verified mobile numbers and email addresses.
 * @method Models\DescribeIntlTemplateResponse DescribeIntlTemplate(Models\DescribeIntlTemplateRequest $req) This API is used to get the details of a registrant profile.
 * @method Models\DescribeIntlTemplateListResponse DescribeIntlTemplateList(Models\DescribeIntlTemplateListRequest $req) This API is used to get the list of registrant profiles.
 * @method Models\ModifyOwnerIntlBatchResponse ModifyOwnerIntlBatch(Models\ModifyOwnerIntlBatchRequest $req) This API is used to bulk transfer domains to another account.
 * @method Models\RenewIntlDomainBatchResponse RenewIntlDomainBatch(Models\RenewIntlDomainBatchRequest $req) This API is used to bulk renew domains.
 * @method Models\SendIntlPhoneEmailCodeResponse SendIntlPhoneEmailCode(Models\SendIntlPhoneEmailCodeRequest $req) This API is used to send a verification code to a mobile number or an email address.
 * @method Models\SetIntlDomainAutoRenewResponse SetIntlDomainAutoRenew(Models\SetIntlDomainAutoRenewRequest $req) This API is used to set auto-renewal.
 * @method Models\TransferInIntlDomainBatchResponse TransferInIntlDomainBatch(Models\TransferInIntlDomainBatchRequest $req) This API is used to bulk transfer domains in.
 * @method Models\TransferProhibitionIntlBatchResponse TransferProhibitionIntlBatch(Models\TransferProhibitionIntlBatchRequest $req) This API is used to bulk set transfer prohibition for domains.
 * @method Models\UpdateProhibitionIntlBatchResponse UpdateProhibitionIntlBatch(Models\UpdateProhibitionIntlBatchRequest $req) This API is used to bulk set update prohibition for domains.
 */

class DomainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "domain.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "domain";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("domain")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
