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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndSendClientInvitationMail request structure.
 *
 * @method string getEmail() Obtain Email address that receives the customer invitation link.
 * @method void setEmail(string $Email) Set Email address that receives the customer invitation link.
 * @method string getInvitationRole() Obtain Invite a role.
Note: if no value is passed, it defaults to the sub - customer.
Client: customer.
SubAgent: second-level reseller.
 * @method void setInvitationRole(string $InvitationRole) Set Invite a role.
Note: if no value is passed, it defaults to the sub - customer.
Client: customer.
SubAgent: second-level reseller.
 * @method string getMaterialUrl() Obtain Specifies the application material.
Note: this field takes effect only in the scenario of inviting a second-level reseller.
 * @method void setMaterialUrl(string $MaterialUrl) Set Specifies the application material.
Note: this field takes effect only in the scenario of inviting a second-level reseller.
 */
class CreateAndSendClientInvitationMailRequest extends AbstractModel
{
    /**
     * @var string Email address that receives the customer invitation link.
     */
    public $Email;

    /**
     * @var string Invite a role.
Note: if no value is passed, it defaults to the sub - customer.
Client: customer.
SubAgent: second-level reseller.
     */
    public $InvitationRole;

    /**
     * @var string Specifies the application material.
Note: this field takes effect only in the scenario of inviting a second-level reseller.
     */
    public $MaterialUrl;

    /**
     * @param string $Email Email address that receives the customer invitation link.
     * @param string $InvitationRole Invite a role.
Note: if no value is passed, it defaults to the sub - customer.
Client: customer.
SubAgent: second-level reseller.
     * @param string $MaterialUrl Specifies the application material.
Note: this field takes effect only in the scenario of inviting a second-level reseller.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("InvitationRole",$param) and $param["InvitationRole"] !== null) {
            $this->InvitationRole = $param["InvitationRole"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }
    }
}
