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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationVersion request structure.
 *
 * @method string getApplicationId() Obtain Application ID.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
 * @method string getApplicationFileName() Obtain Application file name (desktop applications should be files in zip/rar/7z format, and mobile applications should be files in apk format).
 * @method void setApplicationFileName(string $ApplicationFileName) Set Application file name (desktop applications should be files in zip/rar/7z format, and mobile applications should be files in apk format).
 * @method array getApplicationVersionRegions() Obtain Region for application version distribution.
 * @method void setApplicationVersionRegions(array $ApplicationVersionRegions) Set Region for application version distribution.
 * @method string getApplicationVersionUpdateMode() Obtain Application update method.
 * @method void setApplicationVersionUpdateMode(string $ApplicationVersionUpdateMode) Set Application update method.
 */
class CreateApplicationVersionRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ApplicationId;

    /**
     * @var string Application file name (desktop applications should be files in zip/rar/7z format, and mobile applications should be files in apk format).
     */
    public $ApplicationFileName;

    /**
     * @var array Region for application version distribution.
     */
    public $ApplicationVersionRegions;

    /**
     * @var string Application update method.
     */
    public $ApplicationVersionUpdateMode;

    /**
     * @param string $ApplicationId Application ID.
     * @param string $ApplicationFileName Application file name (desktop applications should be files in zip/rar/7z format, and mobile applications should be files in apk format).
     * @param array $ApplicationVersionRegions Region for application version distribution.
     * @param string $ApplicationVersionUpdateMode Application update method.
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

        if (array_key_exists("ApplicationFileName",$param) and $param["ApplicationFileName"] !== null) {
            $this->ApplicationFileName = $param["ApplicationFileName"];
        }

        if (array_key_exists("ApplicationVersionRegions",$param) and $param["ApplicationVersionRegions"] !== null) {
            $this->ApplicationVersionRegions = $param["ApplicationVersionRegions"];
        }

        if (array_key_exists("ApplicationVersionUpdateMode",$param) and $param["ApplicationVersionUpdateMode"] !== null) {
            $this->ApplicationVersionUpdateMode = $param["ApplicationVersionUpdateMode"];
        }
    }
}
