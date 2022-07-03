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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This API is used to query an object and its access details.
 *
 * @method string getResource() Obtain Resource name. 
A single domain name: Queries domain name details by a domain name. The details of the domain name will be displayed when the passed parameter `detail` is `true`.
Multiple domain names: Queries domain name details by multiple domain names. The aggregated details of the domain names will be displayed.
Project ID: Queries domain name details by a project ID. The aggregated details of the domain names of the project will be displayed.
`all`: Account-level data, which is aggregated details of all domain names of an account.
 * @method void setResource(string $Resource) Set Resource name. 
A single domain name: Queries domain name details by a domain name. The details of the domain name will be displayed when the passed parameter `detail` is `true`.
Multiple domain names: Queries domain name details by multiple domain names. The aggregated details of the domain names will be displayed.
Project ID: Queries domain name details by a project ID. The aggregated details of the domain names of the project will be displayed.
`all`: Account-level data, which is aggregated details of all domain names of an account.
 * @method array getCdnData() Obtain Data details of a resource
 * @method void setCdnData(array $CdnData) Set Data details of a resource
 */
class ResourceData extends AbstractModel
{
    /**
     * @var string Resource name. 
A single domain name: Queries domain name details by a domain name. The details of the domain name will be displayed when the passed parameter `detail` is `true`.
Multiple domain names: Queries domain name details by multiple domain names. The aggregated details of the domain names will be displayed.
Project ID: Queries domain name details by a project ID. The aggregated details of the domain names of the project will be displayed.
`all`: Account-level data, which is aggregated details of all domain names of an account.
     */
    public $Resource;

    /**
     * @var array Data details of a resource
     */
    public $CdnData;

    /**
     * @param string $Resource Resource name. 
A single domain name: Queries domain name details by a domain name. The details of the domain name will be displayed when the passed parameter `detail` is `true`.
Multiple domain names: Queries domain name details by multiple domain names. The aggregated details of the domain names will be displayed.
Project ID: Queries domain name details by a project ID. The aggregated details of the domain names of the project will be displayed.
`all`: Account-level data, which is aggregated details of all domain names of an account.
     * @param array $CdnData Data details of a resource
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("CdnData",$param) and $param["CdnData"] !== null) {
            $this->CdnData = [];
            foreach ($param["CdnData"] as $key => $value){
                $obj = new CdnData();
                $obj->deserialize($value);
                array_push($this->CdnData, $obj);
            }
        }
    }
}
