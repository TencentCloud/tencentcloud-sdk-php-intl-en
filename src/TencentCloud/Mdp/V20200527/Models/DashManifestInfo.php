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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The manifest info used when Type is DASH.
 *
 * @method integer getWindows() Obtain The total duration of each manifest in seconds. [30, 3600], type: integer, default value 60.
 * @method void setWindows(integer $Windows) Set The total duration of each manifest in seconds. [30, 3600], type: integer, default value 60.
 * @method integer getMinBufferTime() Obtain The minimum cache time (in seconds) that the player keeps in the buffer. [2, 60], type: integer, default value 30.
 * @method void setMinBufferTime(integer $MinBufferTime) Set The minimum cache time (in seconds) that the player keeps in the buffer. [2, 60], type: integer, default value 30.
 * @method integer getMinUpdatePeriod() Obtain The minimum time (in seconds) that the player should wait before requesting an update to the manifest. [2, 60], type: integer, default value 2.
 * @method void setMinUpdatePeriod(integer $MinUpdatePeriod) Set The minimum time (in seconds) that the player should wait before requesting an update to the manifest. [2, 60], type: integer, default value 2.
 * @method integer getSuggestedPresentationDelay() Obtain The time from the latest live broadcast time point when the player starts broadcasting is a rollback amount (in seconds). [2, 60], type: integer, default value 10.
 * @method void setSuggestedPresentationDelay(integer $SuggestedPresentationDelay) Set The time from the latest live broadcast time point when the player starts broadcasting is a rollback amount (in seconds). [2, 60], type: integer, default value 10.
 */
class DashManifestInfo extends AbstractModel
{
    /**
     * @var integer The total duration of each manifest in seconds. [30, 3600], type: integer, default value 60.
     */
    public $Windows;

    /**
     * @var integer The minimum cache time (in seconds) that the player keeps in the buffer. [2, 60], type: integer, default value 30.
     */
    public $MinBufferTime;

    /**
     * @var integer The minimum time (in seconds) that the player should wait before requesting an update to the manifest. [2, 60], type: integer, default value 2.
     */
    public $MinUpdatePeriod;

    /**
     * @var integer The time from the latest live broadcast time point when the player starts broadcasting is a rollback amount (in seconds). [2, 60], type: integer, default value 10.
     */
    public $SuggestedPresentationDelay;

    /**
     * @param integer $Windows The total duration of each manifest in seconds. [30, 3600], type: integer, default value 60.
     * @param integer $MinBufferTime The minimum cache time (in seconds) that the player keeps in the buffer. [2, 60], type: integer, default value 30.
     * @param integer $MinUpdatePeriod The minimum time (in seconds) that the player should wait before requesting an update to the manifest. [2, 60], type: integer, default value 2.
     * @param integer $SuggestedPresentationDelay The time from the latest live broadcast time point when the player starts broadcasting is a rollback amount (in seconds). [2, 60], type: integer, default value 10.
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("MinBufferTime",$param) and $param["MinBufferTime"] !== null) {
            $this->MinBufferTime = $param["MinBufferTime"];
        }

        if (array_key_exists("MinUpdatePeriod",$param) and $param["MinUpdatePeriod"] !== null) {
            $this->MinUpdatePeriod = $param["MinUpdatePeriod"];
        }

        if (array_key_exists("SuggestedPresentationDelay",$param) and $param["SuggestedPresentationDelay"] !== null) {
            $this->SuggestedPresentationDelay = $param["SuggestedPresentationDelay"];
        }
    }
}
