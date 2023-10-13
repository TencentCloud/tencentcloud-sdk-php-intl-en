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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a live recording file.
 *
 * @method string getUrl() Obtain The URL of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set The URL of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain The size of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set The size of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getDuration() Obtain The duration of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set The duration of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain The recording start time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set The recording start time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain The recording end time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set The recording end time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class LiveRecordFile extends AbstractModel
{
    /**
     * @var string The URL of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var integer The size of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var integer The duration of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var string The recording start time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string The recording end time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @param string $Url The URL of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Size The size of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Duration The duration of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $StartTime The recording start time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $EndTime The recording end time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return·null, indicating that no valid values can be obtained.
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
