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
 * The user information.
Used by actions: DescribeSdkAppIdUsers.
 *
 * @method integer getSdkAppId() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSdkAppId(integer $SdkAppId) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAvatar() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvatar(string $Avatar) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginId() Obtain User's Id in the client system
 * @method void setOriginId(string $OriginId) Set User's Id in the client system
 */
class UserInfo extends AbstractModel
{
    /**
     * @var integer 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SdkAppId;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Avatar;

    /**
     * @var string User's Id in the client system
     */
    public $OriginId;

    /**
     * @param integer $SdkAppId 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Avatar 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginId User's Id in the client system
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }
    }
}
