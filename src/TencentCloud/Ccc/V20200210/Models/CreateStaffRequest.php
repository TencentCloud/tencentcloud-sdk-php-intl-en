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
 * CreateStaff request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method array getStaffs() Obtain Customer information, no more than 10.
 * @method void setStaffs(array $Staffs) Set Customer information, no more than 10.
 * @method boolean getSendPassword() Obtain Whether to send a password mail or not (the default is true).
 * @method void setSendPassword(boolean $SendPassword) Set Whether to send a password mail or not (the default is true).
 */
class CreateStaffRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var array Customer information, no more than 10.
     */
    public $Staffs;

    /**
     * @var boolean Whether to send a password mail or not (the default is true).
     */
    public $SendPassword;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param array $Staffs Customer information, no more than 10.
     * @param boolean $SendPassword Whether to send a password mail or not (the default is true).
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

        if (array_key_exists("Staffs",$param) and $param["Staffs"] !== null) {
            $this->Staffs = [];
            foreach ($param["Staffs"] as $key => $value){
                $obj = new SeatUserInfo();
                $obj->deserialize($value);
                array_push($this->Staffs, $obj);
            }
        }

        if (array_key_exists("SendPassword",$param) and $param["SendPassword"] !== null) {
            $this->SendPassword = $param["SendPassword"];
        }
    }
}
