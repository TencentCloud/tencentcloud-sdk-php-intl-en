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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini game type definition
 *
 * @method string getTypeName() Obtain <p>Mini game category name</p>
 * @method void setTypeName(string $TypeName) Set <p>Mini game category name</p>
 * @method array getTypeValue() Obtain <p>Mini game category</p>
 * @method void setTypeValue(array $TypeValue) Set <p>Mini game category</p>
 * @method integer getTypeId() Obtain <p>Category ID</p>
 * @method void setTypeId(integer $TypeId) Set <p>Category ID</p>
 * @method integer getCreateTime() Obtain <p>Creation time</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time</p>
 * @method string getCreateUser() Obtain <p>Creator</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator</p>
 * @method boolean getIsSystem() Obtain <p>Whether this is a system category</p>
 * @method void setIsSystem(boolean $IsSystem) Set <p>Whether this is a system category</p>
 */
class MNGTypeDefine extends AbstractModel
{
    /**
     * @var string <p>Mini game category name</p>
     */
    public $TypeName;

    /**
     * @var array <p>Mini game category</p>
     */
    public $TypeValue;

    /**
     * @var integer <p>Category ID</p>
     */
    public $TypeId;

    /**
     * @var integer <p>Creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Creator</p>
     */
    public $CreateUser;

    /**
     * @var boolean <p>Whether this is a system category</p>
     */
    public $IsSystem;

    /**
     * @param string $TypeName <p>Mini game category name</p>
     * @param array $TypeValue <p>Mini game category</p>
     * @param integer $TypeId <p>Category ID</p>
     * @param integer $CreateTime <p>Creation time</p>
     * @param string $CreateUser <p>Creator</p>
     * @param boolean $IsSystem <p>Whether this is a system category</p>
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("TypeValue",$param) and $param["TypeValue"] !== null) {
            $this->TypeValue = $param["TypeValue"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
