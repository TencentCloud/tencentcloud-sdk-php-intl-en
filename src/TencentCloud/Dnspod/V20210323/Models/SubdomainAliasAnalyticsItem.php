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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNS query volume of the subdomain alias
 *
 * @method SubdomainAnalyticsInfo getInfo() Obtain Statistics on the DNS query volume of a subdomain
 * @method void setInfo(SubdomainAnalyticsInfo $Info) Set Statistics on the DNS query volume of a subdomain
 * @method array getData() Obtain DNS query volume in the current statistical dimension
 * @method void setData(array $Data) Set DNS query volume in the current statistical dimension
 */
class SubdomainAliasAnalyticsItem extends AbstractModel
{
    /**
     * @var SubdomainAnalyticsInfo Statistics on the DNS query volume of a subdomain
     */
    public $Info;

    /**
     * @var array DNS query volume in the current statistical dimension
     */
    public $Data;

    /**
     * @param SubdomainAnalyticsInfo $Info Statistics on the DNS query volume of a subdomain
     * @param array $Data DNS query volume in the current statistical dimension
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new SubdomainAnalyticsInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DomainAnalyticsDetail();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
