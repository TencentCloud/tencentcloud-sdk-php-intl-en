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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database engine information
 *
 * @method string getType() Obtain <p>Engine type</p>
 * @method void setType(string $Type) Set <p>Engine type</p>
 * @method string getVersion() Obtain <p>Engine version</p>
 * @method void setVersion(string $Version) Set <p>Engine version</p>
 * @method string getName() Obtain <p>Engine name</p>
 * @method void setName(string $Name) Set <p>Engine name</p>
 * @method string getDescription() Obtain <p>Engine description</p>
 * @method void setDescription(string $Description) Set <p>Engine description</p>
 * @method boolean getNew() Obtain <p>Whether it is the latest version</p>
 * @method void setNew(boolean $New) Set <p>Whether it is the latest version</p>
 * @method array getSQLMode() Obtain <p>Supported compatible modes, separated by commas</p>
 * @method void setSQLMode(array $SQLMode) Set <p>Supported compatible modes, separated by commas</p>
 * @method boolean getIsSupportParamTemplate() Obtain <p>Whether parameter template is supported</p>
 * @method void setIsSupportParamTemplate(boolean $IsSupportParamTemplate) Set <p>Whether parameter template is supported</p>
 * @method boolean getIsSupportServerless() Obtain <p>Whether Serverless mode is supported</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) Set <p>Whether Serverless mode is supported</p>
 */
class DBEngineInfo extends AbstractModel
{
    /**
     * @var string <p>Engine type</p>
     */
    public $Type;

    /**
     * @var string <p>Engine version</p>
     */
    public $Version;

    /**
     * @var string <p>Engine name</p>
     */
    public $Name;

    /**
     * @var string <p>Engine description</p>
     */
    public $Description;

    /**
     * @var boolean <p>Whether it is the latest version</p>
     */
    public $New;

    /**
     * @var array <p>Supported compatible modes, separated by commas</p>
     */
    public $SQLMode;

    /**
     * @var boolean <p>Whether parameter template is supported</p>
     */
    public $IsSupportParamTemplate;

    /**
     * @var boolean <p>Whether Serverless mode is supported</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Type <p>Engine type</p>
     * @param string $Version <p>Engine version</p>
     * @param string $Name <p>Engine name</p>
     * @param string $Description <p>Engine description</p>
     * @param boolean $New <p>Whether it is the latest version</p>
     * @param array $SQLMode <p>Supported compatible modes, separated by commas</p>
     * @param boolean $IsSupportParamTemplate <p>Whether parameter template is supported</p>
     * @param boolean $IsSupportServerless <p>Whether Serverless mode is supported</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("New",$param) and $param["New"] !== null) {
            $this->New = $param["New"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("IsSupportParamTemplate",$param) and $param["IsSupportParamTemplate"] !== null) {
            $this->IsSupportParamTemplate = $param["IsSupportParamTemplate"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
