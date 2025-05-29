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

namespace TencentCloud\Ses\V20201002;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ses\V20201002\Models as Models;

/**
 * @method Models\BatchSendEmailResponse BatchSendEmail(Models\BatchSendEmailRequest $req) This API is used to send a TEXT or HTML email to multiple recipients at a time for marketing or notification purposes. By default, you can send emails using a template only. You need to create a recipient group with email addresses first and then send emails by group ID. SES supports scheduled and recurring email sending tasks. You need to pass in `TimedParam` for a scheduled task and `CycleParam` for a recurring one.
 * @method Models\CreateAddressUnsubscribeConfigResponse CreateAddressUnsubscribeConfig(Models\CreateAddressUnsubscribeConfigRequest $req) This API is used to create an address-level unsubscribe configuration.
 * @method Models\CreateEmailAddressResponse CreateEmailAddress(Models\CreateEmailAddressRequest $req) After the sender domain is verified, you need a sender address to send emails. For example, if your sender domain is mail.qcloud.com, your sender address can be service@mail.qcloud.com. If you want to display your name (such as "Tencent Cloud") in the inbox list of the recipients, the sender address should be in the format of `Tencent Cloud <email address>`. Please note that there must be a space between your name and the first angle bracket.
 * @method Models\CreateEmailIdentityResponse CreateEmailIdentity(Models\CreateEmailIdentityRequest $req) This API is used to create a sender domain. Before you can send an email using Tencent Cloud SES, you must create a sender domain as your identity. It can be the domain of your website or mobile app. You must verify the domain to prove that you own it and authorize Tencent Cloud SES to use it to send emails.
 * @method Models\CreateEmailTemplateResponse CreateEmailTemplate(Models\CreateEmailTemplateRequest $req) This API is used to create a TEXT or HTML email template. To create an HTML template, ensure that it does not include external CSS files. You can use {{variable name}} to specify a variable in the template.
Note: Only an approved template can be used to send emails.
 * @method Models\CreateReceiverResponse CreateReceiver(Models\CreateReceiverRequest $req) This API is used to create a recipient group, which is the list of target email addresses for batch sending emails. After creating a group, you need to upload recipient email addresses. Then, you can create a sending task and select the group to batch send emails.
 * @method Models\CreateReceiverDetailResponse CreateReceiverDetail(Models\CreateReceiverDetailRequest $req) This API is used to add recipient email addresses (up to 20,000 at a time) to a recipient group. This will be processed asynchronously. If the data volume is large, it may take some time to upload. You can check the recipient group for the upload status and upload quantity. This API has basically the same feature as that of `CreateReceiverDetailWithData` except that it doesn't support uploading template parameters for email sending. You need to first call the `CreateReceiver` API to create a recipient group, then call this API to pass in recipient addresses, and finally call the `BatchSendEmail` API to batch send emails. This API supports adding more recipient addresses during upload but not address deduplication, so you need to make sure that the recipient addresses are not duplicate by yourself. This API can request up to 20,000 recipient addresses at a time, but the recipient group can contain up to 50,000 addresses currently.
 * @method Models\DeleteAddressUnsubscribeConfigResponse DeleteAddressUnsubscribeConfig(Models\DeleteAddressUnsubscribeConfigRequest $req) Remove address-level unsubscribe configuration.
 * @method Models\DeleteBlackListResponse DeleteBlackList(Models\DeleteBlackListRequest $req) This API is used to unblocklist email addresses. If you confirm that a blocklisted recipient address is valid and active, you can remove it from Tencent Cloud’s address blocklist database.
 * @method Models\DeleteEmailAddressResponse DeleteEmailAddress(Models\DeleteEmailAddressRequest $req) This API is used to delete a sender address.
 * @method Models\DeleteEmailIdentityResponse DeleteEmailIdentity(Models\DeleteEmailIdentityRequest $req) This API is used to delete a sender domain. After deleted, the sender domain can no longer be used to send emails.
 * @method Models\DeleteEmailTemplateResponse DeleteEmailTemplate(Models\DeleteEmailTemplateRequest $req) This API is used to delete an email template.
 * @method Models\DeleteReceiverResponse DeleteReceiver(Models\DeleteReceiverRequest $req) This API is used to delete a recipient group and all recipient email addresses in the group based on the recipient group ID.
 * @method Models\GetEmailIdentityResponse GetEmailIdentity(Models\GetEmailIdentityRequest $req) This API is used to get the configuration details of a sender domain.
 * @method Models\GetEmailTemplateResponse GetEmailTemplate(Models\GetEmailTemplateRequest $req) This API is used to get the details of a template.
 * @method Models\GetSendEmailStatusResponse GetSendEmailStatus(Models\GetSendEmailStatusRequest $req) This API is used to get email sending status. Only data within 30 days can be queried.
Default API request rate limit: 1 request/sec.
 * @method Models\GetStatisticsReportResponse GetStatisticsReport(Models\GetStatisticsReportRequest $req) This API is used to get the email sending statistics over a recent period, including data on sent emails, delivery success rate, open rate, bounce rate, and so on.
 * @method Models\ListAddressUnsubscribeConfigResponse ListAddressUnsubscribeConfig(Models\ListAddressUnsubscribeConfigRequest $req) This API is used to get the address and unsubscribe configuration list.
 * @method Models\ListBlackEmailAddressResponse ListBlackEmailAddress(Models\ListBlackEmailAddressRequest $req) The API is used to get blocklisted addresses. In the case of a hard bounce, Tencent Cloud will blocklist the recipient address and do not allow any user to send emails to this address. If you confirm that this is a misjudgment, you can remove it from the blocklist.
 * @method Models\ListEmailAddressResponse ListEmailAddress(Models\ListEmailAddressRequest $req) This API is used to get the list of sender addresses.
 * @method Models\ListEmailIdentitiesResponse ListEmailIdentities(Models\ListEmailIdentitiesRequest $req) This API is used to get the list of sender domains, including verified and unverified domains.
 * @method Models\ListEmailTemplatesResponse ListEmailTemplates(Models\ListEmailTemplatesRequest $req) This API is used to get the list of email templates.
 * @method Models\ListReceiversResponse ListReceivers(Models\ListReceiversRequest $req) This API is used to query recipient groups. It supports pagination, fuzzy query, and query by status.
 * @method Models\ListSendTasksResponse ListSendTasks(Models\ListSendTasksRequest $req) This API is used to query batch email sending tasks (including immediate, scheduled, and recurring tasks) by page. You can query task data including the number of emails requested to be sent, the number of sent emails, the number of cached emails, and task status.
 * @method Models\SendEmailResponse SendEmail(Models\SendEmailRequest $req) This API is used to send an HTML or TEXT email triggered for authentication or transaction. By default, you can send emails using a template only.
 * @method Models\UpdateAddressUnsubscribeConfigResponse UpdateAddressUnsubscribeConfig(Models\UpdateAddressUnsubscribeConfigRequest $req) This API is used to update address-level unsubscribe configurations.
 * @method Models\UpdateEmailIdentityResponse UpdateEmailIdentity(Models\UpdateEmailIdentityRequest $req) This API is used to verify whether your DNS configuration is correct.
 * @method Models\UpdateEmailSmtpPassWordResponse UpdateEmailSmtpPassWord(Models\UpdateEmailSmtpPassWordRequest $req) This API is used to set the SMTP password. Initially, no SMTP password is set for your email address, so emails cannot be sent over SMTP. To send emails over SMTP, you must set the SMTP password. The set password can be changed subsequently.
 * @method Models\UpdateEmailTemplateResponse UpdateEmailTemplate(Models\UpdateEmailTemplateRequest $req) This API is used to update an email template. An updated template must be approved again before it can be used.
 */

class SesClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ses.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ses";

    /**
     * @var string
     */
    protected $version = "2020-10-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("ses")."\\"."V20201002\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
