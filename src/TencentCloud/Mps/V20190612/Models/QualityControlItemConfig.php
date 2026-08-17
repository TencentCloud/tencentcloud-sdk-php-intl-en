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
 * Quality inspection item configurations.
 *
 * @method string getType() Obtain Quality inspection item name. Valid values:
<li>LowEvaluation: Video no-reference scoring (MOS).</li>
<li>AudioEvaluation: Audio no-reference scoring (MOS).</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>Blur: blur detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>BlackWhiteEdge: black and white edge detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: silence detection.</li>
<li>LowVoice: bass detection.</li>
<li>HighVoice: explosion noise detection</li>
<li>AudioNoise: audio noise detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sampling rate change.</li>
<li>AudioChannelsChanged: audio channels changed.</li>
<li>ParameterSetsChanged: stream parameter set information has changed.</li>
<li>DarOrSarInvalid: abnormal video aspect ratio.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: The pts of the media stream is less than the dts.</li>
<li>ReceiveFpsJitter: excessive network received frame rate jitter</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: excessive stream frame rate jitter calculated by PTS</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: The H26x stream of mpegts misses AUD NALU.</li>
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
<li>Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
 * @method void setType(string $Type) Set Quality inspection item name. Valid values:
<li>LowEvaluation: Video no-reference scoring (MOS).</li>
<li>AudioEvaluation: Audio no-reference scoring (MOS).</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>Blur: blur detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>BlackWhiteEdge: black and white edge detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: silence detection.</li>
<li>LowVoice: bass detection.</li>
<li>HighVoice: explosion noise detection</li>
<li>AudioNoise: audio noise detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sampling rate change.</li>
<li>AudioChannelsChanged: audio channels changed.</li>
<li>ParameterSetsChanged: stream parameter set information has changed.</li>
<li>DarOrSarInvalid: abnormal video aspect ratio.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: The pts of the media stream is less than the dts.</li>
<li>ReceiveFpsJitter: excessive network received frame rate jitter</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: excessive stream frame rate jitter calculated by PTS</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: The H26x stream of mpegts misses AUD NALU.</li>
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
<li>Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getSampling() Obtain 
 * @method void setSampling(string $Sampling) Set 
 * @method integer getIntervalTime() Obtain 
 * @method void setIntervalTime(integer $IntervalTime) Set 
 * @method integer getDuration() Obtain 
 * @method void setDuration(integer $Duration) Set 
 * @method string getThreshold() Obtain 
 * @method void setThreshold(string $Threshold) Set 
 */
class QualityControlItemConfig extends AbstractModel
{
    /**
     * @var string Quality inspection item name. Valid values:
<li>LowEvaluation: Video no-reference scoring (MOS).</li>
<li>AudioEvaluation: Audio no-reference scoring (MOS).</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>Blur: blur detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>BlackWhiteEdge: black and white edge detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: silence detection.</li>
<li>LowVoice: bass detection.</li>
<li>HighVoice: explosion noise detection</li>
<li>AudioNoise: audio noise detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sampling rate change.</li>
<li>AudioChannelsChanged: audio channels changed.</li>
<li>ParameterSetsChanged: stream parameter set information has changed.</li>
<li>DarOrSarInvalid: abnormal video aspect ratio.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: The pts of the media stream is less than the dts.</li>
<li>ReceiveFpsJitter: excessive network received frame rate jitter</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: excessive stream frame rate jitter calculated by PTS</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: The H26x stream of mpegts misses AUD NALU.</li>
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
<li>Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
     */
    public $Type;

    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Sampling;

    /**
     * @var integer 
     */
    public $IntervalTime;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var string 
     */
    public $Threshold;

    /**
     * @param string $Type Quality inspection item name. Valid values:
<li>LowEvaluation: Video no-reference scoring (MOS).</li>
<li>AudioEvaluation: Audio no-reference scoring (MOS).</li>
<li>Mosaic: mosaic detection.</li>
<li>CrashScreen: screen glitch detection.</li>
<li>Blur: blur detection.</li>
<li>Jitter: jitter detection.</li>
<li>Noise: noise detection.</li>
<li>QRCode: QR code detection.</li>
<li>BarCode: barcode detection.</li>
<li>AppletCode: mini program code detection.</li>
<li>BlackWhiteEdge: black and white edge detection.</li>
<li>SolidColorScreen: solid color screen detection.</li>
<li>LowLighting: low light.</li>
<li>HighLighting: overexposure.</li>
<li>NoVoice: silence detection.</li>
<li>LowVoice: bass detection.</li>
<li>HighVoice: explosion noise detection</li>
<li>AudioNoise: audio noise detection.</li>
<li>VideoResolutionChanged: video resolution change.</li>
<li>AudioSampleRateChanged: audio sampling rate change.</li>
<li>AudioChannelsChanged: audio channels changed.</li>
<li>ParameterSetsChanged: stream parameter set information has changed.</li>
<li>DarOrSarInvalid: abnormal video aspect ratio.</li>
<li>TimestampFallback: DTS timestamp rollback.</li>
<li>DtsJitter: DTS jitter too high.</li>
<li>PtsJitter: PTS jitter too high.</li>
<li>AACDurationDeviation: improper AAC frame timestamp interval.</li>
<li>AudioDroppingFrames: audio frame dropping.</li>
<li>VideoDroppingFrames: video frame dropping.</li>
<li>AVTimestampInterleave: improper audio-video interleaving.</li>
<li>PtsLessThanDts: The pts of the media stream is less than the dts.</li>
<li>ReceiveFpsJitter: excessive network received frame rate jitter</li>
<li>ReceiveFpsTooSmall: network receive video frame rate too low.</li>
<li>FpsJitter: excessive stream frame rate jitter calculated by PTS</li>
<li>StreamOpenFailed: stream open failure.</li>
<li>StreamEnd: stream end.</li>
<li>StreamParseFailed: stream parsing failure.</li>
<li>VideoFirstFrameNotIdr: first frame not an IDR frame.</li>
<li>StreamNALUError: NALU start code error.</li>
<li>TsStreamNoAud: The H26x stream of mpegts misses AUD NALU.</li>
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
<li>Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements.</li>
<li>HLSBadM3u8Format: invalid M3U8 file.</li>
<li>HLSInvalidMasterM3u8: invalid main M3U8 file.</li>
<li>HLSInvalidMediaM3u8: invalid media M3U8 file.</li>
<li>HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.</li>
<li>HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.</li>
<li>HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.</li>
<li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li>
<li>HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.</li>
<li>TimecodeTrackExist: TMCD track in MP4.</li>
     * @param string $Switch 
     * @param string $Sampling 
     * @param integer $IntervalTime 
     * @param integer $Duration 
     * @param string $Threshold 
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
