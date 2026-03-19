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
 * EnablePolicyType request structure.
 *
 * @method integer getOrganizationId() Obtain Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
 * @method void setOrganizationId(integer $OrganizationId) Set Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
 * @method string getPolicyType() Obtain Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 * @method void setPolicyType(string $PolicyType) Set Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 */
class EnablePolicyTypeRequest extends AbstractModel
{
    /**
     * @var integer Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
     */
    public $OrganizationId;

    /**
     * @var string Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
     */
    public $PolicyType;

    /**
     * @param integer $OrganizationId Organization Id. call the api [DescribeOrganization](https://www.tencentcloud.com/document/product/850/67059?from_cn_redirect=1) to obtain it.
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
