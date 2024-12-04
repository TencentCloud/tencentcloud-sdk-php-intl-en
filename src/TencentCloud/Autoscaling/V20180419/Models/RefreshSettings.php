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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance refresh settings.
 *
 * @method RollingUpdateSettings getRollingUpdateSettings() Obtain Rolling update settings parameters. RefreshMode is the rolling update. This parameter must be filled in.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRollingUpdateSettings(RollingUpdateSettings $RollingUpdateSettings) Set Rolling update settings parameters. RefreshMode is the rolling update. This parameter must be filled in.Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getCheckInstanceTargetHealth() Obtain Whether to enable the backend service health check for the instance. Default value: FALSE. This parameter is valid only for the scaling group bound to an application-based CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
 * @method void setCheckInstanceTargetHealth(boolean $CheckInstanceTargetHealth) Set Whether to enable the backend service health check for the instance. Default value: FALSE. This parameter is valid only for the scaling group bound to an application-based CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
 */
class RefreshSettings extends AbstractModel
{
    /**
     * @var RollingUpdateSettings Rolling update settings parameters. RefreshMode is the rolling update. This parameter must be filled in.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RollingUpdateSettings;

    /**
     * @var boolean Whether to enable the backend service health check for the instance. Default value: FALSE. This parameter is valid only for the scaling group bound to an application-based CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
     */
    public $CheckInstanceTargetHealth;

    /**
     * @param RollingUpdateSettings $RollingUpdateSettings Rolling update settings parameters. RefreshMode is the rolling update. This parameter must be filled in.Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $CheckInstanceTargetHealth Whether to enable the backend service health check for the instance. Default value: FALSE. This parameter is valid only for the scaling group bound to an application-based CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
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
        if (array_key_exists("RollingUpdateSettings",$param) and $param["RollingUpdateSettings"] !== null) {
            $this->RollingUpdateSettings = new RollingUpdateSettings();
            $this->RollingUpdateSettings->deserialize($param["RollingUpdateSettings"]);
        }

        if (array_key_exists("CheckInstanceTargetHealth",$param) and $param["CheckInstanceTargetHealth"] !== null) {
            $this->CheckInstanceTargetHealth = $param["CheckInstanceTargetHealth"];
        }
    }
}
