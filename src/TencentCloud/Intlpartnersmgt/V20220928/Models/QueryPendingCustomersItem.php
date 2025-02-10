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
 * Pending review sub-customer
 *
 * @method string getApplyTime() Obtain Application time.
 * @method void setApplyTime(string $ApplyTime) Set Application time.
 * @method integer getClientUin() Obtain Sub-Account uin.
 * @method void setClientUin(integer $ClientUin) Set Sub-Account uin.
 * @method string getEmail() Obtain Email.
 * @method void setEmail(string $Email) Set Email.
 * @method string getMobile() Obtain Mobile number.
 * @method void setMobile(string $Mobile) Set Mobile number.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getStatus() Obtain Approval status.
 * @method void setStatus(string $Status) Set Approval status.
 * @method string getType() Obtain Sub-Customer type.
 * @method void setType(string $Type) Set Sub-Customer type.
 */
class QueryPendingCustomersItem extends AbstractModel
{
    /**
     * @var string Application time.
     */
    public $ApplyTime;

    /**
     * @var integer Sub-Account uin.
     */
    public $ClientUin;

    /**
     * @var string Email.
     */
    public $Email;

    /**
     * @var string Mobile number.
     */
    public $Mobile;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Approval status.
     */
    public $Status;

    /**
     * @var string Sub-Customer type.
     */
    public $Type;

    /**
     * @param string $ApplyTime Application time.
     * @param integer $ClientUin Sub-Account uin.
     * @param string $Email Email.
     * @param string $Mobile Mobile number.
     * @param string $Name Name.
     * @param string $Status Approval status.
     * @param string $Type Sub-Customer type.
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
        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
