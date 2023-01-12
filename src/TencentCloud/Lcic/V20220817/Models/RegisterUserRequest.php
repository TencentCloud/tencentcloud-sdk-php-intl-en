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
 * RegisterUser request structure.
 *
 * @method integer getSdkAppId() Obtain LCIC SdkAppId	
 * @method void setSdkAppId(integer $SdkAppId) Set LCIC SdkAppId	
 * @method string getName() Obtain Username	
 * @method void setName(string $Name) Set Username	
 * @method string getOriginId() Obtain User's ID in the customer system, which should be unique under the same application	
 * @method void setOriginId(string $OriginId) Set User's ID in the customer system, which should be unique under the same application	
 * @method string getAvatar() Obtain User's profile photo	
 * @method void setAvatar(string $Avatar) Set User's profile photo	
 */
class RegisterUserRequest extends AbstractModel
{
    /**
     * @var integer LCIC SdkAppId	
     */
    public $SdkAppId;

    /**
     * @var string Username	
     */
    public $Name;

    /**
     * @var string User's ID in the customer system, which should be unique under the same application	
     */
    public $OriginId;

    /**
     * @var string User's profile photo	
     */
    public $Avatar;

    /**
     * @param integer $SdkAppId LCIC SdkAppId	
     * @param string $Name Username	
     * @param string $OriginId User's ID in the customer system, which should be unique under the same application	
     * @param string $Avatar User's profile photo	
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
