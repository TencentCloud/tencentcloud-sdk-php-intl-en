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
 * Clipping solidification task information.
 *
 * @method string getFileId() Obtain Fixed generated media ID.
 * @method void setFileId(string $FileId) Set Fixed generated media ID.
 * @method string getPersistenceSource() Obtain Sources of clipping solidification are as follows.
<li>SimpleHlsClip: comes from simple HLS edit;</li>
<li>FastEditMedia: comes from rapid media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
 * @method void setPersistenceSource(string $PersistenceSource) Set Sources of clipping solidification are as follows.
<li>SimpleHlsClip: comes from simple HLS edit;</li>
<li>FastEditMedia: comes from rapid media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
 */
class PersistenceCompleteTask extends AbstractModel
{
    /**
     * @var string Fixed generated media ID.
     */
    public $FileId;

    /**
     * @var string Sources of clipping solidification are as follows.
<li>SimpleHlsClip: comes from simple HLS edit;</li>
<li>FastEditMedia: comes from rapid media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
     */
    public $PersistenceSource;

    /**
     * @param string $FileId Fixed generated media ID.
     * @param string $PersistenceSource Sources of clipping solidification are as follows.
<li>SimpleHlsClip: comes from simple HLS edit;</li>
<li>FastEditMedia: comes from rapid media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PersistenceSource",$param) and $param["PersistenceSource"] !== null) {
            $this->PersistenceSource = $param["PersistenceSource"];
        }
    }
}
