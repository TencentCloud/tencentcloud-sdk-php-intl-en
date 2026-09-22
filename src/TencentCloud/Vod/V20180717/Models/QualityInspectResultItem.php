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
 * Audio and video quality detection exception result info.
 *
 * @method string getType() Obtain <p>Exception type. Valid values:</p><li>Jitter: jitter</li><li>Blur: blur</li><li>LowLighting: low illumination</li><li>HighLighting: overexposure</li><li>CrashScreen: screen glitch</li><li>BlackWhiteEdge: black and white edges</li><li>SolidColorScreen: solid color screen</li><li>Noise: noise</li><li>Mosaic: mosaic</li><li>QRCode: QR code</li><li>AppletCode: mini program code</li><li>BarCode: barcode</li><li>LowVoice: bass</li><li>HighVoice: audio burst</li><li>NoVoice: mute</li><li>LowEvaluation: no reference scoring below threshold</li><li>LowColorfulness: color richness info</li><li>AudioVideoAsync: audio and video synchronization issues</li><li>AudioSubtitleAsync: audio and subtitle out of sync</li><li>VideoAesthetic: low video aesthetic score</li><li>AudioDiscontinuity: discontinuous audio</li><li>AudioVolume: volume information</li><li>AudioLoudnessJitter: severe volume change</li><li>BackgroundMusic: background music exists</li><li>AudioEvaluation: poor bass quality</li><li>AudioNoise: noise</li><li>AudioSpeechQuality: low speech definition</li><li>AudioReverb: high reverberation level</li><li>AudioHighLoudness: loudness distortion</li>
 * @method void setType(string $Type) Set <p>Exception type. Valid values:</p><li>Jitter: jitter</li><li>Blur: blur</li><li>LowLighting: low illumination</li><li>HighLighting: overexposure</li><li>CrashScreen: screen glitch</li><li>BlackWhiteEdge: black and white edges</li><li>SolidColorScreen: solid color screen</li><li>Noise: noise</li><li>Mosaic: mosaic</li><li>QRCode: QR code</li><li>AppletCode: mini program code</li><li>BarCode: barcode</li><li>LowVoice: bass</li><li>HighVoice: audio burst</li><li>NoVoice: mute</li><li>LowEvaluation: no reference scoring below threshold</li><li>LowColorfulness: color richness info</li><li>AudioVideoAsync: audio and video synchronization issues</li><li>AudioSubtitleAsync: audio and subtitle out of sync</li><li>VideoAesthetic: low video aesthetic score</li><li>AudioDiscontinuity: discontinuous audio</li><li>AudioVolume: volume information</li><li>AudioLoudnessJitter: severe volume change</li><li>BackgroundMusic: background music exists</li><li>AudioEvaluation: poor bass quality</li><li>AudioNoise: noise</li><li>AudioSpeechQuality: low speech definition</li><li>AudioReverb: high reverberation level</li><li>AudioHighLoudness: loudness distortion</li>
 * @method array getSegmentSet() Obtain <p>Abnormal fragment list.<br><font color="red">Note:</font> This list only shows up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.</p>
 * @method void setSegmentSet(array $SegmentSet) Set <p>Abnormal fragment list.<br><font color="red">Note:</font> This list only shows up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.</p>
 * @method string getSegmentSetFileUrl() Obtain <p>URL of the exception segment list file. The file content is in JSON, and its data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)</p>
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set <p>URL of the exception segment list file. The file content is in JSON, and its data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)</p>
 * @method string getSegmentSetFileUrlExpireTime() Obtain <p>Expiration time of the URL of the abnormal Segment List File, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set <p>Expiration time of the URL of the abnormal Segment List File, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class QualityInspectResultItem extends AbstractModel
{
    /**
     * @var string <p>Exception type. Valid values:</p><li>Jitter: jitter</li><li>Blur: blur</li><li>LowLighting: low illumination</li><li>HighLighting: overexposure</li><li>CrashScreen: screen glitch</li><li>BlackWhiteEdge: black and white edges</li><li>SolidColorScreen: solid color screen</li><li>Noise: noise</li><li>Mosaic: mosaic</li><li>QRCode: QR code</li><li>AppletCode: mini program code</li><li>BarCode: barcode</li><li>LowVoice: bass</li><li>HighVoice: audio burst</li><li>NoVoice: mute</li><li>LowEvaluation: no reference scoring below threshold</li><li>LowColorfulness: color richness info</li><li>AudioVideoAsync: audio and video synchronization issues</li><li>AudioSubtitleAsync: audio and subtitle out of sync</li><li>VideoAesthetic: low video aesthetic score</li><li>AudioDiscontinuity: discontinuous audio</li><li>AudioVolume: volume information</li><li>AudioLoudnessJitter: severe volume change</li><li>BackgroundMusic: background music exists</li><li>AudioEvaluation: poor bass quality</li><li>AudioNoise: noise</li><li>AudioSpeechQuality: low speech definition</li><li>AudioReverb: high reverberation level</li><li>AudioHighLoudness: loudness distortion</li>
     */
    public $Type;

    /**
     * @var array <p>Abnormal fragment list.<br><font color="red">Note:</font> This list only shows up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.</p>
     */
    public $SegmentSet;

    /**
     * @var string <p>URL of the exception segment list file. The file content is in JSON, and its data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)</p>
     */
    public $SegmentSetFileUrl;

    /**
     * @var string <p>Expiration time of the URL of the abnormal Segment List File, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Type <p>Exception type. Valid values:</p><li>Jitter: jitter</li><li>Blur: blur</li><li>LowLighting: low illumination</li><li>HighLighting: overexposure</li><li>CrashScreen: screen glitch</li><li>BlackWhiteEdge: black and white edges</li><li>SolidColorScreen: solid color screen</li><li>Noise: noise</li><li>Mosaic: mosaic</li><li>QRCode: QR code</li><li>AppletCode: mini program code</li><li>BarCode: barcode</li><li>LowVoice: bass</li><li>HighVoice: audio burst</li><li>NoVoice: mute</li><li>LowEvaluation: no reference scoring below threshold</li><li>LowColorfulness: color richness info</li><li>AudioVideoAsync: audio and video synchronization issues</li><li>AudioSubtitleAsync: audio and subtitle out of sync</li><li>VideoAesthetic: low video aesthetic score</li><li>AudioDiscontinuity: discontinuous audio</li><li>AudioVolume: volume information</li><li>AudioLoudnessJitter: severe volume change</li><li>BackgroundMusic: background music exists</li><li>AudioEvaluation: poor bass quality</li><li>AudioNoise: noise</li><li>AudioSpeechQuality: low speech definition</li><li>AudioReverb: high reverberation level</li><li>AudioHighLoudness: loudness distortion</li>
     * @param array $SegmentSet <p>Abnormal fragment list.<br><font color="red">Note:</font> This list only shows up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.</p>
     * @param string $SegmentSetFileUrl <p>URL of the exception segment list file. The file content is in JSON, and its data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)</p>
     * @param string $SegmentSetFileUrlExpireTime <p>Expiration time of the URL of the abnormal Segment List File, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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
