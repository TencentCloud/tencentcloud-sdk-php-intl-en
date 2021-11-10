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
 * Relaying and transcoding duration statistics
 *
 * @method array getSdkAppIdTranscodeTimeUsages() Obtain Array of relaying and transcoding durations
 * @method void setSdkAppIdTranscodeTimeUsages(array $SdkAppIdTranscodeTimeUsages) Set Array of relaying and transcoding durations
 * @method integer getTotalNum() Obtain Number of records returned
 * @method void setTotalNum(integer $TotalNum) Set Number of records returned
 * @method string getSdkAppId() Obtain ID of the application queried. Its value may be an application ID or `total`, which indicates that the total durations of all applications are queried.
 * @method void setSdkAppId(string $SdkAppId) Set ID of the application queried. Its value may be an application ID or `total`, which indicates that the total durations of all applications are queried.
 */
class OneSdkAppIdTranscodeTimeUsagesInfo extends AbstractModel
{
    /**
     * @var array Array of relaying and transcoding durations
     */
    public $SdkAppIdTranscodeTimeUsages;

    /**
     * @var integer Number of records returned
     */
    public $TotalNum;

    /**
     * @var string ID of the application queried. Its value may be an application ID or `total`, which indicates that the total durations of all applications are queried.
     */
    public $SdkAppId;

    /**
     * @param array $SdkAppIdTranscodeTimeUsages Array of relaying and transcoding durations
     * @param integer $TotalNum Number of records returned
     * @param string $SdkAppId ID of the application queried. Its value may be an application ID or `total`, which indicates that the total durations of all applications are queried.
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
        if (array_key_exists("SdkAppIdTranscodeTimeUsages",$param) and $param["SdkAppIdTranscodeTimeUsages"] !== null) {
            $this->SdkAppIdTranscodeTimeUsages = [];
            foreach ($param["SdkAppIdTranscodeTimeUsages"] as $key => $value){
                $obj = new SdkAppIdTrtcMcuTranscodeTimeUsage();
                $obj->deserialize($value);
                array_push($this->SdkAppIdTranscodeTimeUsages, $obj);
            }
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
