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
 * DescribeDomainLogList request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method integer getDomainId() Obtain The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method void setDomainId(integer $DomainId) Set The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method integer getOffset() Obtain Record offset starting from `0`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Record offset starting from `0`. Default value: `0`.
 * @method integer getLimit() Obtain Total number of logs to be obtained. For example, `20` indicates to obtain 20 logs. Default value: `500`. Maximum value: `500`.
 * @method void setLimit(integer $Limit) Set Total number of logs to be obtained. For example, `20` indicates to obtain 20 logs. Default value: `500`. Maximum value: `500`.
 */
class DescribeDomainLogListRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var integer The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     */
    public $DomainId;

    /**
     * @var integer Record offset starting from `0`. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Total number of logs to be obtained. For example, `20` indicates to obtain 20 logs. Default value: `500`. Maximum value: `500`.
     */
    public $Limit;

    /**
     * @param string $Domain Domain
     * @param integer $DomainId The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     * @param integer $Offset Record offset starting from `0`. Default value: `0`.
     * @param integer $Limit Total number of logs to be obtained. For example, `20` indicates to obtain 20 logs. Default value: `500`. Maximum value: `500`.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
