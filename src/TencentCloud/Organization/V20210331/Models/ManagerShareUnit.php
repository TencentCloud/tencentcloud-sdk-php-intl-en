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
 * Details of my shared unit list
 *
 * @method string getUnitId() Obtain <p>Shared unit ID.</p>.
 * @method void setUnitId(string $UnitId) Set <p>Shared unit ID.</p>.
 * @method string getName() Obtain <P>Shared unit name.</p>.
 * @method void setName(string $Name) Set <P>Shared unit name.</p>.
 * @method integer getUin() Obtain <p>Shared unit administrator Uin.</p>.
 * @method void setUin(integer $Uin) Set <p>Shared unit administrator Uin.</p>.
 * @method integer getOwnerUin() Obtain <p>Shared unit administrator OwnerUin.</p>.
 * @method void setOwnerUin(integer $OwnerUin) Set <p>Shared unit administrator OwnerUin.</p>.
 * @method string getArea() Obtain <P>Shared unit region.</p>.
 * @method void setArea(string $Area) Set <P>Shared unit region.</p>.
 * @method string getDescription() Obtain <P>Description.</P>.
 * @method void setDescription(string $Description) Set <P>Description.</P>.
 * @method string getCreateTime() Obtain <P>Creation time.</p>.
 * @method void setCreateTime(string $CreateTime) Set <P>Creation time.</p>.
 * @method integer getShareResourceNum() Obtain <P>The number of resources in a shared unit.</p>.
 * @method void setShareResourceNum(integer $ShareResourceNum) Set <P>The number of resources in a shared unit.</p>.
 * @method integer getShareMemberNum() Obtain <P>The number of members in a shared unit.</p>.
 * @method void setShareMemberNum(integer $ShareMemberNum) Set <P>The number of members in a shared unit.</p>.
 * @method integer getShareScope() Obtain <P>Sharing scope. valid values: 1: only sharing within a group organization is allowed; 2: sharing with any account is allowed.</p>.
 * @method void setShareScope(integer $ShareScope) Set <P>Sharing scope. valid values: 1: only sharing within a group organization is allowed; 2: sharing with any account is allowed.</p>.
 * @method integer getShareNodeNum() Obtain <P>The number of departments in a shared unit.</p>.
 * @method void setShareNodeNum(integer $ShareNodeNum) Set <P>The number of departments in a shared unit.</p>.
 */
class ManagerShareUnit extends AbstractModel
{
    /**
     * @var string <p>Shared unit ID.</p>.
     */
    public $UnitId;

    /**
     * @var string <P>Shared unit name.</p>.
     */
    public $Name;

    /**
     * @var integer <p>Shared unit administrator Uin.</p>.
     */
    public $Uin;

    /**
     * @var integer <p>Shared unit administrator OwnerUin.</p>.
     */
    public $OwnerUin;

    /**
     * @var string <P>Shared unit region.</p>.
     */
    public $Area;

    /**
     * @var string <P>Description.</P>.
     */
    public $Description;

    /**
     * @var string <P>Creation time.</p>.
     */
    public $CreateTime;

    /**
     * @var integer <P>The number of resources in a shared unit.</p>.
     */
    public $ShareResourceNum;

    /**
     * @var integer <P>The number of members in a shared unit.</p>.
     */
    public $ShareMemberNum;

    /**
     * @var integer <P>Sharing scope. valid values: 1: only sharing within a group organization is allowed; 2: sharing with any account is allowed.</p>.
     */
    public $ShareScope;

    /**
     * @var integer <P>The number of departments in a shared unit.</p>.
     */
    public $ShareNodeNum;

    /**
     * @param string $UnitId <p>Shared unit ID.</p>.
     * @param string $Name <P>Shared unit name.</p>.
     * @param integer $Uin <p>Shared unit administrator Uin.</p>.
     * @param integer $OwnerUin <p>Shared unit administrator OwnerUin.</p>.
     * @param string $Area <P>Shared unit region.</p>.
     * @param string $Description <P>Description.</P>.
     * @param string $CreateTime <P>Creation time.</p>.
     * @param integer $ShareResourceNum <P>The number of resources in a shared unit.</p>.
     * @param integer $ShareMemberNum <P>The number of members in a shared unit.</p>.
     * @param integer $ShareScope <P>Sharing scope. valid values: 1: only sharing within a group organization is allowed; 2: sharing with any account is allowed.</p>.
     * @param integer $ShareNodeNum <P>The number of departments in a shared unit.</p>.
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

        if (array_key_exists("ShareNodeNum",$param) and $param["ShareNodeNum"] !== null) {
            $this->ShareNodeNum = $param["ShareNodeNum"];
        }
    }
}
