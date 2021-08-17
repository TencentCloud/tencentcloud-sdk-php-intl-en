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
 * ModifyPlugin request structure.
 *
 * @method string getPluginId() Obtain ID of the plugin to be modified
 * @method void setPluginId(string $PluginId) Set ID of the plugin to be modified
 * @method string getPluginName() Obtain Plugin name to be modified. A plugin name can contain up to 50 characters out of `a-z`, `A-Z`, `0-9`, and `_`, which must begin with a letter and end with a letter or a number.
 * @method void setPluginName(string $PluginName) Set Plugin name to be modified. A plugin name can contain up to 50 characters out of `a-z`, `A-Z`, `0-9`, and `_`, which must begin with a letter and end with a letter or a number.
 * @method string getDescription() Obtain Plugin description to be modified. A description is within 200 characters.
 * @method void setDescription(string $Description) Set Plugin description to be modified. A description is within 200 characters.
 * @method string getPluginData() Obtain Plugin definition statement to be modified. The json format is supported.
 * @method void setPluginData(string $PluginData) Set Plugin definition statement to be modified. The json format is supported.
 */
class ModifyPluginRequest extends AbstractModel
{
    /**
     * @var string ID of the plugin to be modified
     */
    public $PluginId;

    /**
     * @var string Plugin name to be modified. A plugin name can contain up to 50 characters out of `a-z`, `A-Z`, `0-9`, and `_`, which must begin with a letter and end with a letter or a number.
     */
    public $PluginName;

    /**
     * @var string Plugin description to be modified. A description is within 200 characters.
     */
    public $Description;

    /**
     * @var string Plugin definition statement to be modified. The json format is supported.
     */
    public $PluginData;

    /**
     * @param string $PluginId ID of the plugin to be modified
     * @param string $PluginName Plugin name to be modified. A plugin name can contain up to 50 characters out of `a-z`, `A-Z`, `0-9`, and `_`, which must begin with a letter and end with a letter or a number.
     * @param string $Description Plugin description to be modified. A description is within 200 characters.
     * @param string $PluginData Plugin definition statement to be modified. The json format is supported.
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }
    }
}
