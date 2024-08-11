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
 * Mini program associated application information
 *
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationAndUrl() Obtain Android URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationAndUrl(string $ApplicationAndUrl) Set Android URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationIOSUrl() Obtain iOS URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationIOSUrl(string $ApplicationIOSUrl) Set iOS URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationIcon() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationIcon(string $ApplicationIcon) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShowCaseRelAppInfo extends AbstractModel
{
    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Android URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationAndUrl;

    /**
     * @var string iOS URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationIOSUrl;

    /**
     * @var string Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationIcon;

    /**
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationAndUrl Android URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationIOSUrl iOS URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationIcon Application icon
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationAndUrl",$param) and $param["ApplicationAndUrl"] !== null) {
            $this->ApplicationAndUrl = $param["ApplicationAndUrl"];
        }

        if (array_key_exists("ApplicationIOSUrl",$param) and $param["ApplicationIOSUrl"] !== null) {
            $this->ApplicationIOSUrl = $param["ApplicationIOSUrl"];
        }

        if (array_key_exists("ApplicationIcon",$param) and $param["ApplicationIcon"] !== null) {
            $this->ApplicationIcon = $param["ApplicationIcon"];
        }
    }
}
