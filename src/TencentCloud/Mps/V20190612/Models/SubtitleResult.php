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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle task result.
 *
 * @method string getLanguage() Obtain Language of the subtitle file.
 * @method void setLanguage(string $Language) Set Language of the subtitle file.
 * @method string getStatus() Obtain Whether the processing is successful.
 * @method void setStatus(string $Status) Set Whether the processing is successful.
 * @method string getPath() Obtain Subtitle file URL.
 * @method void setPath(string $Path) Set Subtitle file URL.
 */
class SubtitleResult extends AbstractModel
{
    /**
     * @var string Language of the subtitle file.
     */
    public $Language;

    /**
     * @var string Whether the processing is successful.
     */
    public $Status;

    /**
     * @var string Subtitle file URL.
     */
    public $Path;

    /**
     * @param string $Language Language of the subtitle file.
     * @param string $Status Whether the processing is successful.
     * @param string $Path Subtitle file URL.
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
