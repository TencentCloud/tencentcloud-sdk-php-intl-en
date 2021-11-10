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
 * Recording duration statistics of a specific application (`SdkAppId`)
 *
 * @method string getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(string $SdkAppId) Set Application ID
 * @method array getUsages() Obtain Durations for the period queried
 * @method void setUsages(array $Usages) Set Durations for the period queried
 */
class SdkAppIdRecordUsage extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $SdkAppId;

    /**
     * @var array Durations for the period queried
     */
    public $Usages;

    /**
     * @param string $SdkAppId Application ID
     * @param array $Usages Durations for the period queried
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

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = [];
            foreach ($param["Usages"] as $key => $value){
                $obj = new RecordUsage();
                $obj->deserialize($value);
                array_push($this->Usages, $obj);
            }
        }
    }
}
