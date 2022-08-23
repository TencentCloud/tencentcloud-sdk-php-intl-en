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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The SEI parameters for audio volume layout. You can specify the `AppData` and `PayloadType`.
This parameter may be empty, in which case the default SEI parameters for audio volume layout will be used.
 *
 * @method string getAppData() Obtain The application data, which will be embedded in the `app_data` field of the custom SEI. It must be shorter than 4,096 characters.
 * @method void setAppData(string $AppData) Set The application data, which will be embedded in the `app_data` field of the custom SEI. It must be shorter than 4,096 characters.
 * @method integer getPayloadType() Obtain The payload type of the SEI message. The default is 100. Value range: 100-254 (244 is used internally by Tencent Cloud for timestamps).
 * @method void setPayloadType(integer $PayloadType) Set The payload type of the SEI message. The default is 100. Value range: 100-254 (244 is used internally by Tencent Cloud for timestamps).
 */
class McuLayoutVolume extends AbstractModel
{
    /**
     * @var string The application data, which will be embedded in the `app_data` field of the custom SEI. It must be shorter than 4,096 characters.
     */
    public $AppData;

    /**
     * @var integer The payload type of the SEI message. The default is 100. Value range: 100-254 (244 is used internally by Tencent Cloud for timestamps).
     */
    public $PayloadType;

    /**
     * @param string $AppData The application data, which will be embedded in the `app_data` field of the custom SEI. It must be shorter than 4,096 characters.
     * @param integer $PayloadType The payload type of the SEI message. The default is 100. Value range: 100-254 (244 is used internally by Tencent Cloud for timestamps).
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
        if (array_key_exists("AppData",$param) and $param["AppData"] !== null) {
            $this->AppData = $param["AppData"];
        }

        if (array_key_exists("PayloadType",$param) and $param["PayloadType"] !== null) {
            $this->PayloadType = $param["PayloadType"];
        }
    }
}
