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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Screenshot configuration message
 *
 * @method string getConfigId() Obtain <p>Screenshot configuration Id</p>
 * @method void setConfigId(string $ConfigId) Set <p>Screenshot configuration Id</p>
 * @method string getTemplateId() Obtain <p>Screenshot template Id</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Screenshot template Id</p>
 * @method string getName() Obtain <p>Screenshot configuration name</p>
 * @method void setName(string $Name) Set <p>Screenshot configuration name</p>
 * @method integer getType() Obtain <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method void setType(integer $Type) Set <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method integer getFileExpires() Obtain <p>Image storage days</p><p>Unit: days</p>
 * @method void setFileExpires(integer $FileExpires) Set <p>Image storage days</p><p>Unit: days</p>
 * @method CallbackURL getCallback() Obtain <p>Callback configuration</p>
 * @method void setCallback(CallbackURL $Callback) Set <p>Callback configuration</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Last update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last update time</p>
 */
class VideoSnapshotConfigInfo extends AbstractModel
{
    /**
     * @var string <p>Screenshot configuration Id</p>
     */
    public $ConfigId;

    /**
     * @var string <p>Screenshot template Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Screenshot configuration name</p>
     */
    public $Name;

    /**
     * @var integer <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Image storage days</p><p>Unit: days</p>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>Callback configuration</p>
     */
    public $Callback;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last update time</p>
     */
    public $UpdateTime;

    /**
     * @param string $ConfigId <p>Screenshot configuration Id</p>
     * @param string $TemplateId <p>Screenshot template Id</p>
     * @param string $Name <p>Screenshot configuration name</p>
     * @param integer $Type <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     * @param integer $FileExpires <p>Image storage days</p><p>Unit: days</p>
     * @param CallbackURL $Callback <p>Callback configuration</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Last update time</p>
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
