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
 * Diagnostic result item.
 *
 * @method string getCategory() Obtain Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: Stream information exception
StreamAbnormalCharacteristics: stream characteristic exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
 * @method void setCategory(string $Category) Set Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: Stream information exception
StreamAbnormalCharacteristics: stream characteristic exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
 * @method string getType() Obtain Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channels changed
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp fallback
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: The pts of the media stream is less than dts.
ReceiveFpsJitter: excessive network received frame rate jitter.
ReceiveFpsTooSmall: network received video frame rate too small.
FpsJitter: Excessive stream frame rate jitter calculated by PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: The H26x stream of MPEG-TS misses AUD NALU
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
TsMultiPrograms: MPEG2-TS stream has multiple programs
Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between slices without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: MP4 has a tmcd track
 * @method void setType(string $Type) Set Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channels changed
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp fallback
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: The pts of the media stream is less than dts.
ReceiveFpsJitter: excessive network received frame rate jitter.
ReceiveFpsTooSmall: network received video frame rate too small.
FpsJitter: Excessive stream frame rate jitter calculated by PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: The H26x stream of MPEG-TS misses AUD NALU
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
TsMultiPrograms: MPEG2-TS stream has multiple programs
Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between slices without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: MP4 has a tmcd track
 * @method float getTimestamp() Obtain PTS timestamp when the anomaly is diagnosed.
 * @method void setTimestamp(float $Timestamp) Set PTS timestamp when the anomaly is diagnosed.
 * @method string getDescription() Obtain Exception description from diagnosis.
 * @method void setDescription(string $Description) Set Exception description from diagnosis.
 * @method string getDateTime() Obtain Diagnose the abnormal UTC+8 time in ISO date format.
 * @method void setDateTime(string $DateTime) Set Diagnose the abnormal UTC+8 time in ISO date format.
 * @method string getSeverityLevel() Obtain Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: Important stream information
Info: general stream information.
 * @method void setSeverityLevel(string $SeverityLevel) Set Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: Important stream information
Info: general stream information.
 */
class DiagnoseResult extends AbstractModel
{
    /**
     * @var string Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: Stream information exception
StreamAbnormalCharacteristics: stream characteristic exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
     */
    public $Category;

    /**
     * @var string Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channels changed
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp fallback
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: The pts of the media stream is less than dts.
ReceiveFpsJitter: excessive network received frame rate jitter.
ReceiveFpsTooSmall: network received video frame rate too small.
FpsJitter: Excessive stream frame rate jitter calculated by PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: The H26x stream of MPEG-TS misses AUD NALU
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
TsMultiPrograms: MPEG2-TS stream has multiple programs
Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between slices without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: MP4 has a tmcd track
     */
    public $Type;

    /**
     * @var float PTS timestamp when the anomaly is diagnosed.
     */
    public $Timestamp;

    /**
     * @var string Exception description from diagnosis.
     */
    public $Description;

    /**
     * @var string Diagnose the abnormal UTC+8 time in ISO date format.
     */
    public $DateTime;

    /**
     * @var string Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: Important stream information
Info: general stream information.
     */
    public $SeverityLevel;

    /**
     * @param string $Category Diagnosed exception category. Valid values:
DecodeParamException: decoding parameter exception.
TimeStampException: timestamp exception.
FrameException: frame rate exception.
StreamStatusException: stream status exception.
StreamInfo: Stream information exception
StreamAbnormalCharacteristics: stream characteristic exception.
DecodeException: decoding exception.
HLSRequirements: HLS format exception.
     * @param string $Type Diagnosed specific exception type. Valid values:

VideoResolutionChanged: video resolution change.
AudioSampleRateChanged: audio sample rate change.
AudioChannelsChanged: audio channels changed
ParameterSetsChanged: stream parameter set information change.
DarOrSarInvalid: video aspect ratio exception.
TimestampFallback: DTS timestamp fallback
DtsJitter: DTS jitter too high.
PtsJitter: PTS jitter too high.
AACDurationDeviation: improper AAC frame timestamp interval.
AudioDroppingFrames: audio frame dropping.
VideoDroppingFrames: video frame dropping.
AVTimestampInterleave: improper audio-video interleaving.
PtsLessThanDts: The pts of the media stream is less than dts.
ReceiveFpsJitter: excessive network received frame rate jitter.
ReceiveFpsTooSmall: network received video frame rate too small.
FpsJitter: Excessive stream frame rate jitter calculated by PTS.
StreamOpenFailed: stream open failure.
StreamEnd: stream end.
StreamParseFailed: stream parsing failure.
VideoFirstFrameNotIdr: first frame not an IDR frame.
StreamNALUError: NALU start code error.
TsStreamNoAud: The H26x stream of MPEG-TS misses AUD NALU
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
TsMultiPrograms: MPEG2-TS stream has multiple programs
Mp4InvalidCodecFourcc: The codec fourcc in MP4 does not meet Apple HLS requirements
HLSBadM3u8Format: invalid M3U8 file.
HLSInvalidMasterM3u8: invalid main M3U8 file.
HLSInvalidMediaM3u8: invalid media M3U8 file.
HLSMasterM3u8Recommended: parameters recommended by standards missing in main M3U8.
HLSMediaM3u8Recommended: parameters recommended by standards missing in media M3U8.
HLSMediaM3u8DiscontinuityExist: EXT-X-DISCONTINUITY in media M3U8.
HLSMediaSegmentsStreamNumChange: changed number of streams in segments.
HLSMediaSegmentsPTSJitterDeviation: PTS jumps between slices without EXT-X-DISCONTINUITY.
HLSMediaSegmentsDTSJitterDeviation: DTS jumps between segments without EXT-X-DISCONTINUITY.
TimecodeTrackExist: MP4 has a tmcd track
     * @param float $Timestamp PTS timestamp when the anomaly is diagnosed.
     * @param string $Description Exception description from diagnosis.
     * @param string $DateTime Diagnose the abnormal UTC+8 time in ISO date format.
     * @param string $SeverityLevel Diagnosed exception level. Valid values:
Fatal: affecting subsequent playback and parsing.
Error: may affect playback.
Warning: potential risk, which may not necessarily affect playback.
Notice: Important stream information
Info: general stream information.
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

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }
    }
}
