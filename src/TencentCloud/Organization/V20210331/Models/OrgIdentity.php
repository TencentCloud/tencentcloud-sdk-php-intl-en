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
 * Organization identity
 *
 * @method integer getIdentityId() Obtain Identity ID.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
 * @method string getIdentityAliasName() Obtain Identity name.
 * @method void setIdentityAliasName(string $IdentityAliasName) Set Identity name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method array getIdentityPolicy() Obtain Identity policy.
 * @method void setIdentityPolicy(array $IdentityPolicy) Set Identity policy.
 * @method integer getIdentityType() Obtain Identity type. 1: preset; 2: custom.
 * @method void setIdentityType(integer $IdentityType) Set Identity type. 1: preset; 2: custom.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class OrgIdentity extends AbstractModel
{
    /**
     * @var integer Identity ID.
     */
    public $IdentityId;

    /**
     * @var string Identity name.
     */
    public $IdentityAliasName;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var array Identity policy.
     */
    public $IdentityPolicy;

    /**
     * @var integer Identity type. 1: preset; 2: custom.
     */
    public $IdentityType;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param integer $IdentityId Identity ID.
     * @param string $IdentityAliasName Identity name.
     * @param string $Description Description.
     * @param array $IdentityPolicy Identity policy.
     * @param integer $IdentityType Identity type. 1: preset; 2: custom.
     * @param string $UpdateTime Update time.
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

        if (array_key_exists("IdentityAliasName",$param) and $param["IdentityAliasName"] !== null) {
            $this->IdentityAliasName = $param["IdentityAliasName"];
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

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
