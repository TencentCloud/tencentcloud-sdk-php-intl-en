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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCNAME request structure.
 *
 * @method string getClusterId() Obtain Service node ID (obtain from the DescribeDomainRegion API for querying domain name bindable service nodes)
 * @method void setClusterId(string $ClusterId) Set Service node ID (obtain from the DescribeDomainRegion API for querying domain name bindable service nodes)
 * @method integer getDomainType() Obtain Domain type. 0: pull streaming domain name. 1: streaming domain.
 * @method void setDomainType(integer $DomainType) Set Domain type. 0: pull streaming domain name. 1: streaming domain.
 */
class DescribeCNAMERequest extends AbstractModel
{
    /**
     * @var string Service node ID (obtain from the DescribeDomainRegion API for querying domain name bindable service nodes)
     */
    public $ClusterId;

    /**
     * @var integer Domain type. 0: pull streaming domain name. 1: streaming domain.
     */
    public $DomainType;

    /**
     * @param string $ClusterId Service node ID (obtain from the DescribeDomainRegion API for querying domain name bindable service nodes)
     * @param integer $DomainType Domain type. 0: pull streaming domain name. 1: streaming domain.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
