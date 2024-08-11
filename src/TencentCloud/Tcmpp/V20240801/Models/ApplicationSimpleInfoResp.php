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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Simple information of the application
 *
 * @method string getApplicationID() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationID(string $ApplicationID) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppIdentityID() Obtain Product ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppIdentityID(integer $AppIdentityID) Set Product ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplicationSimpleInfoResp extends AbstractModel
{
    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationID;

    /**
     * @var integer Product ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppIdentityID;

    /**
     * @var string The application name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @param string $ApplicationID Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppIdentityID Product ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName The application name.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationID",$param) and $param["ApplicationID"] !== null) {
            $this->ApplicationID = $param["ApplicationID"];
        }

        if (array_key_exists("AppIdentityID",$param) and $param["AppIdentityID"] !== null) {
            $this->AppIdentityID = $param["AppIdentityID"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }
    }
}
