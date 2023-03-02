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
 * ModifyRecordStatus request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method integer getRecordId() Obtain The record ID. You can view all DNS records and their IDs via the `DescribeRecordList` API.
 * @method void setRecordId(integer $RecordId) Set The record ID. You can view all DNS records and their IDs via the `DescribeRecordList` API.
 * @method string getStatus() Obtain Record status. Valid values: `ENABLE`, `DISABLE`. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
 * @method void setStatus(string $Status) Set Record status. Valid values: `ENABLE`, `DISABLE`. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
 * @method integer getDomainId() Obtain The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method void setDomainId(integer $DomainId) Set The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 */
class ModifyRecordStatusRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var integer The record ID. You can view all DNS records and their IDs via the `DescribeRecordList` API.
     */
    public $RecordId;

    /**
     * @var string Record status. Valid values: `ENABLE`, `DISABLE`. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
     */
    public $Status;

    /**
     * @var integer The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     */
    public $DomainId;

    /**
     * @param string $Domain Domain
     * @param integer $RecordId The record ID. You can view all DNS records and their IDs via the `DescribeRecordList` API.
     * @param string $Status Record status. Valid values: `ENABLE`, `DISABLE`. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
     * @param integer $DomainId The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
