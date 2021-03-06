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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LiveRealTimeClip response structure.
 *
 * @method string getUrl() Obtain Playback URL of clipped video.
 * @method void setUrl(string $Url) Set Playback URL of clipped video.
 * @method string getFileId() Obtain Unique media file ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set Unique media file ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVodTaskId() Obtain Task flow ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVodTaskId(string $VodTaskId) Set Task flow ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaMetaData getMetaData() Obtain Metadata of clipped video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of clipped video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class LiveRealTimeClipResponse extends AbstractModel
{
    /**
     * @var string Playback URL of clipped video.
     */
    public $Url;

    /**
     * @var string Unique media file ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string Task flow ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VodTaskId;

    /**
     * @var MediaMetaData Metadata of clipped video.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Url Playback URL of clipped video.
     * @param string $FileId Unique media file ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VodTaskId Task flow ID of video generated by persistent clipping.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaMetaData $MetaData Metadata of clipped video.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("VodTaskId",$param) and $param["VodTaskId"] !== null) {
            $this->VodTaskId = $param["VodTaskId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
