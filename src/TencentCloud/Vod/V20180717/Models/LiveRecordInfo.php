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
 * 
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getPath() Obtain 
 * @method void setPath(string $Path) Set 
 * @method string getStreamId() Obtain 
 * @method void setStreamId(string $StreamId) Set 
 * @method string getRecordStartTime() Obtain 
 * @method void setRecordStartTime(string $RecordStartTime) Set 
 * @method string getRecordEndTime() Obtain 
 * @method void setRecordEndTime(string $RecordEndTime) Set 
 */
class LiveRecordInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $Path;

    /**
     * @var string 
     */
    public $StreamId;

    /**
     * @var string 
     */
    public $RecordStartTime;

    /**
     * @var string 
     */
    public $RecordEndTime;

    /**
     * @param string $Domain 
     * @param string $Path 
     * @param string $StreamId 
     * @param string $RecordStartTime 
     * @param string $RecordEndTime 
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordEndTime",$param) and $param["RecordEndTime"] !== null) {
            $this->RecordEndTime = $param["RecordEndTime"];
        }
    }
}
