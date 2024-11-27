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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateOrganizationIdentity request structure.
 *
 * @method integer getIdentityId() Obtain Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 * @method void setIdentityId(integer $IdentityId) Set Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
 * @method string getDescription() Obtain Identity description.
 * @method void setDescription(string $Description) Set Identity description.
 * @method array getIdentityPolicy() Obtain Identity policy.
 * @method void setIdentityPolicy(array $IdentityPolicy) Set Identity policy.
 */
class UpdateOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
     */
    public $IdentityId;

    /**
     * @var string Identity description.
     */
    public $Description;

    /**
     * @var array Identity policy.
     */
    public $IdentityPolicy;

    /**
     * @param integer $IdentityId Identity ID, which can be obtained through [ListOrganizationIdentity](https://intl.cloud.tencent.com/document/product/850/82934?from_cn_redirect=1).
     * @param string $Description Identity description.
     * @param array $IdentityPolicy Identity policy.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IdentityPolicy",$param) and $param["IdentityPolicy"] !== null) {
            $this->IdentityPolicy = [];
            foreach ($param["IdentityPolicy"] as $key => $value){
                $obj = new IdentityPolicy();
                $obj->deserialize($value);
                array_push($this->IdentityPolicy, $obj);
            }
        }
    }
}
