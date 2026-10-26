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
 * CreateVideoSnapshotConfig request structure.
 *
 * @method string getName() Obtain <p>Screenshot configuration name</p><p>Input parameter limits: Chinese, English, digits, "-", "_", length not exceeding 128 characters</p>
 * @method void setName(string $Name) Set <p>Screenshot configuration name</p><p>Input parameter limits: Chinese, English, digits, "-", "_", length not exceeding 128 characters</p>
 * @method string getTemplateId() Obtain <p>Screenshot template Id</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Screenshot template Id</p>
 * @method integer getFileExpires() Obtain <p>Hot storage days for image files</p><p>Enumeration values:</p><ul><li>7: 7 days</li><li>15: 15 days</li><li>30: 30 days</li><li>60: 60 days</li><li>90: 90 days</li><li>180: 180 days</li><li>270: 270 days</li><li>360: 360 days</li><li>540: 540 days</li><li>720: 720 days</li><li>900: 900 days</li><li>1080: 1080 days</li></ul>
 * @method void setFileExpires(integer $FileExpires) Set <p>Hot storage days for image files</p><p>Enumeration values:</p><ul><li>7: 7 days</li><li>15: 15 days</li><li>30: 30 days</li><li>60: 60 days</li><li>90: 90 days</li><li>180: 180 days</li><li>270: 270 days</li><li>360: 360 days</li><li>540: 540 days</li><li>720: 720 days</li><li>900: 900 days</li><li>1080: 1080 days</li></ul>
 * @method CallbackURL getCallback() Obtain <p>Screenshot result callback URL</p>
 * @method void setCallback(CallbackURL $Callback) Set <p>Screenshot result callback URL</p>
 */
class CreateVideoSnapshotConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Screenshot configuration name</p><p>Input parameter limits: Chinese, English, digits, "-", "_", length not exceeding 128 characters</p>
     */
    public $Name;

    /**
     * @var string <p>Screenshot template Id</p>
     */
    public $TemplateId;

    /**
     * @var integer <p>Hot storage days for image files</p><p>Enumeration values:</p><ul><li>7: 7 days</li><li>15: 15 days</li><li>30: 30 days</li><li>60: 60 days</li><li>90: 90 days</li><li>180: 180 days</li><li>270: 270 days</li><li>360: 360 days</li><li>540: 540 days</li><li>720: 720 days</li><li>900: 900 days</li><li>1080: 1080 days</li></ul>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>Screenshot result callback URL</p>
     */
    public $Callback;

    /**
     * @param string $Name <p>Screenshot configuration name</p><p>Input parameter limits: Chinese, English, digits, "-", "_", length not exceeding 128 characters</p>
     * @param string $TemplateId <p>Screenshot template Id</p>
     * @param integer $FileExpires <p>Hot storage days for image files</p><p>Enumeration values:</p><ul><li>7: 7 days</li><li>15: 15 days</li><li>30: 30 days</li><li>60: 60 days</li><li>90: 90 days</li><li>180: 180 days</li><li>270: 270 days</li><li>360: 360 days</li><li>540: 540 days</li><li>720: 720 days</li><li>900: 900 days</li><li>1080: 1080 days</li></ul>
     * @param CallbackURL $Callback <p>Screenshot result callback URL</p>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }
    }
}
