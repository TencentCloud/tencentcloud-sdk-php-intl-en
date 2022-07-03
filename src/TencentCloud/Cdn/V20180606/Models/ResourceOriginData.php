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
 * This API is used to query an object and its origin-pull details.
 *
 * @method string getResource() Obtain Resource name, which is classified as follows based on different query filters:
A specific domain name: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
Project ID: ID of the specifically queried project
`all`: Details at the account level
 * @method void setResource(string $Resource) Set Resource name, which is classified as follows based on different query filters:
A specific domain name: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
Project ID: ID of the specifically queried project
`all`: Details at the account level
 * @method array getOriginData() Obtain Origin-pull data details
 * @method void setOriginData(array $OriginData) Set Origin-pull data details
 */
class ResourceOriginData extends AbstractModel
{
    /**
     * @var string Resource name, which is classified as follows based on different query filters:
A specific domain name: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
Project ID: ID of the specifically queried project
`all`: Details at the account level
     */
    public $Resource;

    /**
     * @var array Origin-pull data details
     */
    public $OriginData;

    /**
     * @param string $Resource Resource name, which is classified as follows based on different query filters:
A specific domain name: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
Project ID: ID of the specifically queried project
`all`: Details at the account level
     * @param array $OriginData Origin-pull data details
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

        if (array_key_exists("OriginData",$param) and $param["OriginData"] !== null) {
            $this->OriginData = [];
            foreach ($param["OriginData"] as $key => $value){
                $obj = new CdnData();
                $obj->deserialize($value);
                array_push($this->OriginData, $obj);
            }
        }
    }
}
