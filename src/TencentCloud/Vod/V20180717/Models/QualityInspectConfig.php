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
 * Audio and video quality detection control parameter configuration.
 *
 * @method string getType() Obtain <p>Detection item name.</p><p>Enumeration values:</p><ul><li>LowEvaluation: No-reference video score (MOS)</li><li>AudioEvaluation: No-reference audio score (MOS)</li><li>Mosaic: Mosaic detection</li><li>CrashScreen: Screen glitch detection</li><li>Blur: Blur detection</li><li>Jitter: Jitter detection</li><li>Noise: Noise detection</li><li>QRCode: QR code detection</li><li>BarCode: BarCode detection</li><li>AppletCode: Mini program code detection</li><li>BlackWhiteEdge: Black and white edge detection</li><li>SolidColorScreen: Solid color screen detection</li><li>LowLighting: Low illumination</li><li>HighLighting: Overexposure</li><li>NoVoice: Silence detection</li><li>LowVoice: Bass detection</li><li>HighVoice: Explosion Noise detection</li><li>AudioNoise: Audio Noise detection</li><li>VideoResolutionChanged: Video resolution change</li><li>AudioSampleRateChanged: Audio sampling rate change</li><li>AudioChannelsChanged: Audio channels changed</li><li>ParameterSetsChanged: Stream parameter set information changed</li><li>DarOrSarInvalid: Abnormal video aspect ratio</li><li>TimestampFallback: DTS timestamp fallback</li><li>DtsJitter: Excessive DTS Jitter</li><li>PtsJitter: Excessive PTS Jitter</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval</li><li>AudioDroppingFrames: Audio frame loss</li><li>VideoDroppingFrames: Video frame loss</li><li>AVTimestampInterleave: Improper audio-video interleaving</li><li>PtsLessThanDts: media stream PTS less than DTS</li><li>ReceiveFpsJitter: Excessive network received frame rate Jitter</li><li>ReceiveFpsTooSmall: Network received video frame rate too small</li><li>FpsJitter: Excessive stream frame rate Jitter calculated by PTS</li><li>StreamOpenFailed: Stream open failure</li><li>StreamEnd: Stream end</li><li>StreamParseFailed: Stream parsing failure</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame</li><li>StreamNALUError: NALU Start Code Error</li><li>TsStreamNoAud: H26x stream in MPEG-TS lacks AUD NALU</li><li>AudioStreamLack: No audio stream</li><li>VideoStreamLack: No video stream</li><li>LackAudioRecover: Missing audio stream recovery</li><li>LackVideoRecover: Missing video stream recovery</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range</li><li>VideoDecodeFailed: Video decoding error</li><li>AudioDecodeFailed: Audio decoding error</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio</li><li>VideoDuplicatedFrame: Duplicate frames in video streams</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams</li><li>VideoRotation: Video rotation</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements</li><li>HLSBadM3u8Format: Invalid m3u8 file</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8DiscontinuityExist: media m3u8 contains EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between slices without EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between slices without EXT-x-DISCONTINUITY</li><li>TimecodeTrackExist: Mp4 contains tmcd track</li><li>BodyPoseCheck: Abnormal human body pose</li><li>BodyDetailCheck: Abnormal human body detail</li><li>PhysicRulesCheck: Physical rule violation</li><li>ObjectConsistencyCheck:</li></ul>Object consistency anomaly</li><li>FormatCheck: Format exception</li><li>AudioReverb: Reverberation level</li><li>AudioDiscontinuity: Audio discontinuity</li><li>AudioSpeechQuality: Speech clarity</li><li>AudioHighLoudness: Loudness distortion</li><li>AudioLoudnessJitter: Severe volume change</li><li>BackgroundMusic: Background music exists</li><li>NoBackgroundMusic: No background music</li><li>VideoAesthetic: Video aesthetic score</li><li>AudioVideoAsync: Audio and video out of sync</li><li>AudioSubtitleAsync: Audio and subtitle out of sync</li></ul>
 * @method void setType(string $Type) Set <p>Detection item name.</p><p>Enumeration values:</p><ul><li>LowEvaluation: No-reference video score (MOS)</li><li>AudioEvaluation: No-reference audio score (MOS)</li><li>Mosaic: Mosaic detection</li><li>CrashScreen: Screen glitch detection</li><li>Blur: Blur detection</li><li>Jitter: Jitter detection</li><li>Noise: Noise detection</li><li>QRCode: QR code detection</li><li>BarCode: BarCode detection</li><li>AppletCode: Mini program code detection</li><li>BlackWhiteEdge: Black and white edge detection</li><li>SolidColorScreen: Solid color screen detection</li><li>LowLighting: Low illumination</li><li>HighLighting: Overexposure</li><li>NoVoice: Silence detection</li><li>LowVoice: Bass detection</li><li>HighVoice: Explosion Noise detection</li><li>AudioNoise: Audio Noise detection</li><li>VideoResolutionChanged: Video resolution change</li><li>AudioSampleRateChanged: Audio sampling rate change</li><li>AudioChannelsChanged: Audio channels changed</li><li>ParameterSetsChanged: Stream parameter set information changed</li><li>DarOrSarInvalid: Abnormal video aspect ratio</li><li>TimestampFallback: DTS timestamp fallback</li><li>DtsJitter: Excessive DTS Jitter</li><li>PtsJitter: Excessive PTS Jitter</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval</li><li>AudioDroppingFrames: Audio frame loss</li><li>VideoDroppingFrames: Video frame loss</li><li>AVTimestampInterleave: Improper audio-video interleaving</li><li>PtsLessThanDts: media stream PTS less than DTS</li><li>ReceiveFpsJitter: Excessive network received frame rate Jitter</li><li>ReceiveFpsTooSmall: Network received video frame rate too small</li><li>FpsJitter: Excessive stream frame rate Jitter calculated by PTS</li><li>StreamOpenFailed: Stream open failure</li><li>StreamEnd: Stream end</li><li>StreamParseFailed: Stream parsing failure</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame</li><li>StreamNALUError: NALU Start Code Error</li><li>TsStreamNoAud: H26x stream in MPEG-TS lacks AUD NALU</li><li>AudioStreamLack: No audio stream</li><li>VideoStreamLack: No video stream</li><li>LackAudioRecover: Missing audio stream recovery</li><li>LackVideoRecover: Missing video stream recovery</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range</li><li>VideoDecodeFailed: Video decoding error</li><li>AudioDecodeFailed: Audio decoding error</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio</li><li>VideoDuplicatedFrame: Duplicate frames in video streams</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams</li><li>VideoRotation: Video rotation</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements</li><li>HLSBadM3u8Format: Invalid m3u8 file</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8DiscontinuityExist: media m3u8 contains EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between slices without EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between slices without EXT-x-DISCONTINUITY</li><li>TimecodeTrackExist: Mp4 contains tmcd track</li><li>BodyPoseCheck: Abnormal human body pose</li><li>BodyDetailCheck: Abnormal human body detail</li><li>PhysicRulesCheck: Physical rule violation</li><li>ObjectConsistencyCheck:</li></ul>Object consistency anomaly</li><li>FormatCheck: Format exception</li><li>AudioReverb: Reverberation level</li><li>AudioDiscontinuity: Audio discontinuity</li><li>AudioSpeechQuality: Speech clarity</li><li>AudioHighLoudness: Loudness distortion</li><li>AudioLoudnessJitter: Severe volume change</li><li>BackgroundMusic: Background music exists</li><li>NoBackgroundMusic: No background music</li><li>VideoAesthetic: Video aesthetic score</li><li>AudioVideoAsync: Audio and video out of sync</li><li>AudioSubtitleAsync: Audio and subtitle out of sync</li></ul>
 * @method string getSwitch() Obtain <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable.</li><li>OFF: Disable.</li></ul><p>Default value: ON</p>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable.</li><li>OFF: Disable.</li></ul><p>Default value: ON</p>
 * @method string getSampling() Obtain <p>Sampling method</p><p>Enumeration values:</p><ul><li>Time: Sampling based on time interval.</li></ul>
 * @method void setSampling(string $Sampling) Set <p>Sampling method</p><p>Enumeration values:</p><ul><li>Time: Sampling based on time interval.</li></ul>
 * @method integer getIntervalTime() Obtain <p>Sampling interval time</p><p>Measurement unit: ms.</p>
 * @method void setIntervalTime(integer $IntervalTime) Set <p>Sampling interval time</p><p>Measurement unit: ms.</p>
 * @method integer getDuration() Obtain <p>Duration of abnormality.</p><p>Measurement unit: millisecond.</p>
 * @method void setDuration(integer $Duration) Set <p>Duration of abnormality.</p><p>Measurement unit: millisecond.</p>
 * @method string getThreshold() Obtain <p>Threshold of a detection item. Different detection items have different thresholds.</p>
 * @method void setThreshold(string $Threshold) Set <p>Threshold of a detection item. Different detection items have different thresholds.</p>
 */
