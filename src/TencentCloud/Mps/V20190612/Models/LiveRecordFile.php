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
 * Live recording output file information
 *
 * @method string getUrl() Obtain Live recording file URL
 * @method void setUrl(string $Url) Set Live recording file URL
 * @method integer getSize() Obtain Live recording file size
 * @method void setSize(integer $Size) Set Live recording file size
 * @method integer getDuration() Obtain Recording file duration of live stream
 * @method void setDuration(integer $Duration) Set Recording file duration of live stream
 * @method string getStartTime() Obtain Start time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class LiveRecordFile extends AbstractModel
{
    /**
     * @var string Live recording file URL
     */
    public $Url;

    /**
     * @var integer Live recording file size
     */
    public $Size;

    /**
     * @var integer Recording file duration of live stream
     */
    public $Duration;

    /**
     * @var string Start time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @param string $Url Live recording file URL
     * @param integer $Size Live recording file size
     * @param integer $Duration Recording file duration of live stream
     * @param string $StartTime Start time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $EndTime End time of the live streaming recording file in [ISO date format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
