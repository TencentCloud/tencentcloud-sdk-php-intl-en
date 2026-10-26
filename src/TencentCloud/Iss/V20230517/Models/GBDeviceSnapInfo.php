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
 * Snapshot information
 *
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method string getDownloadUrl() Obtain Download link. Empty value means the stored image expires.
 * @method void setDownloadUrl(string $DownloadUrl) Set Download link. Empty value means the stored image expires.
 * @method integer getImageSize() Obtain Image size in Unit B.
 * @method void setImageSize(integer $ImageSize) Set Image size in Unit B.
 * @method string getCreatedTime() Obtain Creation time of the file.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the file.
 * @method string getReceivedTime() Obtain Reception time of the image
 * @method void setReceivedTime(string $ReceivedTime) Set Reception time of the image
 * @method string getPreviewUrl() Obtain Preview link. Empty value means the stored image expires.
 * @method void setPreviewUrl(string $PreviewUrl) Set Preview link. Empty value means the stored image expires.
 * @method string getSessionId() Obtain National standard signaling session ID, corresponding to the request_id returned by the ControlDeviceSnapshot API.
 * @method void setSessionId(string $SessionId) Set National standard signaling session ID, corresponding to the request_id returned by the ControlDeviceSnapshot API.
 */
class GBDeviceSnapInfo extends AbstractModel
{
    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var string Download link. Empty value means the stored image expires.
     */
    public $DownloadUrl;

    /**
     * @var integer Image size in Unit B.
     */
    public $ImageSize;

    /**
     * @var string Creation time of the file.
     */
    public $CreatedTime;

    /**
     * @var string Reception time of the image
     */
    public $ReceivedTime;

    /**
     * @var string Preview link. Empty value means the stored image expires.
     */
    public $PreviewUrl;

    /**
     * @var string National standard signaling session ID, corresponding to the request_id returned by the ControlDeviceSnapshot API.
     */
    public $SessionId;

    /**
     * @param string $FileName File name
     * @param string $DownloadUrl Download link. Empty value means the stored image expires.
     * @param integer $ImageSize Image size in Unit B.
     * @param string $CreatedTime Creation time of the file.
     * @param string $ReceivedTime Reception time of the image
     * @param string $PreviewUrl Preview link. Empty value means the stored image expires.
     * @param string $SessionId National standard signaling session ID, corresponding to the request_id returned by the ControlDeviceSnapshot API.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ReceivedTime",$param) and $param["ReceivedTime"] !== null) {
            $this->ReceivedTime = $param["ReceivedTime"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
