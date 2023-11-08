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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bindings between a shared CNAME and connected domain names
 *
 * @method string getSharedCNAME() Obtain The shared CNAME to be bound with or unbound from.
 * @method void setSharedCNAME(string $SharedCNAME) Set The shared CNAME to be bound with or unbound from.
 * @method array getDomainNames() Obtain Acceleration domains (up to 20).
 * @method void setDomainNames(array $DomainNames) Set Acceleration domains (up to 20).
 */
class BindSharedCNAMEMap extends AbstractModel
{
    /**
     * @var string The shared CNAME to be bound with or unbound from.
     */
    public $SharedCNAME;

    /**
     * @var array Acceleration domains (up to 20).
     */
    public $DomainNames;

    /**
     * @param string $SharedCNAME The shared CNAME to be bound with or unbound from.
     * @param array $DomainNames Acceleration domains (up to 20).
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
        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
