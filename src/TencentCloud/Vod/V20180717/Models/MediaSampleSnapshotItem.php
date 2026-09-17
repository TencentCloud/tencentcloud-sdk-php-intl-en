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
 * @method string getSampleType() Obtain 
 * @method void setSampleType(string $SampleType) Set 
 * @method integer getInterval() Obtain 
 * @method void setInterval(integer $Interval) Set 
 * @method array getImageUrlSet() Obtain 
 * @method void setImageUrlSet(array $ImageUrlSet) Set 
 * @method array getWaterMarkDefinition() Obtain 
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set 
 */
class MediaSampleSnapshotItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $SampleType;

    /**
     * @var integer 
     */
    public $Interval;

    /**
     * @var array 
     */
    public $ImageUrlSet;

    /**
     * @var array 
     */
    public $WaterMarkDefinition;

    /**
     * @param integer $Definition 
     * @param string $SampleType 
     * @param integer $Interval 
     * @param array $ImageUrlSet 
     * @param array $WaterMarkDefinition 
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

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ImageUrlSet",$param) and $param["ImageUrlSet"] !== null) {
            $this->ImageUrlSet = $param["ImageUrlSet"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
