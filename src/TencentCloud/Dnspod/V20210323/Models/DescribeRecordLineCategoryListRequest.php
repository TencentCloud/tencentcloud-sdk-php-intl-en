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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordLineCategoryList request structure.
 *
 * @method string getDomain() Obtain Specifies the domain name to query the line list.
 * @method void setDomain(string $Domain) Set Specifies the domain name to query the line list.
 * @method integer getDomainId() Obtain Domain ID for querying the route list. parameter DomainId has higher priority than parameter Domain. if you pass parameter DomainId, it will ignore parameter Domain.
 * @method void setDomainId(integer $DomainId) Set Domain ID for querying the route list. parameter DomainId has higher priority than parameter Domain. if you pass parameter DomainId, it will ignore parameter Domain.
 */
class DescribeRecordLineCategoryListRequest extends AbstractModel
{
    /**
     * @var string Specifies the domain name to query the line list.
     */
    public $Domain;

    /**
     * @var integer Domain ID for querying the route list. parameter DomainId has higher priority than parameter Domain. if you pass parameter DomainId, it will ignore parameter Domain.
     */
    public $DomainId;

    /**
     * @param string $Domain Specifies the domain name to query the line list.
     * @param integer $DomainId Domain ID for querying the route list. parameter DomainId has higher priority than parameter Domain. if you pass parameter DomainId, it will ignore parameter Domain.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
