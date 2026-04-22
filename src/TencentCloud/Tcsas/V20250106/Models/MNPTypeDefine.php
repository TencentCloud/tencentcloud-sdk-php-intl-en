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
 * Mini program category information
 *
 * @method string getTypeName() Obtain Specifies the mini program category name.
 * @method void setTypeName(string $TypeName) Set Specifies the mini program category name.
 * @method array getTypeValue() Obtain Mini program category value.
 * @method void setTypeValue(array $TypeValue) Set Mini program category value.
 * @method integer getTypeId() Obtain Category ID.
 * @method void setTypeId(integer $TypeId) Set Category ID.
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method boolean getIsSystem() Obtain Indicates whether it is a system category.
 * @method void setIsSystem(boolean $IsSystem) Set Indicates whether it is a system category.
 */
class MNPTypeDefine extends AbstractModel
{
    /**
     * @var string Specifies the mini program category name.
     */
    public $TypeName;

    /**
     * @var array Mini program category value.
     */
    public $TypeValue;

    /**
     * @var integer Category ID.
     */
    public $TypeId;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var boolean Indicates whether it is a system category.
     */
    public $IsSystem;

    /**
     * @param string $TypeName Specifies the mini program category name.
     * @param array $TypeValue Mini program category value.
     * @param integer $TypeId Category ID.
     * @param integer $CreateTime Creation time
     * @param string $CreateUser Creator
     * @param boolean $IsSystem Indicates whether it is a system category.
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
