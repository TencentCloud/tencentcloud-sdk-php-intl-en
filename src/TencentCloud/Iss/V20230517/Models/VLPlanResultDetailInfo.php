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
 * Visual understanding plan result details
 *
 * @method string getVLPlanResultId() Obtain <p>Analysis result ID</p>
 * @method void setVLPlanResultId(string $VLPlanResultId) Set <p>Analysis result ID</p>
 * @method string getMediaType() Obtain <p>Media type. The current fixed value is image</p>
 * @method void setMediaType(string $MediaType) Set <p>Media type. The current fixed value is image</p>
 * @method string getVLPlanId() Obtain <p>ID of the associated analysis plan</p>
 * @method void setVLPlanId(string $VLPlanId) Set <p>ID of the associated analysis plan</p>
 * @method string getVLPlanName() Obtain <p>Plan name</p>
 * @method void setVLPlanName(string $VLPlanName) Set <p>Plan name</p>
 * @method string getChannelId() Obtain <p>Channel ID</p>
 * @method void setChannelId(string $ChannelId) Set <p>Channel ID</p>
 * @method string getChannelName() Obtain <p>Channel name</p>
 * @method void setChannelName(string $ChannelName) Set <p>Channel name</p>
 * @method string getDeviceId() Obtain <p>Device ID</p>
 * @method void setDeviceId(string $DeviceId) Set <p>Device ID</p>
 * @method string getDeviceName() Obtain <p>Device name</p>
 * @method void setDeviceName(string $DeviceName) Set <p>Device name</p>
 * @method string getOrganizationId() Obtain <p>Affiliated organization ID</p>
 * @method void setOrganizationId(string $OrganizationId) Set <p>Affiliated organization ID</p>
 * @method string getOrganizationName() Obtain <p>Affiliated organization name</p>
 * @method void setOrganizationName(string $OrganizationName) Set <p>Affiliated organization name</p>
 * @method integer getVLResultTimestamp() Obtain <p>Analysis timestamp (seconds)</p>
 * @method void setVLResultTimestamp(integer $VLResultTimestamp) Set <p>Analysis timestamp (seconds)</p>
 * @method integer getSnapshotTimestamp() Obtain <p>Image mode screenshot timestamp (seconds)</p>
 * @method void setSnapshotTimestamp(integer $SnapshotTimestamp) Set <p>Image mode screenshot timestamp (seconds)</p>
 * @method integer getVideoStartTimestamp() Obtain <p>Video clip start timestamp (seconds)</p>
 * @method void setVideoStartTimestamp(integer $VideoStartTimestamp) Set <p>Video clip start timestamp (seconds)</p>
 * @method integer getVideoEndTimestamp() Obtain <p>Video segment end timestamp (seconds)</p>
 * @method void setVideoEndTimestamp(integer $VideoEndTimestamp) Set <p>Video segment end timestamp (seconds)</p>
 * @method integer getBilledFrameCount() Obtain <p>Billing method for the number of frames in video mode</p>
 * @method void setBilledFrameCount(integer $BilledFrameCount) Set <p>Billing method for the number of frames in video mode</p>
 * @method string getContent() Obtain <p>AI analysis result content (JSON string)</p>
 * @method void setContent(string $Content) Set <p>AI analysis result content (JSON string)</p>
 * @method string getImageUrl() Obtain <p>Temporary screenshot download URL (valid for 300 seconds)</p>
 * @method void setImageUrl(string $ImageUrl) Set <p>Temporary screenshot download URL (valid for 300 seconds)</p>
 * @method integer getImageUrlExpire() Obtain <p>Screenshot URL validity period (seconds)</p>
 * @method void setImageUrlExpire(integer $ImageUrlExpire) Set <p>Screenshot URL validity period (seconds)</p>
 * @method string getCreatedAt() Obtain <p>Creation time, format: 2006-01-02 15:04:05</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Creation time, format: 2006-01-02 15:04:05</p>
 * @method string getUpdatedAt() Obtain <p>Update time, format 2006-01-02 15:04:05</p>
 * @method void setUpdatedAt(string $UpdatedAt) Set <p>Update time, format 2006-01-02 15:04:05</p>
 */
class VLPlanResultDetailInfo extends AbstractModel
{
    /**
     * @var string <p>Analysis result ID</p>
     */
    public $VLPlanResultId;

    /**
     * @var string <p>Media type. The current fixed value is image</p>
     */
    public $MediaType;

