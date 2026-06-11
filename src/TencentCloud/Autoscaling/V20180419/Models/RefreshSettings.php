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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance refresh settings.
 *
 * @method RollingUpdateSettings getRollingUpdateSettings() Obtain Rolling update settings. This parameter group must be configured if the RefreshMode parameter starts with ROLLING_UPDATE(e.g., ROLLING_UPDATE_RESET).
 * @method void setRollingUpdateSettings(RollingUpdateSettings $RollingUpdateSettings) Set Rolling update settings. This parameter group must be configured if the RefreshMode parameter starts with ROLLING_UPDATE(e.g., ROLLING_UPDATE_RESET).
 * @method boolean getCheckInstanceTargetHealth() Obtain Whether to enable the backend service health check for the instance. Default value: FALSE. 
This parameter is valid only for the scaling group bound to CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
 * @method void setCheckInstanceTargetHealth(boolean $CheckInstanceTargetHealth) Set Whether to enable the backend service health check for the instance. Default value: FALSE. 
This parameter is valid only for the scaling group bound to CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
 * @method integer getCheckInstanceTargetHealthTimeout() Obtain Specifies the timeout period for instance backend service health check, in seconds. 
Value range: [60,7200]. Default value: 1800 seconds. 
This parameter takes effect only when the CheckInstanceTargetHealth parameter is enabled.  If an instance health check times out, the instance will be marked as a refresh failure.
 * @method void setCheckInstanceTargetHealthTimeout(integer $CheckInstanceTargetHealthTimeout) Set Specifies the timeout period for instance backend service health check, in seconds. 
Value range: [60,7200]. Default value: 1800 seconds. 
This parameter takes effect only when the CheckInstanceTargetHealth parameter is enabled.  If an instance health check times out, the instance will be marked as a refresh failure.
 */
class RefreshSettings extends AbstractModel
{
    /**
     * @var RollingUpdateSettings Rolling update settings. This parameter group must be configured if the RefreshMode parameter starts with ROLLING_UPDATE(e.g., ROLLING_UPDATE_RESET).
     */
    public $RollingUpdateSettings;

    /**
     * @var boolean Whether to enable the backend service health check for the instance. Default value: FALSE. 
This parameter is valid only for the scaling group bound to CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
     */
    public $CheckInstanceTargetHealth;

    /**
     * @var integer Specifies the timeout period for instance backend service health check, in seconds. 
Value range: [60,7200]. Default value: 1800 seconds. 
This parameter takes effect only when the CheckInstanceTargetHealth parameter is enabled.  If an instance health check times out, the instance will be marked as a refresh failure.
     */
    public $CheckInstanceTargetHealthTimeout;

    /**
     * @param RollingUpdateSettings $RollingUpdateSettings Rolling update settings. This parameter group must be configured if the RefreshMode parameter starts with ROLLING_UPDATE(e.g., ROLLING_UPDATE_RESET).
     * @param boolean $CheckInstanceTargetHealth Whether to enable the backend service health check for the instance. Default value: FALSE. 
This parameter is valid only for the scaling group bound to CLB. After this feature is enabled, if the instance fails the check after refresh, the port weight of the CLB will be always 0, and it will be marked as a refresh failure. Valid values: <li>TRUE: enable;</li> <li>FALSE: disable.</li>
     * @param integer $CheckInstanceTargetHealthTimeout Specifies the timeout period for instance backend service health check, in seconds. 
Value range: [60,7200]. Default value: 1800 seconds. 
This parameter takes effect only when the CheckInstanceTargetHealth parameter is enabled.  If an instance health check times out, the instance will be marked as a refresh failure.
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

        if (array_key_exists("CheckInstanceTargetHealthTimeout",$param) and $param["CheckInstanceTargetHealthTimeout"] !== null) {
            $this->CheckInstanceTargetHealthTimeout = $param["CheckInstanceTargetHealthTimeout"];
        }
    }
}
