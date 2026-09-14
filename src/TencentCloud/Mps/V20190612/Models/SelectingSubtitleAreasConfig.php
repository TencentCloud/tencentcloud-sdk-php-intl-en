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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method array getAutoAreas() Obtain 
 * @method void setAutoAreas(array $AutoAreas) Set 
 * @method integer getSampleWidth() Obtain 
 * @method void setSampleWidth(integer $SampleWidth) Set 
 * @method integer getSampleHeight() Obtain 
 * @method void setSampleHeight(integer $SampleHeight) Set 
 */
class SelectingSubtitleAreasConfig extends AbstractModel
{
    /**
     * @var array 
     */
    public $AutoAreas;

    /**
     * @var integer 
     */
    public $SampleWidth;

    /**
     * @var integer 
     */
    public $SampleHeight;

    /**
     * @param array $AutoAreas 
     * @param integer $SampleWidth 
     * @param integer $SampleHeight 
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
        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
