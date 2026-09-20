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
 * Format diagnosis of audio and video quality inspection detects abnormal items.
 *
 * @method string getCategory() Obtain <p>Diagnosed exception category</p><p>Enumeration values:</p><ul><li>DecodeParamException: decoding parameter exception.</li><li>TimeStampException: timestamp exception.</li><li>FrameException: frame rate exception.</li><li>StreamStatusException: stream status anomaly.</li><li>StreamInfo: stream information exception.</li><li>StreamAbnormalCharacteristics: stream characteristic exception.</li><li>DecodeException: decoding anomaly.</li><li>HLSRequirements: HLS format exception.</li></ul>
 * @method void setCategory(string $Category) Set <p>Diagnosed exception category</p><p>Enumeration values:</p><ul><li>DecodeParamException: decoding parameter exception.</li><li>TimeStampException: timestamp exception.</li><li>FrameException: frame rate exception.</li><li>StreamStatusException: stream status anomaly.</li><li>StreamInfo: stream information exception.</li><li>StreamAbnormalCharacteristics: stream characteristic exception.</li><li>DecodeException: decoding anomaly.</li><li>HLSRequirements: HLS format exception.</li></ul>
 * @method string getType() Obtain <p>Specific exception type diagnosed.</p><p>Enumeration values:</p><ul><li>VideoResolutionChanged: Video resolution change.</li><li>AudioSampleRateChanged: Audio sampling rate change.</li><li>AudioChannelsChanged: Audio channels changed.</li><li>ParameterSetsChanged: Stream parameter set information changed.</li><li>DarOrSarInvalid: Abnormal video aspect ratio.</li><li>TimestampFallback: DTS timestamp fallback.</li><li>DtsJitter: Excessive DTS jitter.</li><li>PtsJitter: Excessive PTS jitter.</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval.</li><li>AudioDroppingFrames: Audio frame dropping.</li><li>VideoDroppingFrames: Video frame dropping.</li><li>AVTimestampInterleave: Improper audio-video interleaving.</li><li>PtsLessThanDts: media stream PTS less than DTS.</li><li>ReceiveFpsJitter: Excessive network received frame rate jitter.</li><li>ReceiveFpsTooSmall: Network received video frame rate too small.</li><li>FpsJitter: Excessive stream frame rate jitter calculated by PTS.</li><li>StreamOpenFailed: Stream open failure.</li><li>StreamEnd: Stream end.</li><li>StreamParseFailed: Stream parsing failure.</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame.</li><li>StreamNALUError: NALU start code error.</li><li>TsStreamNoAud: H26x stream in MPEG-TS missing AUD NALU.</li><li>AudioStreamLack: No audio stream.</li><li>VideoStreamLack: No video stream.</li><li>LackAudioRecover: Missing audio stream recovery.</li><li>LackVideoRecover: Missing video stream recovery.</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range.</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range.</li><li>VideoDecodeFailed: Video decoding error.</li><li>AudioDecodeFailed: Audio decoding error.</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio.</li><li>VideoDuplicatedFrame: Duplicate frames in video streams.</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams.</li><li>VideoRotation: Video rotation.</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs.</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements.</li><li>HLSBadM3u8Format: Invalid m3u8 file.</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file.</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file.</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8DiscontinuityExist: EXT-x-DISCONTINUITY exists in media m3u8.</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between segments without EXT-x-DISCONTINUITY.</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between segments without EXT-x-DISCONTINUITY.</li><li>TimecodeTrackExist: Mp4 has a tmcd track.</li></ul>
 * @method void setType(string $Type) Set <p>Specific exception type diagnosed.</p><p>Enumeration values:</p><ul><li>VideoResolutionChanged: Video resolution change.</li><li>AudioSampleRateChanged: Audio sampling rate change.</li><li>AudioChannelsChanged: Audio channels changed.</li><li>ParameterSetsChanged: Stream parameter set information changed.</li><li>DarOrSarInvalid: Abnormal video aspect ratio.</li><li>TimestampFallback: DTS timestamp fallback.</li><li>DtsJitter: Excessive DTS jitter.</li><li>PtsJitter: Excessive PTS jitter.</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval.</li><li>AudioDroppingFrames: Audio frame dropping.</li><li>VideoDroppingFrames: Video frame dropping.</li><li>AVTimestampInterleave: Improper audio-video interleaving.</li><li>PtsLessThanDts: media stream PTS less than DTS.</li><li>ReceiveFpsJitter: Excessive network received frame rate jitter.</li><li>ReceiveFpsTooSmall: Network received video frame rate too small.</li><li>FpsJitter: Excessive stream frame rate jitter calculated by PTS.</li><li>StreamOpenFailed: Stream open failure.</li><li>StreamEnd: Stream end.</li><li>StreamParseFailed: Stream parsing failure.</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame.</li><li>StreamNALUError: NALU start code error.</li><li>TsStreamNoAud: H26x stream in MPEG-TS missing AUD NALU.</li><li>AudioStreamLack: No audio stream.</li><li>VideoStreamLack: No video stream.</li><li>LackAudioRecover: Missing audio stream recovery.</li><li>LackVideoRecover: Missing video stream recovery.</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range.</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range.</li><li>VideoDecodeFailed: Video decoding error.</li><li>AudioDecodeFailed: Audio decoding error.</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio.</li><li>VideoDuplicatedFrame: Duplicate frames in video streams.</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams.</li><li>VideoRotation: Video rotation.</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs.</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements.</li><li>HLSBadM3u8Format: Invalid m3u8 file.</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file.</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file.</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8DiscontinuityExist: EXT-x-DISCONTINUITY exists in media m3u8.</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between segments without EXT-x-DISCONTINUITY.</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between segments without EXT-x-DISCONTINUITY.</li><li>TimecodeTrackExist: Mp4 has a tmcd track.</li></ul>
 * @method string getSeverityLevel() Obtain <p>Diagnosed exception level.</p><p>Enumeration values:</p><ul><li>Fatal: affects subsequent playback and parsing.</li><li>Error: may affect playback.</li><li>Warning: may have potential risks, but may not necessarily affect playback.</li><li>Notice: important stream information.</li><li>Info: general stream information.</li></ul>
 * @method void setSeverityLevel(string $SeverityLevel) Set <p>Diagnosed exception level.</p><p>Enumeration values:</p><ul><li>Fatal: affects subsequent playback and parsing.</li><li>Error: may affect playback.</li><li>Warning: may have potential risks, but may not necessarily affect playback.</li><li>Notice: important stream information.</li><li>Info: general stream information.</li></ul>
 * @method array getTimestampSet() Obtain <p>Timestamp.</p>
 * @method void setTimestampSet(array $TimestampSet) Set <p>Timestamp.</p>
 */
