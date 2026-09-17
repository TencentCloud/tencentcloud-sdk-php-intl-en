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
 * @method float getLeftTopX() Obtain 
 * @method void setLeftTopX(float $LeftTopX) Set 
 * @method float getLeftTopY() Obtain 
 * @method void setLeftTopY(float $LeftTopY) Set 
 * @method float getRightBottomX() Obtain 
 * @method void setRightBottomX(float $RightBottomX) Set 
 * @method float getRightBottomY() Obtain 
 * @method void setRightBottomY(float $RightBottomY) Set 
 * @method integer getUnit() Obtain 
 * @method void setUnit(integer $Unit) Set 
 */
class MPSEraseArea extends AbstractModel
{
    /**
     * @var float 
     */
    public $LeftTopX;

    /**
     * @var float 
     */
    public $LeftTopY;

    /**
     * @var float 
     */
    public $RightBottomX;

    /**
     * @var float 
     */
    public $RightBottomY;

    /**
     * @var integer 
     */
    public $Unit;

    /**
     * @param float $LeftTopX 
     * @param float $LeftTopY 
     * @param float $RightBottomX 
     * @param float $RightBottomY 
     * @param integer $Unit 
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
        if (array_key_exists("LeftTopX",$param) and $param["LeftTopX"] !== null) {
            $this->LeftTopX = $param["LeftTopX"];
        }

        if (array_key_exists("LeftTopY",$param) and $param["LeftTopY"] !== null) {
            $this->LeftTopY = $param["LeftTopY"];
        }

        if (array_key_exists("RightBottomX",$param) and $param["RightBottomX"] !== null) {
            $this->RightBottomX = $param["RightBottomX"];
        }

        if (array_key_exists("RightBottomY",$param) and $param["RightBottomY"] !== null) {
            $this->RightBottomY = $param["RightBottomY"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
