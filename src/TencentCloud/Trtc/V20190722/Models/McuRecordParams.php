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
 * Relay recording parameters.
 *
 * @method integer getUniRecord() Obtain Retweet recording mode. 
0/Leave blank: not currently supported; behavior is undefined.
1: disable recording.
2: enable recording (via console automatic recording template parameters, see: [redirection document](https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88));.
3: enable recording (use API to specify parameter).
 * @method void setUniRecord(integer $UniRecord) Set Retweet recording mode. 
0/Leave blank: not currently supported; behavior is undefined.
1: disable recording.
2: enable recording (via console automatic recording template parameters, see: [redirection document](https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88));.
3: enable recording (use API to specify parameter).
 * @method string getRecordKey() Obtain Recording task key, identifies a recording task. you can record multiple relay tasks into a file by specifying this parameter. if this parameter is not specified, only the current relay task is recorded.
Limit length to 128 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
 * @method void setRecordKey(string $RecordKey) Set Recording task key, identifies a recording task. you can record multiple relay tasks into a file by specifying this parameter. if this parameter is not specified, only the current relay task is recorded.
Limit length to 128 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
 * @method integer getRecordWaitTime() Obtain [Valid only when UniRecord=3.].
Resume recording waiting time, corresponding to the "wait time for resumption" in the recording template, unit: seconds. the value must be greater than or equal to 5 and less than or equal to 86400 (24 hours), with a default value of 30. when resumption is enabled, the recording task ends automatically if idle for a duration exceeding RecordWaitTime.
 * @method void setRecordWaitTime(integer $RecordWaitTime) Set [Valid only when UniRecord=3.].
Resume recording waiting time, corresponding to the "wait time for resumption" in the recording template, unit: seconds. the value must be greater than or equal to 5 and less than or equal to 86400 (24 hours), with a default value of 30. when resumption is enabled, the recording task ends automatically if idle for a duration exceeding RecordWaitTime.
 * @method array getRecordFormat() Obtain [Valid only when UniRecord=3.].
The list of output file formats for recording corresponds to the "file format" in the recording template. it supports three formats: "hls", "mp4", and "aac". the default value is "mp4". among them, "mp4" and "aac" formats cannot be specified simultaneously.
Record only the mp4 format, example value: ["mp4"]. record both mp4 and HLS formats simultaneously, example value: ["mp4","HLS"].
 * @method void setRecordFormat(array $RecordFormat) Set [Valid only when UniRecord=3.].
The list of output file formats for recording corresponds to the "file format" in the recording template. it supports three formats: "hls", "mp4", and "aac". the default value is "mp4". among them, "mp4" and "aac" formats cannot be specified simultaneously.
Record only the mp4 format, example value: ["mp4"]. record both mp4 and HLS formats simultaneously, example value: ["mp4","HLS"].
 * @method integer getMaxMediaFileDuration() Obtain [Valid only when UniRecord=3.].
Single file recording duration, corresponding to the "max recording time per file" in the recording template, unit: minutes. the value must be greater than or equal to 1 and less than or equal to 1440 (24 hours), with a default value of 1440. it only takes effect for "mp4" or "aac" format. the actual single file recording duration is also limited by the file size not exceeding 2G. if it exceeds 2G, the file will be forcibly split.
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) Set [Valid only when UniRecord=3.].
Single file recording duration, corresponding to the "max recording time per file" in the recording template, unit: minutes. the value must be greater than or equal to 1 and less than or equal to 1440 (24 hours), with a default value of 1440. it only takes effect for "mp4" or "aac" format. the actual single file recording duration is also limited by the file size not exceeding 2G. if it exceeds 2G, the file will be forcibly split.
 * @method integer getStreamType() Obtain [Valid only when UniRecord=3.].
The audio and video type of the recording corresponds to the "recording format" in the recording template. valid values: 0 (audio and video), 1 (pure audio), 2 (video only). the final recording file content is the intersection of the specified type and the relayed content.
 * @method void setStreamType(integer $StreamType) Set [Valid only when UniRecord=3.].
The audio and video type of the recording corresponds to the "recording format" in the recording template. valid values: 0 (audio and video), 1 (pure audio), 2 (video only). the final recording file content is the intersection of the specified type and the relayed content.
 * @method string getUserDefineRecordPrefix() Obtain Recording file name prefix, no more than 64 characters. this parameter is valid only when store is vod.
Limit length to 64 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
 * @method void setUserDefineRecordPrefix(string $UserDefineRecordPrefix) Set Recording file name prefix, no more than 64 characters. this parameter is valid only when store is vod.
Limit length to 64 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
 * @method McuStorageParams getMcuStorageParams() Obtain [Valid only when UniRecord=3.].
Recording files storage parameters, corresponding console "storage location" and related parameters. currently supports VOD and COS storage methods. only one can be filled.
 * @method void setMcuStorageParams(McuStorageParams $McuStorageParams) Set [Valid only when UniRecord=3.].
Recording files storage parameters, corresponding console "storage location" and related parameters. currently supports VOD and COS storage methods. only one can be filled.
 */