class QualityInspectConfig extends AbstractModel
{
    /**
     * @var string <p>Detection item name.</p><p>Enumeration values:</p><ul><li>LowEvaluation: No-reference video score (MOS)</li><li>AudioEvaluation: No-reference audio score (MOS)</li><li>Mosaic: Mosaic detection</li><li>CrashScreen: Screen glitch detection</li><li>Blur: Blur detection</li><li>Jitter: Jitter detection</li><li>Noise: Noise detection</li><li>QRCode: QR code detection</li><li>BarCode: BarCode detection</li><li>AppletCode: Mini program code detection</li><li>BlackWhiteEdge: Black and white edge detection</li><li>SolidColorScreen: Solid color screen detection</li><li>LowLighting: Low illumination</li><li>HighLighting: Overexposure</li><li>NoVoice: Silence detection</li><li>LowVoice: Bass detection</li><li>HighVoice: Explosion Noise detection</li><li>AudioNoise: Audio Noise detection</li><li>VideoResolutionChanged: Video resolution change</li><li>AudioSampleRateChanged: Audio sampling rate change</li><li>AudioChannelsChanged: Audio channels changed</li><li>ParameterSetsChanged: Stream parameter set information changed</li><li>DarOrSarInvalid: Abnormal video aspect ratio</li><li>TimestampFallback: DTS timestamp fallback</li><li>DtsJitter: Excessive DTS Jitter</li><li>PtsJitter: Excessive PTS Jitter</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval</li><li>AudioDroppingFrames: Audio frame loss</li><li>VideoDroppingFrames: Video frame loss</li><li>AVTimestampInterleave: Improper audio-video interleaving</li><li>PtsLessThanDts: media stream PTS less than DTS</li><li>ReceiveFpsJitter: Excessive network received frame rate Jitter</li><li>ReceiveFpsTooSmall: Network received video frame rate too small</li><li>FpsJitter: Excessive stream frame rate Jitter calculated by PTS</li><li>StreamOpenFailed: Stream open failure</li><li>StreamEnd: Stream end</li><li>StreamParseFailed: Stream parsing failure</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame</li><li>StreamNALUError: NALU Start Code Error</li><li>TsStreamNoAud: H26x stream in MPEG-TS lacks AUD NALU</li><li>AudioStreamLack: No audio stream</li><li>VideoStreamLack: No video stream</li><li>LackAudioRecover: Missing audio stream recovery</li><li>LackVideoRecover: Missing video stream recovery</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range</li><li>VideoDecodeFailed: Video decoding error</li><li>AudioDecodeFailed: Audio decoding error</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio</li><li>VideoDuplicatedFrame: Duplicate frames in video streams</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams</li><li>VideoRotation: Video rotation</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements</li><li>HLSBadM3u8Format: Invalid m3u8 file</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8DiscontinuityExist: media m3u8 contains EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between slices without EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between slices without EXT-x-DISCONTINUITY</li><li>TimecodeTrackExist: Mp4 contains tmcd track</li><li>BodyPoseCheck: Abnormal human body pose</li><li>BodyDetailCheck: Abnormal human body detail</li><li>PhysicRulesCheck: Physical rule violation</li><li>ObjectConsistencyCheck:</li></ul>Object consistency anomaly</li><li>FormatCheck: Format exception</li><li>AudioReverb: Reverberation level</li><li>AudioDiscontinuity: Audio discontinuity</li><li>AudioSpeechQuality: Speech clarity</li><li>AudioHighLoudness: Loudness distortion</li><li>AudioLoudnessJitter: Severe volume change</li><li>BackgroundMusic: Background music exists</li><li>NoBackgroundMusic: No background music</li><li>VideoAesthetic: Video aesthetic score</li><li>AudioVideoAsync: Audio and video out of sync</li><li>AudioSubtitleAsync: Audio and subtitle out of sync</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable.</li><li>OFF: Disable.</li></ul><p>Default value: ON</p>
     */
    public $Switch;

