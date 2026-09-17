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
 * @method string getSourceMedia() Obtain 
 * @method void setSourceMedia(string $SourceMedia) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method float getStartTime() Obtain 
 * @method void setStartTime(float $StartTime) Set 
 * @method string getCoordinateOrigin() Obtain 
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set 
 * @method string getXPos() Obtain 
 * @method void setXPos(string $XPos) Set 
 * @method string getYPos() Obtain 
 * @method void setYPos(string $YPos) Set 
 * @method string getWidth() Obtain 
 * @method void setWidth(string $Width) Set 
 * @method string getHeight() Obtain 
 * @method void setHeight(string $Height) Set 
 * @method array getImageOperations() Obtain 
 * @method void setImageOperations(array $ImageOperations) Set 
 */
class StickerTrackItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $SourceMedia;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var float 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $CoordinateOrigin;

    /**
     * @var string 
     */
    public $XPos;

    /**
     * @var string 
     */
    public $YPos;

    /**
     * @var string 
     */
    public $Width;

    /**
     * @var string 
     */
    public $Height;

    /**
     * @var array 
     */
    public $ImageOperations;

    /**
     * @param string $SourceMedia 
     * @param float $Duration 
     * @param float $StartTime 
     * @param string $CoordinateOrigin 
     * @param string $XPos 
     * @param string $YPos 
     * @param string $Width 
     * @param string $Height 
     * @param array $ImageOperations 
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
        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = $param["SourceMedia"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ImageOperations",$param) and $param["ImageOperations"] !== null) {
            $this->ImageOperations = [];
            foreach ($param["ImageOperations"] as $key => $value){
                $obj = new ImageTransform();
                $obj->deserialize($value);
                array_push($this->ImageOperations, $obj);
            }
        }
    }
}
