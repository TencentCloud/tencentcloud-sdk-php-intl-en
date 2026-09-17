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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method array getExtTimeOffsetSet() Obtain 
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) Set 
 * @method array getTimeOffsetSet() Obtain 
 * @method void setTimeOffsetSet(array $TimeOffsetSet) Set 
 * @method array getWatermarkSet() Obtain 
 * @method void setWatermarkSet(array $WatermarkSet) Set 
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var array 
     */
    public $ExtTimeOffsetSet;

    /**
     * @var array 
     */
    public $TimeOffsetSet;

    /**
     * @var array 
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition 
     * @param array $ExtTimeOffsetSet 
     * @param array $TimeOffsetSet 
     * @param array $WatermarkSet 
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtTimeOffsetSet",$param) and $param["ExtTimeOffsetSet"] !== null) {
            $this->ExtTimeOffsetSet = $param["ExtTimeOffsetSet"];
        }

        if (array_key_exists("TimeOffsetSet",$param) and $param["TimeOffsetSet"] !== null) {
            $this->TimeOffsetSet = $param["TimeOffsetSet"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }
    }
}
