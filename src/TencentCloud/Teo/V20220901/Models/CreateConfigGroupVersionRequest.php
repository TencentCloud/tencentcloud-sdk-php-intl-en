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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfigGroupVersion request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGroupId() Obtain GroupId of the version to be created.
 * @method void setGroupId(string $GroupId) Set GroupId of the version to be created.
 * @method string getContent() Obtain Configuration content to be imported. It is required to be in JSON format and encoded in UTF-8. Please refer to the example below for the configuration file content.
 * @method void setContent(string $Content) Set Configuration content to be imported. It is required to be in JSON format and encoded in UTF-8. Please refer to the example below for the configuration file content.
 * @method string getDescription() Obtain Version description. The maximum length allowed is 50 characters. This field can be used to provide details about the application scenarios of this version.
 * @method void setDescription(string $Description) Set Version description. The maximum length allowed is 50 characters. This field can be used to provide details about the application scenarios of this version.
 */
class CreateConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string GroupId of the version to be created.
     */
    public $GroupId;

    /**
     * @var string Configuration content to be imported. It is required to be in JSON format and encoded in UTF-8. Please refer to the example below for the configuration file content.
     */
    public $Content;

    /**
     * @var string Version description. The maximum length allowed is 50 characters. This field can be used to provide details about the application scenarios of this version.
     */
    public $Description;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GroupId GroupId of the version to be created.
     * @param string $Content Configuration content to be imported. It is required to be in JSON format and encoded in UTF-8. Please refer to the example below for the configuration file content.
     * @param string $Description Version description. The maximum length allowed is 50 characters. This field can be used to provide details about the application scenarios of this version.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
