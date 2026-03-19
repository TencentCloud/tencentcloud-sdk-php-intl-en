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
 * DescribePolicyConfig request structure.
 *
 * @method integer getOrganizationId() Obtain Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
 * @method void setOrganizationId(integer $OrganizationId) Set Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
 * @method integer getType() Obtain Policy type. Default value: 0; valid values: 0 (service control policy) and 1 (Tag policy).
 * @method void setType(integer $Type) Set Policy type. Default value: 0; valid values: 0 (service control policy) and 1 (Tag policy).
 */
class DescribePolicyConfigRequest extends AbstractModel
{
    /**
     * @var integer Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
     */
    public $OrganizationId;

    /**
     * @var integer Policy type. Default value: 0; valid values: 0 (service control policy) and 1 (Tag policy).
     */
    public $Type;

    /**
     * @param integer $OrganizationId Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
     * @param integer $Type Policy type. Default value: 0; valid values: 0 (service control policy) and 1 (Tag policy).
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
