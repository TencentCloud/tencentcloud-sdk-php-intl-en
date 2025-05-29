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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConcurrencyUsage request structure.
 *
 * @method string getModelName() Obtain Model identification.
 * @method void setModelName(string $ModelName) Set Model identification.
 * @method string getStartTime() Obtain Start timestamp, in seconds.
 * @method void setStartTime(string $StartTime) Set Start timestamp, in seconds.
 * @method string getEndTime() Obtain End timestamp, in seconds.
 * @method void setEndTime(string $EndTime) Set End timestamp, in seconds.
 * @method array getAppBizIds() Obtain Application ID list.
 * @method void setAppBizIds(array $AppBizIds) Set Application ID list.
 */
class DescribeConcurrencyUsageRequest extends AbstractModel
{
    /**
     * @var string Model identification.
     */
    public $ModelName;

    /**
     * @var string Start timestamp, in seconds.
     */
    public $StartTime;

    /**
     * @var string End timestamp, in seconds.
     */
    public $EndTime;

    /**
     * @var array Application ID list.
     */
    public $AppBizIds;

    /**
     * @param string $ModelName Model identification.
     * @param string $StartTime Start timestamp, in seconds.
     * @param string $EndTime End timestamp, in seconds.
     * @param array $AppBizIds Application ID list.
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }
    }
}