    /**
     * @var string <p>Sampling method</p><p>Enumeration values:</p><ul><li>Time: Sampling based on time interval.</li></ul>
     */
    public $Sampling;

    /**
     * @var integer <p>Sampling interval time</p><p>Measurement unit: ms.</p>
     */
    public $IntervalTime;

    /**
     * @var integer <p>Duration of abnormality.</p><p>Measurement unit: millisecond.</p>
     */
    public $Duration;

    /**
     * @var string <p>Threshold of a detection item. Different detection items have different thresholds.</p>
     */
    public $Threshold;

    /**
     * @param string $Type <p>Detection item name.</p><p>Enumeration values:</p><ul><li>LowEvaluation: No-reference video score (MOS)</li><li>AudioEvaluation: No-reference audio score (MOS)</li><li>Mosaic: Mosaic detection</li><li>CrashScreen: Screen glitch detection</li><li>Blur: Blur detection</li><li>Jitter: Jitter detection</li><li>Noise: Noise detection</li><li>QRCode: QR code detection</li><li>BarCode: BarCode detection</li><li>AppletCode: Mini program code detection</li><li>BlackWhiteEdge: Black and white edge detection</li><li>SolidColorScreen: Solid color screen detection</li><li>LowLighting: Low illumination</li><li>HighLighting: Overexposure</li><li>NoVoice: Silence detection</li><li>LowVoice: Bass detection</li><li>HighVoice: Explosion Noise detection</li><li>AudioNoise: Audio Noise detection</li><li>VideoResolutionChanged: Video resolution change</li><li>AudioSampleRateChanged: Audio sampling rate change</li><li>AudioChannelsChanged: Audio channels changed</li><li>ParameterSetsChanged: Stream parameter set information changed</li><li>DarOrSarInvalid: Abnormal video aspect ratio</li><li>TimestampFallback: DTS timestamp fallback</li><li>DtsJitter: Excessive DTS Jitter</li><li>PtsJitter: Excessive PTS Jitter</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval</li><li>AudioDroppingFrames: Audio frame loss</li><li>VideoDroppingFrames: Video frame loss</li><li>AVTimestampInterleave: Improper audio-video interleaving</li><li>PtsLessThanDts: media stream PTS less than DTS</li><li>ReceiveFpsJitter: Excessive network received frame rate Jitter</li><li>ReceiveFpsTooSmall: Network received video frame rate too small</li><li>FpsJitter: Excessive stream frame rate Jitter calculated by PTS</li><li>StreamOpenFailed: Stream open failure</li><li>StreamEnd: Stream end</li><li>StreamParseFailed: Stream parsing failure</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame</li><li>StreamNALUError: NALU Start Code Error</li><li>TsStreamNoAud: H26x stream in MPEG-TS lacks AUD NALU</li><li>AudioStreamLack: No audio stream</li><li>VideoStreamLack: No video stream</li><li>LackAudioRecover: Missing audio stream recovery</li><li>LackVideoRecover: Missing video stream recovery</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range</li><li>VideoDecodeFailed: Video decoding error</li><li>AudioDecodeFailed: Audio decoding error</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio</li><li>VideoDuplicatedFrame: Duplicate frames in video streams</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams</li><li>VideoRotation: Video rotation</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements</li><li>HLSBadM3u8Format: Invalid m3u8 file</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters</li><li>HLSMediaM3u8DiscontinuityExist: media m3u8 contains EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between slices without EXT-x-DISCONTINUITY</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between slices without EXT-x-DISCONTINUITY</li><li>TimecodeTrackExist: Mp4 contains tmcd track</li><li>BodyPoseCheck: Abnormal human body pose</li><li>BodyDetailCheck: Abnormal human body detail</li><li>PhysicRulesCheck: Physical rule violation</li><li>ObjectConsistencyCheck:</li></ul>Object consistency anomaly</li><li>FormatCheck: Format exception</li><li>AudioReverb: Reverberation level</li><li>AudioDiscontinuity: Audio discontinuity</li><li>AudioSpeechQuality: Speech clarity</li><li>AudioHighLoudness: Loudness distortion</li><li>AudioLoudnessJitter: Severe volume change</li><li>BackgroundMusic: Background music exists</li><li>NoBackgroundMusic: No background music</li><li>VideoAesthetic: Video aesthetic score</li><li>AudioVideoAsync: Audio and video out of sync</li><li>AudioSubtitleAsync: Audio and subtitle out of sync</li></ul>
     * @param string $Switch <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable.</li><li>OFF: Disable.</li></ul><p>Default value: ON</p>
     * @param string $Sampling <p>Sampling method</p><p>Enumeration values:</p><ul><li>Time: Sampling based on time interval.</li></ul>
     * @param integer $IntervalTime <p>Sampling interval time</p><p>Measurement unit: ms.</p>
     * @param integer $Duration <p>Duration of abnormality.</p><p>Measurement unit: millisecond.</p>
     * @param string $Threshold <p>Threshold of a detection item. Different detection items have different thresholds.</p>
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
