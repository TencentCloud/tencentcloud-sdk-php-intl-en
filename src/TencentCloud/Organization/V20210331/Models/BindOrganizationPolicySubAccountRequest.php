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
 * BindOrganizationPolicySubAccount request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID.
 * @method void setPolicyId(integer $PolicyId) Set Policy ID.
 * @method array getOrgSubAccountUins() Obtain List of sub-account UINs of the organization administrator. A maximum of 5 UINs is supported.
 * @method void setOrgSubAccountUins(array $OrgSubAccountUins) Set List of sub-account UINs of the organization administrator. A maximum of 5 UINs is supported.
 */
class BindOrganizationPolicySubAccountRequest extends AbstractModel
{
    /**
     * @var integer Policy ID.
     */
    public $PolicyId;

    /**
     * @var array List of sub-account UINs of the organization administrator. A maximum of 5 UINs is supported.
     */
    public $OrgSubAccountUins;

    /**
     * @param integer $PolicyId Policy ID.
     * @param array $OrgSubAccountUins List of sub-account UINs of the organization administrator. A maximum of 5 UINs is supported.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("OrgSubAccountUins",$param) and $param["OrgSubAccountUins"] !== null) {
            $this->OrgSubAccountUins = $param["OrgSubAccountUins"];
        }
    }
}
