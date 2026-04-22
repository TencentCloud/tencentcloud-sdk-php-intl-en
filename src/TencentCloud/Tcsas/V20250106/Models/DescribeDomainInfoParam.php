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
 * Domain information
 *
 * @method string getDomainUrl() Obtain Multiple domain separators ';'.
 * @method void setDomainUrl(string $DomainUrl) Set Multiple domain separators ';'.
 * @method integer getDomainType() Obtain Domain type 1-requests domain 2-business domain.
 * @method void setDomainType(integer $DomainType) Set Domain type 1-requests domain 2-business domain.
 */
class DescribeDomainInfoParam extends AbstractModel
{
    /**
     * @var string Multiple domain separators ';'.
     */
    public $DomainUrl;

    /**
     * @var integer Domain type 1-requests domain 2-business domain.
     */
    public $DomainType;

    /**
     * @param string $DomainUrl Multiple domain separators ';'.
     * @param integer $DomainType Domain type 1-requests domain 2-business domain.
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
