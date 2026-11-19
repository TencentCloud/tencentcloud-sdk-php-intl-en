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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name ownership verification info
 *
 * @method DnsVerification getDnsVerification() Obtain <p>DNS verification</p>
 * @method void setDnsVerification(DnsVerification $DnsVerification) Set <p>DNS verification</p>
 * @method FileVerification getFileVerification() Obtain <p>File verification</p>
 * @method void setFileVerification(FileVerification $FileVerification) Set <p>File verification</p>
 * @method NsVerification getNsVerification() Obtain <p>NS verification</p>
 * @method void setNsVerification(NsVerification $NsVerification) Set <p>NS verification</p>
 */
class OwnershipVerification extends AbstractModel
{
    /**
     * @var DnsVerification <p>DNS verification</p>
     */
    public $DnsVerification;

    /**
     * @var FileVerification <p>File verification</p>
     */
    public $FileVerification;

    /**
     * @var NsVerification <p>NS verification</p>
     */
    public $NsVerification;

    /**
     * @param DnsVerification $DnsVerification <p>DNS verification</p>
     * @param FileVerification $FileVerification <p>File verification</p>
     * @param NsVerification $NsVerification <p>NS verification</p>
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
        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = new DnsVerification();
            $this->DnsVerification->deserialize($param["DnsVerification"]);
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = new FileVerification();
            $this->FileVerification->deserialize($param["FileVerification"]);
        }

        if (array_key_exists("NsVerification",$param) and $param["NsVerification"] !== null) {
            $this->NsVerification = new NsVerification();
            $this->NsVerification->deserialize($param["NsVerification"]);
        }
    }
}
