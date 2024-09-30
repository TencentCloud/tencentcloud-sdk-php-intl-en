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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quality inspection item configurations.
 *
 * @method string getType() Obtain Quality inspection item name. Valid values:
<li>LowEvaluation: no-reference scoring.</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>VideoFreezedFrame: video freezing.</li>
<li>Blur: blur detection.</li>
<li>BlackWhiteEdge: black and white edges detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: no voice detection.</li>
<li>LowVoice: low voice detection.</li>
<li>HighVoice: high voice detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sample rate change.</li>
<li>AudioChannelsChanged: audio channel quantity change.</li>
<li>ParameterSetsChanged: stream parameter set information change.</li>
<li>DarOrSarInvalid: video aspect ratio exception.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: PTS less than DTS for media streams.</li>
<li>ReceiveFpsJitter: significant jitter in the network receive frame rate.</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: significant jitter in the stream frame rate calculated via PTS.</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.</li>
<li>AudioStreamLack: no audio stream.</li>
<li>VideoStreamLack: no video stream.</li>
<li>LackAudioRecover: missing audio stream recovery.</li>
<li>LackVideoRecover: missing video stream recovery.</li>
<li>VideoBitrateOutofRange: video stream bitrate (kbps) out of range.</li>
<li>AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.</li>
<li>VideoDecodeFailed: video decoding error.</li>
<li>AudioDecodeFailed: audio decoding error.</li>
<li>AudioOutOfPhase: opposite phase in dual-channel audio.</li>
<li>VideoDuplicatedFrame: duplicate frames in video streams.</li>
<li>AudioDuplicatedFrame: duplicate frames in audio streams.</li>
<li>VideoRotation: video rotation.</li>
<li>TsMultiPrograms: multiple programs in MPEG2-TS streams.</li>
<li>Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: changed number of streams in segments.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
 * @method void setType(string $Type) Set Quality inspection item name. Valid values:
<li>LowEvaluation: no-reference scoring.</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>VideoFreezedFrame: video freezing.</li>
<li>Blur: blur detection.</li>
<li>BlackWhiteEdge: black and white edges detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: no voice detection.</li>
<li>LowVoice: low voice detection.</li>
<li>HighVoice: high voice detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sample rate change.</li>
<li>AudioChannelsChanged: audio channel quantity change.</li>
<li>ParameterSetsChanged: stream parameter set information change.</li>
<li>DarOrSarInvalid: video aspect ratio exception.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: PTS less than DTS for media streams.</li>
<li>ReceiveFpsJitter: significant jitter in the network receive frame rate.</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: significant jitter in the stream frame rate calculated via PTS.</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.</li>
<li>AudioStreamLack: no audio stream.</li>
<li>VideoStreamLack: no video stream.</li>
<li>LackAudioRecover: missing audio stream recovery.</li>
<li>LackVideoRecover: missing video stream recovery.</li>
<li>VideoBitrateOutofRange: video stream bitrate (kbps) out of range.</li>
<li>AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.</li>
<li>VideoDecodeFailed: video decoding error.</li>
<li>AudioDecodeFailed: audio decoding error.</li>
<li>AudioOutOfPhase: opposite phase in dual-channel audio.</li>
<li>VideoDuplicatedFrame: duplicate frames in video streams.</li>
<li>AudioDuplicatedFrame: duplicate frames in audio streams.</li>
<li>VideoRotation: video rotation.</li>
<li>TsMultiPrograms: multiple programs in MPEG2-TS streams.</li>
<li>Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: changed number of streams in segments.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>

Default value: ON.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>

