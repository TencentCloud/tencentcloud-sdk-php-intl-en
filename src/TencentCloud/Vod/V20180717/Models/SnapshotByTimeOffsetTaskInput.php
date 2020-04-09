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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameter type of time point screencapturing task
 *
 * @method integer getDefinition() Obtain Time point screencapturing template ID.
 * @method void setDefinition(integer $Definition) Set Time point screencapturing template ID.
 * @method array getTimeOffsetSet() Obtain List of time points for screencapturing in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOffsetSet(array $TimeOffsetSet) Set List of time points for screencapturing in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer Time point screencapturing template ID.
     */
    public $Definition;

    /**
     * @var array List of time points for screencapturing in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOffsetSet;

    /**
     * @var array List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition Time point screencapturing template ID.
     * @param array $TimeOffsetSet List of time points for screencapturing in <font color=red>milliseconds</font>.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
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
