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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFaceId() Obtain 
 * @method void setFaceId(string $FaceId) Set 
 * @method string getFaceImage() Obtain 
 * @method void setFaceImage(string $FaceImage) Set 
 * @method integer getStartTime() Obtain 
 * @method void setStartTime(integer $StartTime) Set 
 * @method integer getEndTime() Obtain 
 * @method void setEndTime(integer $EndTime) Set 
 */
class AigcFaceIdentityInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $FaceId;

    /**
     * @var string 
     */
    public $FaceImage;

    /**
     * @var integer 
     */
    public $StartTime;

    /**
     * @var integer 
     */
    public $EndTime;

    /**
     * @param string $FaceId 
     * @param string $FaceImage 
     * @param integer $StartTime 
     * @param integer $EndTime 
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceImage",$param) and $param["FaceImage"] !== null) {
            $this->FaceImage = $param["FaceImage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
