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
 * @method integer getLeftOffset() Obtain 
 * @method void setLeftOffset(integer $LeftOffset) Set 
 * @method integer getRightOffset() Obtain 
 * @method void setRightOffset(integer $RightOffset) Set 
 * @method integer getBottomOffset() Obtain 
 * @method void setBottomOffset(integer $BottomOffset) Set 
 */
class SourceLayout extends AbstractModel
{
    /**
     * @var integer 
     */
    public $LeftOffset;

    /**
     * @var integer 
     */
    public $RightOffset;

    /**
     * @var integer 
     */
    public $BottomOffset;

    /**
     * @param integer $LeftOffset 
     * @param integer $RightOffset 
     * @param integer $BottomOffset 
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
