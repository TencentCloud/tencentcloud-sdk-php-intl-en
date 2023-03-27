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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the users to register.
Used by actions: BatchRegister.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain The username.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set The username.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginId() Obtain The user’s ID in your system, which must be unique across the same application.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginId(string $OriginId) Set The user’s ID in your system, which must be unique across the same application.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAvatar() Obtain The user’s profile photo.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvatar(string $Avatar) Set The user’s profile photo.  Note: This field may return null, indicating that no valid values can be obtained.
 */
class BatchUserRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SdkAppId;

    /**
     * @var string The username.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string The user’s ID in your system, which must be unique across the same application.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginId;

    /**
     * @var string The user’s profile photo.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Avatar;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.  Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name The username.  Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginId The user’s ID in your system, which must be unique across the same application.  Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Avatar The user’s profile photo.  Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
