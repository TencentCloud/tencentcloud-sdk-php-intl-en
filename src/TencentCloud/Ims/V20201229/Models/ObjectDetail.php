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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object detection result details. When the detection scenario is an object, advertising logo, or QR code, it represents the tag name, tag value, tag score, and position information of the model detection frame.
 *
 * @method integer getId() Obtain This parameter is used to return the ID of the recognized object for easier recognition and distinction.
 * @method void setId(integer $Id) Set This parameter is used to return the ID of the recognized object for easier recognition and distinction.
 * @method string getName() Obtain This parameter is used to return the hit object tag.
 * @method void setName(string $Name) Set This parameter is used to return the hit object tag.
 * @method string getValue() Obtain This parameter is used to return the value or content of the object tag; for example, when the tag is *QR code (QrCode)*, this field will be the URL of the recognized QR code.
 * @method void setValue(string $Value) Set This parameter is used to return the value or content of the object tag; for example, when the tag is *QR code (QrCode)*, this field will be the URL of the recognized QR code.
 * @method integer getScore() Obtain This parameter is used to return the hit score of the object tag. Valid values: **0–100**; for example, *QrCode 99* indicates that it is highly likely that the recognized content will hit the QR code tag.
 * @method void setScore(integer $Score) Set This parameter is used to return the hit score of the object tag. Valid values: **0–100**; for example, *QrCode 99* indicates that it is highly likely that the recognized content will hit the QR code tag.
 * @method Location getLocation() Obtain This field is used to return the coordinate position (X and Y coordinates of the top-left corner, length, width, and rotation angle) of the object detection frame for quick location of the object information.
 * @method void setLocation(Location $Location) Set This field is used to return the coordinate position (X and Y coordinates of the top-left corner, length, width, and rotation angle) of the object detection frame for quick location of the object information.
 * @method string getSubLabel() Obtain This parameter is used to return the hit object subtag.
 * @method void setSubLabel(string $SubLabel) Set This parameter is used to return the hit object subtag.
 */
class ObjectDetail extends AbstractModel
{
    /**
     * @var integer This parameter is used to return the ID of the recognized object for easier recognition and distinction.
     */
    public $Id;

    /**
     * @var string This parameter is used to return the hit object tag.
     */
    public $Name;

    /**
     * @var string This parameter is used to return the value or content of the object tag; for example, when the tag is *QR code (QrCode)*, this field will be the URL of the recognized QR code.
     */
    public $Value;

    /**
     * @var integer This parameter is used to return the hit score of the object tag. Valid values: **0–100**; for example, *QrCode 99* indicates that it is highly likely that the recognized content will hit the QR code tag.
     */
    public $Score;

    /**
     * @var Location This field is used to return the coordinate position (X and Y coordinates of the top-left corner, length, width, and rotation angle) of the object detection frame for quick location of the object information.
     */
    public $Location;

    /**
     * @var string This parameter is used to return the hit object subtag.
     */
    public $SubLabel;

    /**
     * @param integer $Id This parameter is used to return the ID of the recognized object for easier recognition and distinction.
     * @param string $Name This parameter is used to return the hit object tag.
     * @param string $Value This parameter is used to return the value or content of the object tag; for example, when the tag is *QR code (QrCode)*, this field will be the URL of the recognized QR code.
     * @param integer $Score This parameter is used to return the hit score of the object tag. Valid values: **0–100**; for example, *QrCode 99* indicates that it is highly likely that the recognized content will hit the QR code tag.
     * @param Location $Location This field is used to return the coordinate position (X and Y coordinates of the top-left corner, length, width, and rotation angle) of the object detection frame for quick location of the object information.
     * @param string $SubLabel This parameter is used to return the hit object subtag.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }
    }
}
