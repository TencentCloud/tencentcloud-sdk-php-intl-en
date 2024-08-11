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
 * DescribeGlobalDomainList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Number of results per page
 * @method void setLimit(integer $Limit) Set Number of results per page
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method array getDomainTypes() Obtain Domain type. 1: Allowed; 2: Blocked
 * @method void setDomainTypes(array $DomainTypes) Set Domain type. 1: Allowed; 2: Blocked
 * @method string getKeyword() Obtain Domain names to be queried.
 * @method void setKeyword(string $Keyword) Set Domain names to be queried.
 */
class DescribeGlobalDomainListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Number of results per page
     */
    public $Limit;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var array Domain type. 1: Allowed; 2: Blocked
     */
    public $DomainTypes;

    /**
     * @var string Domain names to be queried.
     */
    public $Keyword;

    /**
     * @param integer $Offset Pagination offset
     * @param integer $Limit Number of results per page
     * @param string $PlatformId Platform ID
     * @param array $DomainTypes Domain type. 1: Allowed; 2: Blocked
     * @param string $Keyword Domain names to be queried.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("DomainTypes",$param) and $param["DomainTypes"] !== null) {
            $this->DomainTypes = $param["DomainTypes"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
