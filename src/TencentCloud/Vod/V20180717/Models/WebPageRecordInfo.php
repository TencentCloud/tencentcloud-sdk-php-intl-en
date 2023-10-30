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
 * Panoramic recording information
 *
 * @method string getRecordUrl() Obtain Panoramic recording Url.
 * @method void setRecordUrl(string $RecordUrl) Set Panoramic recording Url.
 * @method string getRecordTaskId() Obtain Panoramic recording task ID.
 * @method void setRecordTaskId(string $RecordTaskId) Set Panoramic recording task ID.
 */
class WebPageRecordInfo extends AbstractModel
{
    /**
     * @var string Panoramic recording Url.
     */
    public $RecordUrl;

    /**
     * @var string Panoramic recording task ID.
     */
    public $RecordTaskId;

    /**
     * @param string $RecordUrl Panoramic recording Url.
     * @param string $RecordTaskId Panoramic recording task ID.
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
        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }
    }
}
