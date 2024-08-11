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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of mini program categories
 *
 * @method string getTypeName() Obtain Mini program category name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypeName(string $TypeName) Set Mini program category name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTypeValue() Obtain Mini program category value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypeValue(array $TypeValue) Set Mini program category value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTypeId() Obtain Category ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypeId(integer $TypeId) Set Category ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSystem() Obtain Whether it is a system category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSystem(boolean $IsSystem) Set Whether it is a system category
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MNPTypeDefine extends AbstractModel
{
    /**
     * @var string Mini program category name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TypeName;

    /**
     * @var array Mini program category value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TypeValue;

    /**
     * @var integer Category ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TypeId;

    /**
     * @var integer Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var boolean Whether it is a system category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSystem;

    /**
     * @param string $TypeName Mini program category name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TypeValue Mini program category value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TypeId Category ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSystem Whether it is a system category
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
