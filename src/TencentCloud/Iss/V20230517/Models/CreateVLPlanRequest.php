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
 * CreateVLPlan request structure.
 *
 * @method string getName() Obtain <p>Plan name. Supports Chinese, English, digits, _ and -. Up to 32 characters.</p>
 * @method void setName(string $Name) Set <p>Plan name. Supports Chinese, English, digits, _ and -. Up to 32 characters.</p>
 * @method string getVLTemplateId() Obtain <p>ID of the associated visual understanding template</p>
 * @method void setVLTemplateId(string $VLTemplateId) Set <p>ID of the associated visual understanding template</p>
 * @method string getDescribe() Obtain <p>Plan description. Up to 256 characters.</p>
 * @method void setDescribe(string $Describe) Set <p>Plan description. Up to 256 characters.</p>
 * @method integer getFileExpires() Obtain <p>Number of days to store screenshot files. Value range: [7, 1080]. Required in image mode. Do not pass this parameter in video mode.</p>
 * @method void setFileExpires(integer $FileExpires) Set <p>Number of days to store screenshot files. Value range: [7, 1080]. Required in image mode. Do not pass this parameter in video mode.</p>
 * @method CallbackURL getCallback() Obtain <p>Callback notification configuration</p>
 * @method void setCallback(CallbackURL $Callback) Set <p>Callback notification configuration</p>
 */
class CreateVLPlanRequest extends AbstractModel
{
    /**
     * @var string <p>Plan name. Supports Chinese, English, digits, _ and -. Up to 32 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>ID of the associated visual understanding template</p>
     */
    public $VLTemplateId;

    /**
     * @var string <p>Plan description. Up to 256 characters.</p>
     */
    public $Describe;

    /**
     * @var integer <p>Number of days to store screenshot files. Value range: [7, 1080]. Required in image mode. Do not pass this parameter in video mode.</p>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>Callback notification configuration</p>
     */
    public $Callback;

    /**
     * @param string $Name <p>Plan name. Supports Chinese, English, digits, _ and -. Up to 32 characters.</p>
     * @param string $VLTemplateId <p>ID of the associated visual understanding template</p>
     * @param string $Describe <p>Plan description. Up to 256 characters.</p>
     * @param integer $FileExpires <p>Number of days to store screenshot files. Value range: [7, 1080]. Required in image mode. Do not pass this parameter in video mode.</p>
     * @param CallbackURL $Callback <p>Callback notification configuration</p>
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

        if (array_key_exists("VLTemplateId",$param) and $param["VLTemplateId"] !== null) {
            $this->VLTemplateId = $param["VLTemplateId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
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
