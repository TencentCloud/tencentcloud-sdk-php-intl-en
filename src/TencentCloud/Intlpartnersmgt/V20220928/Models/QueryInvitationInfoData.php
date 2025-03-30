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
 * Invitation link information.
 *
 * @method string getInvitationToken() Obtain Invitation link token.
 * @method void setInvitationToken(string $InvitationToken) Set Invitation link token.
 * @method string getCreateTime() Obtain Creation time of the invitation link.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the invitation link.
 * @method integer getStatus() Obtain Invite link status.
1: Unused.
2: Used.
 * @method void setStatus(integer $Status) Set Invite link status.
1: Unused.
2: Used.
 * @method string getUseTime() Obtain Indicates the usage time of the invitation link.
 * @method void setUseTime(string $UseTime) Set Indicates the usage time of the invitation link.
 * @method integer getClientUin() Obtain Customer uin.
 * @method void setClientUin(integer $ClientUin) Set Customer uin.
 * @method string getClientMail() Obtain Customer mailbox.
 * @method void setClientMail(string $ClientMail) Set Customer mailbox.
 * @method integer getClientType() Obtain Customer type.
1: Second-Level reseller.
2: Sub-Customer.
 * @method void setClientType(integer $ClientType) Set Customer type.
1: Second-Level reseller.
2: Sub-Customer.
 * @method string getBindTime() Obtain The binding time of the customer.
 * @method void setBindTime(string $BindTime) Set The binding time of the customer.
 */
class QueryInvitationInfoData extends AbstractModel
{
    /**
     * @var string Invitation link token.
     */
    public $InvitationToken;

    /**
     * @var string Creation time of the invitation link.
     */
    public $CreateTime;

    /**
     * @var integer Invite link status.
1: Unused.
2: Used.
     */
    public $Status;

    /**
     * @var string Indicates the usage time of the invitation link.
     */
    public $UseTime;

    /**
     * @var integer Customer uin.
     */
    public $ClientUin;

    /**
     * @var string Customer mailbox.
     */
    public $ClientMail;

    /**
     * @var integer Customer type.
1: Second-Level reseller.
2: Sub-Customer.
     */
    public $ClientType;

    /**
     * @var string The binding time of the customer.
     */
    public $BindTime;

    /**
     * @param string $InvitationToken Invitation link token.
     * @param string $CreateTime Creation time of the invitation link.
     * @param integer $Status Invite link status.
1: Unused.
2: Used.
     * @param string $UseTime Indicates the usage time of the invitation link.
     * @param integer $ClientUin Customer uin.
     * @param string $ClientMail Customer mailbox.
     * @param integer $ClientType Customer type.
1: Second-Level reseller.
2: Sub-Customer.
     * @param string $BindTime The binding time of the customer.
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
        if (array_key_exists("InvitationToken",$param) and $param["InvitationToken"] !== null) {
            $this->InvitationToken = $param["InvitationToken"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UseTime",$param) and $param["UseTime"] !== null) {
            $this->UseTime = $param["UseTime"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ClientMail",$param) and $param["ClientMail"] !== null) {
            $this->ClientMail = $param["ClientMail"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }
    }
}
