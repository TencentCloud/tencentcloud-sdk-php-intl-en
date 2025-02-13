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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSDKLoginToken request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getSeatUserId() Obtain Agent account.
 * @method void setSeatUserId(string $SeatUserId) Set Agent account.
 * @method boolean getOnlyOnce() Obtain Whether the generated token is for one-time verification?.
 * @method void setOnlyOnce(boolean $OnlyOnce) Set Whether the generated token is for one-time verification?.
 */
class CreateSDKLoginTokenRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Agent account.
     */
    public $SeatUserId;

    /**
     * @var boolean Whether the generated token is for one-time verification?.
     */
    public $OnlyOnce;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $SeatUserId Agent account.
     * @param boolean $OnlyOnce Whether the generated token is for one-time verification?.
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

        if (array_key_exists("SeatUserId",$param) and $param["SeatUserId"] !== null) {
            $this->SeatUserId = $param["SeatUserId"];
        }

        if (array_key_exists("OnlyOnce",$param) and $param["OnlyOnce"] !== null) {
            $this->OnlyOnce = $param["OnlyOnce"];
        }
    }
}
