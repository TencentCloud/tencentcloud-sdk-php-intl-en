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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomainCertBindings request structure.
 *
 * @method string getDomainSearch() Obtain The keyword to use to search for domains.
 * @method void setDomainSearch(string $DomainSearch) Set The keyword to use to search for domains.
 * @method integer getOffset() Obtain The number of records to skip before starting to return any results. 0 means to start from the first record and is the default.
 * @method void setOffset(integer $Offset) Set The number of records to skip before starting to return any results. 0 means to start from the first record and is the default.
 * @method integer getLength() Obtain The maximum number of records to return. The default is 50.
If this parameter is not specified, up to 50 records will be returned.
 * @method void setLength(integer $Length) Set The maximum number of records to return. The default is 50.
If this parameter is not specified, up to 50 records will be returned.
 * @method string getDomainName() Obtain The name of a particular domain to query.
 * @method void setDomainName(string $DomainName) Set The name of a particular domain to query.
 * @method string getOrderBy() Obtain Valid values:
ExpireTimeAsc: Sort the records by certificate expiration time in ascending order.
ExpireTimeDesc: Sort the records by certificate expiration time in descending order.
 * @method void setOrderBy(string $OrderBy) Set Valid values:
ExpireTimeAsc: Sort the records by certificate expiration time in ascending order.
ExpireTimeDesc: Sort the records by certificate expiration time in descending order.
 */
class DescribeLiveDomainCertBindingsRequest extends AbstractModel
{
    /**
     * @var string The keyword to use to search for domains.
     */
    public $DomainSearch;

    /**
     * @var integer The number of records to skip before starting to return any results. 0 means to start from the first record and is the default.
     */
    public $Offset;

    /**
     * @var integer The maximum number of records to return. The default is 50.
If this parameter is not specified, up to 50 records will be returned.
     */
    public $Length;

    /**
     * @var string The name of a particular domain to query.
     */
    public $DomainName;

    /**
     * @var string Valid values:
ExpireTimeAsc: Sort the records by certificate expiration time in ascending order.
ExpireTimeDesc: Sort the records by certificate expiration time in descending order.
     */
    public $OrderBy;

    /**
     * @param string $DomainSearch The keyword to use to search for domains.
     * @param integer $Offset The number of records to skip before starting to return any results. 0 means to start from the first record and is the default.
     * @param integer $Length The maximum number of records to return. The default is 50.
If this parameter is not specified, up to 50 records will be returned.
     * @param string $DomainName The name of a particular domain to query.
     * @param string $OrderBy Valid values:
ExpireTimeAsc: Sort the records by certificate expiration time in ascending order.
ExpireTimeDesc: Sort the records by certificate expiration time in descending order.
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
        if (array_key_exists("DomainSearch",$param) and $param["DomainSearch"] !== null) {
            $this->DomainSearch = $param["DomainSearch"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
