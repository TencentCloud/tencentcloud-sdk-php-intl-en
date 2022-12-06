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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of Voice Message Service
 *
 * @method string getStatus() Obtain Voice Message Service status. Valid values: `open`, `close`.
 * @method void setStatus(string $Status) Set Voice Message Service status. Valid values: `open`, `close`.
 * @method string getLanguage() Obtain Language supported for Voice Message Service. Valid values: `all` (all languages), `cnen` (Chinese and English). Default value: `cnen`.
 * @method void setLanguage(string $Language) Set Language supported for Voice Message Service. Valid values: `all` (all languages), `cnen` (Chinese and English). Default value: `cnen`.
 */
class VoiceMessageConf extends AbstractModel
{
    /**
     * @var string Voice Message Service status. Valid values: `open`, `close`.
     */
    public $Status;

    /**
     * @var string Language supported for Voice Message Service. Valid values: `all` (all languages), `cnen` (Chinese and English). Default value: `cnen`.
     */
    public $Language;

    /**
     * @param string $Status Voice Message Service status. Valid values: `open`, `close`.
     * @param string $Language Language supported for Voice Message Service. Valid values: `all` (all languages), `cnen` (Chinese and English). Default value: `cnen`.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}
