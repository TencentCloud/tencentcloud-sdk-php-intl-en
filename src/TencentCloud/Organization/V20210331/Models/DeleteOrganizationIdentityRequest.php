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
 * DeleteOrganizationIdentity request structure.
 *
 * @method integer getIdentityId() Obtain Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 * @method void setIdentityId(integer $IdentityId) Set Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 */
class DeleteOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
     */
    public $IdentityId;

    /**
     * @param integer $IdentityId Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }
    }
}
