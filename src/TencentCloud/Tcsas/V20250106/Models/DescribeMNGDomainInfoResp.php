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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters for querying domain information
 *
 * @method string getDomainUrl() Obtain <p>Multiple domain names are concatenated with the separator ;</p>
 * @method void setDomainUrl(string $DomainUrl) Set <p>Multiple domain names are concatenated with the separator ;</p>
 * @method integer getDomainType() Obtain <p>Domain type. Valid values: 1: Requests domain; 2: web-view domain</p>
 * @method void setDomainType(integer $DomainType) Set <p>Domain type. Valid values: 1: Requests domain; 2: web-view domain</p>
 */
class DescribeMNGDomainInfoResp extends AbstractModel
{
    /**
     * @var string <p>Multiple domain names are concatenated with the separator ;</p>
     */
    public $DomainUrl;

    /**
     * @var integer <p>Domain type. Valid values: 1: Requests domain; 2: web-view domain</p>
     */
    public $DomainType;

    /**
     * @param string $DomainUrl <p>Multiple domain names are concatenated with the separator ;</p>
     * @param integer $DomainType <p>Domain type. Valid values: 1: Requests domain; 2: web-view domain</p>
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
        if (array_key_exists("DomainUrl",$param) and $param["DomainUrl"] !== null) {
            $this->DomainUrl = $param["DomainUrl"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
