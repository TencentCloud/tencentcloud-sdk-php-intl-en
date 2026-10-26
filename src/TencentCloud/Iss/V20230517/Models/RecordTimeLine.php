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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud Recording time segment
 *
 * @method integer getBegin() Obtain Segment start time in UTC seconds, for example: 1662114146
 * @method void setBegin(integer $Begin) Set Segment start time in UTC seconds, for example: 1662114146
 * @method integer getEnd() Obtain Segment end time in UTC seconds, for example: 1662114146
 * @method void setEnd(integer $End) Set Segment end time in UTC seconds, for example: 1662114146
 * @method string getHlsUrl() Obtain Playback url of the corresponding recording clip
 * @method void setHlsUrl(string $HlsUrl) Set Playback url of the corresponding recording clip
 */
class RecordTimeLine extends AbstractModel
{
    /**
     * @var integer Segment start time in UTC seconds, for example: 1662114146
     */
    public $Begin;

    /**
     * @var integer Segment end time in UTC seconds, for example: 1662114146
     */
    public $End;

    /**
     * @var string Playback url of the corresponding recording clip
     */
    public $HlsUrl;

    /**
     * @param integer $Begin Segment start time in UTC seconds, for example: 1662114146
     * @param integer $End Segment end time in UTC seconds, for example: 1662114146
     * @param string $HlsUrl Playback url of the corresponding recording clip
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
        if (array_key_exists("Begin",$param) and $param["Begin"] !== null) {
            $this->Begin = $param["Begin"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("HlsUrl",$param) and $param["HlsUrl"] !== null) {
            $this->HlsUrl = $param["HlsUrl"];
        }
    }
}
