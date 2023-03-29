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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOwnerIntlBatch request structure.
 *
 * @method array getDomains() Obtain The domains.
 * @method void setDomains(array $Domains) Set The domains.
 * @method string getToUin() Obtain The user ID.
 * @method void setToUin(string $ToUin) Set The user ID.
 * @method boolean getDnsTransfer() Obtain Whether to transfer the DNS service.
 * @method void setDnsTransfer(boolean $DnsTransfer) Set Whether to transfer the DNS service.
 */
class ModifyOwnerIntlBatchRequest extends AbstractModel
{
    /**
     * @var array The domains.
     */
    public $Domains;

    /**
     * @var string The user ID.
     */
    public $ToUin;

    /**
     * @var boolean Whether to transfer the DNS service.
     */
    public $DnsTransfer;

    /**
     * @param array $Domains The domains.
     * @param string $ToUin The user ID.
     * @param boolean $DnsTransfer Whether to transfer the DNS service.
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ToUin",$param) and $param["ToUin"] !== null) {
            $this->ToUin = $param["ToUin"];
        }

        if (array_key_exists("DnsTransfer",$param) and $param["DnsTransfer"] !== null) {
            $this->DnsTransfer = $param["DnsTransfer"];
        }
    }
}
