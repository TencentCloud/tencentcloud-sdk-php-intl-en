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
 * Configuration information of Voice Chat
 *
 * @method string getStatus() Obtain Voice Chat status. Valid values: `open`, `close`.
 * @method void setStatus(string $Status) Set Voice Chat status. Valid values: `open`, `close`.
 * @method string getQuality() Obtain Voice Chat sound quality type. Valid values: `high` (HD), `ordinary` (SD).
 * @method void setQuality(string $Quality) Set Voice Chat sound quality type. Valid values: `high` (HD), `ordinary` (SD).
 */
class RealtimeSpeechConf extends AbstractModel
{
    /**
     * @var string Voice Chat status. Valid values: `open`, `close`.
     */
    public $Status;

    /**
     * @var string Voice Chat sound quality type. Valid values: `high` (HD), `ordinary` (SD).
     */
    public $Quality;

    /**
     * @param string $Status Voice Chat status. Valid values: `open`, `close`.
     * @param string $Quality Voice Chat sound quality type. Valid values: `high` (HD), `ordinary` (SD).
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

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }
    }
}
