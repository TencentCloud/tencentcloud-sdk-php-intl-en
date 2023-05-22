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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Value information
 *
 * @method string getAutoContent() Obtain The value of the recognized field.
 * @method void setAutoContent(string $AutoContent) Set The value of the recognized field.
 * @method Polygon getCoord() Obtain The coordinates of the four vertices.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoord(Polygon $Coord) Set The coordinates of the four vertices.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Value extends AbstractModel
{
    /**
     * @var string The value of the recognized field.
     */
    public $AutoContent;

    /**
     * @var Polygon The coordinates of the four vertices.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Coord;

    /**
     * @param string $AutoContent The value of the recognized field.
     * @param Polygon $Coord The coordinates of the four vertices.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AutoContent",$param) and $param["AutoContent"] !== null) {
            $this->AutoContent = $param["AutoContent"];
        }

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = new Polygon();
            $this->Coord->deserialize($param["Coord"]);
        }
    }
}
