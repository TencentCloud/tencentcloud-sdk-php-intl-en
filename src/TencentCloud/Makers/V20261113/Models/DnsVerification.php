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
 * DNS ownership verification record
 *
 * @method string getRecordType() Obtain <p>Record type, TXT</p>
 * @method void setRecordType(string $RecordType) Set <p>Record type, TXT</p>
 * @method string getSubdomain() Obtain <p>Host record</p>
 * @method void setSubdomain(string $Subdomain) Set <p>Host record</p>
 * @method string getRecordValue() Obtain <p>Record value</p>
 * @method void setRecordValue(string $RecordValue) Set <p>Record value</p>
 */
class DnsVerification extends AbstractModel
{
    /**
     * @var string <p>Record type, TXT</p>
     */
    public $RecordType;

    /**
     * @var string <p>Host record</p>
     */
    public $Subdomain;

    /**
     * @var string <p>Record value</p>
     */
    public $RecordValue;

    /**
     * @param string $RecordType <p>Record type, TXT</p>
     * @param string $Subdomain <p>Host record</p>
     * @param string $RecordValue <p>Record value</p>
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
        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }
    }
}
