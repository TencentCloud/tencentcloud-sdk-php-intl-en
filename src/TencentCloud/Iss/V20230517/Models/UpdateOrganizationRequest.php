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
 * UpdateOrganization request structure.
 *
 * @method string getOrganizationId() Obtain Organization ID (obtain from the DescribeOrganization API for querying organizations)
 * @method void setOrganizationId(string $OrganizationId) Set Organization ID (obtain from the DescribeOrganization API for querying organizations)
 * @method string getName() Obtain Organization name. Chinese, English, digits, spaces, Chinese and English parentheses, underscores (_), and hyphens (-) are supported. The length cannot exceed 64 characters, and the organization name must be unique.
 * @method void setName(string $Name) Set Organization name. Chinese, English, digits, spaces, Chinese and English parentheses, underscores (_), and hyphens (-) are supported. The length cannot exceed 64 characters, and the organization name must be unique.
 */
class UpdateOrganizationRequest extends AbstractModel
{
    /**
     * @var string Organization ID (obtain from the DescribeOrganization API for querying organizations)
     */
    public $OrganizationId;

    /**
     * @var string Organization name. Chinese, English, digits, spaces, Chinese and English parentheses, underscores (_), and hyphens (-) are supported. The length cannot exceed 64 characters, and the organization name must be unique.
     */
    public $Name;

    /**
     * @param string $OrganizationId Organization ID (obtain from the DescribeOrganization API for querying organizations)
     * @param string $Name Organization name. Chinese, English, digits, spaces, Chinese and English parentheses, underscores (_), and hyphens (-) are supported. The length cannot exceed 64 characters, and the organization name must be unique.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
