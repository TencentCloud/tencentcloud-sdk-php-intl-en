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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainUsrName request structure.
 *
 * @method string getDomainName() Obtain User CNAME
 * @method void setDomainName(string $DomainName) Set User CNAME
 * @method string getDomainUserName() Obtain Domain name
 * @method void setDomainUserName(string $DomainUserName) Set Domain name
 */
class ModifyDomainUsrNameRequest extends AbstractModel
{
    /**
     * @var string User CNAME
     */
    public $DomainName;

    /**
     * @var string Domain name
     */
    public $DomainUserName;

    /**
     * @param string $DomainName User CNAME
     * @param string $DomainUserName Domain name
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

        if (array_key_exists("DomainUserName",$param) and $param["DomainUserName"] !== null) {
            $this->DomainUserName = $param["DomainUserName"];
        }
    }
}
