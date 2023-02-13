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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DASH configuration information.
 *
 * @method integer getSegmentDuration() Obtain Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
 * @method void setSegmentDuration(integer $SegmentDuration) Set Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
 * @method integer getSegmentNumber() Obtain Number of segments. Value range: [1,30]. Default value: 5.
 * @method void setSegmentNumber(integer $SegmentNumber) Set Number of segments. Value range: [1,30]. Default value: 5.
 * @method string getPeriodTriggers() Obtain Whether to enable multi-period. Valid values: CLOSE/OPEN. Default value: CLOSE.
 * @method void setPeriodTriggers(string $PeriodTriggers) Set Whether to enable multi-period. Valid values: CLOSE/OPEN. Default value: CLOSE.
 * @method string getH265PackageType() Obtain The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
 * @method void setH265PackageType(string $H265PackageType) Set The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
 */
class DashRemuxSettingsInfo extends AbstractModel
{
    /**
     * @var integer Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
     */
    public $SegmentDuration;

    /**
     * @var integer Number of segments. Value range: [1,30]. Default value: 5.
     */
    public $SegmentNumber;

    /**
     * @var string Whether to enable multi-period. Valid values: CLOSE/OPEN. Default value: CLOSE.
     */
    public $PeriodTriggers;

    /**
     * @var string The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
     */
    public $H265PackageType;

    /**
     * @param integer $SegmentDuration Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
     * @param integer $SegmentNumber Number of segments. Value range: [1,30]. Default value: 5.
     * @param string $PeriodTriggers Whether to enable multi-period. Valid values: CLOSE/OPEN. Default value: CLOSE.
     * @param string $H265PackageType The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
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
        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }

        if (array_key_exists("SegmentNumber",$param) and $param["SegmentNumber"] !== null) {
            $this->SegmentNumber = $param["SegmentNumber"];
        }

        if (array_key_exists("PeriodTriggers",$param) and $param["PeriodTriggers"] !== null) {
            $this->PeriodTriggers = $param["PeriodTriggers"];
        }

        if (array_key_exists("H265PackageType",$param) and $param["H265PackageType"] !== null) {
            $this->H265PackageType = $param["H265PackageType"];
        }
    }
}
