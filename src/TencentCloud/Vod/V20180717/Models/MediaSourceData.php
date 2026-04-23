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
 * Source file information.
 *
 * @method string getSourceType() Obtain Media file source category:
<li>Record: comes from recording, such as live recording, live streaming time shift recording.</li>
<li>Upload: Comes from upload, such as pull upload, server-side upload, and client UGC upload.</li>
<li>VideoProcessing: comes from video processing, such as video splicing, video editing.</li>
<li>TrtcRecord: Comes from TRTC simultaneous recording.</li>
<li>WebPageRecord: comes from panoramic recording.</li>
<li>Unknown: Unknown source.</li>
 * @method void setSourceType(string $SourceType) Set Media file source category:
<li>Record: comes from recording, such as live recording, live streaming time shift recording.</li>
<li>Upload: Comes from upload, such as pull upload, server-side upload, and client UGC upload.</li>
<li>VideoProcessing: comes from video processing, such as video splicing, video editing.</li>
<li>TrtcRecord: Comes from TRTC simultaneous recording.</li>
<li>WebPageRecord: comes from panoramic recording.</li>
<li>Unknown: Unknown source.</li>
 * @method string getSourceContext() Obtain Field passed through when the user creates a file.
 * @method void setSourceContext(string $SourceContext) Set Field passed through when the user creates a file.
 * @method LiveRecordInfo getLiveRecordInfo() Obtain Live recording information is valid when file source is Record.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLiveRecordInfo(LiveRecordInfo $LiveRecordInfo) Set Live recording information is valid when file source is Record.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TrtcRecordInfo getTrtcRecordInfo() Obtain TRTC Companion Recording Information. Valid at that time when the file source is TrtcRecord.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrtcRecordInfo(TrtcRecordInfo $TrtcRecordInfo) Set TRTC Companion Recording Information. Valid at that time when the file source is TrtcRecord.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WebPageRecordInfo getWebPageRecordInfo() Obtain Panoramic recording information. Valid when the file source is WebPageRecord.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWebPageRecordInfo(WebPageRecordInfo $WebPageRecordInfo) Set Panoramic recording information. Valid when the file source is WebPageRecord.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MediaSourceData extends AbstractModel
{
    /**
     * @var string Media file source category:
<li>Record: comes from recording, such as live recording, live streaming time shift recording.</li>
<li>Upload: Comes from upload, such as pull upload, server-side upload, and client UGC upload.</li>
<li>VideoProcessing: comes from video processing, such as video splicing, video editing.</li>
<li>TrtcRecord: Comes from TRTC simultaneous recording.</li>
<li>WebPageRecord: comes from panoramic recording.</li>
<li>Unknown: Unknown source.</li>
     */
    public $SourceType;

    /**
     * @var string Field passed through when the user creates a file.
     */
    public $SourceContext;

    /**
     * @var LiveRecordInfo Live recording information is valid when file source is Record.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LiveRecordInfo;

    /**
     * @var TrtcRecordInfo TRTC Companion Recording Information. Valid at that time when the file source is TrtcRecord.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrtcRecordInfo;

    /**
     * @var WebPageRecordInfo Panoramic recording information. Valid when the file source is WebPageRecord.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WebPageRecordInfo;

    /**
     * @param string $SourceType Media file source category:
<li>Record: comes from recording, such as live recording, live streaming time shift recording.</li>
<li>Upload: Comes from upload, such as pull upload, server-side upload, and client UGC upload.</li>
<li>VideoProcessing: comes from video processing, such as video splicing, video editing.</li>
<li>TrtcRecord: Comes from TRTC simultaneous recording.</li>
<li>WebPageRecord: comes from panoramic recording.</li>
<li>Unknown: Unknown source.</li>
     * @param string $SourceContext Field passed through when the user creates a file.
     * @param LiveRecordInfo $LiveRecordInfo Live recording information is valid when file source is Record.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TrtcRecordInfo $TrtcRecordInfo TRTC Companion Recording Information. Valid at that time when the file source is TrtcRecord.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WebPageRecordInfo $WebPageRecordInfo Panoramic recording information. Valid when the file source is WebPageRecord.
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("LiveRecordInfo",$param) and $param["LiveRecordInfo"] !== null) {
            $this->LiveRecordInfo = new LiveRecordInfo();
            $this->LiveRecordInfo->deserialize($param["LiveRecordInfo"]);
        }

        if (array_key_exists("TrtcRecordInfo",$param) and $param["TrtcRecordInfo"] !== null) {
            $this->TrtcRecordInfo = new TrtcRecordInfo();
            $this->TrtcRecordInfo->deserialize($param["TrtcRecordInfo"]);
        }

        if (array_key_exists("WebPageRecordInfo",$param) and $param["WebPageRecordInfo"] !== null) {
            $this->WebPageRecordInfo = new WebPageRecordInfo();
            $this->WebPageRecordInfo->deserialize($param["WebPageRecordInfo"]);
        }
    }
}
