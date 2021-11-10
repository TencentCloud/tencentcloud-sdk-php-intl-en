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
 * Array of billable audio/video interaction durations of a specific application (`SdkAppId`) and array length
 *
 * @method integer getTotalNum() Obtain Number of records returned for the `SdkAppId`
 * @method void setTotalNum(integer $TotalNum) Set Number of records returned for the `SdkAppId`
 * @method array getSdkAppIdTrtcTimeUsages() Obtain Array of durations
 * @method void setSdkAppIdTrtcTimeUsages(array $SdkAppIdTrtcTimeUsages) Set Array of durations
 * @method string getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(string $SdkAppId) Set Application ID
 */
class OneSdkAppIdUsagesInfo extends AbstractModel
{
    /**
     * @var integer Number of records returned for the `SdkAppId`
     */
    public $TotalNum;

    /**
     * @var array Array of durations
     */
    public $SdkAppIdTrtcTimeUsages;

    /**
     * @var string Application ID
     */
    public $SdkAppId;

    /**
     * @param integer $TotalNum Number of records returned for the `SdkAppId`
     * @param array $SdkAppIdTrtcTimeUsages Array of durations
     * @param string $SdkAppId Application ID
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("SdkAppIdTrtcTimeUsages",$param) and $param["SdkAppIdTrtcTimeUsages"] !== null) {
            $this->SdkAppIdTrtcTimeUsages = [];
            foreach ($param["SdkAppIdTrtcTimeUsages"] as $key => $value){
                $obj = new SdkAppIdTrtcUsage();
                $obj->deserialize($value);
                array_push($this->SdkAppIdTrtcTimeUsages, $obj);
            }
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
