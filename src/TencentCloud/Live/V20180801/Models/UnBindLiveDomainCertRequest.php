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
 * UnBindLiveDomainCert request structure.
 *
 * @method string getDomainName() Obtain Playback domain name.
 * @method void setDomainName(string $DomainName) Set Playback domain name.
 * @method string getType() Obtain Valid values:
`gray`: unbind the canary certificate
`formal` (default): unbind the formal certificate

`formal` will be used if no value is passed in
 * @method void setType(string $Type) Set Valid values:
`gray`: unbind the canary certificate
`formal` (default): unbind the formal certificate

`formal` will be used if no value is passed in
 */
class UnBindLiveDomainCertRequest extends AbstractModel
{
    /**
     * @var string Playback domain name.
     */
    public $DomainName;

    /**
     * @var string Valid values:
`gray`: unbind the canary certificate
`formal` (default): unbind the formal certificate

`formal` will be used if no value is passed in
     */
    public $Type;

    /**
     * @param string $DomainName Playback domain name.
     * @param string $Type Valid values:
`gray`: unbind the canary certificate
`formal` (default): unbind the formal certificate

`formal` will be used if no value is passed in
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
