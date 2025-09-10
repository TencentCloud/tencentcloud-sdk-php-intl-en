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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserSig request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method string getUid() Obtain User ID, must be consistent with the Uid value in the ClientData field.
 * @method void setUid(string $Uid) Set User ID, must be consistent with the Uid value in the ClientData field.
 * @method integer getExpiredTime() Obtain Valid period, in seconds, no more than 1 hr.
 * @method void setExpiredTime(integer $ExpiredTime) Set Valid period, in seconds, no more than 1 hr.
 * @method string getClientData() Obtain Signature data of the user. required field. standard JSON format.
 * @method void setClientData(string $ClientData) Set Signature data of the user. required field. standard JSON format.
 */
class CreateUserSigRequest extends AbstractModel
{
    /**
     * @var integer App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string User ID, must be consistent with the Uid value in the ClientData field.
     */
    public $Uid;

    /**
     * @var integer Valid period, in seconds, no more than 1 hr.
     */
    public $ExpiredTime;

    /**
     * @var string Signature data of the user. required field. standard JSON format.
     */
    public $ClientData;

    /**
     * @param integer $SdkAppId App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     * @param string $Uid User ID, must be consistent with the Uid value in the ClientData field.
     * @param integer $ExpiredTime Valid period, in seconds, no more than 1 hr.
     * @param string $ClientData Signature data of the user. required field. standard JSON format.
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

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("ClientData",$param) and $param["ClientData"] !== null) {
            $this->ClientData = $param["ClientData"];
        }
    }
}
