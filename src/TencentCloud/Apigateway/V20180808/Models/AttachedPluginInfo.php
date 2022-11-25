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
 * Information of bound plug-ins
 *
 * @method string getPluginId() Obtain Plugin ID
 * @method void setPluginId(string $PluginId) Set Plugin ID
 * @method string getEnvironment() Obtain Environment information
 * @method void setEnvironment(string $Environment) Set Environment information
 * @method string getAttachedTime() Obtain Binding time
 * @method void setAttachedTime(string $AttachedTime) Set Binding time
 * @method string getPluginName() Obtain Plugin name
 * @method void setPluginName(string $PluginName) Set Plugin name
 * @method string getPluginType() Obtain Plugin type
 * @method void setPluginType(string $PluginType) Set Plugin type
 * @method string getDescription() Obtain Plugin description
 * @method void setDescription(string $Description) Set Plugin description
 * @method string getPluginData() Obtain Plugin definition statement
 * @method void setPluginData(string $PluginData) Set Plugin definition statement
 */
class AttachedPluginInfo extends AbstractModel
{
    /**
     * @var string Plugin ID
     */
    public $PluginId;

    /**
     * @var string Environment information
     */
    public $Environment;

    /**
     * @var string Binding time
     */
    public $AttachedTime;

    /**
     * @var string Plugin name
     */
    public $PluginName;

    /**
     * @var string Plugin type
     */
    public $PluginType;

    /**
     * @var string Plugin description
     */
    public $Description;

    /**
     * @var string Plugin definition statement
     */
    public $PluginData;

    /**
     * @param string $PluginId Plugin ID
     * @param string $Environment Environment information
     * @param string $AttachedTime Binding time
     * @param string $PluginName Plugin name
     * @param string $PluginType Plugin type
     * @param string $Description Plugin description
     * @param string $PluginData Plugin definition statement
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

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }
    }
}
