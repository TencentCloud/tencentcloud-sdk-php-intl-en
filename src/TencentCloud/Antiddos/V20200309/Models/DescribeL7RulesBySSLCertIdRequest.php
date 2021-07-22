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
 * DescribeL7RulesBySSLCertId request structure.
 *
 * @method string getStatus() Obtain Domain name status. Valid values: `bindable`, `binded`, `opened`, `closed`, `all` (all states).
 * @method void setStatus(string $Status) Set Domain name status. Valid values: `bindable`, `binded`, `opened`, `closed`, `all` (all states).
 * @method array getCertIds() Obtain List of certificate IDs
 * @method void setCertIds(array $CertIds) Set List of certificate IDs
 */
class DescribeL7RulesBySSLCertIdRequest extends AbstractModel
{
    /**
     * @var string Domain name status. Valid values: `bindable`, `binded`, `opened`, `closed`, `all` (all states).
     */
    public $Status;

    /**
     * @var array List of certificate IDs
     */
    public $CertIds;

    /**
     * @param string $Status Domain name status. Valid values: `bindable`, `binded`, `opened`, `closed`, `all` (all states).
     * @param array $CertIds List of certificate IDs
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertIds",$param) and $param["CertIds"] !== null) {
            $this->CertIds = $param["CertIds"];
        }
    }
}
