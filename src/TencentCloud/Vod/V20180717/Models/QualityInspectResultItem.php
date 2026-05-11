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
 * Abnormal result Information of media quality inspection.
 *
 * @method string getType() Obtain Exception type. Valid values:
<li>Jitter: jitter.</li>
<li>Blur: blurry;</li>
<li>LowLighting: low light;</li>
<li>HighLighting: overexposure.</li>
<li>CrashScreen: screen glitch;</li>
<li>BlackWhiteEdge: black and white edges.</li>
<li>SolidColorScreen: solid color screen.</li>
<li>Noise: noise.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode;</li>
<li>LowVoice: bass;</li>
<li>HighVoice: high voice;</li>
<li>NoVoice: mute;</li>
<li>LowEvaluation: no-reference scoring below threshold.</li>
 * @method void setType(string $Type) Set Exception type. Valid values:
<li>Jitter: jitter.</li>
<li>Blur: blurry;</li>
<li>LowLighting: low light;</li>
<li>HighLighting: overexposure.</li>
<li>CrashScreen: screen glitch;</li>
<li>BlackWhiteEdge: black and white edges.</li>
<li>SolidColorScreen: solid color screen.</li>
<li>Noise: noise.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode;</li>
<li>LowVoice: bass;</li>
<li>HighVoice: high voice;</li>
<li>NoVoice: mute;</li>
<li>LowEvaluation: no-reference scoring below threshold.</li>
 * @method array getSegmentSet() Obtain Abnormal fragment list.
<font color=red>Note:</font> The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set Abnormal fragment list.
<font color=red>Note:</font> The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of Abnormal Fragment List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of Abnormal Fragment List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the Segment List File URL for anomalies, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the Segment List File URL for anomalies, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class QualityInspectResultItem extends AbstractModel
{
    /**
     * @var string Exception type. Valid values:
<li>Jitter: jitter.</li>
<li>Blur: blurry;</li>
<li>LowLighting: low light;</li>
<li>HighLighting: overexposure.</li>
<li>CrashScreen: screen glitch;</li>
<li>BlackWhiteEdge: black and white edges.</li>
<li>SolidColorScreen: solid color screen.</li>
<li>Noise: noise.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode;</li>
<li>LowVoice: bass;</li>
<li>HighVoice: high voice;</li>
<li>NoVoice: mute;</li>
<li>LowEvaluation: no-reference scoring below threshold.</li>
     */
    public $Type;

    /**
     * @var array Abnormal fragment list.
<font color=red>Note:</font> The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of Abnormal Fragment List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the Segment List File URL for anomalies, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Type Exception type. Valid values:
<li>Jitter: jitter.</li>
<li>Blur: blurry;</li>
<li>LowLighting: low light;</li>
<li>HighLighting: overexposure.</li>
<li>CrashScreen: screen glitch;</li>
<li>BlackWhiteEdge: black and white edges.</li>
<li>SolidColorScreen: solid color screen.</li>
<li>Noise: noise.</li>
<li>Mosaic: mosaic.</li>
<li>QRCode: QR code.</li>
<li>AppletCode: mini program code.</li>
<li>BarCode: barcode;</li>
<li>LowVoice: bass;</li>
<li>HighVoice: high voice;</li>
<li>NoVoice: mute;</li>
<li>LowEvaluation: no-reference scoring below threshold.</li>
     * @param array $SegmentSet Abnormal fragment list.
<font color=red>Note:</font> The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of Abnormal Fragment List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the Segment List File URL for anomalies, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
