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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SourceLayout
 *
 * @method integer getLeftOffset() Obtain Left margin offset percentage, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
 * @method void setLeftOffset(integer $LeftOffset) Set Left margin offset percentage, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
 * @method integer getRightOffset() Obtain The offset percentage of the right margin, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
 * @method void setRightOffset(integer $RightOffset) Set The offset percentage of the right margin, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
 * @method integer getBottomOffset() Obtain Offset percentage of bottom margin, range 0-50
 * @method void setBottomOffset(integer $BottomOffset) Set Offset percentage of bottom margin, range 0-50
 */
class SourceLayout extends AbstractModel
{
    /**
     * @var integer Left margin offset percentage, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
     */
    public $LeftOffset;

    /**
     * @var integer The offset percentage of the right margin, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
     */
    public $RightOffset;

    /**
     * @var integer Offset percentage of bottom margin, range 0-50
     */
    public $BottomOffset;

    /**
     * @param integer $LeftOffset Left margin offset percentage, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
     * @param integer $RightOffset The offset percentage of the right margin, picture in picture range 0-99, left offset+right offset<100; Return range 0-50, left offset+right offset<100
     * @param integer $BottomOffset Offset percentage of bottom margin, range 0-50
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
        if (array_key_exists("LeftOffset",$param) and $param["LeftOffset"] !== null) {
            $this->LeftOffset = $param["LeftOffset"];
        }

        if (array_key_exists("RightOffset",$param) and $param["RightOffset"] !== null) {
            $this->RightOffset = $param["RightOffset"];
        }

        if (array_key_exists("BottomOffset",$param) and $param["BottomOffset"] !== null) {
            $this->BottomOffset = $param["BottomOffset"];
        }
    }
}
