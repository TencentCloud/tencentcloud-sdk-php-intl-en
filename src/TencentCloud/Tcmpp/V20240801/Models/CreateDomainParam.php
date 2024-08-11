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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters to create a domain name
 *
 * @method array getDomainUrlList() Obtain Array of domain name URLs
 * @method void setDomainUrlList(array $DomainUrlList) Set Array of domain name URLs
 * @method integer getDomainType() Obtain Domain type. 1: requests domain; 2: WebView load domain, 3: sockets domain; 4: File upload; 5: File download
 * @method void setDomainType(integer $DomainType) Set Domain type. 1: requests domain; 2: WebView load domain, 3: sockets domain; 4: File upload; 5: File download
 */
class CreateDomainParam extends AbstractModel
{
    /**
     * @var array Array of domain name URLs
     */
    public $DomainUrlList;

    /**
     * @var integer Domain type. 1: requests domain; 2: WebView load domain, 3: sockets domain; 4: File upload; 5: File download
     */
    public $DomainType;

    /**
     * @param array $DomainUrlList Array of domain name URLs
     * @param integer $DomainType Domain type. 1: requests domain; 2: WebView load domain, 3: sockets domain; 4: File upload; 5: File download
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
        if (array_key_exists("DomainUrlList",$param) and $param["DomainUrlList"] !== null) {
            $this->DomainUrlList = $param["DomainUrlList"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
