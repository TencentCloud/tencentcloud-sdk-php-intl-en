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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the domain name, record type, expected value, and currently configured value of DNS records.
 *
 * @method string getType() Obtain Record types: CNAME, A, TXT, and MX.
 * @method void setType(string $Type) Set Record types: CNAME, A, TXT, and MX.
 * @method string getSendDomain() Obtain Domain name.
 * @method void setSendDomain(string $SendDomain) Set Domain name.
 * @method string getExpectedValue() Obtain Expected value.
 * @method void setExpectedValue(string $ExpectedValue) Set Expected value.
 * @method string getCurrentValue() Obtain Currently configured value.
 * @method void setCurrentValue(string $CurrentValue) Set Currently configured value.
 * @method boolean getStatus() Obtain Approved or not. The default value is `false`.
 * @method void setStatus(boolean $Status) Set Approved or not. The default value is `false`.
 */
class DNSAttributes extends AbstractModel
{
    /**
     * @var string Record types: CNAME, A, TXT, and MX.
     */
    public $Type;

    /**
     * @var string Domain name.
     */
    public $SendDomain;

    /**
     * @var string Expected value.
     */
    public $ExpectedValue;

    /**
     * @var string Currently configured value.
     */
    public $CurrentValue;

    /**
     * @var boolean Approved or not. The default value is `false`.
     */
    public $Status;

    /**
     * @param string $Type Record types: CNAME, A, TXT, and MX.
     * @param string $SendDomain Domain name.
     * @param string $ExpectedValue Expected value.
     * @param string $CurrentValue Currently configured value.
     * @param boolean $Status Approved or not. The default value is `false`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SendDomain",$param) and $param["SendDomain"] !== null) {
            $this->SendDomain = $param["SendDomain"];
        }

        if (array_key_exists("ExpectedValue",$param) and $param["ExpectedValue"] !== null) {
            $this->ExpectedValue = $param["ExpectedValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
