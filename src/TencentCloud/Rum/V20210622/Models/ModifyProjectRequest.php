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
 * ModifyProject request structure.
 *
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getName() Obtain Project name (optional, not empty, and up to 200 characters)
 * @method void setName(string $Name) Set Project name (optional, not empty, and up to 200 characters)
 * @method string getURL() Obtain Project webpage URL (optional and up to 256 characters)
 * @method void setURL(string $URL) Set Project webpage URL (optional and up to 256 characters)
 * @method string getRepo() Obtain Project repository address (optional and up to 256 characters)
 * @method void setRepo(string $Repo) Set Project repository address (optional and up to 256 characters)
 * @method string getInstanceID() Obtain ID of the instance to which to move the project (optional)
 * @method void setInstanceID(string $InstanceID) Set ID of the instance to which to move the project (optional)
 * @method string getRate() Obtain Project sample rate (optional)
 * @method void setRate(string $Rate) Set Project sample rate (optional)
 * @method integer getEnableURLGroup() Obtain Whether to enable aggregation (optional)
 * @method void setEnableURLGroup(integer $EnableURLGroup) Set Whether to enable aggregation (optional)
 * @method string getType() Obtain Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method void setType(string $Type) Set Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method string getDesc() Obtain Project description (optional and up to 1,000 characters)
 * @method void setDesc(string $Desc) Set Project description (optional and up to 1,000 characters)
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Project name (optional, not empty, and up to 200 characters)
     */
    public $Name;

    /**
     * @var string Project webpage URL (optional and up to 256 characters)
     */
    public $URL;

    /**
     * @var string Project repository address (optional and up to 256 characters)
     */
    public $Repo;

    /**
     * @var string ID of the instance to which to move the project (optional)
     */
    public $InstanceID;

    /**
     * @var string Project sample rate (optional)
     */
    public $Rate;

    /**
     * @var integer Whether to enable aggregation (optional)
     */
    public $EnableURLGroup;

    /**
     * @var string Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     */
    public $Type;

    /**
     * @var string Project description (optional and up to 1,000 characters)
     */
    public $Desc;

    /**
     * @param integer $ID Project ID
     * @param string $Name Project name (optional, not empty, and up to 200 characters)
     * @param string $URL Project webpage URL (optional and up to 256 characters)
     * @param string $Repo Project repository address (optional and up to 256 characters)
     * @param string $InstanceID ID of the instance to which to move the project (optional)
     * @param string $Rate Project sample rate (optional)
     * @param integer $EnableURLGroup Whether to enable aggregation (optional)
     * @param string $Type Project type (valid values: "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     * @param string $Desc Project description (optional and up to 1,000 characters)
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
