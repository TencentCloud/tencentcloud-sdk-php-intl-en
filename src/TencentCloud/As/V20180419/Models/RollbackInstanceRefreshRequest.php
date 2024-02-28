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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackInstanceRefresh request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID.
 * @method RefreshSettings getRefreshSettings() Obtain Refresh settings.
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) Set Refresh settings.
 * @method string getOriginRefreshActivityId() Obtain Original refresh activity ID.
 * @method void setOriginRefreshActivityId(string $OriginRefreshActivityId) Set Original refresh activity ID.
 * @method string getRefreshMode() Obtain Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
 * @method void setRefreshMode(string $RefreshMode) Set Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
 */
class RollbackInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var RefreshSettings Refresh settings.
     */
    public $RefreshSettings;

    /**
     * @var string Original refresh activity ID.
     */
    public $OriginRefreshActivityId;

    /**
     * @var string Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
     */
    public $RefreshMode;

    /**
     * @param string $AutoScalingGroupId Scaling group ID.
     * @param RefreshSettings $RefreshSettings Refresh settings.
     * @param string $OriginRefreshActivityId Original refresh activity ID.
     * @param string $RefreshMode Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("RefreshSettings",$param) and $param["RefreshSettings"] !== null) {
            $this->RefreshSettings = new RefreshSettings();
            $this->RefreshSettings->deserialize($param["RefreshSettings"]);
        }

        if (array_key_exists("OriginRefreshActivityId",$param) and $param["OriginRefreshActivityId"] !== null) {
            $this->OriginRefreshActivityId = $param["OriginRefreshActivityId"];
        }

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }
    }
}
