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
 * Local recording download task
 *
 * @method string getDownloadTaskId() Obtain Download task ID
 * @method void setDownloadTaskId(string $DownloadTaskId) Set Download task ID
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 * @method string getChannelCode() Obtain Channel encoding
 * @method void setChannelCode(string $ChannelCode) Set Channel encoding
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getDeviceCode() Obtain Device code
 * @method void setDeviceCode(string $DeviceCode) Set Device code
 * @method integer getStatus() Obtain Task status (0: pending; 1: executing; 2: task complete;
3: Task failure)
 * @method void setStatus(integer $Status) Set Task status (0: pending; 1: executing; 2: task complete;
3: Task failure)
 * @method string getVideoTimeSection() Obtain Download the recording time period
 * @method void setVideoTimeSection(string $VideoTimeSection) Set Download the recording time period
 * @method integer getScale() Obtain Playback speed
 * @method void setScale(integer $Scale) Set Playback speed
 * @method integer getDownloadTime() Obtain Download duration.
 * @method void setDownloadTime(integer $DownloadTime) Set Download duration.
 * @method integer getVideoSize() Obtain Video recording size
 * @method void setVideoSize(integer $VideoSize) Set Video recording size
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method string getFileDownloadUrl() Obtain File download address
 * @method void setFileDownloadUrl(string $FileDownloadUrl) Set File download address
 * @method string getFailedReason() Obtain Reason for failure
 * @method void setFailedReason(string $FailedReason) Set Reason for failure
 * @method integer getExpire() Obtain Lifecycle rule, number of days in hot storage
 * @method void setExpire(integer $Expire) Set Lifecycle rule, number of days in hot storage
 * @method string getPreviewUrl() Obtain mp4 preview address
 * @method void setPreviewUrl(string $PreviewUrl) Set mp4 preview address
 */
class VideoDownloadTask extends AbstractModel
{
    /**
     * @var string Download task ID
     */
    public $DownloadTaskId;

    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @var string Channel encoding
     */
    public $ChannelCode;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Device code
     */
    public $DeviceCode;

    /**
     * @var integer Task status (0: pending; 1: executing; 2: task complete;
3: Task failure)
     */
    public $Status;

    /**
     * @var string Download the recording time period
     */
    public $VideoTimeSection;

    /**
     * @var integer Playback speed
     */
    public $Scale;

    /**
     * @var integer Download duration.
     */
    public $DownloadTime;

    /**
     * @var integer Video recording size
     */
    public $VideoSize;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var string File download address
     */
    public $FileDownloadUrl;

    /**
     * @var string Reason for failure
     */
    public $FailedReason;

    /**
     * @var integer Lifecycle rule, number of days in hot storage
     */
    public $Expire;

    /**
     * @var string mp4 preview address
     */
    public $PreviewUrl;

    /**
     * @param string $DownloadTaskId Download task ID
     * @param string $ChannelId Channel ID
     * @param string $ChannelName Channel name
     * @param string $ChannelCode Channel encoding
     * @param string $DeviceName Device name.
     * @param string $DeviceCode Device code
     * @param integer $Status Task status (0: pending; 1: executing; 2: task complete;
3: Task failure)
     * @param string $VideoTimeSection Download the recording time period
     * @param integer $Scale Playback speed
     * @param integer $DownloadTime Download duration.
     * @param integer $VideoSize Video recording size
     * @param string $StartTime Task start time
     * @param string $EndTime Task end time
     * @param string $FileDownloadUrl File download address
     * @param string $FailedReason Reason for failure
     * @param integer $Expire Lifecycle rule, number of days in hot storage
     * @param string $PreviewUrl mp4 preview address
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
        if (array_key_exists("DownloadTaskId",$param) and $param["DownloadTaskId"] !== null) {
            $this->DownloadTaskId = $param["DownloadTaskId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VideoTimeSection",$param) and $param["VideoTimeSection"] !== null) {
            $this->VideoTimeSection = $param["VideoTimeSection"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("DownloadTime",$param) and $param["DownloadTime"] !== null) {
            $this->DownloadTime = $param["DownloadTime"];
        }

        if (array_key_exists("VideoSize",$param) and $param["VideoSize"] !== null) {
            $this->VideoSize = $param["VideoSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileDownloadUrl",$param) and $param["FileDownloadUrl"] !== null) {
            $this->FileDownloadUrl = $param["FileDownloadUrl"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
