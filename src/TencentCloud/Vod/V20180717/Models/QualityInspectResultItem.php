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
 * Abnormal result Information of media quality inspection.
 *
 * @method string getType() Obtain Abnormal type, range: <li>Jitter: Jitter;</li> <li>Blur: Blur;</li> <li>LowLighting: Low lighting;</li> <li>HighLighting: Overexposure;</li> <li>CrashScreen: Crash screen;</li> <li>BlackWhiteEdge: Black and white edges;</li> <li>SolidColorScreen: Solid color screen;</li> <li>Noise: Noise;</li> <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Applet code;</li> <li>BarCode: Bar code;</li> <li>LowVoice: Low voice;</li> <li>HighVoice: High voice;</li> <li>NoVoice: mutes;</li> <li>LowEvaluation: No reference scoring below the threshold.</li>
 * @method void setType(string $Type) Set Abnormal type, range: <li>Jitter: Jitter;</li> <li>Blur: Blur;</li> <li>LowLighting: Low lighting;</li> <li>HighLighting: Overexposure;</li> <li>CrashScreen: Crash screen;</li> <li>BlackWhiteEdge: Black and white edges;</li> <li>SolidColorScreen: Solid color screen;</li> <li>Noise: Noise;</li> <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Applet code;</li> <li>BarCode: Bar code;</li> <li>LowVoice: Low voice;</li> <li>HighVoice: High voice;</li> <li>NoVoice: mutes;</li> <li>LowEvaluation: No reference scoring below the threshold.</li>
 * @method array getSegmentSet() Obtain Abnormal segment List. <font color=red>Pay attention to:</font> This list will only show the first 100 elements at most. If you wish to get the complete result, please get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set Abnormal segment List. <font color=red>Pay attention to:</font> This list will only show the first 100 elements at most. If you wish to get the complete result, please get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain Abnormal segment List file URL. The file content is JSON, and the data structure is consistent with the SegmentSet Field. (The file will not be permanently stored, and will be deleted after reaching the SegmentSetFileUrlExpireTime Time point).
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set Abnormal segment List file URL. The file content is JSON, and the data structure is consistent with the SegmentSet Field. (The file will not be permanently stored, and will be deleted after reaching the SegmentSetFileUrlExpireTime Time point).
 * @method string getSegmentSetFileUrlExpireTime() Obtain Abnormal segment List file URL expiration time, using [ISO date supported](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Abnormal segment List file URL expiration time, using [ISO date supported](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class QualityInspectResultItem extends AbstractModel
{
    /**
     * @var string Abnormal type, range: <li>Jitter: Jitter;</li> <li>Blur: Blur;</li> <li>LowLighting: Low lighting;</li> <li>HighLighting: Overexposure;</li> <li>CrashScreen: Crash screen;</li> <li>BlackWhiteEdge: Black and white edges;</li> <li>SolidColorScreen: Solid color screen;</li> <li>Noise: Noise;</li> <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Applet code;</li> <li>BarCode: Bar code;</li> <li>LowVoice: Low voice;</li> <li>HighVoice: High voice;</li> <li>NoVoice: mutes;</li> <li>LowEvaluation: No reference scoring below the threshold.</li>
     */
    public $Type;

    /**
     * @var array Abnormal segment List. <font color=red>Pay attention to:</font> This list will only show the first 100 elements at most. If you wish to get the complete result, please get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string Abnormal segment List file URL. The file content is JSON, and the data structure is consistent with the SegmentSet Field. (The file will not be permanently stored, and will be deleted after reaching the SegmentSetFileUrlExpireTime Time point).
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Abnormal segment List file URL expiration time, using [ISO date supported](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Type Abnormal type, range: <li>Jitter: Jitter;</li> <li>Blur: Blur;</li> <li>LowLighting: Low lighting;</li> <li>HighLighting: Overexposure;</li> <li>CrashScreen: Crash screen;</li> <li>BlackWhiteEdge: Black and white edges;</li> <li>SolidColorScreen: Solid color screen;</li> <li>Noise: Noise;</li> <li>Mosaic: Mosaic;</li> <li>QRCode: QR code;</li> <li>AppletCode: Applet code;</li> <li>BarCode: Bar code;</li> <li>LowVoice: Low voice;</li> <li>HighVoice: High voice;</li> <li>NoVoice: mutes;</li> <li>LowEvaluation: No reference scoring below the threshold.</li>
     * @param array $SegmentSet Abnormal segment List. <font color=red>Pay attention to:</font> This list will only show the first 100 elements at most. If you wish to get the complete result, please get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl Abnormal segment List file URL. The file content is JSON, and the data structure is consistent with the SegmentSet Field. (The file will not be permanently stored, and will be deleted after reaching the SegmentSetFileUrlExpireTime Time point).
     * @param string $SegmentSetFileUrlExpireTime Abnormal segment List file URL expiration time, using [ISO date supported](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new QualityInspectItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }
    }
}