Default value: ON.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSampling() Obtain Sampling method, Valid value:
- Time: sampling based on time interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSampling(string $Sampling) Set Sampling method, Valid value:
- Time: sampling based on time interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTime() Obtain Sampling interval time, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTime(integer $IntervalTime) Set Sampling interval time, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDuration() Obtain Duration of abnormality, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set Duration of abnormality, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThreshold() Obtain Threshold of a detection item. Different detection items have different thresholds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThreshold(string $Threshold) Set Threshold of a detection item. Different detection items have different thresholds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualityControlItemConfig extends AbstractModel
{
    /**
     * @var string Quality inspection item name. Valid values:
<li>LowEvaluation: no-reference scoring.</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>VideoFreezedFrame: video freezing.</li>
<li>Blur: blur detection.</li>
<li>BlackWhiteEdge: black and white edges detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: no voice detection.</li>
<li>LowVoice: low voice detection.</li>
<li>HighVoice: high voice detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sample rate change.</li>
<li>AudioChannelsChanged: audio channel quantity change.</li>
<li>ParameterSetsChanged: stream parameter set information change.</li>
<li>DarOrSarInvalid: video aspect ratio exception.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: PTS less than DTS for media streams.</li>
<li>ReceiveFpsJitter: significant jitter in the network receive frame rate.</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: significant jitter in the stream frame rate calculated via PTS.</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.</li>
<li>AudioStreamLack: no audio stream.</li>
<li>VideoStreamLack: no video stream.</li>
<li>LackAudioRecover: missing audio stream recovery.</li>
<li>LackVideoRecover: missing video stream recovery.</li>
<li>VideoBitrateOutofRange: video stream bitrate (kbps) out of range.</li>
<li>AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.</li>
<li>VideoDecodeFailed: video decoding error.</li>
<li>AudioDecodeFailed: audio decoding error.</li>
<li>AudioOutOfPhase: opposite phase in dual-channel audio.</li>
<li>VideoDuplicatedFrame: duplicate frames in video streams.</li>
<li>AudioDuplicatedFrame: duplicate frames in audio streams.</li>
<li>VideoRotation: video rotation.</li>
<li>TsMultiPrograms: multiple programs in MPEG2-TS streams.</li>
<li>Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: changed number of streams in segments.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
     */
    public $Type;

    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>

Default value: ON.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Sampling method, Valid value:
- Time: sampling based on time interval.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sampling;

    /**
     * @var integer Sampling interval time, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTime;

    /**
     * @var integer Duration of abnormality, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var string Threshold of a detection item. Different detection items have different thresholds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Threshold;

    /**
     * @param string $Type Quality inspection item name. Valid values:
<li>LowEvaluation: no-reference scoring.</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>VideoFreezedFrame: video freezing.</li>
<li>Blur: blur detection.</li>
<li>BlackWhiteEdge: black and white edges detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: no voice detection.</li>
<li>LowVoice: low voice detection.</li>
<li>HighVoice: high voice detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sample rate change.</li>
<li>AudioChannelsChanged: audio channel quantity change.</li>
<li>ParameterSetsChanged: stream parameter set information change.</li>
<li>DarOrSarInvalid: video aspect ratio exception.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: PTS less than DTS for media streams.</li>
<li>ReceiveFpsJitter: significant jitter in the network receive frame rate.</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: significant jitter in the stream frame rate calculated via PTS.</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.</li>
<li>AudioStreamLack: no audio stream.</li>
<li>VideoStreamLack: no video stream.</li>
<li>LackAudioRecover: missing audio stream recovery.</li>
<li>LackVideoRecover: missing video stream recovery.</li>
<li>VideoBitrateOutofRange: video stream bitrate (kbps) out of range.</li>
<li>AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.</li>
<li>VideoDecodeFailed: video decoding error.</li>
<li>AudioDecodeFailed: audio decoding error.</li>
<li>AudioOutOfPhase: opposite phase in dual-channel audio.</li>
<li>VideoDuplicatedFrame: duplicate frames in video streams.</li>
<li>AudioDuplicatedFrame: duplicate frames in audio streams.</li>
<li>VideoRotation: video rotation.</li>
<li>TsMultiPrograms: multiple programs in MPEG2-TS streams.</li>
<li>Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: changed number of streams in segments.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>

Default value: ON.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sampling Sampling method, Valid value:
- Time: sampling based on time interval.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTime Sampling interval time, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Duration Duration of abnormality, in ms.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Threshold Threshold of a detection item. Different detection items have different thresholds.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Sampling",$param) and $param["Sampling"] !== null) {
            $this->Sampling = $param["Sampling"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