class McuRecordParams extends AbstractModel
{
    /**
     * @var integer Retweet recording mode. 
0/Leave blank: not currently supported; behavior is undefined.
1: disable recording.
2: enable recording (via console automatic recording template parameters, see: [redirection document](https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88));.
3: enable recording (use API to specify parameter).
     */
    public $UniRecord;

    /**
     * @var string Recording task key, identifies a recording task. you can record multiple relay tasks into a file by specifying this parameter. if this parameter is not specified, only the current relay task is recorded.
Limit length to 128 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
     */
    public $RecordKey;

    /**
     * @var integer [Valid only when UniRecord=3.].
Resume recording waiting time, corresponding to the "wait time for resumption" in the recording template, unit: seconds. the value must be greater than or equal to 5 and less than or equal to 86400 (24 hours), with a default value of 30. when resumption is enabled, the recording task ends automatically if idle for a duration exceeding RecordWaitTime.
     */
    public $RecordWaitTime;

    /**
     * @var array [Valid only when UniRecord=3.].
The list of output file formats for recording corresponds to the "file format" in the recording template. it supports three formats: "hls", "mp4", and "aac". the default value is "mp4". among them, "mp4" and "aac" formats cannot be specified simultaneously.
Record only the mp4 format, example value: ["mp4"]. record both mp4 and HLS formats simultaneously, example value: ["mp4","HLS"].
     */
    public $RecordFormat;

    /**
     * @var integer [Valid only when UniRecord=3.].
Single file recording duration, corresponding to the "max recording time per file" in the recording template, unit: minutes. the value must be greater than or equal to 1 and less than or equal to 1440 (24 hours), with a default value of 1440. it only takes effect for "mp4" or "aac" format. the actual single file recording duration is also limited by the file size not exceeding 2G. if it exceeds 2G, the file will be forcibly split.
     */
    public $MaxMediaFileDuration;

    /**
     * @var integer [Valid only when UniRecord=3.].
The audio and video type of the recording corresponds to the "recording format" in the recording template. valid values: 0 (audio and video), 1 (pure audio), 2 (video only). the final recording file content is the intersection of the specified type and the relayed content.
     */
    public $StreamType;

    /**
     * @var string Recording file name prefix, no more than 64 characters. this parameter is valid only when store is vod.
Limit length to 64 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
     */
    public $UserDefineRecordPrefix;

    /**
     * @var McuStorageParams [Valid only when UniRecord=3.].
Recording files storage parameters, corresponding console "storage location" and related parameters. currently supports VOD and COS storage methods. only one can be filled.
     */
    public $McuStorageParams;

    /**
     * @param integer $UniRecord Retweet recording mode. 
0/Leave blank: not currently supported; behavior is undefined.
1: disable recording.
2: enable recording (via console automatic recording template parameters, see: [redirection document](https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88));.
3: enable recording (use API to specify parameter).
     * @param string $RecordKey Recording task key, identifies a recording task. you can record multiple relay tasks into a file by specifying this parameter. if this parameter is not specified, only the current relay task is recorded.
Limit length to 128 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
     * @param integer $RecordWaitTime [Valid only when UniRecord=3.].
Resume recording waiting time, corresponding to the "wait time for resumption" in the recording template, unit: seconds. the value must be greater than or equal to 5 and less than or equal to 86400 (24 hours), with a default value of 30. when resumption is enabled, the recording task ends automatically if idle for a duration exceeding RecordWaitTime.
     * @param array $RecordFormat [Valid only when UniRecord=3.].
The list of output file formats for recording corresponds to the "file format" in the recording template. it supports three formats: "hls", "mp4", and "aac". the default value is "mp4". among them, "mp4" and "aac" formats cannot be specified simultaneously.
Record only the mp4 format, example value: ["mp4"]. record both mp4 and HLS formats simultaneously, example value: ["mp4","HLS"].
     * @param integer $MaxMediaFileDuration [Valid only when UniRecord=3.].
Single file recording duration, corresponding to the "max recording time per file" in the recording template, unit: minutes. the value must be greater than or equal to 1 and less than or equal to 1440 (24 hours), with a default value of 1440. it only takes effect for "mp4" or "aac" format. the actual single file recording duration is also limited by the file size not exceeding 2G. if it exceeds 2G, the file will be forcibly split.
     * @param integer $StreamType [Valid only when UniRecord=3.].
The audio and video type of the recording corresponds to the "recording format" in the recording template. valid values: 0 (audio and video), 1 (pure audio), 2 (video only). the final recording file content is the intersection of the specified type and the relayed content.
     * @param string $UserDefineRecordPrefix Recording file name prefix, no more than 64 characters. this parameter is valid only when store is vod.
Limit length to 64 bytes, only allow a combination of uppercase and lowercase letters (a-zA-Z), digits (0-9), underscores (_), and hyphens (-).
     * @param McuStorageParams $McuStorageParams [Valid only when UniRecord=3.].
Recording files storage parameters, corresponding console "storage location" and related parameters. currently supports VOD and COS storage methods. only one can be filled.
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
