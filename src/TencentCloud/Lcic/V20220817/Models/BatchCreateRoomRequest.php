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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateRoom request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method array getRoomInfos() Obtain The information of the rooms to create.
 * @method void setRoomInfos(array $RoomInfos) Set The information of the rooms to create.
 */
class BatchCreateRoomRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var array The information of the rooms to create.
     */
    public $RoomInfos;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param array $RoomInfos The information of the rooms to create.
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

        if (array_key_exists("RoomInfos",$param) and $param["RoomInfos"] !== null) {
            $this->RoomInfos = [];
            foreach ($param["RoomInfos"] as $key => $value){
                $obj = new RoomInfo();
                $obj->deserialize($value);
                array_push($this->RoomInfos, $obj);
            }
        }
    }
}
