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
 * Container format diagnostic result.
 *
 * @method string getCategory() Obtain Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: stream information exception.
StreamAbnormalCharacteristics: stream characteristics exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: stream information exception.
StreamAbnormalCharacteristics: stream characteristics exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channel quantity change.
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp rollback.
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: PTS less than DTS for media streams.
ReceiveFpsJitter: significant jitter in the network receive frame rate.
ReceiveFpsTooSmall: network receive video frame rate too low.
FpsJitter: significant jitter in the stream frame rate calculated via PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.
AudioStreamLack: no audio stream.
VideoStreamLack: no video stream.
LackAudioRecover: missing audio stream recovery.
LackVideoRecover: missing video stream recovery.
VideoBitrateOutofRange: video stream bitrate (kbps) out of range.
AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.
VideoDecodeFailed: video decoding error.
AudioDecodeFailed: audio decoding error.
AudioOutOfPhase: opposite phase in dual-channel audio.
VideoDuplicatedFrame: duplicate frames in video streams.
AudioDuplicatedFrame: duplicate frames in audio streams.
VideoRotation: video rotation.
TsMultiPrograms: multiple programs in MPEG2-TS streams
Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: TMCD track in MP4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channel quantity change.
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp rollback.
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: PTS less than DTS for media streams.
ReceiveFpsJitter: significant jitter in the network receive frame rate.
ReceiveFpsTooSmall: network receive video frame rate too low.
FpsJitter: significant jitter in the stream frame rate calculated via PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.
AudioStreamLack: no audio stream.
VideoStreamLack: no video stream.
LackAudioRecover: missing audio stream recovery.
LackVideoRecover: missing video stream recovery.
VideoBitrateOutofRange: video stream bitrate (kbps) out of range.
AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.
VideoDecodeFailed: video decoding error.
AudioDecodeFailed: audio decoding error.
AudioOutOfPhase: opposite phase in dual-channel audio.
VideoDuplicatedFrame: duplicate frames in video streams.
AudioDuplicatedFrame: duplicate frames in audio streams.
VideoRotation: video rotation.
TsMultiPrograms: multiple programs in MPEG2-TS streams
Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: TMCD track in MP4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSeverityLevel() Obtain Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: important stream information.
Info: general stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeverityLevel(string $SeverityLevel) Set Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: important stream information.
Info: general stream information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDateTimeSet() Obtain Timestamp of warning, in the format of 2022-12-25T13:14:16Z.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateTimeSet(array $DateTimeSet) Set Timestamp of warning, in the format of 2022-12-25T13:14:16Z.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTimestampSet() Obtain Timestamp.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestampSet(array $TimestampSet) Set Timestamp.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class ContainerDiagnoseResultItem extends AbstractModel
{
    /**
     * @var string Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: stream information exception.
StreamAbnormalCharacteristics: stream characteristics exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @var string Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channel quantity change.
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp rollback.
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: PTS less than DTS for media streams.
ReceiveFpsJitter: significant jitter in the network receive frame rate.
ReceiveFpsTooSmall: network receive video frame rate too low.
FpsJitter: significant jitter in the stream frame rate calculated via PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.
AudioStreamLack: no audio stream.
VideoStreamLack: no video stream.
LackAudioRecover: missing audio stream recovery.
LackVideoRecover: missing video stream recovery.
VideoBitrateOutofRange: video stream bitrate (kbps) out of range.
AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.
VideoDecodeFailed: video decoding error.
AudioDecodeFailed: audio decoding error.
AudioOutOfPhase: opposite phase in dual-channel audio.
VideoDuplicatedFrame: duplicate frames in video streams.
AudioDuplicatedFrame: duplicate frames in audio streams.
VideoRotation: video rotation.
TsMultiPrograms: multiple programs in MPEG2-TS streams
Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: TMCD track in MP4.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: important stream information.
Info: general stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SeverityLevel;

    /**
     * @var array Timestamp of warning, in the format of 2022-12-25T13:14:16Z.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateTimeSet;

    /**
     * @var array Timestamp.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimestampSet;

    /**
     * @param string $Category Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: stream information exception.
StreamAbnormalCharacteristics: stream characteristics exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channel quantity change.
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp rollback.
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: PTS less than DTS for media streams.
ReceiveFpsJitter: significant jitter in the network receive frame rate.
ReceiveFpsTooSmall: network receive video frame rate too low.
FpsJitter: significant jitter in the stream frame rate calculated via PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: no AUD NALU in the H26x stream of MPEG-TS.
AudioStreamLack: no audio stream.
VideoStreamLack: no video stream.
LackAudioRecover: missing audio stream recovery.
LackVideoRecover: missing video stream recovery.
VideoBitrateOutofRange: video stream bitrate (kbps) out of range.
AudioBitrateOutofRange: audio stream bitrate (kbps) out of range.
VideoDecodeFailed: video decoding error.
AudioDecodeFailed: audio decoding error.
AudioOutOfPhase: opposite phase in dual-channel audio.
VideoDuplicatedFrame: duplicate frames in video streams.
AudioDuplicatedFrame: duplicate frames in audio streams.
VideoRotation: video rotation.
TsMultiPrograms: multiple programs in MPEG2-TS streams
Mp4InvalidCodecFourcc: codec FourCC in MP4 not meeting Apple HLS requirements.
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between segments without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: TMCD track in MP4.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SeverityLevel Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: important stream information.
Info: general stream information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DateTimeSet Timestamp of warning, in the format of 2022-12-25T13:14:16Z.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TimestampSet Timestamp.

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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }

        if (array_key_exists("DateTimeSet",$param) and $param["DateTimeSet"] !== null) {
            $this->DateTimeSet = $param["DateTimeSet"];
        }

        if (array_key_exists("TimestampSet",$param) and $param["TimestampSet"] !== null) {
            $this->TimestampSet = $param["TimestampSet"];
        }
    }
}
