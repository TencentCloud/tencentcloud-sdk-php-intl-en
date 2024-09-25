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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtectionStatus request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getEdition() Obtain Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method void setEdition(string $Edition) Set Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 */
class ModifyProtectionStatusRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     */
    public $Edition;

    /**
     * @param string $Domain Domain name
     * @param integer $Status Status
     * @param string $Edition Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }
    }
}
