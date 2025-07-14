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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relay Recording Parameters
 *
 * @method integer getUniRecord() Obtain Relay Recording Mode
0/blank: Not currently supported, behavior undefined.
1: Disable recording.
2: Start recording (uses console's auto-recording template parameters. Reference: [Link to Documentation]).
3: Start recording (uses API-specified parameters).
Example: 2
 * @method void setUniRecord(integer $UniRecord) Set Relay Recording Mode
0/blank: Not currently supported, behavior undefined.
1: Disable recording.
2: Start recording (uses console's auto-recording template parameters. Reference: [Link to Documentation]).
3: Start recording (uses API-specified parameters).
Example: 2
 * @method string getRecordKey() Obtain Recording Task Key
Identifies a recording task. This parameter allows merging multiple relay tasks into one recording file. If unspecified, only records the current relay task.
[Format: Up to 128 bytes; only letters (a-z, A-Z), numbers (0-9), underscores (_), and hyphens (-).]
Example: test_record_key_a
 * @method void setRecordKey(string $RecordKey) Set Recording Task Key
Identifies a recording task. This parameter allows merging multiple relay tasks into one recording file. If unspecified, only records the current relay task.
[Format: Up to 128 bytes; only letters (a-z, A-Z), numbers (0-9), underscores (_), and hyphens (-).]
Example: test_record_key_a
 * @method integer getRecordWaitTime() Obtain [Valid only when UniRecord=3]
Recording Resume Wait Time
Corresponds to template parameter "Resume Wait Duration." Unit: seconds.
Range: 5-86400 (24 hours). Default: 30. Recording stops if idle longer than this value.
Example: 30
 * @method void setRecordWaitTime(integer $RecordWaitTime) Set [Valid only when UniRecord=3]
Recording Resume Wait Time
Corresponds to template parameter "Resume Wait Duration." Unit: seconds.
Range: 5-86400 (24 hours). Default: 30. Recording stops if idle longer than this value.
Example: 30
 * @method array getRecordFormat() Obtain [Valid only when UniRecord=3]
Recording Output Formats
Corresponds to template parameter "File Format." Supported values: hls, mp4, aac. Default: mp4.
Note: mp4 and aac formats are mutually exclusive.
Example (MP4 only): ["mp4"]
Example (MP4 + HLS): ["mp4","hls"]
 * @method void setRecordFormat(array $RecordFormat) Set [Valid only when UniRecord=3]
Recording Output Formats
Corresponds to template parameter "File Format." Supported values: hls, mp4, aac. Default: mp4.
Note: mp4 and aac formats are mutually exclusive.
Example (MP4 only): ["mp4"]
Example (MP4 + HLS): ["mp4","hls"]
 * @method integer getMaxMediaFileDuration() Obtain [Valid only when UniRecord=3]
Single File Duration
Corresponds to template parameter "Max File Duration." Unit: minutes.
Range: 1-1440 (24 hours). Default: 1440. Applies only to mp4/aac. Actual duration is capped at 2GB file size.
Example: 1440
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) Set [Valid only when UniRecord=3]
Single File Duration
Corresponds to template parameter "Max File Duration." Unit: minutes.
Range: 1-1440 (24 hours). Default: 1440. Applies only to mp4/aac. Actual duration is capped at 2GB file size.
Example: 1440
 * @method integer getStreamType() Obtain [Valid only when UniRecord=3]
Recording Media Type
Corresponds to template parameter "Recording Format."
0: Audio+Video, 1: Audio only, 2: Video only. Output is the intersection of this setting and relay content.
Example: 0
 * @method void setStreamType(integer $StreamType) Set [Valid only when UniRecord=3]
Recording Media Type
Corresponds to template parameter "Recording Format."
0: Audio+Video, 1: Audio only, 2: Video only. Output is the intersection of this setting and relay content.
Example: 0
 * @method string getUserDefineRecordPrefix() Obtain Recording Filename Prefix
Filename prefix (<=64 bytes). Applies only to VOD storage.
*Format: Letters (a-z, A-Z), numbers (0-9), underscores (_), hyphens (-).*
Example: mcu_record_prefix
 * @method void setUserDefineRecordPrefix(string $UserDefineRecordPrefix) Set Recording Filename Prefix
Filename prefix (<=64 bytes). Applies only to VOD storage.
*Format: Letters (a-z, A-Z), numbers (0-9), underscores (_), hyphens (-).*
Example: mcu_record_prefix
 * @method McuStorageParams getMcuStorageParams() Obtain [Valid only when UniRecord=3]
Recording Storage Parameters
Corresponds to console parameter "Storage Location." Supports Tencent VOD or COS (exclusively).
Example: {"McuCloudVod":{"McuTencentVod":{"ExpireTime":86400}}}
 * @method void setMcuStorageParams(McuStorageParams $McuStorageParams) Set [Valid only when UniRecord=3]
Recording Storage Parameters
Corresponds to console parameter "Storage Location." Supports Tencent VOD or COS (exclusively).
Example: {"McuCloudVod":{"McuTencentVod":{"ExpireTime":86400}}}
 */
class McuRecordParams extends AbstractModel
{
    /**
     * @var integer Relay Recording Mode
0/blank: Not currently supported, behavior undefined.
1: Disable recording.
2: Start recording (uses console's auto-recording template parameters. Reference: [Link to Documentation]).
3: Start recording (uses API-specified parameters).
Example: 2
     */
    public $UniRecord;

    /**
     * @var string Recording Task Key
Identifies a recording task. This parameter allows merging multiple relay tasks into one recording file. If unspecified, only records the current relay task.
[Format: Up to 128 bytes; only letters (a-z, A-Z), numbers (0-9), underscores (_), and hyphens (-).]
Example: test_record_key_a
     */
    public $RecordKey;

    /**
     * @var integer [Valid only when UniRecord=3]
Recording Resume Wait Time
Corresponds to template parameter "Resume Wait Duration." Unit: seconds.
Range: 5-86400 (24 hours). Default: 30. Recording stops if idle longer than this value.
Example: 30
     */
    public $RecordWaitTime;

    /**
     * @var array [Valid only when UniRecord=3]
Recording Output Formats
Corresponds to template parameter "File Format." Supported values: hls, mp4, aac. Default: mp4.
Note: mp4 and aac formats are mutually exclusive.
Example (MP4 only): ["mp4"]
Example (MP4 + HLS): ["mp4","hls"]
     */
    public $RecordFormat;

    /**
     * @var integer [Valid only when UniRecord=3]
Single File Duration
Corresponds to template parameter "Max File Duration." Unit: minutes.
Range: 1-1440 (24 hours). Default: 1440. Applies only to mp4/aac. Actual duration is capped at 2GB file size.
Example: 1440
     */
    public $MaxMediaFileDuration;

    /**
     * @var integer [Valid only when UniRecord=3]
Recording Media Type
Corresponds to template parameter "Recording Format."
0: Audio+Video, 1: Audio only, 2: Video only. Output is the intersection of this setting and relay content.
Example: 0
     */
    public $StreamType;

    /**
     * @var string Recording Filename Prefix
Filename prefix (<=64 bytes). Applies only to VOD storage.
*Format: Letters (a-z, A-Z), numbers (0-9), underscores (_), hyphens (-).*
Example: mcu_record_prefix
     */
    public $UserDefineRecordPrefix;

    /**
     * @var McuStorageParams [Valid only when UniRecord=3]
Recording Storage Parameters
Corresponds to console parameter "Storage Location." Supports Tencent VOD or COS (exclusively).
Example: {"McuCloudVod":{"McuTencentVod":{"ExpireTime":86400}}}
     */
    public $McuStorageParams;

    /**
     * @param integer $UniRecord Relay Recording Mode
0/blank: Not currently supported, behavior undefined.
1: Disable recording.
2: Start recording (uses console's auto-recording template parameters. Reference: [Link to Documentation]).
3: Start recording (uses API-specified parameters).
Example: 2
     * @param string $RecordKey Recording Task Key
Identifies a recording task. This parameter allows merging multiple relay tasks into one recording file. If unspecified, only records the current relay task.
[Format: Up to 128 bytes; only letters (a-z, A-Z), numbers (0-9), underscores (_), and hyphens (-).]
Example: test_record_key_a
     * @param integer $RecordWaitTime [Valid only when UniRecord=3]
Recording Resume Wait Time
Corresponds to template parameter "Resume Wait Duration." Unit: seconds.
Range: 5-86400 (24 hours). Default: 30. Recording stops if idle longer than this value.
Example: 30
     * @param array $RecordFormat [Valid only when UniRecord=3]
Recording Output Formats
Corresponds to template parameter "File Format." Supported values: hls, mp4, aac. Default: mp4.
Note: mp4 and aac formats are mutually exclusive.
Example (MP4 only): ["mp4"]
Example (MP4 + HLS): ["mp4","hls"]
     * @param integer $MaxMediaFileDuration [Valid only when UniRecord=3]
Single File Duration
Corresponds to template parameter "Max File Duration." Unit: minutes.
Range: 1-1440 (24 hours). Default: 1440. Applies only to mp4/aac. Actual duration is capped at 2GB file size.
Example: 1440
     * @param integer $StreamType [Valid only when UniRecord=3]
Recording Media Type
Corresponds to template parameter "Recording Format."
0: Audio+Video, 1: Audio only, 2: Video only. Output is the intersection of this setting and relay content.
Example: 0
     * @param string $UserDefineRecordPrefix Recording Filename Prefix
Filename prefix (<=64 bytes). Applies only to VOD storage.
*Format: Letters (a-z, A-Z), numbers (0-9), underscores (_), hyphens (-).*
Example: mcu_record_prefix
     * @param McuStorageParams $McuStorageParams [Valid only when UniRecord=3]
Recording Storage Parameters
Corresponds to console parameter "Storage Location." Supports Tencent VOD or COS (exclusively).
Example: {"McuCloudVod":{"McuTencentVod":{"ExpireTime":86400}}}
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
        if (array_key_exists("UniRecord",$param) and $param["UniRecord"] !== null) {
            $this->UniRecord = $param["UniRecord"];
        }

        if (array_key_exists("RecordKey",$param) and $param["RecordKey"] !== null) {
            $this->RecordKey = $param["RecordKey"];
        }

        if (array_key_exists("RecordWaitTime",$param) and $param["RecordWaitTime"] !== null) {
            $this->RecordWaitTime = $param["RecordWaitTime"];
        }

        if (array_key_exists("RecordFormat",$param) and $param["RecordFormat"] !== null) {
            $this->RecordFormat = $param["RecordFormat"];
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("UserDefineRecordPrefix",$param) and $param["UserDefineRecordPrefix"] !== null) {
            $this->UserDefineRecordPrefix = $param["UserDefineRecordPrefix"];
        }

        if (array_key_exists("McuStorageParams",$param) and $param["McuStorageParams"] !== null) {
            $this->McuStorageParams = new McuStorageParams();
            $this->McuStorageParams->deserialize($param["McuStorageParams"]);
        }
    }
}
