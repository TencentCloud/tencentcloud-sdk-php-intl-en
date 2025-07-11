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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLivePadTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name. Maximum length: 255 bytes. Only Chinese, English, numbers, _, and - are supported.
 * @method void setTemplateName(string $TemplateName) Set Template name. Maximum length: 255 bytes. Only Chinese, English, numbers, _, and - are supported.
 * @method string getUrl() Obtain Gasket content.
 * @method void setUrl(string $Url) Set Gasket content.
 * @method string getDescription() Obtain Description information. Maximum length: 1024 bytes. Only Chinese, English, numbers, _, and - are supported.
 * @method void setDescription(string $Description) Set Description information. Maximum length: 1024 bytes. Only Chinese, English, numbers, _, and - are supported.
 * @method integer getWaitDuration() Obtain The waiting time for disconnection. Value range: 0-30000. Unit: ms.
 * @method void setWaitDuration(integer $WaitDuration) Set The waiting time for disconnection. Value range: 0-30000. Unit: ms.
 * @method integer getMaxDuration() Obtain Maximum shim duration. Value range: 0 - positive infinity. Unit: ms.
 * @method void setMaxDuration(integer $MaxDuration) Set Maximum shim duration. Value range: 0 - positive infinity. Unit: ms.
 * @method integer getType() Obtain Shim content type: 1: image, 2: video. Default value: 1.
 * @method void setType(integer $Type) Set Shim content type: 1: image, 2: video. Default value: 1.
 */
class CreateLivePadTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name. Maximum length: 255 bytes. Only Chinese, English, numbers, _, and - are supported.
     */
    public $TemplateName;

    /**
     * @var string Gasket content.
     */
    public $Url;

    /**
     * @var string Description information. Maximum length: 1024 bytes. Only Chinese, English, numbers, _, and - are supported.
     */
    public $Description;

    /**
     * @var integer The waiting time for disconnection. Value range: 0-30000. Unit: ms.
     */
    public $WaitDuration;

    /**
     * @var integer Maximum shim duration. Value range: 0 - positive infinity. Unit: ms.
     */
    public $MaxDuration;

    /**
     * @var integer Shim content type: 1: image, 2: video. Default value: 1.
     */
    public $Type;

    /**
     * @param string $TemplateName Template name. Maximum length: 255 bytes. Only Chinese, English, numbers, _, and - are supported.
     * @param string $Url Gasket content.
     * @param string $Description Description information. Maximum length: 1024 bytes. Only Chinese, English, numbers, _, and - are supported.
     * @param integer $WaitDuration The waiting time for disconnection. Value range: 0-30000. Unit: ms.
     * @param integer $MaxDuration Maximum shim duration. Value range: 0 - positive infinity. Unit: ms.
     * @param integer $Type Shim content type: 1: image, 2: video. Default value: 1.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WaitDuration",$param) and $param["WaitDuration"] !== null) {
            $this->WaitDuration = $param["WaitDuration"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
