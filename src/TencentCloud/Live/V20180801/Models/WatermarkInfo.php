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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark information.
 *
 * @method integer getWatermarkId() Obtain Watermark ID.
 * @method void setWatermarkId(integer $WatermarkId) Set Watermark ID.
 * @method string getPictureUrl() Obtain Watermark image URL.
 * @method void setPictureUrl(string $PictureUrl) Set Watermark image URL.
 * @method integer getXPosition() Obtain Display position: X-axis offset.
 * @method void setXPosition(integer $XPosition) Set Display position: X-axis offset.
 * @method integer getYPosition() Obtain Display position: Y-axis offset.
 * @method void setYPosition(integer $YPosition) Set Display position: Y-axis offset.
 * @method string getWatermarkName() Obtain Watermark name.
 * @method void setWatermarkName(string $WatermarkName) Set Watermark name.
 * @method integer getStatus() Obtain Current status. 0: not used. 1: in use.
 * @method void setStatus(integer $Status) Set Current status. 0: not used. 1: in use.
 * @method string getCreateTime() Obtain The time when the watermark was added.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The time when the watermark was added.
Note: Beijing time (UTC+8) is used.
 * @method integer getWidth() Obtain Watermark width.
 * @method void setWidth(integer $Width) Set Watermark width.
 * @method integer getHeight() Obtain Watermark height.
 * @method void setHeight(integer $Height) Set Watermark height.
 */
class WatermarkInfo extends AbstractModel
{
    /**
     * @var integer Watermark ID.
     */
    public $WatermarkId;

    /**
     * @var string Watermark image URL.
     */
    public $PictureUrl;

    /**
     * @var integer Display position: X-axis offset.
     */
    public $XPosition;

    /**
     * @var integer Display position: Y-axis offset.
     */
    public $YPosition;

    /**
     * @var string Watermark name.
     */
    public $WatermarkName;

    /**
     * @var integer Current status. 0: not used. 1: in use.
     */
    public $Status;

    /**
     * @var string The time when the watermark was added.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var integer Watermark width.
     */
    public $Width;

    /**
     * @var integer Watermark height.
     */
    public $Height;

    /**
     * @param integer $WatermarkId Watermark ID.
     * @param string $PictureUrl Watermark image URL.
     * @param integer $XPosition Display position: X-axis offset.
     * @param integer $YPosition Display position: Y-axis offset.
     * @param string $WatermarkName Watermark name.
     * @param integer $Status Current status. 0: not used. 1: in use.
     * @param string $CreateTime The time when the watermark was added.
Note: Beijing time (UTC+8) is used.
     * @param integer $Width Watermark width.
     * @param integer $Height Watermark height.
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
        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }

        if (array_key_exists("WatermarkName",$param) and $param["WatermarkName"] !== null) {
            $this->WatermarkName = $param["WatermarkName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
