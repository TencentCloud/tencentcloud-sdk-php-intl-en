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
 * The information of registered users.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.

 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.

 * @method string getUserId() Obtain The user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set The user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginId() Obtain The user’s ID in your system. If the same request parameter is not specified, the value of this parameter will be the same as `UserId`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginId(string $OriginId) Set The user’s ID in your system. If the same request parameter is not specified, the value of this parameter will be the same as `UserId`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BatchUserInfo extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.

     */
    public $SdkAppId;

    /**
     * @var string The user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string The user’s ID in your system. If the same request parameter is not specified, the value of this parameter will be the same as `UserId`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginId;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.

     * @param string $UserId The user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginId The user’s ID in your system. If the same request parameter is not specified, the value of this parameter will be the same as `UserId`.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }
    }
}
