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
 * CreateOrganizationIdentity request structure.
 *
 * @method string getIdentityAliasName() Obtain Identity name.
 * @method void setIdentityAliasName(string $IdentityAliasName) Set Identity name.
 * @method array getIdentityPolicy() Obtain Identity policy.
 * @method void setIdentityPolicy(array $IdentityPolicy) Set Identity policy.
 * @method string getDescription() Obtain Identity description.
 * @method void setDescription(string $Description) Set Identity description.
 */
class CreateOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var string Identity name.
     */
    public $IdentityAliasName;

    /**
     * @var array Identity policy.
     */
    public $IdentityPolicy;

    /**
     * @var string Identity description.
     */
    public $Description;

    /**
     * @param string $IdentityAliasName Identity name.
     * @param array $IdentityPolicy Identity policy.
     * @param string $Description Identity description.
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
        if (array_key_exists("IdentityAliasName",$param) and $param["IdentityAliasName"] !== null) {
            $this->IdentityAliasName = $param["IdentityAliasName"];
        }

        if (array_key_exists("IdentityPolicy",$param) and $param["IdentityPolicy"] !== null) {
            $this->IdentityPolicy = [];
            foreach ($param["IdentityPolicy"] as $key => $value){
                $obj = new IdentityPolicy();
                $obj->deserialize($value);
                array_push($this->IdentityPolicy, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
