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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject request structure.
 *
 * @method string getName() Obtain Name of the created project (required and up to 200 characters)
 * @method void setName(string $Name) Set Name of the created project (required and up to 200 characters)
 * @method string getInstanceID() Obtain Business system ID
 * @method void setInstanceID(string $InstanceID) Set Business system ID
 * @method string getRate() Obtain Project sampling rate (greater than or equal to 0)
 * @method void setRate(string $Rate) Set Project sampling rate (greater than or equal to 0)
 * @method integer getEnableURLGroup() Obtain Whether to enable aggregation
 * @method void setEnableURLGroup(integer $EnableURLGroup) Set Whether to enable aggregation
 * @method string getType() Obtain Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method void setType(string $Type) Set Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method string getRepo() Obtain Repository address of the project (optional and up to 256 characters)
 * @method void setRepo(string $Repo) Set Repository address of the project (optional and up to 256 characters)
 * @method string getURL() Obtain Webpage address of the project (optional and up to 256 characters)
 * @method void setURL(string $URL) Set Webpage address of the project (optional and up to 256 characters)
 * @method string getDesc() Obtain Description of the created project (optional and up to 1,000 characters)
 * @method void setDesc(string $Desc) Set Description of the created project (optional and up to 1,000 characters)
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string Name of the created project (required and up to 200 characters)
     */
    public $Name;

    /**
     * @var string Business system ID
     */
    public $InstanceID;

    /**
     * @var string Project sampling rate (greater than or equal to 0)
     */
    public $Rate;

    /**
     * @var integer Whether to enable aggregation
     */
    public $EnableURLGroup;

    /**
     * @var string Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     */
    public $Type;

    /**
     * @var string Repository address of the project (optional and up to 256 characters)
     */
    public $Repo;

    /**
     * @var string Webpage address of the project (optional and up to 256 characters)
     */
    public $URL;

    /**
     * @var string Description of the created project (optional and up to 1,000 characters)
     */
    public $Desc;

    /**
     * @param string $Name Name of the created project (required and up to 200 characters)
     * @param string $InstanceID Business system ID
     * @param string $Rate Project sampling rate (greater than or equal to 0)
     * @param integer $EnableURLGroup Whether to enable aggregation
     * @param string $Type Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     * @param string $Repo Repository address of the project (optional and up to 256 characters)
     * @param string $URL Webpage address of the project (optional and up to 256 characters)
     * @param string $Desc Description of the created project (optional and up to 1,000 characters)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("EnableURLGroup",$param) and $param["EnableURLGroup"] !== null) {
            $this->EnableURLGroup = $param["EnableURLGroup"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
