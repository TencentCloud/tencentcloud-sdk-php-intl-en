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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos risk identification bucket access rule
 *
 * @method string getAccessType() Obtain Access methods:
specify users
anonymous access allowed
 * @method void setAccessType(string $AccessType) Set Access methods:
specify users
anonymous access allowed
 * @method integer getAccessUserCount() Obtain Number of users
 * @method void setAccessUserCount(integer $AccessUserCount) Set Number of users
 * @method integer getAccessAkCount() Obtain Number of AKs
 * @method void setAccessAkCount(integer $AccessAkCount) Set Number of AKs
 * @method integer getAccessRoleCount() Obtain Number of roles
 * @method void setAccessRoleCount(integer $AccessRoleCount) Set Number of roles
 */
class CosBucketAccessWay extends AbstractModel
{
    /**
     * @var string Access methods:
specify users
anonymous access allowed
     */
    public $AccessType;

    /**
     * @var integer Number of users
     */
    public $AccessUserCount;

    /**
     * @var integer Number of AKs
     */
    public $AccessAkCount;

    /**
     * @var integer Number of roles
     */
    public $AccessRoleCount;

    /**
     * @param string $AccessType Access methods:
specify users
anonymous access allowed
     * @param integer $AccessUserCount Number of users
     * @param integer $AccessAkCount Number of AKs
     * @param integer $AccessRoleCount Number of roles
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessUserCount",$param) and $param["AccessUserCount"] !== null) {
            $this->AccessUserCount = $param["AccessUserCount"];
        }

        if (array_key_exists("AccessAkCount",$param) and $param["AccessAkCount"] !== null) {
            $this->AccessAkCount = $param["AccessAkCount"];
        }

        if (array_key_exists("AccessRoleCount",$param) and $param["AccessRoleCount"] !== null) {
            $this->AccessRoleCount = $param["AccessRoleCount"];
        }
    }
}
