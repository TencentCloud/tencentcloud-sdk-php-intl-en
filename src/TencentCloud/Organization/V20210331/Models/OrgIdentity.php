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
 * Organization identity
 *
 * @method integer getIdentityId() Obtain Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityAliasName() Obtain Identity name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityAliasName(string $IdentityAliasName) Set Identity name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIdentityPolicy() Obtain Identity policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityPolicy(array $IdentityPolicy) Set Identity policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIdentityType() Obtain Identity type. Valid values: `1` (preset); `2` (custom).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityType(integer $IdentityType) Set Identity type. Valid values: `1` (preset); `2` (custom).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgIdentity extends AbstractModel
{
    /**
     * @var integer Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityId;

    /**
     * @var string Identity name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityAliasName;

    /**
     * @var string Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var array Identity policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityPolicy;

    /**
     * @var integer Identity type. Valid values: `1` (preset); `2` (custom).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityType;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $IdentityId Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityAliasName Identity name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IdentityPolicy Identity policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IdentityType Identity type. Valid values: `1` (preset); `2` (custom).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.
Note: This field may return null, indicating that no valid values can be obtained.
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
