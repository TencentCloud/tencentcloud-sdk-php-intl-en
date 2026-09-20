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
 * Output of the video dubbing task.
 *
 * @method string getResultUrl() Obtain <p>Dubbing result Url</p>
 * @method void setResultUrl(string $ResultUrl) Set <p>Dubbing result Url</p>
 * @method string getFileId() Obtain <p>Dubbing result FileId</p>
 * @method void setFileId(string $FileId) Set <p>Dubbing result FileId</p>
 */
class VideoDubbingAsyncOutput extends AbstractModel
{
    /**
     * @var string <p>Dubbing result Url</p>
     */
    public $ResultUrl;

    /**
     * @var string <p>Dubbing result FileId</p>
     */
    public $FileId;

    /**
     * @param string $ResultUrl <p>Dubbing result Url</p>
     * @param string $FileId <p>Dubbing result FileId</p>
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
        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
