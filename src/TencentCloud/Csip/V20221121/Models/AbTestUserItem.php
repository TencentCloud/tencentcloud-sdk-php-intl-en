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
 * Grayscale user configuration
 *
 * @method integer getAppId() Obtain appId
 * @method void setAppId(integer $AppId) Set appId
 * @method boolean getIsAbTestUser() Obtain Whether it is a grayscale user
 * @method void setIsAbTestUser(boolean $IsAbTestUser) Set Whether it is a grayscale user
 */
class AbTestUserItem extends AbstractModel
{
    /**
     * @var integer appId
     */
    public $AppId;

    /**
     * @var boolean Whether it is a grayscale user
     */
    public $IsAbTestUser;

    /**
     * @param integer $AppId appId
     * @param boolean $IsAbTestUser Whether it is a grayscale user
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IsAbTestUser",$param) and $param["IsAbTestUser"] !== null) {
            $this->IsAbTestUser = $param["IsAbTestUser"];
        }
    }
}
