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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPolicies request structure.
 *
 * @method integer getRp() Obtain Items per page, which should be greater than 0 and less than or equal to 200. The default value is 20.
 * @method void setRp(integer $Rp) Set Items per page, which should be greater than 0 and less than or equal to 200. The default value is 20.
 * @method integer getPage() Obtain Page number, which starts from 1 and cannot exceed 200. The default value is 1.
 * @method void setPage(integer $Page) Set Page number, which starts from 1 and cannot exceed 200. The default value is 1.
 * @method string getScope() Obtain Query range. Valid values: All: all policies; QCS; only preset policies; Local: only custom policies. The default value is All.
 * @method void setScope(string $Scope) Set Query range. Valid values: All: all policies; QCS; only preset policies; Local: only custom policies. The default value is All.
 * @method string getKeyword() Obtain Search keyword. Searches can be performed by policy name.
 * @method void setKeyword(string $Keyword) Set Search keyword. Searches can be performed by policy name.
 * @method string getPolicyType() Obtain Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 * @method void setPolicyType(string $PolicyType) Set Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 */
class ListPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Items per page, which should be greater than 0 and less than or equal to 200. The default value is 20.
     */
    public $Rp;

    /**
     * @var integer Page number, which starts from 1 and cannot exceed 200. The default value is 1.
     */
    public $Page;

    /**
     * @var string Query range. Valid values: All: all policies; QCS; only preset policies; Local: only custom policies. The default value is All.
     */
    public $Scope;

    /**
     * @var string Search keyword. Searches can be performed by policy name.
     */
    public $Keyword;

    /**
     * @var string Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
     */
    public $PolicyType;

    /**
     * @param integer $Rp Items per page, which should be greater than 0 and less than or equal to 200. The default value is 20.
     * @param integer $Page Page number, which starts from 1 and cannot exceed 200. The default value is 1.
     * @param string $Scope Query range. Valid values: All: all policies; QCS; only preset policies; Local: only custom policies. The default value is All.
     * @param string $Keyword Search keyword. Searches can be performed by policy name.
     * @param string $PolicyType Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
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
        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
