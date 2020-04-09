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
 * SimpleHlsClip response structure.
 *
 * @method string getUrl() Obtain Address of clipped video.
 * @method void setUrl(string $Url) Set Address of clipped video.
 * @method MediaMetaData getMetaData() Obtain Metadata of clipped video. Currently, `Size`, `Rotate`, `VideoDuration`, and `AudioDuration` fields use default value with no actual data.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of clipped video. Currently, `Size`, `Rotate`, `VideoDuration`, and `AudioDuration` fields use default value with no actual data.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SimpleHlsClipResponse extends AbstractModel
{
    /**
     * @var string Address of clipped video.
     */
    public $Url;

    /**
     * @var MediaMetaData Metadata of clipped video. Currently, `Size`, `Rotate`, `VideoDuration`, and `AudioDuration` fields use default value with no actual data.
     */
    public $MetaData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Url Address of clipped video.
     * @param MediaMetaData $MetaData Metadata of clipped video. Currently, `Size`, `Rotate`, `VideoDuration`, and `AudioDuration` fields use default value with no actual data.
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
