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
 * Details of my shared unit list
 *
 * @method string getUnitId() Obtain Shared unit ID.
 * @method void setUnitId(string $UnitId) Set Shared unit ID.
 * @method string getName() Obtain Shared unit name.
 * @method void setName(string $Name) Set Shared unit name.
 * @method integer getUin() Obtain Shared unit administrator UIN.
 * @method void setUin(integer $Uin) Set Shared unit administrator UIN.
 * @method integer getOwnerUin() Obtain Shared unit administrator OwnerUin.
 * @method void setOwnerUin(integer $OwnerUin) Set Shared unit administrator OwnerUin.
 * @method string getArea() Obtain Shared unit region.
 * @method void setArea(string $Area) Set Shared unit region.
 * @method string getDescription() Obtain Description.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShareResourceNum() Obtain The number of resources in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShareResourceNum(integer $ShareResourceNum) Set The number of resources in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShareMemberNum() Obtain The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShareMemberNum(integer $ShareMemberNum) Set The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShareScope() Obtain Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShareScope(integer $ShareScope) Set Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ManagerShareUnit extends AbstractModel
{
    /**
     * @var string Shared unit ID.
     */
    public $UnitId;

    /**
     * @var string Shared unit name.
     */
    public $Name;

    /**
     * @var integer Shared unit administrator UIN.
     */
    public $Uin;

    /**
     * @var integer Shared unit administrator OwnerUin.
     */
    public $OwnerUin;

    /**
     * @var string Shared unit region.
     */
    public $Area;

    /**
     * @var string Description.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer The number of resources in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShareResourceNum;

    /**
     * @var integer The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShareMemberNum;

    /**
     * @var integer Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShareScope;

    /**
     * @param string $UnitId Shared unit ID.
     * @param string $Name Shared unit name.
     * @param integer $Uin Shared unit administrator UIN.
     * @param integer $OwnerUin Shared unit administrator OwnerUin.
     * @param string $Area Shared unit region.
     * @param string $Description Description.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShareResourceNum The number of resources in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShareMemberNum The number of members in a shared unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShareScope Sharing scope. Valid values: 1: Only sharing within a group organization is allowed; 2: Sharing with any account is allowed.
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ShareResourceNum",$param) and $param["ShareResourceNum"] !== null) {
            $this->ShareResourceNum = $param["ShareResourceNum"];
        }

        if (array_key_exists("ShareMemberNum",$param) and $param["ShareMemberNum"] !== null) {
            $this->ShareMemberNum = $param["ShareMemberNum"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }
    }
}
