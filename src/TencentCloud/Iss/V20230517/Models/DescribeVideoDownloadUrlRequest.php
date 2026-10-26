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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoDownloadUrl request structure.
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getBeginTime() Obtain Download start time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
 * @method void setBeginTime(string $BeginTime) Set Download start time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
 * @method string getEndTime() Obtain Download end time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
 * @method void setEndTime(string $EndTime) Set Download end time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
 * @method string getFileType() Obtain File format. "mp4": MP4 format. "ts": TS file format.
 * @method void setFileType(string $FileType) Set File format. "mp4": MP4 format. "ts": TS file format.
 * @method boolean getIsRespActualTime() Obtain data carries the actual download video recording start time and end time required or not
 * @method void setIsRespActualTime(boolean $IsRespActualTime) Set data carries the actual download video recording start time and end time required or not
 * @method boolean getIsInternal() Obtain Whether to return the private network download URL. Default false: the public network download URL is returned. If true, the private network download URL is returned.
 * @method void setIsInternal(boolean $IsInternal) Set Whether to return the private network download URL. Default false: the public network download URL is returned. If true, the private network download URL is returned.
 * @method integer getExpires() Obtain Set the valid period of the URL. The minimum value is 1 second and the maximum value is 86400 seconds. If not set, the default is 600 seconds.
 * @method void setExpires(integer $Expires) Set Set the valid period of the URL. The minimum value is 1 second and the maximum value is 86400 seconds. If not set, the default is 600 seconds.
 * @method boolean getIsSupportG711() Obtain Whether the downloaded MP4 file supports G711 audio encoding. 
Note: If the audio encoding in cloud recording is AAC, then the downloaded MP4 supports AAC encoding by default.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to true, the downloaded MP4 supports G711 audio encoding.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to false, the downloaded MP4 does not support G711 audio encoding.
This parameter is valid only when FileType is mp4. If left unset, it defaults to false.
 * @method void setIsSupportG711(boolean $IsSupportG711) Set Whether the downloaded MP4 file supports G711 audio encoding. 
Note: If the audio encoding in cloud recording is AAC, then the downloaded MP4 supports AAC encoding by default.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to true, the downloaded MP4 supports G711 audio encoding.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to false, the downloaded MP4 does not support G711 audio encoding.
This parameter is valid only when FileType is mp4. If left unset, it defaults to false.
 */
class DescribeVideoDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Download start time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
     */
    public $BeginTime;

    /**
     * @var string Download end time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
     */
    public $EndTime;

    /**
     * @var string File format. "mp4": MP4 format. "ts": TS file format.
     */
    public $FileType;

    /**
     * @var boolean data carries the actual download video recording start time and end time required or not
     */
    public $IsRespActualTime;

    /**
     * @var boolean Whether to return the private network download URL. Default false: the public network download URL is returned. If true, the private network download URL is returned.
     */
    public $IsInternal;

    /**
     * @var integer Set the valid period of the URL. The minimum value is 1 second and the maximum value is 86400 seconds. If not set, the default is 600 seconds.
     */
    public $Expires;

    /**
     * @var boolean Whether the downloaded MP4 file supports G711 audio encoding. 
Note: If the audio encoding in cloud recording is AAC, then the downloaded MP4 supports AAC encoding by default.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to true, the downloaded MP4 supports G711 audio encoding.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to false, the downloaded MP4 does not support G711 audio encoding.
This parameter is valid only when FileType is mp4. If left unset, it defaults to false.
     */
    public $IsSupportG711;

    /**
     * @param string $ChannelId Channel ID
     * @param string $BeginTime Download start time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
     * @param string $EndTime Download end time in UTC seconds. The longest period between the start and end times is 60 minutes and cannot span across days.
Note: The actual downloaded file duration may be longer than this period. You can obtain the actual download start time and end time by specifying the IsRespActualTime parameter. This is because downloads are aligned by TS segments to ensure data integrity and include the entire specified period.
     * @param string $FileType File format. "mp4": MP4 format. "ts": TS file format.
     * @param boolean $IsRespActualTime data carries the actual download video recording start time and end time required or not
     * @param boolean $IsInternal Whether to return the private network download URL. Default false: the public network download URL is returned. If true, the private network download URL is returned.
     * @param integer $Expires Set the valid period of the URL. The minimum value is 1 second and the maximum value is 86400 seconds. If not set, the default is 600 seconds.
     * @param boolean $IsSupportG711 Whether the downloaded MP4 file supports G711 audio encoding. 
Note: If the audio encoding in cloud recording is AAC, then the downloaded MP4 supports AAC encoding by default.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to true, the downloaded MP4 supports G711 audio encoding.
If the audio encoding in the cloud recording is G711 and IsSupportG711 is set to false, the downloaded MP4 does not support G711 audio encoding.
This parameter is valid only when FileType is mp4. If left unset, it defaults to false.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsRespActualTime",$param) and $param["IsRespActualTime"] !== null) {
            $this->IsRespActualTime = $param["IsRespActualTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("Expires",$param) and $param["Expires"] !== null) {
            $this->Expires = $param["Expires"];
        }

        if (array_key_exists("IsSupportG711",$param) and $param["IsSupportG711"] !== null) {
            $this->IsSupportG711 = $param["IsSupportG711"];
        }
    }
}