class QualityInspectContainerDiagnoseResultItem extends AbstractModel
{
    /**
     * @var string <p>Diagnosed exception category</p><p>Enumeration values:</p><ul><li>DecodeParamException: decoding parameter exception.</li><li>TimeStampException: timestamp exception.</li><li>FrameException: frame rate exception.</li><li>StreamStatusException: stream status anomaly.</li><li>StreamInfo: stream information exception.</li><li>StreamAbnormalCharacteristics: stream characteristic exception.</li><li>DecodeException: decoding anomaly.</li><li>HLSRequirements: HLS format exception.</li></ul>
     */
    public $Category;

    /**
     * @var string <p>Specific exception type diagnosed.</p><p>Enumeration values:</p><ul><li>VideoResolutionChanged: Video resolution change.</li><li>AudioSampleRateChanged: Audio sampling rate change.</li><li>AudioChannelsChanged: Audio channels changed.</li><li>ParameterSetsChanged: Stream parameter set information changed.</li><li>DarOrSarInvalid: Abnormal video aspect ratio.</li><li>TimestampFallback: DTS timestamp fallback.</li><li>DtsJitter: Excessive DTS jitter.</li><li>PtsJitter: Excessive PTS jitter.</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval.</li><li>AudioDroppingFrames: Audio frame dropping.</li><li>VideoDroppingFrames: Video frame dropping.</li><li>AVTimestampInterleave: Improper audio-video interleaving.</li><li>PtsLessThanDts: media stream PTS less than DTS.</li><li>ReceiveFpsJitter: Excessive network received frame rate jitter.</li><li>ReceiveFpsTooSmall: Network received video frame rate too small.</li><li>FpsJitter: Excessive stream frame rate jitter calculated by PTS.</li><li>StreamOpenFailed: Stream open failure.</li><li>StreamEnd: Stream end.</li><li>StreamParseFailed: Stream parsing failure.</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame.</li><li>StreamNALUError: NALU start code error.</li><li>TsStreamNoAud: H26x stream in MPEG-TS missing AUD NALU.</li><li>AudioStreamLack: No audio stream.</li><li>VideoStreamLack: No video stream.</li><li>LackAudioRecover: Missing audio stream recovery.</li><li>LackVideoRecover: Missing video stream recovery.</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range.</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range.</li><li>VideoDecodeFailed: Video decoding error.</li><li>AudioDecodeFailed: Audio decoding error.</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio.</li><li>VideoDuplicatedFrame: Duplicate frames in video streams.</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams.</li><li>VideoRotation: Video rotation.</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs.</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements.</li><li>HLSBadM3u8Format: Invalid m3u8 file.</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file.</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file.</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8DiscontinuityExist: EXT-x-DISCONTINUITY exists in media m3u8.</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between segments without EXT-x-DISCONTINUITY.</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between segments without EXT-x-DISCONTINUITY.</li><li>TimecodeTrackExist: Mp4 has a tmcd track.</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Diagnosed exception level.</p><p>Enumeration values:</p><ul><li>Fatal: affects subsequent playback and parsing.</li><li>Error: may affect playback.</li><li>Warning: may have potential risks, but may not necessarily affect playback.</li><li>Notice: important stream information.</li><li>Info: general stream information.</li></ul>
     */
    public $SeverityLevel;

