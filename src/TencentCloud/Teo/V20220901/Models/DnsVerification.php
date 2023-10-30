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
 * @method string getSubdomain() Obtain 
 * @method void setSubdomain(string $Subdomain) Set 
 * @method string getRecordType() Obtain 
 * @method void setRecordType(string $RecordType) Set 
 * @method string getRecordValue() Obtain 
 * @method void setRecordValue(string $RecordValue) Set 
 */
class DnsVerification extends AbstractModel
{
    /**
     * @var string 
     */
    public $Subdomain;

    /**
     * @var string 
     */
    public $RecordType;

    /**
     * @var string 
     */
    public $RecordValue;

    /**
     * @param string $Subdomain 
     * @param string $RecordType 
     * @param string $RecordValue 
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
        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }
    }
}
