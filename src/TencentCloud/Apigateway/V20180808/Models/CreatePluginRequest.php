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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePlugin request structure.
 *
 * @method string getPluginName() Obtain Custom plugin name. A plugin name contain up to 50 characters out of a-z, A-Z, 0-9, and _, which must begin with a letter and end with a letter or a number.
 * @method void setPluginName(string $PluginName) Set Custom plugin name. A plugin name contain up to 50 characters out of a-z, A-Z, 0-9, and _, which must begin with a letter and end with a letter or a number.
 * @method string getPluginType() Obtain Plugin type. Valid value: `IPControl`.
 * @method void setPluginType(string $PluginType) Set Plugin type. Valid value: `IPControl`.
 * @method string getPluginData() Obtain Plugin definition statement in json format
 * @method void setPluginData(string $PluginData) Set Plugin definition statement in json format
 * @method string getDescription() Obtain Plugin description within 200 characters
 * @method void setDescription(string $Description) Set Plugin description within 200 characters
 */
class CreatePluginRequest extends AbstractModel
{
    /**
     * @var string Custom plugin name. A plugin name contain up to 50 characters out of a-z, A-Z, 0-9, and _, which must begin with a letter and end with a letter or a number.
     */
    public $PluginName;

    /**
     * @var string Plugin type. Valid value: `IPControl`.
     */
    public $PluginType;

    /**
     * @var string Plugin definition statement in json format
     */
    public $PluginData;

    /**
     * @var string Plugin description within 200 characters
     */
    public $Description;

    /**
     * @param string $PluginName Custom plugin name. A plugin name contain up to 50 characters out of a-z, A-Z, 0-9, and _, which must begin with a letter and end with a letter or a number.
     * @param string $PluginType Plugin type. Valid value: `IPControl`.
     * @param string $PluginData Plugin definition statement in json format
     * @param string $Description Plugin description within 200 characters
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
        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
