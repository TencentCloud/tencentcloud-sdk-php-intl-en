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
 * @method string getFileId() Obtain Consolidate the generated Media ID.
 * @method void setFileId(string $FileId) Set Consolidate the generated Media ID.
 * @method string getPersistenceSource() Obtain The source of clipping solidification has the following three types.
<li>SimpleHlsClip: Comes from simple HLS edit;</li>
<li>FastEditMedia: Comes from quick media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
 * @method void setPersistenceSource(string $PersistenceSource) Set The source of clipping solidification has the following three types.
<li>SimpleHlsClip: Comes from simple HLS edit;</li>
<li>FastEditMedia: Comes from quick media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
 */
class PersistenceCompleteTask extends AbstractModel
{
    /**
     * @var string Consolidate the generated Media ID.
     */
    public $FileId;

    /**
     * @var string The source of clipping solidification has the following three types.
<li>SimpleHlsClip: Comes from simple HLS edit;</li>
<li>FastEditMedia: Comes from quick media editing;</li>
<li>LiveRealTimeClip: comes from live stream clipping.</li>
     */
    public $PersistenceSource;

    /**
     * @param string $FileId Consolidate the generated Media ID.
     * @param string $PersistenceSource The source of clipping solidification has the following three types.
<li>SimpleHlsClip: Comes from simple HLS edit;</li>
<li>FastEditMedia: Comes from quick media editing;</li>
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