    /**
     * @var string <p>ID of the associated analysis plan</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>Plan name</p>
     */
    public $VLPlanName;

    /**
     * @var string <p>Channel ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>Channel name</p>
     */
    public $ChannelName;

    /**
     * @var string <p>Device ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>Device name</p>
     */
    public $DeviceName;

    /**
     * @var string <p>Affiliated organization ID</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>Affiliated organization name</p>
     */
    public $OrganizationName;

    /**
     * @var integer <p>Analysis timestamp (seconds)</p>
     */
    public $VLResultTimestamp;

    /**
     * @var integer <p>Image mode screenshot timestamp (seconds)</p>
     */
    public $SnapshotTimestamp;

    /**
     * @var integer <p>Video clip start timestamp (seconds)</p>
     */
    public $VideoStartTimestamp;

    /**
     * @var integer <p>Video segment end timestamp (seconds)</p>
     */
    public $VideoEndTimestamp;

    /**
     * @var integer <p>Billing method for the number of frames in video mode</p>
     */
    public $BilledFrameCount;

    /**
     * @var string <p>AI analysis result content (JSON string)</p>
     */
    public $Content;

    /**
     * @var string <p>Temporary screenshot download URL (valid for 300 seconds)</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>Screenshot URL validity period (seconds)</p>
     */
    public $ImageUrlExpire;

    /**
     * @var string <p>Creation time, format: 2006-01-02 15:04:05</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Update time, format 2006-01-02 15:04:05</p>
     */
    public $UpdatedAt;

    /**
     * @param string $VLPlanResultId <p>Analysis result ID</p>
     * @param string $MediaType <p>Media type. The current fixed value is image</p>
     * @param string $VLPlanId <p>ID of the associated analysis plan</p>
     * @param string $VLPlanName <p>Plan name</p>
     * @param string $ChannelId <p>Channel ID</p>
     * @param string $ChannelName <p>Channel name</p>
     * @param string $DeviceId <p>Device ID</p>
     * @param string $DeviceName <p>Device name</p>
     * @param string $OrganizationId <p>Affiliated organization ID</p>
     * @param string $OrganizationName <p>Affiliated organization name</p>
     * @param integer $VLResultTimestamp <p>Analysis timestamp (seconds)</p>
     * @param integer $SnapshotTimestamp <p>Image mode screenshot timestamp (seconds)</p>
     * @param integer $VideoStartTimestamp <p>Video clip start timestamp (seconds)</p>
     * @param integer $VideoEndTimestamp <p>Video segment end timestamp (seconds)</p>
     * @param integer $BilledFrameCount <p>Billing method for the number of frames in video mode</p>
     * @param string $Content <p>AI analysis result content (JSON string)</p>
     * @param string $ImageUrl <p>Temporary screenshot download URL (valid for 300 seconds)</p>
     * @param integer $ImageUrlExpire <p>Screenshot URL validity period (seconds)</p>
     * @param string $CreatedAt <p>Creation time, format: 2006-01-02 15:04:05</p>
     * @param string $UpdatedAt <p>Update time, format 2006-01-02 15:04:05</p>
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
        if (array_key_exists("VLPlanResultId",$param) and $param["VLPlanResultId"] !== null) {
            $this->VLPlanResultId = $param["VLPlanResultId"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("VLPlanName",$param) and $param["VLPlanName"] !== null) {
            $this->VLPlanName = $param["VLPlanName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("VLResultTimestamp",$param) and $param["VLResultTimestamp"] !== null) {
            $this->VLResultTimestamp = $param["VLResultTimestamp"];
        }

        if (array_key_exists("SnapshotTimestamp",$param) and $param["SnapshotTimestamp"] !== null) {
            $this->SnapshotTimestamp = $param["SnapshotTimestamp"];
        }

        if (array_key_exists("VideoStartTimestamp",$param) and $param["VideoStartTimestamp"] !== null) {
            $this->VideoStartTimestamp = $param["VideoStartTimestamp"];
        }

        if (array_key_exists("VideoEndTimestamp",$param) and $param["VideoEndTimestamp"] !== null) {
            $this->VideoEndTimestamp = $param["VideoEndTimestamp"];
        }

        if (array_key_exists("BilledFrameCount",$param) and $param["BilledFrameCount"] !== null) {
            $this->BilledFrameCount = $param["BilledFrameCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageUrlExpire",$param) and $param["ImageUrlExpire"] !== null) {
            $this->ImageUrlExpire = $param["ImageUrlExpire"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
