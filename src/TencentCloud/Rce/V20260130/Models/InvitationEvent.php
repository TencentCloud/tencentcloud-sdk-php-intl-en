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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Invitation event details
 *
 * @method string getInviteeUserId() Obtain <p>The ID of the invitee</p>
 * @method void setInviteeUserId(string $InviteeUserId) Set <p>The ID of the invitee</p>
 * @method string getPromotionId() Obtain <p>The ID of the promotion</p>
 * @method void setPromotionId(string $PromotionId) Set <p>The ID of the promotion</p>
 * @method string getPromotionName() Obtain <p>The name of the promotion</p>
 * @method void setPromotionName(string $PromotionName) Set <p>The name of the promotion</p>
 * @method string getDescription() Obtain <p>The description of the promotion</p>
 * @method void setDescription(string $Description) Set <p>The description of the promotion</p>
 * @method string getInviteePhone() Obtain <p>The phone number of the invitee</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
 * @method void setInviteePhone(string $InviteePhone) Set <p>The phone number of the invitee</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
 * @method string getInvitationCode() Obtain <p>The code that the inviter sent to the user</p>
 * @method void setInvitationCode(string $InvitationCode) Set <p>The code that the inviter sent to the user</p>
 * @method string getInvitationUrl() Obtain <p>The url that the inviter sent to the user</p>
 * @method void setInvitationUrl(string $InvitationUrl) Set <p>The url that the inviter sent to the user</p>
 * @method string getInvitationChannel() Obtain <p>The channel that inviter used to invite the user </p>
 * @method void setInvitationChannel(string $InvitationChannel) Set <p>The channel that inviter used to invite the user </p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class InvitationEvent extends AbstractModel
{
    /**
     * @var string <p>The ID of the invitee</p>
     */
    public $InviteeUserId;

    /**
     * @var string <p>The ID of the promotion</p>
     */
    public $PromotionId;

    /**
     * @var string <p>The name of the promotion</p>
     */
    public $PromotionName;

    /**
     * @var string <p>The description of the promotion</p>
     */
    public $Description;

    /**
     * @var string <p>The phone number of the invitee</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
     */
    public $InviteePhone;

    /**
     * @var string <p>The code that the inviter sent to the user</p>
     */
    public $InvitationCode;

    /**
     * @var string <p>The url that the inviter sent to the user</p>
     */
    public $InvitationUrl;

    /**
     * @var string <p>The channel that inviter used to invite the user </p>
     */
    public $InvitationChannel;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $InviteeUserId <p>The ID of the invitee</p>
     * @param string $PromotionId <p>The ID of the promotion</p>
     * @param string $PromotionName <p>The name of the promotion</p>
     * @param string $Description <p>The description of the promotion</p>
     * @param string $InviteePhone <p>The phone number of the invitee</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number.</p>
     * @param string $InvitationCode <p>The code that the inviter sent to the user</p>
     * @param string $InvitationUrl <p>The url that the inviter sent to the user</p>
     * @param string $InvitationChannel <p>The channel that inviter used to invite the user </p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("InviteeUserId",$param) and $param["InviteeUserId"] !== null) {
            $this->InviteeUserId = $param["InviteeUserId"];
        }

        if (array_key_exists("PromotionId",$param) and $param["PromotionId"] !== null) {
            $this->PromotionId = $param["PromotionId"];
        }

        if (array_key_exists("PromotionName",$param) and $param["PromotionName"] !== null) {
            $this->PromotionName = $param["PromotionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InviteePhone",$param) and $param["InviteePhone"] !== null) {
            $this->InviteePhone = $param["InviteePhone"];
        }

        if (array_key_exists("InvitationCode",$param) and $param["InvitationCode"] !== null) {
            $this->InvitationCode = $param["InvitationCode"];
        }

        if (array_key_exists("InvitationUrl",$param) and $param["InvitationUrl"] !== null) {
            $this->InvitationUrl = $param["InvitationUrl"];
        }

        if (array_key_exists("InvitationChannel",$param) and $param["InvitationChannel"] !== null) {
            $this->InvitationChannel = $param["InvitationChannel"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
