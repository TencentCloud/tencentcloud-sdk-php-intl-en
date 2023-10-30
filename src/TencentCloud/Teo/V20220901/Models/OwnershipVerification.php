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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method DnsVerification getDnsVerification() Obtain 
 * @method void setDnsVerification(DnsVerification $DnsVerification) Set 
 * @method FileVerification getFileVerification() Obtain 
 * @method void setFileVerification(FileVerification $FileVerification) Set 
 * @method NsVerification getNsVerification() Obtain 
 * @method void setNsVerification(NsVerification $NsVerification) Set 
 */
class OwnershipVerification extends AbstractModel
{
    /**
     * @var DnsVerification 
     */
    public $DnsVerification;

    /**
     * @var FileVerification 
     */
    public $FileVerification;

    /**
     * @var NsVerification 
     */
    public $NsVerification;

    /**
     * @param DnsVerification $DnsVerification 
     * @param FileVerification $FileVerification 
     * @param NsVerification $NsVerification 
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