    /**
     * @var array <p>Timestamp.</p>
     */
    public $TimestampSet;

    /**
     * @param string $Category <p>Diagnosed exception category</p><p>Enumeration values:</p><ul><li>DecodeParamException: decoding parameter exception.</li><li>TimeStampException: timestamp exception.</li><li>FrameException: frame rate exception.</li><li>StreamStatusException: stream status anomaly.</li><li>StreamInfo: stream information exception.</li><li>StreamAbnormalCharacteristics: stream characteristic exception.</li><li>DecodeException: decoding anomaly.</li><li>HLSRequirements: HLS format exception.</li></ul>
     * @param string $Type <p>Specific exception type diagnosed.</p><p>Enumeration values:</p><ul><li>VideoResolutionChanged: Video resolution change.</li><li>AudioSampleRateChanged: Audio sampling rate change.</li><li>AudioChannelsChanged: Audio channels changed.</li><li>ParameterSetsChanged: Stream parameter set information changed.</li><li>DarOrSarInvalid: Abnormal video aspect ratio.</li><li>TimestampFallback: DTS timestamp fallback.</li><li>DtsJitter: Excessive DTS jitter.</li><li>PtsJitter: Excessive PTS jitter.</li><li>AACDurationDeviation: Unreasonable AAC frame timestamp interval.</li><li>AudioDroppingFrames: Audio frame dropping.</li><li>VideoDroppingFrames: Video frame dropping.</li><li>AVTimestampInterleave: Improper audio-video interleaving.</li><li>PtsLessThanDts: media stream PTS less than DTS.</li><li>ReceiveFpsJitter: Excessive network received frame rate jitter.</li><li>ReceiveFpsTooSmall: Network received video frame rate too small.</li><li>FpsJitter: Excessive stream frame rate jitter calculated by PTS.</li><li>StreamOpenFailed: Stream open failure.</li><li>StreamEnd: Stream end.</li><li>StreamParseFailed: Stream parsing failure.</li><li>VideoFirstFrameNotIdr: First frame not an IDR frame.</li><li>StreamNALUError: NALU start code error.</li><li>TsStreamNoAud: H26x stream in MPEG-TS missing AUD NALU.</li><li>AudioStreamLack: No audio stream.</li><li>VideoStreamLack: No video stream.</li><li>LackAudioRecover: Missing audio stream recovery.</li><li>LackVideoRecover: Missing video stream recovery.</li><li>VideoBitrateOutofRange: Video stream bitrate (kbps) out of range.</li><li>AudioBitrateOutofRange: Audio stream bitrate (kbps) out of range.</li><li>VideoDecodeFailed: Video decoding error.</li><li>AudioDecodeFailed: Audio decoding error.</li><li>AudioOutOfPhase: Opposite phase in dual-channel audio.</li><li>VideoDuplicatedFrame: Duplicate frames in video streams.</li><li>AudioDuplicatedFrame: Duplicate frames in audio streams.</li><li>VideoRotation: Video rotation.</li><li>TsMultiPrograms: MPEG2-TS stream has multiple programs.</li><li>Mp4InvalidCodecFourcc: codec fourcc in Mp4 does not meet Apple HLS requirements.</li><li>HLSBadM3u8Format: Invalid m3u8 file.</li><li>HLSInvalidMasterM3u8: Invalid main m3u8 file.</li><li>HLSInvalidMediaM3u8: Invalid media m3u8 file.</li><li>HLSMasterM3u8Recommended: main m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8Recommended: media m3u8 lacks standard Recommended parameters.</li><li>HLSMediaM3u8DiscontinuityExist: EXT-x-DISCONTINUITY exists in media m3u8.</li><li>HLSMediaSegmentsStreamNumChange: Number of streams in segments changes.</li><li>HLSMediaSegmentsPTSJitterDeviation: PTS jump between segments without EXT-x-DISCONTINUITY.</li><li>HLSMediaSegmentsDTSJitterDeviation: DTS jump between segments without EXT-x-DISCONTINUITY.</li><li>TimecodeTrackExist: Mp4 has a tmcd track.</li></ul>
     * @param string $SeverityLevel <p>Diagnosed exception level.</p><p>Enumeration values:</p><ul><li>Fatal: affects subsequent playback and parsing.</li><li>Error: may affect playback.</li><li>Warning: may have potential risks, but may not necessarily affect playback.</li><li>Notice: important stream information.</li><li>Info: general stream information.</li></ul>
     * @param array $TimestampSet <p>Timestamp.</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }

        if (array_key_exists("TimestampSet",$param) and $param["TimestampSet"] !== null) {
            $this->TimestampSet = $param["TimestampSet"];
        }
    }
}
