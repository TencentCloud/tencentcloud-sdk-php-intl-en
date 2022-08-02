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
 * Domain information returned during domain creation
 *
 * @method integer getId() Obtain Domain ID
 * @method void setId(integer $Id) Set Domain ID
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getPunycode() Obtain Domain Punycode
 * @method void setPunycode(string $Punycode) Set Domain Punycode
 * @method array getGradeNsList() Obtain NS list of the domain
 * @method void setGradeNsList(array $GradeNsList) Set NS list of the domain
 */
class DomainCreateInfo extends AbstractModel
{
    /**
     * @var integer Domain ID
     */
    public $Id;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Domain Punycode
     */
    public $Punycode;

    /**
     * @var array NS list of the domain
     */
    public $GradeNsList;

    /**
     * @param integer $Id Domain ID
     * @param string $Domain Domain
     * @param string $Punycode Domain Punycode
     * @param array $GradeNsList NS list of the domain
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("GradeNsList",$param) and $param["GradeNsList"] !== null) {
            $this->GradeNsList = $param["GradeNsList"];
        }
    }
}
