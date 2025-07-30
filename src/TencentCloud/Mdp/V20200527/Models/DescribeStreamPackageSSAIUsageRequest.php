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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageSSAIUsage request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getChannelIds() Obtain Specifies the channel id you want to query.
 * @method void setChannelIds(array $ChannelIds) Set Specifies the channel id you want to query.
 * @method array getTypes() Obtain Specifies the ad type you want to query. valid values: Preroll/Midroll. if empty, query all types by default.
 * @method void setTypes(array $Types) Set Specifies the ad type you want to query. valid values: Preroll/Midroll. if empty, query all types by default.
 */
class DescribeStreamPackageSSAIUsageRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var array Specifies the channel id you want to query.
     */
    public $ChannelIds;

    /**
     * @var array Specifies the ad type you want to query. valid values: Preroll/Midroll. if empty, query all types by default.
     */
    public $Types;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $ChannelIds Specifies the channel id you want to query.
     * @param array $Types Specifies the ad type you want to query. valid values: Preroll/Midroll. if empty, query all types by default.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
