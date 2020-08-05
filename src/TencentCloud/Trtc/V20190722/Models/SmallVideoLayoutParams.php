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
 * 
 *
 * @method string getUserId() Obtain 
 * @method void setUserId(string $UserId) Set 
 * @method integer getStreamType() Obtain 
 * @method void setStreamType(integer $StreamType) Set 
 * @method integer getImageWidth() Obtain 
 * @method void setImageWidth(integer $ImageWidth) Set 
 * @method integer getImageHeight() Obtain 
 * @method void setImageHeight(integer $ImageHeight) Set 
 * @method integer getLocationX() Obtain 
 * @method void setLocationX(integer $LocationX) Set 
 * @method integer getLocationY() Obtain 
 * @method void setLocationY(integer $LocationY) Set 
 */
class SmallVideoLayoutParams extends AbstractModel
{
    /**
     * @var string 
     */
    public $UserId;

    /**
     * @var integer 
     */
    public $StreamType;

    /**
     * @var integer 
     */
    public $ImageWidth;

    /**
     * @var integer 
     */
    public $ImageHeight;

    /**
     * @var integer 
     */
    public $LocationX;

    /**
     * @var integer 
     */
    public $LocationY;

    /**
     * @param string $UserId 
     * @param integer $StreamType 
     * @param integer $ImageWidth 
     * @param integer $ImageHeight 
     * @param integer $LocationX 
     * @param integer $LocationY 
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }
    }
}
